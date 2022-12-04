<?php 
 echo "<head><title>My Guest Book</head></title>"; 
 $fp = fopen("guestbook.txt","a+");
 $nama = $_POST['nama'];
 $email = $_POST['email'];
 $alamat = $_POST['alamat'];
 $pesan = $_POST['pesan']; 
 fputs($fp,"$nama|$email|$alamat|$pesan\n"); 
 fclose($fp); 

 echo "Terima Kasih Atas Partisipasi Anda Mengisi Buku Tamu<br>"; 
 echo "<a href=bukutamu.html> Isi Buku Tamu </a><br>"; 
 echo "<a href=lihat.php> Lihat Buku Tamu </a><br>";
 ?>