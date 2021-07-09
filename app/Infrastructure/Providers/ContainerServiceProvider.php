<?php

namespace App\Infrastructure\Providers;

use App\Core\UseCases\CreateClient;
use App\Infrastructure\Repositories\ClientRepository;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class ContainerServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(CreateClient::class, function ($app) {
            return new CreateClient($app->make(ClientRepository::class));
        });
    }
}
