<!DOCTYPE html>
<html>
<body>
<form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<h2 style="color:red;"> Our Group members : Steven Halla, Steven Halla, Steven Halla </h2>
a: <input type="text" name="a" value="<?php if (isset($_GET['a'])) {echo $_GET['a']; }?>"><br><br>
b: <input type="text" name="b" value="<?php if (isset($_GET['b'])) {echo $_GET['b']; }?>"><br><br>
<input type="submit" name="add" value="add">
<input type="submit" name="maximum" value="maximum">
<br><br>
</form>
<?php
function add($x, $y) {
if ((!isset($x)) || (!isset($y))) {
echo "This function requires two numbers.";
return;
}
else {
return ($x + $y);
}
}
function maximum($x, $y) {
if ((!isset($x)) || (!isset($y))) {
echo "This function requires three numbers.";
return;
}
else {
if ($x >= $y) {
return $x;
}else {
return $y;
}
}
}
if (isset($_GET['add'])) {
if (isset($_GET["a"]) && isset($_GET["b"])) {
$a = $_GET["a"];
$b = $_GET["b"];
echo 'a + b = '.add($a , $b);
}
}
if (isset($_GET['maximum'])) {
if (isset($_GET["a"]) && isset($_GET["b"])) {
$a = $_GET["a"];
$b = $_GET["b"];
echo 'maximum (a,b) = '.maximum($a , $b);
}
}
?>
</body>
</html>