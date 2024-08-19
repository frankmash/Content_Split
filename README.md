Content Split Project

Overview
The Content Split Project is a custom solution for dynamically splitting and displaying content on a WordPress site. This project includes PHP and JavaScript code that automatically inserts "Read Full Article" and "Expand to Read More" links after the first paragraph of content. Upon clicking the "Expand" link, the remaining content is revealed without reloading the page.

Features
- Dynamic Content Splitting: Automatically splits content after the first paragraph.
- Customizable Links: Adds "Read Full Article" and "Expand to Read More" links after the first paragraph.
- Seamless User Experience: Expands content on the same page without a reload.
- Future-Proof: Organized structure for easy updates and improvements.

Getting Started

Prerequisites
- WordPress site (version 5.0 or higher recommended)
- Basic knowledge of PHP, JavaScript, and WordPress development
- Git (optional, for version control and collaboration)

Installation
1. Clone this repository to your WordPress theme directory or download it as a ZIP file.
   
   git clone 

2. Copy the contents of the src folder to your WordPress theme:
   
   src/php/custom-split-content.php to your theme's functions.php file or include it as a separate file.
   src/js/custom-split-content.js to your theme's JavaScript file or enqueue it separately.

3. Enqueue the JavaScript in your theme's functions.php:
   
   function enqueue_custom_scripts() {
       wp_enqueue_script('custom-split-content', get_template_directory_uri() . '/js/custom-split-content.js', array('jquery'), null, true);
   }
   add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

Usage
1. Add or edit content on your WordPress site as usual.
2. The content will automatically split after the first paragraph when displayed on the front end, with the appropriate links added.
3. Users can click "Expand to Read More" to reveal the full content without reloading the page.

Script Details

PHP: custom-split-content.php
- Function Name: custom_split_content
- Purpose: Splits content after the first paragraph, adds "Read Full Article" and "Expand to Read More" links, and hides the remaining content.
- Filter Hook: the_content (applies to WordPress content output)

JavaScript: custom-split-content.js
- Event Binding: Binds a click event to the "Expand to Read More" link.
- Purpose: Hides the link after being clicked and reveals the hidden content with a sliding animation.

Future Improvements
- Custom Themes: Add support for multiple themes or different styles for the "Read Full Article" and "Expand to Read More" links.
- Settings Page: Create a WordPress admin settings page to customize link text and behavior.
- Compatibility: Ensure compatibility with various WordPress plugins and themes.

Disclaimer
This project is provided as-is, without warranty of any kind. It is intended for educational purposes and may not be suitable for production use without further testing and modification.

License
This project is licensed under the MIT License. See the LICENSE file for more information.

Contributing
Contributions are welcome! Feel free to submit a pull request or open an issue for any bugs or suggestions.

Contact

