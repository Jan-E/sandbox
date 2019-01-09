--TEST--
Check sandbox entry
--SKIPIF--
<?php
if (!extension_loaded('sandbox')) {
	echo 'skip';
}
?>
--FILE--
<?php
$sandbox = new sandbox\Runtime();
try {
	$sandbox->enter([]);
} catch (Throwable $t) {
	var_dump($t->getMessage());
}
?>
--EXPECT--
string(23) "no entry point provided"

