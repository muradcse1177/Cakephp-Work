
<body class="login-page">
    <div class="login-box">
        <div class="card">
            <div class="body">
                <form id="login" method="POST" action="/loginForm" >
                    <?php if(isset($message)) {?>
                    <center><div class="msg"><?php echo $message ?> </div></center>
                    <?php } else { ?>
                    <center><div class="msg">Sign in to start your session</div></center>
                    <?php }  ?>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">Remember Me</label>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">SIGN IN</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <a href="/sin-up">Register Now!</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>