<html>
<head>
<title>Variables</title>
</head>
<body>

<?php
$whatsit;
function variable_Type($whatsit) {
    echo "value is: " .gettype($whatsit);
    echo "<br>";
}

variable_Type("Hello");
variable_Type(sqrt(4));
variable_Type($whatsit = true);
variable_Type(2);
variable_Type($whatsit = NULL);

?>
</body>
</html>