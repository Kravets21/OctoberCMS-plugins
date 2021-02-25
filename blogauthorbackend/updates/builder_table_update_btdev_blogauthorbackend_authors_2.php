<?php namespace BTDev\BlogAuthorBackend\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBtdevBlogauthorbackendAuthors2 extends Migration
{
    public function up()
    {
        Schema::table('btdev_blogauthorbackend_authors', function($table)
        {
            $table->integer('user_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('btdev_blogauthorbackend_authors', function($table)
        {
            $table->dropColumn('user_id');
        });
    }
}
