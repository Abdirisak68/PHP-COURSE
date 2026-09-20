<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week Two</title>
</head>
<body>
    <?php 
    define("age",20);
    // echo age ;
    
    // if (age >= 18) 
    //     echo ("your Adult");
    // elseif
    //     echo "your Minor";

    # instead of if and else we use Ternary operator
    echo age >= 18 ? "Qaangaar ayaa tahy" : "Waa Yartahy";
    echo "<br/>";

    $marks = 87;
    switch ($marks) {
        case ($marks >= 90):
            echo "Excelent";
            break;
        case ($marks >= 80):
            echo "Very Goood";
            break;
        case ($marks >= 50):
            echo "Minimal Pass";
            break;
        default:
            echo "Not Pass";
            break;    
    }
    echo "<br/>";
    // While loop
    $count = 1;
    // while ($count <= 5) {
    //     echo $count ,"<br/>";
    //     $count++;
    // }

    // do {
    //     echo $count ,"<br/>";
    //     $count++;
    // } while ($count <= 10);
    // // example 1 for loopp
    // for ($i=1; $i < 5; $i++) { 
    //     # code...
    //     echo "$i times 5 is ". $i * 5 . "<br/>";
    // }

    // example 2 for nested loop
    echo "<br/>";
    echo "<br/>";
    echo "<h3>Nested Loop Class Activity</h3>";

    for ($i=1; $i <= 3; $i++) { 
       for ($j=1; $j <= 5; $j++) { 
        echo ("Row is $i * Column $j , Result is " . ($i *$j) . "<br/>");
       }

    }
    ?>
</body>
</html>