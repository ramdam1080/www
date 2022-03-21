<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset("vendor/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <link href="{{ asset('/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
</head>
<body><!DOCTYPE html>
    <!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
    <html lang="en" dir="ltr">
      <head>
        <meta charset="UTF-8">
        <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
        {{-- <link rel="stylesheet" href="style.css"> --}}
        <!-- Boxicons CDN Link -->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
       </head>
    <body>
      <div class="sidebar">
        <div class="logo-details">
          <i class='bx bxl-c-plus-plus icon'></i>
            <div class="logo_name">CodingLab</div>
            <i class='bx bx-menu' id="btn" ></i>
        </div>
        <ul class="nav-list p-0">
          <li>
              <i class='bx bx-search' ></i>
             <input type="text" placeholder="Search...">
             <span class="tooltip">Search</span>
          </li>
          <li>
            <a href="#">
              <i class='bx bx-grid-alt'></i>
              <span class="links_name">Dashboard</span>
            </a>
             <span class="tooltip">Dashboard</span>
          </li>
          <li>
           <a href="/title">
             <i class='bx bx-user' ></i>
             <span class="links_name">title</span>
           </a>
           <span class="tooltip">title</span>
         </li>
         <li>
           <a href="/header">
             <i class='bx bx-chat' ></i>
             <span class="links_name">header</span>
           </a>
           <span class="tooltip">header</span>
         </li>
         <li>
           <a href="/profil">
             <i class='bx bx-pie-chart-alt-2' ></i>
             <span class="links_name">profils</span>
           </a>
           <span class="tooltip">profils</span>
         </li>
         <li>
           <a href="/about">
             <i class='bx bx-folder' ></i>
             <span class="links_name">about</span>
           </a>
           <span class="tooltip">about</span>
         </li>
         <li>
           <a href="/fact">
             <i class='bx bx-cart-alt' ></i>
             <span class="links_name">fact</span>
           </a>
           <span class="tooltip">fact</span>
         </li>
         <li>
           <a href="/skill">
             <i class='bx bx-heart' ></i>
             <span class="links_name">skill</span>
           </a>
           <span class="tooltip">skill</span>
         </li>
         <li>
           <a href="/filter">
             <i class='bx bx-cog' ></i>
             <span class="links_name">filter(portfolio)</span>
           </a>
           <span class="tooltip">filter(portfolio)</span>
         </li>
         <li>
           <a href="/portfolio">
             <i class='bx bx-cog' ></i>
             <span class="links_name">portfolio</span>
           </a>
           <span class="tooltip">portfolio</span>
         </li>
         <li>
           <a href="/testimonial">
             <i class='bx bx-cog' ></i>
             <span class="links_name">testimonial</span>
           </a>
           <span class="tooltip">testimonial</span>
         </li>
         <li>
           <a href="/footer">
             <i class='bx bx-cog' ></i>
             <span class="links_name">footer</span>
           </a>
           <span class="tooltip">footer</span>
         </li>
         <li class="profile">
             <div class="profile-details">
               <!--<img src="profile.jpg" alt="profileImg">-->
               <div class="name_job">
                 <div class="name">Prem Shahi</div>
                 <div class="job">Web designer</div>
               </div>
            </div>
            <i class='bx bx-log-out' id="log_out" ></i>
        </li>
    </ul>
</div>
<section class="home-section">
    <div class="text">Dashboard</div>
    @yield('content')
      </section>
      <script>
      let sidebar = document.querySelector(".sidebar");
      let closeBtn = document.querySelector("#btn");
      let searchBtn = document.querySelector(".bx-search");
    
      closeBtn.addEventListener("click", ()=>{
        sidebar.classList.toggle("open");
        menuBtnChange();//calling the function(optional)
      });
    
      searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
        sidebar.classList.toggle("open");
        menuBtnChange(); //calling the function(optional)
      });
    
      // following are the code to change sidebar button(optional)
      function menuBtnChange() {
       if(sidebar.classList.contains("open")){
         closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
       }else {
         closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
       }
      }
      </script>
    </body>
    </html>
    
    <script src="{{ asset("vendor/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
</body>
</html>