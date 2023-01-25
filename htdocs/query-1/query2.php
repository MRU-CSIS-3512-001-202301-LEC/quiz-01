<?php



$bar = $_GET["bar"] ?? "Godzilla!";

?>
// http://127.0.0.1:8080/query-1/query2.php?foo=4


<pre>
<?= $bar ?>
</pre>


//http://127.0.0.1:8080/query-1/query2.php?foo=&bar=qux


<pre>
<?= $bar ?>
</pre>

//http://127.0.0.1:8080/query-1/query2.php?foo=qux&bar=


<pre>
<?= $bar ?>
</pre>

//http://127.0.0.1:8080/query-1/query2.php?foo=4&bar=baz


<pre>
<?= $bar ?>
</pre>