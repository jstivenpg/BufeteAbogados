<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table='client1';
    protected $fillable = ['names', 'lastname', 'document_type_id','document_number','deleted_at','created_at','update_at'];
}
