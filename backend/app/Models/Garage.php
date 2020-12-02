<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
     * @OA\Schema(
     *     title="Garage",
     *      required={"name", "custumer_level"},
     *     description="A simple product model"
     * )
    *
    * @OA\Property(
        * property="name",
        * type="string",
        * type="string",
        * description="Jhonny Garage",
        * example="Exhaust"
    * )
    * @OA\Property(
        * property="costumer_level",
        * type="integer",
        * description="Whats the garage level",
        * example="10"
    * )

 */
class Garage extends Model
{
    use HasFactory;
    protected $table = 'garages';
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'id',
        'name',
        'costumer_level'
    ];

    public function bikes() {
        return $this->belongsToMany('App\Bike', 'bike_garage',
        'bike_id', 'garage_id');
    }


}
