<?php


if (isset($_GET['a']))
{
  $active_page = $_GET['a'];
  switch($active_page) {
    case 'news': $active_class['news'] = 'active'; break;
    case 'gallery': $active_class['gallery'] = 'active'; break;
    case 'about': $active_class['about'] = 'active'; break;

  }
}
?>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><i class="material-icons" style="vertical-align: middle; font-size: 24px; margin-top: -5px;">web</i> SimpleCMS</a>
        </div>

        <div class="collapse navbar-collapse" id="navbar-collapse">

        <ul class="nav navbar-nav">
          <li class="<?php echo $active_class['news']; ?>"><a href="index.php?a=news"><i class="material-icons" style="vertical-align: middle; font-size: 16px;">cast_connected</i> News</a></li>
          <li class="<?php echo $active_class['gallery']; ?>"><a href="index.php?a=gallery"><i class="material-icons" style="vertical-align: middle; font-size: 16px;">photo_library</i> Gallery</a></li>
          <li class="<?php echo $active_class['about']; ?>"><a href="index.php?a=about"><i class="material-icons" style="vertical-align: middle; font-size: 16px;">info</i> About</a></li>
        </ul>

        <form class="navbar-form navbar-right" role="search">
          <div class="form-group">
          <div class="input-group">
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                </span>
              </div>
          </div>
      </form>



        </div>
      </div>
    </div>
