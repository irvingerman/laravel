<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableNewsCategoriesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('post_categories')) {
            Schema::create('post_categories', function(Blueprint $table) {
                $table->id();
                $table->integer("moet_unit_id")->index();
                $table->string("name");
                $table->integer("parent_id")->nullable()->index();
                $table->integer("offset");
                $table->integer("created_user_id");
                $table->integer("modified_user_id")->nullable();
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
        Schema::dropIfExists('table_news_categories');
    }

}
