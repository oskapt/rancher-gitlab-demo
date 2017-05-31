<html>
<head><title>PHP Demo</title></head>
<body>
<p>
<?php
print("Container: " . gethostname() . "\n");
?>
</p>
<?php
$value = getenv('DEMO_VAR');
if($value) {
    print("<p>DEMO_VAR is set to: $value\n</p>");
}
?>
</body>
</html>
