<!DOCTYPE html>
<html>
<body>
<form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <h2 style="color:red;"> Our Group members : Steven Halla, Steven Halla, Steven Halla </h2>
    a: <input type="text" name="a" value="<?php if (isset($_GET['a'])) {echo $_GET['a']; }?>"><br><br>
    b: <input type="text" name="b" value="<?php if (isset($_GET['b'])) {echo $_GET['b']; }?>"><br><br>
    c: <input type="text" name="c" value="<?php if (isset($_GET['c'])) {echo $_GET['c']; }?>"><br><br>
    <input type="submit" name="add" value="add">
    <input type="submit" name="subtract" value="subtract">
    <input type="submit" name="multiply" value="multiply">
    <input type="submit" name="divide" value="divide">
    <input type="submit" name="maximum" value="maximum">
    <input type="submit" name="minimum" value="minimum">
    <br><br>
</form>
<?php
function add($x, $y, $z) {
    return $x + $y + $z;
}
function subtract($x, $y, $z) {
    return $x - $y - $z;
}
function multiply($x, $y, $z) {
    return $x * $y * $z;
}
function divide($x, $y, $z) {
    if ($y == 0 || $z == 0) {
        return "Cannot divide by zero.";
    }
    return $x / $y / $z;
}
function maximum($x, $y, $z) {
    return max($x, $y, $z);
}
function minimum($x, $y, $z) {
    return min($x, $y, $z);
}
if (isset($_GET['add'])) {
    echo 'a + b + c = '.add($_GET['a'], $_GET['b'], $_GET['c']);
}
if (isset($_GET['subtract'])) {
    echo 'a - b - c = '.subtract($_GET['a'], $_GET['b'], $_GET['c']);
}
if (isset($_GET['multiply'])) {
    echo 'a * b * c = '.multiply($_GET['a'], $_GET['b'], $_GET['c']);
}
if (isset($_GET['divide'])) {
    echo 'a / b / c = '.divide($_GET['a'], $_GET['b'], $_GET['c']);
}
if (isset($_GET['maximum'])) {
    echo 'maximum of a, b, c = '.maximum($_GET['a'], $_GET['b'], $_GET['c']);
}
if (isset($_GET['minimum'])) {
    echo 'minimum of a, b, c = '.minimum($_GET['a'], $_GET['b'], $_GET['c']);
}
?>
</body>
</html>
