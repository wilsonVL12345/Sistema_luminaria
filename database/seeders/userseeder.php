<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class userseeder extends Seeder
{
   /**
    * Run the database seeds.
    */
   public function run(): void
   {
      $user = new User();
      $user->Nombres = "userprueba";
      $user->Paterno = "userprueba";
      $user->Materno = "userprueba";
      $user->Ci = "000000";
      $user->Expedido = "userprueba";
      $user->Celular = "000000";
      $user->Genero = "userprueba";
      $user->Cargo = "userprueba";
      $user->Lugar_Designado = "userprueba";
      $user->Estado = "userprueba";
      $user->Usuario = "userprueba";
      $user->Password = "userprueba";
      $user->save();

      $user = new User();
      $user->Nombres = "admin";
      $user->Paterno = "admin";
      $user->Materno = "admin";
      $user->Ci = "000000";
      $user->Expedido = "userprueba";
      $user->Celular = "000000";
      $user->Genero = "userprueba";
      $user->Cargo = "userprueba";
      $user->Lugar_Designado = "userprueba";
      $user->Estado = "userprueba";
      $user->Usuario = "admin@gob.bo";
      $user->Password = "admin";
      $user->save();
   }
}
