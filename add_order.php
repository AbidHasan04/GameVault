<?php 

$page_title = 'Add Order';

include ('mysqli_connect.php');


if (isset($_POST['submitted'])) {

	$errors = array(); 
	if (empty($_POST['date_order'])) {
		$errors[] = 'You forgot to enter the date when order was placed.';
	} else {
		$date_order = $_POST['date_order'];
	}
	
	
	if (empty($_POST['product'])) {
		$errors[] = 'You forgot to select the product.';
	} else {
		$product = $_POST['product'];
	}
	
	
	if (empty($_POST['product_count'])) {
		$errors[] = 'You forgot to enter the quantity of the product ordered.';
	} else {
		$product_count = $_POST['product_count'];
	}
	
	if (empty($_POST['customer'])) {
		$errors[] = 'You forgot to select the customer.';
	} else {
		$customer = $_POST['customer'];
	}
	
	if (empty($_POST['order_status'])) {
		$errors[] = 'You forgot to select the order status.';
	} else {
		$order_status = $_POST['order_status'];
	}
	
	
	if (empty($errors)) { 
	$query_check = "SELECT * FROM Product_inventory WHERE Product_id = $product";
	$result_check = @mysqli_query ($dbc, $query_check); 


	   if(@mysqli_num_rows($result_check) == 1){
	   	$row = @mysqli_fetch_array($result_check, MYSQL_ASSOC);
	   	
	   		if(intval($row['product_count']) < intval($product_count)){
	   			echo "Error: The requested order is more than the availability. There are only ".$row['product_count']." items/pieces available for this product. Place your order accordingly!";
	   		}
	   		else{
	   					
			$query = "INSERT INTO customer_orders (date_order, product, product_count,customer,order_status) VALUES ('$date_order', $product, $product_count,$customer,'$order_status')";		
			$result = @mysqli_query ($dbc, $query); 
			if ($result) { 
		
				
				echo '<h1 id="mainhead">Success!</h1>
					<p>You have added:</p>';

		   		echo "<table>
					<tr><td>Order Date:</td><td>{$date_order}</td></tr>
					<tr><td>Product:</td><td>{$product}</td></tr>
					<tr><td>Product count:</td><td>{$product_count}</td></tr>
					<tr><td>Customer:</td><td>{$customer}</td></tr>
					<tr><td>Order Status:</td><td>{$order_status}</td></tr>
					</table>";

				$order_id = @mysqli_insert_id($dbc); 
				
			
			} else { 
					echo '<h1 id="mainhead">System Error</h1>
						<p class="error">The order could not be added due to a system error. We apologize for any inconvenience.</p>'; // Public message.
					echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $query . '</p>'; 
					exit();
			}
	   		}	

		}
		else{
			echo '<h1 id="mainhead">System Error</h1>
						<p class="error">The requested product for the respective could not be found due to a system error. We apologize for any inconvenience.</p>'; // Public message.
					echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $query_check . '</p>'; 
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
 if (isset($_POST['order_status'])) $this_order_status=$_POST['order_status'];
 if (isset($_POST['product'])) $this_product_id=$_POST['product'];
 if (isset($_POST['customer'])) $this_customer_id=$_POST['customer'];

?>
<h2>Add Order</h2>

<form action="add_order.php" method="post">
<p>Order Date: <input type="date" name="date_order" value="<?php if (isset($_POST['date_order'])) echo $_POST['date_order']; ?>" required="required"/></p>
<?php
echo '<p> Product count:<input id="product_count" name="product_count" type ="number" min="0" max="10000" value="';
	if (isset($product_count)) {
		echo $product_count;
	}
	else{	
		echo intval($row[3]);
	}
echo '" required="required"/></p>';
?>

<p>Product: <select name="product">
<?php
$query_sub = "SELECT * FROM Product";
$result_sub = @mysqli_query ($dbc, $query_sub);

while ($row_sub = @mysqli_fetch_array($result_sub, MYSQL_ASSOC))
{	
	if ($row_sub['Product_id'] == $this_product_id) 
	{
		echo '<option value="'.$row_sub['Product_id'].'" selected="selected">'.$row_sub['pro_name'].'</option>';
	}
	else 
	{
		echo '<option value="'.$row_sub['Product_id'].'">'.$row_sub['pro_name'].'</option>';
	}
}
echo '</select> </p>';


echo '<p>Customer: <select name="customer">';

$query_sub = "SELECT * FROM customer";
$result_sub = @mysqli_query ($dbc, $query_sub);

while ($row_sub = @mysqli_fetch_array($result_sub, MYSQL_ASSOC))
{
	if ($row_sub['customer_id'] == $this_customer_id) 
	{
		echo '<option value="'.$row_sub['customer_id'].'" 	selected="selected">'.$row_sub['customer_name'].'</option>';
	}
	else 
	{
		echo '<option value="'.$row_sub['customer_id'].'">'.$row_sub['customer_name'].'</option>';
	}
}
echo '</select> </p>';
echo '<p>Order Status: <select name="order_status">';

$order_status_options = ['ordered','delivered','aborted'];
foreach ($order_status_options as $os) {
	
	if ($os == $this_order_status) 
	{
		echo '<option value="'.$os.'" selected="selected">' . 	$os . '</option>';
	}
	else 
	{
		echo '<option value="'.$os.'">'. $os . '</option>';
	}   
}
echo '</select> </p>';
@mysqli_close($dbc); 
?>
	<p><input type="submit" name="submit" value="Add Order" /></p>
	<input type="hidden" name="submitted" value="TRUE" />
</form>