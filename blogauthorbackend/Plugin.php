<?php namespace BTDev\BlogAuthorBackend;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    use Traits\Boot\ExtendBackendUserModel;
    
    public function registerComponents()
    {
	return [
	    Components\AuthorsList::class => 'AuthorsList',
	    Components\AuthorProfile::class => 'AuthorProfile'	
	];
    }

    public function registerSettings()
    {
    }
    
    public function boot(){
	$this->extendBackendUser();
    }
}
