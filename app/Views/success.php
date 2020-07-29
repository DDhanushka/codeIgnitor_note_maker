<!-- Success alert -->
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Well done!</h4>
  <?=$noteItem . ' ' .  $message ?>
</div>
<!-- Read the note button -->
<a class="btn btn-primary" href="<?php echo base_url('notes/viewNote').'/'?><?=$noteItem?>">Read</a>