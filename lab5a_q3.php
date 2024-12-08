<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php
        function multiplication($multiplier) {
            $results = [];
            for ($i = 1; $i <= 12; $i++) {
                $results[] = [
                    "number" => $i,
                    "result" => $i * $multiplier
                ];
            }
            return $results;
        }

        $multiplier = 5; // Example multiplier
        $table = multiplication($multiplier);
    ?>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Multiplier</th>
            <th>Answer</th>
        </tr>
        <?php
            foreach ($table as $row) {
                echo "<tr>
                        <td>{$row['number']}</td>
                        <td>{$multiplier}</td>
                        <td>{$row['result']}</td>
                      </tr>";
            }
        ?>
    </table>
</body>
</html>
