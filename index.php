<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP 2</title>
</head>
<body>
    <?php
        require_once('classes/User.php');
        require_once('classes/UserPrime.php');
        require_once('classes/CreditCard.php');
        require_once('classes/Product.php');

        $lorenzo = new User("Lorenzo","Rottigni","Via turati 12");

        echo "<h1>".$lorenzo->getName()."</h1>";
        echo "<h1>".$lorenzo->getSurname()."</h1>";
        echo "<h1>".$lorenzo->getAddress()."</h1>";
        echo "<h1>".$lorenzo->getName()."</h1>";
        
        $lorenzo->addPurchase(50,'Amazon Alexa Echo Dot');

        $purchaseArray = $lorenzo->getPurchase();

        echo "<h4>".$purchaseArray[0]["id"]."</h4>";
        echo "<h4>".$purchaseArray[0]["import"]."</h4>";
        echo "<h4>".$purchaseArray[0]["date"]."</h4>";
        echo "<h4>".$purchaseArray[0]["productName"]."</h4>";

    ?>
</body>
</html>