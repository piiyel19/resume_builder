@extends("layout.setting")
@section("content")
<div id="">
	<div class="row" style="padding-top:30px;">
		<div class="col-md-12">

			<div class="card">
				<div class="card-header">
					The Best Resume Tips
				</div>
				<div class="card-body">
					<table class="table">
						<thead>
							<tr>
								<th style="width:5%;">No</th>
								<th style="width:85%">Title</th>
								<th style="width:10%;"></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td><h4 style="color: #000;">USE A PROFESSIONAL EMAIL ADDRESS.</h4></td>
								<td>
									<a href="<?= url('/')?>/tips-details/1" style="text-decoration: none; font-weight: 500;">Read</a></p>
								</td>
							</tr>
							<tr>
								<td>2</td>
								<td><h4 style="color: #000;">MAKE SURE YOUR CONTACT INFORMATION IS UP TO DATE.</h4></td>
								<td>
									<a href="<?= url('/')?>/tips-details/2" style="text-decoration: none; font-weight: 500;">Read</a></p>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

		</div>
	</div>
</div>

<style type="text/css">
	thead, tbody, tfoot, tr, td, th {
		font-size: 12px;
	}

	.yellow{
		color: green;
	}
</style>


<style type="text/css">
	h4{
		font-size: 12px;
		color: blue;
	}

	.font12{
		font-size: 12px;
	}

	thead, tbody, tfoot, tr, td, th {
		font-size: 12px;
	}

	.yellow{
		color: green;
	}
</style>

<script type="text/javascript">
	$(document).ready(function (){
      	$("#title_header").html('<i class="fa fa-info-circle"></i> Tips');
   	});
</script>

@endsection


