<div class="col-md-12" >
     <strong>Project Description:</strong>
     <div  >
          {{$contact->project_description}}
     </div>

     <div  >
          <strong>Budget</strong> {{$contact->project_budget}}
     </div> <!--  -->

     @if($contact->project_type == 'web development')
     	<div>
     	     Hosting: {{$contact->host ? 'yes' : 'no'}}
     	</div> <!--  -->
     @endif
</div> <!-- col-md-12 -->