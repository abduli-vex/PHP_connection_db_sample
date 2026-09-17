<?php 
include 'includes/dbh.inc.php';

$abfrage = "Select id, vorname, nachname from users";

$ergebnise = mysqli_query($conn, $abfrage);

?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP TEST : 04.09.2026</title>
</head>

<body>
    <table>
        <tr>
            <th>Vorname</th>
            <th>Nachname</th>
        </tr>
        <?php 
            while($row = mysqli_fetch_assoc($ergebnise)){
        ?>

            <tr>
                <td><?php echo $row["id"] ?></td>
                <td><?php echo $row["vorname"] ?></td>
                <td><?php echo $row["nachnam"] ?></td>
            </tr>

        <?php
            }
        ?>
    </table>
</body>

</html>