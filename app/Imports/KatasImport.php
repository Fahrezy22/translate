<?php

namespace App\Imports;

use App\Models\Kata;
use Maatwebsite\Excel\Concerns\ToModel;

class KatasImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Kata([
            'indonesia'     => $row[0],
            'daerah'        => $row[1],
        ]);
    }
}
