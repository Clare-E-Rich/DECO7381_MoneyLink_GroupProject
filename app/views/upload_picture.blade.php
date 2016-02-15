<!DOCTYPE html>
<html>


<div id="myModal" class="reveal-modal small" data-reveal>

	<div class="modal-header">
		<h3>Upload Profile Picture</h3>
	</div>

	<div class="modal-body">
            
<!--                 <div id="validation-errors"></div>
                <form class="form-horizontal" id="upload" enctype="multipart/form-data" method="post" action="{{ url('upload/image') }}" autocomplete="off">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input type="file" name="image" id="image" /> 
                </form> -->
                {{ Form::open(array('url'=>'upload','files'=>true)) }}
                {{ Form::file('image')}}
                {{ Form::submit('Upload', array('class'=>'secondary small button')) }}
               <!--  <input type="submit" value="Submit"> -->
 				{{ Form::close() }}
            
	</div>

	<div class="modal-footer">
		<div class="right"> 
			<a class="close-reveal-modal">&#215;</a>
		</div>
		<div class="right"> 
			
		</div>

	</div>
</div>




</html>