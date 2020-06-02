<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProductExport implements FromCollection, WithHeadings
{
    private $_products;

	public function __construct($products) //$transactions là biến truyền vào bên TransactionExport($transactions)
	{
		$this->_products = $products;
	}

    public function collection()
    {
        $products = $this->_products;
    	$formatProducts = [];

    	foreach ($products as $key => $item) {
    		$formatProducts[] = [
    			'Stt' => $key,
    			'Id'  => $item->id,
    			'Name' => $item->pro_name,
    			'Danh mục' => $item->category->c_name,
    			'Gía' => $item->pro_price,
    			'Sale' => $item->pro_sale,
    			'Tồn kho' => $item->pro_number
    		];
    	}
    	return collect($formatProducts);
        
    }

     public function headings(): array
    {
        return [
            'Stt',
            'Id',
            'Name',
            'Danh mục',
            'Gía',
            'Sale',
            'Tồn kho'
        ];
    }
}
