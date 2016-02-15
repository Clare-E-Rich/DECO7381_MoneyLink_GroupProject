<!DOCTYPE html>
<html>


<div id="myModal1" class="reveal-modal small" data-reveal>

	<div class="modal-header">
		<p>Are you sure you want to accept this loan request?</p>
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
			<a href="{{ 'claimLoan/'.$loan-> loan_id }}" id="cancel_button" class="secondary small button cancelBtn">Okay</a>
		</div>


	</div>
</div>




</html>