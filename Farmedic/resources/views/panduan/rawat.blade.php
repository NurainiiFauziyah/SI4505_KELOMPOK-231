<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Farmedic - Kamus Penyakit</title>
        <link rel="stylesheet" type="text/css" href="./about.css">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins|Inter|Passion One">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <style>
        *{padding: 0; margin: 0; box-sizing: border-box;}
        body, html {
            background-size: cover; 
            background-color:white;
            margin: 0;
            /* awalnya heightnya 900px */
            height:auto; 
        }
       
        article.par1 {
        position:absolute;
      
        float: right;
        padding: 40px;
        width: 60%;
        font-family: Poppins;
        
        align-items: center;
        justify-content: right;
        margin-top: auto;
        
        }
        article.par2 {
            position:absolute;
      
      float: right;
      padding: 40px;
      width: 60%;
      font-family: Poppins;
      
      align-items: center;
      justify-content: right;
      margin-top: a
        }
        p{
            font-family: Poppins;
            letter-spacing: 0.5px;
            font-size: 15px;
        }
        h2 {
        font-size: 1.5rem;
        font-family: Poppins;
        font-weight: bold;
        line-height: 2.2;
        letter-spacing: 0.5px;
        }
        * {
        padding: 0px;
        margin: 0px;
        box-sizing: border-box;
        }
        .slider {
        width: 580px;
        height: 380px;
        margin: auto;
        overflow: hidden;
        transform: translateY(5%);
        position: relative;
        
        }
        .slide {
        position: absolute;
        top: 0%;
        transform: translateY(-50%);
        padding-right: 8%;
        }
        img.slides {
        width: 100%;
        height: auto;
        }
        .prev,
        .next {
        cursor: pointer;
        background-color: #333;
        color: #fff;
        padding: 10px 20px;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        text-decoration: none;
        margin-right: 8%;
        }

        .prev {
        left: 0;
        }

        .next {
        right: 0;

        }
        .slide {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        }
        .slide {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);

        opacity: 0;
        transition: opacity 1s ease;
        }
        button.obat {
        border: none;
        outline: none;
        padding: 10px 20px;
        border-radius: 50px;
        color: #333;
        background: orange;
        margin-bottom: 50px;
        box-shadow: 0 3px 20px 0 #0000003b;
        justify-content: center;
        }
        button:hover {
            cursor: pointer;
        }
        div.next-to-obat {

            justify-content: center;
       
        }
        h3 {
            font-size:small;
            font-family: Poppins;
            letter-spacing: 0.5px;
            text-align: center;
        }
        p {
            font-family: Poppins;
            letter-spacing: 0.5px;
        }

    </style>

    <body>
        @include ('kamuspenyakit.nav')
        @include ('panduan.header')
    <!-- slider image -->
    <div class="kotak" style="width: 100%; height: 130%; justify-content:center; top: 390px; background-position:center; position: absolute; margin:auto;background: white; box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.25); border-radius: 41px 41px 0px 0px">
        <div class="slider" style ="float:right; top:10%">
            <div class="slide" style ="float: right;">
                <img class ="slides" src="https://4.bp.blogspot.com/-nxGVn-aBZ5g/Wl195mRatMI/AAAAAAAABmA/yeeaH6CfjHM3jec7z5PN9zoFUxUl5hDPACLcBGAs/s1600/sapi%2Bcacingan.PNG" alt="demo image" />
            </div>
            <div class="slide">
                <img class="slides" src="https://www.dictio.id/uploads/db3342/optimized/3X/3/a/3a41b5c54a086a3989c8234d03e054c6c58454cc_2_1035x985.jpg" alt="demo image" />
            </div>
            
            <a class="prev" onclick="prevSlide()">&lt;</a>
            <a class="next" onclick="nextSlide()">&gt;</a>
        </div>
        <script>
            const slides = document.querySelectorAll(".slide");
        let currentSlide = 0;

        function showSlide(index) {
        slides.forEach((slide, i) => {
            if (i === index) {
            slide.style.opacity = 100;
            } else {
            slide.style.opacity = 0;
            }
        });
        }

        function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
        }

        function prevSlide() {
        currentSlide = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(currentSlide);
        }

        showSlide(currentSlide);

        function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
        }
        function prevSlide() {
        currentSlide = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(currentSlide);
        }
        function showSlide(index) {
        slides.forEach((slide, i) => {
            if (i === index) {
            slide.style.opacity = 100;
            } else {
            slide.style.opacity = 0;
            }
        });
        }
        </script>

        <aside class ="artikel" style="padding:3%;">
            <article class="par1" style="border:3px solid darkgrey; border-radius:15px; background-color: whitesmoke; max-width:890px">
                <h1 style="letter-spacing: 0.5px;font-size:200%; background-color:#1B4445; border-radius: 50px; text-align:center; color:#fff; margin-top:1%; margin-bottom:1%">Cacingan</h1>
                <h2>Panduan Perawatan</h2>
                <p>Perawatan sapi yang terkena cacingan sangat penting untuk memastikan kesehatan dan produktivitasnya. 
                    Berikut adalah panduan umum untuk merawat sapi yang terkena cacingan:
                    <ul>
                    <li>Uji Laboratorium: Untuk kasus ringan maupun parah, dapat dilakukan pemeriksaan laboratorium untuk menemukan telur cacing pada feses.</li>
                    <li>Memberikan obat cacing</li>
                    <li>Melakukan sanitasi lingkungan area kandang</li>
                    <li>Memberikan pakan yang kaya nutrisi dan mudah dicerna untuk memperbaiki penyerapan nutrisi pada sapi</li>
                    <li>Mengawasi pola makan sapi dan memastikan mereka mendapatkan makanan yang cukup.</li>
                    
                    </ul>
                </p>
                <p>
                Penting untuk diingat bahwa perawatan terhadap sapi yang terkena cacingan haruslah holistik dan melibatkan kombinasi pengobatan medis, manajemen lingkungan, dan manajemen pakan yang baik.
                </p>
            </article>
        </aside>
        <aside class="estimasi" style="padding:3%; position:relative; top:42%; box-sizing:border-box">
            <article class="par2" style=" border:3px solid darkgrey; border-radius: 15px; background-color: whitesmoke; width:1460px">
            <h2>Estimasi perawatan</h2>
                <p style="text-align: justify;">Untuk mengatasi cacingan pada sapi, waktu perawatan dapat bervariasi tergantung pada tingkat keparahan infeksi dan jenis cacing yang menginfeksi. 
                    <br>-  Masa inkubasi virus PMK memiliki rentang waktu antara 2-14 hari sejak tertular hingga muncul gejala klinis</br>
                    <br>-  Vaksinasi yang dilakukan dalam kurun waktu <strong>2-3 bulan</strong> setelah import bulk antigen datang</br>
                Perlu diingat, informasi di atas adalah perkiraan, dan waktu aktual dapat bervariasi. Untuk mendapatkan estimasi yang akurat, anda dapat melakukan konsultasi dengan dokter hewan atau spesialis peternakan lokal di tempat anda atau melakukan konsultasi online dengan dokter pada Farmedic.</p>
            </article>

        </aside>
        <div class ="next-to-obat" style="position:absolute; justify-content:center; top:948px;left:39%;margin:auto; text-align:center">
            <h3 style="font-size:20px">Butuh rekomendasi obat? Klik disini</h3>
            <center><a href="/rekomendasiobat"><button class="obat" >
                    Rekomendasi Obat
            </button></a></center>


        </div>
    </div>


</body>
</html>    
