<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title')->collation('utf8_unicode_ci');
            $table->string('alias');
            $table->text('excerpt')->collation('utf8_unicode_ci');
            $table->longText('content')->collation('utf8_unicode_ci');
            $table->tinyInteger('status')->default(0);
            $table->text('meta_title')->nullable()->collation('utf8_unicode_ci');
            $table->text('meta_description')->nullable()->collation('utf8_unicode_ci');
            $table->text('keywords')->nullable()->collation('utf8_unicode_ci');
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
        Schema::dropIfExists('posts');
    }
}
