<h1 align="center">Eventman - Project Akhir PSBO</h1>

[Sekilas Tentang](#sekilas-tentang) | [Use Case Diagram](#use-case-diagram) | [Activity Diagram](#activity-diagram) |  [Sequence Diagram](#sequence-diagram) | [Instalasi](#Instalasi)
:---:|:---:|:---:|:---:|:---:|:---:

# Sekilas Tentang
[`^ kembali ke atas ^`](#)

<img src="app/src/main/res/drawable/eventman.jpg">

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
How To Use

migrate database
Migrate Database php artisan migrate

migrate seed category
Migrate SeedCategory php artisan db:seed --class=CategorySeeder

buat Link storage
php artisan storage:link
