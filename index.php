<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once __dir__ . "/classes/CreditCard.php";
        require_once __dir__ . "/classes/User.php";
        require_once __dir__ . "/classes/UserPrime.php";
        
        $lorenzo = new User("Lorenzo","Rottigni","via turati 12", [
            "iban" => "IT60X0542811101000000123456",
            "cvv" => "483",
            "holder" => "Lorenzo Rottigni",
            "expirationDate" => "09/25"
        ]);
        echo $lorenzo -> getName();
        echo $lorenzo -> getSurname();
        echo $lorenzo -> getAddress();
        echo $lorenzo -> getCreditCard();
        echo "<br>";
        $francesco = new UserPrime(
            [
                "name" => "francesco",
                "surname" => "armando",
                "address" => "via croceffiso 4",
                "creditCard" => [
                    "iban" => "IT60X0542811101000000123456",
                    "cvv" => "483",
                    "holder" => "Lorenzo Rottigni",
                    "expirationDate" => "09/25"
                ]
            ],
            [
                "subscriptionDate" => date("Y/m/d"),
                "couponPointCounter" => 0,
                "primeVideoData" => [
                    "username" => "francescoArmando78",
                    "accountID" => "4985594"
                ],
                "primeTwichData" => [
                    "username" => "francescoTwich455",
                    "accountID" => "49854"
                ] 
            ]
        );
        echo $francesco -> getName();
        echo $francesco -> getSurname();
        echo $francesco -> getAddress();
        echo $francesco -> getCreditCard();
        echo $francesco -> getSubscriptionDate();
    ?>
</body>
</html>