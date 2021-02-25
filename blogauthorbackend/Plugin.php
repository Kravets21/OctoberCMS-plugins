<?php namespace BTDev\BlogAuthorBackend;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    use Traits\Boot\ExtendBackendUserModel;
    
    public function registerComponents()
    {
	return [
	    Components\AuthorsList::class => 'AuthorsList',
	    Components\AuthorPosts::class => 'AuthorPosts'	
	];
    }

    public function registerSettings()
    {
    }
    
    public function boot(){
	$this->extendBackendUser();
	 // посмотреть как расширить бекенд юзера при помощи событий 
	// сделать так чтобы создавались новые инпуты при создании автора в настройках админки и автоматически записывались и в нашу таблицу
	// никнейм автоматически создавать нейм+ластнейм с помощью хелперов + поле "about"
    }
}
