<!DOCTYPE html>
<html>
  <head>
    
    <!-- Meta Data -->
    <meta charset="utf-8" />
    <meta name="description" content="User Input, with PHP">
    <meta name="keywords" content="immaculata, ics2o" />
    <meta name="author" content="Grace S" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png" />
    <link rel="manifest" href="./fav_index/site.webmanifest" />
    
    <!-- Google's MDL -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
 <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_purple-teal.min.css" /> 
    
    <!-- Links to CSS file -->
    <link rel="stylesheet" href="./css/style.css" />
    
    <!-- Website title -->
    <title>Doughnut Daily, with PHP</title>
  </head>
  <body>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    
    <!-- MDL Heading -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header">
        <div class="mdl-layout-title">
          <span class="mdl-layout-title">Doughnut Daily in PHP</span>
        </div>
      </header>
      
      <!-- Header Description -->
      <?php 
        echo "<P>Welcome to Doughnut Daily! We are a NEW local buisness right here in Ottawa. Use our web page to view what we have on our menu and place your order online! </P>";
      ?>

      <!-- Images -->
      <?php
        echo '<center><img src= "./images/chocolate_doughnut.jpg" alt="choco" width="25%" height="auto"><img src= "./images/colourful_doughnut.jpg" alt="doughnut" width="25%" height="auto"><img src= "./images/doughnut_tray.jpg" alt="tray" width="25%" height="auto"></center>';
      ?>

      <?php
        echo "<h4>Our Menu and Prices:</h4>";
      ?>

     <!-- Table listing options and prices -->
      <table class="center">
        <tr>
          <th class="border">Item</th>
          <th class="border">Sizing</th>
        </tr>
        <tr>
          <td class="border">Vanilla Doughnut</td>
          <td class="border">Single: $3.75 each <br> 6-Pack: $20.00 <br> 12-Pack: $36.00</td>
        </tr>
        <tr>
          <td class="border">Chocolate Doughnut</td>
          <td class="border">Single: $3.75 each <br> 6-Pack: $20.00 <br> 12-Pack: $36.00</td>
        </tr>
        <tr>
          <td class="border">Maple Bacon Doughnut </td>
          <td class="border">Single: $3.75 each <br> 6-Pack: $20.00 <br> 12-Pack: $36.00</td>
        </tr>
        <tr>
          <td class="border">Old-Fashioned Doughnut</td>
          <td class="border">Single: $3.75 each <br> 6-Pack: $20.00 <br> 12-Pack: $36.00</td>
        </tr>
        <tr>
          <td class="border">Cinnamon Twist Doughnut</td>
          <td class="border">Single: $3.75 each <br> 6-Pack: $20.00 <br> 12-Pack: $36.00</td>
        </tr>
        <tr>
          <td class="border">Apple Fritter Doughnut </td>
          <td class="border">Single: $3.75 each <br> 6-Pack: $20.00 <br> 12-Pack: $36.00</td>
        </tr>
        <tr>
          <td class="border">Sour Cream Doughnut</td>
          <td class="border">Single: $3.75 each <br> 6-Pack: $20.00 <br> 12-Pack: $36.00</td>
        </tr>
        <tr>
          <td class="border">Red Velvet Doughnut</td>
          <td class="border">Single: $3.75 each <br> 6-Pack: $20.00 <br> 12-Pack: $36.00</td>
        </tr>
        <tr>
          <td class="border">Blueberry Doughnut</td>
          <td class="border">Single: $3.75 each <br> 6-Pack: $20.00 <br> 12-Pack: $36.00</td>
        </tr>
        <tr>
          <td class="border">Strawberry Doughnut</td>
          <td class="border">Single: $3.75 each <br> 6-Pack: $20.00 <br> 12-Pack: $36.00</td>
        </tr>
        <tr>
          <td class="border"> Toppings: (Sprinkles, Cinnamon and Sugar, Powdered Sugar, etc.)</td>
          <td class="border"> $0.60 each</td>
        </tr>
        <tr>
          <td class="border"> Drinks: (Soda, Coffee, etc.)</td>
          <td class="border"> $3.00 - $4.50 each</td>
        </tr>
        <tr>
          <td class="border"> Sides: Mini Doughnuts</td>
          <td class="border">$32.00 per dozen</td>
        </tr>
      </table>
      
      <!-- Your order header -->
      <?php
        echo "<h4>Your Order:</h4>";
        echo "<h5>Choose Your Doughnut Flavour:</h5>";
      ?>

      <!-- Dropdown Menu for Size -->
      <br>
      <form method= "post">
        <label for="size">Choose a Doughnut Size Pack:</label>
        <select id="size" name="size">
          <option value="small">Single</option>
          <option value="medium">6-Pack</option>
          <option value="large">12-Pack</option>
        </select>
        <br>
        <br>

        <!-- Dropdown Menu for Flavour -->
         <label for="flavour">Choose a Doughnut Flavour:</label>
          <select id="flavour" name="flavour">
            <option value="">--Flavour--</option>
            <option value="Vanilla">Vanilla Doughnut</option>
            <option value="Chocolate">Chocolate Doughnut</option>
            <option value="Maple Bacon">Maple Bacon Doughnut</option>
            <option value="Old-Fashioned">Old-Fashioned Doughnut</option>
            <option value="Cinnamon Twist">Cinnamon Twist Doughnut</option>
            <option value="Apple Fritter">Apple Fritter</option>
            <option value="Sour Cream">Sour Cream Doughnut</option>
            <option value="Red Velvet">Red Velvet Doughnut</option>
            <option value="Blueberry">Blueberry Doughnut</option>
            <option value="Strawberry">Strawberry Doughnut</option>
          </select>
          <br>
          <br>

          <!-- Dropdown Menu for Topping -->
          <label for="topping">Topping:</label>
            <select name="topping" id="topping">
						  <option value="">--Topping--</option>
						  <option value="Sprinkles">Sprinkles</option>
						  <option value="Marshmallows">Marshmallows</option>
						  <option value="cinnamonSugar">Cinnamon & Sugar</option>
              <option value="Powdered-Sugar">Powdered Sugar</option>
              <option value="Glazed">Glazed</option>  
              <option value="Jelly">Jelly</option> 
              <option value="Coconut">Coconut</option> 
            </select>
            <br>
            <br>
          
            <!-- Dropdown Menu for Topping -->
            <label for="topping2">Second Topping:</label>
              <select name="topping2" id="topping2">
						    <option value="">--Topping--</option>
						    <option value="Sprinkles2">Sprinkles</option>
						    <option value="Marshmallows2">Marshmallows</option>
						    <option value="cinnamonSugar2">Cinnamon & Sugar</option>
                <option value="Powdered-Sugar2">Powdered Sugar</option>
                <option value="Glazed2">Glazed</option>  
                <option value="Jelly2">Jelly</option> 
                <option value="Coconut2">Coconut</option> 
              </select>
               <br>
              <br>

                <!-- Dropdown Menu for Topping -->
                <label for="topping3">Third Topping:</label>
                  <select name="topping3" id="topping3">
						        <option value="">--Topping--</option>
						        <option value="Sprinkles3">Sprinkles</option>
						        <option value="Marshmallows3">Marshmallows</option>
						        <option value="cinnamonSugar3">Cinnamon & Sugar</option>
                    <option value="Powdered-Sugar3">Powdered Sugar</option>
                    <option value="Glazed3">Glazed</option>  
                    <option value="Jelly3">Jelly</option> 
                    <option value="Coconut3">Coconut</option> 
                  </select>
                 <br>
                <br>

                <!-- Dropdown Menu for Topping -->
              <label for="topping4">Fourth Topping:</label>
                <select name="topping4" id="topping4">
						      <option value="">--Topping--</option>
						      <option value="Sprinkles4">Sprinkles</option>
						      <option value="Marshmallows4">Marshmallows</option>
						      <option value="cinnamonSugar4">Cinnamon & Sugar</option>
                  <option value="Powdered-Sugar4">Powdered Sugar</option>
                  <option value="Glazed4">Glazed</option>  
                  <option value="Jelly4">Jelly</option> 
                  <option value="Coconut4">Coconut</option> 
                </select>
                 <br>
                <br>

                <!-- Dropdown Menu for Sides -->
                <label for="sides">Sides:</label>
                  <select name="sides" id="sides">
						        <option value="">--Sides--</option>
						        <option value="Mini">Mini Doughnuts</option>
						        <option value="Fruit">Fruit Salad</option>
                </select>
                <br>
                <br>

                <!-- Dropdown Menu for Sides -->
                <label for="sides2">Sides:</label>
                  <select name="sides2" id="sides2">
						        <option value="">--Sides--</option>
						        <option value="Mini2">Mini Doughnuts</option>
						        <option value="Fruit2">Fruit Salad</option>
                </select>
                <br>
                <br>

                  <!-- Table for Drink Choice -->
                  <table class="center">
                    <tr>
                      <td>
                        
                        <!-- Header for user to Choose Drink of Choice -->
                        <h5>Choose Your Drink Choice:</h5>
                        
                        <!-- Option 1 -->
                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="none">
                          <input type="radio" id="none" class="mdl-radio__button" name="drink" value="none" checked>
                          <span class="mdl-radio__label">N/A</span>
                        </label>
                        
                        <!-- Pepsi -->
                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="pepsi">
                          <input type="radio" id="pepsi" class="mdl-radio__button" name="drink" value="pepsi">
                          <span class="mdl-radio__label">Pepsi</span>
                        </label>        
                        
                        <!-- Coffee -->
                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="Coffee">
                          <input type="radio" id="Coffee" class="mdl-radio__button" name="drink" value="Coffee">
                          <span class="mdl-radio__label">Coffee</span>
                        </label>
                        
                        <!-- Fresca -->       
                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="Fresca">
                          <input type="radio" id="Fresca" class="mdl-radio__button" name="drink" value="Fresca">
                          <span class="mdl-radio__label">Fresca</span>
                        </label>
                        
                        <!-- Juice -->       
                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="Juice">
                          <input type="radio" id="Juice" class="mdl-radio__button" name="drink" value="Juice">
                          <span class="mdl-radio__label">Juice</span>
                        </label>
                      </td>
                    </tr>
                  </table>
                  <br>
                  
                  <!-- Submit Button -->
                  <input type="submit" name="submit" value="Display Cost For Doughnut Order" />
                </form>

    <!-- Define Constants -->
    <?php
      if(isset($_POST['submit'])) {

        define("HST", 0.13);
        define("TOPPING_PRICE", 0.60);
        define("SINGLE", 3.76);
        define("SIX_PACK", 20.00);
        define("TWELVE_PACK", 36.00);
        define("SODA_COST", 4.00);
        define("JUICE_COST", 3.00);
        define("COF_COST", 4.50);
        define("MINI_COST", 32.00);
        define("FRUIT_COST", 6.00);

        // Variables
        $size = ($_POST['size']);
        $flavour = ($_POST['flavour']);    
        $topping = $_POST['topping'];
        $topping2 = $_POST['topping2'];
        $topping3 = $_POST['topping3'];
        $topping4 = $_POST['topping4'];
        $drink = $_POST['drink'];
        $sides = $_POST['sides'];
        $sides2 = $_POST['sides2'];
        
        // Initializing Variables
        $sizeCost = 0;
        $drinkCost = 0;
        $toppingCost = 0;
        $toppingCost2 = 0;
        $toppingCost3 = 0;
        $toppingCost4 = 0;
        $sidesCost = 0;
        $sidesCost2 = 0;
        
        // IF statement for size
        if ($size == "small")  {
          $sizeCost = SINGLE;
        }
        else if ($size == "medium") {
          $sizeCost = SIX_PACK;
        }
        else {
          $sizeCost = TWELVE_PACK;
        }
        
        // IF statement for Topping
        if ($topping == "Sprinkles" || $topping == "Marshmallows" || $topping == "cinnamonSugar" || $topping == "Powdered-Sugar" || $topping == "Glazed" || $topping == "Jelly" || $topping == "Coconut") {
		$toppingCost = TOPPING_PRICE;
        } else  {
          $toppingCost = 0;
        }

        // IF statement for Topping
        if ($topping2 == "Sprinkles2" || $topping2 == "Marshmallows2" || $topping2 == "cinnamonSugar2" || $topping2 == "Powdered-Sugar2" || $topping2 == "Glazed2" || $topping2 == "Jelly2" || $topping2 == "Coconut2") {
		$toppingCost2 = TOPPING_PRICE;
        } else  {
          $toppingCost2 = 0;
        }

        // IF statement for Topping
        if ($topping3 == "Sprinkles3" || $topping3 == "Marshmallows3" || $topping3 == "cinnamonSugar3" || $topping3 == "Powdered-Sugar3" || $topping3 == "Glazed3" || $topping3 == "Jelly3" || $topping3 == "Coconut3") {
		$toppingCost3 = TOPPING_PRICE;
        } else  {
          $toppingCost3 = 0;
        }

        // IF statement for Topping
        if ($topping4 == "Sprinkles4" || $topping4 == "Marshmallows4" || $topping4 == "cinnamonSugar3" || $topping4 == "Powdered-Sugar3" || $topping4 == "Glazed3" || $topping4 == "Jelly3" || $topping4 == "Coconut3") {
		$toppingCost4 = TOPPING_PRICE;
        } else  {
          $toppingCost4 = 0;
        }
        
        // IF statement for Sides
        if ($sides == "Mini")  {
          $sidesCost = MINI_COST;
        }
        else if ($sides == "Fruit") {
          $sidesCost = FRUIT_COST;
        }
        else {
          $sidesCost = 0;
        }

        // IF statement for Sides
        if ($sides2 == "Mini2")  {
          $sidesCost2 = MINI_COST;
        }
        else if ($sides2 == "Fruit2") {
          $sidesCost2 = FRUIT_COST;
        }
        else {
          $sidesCost2 = 0;
        }
        
        // IF statement for Drinks
        if ($drink == "pepsi" || $drink == "Fresca") {
            $drinkCost = SODA_COST;
          } else if ($drink == "Juice") {
            $drinkCost = JUICE_COST;
          } else if ($drink == "Coffee") {
            $drinkCost = COF_COST;
          } else {
            $drinkCost = 0;
          }

          // Calculates Subtotal, Tax and Total 
          $subtotal = $sizeCost + $toppingCost + $drinkCost + $sidesCost + $toppingCost2 + $toppingCost3 + $toppingCost4 + $sidesCost2;
          $tax = $subtotal * HST;
          $total = $subtotal + $tax;

        // Rounds Results to the Nearest Hundredth
        $subtotal = number_format($subtotal, 2);
        $tax = number_format($tax, 2);
        $total = number_format($total, 2);

        // Displays Results to User
        echo "<h4>Your subtotal is $" . $subtotal . ".</h4>";
        echo "<h4>The tax is $" . $tax . ".</h4>";
        echo "<h4>Your total is $" . $total . ".</h4>";
        echo "<h4> Enjoy your " . strtoupper($flavour) . " flavoured doughnut!</h4>";
      }
		?>
    </div>
  </body>
</html>