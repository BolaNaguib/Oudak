<!DOCTYPE html>
<html>

<head>
  <title>OUDAK</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- UIkit CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.25/css/uikit.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Felipa" rel="stylesheet">

  <!-- UIkit JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.25/js/uikit.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.25/js/uikit-icons.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">

</head>

<body>
  <style>

  </style>

  <nav class="uk-container uk-container-large " uk-navbar>
    <div class="uk-navbar-right">
      <div>
        <ul class="uk-navbar-nav">
          <li>
            <div class="uk-inline">
              <button class="uk-padding-small uk-button uk-button-text" type="button">USA <span uk-icon="triangle-down"></span></button>
              <div uk-dropdown="mode: click">Egypt</div>

            </div>
          </li>
          <li>
            <div class="uk-inline">
              <button class="uk-padding-small  uk-button uk-button-text" type="button">ENG <span uk-icon="triangle-down"></span></button>
              <div uk-dropdown="mode: click">AR</div>

            </div>
          </li>
          <li>
            <button class=" uk-padding-small uk-button uk-button-text" type="button" uk-toggle="target: #toggle-usage"><span uk-icon="search"></span></button>

          </li>


        </ul>
      </div>
    </div>

  </nav>
  <hr>
  <div class="uk-container uk-container-large uk-text-right">
    <div id="toggle-usage" hidden>
      <div class="uk-display-block">
        <form class="uk-search uk-search-default">
          <span uk-search-icon></span>
          <input class="uk-search-input" type="search" placeholder="Search...">
        </form>
      </div>

    </div>
  </div>

  <nav class="uk-container uk-container-large " uk-navbar>
    <div class="uk-navbar-left">
      <a class="uk-navbar-toggle" href="#" uk-toggle="target: #offcanvas-usage">
        <span uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Menu</span>
      </a>
    </div>
    <div class="uk-navbar-center">

      <div class="uk-text-center">
        <a class="uk-navbar-item uk-logo" href="index.php" style="display:block;">
          <h3 class="uk-margin-remove">
            Oudak
          </h3>

          <h6 class="uk-margin-remove logo__subtitle">Luxury Fragrance & Beauty</h6>
        </a>

      </div>
      <div class="uk-text-center">

      </div>


    </div>
    <div class="uk-navbar-right">
      <div>
        <ul class="uk-navbar-nav">
          <li>
            <div class="uk-inline">
              <button class="uk-padding-small  uk-button uk-button-text" type="button"><span class="uk-margin-right">Shopping Cart</span><span uk-icon="cart"></span><span uk-icon="triangle-down"></span></button>
              <!-- <div uk-dropdown="mode: click">AR</div>

          </div> -->
          </li>
          <li>
            <div class="uk-inline">
              <button class="uk-padding-small  uk-button uk-button-text" type="button">My Account <span uk-icon="triangle-down"></span></button>
              <!-- <div uk-dropdown="mode: click">AR</div>

          </div> -->
          </li>
        </ul>
      </div>
    </div>
    </div>
  </nav>
  <div id="offcanvas-usage" uk-offcanvas>
    <div class="uk-offcanvas-bar">

      <button class="uk-offcanvas-close" type="button" uk-close></button>

      <h3 class="uk-text-center">OUDAK </h3>

      <ul class="uk-nav uk-nav-default uk-text-center">
        <li> <a class="menu_links" href="index.php">Home</a></li>
        <li><a class="menu_links"  href="products.php">Products</a></li>
        <li><a class="menu_links"  href="contactus.php">Contact</a></li>
        <li> <a class="menu_links" href="shoppingbag.php">shopping bag</a></li>
        <li> <a class="menu_links" href="account.php">Account</a></li>
        <li> <a class="menu_links" href="checkout.php">Check Out</a></li>

      </ul>
      <div class="">
        <a class="uk-button uk-button-default" type="button">Fragrance</a>

        <div uk-dropdown="pos: right-center">
          <div class="uk-dropdown-grid " uk-grid>
            <div class="uk-width-expand">
              <ul class="uk-nav uk-dropdown-nav">
                <li class=""><a href="#">House Of Men </a></li>
                <li class=""><a href="#">House Of WomMen </a></li>
                <li class=""><a href="#">Execlusives </a></li>

              </ul>
            </div>
            <div class="uk-width-expand" style="width:950px;">

              <img src="http://bolanaguib.com/oudak/img/right.png" width="100%" alt="">
            </div>
          </div>
        </div>
      </div>

      <div class="">
        <a class="uk-button uk-button-default" type="button">OUD HOUSE</a>

        <div uk-dropdown="pos: right-center">
          <div class="uk-dropdown-grid " uk-grid>
            <div class="uk-width-expand">
              <ul class="uk-nav uk-dropdown-nav">

                <li class=""><a href="sweetoudoil.php">Sweet Oud Oil </a></li>
                <li class=""><a href="category-floures.php">Floures</a></li>
                <li class=""><a href="category-incentwildfuturescent.php">Incent & Wild “future scent”</a></li>
                <li class=""><a href="category-IncentOudOil.php">Incent Oud Oil </a></li>
                <li class=""><a href="#">Hores Oud Oil </a></li>
                <li class=""><a href="#">House Blends </a></li>

              </ul>
            </div>
            <div class="uk-width-expand" style="width:950px;">

              <img src="http://bolanaguib.com/oudak/img/right.png" width="100%" alt="">
            </div>
          </div>
        </div>
      </div>

      <div class="">
        <a class="uk-button uk-button-default" type="button">OUD WOOD</a>

        <div uk-dropdown="pos: right-center">
          <div class="uk-dropdown-grid " uk-grid>
            <div class="uk-width-expand">
              <ul class="uk-nav uk-dropdown-nav">
                <li class=""><a href="#">individual use </a></li>
                <li class=""><a href="#">party use </a></li>
                <li class=""><a href="category-dailyuse.php">Daily use </a></li>

              </ul>
            </div>
            <div class="uk-width-expand" style="width:950px;">

              <img src="http://bolanaguib.com/oudak/img/right.png" width="100%" alt="">
            </div>
          </div>
        </div>
      </div>

      <div class="">
        <a class="uk-button uk-button-default" type="button">OUD OIL</a>

        <div uk-dropdown="pos: right-center">
          <div class="uk-dropdown-grid " uk-grid>
            <div class="uk-width-expand">
              <ul class="uk-nav uk-dropdown-nav">
                <li class=""><a href="category-Incent.php">Incent </a></li>

              </ul>
            </div>
            <div class="uk-width-expand" style="width:950px;">

              <img src="http://bolanaguib.com/oudak/img/right.png" width="100%" alt="">
            </div>
          </div>
        </div>
      </div>

      <div class="">
        <a class="uk-button uk-button-default" type="button">Hair Care</a>

        <div uk-dropdown="pos: right-center">
          <div class="uk-dropdown-grid " uk-grid>
            <div class="uk-width-expand">
              <ul class="uk-nav uk-dropdown-nav">
                <li class=""><a href="#">Oudulation </a></li>
                <li class=""><a href="#">Paste </a></li>
                <li class=""><a href="#">Oushine </a></li>

              </ul>
            </div>
            <div class="uk-width-expand" style="width:950px;">

              <img src="http://bolanaguib.com/oudak/img/right.png" width="100%" alt="">
            </div>
          </div>
        </div>
      </div>


      <div class="">
        <a class="uk-button uk-button-default" type="button">Baby House</a>

        <div uk-dropdown="pos: right-center">
          <div class="uk-dropdown-grid " uk-grid>
            <div class="uk-width-expand">
              <ul class="uk-nav uk-dropdown-nav">
                <li class=""><a href="#">Styling Cream </a></li>
                <li class=""><a href="#">Baby Fragrance </a></li>

              </ul>
            </div>
            <div class="uk-width-expand" style="width:950px;">

              <img src="http://bolanaguib.com/oudak/img/right.png" width="100%" alt="">
            </div>
          </div>
        </div>
      </div>





    </div>



  </div>
  </div>
