@extends("layout.setting")
@section("content")
<div id="form_1">
	<div class="row" style="padding-top:30px;">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					Notifications
				</div>
				<div class="card-body">
					<p><a href="" style="font-size:12px; color: #198754; text-decoration:none; ">All</a> | <a href="" style="font-size:12px; color: blue; text-decoration:none;">Unread</a></p>
					<table class="table">
						<thead>
							<tr>
								<th style="width:100px">Date</th>
								<th>Info</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><h4 style="color: #000;">22 January 2020 12:30 AM</h4></td>
								<td>
									<a href="<?= url('/')?>/notification-details/1" style="text-decoration:none;"><h4>Welcome To My App</h4></a>
									<p class="font12">Welcome to my app. Your account already ready. <a href="<?= url('/')?>/notification-details/1" style="text-decoration: none; font-weight: 500;">See more ..</a></p>
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
      	$("#title_header").html('<i class="fa fa-bell"></i> Notifications');
   	});
</script>

@endsection