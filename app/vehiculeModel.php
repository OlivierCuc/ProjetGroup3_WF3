<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vehiculeModel extends Model
{
    protected $table = 'type_vehicule';
    protected $primaryKey = 'jfon_id_type_vehicule';
    public $timestamps = true;
}
