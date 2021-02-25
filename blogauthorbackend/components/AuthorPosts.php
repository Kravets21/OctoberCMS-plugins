<?php namespace BTDev\BlogAuthorBackend\Components;

use Cms\Classes\ComponentBase;
use BTDev\BlogAuthorBackend\Models\Author as Author;

class AuthorPosts extends ComponentBase
{
    public $author;
    
    public function componentDetails()
    {
        return [
            'name'        => 'AuthorPosts Component',
            'description' => 'Displays all posts of author'
        ];
    }

    public function defineProperties()
    {
        return [
            'nickname' => [
                'title' => 'Author Identifier Value',
                'description' => 'Enter the author identifier value',
                'type' => 'string',
            ],
	];
    }
    
    public function onRun()
    {
	$nickname = $this->property('nickname');
	
	$this->author = Author::where('nickname', $nickname)->first();
    }

    public function getPostsList() 
    {
        return $this->author->posts;
    }
    
    public function getAuthor() 
    {
        return $this->author;
    }
}
