<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Regency extends Model
{
    //

  public function province() {
    return $this->belongsTo(Province::class);
  }
}
