
<footer class="bg-[#3D3D3D] text-white py-8">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <p>
            © <?php echo date('Y'); ?>
            گروه بازاریابی زمان ثانی
        </p>
    </div>
</footer>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const button = document.getElementById('mobile-menu-button');
    const menu = document.getElementById('mobile-menu');

    if (button && menu) {
        button.addEventListener('click', function () {
            menu.classList.toggle('hidden');

            button.setAttribute(
                'aria-expanded',
                String(!menu.classList.contains('hidden'))
            );
        });
    }

});
</script>

<?php wp_footer(); ?>

</body>
</html>
