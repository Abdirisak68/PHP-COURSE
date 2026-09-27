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

    //creating array  - numeric array
    
    //first creating array
    $names = array();
    // then adding values to the array manually
    $names [0] = "CA233 is the best class in computer Applications";
    $names [1] = 123;
    $names [2] = 12.34;
    //display the array values using var_dump function
    var_dump ($names);

    //display all the values using pre tag
    echo "<pre>";
    print_r($names);
    echo "<pre>";

    //using for loop to display the array values
    $info =array(
        "101",
        "Sadaam",
        20,
        "Hodan District",
        "Single"

    );
    // for loop to display the array values
    for ($i=0; $i < count($info); $i++) { 
        echo $info[$i] . "<br>";
    }


    //Associative array - key value pair
    $student = array(
        "ID" => 101,
        "Name" => "Sadaam",
        "Age" => 20,
        "Address" => "Hodan District",
        "Status" => "Single",
        "weight" => 160.5
    );
    //displaying the infotmation stored in the associative array
    echo "<pre>";
    echo "information about the person: <br>";
    print_r($student);
    var_dump($student);
    echo "<pre>";
    ?>
</body>
</html>