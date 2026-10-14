<?php
require __DIR__ . "/../config/index4.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1px soldib black">
  <tbody>
    <?php
    echo "<tr>"
    echo "<td> / id [ad]"
    echo "<td> / id[yas]"
    echo"<td> / id [email]"
    echo "<td> /id [pass]"
    echo "</tr>"
    
    ?>
    <form action="örnek_sonuç.php" method="POST">
        <lablel>ad</label>

        <input type="text" placeholder="adınız">
        
        <label>yas:</label>
        <input type= "text" placeholder="yaşınız">
        <label>email</label>
        <input type text="email" placeholder="E-posta">
        
        <label>Sifre</label>
        <input type ="pass" placeholder="şifre">
        <input type="submit" value="kayıt ol">

</tbody>
<?php
$ad="Cengiz";
$soyad="Özçelik";
$sql="INSERT INTO(ad, soyad)"
?>



<form action=örnek_sonu.php>
    <label>Ad:</label>
    <input tyoe="text">
    <label>Soyad</label>
    <input type="text">,
    
    <?php
    $ad= $_POST=["ad"]
    ?>


<form action ="örnek_sonuc.php">
    <label>ad:</labek>
    <input type="text" placeholder="adınız">
    <label>yas:</label>
    <input type="text" placeholder="yaş">
    <label>Email</label>
    <input type="email" placeholder="E-posta girin">
    <input type="submit" value="Kayıt ol">

    <?php
    $ad="Metin";
    $soyad="Atamer";

    $sql="INSERT INTO (ad,soyad)";
    
    ?>
    <table border="1px solid black">
        <tbody>

        <?php
        echo "<tr>"
        echo "<td> id / [ad]</td>";
        echo "<td> id / [yas]</td>";
        echo "<td> id / [email]</td>";
        echo "</tr>";
        ?>


</body>
</html>