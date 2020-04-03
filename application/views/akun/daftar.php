<!-- kotak login -->
<div class="container">
    <div class="row">
        <div class="col">
            <div class="text-center title">
                <h1>membuat akun baru!</h1>
            </div>
            <div class="col-lg-5 form mx-auto">
                <form method="POST" action="<?= base_url('akun/daftar'); ?>">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control text-center shadow" id="exampleInputName" placeholder="name">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control text-center shadow" id="exampleInputEmail1" placeholder="email">
                    </div>
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
                    <a href="<?= base_url() ?>akun"><small>sudah punya akun?</small></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- kotak login -->