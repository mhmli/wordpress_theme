<?php

// Start the loop.
while (have_posts()) {
    the_post();
    get_template_part('Resources/Private/Partials/Post/Content', ucfirst(get_post_format()));
}