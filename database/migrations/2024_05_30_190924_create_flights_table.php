<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('main_photo');
            $table->integer('status');
            $table->float('advanced_price');
            $table->float('price');
            $table->float('special_price');
            $table->float('last_hours');
            $table->longText('description');
            $table->longText('short_description');
            $table->longText('extra_comments');
            $table->string('payment_by'); //individual group
            $table->integer('qty_people');
            $table->integer('min_people');
            $table->integer('min_adults');
            $table->integer('max_people');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
