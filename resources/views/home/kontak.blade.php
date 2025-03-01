{{-- <!DOCTYPE html>
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
</html> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    @include('home.header')
</head>
<body style="background-color: #FFF5F5; color: #7B2D2D; font-family: 'Plus Jakarta Sans', sans-serif; margin: 0; padding: 0;">
    <div class="hero-section" style="background: linear-gradient(135deg, #FFF5F5 0%, #FFDBDB 100%); padding: 6rem 2rem 3rem; position: relative; overflow: hidden;">
        <div class="container" style="max-width: 1280px; margin: 0 auto; position: relative;">
            <div class="hero-content" style="text-align: center; max-width: 800px; margin: 0 auto; position: relative; z-index: 2;">
                <h1 style="font-size: 3.5rem; color: #fd5d5d; margin-bottom: 1.5rem; font-weight: 800; letter-spacing: -1px;">Hubungi Kami</h1>
                <p style="font-size: 1.2rem; color: #9A3A3A; line-height: 1.7; margin-bottom: 3rem;">Kami siap membantu Anda. Temukan lokasi dan informasi kontak kami di bawah ini.</p>
            </div>
            <div class="hero-shapes">
                <div style="position: absolute; width: 200px; height: 200px; border-radius: 50%; background: rgba(253, 93, 93, 0.1); top: -50px; left: 10%; z-index: 0;"></div>
                <div style="position: absolute; width: 300px; height: 300px; border-radius: 50%; background: rgba(253, 93, 93, 0.1); bottom: -100px; right: 5%; z-index: 0;"></div>
            </div>
        </div>
    </div>

    <div class="contact-section" style="padding: 4rem 2rem; position: relative; background-color: white;">
        <div class="container" style="max-width: 1280px; margin: 0 auto;">
            <div class="contact-grid" style="display: grid; grid-template-columns: repeat(12, 1fr); gap: 2rem;">
                <!-- Contact Information Panel -->
                <div class="contact-info-panel" style="grid-column: span 4; background: white; border-radius: 20px; box-shadow: 0 15px 30px rgba(253, 93, 93, 0.15); overflow: hidden; position: relative;">
                    <div style="background: linear-gradient(135deg, #fd5d5d 0%, #fd5d5d 100%); padding: 2.5rem; color: white; position: relative; overflow: hidden;">
                        <h2 style="font-size: 1.8rem; font-weight: 700; margin-bottom: 1.5rem; position: relative; z-index: 2;">Informasi Kontak</h2>
                        <p style="font-size: 1.1rem; line-height: 1.6; margin-bottom: 2rem; position: relative; z-index: 2;">Jangan ragu untuk menghubungi kami. Kami tersedia untuk Anda setiap saat selama jam operasional.</p>
                        
                        <!-- Decorative shapes -->
                        <div style="position: absolute; width: 100px; height: 100px; border-radius: 50%; background: rgba(255, 255, 255, 0.1); bottom: -20px; right: -20px;"></div>
                        <div style="position: absolute; width: 70px; height: 70px; border-radius: 50%; background: rgba(255, 255, 255, 0.1); top: 30px; right: 50px;"></div>
                    </div>
                    
                    <div style="padding: 2.5rem;">
                        <div class="contact-item" style="display: flex; align-items: flex-start; margin-bottom: 2rem;">
                            <div style="width: 48px; height: 48px; min-width: 48px; background: #FFF5F5; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                                <i class="fas fa-phone-alt" style="font-size: 1.2rem; color: #fd5d5d;"></i>
                            </div>
                            <div>
                                <h3 style="font-size: 1.1rem; color: #7B2D2D; margin: 0 0 0.5rem; font-weight: 600;">Nomor Telepon</h3>
                                <a href="tel:+1234567890" style="color: #9A3A3A; text-decoration: none; font-size: 1rem; transition: color 0.3s ease; display: block;">+123 456 7890</a>
                            </div>
                        </div>
                        
                        <div class="contact-item" style="display: flex; align-items: flex-start; margin-bottom: 2rem;">
                            <div style="width: 48px; height: 48px; min-width: 48px; background: #FFF5F5; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                                <i class="fas fa-clock" style="font-size: 1.2rem; color: #fd5d5d;"></i>
                            </div>
                            <div>
                                <h3 style="font-size: 1.1rem; color: #7B2D2D; margin: 0 0 0.5rem; font-weight: 600;">Jam Operasional</h3>
                                <p style="color: #9A3A3A; margin: 0; font-size: 1rem; line-height: 1.6;">Senin - Jumat<br>08.00-15.00 WIB</p>
                            </div>
                        </div>
                        
                        <div class="contact-item" style="display: flex; align-items: flex-start; margin-bottom: 2rem;">
                            <div style="width: 48px; height: 48px; min-width: 48px; background: #FFF5F5; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                                <i class="fas fa-map-marker-alt" style="font-size: 1.2rem; color: #fd5d5d;"></i>
                            </div>
                            <div>
                                <h3 style="font-size: 1.1rem; color: #7B2D2D; margin: 0 0 0.5rem; font-weight: 600;">Alamat</h3>
                                <p style="color: #9A3A3A; margin: 0; font-size: 1rem; line-height: 1.6;">Smkn 11 Bandung, Jl. Budi Jl. Raya Cilember, RT.01/RW.04, Sukaraja, Kec. Cicendo, Kota Bandung, Jawa Barat 40153.</p>
                            </div>
                        </div>
                        
                        <div class="social-links" style="display: flex; gap: 1rem; margin-top: 2.5rem;">
                            <a href="#" style="width: 40px; height: 40px; background: #FFF5F5; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #fd5d5d; text-decoration: none; transition: all 0.3s ease;">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" style="width: 40px; height: 40px; background: #FFF5F5; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #fd5d5d; text-decoration: none; transition: all 0.3s ease;">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" style="width: 40px; height: 40px; background: #FFF5F5; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #fd5d5d; text-decoration: none; transition: all 0.3s ease;">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" style="width: 40px; height: 40px; background: #FFF5F5; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #fd5d5d; text-decoration: none; transition: all 0.3s ease;">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Map Panel -->
                <div class="map-panel" style="grid-column: span 8; background: white; border-radius: 20px; box-shadow: 0 15px 30px rgba(253, 93, 93, 0.15); overflow: hidden; height: 100%;">
                    <div class="map-container" style="height: 100%; position: relative;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.784981487607!2d107.6206600147728!3d-6.918492794972353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e4b4c81e0b37%3A0x1d1515de4bb1e01b!2sSMKN%2011%20Bandung!5e0!3m2!1sen!2sid!4v1694259649153!5m2!1sen!2sid" style="width: 100%; height: 100%; border: none;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        
                        <!-- Map overlay for mobile view -->
                        <div class="map-overlay" style="position: absolute; bottom: 0; left: 0; width: 100%; background: linear-gradient(0deg, rgba(255,255,255,0.9) 0%, rgba(255,255,255,0) 100%); padding: 2rem 1.5rem; display: none;">
                            <h3 style="font-size: 1.3rem; color: #fd5d5d; margin: 0 0 0.5rem; font-weight: 600;">Lokasi Kami</h3>
                            <p style="color: #9A3A3A; margin: 0; font-size: 1rem;">Smkn 11 Bandung, Jl. Budi Jl. Raya Cilember</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Contact Form Section (Optional) -->
            <div class="contact-form-section" style="margin-top: 4rem; background: white; border-radius: 20px; box-shadow: 0 15px 30px rgba(253, 93, 93, 0.15); padding: 3rem; position: relative; overflow: hidden;">
                <div style="position: absolute; width: 200px; height: 200px; border-radius: 50%; background: rgba(253, 93, 93, 0.1); top: -100px; right: -100px;"></div>
                <div style="position: absolute; width: 150px; height: 150px; border-radius: 50%; background: rgba(253, 93, 93, 0.1); bottom: -50px; left: -50px;"></div>
                
                <div style="position: relative; z-index: 2; max-width: 800px; margin: 0 auto;">
                    <h2 style="font-size: 2rem; color: #fd5d5d; text-align: center; margin-bottom: 2rem; font-weight: 700;">Kirim Pesan</h2>
                    <p style="text-align: center; color: #9A3A3A; margin-bottom: 3rem; font-size: 1.1rem;">Ada pertanyaan atau ingin tahu lebih banyak? Jangan ragu untuk menghubungi kami.</p>
                    
                    <form style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 1.5rem;">
                        <div style="grid-column: span 1;">
                            <label for="name" style="display: block; margin-bottom: 0.5rem; color: #7B2D2D; font-weight: 500;">Nama Lengkap</label>
                            <input type="text" id="name" placeholder="Masukkan nama lengkap" style="width: 100%; padding: 0.875rem 1rem; border-radius: 10px; border: 2px solid #FFDBDB; background: #FFF5F5; font-family: 'Plus Jakarta Sans', sans-serif; font-size: 1rem; color: #7B2D2D; transition: all 0.3s ease;">
                        </div>
                        
                        <div style="grid-column: span 1;">
                            <label for="email" style="display: block; margin-bottom: 0.5rem; color: #7B2D2D; font-weight: 500;">Email</label>
                            <input type="email" id="email" placeholder="Masukkan email" style="width: 100%; padding: 0.875rem 1rem; border-radius: 10px; border: 2px solid #FFDBDB; background: #FFF5F5; font-family: 'Plus Jakarta Sans', sans-serif; font-size: 1rem; color: #7B2D2D; transition: all 0.3s ease;">
                        </div>
                        
                        <div style="grid-column: span 2;">
                            <label for="subject" style="display: block; margin-bottom: 0.5rem; color: #7B2D2D; font-weight: 500;">Subjek</label>
                            <input type="text" id="subject" placeholder="Masukkan subjek pesan" style="width: 100%; padding: 0.875rem 1rem; border-radius: 10px; border: 2px solid #FFDBDB; background: #FFF5F5; font-family: 'Plus Jakarta Sans', sans-serif; font-size: 1rem; color: #7B2D2D; transition: all 0.3s ease;">
                        </div>
                        
                        <div style="grid-column: span 2;">
                            <label for="message" style="display: block; margin-bottom: 0.5rem; color: #7B2D2D; font-weight: 500;">Pesan</label>
                            <textarea id="message" rows="5" placeholder="Tulis pesan Anda di sini..." style="width: 100%; padding: 0.875rem 1rem; border-radius: 10px; border: 2px solid #FFDBDB; background: #FFF5F5; font-family: 'Plus Jakarta Sans', sans-serif; font-size: 1rem; color: #7B2D2D; resize: vertical; transition: all 0.3s ease;"></textarea>
                        </div>
                        
                        <div style="grid-column: span 2; text-align: center; margin-top: 1rem;">
                            <button type="submit" style="background: linear-gradient(135deg, #fd5d5d 0%, #fd5d5d 100%); color: white; border: none; padding: 1rem 2.5rem; border-radius: 10px; font-size: 1rem; font-weight: 600; cursor: pointer; transition: all 0.3s ease; box-shadow: 0 10px 20px rgba(253, 93, 93, 0.3);">Kirim Pesan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    @include('home.footer')
    
    <script>
        // Responsive adjustments for mobile view
        function adjustForMobile() {
            if (window.innerWidth < 768) {
                document.querySelector('.contact-grid').style.gridTemplateColumns = '1fr';
                document.querySelector('.contact-info-panel').style.gridColumn = 'span 1';
                document.querySelector('.map-panel').style.gridColumn = 'span 1';
                document.querySelector('.map-overlay').style.display = 'block';
                
                // Adjust form layout
                const formInputs = document.querySelectorAll('form > div');
                formInputs.forEach(input => {
                    input.style.gridColumn = 'span 2';
                });
            } else {
                document.querySelector('.map-overlay').style.display = 'none';
            }
        }
        
        // Call on load and resize
        window.addEventListener('load', adjustForMobile);
        window.addEventListener('resize', adjustForMobile);
        
        // Add hover effects for interactive elements
        const socialLinks = document.querySelectorAll('.social-links a');
        socialLinks.forEach(link => {
            link.addEventListener('mouseenter', function() {
                this.style.background = '#fd5d5d';
                this.style.color = 'white';
                this.style.transform = 'translateY(-3px)';
            });
            
            link.addEventListener('mouseleave', function() {
                this.style.background = '#FFF5F5';
                this.style.color = '#fd5d5d';
                this.style.transform = 'translateY(0)';
            });
        });
        
        // Form input focus effects
        const formInputs = document.querySelectorAll('input, textarea');
        formInputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.style.borderColor = '#fd5d5d';
                this.style.boxShadow = '0 0 0 3px rgba(253, 93, 93, 0.1)';
            });
            
            input.addEventListener('blur', function() {
                this.style.borderColor = '#FFDBDB';
                this.style.boxShadow = 'none';
            });
        });
        
        // Button hover effect
        const submitButton = document.querySelector('button[type="submit"]');
        submitButton.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-3px)';
            this.style.boxShadow = '0 15px 25px rgba(253, 93, 93, 0.4)';
        });
        
        submitButton.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
            this.style.boxShadow = '0 10px 20px rgba(253, 93, 93, 0.3)';
        });
    </script>
</body>
</html>