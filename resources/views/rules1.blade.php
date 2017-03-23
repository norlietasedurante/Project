<!DOCTYPE html>
<html>
<head>
	<title>Rules&Regulations</title>

<style type="text/css">

    body {
        background: #2e8b57; 
        background: -webkit-linear-gradient(to left, #2e8b57 , #4682b4  ); 
        background: linear-gradient(to left, #2e8b57 , #4682b4  );
        
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
<div class="mian">


        <div class="logo">
                
            <img src=" {{ URL::asset('img/nory13.png') }}" width="110px" >  
        
        </div>
		
<div class="nory">
<table>
    <tr>
        <td>
		<center><h1>RULES AND REGULATIONS</h1></center>

<h2>MAJOR OFFENSES</h2>
<h3>
1. Cheating (giving/showing answers to one student, possession of "codigo", glancing at other's paper or allowing others to cheat during a quiz, test or examination.<br />
2. Bullying (as per instruction of DepEd, this is now considered a major offense).<br />
3. Dishonesty such as stealing of class or fellow student's funds/properties and other forms of dishonesty.<br />
4. Leaving the campus during class hours without proper authorization.<br />
5. Forgery.<br />
6. Tampering of school.<br />
7. Refusal to accept reprimands.<br />
8. Threatening or provoking classmates and teachers.<br />
9. Unauthorized use of school facilities or school name for unfavorable intentions.<br />
10. Circulating false or malicious informationn about the school.<br />
11. Fighting and inflicting injury to others/ physical assault on fellow students.<br />
12. Stealing of property of the school, school personnel, fellow sudents and teachers.<br />
13. Lying in official hearing and investigation.<br />
14. Continued disregard of school rules and policies.<br />
15. Posting of negative comments on Facebook, Twitter or other social networks.<br />
16. Disrespect/abusive behavior towards school authorities.<br />
17. Violation of computer and internet surfing rules set by the school. (Playing DOTA within the premises of ADD Compound)<br />
		</h3>
           <div class="next">
    <form method="POST" action="/back">
            {{ csrf_field() }}
        <button type="submit">Back</button></a>
    </form> 

    <form method="POST" action="/next1">
            {{ csrf_field() }}
        <button type="submit">Next</button></a>
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