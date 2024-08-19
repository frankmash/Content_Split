jQuery(document).ready(function($) {
    $('.expand-to-read-more').on('click', function(e) {
        e.preventDefault();
        $(this).hide();  // Hide the expand link
        $(this).next('.remaining-content').slideDown();  // Show the remaining content
    });
});