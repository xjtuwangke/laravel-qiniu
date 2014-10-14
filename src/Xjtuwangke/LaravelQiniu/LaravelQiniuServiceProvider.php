<?php namespace Xjtuwangke\LaravelQiniu;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;
use Qiniu\Conf;
use QiniuAPI\QiniuBucket;

class LaravelQiniuServiceProvider extends ServiceProvider {

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
		$this->package('xjtuwangke/laravel-qiniu');
		Conf::$QINIU_ACCESS_KEY = Config::get( 'laravel-qiniu::config.ACCESS_KEY' );
		Conf::$QINIU_SECRET_KEY = Config::get( 'laravel-qiniu::config.SECRET_KEY' );
		QiniuBucket::setDomain( Config::get( 'laravel-qiniu::config.domain' ) , Config::get( 'laravel-qiniu::config.bucket' ));
		QiniuBucket::setPrivate( Config::get( 'laravel-qiniu::config.private' ) );
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
