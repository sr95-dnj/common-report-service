<?php

namespace App\Imports;

use App\Models\Institute\Institute;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Lib\B2U;

class InstitutesImport implements ToModel
{
    public $division_id;
    public $district_id;
    public $thana_id;
    public $b2u;


    public function __construct($division_id = '', $district_id = '', $thana_id = '')
    {
        $this->division_id = $division_id;
        $this->district_id = $district_id;
        $this->thana_id = $thana_id;
        $this->b2u = new B2U;
    }

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Institute([
            'division_id' => $this->division_id,
            'district_id' => $this->district_id,
            'thana_id' => $this->thana_id,
            'institute_name_bn' => $this->b2u->convertBijoyToUnicode($row[0]),
            'institute_name_en' => $this->b2u->convertBijoyToUnicode($row[0]),
            'post_bu' => $this->b2u->convertBijoyToUnicode($row[1]),
            'document_no' => $this->b2u->convertBijoyToUnicode($row[2]),
            'previous_inspections' => implode(',', array_slice($row, 3, 19))
        ]);
    }
}
