/*
   +----------------------------------------------------------------------+
   | HipHop for PHP                                                       |
   +----------------------------------------------------------------------+
   | Copyright (c) 2010-present Facebook, Inc. (http://www.facebook.com)  |
   +----------------------------------------------------------------------+
   | This source file is subject to version 3.01 of the PHP license,      |
   | that is bundled with this package in the file LICENSE, and is        |
   | available through the world-wide-web at the following url:           |
   | http://www.php.net/license/3_01.txt                                  |
   | If you did not receive a copy of the PHP license and are unable to   |
   | obtain it through the world-wide-web, please send a note to          |
   | license@php.net so we can mail you a copy immediately.               |
   +----------------------------------------------------------------------+
*/

#pragma once

#include "hphp/runtime/base/type-string.h"

#include <folly/File.h>
#include <folly/Optional.h>

#include <cstdint>
#include <cstddef>
#include <memory>
#include <pcre.h>

#define PREG_PATTERN_ORDER          1
#define PREG_SET_ORDER              2
#define PREG_OFFSET_CAPTURE         (1<<8)
#define PREG_FB_HACK_ARRAYS         (1<<30)
#define PREG_FB__PRIVATE__HSL_IMPL  (1<<29)

#define PREG_SPLIT_NO_EMPTY         (1<<0)
#define PREG_SPLIT_DELIM_CAPTURE    (1<<1)
#define PREG_SPLIT_OFFSET_CAPTURE   (1<<2)

#define PREG_REPLACE_EVAL           (1<<0)

#define PREG_GREP_INVERT            (1<<0)

enum {
  PHP_PCRE_NO_ERROR = 0,
  PHP_PCRE_INTERNAL_ERROR,
  PHP_PCRE_BACKTRACK_LIMIT_ERROR,
  PHP_PCRE_RECURSION_LIMIT_ERROR,
  PHP_PCRE_BAD_UTF8_ERROR,
  PHP_PCRE_BAD_UTF8_OFFSET_ERROR,
  PHP_PCRE_BAD_REGEX_ERROR
};

namespace HPHP {
///////////////////////////////////////////////////////////////////////////////

struct Array;
struct Variant;

struct pcre_literal_data {
  pcre_literal_data(const char* pattern, int coptions);

  bool isLiteral() const;
  bool matches(const StringData* subject, int pos, int* offsets) const;

  folly::Optional<std::string> literal_str;
  bool match_start{false};
  bool match_end{false};
  bool case_insensitive{false};
};

struct pcre_cache_entry {
  pcre_cache_entry() = default;
  ~pcre_cache_entry();

  pcre_cache_entry(const pcre_cache_entry&) = delete;
  pcre_cache_entry& operator=(const pcre_cache_entry&) = delete;

  pcre* re;
  pcre_extra* extra; // Holds results of studying
  int preg_options:1;
  int compile_options:31;
  int num_subpats;
  mutable std::atomic<char**> subpat_names{nullptr};
  std::unique_ptr<pcre_literal_data> literal_data;
};

struct PCREglobals {
  PCREglobals();
  ~PCREglobals();

  // pcre ini_settings
  int64_t preg_backtrace_limit;
  int64_t preg_recursion_limit;
  pcre_jit_stack* jit_stack;
};

///////////////////////////////////////////////////////////////////////////////
// Cache management

/*
 * Initialize PCRE cache.
 */
void pcre_init();

/*
 * Clear PCRE cache.  Not thread safe - call only after parsing options.
 */
void pcre_reinit();

/*
 * Clean up thread-local PCREs.
 */
void pcre_session_exit();

/*
 * Dump the contents of the PCRE cache to the given file.
 */
void pcre_dump_cache(folly::File& file);

///////////////////////////////////////////////////////////////////////////////
// PHP API

Variant preg_grep(const String& pattern, const Array& input, int flags = 0);

Variant preg_match(const String& pattern, const String& subject,
                   Variant* matches = nullptr,
                   int flags = 0, int offset = 0);

Variant preg_match(const StringData* pattern, const StringData* subject,
                   Variant* matches = nullptr,
                   int flags = 0, int offset = 0);

Variant preg_match_all(const String& pattern, const String& subject,
                       Variant* matches = nullptr,
                       int flags = 0, int offset = 0);

Variant preg_match_all(const StringData* pattern, const StringData* subject,
                       Variant* matches = nullptr,
                       int flags = 0, int offset = 0);

Variant preg_replace_impl(const Variant& pattern, const Variant& replacement,
                          const Variant& subject, int limit, int64_t* count,
                          bool is_callable, bool is_filter);
int preg_replace(Variant& result,
                 const Variant& pattern,
                 const Variant& replacement,
                 const Variant& subject,
                 int limit = -1);
int preg_replace_callback(Variant& result,
                          const Variant& pattern,
                          const Variant& callback,
                          const Variant& subject,
                          int limit = -1);

Variant preg_split(const String& pattern,
                   const String& subject,
                   int limit = -1,
                   int flags = 0);
String preg_quote(const String& str, const String& delimiter = null_string);
Variant php_split(const String& spliton, const String& str, int count,
                  bool icase);

int preg_last_error();

size_t preg_pcre_cache_size();

///////////////////////////////////////////////////////////////////////////////

struct PregWithErrorGuard {
  explicit PregWithErrorGuard(Variant& error_)
    : error(error_), prior_error(preg_last_error()) {}
  ~PregWithErrorGuard();

  Variant& error;
  int prior_error;
};

///////////////////////////////////////////////////////////////////////////////

}

