 <!DOCTYPE html>
<html>
<head>
	<title>Minor Offinse</title>
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
	
	.nory{
		text-align: left;
		margin-left: 5%;
	}
	 table{

				               border: 1px solid black;
                width: 80%;
                height: 20%;
                margin-left: 9%;
                border-radius: 5%;
                padding: 5%;
                font-size: 80%;
                text-align: left;
                margin-top: 10%;
                font-family: Verdana, Geneva, sans-serif;
	}
	
	.next{
		float:right;
		border: 30%  ;
		margin-top: 5%;
		padding-right: 10%;

	}
	
	#footer{
		padding-left: 28%;
		margin-left: 10%;
		margin-top: 1%;
	

		
	}
	  button{
                background-color: #66cdaa;
                height: 30px;
                width: 125px;
        }
	
</style>
</head>
		<div class="ul">
			<li><a href="/index.blade">Home</a></p>
			<li><a href="/About.blade">About</a></p>
			<li><a href="/Achievements.blade">Achievements</a></p>
			<li><a href="/rules.blade">Rules&Regulations</a></li>
			<li><a class="active" href="/form.blade">Form</a></li>
		
</div>
			
<body>


		<div class="logo">
				
			<img src=" <?php echo e(URL::asset('img/nory13.png')); ?>" width="110px" >	
		
		</div>
		
				
<div class="nory">


			 
<table id="one">
	<tr>		
		<td>
			<center>
					<h1>  RULES AND REGULATIONS</h1>
			</center>
		<h2>MINOR OFFENSES</h2>
		<h3>
		
1. Non-submission of letter of excuse for absence upon returning to school.<br />	
2. Habitual absences /tardiness.<br />
3. Non-submission of report card and other slips/forms after deadline.<br />
4. Bringing unnecessary objects to school (Confiscation is part of the .penalty).<br />
5. Engaging in petty quarels.<br />
6. Cutting classes.<br />
7. Unauthorized haircut.<br />
8. Inappropriate appearance not in line with the prescribed grooming of a La Verdarian such as dyed/colored hair, punk attire, earings, chains and use of cosmetics.<br />
9. Wearing slippers inside the shool premises is striclty prohibited.<br />
10. Violation of the cellular phone policy. (Cellular phones are not allowed).<br />
11. Unauthorized use of the classroom equipment.<br />
12. Non-attendance in school activities without valid reason.<br />
13. Indecent behavior/language in the classroom , during flag ceremony, official meeting and other activities.<br />
14. Habitual disregard of assignments in class, projects, and other requirements (three times a week is equivalent to one minor offense).<br />
15. Unauthorized staying in the classroom after school hours without valid reason..<br />
16. Improper use of the comfort room. (Taking a bath is not allowed).<br />
17. Bringing of unnecessary objects to school. (toys, cards, etc.).<br />

</div>
<div class="next">
	<form method="POST" action="/next">
			<?php echo e(csrf_field()); ?>

		<button type="submit">Next</button></a>
	</form>
</div>
	
		</td>
	</tr>
</table>

<div id="footer">
	  
   <a>Copyright2017.AllRightsReserved.</a>
	     
</div>


</body>
</html>