<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1>this is a test of xampp</h1>
    <p>Welcome to PHP and MySQL</p> -->
    <?php
        echo "<h3>Welcome to PHP and MySQL .</h3>"; 
        echo ("<h4> This is Simple Echo</h4>"); 
        print "<h4> This is Simple Print</h4>"; 
        print ("<h3> This is Simple Print</h3>");
        echo "Abdirisak"," Mohamed <BR/>"; // echo can take multiple parameters separated by commas

        $age = 20; 
        echo $age >= 18 ? "You are eligible to vote" : "You are not eligible to vote"; 

        # Variables
        $_f = 20; // variable name should start with a $ symbol and should not start with a number
        echo "<BR/>My Age Is : $_f <BR/>"; // double quotes will print the value of the variable
        echo 'My Age Is : $_f'; // single quotes will print the variable name

        
        $myString = "welcome to my Appartment <BR/>";
        echo "<BR/>Length of String: ",strlen($myString),"<BR/>"; // count the number of characters in a string
        echo "Number of Words: ",str_word_count($myString),"<BR/>"; // count the number of words in a string
    ?>
</body>
</html>