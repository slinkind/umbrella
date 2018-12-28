<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'Orders';
    protected $connection = 'sqlsrv2';
}
