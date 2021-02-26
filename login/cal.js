var eventtype = new Array();
 eventtype["wedding"]=20000;
 eventtype["farewell"]=25000;
 eventtype["birthday"]=30000;
 
 function etype()
{
    var e1=0;
    //Get a reference to the form id="cakeform"
    var theForm = document.forms["form"];
    //Get a reference to the select id="filling"
     var e2 = theForm.elements["eventype"];
 
    //set cakeFilling Price equal to value user chose
    //For example filling_prices["Lemon".value] would be equal to 5
    e1 = eventtype[e2.value];
 
    //finally we return cakeFillingPrice
    return e1;
}

 var eventplc = new Array();
 eventplc["Royalpalace"]=21000;
 eventplc["tajhotel"]=24000;
 eventplc["oberoihotel"]=20000;
 eventplc["mysorepalace"]=70000;
 
 function eplc()
{
    var p1=0;
    //Get a reference to the form id="cakeform"
    var theForm = document.forms["form"];
    //Get a reference to the select id="filling"
     var p2 = theForm.elements["evntplc"];
 
    //set cakeFilling Price equal to value user chose
    //For example filling_prices["Lemon".value] would be equal to 5
    p1 = eventtype[p2.value];
 
    //finally we return cakeFillingPrice
    return p1;
}
 
 var light = new Array();
 light["normal"]=21000;
 light["delux"]=24000;
 light["royal"]=20000;
 
 
 function lght()
{
    var l1=0;
    //Get a reference to the form id="cakeform"
    var theForm = document.forms["form"];
    //Get a reference to the select id="filling"
     var l2 = theForm.elements["lght"];
 
    //set cakeFilling Price equal to value user chose
    //For example filling_prices["Lemon".value] would be equal to 5
    l1 = eventtype[l2.value];
 
    //finally we return cakeFillingPrice
    return l1;
}
 
 var flowers= new Array();
 flowers["normal"]=21000;
 flowers["delux"]=24000;
 flowers["royal"]=20000;
 
 function flws()
{
    var f1=0;
    //Get a reference to the form id="cakeform"
    var theForm = document.forms["form"];
    //Get a reference to the select id="filling"
     var f2 = theForm.elements["flw"];
 
    //set cakeFilling Price equal to value user chose
    //For example filling_prices["Lemon".value] would be equal to 5
    f1 = eventtype[f2.value];
 
    //finally we return cakeFillingPrice
    return f1;
}
 
 
 
 function Equi()
{
    var equip=0;
    //Get a reference to the form id="cakeform"
    var theForm = document.forms["form"];
    //Get a reference to the checkbox id="includecandles"
    var equi1 = theForm.elements["equi"];

    //If they checked the box set candlePrice to 5
    if(equi1.checked===true)
    {
        equip=5;
    }
    //finally we return the candlePrice
    return equip;
}

 
 function fod()
{
    var foodd=0;
    //Get a reference to the form id="cakeform"
    var theForm = document.forms["form"];
    //Get a reference to the checkbox id="includecandles"
    var food1 = theForm.elements["food[]"];

    //If they checked the box set candlePrice to 5
    if(food1.checked==true)
    {
        foodd=5;
    }
    //finally we return the candlePrice
    return foodd;
}

 function chairs()
{
    var ch=0;
    //Get a reference to the form id="cakeform"
    var theForm = document.forms["form"];
    //Get a reference to the checkbox id="includecandles"
    var ch1 = theForm.elements["chairs[]"];

    //If they checked the box set candlePrice to 5
    if(ch1.checked==true)
    {
        ch=5;
    }
    //finally we return the candlePrice
    return ch;
}


function getTotal()
{
    //Here we get the total price by calling our function
    //Each function returns a number so by calling them we add the values they return together
    var cakePrice = etype() + eplc() +
                           lght() +flws()+Equi()+fod()+chairs();
 
    //display the result
    document.getElementById('totalPrice').innerHTML =
                                      "Total Price  $"+cakePrice;
 
}
