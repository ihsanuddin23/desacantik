<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::create([
            "name" => "Admin",
            "username" => "admin",
            "email" => "admin@admin.com",
            "role" => 3,
            "password" => "admin",
        ]);

        // \App\Models\Category::create([
        //     "title" => "Uncategorized",
        //     "slug" => "uncategorized",
        // ]);

        \App\Models\SiteSetting::create([
            "site_title" => "Website Resmi Desa Cikedokan",
            "tagline" => "",
            "description" => "Sukseskan Transformasi Digitalisasi Desa Cikedokan Melalui Aplikasi SIDePe",
            "logo_dark" => "cikedokan.png",
            "logo_light" => "cikedokan.png",
            "copyright_text" => "© " . date('Y') . ", Desa Cikedokan",
            "enable_registration" => "1",
        ]);

        \App\Models\Menu::create([
            "header_menu" => json_encode([
                [
                    "href" => url('http://127.0.0.1:8000/'),
                    "icon" => "",
                    "text" => "Beranda",
                    "tooltip" => "",
                    "children" => []
                ],
                [
                    "href" => "#",
                    "icon" => "",
                    "text" => "Profil Desa",
                    "tooltip" => "",
                    "children" => [
                        ["href" => "#", "text" => "Profil Wilayah Desa"],
                        ["href" => url('http://127.0.0.1:8000/demografi'), "text" => "Demografi"], // Visi Misi di bawah Demografi
                        ["href" => url('http://127.0.0.1:8000/sejarah'), "text" => "Sejarah"],
                        ["href" => url('http://127.0.0.1:8000/visimisi'), "text" => "Visi Misi"],
                    ]
                ],
                [
                    "href" => url('http://127.0.0.1:8000/pemerintahdesa'),
                    "icon" => "",
                    "text" => "Pemerintah Desa",
                    "tooltip" => "",
                    "children" => []
                ],
                [
                    "href" => "#",
                    "icon" => "",
                    "text" => "Data Desa",
                    "tooltip" => "",
                    "children" => [
                        ["href" => url('http://127.0.0.1:8000/identitasrt'), "text" => "Identitas RT"],
                        ["href" => url('http://127.0.0.1:8000/demografirt'), "text" => "Demografi RT"], // Visi Misi di bawah Demografi
                        ["href" => url('http://127.0.0.1:8000/sosialekonomirt'), "text" => "Sosial Ekonomi RT"],
                        ["href" => url('http://127.0.0.1:8000/karakteristikrt'), "text" => "Karakteristik RT"],
                    ]
                ]
            ]),
            "footer_menu" => json_encode([
                [
                    "href" => "#",
                    "icon" => "<i class='fas fa-map-marker-alt'></i>",  // Ikon alamat
                    "text" => "Jl.Saung Ranggon Kp.Cikedokan Kec.Cikarang Barat Kab.Bekasi, Kecamatan Cikarang Barat Kabupaten Bekasi, Jawa Barat, Kodepos 17530",
                    "tooltip" => "Alamat",
                    "children" => []
                ],
                [
                    "href" => "tel:+123456789",  // Nomor telepon bisa diubah sesuai keperluan
                    "icon" => "<i class='fas fa-phone'></i>",  // Ikon telepon
                    "text" => "Telepon: ",
                    "tooltip" => "Nomor Telepon",
                    "children" => []
                ],
                [
                    "href" => "mailto:example@example.com",  // Email bisa diubah sesuai keperluan
                    "icon" => "<i class='fas fa-envelope'></i>",  // Ikon email
                    "text" => "Email: ",
                    "tooltip" => "Alamat Email",
                    "children" => []
                ],
                [
                    "href" => "http://cikedokan.sidepe.com",
                    "icon" => "<i class='fas fa-globe'></i>",  // Ikon globe
                    "text" => "http://cikedokan.sidepe.com",
                    "tooltip" => "Website Resmi",
                    "children" => []
                ]
            ]),
        ]);
    }
}
