<!DOCTYPE html>
<html>
<head>
	<title>Data Table</title>
	<!-- 最新編譯和最佳化的 CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.11/css/dataTables.bootstrap.min.css">

	
	<!-- 最新編譯和最佳化的 JavaScript -->
	<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
	<!-- 最新編譯和最佳化的 JavaScript -->
	<script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
	<!-- 最新編譯和最佳化的 JavaScript -->
	<script src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js"></script>


	
</head>
<style type="text/css">
	.wrapper{
		width: 75%;
		margin: 0 auto;
		background: #eee;
		margin-top: 10px;
	}
</style>
<body>
	<div class="wrapper">
		<section class="panel-primary">
			<div class="panel-heading">
				<b>Student Info</b>
			</div>
			<div class="panel-body">
				<table class="table table-striped table-bordered student" cellspacing="0" width="100%">
					<thead>
						<th>ID</th>
						<th>Name</th>
					</thead>
					<tbody>
						@foreach( $students as $student )
						<tr>
							<td>{{ $student->id }}</td>
							<td>{{ $student->name }}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</section>
	</div>
</body>
<script type="text/javascript">
	$('.student').DataTable({
		select:true,
		"order":[[0,"desc"]],
		"scrollY":"380px",
		"scrollCollapse":true,
		"paging":true,
		"bProccessing":true
	});
</script>
</html>