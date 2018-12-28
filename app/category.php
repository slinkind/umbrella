<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = 'DimProductCategory';
    protected $connection = 'sqlsrv3';
    protected $primaryKey = 'ProductCategoryKey';
    
    public function subcategories()
    {
        return $this->hasMany('App\subcategory','ProductCategoryKey','ProductCategoryKey');
    }
}
