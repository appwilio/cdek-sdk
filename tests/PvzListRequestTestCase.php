<?php

use Appwilio\CdekSDK\CdekClient;
use Appwilio\CdekSDK\Common\Pvz;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;
use Appwilio\CdekSDK\Requests\PvzListRequest;

class PvzListRequestTestCase extends TestCase
{
    public function test_can_get_params()
    {
        $request = (new PvzListRequest())
            ->setCityId(1)
            ->setRegionId(2)
            ->setCountryId(3)
            ->setPostCode('123456');

        Assert::assertEquals([
            'type' => 'PVZ',
            'cityid' => 1,
            'regionid' => 2,
            'countryid' => 3,
            'citypostcode' => '123456',
            'havecashles' => null,
            'weightmax' => null,
            'allowedcod' => null,
            'isdressingroom' => null,
        ], $request->getParams());
    }

    public function test_response()
    {
        $client = $this->createClient();

        $request = (new PvzListRequest())
            ->setCityId(44);

        $response = $client->sendPvzListRequest($request);

        $this->assertEveryPvzPropertyEquals(44, 'CityCode', $response->pvzs);
    }

    private function assertEveryPvzPropertyEquals($expected, $property, $pvzs)
    {
        $this->assertEquals([], array_filter($pvzs, function (Pvz $pvz) use ($expected, $property) {
            return $pvz->$property != $expected;
        }));
    }

    private function createClient()
    {
        return new CdekClient('kek', 'kek');
    }
}
