<!-- kotak login -->
<div class="container">
    <div class="row">
        <div class="col">
            <div class="text-center">
                <img src="asset/img/icon.png" alt="icon">
            </div>
            <div class="col-lg-5 form mx-auto">
                <form method="POST" action="<?= base_url('akun'); ?>">
                    <div class="form-group">
                        <input type="text" name="nim" class="form-control text-center shadow" id="exampleInputNim" placeholder="nim">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control text-center shadow" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">masuk</button>
                </form>
                <hr>
                <div class="col miniact text-center">
                    <a href=""><small>lupa password?</small></a> |
                    <a href="<?= base_url() ?>akun/daftar"><small>buat akun baru!</small></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- kotak login -->