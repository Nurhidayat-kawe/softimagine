<div align="center">
  <br>
  <img src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel">
  <img src="https://img.shields.io/badge/Bootstrap-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white" alt="Bootstrap">
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP">
  <img src="https://img.shields.io/badge/Vite-646CFF?style=for-the-badge&logo=vite&logoColor=white" alt="Vite">
  <img src="https://img.shields.io/badge/SQLite-003B57?style=for-the-badge&logo=sqlite&logoColor=white" alt="SQLite">
  <br><br>
</div>

<p align="center">
  <img src="https://img.shields.io/github/license/ardanprayogi/softimagine" alt="License">
  <img src="https://img.shields.io/github/stars/ardanprayogi/softimagine" alt="Stars">
  <img src="https://img.shields.io/github/forks/ardanprayogi/softimagine" alt="Forks">
  <br><br>
  Website company profile untuk <strong>SoftImagine</strong> — software house yang mengembangkan aplikasi <strong>Web (Laravel)</strong>, <strong>Android (Kotlin)</strong>, dan <strong>Desktop (Java SE)</strong>, serta menyediakan layanan <strong>SaaS Rental</strong>. Dilengkapi dengan <strong>CMS Admin Panel</strong> untuk manajemen konten secara penuh.
</p>

---

## Daftar Isi

- [Screenshot](#screenshot)
- [Fitur](#fitur)
  - [Fitur Frontend (Public)](#frontend)
  - [Fitur Admin Panel (CMS)](#admin-panel)
- [Tech Stack](#tech-stack)
- [Struktur Database](#struktur-database)
- [Halaman & Route](#halaman--route)
- [Cara Install & Menjalankan](#cara-install--menjalankan)
- [Default Login](#default-login-admin)
- [Deployment](#deployment)
- [Lisensi](#lisensi)

---

## Screenshot

### Halaman Depan

| Desktop | Mobile |
|---|---|
| ![Home Desktop](screenshots/home.png) | ![Home Mobile](screenshots/home-mobile.png) |

### Halaman Layanan
![Halaman Layanan](screenshots/services.png)

### Halaman Portfolio
![Halaman Portfolio](screenshots/portfolio.png)

### Halaman Blog
![Halaman Blog](screenshots/blog.png)

### Halaman Tentang
![Halaman Tentang](screenshots/about.png)

### Halaman Kontak
![Halaman Kontak](screenshots/contact.png)

### Halaman Login
![Halaman Login](screenshots/login.png)

### Admin Panel

| Dashboard | Services |
|---|---|
| ![Admin Dashboard](screenshots/admin-dashboard.png) | ![Admin Services](screenshots/admin-services.png) |

| Portfolios | Blogs |
|---|---|
| ![Admin Portfolios](screenshots/admin-portfolios.png) | ![Admin Blogs](screenshots/admin-blogs.png) |

| Testimonials | Team Members |
|---|---|
| ![Admin Testimonials](screenshots/admin-testimonials.png) | ![Admin Team](screenshots/admin-team.png) |

| Settings |
|---|
| ![Admin Settings](screenshots/admin-settings.png) |

---

## Fitur

### Frontend

| Fitur | Deskripsi |
|---|---|
| **Beranda** | Hero section, service cards, portfolio grid, testimonials carousel, blog terbaru, CTA WhatsApp |
| **Tentang** | Cerita perusahaan, timeline perjalanan (2020-2025), tim member, info badan hukum (CV Solusi Prima Abadi) |
| **Layanan** | Detail 4 layanan dengan fitur, pricing table (3 tier: Basic Rp3JT, Professional Rp7JT, Enterprise Rp15JT+) |
| **Portfolio** | Grid portfolio yang bisa difilter (Web, Desktop, Android, SaaS), modal detail (client, tahun, tech stack, gambar) |
| **Blog** | Daftar artikel, halaman detail blog dengan sidebar related posts |
| **Kontak** | Form kontak (nama, email, telepon, subjek, pesan), info kontak (WhatsApp, Telegram, Email), Google Maps |
| **Dark/Light Mode** | Toggle tema dengan persistensi localStorage |
| **WhatsApp Widget** | Tombol WhatsApp melayang dengan animasi pulse |
| **Responsive** | Fully responsive untuk desktop, tablet, dan mobile |

### Admin Panel

| Fitur | Deskripsi |
|---|---|
| **Dashboard** | Overview statistik semua konten (services, portfolios, testimonials, blogs, team, stats) |
| **Services CRUD** | Kelola layanan (icon, title, deskripsi, fitur JSON, urutan) |
| **Portfolios CRUD** | Kelola portfolio (judul, kategori, client, tahun, tech stack JSON, multi gambar) |
| **Testimonials CRUD** | Kelola testimonial (nama, role, perusahaan, rating 1-5, quote) |
| **Blog CRUD** | Kelola artikel (auto-slug, kategori, gambar, konten, penulis, read time) |
| **Team CRUD** | Kelola tim (nama, role, inisial, telepon, skills JSON, urutan) |
| **Site Stats** | Atur statistik (jumlah proyek, client, tahun, support) |
| **Settings** | Atur email, nomor WhatsApp marketing & programmer |
| **Auth** | Register, Login, Logout, Reset Password, Email Verification |

---

## Tech Stack

### Backend

| Teknologi | Versi |
|---|---|
| **PHP** | ^8.2 |
| **Laravel Framework** | ^12.0 |
| **Database** | SQLite (default), support MySQL/PostgreSQL |
| **Cache** | File (default), support Redis |
| **Mail** | Log (dev), support SMTP |

### Frontend

| Teknologi | Versi |
|---|---|
| **Bootstrap** | ^5.3.3 |
| **Vite** | ^7.0.7 |
| **AdminLTE** | ^4.0.0-beta3 |
| **Swiper** | ^11.2.4 |
| **AOS (Animate On Scroll)** | ^2.3.4 |
| **Bootstrap Icons** | ^1.11.3 |
| **OverlayScrollbars** | ^2.0.0 |
| **Axios** | ^1.11.0 |
| **Google Fonts (Inter)** | Weights 300-800 |

---

## Struktur Database

### Tabel Aplikasi

| Tabel | Kolom | Keterangan |
|---|---|---|
| `services` | id, icon, title, short_desc, description, features (JSON), sort_order | 4 layanan |
| `portfolios` | id, title, category, description, icon, client, year, tech (JSON), images (JSON) | 9 portfolio |
| `testimonials` | id, name, role, company, initials, rating (1-5), quote | 5 testimonial |
| `blogs` | id, slug, title, category, image, excerpt, content, author, date, read_time | 6 artikel |
| `team_members` | id, name, role, initials, phone, skills (JSON), sort_order | 6 anggota tim |
| `site_stats` | id, label, value | 4 statistik |
| `site_settings` | id, key, value | 3 pengaturan |

### Tabel Default Laravel

- `users` (dengan tambahan kolom `is_admin` boolean)
- `password_reset_tokens`
- `sessions`
- `cache`
- `jobs`

---

## Halaman & Route

### Public Routes

| Method | URI | Nama Route | Controller |
|---|---|---|---|
| GET | `/` | `home` | `PageController@home` |
| GET | `/about` | `about` | `PageController@about` |
| GET | `/services` | `services` | `PageController@services` |
| GET | `/portfolio` | `portfolio` | `PageController@portfolio` |
| GET | `/blog` | `blog` | `PageController@blog` |
| GET | `/blog/{slug}` | `blog.show` | `PageController@blogShow` |
| GET | `/contact` | `contact` | `PageController@contact` |
| POST | `/contact` | `contact.send` | `ContactController@send` |

### Admin Routes (`/admin/*`)

| Method | URI | Nama Route |
|---|---|---|
| GET | `/admin` | `admin.dashboard` |
| GET | `/admin/services` | `admin.services.index` |
| GET/POST | `/admin/services/create` | `admin.services.create/store` |
| GET/PUT | `/admin/services/{id}/edit` | `admin.services.edit/update` |
| DELETE | `/admin/services/{id}` | `admin.services.destroy` |
| GET | `/admin/portfolios` | `admin.portfolios.index` |
| GET/POST | `/admin/portfolios/create` | `admin.portfolios.create/store` |
| GET/PUT | `/admin/portfolios/{id}/edit` | `admin.portfolios.edit/update` |
| DELETE | `/admin/portfolios/{id}` | `admin.portfolios.destroy` |
| GET | `/admin/testimonials` | `admin.testimonials.index` |
| GET/POST | `/admin/testimonials/create` | `admin.testimonials.create/store` |
| GET/PUT | `/admin/testimonials/{id}/edit` | `admin.testimonials.edit/update` |
| DELETE | `/admin/testimonials/{id}` | `admin.testimonials.destroy` |
| GET | `/admin/blogs` | `admin.blogs.index` |
| GET/POST | `/admin/blogs/create` | `admin.blogs.create/store` |
| GET/PUT | `/admin/blogs/{id}/edit` | `admin.blogs.edit/update` |
| DELETE | `/admin/blogs/{id}` | `admin.blogs.destroy` |
| GET | `/admin/team` | `admin.team.index` |
| GET/POST | `/admin/team/create` | `admin.team.create/store` |
| GET/PUT | `/admin/team/{id}/edit` | `admin.team.edit/update` |
| DELETE | `/admin/team/{id}` | `admin.team.destroy` |
| GET | `/admin/stats` | `admin.stats.index` |
| POST | `/admin/stats` | `admin.stats.update` |
| GET | `/admin/settings` | `admin.settings.index` |
| POST | `/admin/settings` | `admin.settings.update` |

---

## Cara Install & Menjalankan

### Prasyarat

- PHP ^8.2
- Composer
- Node.js & npm
- SQLite (default) / MySQL / PostgreSQL

### Langkah Instalasi

```bash
# 1. Clone repository
git clone https://github.com/ardanprayogi/softimagine.git
cd softimagine

# 2. Install dependensi PHP
composer install

# 3. Copy file environment
copy .env.example .env

# 4. Generate application key
php artisan key:generate

# 5. Jalankan migrasi database (otomatis buat SQLite)
php artisan migrate

# 6. Seed database dengan data demo
php artisan db:seed

# 7. Install dependensi frontend
npm install

# 8. Build asset frontend
npm run build

# 9. Buat symlink storage
php artisan storage:link

# 10. Jalankan development server
php artisan serve
```

Atau gunakan script otomatis:

```bash
composer setup
```

### Development Mode (Hot Reload)

```bash
composer dev
```

Perintah ini menjalankan secara bersamaan:
- `php artisan serve` (server)
- `php artisan queue:listen` (queue worker)
- `php artisan pail` (log viewer)
- `npm run dev` (Vite HMR)

---

## Default Login (Admin)

| Role | Email | Password |
|---|---|---|
| **Admin** | `admin@softimagine.com` | `password` |
| **User** | Register sendiri | - |

Akses admin panel: `http://localhost:8000/admin`

---

## Deployment

### Railway.app

Project sudah dikonfigurasi untuk deployment ke Railway.app (lihat `railway.json`):

```bash
# Build & deploy
railway up
```

### Environment Variables

| Variable | Default | Keterangan |
|---|---|---|
| `APP_NAME` | SoftImagine | Nama aplikasi |
| `APP_ENV` | production | Ubah ke `local` untuk development |
| `APP_DEBUG` | false | Ubah ke `true` untuk development |
| `APP_URL` | - | Base URL aplikasi |
| `DB_CONNECTION` | sqlite | Bisa diubah ke `mysql`/`pgsql` |
| `MAIL_MAILER` | log | Ubah ke `smtp` untuk email real |
| `MAIL_FROM_ADDRESS` | hello@softimagine.com | Alamat email pengirim |

---

## Lisensi

Hak cipta &copy; 2025 **CV Solusi Prima Abadi**. All rights reserved.

---

<p align="center">
  <sub>Dibangun dengan ❤️ menggunakan Laravel & Bootstrap oleh </sub>
  <a href="https://github.com/ardanprayogi">Ardan Prayogi</a>
</p>
