<?php include 'includes/ini.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kettle Corn Pizza</title>
<link rel="stylesheet" type="text/css" href="css/pizza.css" />

<script type="text/javascript" src="js/pizza.js">
</script>

</head>

<body>
<div id="outerContainer">
<?php include 'includes/header.php'; ?>
  <form id="pizzaForm" name="pizzaForm" action="ordersent.php" method="post" onsubmit="return checkform(this);">
  <input type="hidden" name="required" id="required" value="billingname,billingaddress,billingcity,billingstate,billingzip,billingemail,shippingname,shippingaddress,shippingcity,shippingstate,shippingzip,shippingemail" />
  <h1>Online Pizza Order Form</h1>
  <div id="upperMenuDiv">
    <div id="sizeDiv">
      <fieldset>
        <legend>Size</legend>
        <label>Small ($10)<input class="price" type="radio" id="small" name="size" value="10.00"></input></label>
        <label>Medium ($12)<input class="price" type="radio" id="medium" name="size" value="12.00"></input></label>
        <label>Large ($14)<input class="price" type="radio" id="large" name="size" value="14.00"></input></label>
      </fieldset>
    </div>
    <div id="crustDiv">
      <fieldset>
        <legend>Crust</legend>
        <label>Regular<input type="radio" id="regular" name="crust" value="Regular"></input></label>
        <label>Thin<input type="radio" id="thin" name="crust" value="Thin"></input></label>
        <label>Pan<input type="radio" id="pan" name="crust" value="Pan"></input></label>
        <label>Deep Dish<input type="radio" id="deep" name="crust" value="Deep Dish"></input></label>
      </fieldset>
    </div>
  </div>
  <div id="middleMenuDiv">
    <div id="meatDiv">
      <fieldset>
        <legend>Meats ($.75/ea)</legend>
        <table>
          <tr>
            <td><label><input class="price" type="checkbox" id="pepperoni" name="topping[]" value="Pepperoni" />Pepperoni</label></td>
            <td><label><input class="price" type="checkbox" id="chicken" name="topping[]" value="Chicken" />Chicken</label></td>
            <td><label><input class="price" type="checkbox" id="ham" name="topping[]" value="Ham" />Ham</labe></td>
          </tr>
          <tr>
            <td><label><input class="price" type="checkbox" id="hamburger" name="topping[]" value="Hamburger" />Hamburger</label></td>
            <td><label><input class="price" type="checkbox" id="sausage" name="topping[]" value="Sausage" />Sausage</label></td>
            <td><label><input class="price" type="checkbox" id="anchovies" name="topping[]" value="Anchovies" />Anchovies</label></td>
          </tr>
          <tr>
            <td><label><input class="price" type="checkbox" id="bacon" name="topping[]" value="Bacon" />Bacon</label></td>
            <td colspan="2">&nbsp </td>
          </tr>
        </table>
      </fieldset>
    </div>
    <div id="veggieDiv">
      <fieldset>
        <legend>Veggies & Fruit ($.75/ea)</legend>
        <table>
          <tr>
            <td><label><input class="price" type="checkbox" id="onion" name="topping[]" value="Onion" />Onion</label></td>
            <td><label><input class="price" type="checkbox" id="mushroom" name="topping[]" value="Mushroom" />Mushroom</label></td>
            <td><label><input class="price" type="checkbox" id="tomato" name="topping[]" value="Tomato" />Tomato</label></td>
          </tr>
          <tr>
            <td><label><input class="price" type="checkbox" id="pineapple" name="topping[]" value="Pineapple" />Pineapple</label></td>
            <td><label><input class="price" type="checkbox" id="greenpepper" name="topping[]" value="Green Pepper" />Green Pepper</label></td>
            <td><label><input class="price" type="checkbox" id="jalapeno" name="topping[]" value="Jalapeno" />Jalapeno</label></td>
          </tr>
          <tr>
            <td><label><input class="price" type="checkbox" id="blackolive" name="topping[]" value="Black Olive" />Black Olive</label></td>
            <td><label><input class="price" type="checkbox" id="bananapepper" name="topping[]" value="Banana Pepper" />Banana Pepper</label></td>
            <td><label><input class="price" type="checkbox" id="greenolive" name="topping[]" value="Green Olive" />Green Olive</label></td>
          </tr>
        </table>
      </fieldset>
    </div>
  </div>
    <div id="totalDiv">
    <p id="totalPrice"></p>
    <p id="try"></p>
  </div>
  <div id="lowerMenuDiv">
    <div id="billingInfo">
      <fieldset>
        <legend>Billing Information</legend>
        <table>
          <tr>
            <td colspan="1"><label for="billingname">Name:</label></td>
            <td colspan="5"><input type="text" id="billingname" name="billingname" /><span class="req">*</span></td>
          </tr>
          <tr>
             <td colspan="1"><label for="billingaddress">Address:</label></td>
             <td colspan="5"><input type="text" id="billingaddress" name="billingaddress" /><span class="req">*</span></td>
          </tr>
          <tr>
            <td><label for="billingcity">City:</label></td>
            <td><input type="text" id="billingcity" name="billingcity" /><span class="req">*</span></td>
            <td><label for="billingstate">State:</label></td>
            <td><input type="text" id="billingstate" name="billingstate" /><span class="req">*</span></td>
            <td><label for="billingzip">Zip:</label></td>
            <td><input type="text" id="billingzip" name="billingzip" /><span class="req">*</span></td>
          </tr>
          <tr>
            <td colspan="1"><label for="billingemail">E-Mail:</label></td>
            <td colspan="5"><input type="text" id="billingemail" name="billingemail" /><span class="req">*</span></td>
          </tr>
          <tr>
            <td colspan="2">Credit Card Type:</td>
            <td colspan="4"><label>Visa<input type="radio" id="visa" name="cctype" value="Visa"></input></label>
                <label>M/C<input type="radio" id="mc" name="cctype" value="Master Card"></input></label>
                <label>Amex<input type="radio" id="amex" name="cctype" value="American Express"></input></label></td>
          </tr>
          <tr>
            <td><label for="cardNumber">Card #:</label></td>
            <td colspan="5"><input type="text" id="cardNumber" name="cardNumber" /></td>
          </tr>
        </table>
      </fieldset>
    </div>
    <div id="shippingInfo">
      <fieldset>
        <legend>Shipping Information</legend>
        <table>
          <tr>
            <td colspan="6" class="same"><label><input type="checkbox" id="same" name="same" />Same as billing info</label></td>
          </tr>
          <tr>
            <td colspan="1"><label for="shippingname">Name:</label></td>
            <td colspan="5"><input type="text" id="shippingname" name="shippingname" /><span class="req">*</span></td>
          </tr>
          <tr>
            <td colspan="1"><label for="shippingaddress">Address:</label></td>
            <td colspan="5"><input type="text" id="shippingaddress" name="shippingaddress" /><span class="req">*</span></td>
          </tr>
          <tr>
            <td><label for="shippingcity">City:</label></td>
            <td><input type="text" id="shippingcity" name="shippingcity" /><span class="req">*</span></td>
            <td><label for="shippingstate">State:</label></td>
            <td><input type="text" id="shippingstate" name="shippingstate" /><span class="req">*</span></td>
            <td><label for="shippingzip">Zip:</label></td>
            <td><input type="text" id="shippingzip" name="shippingzip" /><span class="req">*</span></td>
          </tr>
          <tr>
            <td colspan="1"><label for="shippingemail">E-Mail:</label></td>
            <td colspan="5"><input type="text" id="shippingemail" name="shippingemail" /><span class="req">*</span></td>
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
  <div id="captchaDiv">
  		<img src="CaptchaSecurityImages.php?width=100&height=40&characters=5" />
		<label for="security_code">Security Code: </label><input id="security_code" name="security_code" type="text" />
  </div>
  <div id="submitDiv">
    <input type="submit" value="Order It!" />
    <input type="reset" value="Reset" />
  </div>
  </form>
  <div id="footerDiv">
    <p>Copyright &copy; 2011 Kettle Corn Pizza</p>
  </div>
</div>
</body>
</html>

