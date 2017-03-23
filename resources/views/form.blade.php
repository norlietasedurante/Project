<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
    <style type="text/css">

    body {
        background: #2e8b57; 
        background: -webkit-linear-gradient(to left, #2e8b57 , #4682b4  ); 
        background: linear-gradient(to left, #2e8b57 , #4682b4  );
        padding-left: 10px;
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
    }   li{
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
  button{
                background-color: #66cdaa;
                height: 30px;
                width: 125px;
        }
    
    p{
        font-size: 20%;
      
        text-align: left;
        text-indent: 5%;
        letter-spacing: 4%;
        font-weight: 50%;
        margin-left: 10%;
    
    }
  .body{
				width: 45%;
				border: 1px solid black;
				margin-left: 23%;
				border-radius: 5%;
				margin-top: 10%;
				padding: 5%;
				padding-right: 3%;
				font-size: 100%;
				text-align: right;
				font-family: courier;
				

			
			}
			input{
				margin-top: 10%;
				width: 59%;
				padding: 2% 2%;
				margin: 2% 0%;


			}

    

    </style>
</head>
<body>
		<div class="ul">
	        <li><a href="/index.blade">Home</a></p>
            <li><a href="/About.blade">About</a></p>
            <li><a href="/Achievements.blade">Achievements</a></p>
            <li><a href="/rules.blade">Rules&Regulations</a></li>
            <li><a class="active" href="/form.blade">Form</a></li>
</div>
<div class="logo">
				
				<img src=" {{ URL::asset('img/nory13.png') }}" width="110px" >	
		</div>
		<div class="body">	
				
<table>
	<tr>
		<td>	
		<div class="h1">
			
			<h1>LVCC Registration Form</h1>				
		</div>		<form method="POST" action="/process-registration">
                                    {{ csrf_field() }}  
							    <br><label for="name">  Name: </label> 
								<input type="text" name="name"  placeholder="  name" required> <br>

								<br><label for="age"> Age:</label> 
								<input type="number" name="age" placeholder="age" required> <br>

								<br><label for="address"> Address: </label>
								<input type="text" name="address" placeholder=" address " required> <br>
								<br><label for="guardian"> Guardian: </label> 
								<input type="text" name="guardian" placeholder="guardian" required> <br><br>

								<br><label for="course"> Course: </label>
								<input type="text" name="course" placeholder=" course" required> <br>
								
			  			
								<br><button type="submit" > Register </button>
		    	</form>
												
				</div>	
		</td>
		</tr>
		</table>
	</div>
		
</body>

</html>