@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('css/aboutus/aboutus.css') }}">
<script src="{{ asset('js/aboutus/aboutus.js') }}"></script>

<style>
    .recentOrders {
    position: relative;
    display: grid;
    height: 100%;
    background: var(--white);
    padding: 20px 0 20px 0;
    box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
    border-radius: 20px;
}

.recentOrders h2 {
    text-align: center;
    font-size: 2.5em;
    color: var(--blue);
}

.recentOrders h2 i {
    margin: 0 10px 0 0;
    font-size: 2.5rem;
}

.content-first {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.content-first img {
    width: 60vh;
    height: 40vh;
    margin: 0 5vh 5vh 10vh;
    border-radius: 40px;
}

.content-first p {
    margin: 0 10vh 5vh 5vh;
    text-align: justify;
}

.about {
    gap: 2rem;
    background: var(--second-bg-color);
}

.about-content {
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 15vh;
}

.about-img img {
    width: 50vh;
    height: 38vh;
    border-radius: 20px;
    margin: 2.5vh 2.5vh 2.5vh 2.5vh;
}

.heading {
    text-align: center;
    font-size: 3rem;
}

.about-text {
    text-align: left;
    line-height: 1.2;
    margin: 2.5vh 2.5vh 2.5vh 2.5vh;
    text-align: justify;
}

.about-text p {
    font-size: 0.9rem;
    margin: 2rem 0  3rem;
    font-family: 'Poppins', sans-serif;
}

</style>

    <div class="recentOrders">
        <h2><i class='bx bx-help-circle'></i>About HitaDel</h2>
        <section class="about" id="about">
            <div class="about-content">
                <div class="about-img">
                    <img src="{{ asset('img/layouts/background04.png') }}" alt="">
                </div>

                <div class="about-text">
                    <!-- <h3>Frontend Developer</h3> -->
                    <p>Hita del adalah sebuah website yang bertujuan sebagai tempat saling berbagi dan bertukar informasi
                        tentang lowongan kerja dan tempat tempat magang serta tempat KP yang tersedia di berbagai perusahaan
                        yang tersebar di seluruh Indonesia.</p>
                </div>
            </div>

            <div class="about-content">
                <div class="about-text">
                    <!-- <h3>Frontend Developer</h3> -->
                    <p> Website ini juga menjalin kerjasama dengan PPKHA yang bertujuan untuk menyebarluaskan tentang
                        informasi lowongan kerja untuk masyarakat IT Del, untuk membantu dalam mempermudah mendapatkan
                        informasi seputar magang, lowongan kerja, dan seminar untuk para mahasiswa tingkat akhir.</p>
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
                    <!-- <h3>Frontend Developer</h3> -->
                    <p>Kami juga menjalin kerjasama dengan para alumni IT Del yang sudah selesai menjalankan pendidikannya
                        di IT Del. Kerja sama dengan alumni ini dilakukan karena alumni IT Del pastinya sudah tersebar di
                        berbagai wilayah di Indonesia dan pastinya para alumni ini juga sudah memiliki relasi dan informasi
                        tentang perusahaan perusahan yang ada di Indonesia bahkan perusahaan yang ada di luar negeri. </p>
                </div>
            </div>

            <div class="about-content">
                <div class="about-text">
                    <!-- <h3>Frontend Developer</h3> -->
                    <p>Latar belakang terbentuknya website ini adalah kami melihat mahasiswa yang berada Del ini sedikit
                        kekurangan informasi terkait lowongan kerja dan juga tempat tempat magang. Melihat hal tersebut
                        sehingga kami memilih untuk membuat web HitaDel yang bertujuan sebagai tempat saling berbagi dan
                        bertukar informasi lowongan kerja dan tempat tempat magang. Dimana, website ini hanya berfokus
                        lowongan pekerjaan, tempat magang, dan juga tempat tempat KP agar berita berita yang tersedia tidak
                        campur aduk dengan berita lain. Sehingga, dengan menggunakan website ini, mahasiswa akan lebih mudah
                        dan simple untuk mencari tempat tempat yang mereka inginkan untuk menerusakan pendidikan dan
                        mengembangkan potensi mereka.</p>
                </div>

                <div class="about-img">
                    <img src="{{ asset('img/aboutus/3.png') }}" alt="">
                </div>
            </div>
            <div class="judul" style="display: flex; align-items:center; justify-content:center">
                <hr style="height:5px; width:50px; margin: 0 5px 0 0; background:#ff8c00; border:none;">
                <hr style="height:20px; width:5px; margin: 0 5px 0 0; background:#ff8c00; border:none;">
                <hr style="height:5px; width:50px; margin: 0 5px 0 0; background:#ff8c00; border:none;">
                
                <p style="
                            font-family: 'Your Preferred Font', sans-serif;
        font-size: 20px;
        color: #ff8c00;
        font-weight: bold;
                ">
                    Team Members
                </p>

                <hr style="height:5px; width:50px; margin: 0 5px 0 5px; background:#ff8c00; border:none;">
                <hr style="height:20px; width:5px; margin: 0 5px 0 0; background:#ff8c00; border:none;">
                <hr style="height:5px; width:50px; margin: 0 5px 0 0; background:#ff8c00; border:none;">
            </div>
            <br>
            <h2 style="text-align: center;
                color: transparent;
                background: linear-gradient(to top, #000000, #ff0000);
                -webkit-background-clip: text;
                background-clip: text; margin-bottom:10vh;">
                Group 07
            </h2>
            <div class="group07" style="display:flex; justify-content:center; align-items:center; margin-bottom:10vh;">
                <div style="width: 42vh; background: linear-gradient(to top, #ff0000, #000000);
                border-radius: 10px;
                box-shadow: 4px 4px 16px rgba(0, 0, 0, .1); margin-right:50px; padding: 1vh;">
                    <div style="width: 40vh; background: white;
                    border-radius: 10px;
                    box-shadow: 4px 4px 16px rgba(0, 0, 0, .1); margin-right:50px; padding: 2vh 5vh 2vh 5vh;">
                    <div style="padding: 1vh;width: 30vh ; height:30vh; border-radius:50%; background: linear-gradient(to top, #ff7b00, #000000);">
                            <img style="width:28vh ; height:28vh; border-radius:50%;" src="{{ asset('img/aboutus/fritz.png') }}" alt="">
                        </div>
                        <br>
                        <div style="text-align: center;">
                            <p style="font-size: 20px; font-weight:bold;">Fritz Kevin Manurung</p>
                            <p>12S21014</p>
                        </div>
                    </div>
                </div>
                <div style="width: 42vh; background: linear-gradient(to top, #ff0000, #000000);
                border-radius: 10px;
                box-shadow: 4px 4px 16px rgba(0, 0, 0, .1); margin-right:50px; padding: 1vh;">
                    <div style="width: 40vh; background: white;
                    border-radius: 10px;
                    box-shadow: 4px 4px 16px rgba(0, 0, 0, .1);  padding: 2vh 5vh 2vh 5vh;">
                        <div style="padding: 1vh;width: 30vh ; height:30vh; border-radius:50%; background: linear-gradient(to top, #ff7b00, #000000);">
                            <img style="width:28vh ; height:28vh; border-radius:50%;" src="{{ asset('img/aboutus/markus.png') }}" alt="">
                        </div>
                        <br>
                        <div style="text-align: center;">
                            <p style="font-size: 20px; font-weight:bold;">Markus P. Hutagalung</p>
                            <p>12S21013</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="group07" style="display:flex; justify-content:center; align-items:center;">
                <div style="width: 42vh; background: linear-gradient(to top, #000000, #ff0000);
                border-radius: 10px;
                box-shadow: 4px 4px 16px rgba(0, 0, 0, .1); margin-right:50px; padding: 1vh;">
                    <div style="width: 40vh; background: white;
                    border-radius: 10px;
                    box-shadow: 4px 4px 16px rgba(0, 0, 0, .1); margin-right:50px; padding: 2vh 5vh 2vh 5vh;">
                        <div style="padding: 1vh;width: 30vh ; height:30vh; border-radius:50%; background: linear-gradient(to top, #000000, #ff7b00);">
                            <img style="width:28vh ; height:28vh; border-radius:50%;" src="{{ asset('img/aboutus/bobby.png') }}" alt="">
                        </div>
                        <br>
                        <div style="text-align: center;">
                            <p style="font-size: 20px; font-weight:bold;">Bobby W. Siagian</p>
                            <p>12S21010</p>
                        </div>
                    </div>
                </div>
                <div style="width: 42vh; background: linear-gradient(to top, #000000, #ff0000);
                border-radius: 10px;
                box-shadow: 4px 4px 16px rgba(0, 0, 0, .1); margin-right:50px; padding: 1vh;">
                    <div style="width: 40vh; background: white;
                    border-radius: 10px;
                    box-shadow: 4px 4px 16px rgba(0, 0, 0, .1);  padding: 2vh 5vh 2vh 5vh;">
                        <div style="padding: 1vh;width: 30vh ; height:30vh; border-radius:50%; background: linear-gradient(to top, #000000, #ff7b00);">
                            <img style="width:28vh ; height:28vh; border-radius:50%;" src="{{ asset('img/aboutus/mikhael.png') }}" alt="">
                        </div>
                        <br>
                        <div style="text-align: center;">
                            <p style="font-size: 20px; font-weight:bold;">Mikhael J. Pakpahan</p>
                            <p>12S21009</p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </section>
        {{-- <hr style="margin:20px 0 20px 0; "> --}}
    </div>

@endsection