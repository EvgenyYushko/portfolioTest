<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Tech extends  Model
{
    use Notifiable;





    public $table = 'tech';

}
