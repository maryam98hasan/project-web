<html>

<head> <title>this is my project</title></head>
 <link href="css/projectcss.css" rel="stylesheet" type="text/css" >
<body>
<header>
<ul id='right-nav'> 
<li><a href= "pro.php" ><big>الصفحة الرئيسية </big></a></li></ul>
<ul id='right-nav'>  
 <li><a href= "lab5.php" ><big>البحث عن اسم القاعة </big> </a></li>  
<li><a href= "delete.php" ><big>الغاء الحجز</big> </a></li>
<li><a href=" add.php"><big>العروض الأضافية</big></a></li>
<li><a href="date of select.php"><big>تاريخ الحجز</big></a></li>
<li><a href="hall.php"><big>القاعات</big></a></li>
</ul></header>
</br>
<center>
<h3><p style="color:#DC143C">أضافة مدير جديد  </p></h3>
</center>
 <form  action="insert new Adman.php" method='post'>
<div class="body">
		    <center>
			 <br>
		   
	        <div class="borderflight">
	            
	            <form>
	               <p style='color:black;font-size:25'>
				   
                   <input type="text" name="name" size="40" required> : أدخل أسم المدير الجديد
				  <br>
				  <br>
				  <input type="password" name="password" /> : أدخل الرمز السري 
                 
				   <br>
			      <br>
                   <button>حفظ</button>
	               
				   </form>
				
				  </CENTER>
			    
	    
		   </div>
		            
<blockquote>
			<blockquote>
			<img src="m/103.jpg" width="540" height="330">
		    <img src="m/102.jpg" width="540" height="330">
			<br>
	        <img src="m/84.jpg" width="540" height="330">
		    <img src="m/85.jpg" width="540" height="330">
			<br>
			<br>
  
	    </div>
	


    </body>
	<style type="text/css">
	.borderflight  {
   
    background-color: #DC143C;
	border: 1px solid black;
    height: 300px;
    width: 800px; 
    margin: 50px;
border-radius:20px;
	padding: 30px;
	background-position:center;
}


a  {
	color:black;
	text-decoration:none;
	}
	
	header
	{
	background: #f5f5f5;
	height: 65px;
	font-size:22px;
	}
	#left-nav{
	 width:160px;
    height:40px;
 background-color:rgba(0,0,0,0.4);
 font-size:20px;
 color:#fff;
 text-shadow:2px 2px 2px bule;

	float:left;
	}
	ul li{
	list-style-type:none;
	
	}
	ul li a :hover
	{
		color:green;
	}

	#right-nav{
	float:right;
	}
	#right-nav li{
	display:inline-block;
	margin: 10px;
	}
  

	.footer{
	background:#f5f5f5;
	font-size:20;
	padding:10px;
	margin:10px;
	margin-left:25%;
	border-radius:20px;
	float:bottom;
	text-align:center;
       
	width:60%;
	padding-top:10;
}
		 
div.transbox {  
  width: 100px; 
    height: 70px; 
	margin:0px;
	padding:0px;
  background-color: #ffffff; 
 
  float:right: }
    #subn{
 width:170px;
 height:40px;
 background-color:skyblue;
font-size:30px;
color :white;

 }
   input{
 width:300px;
 height:20px;
 background-color:white;
font-size:15px;
color :black;
   }
      button{
 width:200px;
 height:25px;
 background-color:black;
font-size:20px;
color :white;
   }
</html>