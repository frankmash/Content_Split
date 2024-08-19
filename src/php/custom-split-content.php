if (!function_exists('custom_split_content')) {
    function custom_split_content($content) {
        // Ensure content has paragraphs
        $content = wpautop($content);

        // Split content after the first paragraph
        $paragraphs = explode('</p>', $content);

        if (count($paragraphs) > 1) {
            // Get the first paragraph and the rest of the content
            $first_paragraph = $paragraphs[0] . '</p>';
            $remaining_content = implode('</p>', array_slice($paragraphs, 1));

            // Links to Read Full Article and Expand
            $static_link = '<a href="' . get_permalink() . '">Read Full Article</a>';
            $expand_link = '<a href="javascript:void(0);" class="expand-to-read-more">Expand to Read More</a>';

            // Insert "Read Full Article" link after the last full stop
            $first_paragraph = preg_replace('/(\.)(?!.*\.)/', '$1' . ' ' . $static_link, $first_paragraph);

            // Combine the first paragraph with the expand link and hide the remaining content
            $content = $first_paragraph . '<br>' . $expand_link;
            $content .= '<div class="remaining-content" style="display:none;">' . wpautop($remaining_content) . '</div>';
        }

        return $content;
    }
    add_filter('the_content', 'custom_split_content');
}