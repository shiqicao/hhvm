<?hh



<<__EntryPoint>>
function main_953() {
$i = 0;
 print ++$i;
 print "\t";
 print (darray['a' => 1, 'b' => 2]!==true) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = darray['a' => 1, 'b' => 2];
 print ($a !==true) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = true;
 print (darray['a' => 1, 'b' => 2]!==$b) ? 'Y' : 'N';
 print ($a !==$b) ? 'Y' : 'N';
 print "\t";
 print "array('a' => 1, 'b' => 2) !== true	";
 print "\n";
 print ++$i;
 print "\t";
 print (darray['a' => 1, 'b' => 2]!==false) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = darray['a' => 1, 'b' => 2];
 print ($a !==false) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = false;
 print (darray['a' => 1, 'b' => 2]!==$b) ? 'Y' : 'N';
 print ($a !==$b) ? 'Y' : 'N';
 print "\t";
 print "array('a' => 1, 'b' => 2) !== false	";
 print "\n";
 print ++$i;
 print "\t";
 print (darray['a' => 1, 'b' => 2]!==1) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = darray['a' => 1, 'b' => 2];
 print ($a !==1) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = 1;
 print (darray['a' => 1, 'b' => 2]!==$b) ? 'Y' : 'N';
 print ($a !==$b) ? 'Y' : 'N';
 print "\t";
 print "array('a' => 1, 'b' => 2) !== 1	";
 print "\n";
 print ++$i;
 print "\t";
 print (darray['a' => 1, 'b' => 2]!==0) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = darray['a' => 1, 'b' => 2];
 print ($a !==0) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = 0;
 print (darray['a' => 1, 'b' => 2]!==$b) ? 'Y' : 'N';
 print ($a !==$b) ? 'Y' : 'N';
 print "\t";
 print "array('a' => 1, 'b' => 2) !== 0	";
 print "\n";
 print ++$i;
 print "\t";
 print (darray['a' => 1, 'b' => 2]!==-1) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = darray['a' => 1, 'b' => 2];
 print ($a !==-1) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = -1;
 print (darray['a' => 1, 'b' => 2]!==$b) ? 'Y' : 'N';
 print ($a !==$b) ? 'Y' : 'N';
 print "\t";
 print "array('a' => 1, 'b' => 2) !== -1	";
 print "\n";
 print ++$i;
 print "\t";
 print (darray['a' => 1, 'b' => 2]!=='1') ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = darray['a' => 1, 'b' => 2];
 print ($a !=='1') ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = '1';
 print (darray['a' => 1, 'b' => 2]!==$b) ? 'Y' : 'N';
 print ($a !==$b) ? 'Y' : 'N';
 print "\t";
 print "array('a' => 1, 'b' => 2) !== '1'	";
 print "\n";
 print ++$i;
 print "\t";
 print (darray['a' => 1, 'b' => 2]!=='0') ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = darray['a' => 1, 'b' => 2];
 print ($a !=='0') ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = '0';
 print (darray['a' => 1, 'b' => 2]!==$b) ? 'Y' : 'N';
 print ($a !==$b) ? 'Y' : 'N';
 print "\t";
 print "array('a' => 1, 'b' => 2) !== '0'	";
 print "\n";
 print ++$i;
 print "\t";
 print (darray['a' => 1, 'b' => 2]!=='-1') ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = darray['a' => 1, 'b' => 2];
 print ($a !=='-1') ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = '-1';
 print (darray['a' => 1, 'b' => 2]!==$b) ? 'Y' : 'N';
 print ($a !==$b) ? 'Y' : 'N';
 print "\t";
 print "array('a' => 1, 'b' => 2) !== '-1'	";
 print "\n";
 print ++$i;
 print "\t";
 print (darray['a' => 1, 'b' => 2]!==null) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = darray['a' => 1, 'b' => 2];
 print ($a !==null) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = null;
 print (darray['a' => 1, 'b' => 2]!==$b) ? 'Y' : 'N';
 print ($a !==$b) ? 'Y' : 'N';
 print "\t";
 print "array('a' => 1, 'b' => 2) !== null	";
 print "\n";
 print ++$i;
 print "\t";
 print (darray['a' => 1, 'b' => 2]!==__hhvm_intrinsics\dummy_cast_to_kindofarray(vec[])) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = darray['a' => 1, 'b' => 2];
 print ($a !==__hhvm_intrinsics\dummy_cast_to_kindofarray(vec[])) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = __hhvm_intrinsics\dummy_cast_to_kindofarray(vec[]);
 print (darray['a' => 1, 'b' => 2]!==$b) ? 'Y' : 'N';
 print ($a !==$b) ? 'Y' : 'N';
 print "\t";
 print "array('a' => 1, 'b' => 2) !== array()	";
 print "\n";
 print ++$i;
 print "\t";
 print (darray['a' => 1, 'b' => 2]!==varray[1]) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = darray['a' => 1, 'b' => 2];
 print ($a !==varray[1]) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = varray[1];
 print (darray['a' => 1, 'b' => 2]!==$b) ? 'Y' : 'N';
 print ($a !==$b) ? 'Y' : 'N';
 print "\t";
 print "array('a' => 1, 'b' => 2) !== array(1)	";
 print "\n";
 print ++$i;
 print "\t";
 print (darray['a' => 1, 'b' => 2]!==varray[2]) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = darray['a' => 1, 'b' => 2];
 print ($a !==varray[2]) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = varray[2];
 print (darray['a' => 1, 'b' => 2]!==$b) ? 'Y' : 'N';
 print ($a !==$b) ? 'Y' : 'N';
 print "\t";
 print "array('a' => 1, 'b' => 2) !== array(2)	";
 print "\n";
 print ++$i;
 print "\t";
 print (darray['a' => 1, 'b' => 2]!==varray['1']) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = darray['a' => 1, 'b' => 2];
 print ($a !==varray['1']) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = varray['1'];
 print (darray['a' => 1, 'b' => 2]!==$b) ? 'Y' : 'N';
 print ($a !==$b) ? 'Y' : 'N';
 print "\t";
 print "array('a' => 1, 'b' => 2) !== array('1')	";
 print "\n";
 print ++$i;
 print "\t";
 print (darray['a' => 1, 'b' => 2]!==darray['0' => '1']) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = darray['a' => 1, 'b' => 2];
 print ($a !==darray['0' => '1']) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = darray['0' => '1'];
 print (darray['a' => 1, 'b' => 2]!==$b) ? 'Y' : 'N';
 print ($a !==$b) ? 'Y' : 'N';
 print "\t";
 print "array('a' => 1, 'b' => 2) !== array('0' => '1')	";
 print "\n";
 print ++$i;
 print "\t";
 print (darray['a' => 1, 'b' => 2]!==varray['a']) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = darray['a' => 1, 'b' => 2];
 print ($a !==varray['a']) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = varray['a'];
 print (darray['a' => 1, 'b' => 2]!==$b) ? 'Y' : 'N';
 print ($a !==$b) ? 'Y' : 'N';
 print "\t";
 print "array('a' => 1, 'b' => 2) !== array('a')	";
 print "\n";
 print ++$i;
 print "\t";
 print (darray['a' => 1, 'b' => 2]!==darray['a' => 1]) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = darray['a' => 1, 'b' => 2];
 print ($a !==darray['a' => 1]) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = darray['a' => 1];
 print (darray['a' => 1, 'b' => 2]!==$b) ? 'Y' : 'N';
 print ($a !==$b) ? 'Y' : 'N';
 print "\t";
 print "array('a' => 1, 'b' => 2) !== array('a' => 1)	";
 print "\n";
 print ++$i;
 print "\t";
 print (darray['a' => 1, 'b' => 2]!==darray['b' => 1]) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = darray['a' => 1, 'b' => 2];
 print ($a !==darray['b' => 1]) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = darray['b' => 1];
 print (darray['a' => 1, 'b' => 2]!==$b) ? 'Y' : 'N';
 print ($a !==$b) ? 'Y' : 'N';
 print "\t";
 print "array('a' => 1, 'b' => 2) !== array('b' => 1)	";
 print "\n";
 print ++$i;
 print "\t";
 print (darray['a' => 1, 'b' => 2]!==darray['a' => 1, 'b' => 2]) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = darray['a' => 1, 'b' => 2];
 print ($a !==darray['a' => 1, 'b' => 2]) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = darray['a' => 1, 'b' => 2];
 print (darray['a' => 1, 'b' => 2]!==$b) ? 'Y' : 'N';
 print ($a !==$b) ? 'Y' : 'N';
 print "\t";
 print "array('a' => 1, 'b' => 2) !== array('a' => 1, 'b' => 2)	";
 print "\n";
 print ++$i;
 print "\t";
 print (darray['a' => 1, 'b' => 2]!==varray[darray['a' => 1]]) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = darray['a' => 1, 'b' => 2];
 print ($a !==varray[darray['a' => 1]]) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = varray[darray['a' => 1]];
 print (darray['a' => 1, 'b' => 2]!==$b) ? 'Y' : 'N';
 print ($a !==$b) ? 'Y' : 'N';
 print "\t";
 print "array('a' => 1, 'b' => 2) !== array(array('a' => 1))	";
 print "\n";
 print ++$i;
 print "\t";
 print (darray['a' => 1, 'b' => 2]!==varray[darray['b' => 1]]) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = darray['a' => 1, 'b' => 2];
 print ($a !==varray[darray['b' => 1]]) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = varray[darray['b' => 1]];
 print (darray['a' => 1, 'b' => 2]!==$b) ? 'Y' : 'N';
 print ($a !==$b) ? 'Y' : 'N';
 print "\t";
 print "array('a' => 1, 'b' => 2) !== array(array('b' => 1))	";
 print "\n";
 print ++$i;
 print "\t";
 print (darray['a' => 1, 'b' => 2]!=='php') ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = darray['a' => 1, 'b' => 2];
 print ($a !=='php') ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = 'php';
 print (darray['a' => 1, 'b' => 2]!==$b) ? 'Y' : 'N';
 print ($a !==$b) ? 'Y' : 'N';
 print "\t";
 print "array('a' => 1, 'b' => 2) !== 'php'	";
 print "\n";
 print ++$i;
 print "\t";
 print (darray['a' => 1, 'b' => 2]!=='') ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = darray['a' => 1, 'b' => 2];
 print ($a !=='') ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = '';
 print (darray['a' => 1, 'b' => 2]!==$b) ? 'Y' : 'N';
 print ($a !==$b) ? 'Y' : 'N';
 print "\t";
 print "array('a' => 1, 'b' => 2) !== ''	";
 print "\n";
}
