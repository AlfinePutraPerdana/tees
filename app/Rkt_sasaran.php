<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rkt_sasaran extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_rkt', 'id_sasaran','created_at','updated_at',
    ];
}
