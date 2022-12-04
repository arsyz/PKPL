<?php 
echo "<head><title>My Guest Book</title></head>"; 
$fp = fopen("guestbook.txt","r"); 
echo "<table border='0'>"; 

while ($isi = fgets($fp)) { 
$pisah = explode("|",$isi); 
	echo "<tr><td>Nama </td><td>: $pisah[0]</td></tr>"; 
	echo "<tr><td>Email </td><td>: $pisah[1]</td></tr>"; 
	echo "<tr><td>Alamat </td><td>: $pisah[2]</td></tr>"; 
	echo "<tr><td>Komentar </td><td>: $pisah[3]</td></tr>";
	echo "<tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>"; 
} 

echo "</table>"; 
echo "<a href=bukutamu.html> Klik Disini </a>Isi Form Buku Tamu"; 
 ?>