<?php
 include 'header.php';
 include 'connection.php';


 $sql = "SELECT * FROM mmhh_members";

 $result = $conn->query($sql);
 
 
 
?>

			<div class="container">
					<div class="row">
						<div class="col-md-12">
						<h2 class="  text-center">OUR DEDICATED TEAM MEMBERS & VOLUNTEERS</h2>
						<div class="table-responsive">
						<table id="example" class="display" style="width:100%">
							<thead>
									<tr>
									
									 <th>Name</th>
									<th>Profession</th>
									<th>Phone</th>
									<th>Address</th>
										
									</tr>
							</thead>
							<tbody>

<?php
							if ($result->num_rows > 0) {
	 // output data of each row
	 while($row = $result->fetch_assoc()) {
		 echo "<tr><td>" . $row["fname"].  $row["lname"]."</td><td>" . $row["profession"]. "</td><td> " . $row["phone"]. "</td><td>". $row["address"]. "</td></tr>";
	 }
 } 
?>
</tbody>
        
    </table>
		</div>
		</div>
	</div>
	</div>
				
				
	</div>
	</div>

<?php
 include 'footer.php';
?>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>		
		
	
		
		
	<?php
	
	$conn->close();
	
	?>