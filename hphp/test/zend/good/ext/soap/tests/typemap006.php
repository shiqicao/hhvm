<?hh

function book_to_xml($book) {
	return '<book xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"><a xsi:type="xsd:string">'.$book->a.'!</a><b xsi:type="xsd:string">'.$book->b.'!</b></book>';
}

class test{
	function dotest2($str){
		$book = new book;
		$book->a = "foo";
		$book->b = "bar";
		return new SoapVar($book, null, "book", "http://schemas.nothing.com");
	}
}

class book{
	public $a="a";
	public $b="c";

}
<<__EntryPoint>>
function entrypoint_typemap006(): void {
  $GLOBALS['HTTP_RAW_POST_DATA']="
  <env:Envelope xmlns:env=\"http://schemas.xmlsoap.org/soap/envelope/\"
  	xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
  	xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\"
  	xmlns:enc=\"http://schemas.xmlsoap.org/soap/encoding/\"
  	xmlns:ns1=\"http://schemas.nothing.com\"
  >
    <env:Body>
  <ns1:dotest2>
  <dotest2 xsi:type=\"xsd:string\">???</dotest2>
  </ns1:dotest2>
   </env:Body>
  <env:Header/>
  </env:Envelope>";

  $options=darray[
  		'uri'     => "http://schemas.nothing.com",
  		'actor'   => 'http://schemas.nothing.com',
  		'typemap' => varray[darray["type_ns"   => "http://schemas.nothing.com",
  		                         "type_name" => "book",
  		                         "to_xml"    => "book_to_xml"]]
  		];

  $server = new SoapServer(NULL,$options);
  $server->setClass("test");
  $server->handle($GLOBALS['HTTP_RAW_POST_DATA']);
  echo "ok\n";
}
