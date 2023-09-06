<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(4)->create();

        Post::factory(14)->create();

        // User::create([
        //     'name' => 'SMKN 1 BAKAM',
        //     'username' => 'adminsmk',
        //     'email' => 'smkn1bakam@gmail.com',
        //     'password' => bcrypt('smkn1bakam')
        // ]);

        // Category::create([
        //     'name' => 'Web Programing',
        //     'slug' => 'web-programing'
        // ]);
        // Category::create([
        //     'name' => 'Sistem Jaringan',
        //     'slug' => 'sistem-jaringan'
        // ]);
        // Category::create([
        //     'name' => 'Teknik Otomotif',
        //     'slug' => 'teknik-otomotif'
        // ]);

        // Post::create([
        //     'title' => 'Framework Laravel',
        //     'slug' => 'framework-laravel',
        //     'excerpt' => 'Laravel adalah salah satu framework pengembangan web yang paling populer dan kuat yang digunakan oleh pengembang web di seluruh dunia. Framework ini dikembangkan dengan menggunakan bahasa pemrograman PHP dan dirancang untuk mempermudah proses pengembangan aplikasi web yang kompleks.',
        //     'body' => '<p>Laravel adalah salah satu framework pengembangan web yang paling populer dan kuat yang digunakan oleh pengembang web di seluruh dunia. Framework ini dikembangkan dengan menggunakan bahasa pemrograman PHP dan dirancang untuk mempermudah proses pengembangan aplikasi web yang kompleks. Salah satu fitur kunci Laravel adalah kemudahan penggunaannya berkat sintaks yang jelas dan ekspresif, serta berbagai alat yang sudah siap pakai untuk mengatasi tugas-tugas umum seperti manajemen basis data, otentikasi pengguna, dan routing.</p><p>Selain itu, Laravel juga menawarkan banyak fitur canggih, seperti Eloquent ORM yang memungkinkan pengembang untuk berinteraksi dengan basis data menggunakan sintaks yang mirip dengan bahasa pemrograman PHP, Blade templating engine untuk mempermudah pembuatan tampilan yang dinamis, dan sistem routing yang fleksibel. Dengan komunitas yang besar dan aktif, serta dokumentasi yang komprehensif, Laravel telah menjadi pilihan utama bagi banyak pengembang web untuk membangun aplikasi web modern dan efisien secara cepat.</p><p>
        //     Secara keseluruhan, Laravel adalah framework yang sangat kuat dan berorientasi pada produktivitas yang telah mengubah cara kita membangun aplikasi web. Dengan fitur-fitur canggih dan kemudahan penggunaannya, Laravel terus menjadi pilihan utama bagi pengembang web yang ingin mengembangkan aplikasi web yang kuat dan skalabel.</p>',
        //     'category_id' => 1,
        //     'user_id' => 5
        // ]);

        // Post::create([
        //     'title' => 'Struktur Fiber Optik',
        //     'slug' => 'struktur-fiber-optik',
        //     'excerpt' => 'Sebelum mencari tahu bagaimana cara kerjanya, mari kita mengetahui strukturnya terlebih dahulu supaya lebih mudah memahaminya. Begini struktur fiber optik dari dalam ke luar serta fungsinya masing-masing.',
        //     'body' => '<p>Sebelum mencari tahu bagaimana cara kerjanya, mari kita mengetahui strukturnya terlebih dahulu supaya lebih mudah memahaminya. Begini struktur fiber optik dari dalam ke luar serta fungsinya masing-masing.</p><p>1. Inti (core)
        //     Bagian core (inti) pada serat optik terbuat dari kaca dan plastik halus dengan diameter yang tebalnya sangat kecil, yakni 2-50 mikrometer. Fungsinya adalah sebagai media merambatnya cahaya.</p><p>2. Cladding
        //     Cladding merupakan bagian yang menyelubungi lapisan inti (core) pada serat optik, ukurannya 5-250 mikrometer. Cladding terbuat dari bahan silikon, sehingga memiliki indeks bias berbeda agar cahaya dapat dipantulkan kembali sekaligus membuat cahaya tetap berada dalam serat optik. Fungsi cladding tidak hanya sebagai lapisan pelindung inti serat optik saja, tetapi juga untuk melindungi gelombang cahaya. Itulah mengapa, adanya cladding membantu supaya cahaya dapat tembus kembali ke inti.</p><p>3. Buffer/coating
        //     Lapisan setelah cladding adalah coating atau buffering, terbuat dari bahan plastik dengan sifat elastis yang gunanya untuk melindungi serat optik dari segala gangguan fisik. Contoh gangguannya, misalnya terjadi lekukan pada kabel serta ketidak-seimbangan kelembaban udara.
        //     Adanya lapisan coating dapat memberi perlindungan apabila terjadi retakan-retakan pada permukaan kabel sekaligus sebagai perlindungan mekanis dalam proses transmisi cahaya pada serat optik. Di bagian dalam lapisan coating, bahannya terbuat dari lapisan plastik elastis, kemudian pada bagian luar coating terdapat lapisan pembungkus tambahan atau disebut dengan buffer primer.</p><p>4. Strength member dan outer jacket
        //     Adapun lapisan paling luar adalah strength member dan outer jacket. Fungsinya untuk melindungi kabel serat optik dari gangguan fisik secara langsung maupun gangguan dalam bentuk lainnya.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Keamanan Jaringan Komputer',
        //     'slug' => 'keamanan-jaringan-komputer',
        //     'excerpt' => 'Keamanan jaringan komputer adalah praktik dan prosedur yang dilakukan untuk melindungi jaringan komputer dari ancaman dan serangan yang merusak, seperti virus, malware, hacker, dan peretasan data.',
        //     'body' => 'Keamanan jaringan komputer adalah praktik dan prosedur yang dilakukan untuk melindungi jaringan komputer dari ancaman dan serangan yang merusak, seperti virus, malware, hacker, dan peretasan data. Tujuan utama dari keamanan jaringan komputer adalah untuk melindungi data sensitif dan informasi rahasia dari kebocoran atau akses yang tidak sah.  Keamanan jaringan komputer mencakup sejumlah langkah dan teknologi untuk mencegah, mengidentifikasi, dan merespon ancaman keamananmmn',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Belajar Programing',
        //     'slug' => 'belajar-programing',
        //     'excerpt' => 'programming adalah sebuah proses untuk membuat program di komputer. Program yang dibuat bisa berupa software, website, aplikasi android, dsb.',
        //     'body' => '<p>programming adalah sebuah proses untuk membuat program di komputer. Program yang dibuat bisa berupa software, website, aplikasi android, dsb.</p><p>Lalu, mulai dari manakah agar kamu bisa memulai programming? Untuk membuat program tentunya ada beberapa tahapan. Mulai dari tulis menulis, menguji, merevisi, dan mengevaluasi, serta mengujinya lagi sampai program tersebut benar-benar jadi dan sesuai dengan apa yang diinginkan.</p><p>Jadi, programming adalah suatu proses atau kegiatan menulis dan menguji (pemrograman) agar program dapat dibuat, dan hasilnya sesuai apa yang diinginkan.</p><p>Bagaimana, sudah mulai paham kan apa itu programming?Lalu, muncul pertanyaan lagi mengenai programming. Apa sih yang ditulis dalam proses tersebut? Tentunya, bukan tulisan biasa. Tidak seperti saat menulis buku novel ataupun puisi karena ini berhubungan dengan program komputer. Sehingga bahasa tulisan pun harus dapat dimengerti oleh komputer, yakni berupa kode-kode program yang sudah ada sebelumnya.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Perawatan Kendaraan Roda 2',
        //     'slug' => 'perawatan-kendaraan-roda-2',
        //     'excerpt' => 'Merawat kendaraan roda dua sangat penting untuk memastikan kinerjanya tetap optimal dan aman selama digunakan.',
        //     'body' => '
        //     Merawat kendaraan roda dua sangat penting untuk memastikan kinerjanya tetap optimal dan aman selama digunakan. Salah satu hal utama dalam perawatan kendaraan roda dua adalah menjaga tingkat keamanan dengan teratur memeriksa sistem pengereman, lampu, dan klakson. Selain itu, perlu rutin memeriksa tekanan ban dan menggantinya jika diperlukan, karena ban yang aus dapat mengurangi traksi dan mengancam keselamatan. Pemeliharaan mesin juga krusial; mengganti oli dan filter secara teratur, serta menjaga level cairan seperti bahan bakar dan pendingin mesin dalam kondisi optimal. Selain itu, menjaga rantai atau sabuk penggerak dalam keadaan yang baik dan terjaga dengan pelumasan yang sesuai juga membantu meningkatkan efisiensi dan umur pakai kendaraan. Selalu mengikuti panduan perawatan dari produsen dan melakukan servis rutin di bengkel terpercaya juga merupakan bagian penting dalam memastikan bahwa kendaraan roda dua Anda tetap dalam kondisi yang baik.',
        //     'category_id' => 3,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Perawatan Kelistrikan Pada Kendaraan',
        //     'slug' => 'perawatan-kelistrikan-pada-kendaraan',
        //     'excerpt' => 'Perawatan kelistrikan kendaraan adalah langkah penting dalam memastikan kinerja optimal dan keamanan kendaraan Anda.',
        //     'body' => 'Perawatan kelistrikan kendaraan adalah langkah penting dalam memastikan kinerja optimal dan keamanan kendaraan Anda. Salah satu aspek utama dari perawatan ini adalah memeriksa sistem pengisian, termasuk alternator dan aki, secara berkala. Pastikan alternator menghasilkan daya yang cukup untuk mengisi aki dengan baik, serta periksa tegangan aki secara rutin. Selain itu, menjaga kabel dan konektor dalam kondisi baik sangat penting. Pastikan tidak ada kabel yang terkelupas atau korosi pada terminal. Selain itu, jangan lupakan sistem pencahayaan, termasuk lampu depan, lampu belakang, dan lampu rem. Ganti lampu yang mati segera untuk menjaga keamanan di jalan. Terakhir, bersihkan dan pelumasan komponen elektrik seperti saklar, saklar tuas, dan motor kaca jendela secara berkala. Dengan perawatan kelistrikan yang baik, Anda dapat meningkatkan umur pakai kendaraan Anda dan mengurangi risiko masalah yang tidak diinginkan di jalan.',
        //     'category_id' => 3,
        //     'user_id' => 1
        // ]);
    }
}
