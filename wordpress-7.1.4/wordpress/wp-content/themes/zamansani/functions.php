<?php
function zamansani_theme_setup()
{

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');

    register_nav_menus([
        'primary' => 'منوی اصلی'
    ]);
}
add_action('after_setup_theme', 'zamansani_theme_setup');

/**
 * Load Theme Styles
 */
function zamansani_enqueue_styles()
{

    $css_file = get_theme_file_path('/assets/css/output.css');

    wp_enqueue_style(
        'zamansani-tailwind',
        get_theme_file_uri('/assets/css/output.css'),
        array(),
        file_exists($css_file) ? filemtime($css_file) : '1.0.0'
    );
}
add_action('wp_enqueue_scripts', 'zamansani_enqueue_styles');


/**
 * Load New Hero Three.js
 */
function zamansani_hero_new_assets()
{

    if (!is_front_page()) {
        return;
    }

    wp_enqueue_script(
        'three-js',
        'https://cdnjs.cloudflare.com/ajax/libs/three.js/0.160.0/three.min.js',
        array(),
        '0.160.0',
        true
    );


    wp_enqueue_script(
        'zamansani-hero-new',
        get_theme_file_uri('/assets/js/hero-new.js'),
        ['three-js'],
        '1.0.0',
        true
    );
}
wp_enqueue_style(
    'font-awesome',
    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css',
    [],
    '6.7.2'
);
add_action('wp_enqueue_scripts', 'zamansani_hero_new_assets');


// =============================================
// ZAMAN SANI - CAREERS SYSTEM
// =============================================

/**
 * Register Career Applications
 */
add_action('init', function () {

    register_post_type('career_application', [
        'labels' => [
            'name'          => 'درخواست‌های استخدام',
            'singular_name' => 'درخواست استخدام',
            'menu_name'     => 'درخواست‌های استخدام',
        ],

        'public'              => false,
        'publicly_queryable'  => false,
        'exclude_from_search'  => true,
        'show_ui'              => true,
        'show_in_menu'         => true,
        'show_in_admin_bar'    => false,
        'show_in_rest'         => false,
        'supports'              => ['title'],
        'capability_type'       => 'post',
        'map_meta_cap'          => true,
        'menu_icon'             => 'dashicons-id',
    ]);
});


/**
 * Admin columns
 */
add_filter('manage_career_application_posts_columns', function ($columns) {

    return [
        'cb'       => $columns['cb'],
        'title'    => 'متقاضی',
        'position' => 'موقعیت شغلی',
        'date'     => 'تاریخ ارسال',
    ];
});


add_action('manage_career_application_posts_custom_column', function ($column, $post_id) {

    if ($column === 'position') {

        $position = get_post_meta($post_id, '_career_position', true);

        $positions = [
            'sales'        => 'کارشناس فروش',
            'social-media' => 'کارشناس شبکه‌های اجتماعی',
        ];

        echo esc_html($positions[$position] ?? 'نامشخص');
    }
}, 10, 2);


/**
 * Application details in admin
 */
add_action('add_meta_boxes', function () {

    add_meta_box(
        'career_application_details',
        'اطلاعات متقاضی',
        'zamansani_career_details_box',
        'career_application',
        'normal',
        'high'
    );
});


function zamansani_career_details_box($post)
{

    $name        = get_post_meta($post->ID, '_career_name', true);
    $email       = get_post_meta($post->ID, '_career_email', true);
    $phone       = get_post_meta($post->ID, '_career_phone', true);
    $position    = get_post_meta($post->ID, '_career_position', true);
    $experience  = get_post_meta($post->ID, '_career_experience', true);
    $cv          = get_post_meta($post->ID, '_career_cv_path', true);

    $positions = [
        'sales'        => 'کارشناس فروش',
        'social-media' => 'کارشناس شبکه‌های اجتماعی',
    ];

    echo '<p><strong>نام:</strong> ' . esc_html($name) . '</p>';
    echo '<p><strong>ایمیل:</strong> ' . esc_html($email) . '</p>';
    echo '<p><strong>تلفن:</strong> ' . esc_html($phone) . '</p>';
    echo '<p><strong>موقعیت:</strong> ' . esc_html($positions[$position] ?? '') . '</p>';

    echo '<p><strong>تجربه:</strong><br>' .
        nl2br(esc_html($experience)) . '</p>';

    if ($cv && file_exists($cv)) {

        $download_url = wp_nonce_url(
            admin_url('admin-post.php?action=zamansani_download_cv&application_id=' . $post->ID),
            'zamansani_download_cv_' . $post->ID
        );

        echo '<p><a class="button button-primary" href="' .
            esc_url($download_url) .
            '">دانلود رزومه</a></p>';
    }
}


/**
 * Secure private CV directory
 */
function zamansani_career_private_directory()
{

    $directory = WP_CONTENT_DIR . '/career-private';

    if (!is_dir($directory)) {

        wp_mkdir_p($directory);
    }

    // Apache protection
    if (is_dir($directory)) {

        $htaccess = $directory . '/.htaccess';

        if (!file_exists($htaccess)) {

            file_put_contents(
                $htaccess,
                "Require all denied\n"
            );
        }

        $index = $directory . '/index.php';

        if (!file_exists($index)) {

            file_put_contents($index, "<?php\n// Silence is golden.\n");
        }
    }

    return $directory;
}


/**
 * Secure CV download - admins only
 */
add_action('admin_post_zamansani_download_cv', function () {

    if (!current_user_can('edit_posts')) {
        wp_die('شما اجازه دسترسی ندارید.', '', ['response' => 403]);
    }

    $application_id = absint($_GET['application_id'] ?? 0);

    check_admin_referer('zamansani_download_cv_' . $application_id);

    if (get_post_type($application_id) !== 'career_application') {
        wp_die('درخواست نامعتبر است.');
    }

    $file = get_post_meta($application_id, '_career_cv_path', true);

    $private_dir = realpath(zamansani_career_private_directory());
    $real_file   = $file ? realpath($file) : false;

    if (
        !$real_file ||
        !$private_dir ||
        strpos($real_file, $private_dir . DIRECTORY_SEPARATOR) !== 0 ||
        !is_file($real_file)
    ) {
        wp_die('فایل رزومه پیدا نشد.');
    }

    $extension = strtolower(pathinfo($real_file, PATHINFO_EXTENSION));

    $allowed_extensions = ['pdf', 'doc', 'docx'];

    if (!in_array($extension, $allowed_extensions, true)) {
        wp_die('نوع فایل معتبر نیست.');
    }

    nocache_headers();

    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="career-cv-' . $application_id . '.' . $extension . '"');
    header('Content-Length: ' . filesize($real_file));

    readfile($real_file);
    exit;
});


/**
 * Form handler
 */
add_action('admin_post_nopriv_zamansani_career_application', 'zamansani_process_career_application');
add_action('admin_post_zamansani_career_application', 'zamansani_process_career_application');


function zamansani_process_career_application()
{

    // POST only
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        wp_die('درخواست نامعتبر است.', '', ['response' => 405]);
    }

    // Nonce
    if (
        !isset($_POST['career_nonce']) ||
        !wp_verify_nonce(
            sanitize_text_field(wp_unslash($_POST['career_nonce'])),
            'zamansani_career_application'
        )
    ) {
        wp_die('اعتبار فرم منقضی شده است. لطفاً صفحه را دوباره باز کنید.', '', ['response' => 403]);
    }

    // Honeypot anti-spam
    if (!empty($_POST['website'])) {
        wp_die('درخواست نامعتبر است.', '', ['response' => 400]);
    }

    // Input validation
    $name = sanitize_text_field(
        wp_unslash($_POST['candidate_name'] ?? '')
    );

    $email = sanitize_email(
        wp_unslash($_POST['candidate_email'] ?? '')
    );

    $phone = sanitize_text_field(
        wp_unslash($_POST['candidate_phone'] ?? '')
    );

    $position = sanitize_key(
        wp_unslash($_POST['career_position'] ?? '')
    );

    $experience = sanitize_textarea_field(
        wp_unslash($_POST['candidate_experience'] ?? '')
    );

    $allowed_positions = ['sales', 'social-media'];

    if (
        empty($name) ||
        empty($email) ||
        !is_email($email) ||
        empty($phone) ||
        !in_array($position, $allowed_positions, true)
    ) {
        wp_die('اطلاعات فرم معتبر نیست. لطفاً بررسی کنید.', '', ['response' => 400]);
    }

    // CV validation
    if (
        !isset($_FILES['candidate_cv']) ||
        $_FILES['candidate_cv']['error'] !== UPLOAD_ERR_OK
    ) {
        wp_die('ارسال فایل رزومه با خطا مواجه شد.', '', ['response' => 400]);
    }

    $file = $_FILES['candidate_cv'];

    // Maximum 5 MB
    $max_size = 5 * 1024 * 1024;

    if ($file['size'] > $max_size || $file['size'] <= 0) {
        wp_die('حجم رزومه باید کمتر از 5 مگابایت باشد.', '', ['response' => 400]);
    }

    // Allowed extensions
    $allowed_extensions = ['pdf', 'doc', 'docx'];

    $original_name = sanitize_file_name($file['name']);
    $extension     = strtolower(pathinfo($original_name, PATHINFO_EXTENSION));

    if (!in_array($extension, $allowed_extensions, true)) {
        wp_die('فقط فایل PDF یا Word پذیرفته می‌شود.', '', ['response' => 400]);
    }

    // MIME validation
    $mime_types = [
        'pdf'  => 'application/pdf',
        'doc'  => 'application/msword',
        'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
    ];

    $checked = wp_check_filetype_and_ext(
        $file['tmp_name'],
        $original_name
    );

    if (
        empty($checked['ext']) ||
        empty($checked['type']) ||
        $checked['ext'] !== $extension ||
        $checked['type'] !== $mime_types[$extension]
    ) {
        wp_die('نوع فایل رزومه معتبر نیست.', '', ['response' => 400]);
    }

    // Secure private storage
    $private_dir = zamansani_career_private_directory();

    // error_log('CAREER PRIVATE DIR: ' . $private_dir);
    // error_log('CAREER WRITABLE: ' . (is_writable($private_dir) ? 'YES' : 'NO'));

    // error_log('CAREER DEBUG: ' . print_r([
    //     'private_dir' => $private_dir,
    //     'exists'      => is_dir($private_dir),
    //     'writable'    => is_writable($private_dir),
    //     'tmp_dir'     => sys_get_temp_dir(),
    //     'tmp_writable' => is_writable(sys_get_temp_dir()),
    // ], true));
    

    error_log('CAREER DEBUG: ' . print_r([
        'private_dir' => $private_dir,
        'exists'      => is_dir($private_dir),
        'writable'    => is_writable($private_dir),
        'files'       => $_FILES,
    ], true));
    if (!is_writable($private_dir)) {
        wp_die('ذخیره فایل امکان‌پذیر نیست.', '', ['response' => 500]);
    }

    $filename = wp_generate_uuid4() . '.' . $extension;
    $filepath = $private_dir . '/' . $filename;

    if (!move_uploaded_file($file['tmp_name'], $filepath)) {
        wp_die('ذخیره رزومه ناموفق بود.', '', ['response' => 500]);
    }

    // Create application
    $position_labels = [
        'sales'        => 'کارشناس فروش',
        'social-media' => 'کارشناس شبکه‌های اجتماعی',
    ];

    $application_id = wp_insert_post([
        'post_type'   => 'career_application',
        'post_status' => 'private',
        'post_title'  => $name . ' - ' . $position_labels[$position],
    ], true);

    if (is_wp_error($application_id)) {

        unlink($filepath);

        wp_die('ثبت درخواست ناموفق بود.', '', ['response' => 500]);
    }

    // Save applicant data
    update_post_meta($application_id, '_career_name', $name);
    update_post_meta($application_id, '_career_email', $email);
    update_post_meta($application_id, '_career_phone', $phone);
    update_post_meta($application_id, '_career_position', $position);
    update_post_meta($application_id, '_career_experience', $experience);
    update_post_meta($application_id, '_career_cv_path', $filepath);

    // Email company
    $recipient = get_option('admin_email');

    $subject = 'درخواست استخدام جدید - زمان ثانی';

    $message =
        "درخواست استخدام جدید دریافت شد.\n\n" .
        "نام: {$name}\n" .
        "ایمیل: {$email}\n" .
        "تلفن: {$phone}\n" .
        "موقعیت: {$position_labels[$position]}\n\n" .
        "برای مشاهده رزومه وارد پیشخوان WordPress شوید.";

    $headers = [
        'Content-Type: text/plain; charset=UTF-8',
        'Reply-To: ' . $name . ' <' . $email . '>',
    ];

    $mail_sent = wp_mail(
        $recipient,
        $subject,
        $message,
        $headers
    );

    // Redirect result
    $redirect = add_query_arg(
        'career_status',
        $mail_sent ? 'success' : 'saved',
        home_url('/careers/')
    );

    wp_safe_redirect($redirect . '#careers-application');
    exit;
}
