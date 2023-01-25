<?php

$foo = $_GET["foo"] * 3;



?>
// http://127.0.0.1:8080/query-1/query1.php?foo=4

<pre>
<?= $foo ?>
</pre>



//http://127.0.0.1:8080/query-1/query1.php?foo=&bar=qux

<pre>
<?= $foo ?>
</pre>


//http://127.0.0.1:8080/query-1/query1.php?foo=qux&bar=

<pre>
<?= $foo ?>
</pre>


//http://127.0.0.1:8080/query-1/query1.php?foo=4&bar=baz

<pre>
<?= $foo ?>
</pre>