<?hh



<<__EntryPoint>>
function main_979() {
$i = 0;
 print ++$i;
 print "\t";
 print ('php'<true) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 'php';
 print ($a <true) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = true;
 print ('php'<$b) ? 'Y' : 'N';
 print ($a <$b) ? 'Y' : 'N';
 print "\t";
 print "'php' < true	";
 print "\n";
 print ++$i;
 print "\t";
 print ('php'<false) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 'php';
 print ($a <false) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = false;
 print ('php'<$b) ? 'Y' : 'N';
 print ($a <$b) ? 'Y' : 'N';
 print "\t";
 print "'php' < false	";
 print "\n";
 print ++$i;
 print "\t";
 print ('php'<1) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 'php';
 print ($a <1) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = 1;
 print ('php'<$b) ? 'Y' : 'N';
 print ($a <$b) ? 'Y' : 'N';
 print "\t";
 print "'php' < 1	";
 print "\n";
 print ++$i;
 print "\t";
 print ('php'<0) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 'php';
 print ($a <0) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = 0;
 print ('php'<$b) ? 'Y' : 'N';
 print ($a <$b) ? 'Y' : 'N';
 print "\t";
 print "'php' < 0	";
 print "\n";
 print ++$i;
 print "\t";
 print ('php'<-1) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 'php';
 print ($a <-1) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = -1;
 print ('php'<$b) ? 'Y' : 'N';
 print ($a <$b) ? 'Y' : 'N';
 print "\t";
 print "'php' < -1	";
 print "\n";
 print ++$i;
 print "\t";
 print ('php'<'1') ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 'php';
 print ($a <'1') ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = '1';
 print ('php'<$b) ? 'Y' : 'N';
 print ($a <$b) ? 'Y' : 'N';
 print "\t";
 print "'php' < '1'	";
 print "\n";
 print ++$i;
 print "\t";
 print ('php'<'0') ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 'php';
 print ($a <'0') ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = '0';
 print ('php'<$b) ? 'Y' : 'N';
 print ($a <$b) ? 'Y' : 'N';
 print "\t";
 print "'php' < '0'	";
 print "\n";
 print ++$i;
 print "\t";
 print ('php'<'-1') ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 'php';
 print ($a <'-1') ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = '-1';
 print ('php'<$b) ? 'Y' : 'N';
 print ($a <$b) ? 'Y' : 'N';
 print "\t";
 print "'php' < '-1'	";
 print "\n";
 print ++$i;
 print "\t";
 print ('php'<null) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 'php';
 print ($a <null) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = null;
 print ('php'<$b) ? 'Y' : 'N';
 print ($a <$b) ? 'Y' : 'N';
 print "\t";
 print "'php' < null	";
 print "\n";
 print ++$i;
 print "\t";
 print ('php'<__hhvm_intrinsics\dummy_cast_to_kindofarray(vec[])) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 'php';
 print ($a <__hhvm_intrinsics\dummy_cast_to_kindofarray(vec[])) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = __hhvm_intrinsics\dummy_cast_to_kindofarray(vec[]);
 print ('php'<$b) ? 'Y' : 'N';
 print ($a <$b) ? 'Y' : 'N';
 print "\t";
 print "'php' < array()	";
 print "\n";
 print ++$i;
 print "\t";
 print ('php'<varray[1]) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 'php';
 print ($a <varray[1]) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = varray[1];
 print ('php'<$b) ? 'Y' : 'N';
 print ($a <$b) ? 'Y' : 'N';
 print "\t";
 print "'php' < array(1)	";
 print "\n";
 print ++$i;
 print "\t";
 print ('php'<varray[2]) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 'php';
 print ($a <varray[2]) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = varray[2];
 print ('php'<$b) ? 'Y' : 'N';
 print ($a <$b) ? 'Y' : 'N';
 print "\t";
 print "'php' < array(2)	";
 print "\n";
 print ++$i;
 print "\t";
 print ('php'<varray['1']) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 'php';
 print ($a <varray['1']) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = varray['1'];
 print ('php'<$b) ? 'Y' : 'N';
 print ($a <$b) ? 'Y' : 'N';
 print "\t";
 print "'php' < array('1')	";
 print "\n";
 print ++$i;
 print "\t";
 print ('php'<darray['0' => '1']) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 'php';
 print ($a <darray['0' => '1']) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = darray['0' => '1'];
 print ('php'<$b) ? 'Y' : 'N';
 print ($a <$b) ? 'Y' : 'N';
 print "\t";
 print "'php' < array('0' => '1')	";
 print "\n";
 print ++$i;
 print "\t";
 print ('php'<varray['a']) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 'php';
 print ($a <varray['a']) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = varray['a'];
 print ('php'<$b) ? 'Y' : 'N';
 print ($a <$b) ? 'Y' : 'N';
 print "\t";
 print "'php' < array('a')	";
 print "\n";
 print ++$i;
 print "\t";
 print ('php'<darray['a' => 1]) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 'php';
 print ($a <darray['a' => 1]) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = darray['a' => 1];
 print ('php'<$b) ? 'Y' : 'N';
 print ($a <$b) ? 'Y' : 'N';
 print "\t";
 print "'php' < array('a' => 1)	";
 print "\n";
 print ++$i;
 print "\t";
 print ('php'<darray['b' => 1]) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 'php';
 print ($a <darray['b' => 1]) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = darray['b' => 1];
 print ('php'<$b) ? 'Y' : 'N';
 print ($a <$b) ? 'Y' : 'N';
 print "\t";
 print "'php' < array('b' => 1)	";
 print "\n";
 print ++$i;
 print "\t";
 print ('php'<darray['a' => 1, 'b' => 2]) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 'php';
 print ($a <darray['a' => 1, 'b' => 2]) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = darray['a' => 1, 'b' => 2];
 print ('php'<$b) ? 'Y' : 'N';
 print ($a <$b) ? 'Y' : 'N';
 print "\t";
 print "'php' < array('a' => 1, 'b' => 2)	";
 print "\n";
 print ++$i;
 print "\t";
 print ('php'<varray[darray['a' => 1]]) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 'php';
 print ($a <varray[darray['a' => 1]]) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = varray[darray['a' => 1]];
 print ('php'<$b) ? 'Y' : 'N';
 print ($a <$b) ? 'Y' : 'N';
 print "\t";
 print "'php' < array(array('a' => 1))	";
 print "\n";
 print ++$i;
 print "\t";
 print ('php'<varray[darray['b' => 1]]) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 'php';
 print ($a <varray[darray['b' => 1]]) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = varray[darray['b' => 1]];
 print ('php'<$b) ? 'Y' : 'N';
 print ($a <$b) ? 'Y' : 'N';
 print "\t";
 print "'php' < array(array('b' => 1))	";
 print "\n";
 print ++$i;
 print "\t";
 print ('php'<'php') ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 'php';
 print ($a <'php') ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = 'php';
 print ('php'<$b) ? 'Y' : 'N';
 print ($a <$b) ? 'Y' : 'N';
 print "\t";
 print "'php' < 'php'	";
 print "\n";
 print ++$i;
 print "\t";
 print ('php'<'') ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 'php';
 print ($a <'') ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = '';
 print ('php'<$b) ? 'Y' : 'N';
 print ($a <$b) ? 'Y' : 'N';
 print "\t";
 print "'php' < ''	";
 print "\n";
}
