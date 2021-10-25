
   <html>
<body>
    <form action="indexedArray5.php" method="get">
        Select Choice:
        <select name="choice">
        <option value="1">Replace one array with another array</option>
        <option value="2">Reverse of an array</option>
        <option value="3">Display array elemets from 2nd index</option>
        <option value="4">Display two array elements from 3rd index</option>
        <option value="5">Remove duplicate values</option>
        </select>
        <br><br>
        <input type="submit">
    </form>
</body>
</html>

<?php
    $a = array ( 2, 3, 4, 2, 9, 6);
    $b = array(3, 6, 7, 8, 2, 1);	
     
    $choice = $_GET['choice'];
    if ( $choice == 1 ) 
    {
        	$c= array_replace($a,$b);
	echo"<br>";
	print_r($a);
	echo"<br>";
	print_r($b);
	echo"<br>";
	print_r($c);
    } 
    else if ( $choice == 2 ) 
    {
	echo"<br>";
	print_r($a);
	echo"<br>";
	print_r(array_reverse($a));
    } 
    else if ( $choice == 3 ) 
    {
                   print_r($a);	
	$c = array_slice($a,2);
	echo"<br>";
	print_r($c);
    } 
    else if ( $choice == 4 ) 
    {
     	print_r($b);	
	$d = array_slice($b,3,2);
	echo"<br>";
	print_r($d);   
    } 
    else if ( $choice == 5 ) 
    {
        	echo"<br>";
	print_r($a);
	$e = array_unique($a);
	echo"<br>";
	print_r($e);
    } 
    else 
    {
        echo "Invalid Choice<br>";
    }
?>
