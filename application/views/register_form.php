
<style type="text/css">
    .scrol{
    height:400px;
    overflow: scroll;
}
</style>
<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <h2>Register</h2>
                                <img src="<?php echo base_url('assets/images/drop.png') ?>" width="100px" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="scrol">
                        <div class="login-form">
                            <form action="<?php echo base_url('register')?>" method="post">
                                 <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input class="au-input au-input--full" type="text" name="nama_pelanggan" placeholder="Nama Lengkap">
                                </div>
                                    <div class="form-group">
                                    <label>Id Ktp</label>
                                    <input class="au-input au-input--full" type="text" name="id_ktp" placeholder="Nama Lengkap">
                                </div>
                               
                                <div class="form-group">
                                    <label>Nomor Handphone</label>
                                    <input class="au-input au-input--full" type="text" name="no_hp" placeholder="Nomor Handphone">
                                </div>
                                <div class="form-group">
                                    <label>Desa</label>
                                    <input class="au-input au-input--full" type="text" name="desa" placeholder="desa">
                                </div>
                                 <div class="form-group">
                                    <label>Kode Pos</label>
                                    <input class="au-input au-input--full" type="text" name="kode_pos" placeholder="kode_pos">
                                </div>
                                <div class="form-group">
                                    <label>Alamat Pemasangan</label>
                                    <input class="au-input au-input--full" type="text" name="alamat_pemasangan" placeholder="alamat_pemasangan">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="au-input au-input--full" type="text" name="email" placeholder="email">
                                </div>
                                <div class="form-group">
                                    <label>Kondisi Bangunan</label>
                                    <input class="au-input au-input--full" type="text" name="kondisi_bangunan" placeholder="kondisi_bangunan">
                                </div>
                               
                               <div class="form-group">
                        <label>Luas Bangunan</label>
                        <input type="text" name="luas_bangunan" placeholder="Masukkan Luas Bangunan" class="form-control">
                        <?php echo form_error('luas_bangunan','<div class="text-danger-small" ml-3>') ?>
                     </div>
                     <div class="form-group">
                        <label>Jumlah Penghuni</label>
                        <input type="text" name="jumlah_penghuni" placeholder="Masukkan Luas Bangunan" class="form-control">
                        <?php echo form_error('jumlah_penghuni','<div class="text-danger-small" ml-3>') ?>
                     </div>
                     <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="username" placeholder="Username">
                                    <input type="hidden" name="status" value="belum_aktif">
                     </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                               
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">register</button>
                                <div class="social-login-content">
                                    <div class="social-button">
                                    </div>
                                </div>
                            </form>
                            </div>
                            <div class="register-link">
                                <p>
                                    Sudah Punya Akun?
                                    <a href="<?php echo base_url('auth_pelanggan/login')?>">Login Disini</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>