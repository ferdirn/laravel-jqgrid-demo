<?php namespace Demo\Repository;

use Illuminate\Database\Eloquent\Model;

use Mgallegos\LaravelJqgrid\Repositories\EloquentRepositoryAbstract;

class InvoiceRepository extends EloquentRepositoryAbstract {

	public function __construct(Model $Model)
	{
		$this->Database = $Model;
		
		$this->visibleColumns = array('id', 'client', 'number', 'date');
		
		$this->orderBy = array(array('id', 'asc'), array('client','desc'));
	}

}