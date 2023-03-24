<?php

namespace App\Models;

class Auditorpost
{
    private static $auditor_post =[
        [   
            "title" => "AUDITOR",
            "deskripsi" => "Akses bagi Subbag Tata Usaha Inspektorat Wilayah 2 dalam melakukan input Surat Tugas, Upload Penomoran LHP Final, dan monitoring LHP pada aplikasi Simantap (Sistem Mandiri Terintegrasi Laporan Pengawasan) Inspektorat Wilayah 2.",
            "link" => "https://sites.google.com/view/simantapitwil2/home?authuser=0",
        ],
        [
            "title" => "AUDITOR",
            "deskripsi" => "Akses bagi Subbag Tata Usaha Inspektorat Wilayah 2 dalam melakukan input Surat Tugas, Upload Penomoran LHP Final, dan monitoring LHP pada aplikasi Simantap (Sistem Mandiri Terintegrasi Laporan Pengawasan) Inspektorat Wilayah 2.",
            "link" => "https://sites.google.com/view/simantapitwil2/home?authuser=0",
        ] 
    ];

    public static function all()
    {
        return collect(self::$auditor_posts);
    }
}
