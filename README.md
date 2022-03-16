# UJIKOM P1 - Catatan Perjalanan

Aplikasi berbasis web dengan teknologi PHP dan Framework [Laravel](https://laravel.com/)

## Kebutuhan
+ xampp / laragon
+ PHP dengan versi 8.0+
+ [composer](https://getcomposer.org/download/)
+ [node.js](https://nodejs.org/en/download/)
+ Text Editor ([VS Code](https://code.visualstudio.com/download) / Sublime)

## Petunjuk

+ Buka terminal / command prompt
+ Unduh Projek atau Clone dengan perintah

```
git clone https://github.com/ryzntx/UJIKOM-P1-CATATAN
```

+ Setelah selesai mengunduh masuk ke folder UJIKOM-P1-CATATAN

```
cd UJIKOM-P1-CATATAN
```

+ Lalu jalankan perintah di terminal

```
composer upgrade
npm i
npm run dev
cp .env.example .env
php artisan key:generate
```

+ Buatlah database baru
+ dan buka file .env lalu cari DB_DATABASE lalu ubah dengan nama database yang telah anda buat

+ Lalu jalankan perintah

```
php artisan migrate
```

#### Aplikasi siap di jalankan

+ Jalankan perintah di terminal untuk menjalankan aplikasi
```
php artisan serve
```
+ dan buka link yang tertera pada layar terminal
