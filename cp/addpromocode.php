<?php include'header.php'; ?>
<div class="uk-card uk-card-default card">
  <h3> Create New Promo Code   </h3>
  <div class="">
    <form class="" action="index.html" method="post">
      <input class="uk-input uk-width-1-1 uk-margin-bottom" type="text" placeholder="Write Promo Code">
      <input class="uk-input uk-width-1-1 uk-margin-bottom" type="text" placeholder="Percentage to be deducted">
      <input class="uk-input uk-width-1-1 uk-margin-bottom" type="date" placeholder="start date">
      <input class="uk-input uk-width-1-1 uk-margin-bottom" type="date" placeholder="End date">
      <button class="uk-button uk-button-primary uk-width-expand" type="submit">Save Promo Code</button>

    </form>
  </div>
  <div class="uk-alert-success" uk-alert>
    <a class="uk-alert-close" uk-close></a>
    <p>You have successfully created a promo code save it :  OUD25OFF </p>
</div>
</div>
<?php include'footer.php'; ?>
