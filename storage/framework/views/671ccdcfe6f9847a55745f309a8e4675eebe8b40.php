<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="sidenav">
         <div class="login-main-text">
            <h2>Application<br> Login Page</h2>
            <p>Login or register from here to access.</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
            <div class="d-grid gap-2 d-md-flex justify-content-md-start" width="200px">
              <?php if(Route::has('login')): ?>
                <?php if(auth()->guard()->check()): ?>
            <a href="<?php echo e(route('dashboard')); ?>"><button type="button" class="btn btn-primary btn-lg px-4 me-md-2">dashboard</button></a>
            <?php else: ?>
            <a href="<?php echo e(route('login')); ?>"><button type="button" class="btn btn-outline-secondary btn-lg px-4">Login</button></a>
            <?php if(Route::has('register')): ?>
            <a href="<?php echo e(route('register')); ?>"><button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Register</button></a>
            <?php endif; ?>
            <?php endif; ?>
            <?php endif; ?>
            </div>
            </div>
         </div>
      </div>
<style>
body {
    font-family: "Lato", sans-serif;
}



.main-head{
    height: 150px;
    background: #FFF;
   
}

.sidenav {
    height: 100%;
    background-color: #000;
    overflow-x: hidden;
    padding-top: 20px;
}


.main {
    padding: 0px 10px;
}

@media  screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
}

@media  screen and (max-width: 450px) {
    .login-form{
        margin-top: 10%;
    }

    .register-form{
        margin-top: 10%;
    }
}

@media  screen and (min-width: 768px){
    .main{
        margin-left: 40%; 
    }

    .sidenav{
        width: 40%;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
    }

    .login-form{
        margin-top: 80%;
    }

    .register-form{
        margin-top: 20%;
    }
}


.login-main-text{
    margin-top: 20%;
    padding: 60px;
    color: #fff;
}

.login-main-text h2{
    font-weight: 300;
}

.btn-black{
    background-color: #000 !important;
    color: #fff;
}
</style><?php /**PATH C:\xampp\htdocs\cafe\resources\views/welcome.blade.php ENDPATH**/ ?>