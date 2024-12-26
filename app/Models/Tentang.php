<?php

namespace App\Models;

class Tentang{
    public static function getData() {
        return [
            'judul' => 'Tentang Kami',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quia.',
            'foto' => 'https://publish-p47754-e237306.adobeaemcloud.com/adobe/dynamicmedia/deliver/dm-aid--e42d4632-f1eb-40e2-85f6-8dccb6953670/Bernabeu.app.webp?preferwebp=true&width=1440',
            'insight' => [
                'Total Proyek',
                'Total Dosen',
                'Total Mahasiswa'
            ],
            'visi' => [
                'judul' => 'Visi Kami',
                'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quia.'
            ],
            'misi' => [
                'judul' => 'Misi Kami',
                'detail' => [
                [
                    'judul' => 'Misi 1',
                    'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quia.'
                ],
                [
                    'judul' => 'Misi 2',
                    'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quia.'
                ],
                [
                    'judul' => 'Misi 3',
                    'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quia.'
                ]
                ]
            ],
            'ajak' => 'Yuk, tunggu apalagi, segera daftarkan dirimu'
        ];
    }
}



?>