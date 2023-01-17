<?php

$foo = $_GET["foo"] * 3;

$bar = $_GET["bar"] ?? "Godzilla!";

?>
// http://127.0.0.1:8080/query-1/query.php?foo=4

<pre>
<?= $foo ?>
</pre>


//http://127.0.0.1:8080/query-1/query.php?foo=4&bar=baz

<pre>
<?= $bar ?>
</pre>