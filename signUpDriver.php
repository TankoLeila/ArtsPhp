<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./signUpDriverStyle.css">
    <link rel = "stylesheet" href= "nav.css">
    <title>Driver Signup form</title>
</head>
<body>

<header>
        <!-- menu responsive -->
        
        <div class="menu_toggle">
            <span></span>
        </div>

        <div class="logo">
            <p><span>Luxe</span>Cars</p>
        </div>
        <ul class="menu">
            <li><a href="#home">Acceuil</a></li>
            <li><a href="./signUpDriver.php">Chauffeur</a></li>
            <li><a href="./client.php">Client</a></li>
            <li><a href="./dashboard.php">Dashboard</a></li>
        </ul>
  
    </header>
    <form>

        <h2>Driver informations</h2>

        <div class="main">

            <input type="text" name="driverName" placeholder="Enter your name" class="inputText"/>
            <input type="text" name="driverSurname" placeholder="Enter your surname" class="inputText"/>
            <input type="text" name="driverPhone" placeholder="Enter your phone number" class="inputText"/>
            <input type="text" name="driverLicenceType" placeholder="Enter your driver licence type" class="inputText"/>
            
        </div>

        <input type="submit" name="Register" class="btnSubmit"/>

    </form>
</body>
</html>