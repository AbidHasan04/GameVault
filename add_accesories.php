<?php 

$page_title = 'Add Accessory';

include ('mysqli_connect.php');


if (isset($_POST['submitted'])) {
	$errors = array(); 

	if (empty($_POST['accessory_id'])) {
		$errors[] = 'You forgot to enter the product.';
	} else {
		$accessory_id = $_POST['accessory_id'];
	}

	
	if (empty($_POST['accessory_name'])) {
		$errors[] = 'You forgot to enter the accessory name.';
	} else {
		$accessory_name = $_POST['accessory_name'];
	}
	
	
	if (empty($_POST['details'])) {
		$errors[] = 'You forgot to enter accessory details.';
	} else {
		$details = $_POST['details'];
	}
		
	if (empty($errors)) { 
        .
		$query = "INSERT INTO accessories VALUES($accessory_id,'$accessory_name', '$details')";		
		$result = @mysqli_query ($dbc, $query); 
		if ($result) { 

			echo '<h1 id="mainhead">Success!</h1>
		<p>You have added:</p>';

		   echo "<table>
		<tr><td>Accessory id:</td><td>{$accessory_id}</td></tr>
		<tr><td>Accessory Name:</td><td>{$accessory_name}</td></tr>		
		<tr><td>Details:</td><td>{$details}</td></tr>
		</table>";

		$accessory_id = mysqli_insert_id($dbc); 

			
		} else { 
			echo '<h1 id="mainhead">System Error</h1>
			<p class="error">The accessory could not be added due to a system error. We apologize for any inconvenience.</p>'; // Public message.
			echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $query . '</p>'; // Debugging message.
			exit();
		}
		
	} else { 
	
		echo '<h1 id="mainhead">Error!</h1>
		<p class="error">The following error(s) occurred:<br />';
		foreach ($errors as $msg) { 
			echo " - $msg<br />\n";
		}
		echo '</p><p>Please try again.</p><p><br /></p>';
		
	} 


	
		
} 
?>
<?php 
 if (isset($_POST['accessory_id'])) $this_accessory=$_POST['accessory_id'];
 echo '<h2>Add Accessory</h2>
<form action="add_accessories.php" method="post">';
echo '<p>Accessory/Product: <select name="accessory_id">';
//drop-down
$query_sub = "SELECT * FROM Product where description = 'accessories' AND Product_id  NOT IN (select accessory_id FROM accessories)";
$result_sub = @mysqli_query ($dbc, $query_sub);

while ($row_sub = mysqli_fetch_array($result_sub, MYSQL_ASSOC))
{
	if ($row_sub['Product_id'] == $this_accessory) 
	{
		echo '<option value="'.$row_sub['Product_id'].'" 	selected="selected"> #'.$row_sub['Product_id'].$row_sub['pro_name'].'</option>';
	}
	else 
	{
		echo '<option 	value="'.$row_sub['Product_id'].'"> #'.$row_sub['Product_id'].$row_sub['pro_name'].'</option>';
	}
}
echo '</select> </p>';

echo'<p>Accessory Name: <input type="text" name="accessory_name" size="35" maxlength="35" value="';
 if (isset($_POST['accessory_name'])) echo $_POST['accessory_name'];
 echo '" required="required"/></p>'; 

echo '<p>Accessory details: <textarea required="required" name="details" id="details" rows="2" cols="50" value="';
if (isset($_POST['details'])) echo $_POST['details'];
echo '">';
if (isset($_POST['details'])) echo $_POST['details'];
echo '</textarea></p>';

@mysqli_close($dbc); 
echo '<p><input type="submit" name="submit" value="Add Product" /></p>
	<input type="hidden" name="submitted" value="TRUE" />
</form>';
?>