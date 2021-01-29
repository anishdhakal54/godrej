<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlideshowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { Schema::create('slideshows', function (Blueprint $table) {
        $table->increments('id');
        $table->foreignId( 'user_id' )->references( 'id' )->on( 'users' )->onDelete( 'cascade' );
        $table->string('name');
        $table->string('link');
        $table->string('slug')->unique();
        $table->text('caption')->nullable();
        $table->string('priority')->nullable();
        $table->boolean('active')->default(true);
        $table->string('featured_image');
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
        Schema::dropIfExists('slideshows');
    }
}
