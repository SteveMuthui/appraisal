<?php


if(isset($_POST['myorder']))
	{
	$myorder=implode(',',$_POST['myorder']);
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<style>
			#customers {
			  font-family: Roboto;
			  border-collapse: collapse;
			  width: 100%;
			  top:0; 
			  margin-top:0;
			}

			#customers td, #customers th {
			  border: 1px solid #ddd;
			  padding:2px;
			}

			#customers tr:nth-child(even){background-color: #f2f2f2;}

			#customers tr:hover {background-color: #ddd;}

			#customers th {
			  padding-top: 6px;
			  padding-bottom: 6px;
			  text-align: left;
			  background-color: #4CAF50;
			  color: white;
			}
			
			/* Add a black background color to the top navigation */
			.topnav {
				background-color: #333;
				overflow: hidden;
				}

			/* Style the links inside the navigation bar */
			.topnav a {
			  float: left;
			  color: #f2f2f2;
			  text-align: center;
			  padding: 14px 16px;
			  text-decoration: none;
			  font-size: 17px;
			}

			/* Change the color of links on hover */
			.topnav a:hover {
			  background-color: #ddd;
			  color: black;
			}

			/* Add a color to the active/current link */
			.topnav a.active {
			  background-color: #4CAF50;
			  color: white;
			}

			/* Right-aligned section inside the top navigation */
			.topnav-right {
			  float: right;
			}
		</style>
	</head>
	<body>
		<div class="topnav">
		  <a class="active" href="#home">Home</a>
		  <div class="topnav-right">
			<a href="?logout">LogOut</a>
		  </div>
		</div>
		<table id="customers">
		  <tr>
			<th>Menu:</th>
			<th>My Order:</th>
		  </tr>
		  <tr>
			<td  style="width:50%" >
				<form action="" method="POST" name="Menu" autocomplete="off">
				<table id="customers" cellpadding="0" cellspacing="0">
				  <tr>
					<th colspan="3" >Breakfast:</th>
				  </tr>
				  <tr>
					<td>1 Chapati + Tea</td>
					<td>100/=</td>
					<td><input type="checkbox" <?php if ( (isset($myorder)) && ($myorder=="1 Chapati + Tea - 100")) { echo "checked=\"checked\""; }  ?> name="myorder[]" value="1 Chapati + Tea - 100"></td>
				  </tr>
				  <tr>
					<td>Tea + 1 Egg + 2 Slice bread</td>
					<td>150/=</td>
					<td><input type="checkbox" name="myorder[]" value="Tea + 1 Egg + 2 Slice bread - 150"></td>
				  </tr>
				  <tr>
					<td>Coffee</td>
					<td>50/=</td>
					<td><input type="checkbox" name="myorder[]" value="Coffee - 50"></td>
				  </tr>
				  <tr>
					<th colspan="3" >Lunch:</th>
				  </tr>
				  <tr>
					<td>1 Chapati + Beans</td>
					<td>400/=</td>
					<td><input type="checkbox" name="myorder[]" value="1 Chapati + Beans - 400"></td>
				  </tr>
				  <tr>
					<td>Rice + Beans</td>
					<td>200/=</td>
					<td><input type="checkbox" name="myorder[]" value="Rice + Beans - 200"></td>
				  </tr>
				  <tr>
					<td>Rice + Beef</td>
					<td>350/=</td>
					<td><input type="checkbox" name="myorder[]" value="Rice + Beef - 350"></td>
				  </tr>
				  <tr>
					<th colspan="3" >Drinks:</th>
				  </tr>
				  <tr>
					<td>1 Soda 300ml</td>
					<td>50/=</td>
					<td><input type="checkbox" name="myorder[]" value="1 Soda 300ml - 50"></td>
				  </tr>
				  <tr>
					<td>Fresh Juice 350ml Cup</td>
					<td>150/=</td>
					<td><input type="checkbox" name="myorder[]" value="Fresh Juice 350ml Cup - 150"></td>
				  </tr>
					<tr>
					<td colspan="3">
					<a onclick="document.forms['Menu'].submit()" href="#" style="text-decoration:none; float:right;" >
					<button style="background-color:#0091ea;" type="submit">Submit</button>
					<input type="hidden" name="insert" value="menuitem" />
					</a>
					</td>
					</tr>	
				</table>
				</form>
			</td>
			<td style="width:50%" >				
				<table style="top:0; margin-top:100px; position:fixed; min-width:750px; width:auto;" cellpadding="0" cellspacing="0">
					<?php
					if(isset($myorder))
						{
					?>
					<tr>
						<td colspan="2">
						<a href="print_receipt.php?myorder=<?php if(isset($myorder)) { echo $myorder; } ?>" style="text-decoration:none; float:right;" target="_blank" >Print Order</a>
						</td>
					</tr>
					<?php
						}
					?>
					<?php
					if(isset($myorder))
						{
						$incount=explode(",",$myorder); // Explode Med History selection
						
						$ttl=0;
						$mycount=count($incount);
						
						for($cnt=1; $cnt<=$mycount; $cnt++)
							{
							$order_items=explode("-",$myorder);
							$ttl+=$order_items[$cnt];
							}
							
						foreach($incount as $myorder)
							{
							$order_items=explode("-",$myorder); 								
					?>
					<tr style="width:100%;" >
					<td><?php echo $order_items[0]; ?></td>
					<td><?php echo $order_items[1]; ?></td>
					</tr>
					<?php 							
							}
								
					?>
					<tr style="top:0; margin-top:0; width:100%;" >
					<td>Total</td>
					<td>
					<?php				
					echo $ttl;
					?>
					</td>
					</tr>
					<?php
						}
					?>
				</table>
			</td>
		  </tr>
		</table>
	</body>
</html>

