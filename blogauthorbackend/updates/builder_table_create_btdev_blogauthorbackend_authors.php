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
            $table->string('nickname', 50)->nullable();
            $table->text('about')->nullable();
	    $table->integer('backend_user_id')->unsigned()->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('btdev_blogauthorbackend_authors');
    }
}