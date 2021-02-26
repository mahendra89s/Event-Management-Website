<?php
            
    
        
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>payment</title>
    <style type="text/css">
      body{
        font-family: Trebuchet MS;
        display: flex;
  width: 100%;
  height: 100%;
  background: #f4f4f4;
  justify-content: center;
  align-items: center;


      }
      .fixed-top{
        background-color: #04332b !important;

      }

      .fixed-top.scrolled {
        background-color:#04332b !important;
        transition: background-color 200ms linear;

      }
      

      .navbar-brand{
        font-size: 40px;
        border:solid;
        border-radius: 10px;
        padding:5px;

      }
 
      
/*
--- Checkout Panel
*/
.checkout-panel {
  display: flex;
  flex-direction: column;
  width: 940px;
  height: 400px;
  background-color: rgb(255, 255, 255);
  box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .2);
  margin-top:150px;
}

/* Panel Body */
.panel-body {
  padding: 45px 80px 0;
  
  
}

.title {
  font-weight: 700;
  margin-top: 0;
  margin-bottom: 40px;
  color: #2e2e2e;
}





.blue-border {
  border: 1px solid rgb(110, 178, 251);
}








/* Input Fields */
.input-fields {
  display: flex;
  justify-content: space-between;
}

.input-fields label {
  display: block;
  margin-bottom: 10px;
  color: #b4b4b4;
}
.textarea-flields{
  display: flex;
  justify-content: space-between;
}

.warning {
  border-color: #f62f5e !important;
}

.info {
  font-size: 12px;
  font-weight: 300;
  display: block;
  margin-top: 50px;
  opacity: .5;
  color: #2e2e2e;
}

div[class*='column'] {
  width: 382px;
}

input[type='text'],
input[type='password'] {
  font-size: 16px;
  width: 100%;
  height: 50px;
  padding-right: 40px;
  padding-left: 16px;
  color: rgba(46, 46, 46, .8);
  border: 1px solid rgb(225, 225, 225);
  border-radius: 4px;
  outline: none;
}

input[type='text']:focus,
input[type='password']:focus {
  border-color: rgb(119, 219, 119);
}

#date { background: url(img/icons_calendar_black.png) no-repeat 90%; }
#cardholder { background: url(img/icons_person_black.png) no-repeat 95%; }
#cardnumber { background: url(img/icons_card_black.png) no-repeat 95%; }
#verification { background: url(img/icons_lock_black.png) no-repeat 90%; }

.small-inputs {
  display: flex;
  margin-top: 20px;
  justify-content: space-between;
}

.small-inputs div {
  width: 182px;
}

/* Panel Footer */
.panel-footer {
  display: flex;
  width: 100%;
  height: 96px;
  padding: 0 80px;
  background-color: rgb(239, 239, 239);
  justify-content: space-between;
  align-items: center;
  margin-top: 19px;
}

/* Buttons */
.btn {
  font-size: 16px;
  width: 163px;
  height: 48px;
  cursor: pointer;
  transition: all .2s ease-in-out;
  letter-spacing: 1px;
  border: none;
  border-radius: 23px;
}

.back-btn {
  color: #f62f5e;
  background: #fff;
}

.next-btn {
  color: #fff;
  background: #f62f5e;
}

.btn:focus {
  outline: none;
}

.btn:hover {
  transform: scale(1.1);
}

@media (max-width: 800px) {
    .row {
    flex-direction: column-reverse;
  }
  }
  
  
.column-2{
    padding-left: 20px;
}

    </style>
    <body>
      <div class="parallax">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top  scrolling-navbar">
      <a class="navbar-brand bg-gradient-success"  href="landingpg.html" id="demo" onmouseover="mouseOver()" onmouseout="mouseOut()"> Event Planner </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link " href="landingpg.html">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="eventbooking.html">Create Event</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#">View Booked Event</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="aboutus.html">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contactus.html">Contact Us</a>
        </li>

      </ul>
      
    </div>
    </nav>
  
    
  </div>
  
        
  <div class="checkout-panel">
        <div class="panel-body">
            
                <h2 class="title">Checkout</h2>
                <div class="input-fields">
                    <div class="row">
                  <div class="column-1">
                    <label for="cardholder">Cardholder's Name</label>
                    <input type="text" id="cardholder" />
          
                    <div class="small-inputs">
                      <div>
                        <label for="date">Expiry Date</label>
                        <input type="text" id="date" placeholder="MM / YY" />
                      </div>
          
                      <div>
                        <label for="verification">CVV </label>
                        <input type="password" maxlength="3" id="verification"/>
                      </div>
                    </div>
          
                  </div>
                  <div class="column-2">
                    <label for="cardnumber">Card Number</label>
                    <input type="text" maxlength="16" id="cardnumber"/>
          
                    <span class="info">* CVV or CVC is the card security code, unique three digits number on the back of your card separate from its number.</span>
                  </div>
                </div>
                </div>
              </div>
          
            
            
            
            <div class="panel-footer">
                    <button class="btn back-btn" onclick="parent.location='BookingAddress.html'">Back</button>
                    <button class="btn next-btn" type="submit" name="submit">Next Step</button>
                  </div>
            </div>

          
            
            

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript">
  function mouseOver() {
    document.getElementById("demo").style.color = "#607D8B";
      }

  function mouseOut() {
    document.getElementById("demo").style.color = "white";
      }

  $(function () {
    $(document).scroll(function () {
      var $nav = $(".fixed-top");
      $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    });
  });
  </script>
<script>
        $(document).ready(function() {
      
      
      
      // Validation
      var $cardInput = $('.input-fields input');
      
      $('.next-btn').on('click', function(e) {
      
        $cardInput.removeClass('warning');
      
        $cardInput.each(function() {
           var $this = $(this);
      
           if (!$this.val()) {
             $this.addClass('warning');
           }
        });
      
      });
      
      });
      
        </script>
</body>
</html>
