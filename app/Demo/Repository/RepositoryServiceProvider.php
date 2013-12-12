<?php namespace Demo\Repository;

use Illuminate\Support\ServiceProvider;

use Demo\Invoice;

class RepositoryServiceProvider extends ServiceProvider {
	/**
	 * Register the binding
	*
	* @return void
	*/
	public function register()
	{
		$this->app->bind('Demo\Repository\InvoiceRepository', function($app)
		{
			return new InvoiceRepository(new Invoice());
		});
		
		$this->app->bind('Demo\Repository\InvoiceItemRepository', function($app)
		{
			return new InvoiceItemRepository($app['db']);
		});
		
	}
	
}
