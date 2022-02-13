@extends("layout.setting")
@section("content")
<div id="form_1">
	<div class="row" style="padding-top:30px;">
		<div class="col-md-12">
			<span style="float: right; color: blue; font-size: 12px; cursor: pointer; font-weight:500;" onclick="info('cv')">
				<i class="fa fa-info-circle" aria-hidden="true"></i>
				User Guide
			</span>
		</div>
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">

					<label style="font-size:15px; font-weight:700;">Cover Letter</label>
					<br>
					<span style="font-size:12px; font-size:12px; color:#9b9b9b; font-weight:500">Write cover letter is a one-page document that you submit as part of your job application (alongside your CV or Resume). <br> Introduce you and briefly summarize your professional background<br><br></span>
					<textarea id="summernote" name="editordata"></textarea>

					<br>
					<button class="btn btn-success btn-sm" style="float:right">Save</button>
					

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

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script type="text/javascript">
	$(document).ready(function (){
      	$("#title_header").html('<i class="fa fa-file-text-o" aria-hidden="true"></i> Cover Letter');
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
	});
</script>

@endsection