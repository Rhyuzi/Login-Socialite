Instalasi
Untuk mengatasi banyak error dalam share project, folder \vendor kedepannya akan dihapus dari GitHub Repo. Setelah melakukan cloning project run command composer install dan apabila ada error yang terjadi di dalam folder \vendor maka hapus folder vendor dari directory local anda, lalu run command yang sama yang sudah disebutkan.
Database
Buat Database baru di Mysql local dengan nama database viverb dan biarkan kosong sementara
run command php artisan migrate
run command php artisan db:seed
Jika ada update baru dalam database, sebaiknya setelah pull run command php artisan migrate:rollback, lalu ulangi step 2 sampai 3 kembali
Apabila nomor 4 gagal, drop database secara manual lewat laman localhost/phpmyadmin ataupun lewat mysql command drop database viverb
