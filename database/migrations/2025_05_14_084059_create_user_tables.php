<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTables extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('role')->default('user')->after('email'); // user ou provider
        });

        Schema::create('sites', function (Blueprint $table) {
            $table->id();
            $table->foreignId('provider_id')->constrained('users')->onDelete('cascade');
            $table->string('name');
            $table->integer('price');
            $table->text('description');
            $table->string('image');
            $table->timestamps();
        });

        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('provider_id')->constrained('users')->onDelete('cascade');
            $table->string('name');
            $table->integer('price');
            $table->text('description');
            $table->string('image');
            $table->date('date')->nullable();
            $table->timestamps();
        });

        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('provider_id')->constrained('users')->onDelete('cascade');
            $table->string('name');
            $table->integer('price');
            $table->text('description');
            $table->string('image');
            $table->date('valid_until')->nullable();
            $table->timestamps();
        });

        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('provider_id')->constrained('users')->onDelete('cascade');
            $table->string('type');
            $table->unsignedBigInteger('item_id');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->integer('participants');
            $table->string('visit_type')->nullable();
            $table->string('ticket_type')->nullable();
            $table->text('comments')->nullable();
            $table->integer('amount');
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reservations');
        Schema::dropIfExists('offers');
        Schema::dropIfExists('events');
        Schema::dropIfExists('sites');
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role');
        });
    }
}