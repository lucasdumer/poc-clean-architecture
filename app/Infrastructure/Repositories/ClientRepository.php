<?php

namespace App\Infrastructure\Repositories;

use App\Core\Domain\Client;
use App\Core\Repositories\IClientRepository;

class ClientRepository implements IClientRepository
{
    public function create(Client $client): Client
    {
        return $client;
    }
}
