<?php

declare(strict_types=1);

namespace Picqer\Tests;

use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Picqer\Tests\Support\MocksExactConnection;

class XmlTest extends TestCase
{
    use MocksExactConnection;

    public function testUploadReturnsMessagesByKey(): void
    {
        $connection = $this->createMockConnection($this->createMockHandler([
            new Response(200, [], <<<'XML'
<?xml version="1.0" encoding="utf-8"?>
<eExact>
  <Messages>
    <Message type="2">
      <Topic code="GLTransactions" node="GLTransaction"><Data keyAlt="100001" /></Topic>
      <Description>Created</Description>
    </Message>
    <Message type="0">
      <Topic code="GLTransactions" node="GLTransaction"><Data keyAlt="100002" /></Topic>
      <Description>Invalid journal</Description>
    </Message>
  </Messages>
</eExact>
XML),
        ]));

        $result = $connection->upload('GLTransactions', '<eExact />');

        $this->assertSame(['100001' => 'Created', '100002' => 'Invalid journal'], $result);
        $this->assertSame(
            'https://start.exactonline.nl/docs/XMLUpload.aspx?Topic=GLTransactions&_Division_=1234567890',
            (string) $this->sentRequests()[0]->getUri()
        );
        $this->assertSame('POST', $this->sentRequests()[0]->getMethod());
    }

    public function testDownloadReturnsXml(): void
    {
        $connection = $this->createMockConnection($this->createMockHandler([
            new Response(200, [], '<?xml version="1.0"?><eExact><Items><Item code="ITEM-1" /></Items></eExact>'),
        ]));

        $result = $connection->download('Items');

        $this->assertInstanceOf(\SimpleXMLElement::class, $result);
        $this->assertSame('ITEM-1', (string) $result->Items->Item['code']);
        $this->assertSame(
            'https://start.exactonline.nl/docs/XMLDownload.aspx?Topic=Items&_Division_=1234567890',
            (string) $this->sentRequests()[0]->getUri()
        );
    }
}
