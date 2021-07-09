<?php

namespace App\Infrastructure\Models;

use Illuminate\Database\Eloquent\Model;

class ClientModel extends Model
{
    protected $table = "clients";

    protected $primaryKey = 'id';

    public $timestamps = false;
}
