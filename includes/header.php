<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="index.php">
                <h1>NAMMA BLOG</h1>
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
  <ul class="nav navbar-nav">
    <li class="active"><a href="index.php">Home</a></li>
    <li><a href="#service">Timeline</a></li>
     <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Catgories <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="sbc.php?cat=project">Project</a></li>
        <li><a href="sbc.php?cat=health">Health</a></li>
        <li><a href="sbc.php?cat=sports">Sports</a></li>
      </ul>
    </li>
    <li><a href="#about">About</a></li>
<li><a href="#contact">Contact</a></li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Options <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <?php if (!isset($_SESSION['email'])) {
     ?>
        <li><a href="alogin.php">Admin Login</a></li>
      <?php } ?>
      <?php if (isset($_SESSION['admin'])) {
   ?>
      <li><a href="test4.php">Priveleges</a></li>
    <?php } ?>
        <?php if (isset($_SESSION['email'])) {
        ?>
        <li><a href="profile.php"><?php echo $_SESSION['uname'];?></a></li>
        <li><a href="setting.php">Settings</a></li>
        <li><a href="logout.php">Logout</a></li>
      <?php } ?>
      </ul>
    </li>

  </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
