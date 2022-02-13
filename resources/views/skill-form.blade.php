@extends("layout.setting")
@section("content")

<div id="form_4">
	<div class="row" style="padding-top:30px;">
		<div class="col-md-12">
			<span style="float: right; color: blue; font-size: 12px; cursor: pointer; font-weight:500;" onclick="info('skill')">
				<i class="fa fa-info-circle" aria-hidden="true"></i>
				User Guide
			</span>
		</div>
		<div class="col-md-12">
			<label style="font-size:15px; font-weight:700;">Skill
			</label>
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
							<button class="btn btn-success btn-sm" style="float:right">Save</button>
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


	$(document).ready(function (){
      	$("#title_header").html('<i class="fa fa-star-half-o" aria-hidden="true"></i> Skill ');
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