<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AccountType;
use Illuminate\Support\Facades\DB;

class AccountTypeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('account_types')->truncate();

        $account_types = array(
            array('id' => 1, 'name' => 'super_admin'),
            array('id' => 2, 'name' => 'rider'),
            array('id' => 3, 'name' => 'courier'),
            array('id' => 4, 'name' => 'customer'),
        );

        foreach ($account_types as $type){
            $type = AccountType::create($type);
        }
    }
}
