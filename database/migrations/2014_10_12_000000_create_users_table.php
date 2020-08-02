<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            // personal info
            $table->string('first_name')->nullable()->comment('First Name');
            $table->string('last_name')->nullable()->comment('Last Name');
            $table->string('email')->unique()->nullable()->comment('Email');
            $table->string('phone')->nullable()->comment('Phone');
            $table->string('password')->comment('Password');
            $table->date('dob')->nullable()->comment('Date of Birth');
            $table->string('profile_picture')->nullable()->comment('Profile Picture');
            $table->string('state')->nullable()->comment('State');
            $table->string('city')->nullable()->comment('City');
            $table->longText('bio')->nullable()->comment('Biography/About');
            $table->string('address_one')->nullable()->comment('Address One');
            $table->string('address_two')->nullable()->comment('Address Two');
            $table->string('zip')->nullable()->comment('Zip code');
            $table->json('documents')->nullable()->comment('User Documents');

            // status & verifications
            $table->boolean('is_active')->default(false)->comment('User account status');
            $table->timestamp('email_verified_at')->nullable()->comment('Email verified');
            $table->timestamp('phone_verified_at')->nullable()->comment('Phone verified');

            // Country foreign key
            $table->unsignedBigInteger('country_id')->nullable()->default(36)->comment('Users country');
            $table->foreign('country_id')->references('id')
                ->on('countries')->onUpdate('cascade')->onDelete('set null');

            // Package and Coupon (ids) foreign key
            $table->unsignedBigInteger('package_id')->nullable()->comment('package(foreign key)');
            $table->foreign('package_id')->references('id')
                ->on('packages')->onUpdate('cascade')->onDelete('set null');

            $table->unsignedBigInteger('coupon_id')->nullable()->comment('coupon(foreign key)');
            $table->foreign('coupon_id')->references('id')
                ->on('coupons')->onUpdate('cascade')->onDelete('set null');

            // deactivation, deletion and banning
            $table->boolean('schedule_delete')->default(false)->comment('Schedule for permanent delete');
            $table->boolean('schedule_deactivate')->default(false)->comment('Schedule for deactivation');
            $table->timestamp('banned_until')->nullable()->comment('Time for account to be banned!');

            // Timezones and currencies
            $table->string('timezone')->default('UTC')->nullable()->comment('User\'s Timezone');
            $table->string('currency')->default(config('platform_settings.default_currency'))->comment('User\'s Currency');

            // remember tokens and timestamps
            $table->softDeletes();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
