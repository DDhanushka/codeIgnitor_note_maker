<p><?= $note['body'] ?></p>

<div class="alert alert-secondary myalert" role="alert">
    <strong>Last Updated : </strong> 
    <?= $note['dateTime'] ?>
</div>

<hr>
<a class="btn btn-outline-primary" role="button" href="<?php echo base_url('notes')?>"> ⏪ Go back</a>
