<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     title="Bike",
 *     description="A simple product model"
 * )
 */
class Bike extends Model
{
    use HasFactory;

    protected $table = 'bikes';


    /**
       * @OA\Property(
        * property="make",
        * type="string",
        * description="Company name",
        * example="Harley Davidson, Honda, Yamaha"
        * )
        */
    private $make;

    /**
        * @OA\Property(
        * property="model",
        * type="string",
        * description="Motorcycle model",
        * example="Xl1200, Shadow ACE, V-Star"
        * )
        */

    private $model;

    /**
    * @OA\Property(
    * property="year",
    * type="string",
    * description="Fabrication year",
    * example="2009, 2008, 2007"
    * )
    */

    private $year;

    /**
    * @OA\Property(
    * property="mods",
    * type="string",
    * description="Motorcycle description of modifications",
    * example="New exhaust system"
    * )
    */

    private $mods;

    /**
    * @OA\Property(
    * property="picture",
    * type="string",
    * description="Bike image URL",
    * example="http://www.sample.com/my.bike.jpg"
    * )
    */

    private $picture;
    protected $fillable = [
            'make',
            'model',
            'year',
            'mods',
            'picture'
        ];

    public function builder()
    {
        return $this->belongsTo(Builder::class);
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }

    public function garages() {
        return $this->belongsToMany(Garage::class);
    }
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function ratings() {
        return $this->hasMany(Rating::class);
}
}
