@extends("layout.setting")
@section("content")
<div class="row" style="padding-top:30px;">
   <div class="col-md-12">
      <span style="float: right; color: blue; font-size: 12px; cursor: pointer; font-weight:500; padding-bottom: 10px;" onclick="info('template')">
         <i class="fa fa-info-circle" aria-hidden="true"></i>
         User Guide
      </span>
   </div>
   <input type="hidden" name="" id="currentVal" value="1">
   <div class="col-2">
      <i class="fa fa-chevron-left" onclick="more_template(); return false;"></i>
   </div>
   <div class="col-8" style="text-align: center; color:#9b9b9b; font-weight:500;">Select Template</div>
   <div class="col-2">
      <i class="fa fa-chevron-right" style="float:right" onclick="more_template(); return false;"></i>
   </div>
</div>
<div class="row template" style="padding-top:30px;" id="template_1">
    <div class="col-6">
         <h3>Blueprint</h3>
         <p>A place for everything and everything in it's place. Build your career on a solid foundation with the measured design elements in Blueprint. You're a total stud and you're sure to nail the interview.</p>


         <a href="<?= url('/')?>/form/1"><button class="btn btn-success btn-block" style="font-size:12px;">SELECT THIS TEMPLATE</button></a>


    </div>
    <div class="col-6">
         
      <img src="https://venngage-wordpress.s3.amazonaws.com/uploads/2020/02/Resume-Design-Template-2.png" width="100%">

    </div>
</div>

<div class="row template" style="padding-top:30px; display: none;" id="template_2">
    <div class="col-6">
         <h3>Agoda</h3>
         <p>A place for everything and everything in it's place. Build your career on a solid foundation with the measured design elements in Blueprint. You're a total stud and you're sure to nail the interview.</p>


         <a href="<?= url('/')?>/form/2"><button class="btn btn-success btn-block" style="font-size:12px;">SELECT THIS TEMPLATE</button></a>


    </div>
    <div class="col-6">
         
      <img src="https://d.novoresume.com/images/doc/functional-resume-template.png" width="100%">

    </div>
</div>

<script type="text/javascript">
   function more_template()
   {
      $(".template").hide();
      var currentVal = $("#currentVal").val();
      if(currentVal=='2'){
         currentVal = 1;
         $("#template_"+currentVal).show();
         $("#currentVal").val(1);
      } else {

         var currentVal = parseInt(currentVal)+1;
         $("#template_"+currentVal).show();
         $("#currentVal").val(currentVal);
      }
   }

   $(document).ready(function (){
      $("#title_header").html('Welcome To Apps');
   });
</script>

@endsection


