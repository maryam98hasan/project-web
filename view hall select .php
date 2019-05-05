<!doctype html>
<html>
<style type="text/css">
  
</style>
<head>
<meta charset="utf-8">
<title>view hall for customer</title>
  <link href="add.css" rel="stylesheet" type="text/css">
</head>
<header>
 <ul id='right-nav'> 
     <li><a href='pro.php'><big>الصفحة الرئيسية </big></a></li></ul>
<ul id='right-nav'>
 <li><a href= "lab5.php" ><big>البحث عن اسم القاعة </big> </a></li>  
     <li><a href= "delete.php" ><big>الغاء الحجز</big> </a></li>
     <li><a href=" add.php"><big>العروض الأضافية</big></a></li>
     <li><a href="date of select.php"><big>تاريخ الحجز</big></a></li>
     <li><a href="hall.php"><big>القاعات</big></a></li>
</ul>
</header></br> 
<center>
 <h3 style="color:#DC143C">عرض القاعات المحجوزة  </h3>
 </center>
<body>
<?php

$link=mysqli_connect("localhost", "root", "", "wedding");

$qs=mysqli_query($link,'select  name,date ,time  from booking');
echo"<br> ";
echo"<center>"	;
echo '<table border="2"  width="1000" height="400"style="color:white;font-size:100;background:#DC143C">';
   echo '<tr>';
	
    echo '<td>أسم القاعة </td>';
    echo '<td>تاريخ الحجز</td>';
    echo '<td>وقت الحجز</td>';
    
   
 
    echo '</tr>';
while($row=mysqli_fetch_row($qs))
{
	
    echo '<tr>';
	
    echo '<td>'.$row[0].'</td>';
    echo '<td>'.$row[1].'</td>';
    echo '<td>'.$row[2].'</td>';
    
   
 
    echo '</tr>';
}
echo '</table>';
?>
 <br><br>
 <img src="m/23.jpg" width="540" height="330">
		    <img src="m/20.jpg" width="540" height="330">
			<br>
	        <img src="m/84.jpg" width="540" height="330">
		    <img src="m/85.jpg" width="540" height="330">
			<br>
			<br>
<table align="right" style="background-color:#333333;">
    <tbody> 
	      <tr valign="top">
          <td>
              <table dir="rtl" width="830" height="800" style="background-color:#f5f5f5;">
         </td>
    </tbody>
</table>
    <td>
	   <table  dir="rtl" width="1500" padding="20px"margin="20px" >
       <tbody>
    <tr>
	    <td style="color:white;"><h2 align='right'>معلومات عنا 
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		</h2> </font></td>&nbsp&nbsp&nbsp&nbsp
	    <td style="color:white;"><h2 align='right'>مساعدة 
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		</h2> </font></td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<td style="color:white;"><h2 align='right'>احجزوا
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		</h2> </font></td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<td style="color:white;"><h2 align='right'>مزيد من المعلومات
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		</h2> </font></td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		
    </tr>
    <tr>
	  <td><font color="ffffff"size=4><li>من نحن</li></font>
	  <font color="ffffff"size=4><li>كيف نعمل</li></font>
	  <font color="ffffff"size=4><li>مركز الإعلام</li></font>
	  <font color="ffffff"size=4><li>فريق القيادة</li></font>
	  </td>
	  <td><font color="ffffff"size=4><li>المساعدة والاتصال</li></font>
	  <font color="ffffff"size=4><li>المساعدة الخاصة</li></font>
	  <font color="ffffff"size=4><li>أحدث المعلومات عن الحجوزات</li></font>
	  <font color="ffffff"size=4><li>الأسئلة الشائعة</li></font>
	  </td>
	
	  <td><font color="ffffff"size=4><li>خدمة السيارة مع سائق</li></font>
	  <font color="ffffff"size=4><li>قوموا بإدارة حجزكم</li></font>
	  <font color="ffffff"size=4><li>معلومات عن  اشكال القاعات المتوفره</li></font>
	  <font color="ffffff"size=4><li>معلومات الحجز</li></font>
	  </td>
	  <td><font color="ffffff"size=4><li>مزايا القاعه</li></font>
	  <font color="ffffff"size=4><li>تجربة حجزكم </li></font>
	  <font color="ffffff"size=4><li>الوجبات</li></font>
	  <font color="ffffff"size=4><li>الترفيه في الأجواء</li></font>
	
	  <font color="ffffff" size=4><li>حجز القاعات</li></font>
	  <font color="ffffff"size=4><li>التخطيط لزفافكم</li></font></td>	  
</br></table></br>
  <hr size="1" color="white" width="100%" >
  <table  dir="rtl" width="1500" padding="10px"margin="10px" >
  <tbody></br></table>
  <hr size="1" color="white" width="100%" >
     <table  dir="rtl" width="1500" padding="10px"margin="10px" >
     <tbody>
<tr>
    <td><font color="ffffff"size=4>الاشتراك بالعروض الخاصة </font></td>
    <td><font color="ffffff"size=4>التطبيقات والموقع على الهاتف</font></td>
    <td><font color="ffffff"size=4>تابع اخر التحديثات معنا </font></td>
</tr>
<tr>
    <td> <h4><font color="ffffff" size=4> التوفير مع أحدث الأسعار والعروض من قاعات الزفاف</br></font>
             <font color="ffffff"size=4>إلغاء الاشتراك أو تغيير خياراتك المفضلة </br></font></td>
    <td><font color="ffffff"size=4>حجز القاعه</br> </font></td>
    <td><font color="ffffff"size=4>شارك تجربتك مع قاعات الزفاف</h4> </br></font></td>
</tr></br>
<tr>
     <td> <input  id ="subm" type="email"  placeholder="عنوان البريد الألكتروني">&nbsp&nbsp&nbsp&nbsp
          <input  id ="subz" type="submit"  name='submit' value=" أشتراك "size=" 10"  /></br></br>
          <font color="ffffff" size=4>لمزيد من التفاصيل عن كيفية استخدامنا لمعلوماتكم، </font></br>
          <font color="ffffff"size=4>يرجى الاطلاع على سياسة الخصوصية الخاصة بنا. </font>
     </td>
     <td>  <a href="http://www.apple.com/">
           <img src="m/app store.PNG"/> &nbsp&nbsp&nbsp&nbsp
           <a href="http://play.google.com/">
           <img src="m/google.PNG"/>
     </td>
     <td> 
          <a href="http://m.facebook.com/">
          <img src="m/f.PNG" width="50" height="25"> &nbsp
	      <a href="http://www.googel.com/">
          <img src="m/g.PNG"width="50" height="25">&nbsp
	      <a href="http://www.instagram.com/">
          <img src="m/in.PNG"width="50" height="25">&nbsp
	      <a href="http://www.youtube.com/">
          <img src="m/y.PNG"width="50" height="25">&nbsp
	      <a href="http://twitter.com/">
	     <img src="m/t.PNG"width="50" height="25">&nbsp
    </td>
</tr></table>
              <hr size="1" color="white" width="100%" >
<table  dir="rtl" width="1500" padding="5px"margin="5px" >
  <tr>
       <td><font color="ffffff"size=4>إمكانية الدخول</td>
       <td><font color="ffffff"size=4>تواصلوا معنا</td>
       <td><font color="ffffff"size=4>سياسة الخصوصية</td>
       <td><font color="ffffff"size=4>سياسة ملفات تعريف الارتباط</td>
       <td><font color="ffffff"size=4>أمن الإنترنت</td>
       <td><font color="ffffff"size=5>خريطة الموقع</td>
  </tr>

</table></tbody></br> </br>  
</body>
</html>