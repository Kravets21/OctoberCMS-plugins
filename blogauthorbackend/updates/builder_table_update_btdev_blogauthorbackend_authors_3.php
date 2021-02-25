<?php namespace BTDev\BlogAuthorBackend\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBtdevBlogauthorbackendAuthors3 extends Migration
{
    public function up()
    {
        Schema::table('btdev_blogauthorbackend_authors', function($table)
        {
            $table->string('nickname', 50)->nullable()->change();
            $table->text('about')->nullable()->change();
            $table->integer('user_id')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('btdev_blogauthorbackend_authors', function($table)
        {
            $table->string('nickname', 50)->nullable(false)->change();
            $table->text('about')->nullable(false)->change();
            $table->integer('user_id')->nullable(false)->change();
        });
    }
}
