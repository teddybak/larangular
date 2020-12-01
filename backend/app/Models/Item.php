<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     title="Item",
 *     description="A simple product model"
 * )
 */
class Item extends Model
{
    use HasFactory;
    /**
        * The table associated with the model.
        *
        * @var string
        */
    protected $table = 'items';

    /**
       * @OA\Property(
    * property="type",
    * type="string",
    * description="Company name",
    * example="Harley Davidson, Honda, Yamaha"
    * )
    */
    private $type;

    /**
        * @OA\Property(
        * property="name",
        * type="string",
        * description="Motorcycle model",
        * example="Xl1200, Shadow ACE, V-Star"
        * )
        */
    
    private $name;
    
    /**
    * @OA\Property(
    * property="company",
    * type="string",
    * description="Fabrication year",
    * example="2009, 2008, 2007"
    * )
    */
    
    private $company;
    
    /**
    * @OA\Property(
    * property="bike_id",
    * type="string",
    * description="Motorcycle description of modifications",
    * example="New exhaust system"
    * )
    */
    
    private $bike_id;
    
 
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'type',
        'name',
        'company',
        'bike_id'
    ];
    /**
    * Relationship.
    *
    * @var string
    */
    public function bike()
    {
        return $this->belongsTo('App\Bike');
    }
}
