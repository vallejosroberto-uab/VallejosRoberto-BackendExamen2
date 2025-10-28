<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;  // ← ¡AÑADE ESTA LÍNEA!

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('empleados')->insert([
            ['nombre' => 'Juan', 'apellido' => 'Pérez', 'correo' => 'juan1@gmail.com', 'salario' => 1500.00],
            ['nombre' => 'María', 'apellido' => 'Gómez', 'correo' => 'maria2@gmail.com', 'salario' => 1600.00],
            ['nombre' => 'Carlos', 'apellido' => 'López', 'correo' => 'carlos3@gmail.com', 'salario' => 1700.00],
            ['nombre' => 'Ana', 'apellido' => 'Martínez', 'correo' => 'ana4@gmail.com', 'salario' => 1800.00],
            ['nombre' => 'Luis', 'apellido' => 'Rodríguez', 'correo' => 'luis5@gmail.com', 'salario' => 1900.00],
            ['nombre' => 'Laura', 'apellido' => 'Hernández', 'correo' => 'laura6@gmail.com', 'salario' => 2000.00],
            ['nombre' => 'Diego', 'apellido' => 'García', 'correo' => 'diego7@gmail.com', 'salario' => 2100.00],
            ['nombre' => 'Sofía', 'apellido' => 'Fernández', 'correo' => 'sofia8@gmail.com', 'salario' => 2200.00],
            ['nombre' => 'Miguel', 'apellido' => 'Ruiz', 'correo' => 'miguel9@gmail.com', 'salario' => 2300.00],
            ['nombre' => 'Pedro', 'apellido' => 'López', 'correo' => 'pedro10@gmail.com', 'salario' => 2400.00],
        ]);
    }
}