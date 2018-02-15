<?php
/**
 * Created by PhpStorm.
 * User: hitslab
 * Date: 14.02.2018
 * Time: 12:48
 */

declare(strict_types=1);

namespace Appwilio\CdekSDK\Responses;

use Appwilio\CdekSDK\Common\City;
use JMS\Serializer\Annotation as JMS;

class CityResponse
{
    /**
     * @JMS\Type("array<Appwilio\CdekSDK\Common\City>")
     *
     * @var City[];
     */
    public $geonames = [];
}