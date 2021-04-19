<footer class="footer">
   <div class="footer_info">
    <small>Colombia</small>
   </div>
   <div class="footer_info">
    <small>Oscar Pabón</small>
   </div>
   <div class="footer__social_media">
      <a href="<?php echo get_option('fb_link'); ?>" target="_blank" class="footer__social_media_network">
         <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/facebook_icon.png"
         class="footer__social_media_network-img" alt="Facebook">
      </a>
      <a href="<?php echo get_option('insta_link'); ?>" target="_blank" class="footer__social_media_network">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/instagram_icon.png"
            class="footer__social_media_network-img" alt="Instagram">
      </a>
   </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>