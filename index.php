<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet"  href="css/style.css">
<link rel="stylesheet"  href="css/style2.css">
<link rel="stylesheet"  href="awefonts/css/font-awe.min.css">
<link rel="stylesheet"  href="libs/bootsstrap/css/bootsstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
	
<body>
	<header>	
		<div class="header">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
  				<div class="collapse navbar-collapse" id="navbarSupportedContent">
    				<ul class="navbar-nav mr-auto">
     					<li class="nav-item active">
        					<a class="nav-link" href="ltc2.html">Home <span class="sr-only">(current)</span></a>
      					</li>
      					<li class="nav-item">
                                            <a class="nav-link" href="InsertData.php">Insert</a>
      					</li>

        				<li class="nav-item">
                                            <a class="nav-link" href="UpdateData.php">Update</a>
      					</li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="ConnectToDB.php">View</a>
      					</li>
      					
      					<li class="nav-item">
                                            <a class="nav-link disabled" href="DeleteData.php">Delete</a>
      					</li>
   					</ul>
    				<form class="form-inline my-2 my-lg-0">
      					<input class="form-control mr-sm-2" type="search" placeholder="Search Products" aria-label="Search">
      					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    				</form>
  				</div>
			</nav>

		</div>
	</header>


		<header>
		<div class="slideshow-container">
  			<div class="mySlides fade">
                            <img src="./images/hinh1.jpg" style="width:100%">
  			</div>
 
  		<div class="mySlides fade">
                    <img src="./images/hinh2.jpg" style="width:100%">
  		</div>
 
  			<div class="mySlides fade">
                            <img src="./images/hinh3.jpg" style="width:100%">
  			</div>
		</div>
	<br>
 
		<div style="text-align:center">
  			<span class="dot" onclick="currentSlide(0)"></span> 
  			<span class="dot" onclick="currentSlide(1)"></span> 
  			<span class="dot" onclick="currentSlide(2)"></span> 
		</div>
	</header>

	<script>
  //khai báo biến slideIndex đại diện cho slide hiện tại
  	var slideIndex;
  // KHai bào hàm hiển thị slide
  	function showSlides() {
      	var i;
     	 var slides = document.getElementsByClassName("mySlides");
      	var dots = document.getElementsByClassName("dot");
     	 for (i = 0; i < slides.length; i++) {
         	slides[i].style.display = "none";  
      	}
      	for (i = 0; i < dots.length; i++) {
          	dots[i].className = dots[i].className.replace(" active", "");
      	}
 
      		slides[slideIndex].style.display = "block";  
      		dots[slideIndex].className += " active";
      //chuyển đến slide tiếp theo
      		slideIndex++;
      //nếu đang ở slide cuối cùng thì chuyển về slide đầu
      		if (slideIndex > slides.length - 1) {slideIndex = 0}    
      //tự động chuyển đổi slide sau 4s
      		setTimeout(showSlides, 4000);
  		}
  //mặc định hiển thị slide đầu tiên 
  		showSlides(slideIndex = 0);

  		function currentSlide(n) {showSlides(slideIndex = n);}
	</script>



<header class="containt">
	<div class="box-cont">
            <div class="box-img"><a href="ltc.html"><img src="./images/toy1.jpg"></a></div>
            <div class="box-img"><a href="ltc.html"><img src="./images/toy2.jpg"></a></div>
            <div class="box-img"><a href="ltc.html"><img src="./images/toy3.jpg"></a></div>
            <div class="box-img"><a href="ltc.html"><img src="./images/toy4.jpg"></a></div>
	</div>
</header>

	<footer class="footer">
			<div class="grid-row">
				<div class="grid-cloumn1">
					<ul class="footer-list">
						<li><img src="images/logo.png"></li>
						<li><a href="" class="footer-item_link">Address: 345 Ngô Quyền, Sơn Trà, Đà Đẵng, Việt Nam </a></li>
						<li><a href="" class="footer-item_link">Hotline: 0123456789</a></li>
					</ul>
				</div>
				<div class="grid-cloumn2">		
					<ul class="footer-list">
						<h5><strong> INFOMATION</strong></h5>	
						<li class="footer-item">
							<a href="" class="footer-item_link">Introduce</a>
						</li>
						<li class="footer-item">
							<a href="" class="footer-item_link">Privacy Policy</a>
						</li>
						<li class="footer-item">
							<a href="" class="footer-item_link">Shopping guide</a>
						</li>
						<li class="footer-item">
							<a href="" class="footer-item_link">Forwarding and payment</a>
						</li>
						<li class="footer-item">
							<a href="" class="footer-item_link">Return and warranty</a>
						</li>
						<li class="footer-item">
							<a href="" class="footer-item_link">Instructions for choosing a size</a>
						</li>
						<li class="footer-item">
							<a href="" class="footer-item_link">News & Blog</a>
						</li>
					</ul>
				</div>
				
				
				<div class="grid-cloumn3">
					<div class="social">
						<ul >
							<h5><strong>CONTACT WITH US </strong></h5>
								<li class="social"> <a href="https://www.facebook.com/cuong.luong.779857" target="_blank"><img src="images/logofb.png"></a></li>
								<li class="social"> <a href="" target="_blank"><img src="images/logogm.jpg"></a></li>
								<li class="social"> <a href="" target="_blank"><img src="images/logoz.jpg"></a></li>
						</ul>
					</div>
				</div>
			</div>
	</footer>
</body>
</html>
