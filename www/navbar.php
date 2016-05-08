<nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" style="color: #ffffff;" href="#">Boomselection</a>
          </div>

          <div id="navbar" class="navbar-collapse collapse">

            <ul class="nav navbar-nav">

              <li><a type="button" class="nav navbar-nav" style="width:100%;" href="#test_modal" data-toggle="modal"><h8 class="indent">DJ's</h8></a></li>
              <li><a type="button" class="nav navbar-nav" style="width:100%;" href="#test_modal" data-toggle="modal"><h8 class="indent">Schedule</h8></a></li>
 			                    <?php
                    if(!$user->is_logged_in()){

                             echo '<li><a href="/contact.php">Contact</a></li>';
                             echo '<li><a href="/admin/">Admin</a></li>';
                             echo '<li><a href="/admin/">login</a></li>';

                    } else {

                             echo '<li><a href="/contact.php">Contact</a></li>';
                             echo '<li><a href="/admin/">Admin</a></li>';
                             echo '<li><a href="/admin/logout.php">logout</a></li>';
                    }
                    ?>

 			</ul>
            <ul class="nav navbar-nav navbar-right">
<div style="margin-top: 15px; margin-right: 7px;">
<div id="txt"></div>




</div>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
