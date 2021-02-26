<?php namespace BTDev\BlogAuthorBackend\Models;

use Model;
use Backend\Models\User as BackendUser;

/**
 * Model
 */
class Author extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    const ROLE_NAME_AUTHOR = 'Author';
	
    protected $dates = ['deleted_at'];
    /**
     * @var string The database table used by the model.
     */
    public $table = 'btdev_blogauthorbackend_authors';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    public $belongsTo = [
	'user' => ['Backend\Models\User', 
	'key' => 'id', 
	'otherKey' => 'backend_user_id']
    ];
    
    public $hasMany = [
	'posts' => ['RainLab\Blog\Models\Post', 
	'key' => 'user_id', 
	'otherKey' => 'backend_user_id']
    ];
    
    public static function getAuthors()
    {
	$authors = BackendUser::whereHas('author')->get();
	
	return $authors;
    }
    
    public static function createAuthor($user)
    {
	$author = new static;
	$author->user = $user;
	$author->save();
	
	$user->author = $author; 

	return $author;
    }
}
