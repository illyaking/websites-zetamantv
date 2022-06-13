<!DOCTYPE html> 
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Real Adventurs of Zetaman</title>
        <meta name="description" content="Zetaman is a docu-reality series that chronicles the crime fighting, comic book drawing and fundraising adventures of real-life superhero Illya 'Zetaman' King and his superhero-posse. " />
        <meta name="keywords" content="zetaman, agent null, tracy hudson, superheroes, real life superheroes, antiman" />
        <meta name="author" content="Allen Luebke">
        <meta name="robots" content="index, follow">
        <meta name="revisit-after" content="3 month">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="images/favicon.ico"/>
        <link href="style.css" rel="stylesheet" type="text/css" media="screen">
        <script src="js/jquery.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script>
        
        $(document).ready(function() {
        
        //Show the paging and activate its first link
        $(".paging").show();
        $(".paging a:first").addClass("active");
        
        //Get size of the image, how many images there are, then determin the size of the image reel.
        var imageWidth = $(".window").width();
        var imageSum = $(".image_reel img").size();
        var imageReelWidth = imageWidth * imageSum;
        
        //Adjust the image reel to its new size
        $(".image_reel").css({'width' : imageReelWidth});
        
        //Paging  and Slider Function
        rotate = function(){
            var triggerID = $active.attr("rel") - 1; //Get number of times to slide
            var image_reelPosition = triggerID * imageWidth; //Determines the distance the image reel needs to slide
        
            $(".paging a").removeClass('active'); //Remove all active class
            $active.addClass('active'); //Add active class (the $active is declared in the rotateSwitch function)
        
            //Slider Animation
            $(".image_reel").animate({
                left: -image_reelPosition
            }, 500 );
        
        }; 
        
        //Rotation  and Timing Event
        rotateSwitch = function(){
           play = setInterval(function(){ //Set timer - this will repeat itself every 7 seconds
              $active = $('.paging a:active').next(); //Move to the next paging
              if ( $active.length === 0) { //If paging reaches the end...
                  $active = $('.paging a:first'); //go back to first
             }
             rotate(); //Trigger the paging and slider function
          }, 7000); //Timer speed in milliseconds (7 seconds)
        };
        
        rotateSwitch(); //Run function on launch
        
        //On Hover
        $(".image_reel a").hover(function() {
            clearInterval(play); //Stop the rotation
        }, function() {
            rotateSwitch(); //Resume rotation timer
        });	
        
        //On Click
        $(".paging a").click(function() {
            $active = $(this); //Activate the clicked paging
            //Reset Timer
            clearInterval(play); //Stop the rotation
            rotate(); //Trigger rotation immediately
            rotateSwitch(); // Resume rotation timer
            return false; //Prevent browser jump to link anchor
        });
        
        
        });
        </script>
    </head>
    <body>
    <div id="container">
        <div id="header" onclick="location.href='index.php';" style="cursor:pointer;">
        </div>
        <?php include ("menu.php"); ?>
        <div id="sidebar"><?php include ("sidebar.php"); ?></div>
        <div id="bigWindow">
            <div class="main_view">
                <div class="window">
                    <div class="image_reel">
                        <a href="ep16.php"><img src="images/card_ep16.jpg" alt="Alternates United Card"></a>
                        <a href="ep15.php"><img src="images/card_ep15.jpg" alt="Blue Blaze Card"></a> 
                        <a href="ep14.php"><img src="images/card_ep14.jpg" alt="March Madness Card"></a>
                        <a href="ep11.php"><img src="images/card_ep11.jpg" alt="Hero Shadow Card"></a> 
                        <a href="ex06.php"><img src="images/card_outtake.jpg" alt="Outtake Card"></a> 
                    </div>
            	</div>
                	<div class="paging">
                        <a href="#" rel="1">1</a>
                        <a href="#" rel="2">2</a>
                        <a href="#" rel="3">3</a>
                        <a href="#" rel="4">4</a>
                        <a href="#" rel="5">5</a>
                 	</div>
            	</div>
            </div>
        <?php include ("webisodes.php"); ?>
        <br id="space">
        <div id="footer">
        <?php include ("footermenu.php"); ?>
        </div>
    </body>
</html>