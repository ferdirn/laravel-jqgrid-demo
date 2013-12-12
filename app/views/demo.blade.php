@extends('layouts.base')

@section('container')

{{ Form::hidden('id', '', array('id'=>'id')) }}

<div class="col-lg-6 col-md-12 center">
	<div class="bs-callout bs-callout-warning">
      <h4>Invoices Grid</h4>
      <p>Select an invoice to see all of its items.</p>
    </div>
	{{ 	
		GridRender::setGridId("InvoiceGrid")
					->enablefilterToolbar()
	            	->setGridOption('url',URL::to('/grid-invoice-data'))
	            	->setGridOption('rowNum',5)            
	            	->setGridOption('width',500) 
	            	->setGridOption('height',172) 
	            	->setGridOption('rowList',array(5,10,15,20))
	            	->setGridOption('caption','Invoices')
	            	->setGridOption('viewrecords',true)
	            	->setNavigatorOptions('navigator', array('viewtext'=>'view'))
	            	->setNavigatorOptions('view',array('closeOnEscape'=>false))
	            	->setFilterToolbarOptions(array('autosearch'=>true))	            	 
	            	->setGridEvent('onSelectRow', 'onSelectRowEvent')
	            	->setNavigatorEvent('view', 'beforeShowForm', 'function(){alert("Before show form");}')
	            	->setFilterToolbarEvent('beforeSearch', 'function(){alert("Before search event");}') 
	            	->addColumn(array('label'=>'ID', 'name'=>'id', 'index'=>'id', 'width'=>55, 'align'=>'center'))
	            	->addColumn(array('label'=>'Client','index'=>'client','width'=>100))
	            	->addColumn(array('label'=>'Invoice #','index'=>'number', 'width'=>80, 'align'=>'center'))
	            	->addColumn(array('name'=>'Date','index'=>'date', 'width'=>80))
	            	->renderGrid();
	}}
</div>

<div class="col-lg-6 col-md-12 app-block center">
	<div class="bs-callout bs-callout-warning">
      <h4>Invoices items Grid</h4>
      <p> Items of the invoice selected in the Invoices Grid.</p>
    </div>
	{{          	
		GridRender::setGridId("InvoiceItemsGrid")
					->enablefilterToolbar()
	            	->setGridOption('url',URL::to('/grid-invoice-item-data'))
	            	->setGridOption('rowNum',5)            
	            	->setGridOption('width',500) 
	            	->setGridOption('rowList',array(5,10,15,20))
	            	->setGridOption('caption','Invoice items')
	            	->setGridOption('viewrecords',true)
	            	->setGridOption('footerrow',true)	            	
					->setGridOption('postData',array('filters'=>'{\'groupOp\':\'AND\',\'rules\':[{\'field\':\'DEMO_Invoice.id\',\'op\':\'eq\',\'data\':\'-1\'}]}'))
					->setGridEvent('loadComplete', 'onLoadCompleteEvent')
	            	->setFilterToolbarEvent('beforeClear','beforeClearEvent')          	            	
	            	->addColumn(array('label'=>'Invoice #', 'index'=>'number', 'align'=>'center'))            	
	            	->addColumn(array('label'=>'Description','index'=>'description'))
	            	->addColumn(array('label'=>'Unit Cost','index'=>'unitCost', 'formatter' => 'currency', 'formatoptions' => array('prefix'=>'$ ')))
	            	->addColumn(array('label'=>'Quantity','index'=>'quantity', 'align'=>'center'))
	            	->addColumn(array('label'=>'Total','index'=>'total' , 'align'=>'right', 'formatter' => 'currency', 'formatoptions' => array('prefix'=>'$ ')))
	            	->addColumn(array('label'=>'InvoiceId','name'=>'invoice-id','index'=>'DEMO_Invoice.id','hidden' => true, 'searchoptions'=>array('sopt'=>array('eq'))))
	            	->renderGrid();
	}}
</div>
@stop

@section('javascript')
<script type='text/javascript'>
	function onLoadCompleteEvent(data)
	{ 			    	
	    $(this).jqGrid('footerData','set', {'quantity': 'Total:', 'total': $(this).jqGrid('getCol', 'total', false, 'sum')});	
	}
	
    function onSelectRowEvent(id)
    { 		
        var row = $(this).getRowData(id)	
        $('#id').val(row['id']);
        $('#InvoiceItemsGrid')[0].clearToolbar();
        $('#InvoiceItemsGrid').setCaption('Items of invoice #' + row['id']);	
	}

	function beforeClearEvent()
	{
		$('#gs_invoice-id').val($('#id').val());		
		$('#InvoiceItemsGrid').setGridParam({'postData':{"filters":"{'groupOp':'AND','rules':[{'field':'DEMO_Invoice.id','op':'eq','data':'"+$('#id').val()+"'}]}"}});
	}		
</script>

@stop