<?php include('include/header.php');?>
<?php include 'include/conn.php';
	function getName($conn,$id){
		$query="select * from category where id='$id'";
		$result= mysqli_query($conn,$query);
		$fetch=mysqli_fetch_array($result);
		$name= $fetch['Name'];
		return $name;
	}
$q="select * from detail1";
$exe= mysqli_query($conn,$q);
//$fetch=mysqli_fetch_array($exe);
?>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
			<h2 class="title1">Manage detail</h2>
					<span style="float: right;"><a href="insertdetail.php" class="btn btn-primary"> Insert</a></span>
					<div class="panel-body widget-shadow">
						
						<div style="overflow-x:scroll;overflow-y:scroll;height:500px;width:300">
						<table class="table">
							<thead>
								<tr>
								  <th>id</th>
								  <th>Cat_id</th>
								  <th>Cat_Name</th>
								  <th>Name</th>
								  <th>Image1</th>
								  <th>Image2</th>
								  <th>Image3</th>
								  <th>Image4</th>
								  <th>desc</th>
								  <th>Action</th>
								</tr>
							</thead>
							<tbody>
							<?php if ($exe) {
while ($fetch=mysqli_fetch_array($exe)) { ?>
						
		<tr>
		<td><?php echo $fetch['id']; ?></td>
			<td><?php echo $fetch['Cat_id']; ?></td>
			<td><?php echo getName($conn,$fetch['Cat_id']); ?></td>
			<td><?php echo $fetch['Name']; ?></td>
<td><img src="<?php echo $fetch['Image1']; ?>" width="200px"></td>
<td><img src="<?php echo $fetch['Image2']; ?>" width="200px"></td>
<td><img src="<?php echo $fetch['Image3']; ?>" width="200px"></td>
<td><img src="<?php echo $fetch['Image4']; ?>" width="200px"></td>
						<td><?php echo $fetch['Description']; ?></td>
				
						<td><a href="deletedetail.php?id=<?php echo $fetch['id'];?>" class="btn btn-danger">Delete</a>
						<a href="updatedetail.php?id=<?php echo $fetch['id'];?>" class="btn btn-success">update</a></td>
							
	
		</tr>
		<?php } } ?>
								
							</tbody>
						</table>
					</div>
					<!--<div class="bs-example widget-shadow" data-example-id="bordered-table"> 
						<h4>Bordered Basic Table:</h4>
						<table class="table table-bordered"> <thead> <tr> <th>#</th> <th>First Name</th> <th>Last Name</th> <th>Username</th> </tr> </thead> <tbody> <tr> <th scope="row">1</th> <td>Mark</td> <td>Otto</td> <td>@mdo</td> </tr> <tr> <th scope="row">2</th> <td>Jacob</td> <td>Thornton</td> <td>@fat</td> </tr> <tr> <th scope="row">3</th> <td>Larry</td> <td>the Bird</td> <td>@twitter</td> </tr> </tbody> </table>
					</div>
					<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
						<h4>Hover Rows Table:</h4>
						<table class="table table-hover"> <thead> <tr> <th>#</th> <th>First Name</th> <th>Last Name</th> <th>Username</th> </tr> </thead> <tbody> <tr> <th scope="row">1</th> <td>Mark</td> <td>Otto</td> <td>@mdo</td> </tr> <tr> <th scope="row">2</th> <td>Jacob</td> <td>Thornton</td> <td>@fat</td> </tr> <tr> <th scope="row">3</th> <td>Larry</td> <td>the Bird</td> <td>@twitter</td> </tr> </tbody> </table>
					</div>
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>Colored Rows Table:</h4>
						<table class="table"> <thead> <tr> <th>#</th> <th>Column heading</th> <th>Column heading</th> <th>Column heading</th> </tr> </thead> <tbody> <tr class="active"> <th scope="row">1</th> <td>Column content</td> <td>Column content</td> <td>Column content</td> </tr> <tr> <th scope="row">2</th> <td>Column content</td> <td>Column content</td> <td>Column content</td> </tr> <tr class="success"> <th scope="row">3</th> <td>Column content</td> <td>Column content</td> <td>Column content</td> </tr> <tr> <th scope="row">4</th> <td>Column content</td> <td>Column content</td> <td>Column content</td> </tr> <tr class="info"> <th scope="row">5</th> <td>Column content</td> <td>Column content</td> <td>Column content</td> </tr> <tr> <th scope="row">6</th> <td>Column content</td> <td>Column content</td> <td>Column content</td> </tr> <tr class="warning"> <th scope="row">7</th> <td>Column content</td> <td>Column content</td> <td>Column content</td> </tr> <tr> <th scope="row">8</th> <td>Column content</td> <td>Column content</td> <td>Column content</td> </tr> <tr class="danger"> <th scope="row">9</th> <td>Column content</td> <td>Column content</td> <td>Column content</td> </tr> </tbody> </table> 
					</div>
					<div class="table-responsive bs-example widget-shadow">
						<h4>Responsive Table:</h4>
						<table class="table table-bordered"> <thead> <tr> <th>#</th> <th>Table heading</th> <th>Table heading</th> <th>Table heading</th> <th>Table heading</th> <th>Table heading</th> <th>Table heading</th> </tr> </thead> <tbody> <tr> <th scope="row">1</th> <td>Table cell</td> <td>Table cell</td> <td>Table cell</td> <td>Table cell</td> <td>Table cell</td> <td>Table cell</td> </tr> <tr> <th scope="row">2</th> <td>Table cell</td> <td>Table cell</td> <td>Table cell</td> <td>Table cell</td> <td>Table cell</td> <td>Table cell</td> </tr> <tr> <th scope="row">3</th> <td>Table cell</td> <td>Table cell</td> <td>Table cell</td> <td>Table cell</td> <td>Table cell</td> <td>Table cell</td> </tr> </tbody> </table> 
					</div>-->
				</div>
			</div>
		</div>
		
	</div>
	
	<!-- side nav js -->
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->
	
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.js"> </script>
	
</body>
</html>