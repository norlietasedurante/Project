
<!DOCTYPE html >
<html>
<head>

		<title>Home</title>

<style type="text/css">

	body {
		background: #2e8b57; 
		background: -webkit-linear-gradient(to left, #2e8b57 , #4682b4	); 
		background: linear-gradient(to left, #2e8b57 , #4682b4	);
    }
    .logo{
		position: fixed;
		top: 0%;
	}
	

	#body {
		font-family: Verdana, Geneva, sans-serif;
		font-size: 150%;
		height: 100%;
		width: 99%;
		border-bottom-width: 0%;
		border-left-width: 0%;	
		padding-top: 15%;

		
	}
		.ul{
		list-style-type: none;
		margin-left:100%;
		padding: 0%;
		overflow: hidden;
		background-color:  #333;
		position: fixed;
		top: 2%;
		width: 90%;
		height: 7%;	
		margin-left: 7%;
	}	li{
		float:left;
		margin-left: 1%;
		border-right: 1px solid #bbb;
	}
	li a{
		display: inline-block;
		color: white;
		text-align: center;
		padding: 14px 26px;
		text-decoration: none;
		border: 30%;
	}
	 li a:hover{
		color: #111;
	}

	
	#footer{
		padding-left: 100%;
		margin-left: 10%;
	

		
	}
	p{
		font-size: 200%;
		font-family: "Times New Roman" , Times, serif;
		text-align: center;
		text-indent: 5%;
		letter-spacing: 4px;
		font-weight: 50%;
		margin-left: 5%;

	}
	.main{
		width: 100%;	
	}

	</style>
</head>






<body >

<div class="ul">
	
			<li><a href="/index.blade"></a></p>
			<li><a href="/index.blade">Home</a></p>
			<li><a href="/About.blade">About</a></p>
			<li><a href="/Achievements.blade">Achievements</a></p>
			<li><a href="/rules.blade">Rules&Regulations</a></li>
			<li><a class="active" href="/form.blade">Form</a></li>
			
		
</div>	

		<div class="logo">
				<img src=" {{ URL::asset('img/nory13.png') }}" width="50%" >	
		</div>
		

<div class="mian">

<div id="body" >
	

			<strong><p><q>
			Wisdom based on the Truth is Priceless. At present, La Verdad Christian College  holds  the title  as the only educational institution that provides free uniforms, instructional materials and meals. 
          </q></p></strong>
          
	
</div>
</div>

</body>



</html>