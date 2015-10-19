<!DOCTYPE html>
<html>
<head>
</head>
    <body>
<p>
    <?php
    echo "test test test test test ";
    echo "the user name is " . $name . "and is " . $myage . "years old";
$name = "Edgar";
    $myage = 16;

    if($myage < 16){
        print "You are to young";
    }
    elseif ($myage >= 21){
        print "you can buy specs,mugs and sasuage rolls ";
    }
    elseif ($myage <= 21 ) {
        print "you can buy mugs and specs";
    }
    elseif ($myage < 18){
        print "you can buy specs";
    }



    ?>
</p>
</body>

</html>
