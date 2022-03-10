<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('posts')) {
            Schema::create('posts', function(Blueprint $table) {
                $table->id();
                $table->integer("moet_unit_id")->index();
                $table->string("avatar");
                $table->text("title")->comment("Tiêu đề bài viết");
                $table->text("description")->nullable();
                $table->text("content")->comment("Nội dung bài viết");
                $table->string("slug")->comment("Link bài viết")->index();
                $table->integer("views")->default(0);
                $table->tinyInteger("is_highlight")->comment("Bài viết nổi bật");
                $table->tinyInteger("is_publish")->comment("Hiển thị bài viết");
                $table->integer("created_user_id");
                $table->integer("modified_user_id");
                $table->softDeletes();
                $table->timestamps();
            });
        }
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
