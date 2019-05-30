<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('employer_id')->unsigned();
            $table->string('name');
            $table->text('description');
            $table->text('conditions')->nullable();
            $table->text('responsibilities')->nullable();
            $table->string('vacancy_address')->nullable();
            $table->integer('wage_from')->nullable();
            $table->integer('wage_to')->nullable();
            $table->enum('payment_period', ['В месяц', 'В день', 'В час'])->default('В месяц');
            $table->boolean('without_experience')->default(false);
            $table->boolean('flexible_schedule')->default(false);
            $table->boolean('part_time')->default(false);
            $table->boolean('shift_work')->default(false);
            $table->boolean('side_work')->default(false);
            $table->boolean('available_for_minors')->default(false);
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
        Schema::dropIfExists('vacancies');
    }
}
