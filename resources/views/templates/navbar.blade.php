
<header class="header_section">
    <div class="container">
       <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="/" style="color: black;font-family:arial; font-size:20px; font-weight:bold;">E-Tross</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav">
                <li class="nav-item">
                   <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown active">
                   <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Products <span class="caret"></span></a>
                   <ul class="dropdown-menu">
                      <li><a href="/cloth">Kain</a></li>
                      <li><a href="/clothes">Pakaian</a></li>
                      <li><a href="/custom">Custom</a></li>
                   </ul>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="/about">About</a>
                </li>
                 @if (session()->has('user'))
                 <li class="nav-item">
                  <a class="nav-link" href="/cartlist">Cart</a>
               </li>
                 <li class="nav-item">
                  <a class="nav-link" href="/profile">Profile</a>
               </li>
                 @else
                 <li class="nav-item">
                  <a class="nav-link" href="/login">Login</a>
               </li>
                 @endif
                
               
             </ul>
          </div>
       </nav>
    </div>
 </header>