<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    //
    protected $fillable =['name','contactNumber','gender','ord_id' ];
    
    protected $hidden = ['created_at', 'updated_at'];
    
    // protected $table = "staffs";

    public function orders() {
        return $this->hasMany("App\Order");
    }
}
