<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    protected $table='tbl_biodata';
    protected $fillable=['nama','no_hp','alamat','hobi','foto'];
    public $timestamps=false;
}
