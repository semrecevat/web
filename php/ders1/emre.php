<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emre</title>
</head>
<body>
    <?php 
        $isim = "emre";
        $soyisim = "subaşı";
        $numara = "05348975669";
        $uni = "Aymes";

    ?>
    <table border="1">
        <tr>
            <td>İsim: </td>
            <td><?php echo $isim ?></td>
        </tr>
        <tr>
        <td>Soyisim: </td>
            <td><?php echo $soyisim ?></td>
        </tr>
        <tr>
        <td>Numara: </td>
            <td><?php echo $numara ?></td>
        </tr>
        <tr>
        <td>Üniversite: </td>
            <td><?php echo $uni ?></td>
        </tr>
    </table>
</body>
</html>