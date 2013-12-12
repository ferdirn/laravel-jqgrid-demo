<?php namespace Demo\Repository;

use Illuminate\Database\ConnectionResolverInterface as Resolver;

use Mgallegos\LaravelJqgrid\Repositories\EloquentRepositoryAbstract;


class InvoiceItemRepository extends EloquentRepositoryAbstract {

	public function __construct(Resolver $Resolver)
	{
		$this->Database = $Resolver->table('DEMO_Invoice_Item')
									->join('DEMO_Invoice', 'DEMO_Invoice_Item.invoice', '=', 'DEMO_Invoice.id');
											
		$this->visibleColumns = array('number','description','unitCost','quantity','total','DEMO_Invoice.id');
		
		$this->orderBy = array(array('DEMO_Invoice_Item.id', 'asc'));
	}

}
