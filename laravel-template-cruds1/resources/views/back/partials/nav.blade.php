<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
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
    <ul class="nav-list">
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
       <a href="/tbheader">
         <i class='bx bx-user' ></i>
         <span class="links_name">header</span>
       </a>
       <span class="tooltip">header</span>
     </li>
     <li>
       <a href="/tbimg">
         <i class='bx bx-chat' ></i>
         <span class="links_name">img</span>
       </a>
       <span class="tooltip">img</span>
     </li>
     <li>
       <a href="/tbbanner">
         <i class='bx bx-pie-chart-alt-2' ></i>
         <span class="links_name">banner</span>
       </a>
       <span class="tooltip">banner</span>
     </li>
     <li>
       <a href="/tbbusproj">
         <i class='bx bx-folder' ></i>
         <span class="links_name">busines et projets</span>
       </a>
       <span class="tooltip">busines et projets</span>
     </li>
     <li>
       <a href="/tbTesti">
         <i class='bx bx-cart-alt' ></i>
         <span class="links_name">Testimonial</span>
       </a>
       <span class="tooltip">Testimonial</span>
     </li>
     <li>
       <a href="/tbContact">
         <i class='bx bx-heart' ></i>
         <span class="links_name">contact</span>
       </a>
       <span class="tooltip">contact</span>
     </li>
     <li>
       <a href="/tbFooter">
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
         <a href="/">

           <i class='bx bx-log-out' id="log_out" ></i>
          </a>
     </li>
    </ul>
  </div>
  <section class="home-section">
      <div class="text">Dashboard</div>
      @yield('nav')
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
