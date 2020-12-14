<!-- View single note -->
<p class="card-text">
    <?= $note['body'] ?>
</p>
<!-- last update Date Time -->
<div class="alert alert-secondary myalert" role="alert">
    <strong>Last Updated : </strong> 
    <?= $note['dateTime'] ?>
</div>

<hr>
<!-- Go back to news button -->
<a class="btn btn-outline-primary" role="button" href="<?php echo base_url('notes')?>">
<i class="fas fa-angle-double-left"></i> Go back
</a>
