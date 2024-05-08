<?php

namespace App\Imports;

use App\Models\Group;
use Maatwebsite\Excel\Concerns\ToModel;

class GroupsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // if (isset( $row['name'], $row['status'])) {
            return new Group([
                'name' => $row['0'],
            ]);
        // }

        // Return null if any required key is missing
        // return null;
    }
}
