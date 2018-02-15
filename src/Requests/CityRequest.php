<?php
namespace Appwilio\CdekSDK\Requests;


class CityRequest implements CdekParamRequest
{
    protected const METHOD = 'GET';
    protected const ADDRESS = 'http://api.cdek.ru/city/getListByTerm/json.php';

    /** @var string */
    protected $q;

    public function setQ(string $q)
    {
        $this->q = $q;

        return $this;
    }

    public function getMethod(): string
    {
        return self::METHOD;
    }

    public function getAddress(): string
    {
        return self::ADDRESS;
    }

    public function getParams(): array
    {
        return [
            'q'           => $this->q,
        ];
    }

    public function date(\DateTimeInterface $date): CdekRequest
    {
        return $this;
    }

    public function credentials(string $account, string $secure): CdekRequest
    {
        return $this;
    }
}