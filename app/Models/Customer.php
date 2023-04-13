<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = "customers";
    protected $primaryKey = "customer_id";

  //Mutater is use when attribute value is set 
    public function setCustomerNameAttribute($value)
     {

        $this->attributes['customer_name']=ucwords($value);
     }
     
     //asscessor is use when get attribute value
     public function getCustomerDobAttribute($value)
     {
        return date('d-M-Y',strtotime($value));
     }
}
