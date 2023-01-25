<?php

$foo = isset($_GET["foo"]) ? $_GET["foo"] * 3 : "ping!";
$bar = $_GET["bar"] ?? "Godzilla!";

?>

<pre>
<?= $foo ?>
</pre>
<pre>
<?= $bar ?>
</pre>


// Q1 http://127.0.0.1:8080/3-query-strings/query.php?foo=4&bar=qux
<br>
// Q2 http://127.0.0.1:8080/3-query-strings/query.php?bar=qux
<br>
// Q3 http://127.0.0.1:8080/3-query-strings/query.php?bar=&foo=qux
<br>
// Q4 http://127.0.0.1:8080/3-query-strings/query.php