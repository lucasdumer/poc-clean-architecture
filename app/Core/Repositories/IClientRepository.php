<?php

namespace App\Core\Repositories;

use App\Core\Domain\Client;

interface IClientRepository
{
    public function create(Client $client): Client;
}
