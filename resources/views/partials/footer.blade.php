{{-- <footer class="content-info">
  <div class="container">
    @php(dynamic_sidebar('sidebar-footer'))
  </div>
</footer> --}}

<footer id="contact">
  <div class="newsletter-container">
      <h3>newsletter</h3>
      <?php echo do_shortcode( '[mc4wp_form id="75"]' )?>
  </div>
  <div class="row">
    <div class="col-md-3 footer-col">
      <a href="<?php echo get_site_url(null, '/impressum'); ?>" class="nav-link footer-link">Impressum</a>
    </div>  
    <div class="col-md-3">

    </div>
    <div class="col-md-3">
    </div>
    <div class="col-md-3 footer-col footer-flex">
      <img src="@asset('images/karin_clownin_lehrerin_inverse.svg')" alt="Logo">
      <p>
        <span><em>T&emsp;</em>  post@karin-theiss.com</span><br>
        <span><em>E&emsp;</em>  +43 699 11 55 36 82</span><br>
        <span><a class="footer-link position-st" href="https://www.facebook.com/profile.php?id=100013285934303" target="_blank"><em>F&emsp;</em>  die clownin auf facebook</a></span>
      </p>
      <button type="button" class="btn btn-default" data-toggle="modal" data-target="#kt-mail-modal">nachricht</button>
    </div>
  </div>
</footer>

