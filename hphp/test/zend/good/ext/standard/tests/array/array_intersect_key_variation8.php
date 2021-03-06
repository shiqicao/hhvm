<?hh
/* Prototype  : array array_intersect_key(array arr1, array arr2 [, array ...])
 * Description: Returns the entries of arr1 that have keys which are present in all the other arguments.
 * Source code: ext/standard/array.c
 */
<<__EntryPoint>> function main(): void {
echo "*** Testing array_intersect_key() : usage variation ***\n";

/// Initialise function arguments not being substituted (if any)
$array1 = darray[

      'first' => darray['blue'  => 1, 'red'  => 2],

      'second' => darray['yellow' => 7],

      'third' => darray[0 =>'zero'],
];

$array2 = darray [

      'first' => darray['blue'  => 1, 'red'  => 2,],

      'second' => darray['cyan'   => 8],

      'fourth' => darray[2 => 'two'],
];
var_dump( array_intersect_key($array1, $array2) );
var_dump( array_intersect_key($array2,$array1 ) );
echo "===DONE===\n";
}
