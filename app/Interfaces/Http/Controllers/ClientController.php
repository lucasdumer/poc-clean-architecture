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
                new \DateTime($request->birth),
                $request->address['country'],
                $request->address['state'],
                $request->address['city'],
                $request->address['district'],
                $request->address['street'],
                $request->address['number'],
                $request->address['complement'],
            )->toArray());
        } catch(\Exception $e) {
            return $this->error($e);
        }
    }
}
