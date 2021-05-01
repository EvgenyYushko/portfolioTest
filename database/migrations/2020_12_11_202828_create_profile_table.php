<?php

use App\Enums\ProfileEnum;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(ProfileEnum::TABLE_NAME, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text(ProfileEnum::NAME)->nullable();
            $table->text(ProfileEnum::SURNAME)->nullable();
            $table->integer(ProfileEnum::USER_ID)->nullable();
            $table->timestamp(ProfileEnum::BURTHDAY)->nullable();
            $table->text(ProfileEnum::STUDY_PLACE)->nullable();
            $table->text(ProfileEnum::AVATAR)->nullable();
            $table->text(ProfileEnum::SLUG)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile');
    }
}
