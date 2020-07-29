<h2>Here you can read and delete any note</h2>

<?php foreach ($note as $note_item): ?>
<div class="card mycard">
  <div class="card-body">
    <h4 class="card-title"><?= $note_item['title'] ?></h4>
    <p class="card-text">
        <?= substr($note_item['body'], 0, 160) . " ..... "?>
    </p>
    
    <div class="alert alert-secondary myalert" role="alert">
      <strong>Last Updated : </strong> 
      <?= $note_item['dateTime']?>
    </div>
    
    <hr>
    
    <a class="btn btn-primary" href="<?php echo base_url('notes/viewNote').'/'.$note_item['slug']?>">Read complete note</a>
    <a class="btn btn-info" href="<? echo base_url('notes/readyUpdate') . '/' . $note_item['slug'] ?>" onclick="return confirm('Are you sure you want to update this item?');">Update</a>
    <a class="btn btn-danger" href="<? echo base_url('notes/remove') . '/' . $note_item['slug'] ?>" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
  </div>
</div>
<?php endforeach; ?>