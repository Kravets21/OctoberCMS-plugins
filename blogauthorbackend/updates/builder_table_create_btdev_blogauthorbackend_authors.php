<?php namespace BTDev\BlogAuthorBackend\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBtdevBlogauthorbackendAuthors extends Migration
{
    public function up()
    {
        Schema::create('btdev_blogauthorbackend_authors', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('nickname', 50);
            $table->text('about');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('btdev_blogauthorbackend_authors');
    }
}
