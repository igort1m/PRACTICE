<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title of the calc</title>
</head>
<body>
<form>
    <input type="number" name="num1" placeholder="Number 1">
    <input type="number" name="num2" placeholder="Number 2">
    <select name="operator">
        <option>None</option>
        <option>Add</option>
        <option>Substract</option>
        <option>Multiply</option>
        <option>Divide</option>
    </select>
    <br>
    <button type="submit" name="submit" value="submit">Calculate</button>
</form>
<p>The ansewer is:</p>
<?php
if(isset($_GET['submit'])){
    $result1 = $_GET['num1'];
    $result2 = $_GET['num2'];
    $operator = $_GET['operator'];
    switch ($operator) {
        case "None":
            echo "You need select a method!";
            break;
        case "Add":
            echo $result1+$result2;
            break;
        case "Substract":
            echo $result1-$result2;
            break;
        case "Multiply":
            echo $result1*$result2;
            break;
        case "Divide":
            if ($result2 == 0)
            echo "Error!";
            else  echo $result1/$result2;
            break;


    }
}

?>
</body>
</html>