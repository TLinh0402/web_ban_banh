
<?php 
  $page= substr($_SERVER['SCRIPT_NAME'], strpos($_SERVER['SCRIPT_NAME'], "/")+1);

?>

<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <!-- <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo"> -->
        <span class="ms-1 font-weight-bold text-white">CAKE SHOP </span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link text-white  <?= $page == "../adminindex.php"? 'active bg-gradient-primary':''; ?>" href="../adminindex.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
      <li class="nav-item">
          <a class="nav-link text-white <?= $page == "category.php"? 'active bg-gradient-primary':''; ?>" href="category.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1"> ALL Category </span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white  <?= $page == "add_category.php"? 'active bg-gradient-primary':''; ?> " href="add_category.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">add</i>
            </div>
            <span class="nav-link-text ms-1">Add Category</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white  <?= $page == "product.php"? 'active bg-gradient-primary':''; ?>" href="product.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1"> ALL Product </span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?= $page == "add_product.php"? 'active bg-gradient-primary':''; ?> " href="add_product.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">add</i>
            </div>
            <span class="nav-link-text ms-1"> Add Product </span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?= $page == "thongke.php"? 'active bg-gradient-primary':''; ?> " href="thongke.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">add</i>
            </div>
            <span class="nav-link-text ms-1">Shopping list </span>
          </a>
        </li>
       
       
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
        <a class="btn bg-gradient-primary mt-4 w-100" href="logout_admin.php" type="button">Logout</a>
      </div>
    </div>
  </aside>
