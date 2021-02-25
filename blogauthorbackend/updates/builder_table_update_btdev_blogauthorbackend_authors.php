<?php namespace BTDev\BlogAuthorBackend\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBtdevBlogauthorbackendAuthors extends Migration
{
    public function up()
    {
        Schema::table('btdev_blogauthorbackend_authors', function($table)
        {
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('btdev_blogauthorbackend_authors', function($table)
        {
            $table->dropColumn('deleted_at');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
