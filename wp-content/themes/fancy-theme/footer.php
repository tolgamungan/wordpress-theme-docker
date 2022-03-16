
<?php get_sidebar(); ?>

<footer class="blog-footer">

  <p id="copyright" class="text-warning">&copy; Copyright <?php echo date('Y') . " " . esc_attr( get_bloginfo( 'name', 'display' ) ); ?></p>
  <p>
    <a href="#">Back to top</a>
  </p>
</footer>

<?php wp_footer(); ?>
</body>
</html>