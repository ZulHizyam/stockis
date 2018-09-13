<?php require_once 'includes/header.php'; 
      require_once 'php_action/db_connect.php';
?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<i class="glyphicon glyphicon-check"></i>	Order Report
			</div>
			<!-- /panel-heading -->
			<div class="panel-body">
				<table class="table" id="manageProductTable">
					<thead>
						<tr>						
							<th>Product Name</th>						
							<th>Quantity</th>
							<th>Brand</th>
							<th>Category</th>
							<th>Status</th>           
						</tr>
					</thead>
                    <tr>
                        <td>Hasan</td>
                    </tr>
				</table>

			</div>
			<!-- /panel-body -->
		</div>
	</div>
	<!-- /col-dm-12 -->
</div>
<!-- /row -->

<script src="custom/js/report.js"></script>

<?php require_once 'includes/footer.php'; ?>