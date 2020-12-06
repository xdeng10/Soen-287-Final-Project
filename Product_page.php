<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>COVAID | YOUR LIFESAVING SHOP</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
  </head> 
  <body>
    <div class ="header" >
      <div class="topBar">
        <div class="navigation">
          <div class = "logo"> 
            <img ID="cLogo" src="Other Images/logo.jpg">
          </div>
          <nav>
            <ul>
              <li><a href="">Home</a></li>
              <li><a href="">SHOP</a></li>
              <li><a href="">FAQ</a></li>
              <li><a href="">CONTACT</a></li>
              <li><a href="">DONATE</a></li>
              <span class ="right-panel">
                <li><a href=""><img ID="cLogo" src="Icons/search.svg" style="margin-left: 30px"></a></li>
                <li><a href=""><img ID="cLogo" src="Icons/user.svg"></a></li>
                <li><a href=""><img ID="cLogo" src="Icons/shopping-cart.svg" ></a></li>
              </span>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <!----single products-->
    <div class="indiProduct">
      <div class="defaultRow">
        <div class="caption">
          <img ID="p5" src="Product Images/product5.jpg">
          <div class="complementary-images">
            <div class="sub-image">
              <img class="comp-image" src="Product Images/product5a.png">
            </div>
            <div class="sub-image">
              <img class="comp-image" src="Product Images/product5b.png">
            </div>
            <div class="sub-image">
              <img class="comp-image" src="Product Images/product5c.png">
            </div>
            <div class="sub-image">
              <img class="comp-image" src="Product Images/product5d.png">
            </div>
          </div>
        </div>
        <div class="caption">
          <p>Protective Wear</p>
          <h1> Disposable Overall (MEN) </h1>
          <h4>$15.50</h4>
          <select>
            <option>Size </option>
            <option>Small </option>
            <option>Medium </option>
            <option>Large </option>
            <option>X-Large </option>
            <input type="number" value="1">
            <a href="" class="button"> Add item to cart</a>
            <h3>Product Information</h3>
            <br>
            <p>The Lioncare® disposable overall is suitable for all areas where extensive protective clothing is required, such as in decontamination or when handling hazardous chemicals, particular matter or infectious agents.
            </p>
          </select>
        </div>
      </div>
    </div>
    <div class="submenu">
      <div class="productRow">
        <h2>Related Items</h2>
        <p> Find more </p>
      </div>
    </div>
    <div class= "submenu">
      <div class="defaultRow">
        <div class="single-products">
          <img src="Product Images/Product1.jpg">
          <h4>Hand Sanitizer 500 ml</h4>
          <div class="rating">
            <img src="Icons/star-solid.svg">
            <img src="Icons/star-solid.svg">
            <img src="Icons/star-solid.svg">
            <img src="Icons/star-solid.svg">
            <img src="Icons/star-solid.svg">
          </div>
          <p>$10.50</p>
        </div>
        <div class="single-products">
          <img src="Product Images/Product2.jpg">
          <h4>AiroDoctor Air Purifier</h4>
          <div class="rating">
            <img src="Icons/star-solid.svg">
            <img src="Icons/star-solid.svg">
            <img src="Icons/star-solid.svg">
            <img src="Icons/star-solid.svg">
            <img src="Icons/star-half-alt-solid.svg">
          </div>
          <p>$299.00</p>
        </div>
        <div class="single-products">
          <img src="Product Images/Product3.jpg">
          <h4>KIMTECH SCIENCE Precision Wipes</h4>
          <div class="rating">
            <img src="Icons/star-solid.svg">
            <img src="Icons/star-solid.svg">
            <img src="Icons/star-solid.svg">
            <img src="Icons/star-regular.svg">
            <img src="Icons/star-regular.svg">
          </div>
          <p>$2.99</p>
        </div>
        <div class="single-products">
          <img src="Product Images/Product4.jpg">
          <h4>Surgical Masks </h4>
          <div class="rating">
            <img src="Icons/star-solid.svg">
            <img src="Icons/star-solid.svg">
            <img src="Icons/star-solid.svg">
            <img src="Icons/star-solid.svg">
            <img src="Icons/star-solid.svg">
          </div>
          <p>$20.00</p>
        </div>
      </div>
    </div>
    <!----footer-->
    <div class="footer">
      <div class="topBar">
        <div class="defaultRow">
          <div class="footer1">
            <h3>Get our NEW APP </h3>
            <p>Avalaible on both IOS and Andriod platforms</p>
            <div class="appImages">
              <img src="Other Images/appstore.png">
              <img src="Other Images/playstore.png">
            </div>
          </div>
          <div class="footer2">
            <img src="Other Images/logo.jpg">
            <p>We aim to provide  high quality medical supplies delivered in the fastest time possible</p>
          </div>
          <div class="footer3">
            <h3>Shop</h3>
            <ul>
              <li>New Arrivals</li>
              <li>Best Sellers</li>
              <li>Sales</li>
              <li>Visit Us</li>
            </ul>
          </div>
          <div class="footer4">
            <h3>More</h3>
            <ul>
              <li>My Account</li>
              <li>Custom Orders</li>
              <li>Size Guides</li>
              <li>Careers</li>
              <li>Contact</li>
            </ul>
          </div>
        </div>
        <hr>
        <p class="copyright">COVAID - ALL RIGHTS RESERVED 2020 </p>
      </div>
    </div>
    <script> 
      var mainImage = document.getElementById("p5") ;
      var subImage = document.getElementsByClassName("comp-image");
      
      
      subImage[0].onclick =function(){
        mainImage.src = subImage[0].src;
        
      }
      subImage[1].onclick =function(){
        mainImage.src = subImage[1].src;
        
      }
      subImage[2].onclick =function(){
        mainImage.src = subImage[2].src;
        
      }
      subImage[3].onclick =function(){
        mainImage.src = subImage[3].src;
        
      }
      
      
      
        
    </script>
  </body>
</html>