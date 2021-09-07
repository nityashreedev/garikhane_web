<?php

namespace App\Exports;

use App\Models\Karmabhomi;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use App\Models\YearlyProduction;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class KarmabhomiExport implements FromView, ShouldAutoSize
{
    public function __construct($karmabhomi_ids)
    {
        $this->ids = $karmabhomi_ids;
    }

    public function view(): View
    {
        return view('admin.export.karmabhomiExport', [
            'karmabhomi' => Karmabhomi::whereIn('id', $this->ids)->get()
        ]);

        return view('admin.export.test', [
            'karmabhomi'=>Karmabhomi::whereIn('id', $this->ids)->get()
        ]);
    }
}