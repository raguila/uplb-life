<?php
use yii\helpers\Html;
use app\assets\AppAsset;

$bundle = AppAsset::register($this);
$this->title = 'About Us';
?>
<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="text-align: center;">
				<h1>Background of the Project</h1>
				<p>
					Submitted as final project for IT227 (E-Commerce) under Dr. Koh and Prof. Mercado. <br>
					This project is focused and based on the student needs to find dormitories for now. <br>
				</p>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="text-align: center;">
				
				<h1>The Company</h1>
				
				
		</div>

		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="text-align: right;">
				
				<img src="<?=$bundle->baseUrl.'/images/company_logo.jpg'?>" height="160px" width="120px"></img>
				
				
		</div>
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="text-align: left;">
				
				<p>
					We are <b>Infamous Software Company.</b> <br>
					We are a group of awesome developers studying Masters of Information Technology at UPLB <br>
					We love coding and making websites using Yii 2.0 Framework and using MeteorJS. <br>
					Tell us what you want. We'll do it for you. ;)<br>
				</p>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="text-align: left;">
				
		</div>
		<br>
		<br>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="text-align: center;">
				<h1>The Developers</h1>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="text-align: center;">
        	<img src="<?=$bundle->baseUrl.'/images/ivy.png'?>" height="150px" width="150px"></img>
        	<p>Ivy Joy Aguila</p>
        	<p>MIT Batch 2013</p>

        </div>
		
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="text-align: center;">
        	<img src="<?=$bundle->baseUrl.'/images/roi.png'?>" height="150px" width="150px"></img>
        	<p>Roinand Aguila</p>
        	<p>MIT Batch 2014</p>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="text-align: center;">
        	<img src="<?=$bundle->baseUrl.'/images/monina.png'?>" height="150px" width="150px"></img>
        	<p>Monina Carandang</p>
        	<p>MIT Batch 2014</p>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="text-align: center;">
        	<img src="<?=$bundle->baseUrl.'/images/joman.png'?>" height="150px" width="150px"></img>
        	<p>John Emmanuel Encinas</p>
        	<p>MIT Batch 2012</p>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="text-align: center;">
				<h1>Overview of Functions</h1>
				<p>
					House Management<br>
					Units Management <br>
					Payment Management <br>
					Dorm Interactive Map<br>
					Ads Manager <br>
					And many more! <br>
				</p>
				<p>
					Reference for some image and interactive dorm map: UPLB UHO 
				</p>
		</div>

</div>