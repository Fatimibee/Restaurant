
<?php
include('include/header.php') ;
?>
<div class="welcome mb-0 mt-0 ">
	Fast and yummy .good for your tummy.
</div>
<main>
	<!-- carousel -->
<section>
<div id="demo" class="carousel slide" data-bs-ride="carousel">
	<div class=" carousel-indicators">
		<button type="button" class="active" data-bs-target="#demo" data-bs-slide-to="0"></button>
	   <button type="button" class="active" data-bs-target="#demo" data-bs-slide-to="1"></button>
	</div>
	<div class="carousel-inner">
		<div class="carousel-item active ">
			<img src="public/assest/images/12.webp" class="d-block w-100 slider-height ">
			<div class="carousel-caption"><h1> Elevate your dining with us</h1></div>
		</div>
		<div class="carousel-item ">
			<img src="public/assest/images/16.jpg" class="d-block w-100 slider-height ">
			<div class="carousel-caption"><h1>Dining is a love language</h1></div>
		</div>
		<button class="carousel-control-prev " type="button" data-bs-target="#demo" data-bs-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</button>
		<button class="carousel-control-next " type="button" data-bs-target="#demo" data-bs-slide="next">
			<span class="carousel-control-next-icon"></span>
		</button>
		
	</div>
</div>
</section>
<section>
	<!-- about us -->
	<div class="container">
		<h2 class="title mt-5 mb-5 w-100">About us</h2>
		<div class="description mb-5">
			<h5>Indulge in the rich flavors of India at our restaurant, where delicious dishes are expertly prepared and beautifully presented. Enjoy a warm, inviting atmosphere and a diverse menu that satisfies every craving. From spicy curries to aromatic biryanis, each bite promises an unforgettable culinary experience.</h5>
		</div>
		
	</div>
<!-- book a table -->
   <div class=" container-fluid order"style="margin-top:3px;">
  	<img src="public/assest/images/seating.webp" class="table">
  	<div class="center">Book a table for your self at a time convient for you</div>
  	<div class="center-button">
  <a href="book.php"><button type="button" class="btn btn-warning mt-3 mx-auto">BOOK YOUR TABLE</button></a>
  	</div>	
 
  	
  </div>
<!-- cards -->

 <div class="container-fluid">
<div class="service-card ">
	<div class="card">
		<img src="public/assest/images/2.png" class=" mx-auto d-block  img-fluid w-50">
		<h3 class="sub-title1"> OUR MENU</h3>
		<p class="discription1">
			Food,treats and drinks full of big and bold back yard flavor.Take your pick.
		</p>
		<div class="d-flex justify-content-center">
	<a href="menu.php">	<button type="button" class="btn btn-secondary know-button mx-auto mt-3">view More</button></a>
	</div>
	</div>

     <div class="card">
     	<img src="public/assest/images/event.jpeg" class=" mx-auto d-block img-fluid w-55 event">
     	<h3 class="sub-title1">Events</h3>
     	<p class="discription2 ">
     		Host your perfect event at our restaurant. From intimate gatherings to grand celebrations, we offer customized menus, a beautiful venue, and professional service. Our team ensures every detail is flawless, creating memorable experiences for you and your guests. Contact us today to plan your unforgettabl event.
     	</p>
     	<div class="d-flex justify-content-center">
	<a href="event.php"><button type="button" class="btn btn-secondary know-button mx-auto mt-3">view More</button></a>
	</div>
     </div>


      <div class="card">
      	<h3 class="sub-title1 mt-5 mb-3">Our Gallery</h3>
      	<div class="flex-container">
      <div><img src="public/assest/images/event1.jpeg" class="gallery"> </div> 
      	<div><img src="public/assest/images/food3.jpeg" class="gallery"></div>
      	<div><img src="public/assest/images/dacoration.jpeg" class="gallery"></div>
      	<div><img src="public/assest/images/live.jpeg" class="gallery"></div>
      	<div><img src="public/assest/images/6-1.jpg" class="gallery"></div>
      	<div><img src="public/assest/images/4.jpg" class="gallery"></div>
         </div>
      	
      
       <div class="d-flex justify-content-center">
	<a href="gallery.php">	<button type="button" class="btn btn-secondary know-button mx-auto mt-3">view More</button></a>
	</div>
      </div>
      </div>
     </div>

</div> 
 </section> 

<?php
include('include/footer.php');
?>