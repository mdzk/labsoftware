<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Hosting - Lab Software</title>
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/main/app.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/pages/auth.css">
    <link rel="shortcut icon" href="<?= base_url(); ?>/assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="<?= base_url(); ?>/assets/images/logo/favicon.png" type="image/png">
</head>

<body>
    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-4 d-none d-lg-block">
                <div id="auth-right">
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="row">
                    <div id="auth-left" class="col-sm-12 col-xs-12" style="width: max-content;">
                        <div class="auth-logo">
                            <a href="<?= base_url(); ?>"><img src="<?= base_url(); ?>/assets/images/logo/logo.png" alt="Logo"></a>
                        </div>
                        <h1 class="auth-title">Pesan Hosting</h1>
                        <p class="auth-subtitle mb-5">Dapatkan hosting gratis, dengan mengisi data berikut!</p>
                        <form action="<?= route_to('home-hosting-add'); ?>" method="POST">
                            <div class="form-group position-relative has-icon-left mb-4">
                                <input required type="text" name="email" class="form-control form-control-xl" placeholder="Email">
                                <div class="form-control-icon">
                                    <i class="bi bi-envelope"></i>
                                </div>
                            </div>
                            <div class="form-group position-relative has-icon-left mb-4">
                                <input required type="text" name="name" class="form-control form-control-xl" placeholder="Nama">
                                <div class="form-control-icon">
                                    <i class="bi bi-person"></i>
                                </div>
                            </div>
                            <div class="form-group position-relative has-icon-left mb-4">
                                <input required type="number" name="npm" maxlength="8" class="form-control form-control-xl" placeholder="NPM">
                                <div class="form-control-icon">
                                    <i class="bi bi-credit-card-2-back"></i>
                                </div>
                            </div>
                            <div class="form-group input-group position-relative has-icon-left mb-4">
                                <input required type="text" name="subdomain" class="form-control form-control-xl" placeholder="Subdomain">
                                <span class="input-group-text" id="basic-addon2">.labsoftpolinela.id</span>
                                <div class="form-control-icon">
                                    <i class="bi bi-link-45deg"></i>
                                </div>
                            </div>
                            <div class="form-group position-relative has-icon-left mb-4">
                                <input required type="text" name="username" class="form-control form-control-xl" placeholder="Username">
                                <div class="form-control-icon">
                                    <i class="bi bi-person-fill"></i>
                                </div>
                            </div>
                            <div class="form-group position-relative mb-4">
                                <div class="form-floating">
                                    <textarea required name="description" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                    <label for="floatingTextarea2">Dengan keperluan:</label>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5" name="submit" value="submit" type="submit">Pesan</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>