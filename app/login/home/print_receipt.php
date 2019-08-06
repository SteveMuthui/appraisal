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
			@media print {
				tr.hide {display: none;} 
				}
		</style>
	</head>
	<body>		
		<table id="customers" style="top:0; margin-top:40px; position:fixed; min-width:750px; width:auto;" cellpadding="0" cellspacing="0">
			<tr class="hide">
				<td style="padding:0px 60px" colspan="2" ><a href="#" onclick="window.print();"> Print Receipt </a></td>
			</tr>
			<tr>
				<td colspan="2" style="text-decoration:none; text-align:center; font-size:18px; color:#000000;" >RWATHE HOTEL</td>
			</tr>
			<tr>
				<td colspan="2" style="text-decoration:none; text-align:left; font-size:18px; color:#000000;" >
					<strong>Receipt No.: #001</strong>
				</td>
			</tr>	
			<?php 
			if(isset($_GET['tblno']))
				{
				$tblno=$_GET['tblno'];					
			?>
			<tr >
				<td colspan="2"  style="float:left;" >
				<strong>Table Number : </strong>
				<?php if(isset($tblno)) { echo $tblno; } ?></td>
			</tr>
			<?php
				}
			?>	
			<?php
			if(isset($_GET['myorder']))
				{
				$myorder=$_GET['myorder'];
											
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
			<tr style="top:0; margin-top:0; width:100%; border: 1px solid #ddd;" >
			<td><strong>Total</strong></td>
			<td>
			<?php				
			echo $ttl;
			?>
			</td>
			</tr>
			<?php
					}
				
				}
			?>
		</table>
	</body>
</html>	