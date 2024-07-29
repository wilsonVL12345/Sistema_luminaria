<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class userseeder extends Seeder
{
   /**
    * Run the database seeds.
    */
   public function run(): void
   {
      /*  $user = new User();
      $user->name = "userprueba";
      $user->Paterno = "userprueba";
      $user->Materno = "userprueba";
      $user->Ci = "000000";
      $user->Expedido = "userprueba";
      $user->Celular = "000000";
      $user->Genero = "userprueba";
      $user->Cargo = "userprueba";
      $user->Lugar_Designado = "userprueba";
      $user->Estado = "userprueba";
      $user->email = 'userprueba@gob.bo';
      $user->Password = bcrypt('userprueba');
      $user->save(); */

      $user = new User();
      $user->name = "admin";
      $user->Paterno = "admin";
      $user->Materno = "admin";
      $user->Ci = "000000";
      $user->Expedido = "userprueba";
      $user->Celular = "000000";
      $user->Genero = "userprueba";
      $user->Cargo = "userprueba";
      $user->Lugar_Designado = "userprueba";
      $user->Estado = "userprueba";
      $user->email = "admin@gob.bo";
      // $user->Password = Hash::make('adminadmin');
      $user->Password = "adminadmin";
      $user->save();
   }
}
