<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>Print Table Of Any Number</title>
</head>
<body>
<?php $tableError= $display = ""; ?>
<center>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<caption>Please Generate a table and square of any number</caption>
<input type="text" name="table" value="<?php if(isset($_POST['table'])){echo $_POST['table'];}?>">
<?php echo "<br>"; ?>
<?php echo $tableError; ?>
<?php echo "<br />"; ?>

<input type="submit" value="Print Table" name="print_table">
<input type="submit" name="square" value="Find square">







<?php


if($_SERVER['REQUEST_METHOD']== 'POST')
	
	{
		if($_POST['table'] == "")
		{
			$tableError = "Enter a number";
		}
		elseif(!preg_match("#[0-9]+#",$_POST['table']))
		{
			$tableError = "Enter only numbers";
		}
		else{
			$num = $_POST['table'];
				 
				if(isset($_POST['print_table'])){
			echo "<center><table border='1'>
			<tr>
			";
			for($i=1;$i<=10;$i++)
			{
				echo "<td>";
							 
				$mul = $num * $i;
 
				echo "$num*$i=<td><strong>$mul</strong></td>";
				echo "</td>";
				echo "</tr>";
				 
			}
			 
			echo "</table></center>";
				}
				else
				{
					$num*=$num; 
					echo "<h1 style='color:black;'>".$num."</h1>";
				}
				
				 
				
			 
			 
			}
			 
				}
		
	

?>


<?php 
 


?>
</form>
</center>
</body>
</html>
