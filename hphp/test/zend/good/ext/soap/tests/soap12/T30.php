<?hh
<<__EntryPoint>>
function entrypoint_T30(): void {
  $GLOBALS['HTTP_RAW_POST_DATA'] = <<<EOF
<?xml version='1.0' ?>
<env:Envelope xmlns:env="http://schemas.xmlsoap.org/soap/envelope/">
  <env:Body>
    <test:echoOk xmlns:test="http://example.org/ts-tests">foo</test:echoOk>
  </env:Body>
</env:Envelope>
EOF;
  include "soap12-test.inc";
  test();
}
