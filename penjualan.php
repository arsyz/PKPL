<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>BERKAH KOMPUTER</title>
	<style type="text/css">
		*{
			font-family: Comic Sans MS, Comic Sans, cursive;
		}
		body{
			background-image: url(wmg.jpg);
			background-size: cover;
			background-position: center;
			background-repeat: no-repeat;
			background-attachment: fixed;
		}
		.table1{
			margin: 100px auto;
			background-color: rgb(0, 0, 0, 0.2);
			color: white;
			border-radius: 10px;
			border-color: white;
			border-style: hidden;
		}
		.table2{
			padding-top: -50px;
			color: white;
		}
		input{
			background-color: transparent;
			font-weight: 800;
			color: white;
		}
		.button{
			background-color: rgb(0, 0, 0, 0.4);
		}
		.button:hover{
			background-color: transparent;
			cursor: pointer;
		}
		.counter{
			position: absolute;
			top: 82%;
			right: 28%;
			color: white;
		}
		.home{
            position: absolute;
            top: 93%;
            left: 1%;
        }
        .halsebelumnya{
            position: absolute;
            top: 93%;
            left: 5%;    
        }   
	</style>
</head>
<body>
	<script type="text/javascript">
		alert('Selamat Datang di Toko Berkah Komputer :)')
		function hitung(){
		    var catat = document.formberk;
		    var hargasatu = parseInt(catat.satu.value) * parseInt(catat.satua.value);
		    var hargadua = parseInt(catat.dua.value) * parseInt(catat.duaa.value);
		    var hargatiga = parseInt(catat.tiga.value) * parseInt(catat.tigaa.value);
		    var hargaempat = parseInt(catat.empat.value) * parseInt(catat.empata.value);
		    var hargalima= parseInt(catat.lima.value) * parseInt(catat.limaa.value);
		    var hargasemua = hargasatu + hargadua + hargatiga + hargaempat + hargalima;
		    if (document.formberk.imember.checked == true)
		    {
		        catat.Total.value = hargasemua;
		        catat.Diskon.value = hargasemua*0.05;
		        catat.JumlahBayar.value = hargasemua - parseInt(catat.Diskon.value);
		     }
		     else
		     {
		        catat.Total.value = hargasemua;
		        catat.Diskon.value = 0;
		        catat.JumlahBayar.value = hargasemua;
		    }   
		}
		function awal(){
		document.formberk.reset();
		}
	</script>


	<form name="formberk" action="#">
	<table class="table1" border="2" align="center">
		<tr>
			<td colspan="4" height="70" align="center" style="font-size: 28px;"><b>BERKAH KOMPUTER</b></td>
		</tr>
		<tr>   
			<th style="width:27px" scope="col">No</th>
			<th style="width:240px" scope="col">Nama Barang</th>
			<th style="width:152px" scope="col">Harga</th>
			<th style="width:130px" scope="col">Jumlah</th>
		</tr>
		<tr>
			<td style="text-align:center">1.</td>
			<td>Kingston SSD 480GB</td>
			<td>Rp.
			<input type="text" name="satu" value="450000" size="10" disabled="disabled" />
			</td>
			<td><input name="satua" type="text" value="" size="14" style="text-align: center"/></td>
		</tr>
		<tr>
			<td style="text-align:center">2.</td>
			<td>Samsung Portable SSD 500GB</td>
			<td>Rp.
			<input type="text" name="dua" value="500000" size="10" disabled="disabled"/>
			</td>
			<td><input name="duaa" type="text" value="" size="14" style="text-align: center"/></td>
		</tr>
		<tr>
			<td style="text-align:center">3.</td>
			<td>Samsung T5 Portable 500GB</td>
			<td>Rp.
			<input type="text" name="tiga" value="750000" size="10" disabled="disabled"/>
			</td>
			<td><input name="tigaa" type="text" value="" size="14" style="text-align: center"/></td>
		</tr>
		<tr>
			<td style="text-align:center">4.</td>
			<td>Asrock TRX40 Taichi</td>
			<td>Rp.
			<input type="text" name="empat" value="2500000" size="10" disabled="disabled"/>
			</strong></td>
			<td><input name="empata" type="text" value="" size="14" style="text-align: center"/></td>
		</tr>
		<tr>
			<td style="text-align:center">5.</td>
			<td>Edifer Headphone</td>
			<td>Rp.
			<input type="text" name="lima" value="75000" size="10" disabled="disabled"/>
			</strong></td>
			<td><input name="limaa" type="text" value="" size="14" style="text-align: center"/></td>
		</tr>
		<tr>
			<td colspan="4" align="center">Apakah Anda Memiliki Member Toko Kami?
				<input type="checkbox" name="imember"> ya
				<input type="checkbox" name="omember"> tidak
			</td>
		</tr>
		<tr>
			<td colspan="3">Total</td>
			<td><input name="Total" type="text" disabled="disabled" value="" size="14" style="text-align: center"/></td>
		</tr>
		<tr>
			<td colspan="3">Diskon Member</td>
			<td><input name="Diskon" type="text" disabled="disabled" value="" size="14" style="text-align: center"/></td>
		</tr>
		<tr>
			<td colspan="3">Jumlah Bayar</td>
			<td><input name="JumlahBayar" type="text" disabled="disabled" value="" size="14" style="text-align: center"/></td>
		</tr>
		<tr>
			<td colspan="4">
				<center>
					<input type="button" class="button" value="Hitung" onclick="hitung()"/>
					<input type="button" class="button" value="Reset" onclick="awal()"/>
				</center>
			</td>
		</tr>
	</table>
	</form>
	<div class="counter">
		<?php
			$filename = 'counter2.txt';
			function counter(){
				global $filename;

				if(file_exists($filename)){
					$value = file_get_contents($filename);
				} else {
					$value = 0;
				}
				file_put_contents($filename, ++$value);
			}
			counter();
			echo 'Total Pengunjung = ' .file_get_contents($filename);
		 ?>		
	</div>
	    <div class="home">
           	<a href="first.html"><img src="home.png"></a>
        </div>
        <div class="halsebelumnya">
            <a href="bilprima.php"><img src="kiri.png"></a>
        </div>
</body>
</html>