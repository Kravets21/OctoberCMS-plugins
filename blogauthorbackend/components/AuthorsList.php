<?php namespace BTDev\BlogAuthorBackend\Components;

use Cms\Classes\ComponentBase;
use BTDev\BlogAuthorBackend\Models\Author as Author;

class AuthorsList extends ComponentBase
{   
    public $authorsList;
    
    public function componentDetails()
    {
        return [
            'name'        => 'AuthorsList Component',
            'description' => 'Displays a list of blog`s authors'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
    
    public function onRun()
    {
	$this->authorsList = Author::getAuthors();
    }

    public function getAuthorsList() 
    {
        return $this->authorsList;
    }
}
