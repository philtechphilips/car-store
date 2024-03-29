<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';

    protected $primaryKey = 'id';

    // protected $timestamps = true;
    protected $fillable = ['name', 'founded', 'description', 'image_path'];

    public function carModels(){
        return $this->hasMany(CarModel::class);
    }

    public function engines(){
        return $this->hasManyThrough(Engine::class, CarModel::class,
        'car_id', //Foreign key on CarModel Table
        'model_id' //Foreign key on Engine table
    );
    }
}
