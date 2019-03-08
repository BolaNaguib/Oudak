<footer class=" footer uk-padding-large " style="position:relative;">
  <a href="#" class="scrollingtopx" uk-totop uk-scroll></a>
  <div class="uk-container uk-container-large">
  <div class="uk-grid">
      <div class="uk-width-1-3">
        <h3>Links</h3>
        <ul class=" footer__link uk-list">
          <li>  <a href="index.php">Home</a></li>
          <li><a href="products.php">Products</a></li>
            <li><a href="contactus.php">Contact</a></li>
        <li>    <a href="shoppingbag.php">shopping bag</a></li>
        <li>    <a href="account.php">Account</a></li>
        <li>    <a href="checkout.php">Check Out</a></li>
</ul>
      </div>
      <div class="uk-width-1-3">
        <h3>Links</h3>

        <ul class="footer__link uk-list">
          <li>  <a href="index.php">Home</a></li>
          <li><a href="products.php">Products</a></li>
            <li><a href="contactus.php">Contact</a></li>
        <li>    <a href="shoppingbag.php">shopping bag</a></li>
        <li>    <a href="account.php">Account</a></li>
        <li>    <a href="checkout.php">Check Out</a></li>
</ul>
      </div>
      <div class="uk-width-1-3">
        <form class="uk-form-stacked">

    <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Subscribe To Our News Letter</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-stacked-text" type="text" placeholder="Some text...">
        </div>
    </div>
  </form>


<ul class="sociallinks">
  <li><a class="facebook" href="#"><i class="fab fa-facebook"></i></a></li>
  <li><a class="twitter" href="#"><i class="fab fa-twitter-square"></i></a></li>
  <li><a class="googleplus" href="#"><i class="fab fa-google-plus-square"></i></a></li>
</ul>


      </div>

    </div>
  </div>
</footer>

<script type="text/javascript">
$(".js-form-item").on("click", function () {
    $(this).addClass('form-item--input-filled');
});
$(".form-item__input").on("blur", function () {
    if($(this).val() === '') {
        $(this).parent('.js-form-item').removeClass('form-item--input-filled');
    }
});
</script>


</body>

</html>
