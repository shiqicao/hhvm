/**
 * Autogenerated by Thrift for /home/fbthrift/thrift/lib/thrift/metadata.thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
#pragma once

#include "thrift/lib/thrift/gen-cpp2/metadata_metadata.h"
#include <thrift/lib/cpp2/visitation/for_each.h>

namespace apache {
namespace thrift {
namespace detail {

template <>
struct ForEachField<::apache::thrift::metadata::ThriftListType> {
  template <typename F, typename... T>
  void operator()(FOLLY_MAYBE_UNUSED F&& f, FOLLY_MAYBE_UNUSED T&&... t) const {
    FOLLY_MAYBE_UNUSED constexpr auto get_metadata =
        get_field_metadata<::apache::thrift::metadata::ThriftListType>;

    f(get_metadata(0), static_cast<T&&>(t).valueType_ref()...);
  }
};

template <>
struct ForEachField<::apache::thrift::metadata::ThriftSetType> {
  template <typename F, typename... T>
  void operator()(FOLLY_MAYBE_UNUSED F&& f, FOLLY_MAYBE_UNUSED T&&... t) const {
    FOLLY_MAYBE_UNUSED constexpr auto get_metadata =
        get_field_metadata<::apache::thrift::metadata::ThriftSetType>;

    f(get_metadata(0), static_cast<T&&>(t).valueType_ref()...);
  }
};

template <>
struct ForEachField<::apache::thrift::metadata::ThriftMapType> {
  template <typename F, typename... T>
  void operator()(FOLLY_MAYBE_UNUSED F&& f, FOLLY_MAYBE_UNUSED T&&... t) const {
    FOLLY_MAYBE_UNUSED constexpr auto get_metadata =
        get_field_metadata<::apache::thrift::metadata::ThriftMapType>;

    f(get_metadata(0), static_cast<T&&>(t).keyType_ref()...);
    f(get_metadata(1), static_cast<T&&>(t).valueType_ref()...);
  }
};

template <>
struct ForEachField<::apache::thrift::metadata::ThriftEnumType> {
  template <typename F, typename... T>
  void operator()(FOLLY_MAYBE_UNUSED F&& f, FOLLY_MAYBE_UNUSED T&&... t) const {
    FOLLY_MAYBE_UNUSED constexpr auto get_metadata =
        get_field_metadata<::apache::thrift::metadata::ThriftEnumType>;

    f(get_metadata(0), static_cast<T&&>(t).name_ref()...);
  }
};

template <>
struct ForEachField<::apache::thrift::metadata::ThriftStructType> {
  template <typename F, typename... T>
  void operator()(FOLLY_MAYBE_UNUSED F&& f, FOLLY_MAYBE_UNUSED T&&... t) const {
    FOLLY_MAYBE_UNUSED constexpr auto get_metadata =
        get_field_metadata<::apache::thrift::metadata::ThriftStructType>;

    f(get_metadata(0), static_cast<T&&>(t).name_ref()...);
  }
};

template <>
struct ForEachField<::apache::thrift::metadata::ThriftUnionType> {
  template <typename F, typename... T>
  void operator()(FOLLY_MAYBE_UNUSED F&& f, FOLLY_MAYBE_UNUSED T&&... t) const {
    FOLLY_MAYBE_UNUSED constexpr auto get_metadata =
        get_field_metadata<::apache::thrift::metadata::ThriftUnionType>;

    f(get_metadata(0), static_cast<T&&>(t).name_ref()...);
  }
};

template <>
struct ForEachField<::apache::thrift::metadata::ThriftTypedefType> {
  template <typename F, typename... T>
  void operator()(FOLLY_MAYBE_UNUSED F&& f, FOLLY_MAYBE_UNUSED T&&... t) const {
    FOLLY_MAYBE_UNUSED constexpr auto get_metadata =
        get_field_metadata<::apache::thrift::metadata::ThriftTypedefType>;

    f(get_metadata(0), static_cast<T&&>(t).name_ref()...);
    f(get_metadata(1), static_cast<T&&>(t).underlyingType_ref()...);
  }
};

template <>
struct ForEachField<::apache::thrift::metadata::ThriftStreamType> {
  template <typename F, typename... T>
  void operator()(FOLLY_MAYBE_UNUSED F&& f, FOLLY_MAYBE_UNUSED T&&... t) const {
    FOLLY_MAYBE_UNUSED constexpr auto get_metadata =
        get_field_metadata<::apache::thrift::metadata::ThriftStreamType>;

    f(get_metadata(0), static_cast<T&&>(t).elemType_ref()...);
    f(get_metadata(1), static_cast<T&&>(t).initialResponseType_ref()...);
  }
};

template <>
struct ForEachField<::apache::thrift::metadata::ThriftSinkType> {
  template <typename F, typename... T>
  void operator()(FOLLY_MAYBE_UNUSED F&& f, FOLLY_MAYBE_UNUSED T&&... t) const {
    FOLLY_MAYBE_UNUSED constexpr auto get_metadata =
        get_field_metadata<::apache::thrift::metadata::ThriftSinkType>;

    f(get_metadata(0), static_cast<T&&>(t).elemType_ref()...);
    f(get_metadata(1), static_cast<T&&>(t).finalResponseType_ref()...);
    f(get_metadata(2), static_cast<T&&>(t).initialResponseType_ref()...);
  }
};

template <>
struct ForEachField<::apache::thrift::metadata::ThriftType> {
  template <typename F, typename... T>
  void operator()(FOLLY_MAYBE_UNUSED F&& f, FOLLY_MAYBE_UNUSED T&&... t) const {
    FOLLY_MAYBE_UNUSED constexpr auto get_metadata =
        get_field_metadata<::apache::thrift::metadata::ThriftType>;

    f(get_metadata(0), static_cast<T&&>(t).t_primitive_ref()...);
    f(get_metadata(1), static_cast<T&&>(t).t_list_ref()...);
    f(get_metadata(2), static_cast<T&&>(t).t_set_ref()...);
    f(get_metadata(3), static_cast<T&&>(t).t_map_ref()...);
    f(get_metadata(4), static_cast<T&&>(t).t_enum_ref()...);
    f(get_metadata(5), static_cast<T&&>(t).t_struct_ref()...);
    f(get_metadata(6), static_cast<T&&>(t).t_union_ref()...);
    f(get_metadata(7), static_cast<T&&>(t).t_typedef_ref()...);
    f(get_metadata(8), static_cast<T&&>(t).t_stream_ref()...);
    f(get_metadata(9), static_cast<T&&>(t).t_sink_ref()...);
  }
};

template <>
struct ForEachField<::apache::thrift::metadata::ThriftEnum> {
  template <typename F, typename... T>
  void operator()(FOLLY_MAYBE_UNUSED F&& f, FOLLY_MAYBE_UNUSED T&&... t) const {
    FOLLY_MAYBE_UNUSED constexpr auto get_metadata =
        get_field_metadata<::apache::thrift::metadata::ThriftEnum>;

    f(get_metadata(0), static_cast<T&&>(t).name_ref()...);
    f(get_metadata(1), static_cast<T&&>(t).elements_ref()...);
  }
};

template <>
struct ForEachField<::apache::thrift::metadata::ThriftField> {
  template <typename F, typename... T>
  void operator()(FOLLY_MAYBE_UNUSED F&& f, FOLLY_MAYBE_UNUSED T&&... t) const {
    FOLLY_MAYBE_UNUSED constexpr auto get_metadata =
        get_field_metadata<::apache::thrift::metadata::ThriftField>;

    f(get_metadata(0), static_cast<T&&>(t).id_ref()...);
    f(get_metadata(1), static_cast<T&&>(t).type_ref()...);
    f(get_metadata(2), static_cast<T&&>(t).name_ref()...);
    f(get_metadata(3), static_cast<T&&>(t).is_optional_ref()...);
  }
};

template <>
struct ForEachField<::apache::thrift::metadata::ThriftStruct> {
  template <typename F, typename... T>
  void operator()(FOLLY_MAYBE_UNUSED F&& f, FOLLY_MAYBE_UNUSED T&&... t) const {
    FOLLY_MAYBE_UNUSED constexpr auto get_metadata =
        get_field_metadata<::apache::thrift::metadata::ThriftStruct>;

    f(get_metadata(0), static_cast<T&&>(t).name_ref()...);
    f(get_metadata(1), static_cast<T&&>(t).fields_ref()...);
    f(get_metadata(2), static_cast<T&&>(t).is_union_ref()...);
  }
};

template <>
struct ForEachField<::apache::thrift::metadata::ThriftException> {
  template <typename F, typename... T>
  void operator()(FOLLY_MAYBE_UNUSED F&& f, FOLLY_MAYBE_UNUSED T&&... t) const {
    FOLLY_MAYBE_UNUSED constexpr auto get_metadata =
        get_field_metadata<::apache::thrift::metadata::ThriftException>;

    f(get_metadata(0), static_cast<T&&>(t).name_ref()...);
    f(get_metadata(1), static_cast<T&&>(t).fields_ref()...);
  }
};

template <>
struct ForEachField<::apache::thrift::metadata::ThriftFunction> {
  template <typename F, typename... T>
  void operator()(FOLLY_MAYBE_UNUSED F&& f, FOLLY_MAYBE_UNUSED T&&... t) const {
    FOLLY_MAYBE_UNUSED constexpr auto get_metadata =
        get_field_metadata<::apache::thrift::metadata::ThriftFunction>;

    f(get_metadata(0), static_cast<T&&>(t).name_ref()...);
    f(get_metadata(1), static_cast<T&&>(t).return_type_ref()...);
    f(get_metadata(2), static_cast<T&&>(t).arguments_ref()...);
    f(get_metadata(3), static_cast<T&&>(t).exceptions_ref()...);
    f(get_metadata(4), static_cast<T&&>(t).is_oneway_ref()...);
  }
};

template <>
struct ForEachField<::apache::thrift::metadata::ThriftService> {
  template <typename F, typename... T>
  void operator()(FOLLY_MAYBE_UNUSED F&& f, FOLLY_MAYBE_UNUSED T&&... t) const {
    FOLLY_MAYBE_UNUSED constexpr auto get_metadata =
        get_field_metadata<::apache::thrift::metadata::ThriftService>;

    f(get_metadata(0), static_cast<T&&>(t).name_ref()...);
    f(get_metadata(1), static_cast<T&&>(t).functions_ref()...);
    f(get_metadata(2), static_cast<T&&>(t).parent_ref()...);
  }
};

template <>
struct ForEachField<::apache::thrift::metadata::ThriftModuleContext> {
  template <typename F, typename... T>
  void operator()(FOLLY_MAYBE_UNUSED F&& f, FOLLY_MAYBE_UNUSED T&&... t) const {
    FOLLY_MAYBE_UNUSED constexpr auto get_metadata =
        get_field_metadata<::apache::thrift::metadata::ThriftModuleContext>;

    f(get_metadata(0), static_cast<T&&>(t).name_ref()...);
  }
};

template <>
struct ForEachField<::apache::thrift::metadata::ThriftServiceContext> {
  template <typename F, typename... T>
  void operator()(FOLLY_MAYBE_UNUSED F&& f, FOLLY_MAYBE_UNUSED T&&... t) const {
    FOLLY_MAYBE_UNUSED constexpr auto get_metadata =
        get_field_metadata<::apache::thrift::metadata::ThriftServiceContext>;

    f(get_metadata(0), static_cast<T&&>(t).service_info_ref()...);
    f(get_metadata(1), static_cast<T&&>(t).module_ref()...);
  }
};

template <>
struct ForEachField<::apache::thrift::metadata::ThriftMetadata> {
  template <typename F, typename... T>
  void operator()(FOLLY_MAYBE_UNUSED F&& f, FOLLY_MAYBE_UNUSED T&&... t) const {
    FOLLY_MAYBE_UNUSED constexpr auto get_metadata =
        get_field_metadata<::apache::thrift::metadata::ThriftMetadata>;

    f(get_metadata(0), static_cast<T&&>(t).enums_ref()...);
    f(get_metadata(1), static_cast<T&&>(t).structs_ref()...);
    f(get_metadata(2), static_cast<T&&>(t).exceptions_ref()...);
    f(get_metadata(3), static_cast<T&&>(t).services_ref()...);
  }
};

template <>
struct ForEachField<::apache::thrift::metadata::ThriftServiceMetadataResponse> {
  template <typename F, typename... T>
  void operator()(FOLLY_MAYBE_UNUSED F&& f, FOLLY_MAYBE_UNUSED T&&... t) const {
    FOLLY_MAYBE_UNUSED constexpr auto get_metadata =
        get_field_metadata<::apache::thrift::metadata::ThriftServiceMetadataResponse>;

    f(get_metadata(0), static_cast<T&&>(t).context_ref()...);
    f(get_metadata(1), static_cast<T&&>(t).metadata_ref()...);
  }
};
} // namespace detail
} // namespace thrift
} // namespace apache
