
<?php 
session_start();

if(isset($_SESSION['auth'])){
    $_SESSION['message'] = "You are already logged in";
    header('loaction: adminindex.php');
    exit();

}

include('Includes/adheader.php');   
?>


<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
            <?php 
            if(isset($_SESSION['message'] )) 
            { 
                    ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Hey! baby</strong> <?= $_SESSION['message']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>  
            <?php 
            unset($_SESSION['message']);

             } 
             ?>
                <div class="card">
                    <div class="card-header">
                        <h4>Login form </h4>
                    </div>
                    <div class="card-body">
                        <form action="function/authcode.php" method="POST">
                           
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your password">
                            </div>
                            
                            
                            <button type="submit" name="login_btn" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
//ê cái loginban đầu đâu á

<?php include('Includes/adfooter.php');   ?>