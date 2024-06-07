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
        // Tạo bảng categories trước vì bảng food phụ thuộc vào nó
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id'); // category_id
            $table->string('name');
            $table->longText('description');
            $table->timestamps();
        });

        // Tạo bảng food
        Schema::create('food', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('count');
            $table->longText('description');
            $table->timestamps();

            // Khóa ngoại
            $table->unsignedInteger('category_id')->nullable(); // unsigned
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('set null');
                //->onDelete('cascade'); // sử dụng 'cascade' thay vì 'set null'
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Drop bảng food trước vì nó phụ thuộc vào bảng categories
        Schema::dropIfExists('food');
        Schema::dropIfExists('categories');
    }
};
