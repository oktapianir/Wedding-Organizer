<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimoniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('testimonis')->insert([
            ['id_cust' => 1, 'id_pemesanan' => 101, 'testimoni' => 'Layanan sangat memuaskan! Saya merasa sangat diperhatikan dan semua kebutuhan saya dipenuhi dengan cepat. Staf sangat ramah dan profesional, membuat pengalaman saya di sini sangat menyenangkan. Saya pasti akan merekomendasikan tempat ini kepada teman-teman saya.', 'rating' => 5],
            ['id_cust' => 2, 'id_pemesanan' => 102, 'testimoni' => 'Tempat yang nyaman dan bersih. Suasana di sini sangat tenang, dan saya sangat menyukai dekorasi yang digunakan. Kualitas layanan juga sangat baik, meskipun ada beberapa saat di mana saya harus menunggu sedikit lebih lama. Namun, secara keseluruhan, saya sangat puas.', 'rating' => 4],
            ['id_cust' => 3, 'id_pemesanan' => 103, 'testimoni' => 'Pelayanan cukup baik. Meskipun ada beberapa kendala kecil saat memesan, stafnya sigap dan segera mengatasinya. Makanan yang disajikan juga enak, tetapi saya berharap ada lebih banyak variasi dalam menu. Saya akan kembali untuk mencoba hidangan lainnya.', 'rating' => 3],
            ['id_cust' => 4, 'id_pemesanan' => 104, 'testimoni' => 'Kualitas produk sangat baik.', 'rating' => 5],
            ['id_cust' => 5, 'id_pemesanan' => 105, 'testimoni' => 'Pengalaman yang memuaskan.', 'rating' => 4],
            ['id_cust' => 6, 'id_pemesanan' => 106, 'testimoni' => 'Sangat puas dengan pelayanan.', 'rating' => 5],
            ['id_cust' => 7, 'id_pemesanan' => 107, 'testimoni' => 'Harga yang wajar dan layanan ramah.', 'rating' => 4],
            ['id_cust' => 8, 'id_pemesanan' => 108, 'testimoni' => 'Layanan cepat dan efisien.', 'rating' => 4],
            ['id_cust' => 9, 'id_pemesanan' => 109, 'testimoni' => 'Produk berkualitas tinggi.', 'rating' => 5],
            ['id_cust' => 10, 'id_pemesanan' => 110, 'testimoni' => 'Pengalaman belanja yang menyenangkan.', 'rating' => 5],
            ['id_cust' => 11, 'id_pemesanan' => 111, 'testimoni' => 'Sangat membantu dan informatif.', 'rating' => 4],
            ['id_cust' => 12, 'id_pemesanan' => 112, 'testimoni' => 'Produk sesuai dengan deskripsi.', 'rating' => 4],
            ['id_cust' => 13, 'id_pemesanan' => 113, 'testimoni' => 'Layanan yang sangat baik dan cepat.', 'rating' => 5],
            ['id_cust' => 14, 'id_pemesanan' => 114, 'testimoni' => 'Kualitas yang memuaskan dengan harga terjangkau.', 'rating' => 4],
            ['id_cust' => 15, 'id_pemesanan' => 115, 'testimoni' => 'Pengalaman yang sangat baik!', 'rating' => 5],
            ['id_cust' => 16, 'id_pemesanan' => 116, 'testimoni' => 'Pelayanan yang sangat memuaskan dan profesional.', 'rating' => 5],
            ['id_cust' => 17, 'id_pemesanan' => 117, 'testimoni' => 'Tempat yang sangat nyaman untuk berbelanja.', 'rating' => 4],
            ['id_cust' => 18, 'id_pemesanan' => 118, 'testimoni' => 'Produk berkualitas dan layanan cepat.', 'rating' => 5],
            ['id_cust' => 19, 'id_pemesanan' => 119, 'testimoni' => 'Sangat puas dengan pengalaman belanja.', 'rating' => 4],
            ['id_cust' => 20, 'id_pemesanan' => 120, 'testimoni' => 'Pelayanan yang ramah dan responsif.', 'rating' => 5],
            ['id_cust' => 21, 'id_pemesanan' => 121, 'testimoni' => 'Kurang Memuaskan.', 'rating' => 1],
            ['id_cust' => 22, 'id_pemesanan' => 122, 'testimoni' => 'Cukup Menarik pelayananya.', 'rating' => 2],
            ['id_cust' => 23, 'id_pemesanan' => 123, 'testimoni' => 'Oke ', 'rating' => 1],

        ]);
    }
}
