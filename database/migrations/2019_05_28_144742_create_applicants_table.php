<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('sex', ['не указан', 'мужской', 'женский'])->default('не указан');
            $table->dateTime('date_of_birth')->nullable();
            $table->enum('education', ['начальное', 'среднее', 'среднее специальное', 'неполное высшее', 'высшее', 'два и более высших', 'ученая степень']);
            $table->integer('city_id')->unsigned()->nullable();
            $table->integer('phone')->nullable();
            $table->enum('work_permit', ['РФ', 'Узбекистан', 'Таджикистан', 'Укарина', 'Казахстан'])->default('РФ');
            $table->integer('wage_level')->nullable();
            $table->enum('payment_period', ['В месяц', 'В день', 'В час'])->default('В месяц');
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
        Schema::dropIfExists('applicants');
    }
}
