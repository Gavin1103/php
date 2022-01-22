<!DOCTYPE html>
<html lang="en">
<?php
//schrijf hier je PHP code....
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["hashValue"])) {
        //doe hier iets....
        $hashValue = hash("sha256", $_POST["hashValue"]);
        echo $hashValue;
    }
}

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SECURITY - OPDRACHT 1 - template</title>
</head>

<body>
    <!-- deze code is een begin, maar nog niet volledig, vul deze dus aan waar nodig!! -->
    <form id="hashing" action="" method="post">
        <input type="text" name="hashValue">
        <input type="submit" value="hash">
    </form>
    <hr>
    <br>
    <form id="encryption" action="" method="post">
        <input type="text" style="height: 110px; width: 110px;" name="encryptValue">
        <input type="submit" name="encrypt" value="encrypt">
        <!-- <input type="submit" name="decrypt" value="decrypt"> -->
    </form>
    <?php
    if (isset($_POST["encrypt"])) {
        $simple_string = $_POST["encryptValue"];
        echo "original Data :" . $simple_string;
        echo "<br>";
        $ciphering = "AES-128-CTR";
        $option = 0;
        $encryption_iv = "1234567890123456";
        $encryption_key = "hello";
        $encryption = openssl_encrypt($simple_string, $ciphering, $encryption_key, $option, $encryption_iv);
        echo "Encrypted Data : " . $encryption;
        echo "<br>";
    }
    ?>
    <br>
    <form id="encryption" action="" method="post">
        <input type="text" style="height: 110px; width: 110px;" name="decryptValue"">
        <!-- <input type=" submit" name="encrypt" value="encrypt"> -->
        <input type="submit" name="decrypt" value="decrypt">
    </form>
    <br>
    <?php
    if (isset($_POST["decrypt"])) {
        $text = $_POST["decryptValue"];
        $ciphering = "AES-128-CTR";
        $option = 0;
        $decryption_key = "hello";
        $decryption_iv = "1234567890123456";
        $decryption = openssl_decrypt($text, $ciphering, $decryption_key, $option, $decryption_iv);
        echo "Decrypted Data : " . $decryption;
        echo "<br>";
    }
    ?>
    <hr>
    <form id="encoding" action="" method="POST">
        <input type="text" name="encodeValue">
        <input type="submit" value="encode">
    </form>
    <?php
    if (!empty($_POST["encodeValue"])) {
        //doe hier iets....
        $encodeValue = $_POST["encodeValue"];
        echo "ingevulde waarde: " . $encodeValue;
        echo "<br>";
        $encoded = base64_encode($encodeValue);
        echo "encoded waarde: "  . $encoded;
    }
    ?>
    <hr>
    <!-- <form id="escaping">
        <input type="text" name="escapeValue" id="">
        <input type="submit" value="escape">
    </form> -->
    <p>escape voor beeld</p>
<?php 
echo "Ik ben \"18\" jaar oud"
?>
    <hr>
    <form method="POST" id="obfuscation">
        <p>kopieer dit stuk en zet het in het veld.</p>
        <p>echo "hallo wereld"</p>
        <p>Dit deel is mij niet gelukt</p>
        <input type="text" name="obfuscaterValue" id="">
        <input type="submit" value="obfuscate">
    </form>
    <?php
if (!empty($_POST["obfuscaterValue"])) {
    //doe hier iets....
    $obfuscatorValue = $_POST["obfuscaterValue"];
    echo $obfuscatorValue;
}
    ?>
</body>

</html>