<?php

namespace App\Core\Domain;

class Address
{
    public function __construct(
        private string $country,
        private string $city,
        private string $state,
        private string $district,
        private string $street,
        private string $number,
        private string $complement
    ) {}

    public function getCountry(): string
    {
        return $this->country;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getState(): string
    {
        return $this->state;
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
}
