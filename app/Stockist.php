<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stockist extends Model
{
  protected $table = 'stockists';
  protected $guarded = array('id');
}
