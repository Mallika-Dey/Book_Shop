<?php
	error_reporting(0);
	include('functions.php');
    include('search.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>index</title>
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="../css/style.css" />
</head>
<body>
        <!-- 
                     <a href="../php/login_register/login.php" class="login">Login</a>
                     <a href="../php/login_register/register.php" class="signup">Register</a>
                -->
        <nav>
        <div class="logo">
            <h4>Book Shop</h4>
        </div>
        <ul class="nav-links">
            <li><a class="dif-color" href="#">Home</a></li>
            <li><a class="dif-color" href="#">About</a></li>
            <li><a class="dif-color" href="#">Contact</a></li>
            <li><a class="dif-color" href="../php/login_register/login.php">Login</a></li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        </nav>
            <form action="search.php" method="POST" class="search-book">
                <input type="text" name="book" placeholder="Search Your Book...">
                <button type="submit" name="search" id="search"><i class="fa fa-search"></i></button>
            </form>
    <div class="main">
        <div class="book">
         <h1>Adventure</h1>
            <?php 
                $pic=display('detective');
            ?>
  	<div class="container-fluid">
    <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="900000">
        <div class="carousel-inner row w-100 mx-auto" role="listbox">
            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-2 active">
            	<div class="set-background">
                	<img class="img-fluid mx-auto d-block" src="<?php echo $pic[0][0];?>" alt="slide 1" style="height: 170px; width: 160px;">
                	<div class="book-info">
                		<p><?php echo $pic[0][1]?></p>
                	</div>
                <div>
                    <form method="post">
                    <input type="submit" name="submit_pic" id="add_to_cart" value="Add to cart">
                    </form>
                </div>
           		</div>
        	</div>
            <?php
            for($i=1; $i<sizeof($pic); $i++)    {
                echo '<div class="carousel-item col-12 col-sm-6   col-md-4 col-lg-2">
                <div class="set-background">
                <img class="img-fluid mx-auto d-block" src='.$pic[$i][0].' alt="slide 2" style="height: 170px; width: 160px;">
                <div class="book-info">
                	<p>'.$pic[$i][1].'</p>
                </div>
                <div>
                    <form method="post">
                    <input type="submit" name="submit_pic" id="add_to_cart" value="Add to cart">
                    </form>
                </div>
                </div>
                </div>';
            }
            ?>
            
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <i class="fa fa-chevron-left fa-lg text-muted"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
            <i class="fa fa-chevron-right fa-lg text-muted"></i>
            <span class="sr-only">Next</span>
        </a>
    </div>
	</div>
	</div>

<br>
<br>
       
<script type="text/javascript">
        $('#carouselExample').on('slide.bs.carousel', function (e) {

    /*

    CC 2.0 License Iatek LLC 2018
    Attribution required
    
    */


    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 7;
    var totalItems = $('.carousel-item').length;
    
    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction=="left") {
                $('.carousel-item').eq(i).appendTo('.carousel-inner');
            }
            else {
                $('.carousel-item').eq(0).appendTo('.carousel-inner');
            }
        }
    }
});
</script>

<script type="text/javascript" src="../javascript/open.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
</body>
</html>

