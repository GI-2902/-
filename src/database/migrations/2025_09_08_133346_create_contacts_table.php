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
        /*ondelete cascadeは決まり文句*/
        Schema::create('contacts', function (Blueprint $table) {
            $table->id()->nullable(false);
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->string('first_name', 255)->nullable(false);
            $table->string('last_name', 255)->nullable(false);
            $table->tinyInteger('gender',)->nullable(false)->comment('1:男性 2:女性 3:その他');
            $table->string('email', 255)->nullable(false);
            $table->string('tel', 255)->nullable(false);
            $table->string('address', 255)->nullable(false);
            $table->string('building', 255);
            $table->text('detail')->nullable(false);
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->timestamp('updated_at')->useCurrent()->nullable();
        });
    }




    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
