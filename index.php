<?php
$strInFile = file_get_contents('data.txt');
$dataJSON = json_decode($strInFile);
?>

<html>
    <body>
        <table>
            <thead>
            <tr>
                <td>ИМЯ</td>
                <td>ФАМИЛИЯ</td>
                <td>АДРЕС</td>
                <td>ТЕЛЕФОН</td>
            </tr>
            </thead>
            <?php foreach ($dataJSON as $value) : ?>
            <tr>
                <td><?=$value -> firstName;?></td>
                <td><?=$value -> lastName;?></td>
                <td><?=$value -> address;?></td>
                <td><?=$value -> phoneNumber;?></td>
            </tr>
            <?php endforeach;?>
        </table>
    </body>
</html>

