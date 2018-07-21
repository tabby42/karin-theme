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
      <a href="#" class="nav-link footer-link">Impressum</a>
    </div>  
    <div class="col-md-3">

    </div>
    <div class="col-md-3">
    </div>
    <div class="col-md-3">
      <img src="@asset('images/karin_logo-inverse.svg')" alt="Logo">
      <p>
        <span>post@karin-theiss.com</span><br>
        <span>+43 699 11 55 36 82</span>
      </p>
      <button type="button" class="btn btn-default" data-toggle="modal" data-target="#kt-mail-modal">nachricht</button>
    </div>
  </div>
</footer>

