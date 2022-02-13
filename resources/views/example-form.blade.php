@extends("layout.setting")
@section("content")
<div id="form_1">
	<div class="row" style="padding-top:30px;">
		<div class="col-md-12">
			<span style="float: right; color: blue; font-size: 12px; cursor: pointer; font-weight:500;" onclick="info('profile')">
				<i class="fa fa-info-circle" aria-hidden="true"></i>
				User Guide
			</span>
		</div>
		<div class="col-md-4">
			<label style="font-size:15px; color:#9b9b9b; font-weight:500">Job Application</label>
			<input type="text" class="form-control" name="">
		</div>
	</div>
	<div class="row" style="padding-top:30px;">
		<div class="col-md-12">
			<label style="font-size:15px; font-weight: 700;">Personal Details</label>
		</div>

		<div class="col-md-4">
			<label style="font-size:12px; color:#9b9b9b; font-weight:500;">Wanted Job Title</label>
			<input type="text" class="form-control" name="">
		</div>

		<div class="col-md-4">
			<label style="font-size:12px; color:#9b9b9b; font-weight:500;">Upload Photo</label>
			<input type="file" class="form-control" name="">
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-sm-6 col-xs-6">
			<label style="font-size:12px; color:#9b9b9b; font-weight:500;">First Name</label>
			<input type="text" class="form-control" name="">
		</div>

		<div class="col-md-4 col-sm-6 col-xs-6">
			<label style="font-size:12px; color:#9b9b9b; font-weight:500;">Last Name</label>
			<input type="text" class="form-control" name="">
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-sm-6 col-xs-6">
			<label style="font-size:12px; color:#9b9b9b; font-weight:500;">Email</label>
			<input type="text" class="form-control" name="">
		</div>

		<div class="col-md-4 col-sm-6 col-xs-6">
			<label style="font-size:12px; color:#9b9b9b; font-weight:500;">Phone</label>
			<input type="text" class="form-control" name="">
		</div>
	</div>

	<div class="row" style="padding-top:5px;">
		<div class="col-md-12">
			<label style="font-size:12px; font-weight: 500; color: blue;" onclick="openAdditional();">Additional Information</label>
		</div>
	</div>
	<div class="row" style="display: none;" id="additional_div">
		<div class="col-md-4 col-xs-6 col-sm-6">
			<label style="font-size:12px; color:#9b9b9b; font-weight:500;">Country</label>
			<input type="text" class="form-control" name="">
		</div>
		<div class="col-md-4 col-xs-6 col-sm-6">
			<label style="font-size:12px; color:#9b9b9b; font-weight:500;">City</label>
			<input type="text" class="form-control" name="">
		</div>
		<div class="col-md-4 col-xs-6 col-sm-6">
			<label style="font-size:12px; color:#9b9b9b; font-weight:500;">Address</label>
			<input type="text" class="form-control" name="">
		</div>
		<div class="col-md-4 col-xs-6 col-sm-6">
			<label style="font-size:12px; color:#9b9b9b; font-weight:500;">Postal Code</label>
			<input type="text" class="form-control" name="">
		</div>
		<div class="col-md-4 col-xs-6 col-sm-6">
			<label style="font-size:12px; color:#9b9b9b; font-weight:500;">Driving License</label>
			<input type="text" class="form-control" name="">
		</div>
		<div class="col-md-4 col-xs-6 col-sm-6">
			<label style="font-size:12px; color:#9b9b9b; font-weight:500;">Nationality</label>
			<input type="text" class="form-control" name="">
		</div>
		<div class="col-md-4 col-xs-6 col-sm-6">
			<label style="font-size:12px; color:#9b9b9b; font-weight:500;">Place Of Birth</label>
			<input type="text" class="form-control" name="">
		</div>
		<div class="col-md-4 col-xs-6 col-sm-6">
			<label style="font-size:12px; color:#9b9b9b; font-weight:500;">Date Of Birth</label>
			<input type="date" class="form-control" name="">
		</div>
	</div>
	<div class="row" style="padding-top:10px;">
		<div class="col-md-12">
			<button class="btn btn-success btn-sm" style="float:right" onclick="next_2();">Next</button>
		</div>
	</div>
</div>


<div id="form_2" style="display:none">
	<div class="row" style="padding-top:30px;">
		<div class="col-md-12">
			<span style="float: right; color: blue; font-size: 12px; cursor: pointer; font-weight:500;" onclick="info('work')">
				<i class="fa fa-info-circle" aria-hidden="true"></i>
				User Guide
			</span>
		</div>
		<div class="col-md-12">
			<label style="font-size:15px; font-weight:700;">Professional Summary</label>
			<br>
			<span style="font-size:12px; font-size:12px; color:#9b9b9b; font-weight:500">Write 2-4 short & energetic sentences to interest the reader! Mention your role, experience & most importantly - your biggest achievements, best qualities and skills.<br><br></span>
			<textarea id="summernote" name="editordata"></textarea>
		</div>
	</div>
	<div class="row" style="padding-top:30px;">
		<div class="col-md-12">
			<label style="font-size:15px; font-weight:700;">Employment Summary</label>
			<br>
			<span style="font-size:12px; font-size:12px; color:#9b9b9b; font-weight:500">Show your relevant experience (last 10 years). Use bullet points to note your achievements, if possible - use numbers/facts (Achieved X, measured by Y, by doing Z).<br><br></span>

			<div class="card" style="background: #efefed;">
				<div class="card-body">
					<div class="row">
						<div class="col-12">
							<label style="font-size:12px; color:#9b9b9b; font-weight:500">Company</label>
							<input type="type" class="form-control" name="">
						</div>

						<div class="col-12" style="padding-left:30px; padding-top: 5px;">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
    						<label class="form-check-label" for="exampleCheck1" style="font-size:12px; color:#9b9b9b; font-weight:500">Tick If Until Current</label>
						</div>
						<div class="col-6">
							<label style="font-size:12px; color:#9b9b9b; font-weight:500">Start Year</label>
							<select class="form-control">
								<?php for($i=22;$i>=1;$i--){ ?>
								<?php if($i<=9){ ?>
									<option value="200<?= $i?>">200<?= $i?></option>
								<?php } else { ?> 
									<option value="20<?= $i?>">20<?= $i?></option>
								<?php } ?>

								<?php } ?>
							</select>
						</div>
						<div class="col-6">
							<label style="font-size:12px; color:#9b9b9b; font-weight:500">End Year</label>
							<select class="form-control">
								<?php for($i=22;$i>=1;$i--){ ?>
								<?php if($i<=9){ ?>
									<option value="200<?= $i?>">200<?= $i?></option>
								<?php } else { ?> 
									<option value="20<?= $i?>">20<?= $i?></option>
								<?php } ?>

								<?php } ?>
							</select>
						</div>
						<div class="col-12">
							<label style="font-size:12px; color:#9b9b9b; font-weight:500">Contribute</label>
							<textarea id="summernote_contribute" name="editordata"></textarea>
						</div>

						<div class="row" style="padding-top:10px;">
							<div class="col-md-12">
								<button class="btn btn-primary btn-sm" style="float:left; font-size:10px;" onclick="addWork();">
									<i class="fa fa-plus"></i> Add  Item
								</button>
							</div>
						</div>

					</div>
				</div>
			</div>

			<table class="table">
				<thead>
					<tr>
						<th style="width:100px;">Year</th>
						<th>Company Name</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>2020-2012</td>
						<td>
							Zanko Sdn Bhd
							<br>
							Description of project here..
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="row" style="padding-top:10px;">
		<div class="col-md-12">
			<button class="btn btn-success btn-sm" style="float:left" onclick="back_1();">Back</button>
			<button class="btn btn-success btn-sm" style="float:right" onclick="next_3();">Next</button>
		</div>
	</div>
</div>

<div id="form_3" style="display:none">
	<div class="row" style="padding-top:30px;">
		<div class="col-md-12">
			<span style="float: right; color: blue; font-size: 12px; cursor: pointer; font-weight:500;" onclick="info('education')">
				<i class="fa fa-info-circle" aria-hidden="true"></i>
				User Guide
			</span>
		</div>
		<div class="col-md-12">
			<label style="font-size:15px; font-weight:700;">Education</label>
			<br>
			<span style="font-size:12px; font-size:12px; color:#9b9b9b; font-weight:500">A varied education on your resume sums up the value that your learnings and background will bring to job.<br><br></span>


			<div class="card" style="background: #efefed;">
				<div class="card-body">
					<div class="row">
						<div class="col-12">
							<label style="font-size:12px; color:#9b9b9b; font-weight:500">University / College</label>
							<input type="type" class="form-control" name="">
						</div>

						<div class="col-6">
							<label style="font-size:12px; color:#9b9b9b; font-weight:500">Start Year</label>
							<select class="form-control">
								<?php for($i=22;$i>=1;$i--){ ?>
								<?php if($i<=9){ ?>
									<option value="200<?= $i?>">200<?= $i?></option>
								<?php } else { ?> 
									<option value="20<?= $i?>">20<?= $i?></option>
								<?php } ?>

								<?php } ?>
							</select>
						</div>
						<div class="col-6">
							<label style="font-size:12px; color:#9b9b9b; font-weight:500">End Year</label>
							<select class="form-control">
								<?php for($i=22;$i>=1;$i--){ ?>
								<?php if($i<=9){ ?>
									<option value="200<?= $i?>">200<?= $i?></option>
								<?php } else { ?> 
									<option value="20<?= $i?>">20<?= $i?></option>
								<?php } ?>

								<?php } ?>
							</select>
						</div>
						<div class="col-12">
							<label style="font-size:12px; color:#9b9b9b; font-weight:500">Description</label>
							<textarea id="summernote_education" name="editordata"></textarea>
						</div>

						<div class="row" style="padding-top:10px;">
							<div class="col-md-12">
								<button class="btn btn-primary btn-sm" style="float:left; font-size:10px;" onclick="addWork();">
									<i class="fa fa-plus"></i> Add  Item
								</button>
							</div>
						</div>

					</div>
				</div>
			</div>

			<table class="table">
				<thead>
					<tr>
						<th style="width:100px;">Year</th>
						<th>University / College</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>2020-2012</td>
						<td>
							Zanko Sdn Bhd
							<br>
							Description of project here..
						</td>
					</tr>
				</tbody>
			</table>

			<div class="row" style="padding-top:10px;">
				<div class="col-md-12">
					<button class="btn btn-success btn-sm" style="float:left" onclick="back_2();">Back</button>
					<button class="btn btn-success btn-sm" style="float:right" onclick="next_4();">Next</button>
				</div>
			</div>
			
		</div>
	</div>
</div>


<div id="form_4" style="display:none">
	<div class="row" style="padding-top:30px;">
		<div class="col-md-12">
			<span style="float: right; color: blue; font-size: 12px; cursor: pointer; font-weight:500;" onclick="info('skill')">
				<i class="fa fa-info-circle" aria-hidden="true"></i>
				User Guide
			</span>
		</div>
		<div class="col-md-12">
			<label style="font-size:15px; font-weight:700;">Skill</label>
			<br>
			<span style="font-size:12px; font-size:12px; color:#9b9b9b; font-weight:500;">Choose 5 of the most important skills to show your talents! Make sure they match the keywords of the job listing if applying via an online system.<br><br></span>

			<div class="row">
				<div class="col-12" style="padding-bottom:10px;">
					<input type="text" class="form-control" name="" placeholder="Name Of Skill">
				</div>
				<div class="col-8" id="star_list" style="padding-bottom:10px;">
					<i class="fa fa-star" onclick="star(1);"></i>
					<i class="fa fa-star" onclick="star(2);"></i>
					<i class="fa fa-star" onclick="star(3);"></i>
					<i class="fa fa-star" onclick="star(4);"></i>
					<i class="fa fa-star" onclick="star(5);"></i>
				</div>
				<div class="col-4" style="padding-bottom:10px;">
					<button class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></button>
				</div>
			</div>

			<div class="row">
				<div class="col-12">
					<table class="table">
						<thead>
							<tr>
								<th>Skill</th>
								<th>Star</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Programming</td>
								<td>
									<i class="fa fa-star yellow"></i>
									<i class="fa fa-star yellow"></i>
									<i class="fa fa-star yellow"></i>
									<i class="fa fa-star yellow"></i>
									<i class="fa fa-star"></i>
								</td>
							</tr>
						</tbody>
					</table>

					<div class="row" style="padding-top:10px;">
						<div class="col-md-12">
							<button class="btn btn-success btn-sm" style="float:left;" onclick="back_3();">Back</button>
							<a href="<?= url('/')?>/download_resume"><button class="btn btn-success btn-sm" style="float:right">Complete</button></a>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>


<script type="text/javascript">
	function openAdditional()
	{
		$("#additional_div").show();
	}

	$(document).ready(function (){
      	$("#title_header").html('<i class="fa fa-user-circle-o"></i> Profile Details');
   	});


   	function up(){
   		$(window).scrollTop(0);
   	}


   	function down()
   	{
   		$("html, body").animate({
	        scrollTop: $(document).height()
	    }, 9000);
   	}


   	function next_2()
   	{
   		$("#form_1").hide();
   		$("#form_2").show();
   		$("#form_3").hide();
   		$("#form_4").hide();
   		$("#title_header").html('<i class="fa fa-briefcase"></i> Work Experience');

   		up();
   	}


   	function next_3()
   	{
   		$("#form_1").hide();
   		$("#form_2").hide();
   		$("#form_3").show();
   		$("#form_4").hide();
   		$("#title_header").html('<i class="fa fa-graduation-cap" aria-hidden="true"></i> Education');

   		up();
   	}


   	function next_4()
   	{
   		$("#form_1").hide();
   		$("#form_2").hide();
   		$("#form_3").hide();
   		$("#form_4").show();
   		$("#title_header").html('<i class="fa fa-star-half-o" aria-hidden="true"></i> Skill');

   		up();
   	}

   	function back_1()
   	{
   		$("#form_1").show();
   		$("#form_2").hide();
   		$("#form_3").hide();
   		$("#title_header").html('<i class="fa fa-user-circle-o"></i> Profile Details');

   		up();
   	}

   	function back_2()
   	{
   		$("#form_1").hide();
   		$("#form_2").show();
   		$("#form_3").hide();
   		$("#title_header").html('<i class="fa fa-briefcase"></i> Work Experience');

   		up();
   	}

   	function back_3()
   	{
   		$("#form_1").hide();
   		$("#form_2").hide();
   		$("#form_3").show();
   		$("#form_4").hide();
   		$("#title_header").html('<i class="fa fa-graduation-cap" aria-hidden="true"></i> Education');

   		up();
   	}

   	$(document).ready(function (){
   		// $('#summernote').summernote();
   		$('#summernote').summernote({
	        placeholder: 'Write Something ..',
	        tabsize: 2,
	        height: 200,
	        toolbar: [
	          ['style', ['style']],
	          ['font', ['bold', 'underline', 'clear']],
	          ['color', ['color']],
	          ['para', ['ul', 'ol', 'paragraph']],
	          // ['table', ['table']],
	          // ['insert', ['link', 'picture', 'video']],
	          ['insert', ['link']],
	          // ['view', ['fullscreen', 'codeview', 'help']]
	        ]
	    });

	    $('#summernote_contribute').summernote({
	        placeholder: 'Write Something ..',
	        tabsize: 2,
	        height: 200,
	        toolbar: [
	          ['style', ['style']],
	          ['font', ['bold', 'underline', 'clear']],
	          ['color', ['color']],
	          ['para', ['ul', 'ol', 'paragraph']],
	          // ['table', ['table']],
	          // ['insert', ['link', 'picture', 'video']],
	          ['insert', ['link']],
	          // ['view', ['fullscreen', 'codeview', 'help']]
	        ]
	    });


	    $('#summernote_education').summernote({
	        placeholder: 'Write Something ..',
	        tabsize: 2,
	        height: 200,
	        toolbar: [
	          ['style', ['style']],
	          ['font', ['bold', 'underline', 'clear']],
	          ['color', ['color']],
	          ['para', ['ul', 'ol', 'paragraph']],
	          // ['table', ['table']],
	          // ['insert', ['link', 'picture', 'video']],
	          ['insert', ['link']],
	          // ['view', ['fullscreen', 'codeview', 'help']]
	        ]
	    });
   	});


   	function star(no)
   	{
   		if(no==1)
   		{
   			$("#star_list").html('<i class="fa fa-star yellow" onclick="star(1);"></i> <i class="fa fa-star" onclick="star(2);"></i> <i class="fa fa-star" onclick="star(3);"></i> <i class="fa fa-star" onclick="star(4);"></i> <i class="fa fa-star" onclick="star(5);"></i>');
   		} else if(no==2)
   		{
   			$("#star_list").html('<i class="fa fa-star yellow" onclick="star(1);"></i> <i class="fa fa-star yellow" onclick="star(2);"></i> <i class="fa fa-star" onclick="star(3);"></i> <i class="fa fa-star" onclick="star(4);"></i> <i class="fa fa-star" onclick="star(5);"></i>');
   		} else if(no==3)
   		{
   			$("#star_list").html('<i class="fa fa-star yellow" onclick="star(1);"></i> <i class="fa fa-star yellow" onclick="star(2);"></i> <i class="fa fa-star yellow" onclick="star(3);"></i> <i class="fa fa-star" onclick="star(4);"></i> <i class="fa fa-star" onclick="star(5);"></i>');
   		} else if(no==4)
   		{
   			$("#star_list").html('<i class="fa fa-star yellow" onclick="star(1);"></i> <i class="fa fa-star yellow" onclick="star(2);"></i> <i class="fa fa-star yellow" onclick="star(3);"></i> <i class="fa fa-star yellow" onclick="star(4);"></i> <i class="fa fa-star" onclick="star(5);"></i>');
   		} else if(no==5)
   		{
   			$("#star_list").html('<i class="fa fa-star yellow" onclick="star(1);"></i> <i class="fa fa-star yellow" onclick="star(2);"></i> <i class="fa fa-star yellow" onclick="star(3);"></i> <i class="fa fa-star yellow" onclick="star(4);"></i> <i class="fa fa-star yellow" onclick="star(5);"></i>');
   		}
   	}
</script>


<style type="text/css">
	thead, tbody, tfoot, tr, td, th {
		font-size: 12px;
	}

	.yellow{
		color: green;
	}
</style>

@endsection


