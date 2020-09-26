<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Product extends Model
{
    //
    protected $fillable =[ 'name','price','category_id','image'];

    public function Category(){
        return $this -> belongsTo(Category::class);
    }
}
