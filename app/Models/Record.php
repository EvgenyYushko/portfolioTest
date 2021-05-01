<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 05.10.2019
 * Time: 18:47
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    public $table = 'record';
    public $primaryKey = 'id';

    protected $fillable = [
        'id',
        'date',
        'text'

    ];

}
