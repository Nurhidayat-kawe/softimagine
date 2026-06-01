<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\Portfolio;
use App\Models\Testimonial;
use App\Models\Blog;
use App\Models\TeamMember;
use App\Models\SiteStat;
use App\Models\SiteSetting;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@softimagine.com',
            'password' => Hash::make('password'),
            'is_admin' => true,
        ]);

        $services = [
            ['icon' => 'bi-globe', 'title' => 'Website (Laravel)', 'short_desc' => 'Web app modern & scalable', 'description' => 'Kami membangun aplikasi web modern, scalable, dan aman menggunakan Laravel. Cocok untuk sistem informasi, e-commerce, platform SaaS, dan portal bisnis.', 'features' => ['Laravel 12', 'API RESTful', 'Database Design', 'Admin Panel', 'Payment Gateway', 'Responsive UI'], 'sort_order' => 0],
            ['icon' => 'bi-phone', 'title' => 'Android (Kotlin)', 'short_desc' => 'Native Android performa tinggi', 'description' => 'Aplikasi Android native dengan performa tinggi menggunakan Kotlin. UI/UX modern, integrasi API, dan fitur lengkap sesuai kebutuhan bisnis Anda.', 'features' => ['Kotlin Coroutines', 'Jetpack Compose', 'Firebase', 'MVVM Architecture', 'Offline Mode', 'Push Notification'], 'sort_order' => 1],
            ['icon' => 'bi-pc-display', 'title' => 'Desktop (Java SE)', 'short_desc' => 'Aplikasi enterprise handal', 'description' => 'Aplikasi desktop enterprise dengan Java SE. Cocok untuk sistem kasir, inventaris, akuntansi, dan aplikasi internal perusahaan.', 'features' => ['Java Swing/JavaFX', 'Database MySQL', 'Report (Jasper)', 'Multi-User', 'Offline Support', 'POS Ready'], 'sort_order' => 2],
            ['icon' => 'bi-cloud', 'title' => 'SaaS Rental', 'short_desc' => 'Sewa apps siap pakai', 'description' => 'Sewa aplikasi siap pakai dengan biaya bulanan terjangkau. Termasuk maintenance, update, dan support teknis penuh tanpa ribet.', 'features' => ['Monthly Subscription', 'Free Update', '24/7 Support', 'Cloud Hosting', 'Data Backup', 'Custom Branding'], 'sort_order' => 3],
        ];
        foreach ($services as $s) { Service::create($s); }

        $portfolios = [
            ['title' => 'Sistem Informasi Sekolah', 'category' => 'web', 'description' => 'Aplikasi manajemen sekolah lengkap dengan modul akademik, keuangan, absensi, dan rapor online.', 'icon' => 'bi-building', 'client' => 'SMK Harapan Bangsa', 'year' => '2025', 'tech' => ['Laravel', 'MySQL', 'Bootstrap', 'Tailwind'], 'images' => null, 'sort_order' => 0],
            ['title' => 'E-Commerce Fashion', 'category' => 'web', 'description' => 'Platform e-commerce fashion dengan fitur multi-vendor, pembayaran digital, dan dashboard real-time.', 'icon' => 'bi-bag', 'client' => 'FashionX Indonesia', 'year' => '2025', 'tech' => ['Laravel', 'Vue.js', 'Midtrans', 'Redis'], 'images' => null, 'sort_order' => 1],
            ['title' => 'Aplikasi Kasir Restoran', 'category' => 'desktop', 'description' => 'Aplikasi POS restoran dengan manajemen menu, pesanan, laporan harian, dan printer thermal.', 'icon' => 'bi-cup-hot', 'client' => 'RM Sederhana Group', 'year' => '2024', 'tech' => ['Java SE', 'MySQL', 'JasperReports'], 'images' => ['portfolio/desktop/dashboard.PNG', 'portfolio/desktop/daftar barang.PNG'], 'sort_order' => 2],
            ['title' => 'Aplikasi Laundry Online', 'category' => 'android', 'description' => 'Aplikasi mobile untuk pemesanan laundry dengan tracking status real-time dan notifikasi push.', 'icon' => 'bi-droplet', 'client' => 'LaundryKu', 'year' => '2025', 'tech' => ['Kotlin', 'Firebase', 'Maps API'], 'images' => null, 'sort_order' => 3],
            ['title' => 'SaaS Manajemen Inventaris', 'category' => 'saas', 'description' => 'Aplikasi inventaris berbasis cloud dengan model sewa bulanan, multi-tenant, dan fitur barcode scanner.', 'icon' => 'bi-box-seam', 'client' => 'PT Logistik Maju', 'year' => '2025', 'tech' => ['Laravel', 'Kotlin', 'Java SE', 'API'], 'images' => null, 'sort_order' => 4],
            ['title' => 'Aplikasi Booking Hotel', 'category' => 'android', 'description' => 'Aplikasi booking hotel dengan fitur pencarian, reservasi kamar, dan integrasi payment gateway.', 'icon' => 'bi-building', 'client' => 'Hotel Grand Asia', 'year' => '2024', 'tech' => ['Kotlin', 'Retrofit', 'Firebase'], 'images' => null, 'sort_order' => 5],
            ['title' => 'Sistem Akuntansi UKM', 'category' => 'desktop', 'description' => 'Aplikasi akuntansi untuk UKM dengan fitur jurnal umum, buku besar, laporan keuangan, dan multi-user.', 'icon' => 'bi-calculator', 'client' => 'CV Karya Mandiri', 'year' => '2024', 'tech' => ['Java SE', 'MySQL', 'JasperReports'], 'images' => null, 'sort_order' => 6],
            ['title' => 'Platform Belajar Online', 'category' => 'web', 'description' => 'LMS (Learning Management System) dengan fitur kursus online, quiz, sertifikat, dan forum diskusi.', 'icon' => 'bi-book', 'client' => 'EduTech Indonesia', 'year' => '2025', 'tech' => ['Laravel', 'Vue.js', 'WebRTC'], 'images' => null, 'sort_order' => 7],
            ['title' => 'Aplikasi Apotek', 'category' => 'desktop', 'description' => 'Aplikasi manajemen apotek lengkap dengan stok obat, penjualan, resep dokter, dan laporan keuangan harian.', 'icon' => 'bi-capsule', 'client' => 'Apotek Sehat Farma', 'year' => '2025', 'tech' => ['Java SE', 'MySQL', 'JasperReports'], 'images' => null, 'sort_order' => 8],
        ];
        foreach ($portfolios as $p) { Portfolio::create($p); }

        $testimonials = [
            ['name' => 'Ahmad Fauzi', 'role' => 'Owner', 'company' => 'RM Sederhana Group', 'initials' => 'AF', 'rating' => 5, 'quote' => 'Aplikasi kasir dari SoftImagine sangat membantu operasional restoran kami. Fiturnya lengkap dan supportnya cepat! Proses pembuatan juga sesuai deadline.'],
            ['name' => 'Siti Rahmawati', 'role' => 'Kepala Sekolah', 'company' => 'SMK Harapan Bangsa', 'initials' => 'SR', 'rating' => 5, 'quote' => 'Sistem informasi sekolah yang dibuat sangat memudahkan administrasi kami. Orang tua siswa juga bisa memantau nilai anak secara online. Sangat recommended!'],
            ['name' => 'Budi Santoso', 'role' => 'CEO', 'company' => 'FashionX Indonesia', 'initials' => 'BS', 'rating' => 5, 'quote' => 'Tim SoftImagine profesional dalam membangun e-commerce kami. Hasilnya sesuai ekspektasi, bahkan lebih. Dashboard real-time sangat membantu monitoring bisnis.'],
            ['name' => 'Dewi Lestari', 'role' => 'Manager Operasional', 'company' => 'PT Logistik Maju', 'initials' => 'DL', 'rating' => 4, 'quote' => 'SaaS inventory dari SoftImagine membantu kami mengelola stok di 3 gudang berbeda. Model sewanya sangat terjangkau untuk perusahaan kecil seperti kami.'],
            ['name' => 'Rudi Hermawan', 'role' => 'Direktur', 'company' => 'Hotel Grand Asia', 'initials' => 'RH', 'rating' => 5, 'quote' => 'Aplikasi booking hotel berbasis Android sangat membantu meningkatkan jumlah reservasi. Fitur payment gateway-nya memudahkan tamu melakukan pembayaran.'],
        ];
        foreach ($testimonials as $t) { Testimonial::create($t); }

        $blogs = [
            ['slug' => 'mengenal-laravel-12-fitur-terbaru', 'title' => 'Mengenal Laravel 12: Fitur Terbaru yang Wajib Kamu Tahu', 'category' => 'Web Development', 'image' => null, 'excerpt' => 'Laravel 12 hadir dengan berbagai fitur baru yang menarik. Mulai dari improvement performa, fitur keamanan, hingga tools baru untuk developer.', 'content' => '<p>Laravel 12 telah resmi dirilis dengan membawa berbagai peningkatan signifikan.</p><h2>Fitur Unggulan Laravel 12</h2><p>Beberapa fitur unggulan yang hadir di Laravel 12 antara lain: Reverb untuk WebSocket real-time, Folio untuk page-based routing, dan banyak lagi improvement pada core framework.</p><h3>Peningkatan Performa</h3><p>Laravel 12 menghadirkan optimasi performa yang signifikan. Proses routing 30% lebih cepat, query builder yang lebih efisien, dan cache system yang lebih cerdas.</p>', 'author' => 'Tim SoftImagine', 'date' => '2025-05-20', 'read_time' => '5 min read'],
            ['slug' => 'keunggulan-kotlin-android-development', 'title' => '5 Keunggulan Kotlin untuk Pengembangan Aplikasi Android', 'category' => 'Android', 'image' => null, 'excerpt' => 'Kotlin telah menjadi bahasa utama untuk pengembangan Android. Apa saja keunggulannya dibandingkan Java? Simak selengkapnya.', 'content' => '<p>Kotlin telah resmi menjadi bahasa pemrograman utama untuk pengembangan aplikasi Android.</p><h2>Mengapa Memilih Kotlin?</h2><h3>1. Null Safety</h3><p>Salah satu fitur terbaik Kotlin adalah null safety.</p><h3>2. Coroutines</h3><p>Kotlin Coroutines memudahkan penanganan operasi asynchronous.</p><h3>3. Interoperabilitas dengan Java</h3><p>Kotlin 100% interoperable dengan Java.</p>', 'author' => 'Tim SoftImagine', 'date' => '2025-05-15', 'read_time' => '4 min read'],
            ['slug' => 'java-se-untuk-aplikasi-enterprise', 'title' => 'Java SE: Pilihan Tepat untuk Aplikasi Enterprise', 'category' => 'Desktop', 'image' => null, 'excerpt' => 'Java SE masih menjadi pilihan utama untuk pengembangan aplikasi desktop enterprise.', 'content' => '<p>Java SE tetap menjadi pilihan utama dalam pengembangan aplikasi desktop enterprise.</p><h2>Keunggulan Java SE</h2><h3>Cross-Platform</h3><p>Aplikasi Java bisa dijalankan di Windows, Linux, dan macOS tanpa perubahan kode.</p><h3>Ekosistem Library</h3><p>Java memiliki ribuan library untuk berbagai kebutuhan.</p>', 'author' => 'Tim SoftImagine', 'date' => '2025-05-10', 'read_time' => '4 min read'],
            ['slug' => 'saas-vs-aplikasi-konvensional', 'title' => 'SaaS vs Aplikasi Konvensional: Mana yang Lebih Tepat?', 'category' => 'SaaS', 'image' => null, 'excerpt' => 'Mau mulai bisnis digital? Pilih antara SaaS atau aplikasi konvensional bisa jadi dilema.', 'content' => '<p>Dalam memilih solusi software untuk bisnis, seringkali muncul pertanyaan: lebih baik menggunakan SaaS atau aplikasi konvensional?</p><h2>Perbandingan SaaS vs Aplikasi Konvensional</h2><p>SaaS menawarkan model berlangganan dengan biaya bulanan/tahunan.</p>', 'author' => 'Tim SoftImagine', 'date' => '2025-05-05', 'read_time' => '6 min read'],
            ['slug' => 'tips-memilih-jasa-pembuatan-aplikasi', 'title' => '7 Tips Memilih Jasa Pembuatan Aplikasi yang Tepat', 'category' => 'Tips', 'image' => null, 'excerpt' => 'Bingung memilih jasa pembuatan aplikasi? Simak 7 tips penting.', 'content' => '<p>Memilih jasa pembuatan aplikasi yang tepat adalah keputusan penting.</p><h2>1. Cek Portofolio</h2><p>Lihat portofolio penyedia jasa.</p><h2>2. Pahami Teknologi yang Digunakan</h2><p>Pastikan penyedia jasa menggunakan teknologi yang tepat.</p>', 'author' => 'Tim SoftImagine', 'date' => '2025-04-28', 'read_time' => '5 min read'],
            ['slug' => 'optimasi-website-laravel-untuk-seo', 'title' => 'Cara Optimasi Website Laravel untuk SEO Terbaik', 'category' => 'Web Development', 'image' => null, 'excerpt' => 'Website cepat dan SEO-friendly adalah kunci sukses di era digital.', 'content' => '<p>Optimasi SEO untuk website Laravel sangat penting untuk meningkatkan visibilitas di mesin pencari.</p><h2>1. Optimasi Kecepatan Website</h2><p>Kecepatan website adalah faktor penting dalam SEO.</p><h2>2. Implementasi Meta Tags</h2><p>Pastikan setiap halaman memiliki meta title, description, dan Open Graph tags.</p>', 'author' => 'Tim SoftImagine', 'date' => '2025-04-20', 'read_time' => '5 min read'],
        ];
        foreach ($blogs as $b) { Blog::create($b); }

        $team = [
            ['name' => 'Ardan Prayogi', 'role' => 'Founder & Lead Developer', 'initials' => 'AP', 'phone' => null, 'skills' => ['Laravel', 'Kotlin', 'Java SE', 'Vue.js'], 'sort_order' => 0],
            ['name' => 'Jatmiko I', 'role' => 'Marketing', 'initials' => 'JI', 'phone' => '6281391347956', 'skills' => ['Digital Marketing', 'Branding', 'Consultation'], 'sort_order' => 1],
            ['name' => 'Nurhidayat', 'role' => 'Analis & Programmer', 'initials' => 'NH', 'phone' => '6281229548403', 'skills' => ['System Analyst', 'Laravel', 'Kotlin', 'Java SE'], 'sort_order' => 2],
            ['name' => 'Rina Wijaya', 'role' => 'UI/UX Designer', 'initials' => 'RW', 'phone' => null, 'skills' => ['Figma', 'Adobe XD', 'Tailwind', 'Bootstrap'], 'sort_order' => 3],
            ['name' => 'Dimas Pratama', 'role' => 'Android Developer', 'initials' => 'DP', 'phone' => null, 'skills' => ['Kotlin', 'Jetpack', 'Firebase', 'Flutter'], 'sort_order' => 4],
            ['name' => 'Sari Indah', 'role' => 'Project Manager', 'initials' => 'SI', 'phone' => null, 'skills' => ['Agile', 'Scrum', 'Jira', 'Notion'], 'sort_order' => 5],
        ];
        foreach ($team as $m) { TeamMember::create($m); }

        $stats = [
            ['value' => '50+', 'label' => 'Project Selesai'],
            ['value' => '35+', 'label' => 'Klien Puas'],
            ['value' => '5+', 'label' => 'Tahun Pengalaman'],
            ['value' => '24/7', 'label' => 'Support'],
        ];
        foreach ($stats as $s) { SiteStat::create($s); }

        SiteSetting::create(['key' => 'email', 'value' => 'softtegal@gmail.com']);
        SiteSetting::create(['key' => 'wa_marketing', 'value' => '6281391347956']);
        SiteSetting::create(['key' => 'wa_programmer', 'value' => '6281229548403']);
    }
}
