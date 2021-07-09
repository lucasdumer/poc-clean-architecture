<?php

namespace App\Infrastructure\Repositories;

use App\Core\Domain\Client;
use App\Core\Repositories\IClientRepository;
use App\Infrastructure\Models\ClientModel;

class ClientRepository implements IClientRepository
{
    public function create(Client $client): Client
    {
        try {
            $clientModel = new ClientModel();
            $clientModel->name = $client->getName();
            $clientModel->gender = $client->getGender();
            $clientModel->birth = $client->getBirth();
            $clientModel->country = $client->getAddress()->getCountry();
            $clientModel->state = $client->getAddress()->getState();
            $clientModel->city = $client->getAddress()->getCity();
            $clientModel->district = $client->getAddress()->getDistrict();
            $clientModel->street = $client->getAddress()->getStreet();
            $clientModel->number = $client->getAddress()->getNumber();
            $clientModel->complement = $client->getAddress()->getComplement();
            $clientModel->save();
            $client->setId($clientModel->id);
            return $client;
        } catch(\Exception $e) {
            throw new \Exception("Database error on creating client. ".$e->getMessage());
        }
    }
}
