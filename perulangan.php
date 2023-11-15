// perulangan do while
<?php

$ulangi = 10 ;
do {

    echo "ini adalah perulangan ke-$ulangi"; 
    $ulangi--;
} 
    while ($ulangi > 0);

?>

// perulangan Foreach

<?php

$books = [
    "Panduan Belajar PHP untuk Pemula", 
    "Membangun Aplikasi Web dengan PHP", 
    "Membuat Chat Bot dengan PHP",
    "Tutorial PHP dan MySQL",
];

echo "Judul Buku PHP; ";
echo "<ul>";
foreach ($books as $buku) {
    echo "<li>$buku</li>";
} 
  echo "</ul>";
?>