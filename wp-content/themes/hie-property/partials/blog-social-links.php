<div class="social-icons">
    <span class="social-share-text">Share this post</span>
    <a class="social-icon social-icon-facebook" href="http://www.facebook.com/sharer.php?u=<?php echo get_permalink(); ?>" target="_blank"></a>
    <a class="social-icon social-icon-linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink(); ?>&title=<?php echo the_title(); ?>&summary=<?php echo wp_trim_words( get_the_content(), 15 ); ?>&source=<?php echo get_site_url(); ?>" target="_blank"></a>
</div>