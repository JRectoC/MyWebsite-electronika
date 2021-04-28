<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blank
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgR	Vzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<style type="text/css">
		body{
		color: white;
		background-image: url("http://localhost/wordpress/wp-content/uploads/2021/04/back.jpg");
		background-size: cover;

	}.header-wrapper{
		color: white;
		padding-top: 20px;
		padding-right: 25px;
		padding-left: 25px;
		padding-bottom: 20px;
		background-color: #cc0000;
		max-width: 100%;
		max-height: 10%;
		border-bottom-left-radius: 25px;
		border-bottom-right-radius: 25px;

	}.searchbar{
		margin-top: 10px;
		text-align: center;
		max-width: 100%;
		max-height: 30%;
		background-color: #ff704d;
		border-radius: 25px;
		padding: 2%;
	}.searchbox{
		width: 80%;
		height: 30px;
		border-radius: 20px;
	}.btngo{
		margin-left: 10px;
		width: 10%;
		height: 30px;
		border-radius: 10px;
	}.mylogo{
		margin-left: -40px;
		margin-top: -130px;
	}.navigator{
		color: gray;
		text-align: right;
		margin-top: -200px;
		font-size: 25px;
		padding-bottom: 30px;
	}.home{

		padding: 18px;
		border-radius: 10px;
	}.cart{
		padding-left: 10px;
		margin-bottom: -20px;
	}.linkfilter{
		padding-left:10px;
	}.tipsearch{
	}.categoryanditems{
		float:left;	
		width: 19.5%;

	}.category{
		border-radius: 20px;
		color: white;
		background-color: black;
		height:100%;
		max-width: 100%
	}.cats{
		width: 100%;
		margin-left: 10px;
		font-size: 17px;
	}.items{
		float: right;
		width: 80%;
		height: 100%;

	}.aboutus{
		color:white;
		margin-top: 20px;
		text-align: center;
		width: 100%;
		height:100%;
		max-width: 100%
		max-height:100%;
		background-color: #e62e00;
		border-bottom-left-radius: 25px;
		border-bottom-right-radius: 25px;
	}.p1{
		padding-right: 20%;
		padding-left: 20%;
		font-size: 20px;
	font-family: Arial;
	text-align: center;
	}.p2{
		padding-bottom: 5%;
		font-size: 20px;
	font-family: Arial;
	text-align: center;
	}.locimg{
		margin: 20%;
		margin-top: 10%;

	}.phoneimg{
		margin: 20%;

	}.messageimg{
		margin: 20%;

	}.infos{
	font-size: 18px;
	font-family: Arial;
	text-align: center;
	text-shadow: 1px 1px black;
	margin-left: -40px;
	margin-top: -5%;

	}.container{
		margin-top: 20px;
		max-width: 40%;
		max-height: 30%;
	}.contactus{
		color:white;
		margin-top: 20px;
		text-align: center;
		width: 100%;
		height:100%;
		max-width: 100%
		max-height:100%;
		background-color: #e62e00;
		border-bottom-left-radius: 25px;
		border-bottom-right-radius: 25px;
	}.t1{
		font-size: 20px;
		text-align: center;
		background-color: #ff704d;
		border-top-right-radius: 20px;
		border-top-left-radius: 20px;
		padding: 5px;
	}.lT1{
		font-size: 50px;
		text-align: center;
	}
h1{
	text-align: center;
	background-color: #ff704d;
	border-top-right-radius: 20px;
	border-top-left-radius: 20px;
}
p{
	padding-top: 10%;
	font-size: 20px;
	font-family: Arial;
	text-align: top;
}
h3{
	text-align: center;
	font-size: 40px;
	padding-top: 5%;
}
	</style>
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
		<!-- .site-branding -->
		<!-- #site-navigation -->
		<div class="header-wrapper">
		<img class="mylogo" src = "http://localhost/wordpress/wp-content/uploads/2021/04/electronika_logo.png" alt="Electronika logo" width = "640" height = "360">
		<div class="navigator">
			<a href="http://localhost/wordpress/home/" class="mybtn">Home</a>
			<d>|</d>
			<a href ="http://localhost/wordpress/home/product/" class ="mybtn">Products</a>
			<d>|</d>
			<a href="http://localhost/wordpress/about/" class="mybtn">About</a>
			<d>|</d>
			<a href="http://localhost/wordpress/contact/" class="mybtn">Contact Us</a>
			<a href="http://localhost/wordpress/cart-2/"><img class="cart" src = "http://localhost/wordpress/wp-content/uploads/2021/04/cart.png" alt="Electronika logo" width = "75" height = "75"></a>
		</div>
	</div>

