<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permission_role')->delete();
        
        \DB::table('permission_role')->insert(array (
            0 => 
            array (
                'permission_id' => 1,
                'role_id' => 1,
            ),
            1 => 
            array (
                'permission_id' => 1,
                'role_id' => 2,
            ),
            2 => 
            array (
                'permission_id' => 1,
                'role_id' => 3,
            ),
            3 => 
            array (
                'permission_id' => 1,
                'role_id' => 4,
            ),
            4 => 
            array (
                'permission_id' => 1,
                'role_id' => 5,
            ),
            5 => 
            array (
                'permission_id' => 2,
                'role_id' => 1,
            ),
            6 => 
            array (
                'permission_id' => 3,
                'role_id' => 1,
            ),
            7 => 
            array (
                'permission_id' => 4,
                'role_id' => 1,
            ),
            8 => 
            array (
                'permission_id' => 5,
                'role_id' => 1,
            ),
            9 => 
            array (
                'permission_id' => 6,
                'role_id' => 1,
            ),
            10 => 
            array (
                'permission_id' => 6,
                'role_id' => 5,
            ),
            11 => 
            array (
                'permission_id' => 7,
                'role_id' => 1,
            ),
            12 => 
            array (
                'permission_id' => 7,
                'role_id' => 5,
            ),
            13 => 
            array (
                'permission_id' => 8,
                'role_id' => 1,
            ),
            14 => 
            array (
                'permission_id' => 8,
                'role_id' => 5,
            ),
            15 => 
            array (
                'permission_id' => 9,
                'role_id' => 1,
            ),
            16 => 
            array (
                'permission_id' => 9,
                'role_id' => 5,
            ),
            17 => 
            array (
                'permission_id' => 10,
                'role_id' => 1,
            ),
            18 => 
            array (
                'permission_id' => 10,
                'role_id' => 5,
            ),
            19 => 
            array (
                'permission_id' => 11,
                'role_id' => 1,
            ),
            20 => 
            array (
                'permission_id' => 11,
                'role_id' => 2,
            ),
            21 => 
            array (
                'permission_id' => 11,
                'role_id' => 5,
            ),
            22 => 
            array (
                'permission_id' => 12,
                'role_id' => 1,
            ),
            23 => 
            array (
                'permission_id' => 12,
                'role_id' => 5,
            ),
            24 => 
            array (
                'permission_id' => 13,
                'role_id' => 1,
            ),
            25 => 
            array (
                'permission_id' => 13,
                'role_id' => 5,
            ),
            26 => 
            array (
                'permission_id' => 14,
                'role_id' => 1,
            ),
            27 => 
            array (
                'permission_id' => 14,
                'role_id' => 5,
            ),
            28 => 
            array (
                'permission_id' => 15,
                'role_id' => 1,
            ),
            29 => 
            array (
                'permission_id' => 15,
                'role_id' => 5,
            ),
            30 => 
            array (
                'permission_id' => 16,
                'role_id' => 1,
            ),
            31 => 
            array (
                'permission_id' => 16,
                'role_id' => 2,
            ),
            32 => 
            array (
                'permission_id' => 16,
                'role_id' => 5,
            ),
            33 => 
            array (
                'permission_id' => 17,
                'role_id' => 1,
            ),
            34 => 
            array (
                'permission_id' => 17,
                'role_id' => 2,
            ),
            35 => 
            array (
                'permission_id' => 17,
                'role_id' => 5,
            ),
            36 => 
            array (
                'permission_id' => 18,
                'role_id' => 1,
            ),
            37 => 
            array (
                'permission_id' => 18,
                'role_id' => 2,
            ),
            38 => 
            array (
                'permission_id' => 18,
                'role_id' => 5,
            ),
            39 => 
            array (
                'permission_id' => 19,
                'role_id' => 1,
            ),
            40 => 
            array (
                'permission_id' => 19,
                'role_id' => 2,
            ),
            41 => 
            array (
                'permission_id' => 19,
                'role_id' => 5,
            ),
            42 => 
            array (
                'permission_id' => 20,
                'role_id' => 1,
            ),
            43 => 
            array (
                'permission_id' => 20,
                'role_id' => 2,
            ),
            44 => 
            array (
                'permission_id' => 20,
                'role_id' => 5,
            ),
            45 => 
            array (
                'permission_id' => 21,
                'role_id' => 1,
            ),
            46 => 
            array (
                'permission_id' => 21,
                'role_id' => 2,
            ),
            47 => 
            array (
                'permission_id' => 22,
                'role_id' => 1,
            ),
            48 => 
            array (
                'permission_id' => 22,
                'role_id' => 2,
            ),
            49 => 
            array (
                'permission_id' => 23,
                'role_id' => 1,
            ),
            50 => 
            array (
                'permission_id' => 23,
                'role_id' => 2,
            ),
            51 => 
            array (
                'permission_id' => 26,
                'role_id' => 1,
            ),
            52 => 
            array (
                'permission_id' => 26,
                'role_id' => 2,
            ),
            53 => 
            array (
                'permission_id' => 26,
                'role_id' => 4,
            ),
            54 => 
            array (
                'permission_id' => 26,
                'role_id' => 5,
            ),
            55 => 
            array (
                'permission_id' => 27,
                'role_id' => 1,
            ),
            56 => 
            array (
                'permission_id' => 27,
                'role_id' => 2,
            ),
            57 => 
            array (
                'permission_id' => 27,
                'role_id' => 4,
            ),
            58 => 
            array (
                'permission_id' => 27,
                'role_id' => 5,
            ),
            59 => 
            array (
                'permission_id' => 28,
                'role_id' => 1,
            ),
            60 => 
            array (
                'permission_id' => 28,
                'role_id' => 2,
            ),
            61 => 
            array (
                'permission_id' => 28,
                'role_id' => 4,
            ),
            62 => 
            array (
                'permission_id' => 28,
                'role_id' => 5,
            ),
            63 => 
            array (
                'permission_id' => 29,
                'role_id' => 1,
            ),
            64 => 
            array (
                'permission_id' => 29,
                'role_id' => 2,
            ),
            65 => 
            array (
                'permission_id' => 29,
                'role_id' => 4,
            ),
            66 => 
            array (
                'permission_id' => 29,
                'role_id' => 5,
            ),
            67 => 
            array (
                'permission_id' => 30,
                'role_id' => 1,
            ),
            68 => 
            array (
                'permission_id' => 30,
                'role_id' => 2,
            ),
            69 => 
            array (
                'permission_id' => 30,
                'role_id' => 4,
            ),
            70 => 
            array (
                'permission_id' => 30,
                'role_id' => 5,
            ),
            71 => 
            array (
                'permission_id' => 31,
                'role_id' => 1,
            ),
            72 => 
            array (
                'permission_id' => 31,
                'role_id' => 2,
            ),
            73 => 
            array (
                'permission_id' => 32,
                'role_id' => 1,
            ),
            74 => 
            array (
                'permission_id' => 32,
                'role_id' => 2,
            ),
            75 => 
            array (
                'permission_id' => 33,
                'role_id' => 1,
            ),
            76 => 
            array (
                'permission_id' => 33,
                'role_id' => 2,
            ),
            77 => 
            array (
                'permission_id' => 34,
                'role_id' => 1,
            ),
            78 => 
            array (
                'permission_id' => 34,
                'role_id' => 2,
            ),
            79 => 
            array (
                'permission_id' => 35,
                'role_id' => 1,
            ),
            80 => 
            array (
                'permission_id' => 35,
                'role_id' => 2,
            ),
            81 => 
            array (
                'permission_id' => 36,
                'role_id' => 1,
            ),
            82 => 
            array (
                'permission_id' => 36,
                'role_id' => 2,
            ),
            83 => 
            array (
                'permission_id' => 36,
                'role_id' => 5,
            ),
            84 => 
            array (
                'permission_id' => 37,
                'role_id' => 1,
            ),
            85 => 
            array (
                'permission_id' => 37,
                'role_id' => 2,
            ),
            86 => 
            array (
                'permission_id' => 37,
                'role_id' => 5,
            ),
            87 => 
            array (
                'permission_id' => 38,
                'role_id' => 1,
            ),
            88 => 
            array (
                'permission_id' => 38,
                'role_id' => 2,
            ),
            89 => 
            array (
                'permission_id' => 38,
                'role_id' => 5,
            ),
            90 => 
            array (
                'permission_id' => 39,
                'role_id' => 1,
            ),
            91 => 
            array (
                'permission_id' => 39,
                'role_id' => 2,
            ),
            92 => 
            array (
                'permission_id' => 39,
                'role_id' => 5,
            ),
            93 => 
            array (
                'permission_id' => 40,
                'role_id' => 1,
            ),
            94 => 
            array (
                'permission_id' => 40,
                'role_id' => 2,
            ),
            95 => 
            array (
                'permission_id' => 40,
                'role_id' => 5,
            ),
            96 => 
            array (
                'permission_id' => 41,
                'role_id' => 1,
            ),
            97 => 
            array (
                'permission_id' => 41,
                'role_id' => 2,
            ),
            98 => 
            array (
                'permission_id' => 41,
                'role_id' => 4,
            ),
            99 => 
            array (
                'permission_id' => 42,
                'role_id' => 1,
            ),
            100 => 
            array (
                'permission_id' => 42,
                'role_id' => 2,
            ),
            101 => 
            array (
                'permission_id' => 42,
                'role_id' => 4,
            ),
            102 => 
            array (
                'permission_id' => 43,
                'role_id' => 1,
            ),
            103 => 
            array (
                'permission_id' => 43,
                'role_id' => 2,
            ),
            104 => 
            array (
                'permission_id' => 43,
                'role_id' => 4,
            ),
            105 => 
            array (
                'permission_id' => 44,
                'role_id' => 1,
            ),
            106 => 
            array (
                'permission_id' => 44,
                'role_id' => 2,
            ),
            107 => 
            array (
                'permission_id' => 44,
                'role_id' => 4,
            ),
            108 => 
            array (
                'permission_id' => 45,
                'role_id' => 1,
            ),
            109 => 
            array (
                'permission_id' => 45,
                'role_id' => 2,
            ),
            110 => 
            array (
                'permission_id' => 45,
                'role_id' => 4,
            ),
            111 => 
            array (
                'permission_id' => 46,
                'role_id' => 1,
            ),
            112 => 
            array (
                'permission_id' => 46,
                'role_id' => 2,
            ),
            113 => 
            array (
                'permission_id' => 47,
                'role_id' => 1,
            ),
            114 => 
            array (
                'permission_id' => 47,
                'role_id' => 2,
            ),
            115 => 
            array (
                'permission_id' => 48,
                'role_id' => 1,
            ),
            116 => 
            array (
                'permission_id' => 48,
                'role_id' => 2,
            ),
            117 => 
            array (
                'permission_id' => 49,
                'role_id' => 1,
            ),
            118 => 
            array (
                'permission_id' => 49,
                'role_id' => 2,
            ),
            119 => 
            array (
                'permission_id' => 50,
                'role_id' => 1,
            ),
            120 => 
            array (
                'permission_id' => 50,
                'role_id' => 2,
            ),
            121 => 
            array (
                'permission_id' => 51,
                'role_id' => 1,
            ),
            122 => 
            array (
                'permission_id' => 51,
                'role_id' => 2,
            ),
            123 => 
            array (
                'permission_id' => 52,
                'role_id' => 1,
            ),
            124 => 
            array (
                'permission_id' => 52,
                'role_id' => 2,
            ),
            125 => 
            array (
                'permission_id' => 53,
                'role_id' => 1,
            ),
            126 => 
            array (
                'permission_id' => 53,
                'role_id' => 2,
            ),
            127 => 
            array (
                'permission_id' => 54,
                'role_id' => 1,
            ),
            128 => 
            array (
                'permission_id' => 54,
                'role_id' => 2,
            ),
            129 => 
            array (
                'permission_id' => 55,
                'role_id' => 1,
            ),
            130 => 
            array (
                'permission_id' => 55,
                'role_id' => 2,
            ),
            131 => 
            array (
                'permission_id' => 56,
                'role_id' => 1,
            ),
            132 => 
            array (
                'permission_id' => 56,
                'role_id' => 2,
            ),
            133 => 
            array (
                'permission_id' => 57,
                'role_id' => 1,
            ),
            134 => 
            array (
                'permission_id' => 57,
                'role_id' => 2,
            ),
            135 => 
            array (
                'permission_id' => 58,
                'role_id' => 1,
            ),
            136 => 
            array (
                'permission_id' => 58,
                'role_id' => 2,
            ),
            137 => 
            array (
                'permission_id' => 59,
                'role_id' => 1,
            ),
            138 => 
            array (
                'permission_id' => 59,
                'role_id' => 2,
            ),
            139 => 
            array (
                'permission_id' => 60,
                'role_id' => 1,
            ),
            140 => 
            array (
                'permission_id' => 60,
                'role_id' => 2,
            ),
            141 => 
            array (
                'permission_id' => 61,
                'role_id' => 1,
            ),
            142 => 
            array (
                'permission_id' => 61,
                'role_id' => 2,
            ),
            143 => 
            array (
                'permission_id' => 62,
                'role_id' => 1,
            ),
            144 => 
            array (
                'permission_id' => 62,
                'role_id' => 2,
            ),
            145 => 
            array (
                'permission_id' => 63,
                'role_id' => 1,
            ),
            146 => 
            array (
                'permission_id' => 63,
                'role_id' => 2,
            ),
            147 => 
            array (
                'permission_id' => 64,
                'role_id' => 1,
            ),
            148 => 
            array (
                'permission_id' => 64,
                'role_id' => 2,
            ),
            149 => 
            array (
                'permission_id' => 65,
                'role_id' => 1,
            ),
            150 => 
            array (
                'permission_id' => 65,
                'role_id' => 2,
            ),
            151 => 
            array (
                'permission_id' => 66,
                'role_id' => 1,
            ),
            152 => 
            array (
                'permission_id' => 66,
                'role_id' => 2,
            ),
            153 => 
            array (
                'permission_id' => 67,
                'role_id' => 1,
            ),
            154 => 
            array (
                'permission_id' => 67,
                'role_id' => 2,
            ),
            155 => 
            array (
                'permission_id' => 68,
                'role_id' => 1,
            ),
            156 => 
            array (
                'permission_id' => 68,
                'role_id' => 2,
            ),
            157 => 
            array (
                'permission_id' => 69,
                'role_id' => 1,
            ),
            158 => 
            array (
                'permission_id' => 69,
                'role_id' => 2,
            ),
            159 => 
            array (
                'permission_id' => 70,
                'role_id' => 1,
            ),
            160 => 
            array (
                'permission_id' => 70,
                'role_id' => 2,
            ),
            161 => 
            array (
                'permission_id' => 71,
                'role_id' => 1,
            ),
            162 => 
            array (
                'permission_id' => 71,
                'role_id' => 2,
            ),
            163 => 
            array (
                'permission_id' => 71,
                'role_id' => 5,
            ),
            164 => 
            array (
                'permission_id' => 72,
                'role_id' => 1,
            ),
            165 => 
            array (
                'permission_id' => 72,
                'role_id' => 2,
            ),
            166 => 
            array (
                'permission_id' => 72,
                'role_id' => 5,
            ),
            167 => 
            array (
                'permission_id' => 73,
                'role_id' => 1,
            ),
            168 => 
            array (
                'permission_id' => 73,
                'role_id' => 2,
            ),
            169 => 
            array (
                'permission_id' => 73,
                'role_id' => 5,
            ),
            170 => 
            array (
                'permission_id' => 74,
                'role_id' => 1,
            ),
            171 => 
            array (
                'permission_id' => 74,
                'role_id' => 2,
            ),
            172 => 
            array (
                'permission_id' => 74,
                'role_id' => 5,
            ),
            173 => 
            array (
                'permission_id' => 75,
                'role_id' => 1,
            ),
            174 => 
            array (
                'permission_id' => 75,
                'role_id' => 2,
            ),
            175 => 
            array (
                'permission_id' => 75,
                'role_id' => 5,
            ),
            176 => 
            array (
                'permission_id' => 76,
                'role_id' => 1,
            ),
            177 => 
            array (
                'permission_id' => 76,
                'role_id' => 2,
            ),
            178 => 
            array (
                'permission_id' => 77,
                'role_id' => 1,
            ),
            179 => 
            array (
                'permission_id' => 77,
                'role_id' => 2,
            ),
            180 => 
            array (
                'permission_id' => 78,
                'role_id' => 1,
            ),
            181 => 
            array (
                'permission_id' => 79,
                'role_id' => 1,
            ),
            182 => 
            array (
                'permission_id' => 79,
                'role_id' => 2,
            ),
            183 => 
            array (
                'permission_id' => 80,
                'role_id' => 1,
            ),
            184 => 
            array (
                'permission_id' => 80,
                'role_id' => 2,
            ),
            185 => 
            array (
                'permission_id' => 86,
                'role_id' => 1,
            ),
            186 => 
            array (
                'permission_id' => 86,
                'role_id' => 2,
            ),
            187 => 
            array (
                'permission_id' => 87,
                'role_id' => 1,
            ),
            188 => 
            array (
                'permission_id' => 87,
                'role_id' => 2,
            ),
            189 => 
            array (
                'permission_id' => 88,
                'role_id' => 1,
            ),
            190 => 
            array (
                'permission_id' => 88,
                'role_id' => 2,
            ),
            191 => 
            array (
                'permission_id' => 89,
                'role_id' => 1,
            ),
            192 => 
            array (
                'permission_id' => 89,
                'role_id' => 2,
            ),
            193 => 
            array (
                'permission_id' => 90,
                'role_id' => 1,
            ),
            194 => 
            array (
                'permission_id' => 90,
                'role_id' => 2,
            ),
            195 => 
            array (
                'permission_id' => 91,
                'role_id' => 1,
            ),
            196 => 
            array (
                'permission_id' => 91,
                'role_id' => 2,
            ),
            197 => 
            array (
                'permission_id' => 92,
                'role_id' => 1,
            ),
            198 => 
            array (
                'permission_id' => 92,
                'role_id' => 2,
            ),
            199 => 
            array (
                'permission_id' => 93,
                'role_id' => 1,
            ),
            200 => 
            array (
                'permission_id' => 93,
                'role_id' => 2,
            ),
            201 => 
            array (
                'permission_id' => 94,
                'role_id' => 1,
            ),
            202 => 
            array (
                'permission_id' => 94,
                'role_id' => 2,
            ),
            203 => 
            array (
                'permission_id' => 95,
                'role_id' => 1,
            ),
            204 => 
            array (
                'permission_id' => 95,
                'role_id' => 2,
            ),
        ));
        
        
    }
}