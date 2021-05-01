<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{

    public $fillable = ['name', 'desc', 'image'];

    public $table = 'skills';

}
