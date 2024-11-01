<?php

$conn = new PDO("mysql:host=localhost;dbname=test", 'root', 'My$par0l');

$query = "SELECT * FROM product";

$stmt = $conn->query($query);

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width: 50%;
        }
    </style>
</head>

<body>
    <div>
        <table border="1" align="center">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Count</th>
            </tr>
            <?php
            foreach ($result as $value) { ?>
                <tr>
                    <td><?= $value['id'] ?></td>
                    <td><?= $value['name'] ?></td>
                    <td><?= $value['price'] ?></td>
                    <td><?= $value['count'] ?></td>
                </tr>
            <?php }
            ?>
        </table>
    </div>
</body>

</html>