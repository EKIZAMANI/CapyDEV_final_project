## Anggota Kelompok

1. Furqan Ramadhan `(2108107010013)`
2. M. Zaki Zamani `(2108107010014)`
3. Abdul Helmi `(2108107010028)`
4. Fanul Nastia `(2108107010029)`
5. Arrijalul Khairi `(2108107010037)`
6. Elsa Mardhatillah Hariska `(2108107010048)`
7. Iwansur Sidik `(2108107010091)`

# SpeedTypingTest-CapyType

<div style="text-align: center;">
  <img src="CapyType/public/assets/img/logocapy.png" alt="Logo" style="display: block; margin-left: auto; margin-right: auto; width: 200px; height: 200px;">
</div>

Speed typing merupakan sebuah aplikasi berbasis website yang bertujuan untuk menguji coba kecepatan mengetik yang dihitung dalam wpm (words per minute), cpm (character per minute), dan accuracy yang dihitung dalam persentase. User dapat melakukan registrasi terlebih dahulu, kemudian login. Selanjutnya user bisa mencoba mengetik yang disediakan dalam feature batasan waktu, ataupun tanpa batasan waktu. User dapat bermain dengan teman-teman untuk menghasilkan leaderboard siapa saja yang menduduki peringkat teratas. Untuk persiapan menjalankan code, dapat dilihat pada langkah dibawah ini.

# Presentation
```https://www.canva.com/design/DAFjPUVuZNQ/eqG8a4Y9Yvbse-ccMg29Lw/edit?utm_content=DAFjPUVuZNQ&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton```

## Persiapan Menjalankan Program

Masuk ke dalam folder CapyType

```bash
cd CapyType
```

Install semua depedency yang dibutuhkan untuk menjalankan program

```bash
composer install; npm install;
```

membuat environment dan edit .env didalamnya

```bash
cp .env.example .env
```

ganti nama database didalam .env menjadi capytype serta masukkan pasword sesuai device masing-masing.

```bash
DB_DATABASE=CapyDB
DB_PASSWORD=your_password
```

buatlah database baru bernama capytype didalam http://localhost/phpmyadmin/ atau mysql

```bash
create database CapyDB;
```

migrate database masing-masing device didalam laravel

```bash
php artisan migrate:refresh
```

Menggenerate key

```bash
php artisan key:generate
```

## Menjalankan Web CapyType

Jalankan server laravel

```bash
php artisan serve
```

Jalankan perintah berikut untuk menjalankan server vite

```bash
npm run dev
```

## Warning! Gunakan Conventional Commit setiap melakukan perubahan!

Buka pada browser http://localhost:8000 untuk membuka website.
