<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleDataSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_data_sections', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->foreignId('article_id')->references('id')->on('articles')->onDelete('cascade');
            $table->integer('parent_id')->default(0)->index();
            $table->enum('type', [
                'header', 'gratitude',
                'library_list', 'section_slug',
                'main_text', 'picture', 'slider', 'footer'
            ]);
            $table->longText('content');
            $table->unique(['article_id', 'type', 'parent_id']);
            $table->softDeletes();
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
        Schema::dropIfExists('article_data_sections');
    }
}
