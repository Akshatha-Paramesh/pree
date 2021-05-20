<!DOCTYPE html>
<html>
<head>
	<title>HomePage</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">

	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Newsreader:wght@500&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
<style type="text/css">
	body{
		margin: 0;
		padding:0;
		height: 150vh;
		background: linear-gradient(to top, #ffffff 0%, #C6E8E2 100%) no-repeat ;
	}
	
	.logo p{
		font-size: 35px;
		font-family: Oswald;
		font-weight: 1000;
		position: absolute;
		top:12px;
		left:30px;
		color: #090D38;
	}
	.logo img{
		width: 200px;
		position: absolute;
		top:-15px;
		left:90px;
	}
	.left-main h1{
		font-size: 50px;
		font-family: poppins;
		font-weight: 600;
		position: absolute;
		top:200px;
		left: 40px;
		color: #090D38;
	}
	.left-main h2{
		font-size: 20px;
		font-family: poppins;
		font-weight: 600;
		position: absolute;
		top:280px;
		left: 50px;
		color:#73747B;
	}
	#bank{
		position: absolute;
		top:100px;
		left:900px;
		width: 500px;
	}
	#dollar{
		position: relative;
		top:10px;
		left: 10px;
		width: 55px;
		margin-left: -10px;
	}
	#bubble1{
		position: absolute;
		top:80px;
		left:900px;
		width: 100px;
		box-shadow: 0px 20px 30px #9E9EA1;
		border-radius: 100px;
	}
	#bubble2{
		position: absolute;
		top:400px;
		left:1300px;
		width: 200px;
		box-shadow: 0px 20px 30px #9E9EA1;
		border-radius: 100px;
	}
	#bubble3{
		position: absolute;
		top:100px;
		left:1350px;
		width: 150px;
		box-shadow: 0px 20px 30px #9E9EA1;
		border-radius: 100px;
	}
	#bubble4{
		position: absolute;
		top:300px;
		left:800px;
		width: 170px;
		box-shadow: 0px 20px 30px #9E9EA1;
		border-radius: 9999px;
	}
	#bubble5{
		position: absolute;
		top:600px;
		left:800px;
		width: 240px;
		box-shadow: 0px 20px 30px #9E9EA1;
		border-radius: 1000px;
	}
	#bubble6{
		position: absolute;
		top:800px;
		left:1220px;
		width: 280px;
		box-shadow: 0px 20px 30px #9E9EA1;
		border-radius: 1000px;
	}
	.cust img{
		position: absolute;
		top:500px;
		width: 400px;
	}
	.tran img{
		position: absolute;
		top:800px;
		width: 200px;
		left:400px;
	}
	.cust button{
		color: white;
		font-family: poppins;
		font-size: 25px;
		border: none;
		outline: none;
		position: absolute;
		top:730px;
		left:95px;
		background: #147CA0;
		padding: 10px 30px;
		cursor: pointer;
		border-radius: 15px;
		transition: 0.5s;
		transition-property: background;
	}
	.cust a{
		text-decoration: none;
		color: white;
	}
	.cust button:hover,.tran button:hover{
		background: #106380;
	}
	.tran button{
		color: white;
		font-family: poppins;
		font-size: 25px;
		border: none;
		outline: none;
		position: absolute;
		top:1030px;
		left:330px;
		background: #147CA0;
		padding: 10px 30px;
		cursor: pointer;
		border-radius: 15px;
		transition: 0.7s;
		transition-property: background;
	}
	.tran a{
		text-decoration: none;
		color: white;
	}
</style>
<div class="logo">
	<p>SPARKS</p>
	<img src="images\bank-icon-logo-vector-260nw-399995245-removebg-preview.png">

</div>
	<div class="left-main">
		<h1>Welcome to<img id="dollar" src="images\dollar-removebg-preview.png">parks Bank </h1>
		<h2>A place where your money will be secure.</h2>
	</div>

	<div class="right-main">
		<img id="bank" src="images\bank.png">
		<img id="bubble1"  src="images\206855.png">
		<img id="bubble2"  src="images\Daco_4263670.png">
		<img id="bubble3"  src="images\graph+pie+chart+icon-1320186834564122565.png">
		<img id="bubble4"  src="images\stock-exchange-icon-png-9909.png">
		<img id="bubble5" src="images\pngaaa.com-219728.png">
		<img id="bubble6" src="images\pngaaa.com-3078078.png">
	</div>
	<div class="services">
		<div class="cust">
			<img src="images\kissclipart-talk-to-your-customers-clipart-social-media-custom-fc12c773de049ad4-removebg-preview.png">
			<button><a href="users.php">CUSTOMERS</button>
		</div>
		<div class="tran">
			<img src="images\PinClipart.com_dna-clip-art_700374.png">
			<button><a href="transactionhistory.php">TRANSACTION HISTORY</button>
		</div>
	</div>
	 <footer class="text-center mt-5 py-2" style="position: absolute; top: 1200px; left: 725px;color: black; text-align: center;">
            <p>&copy 2021. Made by <b>AKSHATHA P</b> <br> Intern at Sparks Foundation</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>	
</html>