<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report_kegiatan extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'kegiatan_id', 'report_id','nominal_biaya','lokasi','created_at','updated_at',
    ];
}
