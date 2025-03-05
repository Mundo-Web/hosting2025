<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImagenProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productos = [
            [   
                'order' => 1,
                'producto' => 'Plan Básico',
                'extract' => 'Nuestros planes de hosting cuentan con todo lo necesario para publicar su web y administrar sus cuentas de correo.',
                'description' => '
                <p>1 GB de Espacio de almacenamiento</p>
                <p>50 GB de Transferencia mensual</p>
                <p>15 Cuentas de correo POP/IMAP</p>
                <p>Cpanel de control en español</p>
                <p>1 Base de datos (Mysql - Postgres)</p>
                <p>1 Cuenta FTP</p>
                <p>Subdominios ilimitados</p>',
                'precio' => 351.00,
                'categoria_id' => 1,
                'visible' => 1,
                'status' => 1,
               
            ],
            [   
                'order' => 2,
                'producto' => 'Plan Avanzado',
                'extract' => 'Nuestros planes de hosting cuentan con todo lo necesario para publicar su web y administrar sus cuentas de correo.',
                'description' => '
                <p>5 GB de Espacio de almacenamiento</p>
                <p>100 GB de Transferencia mensual</p>
                <p>20 Cuentas de correo POP/IMAP</p>
                <p>Cpanel de control en español</p>
                <p>2 Base de datos (Mysql - Postgres)</p>
                <p>2 Cuenta FTP</p>
                <p>Subdominios ilimitados</p>',
                'precio' => 390.00,
                'categoria_id' => 1,
                'visible' => 1,
                'status' => 1,
               
            ],
            [   
                'order' => 3,
                'producto' => 'Plan Profesional',
                'extract' => 'Nuestros planes de hosting cuentan con todo lo necesario para publicar su web y administrar sus cuentas de correo.',
                'description' => '
                <p>10 GB de Espacio de almacenamiento</p>
                <p>300 GB de Transferencia mensual</p>
                <p>30 Cuentas de correo POP/IMAP</p>
                <p>Cpanel de control en español</p>
                <p>5 Base de datos (Mysql - Postgres)</p>
                <p>5 Cuenta FTP</p>
                <p>Subdominios ilimitados</p>',
                'precio' => 468.00,
                'categoria_id' => 1,
                'visible' => 1,
                'status' => 1,
               
            ],
            [   
                'order' => 4,
                'producto' => 'E-Junior',
                'extract' => 'Nuestros planes de hosting cuentan con todo lo necesario para publicar su web y administrar sus cuentas de correo.',
                'description' => '
                <p>100 GB de Espacio de almacenamiento</p>
                <p>Transferencia mensual ilimitada</p>
                <p>Cuentas de correo POP/IMAP ilimitadas</p>
                <p>Cpanel de control en español</p>
                <p>Base de datos (Mysql - Postgres) ilimitados</p>
                <p>Cuentas FTP ilimitados</p>
                <p>Subdominios ilimitados</p>',
                'precio' => 690.00,
                'categoria_id' => 2,
                'visible' => 1,
                'status' => 1,
               
            ],
            [   
                'order' => 5,
                'producto' => 'E-mediana',
                'extract' => 'Nuestros planes de hosting cuentan con todo lo necesario para publicar su web y administrar sus cuentas de correo.',
                'description' => '
                <p>200 GB de Espacio de almacenamiento</p>
                <p>Transferencia mensual ilimitada</p>
                <p>Cuentas de correo POP/IMAP ilimitadas</p>
                <p>Cpanel de control en español</p>
                <p>Base de datos (Mysql - Postgres) ilimitados</p>
                <p>Cuentas FTP ilimitados</p>
                <p>Subdominios ilimitados</p>',
                'precio' => 810.00,
                'categoria_id' => 2,
                'visible' => 1,
                'status' => 1,
               
            ],
            [   
                'order' => 6,
                'producto' => 'E-Grande',
                'extract' => 'Nuestros planes de hosting cuentan con todo lo necesario para publicar su web y administrar sus cuentas de correo.',
                'description' => '
                <p>300 GB de Espacio de almacenamiento</p>
                <p>Transferencia mensual ilimitada</p>
                <p>Cuentas de correo POP/IMAP ilimitadas</p>
                <p>Cpanel de control en español</p>
                <p>Base de datos (Mysql - Postgres) ilimitados</p>
                <p>Cuentas FTP ilimitados</p>
                <p>Subdominios ilimitados</p>',
                'precio' => 920.00,
                'categoria_id' => 2,
                'visible' => 1,
                'status' => 1,
               
            ],
        ];


        foreach ($productos as $productoData) {
            // Crear el producto
            $producto = Products::create([
                'order' => $productoData['order'],
                'producto' => $productoData['producto'],
                'extract' => $productoData['extract'],
                'description' => $productoData['description'],
                'precio' => $productoData['precio'],
                'categoria_id' => $productoData['categoria_id'],
                'visible' => $productoData['visible'],
                'status' => $productoData['status'],
            ]);
          
        }

    }
}
