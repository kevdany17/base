<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => 'system',
                'display_name' => 'sistema',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => 'system',
                'display_name' => 'sistema',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => 'system',
                'display_name' => 'sistema',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => 'system',
                'display_name' => 'sistema',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => 'system',
                'display_name' => 'sistema',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'display_name' => 'menús',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'display_name' => 'menús',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'display_name' => 'menús',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'display_name' => 'menús',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'display_name' => 'menús',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'display_name' => 'roles',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'display_name' => 'roles',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'display_name' => 'roles',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'display_name' => 'roles',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'display_name' => 'roles',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'display_name' => 'usuarios',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'display_name' => 'usuarios',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'display_name' => 'usuarios',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'display_name' => 'usuarios',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'display_name' => 'usuarios',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'display_name' => 'ajustes',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'display_name' => 'ajustes',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'display_name' => 'ajustes',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'display_name' => 'ajustes',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'display_name' => 'ajustes',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_transfer_data',
                'table_name' => 'transfer_data',
                'display_name' => 'transferencia de datos',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'read_transfer_data',
                'table_name' => 'transfer_data',
                'display_name' => 'transferencia de datos',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'edit_transfer_data',
                'table_name' => 'transfer_data',
                'display_name' => 'transferencia de datos',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'add_transfer_data',
                'table_name' => 'transfer_data',
                'display_name' => 'transferencia de datos',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'delete_transfer_data',
                'table_name' => 'transfer_data',
                'display_name' => 'transferencia de datos',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'browse_modules',
                'table_name' => 'modules',
                'display_name' => 'módulos',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'read_modules',
                'table_name' => 'modules',
                'display_name' => 'módulos',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'edit_modules',
                'table_name' => 'modules',
                'display_name' => 'módulos',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'add_modules',
                'table_name' => 'modules',
                'display_name' => 'módulos',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'delete_modules',
                'table_name' => 'modules',
                'display_name' => 'módulos',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'browse_payment_methods',
                'table_name' => 'payment_methods',
                'display_name' => 'métodos de pago',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'read_payment_methods',
                'table_name' => 'payment_methods',
                'display_name' => 'métodos de pago',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'edit_payment_methods',
                'table_name' => 'payment_methods',
                'display_name' => 'métodos de pago',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'add_payment_methods',
                'table_name' => 'payment_methods',
                'display_name' => 'métodos de pago',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'delete_payment_methods',
                'table_name' => 'payment_methods',
                'display_name' => 'métodos de pago',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'display_name' => 'categorías',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'display_name' => 'categorías',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'display_name' => 'categorías',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'display_name' => 'categorías',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'display_name' => 'categorías',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            45 => 
            array (
                'id' => 46,
                'key' => 'browse_offices',
                'table_name' => 'offices',
                'display_name' => 'oficinas',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            46 => 
            array (
                'id' => 47,
                'key' => 'read_offices',
                'table_name' => 'offices',
                'display_name' => 'oficinas',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            47 => 
            array (
                'id' => 48,
                'key' => 'edit_offices',
                'table_name' => 'offices',
                'display_name' => 'oficinas',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            48 => 
            array (
                'id' => 49,
                'key' => 'add_offices',
                'table_name' => 'offices',
                'display_name' => 'oficinas',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            49 => 
            array (
                'id' => 50,
                'key' => 'delete_offices',
                'table_name' => 'offices',
                'display_name' => 'oficinas',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            50 => 
            array (
                'id' => 51,
                'key' => 'browse_units',
                'table_name' => 'units',
                'display_name' => 'unidades',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            51 => 
            array (
                'id' => 52,
                'key' => 'read_units',
                'table_name' => 'units',
                'display_name' => 'unidades',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            52 => 
            array (
                'id' => 53,
                'key' => 'edit_units',
                'table_name' => 'units',
                'display_name' => 'unidades',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            53 => 
            array (
                'id' => 54,
                'key' => 'add_units',
                'table_name' => 'units',
                'display_name' => 'unidades',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            54 => 
            array (
                'id' => 55,
                'key' => 'delete_units',
                'table_name' => 'units',
                'display_name' => 'unidades',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            55 => 
            array (
                'id' => 56,
                'key' => 'browse_products',
                'table_name' => 'products',
                'display_name' => 'productos',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            56 => 
            array (
                'id' => 57,
                'key' => 'read_products',
                'table_name' => 'products',
                'display_name' => 'productos',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            57 => 
            array (
                'id' => 58,
                'key' => 'edit_products',
                'table_name' => 'products',
                'display_name' => 'productos',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            58 => 
            array (
                'id' => 59,
                'key' => 'add_products',
                'table_name' => 'products',
                'display_name' => 'productos',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            59 => 
            array (
                'id' => 60,
                'key' => 'delete_products',
                'table_name' => 'products',
                'display_name' => 'productos',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            60 => 
            array (
                'id' => 61,
                'key' => 'browse_movement_types',
                'table_name' => 'movement_types',
                'display_name' => 'tipos de movimientos',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            61 => 
            array (
                'id' => 62,
                'key' => 'read_movement_types',
                'table_name' => 'movement_types',
                'display_name' => 'tipos de movimientos',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            62 => 
            array (
                'id' => 63,
                'key' => 'edit_movement_types',
                'table_name' => 'movement_types',
                'display_name' => 'tipos de movimientos',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            63 => 
            array (
                'id' => 64,
                'key' => 'add_movement_types',
                'table_name' => 'movement_types',
                'display_name' => 'tipos de movimientos',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            64 => 
            array (
                'id' => 65,
                'key' => 'delete_movement_types',
                'table_name' => 'movement_types',
                'display_name' => 'tipos de movimientos',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            65 => 
            array (
                'id' => 66,
                'key' => 'browse_inventories',
                'table_name' => 'inventories',
                'display_name' => 'inventarios',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            66 => 
            array (
                'id' => 67,
                'key' => 'read_inventories',
                'table_name' => 'inventories',
                'display_name' => 'inventarios',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            67 => 
            array (
                'id' => 68,
                'key' => 'edit_inventories',
                'table_name' => 'inventories',
                'display_name' => 'inventarios',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            68 => 
            array (
                'id' => 69,
                'key' => 'add_inventories',
                'table_name' => 'inventories',
                'display_name' => 'inventarios',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            69 => 
            array (
                'id' => 70,
                'key' => 'delete_inventories',
                'table_name' => 'inventories',
                'display_name' => 'inventarios',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            70 => 
            array (
                'id' => 71,
                'key' => 'browse_customers',
                'table_name' => 'customers',
                'display_name' => 'clientes',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            71 => 
            array (
                'id' => 72,
                'key' => 'read_customers',
                'table_name' => 'customers',
                'display_name' => 'clientes',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            72 => 
            array (
                'id' => 73,
                'key' => 'edit_customers',
                'table_name' => 'customers',
                'display_name' => 'clientes',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            73 => 
            array (
                'id' => 74,
                'key' => 'add_customers',
                'table_name' => 'customers',
                'display_name' => 'clientes',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            74 => 
            array (
                'id' => 75,
                'key' => 'delete_customers',
                'table_name' => 'customers',
                'display_name' => 'clientes',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            75 => 
            array (
                'id' => 76,
                'key' => 'browse_whatsapp_templates',
                'table_name' => 'whatsapp_templates',
                'display_name' => 'plantillas de whatsapp',
                'created_at' => '2023-05-18 11:01:23',
                'updated_at' => '2023-05-18 11:01:23',
            ),
            76 => 
            array (
                'id' => 77,
                'key' => 'read_whatsapp_templates',
                'table_name' => 'whatsapp_templates',
                'display_name' => 'plantillas de whatsapp',
                'created_at' => '2023-05-18 11:01:23',
                'updated_at' => '2023-05-18 11:01:23',
            ),
            77 => 
            array (
                'id' => 78,
                'key' => 'edit_whatsapp_templates',
                'table_name' => 'whatsapp_templates',
                'display_name' => 'plantillas de whatsapp',
                'created_at' => '2023-05-18 11:01:23',
                'updated_at' => '2023-05-18 11:01:23',
            ),
            78 => 
            array (
                'id' => 79,
                'key' => 'add_whatsapp_templates',
                'table_name' => 'whatsapp_templates',
                'display_name' => 'plantillas de whatsapp',
                'created_at' => '2023-05-18 11:01:23',
                'updated_at' => '2023-05-18 11:01:23',
            ),
            79 => 
            array (
                'id' => 80,
                'key' => 'delete_whatsapp_templates',
                'table_name' => 'whatsapp_templates',
                'display_name' => 'plantillas de whatsapp',
                'created_at' => '2023-05-18 11:01:23',
                'updated_at' => '2023-05-18 11:01:23',
            ),
        ));
        
        
    }
}