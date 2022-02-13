@extends("layout.setting")
@section("content")


<div id="form_3">
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
					<button class="btn btn-success btn-sm" style="float:right">Save</button>
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
      	$("#title_header").html('<i class="fa fa-graduation-cap" aria-hidden="true"></i> Education');
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