<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserSeeder extends Seeder
{

    public function run()
    {
        $User = new User;
        $User->name ='elisa';
        $User->id_profesiones =2;
        $User->lastName ='elkisa';
        $User->email ='elisa@gfainp.com';
        $User->status ='0';
        $User->save();
        $User = new User;
        $User->name ='dos';
        $User->id_profesiones =2;
        $User->lastName ='doss';
        $User->email ='dosmail';
        $User->status ='0';
        $User->save();
        $User = new User;
        $User->name ='tres';
        $User->id_profesiones =2;
        $User->lastName ='tre';
        $User->email ='tresmail';
        $User->status ='0';
        $User->save();
    }}