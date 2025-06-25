<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" type="image/x-icon" href="zooz.png">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    <link rel="stylesheet" href="/css1/bootstrap.min.css">
    <link rel="stylesheet" href="/js1/bootstrap.min.js">
        <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <!-- CSS -->
</head>
<body>

  {{-- navbar --}}
  <div class="dark-mode">
    <div class="navbar55">
        <ul class="sidebar">
            <li onclick="hideSidebar()"><a href="#"><span class="material-symbols-outlined">close</span></a></li>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#portofolio">Portofolio</a></li>
            <li><a href="#skill">Skill</a></li>
            <li><a href="#contact">Contact</a></li>
            <li>
      <button id="toggle-dark" style="padding-left: 20px">🌙</button>
    </li>
        </ul>
        <ul>
            <li class="hiya"><a href="">IBNU R.R</a></li>
            <li class="hideOnMobile"><a href="#home">Home</a></li>
            <li class="hideOnMobile"><a href="#about">About</a></li>
            <li class="hideOnMobile"><a href="#portofolio">Portofolio</a></li>
            <li class="hideOnMobile"><a href="#skill">Skill</a></li>
            <li class="hideOnMobile"><a href="#contact">Contact</a></li>
            <li>
      <button class="hideOnMobile" id="toggle-dark">🌙</button>
    </li>
            <li class="menu-button" onclick="showSidebar()"><a href="#"><span class="material-symbols-outlined">menu</span></a></li>
        </ul>
    </div>

    {{-- home --}}
    <div id="home" class="wrapper">
  <div class="sebutan" style="margin-top: 150px">
    <h4 class="kesatu">HII! SAYA</h4>
    <h1><b class="kedua">IBNU RAFI RAMADHANI</b></h1>
    <h3 class="ketiga">FULLSTACK DEVELOPER</h3>
      <p style="color: gray">Bagaimana hidupmu kawan? apakah lebih baik dari <span style="color:  #ff0091;">kemarin?</span></p>
    <a href="#" class="btn btn-primary my-2" style="font-weight:600;">Hubungi Saya</a>
    
  </div>
  
  <div class="foto">
    <dotlottie-player
      src="https://lottie.host/fe2afec1-1370-42a0-b169-abbdc9c7e380/ahBW9auPyi.lottie"
      background="transparent"
      speed="1"
      loop
      autoplay>
    </dotlottie-player>
  </div>
</div>


{{-- about --}}
<div id="about" class="wrapper2">
    <div class="tentang">
      <h3 class="keempat">Tentang Saya</h3>
      <h3 class="ketiga">KAPAN KENAL CODING?</h3>
      <p style="color: gray">Saya masih duduk di bangku SMK KLS 12</p>
      <p style="color: gray">Saya mulai mempelajari dunia pemrograman sejak 11 November 2023 atau sekitar 2 tahun yang lalu. Sebelumnya, saya sudah menekuni dunia design & editing, tetapi belum mengetahui basic pemrograman sama sekali.</p>
      <p style="color: gray">Saya sampai saat ini masih menggunakan handphone / smartphone untuk belajar pemrograman, yah walaupun beberapa topik pemrograman seperti machine learning masih belum mendukung</p>
    </div>
    <div class="sosial">
      <h4 class="keempat">Sosial Media</h4>
      <p style="color: gray">Beberapa Perjalanan hidup saya diabadikan pada sosial media, mulai dari saya memegang handphone dan mengenal internet pada sekitar tahun 2020. Sosmed saya hanya berisi foto atau video hasil karya saya, bukan keseharian saya</p>
       <div class="social-icons">
        <a href="https://www.youtube.com/@ibnuofficial017/featured"><i class="fab fa-youtube"></i></a>
        <a href="https://www.instagram.com/ibnur.r_17/"><i class="fab fa-instagram"></i></a>
        <a href="https://www.tiktok.com/@engineeringggggg"><i class="fab fa-tiktok"></i></a>
        <a href="https://www.linkedin.com/in/ibnu-r-r-980360350/"><i class="fa-brands fa-linkedin"></i></a>
      </div>
    </div>
</div>


{{-- portofolio --}}
<div id="portofolio" class="porto">
  <h4 style="color: white" class="pt-4">PORTOFOLIO</h4>
  <h2 style="color: rgb(255, 240, 31);">Project Terbaru Saya</h2>
  <div class="projects-container">
  <div class="project-card">
    <img src="car3.png" alt="ASCII Video to Text" />
    <h3 style="color: #00adff; font-weight: bold;">ASCII Video to Text</h3>
    <p style="color: white">Sebuah program yang mengubah pixel pada video menjadi text sesuai dengan contrastnya</p>
    <a href="#" class="demo-btn">hasil</a>
  </div>

  <div class="project-card">
    <img src="car3.png" alt="Whack A Mole" />
    <h3 style="color: #00adff; font-weight: bold;">Whack A Mole</h3>
    <p style="color: white">Sebuah game yang dibuat untuk memukul 2 jenis tikus-tikus nakal</p>
    <a href="#" class="demo-btn">hasil</a>
  </div>

  <div class="project-card">
    <img src="car3.png" alt="Marketplace Rating" />
    <h3 style="color: #00adff; font-weight: bold;">Marketplace&nbsp;&nbsp;Rating</h3>
    <p style="color: white">Sebuah E-commerce yang dapat memberi rating dan komentar pada produk tertentu dan bisa membelinya</p>
    <a href="#" class="demo-btn">hasil</a>
  </div>
  <div class="project-card">
    <img src="ukir.jpg" alt="Marketplace Rating" />
    <h3 style="color: #00adff; font-weight: bold;">Marketplace&nbsp;&nbsp;Rating</h3>
    <p style="color: white">Sebuah E-commerce yang dapat memberi rating dan komentar pada produk tertentu dan bisa membelinya</p>
    <a href="#" class="demo-btn">hasil</a>
  </div>
  <div class="project-card">
    <img src="ukir.jpg" alt="Marketplace Rating" />
    <h3 style="color: #00adff; font-weight: bold;">Marketplace&nbsp;&nbsp;Rating</h3>
    <p style="color: white">Sebuah E-commerce yang dapat memberi rating dan komentar pada produk tertentu dan bisa membelinya</p>
    <a href="#" class="demo-btn">hasil</a>
  </div>
  <div class="project-card">
    <img src="ukir.jpg" alt="Marketplace Rating" />
    <h3 style="color: #00adff; font-weight: bold;">Marketplace&nbsp;&nbsp;Rating</h3>
    <p style="color: white">Sebuah E-commerce yang dapat memberi rating dan komentar pada produk tertentu dan bisa membelinya</p>
    <a href="#" class="demo-btn">hasil</a>
  </div>
</div>

</div>

  {{-- skill --}}
<div id="skill" class="skill-section">
  <h3 class="kesatu">Skill</h3>
  <h2 class="ketiga">Yang Saya Kuasai</h2>
  <p style="color: gray">
    Semua kemampuan saya berawal dari gabut mengenai terciptanya <strong>Game & Website</strong>, rasa penasaran saya muncul saat tahu dengan perintah code dan dari situ mulai belajar coding.
  </p>
  <p style="color: gray">
    Saya belajar kemampuan ini secara otodidak melalui tutorial atau dokumentasi yang ada.
  </p>

  <div  class="skill-icons">
    <div class="skill-icon"><img src="html2.png" alt="html" /></div>
    <div class="skill-icon"><img src="css.png" alt="css" /></div>
    <div class="skill-icon"><img src="js2.png" alt="js" /></div>
    <div class="skill-icon"><img src="php.png" alt="php" /></div>
    <div class="skill-icon"><img src="python.png" alt="python" /></div>
    <div class="skill-icon"><img src="mysql.png" alt="MySQL" /></div>
    <div class="skill-icon"><img src="bs2.png" alt="bs" /></div>
    <div class="skill-icon"><img src="react.png" alt="React" /></div>
    <div class="skill-icon"><img src="laravel.png" alt="laravel " /></div>
  </div>
</div>

 {{-- footer --}}
    <footer id="contact">
        <div class="container">
            <div class="footer-box">
                <div class="box">
                    <h2>Social Media</h2>
                    <p> <b>IBNU RAFI RAMADHANI</b>
<br>
                        Saya aktif di beberapa platform sosmed</p>
                    <div class="social">
                        <a href="https://web.facebook.com/ibnu.rr.96"> <i class="fa-brands fa-facebook"></i></a>
                        <a href="https://www.instagram.com/ibnur.r_17/"> <i class="fa-brands fa-instagram"></i></a>
                        <a href="https://www.youtube.com/@ibnuofficial017/featured"> <i class="fa-brands fa-youtube"></i></a>
                        <a href="(0291) 4295612"> <i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="box">
                    <h2>Menu</h2>
                    <a href="#home">Home</a>
                    <a href="#about">About</a>
                    <a href="#portofolio">Portofolio</a>
                    <a href="#skill">Skill</a>
                    <a href="#contact">Contact</a>
                </div>
                <div class="box">
                    <h2>Kontak</h2>
                    <p><i class="fa-solid fa-envelope"></i> ibnu19173@gmail.com</p>
                    <p><i class="fa-solid fa-phone"></i> +62 858-7684-8657</p>
                    <p><i class="fa-solid fa-location-pin"></i> Bandengan RT 12/04 Jepara</p>
                </div>
            </div>

            {{-- copigright --}}
            <div class="copyright">
                <p style="color: gray">Copyright 2025 &copy; <span>IBNU R.R</span></p>
            </div>
            
        </div>
    </footer>

</div>
</body>
<script>
    function showSidebar(){
        const sidebar = document.querySelector('.sidebar')
        sidebar.style.display = 'flex'
    }
    function hideSidebar(){
        const sidebar = document.querySelector('.sidebar')
        sidebar.style.display = 'none'
    }
   const toggleButton = document.querySelectorAll('#toggle-dark');

  toggleButton.forEach(btn => {
    btn.addEventListener('click', () => {
      document.body.classList.toggle('dark-mode');
    });
  });
</script>
</html>