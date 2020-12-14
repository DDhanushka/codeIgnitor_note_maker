<!-- create note form -->
<form action="<?php echo base_url('notes/create') ?>" method="post">
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
        <div class="col-sm-10">
            <input type="input" name="title" class="form-control" placeholder="Title for the note (50 Characters max)">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-10">
            <textarea rows="5" class="form-control" placeholder="Description for the note goes here...." name="body"></textarea>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
            <button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i>  Create</button>
        </div>
    </div>
</form>