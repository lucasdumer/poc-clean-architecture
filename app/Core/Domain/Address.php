<?php

namespace App\Core\Domain;

class Address
{
    public function __construct(
        private string $country,
        private string $state,
        private string $city,
        private string $district,
        private string $street,
        private string $number,
        private string $complement
    ) {}

    public function getCountry(): string
    {
        return $this->country;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getDistrict(): string
    {
        return $this->district;
    }

    public function getStreet(): string
    {
        return $this->street;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function getComplement(): string
    {
        return $this->complement;
    }

    public function toArray(): array
    {
        return [
            "country" => $this->country,
            "state" => $this->state,
            "city" => $this->city,
            "district" => $this->district,
            "street" => $this->street,
            "number" => $this->number,
            "complement" => $this->complement
        ];
    }
}
