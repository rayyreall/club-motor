CREATE DATABASE db_clubmotor;

USE db_clubmotor;


CREATE TABLE users (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(75) NOT NULL UNIQUE,
    email VARCHAR(150) NOT NULL,
    password VARCHAR(255) NOT NULL,
    name VARCHAR(150)
);

CREATE TABLE products_services (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    type ENUM('Product', 'Service') NOT NULL
);

CREATE TABLE photo_gallery (
    id INT AUTO_INCREMENT PRIMARY KEY,
    photo_url VARCHAR(255) NOT NULL,
    description TEXT
);
CREATE TABLE clients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    client_name VARCHAR(255) NOT NULL,
    client_logo_url VARCHAR(255)
);

 

CREATE TABLE articles (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    code VARCHAR(10) NOT NULL UNIQUE,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    publication_date DATE NOT NULL,
    photo_url	VARCHAR(255)
);

INSERT INTO articles VALUES(null, 'tour','Touring Events','Selamat datang di halaman Touring event. Di sini Anda akan menemukan informasi terbaru tentang acara touring yang akan datang, tips dan trik untuk perjalanan yang aman, dan cerita menarik dari para peserta.', '2024-01-01', 'https://mdbcdn.b-cdn.net/img/new/fluid/city/113.webp');
INSERT INTO articles VALUES(null, 'workshop','Workshop Events','Mengadakan workshop dan seminar edukatif untuk meningkatkan pengetahuan dan keterampilan anggota.', '2024-01-05', 'https://glints.com/id/lowongan/wp-content/uploads/2021/03/Marketing-Workshop.jpg');
INSERT INTO articles VALUES(null, 'garage', 'Penjualan Kendaraan dan Aksesoris', 'Selamat datang di halaman Penjualan Kendaraan dan Aksesoris. Di sini Anda akan menemukan informasi terbaru tentang penjualan mobil baru, aksesoris mobil, dan sparepart kendaraan. Dapatkan tips dan trik untuk mendapatkan penawaran terbaik, serta cerita menarik dari para pelanggan.', '2024-01-01', 'https://mdbcdn.b-cdn.net/img/new/fluid/city/113.webp');
INSERT INTO articles VALUES(null, 'events', 'Event Balapan', 'Selamat datang di halaman Event Balapan. Di sini Anda akan menemukan informasi terbaru tentang acara balapan yang akan datang, tips dan trik untuk mempersiapkan kendaraan Anda, dan cerita menarik dari para peserta.', '2024-01-01', 'https://mdbcdn.b-cdn.net/img/new/fluid/city/114.webp');


SELECT * FROM articles;
TRUNCATE TABLE articles;
SELECT * FROM article_detail;

DROP TABLE articles;
DROP TABLE article_detail;
SHOW DATABASES;
USE db_clubmotor;
SHOW TABLES;

CREATE TABLE article_detail (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    article_id	INT NOT NULL,
    name VARCHAR(100),
    description TEXT,
    cover_url VARCHAR(255),
    CONSTRAINT fk_articles_article_detail FOREIGN KEY (article_id) REFERENCES articles(id)  
);
truncate table article_detail;
INSERT INTO article_detail VALUES 
	(null, 1, 'Touring ke bali', 'Touring ke Bali bersama Company Club Motor adalah sebuah perjalanan seru dan penuh petualangan yang dirancang untuk mempererat tali persaudaraan antar anggota klub. Perjalanan ini akan membawa peserta melintasi berbagai rute menantang dan pemandangan menakjubkan, mulai dari jalanan pesisir hingga pegunungan hijau yang eksotis. Selain menikmati keindahan alam Bali, peserta juga akan mengunjungi berbagai destinasi wisata terkenal seperti Tanah Lot, Ubud, dan Pantai Kuta. Acara ini tidak hanya menawarkan kesenangan berkendara, tetapi juga waktu untuk bersantai dan menikmati kebersamaan dengan teman-teman klub melalui kegiatan seperti barbeque malam, game seru, dan sesi sharing pengalaman. Touring ke Bali bersama Company Club Motor adalah momen tak terlupakan yang penuh dengan semangat persaudaraan dan petualangan.', 'https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp'),
    (null, 1, 'Touring ke gunung swiss', 'Touring ke Gunung bersama sama, sebuah perjalanan seru dan menantang', 'https://mdbcdn.b-cdn.net/img/new/standard/city/042.webp'),
    (null, 1, 'Touring ke New York', 'Touring ke New York, sebuah kota yang berada di provinsi kalimantan selatan loh.', 'https://mdbcdn.b-cdn.net/img/new/standard/city/043.webp');
    
    INSERT INTO article_detail VALUES 
    (null, 2, 'Workshop Digital Marketing di Bali', 'Workshop Digital Marketing di Bali adalah kesempatan sempurna untuk memperdalam pengetahuan Anda dalam dunia pemasaran digital. Acara ini dirancang untuk para profesional dan pemilik bisnis yang ingin meningkatkan kehadiran online mereka dan mengoptimalkan strategi pemasaran digital mereka. Peserta akan belajar dari para ahli di bidangnya, mengikuti sesi pelatihan praktis, dan mendapatkan wawasan tentang tren terbaru dalam digital marketing. Selain itu, workshop ini juga menawarkan kesempatan untuk networking dan berbagi pengalaman dengan peserta lain di lingkungan yang inspiratif dan mendukung.', 'https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp'),
    (null, 2, 'Workshop Pengembangan Aplikasi di Swiss', 'Workshop Pengembangan Aplikasi di Swiss adalah acara yang dirancang untuk developer dan pengembang aplikasi yang ingin meningkatkan keterampilan mereka. Peserta akan mempelajari teknik-teknik terbaru dalam pengembangan aplikasi, termasuk penggunaan alat dan teknologi terkini. Dengan bimbingan dari para ahli di industri, peserta akan melalui serangkaian sesi pelatihan dan praktek langsung yang memungkinkan mereka untuk mengaplikasikan pengetahuan yang didapat. Acara ini juga merupakan kesempatan untuk bertemu dengan sesama profesional, berbagi ide, dan membangun jaringan yang berharga.', 'https://mdbcdn.b-cdn.net/img/new/standard/city/042.webp'),
    (null, 2, 'Workshop Desain Grafis di New York', 'Workshop Desain Grafis di New York adalah sebuah acara yang menarik bagi para desainer grafis dari berbagai level. Dalam workshop ini, peserta akan mendapatkan pelatihan intensif dalam berbagai aspek desain grafis, mulai dari dasar-dasar hingga teknik lanjutan. Para ahli di bidang desain akan memberikan panduan langsung dan studi kasus nyata yang membantu peserta mengembangkan keterampilan kreatif mereka. Selain itu, workshop ini juga memberikan ruang untuk kolaborasi dan networking dengan desainer lain, menciptakan lingkungan yang mendukung untuk pertumbuhan profesional.', 'https://mdbcdn.b-cdn.net/img/new/standard/city/043.webp');


INSERT INTO article_detail VALUES 
    (null, 3, 'Penjualan Mobil Baru di Bali', 'Penjualan Mobil Baru di Bali menawarkan berbagai pilihan mobil terbaru dengan harga yang kompetitif. Acara ini dirancang untuk para pembeli yang mencari kendaraan berkualitas tinggi dengan penawaran menarik. Peserta dapat melihat langsung berbagai model mobil, mengikuti sesi test drive, dan mendapatkan informasi lengkap dari para ahli mengenai spesifikasi dan fitur setiap mobil. Selain itu, acara ini juga memberikan kesempatan untuk berinteraksi dengan dealer resmi dan mendapatkan penawaran khusus.', 'https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp'),
    (null, 3, 'Penjualan Aksesoris Mobil di Swiss', 'Penjualan Aksesoris Mobil di Swiss adalah acara yang dirancang untuk para penggemar otomotif yang ingin melengkapi kendaraan mereka dengan aksesoris terbaru. Peserta dapat menemukan berbagai aksesoris mulai dari peralatan audio, sistem navigasi, hingga aksesori eksterior dan interior. Dengan bimbingan dari para ahli, peserta akan mendapatkan wawasan tentang produk-produk terbaik dan bagaimana mengaplikasikannya pada kendaraan mereka. Acara ini juga merupakan kesempatan untuk mendapatkan diskon dan penawaran spesial dari berbagai vendor.', 'https://mdbcdn.b-cdn.net/img/new/standard/city/042.webp'),
    (null, 3, 'Penjualan Sparepart Mobil di New York', 'Penjualan Sparepart Mobil di New York adalah sebuah acara yang menawarkan berbagai komponen dan sparepart untuk kendaraan Anda. Dalam acara ini, peserta dapat menemukan suku cadang berkualitas dari berbagai merek ternama. Para ahli akan memberikan penjelasan mengenai penggunaan dan pemasangan setiap sparepart, serta tips untuk memilih komponen yang tepat. Selain itu, acara ini juga menyediakan kesempatan untuk berinteraksi dengan penyedia sparepart dan mendapatkan penawaran terbaik.', 'https://mdbcdn.b-cdn.net/img/new/standard/city/043.webp');
    
    INSERT INTO article_detail VALUES 
    (null, 4, 'Balapan Mobil di Bali', 'Event Balapan Mobil di Bali adalah kesempatan sempurna untuk para pecinta otomotif menunjukkan keahlian mengemudi mereka. Acara ini dirancang untuk para pembalap amatir dan profesional yang ingin merasakan adrenalin di lintasan balap. Peserta akan berlomba di berbagai kategori, mulai dari drag race hingga time attack, dengan hadiah menarik menanti pemenangnya. Selain balapan, acara ini juga menawarkan pameran mobil, sesi meet and greet dengan pembalap profesional, dan berbagai kegiatan menarik lainnya.', 'https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp'),
    (null, 4, 'Balapan Motor di Swiss', 'Event Balapan Motor di Swiss adalah acara yang dirancang untuk para penggemar motor yang ingin menguji kemampuan mereka di lintasan balap. Peserta akan berlomba dalam berbagai kelas, termasuk motor sport dan motor klasik. Dengan panduan dari para ahli, peserta akan mendapatkan pengalaman balap yang tak terlupakan. Acara ini juga mencakup pameran motor, sesi pelatihan, dan kesempatan untuk bertemu dengan rider profesional.', 'https://mdbcdn.b-cdn.net/img/new/standard/city/042.webp'),
    (null, 4, 'Balapan Go-Kart di New York', 'Event Balapan Go-Kart di New York adalah acara yang menyenangkan untuk semua kalangan, mulai dari anak-anak hingga dewasa. Dalam acara ini, peserta akan berlomba di lintasan go-kart profesional dengan berbagai tantangan dan rintangan. Selain balapan, acara ini juga menawarkan sesi pelatihan, pameran go-kart, dan berbagai kegiatan keluarga. Ini adalah kesempatan sempurna untuk menikmati waktu bersama keluarga dan teman-teman sambil merasakan sensasi balap.', 'https://mdbcdn.b-cdn.net/img/new/standard/city/043.webp');

select * from article_detail;
SHOW TABLES;
DROP TABLE article_detail;

CREATE TABLE events (
    id INT AUTO_INCREMENT PRIMARY KEY,
    event_name VARCHAR(255) NOT NULL,
    event_date DATE NOT NULL,
    description TEXT
);

INSERT INTO users VALUES (null, 'admin', 'admin@gmail.com', 'admin', 'Ini Admin');