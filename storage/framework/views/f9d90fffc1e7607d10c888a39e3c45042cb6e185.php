<!-- Libs JS -->
<script src="/assets/libs/apexcharts/dist/apexcharts.min.js" defer></script>
<script src="/assets/libs/jsvectormap/dist/js/jsvectormap.min.js" defer></script>
<script src="/assets/libs/jsvectormap/dist/maps/world.js" defer></script>
<script src="/assets/libs/jsvectormap/dist/maps/world-merc.js" defer></script>
<!-- Tabler Core -->
<script src="/assets/js/tabler.min.js" defer></script>
<script src="/assets/js/opai.min.js" defer></script>

<!-- AJAX CALLS -->
<script src="/assets/openai/js/jquery.js"></script>
<script src="/assets/openai/js/main.js"></script>
<script src="/assets/openai/js/toastr.min.js"></script>
<script src="/assets/libs/tom-select/dist/js/tom-select.base.min.js?1674944402" defer></script>

<script>
    var magicai_localize = {
        signup: <?php echo json_encode(__('Sign Up'), 15, 512) ?>,
        please_wait: <?php echo json_encode(__('Please Wait...'), 15, 512) ?>,
        sign_in: <?php echo json_encode(__('Sign In'), 15, 512) ?>,
        login_redirect: <?php echo json_encode(__('Login Successful, Redirecting...'), 512) ?>,
        register_redirect: <?php echo json_encode(__('Registration is complete. Redirecting...'), 15, 512) ?>,
        password_reset_link: <?php echo json_encode(__('Password reset link sent succesfully. Please also check your spam folder.'), 15, 512) ?>,
        password_reset_done: <?php echo json_encode(__('Password succesfully changed.'), 15, 512) ?>,
        password_reset: <?php echo json_encode(__('Reset Password'), 15, 512) ?>,
        missing_email: <?php echo json_encode(__('Please enter your email address.'), 15, 512) ?>,
        missing_password: <?php echo json_encode(__('Please enter your password.'), 15, 512) ?>,
        content_copied_to_clipboard: <?php echo json_encode(__('Content copied to clipboard.'), 15, 512) ?>,
    }
</script>


<!-- PAGES JS-->
<?php if(auth()->guard()->guest()): ?>
<script src="/assets/js/panel/login_register.js"></script>
<?php endif; ?>
<script src="/assets/js/panel/search.js"></script>

<script src="/assets/libs/list.js/dist/list.js" defer></script>


<?php /**PATH C:\laragon\www\Laravel\51_pentaforce\resources\views/auth/script.blade.php ENDPATH**/ ?>