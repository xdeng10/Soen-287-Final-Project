<?php
include('includes/header.php')
    ?>
    
 <main> 
 
 <h1> DIY Mask Builder</h1>
 <form method="post" action="mask_checkout.php">
  
 <div class="whole_container">
 

 
    <label><strong>Images</strong></label>
<select id="selection_box3" name="images">
   
    <option value="1" data-picture="animal/elephant.png" >Elephant</option>
    <option value="2" data-picture="animal/fox.png">Fox</option>
    <option value="3" data-picture="animal/gecko.png">Gecko</option>
    <option value="4" data-picture="animal/polarbear.png">Polarbear</option>
    <option value="5" data-picture="animal/rabbit.png">Rabbit</option>
    <option value="6" data-picture="elephant.png">More to come</option>
   
    
    
</select>
   
   <script>
     
     
     
     $('#selection_box3').change(function(){ //if the select value gets changed
   var imageSource = $(this).find(':selected').data('picture'); //get the data from data-picture attribute
         alert(imageSource);
   if(imageSource){ //if it has data
      $('#image-location').html('<img src="'+imageSource+'" style="width:200px;height:200px;">'); // insert image in div image-location
   } else {
      $('#image-location').html(''); //remove content from div image-location, thus removing the image
   }
})
     
     
     
  </script>
    
    
     

<div id="image-location" class="picture_container">
    
   
    
</div>
 
  
  
     
     
     
     
 
 
 
  

 
 
 
 
<div class="DIYmask_container">

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 648 604">
  <defs>
    <style>
      .cls-1 {
        fill: #fff;
      }
    </style>
  </defs>
  <g id="Layer_1" data-name="Layer 1">
    <ellipse class="cls-1" cx="324" cy="302" rx="458.2" ry="427.09"/>
    <path d="M466.68,368.19a658.7,658.7,0,0,0,251.67.18C634.45,407.57,550.56,407.23,466.68,368.19Z" transform="translate(-269 -73)"/>
    <path d="M495.54,416.88c32.78,10.13,64.1,19.47,97.1,19.5s64.55-9.19,96.5-19.21c-10.7,13.33-49.15,30.43-75.67,33.91C564.13,457.56,518,437.68,495.54,416.88Z" transform="translate(-269 -73)"/>
    <path d="M491.2,333.37a581.5,581.5,0,0,1,202.3,0C663.79,344.14,542.39,344.36,491.2,333.37Z" transform="translate(-269 -73)"/>
  </g>
  <g id="left-hole">
    <path class="cls-1" d="M418,369.38c-19.87-11.44-39.73-20.29-54.28-37-3.71-4.27-8-8.48-10.25-13.5-8.82-19.41,0-32.64,20.58-32.38,15.19.19,30.33,6.24,45.4,10.07,1.2.31,2.42,3.73,2.3,5.62-1.08,16.82-2.55,33.62-3.7,50.43C417.72,357.66,418,362.72,418,369.38Z" transform="translate(-269 -73)"/>
  </g>
  <g id="right-hole">
    <path class="cls-1" d="M769.45,367.86c-2.32-23.34-4.61-46.43-7-70,15.21-5.61,30.49-11.32,47-11.92,10.21-.36,19.63,3.19,24.4,12.19,4.93,9.31,1.07,18.32-5.5,26.31C814.2,341.77,788.94,360.53,769.45,367.86Z" transform="translate(-269 -73)"/>
  </g>
  <g id="mask_outline" data-name="mask outline">
    <path d="M592.73,503.5c-25.23-1-48.51-8.2-70.33-20.17-19.48-10.69-37.46-23.58-53-39.56-12.51-12.85-26.67-24.69-36.51-39.37-8.49-12.66-19.44-19.39-32-26.14-24.77-13.35-49.82-27.25-63.37-53.52-11.72-22.72-2.44-42.59,21.63-51.89,15.53-6,31.64-3.24,46,2.56,15.91,6.42,30.23,3.33,45.46-.31,38.84-9.3,77.68-18.64,116.74-27,28.06-6,55.55-.18,82.89,6.64,35.48,8.86,71.11,17.1,106.77,25.16,4.09.93,8.86-.74,13.24-1.58,13.88-2.67,27.65-7.16,41.62-7.88,18.06-.92,32.2,8.45,39.23,25.13,2.63,6.22,2.35,15.29-.12,21.72-8.37,21.9-24.8,37.09-45.08,48.34-13.85,7.68-27.73,15.33-41.47,23.22a12.65,12.65,0,0,0-4.44,5.26c-9.08,18-23.86,31.08-38.19,44.51q-13.14,12.3-27.09,23.72C673.21,480,649.21,492.94,622,499.18,612.42,501.38,602.5,502.1,592.73,503.5Z" transform="translate(-269 -73)"/>
  </g>
  <g id="mask-color">
    <path class="cls-1" d="M439.8,293.72c39.66-9.35,78.32-18.34,116.91-27.63a149.59,149.59,0,0,1,70.24-.48c39.56,9.31,79.1,18.69,119.3,28.2,1.68,22.48,3.69,44.79,4.92,67.15.76,13.67-4,25.76-12.84,36.38-27.1,32.73-57.66,61.39-96.92,78.93C605.71,492.21,570.27,490,535.54,472A242,242,0,0,1,470,421.84c-9.14-9.77-18.7-19.26-26.86-29.82-7.13-9.24-8.92-20.91-8.29-32.35C436.05,337.78,438.09,315.93,439.8,293.72Z" transform="translate(-269 -73)"/>
  </g>
</svg>

</div>

<div class="button_container">

<!----------------------- Color Changin SCRIPT -------------------->
<script>
    
function getColorPrimary(){
    alert("Inside primary color function");
  var selectBox = document.getElementById("selection_box");
var selectedValue = selectBox.options[selectBox.selectedIndex].value;
alert(selectedValue);
if(selectedValue == 1){
    
      let outline = document.getElementById('mask-color');
    
    for(j = 0; j < outline.childElementCount; j++){
        
        outline.children[j].setAttribute('style', 'fill: red');
        
    }
    
}else if (selectedValue == 2) {
    
    
    let outline = document.getElementById('mask-color');
    
    for(j = 0; j < outline.childElementCount; j++){
        
        outline.children[j].setAttribute('style', 'fill: blue');
        
    }
  
}else if (selectedValue == 3) {
    
    
    let outline = document.getElementById('mask-color');
    
    for(j = 0; j < outline.childElementCount; j++){
        
        outline.children[j].setAttribute('style', 'fill: green');
        
    }
  
}else if (selectedValue == 4) {
    
    
   let outline = document.getElementById('mask-color');
    
    for(j = 0; j < outline.childElementCount; j++){
        
        outline.children[j].setAttribute('style', 'fill: pink');
        
    }
  
}else if (selectedValue == 5) {
    
    
   let outline = document.getElementById('mask-color');
    
    for(j = 0; j < outline.childElementCount; j++){
        
        outline.children[j].setAttribute('style', 'fill: yellow');
        
    }
  
}else if (selectedValue == 6) {
    
    
   let outline = document.getElementById('mask-color');
    
    for(j = 0; j < outline.childElementCount; j++){
        
        outline.children[j].setAttribute('style', 'fill: purple');
        
    }
  
}else if (selectedValue == 7) {
    
    
   let outline = document.getElementById('mask-color');
    
    for(j = 0; j < outline.childElementCount; j++){
        
        outline.children[j].setAttribute('style', 'fill: orange');
        
    }
  
}else if (selectedValue == 8) {
    
    
   let outline = document.getElementById('mask-color');
    
    for(j = 0; j < outline.childElementCount; j++){
        
        outline.children[j].setAttribute('style', 'fill: black');
        
    }
  
}
    
    
    
    else{
    
    alert("another color");
}
    
}
    
function getColorSecondary(){
    alert("Inside Secondary color function");
  var selectBox = document.getElementById("selection_box2");
var selectedValue = selectBox.options[selectBox.selectedIndex].value;
alert(selectedValue);
if(selectedValue == 1){
    
      let outline = document.getElementById('mask_outline');
    
    for(j = 0; j < outline.childElementCount; j++){
        
        outline.children[j].setAttribute('style', 'fill: red');
        
    }
    
}else if (selectedValue == 2) {
    
    
    let outline = document.getElementById('mask_outline');
    
    for(j = 0; j < outline.childElementCount; j++){
        
        outline.children[j].setAttribute('style', 'fill: blue');
        
    }
  
}else if (selectedValue == 3) {
    
    
    let outline = document.getElementById('mask_outline');
    
    for(j = 0; j < outline.childElementCount; j++){
        
        outline.children[j].setAttribute('style', 'fill: green');
        
    }
  
}else if (selectedValue == 4) {
    
    
   let outline = document.getElementById('mask_outline');
    
    for(j = 0; j < outline.childElementCount; j++){
        
        outline.children[j].setAttribute('style', 'fill: pink');
        
    }
  
}else if (selectedValue == 5) {
    
    
   let outline = document.getElementById('mask_outline');
    
    for(j = 0; j < outline.childElementCount; j++){
        
        outline.children[j].setAttribute('style', 'fill: yellow');
        
    }
  
}else if (selectedValue == 6) {
    
    
   let outline = document.getElementById('mask_outline');
    
    for(j = 0; j < outline.childElementCount; j++){
        
        outline.children[j].setAttribute('style', 'fill: purple');
        
    }
  
}else if (selectedValue == 7) {
    
    
   let outline = document.getElementById('mask_outline');
    
    for(j = 0; j < outline.childElementCount; j++){
        
        outline.children[j].setAttribute('style', 'fill: orange');
        
    }
  
}else if (selectedValue == 8) {
    
    
   let outline = document.getElementById('mask_outline');
    
    for(j = 0; j < outline.childElementCount; j++){
        
        outline.children[j].setAttribute('style', 'fill: black');
        
    }
  
}
    
    
    
    else{
    
    alert("another color");
}
    
}
    
    </script>
    
    <!----------------------- END Color Changin SCRIPT -------------------->

<label><strong>Colors Primary</strong></label>
<select id="selection_box" name="mask_primary_color" onchange="getColorPrimary();">
   
    <option value="1">red</option>
    <option value="2">blue</option>
    <option value="3">green</option>
    <option value="4">pink</option>
    <option value="5">yellow</option>
    <option value="6">purple</option>
    <option value="7">orange</option>
    <option value="8">black</option>
    
    
</select>

<label><strong>Colors Outline</strong></label>
<select id="selection_box2" name="mask_secondary_color" onchange="getColorSecondary();">
   
    <option value="1">red</option>
    <option value="2">blue</option>
    <option value="3">green</option>
    <option value="4">pink</option>
    <option value="5">yellow</option>
    <option value="6">purple</option>
    <option value="7">orange</option>
    <option value="8">black</option>
    
    
</select>






</div>


</div>

    
         
         
         <input class='btn' type="submit" value="submit">
         
     </form>

</main> 


<?php 
    include('includes/footer.php')
    ?>