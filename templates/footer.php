<footer class="mdl-mega-footer" role="contentinfo">
  <div class="mdl-mega-footer--top-section">
    <?php dynamic_sidebar('sidebar-footer'); ?>
  </div>
  <div class="mdl-mega-footer--bottom-section">
    <a class="mdl-logo" href="<?= esc_url(home_url('/')); ?>">&copy; <?php echo date("Y") ?> <?php bloginfo('name'); ?></a> 
  </div>
</footer>
