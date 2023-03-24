<?php

namespace App\Models;

class Tupost
{
    private static $tu_posts =[
        [
            "title" => "SUBBAG TU",
            "deskripsi" => "Akses bagi Subbag Tata Usaha Inspektorat Wilayah 2 dalam melakukan input Surat Tugas, Upload Penomoran LHP Final, dan monitoring LHP pada aplikasi Simantap (Sistem Mandiri Terintegrasi Laporan Pengawasan) Inspektorat Wilayah 2.",
            "link" => "https://sites.google.com/view/simantap-tu-itwil2/home?authuser=0",
        ],
        [
            "title" => "SUBBAG TU",
            "deskripsi" => "Akses bagi Subbag Tata Usaha Inspektorat Wilayah 2 dalam melakukan input Surat Tugas, Upload Penomoran LHP Final, dan monitoring LHP pada aplikasi Simantap (Sistem Mandiri Terintegrasi Laporan Pengawasan) Inspektorat Wilayah 2.",
            "link" => "https://sites.google.com/view/simantap-tu-itwil2/home?authuser=0",
        ]
    ];

    public static function all()
    {
        return collect(self::$tu_posts);
    }
}
