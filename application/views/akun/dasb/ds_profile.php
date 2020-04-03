<div class="container profile">
    <div class="row pt-5">
        <div class="col">
            <h3>Profile</h3>
            <hr>

            <div class="row pt-5">
                <div class="col-lg-12 p-0">
                    <img class="img-profile rounded-circle" src="<?php echo base_url('asset/img/profile/' . $user['image']); ?>">
                </div>

                <div class="col-6">
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="email">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="name" class="form-control" id="name" placeholder="<?php echo $user['name'] ?>">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="nim">Nim</label>
                        <input type="nim" class="form-control" id="nim" placeholder="<?php echo $user['nim'] ?>">
                    </div>
                </div>

            </div>



        </div>
    </div>
</div>