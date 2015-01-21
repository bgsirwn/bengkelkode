<div class="g-recaptcha" data-sitekey="<?= Config::get('app.siteKey'); ?>"></div>

<?= Marwelln\Recaptcha\Script::instance()->script(); ?>