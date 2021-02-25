<?php namespace BTDev\BlogAuthorBackend\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBtdevBlogauthorbackendAuthors4 extends Migration
{
    public function up()
    {
        Schema::table('btdev_blogauthorbackend_authors', function($table)
        {
            $table->renameColumn('user_id', 'backend_user_id');
        });
    }
    
    public function down()
    {
        Schema::table('btdev_blogauthorbackend_authors', function($table)
        {
            $table->renameColumn('backend_user_id', 'user_id');
        });
    }
}
