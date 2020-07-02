<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    protected $table='cases1';
    protected $fillable = ['name', 'client_id', 'cost','status_id','deleted_at','created_at','update_at'];
}
