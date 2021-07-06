<?php

namespace App\Core\UseCases;

use App\Core\Domain\Address;
use App\Core\Domain\Client;

class CreateClient
{
    public function execute(
        string $name,
        string $gender,
        \DateTime $birth,
        string $country,
        string $state,
        string $city,
        string $district,
        string $street,
        string $number,
        string $complement
    ): Client {
        $client = new Client($name, $gender, $birth, new Address($country, $state, $city, $district, $street, $number, $complement))
        return $client;
    }
}
