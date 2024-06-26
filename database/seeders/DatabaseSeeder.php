<?php

namespace Database\Seeders;

use App\Models\BuktiComment;
use App\Models\BuktiLaporan;
use App\Models\CommentLaporan;
use App\Models\Laporan;
use App\Models\NotifUser;
use App\Models\ReportLaporan;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\VoteLaporan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nama' => 'Dishub Surabaya',
            'email' => 'dishub@gmail.com',
            'nomor_telepon' => '083133737660',
            'phone_number_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'roles' => 'dishub',
            'profile_photo_path' => 'profile/poldajatim.png',
        ]);

        User::create([
            'nama' => 'ari',
            'email' => 'ari@gmail.com',
            'nomor_telepon' => '083133737661',
            'phone_number_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'roles' => 'masyarakat-umum',
        ]);

        User::create([
            'nama' => 'iqbal',
            'email' => 'iqbal@gmail.com',
            'nomor_telepon' => '083133737662',
            'phone_number_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'roles' => 'masyarakat-umum',
        ]);

        User::create([
            'nama' => 'fikri',
            'email' => 'fikri@gmail.com',
            'nomor_telepon' => '083133737663',
            'phone_number_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'roles' => 'masyarakat-umum',
        ]);

        User::create([
            'nama' => 'dika',
            'email' => 'dika@gmail.com',
            'nomor_telepon' => '083133737664',
            'phone_number_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'roles' => 'masyarakat-umum',
        ]);

        User::create([
            'nama' => 'dika2',
            'email' => 'dika2@gmail.com',
            'nomor_telepon' => '083133737669',
            'phone_number_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'roles' => 'masyarakat-umum',
        ]);

        User::create([
            'nama' => 'Gede Hari Yoga Nanda',
            'email' => 'guary060504@gmail.com',
            'nomor_telepon' => '083133737668',
            'phone_number_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'roles' => 'masyarakat-umum',
        ]);

        User::create([
            'nama' => 'dikannya',
            'email' => 'dikannya@gmail.com',
            'nomor_telepon' => '083133734668',
            'phone_number_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'roles' => 'masyarakat-umum',
        ]);

        User::create([
            'nama' => 'dikannyakan',
            'email' => 'dikannyakan@gmail.com',
            'nomor_telepon' => '083333734668',
            'phone_number_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'roles' => 'masyarakat-umum',
        ]);

        User::create([
            'nama' => 'dikannyakan1',
            'email' => 'dikannyakan1@gmail.com',
            'nomor_telepon' => '081333734668',
            'phone_number_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'roles' => 'masyarakat-umum',
        ]);

        User::create([
            'nama' => 'dikannyakan2',
            'email' => 'dikannyakan2@gmail.com',
            'nomor_telepon' => '082333734668',
            'phone_number_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'roles' => 'masyarakat-umum',
        ]);

        Laporan::create([
            'user_id' => 2,
            'lat' => "-6.3709947",
            'long' => "106.8193141",
            'judul_laporan' => "Parkir Ilegal Di Indomaret Sukolilo",
            'deskripsi_laporan' => "Parkir Ilegal Di Indomaret Sukolilo sangat membuat saya risih, diminta 50.000 anjinggg",
            'status_laporan' => "sudah-teratasi",
            'tanggal_teratasi' => now(),
            'alamat_laporan' => "Jl. Melawai Raya No.21, RT.2/RW.6, Melawai, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12160"
        ]);

        Laporan::create([
            'user_id' => 3,
            'lat' => "-6.3696197",
            'long' => "106.8180691",
            'judul_laporan' => "Parkir Ilegal Di Alfamart Sukolilo",
            'deskripsi_laporan' => "Parkir Ilegal Di Indomaret Alfamart sangat membuat saya risih, diminta 50.000 anjinggg",
            'status_laporan' => "perlu-dukungan",
            'alamat_laporan' => "Jl. Kb. Sayur I, RT.8/RW.15, Bidara Cina, Kecamatan Jatinegara, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13330"
        ]);

        Laporan::create([
            'user_id' => 3,
            'lat' => "-6.3573527",
            'long' => "106.8145061",
            'judul_laporan' => "Parkir Ilegal Di sukolilo regency Sukolilo",
            'deskripsi_laporan' => "Parkir Ilegal Di sukolilo regency, ",
            'status_laporan' => "perlu-dukungan",
            'alamat_laporan' => "Gg. H Salam No.96a, Pangkalan Jati, Kec. Cinere, Kota Depok, Jawa Barat 15143"
        ]);

        // ------------------------------------------------------------------------- //

        Laporan::create([
            'user_id' => 7,
            'lat' => "-6.3562547",
            'long' => "106.8120711",
            'judul_laporan' => "Parkir Ilegal Di Bhaskara Sealamat sukolilo",
            'deskripsi_laporan' => "Parkir Ilegal Di bhaskara regency, ",
            'status_laporan' => "perlu-dukungan",
            'alamat_laporan' => "QV98+G95, RT.6/RW.4, Bidara Cina, Kecamatan Jatinegara, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13330"
        ]);

        Laporan::create([
            'user_id' => 8,
            'lat' => "-6.3690757",
            'long' => "106.8214281",
            'judul_laporan' => "Parkir Ilegal Di Bhaskara Utara",
            'deskripsi_laporan' => "Parkir Ilegal Di bhaskara utara, ",
            'status_laporan' => "perlu-dukungan",
            'alamat_laporan' => "Jl. Melawai Raya No.21, RT.2/RW.6, Melawai, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12160"
        ]);

        Laporan::create([
            'user_id' => 9,
            'lat' => "-6.322906",
            'long' => "106.797000",
            'judul_laporan' => "Parkir Ilegal Di Sebelah Unair",
            'deskripsi_laporan' => "Parkir Ilegal Di Sebelah Unair utara mengerikan, ",
            'status_laporan' => "perlu-dukungan",
            'alamat_laporan' => "MQGW+VQW, Jl. H. Saleh, Pd. Labu, Kec. Cilandak, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 16513"
        ]);

        Laporan::create([
            'user_id' => 10,
            'lat' => "-6.3679987",
            'long' => "106.8186931",
            'judul_laporan' => "Parkir Ilegal Di Dharmahusada",
            'deskripsi_laporan' => "Parkir Ilegal Di Dharmahusada mengerikan, ",
            'status_laporan' => "perlu-diatasi",
            'alamat_laporan' => "Jl. Sensus IV D No.21, RT.5/RW.14, Bidara Cina, Kecamatan Jatinegara, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13330"
        ]);


        Laporan::create([
            'user_id' => 11,
            'lat' => "-6.2433133",
            'long' => "106.7810579",
            'judul_laporan' => "Parkir Ilegal Di Wisma Permai ",
            'deskripsi_laporan' => "Parkir Ilegal Di WismaPermai mengerikan, ",
            'status_laporan' => "perlu-dukungan",
            'alamat_laporan' => "Jl. H. Saleh 4-25, Pangkalan Jati, Kec. Cinere, Kota Depok, Jawa Barat 16514"
        ]);


        // buatkan bukti laporan dari laporan user_id 7 sampe 11 sama dengan buktilaporan dibawah ini samakan yaitu bukti-laporan/laporan1.1.png dan bukti-laporan/laporan1.2.mp4
        BuktiLaporan::create([
            'laporan_id' => 4,
            'bukti_laporan' => "bukti-laporan/parkir6.jpg",
        ]);


        BuktiLaporan::create([
            'laporan_id' => 5,
            'bukti_laporan' => "bukti-laporan/parkir5.jpg",
        ]);

        BuktiLaporan::create([
            'laporan_id' => 6,
            'bukti_laporan' => "bukti-laporan/parkir4.jpg",
        ]);

        BuktiLaporan::create([
            'laporan_id' => 7,
            'bukti_laporan' => "bukti-laporan/gambar3.jpg",
        ]);


        BuktiLaporan::create([
            'laporan_id' => 8,
            'bukti_laporan' => "bukti-laporan/parkir2.jpg",
        ]);

        // BuktiLaporan::create([
        //     'laporan_id' => 9,
        //     'bukti_laporan' => "bukti-laporan/laporan1.1.png",
        // ]);

        // BuktiLaporan::create([
        //     'laporan_id' => 9,
        //     'bukti_laporan' => "bukti-laporan/laporan1.2.mp4",
        // ]);

        // BuktiLaporan::create([
        //     'laporan_id' => 10,
        //     'bukti_laporan' => "bukti-laporan/laporan1.1.png",
        // ]);

        // BuktiLaporan::create([
        //     'laporan_id' => 10,
        //     'bukti_laporan' => "bukti-laporan/laporan1.2.mp4",
        // ]);

        // BuktiLaporan::create([
        //     'laporan_id' => 11,
        //     'bukti_laporan' => "bukti-laporan/laporan1.1.png",
        // ]);

        // BuktiLaporan::create([
        //     'laporan_id' => 11,
        //     'bukti_laporan' => "bukti-laporan/laporan1.2.mp4",
        // ]);

        // -------------------------------------------------------------- //

        NotifUser::create([
            'user_id' => 2,
            'laporan_id' => 1,
            'status_laporan' => 'perlu-dukungan'
        ]);

        NotifUser::create([
            'user_id' => 3,
            'laporan_id' => 2,
            'status_laporan' => 'perlu-dukungan'
        ]);

        NotifUser::create([
            'user_id' => 3,
            'laporan_id' => 3,
            'status_laporan' => 'perlu-dukungan'
        ]);


        BuktiLaporan::create([
            'laporan_id' => 1,
            'bukti_laporan' => "bukti-laporan/laporan1.1.png",
        ]);

        BuktiLaporan::create([
            'laporan_id' => 1,
            'bukti_laporan' => "bukti-laporan/laporan1.2.mp4",
        ]);

        BuktiLaporan::create([
            'laporan_id' => 2,
            'bukti_laporan' => "bukti-laporan/laporan2.1.jpg",
        ]);

        BuktiLaporan::create([
            'laporan_id' => 2,
            'bukti_laporan' => "bukti-laporan/laporan2.2.mp4",
        ]);

        BuktiLaporan::create([
            'laporan_id' => 3,
            'bukti_laporan' => "bukti-laporan/parkir1.jpeg",
        ]);

        VoteLaporan::create([
            'user_id' => 3,
            'laporan_id' => 1,
        ]);

        VoteLaporan::create([
            'user_id' => 4,
            'laporan_id' => 2,
        ]);

        VoteLaporan::create([
            'user_id' => 5,
            'laporan_id' => 2,
        ]);

        CommentLaporan::create([
            'user_id' => 5,
            'laporan_id' => 1,
            'comment_laporan' => "Saya setuju dengan laporan ini",
        ]);

        CommentLaporan::create([
            'user_id' => 4,
            'laporan_id' => 1,
            'comment_laporan' => "Sangat merugikan sekali",
        ]);

        CommentLaporan::create([
            'user_id' => 4,
            'laporan_id' => 2,
            'comment_laporan' => "Mohon segera tindak lanjutin pak polsek",
        ]);

        CommentLaporan::create([
            'user_id' => 1,
            'laporan_id' => 1,
            'comment_laporan' => "Update kasus terkini, telah berhasil kami tangkap dan sudah dihukumi penjara 2 tahun. Dengan ini, kasus ini dapat kami sampaikan sudah teratasi. terima kasih",
        ]);

        BuktiComment::create([
            'comment_laporan_id' => 4,
            'bukti_comment' => "bukti-comment/bukticomment1.2.png",
        ]);

        BuktiComment::create([
            'comment_laporan_id' => 4,
            'bukti_comment' => "bukti-comment/bukticomment1.1.jpg",
        ]);


        //----------------------user 1-51 lalu vote ke laporan 1 semua masing2 user id -------------------// 
        for ($i = 1; $i <= 48; $i++) {
            User::create([
                'nama' => 'user' . $i,
                'email' => 'user' . $i . '@gmail.com',
                'nomor_telepon' => '0831337376' . $i,
                'phone_number_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'roles' => 'masyarakat-umum',
            ]);

            VoteLaporan::create([
                'user_id' => $i + 5,
                'laporan_id' => 1,
            ]);

            VoteLaporan::create([
                'user_id' => $i + 9,
                'laporan_id' => 8,
            ]);

            VoteLaporan::create([
                'user_id' => $i + 10,
                'laporan_id' => 7,
            ]);
        }

        VoteLaporan::create([
            'user_id' => 10,
            'laporan_id' => 1,
        ]);

        VoteLaporan::create([
            'user_id' => 11,
            'laporan_id' => 7,
        ]);

        // buatkan Votelaporan masing2 berjumlah 10 dukungan semua dengan user_id laporan tidak boleh sama 
        for ($i = 4; $i <= 11; $i++) {
            VoteLaporan::create([
                'user_id' => $i + 10,
                'laporan_id' => 4,
            ]);

            VoteLaporan::create([
                'user_id' => $i + 10,
                'laporan_id' => 5,
            ]);

            VoteLaporan::create([
                'user_id' => $i + 10,
                'laporan_id' => 6,
            ]);

            // VoteLaporan::create([
            //     'user_id' => $i + 10,
            //     'laporan_id' => 9,
            // ]);

            // VoteLaporan::create([
            //     'user_id' => $i + 10,
            //     'laporan_id' => 10,
            // ]);

            // VoteLaporan::create([
            //     'user_id' => $i + 10,
            //     'laporan_id' => 11,
            // ]);
        }

        // buatkan comment laporan masing2 5 comment dengan user_id laporan tidak boleh sama 
        CommentLaporan::create([
            'user_id' => 4,
            'laporan_id' => 4,
            'comment_laporan' => "Saya setuju dengan laporan ini",
        ]);

        CommentLaporan::create([
            'user_id' => 5,
            'laporan_id' => 4,
            'comment_laporan' => "Sangat merugikan sekali",
        ]);


        CommentLaporan::create([
            'user_id' => 6,
            'laporan_id' => 5,
            'comment_laporan' => "Saya setuju dengan laporan ini",
        ]);


        CommentLaporan::create([
            'user_id' => 7,
            'laporan_id' => 5,
            'comment_laporan' => "Sangat merugikan sekali",
        ]);


        CommentLaporan::create([
            'user_id' => 8,
            'laporan_id' => 6,
            'comment_laporan' => "Saya setuju dengan laporan ini",
        ]);

        CommentLaporan::create([
            'user_id' => 9,
            'laporan_id' => 6,
            'comment_laporan' => "Sangat merugikan sekali",
        ]);


        CommentLaporan::create([
            'user_id' => 10,
            'laporan_id' => 7,
            'comment_laporan' => "Saya setuju dengan laporan ini",
        ]);

        CommentLaporan::create([
            'user_id' => 11,
            'laporan_id' => 7,
            'comment_laporan' => "Sangat merugikan sekali",
        ]);


        CommentLaporan::create([
            'user_id' => 12,
            'laporan_id' => 8,
            'comment_laporan' => "Saya setuju dengan laporan ini",
        ]);


        CommentLaporan::create([
            'user_id' => 13,
            'laporan_id' => 8,
            'comment_laporan' => "Sangat merugikan sekali",
        ]);



        // --------------- already done dummyy ---------------------------------- //
    }
}