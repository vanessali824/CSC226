<html>
<head>
    <title>PHP Test</title>
</head>
<body>
<?php

$txt = "Hello world!";//$ declares variable; don't need datatype
$x = 5;
$y = 10.5;
echo "<br>";
echo $txt;//echo prints
echo $x;

//echo '<p>Hello World</p>';
myTest($x);

function myTest($scopeTest) {
    echo "<p>Variable x inside function is: $scopeTest </p>";

}
//Loosely typed language so do not need to declare datatype b/c it interprets the type based on what is assigned
//Language for backend
//Open with web application localhost

 ?>

</body>
</html>