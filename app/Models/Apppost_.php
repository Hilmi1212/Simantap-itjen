<?php

namespace App\Models;


class Apppost
{
    private static $app_post =[
        [
            "title" => "APP",
            "deskripsi" => "Akses bagi Subbag Tata Usaha Inspektorat Wilayah 2 dalam melakukan input Surat Tugas, Upload Penomoran LHP Final, dan monitoring LHP pada aplikasi Simantap (Sistem Mandiri Terintegrasi Laporan Pengawasan) Inspektorat Wilayah 2.",
            "link" => "https://sites.google.com/view/app-pendidikan/kompilasi?authuser=0",
        ],
        [
            "title" => "APP",
            "deskripsi" => "Akses bagi Subbag Tata Usaha Inspektorat Wilayah 2 dalam melakukan input Surat Tugas, Upload Penomoran LHP Final, dan monitoring LHP pada aplikasi Simantap (Sistem Mandiri Terintegrasi Laporan Pengawasan) Inspektorat Wilayah 2.",
            "link" => "https://sites.google.com/view/app-pendidikan/kompilasi?authuser=0",
        ]
    ];

    public static function all()
    {
        return collect (self::$app_post);
    }
}
