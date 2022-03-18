<?php

namespace App\Exports;

use App\Models\Product;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProductExport implements FromCollection, WithHeadings
{
    /**
    * @return Collection
    */
    public function collection(): Collection
    {
        return Product::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'Giá',
            'Image path',
            'Nội dung',
            'User id',
            'Category id',
            'Created at',
            'Updated at',
            'Image name',
            'Delete at',
        ];
    }
}
