<?hh
<<file:__EnableUnstableFeatures('enum_atom', 'enum_class')>>

interface I {}
class Box implements I {
  public function __construct(public int $x) {}
}

enum class EE : I {
  A<Box>(new Box(42));
}

enum class FF : I extends EE {
  C<Box>(new Box(0));
}

function ff(<<__Atom>> HH\Elt<EE, Box> $x) : int {
  return $x->unwrap()->x;
}

abstract class Controller {
  abstract const type TEnum as EE;

  public static function get(
    <<__Atom>>HH\Elt<this::TEnum, Box> $x): int {
    return $x->unwrap()->x;
  }

  public static function getA() : int {
    return static::get("A"); // TODO: fix with #A
  }

  public static function getB() : int {
    return static::get("B"); // TODO: fix with #B
  }
}

class CEE extends Controller {
  const type TEnum = EE;
}

class CFF extends Controller {
  const type TEnum = FF;
}

<<__EntryPoint>>
function main(): void {
  // TODO: fix with #X
  ff("A");
  ff("C");
  CEE::get("A");
  CEE::get("C");
  CFF::get("A");
  CFF::get("C");
}
