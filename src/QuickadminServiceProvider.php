<?php

namespace Ayim\Quickadmin;

use illuminate\Support\ServiceProvider;


class QuickadminServiceProvider extends ServiceProvider {
	/**
	 *Indicates if loading of the provider is differed
	 *
	 *@var bool
	 */
	protected $defer = false;

	/**
	 * Registering the service provide to laravel illumate
	 *
	 *@return void
	 */
	public function register()
	{
		$this->mergeConfigFrom(__DIR__.'/../config/quickadmin.php');
	}
	//boot function
	public function register()
	{
		\Route::get('_admin_test', function(){
			return view('admin::layout.base');
		});
	//publishing assets
		$this->publishes([
			__DIR__.'/../../../almasaeed2010/adminlte' => public_path('ayim/quickadmin');
			__DIR__.'/../../../almasaeed2010/adminlte/plugins' => public_path('ayim/quickadmin/plugins');
			__DIR__.'/../../../almasaeed2010/adminlte/plugins' => public_path('ayim/quickadmin/plugins');
			__DIR__.'/../../../componets/font-awesome/css' => public_path('ayim/quickadmin/css');
			__DIR__.'/../../../componets/font-awesome/fonts' => public_path('ayim/quickadmin/fonts');
			__DIR__.'/../../../twbs/bootstrap/dist' => public_path('ayim/quickadmin');
			], 'pulic');
		$this->publishes([
			__DIR__. '/../resources/loaders' => app_path('Quickadmin')
			], 'loaders');
		$this->publishes([
			__DIR__.'/../config/quickadmin.php'=> config_path('quickadmin.php');
			], 'config');
		$this->loadViesFrom(__DIR__.'/../resources/views', 'quickadmin');
	}
}