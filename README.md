<p align="center"><a href="https://laravel.com" target="_blank"><img src="public/images/Logo Kos.png" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# PojokHunian

Sistem informasi manajemen indekos berbasis web, dibangun dengan Laravel dan Filament.

![Laravel](https://img.shields.io/badge/Laravel-13-FF2D20?logo=laravel&logoColor=white)
![Filament](https://img.shields.io/badge/Filament-v5-F59E0B)
![PHP](https://img.shields.io/badge/PHP-8.4-777BB4?logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-8-4479A1?logo=mysql&logoColor=white)

## Tentang Project

PojokHunian membantu pemilik indekos mengelola properti, kamar, penghuni,
sewa, tagihan, dan pembayaran dalam satu sistem.

## Fitur Utama

- Manajemen properti, tipe kamar, dan kamar
- Manajemen penghuni dan kontrak sewa
- Tagihan otomatis dan pengingat via WhatsApp
- Hak akses berbasis peran (Admin dan Pemilik)
- Dashboard statistik pendapatan dan tagihan

## Teknologi

Laravel 13, Filament v5, Spatie Permission, MySQL, Laravel Sail (Docker)

## Instalasi

```bash
git clone https://github.com/username/nama-repo.git
cd nama-repo

docker run --rm -u "$(id -u):$(id -g)" -v "$(pwd):/var/www/html" -w /var/www/html \
    laravelsail/php84-composer:latest composer install --ignore-platform-reqs

cp .env.example .env
./vendor/bin/sail up -d
./vendor/bin/sail artisan key:generate
./vendor/bin/sail artisan migrate --seed
./vendor/bin/sail npm install
./vendor/bin/sail npm run build
```

Buka `http://localhost/admin`.

## Struktur Peran

| Peran | Hak akses |
|---|---|
| Admin | Mengelola seluruh data |
| Pemilik | Melihat data miliknya sendiri |

## Kontribusi

1. `git checkout -b feature/nama-fitur`
2. `git commit -m "feat: deskripsi"`
3. `git push -u origin feature/nama-fitur`
4. Buat Pull Request

## Lisensi

Project ini dikembangkan untuk keperluan skripsi.
Dibangun di atas [Laravel](https://laravel.com), lisensi [MIT](https://opensource.org/licenses/MIT).