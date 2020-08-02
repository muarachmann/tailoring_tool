<?php

    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;

    class CreateCountriesTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('countries', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('name')->comment('Name');
                $table->string('iso2')->comment('Iso 2');
                $table->string('dial_code')->comment('Dial Phone Number');
                $table->integer('priority')->default('0')->comment('Priority');
                $table->text('area_codes')->nullable()->comment('Area codes');
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
            Schema::dropIfExists('countries');
        }
    }
