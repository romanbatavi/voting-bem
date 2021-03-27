<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">

            <?= $this->session->flashdata('message'); ?>

            <form class="user" method="post" action="<?= base_url('auth'); ?>">

                <div class="form-group">
                    <div class="text-center text-header">
                        <img src="<?= base_url('assets/img/logo.gif'); ?>" style="width:75px;" alt="logo">
                        <h3 class="text-primary">Universitas Methodist Indonesia</h3>
                        <h4 class="text-primary">Login Administrator</h4>
                    </div>
                </div>
                <hr>
                <div class="form-group">

                    <label for="email">email</label>
                    <input type="text" id="email" name="email" class="form-control" placeholder="ex : Gorbyno@gmail.com" autofocus autocomplete="off">
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">

                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <button class="btn btn-primary btn-block" type="submit" name="submit">Sign in</button>
            </form>
        </div>
        <div class="col-md-4">

        </div>
    </div>
</div> <!-- /container -->