<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <table border="1" >
    <caption>Question Eight</caption>
    
    
    <?php
    # Question One
    echo "<br/> # Question One = ";
    $a = 50;
    $b = 30;
    $c = 20;
    if ($a > $b && $a > $c) {
        echo "a= $a is the largest";
    } elseif ($b > $a && $b > $c) {
        echo "b= $b is the largest";
    } else {
        echo "c= $c is the largest";
    }

    # Question Two
    echo "<br/> # Question Two = ";
    $num = 15;
    if ($num % 3 == 0 && $num % 5 == 0) {
        echo " $num is divisible by both 3 and 5";
    } elseif ($num % 3 == 0) {
        echo " $num is divisible by 3";
    } elseif ($num % 5 == 0) {
        echo " $num is divisible by 5";
    } else {
        echo " $num is not divisible by either 3 or 5";
    }

    echo "<br/> # Question Three = ";
    $odd_Numbers = 2;
    while ($odd_Numbers <= 20 ) {
        if ($odd_Numbers % 2 != 0) {
            # code...
            echo "  $odd_Numbers ,";
        }
        $odd_Numbers++;
    }
    echo "<br>Even numbers from 35 to 7:<br>";
    $even_Numbers = 35;
    while ($even_Numbers >= 7 ) {
        if ($even_Numbers % 2 == 0) {
            # code...
            echo " $even_Numbers ,";
        }
        $even_Numbers--;
    }

    # Question four
    echo "<br/> # Question four = ";
    for ($i = 50; $i >= 2; $i--) {
        if ($i % 2 == 0 && $i % 5 == 0) {
        echo "$i ";
    }
    }



        # Question five
    echo "<br/> # Question five = ";
    $reverseNum = 54321;
    // $reversedNum = strrev($reverseNum);
    //     echo $reversedNum;

    while ($reverseNum > 0) {
        # code...
         $reversedNum = $reverseNum % 10;
         echo " $reversedNum";
         $reverseNum = (int) ($reverseNum/10);

    }
    # Question six
    echo "<br/> # Question six = ";
    // lcm of two numbers
    $A = 8;
    $B = 12;
    $lcm = ($A > $B) ? $A : $B;
    while (true) {
        if ($lcm % $A == 0 && $lcm % $B == 0) {
            echo "LCM of $A and $B is: $lcm";
            break;
        }
        $lcm++;
    }
    # Question seven
    echo "<br/> # Question seven = ";
    $a = 18;
    $b = 24;

    // hcf numbers
    for ($i = 1; $i <= min($a, $b); $i++) {
        if ($a % $i == 0 && $b % $i == 0) {
           echo "<br/> HCF of $a and $b is: $i";
        }
    }
   
    # Question nine
    echo "<br/> # Question nine = ";
    $num = 12;
    $isPrime = $num > 1;

    for ($i = 2; $i <= sqrt($num); $i++) {
    if ($num % $i == 0) {
        $isPrime = false;
        break;
    }
    }

    if ($isPrime) {
        echo "$num is a prime number.";
    } else {
        echo "$num is not a prime number.";
    }

    # Question ten
    echo "<br/> # Question ten = ";
    for ($num = 10; $num <= 50; $num++) {
        $isPrime = $num > 1; 
        
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                $isPrime = false;
                break;
            }
        }
        
        if ($isPrime) {
            echo "$num, ";
        }
    }

    # Question eight
    // echo "<br/> # Question eight = ";
    for ($row = 1; $row <= 12; $row++) {
        echo "<tr>";
        for ($col = 1; $col <= 12; $col++) {
            echo "<td>" . ($row * $col) . "</td>";
        }
        echo "</tr>";
    }


    ?>
    </table>
</body>
</html>