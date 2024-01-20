<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="<?php echo base_url('assets/images/drop.png') ?>" width="100px" alt="CoolAdmin">
                            </a>
                        </div>
                        <div><?php echo $this->session->flashdata('pesan') ?></div>
                        <div class="login-form">
                            <form action="" method="post">
                               <br>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                                
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Login</button>
                                <div class="social-login-content">
                                    <div class="social-button">
                                    </div>
                                </div>
                            </form>
                            <div class="register-link">
                                <p>
                                    Belum Memiliki Akun?
                                    <a href="<?php echo base_url('register')?>">Daftar Disini</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>.