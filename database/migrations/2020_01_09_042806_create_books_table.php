<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     * 
     * @return void
     */
    public function up(){
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 255);
            $table->text('description');
            $table->string('harga_sewa', 20);
            $table->string('harga_pinjam', 20);
            $table->string('harga_beli', 20);
            $table->string('qty_sewa', 20);
            $table->string('qty_pinjam', 20);
            $table->string('qty_beli', 20);
            $table->string('halaman', 10);
            $table->string('publish_at', 20);
            $table->string('isbn', 20);
            $table->string('bahasa', 20);
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
        Schema::dropIfExists('books');
    }
}
