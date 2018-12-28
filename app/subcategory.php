<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subcategory extends Model
{
    protected $table = 'DimProductSubcategory';
    protected $connection = 'sqlsrv3';
}
