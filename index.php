<!DOCTYPE html>
<html>
<head>
</head>
    <body>
<p>
    <?php
    $name = "Edgar";
    $myage = 99;

    echo "change of text to see if it is still working";


    echo "\nthe user name is " . $name . " and is " . $myage . " years old ";


    if($myage < 16){
        print "You are to young to buy anything ";
    }
    elseif ($myage < 18){
        print "you can buy specs";
    }

    elseif ($myage <= 21 ) {
        print "you can buy mugs and specs";
    }
    elseif ($myage >= 21){
        print "you can buy specs,mugs and sasuage rolls ";
    }




    ?>

</body>

</html>
