<!DOCTYPE html>
<html>
<head>
</head>
    <body>
<p>
    <?php
    $name = "Edgar";
    $myage = 15;

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
<p><a href="http://jm1234.azurewebsites.net/helloprinter.php?query=Earth">Earth</a></p>
<p><a href="http://jm1234.azurewebsites.net/helloprinter.php?query=Mars"></a>Mars</p>
<p><a href="http://jm1234.azurewebsites.net/helloprinter.php?query=Uranus"></a>Uranus</p>
</p>
</body>

</html>
