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


// http://127.0.0.1:8080/query-1/query0.php?foo=4&bar=qux



// http://127.0.0.1:8080/query-1/query0.php?bar=qux




//http://127.0.0.1:8080/query-1/query0.php?bar=&foo=qux




//http://127.0.0.1:8080/query-1/query0.php