<?php use Demo\InvoiceItem;

class InvoiceItemTableSeeder extends Seeder {

	public function run()
	{
		DB::table('DEMO_Invoice_Item')->delete();
				
		InvoiceItem::create(array('description' => 'Item A-1','unitCost' => 11.00,'quantity' => 1, 'total' =>11.00, 'invoice'=>1));
		InvoiceItem::create(array('description' => 'Item A-2','unitCost' => 12.00,'quantity' => 1, 'total' =>12.00, 'invoice'=>1));
		InvoiceItem::create(array('description' => 'Item A-3','unitCost' => 13.00,'quantity' => 1, 'total' =>13.00, 'invoice'=>1));
		InvoiceItem::create(array('description' => 'Item A-4','unitCost' => 14.00,'quantity' => 1, 'total' =>14.00, 'invoice'=>1));
		InvoiceItem::create(array('description' => 'Item A-5','unitCost' => 15.00,'quantity' => 1, 'total' =>15.00, 'invoice'=>1));
		InvoiceItem::create(array('description' => 'Item A-6','unitCost' => 16.00,'quantity' => 1, 'total' =>16.00, 'invoice'=>1));

		InvoiceItem::create(array('description' => 'Item B-1','unitCost' => 9.00,'quantity' => 1, 'total' =>9.00, 'invoice'=>2));
		InvoiceItem::create(array('description' => 'Item B-2','unitCost' => 2.00,'quantity' => 1, 'total' =>2.00, 'invoice'=>2));
		InvoiceItem::create(array('description' => 'Item B-3','unitCost' => 3.00,'quantity' => 1, 'total' =>3.00, 'invoice'=>2));
		InvoiceItem::create(array('description' => 'Item B-4','unitCost' => 9.00,'quantity' => 1, 'total' =>9.00, 'invoice'=>2));
		
		InvoiceItem::create(array('description' => 'Item C-1','unitCost' => 6.00,'quantity' => 1, 'total' =>6.00, 'invoice'=>3));
		InvoiceItem::create(array('description' => 'Item C-2','unitCost' => 5.00,'quantity' => 1, 'total' =>5.00, 'invoice'=>3));

		InvoiceItem::create(array('description' => 'Item D-1','unitCost' => 2.00,'quantity' => 1, 'total' =>2.00, 'invoice'=>4));
		InvoiceItem::create(array('description' => 'Item D-2','unitCost' => 4.00,'quantity' => 1, 'total' =>4.00, 'invoice'=>4));
		InvoiceItem::create(array('description' => 'Item D-3','unitCost' => 6.00,'quantity' => 1, 'total' =>6.00, 'invoice'=>4));
		InvoiceItem::create(array('description' => 'Item D-4','unitCost' => 8.00,'quantity' => 1, 'total' =>8.00, 'invoice'=>4));
		InvoiceItem::create(array('description' => 'Item D-5','unitCost' => 10.00,'quantity' => 1, 'total' =>10.00, 'invoice'=>4));
		
		InvoiceItem::create(array('description' => 'Item E-1','unitCost' => 3.00,'quantity' => 1, 'total' =>3.00, 'invoice'=>5));
		InvoiceItem::create(array('description' => 'Item E-2','unitCost' => 6.00,'quantity' => 1, 'total' =>6.00, 'invoice'=>5));
		
		InvoiceItem::create(array('description' => 'Item F-1','unitCost' => 1.00,'quantity' => 1, 'total' =>1.00, 'invoice'=>6));
		InvoiceItem::create(array('description' => 'Item F-2','unitCost' => 2.00,'quantity' => 1, 'total' =>2.00, 'invoice'=>6));
		InvoiceItem::create(array('description' => 'Item F-3','unitCost' => 3.00,'quantity' => 1, 'total' =>3.00, 'invoice'=>6));
		
		InvoiceItem::create(array('description' => 'Item G-1','unitCost' => 3.00,'quantity' => 1, 'total' =>4.00, 'invoice'=>7));
		InvoiceItem::create(array('description' => 'Item G-2','unitCost' => 6.00,'quantity' => 1, 'total' =>6.00, 'invoice'=>7));
		InvoiceItem::create(array('description' => 'Item G-3','unitCost' => 9.00,'quantity' => 1, 'total' =>9.00, 'invoice'=>7));
		
		InvoiceItem::create(array('description' => 'Item H-1','unitCost' => 3.00,'quantity' => 1, 'total' =>4.00, 'invoice'=>8));
		InvoiceItem::create(array('description' => 'Item H-2','unitCost' => 6.00,'quantity' => 1, 'total' =>6.00, 'invoice'=>8));
		InvoiceItem::create(array('description' => 'Item H-3','unitCost' => 9.00,'quantity' => 1, 'total' =>9.00, 'invoice'=>8));
		InvoiceItem::create(array('description' => 'Item H-4','unitCost' => 12.00,'quantity' => 1, 'total' =>12.00, 'invoice'=>8));
		InvoiceItem::create(array('description' => 'Item H-5','unitCost' => 15.00,'quantity' => 1, 'total' =>61500, 'invoice'=>8));	

		InvoiceItem::create(array('description' => 'Item I-1','unitCost' => 3.00,'quantity' => 1, 'total' =>3.00, 'invoice'=>9));
		InvoiceItem::create(array('description' => 'Item I-2','unitCost' => 6.00,'quantity' => 1, 'total' =>6.00, 'invoice'=>9));
		InvoiceItem::create(array('description' => 'Item I-3','unitCost' => 9.00,'quantity' => 1, 'total' =>9.00, 'invoice'=>9));
		InvoiceItem::create(array('description' => 'Item I-4','unitCost' => 12.00,'quantity' => 1, 'total' =>12.00, 'invoice'=>9));
		InvoiceItem::create(array('description' => 'Item I-5','unitCost' => 15.00,'quantity' => 1, 'total' =>61500, 'invoice'=>9));
		
		InvoiceItem::create(array('description' => 'Item J-1','unitCost' => 3.00,'quantity' => 1, 'total' =>3.00, 'invoice'=>10));
		InvoiceItem::create(array('description' => 'Item J-2','unitCost' => 4.00,'quantity' => 1, 'total' =>4.00, 'invoice'=>10));
		InvoiceItem::create(array('description' => 'Item J-3','unitCost' => 5.00,'quantity' => 1, 'total' =>5.00, 'invoice'=>10));
		
		InvoiceItem::create(array('description' => 'Item K-1','unitCost' => 45.00,'quantity' => 1, 'total' =>45.00, 'invoice'=>11));
		
		InvoiceItem::create(array('description' => 'Item L-1','unitCost' => 12.00,'quantity' => 1, 'total' =>12.00, 'invoice'=>12));
		InvoiceItem::create(array('description' => 'Item L-2','unitCost' => 16.00,'quantity' => 1, 'total' =>16.00, 'invoice'=>12));
		
		InvoiceItem::create(array('description' => 'Item M-1','unitCost' => 3.00,'quantity' => 1, 'total' =>3.00, 'invoice'=>13));
		InvoiceItem::create(array('description' => 'Item M-2','unitCost' => 6.00,'quantity' => 1, 'total' =>6.00, 'invoice'=>13));
		InvoiceItem::create(array('description' => 'Item M-3','unitCost' => 7.00,'quantity' => 1, 'total' =>7.00, 'invoice'=>13));
		InvoiceItem::create(array('description' => 'Item M-4','unitCost' => 12.00,'quantity' => 1, 'total' =>12.00, 'invoice'=>13));
		
		InvoiceItem::create(array('description' => 'Item N-1','unitCost' => 23.00,'quantity' => 1, 'total' =>23.00, 'invoice'=>14));
		InvoiceItem::create(array('description' => 'Item N-2','unitCost' => 14.00,'quantity' => 1, 'total' =>14.00, 'invoice'=>14));
		
		InvoiceItem::create(array('description' => 'Item O-1','unitCost' => 1.00,'quantity' => 1, 'total' =>1.00, 'invoice'=>15));
		InvoiceItem::create(array('description' => 'Item O-2','unitCost' => 2.00,'quantity' => 1, 'total' =>2.00, 'invoice'=>15));
		
		InvoiceItem::create(array('description' => 'Item P-1','unitCost' => 2.00,'quantity' => 1, 'total' =>2.00, 'invoice'=>14));
		InvoiceItem::create(array('description' => 'Item P-2','unitCost' => 1.00,'quantity' => 1, 'total' =>1.00, 'invoice'=>14));
		
		InvoiceItem::create(array('description' => 'Item Q-1','unitCost' => 2.00,'quantity' => 1, 'total' =>2.00, 'invoice'=>15));
		InvoiceItem::create(array('description' => 'Item Q-2','unitCost' => 99.00,'quantity' => 1, 'total' =>99.00, 'invoice'=>15));
		
		InvoiceItem::create(array('description' => 'Item R-1','unitCost' => 7.00,'quantity' => 1, 'total' =>7.00, 'invoice'=>16));
		InvoiceItem::create(array('description' => 'Item R-2','unitCost' => 9.00,'quantity' => 1, 'total' =>9.00, 'invoice'=>16));
		
		InvoiceItem::create(array('description' => 'Item S-1','unitCost' => 34.00,'quantity' => 1, 'total' =>34.00, 'invoice'=>17));
		InvoiceItem::create(array('description' => 'Item S-2','unitCost' => 67.00,'quantity' => 1, 'total' =>67.00, 'invoice'=>17));
		
		InvoiceItem::create(array('description' => 'Item T-1','unitCost' => 12.00,'quantity' => 1, 'total' =>12.00, 'invoice'=>18));
		InvoiceItem::create(array('description' => 'Item T-2','unitCost' => 178.00,'quantity' => 1, 'total' =>178.00, 'invoice'=>18));
		
		InvoiceItem::create(array('description' => 'Item U-1','unitCost' => 12.00,'quantity' => 1, 'total' =>12.00, 'invoice'=>19));
		InvoiceItem::create(array('description' => 'Item U-2','unitCost' => 11.00,'quantity' => 1, 'total' =>11.00, 'invoice'=>19));
		
		InvoiceItem::create(array('description' => 'Item V-1','unitCost' => 12.00,'quantity' => 1, 'total' =>12.00, 'invoice'=>20));
		InvoiceItem::create(array('description' => 'Item V-2','unitCost' => 15.00,'quantity' => 1, 'total' =>15.00, 'invoice'=>20));				
	}

}