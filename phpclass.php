<?php
if(isset($_POST["colorname"])){
    $inputColor = $_POST["colorname"];
}

class ChangeColor{
    private $colorx;

    function __construct($color){
        $this -> colorx = $color;
    }

    public function setColor($colorNew){
    $this -> colorx = $colorNew;
    }

    public function getColor(){
        return $this -> colorx;
    }
}


// Creating an object and passing "Red" as the color
$objectChangeColor = new ChangeColor("Red");



// Setting a new color to $mainObject
if(isset($inputColor)){
    $objectChangeColor->setColor($inputColor);
}


?>
<html>
    <head>
</head>

<body>
<center>
        <div>
            Current Value is: <?php echo $objectChangeColor -> getColor() ?>
        </div><br>
<form method = "POST">
    Input Color: <input type="text" name="colorname" required><br><br>
    <input type="submit" value="Submit Now">
</form>

</center>
</body>

</html>