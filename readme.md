## Referensi Web Framework

Web ini dibuat sebagai referensi untuk mengerjakan tugas akhir mata kuliah Web Framework. Dilarang melakukan copy paste terhadap web ini untuk tugas akhir yang dibuat. Gunakan web ini sebagai patokan dasar untuk mengembangkan tugas akhir kalian.

Untuk menginstall web ini di laptop kalian, lakukan langkah-langkah berikut:

1. Instalasi GIT terlebih dahulu (https://git-scm.com/)
2. Jalankan service Apache dan MariaDB melalui XAMPP
3. Buka Command Prompt (CMD) atau Powershell di dalam folder xampp/htdocs
4. Ketikkan perintah berikut: git clone https://github.com/alkzzz/web-framework.git
5. Buatlah database kosong pada MariaDB dengan nama db "blog" atau nama apapun yang kalian inginkan
6. Setelah selesai download, pindah ke folder xampp/htdocs/blog
7. Ketikkan perintah berikut: composer install
8. Buat file baru .env dengan mengcopy isi file .env.example
9. Ubah nilai dari DB_DATABASE=homestead menjadi DB_DATABASE=blog (atau nama apapun yang sebelumnya sudah kalian buat pada langkah 5)
10. Ubah nilai dari DB_USERNAME=homestead menjadi DB_USERNAME=root
11. Ubah nilai dari DB_PASSWORD=secret menjadi DB_PASSWORD=
12. Ketikkan perintah berikut: php artisan key:generate
13. Ketikan perintah berikut: php artisan migrate
14. Ketikkan perintah berikut: php artisan db:seed
