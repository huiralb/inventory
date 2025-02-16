<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Inventory

Catat barang-barang / aset semua yang ada di rumah anda. Baju, perkakas, buku, apapun itu.

### Fitur
- [x] Input gambar atau foto langsung dari kamera

## Install

- Jalankan perintah satu persatu
```
git clone https://github.com/inventory
composer install
cp .env.example .env

```
- Edit `.env` sesuaikan config
```
php artisan key:generate
php artisan storage:link
chmod -R 775 storage
php artisan migrate
```
- Buat akun
```
php artisan make:filament-user
```
- buka browse `http://inventory.test/admin`

Enjoy !
