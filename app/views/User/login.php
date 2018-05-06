<!--start-breadcrumbs
<div class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs-main">
            <ol class="breadcrumb">
                <li><a href="<?= PATH ?>">HauptSeite</a></li>
                <li>Einloggen</li>
            </ol>
        </div>
    </div>
</div>-->
<!--end-breadcrumbs-->
<!--starts-->
<?php if (!isset($_SESSION['success'])): ?>
<div class="col-md-12">
    <div class="product-one login">
        <div class="register-top heading">
            <h2>Einloggen</h2>
        </div>
        <div class="register-main">
            <div class="col-md-6 account-left">
                <form method="post" action="user/login" role="form" data-toggle="validator">
                    <div class="form-group has-feedback">
                        <label for="login">Login</label>
                        <input type="text" name="login" class="form-control" id="login" placeholder="Login"
                               required>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="pasword">Password</label>
                        <input type="password" name="password" class="form-control" id="pasword"
                               placeholder="Password" required>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                    <button type="submit" class="btn btn-default">Einloggen</button>
                </form>

            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<!--pro