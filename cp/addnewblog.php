<?php include'header.php'; ?>
<div class="uk-card uk-card-default card">
  <h3> Add New Blog </h3>
  <form class="" action="index.html" method="post">
    <div class="uk-margin">
      <label class="uk-form-label" for="form-stacked-text">Blog Title</label>
      <div class="uk-form-controls">
        <input class="uk-input" type="text" placeholder="Some text...">
      </div>
    </div><!-- END uk-margin -->

    <div class="uk-margin">
      <label class="uk-form-label" for="form-stacked-text">Blog Thumb</label>

      <div class="uk-width-expand" uk-form-custom>
        <input type="file">
        <button class="uk-button uk-button-default" type="button" tabindex="-1">Select</button>
      </div>
    </div>
    <div class="uk-margin">
      <label class="uk-form-label" for="form-stacked-text">Blog Content</label>

      <textarea rows="5">Next, use our Get Started docs to setup Tiny!</textarea>

    </div>
    <div class="uk-margin uk-text-right" >
      <button  class="uk-button uk-button-primary">Delete / Discard</button>
      <button type="submit" class="uk-button uk-button-secondary">Submit</button>

    </div>
  </form>
</div>
<?php include'footer.php'; ?>
