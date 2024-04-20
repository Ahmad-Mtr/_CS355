## List of Content

1.  [Table](https://github.com/Ahmad-Mtr/_CS355/blob/main/_lab2/schedule.html)
2.  [Basic Form](#basic-form)
3.  [External Stylesheets/Script Links](#external-stylesheet-link)
4.  [JS Dialog Messages](#js-dialog-messages)
5.  [Ternary Operator](#ternary-operator)
6.  [PHP scopes](#php-scopes)
7.  [Php integer types](#php-integer-types)
8.  [php Functions](#php-functions)
9.  [Syntax things](#syntax-things)
10. [Date Batata](#date-batata)
11. [Important Code/Syntax](#important-codesyntax)

---

## Basic Form

```html
<form>
  <input type="text" />
  <input type="password" />

  <select name="dropdown">
    <option value="C++">C++</option>
    <option value="Dart">Dart</option>
    <option value="Javascript">Javascript</option>
  </select>

  <input type="radio" name="subject" value="Arabic" />Arabic
  <input type="radio" name="subject" value="English" />English
  <input type="radio" name="subject" value="Deutsch" />Deutsch

  <input type="checkbox" name="C++" value="on" />C++
  <input type="checkbox" name="C#" value="on" />C#
  <input type="checkbox" name="Dart" value="on" />Dart1
</form>
```

---

## External Stylesheet Link

```html
<head>
  <link rel="stylesheet" href="style.css" />
</head>
```

```html
<script src="app.js"></script>
```

- JavaScripts in the head section are executed when
  called.
- JavaScripts in the body section are executed
  during the page loads

---

## JS Dialog Messages

```javascript
window.alert("Mokhabarat are seeing you "); // This shows a Message Box String as a label.
window.confirm("Mokhabarat want to track your Location");
let isGoodBoy = window.prompt(
  "To escape Mitsubishi Lancers, Say I love Mokhabarat 100 times",
  "I love Mokhabarat"
);
isGoodBoy == "I love Mokhabarat"
  ? window.alert("Good boy")
  : Window.alert("A Lancer is coming!!");
```

---

## Ternary Operator

```js
if (x > 3) {
  console.log(x);
} else {
  console.log(13);
}

x > 3 ? console.log(x) : console.log(13);
```

---

## PHP scopes

```php
function Test() {
    global $x, $y; // can be accesed globally, otherwise locally
    static $z = 0; // REMEBER: public static void main? same
    echo $z;
    $z = $z + 4;
}
```

## Php integer types

```php
// 0x: hex below is an example
// 0b: binary
// 0o: octal
$backgroundColor = 0x3c3cfc ;
```

## Php Functions

```php
var_dump($var);         // dumps - or prints - the Datatype plus value: int(221)
echo $course.$title;    // the `.` is concatenation operator
strpos($text, $target); // returns the character position of the target in $text if found, else FALSE
str_replace( "Whatsapp","Telegram", "Whatsapp 3mk") // Output: Telegram 3mk
strlen("Hello World!"); // 12

```

## Syntax things

```php
$cars=array("Volvo","BMW","Toyota");    // This is an Array
echo cars[0];

$collection=array("Web"=>"355","Dart"=>"89","C++"=>"116"); // This is a map, but called an `associative Array`
echo collection[Dart];

foreach($collection as $x=>$x_value)    // This is a 'for-in' loop in other langs, known here as oreach.

declare(strict_types=1);        // declare strict to listen for exceptions, ... and throw them.
```

## Date Batata

**Arguments**

- `d` day of the month (1 - 31)
- `m` month (1 - 12)
- `Y` year (4 digits)
- `l` day of the week
- `H` 24-hour format (00 - 23)
- `h` 12-hour format (01 - 12)
- `i` Minutes
- `s` Seconds
- `a` am/pm

```php
date("d/m/Y");  //  21/04/2024
date("d.m.Y");  //  21.04.2024

mktime(hour, minute, second, month, day, year);

$md=mktime(10, 20, 33, 04, 12, 2023);
echo " Today is " . date("d-m-Y h:i:sa", $md);

strtotime();    // convert a user date as string into a Unix timestamp
```

## Important Code/Syntax

```php
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and
        whitespaceif (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameErr = "Only letters and white space
allowed";
        }
    }
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }
    if (empty($_POST["website"])) {
        $website = "";
    } else {
        $website = test_input($_POST["website"]);
        // check if URL address syntax is valid (this
        regularexpressionalsoallowsdashesintheURL) if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-
a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-
9+&@#\/%=~_|]/i", $website)) {
            $websiteErr = "Invalid URL";
        }
    }
?>
```
