<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hubungi_kami', function (Blueprint $table) {
            $table->id();
            $table->string("nama", 100);
            $table->char("no_hp", 15);
            $table->string("email", 100)->unique();
            $table->string("perusahaan", 100)->nullable();
            $table->string("subjek", 100);
            $table->text("pertanyaan");
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
        Schema::dropIfExists('hubungi_kami');
    }
};
