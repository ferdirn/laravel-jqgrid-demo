<?php

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;
use Mgallegos\LaravelJqgrid\Encoders\RequestedDataInterface;
use Demo\Repository\InvoiceRepository;
use Demo\Repository\InvoiceItemRepository;

class AppController extends BaseController {

    protected $GridEncoder;
    
    protected $InvoiceRepository;
    
    protected $InvoiceItemRepository;

    public function __construct(RequestedDataInterface $GridEncoder, InvoiceRepository $InvoiceRepository, InvoiceItemRepository $InvoiceItemRepository)
    {
        $this->GridEncoder = $GridEncoder;
        
        $this->InvoiceRepository = $InvoiceRepository;
        
        $this->InvoiceItemRepository = $InvoiceItemRepository;
    }

    public function getIndex()
    {

        return View::make('demo');

    }

    public function postGridInvoiceData()
    {
        $this->GridEncoder->encodeRequestedData($this->InvoiceRepository, Input::all());
    }
    
    public function postGridInvoiceItemData()
    {
    	$this->GridEncoder->encodeRequestedData($this->InvoiceItemRepository, Input::all());
    }

}