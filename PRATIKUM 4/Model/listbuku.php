<<<<<<< HEAD
<?php

require_once "buku.php";

class listbuku{

    public function getdata(){
        $list_buku = array(
            new buku('Belajar PHP Dasar', 'Reza', 'informatika', '2024'),
            new buku('Matematika Diskrit', 'Luffy', 'andi publisher', '2023'),
            new buku('Kalkulus 2', 'Adi', 'erlangga', '2022'),
            new buku('Metode Penelitian', 'Eka', 'informatika sains', '2021'),
        );

        return $list_buku;
    }
=======
<?php

require_once "buku.php";

class listbuku{

    public function getdata(){
        $list_buku = array(
            new buku('Belajar PHP Dasar', 'Reza', 'informatika', '2024'),
            new buku('Matematika Diskrit', 'Luffy', 'andi publisher', '2023'),
            new buku('Kalkulus 2', 'Adi', 'erlangga', '2022'),
            new buku('Metode Penelitian', 'Eka', 'informatika sains', '2021'),
        );

        return $list_buku;
    }
>>>>>>> 09866dd7e2419bcb2ed28c6cee9c201d053da652
}