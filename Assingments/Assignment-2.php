<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    # Question one 
    echo "<h1>Question one </h1>";

    $numbers = [5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9];
    
    echo "All elements = ";
    foreach ($numbers as $num) {
        echo ",", $num;
    }

    $total = 0;
    $total_even = 0;
    $total_odd = 0;

    foreach ($numbers as $num) {
        $total += $num;
        if ($num % 2 == 0) {
            $total_even += $num;
        } else {
            $total_odd += $num;
        }
    }
    echo "<br>Total of all elements: " . $total . "<br>";
    echo "Total of even elements: " . $total_even . "<br>";
    echo "Total of odd elements: " . $total_odd . "<br><br>";

    $min_val = min($numbers);
    $min_pos = array_keys($numbers, $min_val);
    echo "Minimum Element: " . $min_val . "<br>";
    echo "Minimum Element Position: ";
    foreach ($min_pos as $pos) {
        echo $pos . ",";
    }
    echo "<br>";
    $max_val = max($numbers);
    $max_pos = array_keys($numbers, $max_val);
    echo "Maximum Element: " . $max_val . "<br>";
    echo "Maximum Element Position: ";
    foreach ($max_pos as $pos) {
        echo $pos . ",";
    }

    # Question Two


    $colors = array(
        "Light" => array(
            "Red" => "Light Red",
            "Green" => "Light Green",
            "Blue" => "Light Blue"
        ),
        "Normal" => array(
            "Red" => "Normal Red",
            "Green" => "Normal Green",
            "Blue" => "Normal Blue"
        ),
        "Dark" => array(
            "Red" => "Dark Red",
            "Green" => "Dark Green",
            "Blue" => "Dark Blue"
        )
    );

    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr>
            <th></th>
            <th>Red</th>
            <th>Green</th>
            <th>Blue</th>
        </tr>";

    foreach ($colors as $rowName => $columns) {
        echo "<tr>";
        echo "<td><b>" . $rowName . "</b></td>";
        foreach ($columns as $colorValue) {
            echo "<td>" . $colorValue . "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";



    # Question Three
    $students = array(
        "CA221" => array(
            "Name" => "Abdirisak Mohamed",
            "Phone" => "0648440403",
            "Address" => "Laba Dhagax, Wardhiigley"
        ),
        "CA223" => array(
            "Name" => "Farah Jama",
            "Phone" => "0647223201",
            "Address" => "Taleex, Hodan"
        ),
        "CA233" => array(
            "Name" => "Maido Nur Adan",
            "Phone" => "0646990276",
            "Address" => "Macmacaanka, Dharkeynley"
        )
    );

    echo "<br> <table border='1' cellpadding='8' cellspacing='0'>";
    echo "<caption>Class Names</caption>";
    echo "<tr>
        <th></th>
        <th>Name</th>
        <th>Phone</th>
        <th>Address</th>
      </tr>";

    foreach ($students as $studentId => $details) {
        
        echo "<tr>";
        echo "<td><b>" . $studentId . "</b></td>";
        echo "<td>" . $details["Name"] . "</td>";
        echo "<td>" . $details["Phone"] . "</td>";
        echo "<td>" . $details["Address"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";


    ?>
    <!-- <ul style=""></ul> -->
</body>

</html>