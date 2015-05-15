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
					User management is not in the scope of this project but simple a User model and controller is used for the requisite Log In/Log out functions.<br> <br>
					Upon logging in, the user is redirected to a home page of feeds. All the latest posts are displayed, as well as popular posts, and the current pinned post. <br>
					'Like' buttons are used to determine a post's popularity. Quick commenting is allowed in the feeds page. <br>
					Clicking on 'view' will direct the user to a post's indiviual post page, which will allow the user to leave comments and view all the comments on that particular post. <br>
					Options such as delete and update are only available for the current user's own posts. <br> <br>
					The user interface is simple and eye-catching. It takes design cues from the social networking trends of disaplying feeds and updates without being too cluttered. <br>
				</p>
		</div>

</div>