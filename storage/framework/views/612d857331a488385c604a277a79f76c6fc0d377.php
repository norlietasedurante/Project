<!DOCTYPE html>
<html>
<head>
	<title></title>
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
    
    li{
        float:left;
        margin-left: 10px;
        border-right: 1px solid #bbb;
    }
    li a{
        display: inline-block;
        color: white;
        text-align: center;
        padding: 14px 26px;
        text-decoration: none;
        border: 30px;
    }
     li a:hover{
        color: #111;
    }
    #body {
        font-family: Verdana, Geneva, sans-serif;
        font-size: 20px;
        height: 100px;
        width: 1200px;
        border-bottom-width: 0px;
        border-left-width: 0px; 
        padding-top: 200px;

        
    }
   .ul{
        list-style-type: none;
        margin-left:100px;
        padding: 5px;
        overflow: hidden;
        background-color:  #333;
        position: fixed;
        top: 10px;
        width: 90%;
        height: 40px;   
        margin-left: 80px;
    }
    button{
                background-color: #66cdaa;
                height: 30px;
                width: 150px;
        }
    #footer{
        padding-left: 10px;
        margin-left: 10px;
        text-align: center;


    

        
    }
    p{
        font-size: 20px;
      
        text-align: left;
        text-indent: 40px;
        letter-spacing: 4px;
        font-weight: 50px;
        margin-left: 10px;
    
    }
  .complete{
				width: 480px;
				border: 1px solid black;
				margin-left: 300px;
				border-radius: 10px;
				margin-top: 150px;
				padding: 10px;
				padding-right: 100px;
				font-size: 20px;
				text-align: left;
				font-family: courier;
				

			
			}
			input{
				margin-top: 10px;
				width: 200px;
				padding: 10px 10px;
				margin: 8px 0px;


			}
			h1{
				text-align: center;
				padding-left: 100px;
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
				
				<img src=" <?php echo e(URL::asset('img/nory13.png')); ?>" width="100px" >

		</div>

<div class="complete">
	
		<table>
			<tr>
				<td>
				<h1> Complete Form </h1>
				<br>
		           	Name: <?php echo e($name); ?> <br><br>
		           	Age: <?php echo e($age); ?> <br><br>
		           	Address: <?php echo e($address); ?> <br><br>
		           	Guardian: <?php echo e($guardian); ?> <br><br>
		           	Course: <?php echo e($course); ?> <br><br>
		           	
		         
		      <br><br>
		    	<div class="add-student">	
		    	<form method="POST" action="/add-students">
			  			<?php echo e(csrf_field()); ?>

			  			<button type="submit"> Add Student </button>
		    	</form>
		    	</div>
		    	<div class"show-student">
		    	<form method="POST" action="/show-students">
		    		<?php echo e(csrf_field()); ?>

		    			<button type="submit"> Show All</button>
		  	  	</form>
		  	  	</div>
</td>
		    </tr>
		</table>
</body>
</html>