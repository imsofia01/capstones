<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/font/material-design-icons/Material-Design-Icons.woff">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/dash.css">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
<header>
<div class="area" >
    
<ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>

            </ul>

            <head>
 

  <ul id="slide-out" class="side-nav fixed z-depth-2">
    <li class="center no-padding">
      <div class="indigo darken-2 white-text" style="height: 180px;">
        <div class="row">
          <img style="margin-top: 5%; border-radius: 50px" width="100" height="100" src="./pics/teacher.jpg" />

          <p style="margin-top: -13%;">
            Teacher Sarah
          </p>
        </div>
      </div>
    </li>

    <li id="dash_dashboard"><a class="waves-effect" href="#!"><b>Dashboard</b></a></li>

    <ul class="collapsible" data-collapsible="accordion">
      <li id="dash_users">
        <div id="dash_users_header" class="collapsible-header waves-effect"><b>Students</b></div>
        <div id="dash_users_body" class="collapsible-body">
          <ul>
            <li id="users_seller">
              <a class="waves-effect" style="text-decoration: none;" href="#!">Student list</a>
            </li>

            <li id="users_customer">
              <a class="waves-effect" style="text-decoration: none;" href="#!">Customer</a>
            </li>
          </ul>
        </div>
      </li>

      <li id="dash_products">
        <div id="dash_products_header" class="collapsible-header waves-effect"><b>Talaan ng nangunguna</b></div>
        <div id="dash_products_body" class="collapsible-body">
          <ul>
            <li id="products_product">
              <a class="waves-effect" style="text-decoration: none;" href="#!">Alpabetong Filipino</a>
              <a class="waves-effect" style="text-decoration: none;" href="#!">Magagalang na Pananalita</a>
            </li>
          </ul>
        </div>
      </li>

      <li id="dash_categories">
        <div id="dash_categories_header" class="collapsible-header waves-effect"><b>Categories</b></div>
        <div id="dash_categories_body" class="collapsible-body">
          <ul>
            <li id="categories_category">
              <a class="waves-effect" style="text-decoration: none;" href="#!">Category</a>
            </li>

            <li id="categories_sub_category">
              <a class="waves-effect" style="text-decoration: none;" href="#!">Sub Category</a>
            </li>
          </ul>
        </div>
      </li>

      <li id="dash_brands">
        <div id="dash_brands_header" class="collapsible-header waves-effect"><b>Setting</b></div>
        <div id="dash_brands_body" class="collapsible-body">
          <ul>
            <li id="brands_brand">
              <a class="waves-effect" style="text-decoration: none;" href="#!">Profile</a>
            </li>

            <li id="brands_sub_brand">
              <a class="waves-effect" style="text-decoration: none;" href="#!">Logout</a>
            </li>
          </ul>
        </div>
      </li>
      
    </ul>
  </ul>

  <header>
    <ul class="dropdown-content" id="user_dropdown">
      <li><a class="indigo-text" href="#!">Profile</a></li>
      <li><a class="indigo-text" href="teacher.php">Logout</a></li>
    </ul>

    <nav class="indigo" role="navigation">
      <div class="nav-wrapper">
        <a data-activates="slide-out" class="button-collapse show-on-" href="#!"><img style="margin-top: 17px; margin-left: 5px;" src="https://res.cloudinary.com/dacg0wegv/image/upload/t_media_lib_thumb/v1463989873/smaller-main-logo_3_bm40iv.gif" /></a>

        <ul class="right hide-on-med-and-down">
          <li>
            <a class='right dropdown-button' href='' data-activates='user_dropdown'><i class=' material-icons'>account_circle</i></a>
          </li>
        </ul>

        <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
      </div>
    </nav>

    <nav>
      <div class="nav-wrapper indigo darken-2">
        <a style="margin-left: 20px;" class="breadcrumb" href="#!">Admin</a>
        <a class="breadcrumb" href="#!">Index</a>

        <div style="margin-right: 20px;" id="timestamp" class="right"></div>
      </div>
    </nav>
  </header>

  <main>
    <div class="row">
      <div class="col s6">
        <div style="padding: 35px;" align="center" class="card">
          <div class="row">
            <div class="left card-title">
              <b>User Management</b>
            </div>
          </div>

          <div class="row">
            <a href="#!">
              <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                <i class="indigo-text text-lighten-1 large material-icons">person</i>
                <span class="indigo-text text-lighten-1"><h5>Seller</h5></span>
              </div>
            </a>
            <div class="col s1">&nbsp;</div>
            <div class="col s1">&nbsp;</div>

            <a href="#!">
              <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                <i class="indigo-text text-lighten-1 large material-icons">people</i>
                <span class="indigo-text text-lighten-1"><h5>Customer</h5></span>
              </div>
            </a>
          </div>
        </div>
      </div>

      <div class="col s6">
        <div style="padding: 35px;" align="center" class="card">
          <div class="row">
            <div class="left card-title">
              <b>Product Management</b>
            </div>
          </div>
          <div class="row">
            <a href="#!">
              <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                <i class="indigo-text text-lighten-1 large material-icons">store</i>
                <span class="indigo-text text-lighten-1"><h5>Product</h5></span>
              </div>
            </a>

            <div class="col s1">&nbsp;</div>
            <div class="col s1">&nbsp;</div>

            <a href="#!">
              <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                <i class="indigo-text text-lighten-1 large material-icons">assignment</i>
                <span class="indigo-text text-lighten-1"><h5>Orders</h5></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col s6">
        <div style="padding: 35px;" align="center" class="card">
          <div class="row">
            <div class="left card-title">
              <b>Brand Management</b>
            </div>
          </div>

          <div class="row">
            <a href="#!">
              <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                <i class="indigo-text text-lighten-1 large material-icons">local_offer</i>
                <span class="indigo-text text-lighten-1"><h5>Brand</h5></span>
              </div>
            </a>

            <div class="col s1">&nbsp;</div>
            <div class="col s1">&nbsp;</div>

            <a href="#!">
              <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                <i class="indigo-text text-lighten-1 large material-icons">loyalty</i>
                <span class="indigo-text text-lighten-1"><h5>Sub Brand</h5></span>
              </div>
            </a>
          </div>
        </div>
      </div>

      <div class="col s6">
        <div style="padding: 35px;" align="center" class="card">
          <div class="row">
            <div class="left card-title">
              <b>Category Management</b>
            </div>
          </div>
          <div class="row">
            <a href="#!">
              <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                <i class="indigo-text text-lighten-1 large material-icons">view_list</i>
                <span class="indigo-text text-lighten-1"><h5>Category</h5></span>
              </div>
            </a>
            <div class="col s1">&nbsp;</div>
            <div class="col s1">&nbsp;</div>

            <a href="#!">
              <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                <i class="indigo-text text-lighten-1 large material-icons">view_list</i>
                <span class="truncate indigo-text text-lighten-1"><h5>Sub Category</h5></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="fixed-action-btn click-to-toggle" style="bottom: 45px; right: 24px;">
      <a class="btn-floating btn-large pink waves-effect waves-light">
        <i class="large material-icons">add</i>
      </a>

      <ul>
        <li>
          <a class="btn-floating red"><i class="material-icons">note_add</i></a>
          <a href="" class="btn-floating fab-tip">Add a note</a>
        </li>

        <li>
          <a class="btn-floating yellow darken-1"><i class="material-icons">add_a_photo</i></a>
          <a href="" class="btn-floating fab-tip">Add a photo</a>
        </li>

        <li>
          <a class="btn-floating green"><i class="material-icons">alarm_add</i></a>
          <a href="" class="btn-floating fab-tip">Add an alarm</a>
        </li>

        <li>
          <a class="btn-floating blue"><i class="material-icons">vpn_key</i></a>
          <a href="" class="btn-floating fab-tip">Add a master password</a>
        </li>
      </ul>
    </div>
  </main>

  <footer class="indigo page-footer">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <h5 class="white-text">Icon Credits</h5>
          <ul id='credits'>
            <li>
              Gif Logo made using <a href="https://formtypemaker.appspot.com/" title="Form Type Maker">Form Type Maker</a> from <a href="https://github.com/romannurik/FORMTypeMaker" title="romannurik">romannurik</a>
            </li>
            <li>
              Icons made by <a href="https://material.io/icons/">Google</a>, available under <a href="https://www.apache.org/licenses/LICENSE-2.0" target="_blank">Apache License Version 2.0</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
         <span>Made By <a style='font-weight: bold;' href="https://github.com/piedcipher" target="_blank">Tirth Patel</a></span>
      </div>
    </div>
  </footer>
</body>

</html>

</body>
</html>