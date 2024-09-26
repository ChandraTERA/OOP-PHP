<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Property Dan Method</title>
</head>
<body>

    <?php

        Class Produk  {

            public  $judul = "judul" ,
                    $penerbit = 'penerbit' ,
                    $penulis = 'penulis' ,
                    $harga = 0;

                   

                    public function tampilkandata() {
                        return "Helllo World";
                    }

                    public function getLocalScope() {
                        // Ini termasuk variabel local scope di mana juga dari index variabel global scope atau di luar local scope bisa di ambil atau di akses ke local scope

                    }

                     public function getprodukbaru() {
                        return  "Judul : " . $this->judul . 
                                ", penerbit : " . $this->penerbit . 
                                ", penulis : " . $this->penulis .
                                ", harga :  " . $this->harga ;
                    }
        }

        $produk1 = new Produk();
        $produk1->judul = 'Naruto';
        $produk1->penerbit = 'Masashi Kisimoto';
        $produk1->penulis = 'Shohen Jump';
        $produk1->harga = 0;
        // var_dump($produk1);
        // echo  "<br>";
        echo "Komik : $produk1->judul, $produk1->penerbit, $produk1->penulis, harga  $produk1->harga"; 
        // echo "<br>";
        echo "<hr>";
        

        // echo $produk1->tampilkandata();
        echo "<br>";
        $produk2 = new Produk();
        $produk2->judul = 'Tesla';
        $produk2->penerbit = 'tolose';
        $produk2->penulis = 'Megadeath';
        $produk2->harga = 0;
        // echo "<br>";
        // var_dump($produk2);

       echo "Nama baru : " . $produk2->getprodukbaru();
    //    echo tampilkandata();
    ?>
    
</body>
</html>