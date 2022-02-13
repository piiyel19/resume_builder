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
			<button class="btn btn-success btn-sm" style="float:right">Save</button>
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