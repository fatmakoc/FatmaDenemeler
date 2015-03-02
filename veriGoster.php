<html>
<title>
	Formlu bi şeyler
</title>
<head>
	<meta charset="utf-8">
	<!-- bburaaya css falan gelsin -->
  <link rel="stylesheet" href="style.css">
</head>
<body background="images.jpg">

<h1 > <pre>  Fatma Denemeler </h1>

<nav class="nvb" >
      <a href="http://www.muhammedmastar.com/c-dersleri"> C++ </a>   |
      <a href="http://www.muhammedmastar.com/csharp-dersleri"> C# </a>   |
      <a href="http://www.muhammedmastar.com/html-dersleri"> HTML </a>   |
      <a href="http://www.muhammedmastar.com/sql-dersleri"> SQL </a>

</nav>

<hr/>

<p>
 Welcome <br>
 Thank you guys for you came this page <br>
 This page is last page. <br>
 In there,Your information was signed up LogIn page which I took to this page with PHP codes.



</p>



<?
$ad=$_POST['ad'];
$parola=$_POST['parola'];
$yil=$_POST['year'];
$cinsiyet=$_POST['sex'];

?>

<pre> 

<div id="div2">
 <table style="width=60px; height=90px;" id="tabloveri">
      <tr>
        <td> User Name: </td>
        <td> <? echo $ad; ?></td>
      <tr>
        <td> Password : </td>
        <td> <? echo $parola; ?> </td>
      <tr>
         <td> Sex:      </td> 
         <td> <? echo $cinsiyet ?> </td>
      <tr>
         <td> Birthyear: </td>
         <td> <? echo $yil ?> </td>


 </table>
</div>





</body>
</html>
