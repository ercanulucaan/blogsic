<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                        <div class="brand-logo">
                            <img src="<?= url($settings['site_header_logo_path']) ?>" alt="logo">
                        </div>
                        <h4>Yeni misin?</h4>
                        <h6 class="font-weight-light">Kolayca hesabını oluştur, yönetime başla.</h6>
                        <form class="pt-3" method="post" action="">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" name="full_name" placeholder="Ad soyad" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" name="username" placeholder="Kullanıcı adı" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" name="password" placeholder="Şifre" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-lg" name="email_address" placeholder="E-posta adresi" required>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control form-control-lg" name="mobile_number" placeholder="Telefon numarası" required>
                            </div>
                            <div class="mb-4">
                                <div class="form-check">
                                    <label class="form-check-label text-muted">
                                        <input type="checkbox" class="form-check-input" name="policy_verify" required>
                                        Tüm şartları ve koşulları kabul ediyorum
                                    </label>
                                </div>
                            </div>
                            <div class="mt-3 d-grid gap-2">
                                <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
                                   href="#">Hesap Oluştur</button>
                            </div>
                            <div class="text-center mt-4 font-weight-light">
                                Zaten bir hesabınız var mı? <a href="<?=url('admin/auth/login')?>" class="text-primary">Giriş yapın</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>