// JavaScript Document

function Price() {
  price = document.getElementsByClassName('price');
  for (p=0;p<price.length;p++) {
  price[p].onclick=function() {
    var pizzaPrice = 0;
    var size = document.getElementsByName("size");
    for (i=0;i<size.length;i++) {
	  if(size[i].checked) {
		  pizzaPrice = size[i].value;
	  }
    }
    var topping = document.getElementsByName("topping[]");
    var toppingPrice = 0;
    for (x=0;x<topping.length;x++) {
	  if(topping[x].checked){
		  toppingPrice = (toppingPrice += .75);
	  }
    }
    totalPrice = eval(pizzaPrice) + eval(toppingPrice);
    totalPrice = roundIt(totalPrice * 1.06, 2);
    document.getElementById('totalPrice').innerHTML="Total Price: $"+totalPrice+" (Including tax)";
	document.getElementById('try').innerHTML="<input type='hidden' id='totalPrice' name='totalPrice' value='" + totalPrice + "' />";
  }
  }
}
// math to round totals
function roundIt(value, places){
	return (parseInt(value * Math.pow(10,places)))/(Math.pow(10,places));
}
function copyAddress() {
	sameInfo = document.getElementById('same');
	sameInfo.onclick=function() {
	document.pizzaForm.shippingname.value=document.pizzaForm.billingname.value;
	document.pizzaForm.shippingaddress.value=document.pizzaForm.billingaddress.value;
	document.pizzaForm.shippingcity.value=document.pizzaForm.billingcity.value;
	document.pizzaForm.shippingstate.value=document.pizzaForm.billingstate.value;
	document.pizzaForm.shippingzip.value=document.pizzaForm.billingzip.value;
	document.pizzaForm.shippingemail.value=document.pizzaForm.billingemail.value;
	}
}

//end of roundIt()
function checkform(of)
{
// Test if DOM is available and there is an element called required
  if(!document.getElementById || !document.createTextNode){return;}
  if(!document.getElementById('required')){return;}

// Define error messages and split the required fields
	var errorID='errormsg';
	var errorClass='error'
	var errorMsg='Please enter or change the fields marked with a ';
	var errorImg='images/alert.gif';
	var errorAlt='Error';
	var errorTitle='This field has an error!';
	var reqfields=document.getElementById('required').value.split(',');

// Cleanup old mess
	// if there is an old errormessage field, delete it
	  if(document.getElementById(errorID))
      {
        var em=document.getElementById(errorID);
        em.parentNode.removeChild(em);
      }
// remove old images and classes from the required fields
      for(var i=0;i<reqfields.length;i++)
      {
        var f=document.getElementById(reqfields[i]);
          if(!f){continue;}
          if(f.previousSibling && /img/i.test(f.previousSibling.nodeName))
          {
            f.parentNode.removeChild(f.previousSibling);
          }
          f.className='';
      }
// loop over required fields
      for(var i=0;i<reqfields.length;i++)
      {
// check if required field is there
        var f=document.getElementById(reqfields[i]);
          if(!f){continue;}
// test if the required field has an error, 
// according to its type
       switch(f.type.toLowerCase())
       {
         case 'text':
           if(f.value=='' && f.id!='email'){cf_adderr(f)}							
// email is a special field and needs checking
           if(f.id=='email' && !cf_isEmailAddr(f.value)){cf_adderr(f)}							
             break;
         case 'textarea':
           if(f.value==''){cf_adderr(f)}							
             break;
         case 'checkbox':
           if(!f.checked){cf_adderr(f)}							
             break;
         case 'select-one':
           if(!f.selectedIndex && f.selectedIndex==0){cf_adderr(f)}							
             break;
       }
     }
     return !document.getElementById(errorID);

/* Tool methods */
    function cf_adderr(o)
    {
// create image, add to and colourise the error fields
      var errorIndicator=document.createElement('img');
      errorIndicator.alt=errorAlt;
      errorIndicator.src=errorImg;
      errorIndicator.title=errorTitle;
      o.className=errorClass;
      o.parentNode.insertBefore(errorIndicator,o);

// Check if there is no error message
      if(!document.getElementById(errorID))
      {
// create errormessage and insert before submit button
        var em=document.createElement('div');
        em.id=errorID;
        var newp=document.createElement('p');
        newp.appendChild(document.createTextNode(errorMsg))
// clone and insert the error image
        newp.appendChild(errorIndicator.cloneNode(true));
        em.appendChild(newp);
// find the submit button 
        for(var i=0;i<of.getElementsByTagName('input').length;i++)
        {
          if(/submit/i.test(of.getElementsByTagName('input')[i].type))
          {
            var sb=of.getElementsByTagName('input')[i];
              break;
          }
        }
        if(sb)
        {
          sb.parentNode.insertBefore(em,sb);
        }
      } 
    }
    function cf_isEmailAddr(str) 
    {
      return str.match(/^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/);
    }
  }


window.onload=function()
  {
	  Price();
	  copyAddress();
  }