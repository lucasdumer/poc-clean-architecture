<?php

namespace App\Interfaces\Http\Controllers;

use App\Core\UseCases\CreateClient;
use App\Interfaces\Http\Requests\ClientCreateRequest;

class ClientController extends Controller
{
    public function __construct(
        private CreateClient $createClient
    ) {}

    public function create(ClientCreateRequest $request)
    {
        try {
            return $this->success($this->createClient->execute(
                $request->name,
                $request->gender,
                $request->birth,
                $request->country,
                $request->state,
                $request->city,
                $request->district,
                $request->street,
                $request->number,
                $request->complement,
            ));
        } catch(\Exception $e) {
            return $this->error($e);
        }
    }
}
