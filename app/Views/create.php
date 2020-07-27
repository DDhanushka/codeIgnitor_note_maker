<!-- <h2><?= esc($title); ?></h2>
<form action="<?php echo base_url('news/create') ?>" method="post">
<label for="title">Title</label>
    <input type="input" name="title" /><br />

    <label for="body">Text</label>
    <textarea name="body"></textarea><br />

    <input type="submit" name="submit" value="Create news item" />

</form> -->

<!-- <div class="alert alert-warning" role="alert">
  <strong>Warning!</strong> 
    <p>
    Fails if the <b>description</b> contains anything other than alphanumeric, space, or this limited set of
    punctuation characters: ~ (tilde), ! (exclamation), # (number), $ (dollar), % (percent),
    & (ampersand), * (asterisk), - (dash), _ (underscore), + (plus), = (equals),
    | (vertical bar), : (colon), . (period).
    </p>
</div> -->


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
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </div>
</form>