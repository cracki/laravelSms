<?php
namespace Livana\Sms;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\Facades\Config;
use SoapClient;
class SmsServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;


	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		
		$this->publishes([
        		__DIR__.'/../../config/config.php' => config_path('sms.php')
    		], 'config');
	}


	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('sms', function($app)
		{
			$config = Config::get('sms');
    			return new Sms($config, new SoapClient($config['webserviceUrl']));
		});
	}


}
