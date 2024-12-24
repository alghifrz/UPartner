<?php

namespace App\Models;

class NavbarLanding {
    public static function getData() {
        return [
            'menu' => [
                [
                    'judul' => 'Tentang Kami',
                    'link' => '#',
                ],
                [
                    'judul' => 'Kontak',
                    'link' => '#',
                ]
            ],
            'button' => [
                [
                    'judul' => 'Masuk',
                ],
                [
                    'judul' => 'Daftar',
                ],
            ]
        ];
    }
}

?>