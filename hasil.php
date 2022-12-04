<?php

if (!empty($_POST['inputbil'])) {
    $bil = $_POST['inputbil'];
    $statusbil = "Adalah bilangan prima";
    for ($i = 2; $i <= $bil - 1; $i++) {

        if ($bil % $i == 0) {
            $statusbil = "Bukan bilangan prima";
            break;
        }
    }
} 

?>

<html>

<head>
    <meta charset="utf-8">
    <title>APLIKASI PRIMA</title>
    <link rel="stylesheet" type="text/css" href="desain.css">
</head>

<body>
    <div class="all">
        <header>
            <h1>APLIKASI MENENTUKAN BILANGAN PRIMA ATAU BUKAN</h1>
        </header>

        <div class="form">
                <h3 class="teks">HASILNYA</h3>
            <form action="bilprima.php" method="POST">
                <h4> <?php echo "$bil $statusbil"  ?> </h4>
                <input class="innum1" type="submit" value="Cek Lagi">
            </form>
        </div>
    </div>

    <footer>
        <p>Copyright &copy; Qori Arsy Zahaadah | 2000018355</p>
    </footer>


</body>

</html>