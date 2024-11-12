<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'admin.title',
                'display_name' => 'Nombre de la empresa',
                'value' => 'Casa Wuauyacan',
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Admin',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'admin.description',
                'display_name' => 'Eslogan o descripción de la empresa',
                'value' => 'Guardería, Hospedaje y Adiestramiento Canino.',
                'details' => '',
                'type' => 'text',
                'order' => 2,
                'group' => 'Admin',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'admin.loader',
                'display_name' => 'Imagen de carga del administrador',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 3,
                'group' => 'Admin',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'admin.icon_image',
                'display_name' => 'Ícono del administrador',
                'value' => 'settings/November2024/vX6swvCkKVBiIqaTCtfV.png',
                'details' => '',
                'type' => 'image',
                'order' => 4,
                'group' => 'Admin',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'admin.bg_image',
                'display_name' => 'Imagen de fondo del administrador',
                'value' => NULL,
                'details' => '',
                'type' => 'image',
                'order' => 5,
                'group' => 'Admin',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'admin.address',
                'display_name' => 'Dirección de la empresa',
                'value' => '#',
                'details' => '',
                'type' => 'text',
                'order' => 6,
                'group' => 'Admin',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'admin.email',
                'display_name' => 'Correo electrónico de contacto',
                'value' => 'example@gmail.com',
                'details' => '',
                'type' => 'text',
                'order' => 7,
                'group' => 'Admin',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'admin.phone',
                'display_name' => 'Número de whatsapp de contacto',
                'value' => '###-###-####',
                'details' => '',
                'type' => 'text',
                'order' => 8,
                'group' => 'Admin',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'admin.policies',
                'display_name' => 'Políticas de la empresa',
                'value' => '<div><div><strong>Lorem ipsum</strong> dolor sit amet, consectetur adipisicing elit. Aspernatur, nulla eum libero officiis iste, blanditiis eos fugiat perspiciatis eius sint labore quia veritatis autem quod placeat porro, deleniti earum. Molestiae?</div></div>',
                'details' => '',
                'type' => 'rich_text_box',
                'order' => 9,
                'group' => 'Admin',
            ),
        ));
        
        
    }
}