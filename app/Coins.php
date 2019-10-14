<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;

class Coins extends Model
{
    use HasApiTokens;

    protected $fillable = ['id', 'name', 'market_cap', 'price', 'volume_24h', 'percent_change_24h'];
}
