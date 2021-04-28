<?php
		/* Template Name: HOME */
		get_header();
?>
<div class="searchbar">
		<div class="searchbaritems">
		<input class="searchbox" type="text" placeholder="Search a product here...">
		<input class="btngo" type="submit" class="btn" value="Go">
		</br>
		<label class="tipsearch">Try to search numbers from the components</label>
		<a href="contactuspage.php" class="linkfilter">Filter Search</a>
		</div>
    </div>
<div class="container">
<!-- Slide Show -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="http://localhost/wordpress/wp-content/uploads/2021/04/phoneimg.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://localhost/wordpress/wp-content/uploads/2021/04/messageimg.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://localhost/wordpress/wp-content/uploads/2021/04/messageimg.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- End Slide Show -->

	</div>
    <div class="categoryanditems">
    	<div class="category">
    		<h2 class ="t1">Product Categories</h2>
    		</br>
    		<div class="cats">
    		<a href="adf.php">Capacitors</a>
    		</br>
    		<a href="err/nopage.php">Diode</a>
    		</br>
    		<a href="err/nopage.php">Resistors</a>
    		</br>
    		<a href="err/nopage.php">Transistors</a>
    		</br>
    		<a href="err/nopage.php">Potentiometers</a>
    		</br>
    		<a href="err/nopage.php">Fuses</a>
    	</div>
    </div>
    </div>
    <div class="items">
    	<div class="category">
    		<h2 class = "t1">Items</h2>
    		<div class="itemsinfo">
    			<a href="adf.php">Capacitors</a>
    		</br>
    		<a href="err/nopage.php">Diode</a>
    		</br>
    		<a href="err/nopage.php">Resistors</a>
    		</br>
    		<a href="err/nopage.php">Transistors</a>
    		</br>
    		<a href="err/nopage.php">Potentiometers</a>
    		</br>
    		<a href="err/nopage.php">Fuses</a>
    		</div>
    		
    	</div>
    </div>


<?php //get_footer(); ?>