<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     title="Builder",
 *     description="A simple product model"
 * )
 */
class Builder extends Model
{
    use HasFactory;
    protected $table = 'builders';


    /**
       * @OA\Property(
        * property="name",
        * type="string",
        * description="Company name",
        * example="Harley Davidson, Honda, Yamaha"
        * )
        */
    private $name;

    /**
        * @OA\Property(
        * property="description",
        * type="string",
        * description="Motorcycle model",
        * example="Xl1200, Shadow ACE, V-Star"
        * )
        */
    
    private $description;
    
    /**
    * @OA\Property(
    * property="location",
    * type="string",
    * description="Fabrication year",
    * example="2009, 2008, 2007"
    * )
    */
    
    private $location;

    protected $fillable = [
        'name',
        'description',
        'location'
    ];

    /**
    * Relationship.
    *
    * @var array
    */
    public function bike()
    {
        return $this->hasOne('App\Bike');
    }
}
