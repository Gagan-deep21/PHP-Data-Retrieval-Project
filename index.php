<!DOCTYPE html>
<!--Html tag starts here-->
<html lang="en">
  <!--head of html-->
  <head>
    <meta charset="utf-8"/>
    <header>
    <nav class="hhh" >
      <label class="logo" id="shsh">MOGA PIZZA</label>
    <ul>
   <li> <a id="shsh" href="view.php">View table</a></li>
    <li><a id="shsh" href="index.php"> Main page</a></li>
</ul>
    </nav>
  </header>
    <!--Title of the page-->
    <title>FORM</title>
  <link rel="stylesheet" href="css/style.css" type="text/css"/>
  </head>
  <!--Body of the page-->
  <body>
  <!--Head part of the body-->  
      <header>
        <!--  <h1 align="center">MOGA PIZZA</h1>-->
        <div class="dd"> <img src="pizza2.jpeg" alt="PIZZA IMAGE" height="180px" width="550px"></div>
      </header>
    <!--Main section of the body-->
    <main>
      <!--Form tag stats from here-->
       <form id="pizza"  method="POST">
      <fieldset> 
       
        <legend><h2 >Order Now</h2></legend>
         <img src="pizza.jpg" alt="PIZZA IMAGE" height="150px" width="170px"class="img2">
     
        <div>
          <label for="menu">Select Pizza</label>
          <select id="menu" name="menu">
            <option value="chose">choose</option>
            <option value="veg">Veg Pizza</option>
            <option value="corn">Corn Pizza</option>
            <option value="Pun">Punjabi Pizza</option>
            <option value="cheez">Special cheez Pizza</option>
            <option value="sps ">Moga Special Pizza</option>
          </select>
        <div>
          <label for="counting" >No of Pizzas</label>
        
          <input type="text" id="counting" name="counting" required size="12" maxlength="5" placeholder="enter no of pizzas" >
        
        </div>
        
        <div>
          <label for="size">size</label>
          <select id="size" name="size" >
            <option value="choose">choose</option>
            <option value="23cm">23cm</option>
            <option value="26cm">26cm</option>
            <option value="28cm">28cm</option>
            <option value="31cm">31cm</option>
          </select>
        </div>

        <div>
          <label for="crust">crust</label>
          <select id="crust" name="crust" >
            <option value="choose">choose</option>
            <option value="Thin crust">Thin crust</option>
            <option value="Thick crust">Thick crust</option>
            <option value="Stuffed crust">Stuffed crust</option>
            <option value="Cheez crust">Cheez crust</option>
            <option value="Flat bread Crust">Flat bread Crust</option>
          </select>
        </div>
        <div>
          <fieldset>
            <legend>Toppings</legend>
          <label for="sus">Sausage</label>
          <input type="checkbox" id="sus" name="toping">
          
          <label for="mhm">Mushroom</label>
          <input type="checkbox" id="mhm" name="topping">
          
          <label for="pep">Pepperoni</label>
          <input type="checkbox" id="pep" name="topping">
          
          <label for="fgarlic">Fresh Garlic</label>
          <input type="checkbox" id="fgarlic" name="topping">
            
          <label for="bolive">Black Olives</label>
          <input type="checkbox" id="bolive" name="topping">
          </fieldset>
        </div>

        <div>
          <fieldset>
            <legend>Shape</legend>
            <label for="rou">Round</label>
            <input type="radio" id="rou" name="shape">
            
            <label for="squ">Square</label>
            <input type="radio" id="squ" name="shape">
          </fieldset>
        </div>
        <div>
          <label for="ing">SPECIAL INGREDIANTS THAT YOU WANT TO ADD</label>
          <textarea id="ing" rows="5" cols="50"></textarea>
        </fieldset>
        <fieldset>
          <legend>Address info</legend>
          <div>
          <label for="fname">Name</label>
          <input type="text" id="fname" name="name" required size="20"
            maxlength="20" placeholder="Enter name" >
          </div>
        <div>
          <label for="mail">Email</label>
          <input type="email" id="mail" name="email" required 
            placeholder="Your mail" >
        </div>
         <div>
          <label for="address"> Your address</label>
           <input type="text" id="address" name="address" required 
              maxlength="20" placeholder="enter address">
        </div>
            <div>
              <label for="phone">Your Number</label>
              <input type="tel" id="phone" name="phoneno" required 
                placeholder="moblie No.">
            </div>
        </fieldset>
          <input type="submit"  name="submit" value="submit" id="subbt">
          <input type="reset" value="clear" id="subbt">


          <div class="form-group submit-message">
           <?php
					 	require_once('database.php');
             require_once('validate.php');
             $valid = new validate();
             if (isset($_POST) && !empty($_POST)){
              $lname = $_POST['name'];
              $fname = $_POST['phoneno'];
              $email = $_POST['email'];
              $res = $database->create($fname, $lname, $email);
            
              if ($res && $valid->validNumber($fname) && $valid->validEmail($email)){
                echo "<p>Successfully inserted data</p>";
              }else{
                echo "<p>Failed to insert data</p>";
              }
            }
					 ?>
        </div>
        </main>
          <!--Footer of the body-->
          <footer>
            <small>The tringle u love to eat.</small>
          </footer>
</form>
  </body>
</html>