<!-- Form for update note -->
<form action="<?php echo base_url('notes/updateNote').'/'.$note['slug'] ?>" method="post">
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
        <div class="col-sm-10">
            <input type="input" name="title" class="form-control" value=" <?= $note['title'] ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-10">
            <textarea  rows="5" class="form-control" name="body"><?= $note['body'] ?></textarea>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
            <button type="submit" class="btn btn-primary"> <i class="fas fa-pen"></i>  Update</button>
        </div>
    </div>
</form>