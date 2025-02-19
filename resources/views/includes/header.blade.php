<div id="right-panel" class="right-panel">
   <header id="header" class="header">
      <div class="top-left">
         <div class="navbar-header">
            <a class="navbar-brand" href="index.html"><img src="{{ asset('admin/images/logo.png') }}" alt="Logo"></a>
            <a class="navbar-brand hidden" href="index.html"><img src="{{ asset('admin/images/logo2.png') }}" alt="Logo"></a>
            <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
         </div>
      </div>
      <div class="top-right">
         <div class="header-menu">
            <div class="user-area dropdown float-right">
               <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Welcome Admin</a>
               <div class="user-menu dropdown-menu">
                  <form method="POST" action="{{ route('logout') }}">
                     @csrf
                     <button class="btn btn-success" class="nav-link"><i class="fa fa-power-off"></i>Logout</button>
                  </form>

               </div>
            </div>
         </div>
      </div>
   </header>