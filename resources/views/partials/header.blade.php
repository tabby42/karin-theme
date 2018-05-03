<header class="banner">
 <div class="container-fluid">
   <nav class="navbar navbar-toggleable-md">
    <a class="navbar-brand" href="{{ home_url('/') }}">
      <img src="@asset('images/karin_logo-rgb.svg')" alt={{ get_bloginfo('name', 'display') }}>
    </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
   data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
   aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">
        <span class="ti-menu"></span>
        <span class="icon-name"> menü</span>
      </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu($primarymenu) !!}
      @endif
    </div>
   <!-- <form class="form-inline collapse navbar-collapse pull-right">
   <button class="btn btn-outline-success" type="button">Main button</button>
   </form> -->
   </nav>
 </div>
</header>
