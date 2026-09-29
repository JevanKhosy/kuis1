<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kampus_PSDKU extends Controller
{
    public function index()
    {
        $namaKampus = "Polinema PSDKU Pamekasan";
        $tahunBerdiri = "2021";
        $kota = "Pamekasan";

        $tentang = "Politeknik Negeri Malang (POLINEMA) PSDKU Pamekasan berfokus pada pendidikan vokasi yang mengembangkan pengetahuan,
                    keterampilan, dan kompetensi mahasiswa melalui pembelajaran yang aplikatif dan sesuai dengan kebutuhan dunia kerja dan industri.";

        $visi = "Menjadi perguruan tinggi yang unggul dalam pendidikan, penelitian, dan pengabdian kepada masyarakat.";

        $misi = [
            "Menyelenggarakan pendidikan yang berkualitas.",
            "Mengembangkan penelitian dan teknologi.",
            "Memberikan kontribusi kepada masyarakat."
        ];

        $prodi = [
            "Manajemen Informatika",
            "Sistem Informasi",
            "Teknik Informatika"
        ];

        $status = "Aktif";

        return view('kampuspmk', [
            'namaKampus' => $namaKampus,
            'tahunBerdiri' => $tahunBerdiri,
            'kota' => $kota,
            'tentang' => $tentang,
            'visi' => $visi,
            'misi' => $misi,
            'prodi' => $prodi,
            'status' => $status
        ]);

    }
    public function coba(){
    return view ('bootstrap.coba');
    }
}
