<h2>You can read, update or delete your notes anytime <i class="far fa-smile-beam"></i></h2>

<?php foreach ($note as $note_item): ?>
<!-- Note cards -->
<div class="card mycard">
  <div class="card-body">
    <h4 class="card-title">
      <?= $note_item['title'] ?>
    </h4>
    <p class="card-text">
        <?= substr($note_item['body'], 0, 160) . " ..... "?>
    </p>
    <!-- Last updated Date Time -->
    <div class="alert alert-secondary myalert" role="alert">
      <strong><i class="far fa-calendar-alt"></i> Updated : </strong> 
      <?= $note_item['dateTime']?>
    </div>

    <hr>
    <!-- Action buttons -->
    <a class="btn btn-primary" href="<?php echo base_url('notes/viewNote').'/'.$note_item['slug']?>">
    <i class="fas fa-angle-double-right"></i> Read Full
    </a>
    <a class="btn btn-info" href="<? echo base_url('notes/readyUpdate') . '/' . $note_item['slug'] ?>" onclick="return confirm('Are you sure you want to update this item?');">
    <i class="fas fa-pen"></i> Update
    </a>
    <a class="btn btn-danger" href="<? echo base_url('notes/remove') . '/' . $note_item['slug'] ?>" onclick="return confirm('Are you sure you want to delete this item?');">
    <i class="fas fa-trash-alt"></i> Delete
    </a>
  </div>
</div>
<?php endforeach; ?>