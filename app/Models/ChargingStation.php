<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ChargingStation extends Model
{
    use HasFactory;

    protected  $fillable = ['stat_name', 'stat_city', 'stat_opent', 'stat_clost'];

}
