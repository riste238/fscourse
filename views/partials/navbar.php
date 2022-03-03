<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
   
      <form class="d-flex">
        <input id="one" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        </form>

       <?php if(isset($_SESSION['id'])): ?>
                <a href="logout.php" class="btn btn-outline-danger">Logout</a>
                <?php endif; ?>
     
    </div>
  </div>
</nav>