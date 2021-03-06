<?php
// Start the session
    session_start();
?>
<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>KANSEI DESIGN SURVEY</title>

        <!-- Bootstrap -->
        <link href="Assets/CSS/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">

        <!--Custom-->
        <link href="Assets/CSS/index.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-lg-12">
                                    <span class="active" id="login-form-link">Personal Information</span>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <form id="user-info" method="post" role="form" action="models/modelHandler.php" style="display: block;">
                                    <input type="hidden" name="type" value="userProfile">
                                        
                                        <?php
                                            $_SESSION["PREQ"] = 0;
                                        ?>

                                        <div class="form-group text-center">
                                            <label for="username">Name:</label>
                                            <input type="text" name="USERNAME" id="username" tabindex="1" class="form-control" placeholder="Name">
                                        </div>
                                        <div class="form-group text-center">
                                            <label for="birthday">Birthdate:</label>
                                            <input type="date" name="BIRTHDATE" id="birthdate" tabindex="2" class="form-control" required="required">
                                        </div>
                                        <div class="form-group text-center">
                                            <label for="college">College:</label>
                                            <select class="form-control yep" id="college" name="COLLEGE">
                                                <option>CCS</option>
                                                <option>CLA</option>
                                                <option>COE</option>
                                                <option>COB</option>
                                                <option>SOE</option>
                                                <option>COS</option>
                                            </select>
                                        </div>
                                        
                                        <div class="form-group text-center">
                                            <label for="gender">Gender:</label>
                                            <center>
                                                <label class="radio-inline radio-custom">
                                                    <input name="GENDER" id="gender" type="radio" value="M">Male
                                                </label>
                                                <label class="radio-inline radio-custom">
                                                    <input name="GENDER" id="gender" type="radio" value="F">Female
                                                </label>
                                            </center>
                                        </div>
                                        
                                        <hr class="hr-custom-5">

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <center>
                                                    <span class="green-heading">Pre-Survey Questions</span>
                                                </center>
                                            </div>
                                        </div>
                                        
                                        <hr class="hr-custom-4">
                            
                                        <div class="form-group">
                                            <label for="highschool">Was your previous high school a private or a public school?</label>
                                            <br>
                                            <label class="radio radio-custom">
                                                <input name="HIGHSCHOOL1" id="highschool1" type="radio" value="PRIVATE">Private
                                            </label>
                                            <label class="radio radio-custom">
                                                <input name="HIGHSCHOOL1" id="highschool1" type="radio" value="PUBLIC">Public
                                            </label>
                                        
                                        </div>
                                        <hr class="hr-custom">
                                        <div class="form-group">
                                            <label for="highschool">Was your previous high school a co-ed or exclusive school?</label>
                                            <br>
                                            <label class="radio radio-custom">
                                                <input name="HIGHSCHOOL2" id="highschool2" type="radio" value="Co-ed">Co-ed
                                            </label>
                                            <label class="radio radio-custom">
                                                <input name="HIGHSCHOOL2" id="highschool2" type="radio" value="Exclusive (All boys/girls)">Exclusive (All boys/girls)
                                            </label>
                                            
                                        </div>
                                        <!-- <hr class="hr-custom">
                                        <div class="form-group">
                                            <label for="college2">What college are you currently enrolled in?</label>
                                            <br>
                                            <label class="radio radio-custom">
                                                <input name="COLLEGE2" id="college2" type="radio" value="COE">COE
                                            </label>
                                            <label class="radio radio-custom">
                                                <input name="COLLEGE2" id="college2" type="radio" value="CCS">CCS
                                            </label>
                                            <label class="radio radio-custom">
                                                <input name="COLLEGE2" id="college2" type="radio" value="COB">COB
                                            </label>
                                            <label class="radio radio-custom">
                                                <input name="COLLEGE2" id="college2" type="radio" value="CLA">CLA
                                            </label>
                                            
                                        </div> -->
                                        <hr class="hr-custom">
                                        <div class="form-group">
                                            <label for="device">What device do you use the most when browsing the internet?</label>
                                            <br>
                                            <label class="radio radio-custom">
                                                <input name="DEVICE" id="device" type="radio" value="PC">PC/Laptop
                                            </label>
                                            <label class="radio radio-custom">
                                                <input name="DEVICE" id="device" type="radio" value="TAB">Tablet
                                            </label>
                                            <label class="radio radio-custom">
                                                <input name="DEVICE" id="device" type="radio" value="MOB">Mobile Phone
                                            </label>
                                            
                                        </div>
                                        <hr class="hr-custom">
                                        <div class="form-group">
                                            <label for="hobbies">Which among the list best describes your hobbies the most? (Choose 1 only)</label>
                                            <br>
                                            <label class="radio radio-custom">
                                                <input name="HOBBIES" id="hobbies" type="radio" value="SPORTS">Sports and physical activities
                                            </label>
                                            <label class="radio radio-custom">
                                                <input name="HOBBIES" id="hobbies" type="radio" value="TECH">Technology (Programming, Video Games, Surfing the internet, etc.)
                                            </label>
                                            <label class="radio radio-custom">
                                                <input name="HOBBIES" id="hobbies" type="radio" value="ART">Art (Music, Movies, Acting, Painting, Graphic Design, Drawing, etc.)
                                            </label>
                                            <label class="radio radio-custom">
                                                <input name="HOBBIES" id="hobbies" type="radio" value="LITERATURE">Literature (Writing, Reading, etc.)
                                            </label>
                                            <label class="radio radio-custom">
                                                <input name="HOBBIES" id="hobbies" type="radio" value="SOCIAL">Environmental/Social work (Gardening, Volunteering, etc.)
                                            </label>
                                            
                                        </div>
                                        <hr class="hr-custom">
                                        <div class="form-group">
                                            <label for="primaryshop">Do you primarily shop online or at a physical retail store?</label>
                                            <br>
                                            <label class="radio radio-custom">
                                                <input name="PRIMARYSHOP" id="primaryshop" type="radio" value="Online">Online
                                            </label>
                                            <label class="radio radio-custom">
                                                <input name="PRIMARYSHOP" id="primaryshop" type="radio" value="Retail Store">Retail store
                                            </label>
                                            
                                        </div>
                                        <hr class="hr-custom">
                                        <div class="form-group">
                                            <label for="shopnumber">How many clothing e-commerce websites do you know of?</label>
                                            <br>
                                            <label class="radio radio-custom">
                                                <input name="SHOPNUMBERS" id="shopnumber" type="radio" value="1-3 websites">1 - 3 e-commerce websites
                                            </label>
                                            <label class="radio radio-custom">
                                                <input name="SHOPNUMBERS" id="shopnumber" type="radio" value="3-6 websites">3 - 6 e-commerce websites
                                            </label>
                                            <label class="radio radio-custom">
                                                <input name="SHOPNUMBERS" id="shopnumber" type="radio" value="7 above">More than 7 e-commerce websites
                                            </label>
                                            
                                        </div>
                                        <hr class="hr-custom">
                                        <div class="form-group">
                                            <label for="shophours">How frequent do you shop online?</label>
                                            <br>
                                            <label class="radio radio-custom">
                                                <input name="SHOPHOURS" id="shophours" type="radio" value="1-2hours">1 - 2 hours
                                            </label>
                                            <label class="radio radio-custom">
                                                <input name="SHOPHOURS" id="shophours" type="radio" value="3-4hours">3 - 4 hours
                                            </label>
                                            <label class="radio radio-custom">
                                                <input name="SHOPHOURS" id="shophours" type="radio" value="5 above">5 hours and above
                                            </label>
                                            <label class="radio radio-custom">
                                                <input name="SHOPHOURS" id="shophours" type="radio" value="none">I do not browse e-commerce websites
                                            </label>
                                            
                                        </div>
                                        <hr class="hr-custom">
                                        <div class="form-group">
                                            <label for="shopitems">How many items have you bought from clothing e-commerce websites?</label>
                                            <br>
                                            <label class="radio radio-custom">
                                                <input name="SHOPITEMS" id="shopitems" type="radio" value="1-10items">1 - 10 items
                                            </label>
                                            <label class="radio radio-custom">
                                                <input name="SHOPITEMS" id="shopitems" type="radio" value="11-20items">11 - 20 items
                                            </label>
                                            <label class="radio radio-custom">
                                                <input name="SHOPITEMS" id="shopitems" type="radio" value="above 20">More than 20 items
                                            </label>
                                            <label class="radio radio-custom">
                                                <input name="SHOPITEMS" id="shopitems" type="radio" value="none">I have not purchased from an e-commerce website
                                            </label>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="products">In e-commerce websites, what types of products do you purchase the most?</label>
                                            <br>
                                            <label class="radio radio-custom">
                                                <input name="PRODUCTS" id="products" type="radio" value="footwear">Footwear
                                            </label>
                                            <label class="radio radio-custom">
                                                <input name="PRODUCTS" id="products" type="radio" value="apparel">Apparel (Shirts, Jackets, Pants, Shorts)
                                            </label>
                                            <label class="radio radio-custom">
                                                <input name="PRODUCTS" id="products" type="radio" value="accessories">Accessories (Bags, Caps, Socks, Belts)
                                            </label>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="prices">What are the prices of the products do you usually purchase in clothing e-commerce websites? (Ex. Sample prices are for t-shirts)</label>
                                            <br>
                                            <label class="radio radio-custom">
                                                <input name="PRICE" id="prices" type="radio" value="above">Above average price (Above PHP1000)
                                            </label>
                                            <label class="radio radio-custom">
                                                <input name="PRICE" id="prices" type="radio" value="average">Average price (PHP500-1000)
                                            </label>
                                            <label class="radio radio-custom">
                                                <input name="PRICE" id="prices" type="radio" value="below">Below average price (Below PHP500)
                                            </label>
                                        
                                        </div>
                                        <div class="form-group">
                                            <label for="designorfunctionality">When browsing a clothing e-commerce website, would you prefer better website design or better functionality?</label>
                                            <br>
                                            <label class="radio radio-custom">
                                                <input name="DESIGNORFUNCTIONALITY" id="designorfunctionality" type="radio" value="design">Design
                                            </label>
                                            <label class="radio radio-custom">
                                                <input name="DESIGNORFUNCTIONALITY" id="designorfunctionality" type="radio" value="functionality">Functionality
                                            </label>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="homepage">Which style would you prefer more in an e-commerce website homepage?</label>
                                            <br>
                                            <label class="radio radio-custom">
                                                <input name="HOMEPAGE" id="homepage" type="radio" value="detailed">Detailed and compact
                                            </label>
                                            <label class="radio radio-custom">
                                                <input name="HOMEPAGE" id="homepage" type="radio" value="simple">Simple and clean
                                            </label>
                                            
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <hr class="hr-custom-6">
                                                <div class="col-lg-6 col-lg-offset-3">
                                                    <input type="submit" name="userinfo_submit" id="userinfo_submit" tabindex="4" class="form-control btn btn-userinfo" value="Proceed">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="Assets/CSS/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <!--Custom-->
        <script src="Assets/JS/main.js"></script>
    </body>
</html>
