<h1 align="center">Eventman - Project Akhir PSBO</h1>

[Sekilas Tentang](#sekilas-tentang) | [Use Case Diagram](#use-case-diagram) | [Activity Diagram](#activity-diagram) |  [Sequence Diagram](#sequence-diagram) | [Instalasi](#Instalasi)

# Sekilas Tentang
[`^ kembali ke atas ^`](#)

<img src="https://github.com/normanfd/Tolongstran/blob/master/dokumentasi%20RPL-%20Tolongstran/logo.png">

**Tolongstran** Tolongstran merupakan aplikasi peminjaman dan penyewaan barang berbasis website. Aplikasi ini memiliki 2 fitur yaitu fitur untuk meminjam dan menyewa barang. Setiap pengguna dapat menggunakan akun yang sama untuk meminjam dan menyewakan barang. Adapun batasan pada aplikasi proses pembayaran tidak dapat dilakukan dalam aplikasi, pembayaran dilakukan secara offline antara penyewa dan peminjam. Hal ini dilkaukan karena skala pengguna aplikasi hanya berbatas pada pada pengguna sekitaran IPB, sehingga penyewa dan peminjam dapat bertemu langsung dengan saling bertukar kontak dalam aplikasi.

# Use Case Diagram
[`^ kembali ke atas ^`](#)

Use case diagram

<img src="https://github.com/normanfd/Tolongstran/blob/master/dokumentasi%20RPL-%20Tolongstran/Use%20Case.png">

# Activity Diagram
[`^ kembali ke atas ^`](#)

Activity diagram

<img src="https://github.com/normanfd/Tolongstran/blob/master/dokumentasi%20RPL-%20Tolongstran/Activity%20Diagram.png">

# Sequence Diagram
[`^ kembali ke atas ^`](#)

Sequence Diagram

# Instalasi

##Install dependency
composer install

## ubah .env file dengan pengaturan database yang dimiliki
cp .env.example .env

DB_DATABASE=tolongstran
DB_USERNAME=root
DB_PASSWORD=

## tambahkan app key
php artisan key:generate

## Migrasikan tabel database

php artisan migrate

## lakukan seeder tabel kategori
php artisan db:seed

## buat Link storage
php artisan storage:link
