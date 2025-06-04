<?php

namespace App\Exports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class HistoryEmployeeExport implements FromCollection, WithHeadings, WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */

    public function __construct(Collection $orders)
    {
        $this->item = $orders;
    }

    public function collection()
    {
        return $this->item;
    }

    public function map($attributes): array
    {
        $status_text = match ($attributes->status) {
            0 => 'Pending',
            1 => 'In Progress',
            2 => 'Completed',
            3 =>  'Declined',
            default => 'unknown',
        };

        $price = "Rp ".  number_format($attributes->product->price ?? 0, 0, ',', '.') ;

        $timestamp = $attributes->updated_at->format('d M Y');

        return [
            $attributes->id,
            $attributes->student->people->name,
            $attributes->product->name,
            $price,
            $status_text,
            $timestamp,
        ];
    }

    public function headings(): array
    {
        return [
            'ID',
            'Student',
            'Product',
            'Price',
            'Status',
            'Time Stamp',
            // match these with the attributes of your model
        ];
    }
}
