<!DOCTYPE html>
<html>
<head>
	<title>Rules&Regulations</title>

<style type="text/css">

    body {
        background: #2e8b57; 
        background: -webkit-linear-gradient(to left, #2e8b57 , #4682b4  ); 
        background: linear-gradient(to left, #2e8b57 , #4682b4  );
        
    } .logo{
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
    
    .nory{
        text-align: left;
        margin-left: 5%;
    }
     table{

                border: 1px solid black;
                width: 80%;
                height: 5%;
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
        padding-left: 30%;
        margin-left: 10%;
        margin-top: 1%;
    

        
    }
    button{
                background-color: #66cdaa;
                height: 30px;
                width: 125px;
        }
        .main{
            width: 100%;
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

<div class="main">
        <div class="logo">
                
            <img src=" <?php echo e(URL::asset('img/nory13.png')); ?>" width="110px" >  
        
        </div>
        
		
<div class="nory">
<table>
    <tr>
        <td>
	       <center><h1>RULES AND REGULATIONS</h1></center>

<h2>ONE STRIKE!</h2>
     <h3>
1. Possession or use of prohibited drugs, liqours, cigarettes and deadly weapons.<br />
2. Joining fraternity and sorority.<br />
3. Indecent conduct within the perimeter of the ADD Compound at any time or while in uniform outside the school. (Dating within the school premises.)<br />
4. Chewing gum and sticking it anywhere especially under the chairs, furniture and walls.<br />
5. Improper / incomplete and unauthorized use of school uniform.<br />
6. Vandalism. (Destruction of school property (including doorknobs), writing or drawing on the walls, desks and furniture.<br />
7. Engaging in Public Display of Afffection within the premises of ADD Compound.<br />
8. Any other conduct which endagers the good name of the school and its members.<br />
9. Relationship with the opposite sex, relationship with the third sex, engaing in pre-marital sex and all forms of immorality inside and outside the school premises (Mall, Public Places).<br />
10. Violation of the One Strike Policy before graduation (even one day before graduation) will mean holding of your diploma and certificate of good moral and the student will not be allowed to join the ceremonial march.<br />

        </h3>
             <div class="next">
                 <form method="POST" action="/back">
                         <?php echo e(csrf_field()); ?>

                     <button type="submit">Back</button></a>
                 </form> 
             </div>
        </td>
    </tr>
</table>

</div>
	
	<div id="footer">
	  
	       <a>Copyright2017.AllRightsReserved.</a>
	     
 	</div>
		</center>
        </div>
</body>
</html>