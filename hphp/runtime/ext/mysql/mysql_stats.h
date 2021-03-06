/*
   +----------------------------------------------------------------------+
   | HipHop for PHP                                                       |
   +----------------------------------------------------------------------+
   | Copyright (c) 2010-present Facebook, Inc. (http://www.facebook.com)  |
   | Copyright (c) 1997-2010 The PHP Group                                |
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

#include "hphp/util/hash-map.h"
#include "hphp/util/lock.h"
#include <memory>
#include <string>

namespace HPHP {
///////////////////////////////////////////////////////////////////////////////

struct MySqlStats {
  enum Verb {
    UNKNOWN,

    T_BEGIN,
    T_COMMIT,
    T_ROLLBACK,

    // transactional: statements inside begin/commit AND at least 2 statements
    X_INSERT,
    X_UPDATE,
    X_INCDEC,
    X_DELETE,
    X_REPLACE,
    X_SELECT,

    // transactional: statements inside begin/commit
    T_INSERT,
    T_UPDATE,
    T_INCDEC,
    T_DELETE,
    T_REPLACE,
    T_SELECT,

    // non-transactional
    N_INSERT,
    N_UPDATE,
    N_INCDEC,
    N_DELETE,
    N_REPLACE,
    N_SELECT,

    VERB_COUNT
  };

public:
  static void Record(const std::string &verb, int xactionCount = 0,
                     const std::string &table = "");
  static std::string ReportStats();

private:
  struct Stats {
    int actions[VERB_COUNT];
  };
  using StatsMap = hphp_string_map<std::shared_ptr<Stats>>;

  static bool s_inited;
  static hphp_string_map<Verb> s_verbs;
  static const char *s_verb_names[];

  static Mutex s_mutex;
  static StatsMap s_stats;

  static void Init();
  static Verb Translate(const std::string &verb, int xactionCount);
  static const char *Translate(Verb verb);
};

///////////////////////////////////////////////////////////////////////////////
}

