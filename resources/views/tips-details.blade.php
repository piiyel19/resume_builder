@extends("layout.setting")
@section("content")
<div id="form_1">
	<div class="row" style="padding-top:30px;">
		<div class="col-md-12">
			<div class="card">

				<div class="card-header">
					<a href="<?= url('/')?>/tips"><i class="fa fa-chevron-left"></i></a> USE A PROFESSIONAL EMAIL ADDRESS
				</div>
				<div class="card-body">
					<p class="font12">
						
						Disclaimer : This is sample only
						<br><br>

						After you change your email address, double check that the rest of your contact information on your resume is accurate.
						<br/><br/>
						You don’t want to miss an interview because you put the wrong phone number on your resume.
						<br/><br/>
						Also, exclude information like your birth date or marital status. You do not have to respond to questions about religion, race, or gender on an application. US employers cannot take these aspects into consideration when accessing you.
						<br/><br/>
						If you’re applying for a job out of state or country, also consider omitting your current address on your resume. That way a hiring manager won’t think you’re confused about the location of the job.

					</p>
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
      	$("#title_header").html('<i class="fa fa-info-circle"></i> Tips Details');
   	});
</script>

@endsection