<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "Admin Penjualan";
        $adminRole->save();

        //membuat the database seed.
        $memberRole = new Role();
        $memberRole->name = "member";
        $memberRole->display_name = "Member Penjualan";
        $memberRole->save();

        $userAdmin = new User;
        $userAdmin->name = "lira rahmawati";
        $userAdmin->email = "admin@gmail.com";
        $userAdmin->password = bcrypt("123123123");
        $userAdmin->save();
        $userAdmin->attachRole($adminRole);

        $userAdmin = new User;
        $userAdmin->name = "lira Rahmawati";
        $userAdmin->email = "karyawan@gmail.com";
        $userAdmin->password = bcrypt("123123123");
        $userAdmin->save();
        $userAdmin->attachRole($adminRole);

       
    }
}
