@extends("layout.setting")
@section("content")
<div id="form_1">
	<div class="row" style="padding-top:30px;">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<a href="<?= url('/')?>/notification"><i class="fa fa-chevron-left"></i></a> Welcome To My App
				</div>
				<div class="card-body">
					<p class="font12">Welcome to my app. Your account already ready.</p>
					<p class="font10">22 January 2020 12:30 AM</p>
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

	.font10{
		font-size: 10px;
		float: right;
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
      	$("#title_header").html('<i class="fa fa-bell"></i> Notification Details');
   	});
</script>

@endsection