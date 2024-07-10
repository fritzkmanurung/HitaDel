<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logo02.png">
    <title>HitaDel | {{ $title }}</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/welcome.css">
</head>
<body>
    <header class="header">
        <img src="{{ asset('img/layouts/logo.png') }}" alt="">
        <nav class="navigation">
            <a href="{{ route('login') }}" class="btnLogin-popup"><i class='bx bxs-user'></i></a>
        </nav>
    </header>

    <section class="home" id="home">
        <h3 class="pembatas">Welcome To Our Website</h3>
        <h1>HitaDel</h1>
        <h3 class="text-group">By Group<span>07</span></h3>
        <a href="#about" class="btn">Learn More --></a>
    </section>

    <section class="about" id="about">
        <h2 class="heading">About <span>Website</span></h2>
        <div class="about-content">
            <div class="about-img">
                <img src="{{ asset('img/layouts/background04.png') }}" alt="">
            </div>
    
            <div class="about-text">
                <p>Hita del adalah sebuah website yang bertujuan sebagai tempat saling berbagi dan bertukar informasi tentang lowongan kerja dan tempat tempat magang serta tempat KP yang tersedia di berbagai perusahaan yang tersebar di seluruh Indonesia.</p>
            </div>
        </div>

        <div class="about-content">
            <div class="about-text">
                <p> Website ini juga menjalin kerjasama dengan PPKHA yang bertujuan untuk menyebarluaskan tentang informasi lowongan kerja untuk masyarakat IT Del, untuk membantu dalam mempermudah mendapatkan informasi seputar magang, lowongan kerja, dan seminar untuk para mahasiswa tingkat akhir.</p>
            </div>

            <div class="about-img">
                <img src="{{ asset('img/aboutus/1.png') }}" alt="">
            </div>
        </div>

        <div class="about-content">
            <div class="about-img">
                <img src="{{ asset('img/aboutus/2.png') }}" alt="">
            </div>
    
            <div class="about-text">
                <p>Kami juga menjalin kerjasama dengan para alumni IT Del yang sudah selesai menjalankan pendidikannya di IT Del. Kerja sama dengan alumni ini dilakukan karena alumni IT Del pastinya sudah tersebar di berbagai wilayah di Indonesia dan pastinya para alumni ini juga sudah memiliki relasi dan informasi tentang perusahaan perusahan yang ada di Indonesia bahkan perusahaan yang ada di luar negeri. </p>
            </div>
        </div>

        <div class="about-content">    
            <div class="about-text">
                <p>Latar belakang terbentuknya website ini adalah kami melihat mahasiswa yang berada Del ini sedikit kekurangan informasi terkait lowongan kerja dan juga tempat tempat magang. Melihat hal tersebut sehingga kami memilih untuk membuat web HitaDel yang bertujuan sebagai tempat saling berbagi dan bertukar informasi lowongan kerja dan tempat tempat magang. Dimana, website ini hanya berfokus lowongan pekerjaan, tempat magang, dan juga tempat tempat KP agar berita berita yang tersedia tidak campur aduk dengan berita lain. Sehingga, dengan menggunakan website ini, mahasiswa akan lebih mudah dan simple untuk mencari tempat tempat yang mereka inginkan untuk menerusakan pendidikan dan mengembangkan potensi mereka.</p>
            </div>

            <div class="about-img">
                <img src="{{ asset('img/aboutus/3.png') }}" alt="">
            </div>
        </div>
    </section>
    
    <footer class="footer" style="width: 100%; height:auto; background:black; padding:30px 50px 30px 50px;">
        <div style="width: 100%; height:auto">
            <div class="logo" style="display: flex; justify-content:center;">
                <img src="{{ asset('img/layouts/logo.png') }}" alt="">
            </div>
            <br>
            <div class="isi" style="display: flex; margin-top:5vh;">
                <div class="medsos">
                    <h3 style="">Media Social</h3>
                    <br>
                    <div class="social-media"  style="display: flex;">
                        <div style="margin: 0 100px 0 0;">
                            <a style="color: white; margin: 0 10px 0 0; display:flex; align-items:center" href="#" target="_blank" title="Facebook">
                                <div style="background:white;width:32px; height:32px; border-radius:50%; padding:1px; margin-left">
                                    <ion-icon style="background:rgb(0, 0, 0);width:30px; height:30px; border-radius:50%; color: white; margin: 0 20px 0 0;" name="logo-facebook"></ion-icon>
                                </div>
                                <p style="margin-left: 10px;">Facebook</p>
                            </a>
                            <br><br>
                            <a style=" display:flex; align-items:center; color: white; margin: 0 10px 0 0;" href="#" target="_blank" title="Instagram">
                                <div style="background:white;width:32px; height:32px; border-radius:50%; padding:1px;">
                                    <ion-icon style="background:rgb(255, 255, 255);width:30px; height:30px; border-radius:50%; color: rgb(0, 0, 0); margin: 0 20px 0 0;"  name="logo-instagram"></ion-icon>
                                </div>
                                
                                <p style="margin-left: 10px;">Instagram</p>
                            </a>
                            <br><br>
                            <a style="display:flex; align-items:center; color: white; margin: 0 10px 0 0;" href="#" target="_blank" title="YouTube">
                                <div style="background:white;width:32px; height:32px; border-radius:50%; padding:1px;">
                                    <ion-icon style="background:rgb(255, 255, 255);width:30px; height:30px; border-radius:50%; color: rgb(0, 0, 0); margin: 0 20px 0 0;" name="logo-youtube"></ion-icon>
                                </div>
                                
                                <p style="margin-left: 10px;">YouTube</p>
                            </a>
                            <br><br>
                            <a style=" display:flex; align-items:center; color: white; margin: 0 10px 0 0;" href="#" target="_blank" title="TikTok"><ion-icon style="background:rgb(255, 255, 255);width:30px; height:30px; border-radius:50%; color: rgb(0, 0, 0); margin: 0 20px 0 0;" name="logo-tiktok"></ion-icon>
                                
                                <p style="margin-left: 10px;">TikTok</p>
                            </a>
                            <br><br>
                        </div>
                        <div>
                            <a style=" display:flex; align-items:center; color: white; margin: 0 10px 0 0;" href="#" target="_blank" title="Email">
                                <div style="background:white;width:32px; height:32px; border-radius:50%; padding:1px;">
                                    <ion-icon style="background:rgb(255, 255, 255);width:30px; height:30px; border-radius:50%; color: rgb(0, 0, 0); margin: 0 20px 0 0;" name="mail"></ion-icon>
                                </div>
                                
                                <p style="margin-left: 10px;">Email</p>
                            </a>
                            <br><br>
                            <a style="display:flex; align-items:center; color: white; margin: 0 10px 0 0;" href="#" target="_blank" title="Email">
                                <div style="background:white;width:32px; height:32px; border-radius:50%; padding:1px;">
                                    <ion-icon style="background:rgb(255, 255, 255);width:30px; height:30px; border-radius:50%; color: rgb(0, 0, 0); margin: 0 20px 0 0;" name="logo-whatsapp"></ion-icon>
                                </div>
                                
                                <p style="margin-left: 10px;">WhatsApp</p>
                            </a>
                            <br><br>
                            <a style="display:flex; align-items:center; color: white; margin: 0 10px 0 0;" href="#" target="_blank" title="Email">
                                <div style="background:white;width:32px; height:32px; border-radius:50%; padding:1px;">
                                    <i style="background:rgb(255, 255, 255); font-size:28px; border-radius:50%; color: rgb(0, 0, 0); margin: 0 20px 0 0;" class='bx bxl-telegram'></i>
                                </div>
                                
                                <p style="margin-left: 10px;">Telegram</p>
                            </a>
                            <br><br>
                            <a style="display:flex; align-items:center; color: white; margin: 0 10px 0 0;" href="#" target="_blank" title="Email">
                                <div style="background:white;width:32px; height:32px; border-radius:50%; padding:1px;">
                                    <ion-icon style="background:rgb(255, 255, 255);width:30px; height:30px; border-radius:50%; color: rgb(0, 0, 0); margin: 0 20px 0 0;" name="logo-twitter"></ion-icon>
                                </div>
                                
                                <p style="margin-left: 10px;">Twitter</p>
                            </a>
                            <br><br>
                        </div>
                    </div>
                </div>
                <br>
                <div class="contactus" style="margin: 0 0 0 20vh;">
                    <h3>Contact Us</h3>
                    <br>
                    <a style=" display:flex; align-items:center; color: white; margin: 0 10px 0 0;" href="#" target="_blank" title="Email">
                        <div style="background:white;width:32px; height:32px; border-radius:50%; padding:1px;">
                            <ion-icon style="background:rgb(255, 255, 255);width:30px; height:30px; border-radius:50%; color: rgb(0, 0, 0); margin: 0 20px 0 0;" name="mail"></ion-icon>
                        </div>
                        <p style="margin-left: 10px;">hitadel@gmail.com</p>
                    </a>
                    <br><br>
                    <a style="display:flex; align-items:center; color: white; margin: 0 10px 0 0;" href="#" target="_blank" title="Email">
                        <div style="background:white;width:32px; height:32px; border-radius:50%; padding:1px;">
                            <ion-icon style="background:rgb(255, 255, 255);width:30px; height:30px; border-radius:50%; color: rgb(0, 0, 0); margin: 0 20px 0 0;" name="logo-whatsapp"></ion-icon>
                        </div>
                        <p style="margin-left: 10px;">+62 813 6113 6880</p>
                    </a>
                </div>
                <div class="location"  style="margin: 0 0 0 20vh;">
                    <h3>Location</h3>
                    <br>
                    <a style=" display:flex; align-items:center; color: white; margin: 0 10px 0 0;" href="#" target="_blank" title="Email">
                        <div style="background:white;width:32px; height:32px; border-radius:50%; padding:1px;">
                            <i style="background:rgb(255, 255, 255); font-size:28px; border-radius:50%; color: rgb(0, 0, 0); margin: 0 20px 0 0;" class='bx bx-home'></i>
                        </div>
                        <p style="margin-left: 10px;">Jl. Sitoluama, Kec. Balige, Kab. Toba, Institut Teknologi Del, Sumatera Utara - Indonesia</p>
                    </a>
                </div>
            </div>
        </div>
        <hr style="background: white; width:100%; height:2px">
        <br>
        <div style="text-align: center;" class="footer-content">
            <p>&copy; 2023 HitaDel. All rights reserved.</p>
            <!-- Add any additional footer content or links as needed -->
        </div>
    </footer>

    <script src="../js/login.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>