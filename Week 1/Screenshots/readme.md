
# PHP Programming Screenshots

This folder contains screenshots demonstrating PHP programming concepts covered in the course **Web Application Development - PHP & MySQL**.

# PHP Introduction Screenshots

This folder contains screenshots explaining the basic concepts of PHP in the course:

**Web Application Development - PHP & MySQL**

---

# 1. PHP Echo with Ternary Operator

## Screenshot Name

`echo_with_ternary.png`

## Description

This screenshot demonstrates how PHP can use the `echo` statement
together with the ternary operator to display a result based on a
condition.

Main concepts covered:

-   A variable `$age` is assigned the value `20`.
-   The ternary operator `? :` is used as a short way to write an
    `if...else` condition.
-   The condition `$age >= 18` checks whether the age is 18 or older.
-   If the condition is true, PHP displays **"You are eligible to
    vote"**.
-   If the condition is false, PHP displays **"You are not eligible to
    vote"**.
-   The `echo` statement is used to display the final message.

## Example

``` php
$age = 20;

echo $age >= 18
    ? "You are eligible to vote"
    : "You are not eligible to vote";
```

------------------------------------------------------------------------

# 2. PHP Built-in Functions

## Screenshot Name

`php-built-in-functions.png`

## Description

This screenshot demonstrates the use of PHP built-in string functions to
work with text and count characters and words.

Main concepts covered:

-   A string is stored in the `$myString` variable.
-   The `strlen()` function is used to count the number of characters in
    a string.
-   The `str_word_count()` function is used to count the number of words
    in a string.
-   `echo` is used to display the results.
-   `<BR>` is used to move the output to a new line in the browser.
-   PHP provides many built-in functions that make common programming
    tasks easier.

## Example

``` php
$myString = "Welcome to my Appartment <BR>";

echo "<BR>Length of String: ", strlen($myString), "<BR>";

echo "Number of Words: ", str_word_count($myString), "<BR>";
```

------------------------------------------------------------------------

# 3. PHP Echo and Print

## Screenshot Name

`php-echo-print-code.png`

## Description

This screenshot demonstrates two common PHP statements used to display
output: `echo` and `print`.

Main concepts covered:

-   PHP code starts with the `<?php` opening tag.
-   The `echo` statement is used to display text and HTML content.
-   The `print` statement is also used to display output.
-   HTML headings such as `<h3>` and `<h4>` can be included inside PHP
    output.
-   `echo` can accept multiple values separated by commas.
-   The screenshot demonstrates both `echo` and `print` with different
    messages.
-   `<BR>` is used to create a line break in the browser.

## Example

``` php
<?php

echo "<h3>Welcome to PHP and MySQL</h3>";

echo "<h4>This is Simple Echo</h4>";

print "<h4>This is Simple Print</h4>";

print "<h3>This is Simple Print</h3>";

echo "Abdirisak", " Mohamed <BR>";
```

------------------------------------------------------------------------

# 4. PHP Variables and Single/Double Quotes

## Screenshot Name

`variable-single-double-quato.png`

## Description

This screenshot demonstrates PHP variables and the difference between
single quotes and double quotes when displaying variables.

Main concepts covered:

-   PHP variables start with the `$` symbol.
-   The variable `$_f` stores the value `20`.
-   A PHP variable name should not start with a number.
-   Double quotes `" "` allow PHP to replace a variable with its value
    inside a string.
-   Single quotes `' '` normally display the variable name as text
    instead of replacing it with its value.
-   The screenshot compares how the same variable behaves when used with
    double quotes and single quotes.

## Example

``` php
$_f = 20;

// Double quotes will print the value of the variable
echo "My Age Is: $_f";

// Single quotes will print the variable name
echo 'My Age Is: $_f';
```

## Output Concept

With **double quotes**:

``` text
My Age Is: 20
```

With **single quotes**:

``` text
My Age Is: $_f
```

This shows an important difference between single and double quotes when
working with PHP variables.

------------------------------------------------------------------------

# Summary

The four screenshots introduce several basic PHP programming concepts:

1.  **Ternary Operator** -- Used to make a short conditional decision.
2.  **Built-in Functions** -- Functions such as `strlen()` and
    `str_word_count()` help process strings.
3.  **Echo and Print** -- Used to display text and HTML output in PHP.
4.  **Variables and Quotes** -- Shows how PHP variables work and how
    single and double quotes handle variables differently.


