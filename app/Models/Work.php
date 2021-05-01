<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Work extends Model
{

    public $fillable = ['name', 'desc', 'full_text', 'website', 'image'];

    public $table = 'work';

}
