<?php include'header.php'; ?>
<div class="uk-card uk-card-default card">
  <h3> Add  Category </h3>
  <form class="" action="index.html" method="post">
    <div class="uk-margin">
      <label class="uk-form-label" for="form-stacked-text">Category Title</label>
      <div class="uk-form-controls">
        <input class="uk-input" type="text" placeholder="">
      </div>
    </div><!-- END uk-margin -->
    <div class="uk-margin">
      <label class="uk-form-label" for="form-stacked-text">Category Description</label>
      <div class="uk-form-controls">
        <input class="uk-input" type="text" placeholder="">
      </div>
    </div><!-- END uk-margin -->


    <div class="uk-margin">
      <label class="uk-form-label" for="form-stacked-text">Parent Category</label>
       <div uk-form-custom="target: > * > span:first-child">
           <select>
               <option value="">Please select...</option>
               <option value="1">Option 01</option>
               <option value="2">Option 02</option>
               <option value="3">Option 03</option>
               <option value="4">Option 04</option>
           </select>
           <button class="uk-button uk-button-default" type="button" tabindex="-1">
               <span></span>
               <span uk-icon="icon: chevron-down"></span>
           </button>
       </div>
   </div>
    <div class="uk-margin uk-text-right" >
      <button  class="uk-button uk-button-primary">Delete / Discard</button>
      <button type="submit" class="uk-button uk-button-secondary">Submit</button>

    </div>
  </form>
</div>
<?php include'footer.php'; ?>
