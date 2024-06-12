<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up() {
        Schema::create('events', function (Blueprint $table) {
            $table->id('event_id')->primary();
            $table->string('event_name');
            $table->text('event_description');
            $table->string('event_location');
            $table->date('event_date');
            $table->tinyInteger('event_status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event');
    }
};
