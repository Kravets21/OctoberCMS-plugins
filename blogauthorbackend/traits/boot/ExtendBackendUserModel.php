<?php

namespace BTDev\BlogAuthorBackend\Traits\Boot;

use Event;
use Backend\Models\User as BackendUserModel;
use Backend\Controllers\Users as BackendUsersController;
use BTDev\BlogAuthorBackend\Models\Author as AuthorModel;

trait ExtendBackendUserModel
{
    public function extendBackendUser()
    {
        $this->extendUserModels();
    }

    private function extendUserModels()
    {
	BackendUserModel::extend(function ($model) {
	    
	    $model->hasOne['author'] = [
		'BTDev\BlogAuthorBackend\Models\Author', 
		'key' => 'backend_user_id', 
		'otherKey' => 'id'
	    ];
	});
	
	BackendUsersController::extendFormFields(function($form, $model, $context) {
            if (!$model instanceof BackendUserModel)
                return;
	    
            if (!$model->exists)
                return;
	    
	    if(isset($model->role->name) && $model->role->name == AuthorModel::ROLE_NAME_AUTHOR) {
		
		if(!$model->author) {
		    
		    AuthorModel::createAuthor($model);
		}
		
		$form->addTabFields([
		    'author[nickname]' => [
			'label'   => 'Nickname',
			'type' => 'text',
			'tab' => 'Author',
			'required' => '1',
		    ],
		    'author[about]' => [
			'label'   => 'About',
			'type' => 'textarea',
			'tab' => 'Author',
		    ],
		]);
	    }
        });
    }
}
