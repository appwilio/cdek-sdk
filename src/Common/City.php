<?php

/**
 * This file is part of Cdek SDK package.
 *
 * © Appwilio (http://appwilio.com), greabock (https://github.com/greabock), JhaoDa (https://github.com/jhaoda)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Appwilio\CdekSDK\Common;

use JMS\Serializer\Annotation as JMS;

class City
{
    use Fillable;

    /**
     * @JMS\XmlAttribute
     * @JMS\SerializedName("Code")
     * @JMS\Type("int")
     *
     * @var int
     */
    protected $Code;

    /**
     * @JMS\SerializedName("id")
     * @JMS\Type("int")
     *
     * @var int
     */
    protected $id;

    /**
     * @JMS\SerializedName("postCodeArray")
     * @JMS\Type("array<string>")
     *
     * @var string[]
     */
    protected $postCodeArray;

    /**
     * @JMS\SerializedName("cityName")
     * @JMS\Type("string")
     *
     * @var string
     */
    protected $cityName;

    /**
     * @JMS\SerializedName("regionId")
     * @JMS\Type("int")
     *
     * @var int
     */
    protected $regionId;

    /**
     * @JMS\SerializedName("regionName")
     * @JMS\Type("string")
     *
     * @var string
     */
    protected $regionName;

    /**
     * @JMS\SerializedName("countryId")
     * @JMS\Type("int")
     *
     * @var int
     */
    protected $countryId;

    /**
     * @JMS\SerializedName("countryName")
     * @JMS\Type("string")
     *
     * @var string
     */
    protected $countryName;

    /**
     * @JMS\SerializedName("countryIso")
     * @JMS\Type("string")
     *
     * @var string
     */
    protected $countryIso;

    /**
     * @JMS\SerializedName("name")
     * @JMS\Type("string")
     *
     * @var string
     */
    protected $name;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string[]
     */
    public function getPostCodeArray(): array
    {
        return $this->postCodeArray;
    }

    /**
     * @return string
     */
    public function getCityName(): string
    {
        return $this->cityName;
    }

    /**
     * @return int
     */
    public function getRegionId(): int
    {
        return $this->regionId;
    }

    /**
     * @return string
     */
    public function getRegionName(): string
    {
        return $this->regionName;
    }

    /**
     * @return int
     */
    public function getCountryId(): int
    {
        return $this->countryId;
    }

    /**
     * @return string
     */
    public function getCountryName(): string
    {
        return $this->countryName;
    }

    /**
     * @return string
     */
    public function getCountryIso(): string
    {
        return $this->countryIso;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
