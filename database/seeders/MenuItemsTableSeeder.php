<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_items')->delete();
        
        \DB::table('menu_items')->insert(array (
            0 => 
            array (
                'color' => NULL,
                'created_at' => '2023-04-02 19:16:09',
                'icon_class' => 'voyager-boat',
                'id' => 1,
                'menu_id' => 1,
                'order' => 1,
                'parameters' => NULL,
                'parent_id' => NULL,
                'route' => 'voyager.dashboard',
                'target' => '_self',
                'title' => 'Tablero',
                'updated_at' => '2023-04-02 19:16:09',
                'url' => '',
            ),
            1 => 
            array (
                'color' => NULL,
                'created_at' => '2023-04-02 19:16:09',
                'icon_class' => 'voyager-images',
                'id' => 2,
                'menu_id' => 1,
                'order' => 4,
                'parameters' => NULL,
                'parent_id' => NULL,
                'route' => 'voyager.media.index',
                'target' => '_self',
                'title' => 'Multimedia',
                'updated_at' => '2023-04-09 21:49:25',
                'url' => '',
            ),
            2 => 
            array (
                'color' => NULL,
                'created_at' => '2023-04-02 19:16:09',
                'icon_class' => 'voyager-person',
                'id' => 3,
                'menu_id' => 1,
                'order' => 3,
                'parameters' => NULL,
                'parent_id' => NULL,
                'route' => 'voyager.users.index',
                'target' => '_self',
                'title' => 'Usuarios',
                'updated_at' => '2023-04-02 19:16:09',
                'url' => '',
            ),
            3 => 
            array (
                'color' => NULL,
                'created_at' => '2023-04-02 19:16:09',
                'icon_class' => 'voyager-lock',
                'id' => 4,
                'menu_id' => 1,
                'order' => 2,
                'parameters' => NULL,
                'parent_id' => NULL,
                'route' => 'voyager.roles.index',
                'target' => '_self',
                'title' => 'Roles',
                'updated_at' => '2023-04-02 19:16:09',
                'url' => '',
            ),
            4 => 
            array (
                'color' => NULL,
                'created_at' => '2023-04-02 19:16:09',
                'icon_class' => 'voyager-tools',
                'id' => 5,
                'menu_id' => 1,
                'order' => 5,
                'parameters' => NULL,
                'parent_id' => NULL,
                'route' => NULL,
                'target' => '_self',
                'title' => 'Herramientas',
                'updated_at' => '2023-04-09 21:49:25',
                'url' => '',
            ),
            5 => 
            array (
                'color' => NULL,
                'created_at' => '2023-04-02 19:16:09',
                'icon_class' => 'voyager-list',
                'id' => 6,
                'menu_id' => 1,
                'order' => 1,
                'parameters' => NULL,
                'parent_id' => 5,
                'route' => 'voyager.menus.index',
                'target' => '_self',
                'title' => 'Diseñador de Menús',
                'updated_at' => '2023-04-09 21:49:25',
                'url' => '',
            ),
            6 => 
            array (
                'color' => NULL,
                'created_at' => '2023-04-02 19:16:09',
                'icon_class' => 'voyager-data',
                'id' => 7,
                'menu_id' => 1,
                'order' => 2,
                'parameters' => NULL,
                'parent_id' => 5,
                'route' => 'voyager.database.index',
                'target' => '_self',
                'title' => 'Base de Datos',
                'updated_at' => '2023-04-09 21:49:25',
                'url' => '',
            ),
            7 => 
            array (
                'color' => NULL,
                'created_at' => '2023-04-02 19:16:09',
                'icon_class' => 'voyager-compass',
                'id' => 8,
                'menu_id' => 1,
                'order' => 3,
                'parameters' => NULL,
                'parent_id' => 5,
                'route' => 'voyager.compass.index',
                'target' => '_self',
                'title' => 'Compás',
                'updated_at' => '2023-04-09 21:49:25',
                'url' => '',
            ),
            8 => 
            array (
                'color' => NULL,
                'created_at' => '2023-04-02 19:16:09',
                'icon_class' => 'voyager-bread',
                'id' => 9,
                'menu_id' => 1,
                'order' => 4,
                'parameters' => NULL,
                'parent_id' => 5,
                'route' => 'voyager.bread.index',
                'target' => '_self',
                'title' => 'BREAD',
                'updated_at' => '2023-04-09 21:49:25',
                'url' => '',
            ),
            9 => 
            array (
                'color' => '#000000',
                'created_at' => '2023-04-02 19:16:09',
                'icon_class' => 'voyager-settings',
                'id' => 10,
                'menu_id' => 1,
                'order' => 6,
                'parameters' => 'null',
                'parent_id' => NULL,
                'route' => 'voyager.settings.index',
                'target' => '_self',
                'title' => 'Ajustes',
                'updated_at' => '2023-04-09 21:50:59',
                'url' => '',
            ),
            10 => 
            array (
                'color' => NULL,
                'created_at' => '2023-04-02 19:26:05',
                'icon_class' => 'voyager-credit-card',
                'id' => 11,
                'menu_id' => 1,
                'order' => 2,
                'parameters' => NULL,
                'parent_id' => 21,
                'route' => 'voyager.transfer-data.index',
                'target' => '_self',
                'title' => 'Datos de transferencia',
                'updated_at' => '2023-04-09 21:53:30',
                'url' => '',
            ),
            11 => 
            array (
                'color' => NULL,
                'created_at' => '2023-04-02 19:58:31',
                'icon_class' => 'voyager-credit-cards',
                'id' => 13,
                'menu_id' => 1,
                'order' => 3,
                'parameters' => NULL,
                'parent_id' => 20,
                'route' => 'voyager.payment-methods.index',
                'target' => '_self',
                'title' => 'Métodos de pagos',
                'updated_at' => '2023-04-09 21:50:34',
                'url' => '',
            ),
            12 => 
            array (
                'color' => NULL,
                'created_at' => '2023-04-09 21:18:07',
                'icon_class' => 'voyager-shop',
                'id' => 15,
                'menu_id' => 1,
                'order' => 1,
                'parameters' => NULL,
                'parent_id' => 21,
                'route' => 'voyager.offices.index',
                'target' => '_self',
                'title' => 'Sucursales',
                'updated_at' => '2023-04-09 21:53:30',
                'url' => '',
            ),
            13 => 
            array (
                'color' => NULL,
                'created_at' => '2023-04-09 21:27:15',
                'icon_class' => 'voyager-data',
                'id' => 17,
                'menu_id' => 1,
                'order' => 3,
                'parameters' => NULL,
                'parent_id' => 21,
                'route' => 'voyager.products.index',
                'target' => '_self',
                'title' => 'Productos',
                'updated_at' => '2023-04-09 21:53:33',
                'url' => '',
            ),
            14 => 
            array (
                'color' => '#000000',
                'created_at' => '2023-04-09 21:49:05',
                'icon_class' => 'voyager-folder',
                'id' => 20,
                'menu_id' => 1,
                'order' => 8,
                'parameters' => '',
                'parent_id' => NULL,
                'route' => NULL,
                'target' => '_self',
                'title' => 'Catálogos',
                'updated_at' => '2023-04-09 21:53:44',
                'url' => '',
            ),
            15 => 
            array (
                'color' => '#000000',
                'created_at' => '2023-04-12 23:37:46',
                'icon_class' => 'voyager-people',
                'id' => 22,
                'menu_id' => 1,
                'order' => 10,
                'parameters' => 'null',
                'parent_id' => NULL,
                'route' => 'voyager.customers.index',
                'target' => '_self',
                'title' => 'Clientes',
                'updated_at' => '2023-04-13 21:22:32',
                'url' => '',
            ),
            16 => 
            array (
                'color' => NULL,
                'created_at' => '2024-11-11 21:56:30',
                'icon_class' => 'voyager-paw',
                'id' => 25,
                'menu_id' => 1,
                'order' => 13,
                'parameters' => NULL,
                'parent_id' => NULL,
                'route' => 'voyager.pets.index',
                'target' => '_self',
                'title' => 'Mascotas',
                'updated_at' => '2024-11-11 21:56:30',
                'url' => '',
            ),
            17 => 
            array (
                'color' => NULL,
                'created_at' => '2024-11-11 23:14:44',
                'icon_class' => 'voyager-file-text',
                'id' => 26,
                'menu_id' => 1,
                'order' => 14,
                'parameters' => NULL,
                'parent_id' => NULL,
                'route' => 'voyager.medical-histories.index',
                'target' => '_self',
                'title' => 'Historial Médico',
                'updated_at' => '2024-11-11 23:14:44',
                'url' => '',
            ),
        ));
        
        
    }
}