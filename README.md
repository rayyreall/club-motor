# Website Club Motor

## Ringkasan
Proyek ini adalah sebuah website untuk klub motor yang menampilkan artikel, acara, dan informasi kontak. Website ini dibangun menggunakan PHP, JavaScript, dan SQL, dengan Bootstrap untuk styling.

## Fitur
- **Halaman Utama**: Menampilkan konten utama dan artikel unggulan.
- **Halaman Artikel**: Menampilkan daftar artikel terkait acara motor.
- **Autentikasi**: Memungkinkan pengguna untuk mendaftar, login, dan logout.
- **Halaman Kontak**: Menyediakan informasi kontak dan formulir untuk mengirim pesan.

## Instalasi

### Prasyarat
- PHP 7.4 atau lebih tinggi
- Composer
- MySQL

### Langkah-langkah

1. **Clone repository**:
    ```sh
    git clone https://github.com/rizkifirdaus29/club-motor.git
    cd club-motor
    ```

2. **Install dependensi PHP**:
    ```sh
    composer install
    ```


4. **Siapkan database**:
    - Buat database MySQL:
        ```sql
        CREATE DATABASE db_clubmotor;
        ```
    - Import skema database:
        ```sh
        mysql -u your_username -p db_clubmotor < db_clubmotor.sql
        ```

5. **Konfigurasi variabel lingkungan**:
    - Buka file `app/App/Database` di direktori root dan tambahkan kredensial database Anda:
        ```env
        DB_HOST=localhost
        DB_NAME=db_clubmotor
        DB_USER=your_username
        DB_PASS=your_password
        ```

6. **Jalankan aplikasi**:
    - Mulai server built-in PHP:
        ```sh
        php -S localhost:8000 -t public
        ```

7. **Akses website**:
    - Buka browser Anda dan navigasikan ke `http://localhost:8000`

## Penggunaan
- **Halaman Utama**: Lihat konten utama dan artikel unggulan.
- **Halaman Artikel**: Jelajahi berbagai artikel acara motor.
- **Autentikasi**: Daftar akun baru, login, dan logout.
- **Halaman Kontak**: Lihat informasi kontak dan kirim pesan melalui formulir kontak.

## Kontribusi
Silakan fork repository ini dan kirim pull request. Untuk perubahan besar, harap buka issue terlebih dahulu untuk mendiskusikan apa yang ingin Anda ubah.

## Lisensi
Proyek ini dilisensikan di bawah Lisensi MIT.