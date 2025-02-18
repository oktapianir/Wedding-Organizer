<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    @include('home.header')
</head>
<body style="background-color: #fdf2f8; color: #831843; font-family: 'Plus Jakarta Sans', sans-serif;">
    <div class="container-fluid" style="width: 100%; min-height: 100vh; background: linear-gradient(135deg, #fdf2f8 0%, #fbcfe8 100%); padding: 2rem; position: relative; overflow: hidden;">
        <div style="max-width: 1400px; margin: 0 auto; position: relative; z-index: 1;">
            <h1 class="page-title" style="font-size: 4rem; background: linear-gradient(to right, #fd5d5d , #fd5d5d ); -webkit-background-clip: text; background-clip: text; color: transparent; text-align: center; margin-bottom: 4rem; font-weight: 800; letter-spacing: -1px; text-shadow: 2px 2px 4px rgba(0,0,0,0.1);">
                Lokasi Kami
            </h1>
            <div class="content-wrapper" style="display: grid; grid-template-columns: repeat(12, 1fr); gap: 3rem; position: relative;">
                <div class="map-section" style="grid-column: 1 / 8; position: relative;">
                    <div class="floating-card" style="background: rgba(255, 255, 255, 0.9); backdrop-filter: blur(20px); border-radius: 30px; box-shadow: 0 20px 40px rgba(219, 39, 119, 0.1); height: 700px; transition: transform 0.3s ease;">
                        <div class="map-container" style="height: 100%; border-radius: 30px; overflow: hidden; position: relative;">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.784981487607!2d107.6206600147728!3d-6.918492794972353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e4b4c81e0b37%3A0x1d1515de4bb1e01b!2sSMKN%2011%20Bandung!5e0!3m2!1sen!2sid!4v1694259649153!5m2!1sen!2sid" loading="lazy" referrerpolicy="no-referrer-when-downgrade" style="width: 100%; height: 100%; border: none;"></iframe>
                        </div>
                    </div>
                </div>
                <div class="info-section" style="grid-column: 8 / 13; position: relative;">
                    <div class="floating-card" style="background: rgba(255, 255, 255, 0.9); backdrop-filter: blur(20px); border-radius: 30px; box-shadow: 0 20px 40px rgba(219, 39, 119, 0.1); height: 700px; transition: transform 0.3s ease;">
                        <div class="info-container" style="padding: 3rem; height: 100%; overflow-y: auto; scrollbar-width: thin; scrollbar-color: #ec4899 #fdf2f8;">
                            <h2 class="info-title" style="font-size: 2.5rem; color: #fd5d5d ; margin-bottom: 2rem; text-align: center; font-weight: 700;">Informasi Kontak</h2>
                            <div class="contact-card" style="background: white; padding: 2rem; border-radius: 20px; margin-bottom: 2rem; border: 1px solid rgba(219, 39, 119, 0.1); transition: all 0.3s ease; position: relative; overflow: hidden;">
                                <div class="contact-icon" style="width: 60px; height: 60px; background: linear-gradient(135deg, #fd5d5d , #ec4899); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem; transform: rotate(-5deg); transition: transform 0.3s ease;">
                                    <i class="fas fa-phone-alt" style="font-size: 1.5rem; color: white;"></i>
                                </div>
                                <h3 class="contact-title" style="font-size: 1.3rem; color: #fd5d5d ; margin-bottom: 1rem; font-weight: 600;">Hubungi Kami</h3>
                                <a href="tel:+1234567890" class="contact-link" style="color: #fd5d5d ; text-decoration: none; font-weight: 500; transition: color 0.3s ease;">+123 456 7890</a>
                            </div>
                            <div class="contact-card" style="background: white; padding: 2rem; border-radius: 20px; margin-bottom: 2rem; border: 1px solid rgba(219, 39, 119, 0.1); transition: all 0.3s ease; position: relative; overflow: hidden;">
                                <div class="contact-icon" style="width: 60px; height: 60px; background: linear-gradient(135deg, #fd5d5d , #ec4899); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem; transform: rotate(-5deg); transition: transform 0.3s ease;">
                                    <i class="fas fa-clock" style="font-size: 1.5rem; color: white;"></i>
                                </div>
                                <h3 class="contact-title" style="font-size: 1.3rem; color: #fd5d5d ; margin-bottom: 1rem; font-weight: 600;">Jam Operasional</h3>
                                <p class="contact-text" style="color: #9d174d; line-height: 1.6; font-size: 1.1rem;">Senin - Jumat<br>08.00-15.00 WIB</p>
                            </div>
                            <div class="contact-card" style="background: white; padding: 2rem; border-radius: 20px; margin-bottom: 2rem; border: 1px solid rgba(219, 39, 119, 0.1); transition: all 0.3s ease; position: relative; overflow: hidden;">
                                <div class="contact-icon" style="width: 60px; height: 60px; background: linear-gradient(135deg, #fd5d5d , #ec4899); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem; transform: rotate(-5deg); transition: transform 0.3s ease;">
                                    <i class="fas fa-map-marker-alt" style="font-size: 1.5rem; color: white;"></i>
                                </div>
                                <h3 class="contact-title" style="font-size: 1.3rem; color: #fd5d5d ; margin-bottom: 1rem; font-weight: 600;">Lokasi</h3>
                                <p class="contact-text" style="color: #9d174d; line-height: 1.6; font-size: 1.1rem;">Smkn 11 Bandung, Jl. Budi Jl. Raya Cilember, RT.01/RW.04, Sukaraja, Kec. Cicendo, Kota Bandung, Jawa Barat 40153.</p>
                            </div>
                            <div class="social-links" style="display: flex; gap: 1rem; justify-content: center; margin-top: 3rem;">
                                <a href="#" class="social-link" style="width: 50px; height: 50px; background: white; border-radius: 15px; display: flex; align-items: center; justify-content: center; color: #fd5d5d ; text-decoration: none; transition: all 0.3s ease; box-shadow: 0 4px 12px rgba(219, 39, 119, 0.1);">
                                    <i class="fab fa-facebook-f" style="font-size: 1.5rem;"></i>
                                </a>
                                <a href="#" class="social-link" style="width: 50px; height: 50px; background: white; border-radius: 15px; display: flex; align-items: center; justify-content: center; color: #fd5d5d ; text-decoration: none; transition: all 0.3s ease; box-shadow: 0 4px 12px rgba(219, 39, 119, 0.1);">
                                    <i class="fab fa-instagram" style="font-size: 1.5rem;"></i>
                                </a>
                                <a href="#" class="social-link" style="width: 50px; height: 50px; background: white; border-radius: 15px; display: flex; align-items: center; justify-content: center; color: #fd5d5d ; text-decoration: none; transition: all 0.3s ease; box-shadow: 0 4px 12px rgba(219, 39, 119, 0.1);">
                                    <i class="fab fa-twitter" style="font-size: 1.5rem;"></i>
                                </a>
                                <a href="#" class="social-link" style="width: 50px; height: 50px; background: white; border-radius: 15px; display: flex; align-items: center; justify-content: center; color: #fd5d5d ; text-decoration: none; transition: all 0.3s ease; box-shadow: 0 4px 12px rgba(219, 39, 119, 0.1);">
                                    <i class="fab fa-linkedin-in" style="font-size: 1.5rem;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('home.footer')
</body>
</html>
