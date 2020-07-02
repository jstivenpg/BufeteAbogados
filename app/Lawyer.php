<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lawyers extends Model
{
    protected $table='lawyers1';
    protected $fillable = ['names', 'lastname', 'document_type_id','document_number','start_date','deleted_at','created_at','update_at'];
}
