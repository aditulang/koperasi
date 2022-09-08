<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Saving;

class Penarikan extends Model
{
    protected $table = 'penarikans';
    protected $guarded = [];

    public function savings()
    {
        return $this->belongsTo(Saving::class, 'saving_id','id');
    }
}