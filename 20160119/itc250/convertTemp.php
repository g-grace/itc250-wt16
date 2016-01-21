 <?php
//convertTemp.php
?>
<html>
<head><title>Welcome to your Temperature Conversion</title></head> 
    <style>
        table,td{
        border: 1px solid black;
        backgrond-color: #f1f1c1;
        color: black;
        }
        tr:nth-child(even){background-color: #f2f2f2;}
        th{
        background-color: #ccffff;
        }
    </style>
<body><h2 style="color:blue;">-- Temperature Convertion --</h2>  
<br><div>Insert your number and convert to Celsius, Fahrenheit, and Kelvin here!!</div></br>
<form action = "<?php echo $_SERVER[’PHP_SELF’]; ?>"  method = "GET">  Degrees:  <input type = "text" name = "degree" size=8> 
        <select name="scale"> 
            <option value="celcius">Celsius</option> 
            <option value="fahrenheit">Fahrenheit</option> 
            <option value="kelvin">Kelvin</option> 
        </select>  
        <br/>  <input type = "submit" name = "Convert" value ="Convert Temperature"/>  
    </form>
    
<?php    
//check for input
 if (array_key_exists('degree',$_GET)){
	$scale = $_GET['scale'];
	$degree = $_GET['degree'];
	$firstLength = strlen($_GET['degree']);
 }
//check that input is not NULL or NaN
if(($firstLength > 0) && (is_numeric($_GET['degree'])))

{
if ($scale == "celcius")  
{
    print "<table border>
    <tr><th colspan=2>Conversion Results</th></tr>
    <tr><td>$degree</td><td>celsius</td></tr>";  
    $c_2_f = ($degree*9/5)+32;  print "<tr><td>$c_2_f</td><td>fahrenheit</td></tr>";  
    $c_2_k = $degree+ 273.15;   print "<tr><td>$c_2_k </td><td>kelvin</td></tr></table>";
}  
    
if ($scale == "fahrenheit")  
{
    print "<table border>
    <tr><th colspan=2> Conversion Results</th></tr>
    <tr><td>$degree</td><td>farhenheit</td></tr>";  
    $f_2_c = ($degree-32)*5/9; print "<tr><td>$f_2_c</td><td>celsius</td></tr>";  
    $f_2_k = ($degree+459.67)*5/9;  print "<tr><td>$f_2_k </td><td>kelvin</td></tr></table>";
}   

if ($scale == "kelvin")  
{
    print "<table border>
    <tr><th colspan=2> Conversion Results</th></tr>
    <tr><td>$degree</td><td>kelvin</td></tr>";  
    $k_2_f = ($degree*9/5)-459.67; print "<tr><td>$k_2_f</td><td>fahrenheit</td></tr>";
    $k_2_c = $degree-273.15; print "<tr><td>$k_2_c </td><td>celsius</td></tr></table>";
}     
}
	 else
         //print an error message if input is NULL
		echo "<span style = \"color:red\">*Please enter a valid number.</span>";
?>
     
</body>  
</html>