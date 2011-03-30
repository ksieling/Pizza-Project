<?php include 'includes/ini.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kettle Corn Pizza</title>
<link rel="stylesheet" type="text/css" href="css/pizza.css" />
</head>

<body>
<div id="outerContainer">
<?php include 'includes/header.php'; ?>
  <h1>Online Pizza Order Form</h1>
  <div id="upperMenuDiv">
    <div id="sizeDiv">
      <fieldset>
        <legend>Size</legend>
        <label>Small<input type="radio" id="size" name="size" value="small"></input></label>
        <label>Medium<input type="radio" id="size" name="size" value="Medium"></input></label>
        <label>Large<input type="radio" id="size" name="size" value="Large"></input></label>
      </fieldset>
    </div>
    <div id="crustDiv">
      <fieldset>
        <legend>Crust</legend>
        <label>Regular<input type="radio" id="crust" name="crust" value="Regular"></input></label>
        <label>Thin<input type="radio" id="crust" name="crust" value="Thin"></input></label>
        <label>Pan<input type="radio" id="crust" name="crust" value="Pan"></input></label>
        <label>Deep Dish<input type="radio" id="crust" name="crust" value="Deep Dish"></input></label>
      </fieldset>
    </div>
  </div>
  <div id="middleMenuDiv">
    <div id="meatDiv">
      <fieldset>
        <legend>Meats</legend>
        <table>
          <tr>
            <td><labe><input type="checkbox" id="pepperoni" name="meats" value="Pepperoni" />Pepperoni</labe></td>
            <td><labe><input type="checkbox" id="chicken" name="meats" value="Chicken" />Chicken</labe></td>
            <td><labe><input type="checkbox" id="ham" name="meats" value="Ham" />Ham</labe></td>
          </tr>
          <tr>
            <td><labe><input type="checkbox" id="hamburger" name="meats" value="Hamburger" />Hamburger</labe></td>
            <td><labe><input type="checkbox" id="sausage" name="meats" value="Sausage" />Sausage</labe></td>
            <td><labe><input type="checkbox" id="anchovies" name="meats" value="Anchovies" />Anchovies</labe></td>
          </tr>
          <tr>
            <td><labe><input type="checkbox" id="bacon" name="meats" value="Bacon" />Bacon</labe></td>
            <td colspan="2">&nbsp </td>
          </tr>
        </table>
      </fieldset>
    </div>
    <div id="veggieDiv">
      <fieldset>
        <legend>Veggies & Fruit</legend>
        <table>
          <tr>
            <td><label><input type="checkbox" id="onion" name="meats" value="Onion" />Onion</label></td>
            <td><label><input type="checkbox" id="mushroom" name="meats" value="Mushroom" />Mushroom</label></td>
            <td><label><input type="checkbox" id="tomato" name="meats" value="Tomato" />Tomato</label></td>
          </tr>
          <tr>
            <td><label><input type="checkbox" id="pineapple" name="meats" value="Pineapple" />Pineapple</label></td>
            <td><label><input type="checkbox" id="greenpepper" name="meats" value="Green Pepper" />Green Pepper</label></td>
            <td><label><input type="checkbox" id="jalapeno" name="meats" value="Jalapeno" />Jalapeno</label></td>
          </tr>
          <tr>
            <td><label><input type="checkbox" id="blackolive" name="meats" value="Black Olive" />Black Olive</label></td>
            <td><label><input type="checkbox" id="bananapepper" name="meats" value="Banana Pepper" />Banana Pepper</label></td>
            <td><label><input type="checkbox" id="greenolive" name="meats" value="Green Olive" />Green Olive</label></td>
          </tr>
        </table>
      </fieldset>
    </div>
  </div>
  <div id="lowerMenuDiv">
    <div id="billingInfo">
      <fieldset>
        <legend>Billing Information</legend>
        <table>
          <tr>
            <td colspan="1"><label for="billingname">Name:</label></td>
            <td colspan="5"><input type="text" id="billingname" name="billingname" /></td>
          </tr>
          <tr>
             <td colspan="1"><label for="billingaddress">Address:</label></td>
             <td colspan="5"><input type="text" id="billingaddress" name="billingaddress" /></td>
          </tr>
          <tr>
            <td><label for="billingcity">City:</label></td>
            <td><input type="text" id="billingcity" name="billingcity" /></td>
            <td><label for="billingstate">State:</label></td>
            <td><input type="text" id="billingstate" name="billingstate" /></td>
            <td><label for="billingzip">Zip:</label></td>
            <td><input type="text" id="billingzip" name="billingzip" /></td>
          </tr>
          <tr>
            <td colspan="1"><label for="billingemail">E-Mail:</label></td>
            <td colspan="5"><input type="text" id="billingemail" name="billingemail" /></td>
          </tr>
          <tr>
            <td></td>
          </tr>
          <tr>
            <td></td>
          </tr>
        </table>
      </fieldset>
    </div>
    <div id="shippingInfo">
      <fieldset>
        <legend>Shipping Information</legend>
        <table>
          <tr>
            <td colspan="1"><label for="shippingname">Name:</label></td>
            <td colspan="5"><input type="text" id="shippingname" name="shippingname" /></td>
          </tr>
          <tr>
            <td colspan="1"><label for="shippingaddress">Address:</label></td>
            <td colspan="5"><input type="text" id="shippingaddress" name="shippingaddress" /></td>
          </tr>
          <tr>
            <td><label for="shippingcity">City:</label></td>
            <td><input type="text" id="shippingcity" name="shippingcity" /></td>
            <td><label for="shippingstate">State:</label></td>
            <td><input type="text" id="shippingstate" name="shippingstate" /></td>
            <td><label for="shippingzip">Zip:</label></td>
            <td><input type="text" id="shippingzip" name="shippingzip" /></td>
          </tr>
          <tr>
            <td colspan="1"><label for="shippingemail">E-Mail:</label></td>
            <td colspan="5"><input type="text" id="shippingemail" name="shippingemail" /></td>
          </tr>
          <tr>
            <td></td>
          </tr>
          <tr>
            <td></td>
          </tr>
        </table>
      </fieldset>
    </div>
  </div>
  <div id="submitDiv">
    <input type="submit" value="Order It!" />
    <input type="reset" value="Reset" />
  </div>
  <div id="footerDiv">
  </div>
</div>
</body>
</html>

