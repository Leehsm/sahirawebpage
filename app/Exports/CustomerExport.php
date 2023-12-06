<?php

namespace App\Exports;

use App\Models\Promo;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class CustomerExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings():array{
        return[
            'Id',
            'name',
            'phone',
            'email',
            'address',
            'Created_at',
            'Updated_at' 
        ];
    }

    public function collection()
    {
        return Promo::all();
    }       
}
