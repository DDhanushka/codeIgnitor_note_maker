<div class="alert alert-info" role="alert">
   
    Total number of notes :  <strong><?= $noteCount ?> </strong>
</div>
<p>
<button class="btn btn-primary" onclick="window.print()">Print this page</button>
</P>


<table class="table table-sm">
  <thead>
    <tr>
      <th>#</th>
      <th>Note Title</th>
      <th>Note Description</th>
      <th>Updated on</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $i = 1;
  foreach ($note as $note_item): ?>
    <tr>
      <th scope="row"><?= $i?></th>
      <td style="min-width: 200px"><?= $note_item['title'] ?></td>
      <td><?= $note_item['body']?></td>
      <td style="min-width: 100px"><?= $note_item['dateTime']?></td>
    </tr>
    <?php 
    ++$i;
    endforeach; ?>
  </tbody>
</table>

