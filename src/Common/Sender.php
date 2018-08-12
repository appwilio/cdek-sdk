<?php

/**
 * This file is part of Cdek SDK package.
 *
 * © Appwilio (http://appwilio.com), greabock (https://github.com/greabock), JhaoDa (https://github.com/jhaoda), Volga (https://github.com/Volga)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Appwilio\CdekSDK\Common;

use JMS\Serializer\Annotation as JMS;

class Sender
{
    use Fillable;

    /**
     * @JMS\XmlAttribute
     * @JMS\SerializedName("Name")
     * @JMS\Type("string")
     *
     * @var string
     */
    protected $Name;

    /**
     * @JMS\XmlAttribute
     * @JMS\SerializedName("Company")
     * @JMS\Type("string")
     *
     * @var string
     */
    protected $Company;

    /**
     * @JMS\SerializedName("Address")
     * @JMS\Type("Appwilio\CdekSDK\Common\Address")
     *
     * @var Address
     */
    protected $Address;

    /**
     * @JMS\SerializedName("Phone")
     * @JMS\Type("string")
     *
     * @var string
     */
    protected $Phone;

    public function getName(): string
    {
        return $this->Name;
    }

    public function getCompany(): string
    {
        return $this->Company;
    }

    public function getAddress(): Address
    {
        return $this->Address;
    }

    public function getPhone(): string
    {
        return $this->Phone;
    }

    public function setAddress(Address $address)
    {
        $this->Address = $address;

        return $this;
    }
}
