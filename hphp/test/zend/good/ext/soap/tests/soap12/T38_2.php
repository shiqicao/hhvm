<?hh
<<__EntryPoint>>
function entrypoint_T38_2(): void {
  $GLOBALS['HTTP_RAW_POST_DATA'] = <<<EOF
<?xml version='1.0' ?>
<env:Envelope xmlns:env="http://www.w3.org/2003/05/soap-envelope"> 
  <env:Header>
    <test:echoOk xmlns:test="http://example.org/ts-tests"
          env:mustUnderstand="true" 
          env:role="http://example.org/ts-tests/C">foo</test:echoOk>
    <test:echoOk xmlns:test="http://example.org/ts-tests"
          env:mustUnderstand="1" 
          env:role="http://example.org/ts-tests/C">bar</test:echoOk>
  </env:Header>
  <env:Body>
  </env:Body>
</env:Envelope>
EOF;
  include "soap12-test.inc";
  test();
}
