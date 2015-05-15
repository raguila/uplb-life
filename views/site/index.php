<?php
/* @var $this yii\web\View */
$this->title = 'My Yii Application';
use yii\helpers\Html;
?>
<div class="site-index">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox" style="height: 400px">
        <div class="item active" style="height: 400px">
          <img src="images/dorm.jpg" alt="Chania">
          <div class="carousel-caption">
            <h3>Chania</h3>
            <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
          </div>
        </div>

        <div class="item" style="height: 400px">
          <img src="images/dorm2.jpg" alt="Chania">
          <div class="carousel-caption">
            <h3>Chania</h3>
            <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
          </div>
        </div>

        <div class="item" style="height: 400px">
          <img src="images/dorm3.jpg" alt="Flower">
          <div class="carousel-caption">
            <h3>Chania</h3>
            <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
          </div>
        </div>

        <div class="item" style="height: 400px">
          <img src="images/dorm4.jpg" alt="Flower">
          <div class="carousel-caption">
            <h3>Chania</h3>
            <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
          </div>
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
	
	  
	  <div class="container col-md-3" style="text-align: center;">
			<h2>Categories</h2>
			<br>
			<h4>Location</h4>
			<div class="checkbox" style="text-align:left;">
			<label>
			<input type="checkbox"  value="1" checked="">
			Inside UPLB
			<br>
			&nbsp <input type="checkbox"  value="0">
			Lower Campus
			<br>
			&nbsp <input type="checkbox"  value="0">
			Upper Campus
			<br>
			<input type="checkbox"  value="0">
			Outside UPLB
			</label>
			</div>

			<h4>House Rules</h4>
			<div class="checkbox" style="text-align:left;">
			<label>
			<input type="checkbox"  value="1" checked="">
			Pets Allowed
			<br>
			<input type="checkbox"  value="0">
			No Pets Allowed
			<br>
			<input type="checkbox"  value="0">
			No Curfew
			<br>
			<input type="checkbox"  value="0">
			Partying Allowed
			<br>
			<input type="checkbox"  value="0">
			Smoking Allowed
			<br>
			<input type="checkbox"  value="0">
			No Smoking Allowed
			<br>
			<input type="checkbox"  value="0">
			Visitors Allowed
			</label>
			</div>

			<h4>Furnishing</h4>
			<div class="checkbox" style="text-align:left;">
			<label>
			<input type="checkbox"  value="1" checked="">
			Airconditioned
			<br>
			<input type="checkbox"  value="0">
			Furnished
			<br>
			<input type="checkbox"  value="0">
			Unfurnished
			</label>
			</div>

			<h4>Ameneties</h4>
			<div class="checkbox" style="text-align:left;">
			<label>
			<input type="checkbox"  value="1" checked="">
			Has Laundry
			<br>
			<input type="checkbox"  value="0">
			Has Canteen
			<br>
			<input type="checkbox"  value="0">
			Has Parking
			<br>
			<input type="checkbox"  value="0">
			Has WiFi
			<br>
			<input type="checkbox"  value="0">
			Has CCTV
			<br>
			<input type="checkbox"  value="0">
			Has Security Guard
			</label>
			</div>

			<h4>Tenants</h4>
			<div class="checkbox" style="text-align:left;">
			<label>
			<input type="checkbox"  value="1" checked="">
			CoEd
			<br>
			<input type="checkbox"  value="0">
			Female Only
			<br>
			<input type="checkbox"  value="0">
			Male Only
			</label>
			</div>


			
	  </div>
	  <div class="container col-md-6">
			<input type="text" class="form-control" placeholder="Search...">
			<br>
			<h3>Search Result:</h3>
			<div class="container-main col-sm-6 col-md-4" style="text-align: center;">
				<?= Html::a( 'Apartment 1', '../site/individual'); ?>
				<br>
				<a href="individual.html"><img src="images/dorm.jpg" height="150px" width="150px"></a>
				 
			</div>
			<div class="container-main col-sm-6 col-md-4" style="text-align: center;">
				Apartment 2
				<br>
				<a href="individual.html"><img src="images/dorm2.jpg" height="150px" width="150px"></a>
			</div>
			<div class="container-main col-sm-6 col-md-4" style="text-align: center;">
				Apartment 3
				<br>
				<a href="individual.html"><img src="images/dorm3.jpg" height="150px" width="150px"></a>
			</div>

			<div class="container-main col-sm-6 col-md-4" style="text-align: center;">
				Apartment 4
				<br>
				<a href="individual.html"><img src="images/dorm4.jpg" height="150px" width="150px"></a>
			</div>
			<div class="container-main col-sm-6 col-md-4" style="text-align: center;">
				Apartment 5
				<br>
				<a href="individual.html"><img src="images/dorm5.jpg" height="150px" width="150px"></a>
			</div>
			<div class="container-main col-sm-6 col-md-4" style="text-align: center;">
				Apartment 6
				<br>
				<img src="images/dorm.jpg" height="150px" width="150px">
			</div>

			<div class="container-main col-sm-6 col-md-4" style="text-align: center;">
				Apartment 7
				<br>
				<img src="images/dorm6.jpg" height="150px" width="150px">
			</div>
			<div class="container-main col-sm-6 col-md-4" style="text-align: center;">
				Apartment 8
				<br>
				<img src="images/dorm7.jpg" height="150px" width="150px">
			</div>
			<div class="container-main col-sm-6 col-md-4" style="text-align: center;">
				Apartment 9
				<br>
				<img src="images/dorm2.jpg" height="150px" width="150px">
			</div>

			<div class="container-main col-sm-6 col-md-4" style="text-align: center;">
				Apartment 10
				<br>
				<img src="images/dorm3.jpg" height="150px" width="150px">
			</div>
			<div class="container-main col-sm-6 col-md-4" style="text-align: center;">
				Apartment 11
				<br>
				<img src="images/dorm.jpg" height="150px" width="150px">
			</div>
			<div class="container-main col-sm-6 col-md-4" style="text-align: center;">
				Apartment 12
				<br>
				<img src="images/dorm2.jpg" height="150px" width="150px">
			</div>


	  </div>
	  <div class="container col-md-3" style="text-align: center;">

			<h2>Filters</h2>
			<br>
			Price
			<div id="slider"></div>
			<br>
			Size
			<div id="slider2"></div>
			<br>
			Distance from UPLB
			<div id="slider3"></div>
			<br>

			<img src="images/ads.jpg">
			<br>
			<br>
			<img src="images/ads.jpg">
			<br>
			<br>

	  </div>
    </div>
</div>
