<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Profesion;


class ProfesionSeeder extends Seeder
{
    public function run()
    {
      
        $Profesion = new Profesion;
        $Profesion->name ='elisa';
        $Profesion->status ='0';
        $Profesion->save();
        $Profesion = new Profesion;
        $Profesion->name ='elisa';
        $Profesion->status ='0';
        $Profesion->save();
        $Profesion = new Profesion;
        $Profesion->name ='elisa';
        $Profesion->status ='0';
        $Profesion->save();
        $Profesion = new Profesion;
        $Profesion->name ='elisa';
        $Profesion->status ='0';
        $Profesion->save();
    }
}
