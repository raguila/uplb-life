<?php
/* @var $this yii\web\View */
$this->title = 'UPLB Life';
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;
use yii\web\View;
//use yii\base\View;
?>
<div class="site-index">
    	
    <img src="images/banner.png" alt="UPLB Life">

     
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="left-side">
	
	  
	  <div class="container col-md-3" style="text-align: center;">
	  		

			<h2>Categories</h2>
			<br>
			<h4>Location</h4>
			
			<?php $form = ActiveForm::begin([
		        'action' => ['site/searchresult'],
		        'method' => 'get',
		    ]); ?>

			<label>
			<input type="checkbox"  name="HousesSearch[IsInsideUPLB]" id="inside_uplb" value="1" checked="">
			Inside UPLB
			<br>
			<input type="checkbox"  name="HousesSearch[IsLowerCampus]"  id="lower_campus" value="1">
			Lower Campus
			<br>
			<input type="checkbox"  name="HousesSearch[IsUpperCampus]" id="upper_campus" value="1">
			Upper Campus
			<br>
			</label>
			<br>
				

			<h4>House Rules</h4>
			<label>
			<input type="checkbox"  value="1" name="HousesSearch[PetsAllowed]" checked="">
			Pets Allowed
			<br>
			<input type="checkbox"  value="1" name="HousesSearch[HasCurfew]">
			Has Curfew
			<br>
			<input type="checkbox"  value="1" name="HousesSearch[SmokingAllowed]">
			Smoking Allowed
			<br>
			<input type="checkbox"  value="1" name="HousesSearch[VisitorsAllowed]">
			Visitors Allowed
			</label>
			<br>
			

			<h4>Furnishing</h4>
			<label>
			<input type="checkbox"  value="1" checked="" name="HousesSearch[hasAirConditioningUnit]">
			Airconditioned
			<br>
			<input type="checkbox"  value="1" name="HousesSearch[IsFurnished]">
			Furnished
			<br>
			<input type="checkbox"  value="1" name="HousesSearch[IsSemiFurnished]">
			Sem-furnished
			</label>
			<br>

			<h4>Ameneties</h4>
			<label>
			<input type="checkbox"  value="1" checked="" name="HousesSearch[HasLaundry]">
			Has Laundry
			<br>
			<input type="checkbox"  value="1" name="HousesSearch[HasCanteen]">
			Has Canteen
			<br>
			<input type="checkbox"  value="1" name="HousesSearch[HasParking]">
			Has Parking
			<br>
			<input type="checkbox"  value="1" name="HousesSearch[HasWifi]">
			Has WiFi
			</label>
			<br>
			<h4>Tenants</h4>
			<label>
			<input type="checkbox"  value="1" checked="" name="HousesSearch[IsCoEd]">
			CoEd
			<br>
			<input type="checkbox"  value="1" name="HousesSearch[IsFemaleOnly]">
			Female Only
			<br>
			<input type="checkbox"  value="1" name="HousesSearch[IsMaleOnly]">
			Male Only
			</label>
			<br>
			<br>

			<?= Html::submitButton('Search by Categories&raquo;', ['class' => 'btn btn-primary']) ?>

			<?php ActiveForm::end(); ?>

			
			
	  </div>


	  <div class="container col-md-6">
			<!-- <input type="text" class="form-control" placeholder="Search..."> -->
			<br />
			<?php $form = ActiveForm::begin([
		        'action' => ['site/searchresult'],
		        'method' => 'get',
		    ]); ?>
		    
		    <?= $form->field($main, 'HouseName',['template' => "{input}",])->textInput(['maxlength' => 255, 'placeholder' => 'Search..' ]) ?>
			<br>
			<?php ActiveForm::end(); ?>

			<div class="container-main col-md-12 " style="text-align: center;">
				<h4><?= Html::a( 'Featured Dormitory', 'index.php?r=houses/view&id=2'); ?></h4>
				<a href="index.php?r=houses/view&id=2"><img src="images/mens-dorm". height="200px" width="450px"></a>
				<h5> Men's Dormitory </h5>
			</div>

			<div class="container-main col-md-12 " style="text-align: center;">
				<h4><?= Html::a( 'Featured Apartment', 'index.php?r=houses/view&id=20'); ?></h4>
				<a href="index.php?r=houses/view&id=20"><img src="images/kdocs front view.jpg" height="200px" width="450px"></a>
				 <h5> KDOKS Apartments </h5>
			</div>

			<div class="container-main col-md-12 " style="text-align: center;">
				<h4><?= Html::a( 'New Houses', 'index.php?r=houses'); ?></h4>
				
				<div class="container-main col-md-6 " style="text-align: center;">
					<a href="index.php?r=houses/view&id=38"><img src="images/outside view_sandrose.png" height="200px" width="200px"></a>
					<h5> Sandrose Place </h5>
				</div>

				<div class="container-main col-md-6 " style="text-align: center;">
					<a href="index.php?r=houses/view&id=37"><img src="images/blue house.png" height="200px" width="200"></a>
					<h5> Blue House Apartments </h5>
				</div>

				<div class="container-main col-md-6 " style="text-align: center;">
					<a href="index.php?r=houses/view&id=31"><img src="images/andrecitos_building.jpg" height="200px" width="200px"></a>
					<h5> Andrecito's </h5>
				</div>

				<div class="container-main col-md-6 " style="text-align: center;">
					<a href="index.php?r=houses/view&id=32"><img src="images/name_vistadelrey.jpg" height="200px" width="200"></a>
					<h5> Vista Del Rey Apartments </h5>
				</div>

			</div>


	  </div>
	  <div class="container col-md-3" style="text-align: center;">
	  <?php $form = ActiveForm::begin([
	        'action' => ['site/searchresult'],
	        'method' => 'get',
	    ]); ?>
				<h2>Filters</h2>
				<br>
				
				<div id="slider">
					<label>Price</label> 
					<br />
					<label>500 - 2000 Php</label> 
					<?= $form->field($filter, 'Price',['template' => "{input}"])->input('range',['id' => 'price', 'value' => '500', 'min' => '500', 'max' => '20000' , 'oninput' => 'outputUpdatePrice(value)', 'class' => 'range-input']); ?>
					<!-- <input type="range" name="price" id="price" value="500" min="500" max="20000" oninput="outputUpdatePrice(value)"> -->
					<output id="amount_price"><label>500 Php</label></output>
				</div>
				<br>
				
				<div id="slider2">
					<label>Size</label>
					<br />
					<label>10 - 30 sq. meters</label>
					<?= $form->field($filter, 'Size',['template' => "{input}"])->input('range',['id' => 'size', 'value' => '20', 'min' => '10', 'max' => '30' , 'oninput' => 'outputUpdateSize(value)', 'class' => 'range-input']); ?> 
					<!-- <input type="range" name="size" id="size" value="20" min="10" max="30" oninput="outputUpdateSize(value)"> -->
					<output id="amount_size"><label>20 sq. meters</label></output>
				</div>
				<br>
				
				<div id="slider3">
					<label>Distance from UPLB</label>
					<br />
					<label>0 - 10 km</label>
					<?= $form->field($filter, 'Distance',['template' => "{input}"])->input('range',['id' => 'distance', 'value' => '0', 'min' => '0', 'max' => '10' , 'oninput' => 'outputUpdateDistance(value)', 'class' => 'range-input']); ?>  
					<!-- <input type="range" name="distance" id="distance" value="0" min="0" max="10" oninput="outputUpdateDistance(value)"> -->
					<output id="amount_distance"><label>0 km</label></output>
				</div>
				<br>
				<!-- <a class='btn btn-primary' href='index.php?r=houses/index'>Search by Filters&raquo;</a> -->
				<?= Html::submitButton('Search by Filters&raquo;', ['class' => 'btn btn-primary']) ?>

				<?php ActiveForm::end(); ?>
				<br>
				<br>
				<a href="https://www.facebook.com/bigbellysglobal"><img src="images/ads/bigbellys.jpg" width="200px" height="200px"></a>
				<h3> Big Bellys</h3>
				<br>
				<br>
				<a href="https://www.facebook.com/cafeellalosbanos"><img src="images/ads/ella.jpg" width="200px" height="200px"></a>
				<h3> Cafe Ella</h3>
				<br>
				<br>

			
				<?=
					$this->registerJs("function outputUpdatePrice(vol) {
						document.querySelector('#amount_price').value = vol+' Php';
						}
						function outputUpdateSize(vol) {
						document.querySelector('#amount_size').value = vol+' sq. meters';
						}
						function outputUpdateDistance(vol) {
						document.querySelector('#amount_distance').value = vol+' km';
						}", View::POS_END, 'site-index');
				?>
	  </div>
    </div>
</div>
