<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q2</title>
</head>
<body>
    <?php
        $students = [
            "Ali" => "BIC21203",
            "Bala" => "BIC21203",
            "Chong" => "BIC21203"
        ];
    ?>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Course</th>
        </tr>
        <?php
            foreach ($students as $name => $course) {
                echo "<tr><td>$name</td><td>$course</td></tr>";
            }
        ?>
    </table>
</body>
</html>
