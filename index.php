<?php
$dataJSON = json_decode(file_get_contents('data.json'),true);
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
            <?php foreach ($dataJSON as $item) { ?>
            <tr>
                <td><?php echo $item['firstName'];?></td>
                <td><?php echo $item['lastName'];?></td>
                <td><?php echo $item['address']['street'] . ', ' . $item['address']['home'] . ', ' . $item['address']['city'] ;?></td>
                <?php foreach ($item['phoneNumber'] as $phone) { ?>
                <td><?php echo $phone  ?></td>
                <?php }?>
            </tr>
            <?php }?>
        </table>
    </body>
</html>

