<?php
use PHPUnit\Framework\TestCase;
use Guzzle\Tests\GuzzleTestCase,
    Guzzle\Plugin\Mock\MockPlugin,
    Guzzle\Http\Message\Response,
    Guzzle\Http\Client as HttpClient,
    Guzzle\Service\Client as ServiceClient,
    Guzzle\Http\EntityBody;
/**
 * Created by PhpStorm.
 * User: 11502021
 * Date: 9/11/2017
 * Time: 14:38
 */
class LocationsTest extends TestCase
{

    private $http;

    public function setUp()
    {
        $this->http = new GuzzleHttp\Client(['base_uri' => '/Web-Mobile-Project/api.php']);
    }

    public function tearDown() {
        $this->http = null;
    }

    public function testGet()
    {
        $response = $this->http->request('GET', '/locations');

        $this->assertEquals(200, $response->getStatusCode());

        $contentType = $response->getHeaders()["Content-Type"][0];
        $this->assertEquals("application/json", $contentType);

        $location = json_decode($response->getBody())->{"location"};
        $this->assertRegexp('/Guzzle/', $location);
    }

    public function testPut()
    {
        $response = $this->http->request('PUT', '/locations', ['http_errors' => false]);

        $this->assertEquals(405, $response->getStatusCode());
    }

}