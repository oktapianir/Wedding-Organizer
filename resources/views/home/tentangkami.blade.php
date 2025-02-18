<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('home.css')
    <title>About Us - WEDDEVEN</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@300;400;700&display=swap');

        body {
            font-family: 'Roboto', sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .about-section {
            background: linear-gradient(135deg, #f8e4d9, #f3d2c1);
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .about-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-bottom: 60px;
        }

        .about-text {
            flex: 1;
            padding-right: 50px;
        }

        .about-image {
            flex: 1;
            text-align: center;
        }

        h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            color: #d4668b;
            margin-bottom: 20px;
        }

        p {
            font-size: 1.1rem;
            margin-bottom: 20px;
        }

        .team-section {
            margin-top: 60px;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            margin-top: 30px;
        }

        .team-member {
            text-align: center;
            transition: transform 0.3s ease;
        }

        .team-member:hover {
            transform: translateY(-10px);
        }

        .team-member img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid #fff;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .team-member h4 {
            margin: 15px 0 5px;
            font-family: 'Playfair Display', serif;
            color: #d4668b;
        }

        .team-member p {
            font-size: 0.9rem;
            color: #666;
        }

        .social-icons {
            margin-top: 15px;
        }

        .social-icons a {
            color: #d4668b;
            margin: 0 5px;
            font-size: 1.2rem;
            transition: color 0.3s ease;
        }

        .social-icons a:hover {
            color: #333;
        }

        .decorative-element {
            position: absolute;
            opacity: 0.1;
        }

        .decorative-element.top-left {
            top: -50px;
            left: -50px;
            transform: rotate(45deg);
        }

        .decorative-element.bottom-right {
            bottom: -50px;
            right: -50px;
            transform: rotate(-135deg);
        }

        .contact-info {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            padding: 30px;
            margin-top: 60px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .contact-info h3 {
            color: #d4668b;
            margin-bottom: 20px;
        }

        .contact-info p {
            margin-bottom: 10px;
        }

        .contact-info i {
            color: #d4668b;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <!-- Navbar start -->
    @include('home.header')
    <!-- Navbar End -->

    {{-- <section class="about-section">
        <div class="container">
            <div class="about-content">
                <div class="about-text">
                    <h2>Tentang WEDDEVEN</h2>
                    <p>WEDDEVEN adalah aplikasi yang dirancang khusus untuk rencana pernikahan Anda. Dengan pengalaman bertahun-tahun dalam industri pernikahan, kami memahami betapa pentingnya hari spesial ini bagi Anda.</p>
                    <p>Tim profesional kami siap membantu Anda dalam setiap tahap perencanaan, dari konsep awal hingga eksekusi yang sempurna. Kami menawarkan berbagai fitur inovatif untuk memudahkan Anda mengatur setiap detail pernikahan, memastikan bahwa hari besar Anda berjalan sesuai keinginan.</p>
                </div>
                <div class="about-image">
                    <img src="img/about-1.jpg" alt="WEDDEVEN Team" style="max-width: 50%; height: auto; border-radius: 10px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);">
                </div>
            </div>

            <div class="team-section">
                <h2>Tim Kami</h2>
                <p>Kenali para profesional di balik layanan luar biasa kami:</p>
                <div class="team-grid">
                    <div class="team-member">
                        <img src="img/bridesmaid-1.png" alt="Amelia">
                        <h4>Amelia</h4>
                        <p>Manajer</p>
                        <div class="social-icons">
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="team-member">
                        <img src="img/Groomsmen-3.png" alt="Liaalex">
                        <h4>Liaalex</h4>
                        <p>Groomsmen</p>
                        <div class="social-icons">
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="team-member">
                        <img src="img/bridesmaid-3.png" alt="Amelia Alex">
                        <h4>Amelia Alex</h4>
                        <p>Bridesmaid</p>
                        <div class="social-icons">
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="team-member">
                        <img src="img/groomsmen-2.png" alt="John Doe">
                        <h4>John Doe</h4>
                        <p>Groomsman</p>
                        <div class="social-icons">
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-info">
                <h3>Hubungi Kami</h3>
                <p><i class="fas fa-envelope"></i> Wedding-OR@gmail.com</p>
                <p><i class="fas fa-phone"></i> (+022) 6652442</p>
                <p><i class="fas fa-map-marker-alt"></i> SMKN 11 Bandung</p>
                <div class="social-icons">
                    <a href="https://web.facebook.com/smkn11bdg/?_rdc=1&_rdr"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.youtube.com/c/SMKN11BANDUNG"><i class="fab fa-youtube"></i></a>
                    <a href="https://www.instagram.com/info.smkn11bandung/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <img src="/api/placeholder/200/200" alt="Decorative Element" class="decorative-element top-left">
        <img src="/api/placeholder/200/200" alt="Decorative Element" class="decorative-element bottom-right">
    </section> --}}
    <section class="about-section" style="background-color: #f88a8a; padding: 50px 0; font-family: Arial, sans-serif;">
        <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 20px;">
            <div class="about-content" style="display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; margin-bottom: 50px;">
                <div class="about-text" style="flex: 1; padding-right: 20px;">
                    <h4 class="text-primary display-6 fw-bold mb-0">Tentang Wedding Organizer</h4>
                    <p style="color: #333; line-height: 1.6;">WEDDEVEN adalah aplikasi yang dirancang khusus untuk rencana pernikahan Anda. Dengan pengalaman bertahun-tahun dalam industri pernikahan, kami memahami betapa pentingnya hari spesial ini bagi Anda.</p>
                    <p style="color: #333; line-height: 1.6;">Tim profesional kami siap membantu Anda dalam setiap tahap perencanaan, dari konsep awal hingga eksekusi yang sempurna. Kami menawarkan berbagai fitur inovatif untuk memudahkan Anda mengatur setiap detail pernikahan, memastikan bahwa hari besar Anda berjalan sesuai keinginan.</p>
                </div>
                <div class="about-image" style="flex: 1; text-align: center;">
                    <img src="img/about-1.jpg" alt="WEDDEVEN Team" style="max-width: 80%; height: auto; border-radius: 10px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);">
                </div>
            </div>
    
            <div class="team-section" style="text-align: center; margin-bottom: 50px;">
                <h4 class="text-primary display-6 fw-bold mb-0">Tim Kami</h4>
                <p style="color: #555; margin-bottom: 40px;">Kenali para profesional di balik layanan luar biasa kami:</p>
                <div class="team-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px;">
                    <div class="team-member" style="background-color: white; padding: 20px; border-radius: 10px; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);">
                        <img src="img/bridesmaid-1.png" alt="Amelia" style="width: 100%; height: auto; border-radius: 10px; margin-bottom: 10px;">
                        <h4 style="color: #fd5d5d; font-size: 1.5em;">Amelia</h4>
                        <p style="color: #777;">Manajer Acara</p>
                        <div class="social-icons" style="margin-top: 10px;">
                            <a href="#" style="color: #fd5d5d; margin-right: 10px;"><i class="fab fa-instagram"></i></a>
                            <a href="#" style="color: #fd5d5d;"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="team-member" style="background-color: white; padding: 20px; border-radius: 10px; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);">
                        <img src="img/Groomsmen-3.png" alt="Liaalex" style="width: 100%; height: auto; border-radius: 10px; margin-bottom: 10px;">
                        <h4 style="color: #fd5d5d; font-size: 1.5em;">Liaalex</h4>
                        <p style="color: #777;">Event Coordinator</p>
                        <div class="social-icons" style="margin-top: 10px;">
                            <a href="#" style="color: #fd5d5d; margin-right: 10px;"><i class="fab fa-instagram"></i></a>
                            <a href="#" style="color: #fd5d5d;"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="team-member" style="background-color: white; padding: 20px; border-radius: 10px; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);">
                        <img src="img/bridesmaid-3.png" alt="Amelia Alex" style="width: 100%; height: auto; border-radius: 10px; margin-bottom: 10px;">
                        <h4 style="color: #fd5d5d; font-size: 1.5em;">Amelia Alex</h4>
                        <p style="color: #777;">Client Relations Officer</p>
                        <div class="social-icons" style="margin-top: 10px;">
                            <a href="#" style="color: #fd5d5d; margin-right: 10px;"><i class="fab fa-instagram"></i></a>
                            <a href="#" style="color: #fd5d5d;"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="team-member" style="background-color: white; padding: 20px; border-radius: 10px; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);">
                        <img src="img/groomsmen-2.png" alt="John Doe" style="width: 100%; height: auto; border-radius: 10px; margin-bottom: 10px;">
                        <h4 style="color: #fd5d5d; font-size: 1.5em;">John Doe</h4>
                        <p style="color: #777;">Vendor Liaison</p>
                        <div class="social-icons" style="margin-top: 10px;">
                            <a href="#" style="color: #fd5d5d; margin-right: 10px;"><i class="fab fa-instagram"></i></a>
                            <a href="#" style="color: #fd5d5d;"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="contact-info" style="background-color: #e4a3a3; color: #333; padding: 30px; text-align: center; border-radius: 10px;">
                <h3 style="font-size: 2em; margin-bottom: 20px;">Hubungi Kami</h3>
                <p><i class="fas fa-envelope"></i> Wedding-OR@gmail.com</p>
                <p><i class="fas fa-phone"></i> (+022) 6652442</p>
                <p><i class="fas fa-map-marker-alt"></i> SMKN 11 Bandung</p>
                <div class="social-icons" style="margin-top: 20px;">
                    <a href="https://web.facebook.com/smkn11bdg/?_rdc=1&_rdr" style="color: white; margin-right: 15px;"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.youtube.com/c/SMKN11BANDUNG" style="color: white; margin-right: 15px;"><i class="fab fa-youtube"></i></a>
                    <a href="https://www.instagram.com/info.smkn11bandung/" style="color: white;"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </section>
    

    @include('home.footer')
</body>
</html>