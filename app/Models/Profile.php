<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Profile extends  Model
{
    use Notifiable;


    public function routeNotificationForTelegram()
    {
        return env('TELEGRAM_CHAT_ID');
    }

    public $fillable = ['name', 'surname', 'user_id', 'birthday', 'study_place', 'avatar'];

    public $table = 'profile';

}
