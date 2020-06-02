<?php

namespace App\Exports;

use App\Models\Transaction;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TransactionExport implements FromCollection, WithHeadings
{
    private $_transactions;

	public function __construct($transactions) //$transactions là biến truyền vào bên TransactionExport($transactions)
	{
		$this->_transactions = $transactions;
	}

    public function collection()
    {
        $transactions = $this->_transactions;
    	$formatTransaction = [];

    	foreach ($transactions as $key => $item) {
    		$formatTransaction[] = [
    			'Stt' => $key,
    			'Tổng tiền' => number_format($item->tst_total_money),
    			'Mã đơn' => $item->tst_code,
    			'Name' => $item->tst_name,
    			'Email' => $item->tst_email,
    			'Phone' => $item->tst_phone,
    			'Nơi nhận' => $item->tst_address,
    			'Phân loại' => $item->tst_user_id ? "Thành viên" : "Khách",
    			'Trạng thái đơn hàng' => $item->getStatus($item->sts_status)['name'], //getStatus xem bên transaction.php
    			'Thanh toán' => $item->tst_type == 0 ? 'Chuyển khoản' : 'Tiền mặt' ,
    			'Mã khuyến mãi' => $item->tst_code_cuppon
    		];
    	}

    	return collect($formatTransaction);
    }

    public function headings(): array
    {
        return [
            'Stt',
            'Tổng tiền',
            'Mã đơn',
            'Name',
            'Email',
            'Phone',
            'Nơi nhận',
            'Phân loại',
            'Trạng thái đơn hàng',
            'Thanh toán',
            'Mã khuyến mãi',
        ];
    }
}
