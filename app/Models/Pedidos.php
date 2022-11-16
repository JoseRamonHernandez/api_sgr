<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Pedidos extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'pedidos_collection';
}
