<?php
use yii\helpers\Html;
use app\assets\AppAsset;

$bundle = AppAsset::register($this);
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
				<h1>The Developers</h1>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="text-align: center;">
        	<img src="<?=$bundle->baseUrl.'/images/ivy.png'?>" height="150px" width="150px"></img>
        	<p>Ivy Joy Aguila</p>

        </div>
		
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="text-align: center;">
        	<img src="<?=$bundle->baseUrl.'/images/roi.png'?>" height="150px" width="150px"></img>
        	<p>Roinand Aguila</p>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="text-align: center;">
        	<img src="<?=$bundle->baseUrl.'/images/monina.png'?>" height="150px" width="150px"></img>
        	<p>Monina Carandang</p>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="text-align: center;">
        	<img src="<?=$bundle->baseUrl.'/images/joman.png'?>" height="150px" width="150px"></img>
        	<p>John Emmanuel Encinas</p>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="text-align: center;">
				<h1>Overview of Functions</h1>
				<p>
					House Management<br>
					Units Management <br>
					Payment Management <br>
					And many more! <br>
				</p>
		</div>

</div>