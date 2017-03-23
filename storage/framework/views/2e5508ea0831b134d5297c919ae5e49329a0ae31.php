<!DOCTYPE html>
<html>
<head>
	<title>Events</title>

    <style type="text/css">

    body {
        background: #2e8b57; 
        background: -webkit-linear-gradient(to left, #2e8b57 , #4682b4  ); 
        background: linear-gradient(to left, #2e8b57 , #4682b4  );
    }
    .logo{
        position: fixed;
    }
    
    li{
        float:right;
        border: 30px  ;
    }
    li a{
        display: inline-white;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        border: 30px;
    }
     li button:hover{
        color: red;
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
        margin:5px;
        padding: 5px;
        overflow: hidden;
        background-color:  #20b2aa ;
        position: fixed;
        top: 10px;
        width: 90%;
        height: 40px;   
        margin-left: 80px;
    }
    button{
                background-color: #66cdaa;
                height: 30px;
                width: 100px;
        }
    #footer{
        padding-left: 100px;
        margin-left: 10px;
    

        
    }
    p{
        font-size: 30px;
        font-family: "Times New Roman" , Times, serif;
        text-align: center;
        text-indent: 40px;
        letter-spacing: 4px;
        font-weight: 50px;
        margin-left: 10px;
    
    }
    

    </style>
</head>
<div class="ul">

        <li><form method="POST" action="/index">
            <?php echo e(csrf_field()); ?>

        <a><button type="submit">Home</button></a>
    
    </form> </li>

    <li><form method="POST" action="/about">
            <?php echo e(csrf_field()); ?>

        <a><button type="submit">About</button></a>
    
    </form></li>

    <li><form method="POST" action="/achievement">
            <?php echo e(csrf_field()); ?>

        <a><button type="submit">Achievements</button></a>
    </form></li>

     <li><form method="POST" action="/event">
            <?php echo e(csrf_field()); ?>

        <a><button type="submit">Events</button></a>
    </form></li>
        
</div>
<body>
	<div class="logo">
					<img src=" <?php echo e(URL::asset('img/nory13.png')); ?>" width="110px" > 
				</div>

 <div class="forever" >
    
    	
  
    		<h5>
    		<br /><br />
    	<img src="picture/nory7.jpg"  width="300" height="250"  alt=""  style=" border-radius:30px; border:10px ; "  />    
    			<small><q>La Verdarian sa Isip, sa Salita at sa Gawa</small></q></center>
<br>

    		  <div class="p1">  It’s been a tradition for the La Verdad Christian College to celebrate their foundation week in every second month of the year. It is by means of playing and enjoying games to improve their sportsmanship, camaraderie and other good characteristics that a La Verdarian must possess. Each class in elementary to college level was divided into 12 groups which they call the tribes on the foundation day.  The name of the 12 groups was derived from the tribes of Jacob which is from the name of his children: Reuben, Simeon, Levi Judah, Issacar, Zebulun, Joseph, Benjamin, Dan, Nephtali, Gad, Asher. All the student will merge with their respected groups not to mention their year level and courses on the foundation celebration. <br /><br /></div>
<br>
            
            <img src="picture/nory9.jpg"  width="300" height="200"  alt="" style=" border-radius:30px; border:10px ; "   />
            <small><q>Graduating College student of LVCc Apalit.</small></q>

            <div class="p2"><q>  Graduation isn't the end of a though journey... It is a beginning of the beutiful one.</q><br /><br /></div>
<br>
            	 <img src="picture/nory11.jpg"  width="300" height="200"  alt="" style=" border-radius:30px; border:10px ; "   />
            <small><q>Intramurals</small></q>
            <br /><br />
            	 <img src="picture/nory12.jpg"  width="300" height="200"  alt="" style=" border-radius:30px; border:10px ; "   />
            <small><q>Buwan ng Wika</small></q>
          
          
		</div>

	<footer>
	  
	       <a>Copyright2016.AllRightsReserved.</a>
	     
 	</footer>
</body>
</html>