<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animals Information</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Animals</h1>
    <table>
        <tr>
            <th>Species</th>
            <th>Habitat</th>
            <th>Lifespan (years)</th>
        </tr>
<?php
$db_host = getenv('DB_URL');
$db_user = getenv('USER_NAME');
$db_pass = getenv('USER_PASSWORD');
$db_name = getenv('DB');

$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);
$result = $mysqli->query("SELECT * FROM animals");
            foreach ($result as $row) {
                echo "
                <tr>
                    <td>{$row['species']}</td>
                    <td>{$row['habitat']}</td>
                    <td>{$row['lifespan_years']}</td>
                </tr>
                ";
            }
        ?>
    </table>
    <?php phpinfo(); ?>
</body>
</html>

