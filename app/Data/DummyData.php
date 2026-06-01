<?php

namespace App\Data;

class DummyData
{
    public static function services(): array
    {
        return [
            [
                'icon' => 'bi-globe',
                'title' => 'Website (Laravel)',
                'short' => 'Web app modern & scalable',
                'description' => 'Kami membangun aplikasi web modern, scalable, dan aman menggunakan Laravel. Cocok untuk sistem informasi, e-commerce, platform SaaS, dan portal bisnis.',
                'features' => ['Laravel 12', 'API RESTful', 'Database Design', 'Admin Panel', 'Payment Gateway', 'Responsive UI'],
            ],
            [
                'icon' => 'bi-phone',
                'title' => 'Android (Kotlin)',
                'short' => 'Native Android performa tinggi',
                'description' => 'Aplikasi Android native dengan performa tinggi menggunakan Kotlin. UI/UX modern, integrasi API, dan fitur lengkap sesuai kebutuhan bisnis Anda.',
                'features' => ['Kotlin Coroutines', 'Jetpack Compose', 'Firebase', 'MVVM Architecture', 'Offline Mode', 'Push Notification'],
            ],
            [
                'icon' => 'bi-pc-display',
                'title' => 'Desktop (Java SE)',
                'short' => 'Aplikasi enterprise handal',
                'description' => 'Aplikasi desktop enterprise dengan Java SE. Cocok untuk sistem kasir, inventaris, akuntansi, dan aplikasi internal perusahaan.',
                'features' => ['Java Swing/JavaFX', 'Database MySQL', 'Report (Jasper)', 'Multi-User', 'Offline Support', 'POS Ready'],
            ],
            [
                'icon' => 'bi-cloud',
                'title' => 'SaaS Rental',
                'short' => 'Sewa apps siap pakai',
                'description' => 'Sewa aplikasi siap pakai dengan biaya bulanan terjangkau. Termasuk maintenance, update, dan support teknis penuh tanpa ribet.',
                'features' => ['Monthly Subscription', 'Free Update', '24/7 Support', 'Cloud Hosting', 'Data Backup', 'Custom Branding'],
            ],
        ];
    }

    public static function portfolios(): array
    {
        return [
            [
                'title' => 'Sistem Informasi Sekolah',
                'category' => 'web',
                'description' => 'Aplikasi manajemen sekolah lengkap dengan modul akademik, keuangan, absensi, dan rapor online.',
                'icon' => 'bi-building',
                'client' => 'SMK Harapan Bangsa',
                'year' => '2025',
                'tech' => ['Laravel', 'MySQL', 'Bootstrap', 'Tailwind'],
            ],
            [
                'title' => 'E-Commerce Fashion',
                'category' => 'web',
                'description' => 'Platform e-commerce fashion dengan fitur multi-vendor, pembayaran digital, dan dashboard real-time.',
                'icon' => 'bi-bag',
                'client' => 'FashionX Indonesia',
                'year' => '2025',
                'tech' => ['Laravel', 'Vue.js', 'Midtrans', 'Redis'],
            ],
            [
                'title' => 'Aplikasi Kasir Restoran',
                'category' => 'desktop',
                'description' => 'Aplikasi POS restoran dengan manajemen menu, pesanan, laporan harian, dan printer thermal.',
                'icon' => 'bi-cup-hot',
                'client' => 'RM Sederhana Group',
                'year' => '2024',
                'tech' => ['Java SE', 'MySQL', 'JasperReports'],
                'images' => ['portfolio/desktop/dashboard.PNG', 'portfolio/desktop/daftar barang.PNG'],
            ],
            [
                'title' => 'Aplikasi Laundry Online',
                'category' => 'android',
                'description' => 'Aplikasi mobile untuk pemesanan laundry dengan tracking status real-time dan notifikasi push.',
                'icon' => 'bi-droplet',
                'client' => 'LaundryKu',
                'year' => '2025',
                'tech' => ['Kotlin', 'Firebase', 'Maps API'],
            ],
            [
                'title' => 'SaaS Manajemen Inventaris',
                'category' => 'saas',
                'description' => 'Aplikasi inventaris berbasis cloud dengan model sewa bulanan, multi-tenant, dan fitur barcode scanner.',
                'icon' => 'bi-box-seam',
                'client' => 'PT Logistik Maju',
                'year' => '2025',
                'tech' => ['Laravel', 'Kotlin', 'Java SE', 'API'],
            ],
            [
                'title' => 'Aplikasi Booking Hotel',
                'category' => 'android',
                'description' => 'Aplikasi booking hotel dengan fitur pencarian, reservasi kamar, dan integrasi payment gateway.',
                'icon' => 'bi-building',
                'client' => 'Hotel Grand Asia',
                'year' => '2024',
                'tech' => ['Kotlin', 'Retrofit', 'Firebase'],
            ],
            [
                'title' => 'Sistem Akuntansi UKM',
                'category' => 'desktop',
                'description' => 'Aplikasi akuntansi untuk UKM dengan fitur jurnal umum, buku besar, laporan keuangan, dan multi-user.',
                'icon' => 'bi-calculator',
                'client' => 'CV Karya Mandiri',
                'year' => '2024',
                'tech' => ['Java SE', 'MySQL', 'JasperReports'],
            ],
            [
                'title' => 'Platform Belajar Online',
                'category' => 'web',
                'description' => 'LMS (Learning Management System) dengan fitur kursus online, quiz, sertifikat, dan forum diskusi.',
                'icon' => 'bi-book',
                'client' => 'EduTech Indonesia',
                'year' => '2025',
                'tech' => ['Laravel', 'Vue.js', 'WebRTC'],
            ],
            [
                'title' => 'Aplikasi Apotek',
                'category' => 'desktop',
                'description' => 'Aplikasi manajemen apotek lengkap dengan stok obat, penjualan, resep dokter, dan laporan keuangan harian.',
                'icon' => 'bi-capsule',
                'client' => 'Apotek Sehat Farma',
                'year' => '2025',
                'tech' => ['Java SE', 'MySQL', 'JasperReports'],
            ],
        ];
    }

    public static function testimonials(): array
    {
        return [
            [
                'name' => 'Ahmad Fauzi',
                'role' => 'Owner',
                'company' => 'RM Sederhana Group',
                'avatar' => 'AF',
                'rating' => 5,
                'quote' => 'Aplikasi kasir dari SoftImagine sangat membantu operasional restoran kami. Fiturnya lengkap dan supportnya cepat! Proses pembuatan juga sesuai deadline.',
            ],
            [
                'name' => 'Siti Rahmawati',
                'role' => 'Kepala Sekolah',
                'company' => 'SMK Harapan Bangsa',
                'avatar' => 'SR',
                'rating' => 5,
                'quote' => 'Sistem informasi sekolah yang dibuat sangat memudahkan administrasi kami. Orang tua siswa juga bisa memantau nilai anak secara online. Sangat recommended!',
            ],
            [
                'name' => 'Budi Santoso',
                'role' => 'CEO',
                'company' => 'FashionX Indonesia',
                'avatar' => 'BS',
                'rating' => 5,
                'quote' => 'Tim SoftImagine profesional dalam membangun e-commerce kami. Hasilnya sesuai ekspektasi, bahkan lebih. Dashboard real-time sangat membantu monitoring bisnis.',
            ],
            [
                'name' => 'Dewi Lestari',
                'role' => 'Manager Operasional',
                'company' => 'PT Logistik Maju',
                'avatar' => 'DL',
                'rating' => 4,
                'quote' => 'SaaS inventory dari SoftImagine membantu kami mengelola stok di 3 gudang berbeda. Model sewanya sangat terjangkau untuk perusahaan kecil seperti kami.',
            ],
            [
                'name' => 'Rudi Hermawan',
                'role' => 'Direktur',
                'company' => 'Hotel Grand Asia',
                'avatar' => 'RH',
                'rating' => 5,
                'quote' => 'Aplikasi booking hotel berbasis Android sangat membantu meningkatkan jumlah reservasi. Fitur payment gateway-nya memudahkan tamu melakukan pembayaran.',
            ],
        ];
    }

    public static function blogs(): array
    {
        return [
            [
                'slug' => 'mengenal-laravel-12-fitur-terbaru',
                'title' => 'Mengenal Laravel 12: Fitur Terbaru yang Wajib Kamu Tahu',
                'category' => 'Web Development',
                'image' => 'bi-laravel',
                'excerpt' => 'Laravel 12 hadir dengan berbagai fitur baru yang menarik. Mulai dari improvement performa, fitur keamanan, hingga tools baru untuk developer.',
                'content' => "
                    <p>Laravel 12 telah resmi dirilis dengan membawa berbagai peningkatan signifikan. Sebagai framework PHP terpopuler, Laravel terus berinovasi untuk memberikan pengalaman development terbaik.</p>

                    <h2>Fitur Unggulan Laravel 12</h2>
                    <p>Beberapa fitur unggulan yang hadir di Laravel 12 antara lain: Reverb untuk WebSocket real-time, Folio untuk page-based routing, dan banyak lagi improvement pada core framework.</p>

                    <blockquote>\"Laravel 12 adalah lompatan terbesar dalam sejarah framework Laravel. Performa dan developer experience menjadi fokus utama.\"</blockquote>

                    <h3>Peningkatan Performa</h3>
                    <p>Laravel 12 menghadirkan optimasi performa yang signifikan. Proses routing 30% lebih cepat, query builder yang lebih efisien, dan cache system yang lebih cerdas.</p>

                    <h3>Fitur Keamanan Baru</h3>
                    <p>Dari sisi keamanan, Laravel 12 menambahkan fitur rate limiting yang lebih fleksibel, enkripsi data yang lebih kuat, dan perlindungan CSRF yang lebih ketat.</p>

                    <p>Dengan berbagai fitur baru ini, Laravel 12 menjadi pilihan tepat untuk membangun aplikasi web modern, scalable, dan aman.</p>
                ",
                'author' => 'Tim SoftImagine',
                'date' => '2025-05-20',
                'read_time' => '5 min read',
            ],
            [
                'slug' => 'keunggulan-kotlin-android-development',
                'title' => '5 Keunggulan Kotlin untuk Pengembangan Aplikasi Android',
                'category' => 'Android',
                'image' => 'bi-android2',
                'excerpt' => 'Kotlin telah menjadi bahasa utama untuk pengembangan Android. Apa saja keunggulannya dibandingkan Java? Simak selengkapnya.',
                'content' => "
                    <p>Kotlin telah resmi menjadi bahasa pemrograman utama untuk pengembangan aplikasi Android. Banyak developer beralih dari Java ke Kotlin karena berbagai keunggulan yang ditawarkan.</p>

                    <h2>Mengapa Memilih Kotlin?</h2>
                    <p>Kotlin menawarkan banyak keunggulan yang membuat proses pengembangan Android menjadi lebih cepat, aman, dan menyenangkan.</p>

                    <blockquote>\"Kotlin adalah masa depan pengembangan Android. Dengan sintaks yang modern dan fitur keamanan yang kuat, Kotlin menjadi pilihan utama.\"</blockquote>

                    <h3>1. Null Safety</h3>
                    <p>Salah satu fitur terbaik Kotlin adalah null safety. Dengan sistem tipe yang membedakan nullable dan non-nullable, risiko NullPointerException (NPE) bisa diminimalisir secara drastis.</p>

                    <h3>2. Coroutines</h3>
                    <p>Kotlin Coroutines memudahkan penanganan operasi asynchronous. Kode menjadi lebih bersih dan mudah dibaca dibandingkan dengan callback atau RxJava.</p>

                    <h3>3. Interoperabilitas dengan Java</h3>
                    <p>Kotlin 100% interoperable dengan Java. Anda bisa menggunakan library Java di project Kotlin, dan sebaliknya. Ini memudahkan migrasi bertahap.</p>

                    <p>Dengan berbagai keunggulan tersebut, tidak heran jika Kotlin menjadi pilihan utama dalam pengembangan aplikasi Android modern.</p>
                ",
                'author' => 'Tim SoftImagine',
                'date' => '2025-05-15',
                'read_time' => '4 min read',
            ],
            [
                'slug' => 'java-se-untuk-aplikasi-enterprise',
                'title' => 'Java SE: Pilihan Tepat untuk Aplikasi Enterprise',
                'category' => 'Desktop',
                'image' => 'bi-cpu',
                'excerpt' => 'Java SE masih menjadi pilihan utama untuk pengembangan aplikasi desktop enterprise. Kenapa? Karena kehandalan dan ekosistemnya yang matang.',
                'content' => "
                    <p>Java SE (Standard Edition) tetap menjadi pilihan utama dalam pengembangan aplikasi desktop enterprise meskipun banyak teknologi baru bermunculan.</p>

                    <h2>Keunggulan Java SE</h2>
                    <p>Java SE menawarkan stabilitas, performa, dan ekosistem library yang sangat luas untuk berbagai kebutuhan enterprise.</p>

                    <blockquote>\"Java SE telah teruji selama lebih dari 20 tahun sebagai platform pengembangan aplikasi enterprise yang handal dan stabil.\"</blockquote>

                    <h3>Cross-Platform</h3>
                    <p>Aplikasi Java bisa dijalankan di Windows, Linux, dan macOS tanpa perubahan kode. Ini sangat penting untuk enterprise dengan lingkungan heterogen.</p>

                    <h3>Ekosistem Library</h3>
                    <p>Java memiliki ribuan library untuk berbagai kebutuhan: JasperReports untuk laporan, POI untuk dokumen Office, Swing/JavaFX untuk UI, dan masih banyak lagi.</p>

                    <p>Java SE tetap relevan dan menjadi pilihan tepat untuk aplikasi enterprise yang membutuhkan stabilitas dan performa tinggi.</p>
                ",
                'author' => 'Tim SoftImagine',
                'date' => '2025-05-10',
                'read_time' => '4 min read',
            ],
            [
                'slug' => 'saas-vs-aplikasi-konvensional',
                'title' => 'SaaS vs Aplikasi Konvensional: Mana yang Lebih Tepat?',
                'category' => 'SaaS',
                'image' => 'bi-cloud-arrow-up',
                'excerpt' => 'Mau mulai bisnis digital? Pilih antara SaaS atau aplikasi konvensional bisa jadi dilema. Yuk simak perbandingannya.',
                'content' => "
                    <p>Dalam memilih solusi software untuk bisnis, seringkali muncul pertanyaan: lebih baik menggunakan SaaS (Software as a Service) atau aplikasi konvensional?</p>

                    <h2>Perbandingan SaaS vs Aplikasi Konvensional</h2>

                    <h3>SaaS (Software as a Service)</h3>
                    <p>SaaS menawarkan model berlangganan dengan biaya bulanan/tahunan. Keunggulannya: tidak perlu investasi besar di awal, maintenance dan update ditangani penyedia, dan bisa diakses dari mana saja.</p>

                    <h3>Aplikasi Konvensional</h3>
                    <p>Aplikasi konvensional dibeli sekali dengan lisensi penuh. Cocok untuk perusahaan yang ingin kontrol penuh atas data dan infrastruktur mereka.</p>

                    <blockquote>\"Pilihan antara SaaS dan aplikasi konvensional tergantung pada kebutuhan, budget, dan strategi jangka panjang bisnis Anda.\"</blockquote>

                    <h3>Kapan Memilih SaaS?</h3>
                    <p>SaaS cocok untuk UKM yang ingin meminimalkan investasi awal, tidak memiliki tim IT internal, dan menginginkan fleksibilitas.</p>

                    <h3>Kapan Memilih Aplikasi Konvensional?</h3>
                    <p>Aplikasi konvensional cocok untuk perusahaan besar dengan kebutuhan kustomisasi tinggi, regulasi data ketat, dan memiliki tim IT internal.</p>

                    <p>SoftImagine menyediakan kedua opsi: SaaS dengan model sewa bulanan, atau pembuatan aplikasi custom sesuai kebutuhan Anda.</p>
                ",
                'author' => 'Tim SoftImagine',
                'date' => '2025-05-05',
                'read_time' => '6 min read',
            ],
            [
                'slug' => 'tips-memilih-jasa-pembuatan-aplikasi',
                'title' => '7 Tips Memilih Jasa Pembuatan Aplikasi yang Tepat',
                'category' => 'Tips',
                'image' => 'bi-lightbulb',
                'excerpt' => 'Bingung memilih jasa pembuatan aplikasi? Simak 7 tips penting agar Anda tidak salah pilih dan mendapatkan hasil terbaik.',
                'content' => "
                    <p>Memilih jasa pembuatan aplikasi yang tepat adalah keputusan penting yang akan mempengaruhi kesuksesan proyek Anda. Berikut 7 tips yang perlu diperhatikan.</p>

                    <h2>1. Cek Portofolio</h2>
                    <p>Lihat portofolio penyedia jasa. Apakah mereka pernah mengerjakan proyek serupa dengan kebutuhan Anda? Kualitas portofolio bisa menjadi indikator kemampuan mereka.</p>

                    <h2>2. Pahami Teknologi yang Digunakan</h2>
                    <p>Pastikan penyedia jasa menggunakan teknologi yang tepat dan modern. Teknologi yang usang akan menyulitkan pengembangan dan maintenance di masa depan.</p>

                    <blockquote>\"Pilih penyedia jasa yang transparan dalam proses pengembangan dan menggunakan teknologi yang sesuai dengan kebutuhan proyek Anda.\"</blockquote>

                    <h2>3. Evaluasi Komunikasi</h2>
                    <p>Komunikasi yang baik sangat penting dalam proyek pengembangan aplikasi. Pastikan penyedia jasa responsif dan mudah dihubungi.</p>

                    <h2>4. Perhatikan Support After-Sales</h2>
                    <p>Aplikasi perlu maintenance dan update. Pastikan penyedia jasa menawarkan support after-sales yang jelas.</p>

                    <p>SoftImagine siap membantu mewujudkan aplikasi impian Anda dengan teknologi terbaik dan support penuh.</p>
                ",
                'author' => 'Tim SoftImagine',
                'date' => '2025-04-28',
                'read_time' => '5 min read',
            ],
            [
                'slug' => 'optimasi-website-laravel-untuk-seo',
                'title' => 'Cara Optimasi Website Laravel untuk SEO Terbaik',
                'category' => 'Web Development',
                'image' => 'bi-graph-up',
                'excerpt' => 'Website cepat dan SEO-friendly adalah kunci sukses di era digital. Pelajari cara optimasi website Laravel Anda untuk peringkat SEO terbaik.',
                'content' => "
                    <p>Optimasi SEO untuk website Laravel sangat penting untuk meningkatkan visibilitas di mesin pencari. Berikut langkah-langkah yang bisa Anda terapkan.</p>

                    <h2>1. Optimasi Kecepatan Website</h2>
                    <p>Kecepatan website adalah faktor penting dalam SEO. Gunakan caching, optimasi query database, dan kompresi asset untuk meningkatkan performa.</p>

                    <h2>2. Implementasi Meta Tags</h2>
                    <p>Pastikan setiap halaman memiliki meta title, description, dan Open Graph tags yang unik dan relevan dengan konten.</p>

                    <blockquote>\"Website yang cepat dan ramah SEO tidak hanya disukai Google, tapi juga memberikan pengalaman terbaik bagi pengunjung.\"</blockquote>

                    <h2>3. Gunakan Sitemap</h2>
                    <p>Sitemap XML membantu mesin pencari mengindeks website Anda dengan lebih baik. Laravel memiliki package sitemap generator yang bisa digunakan.</p>

                    <h2>4. Mobile Friendly</h2>
                    <p>Pastikan website responsive dan nyaman diakses dari perangkat mobile. Google menggunakan mobile-first indexing untuk menentukan peringkat.</p>

                    <p>Dengan menerapkan tips di atas, website Laravel Anda akan lebih mudah ditemukan di mesin pencari dan memberikan pengalaman terbaik bagi pengunjung.</p>
                ",
                'author' => 'Tim SoftImagine',
                'date' => '2025-04-20',
                'read_time' => '5 min read',
            ],
        ];
    }

    public static function team(): array
    {
        return [
            [
                'name' => 'Ardan Prayogi',
                'role' => 'Founder & Lead Developer',
                'initials' => 'AP',
                'phone' => null,
                'skills' => ['Laravel', 'Kotlin', 'Java SE', 'Vue.js'],
            ],
            [
                'name' => 'Jatmiko I',
                'role' => 'Marketing',
                'initials' => 'JI',
                'phone' => '6281391347956',
                'skills' => ['Digital Marketing', 'Branding', 'Consultation'],
            ],
            [
                'name' => 'Nurhidayat',
                'role' => 'Analis & Programmer',
                'initials' => 'NH',
                'phone' => '6281229548403',
                'skills' => ['System Analyst', 'Laravel', 'Kotlin', 'Java SE'],
            ],
            [
                'name' => 'Rina Wijaya',
                'role' => 'UI/UX Designer',
                'initials' => 'RW',
                'phone' => null,
                'skills' => ['Figma', 'Adobe XD', 'Tailwind', 'Bootstrap'],
            ],
            [
                'name' => 'Dimas Pratama',
                'role' => 'Android Developer',
                'initials' => 'DP',
                'phone' => null,
                'skills' => ['Kotlin', 'Jetpack', 'Firebase', 'Flutter'],
            ],
            [
                'name' => 'Sari Indah',
                'role' => 'Project Manager',
                'initials' => 'SI',
                'phone' => null,
                'skills' => ['Agile', 'Scrum', 'Jira', 'Notion'],
            ],
        ];
    }

    public static function stats(): array
    {
        return [
            ['value' => '50+', 'label' => 'Project Selesai'],
            ['value' => '35+', 'label' => 'Klien Puas'],
            ['value' => '5+', 'label' => 'Tahun Pengalaman'],
            ['value' => '24/7', 'label' => 'Support'],
        ];
    }
}
