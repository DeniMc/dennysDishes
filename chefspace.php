<?php
// (A) THIS IS A PROTECTED DUMMY PAGE
require "protect.php";

// (B) HTML AS USUAL ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="chefspace.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="swiper-bundle.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Page</title>
  </head>
  <body>
    <div class="container">
      <section class="landing-page">
        <header class="post-header">
          <div class="logo"></div>
          <h1>HomeMeal Chef Space</h1>
          <div class="login-form">
            <form method="post" class="login-form">
              <input type="hidden" name="logout" value="1" />
              <input type="submit" value="Logout" />
            </form>
          </div>
          
          <div id="currentUser">
    <?=$_SESSION["user"]?>
        </header>

        <main class="post-main">
          <div class="content-card post-board">
            <h2><a href="#creating-menu">Creating your Menu</a></h2>
            <ul>
              <li><a href="#HomeMealGPT">HomeMeal GPT Helper</a></li>
              <li>Editing an Existing Dish</li>
              <li>Chef Availability vs Dish Availability</li>
              <li>Limiting Dish availability</li>
              <li>Taking Menu Photos</li>
              <li><a href="#adding-dishes">Adding Dishes / Creating Menu</a></li>
              <li>Adding a new Menu item from template</li>
              
            </ul>
          </div>

          <div class="content-card post-board">
            <h2><a href="#essential-downloads">Essential Downloads</a></h2>
            <ul>
              <li>
                Kitchen Cleaning Timetable
              </li>
              <li>Fridge and Freezer temperature record</li>
              <li>Food Safety Labelling and Timestamp</li>
              <li>Hygiene checklist for kitchen</li>
              <li><a href="#reheating">Reheating Food upon delivery</a></li>
            </ul>
          </div>

          <div class="content-card post-board">
            <h2><a href="#marketing">Marketing</a></h2>
            <ul>
              <li>
                Creating your own Marketing Content
              </li>
              <li><a href="#order-flyers">Flyer Ordering Form</a></li>
              
            </ul>
          </div>

          <div class="content-card post-board">
           <h2><a href="#section4-post">Orders and Delivery</a></h2>
            <ul>
              <li>Checking and Managing Orders</li>
              <li>Setting your Availability</li>
              <li>Checking your Orders</li>
              <li>Managing your dish capacity </li>
              <li>Customer Cancellations</li>
              <li>Preparing and Packaging your orders</li>
              <li>Restaurant Depot</li>
              <li>Preparing and Cooling your food</li>
              <li>Packaging your food for drop off</li>
              <li>Printing your Order labels</li>
              <li>How delivery works</li>
            </ul>
          </div>

          <div class="content-card post-board">
            <h2><a href="#stripe-payments">Stripe and Payments</a></h2>
            <ul>
              <li><a href="#payments-with-stripe">Setting up payments with Stripe</a>
                
              </li>
              <li><a href="#stripe-FAQ">Stripe FAQs</a></li>
              
            </ul>
          </div>
          <div class="content-card post-board">
            <h2>Cooking guidelines</h2>
            <ul>
              <li>
               Responsible Cooking Guidelines
              </li>
             
              
            </ul>
          </div>

          <div class="content-card post-board">
            <h2>Setting up Profile</h2>
            <ul>
              <li>
               Adding Photograph
              </li>
              <li>Adding Biography</li>
              <li> <a href="#profileGPT">HomeMeal GPT Helper</a></li>
             
              
            </ul>
          </div>
        </main>
        <div class="space-filler"></div>
        <footer class="post-footer">
          <div class="waves">
            <div class="wave" id="wave1"></div>
            <div class="wave" id="wave2"></div>
            <div class="wave" id="wave3"></div>
            <div class="wave" id="wave4"></div>
          </div>
          <ul class="social_icons">
            <li>
              <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
            </li>
            <li>
              <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
            </li>
            <li>
              <a href="#"><ion-icon name="logo-linkedin"></ion-icon></a>
            </li>
            <li>
              <a href="https://www.youtube.com/@homemealdeal4332"><ion-icon name="logo-youtube"></ion-icon></a>
            </li>

            <ul class="menu">
              <li><a href="#">Home</a></li>
              <li><a href="https://homemeal.de/impressum/">Impressum</a></li>
              <li><a href="https://homemeal.de/become-a-chef/">Become a Chef</a></li>
              <li><a href="#">Team</a></li>
             
            </ul>
            <p>@2021 HomeMeal GmbH | All Rights Reserved</p>
          </ul>
        </footer>
      </section>
      <section class="one post-one post-section">
        <h1 id="creating-menu">Creating your Menu</h1>

        <div class="creating-menu-content">

        <p>When you are beginning to think about your menu we encourage you to consider multiple points; what are you confident in making, what represents you, what can you offer that a customer is unlikely to make for themselves and what ingredients are readily available.</p>
        <p>With that in mind here are some tips that our existing chefs have passed on to us as they started their chefs journey.</p>

        <p>
  <a href="./docs/postboarding/createMenu/HomeMeal_How_To_Create_Menu.pdf"
    >How to Create a Menu pdf</a
  >
</p>
        <p>
  <a href="./docs/postboarding/createMenu/HomeMeal_How_To_Write_Description.pdf"
    >HomeMeal How to Write Meal Description pdf</a
  >
</p>


<p><strong>Create dishes with overlapping ingredients.</strong><br>
This can help make your cooking process more efficient across multiple orders.<br>
<strong>Offer portion sizes that can feed between single and 'family size' portions.</strong><br>
Some customers order HomeMeal meals to feed their family, or to meal prep during their work week. You might consider adding larger or 'family size' versions of some menu items to allow for larger orders.</p><br>
<h3>Choose dishes that can travel and reheat well.</h3>
<p>Remember that your food will be cooled and refrigerated in HomeMeal bags when it is delivered to your customers. You should ensure your food will maintain its quality after refrigeration and, where applicable, reheating.</p> <br>
<h3>Consider adding holiday or seasonal items, where applicable.</h3>
<p>We have found that these can be very popular with customers.</p><br>
<p>While it's important to think about the things that you can do it is equally as important to consider the things that you cannot do. The following points are important for you to keep in mind at all times when creating your menu and adding or amending dishes.</p>
<h3>Things to avoid on your menu</h3><br>
<strong><h5>No raw seafood or shellfish.</h5></strong><br>
<p> Due to food safety considerations, we do not allow dishes containing raw seafood items on our platform. However, we do allow cooked seafood, and products like bonito flakes, oyster sauce, fish sauce, and shrimp paste.
<ul>
  	<li>No ice cream or other frozen foods.</li>
	 <li>No uncooked food, such as raw dough or batter, where the cooking process must be finished by the customer. </li>
		<li>No alcoholic, hemp, or cannabis food items.</li> 
		<li>No options for customisation or special requests.</li>
  </ul>
  
HomeMeal does not support the ability for customers to make any special requests when ordering a dish from your menu. </p>
<p> Please do not use descriptions such as "can be made vegetarian upon request" or "choose your own protein/spice level." We encourage you to feature these alternative options (different spice levels, different proteins, different sizes) as separate menu items to provide more variety for customers.</p>

<h2>How to write a dish description</h2><br>
<p>We have all eaten in restaurants where the menu has simply included a list of ingredients and you are sat feeling uninspired. Keep that in mind when you start thinking about your dish descriptions - think of this both as an opportunity to show off your culinary skills and a chance to show why this dish is special.</p><br>
<h3>Bone-In South Indian Chicken Curry</h3>
<p> This spicy, aromatic curry features slow-roasted chicken and pan-fried crispy chickpeas served in a rich, creamy sauce.
This dish was one of the first taught to me by my grandmother, has been served at family occasions for longer than I can remember and is the dish all my friends ask for when coming to visit!</p><br>
<p> To make the meal complete this curry comes with two pieces of naan bread, a portion of white rice and a mango chutney dip.</p><br>
<p>Let's break down the above example.<br>
The name:<br>
Bone-In South Indian Chicken Curry. <em>Please capitalise the first letter of each word</em><br>
The description:<br>
Explain your dish while mentioning the following aspects:<br>
<ul>
  <li>Top two flavours (examples: tangy, sweet, spicy, aromatic)</li>
	<li>Consistency (examples: juicy, crunchy, smooth, creamy, rich)</li>
	<li>Top two ingredients used (examples: slow roasted chicken, chickpeas)</li>
	<li>	A personal or historical fact about the dish (example: This recipe was handed down from my mother and is a family favourite!)</li>	
	<li>Please specify if the dish will include any garnishes or sides. (Example: Dish will come with 2 slices of lime, 3 pieces of roti, a bowl of rice, a side of homemade ketchup, etc)</li>
		<li>Customers will NOT be able to modify their dish. Please do not give an option such as "spicy or not spicy", "choose your protein", "this dish can be made vegan", etc. in the description section.</li>
	<li>Please do NOT make health claims such as "high protein dish", "will heal you", "very healthy", "will make you lose weight", etc.</li>
</ul>
<br>
This description is a template. Please use as a guideline and update this to make it your own.<br>
If you find you are struggling with this task we now have the very helpful HomeMealGPT here</p>

</div>
        
  <div class="homeMealGPT-router">
        
   <p id="meal-GPT">Create perfect Meal Descriptions with our AI Description Generator</p>
        <h2 class="HomeMealGPT" id="HomeMealGPT"><a href="./GPT.html">HomeMealGPT Helper</a></h2>

        </div>

     
<h2 class="sub-heads" id="add-meals">Adding Meals to your Menu</h2>

<p id="adding-meals-pdf">
  <a href="./docs/postboarding/createMenu/HomeMeal_Adding_Meals.pdf"
    >HomeMeal Adding Meals pdf</a
  >
</p>

<!-- Card Slider 23 Add Meal Screen shots -->


<div class="meals-slide-container swiper">
  <div class="slide-content">
      <div class="slide-wrapper swiper-wrapper">
         
          <div class="meals-card swiper-slide">
              <div class="meals-image-content">
                  <span class="meals-overlay"></span>
                  <div class="meals-card-image">
                      <img src="./images/addingMeals/adding-meals1.png" alt="1st screenshot">
                  </div>
              </div>
              <div class="meals-card-content">
                  <span class="slider-number">1</span>
                  
                  <p>Click on the ‘+’ in the upper right corner</p>

              </div>
          </div>
         
          <div class="meals-card swiper-slide">
              <div class="meals-image-content">
                  <span class="meals-overlay"></span>
                  <div class="meals-card-image">
                      <img src="./images/addingMeals/adding-meals2.png" alt="2nd screenshot">
                  </div>
              </div>
              <div class="meals-card-content">
                  <span class="slider-number">2</span>
                  
                  <p>Click on Meal Description</p>

              </div>
          </div>

          <div class="meals-card swiper-slide">
              <div class="meals-image-content">
                  <span class="meals-overlay"></span>
                  <div class="meals-card-image">
                      <img src="./images/addingMeals/adding-meals3.png" alt="3rd screenshot">
                  </div>
              </div>
              <div class="meals-card-content">
                  <span class="slider-number">3</span>
                  
                  <p>In ‘Name of the Meal’ add the name of the dish.<br><br>
Click on the green camera (to the right of the ‘Name of the Meal’ textbox) to add a photograph of the dish.</p>

              </div>
          </div>

          <div class="meals-card swiper-slide">
              <div class="meals-image-content">
                  <span class="meals-overlay"></span>
                  <div class="meals-card-image">
                      <img src="./images/addingMeals/adding-meals4.png" alt="4th screenshot">
                  </div>
              </div>
              <div class="meals-card-content">
                  <span class="slider-number">4</span>
                  
                  <p>Select a photo from the Recent Images gallery.<br><br>
For help taking the perfect photograph see:
<em>Chef Support Platform > Creating Your Menu > Taking the Perfect Photo</em></p>

              </div>
          </div>

          <div class="meals-card swiper-slide">
              <div class="meals-image-content">
                  <span class="meals-overlay"></span>
                  <div class="meals-card-image">
                      <img src="./images/addingMeals/adding-meals5.png" alt="5th screenshot">
                  </div>
              </div>
              <div class="meals-card-content">
                  <span class="slider-number">5</span>
                  
                  <p>You can modify the photograph - turning, cutting, zooming.<br><br>
Confirm the editing by clicking on the tick in the top right corner.</p>

              </div>
          </div>

          <div class="meals-card swiper-slide">
              <div class="meals-image-content">
                  <span class="meals-overlay"></span>
                  <div class="meals-card-image">
                      <img src="./images/addingMeals/adding-meals6.png" alt="6th screenshot">
                  </div>
              </div>
              <div class="meals-card-content">
                  <span class="slider-number">6</span>
                  
                  <p>Add a description of the dish.<br><br>
For further guidance on writing descriptions see: <em>Chef Support Platform > Creating Your Menu >
Better Descriptions</em></p>
              </div>
          </div>
         
          <div class="meals-card swiper-slide">
              <div class="meals-image-content">
                  <span class="meals-overlay"></span>
                  <div class="meals-card-image">
                      <img src="./images/addingMeals/adding-meals7.png" alt="7th screenshot">
                  </div>
              </div>
              <div class="meals-card-content">
                  <span class="slider-number">7</span>
                  
                  <p>Select Additives</p>
              </div>
          </div>

          <div class="meals-card swiper-slide">
              <div class="meals-image-content">
                  <span class="meals-overlay"></span>
                  <div class="meals-card-image">
                      <img src="./images/addingMeals/adding-meals8.png" alt="8th screenshot">
                  </div>
              </div>
              <div class="meals-card-content">
                  <span class="slider-number">8</span>
                  
                  <p>Select Allergenes</p>
              </div>
          </div>

          <div class="meals-card swiper-slide">
              <div class="meals-image-content">
                  <span class="meals-overlay"></span>
                  <div class="meals-card-image">
                      <img src="./images/addingMeals/adding-meals9.png" alt="9th screenshot">
                  </div>
              </div>
              <div class="meals-card-content">
                  <span class="slider-number">9</span>
                  
                  <p>Select Dietary Preferences</p>
              </div>
          </div>

          <div class="meals-card swiper-slide">
              <div class="meals-image-content">
                  <span class="meals-overlay"></span>
                  <div class="meals-card-image">
                      <img src="./images/addingMeals/adding-meals10.png" alt="10th screenshot">
                  </div>
              </div>
              <div class="meals-card-content">
                  <span class="slider-number">10</span>
                  
                  <p>Select Cuisine.<br><br>
Click on Save in the top right corner to prevent any loss of effort.</p>
              </div>
          </div>

          <div class="meals-card swiper-slide">
              <div class="meals-image-content">
                  <span class="meals-overlay"></span>
                  <div class="meals-card-image">
                      <img src="./images/addingMeals/adding-meals11.png" alt="11th screenshot">
                  </div>
              </div>
              <div class="meals-card-content">
                  <span class="slider-number">11</span>
                  <p>Click Price/Portions</p>
              </div>
          </div>


          <div class="meals-card swiper-slide">
              <div class="meals-image-content">
                  <span class="meals-overlay"></span>
                  <div class="meals-card-image">
                      <img src="./images/addingMeals/adding-meals12.png" alt="12th screenshot">
                  </div>
              </div>
              <div class="meals-card-content">
                  <span class="slider-number">12</span>
                  <p>Confirm the amount of portions to be made available each day.<br><br>
Click on Save in the top right corner to prevent any loss of effort.</p>
              </div>
          </div>


          <div class="meals-card swiper-slide">
              <div class="meals-image-content">
                  <span class="meals-overlay"></span>
                  <div class="meals-card-image">
                      <img src="./images/addingMeals/adding-meals13.png" alt="13th screenshot">
                  </div>
              </div>
              <div class="meals-card-content">
                  <span class="slider-number">13</span>
                  <p>Click on ‘Location’</p>
              </div>
          </div>

          <div class="meals-card swiper-slide">
              <div class="meals-image-content">
                  <span class="meals-overlay"></span>
                  <div class="meals-card-image">
                      <img src="./images/addingMeals/adding-meals14.png" alt="14th screenshot">
                  </div>
              </div>
              <div class="meals-card-content">
                  <span class="slider-number">14</span>
                  <p>Insert the pickup address. Please note: this can be different to the address of the kitchen. <br><br>
Add the mobile phone number associated to WhatsApp.</p>
              </div>
          </div>

          <div class="meals-card swiper-slide">
              <div class="meals-image-content">
                  <span class="meals-overlay"></span>
                  <div class="meals-card-image">
                      <img src="./images/addingMeals/adding-meals15.png" alt="15th screenshot">
                  </div>
              </div>
              <div class="meals-card-content">
                  <span class="slider-number">15</span>
                  <p>Add a description of any information that will make collection easier for the delivery company/customer.<br><br>
Click on Save in the top right corner to prevent loss.</p>
              </div>
          </div>


          <div class="meals-card swiper-slide">
              <div class="meals-image-content">
                  <span class="meals-overlay"></span>
                  <div class="meals-card-image">
                      <img src="./images/addingMeals/adding-meals16.png" alt="16th screenshot">
                  </div>
              </div>
              <div class="meals-card-content">
                  <span class="slider-number">16</span>
                  <p>click on ‘Timing’ at the bottom of the main list</p>
              </div>
          </div>

          <div class="meals-card swiper-slide">
              <div class="meals-image-content">
                  <span class="meals-overlay"></span>
                  <div class="meals-card-image">
                      <img src="./images/addingMeals/adding-meals17.png" alt="17th screenshot">
                  </div>
              </div>
              <div class="meals-card-content">
                  <span class="slider-number">17</span>
                  <p>Please note: the <em>Delivery</em> option will be assigned by the Partner Relationship Manager.<br><br>
Please select ‘Pickup’ for those chefs intending to have customers collect their food directly.</p>
              </div>
          </div>

          <div class="meals-card swiper-slide">
              <div class="meals-image-content">
                  <span class="meals-overlay"></span>
                  <div class="meals-card-image">
                      <img src="./images/addingMeals/adding-meals18.png" alt="18th screenshot">
                  </div>
              </div>
              <div class="meals-card-content">
                  <span class="slider-number">18</span>
                  <p>Once the Partnership Relationship Manager has activated <em>Delivery</em> it will appear in the Meal Options list for selection.</p>
              </div>
          </div>
         

          <div class="meals-card swiper-slide">
              <div class="meals-image-content">
                  <span class="meals-overlay"></span>
                  <div class="meals-card-image">
                      <img src="./images/addingMeals/adding-meals19.png" alt="19th screenshot">
                  </div>
              </div>
              <div class="meals-card-content">
                  <span class="slider-number">19</span>
         <p>         Once an option (Delivery/ Pickup) is selected the days in which you will offer food will appear. Please select all days that are appropriate. Upon making selection press Save (top right corner of screen)</p>
              </div>
          </div>

          <div class="meals-card swiper-slide">
              <div class="meals-image-content">
                  <span class="meals-overlay"></span>
                  <div class="meals-card-image">
                      <img src="./images/addingMeals/adding-meals20.png" alt="20th screenshot">
                  </div>
              </div>
              <div class="meals-card-content">
                  <span class="slider-number">20</span>
         <p>         Once an option / all sections in the New Meal list have been completed and turned green a Preview button will appear at the bottom of the list. Click Preview to reveal how the dish will look to app users.</p>
              </div>
          </div>
         

          <div class="meals-card swiper-slide">
              <div class="meals-image-content">
                  <span class="meals-overlay"></span>
                  <div class="meals-card-image">
                      <img src="./images/addingMeals/adding-meals21.png" alt="21st screenshot">
                  </div>
              </div>
              <div class="meals-card-content">
                  <span class="slider-number">21</span>
                  <p>Check everything is as you wish it to be.</p>
              </div>
          </div>

          <div class="meals-card swiper-slide">
              <div class="meals-image-content">
                  <span class="meals-overlay"></span>
                  <div class="meals-card-image">
                      <img src="./images/addingMeals/adding-meals22.png" alt="22nd screenshot">
                  </div>
              </div>
              <div class="meals-card-content">
                  <span class="slider-number">22</span>
                  <p>Once you are pleased with the dish click ‘Post’</p>
              </div>
          </div>

          <div class="meals-card swiper-slide">
              <div class="meals-image-content">
                  <span class="meals-overlay"></span>
                  <div class="meals-card-image">
                      <img src="./images/addingMeals/adding-meals23.png" alt="23rd screenshot">
                  </div>
              </div>
              <div class="meals-card-content">
                  <span class="slider-number">23</span>
                  <p>Your meal is now on the app. To repeat the process click the + in the top right corner of the app.</p>
              </div>
          </div>
         
         
          
          
      </div>
  </div>
  
  <div class="swiper-navBtn swiper-button-next "></div>
  <div class="swiper-navBtn swiper-button-prev "></div>
  <div class="swiper-pagination"></div>
</div>

<h2 class="sub-heads" id="edit-meals">Edit Price/Portions, Unhide / Delete Dishes</h2>

<div class="pdf-container">
<p>
  <a href="./docs/postboarding/createMenu/HomeMeal_Editing_Price_Portions.pdf"
    >HomeMeal Editing Price and Portions pdf</a
  >
</p>
<p>
  <a href="./docs/postboarding/createMenu/HomeMeal_Deleting_Dishes.pdf"
    >HomeMeal Deleting Dishes pdf</a
  >
</p>
<p>
  <a href="./docs/postboarding/createMenu/HomeMeal_Unhiding_Hidden_Dishes.pdf"
    >Unhiding hidden dishes pdf</a
  >
</p>

</div>

<!-- Card Slider multiple screenshots Edit / Unhide / Delete Dishes -->


<div class="edit-meals-slide-container swiper">
  <div class="slide-content">
      <div class="slide-wrapper swiper-wrapper">
         
          <div class="edit-meals-card swiper-slide">
              <div class="edit-meals-image-content">
                  <span class="meals-overlay"></span>
                  <div class="edit-meals-card-image">
                      <img src="./images/pausingMeals/pausingMeals1.png" alt="1st screenshot">
                  </div>
              </div>
              <div class="edit-meals-card-content">
                  <span class="slider-number">1</span>

                  <h2>Deleting Dishes</h2>
                  
                  <p>Click on the Chef button in the lower left corner. App will display all of your current available meals. Select the dish you want to delete by tapping the red Bin button in the top right corner of the image.</p>
                  <p>Confirm delete by pressing Yes</p>

              </div>
          </div>
         
          <div class="edit-meals-card three-shot-card  swiper-slide">
              <div class="edit-meals-image-content">
                  <span class="meals-overlay"></span>
                  <div class="edit-meals-card-image">
                      <img src="./images/pausingMeals/pausingMeals2.png"" alt="2nd screenshot">
                  </div>
              </div>
              <div class="edit-meals-card-content">
                  <span class="slider-number">2</span>

                  <h2>Editing Price/number of portions</h2>
                  
                  <p>Click on the Chef button in the lower left corner. App will display all of your current available meals.</p>
                  <p>Select the dish you want to return to your available offerings by tapping the image.</p>
                  <p>Select Price / Portions - second on the list</p>

              </div>
          </div>
          <div class="edit-meals-card swiper-slide">
              <div class="edit-meals-image-content">
                  <span class="meals-overlay"></span>
                  <div class="edit-meals-card-image">
                      <img src="./images/pausingMeals/pausingMeals3.png"" alt="3rd screenshot">
                  </div>
              </div>
              <div class="edit-meals-card-content">
                  <span class="slider-number">3</span>
                  
                  <h2>Editing Price/number of portions</h2>
                  <p>Update the Price and/or number of portions. Click on Save in the top right corner to prevent any loss of effort.</p>
                  <p>VERY IMPORTANT Click on the Update button to confirm the dish is active again</p>

              </div>
          </div>

          <div class="edit-meals-card three-shot-card swiper-slide">
              <div class="edit-meals-image-content">
                  <span class="meals-overlay"></span>
                  <div class="edit-meals-card-image">
                      <img src="./images/pausingMeals/pausingMeals4.png"" alt="4th screenshot">
                  </div>
              </div>
              <div class="edit-meals-card-content">
                  <span class="slider-number">4</span>

                  <h2>Unhiding hidden dishes</h2>
                  
                  <p>Click on the Chef button in the lower left corner.App will display all of your current available meals. Select the dish you want to return to your available offerings by tapping the image.</p>
                  <p>Click on Timing - the last of the four options</p>
                  <p>Select the offer method</p>

              </div>
          </div>

          <div class="edit-meals-card swiper-slide">
              <div class="edit-meals-image-content">
                  <span class="meals-overlay"></span>
                  <div class="edit-meals-card-image">
                      <img src="./images/pausingMeals/pausingMeals5.png"" alt="5th screenshot">
                  </div>
              </div>
              <div class="edit-meals-card-content">
                  <span class="slider-number">5</span>

                  <h2>Unhiding hidden dishes</h2>
                  
                  <p>Confirm the days that you are now able to offer this dish. Click on Save in the top right hand corner of your screen</p>
                  <p><bold>VERY IMPORTANT</bold><br>Click on the Update button to confirm the dish is active again</p>

              </div>
          </div>



</div>
  </div>
  
  <div class="swiper-navBtn swiper-button-next "></div>
  <div class="swiper-navBtn swiper-button-prev "></div>
  <div class="swiper-pagination"></div>
</div>


      
      </section>
      <section class="two post-two post-section">
        <h1 id="essential-downloads">Essential Downloads</h1>

        <div class="downloads-intro">
        <h2>Essential Downloads</h2><br>
<p>The following documents are required to be completed whenever you are cooking, be that every day, every other day or any combination of days during your working week.<br>
You are to keep the printouts in folders and keep them readily available for inspection during a visit from the Amt. These are your proof that you are running an organised business and maintaining the highest cleanliness standards possible. If you don't have a home printer it is best to print off all documents in batches; this will keep the cost down and save you needing to go back and forth to get new copies repeatedly.</p><br>
<p>The following documents are available to you:<br>
<ul>  <li>Fridge Temperature Log</li>
 <li>Kitchen Checklist</li>
<li>Kitchen Cleaning Log</li>
 <li>Food Safety Labels</li>
</ul>
</p>
        </div>

        <p>
  <a href="./docs/postboarding/usefulDownloads/HomeMeal_Food_Safety_Labels.pdf"
    >Food Safety Labels pdf</a
  >
</p>
<p>
  <a href="./docs/postboarding/usefulDownloads/HomeMeal_Kitchen_Checklist.pdf"
    >Kitchen Checklist pdf</a
  >
</p>
<p>
  <a href="./docs/postboarding/usefulDownloads/HomeMeal_Kitchen_Cleaning_Log.pdf"
    >Kitchen Cleaning Log pdf</a
  >
</p>
<p>
  <a href="./docs/postboarding/usefulDownloads/HomeMeal_Refrigerator_Temperature_Log.pdf"
    >Kitchen Refrigerator Temperature pdf</a
  >
</p>

      


   </div>
      </section>
      <section class="three post-three post-section">
        <h1 id="marketing">Marketing</h1>

        <p>
  <a href="./docs/postboarding/marketing/HomeMeal_Marketing_Guide.pdf"
    >HomeMeal How to Market your Business pdf</a
  >
</p>

<div class="market-your-business">
<h2>How to market your business</h2><br><br>
<p>When we collated the results of our annual Chef Support survey one of the clearest responses we had was that you, our chefs, needed more support in marketing yourselves and drawing in new customers.<br><br>
Let's start with the obvious - you are unique. Your product is unique. The way you blend ingredients together is unlike any other chef on earth and, because of this, you have your own story to tell.<br>
Telling your story can be done through a variety of mediums - you can start by talking to everyone you meet. To broaden your market share and to grow your customer base would take a long time though and you would most likely spend more time being out needing to talk to others than you are concentrating on your product - your food. Luckily there are many other ways to reach many people at once so lets explore them.</p><br><br>
<p><em>Tips for online marketing</em><br>
<strong>Put effort into the photography of dishes</strong><br>
The better your food photography becomes the more people will appreciate it. Look at posting your photographs in places that will get it shared<br><br>
<strong>Put time aside each day for posting on social media but use it wisely</strong><br>
Social media is a wonderful tool - you can reach millions of people all at the click of a button. The problem is a 'like' on a photo from Canberra, Australia isn't going to lead to an additional sale so be sure to make the hashtags count. Create a list that you will attach to every image and keep them related to improving your sales. Think about your location (#berlin, #charlottenburg, etc), think about your dishes (#burrito, #daal, etc) and then start to join them - #berlinfood, #berlincurry, #wilmersdorfdinner, etc. And don't forget to add your own name as a hashtag and #homemeal!<br>
Be sure to sign up your unique name on all social media platforms - you need to make sure your customers can find you easily wherever you are.<br><br>
<strong>Encourage your existing customers to share photographs of your food on their social media</strong><br>
 When you have repeat customers don't be afraid to ask them to share the food you are making them on their own social media. You can incentivise this by turning it into a competition and running monthly prize draws for those actively promoting you.
Be sure to record who of your customers is promoting you and then select one of them at random for a free dinner. Alternatively keep a list of who is mentioning you in their social media and slip in a 'bonus' dish or side along with a thank you note; by letting them know you see how supportive they are everyone feels good and word spreads about your offering.<br><br>
<strong>Collect positive reviews and share them on social media<</strong>br>
When customers compliment you don't be shy on sharing those compliments. Be sure to tag them in any posts.<br><br>
<strong>Claim your business name on all social media and set them up to share with each other</strong><br>
Even if you only intend to use a single social media channel we advise you to sign up with your unique name for all accounts as you go through the process of setting up your business. The last thing you want to do find as you expand is that you are having to use multiple names on the various platforms as it will make it a lot harder for your fans to find and follow you.<br><br>
Once you have all the accounts set up use the profile to write a short bio and add a link to send anyone that finds you back to your main social account.<br><br>
Should you want to be active on all social media platforms but with a reduced amount of time you can consider the use a third-party social media platform (for example: Buffer, Hootsuite) which will allow you to schedule posts up to a week in advance as well as cross-sharing so your posts appear in multiple places at once.<br><br>
You can also explore the settings and allow Instagram posts to be posted to Twitter and Facebook at the same time<br><br>
<strong>Use Google My Business</strong><br>
You are a business - make the most of the exposure Google offers. Benefits include being featured on maps, increased SEO, a higher ranking in searches and the ability to make a professional impression.</p><br><br>
<p><em>Tips for in-person marketing</em><br>
<strong>Go to networking events for entrepreneurs - and eat free breakfasts</strong><br>
You started a business - you sell your product online. You are an Entrepreneur. And one thing entrepreneurs should be doing is meeting other entrepreneurs. Be open, enjoy the experience and don't be shy about what you are doing - it could lead to catering office events, providing food for launch parties or picking you up a new round of customers.<br><br>
Betahaus.com runs Betabreakfast, Female Founders Club host breakfasts and if you search through Eventbrite and Allevents you will find who is offering what and when. Just remember to change your settings to Berlin.<br><br>
Who knows, you might even find yourself sharing a chat over a coffee and a croissant with the HomeMeal co-founders!<br><br>
<strong>Partner up with other small businesses</strong><br>
Word-of-mouth doesn't need to be about you telling everyone you know nor does it need to rely on your customers sharing your information. Both of these examples are great but by speaking with and about other small businesses it encourages them to do the same about you.<br><br>
Entrepreneurs are a supportive bunch. Many of them are in the same boat, trying to acquire new customers without spending a fortune on publicity. Partnering with other businesses, not just other chefs, to cross-promote each other's products or services is a sound idea. This could involve doing a joint social media campaign, running a contest or giveaway together, or even just exchanging links through your social media. By teaming up with another business, you can reach a whole new audience of potential customers. Consider offering in-store tasting sessions at your favourite ingredient shop - showing off how good the products from the shop taste and how good your dishes are!<br><br>
<strong>Partner up with local charities</strong><br>
Don't throw food that you won't sell, donate it to a charity. Aside from the obvious benefit of helping others in a less privileged position than yourself it helps spread goodwill. The more you are spportive of a single charity the more they will get to know you and the more supportive they are likely to become. You can always encourage the charity to mention you in their press releases.
And while we are thinking about charity work and their press releases...<br>
Pitch your story to local journalists (print/radio/tv) and bloggers<</strong>br>
Your work on HomeMeal can be of interest to those journalists in Berlin that cover entrepreneurial and food-related stories. If you have moved to Berlin from another country and your food is heavily influenced by your homeland then think about travel writers too. As your story is unique to you - with your own history, inspiration and goals - it makes sense to share it with people that spend their working life sharing stories. Think in terms of local and industry.<br><br>
Don't forget to mention that when, on the odd occasion, you have spare food you share it with a charity and that readers could do the same.<br><br>
<strong>Commit a percentage of your income to promo material</strong><br>
To make money you need to spend money. You might have the best ingredients, the most creative recipes and years of culinary experience but if no-one knows you exist it is all for nothing. Stickers with your social media name, stickers with a QR code (linking to your HomeMeal page), flyers with a brief overview of what you offer, a tee shirt with your social media name (to wear shopping when you go to the market for ingredients) and business cards for when you are at those entrepreneurial breakfasts. All of these are quickly available through<br><br>
<strong>See what promotional material your suppliers publish - and ask to get involved</strong><br>
Can you contribute a recipe to a newsletter, can you offer an insight into how you use a specific product for their social media? When you champion a brand you are also championing yourself.<br><br>
<strong>Go to local food markets and use it as a networking event</strong><br>
Don't just walk around the market looking for the best ingredients at the best prices - use it as an opportunity to network. Take samples along to stall holders and encourage them to taste what you cook with their ingredients. Develop a network throughout the market, wow them so much you have them talking about you with their client base and ask if you can leave flyers or pin a QR code to their stall. It won't affect their business if their other customers order from you as you will start buying in bigger quantity, which is win-win!</p>
</div>

<div class="video-box">

<iframe width="560" height="315" src="https://www.youtube.com/embed/RmwI_QqcPQc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

  <iframe width="560" height="315" src="https://www.youtube.com/embed/b_gvwR1pg5I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

</div>


        <p id="order-flyers">Order some Marketing Material from HomeMeal <a href="./contact.html"> Right Here</a></p>

        <div class="photograph-dishes">
        <h2>How to photograph your dishes</h2><br>
<p>One of the main things our chefs talk to us about is getting the best photographs of their dishes. We know that first impressions count and the first sight of a dish is what can tempt you to investigate a chef's full offering.<br><br>
As time progresses and you grow your customer base you can consider investing in a camera and editing suite for your laptop, perhaps you'll bring in a professional food photographer, but our advice when getting started is this - the best camera to use is the one you have!<br>
It is also important to remember that the internet is your friend. You don't have to reinvent the wheel (nor the food photography genre). There a plenty of amazing examples online of food photography to draw inspiration from. Search 'best food photography' and 'best food photographer' and start to search through for different ways of styling, new inspiration on how to use props, what angles to consider and where your light source should be. Visual blogs like Pintrest and Tumblr can help you create an online resource for images you find will help you show off your dishes best.<br><br>
Do not be put off by what you see online - these are professionals who make their living by photographing food, not by cooking food - and instead keep an open mind as to what you can achieve in your own kitchen.
The following tips should be considered and tested - over time you will work out what works best for you and what shows your food off in the most attractive way</p><br><br>
<p><strong>Use Negative Space</strong><br>
Give the viewer some room to breathe, i.e. don't zoom in all the way, let there be some negative space in the picture.<br>
<strong>Experiment With Different Heights</strong><br>
Experiment with height and creating different levels.<br>
Use a cutting board to raise up some of your scene. Place something on a cake stand or use glasses in different heights. Adding height can create a natural frame that you can work off, especially if shooting straight on or at different angles. You don't even have to go higher, placing things on a wrinkled kitchen towel create texture and breaks things up by creating visual differences or layers.<br>
<strong>Consider Shooting on The Floor</strong><br>
Consider even your own floor as long as it is nice and clean, you can use your wood floor (or any other surface floor) as a background or backdrop to some really great pictures<br>
<strong>Find The Your Dishes Biggest Strength</strong><br>
To help me when I am going to shoot it's crucial to ask myself what is the biggest strength of that dish or food?<br>
Is it the freshness, the texture, the colour, the shape? And, very important too, what kind of feeling does that food bring - can be comfort, freshness, cosiness, satisfaction.<br>
<strong>Decide On Your Angle Before You Begin Styling</strong><br>
Use a dummy and decide on an angle before you start styling.<br>
It can be easy to set up the food and style it just to find out that the angle is not right. Having to change it – and then do all the styling again - wastes time and effort.<br>
<strong>Think Layers & Texture</strong><br>
Aim to have about 3 layers of texture in your photos, like a napkin, cutlery, herbs, spices or ingredients. Things that are in the dish look great when layered into the photo.<br>
<strong>Use Stand In Food</strong><br>
Set up with a stand-in. Get the lighting and composition sorted by marking the plate with blocks, swap the blocks for your dish and shoot as fast as you can.<br>
Voila, freshest food – shot fast.<br>
<strong>Put your main subject in the middle</strong><br>
People tend to perceive whatever object is in the middle of a food photograph as being the star of the show. When plating great food, it's best to start in the middle with the main dish and work your way out, adding sides or garnish, in order to ensure symmetrical food plating.<br>
<strong>Use A White Sheet In The Window</strong><br>
Using a white sheet in the window was one of the best purchases I ever made. The light is always amazing.<br>
<strong>Use One Main Light Source Until You've Mastered Lighting</strong><br>
Whether you're using natural light or studio lights, start with one main light.<br>
Food photography is a natural subject, so usually, the aim is to try and keep things looking natural. There's only one sun in nature, so one main light just makes sense. This light sets the atmosphere for your shot. If it is low, it might feel like early morning or late afternoon – higher up is brighter and less atmospheric. Once you have set the main light you can build up the shot with fill-in light.<br>
<strong>Always Side, Back or Top Light</strong><br>
Always back, side or top light. Don't have the light source coming from the same angle or direction as the camera.<br>
<strong>Props Should Compliment Your Food</strong><br>
The food is your hero, so don't overthink the styling. As in everything – less is more. Use the most beautiful ingredients you can get. Beautiful food guarantees a beautiful picture. Props should only compliment the food<br>
<strong>Colour is Important</strong><br>
Food photography is all about colour, even when the dish itself does not have a powerful one. You can add further colour with your selection of props and surfaces.<br><br>
<strong>Simple = most effective</strong><br>
The HomeMeal top tip: Don't over complicate your shot! Keep it simple. <em>Simple = most effective!</em></p>
        </div>

        <p>
  <a href="./docs/postboarding/marketing/HomeMeal_How_To_Photograph_Tips.pdf"
    >HomeMeal How to photograph tips</a
  >
</p>


<div class="video-box">
       
       <iframe width="560" height="315" src="https://www.youtube.com/embed/vKaNQ4af-6w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

         <iframe width="560" height="315" src="https://www.youtube.com/embed/EMmHixjZXTs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

       </div>

       

      </section>



      <section class="four post-four post-section" id="section4-post">
        <h1>Orders and Delivery</h1>

        <div class="orders-delivery">

        <h2>Checking and Managing Orders</h2>
<p>Chefs have three sections to manage their orders: Past, Active, and Requests.
<ul>
   <li>Active section displays orders that are currently being processed.</li>
	<li>Past section shows orders that have already been completed.</li>
	 <li>Requests section allows customers to make specific requests for future orders, which the chef can accept for incoming orders.</li>
</ul>
To access the three sections click on the Orders button, second from left in the lower navigation bar (as shown in green in the below image).</p>
</div>

<div class="orders-delivery">
<h2>Preparing Orders for Collection/Delivery</h2>
<p>The collection service is organised by HomeMeal.<br>
HomeMeal when post a Collection Timetable in the WhatsApp group chat every day between 08:00 - 09:00. It is your responsibility to inform yourself of the time slot you have been allocated and to have the orders bagged and ready for pick up at that time.<br>
Collections begin at 11:00.<br><
HomeMeal will try to optimise this table as much as possible for you. Sometimes it might happen that your pick up time is the first, at 11:00, or your pick up time might not meet your personal schedule on that particular day - we will try our best to accommodate everyone at all times but please be aware that it is not always possible.<br>
Should the time slot you have been allocated not meet your time schedule for the day you should contact the Collections Manager on WhatsApp <strong>+49 176 5766 5089</strong> to cancel the collection no later than 60 minutes before the allocated collection time. Should you cancel collection it becomes your responsibility to ensure delivery of the orders to the HomeMeal hub at:
<strong>Waldemarstrasse 39, 10999, Berlin-Kreuzberg</strong>.</p><br>
<p><em>When selecting to deliver to the HomeMeal hub please remember that you must deliver no later than 15:30.</em></p><br>
<h3>How should you prepare your orders for collection by the Delivery Company?</h3>
<p>Place in the bag:
<ul>
  <li>Food Container should be suitable for the size of the meal (e.g. not a big container for a small quantity of sauce)</li>
 <li>Container should be sustainable. Please avoid plastic and aluminium containers and refrain from using plastic bags</li>
 <li>The food container should be sealed with Cello-Tape (Tesa Film)</li>
 <li>Write the HUB, full customer name and address on the bag</li>
 <li>Put the Food Container into the bags. You should NEVER USE bags from other companies!</li>
  <li>Heating instructions</li>
 <li>Instructions on what needs to be eaten together, especially for more complex meals, like some Indian ones (if applicable).</li>
</ul>
<br>
In addition to the food containers you are to add to the bag:<br>
<ul> 
  <li>the "Welcome card" (for new customers only),</li>
 <li>the "Thank you card" with your personal message - this is your chance to stand out, therefore we encourage you to be creative,</li>
<li> And, if you are considering this - your gift (fortune cookies, chocolates, etc).</li>
</ul></p>
<br>
<p>The food containers should not be stacked - always keep in mind that the Pick up companies have to transport them many km, maybe even on bumpy roads...</p>
<br>
</div>

<div class="orders-delivery">
<h3>Sending order photographs</h3><br>
<p>We are aware that issues can occur in transit. In light of this, and to make delivering the best possible customer service on all chefs behalf, it is important that we have a photograph of each bag being sent out. This allows us to establish where the problem occurred and have proof of the original state the bag was in, when leaving you, when liaising with the Delivery Company.<br>
<strong><em>Send the photo via WhatsApp to: +49 157 33815227</em></strong><br>
This number is the direct line to the HomeMeal Delivery Manager. Please be sure to use the correct number and to avoid sending photographs to the group chat.</p>
</div>

        </section>
        
        <section class="five post-five post-section">
            <h1 id="payments-with-stripe"">Stripe and Payments</h1>

            <div class="stripe-payments" id="stripe-payments">
              <h2 id="stripe-FAQ">Stripe FAQ</h2><br>
<strong>Issues With Payments</strong><br>
<strong><em>Total Payout Seems Lower Than Expected</em></strong><br>
<p>If you've delivered ALL your orders, this could be related to multiple factors such as:<br>
	<ul>
     <li>Have you had any refunded or cancelled orders?</li>
	<li>Were some items reported missing from any of your orders?</li>
</ul><br>
We recommend checking your order history in your HomeMeal dashboard, checking your email inbox for any notices from the HomeMeal Support team regarding any issues with your orders.</p>
<strong><em>Haven't Received a Payment in Over 5 Days</strong><br>
<p>We recommend checking your Stripe and bank account first. There might be a hold related to documentation or a holiday related delay. If you checked in EST ARRIVAL and the date hasn't passed yet (end of day), please wait and check your bank account on that date.
In the event that you see a red RESTRICTED banner on your account, be sure to hover over it to see if there's a specific note asking for action to be taken on your end. If it is asking for identification information, you can update your information on your Stripe dashboard. Please reach out to Stripe support for further assistance if you continue to have any issues with a Stripe account restriction.
If all of your information seems correct but you still haven't received your payment after the estimated arrival date, please reach out to us at jigar@homemeal.com for further assistance.</p>
</div>

          </section>
      

    <section class="six post-six post-section">
      <h1>Cooking Guideines</h1>

      <h1 id="reheating">Reheating Instructions</h1>

<div class="reheating-container">

<div class="reheating-card">
<h2>Bone-In-Non-Veg Curry</h2>
<img src="./images/meals/Easy-Mutton-Curry-2.jpg" alt="Mutton Curry">
<p>
<a href="./docs/postboarding/reheatingGuides/HomeMeal_Food_Reheating_Bone-in-non-veg_Curry.pdf"
>Bone-in-non-veg Curry reheating instructions pdf</a
>
</p>
</div>
<div class="reheating-card">
<h2>Bread</h2>
<img src="./images/meals/bread.jpeg" alt="Bread">
<p>
<a href="./docs/postboarding/reheatingGuides/HomeMeal_Food_Reheating_Bread.pdf"
>Bread reheating instructions pdf</a
>
</p>
</div>
<div class="reheating-card">
<h2>Curry</h2>
<img src="./images/meals/curry.jpeg" alt="Curry">
<p>
<a href="./docs/postboarding/reheatingGuides/HomeMeal_Food_Reheating_Curry.pdf"
>Curry reheating instructions pdf</a
>
</p>
</div>
<div class="reheating-card">
<h2>Dry Curry</h2>
<img src="./images/meals/dry-curry.jpg" alt="Japanese Dry Curry">
<p>
<a href="./docs/postboarding/reheatingGuides/HomeMeal_Food_Reheating_Dry_Curry.pdf"
>Dry Curry reheating instructions pdf</a
>
</p>
</div>
<div class="reheating-card">
<h2>No Heating Required</h2>
<img src="./images/meals/no-heating.png" alt="No Fire sign">
<p>
<a href="./docs/postboarding/reheatingGuides/HomeMeal_Food_Reheating_No_Heating_Required.pdf"
>No reheating required instructions pdf</a
>
</p>
</div>
<div class="reheating-card">
<h2>Non Veg Curry</h2>
<img src="./images/meals/meat-curry.jpg" alt="Delicious meaty curry">
<p>
<a href="./docs/postboarding/reheatingGuides/HomeMeal_Food_Reheating_Non-veg_Curry.pdf"
>Non Veg / Meat curry reheating instructions pdf</a
>
</p>
</div>
<div class="reheating-card">
<h2>Protein Rice Dishes</h2>
<img src="./images/meals/protein-rice.jpg" alt="Rice with protein dish">
<p>
<a href="./docs/postboarding/reheatingGuides/HomeMeal_Food_Reheating_Protein_Rice_Dishes.pdf"
>Protein Rice reheating instructions pdf</a
>
</p>
</div>
<div class="reheating-card">
<h2>Rice Dishes</h2>
<img src="./images/meals/protein-rice.jpg" alt="Rice dish">
<p>
<a href="./docs/postboarding/reheatingGuides/HomeMeal_Food_Reheating_Rice_Dishes.pdf"
> Rice reheating instructions pdf</a
>
</p>
</div>
<div class="reheating-card">
<h2>Stew</h2>
<img src="./images/meals/stew.jpg" alt="Stew">
<p>
<a href="./docs/postboarding/reheatingGuides/HomeMeal_Food_Reheating_Stew.pdf"
> Stew reheating instructions pdf</a
>
</p>
</div>
<div class="reheating-card">
<h2>Stir Fry</h2>
<img src="./images/meals/stir-fry.jpg" alt="Stir Fry">
<p>
<a href="./docs/postboarding/reheatingGuides/HomeMeal_Food_Reheating_Stir-fry.pdf"
> Stir Fry Reheating instructions pdf</a
>
</p>
</div>


    </section>

    </section>
    <section class="seven post-seven post-section">
      <h1>Setting up Profile</h1>

      <p id="chef-profile-pdf">
  <a href="./docs/postboarding/chefProfile/HomeMeal_Creating_Chef_Profile.pdf"
    >Creating Chef Profile tips</a
  >
</p>


<div class="meals-slide-container swiper">
  <div class="slide-content">
      <div class="slide-wrapper swiper-wrapper">
         
          <div class="meals-card swiper-slide">
              <div class="meals-image-content">
                  <span class="meals-overlay"></span>
                  <div class="meals-card-image">
                      <img src="./images/chefProfile/chef-profile1.png" alt="1st screenshot">
                  </div>
              </div>
              <div class="meals-card-content">
                  <span class="slider-number">1</span>
                  
                  <p>Click on ‘Profile’ in the lower right corner</p>

              </div>
          </div>

          <div class="meals-card swiper-slide">
              <div class="meals-image-content">
                  <span class="meals-overlay"></span>
                  <div class="meals-card-image">
                      <img src="./images/chefProfile/chef-profile2.png" alt="2nd screenshot">
                  </div>
              </div>
              <div class="meals-card-content">
                  <span class="slider-number">2</span>
                  
                  <p>In the ‘Your Profile’ section click on ‘Profile’ (second from top)</p>

              </div>
          </div>

          <div class="meals-card swiper-slide">
              <div class="meals-image-content">
                  <span class="meals-overlay"></span>
                  <div class="meals-card-image">
                      <img src="./images/chefProfile/chef-profile3.png" alt="3rd screenshot">
                  </div>
              </div>
              <div class="meals-card-content">
                  <span class="slider-number">3</span>
                  
                  <p>Click on ‘Edit your chef page</p>

              </div>
          </div>


          <div class="meals-card swiper-slide">
              <div class="meals-image-content">
                  <span class="meals-overlay"></span>
                  <div class="meals-card-image">
                      <img src="./images/chefProfile/chef-profile4.png" alt="4th screenshot">
                  </div>
              </div>
              <div class="meals-card-content">
                  <span class="slider-number">4</span>
                  
                  <p>Fill the form (first name and surname) and confirm with “Continue”</p>

              </div>
          </div>

          <div class="meals-card swiper-slide">
              <div class="meals-image-content">
                  <span class="meals-overlay"></span>
                  <div class="meals-card-image">
                      <img src="./images/chefProfile/chef-profile5.png" alt="5th screenshot">
                  </div>
              </div>
              <div class="meals-card-content">
                  <span class="slider-number">5</span>
                  
                  <p>Upload your photo</p>

              </div>
          </div>

          <div class="meals-card swiper-slide">
              <div class="meals-image-content">
                  <span class="meals-overlay"></span>
                  <div class="meals-card-image">
                      <img src="./images/chefProfile/chef-profile6.png" alt="6th screenshot">
                  </div>
              </div>
              <div class="meals-card-content">
                  <span class="slider-number">6</span>
                  
                  <p>You can modify the image (turning, cutting,zooming...). Confirm by clicking on the tick in the upper right corner.</p>

              </div>
          </div>

          <div class="meals-card swiper-slide">
              <div class="meals-image-content">
                  <span class="meals-overlay"></span>
                  <div class="meals-card-image">
                      <img src="./images/chefProfile/chef-profile7.png" alt="7th screenshot">
                  </div>
              </div>
              <div class="meals-card-content">
                  <span class="slider-number">7</span>
                  
                  <p>Confirm with “Continue”</p>

              </div>
          </div> <div class="meals-card swiper-slide">
              <div class="meals-image-content">
                  <span class="meals-overlay"></span>
                  <div class="meals-card-image">
                      <img src="./images/chefProfile/chef-profile7.png" alt="7th screenshot">
                  </div>
              </div>
              <div class="meals-card-content">
                  <span class="slider-number">7</span>
                  
                  <p>Confirm with “Continue”</p>

              </div>
          </div>

          <div class="meals-card swiper-slide">
              <div class="meals-image-content">
                  <span class="meals-overlay"></span>
                  <div class="meals-card-image">
                      <img src="./images/chefProfile/chef-profile8.png" alt="8th screenshot">
                  </div>
              </div>
              <div class="meals-card-content">
                  <span class="slider-number">8</span>
                  
                  <p>Tell us something about yourself by filling in three facts. Confirm with “Continue”</p>

              </div>
          </div>

          <div class="meals-card swiper-slide">
              <div class="meals-image-content">
                  <span class="meals-overlay"></span>
                  <div class="meals-card-image">
                      <img src="./images/chefProfile/chef-profile9.png" alt="9th screenshot">
                  </div>
              </div>
              <div class="meals-card-content">
                  <span class="slider-number">9</span>
                  
                  <p>Fill in Storytime. Tell us your cooking-related story. Confirm with “Continue”</p>

              </div>
          </div>

          <div class="meals-card swiper-slide">
              <div class="meals-image-content">
                  <span class="meals-overlay"></span>
                  <div class="meals-card-image">
                      <img src="./images/chefProfile/chef-profile10.png" alt="10th screenshot">
                  </div>
              </div>
              <div class="meals-card-content">
                  <span class="slider-number">10</span>
                  
                  <p>Location. Add the location your kitchen is based.Confirm with “Continue”</p>

              </div>
          </div>

          <div class="meals-card swiper-slide">
              <div class="meals-image-content">
                  <span class="meals-overlay"></span>
                  <div class="meals-card-image">
                      <img src="./images/chefProfile/chef-profile11.png" alt="11th screenshot">
                  </div>
              </div>
              <div class="meals-card-content">
                  <span class="slider-number">11</span>
                  
                  <p>Submit your profile by clicking “Continue”</p>

              </div>
          </div>


          </div>
  </div>
  
  <div class="swiper-navBtn swiper-button-next "></div>
  <div class="swiper-navBtn swiper-button-prev "></div>
  <div class="swiper-pagination"></div>
</div>
      

      <div class="homeMealGPT-router" >
        
        <p id="profile-GPT">Create Cool intuitive Chef Profiles with our AI Profile Generator</p>
        <h2 class="HomeMealGPT" id="profileGPT"><a href="./GPTprofile.html">HomeMealGPT Helper</a></h2>
     
             </div>


    </section>


    </div>

      <!-- Swiper JS -->
<script src="swiper-bundle.min.js"></script>

<!-- JavaScript -->
<script src="app.js"></script>


    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>
  </body>
</html>
