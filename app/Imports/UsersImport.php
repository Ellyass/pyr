<?php

namespace App\Imports;
use App\Model\ZirveFile;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Model\Test;


class UsersImport implements ToCollection
{

    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {

            ZirveFile::create([
                'zirve_date' => $row[1],
                'seri' => $row[2],
                'evrak_no' => $row[3],
                'cari_name' => $row[4],
                'stock_code' => $row[5],
                'stock_name' => $row[6],
                'amount' => $row[7],
                'unit' => $row[8],
                'total' => $row[9],
                'kdv' => $row[10],
                'kdv_money' => $row[11],
                'stok' => $row[12]
            ]);
        }
        foreach ($rows as $row) {

            ZirveFile::create([
                'zirve_date' => $row[1],
                'seri' => $row[2],
                'evrak_no' => $row[3],
                'cari_name' => $row[4],
                'stock_code' => $row[5],
                'stock_name' => $row[6],
                'amount' => $row[7],
                'unit' => $row[8],
                'total' => $row[9],
                'kdv' => $row[10],
                'kdv_money' => $row[11],
                'stok' => $row[12],
            ]);
        }
    }
}


