<!DOCTYPE html>
<html>


<div id="myModal" class="reveal-modal small" data-reveal>

	<div class="modal-header">
		<p>Are you sure you want to delete this loan request?</p>
	</div>

	<div class="modal-body">
            

            
	</div>

	<div class="modal-footer">
		<div class="right"> 
			<a class="close-reveal-modal">&#215;</a>
		</div>
		<div class="right"> 
			<a href="mytransaction" id="cancel_button" class="secondary small button cancelBtn">Cancel</a>
		</div>
		<div class="right"> 
			<a href="{{ 'cancelLoan/'.$loan-> loan_id }}" id="cancel_button" class="secondary small button cancelBtn">Okay</a>
		</div>


	</div>
</div>




</html>