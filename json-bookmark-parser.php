<?php
/**
 * Plugin Name: JSON Bookmark Parser
 * Description: A plugin to upload and parse JSON bookmark files.
 * Version: 1.0
 * Author: Your Name
 */

function json_bookmark_parser_menu() {
    add_menu_page('JSON Bookmark Parser', 'Bookmark Parser', 'manage_options', 'json-bookmark-parser', 'json_bookmark_parser_admin_page');
}

add_action('admin_menu', 'json_bookmark_parser_menu');

function json_bookmark_parser_admin_page() {
    ?>
    <div class="wrap">
        <h1>Upload JSON Bookmarks</h1>
        <form method="post" enctype="multipart/form-data" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
            <input type="file" name="json_file" accept=".json">
            <input type="hidden" name="action" value="upload_json_bookmarks">
            <input type="submit" name="upload_json" value="Upload">
        </form>
        <div id="bookmark-list">
            <?php
            if (isset($_GET['parsed']) && $_GET['parsed'] === 'true') {
                if (file_exists(plugin_dir_path(__FILE__) . 'bookmarks.html')) {
                    echo file_get_contents(plugin_dir_path(__FILE__) . 'bookmarks.html');
                }
            }
            ?>
        </div>
    </div>
    <?php
}

function handle_uploaded_json() {
    if (isset($_FILES['json_file']) && $_FILES['json_file']['error'] === UPLOAD_ERR_OK) {
        $uploadedFile = $_FILES['json_file']['tmp_name'];
        $jsonData = file_get_contents($uploadedFile);
        $bookmarks = json_decode($jsonData, true);

        function generateBookmarksList($bookmarks) {
            $htmlList = "";
            foreach ($bookmarks as $bookmark) {
                if (isset($bookmark['name']) && isset($bookmark['url'])) {
                    $name = htmlspecialchars($bookmark['name']);
                    $url = htmlspecialchars($bookmark['url']);
                    $htmlList .= "<h2>$name</h2>\n";
                    $htmlList .= "<li><a href=\"$url\">$url</a></li>\n";
                }
            }
            return $htmlList;
        }

        $htmlList = generateBookmarksList($bookmarks);
        file_put_contents(plugin_dir_path(__FILE__) . 'bookmarks.html', $htmlList);

        wp_redirect(admin_url('admin.php?page=json-bookmark-parser&parsed=true'));
        exit;
    }
}

add_action('admin_post_upload_json_bookmarks', 'handle_uploaded_json');

// Shortcode to display bookmarks
function display_bookmarks_shortcode() {
    if (file_exists(plugin_dir_path(__FILE__) . 'bookmarks.html')) {
        return file_get_contents(plugin_dir_path(__FILE__) . 'bookmarks.html');
    } else {
        return '<p>No bookmarks available. Please upload a JSON file first.</p>';
    }
}
add_shortcode('display_bookmarks', 'display_bookmarks_shortcode');
?>
