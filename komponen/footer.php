<footer class="footer">
    <div class="footer-content animate-on-scroll">
        <div class="footer-section about">
            <div class="footer-logo">
                <img src="assets/foto/logo1.png" alt="TumbuTani Nusantara Logo">
            </div>
            <h3>TumbuTani.Nusantara</h3>
            <p>Menghasilkan cabai domba berkualitas tinggi dengan metode pertanian modern dan berkelanjutan.</p>
        </div>

        <!-- Section Navigasi -->
        <div class="footer-section links" id="footer-section-links">
            <h3>Sosial Media</h3>
            <ul>
                <li><a href="https://wa.me/6282260067197" target="_blank">WhatsApp Kami</a></li>
                <li><a href="https://instagram.com/tumbutani.nusantara" target="_blank">Instagram</a></li>
                <li><a href="https://www.facebook.com/profile.php?id=61575866347115&ref=PROFILE_EDIT_ig_profile_ac" target="_blank">Facebook</a></li>
                <li><a href="https://www.tiktok.com/@tumbutani.nusantara">Tiktok</a></li>
            </ul>
        </div>

        <!-- Section Alamat & Kontak -->
        <div class="footer-section contact" id="footer-section-contact">
            <h3>Alamat & Kontak</h3>
            <ul class="contact-list">
                <li class="contact-item" id="contact-item-address">
                    <span class="icon-container pin-container">
                        <svg class="contact-icon pin-icon" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#D84315" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                    </span>
                    <span class="contact-text">Batusumur, Kec. Manonjaya, Kabupaten Tasikmalaya, Jawa Barat 46197</span>
                </li>
                <li class="contact-item" id="contact-item-phone">
                    <span class="icon-container phone-container">
                        <svg class="contact-icon phone-icon" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#D84315" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                    </span>
                    <span class="contact-text"><a href="tel:082260067197">0822-6006-7197</a></span>
                </li>
                <li class="contact-item" id="contact-item-chat">
                    <span class="icon-container chat-container">
                        <svg class="contact-icon chat-icon" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/><circle cx="8" cy="10" r="1"/><circle cx="12" cy="10" r="1"/><circle cx="16" cy="10" r="1"/></svg>
                    </span>
                    <span class="contact-text"><a href="https://wa.me/6282260067197" target="_blank">0822-6006-7197</a></span>
                </li>
                <li class="contact-item" id="contact-item-email">
                    <span class="icon-container email-container">
                        <svg class="contact-icon email-icon" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                    </span>
                    <span class="contact-text"><a href="mailto:tumbutaninusantara@gmail.com">tumbutaninusantara@gmail.com</a></span>
                </li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        &copy;2025 - 2026. TumbuTani.Nusantara | Powered by IT Alomani Team&reg;
    </div>
</footer>

<style>
@import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Outfit:wght@700;800&display=swap');

/* Reset override & premium styling for TumbuTani Footer */
footer.footer {
    background: linear-gradient(135deg, #0B5836 0%, #126D45 100%) !important;
    color: rgba(255, 255, 255, 0.7) !important;
    padding: 40px 20px 16px !important;
    font-family: 'Plus Jakarta Sans', sans-serif !important;
    position: relative;
    overflow: hidden;
    border-top: 1px solid rgba(255, 255, 255, 0.08);
}

footer.footer::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -20%;
    width: 400px;
    height: 400px;
    border-radius: 50%;
    background: rgba(255, 213, 79, 0.04);
    filter: blur(80px);
    pointer-events: none;
    z-index: 0;
}

footer.footer .footer-content {
    display: grid !important;
    grid-template-columns: 1.2fr 0.8fr 1fr !important;
    gap: 40px !important;
    max-width: 1200px !important;
    margin: auto !important;
    opacity: 1 !important;
    transform: none !important;
    position: relative;
    z-index: 1;
}

@media screen and (max-width: 768px) {
    footer.footer .footer-content {
        grid-template-columns: 1fr !important;
        gap: 30px !important;
    }
}

/* Footer Section Styling */
footer.footer .footer-section {
    transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    border-radius: 16px;
    padding: 12px 16px;
    cursor: pointer;
    user-select: none;
    background: rgba(255, 255, 255, 0.02);
    border: 1px solid rgba(255, 255, 255, 0.04);
}

footer.footer .footer-section:hover {
    background: rgba(255, 255, 255, 0.04);
    border-color: rgba(255, 255, 255, 0.08);
    transform: translateY(-2px);
}

/* Titles */
footer.footer .footer-section h3 {
    margin-bottom: 15px !important;
    color: #ffffff !important;
    font-size: 1.2rem !important;
    font-weight: 800 !important;
    letter-spacing: -0.5px;
    font-family: 'Outfit', sans-serif !important;
}

/* Logo container styling */
footer.footer .footer-logo {
    width: 56px;
    height: 56px;
    background: #ffffff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 6px;
    margin-bottom: 12px;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
    transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1);
}

footer.footer .footer-logo:hover {
    transform: scale(1.08) rotate(5deg);
}

footer.footer .footer-logo img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
}

footer.footer .footer-desc {
    font-size: 0.95rem !important;
    line-height: 1.6 !important;
    color: rgba(255, 255, 255, 0.8) !important;
    margin-bottom: 15px !important;
    max-width: 340px;
}

/* Social Buttons */
footer.footer .footer-socials {
    display: flex;
    gap: 12px;
}

footer.footer .social-btn {
    width: 42px;
    height: 42px;
    background-color: rgba(255, 255, 255, 0.08);
    color: #ffffff !important;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    text-decoration: none !important;
    font-weight: 600;
    font-size: 1rem;
    border: 1px solid rgba(255, 255, 255, 0.1);
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    position: relative;
    overflow: hidden;
    cursor: pointer;
}

footer.footer .social-btn:hover {
    background-color: #FFD54F;
    color: #0B5836 !important;
    transform: translateY(-4px);
    box-shadow: 0 8px 20px rgba(255, 213, 79, 0.25);
}

footer.footer .social-btn svg {
    width: 18px;
    height: 18px;
    stroke: #ffffff;
    stroke-width: 2.5;
    transition: stroke 0.3s ease;
}

footer.footer .social-btn:hover svg {
    stroke: #0B5836 !important;
}

/* Navigation List */
footer.footer .footer-section ul {
    list-style: none !important;
    padding: 0 !important;
    margin: 0 !important;
}

footer.footer .footer-section.links ul li {
    margin-bottom: 12px !important;
}

footer.footer .footer-section.links ul a {
    color: rgba(255, 255, 255, 0.7) !important;
    text-decoration: none !important;
    font-size: 0.95rem !important;
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    display: inline-block;
    padding: 2px 0;
}

footer.footer .footer-section.links ul a:hover {
    color: #FFD54F !important;
    transform: translateX(6px);
}

/* Address & Contact List */
footer.footer .contact-list {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

footer.footer .contact-item {
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: 0.95rem;
    line-height: 1.5;
    color: rgba(255, 255, 255, 0.7);
    cursor: pointer;
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
}

footer.footer .contact-item:hover {
    transform: translateX(4px);
    color: #ffffff;
}

footer.footer .contact-item a {
    color: inherit !important;
    text-decoration: none !important;
}

footer.footer .icon-container {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 32px;
    height: 32px;
    border-radius: 8px;
    background: rgba(255, 255, 255, 0.08);
    flex-shrink: 0;
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
}

footer.footer .contact-item:hover .icon-container {
    background: #FFD54F;
    transform: scale(1.08);
}

footer.footer .contact-item svg {
    stroke: rgba(255, 255, 255, 0.9) !important;
    transition: stroke 0.3s ease;
}

footer.footer .contact-item:hover svg {
    stroke: #0B5836 !important;
}

footer.footer .contact-icon {
    transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1);
}

/* Copyright Footer Bottom */
footer.footer .footer-bottom {
    text-align: center !important;
    padding: 16px 20px 0 !important;
    background-color: transparent !important;
    border-top: 1px solid rgba(255, 255, 255, 0.08) !important;
    margin-top: 24px !important;
    font-size: 0.85rem !important;
    color: rgba(255, 255, 255, 0.5) !important;
    position: relative;
    z-index: 1;
}

/* Animation Keyframes */

/* 1. Section spring bounce & glow */
@keyframes sectionSpring {
    0% { transform: scale(1); box-shadow: 0 0 0 rgba(46, 125, 50, 0); }
    30% { transform: scale(0.97); box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2); }
    50% { transform: scale(1.02); background: rgba(46, 125, 50, 0.05); box-shadow: 0 10px 25px rgba(46, 125, 50, 0.15); }
    100% { transform: scale(1); box-shadow: 0 0 0 rgba(46, 125, 50, 0); }
}
.section-animate {
    animation: sectionSpring 0.5s cubic-bezier(0.25, 0.8, 0.25, 1) both;
}

/* 2. Social Spin */
@keyframes socialSpin {
    0% { transform: scale(1) rotate(0deg); }
    50% { transform: scale(1.2) rotate(180deg); background-color: #D84315; }
    100% { transform: scale(1) rotate(360deg); }
}
.social-spin-animate {
    animation: socialSpin 0.5s cubic-bezier(0.4, 0, 0.2, 1) both;
}

/* 3. Ripple Effect */
.ripple {
    position: absolute;
    background: rgba(255, 255, 255, 0.4);
    border-radius: 50%;
    transform: scale(0);
    animation: rippleEffect 0.6s linear;
    pointer-events: none;
}
@keyframes rippleEffect {
    to {
        transform: scale(4);
        opacity: 0;
    }
}

/* 4. Map Pin Bounce */
@keyframes pinBounce {
    0%, 100% { transform: translateY(0); }
    30% { transform: translateY(-10px); }
    50% { transform: translateY(0); }
    70% { transform: translateY(-4px); }
}
.pin-bounce-active {
    animation: pinBounce 0.6s cubic-bezier(0.25, 0.8, 0.25, 1.25) both;
}

/* 5. Phone Ring */
@keyframes phoneRing {
    0%, 100% { transform: rotate(0); }
    15% { transform: rotate(-15deg); }
    30% { transform: rotate(15deg); }
    45% { transform: rotate(-10deg); }
    60% { transform: rotate(10deg); }
    75% { transform: rotate(-5deg); }
    90% { transform: rotate(5deg); }
}
.phone-ring-active {
    animation: phoneRing 0.5s ease both;
    transform-origin: center;
}

/* 6. Chat Pulse */
@keyframes chatPulse {
    0%, 100% { transform: scale(1); filter: drop-shadow(0 0 0 rgba(255,255,255,0)); }
    50% { transform: scale(1.3); filter: drop-shadow(0 0 8px rgba(255,255,255,0.6)); }
}
.chat-pulse-active {
    animation: chatPulse 0.5s cubic-bezier(0.25, 0.8, 0.25, 1.25) both;
}

/* 7. Email Flip */
@keyframes emailFlip {
    0% { transform: rotateY(0deg); }
    100% { transform: rotateY(360deg); }
}
.email-flip-active {
    animation: emailFlip 0.6s cubic-bezier(0.25, 0.8, 0.25, 1) both;
    transform-origin: center;
}

/* 8. Nav Link Click */
@keyframes navLinkClick {
    0% { color: #b0b0b0; transform: scale(1); }
    50% { color: #D84315; transform: scale(1.04) translateX(12px); }
    100% { color: #ffffff; transform: scale(1) translateX(0); }
}
.nav-link-click-active {
    animation: navLinkClick 0.4s cubic-bezier(0.25, 0.8, 0.25, 1) both;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
    // 1. Column Sections bounce and highlight on click
    const sections = document.querySelectorAll('footer.footer .footer-section');
    sections.forEach(section => {
        section.addEventListener('click', (e) => {
            // Ignore click if it falls on interactive elements
            if (e.target.closest('a') || e.target.closest('.social-btn') || e.target.closest('.contact-item')) {
                return;
            }
            section.classList.remove('section-animate');
            void section.offsetWidth; // Trigger reflow
            section.classList.add('section-animate');
            setTimeout(() => {
                section.classList.remove('section-animate');
            }, 500);
        });
    });

    // 2. Social buttons spin & ripple on click
    const socialBtns = document.querySelectorAll('footer.footer .social-btn');
    socialBtns.forEach(btn => {
        btn.addEventListener('click', function(e) {
            // Spin animation
            this.classList.remove('social-spin-animate');
            void this.offsetWidth;
            this.classList.add('social-spin-animate');
            setTimeout(() => {
                this.classList.remove('social-spin-animate');
            }, 500);

            // Ripple effect inside circle
            const ripple = document.createElement('span');
            ripple.classList.add('ripple');
            this.appendChild(ripple);
            
            const rect = this.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            ripple.style.width = ripple.style.height = `${size}px`;
            
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;
            ripple.style.left = `${x}px`;
            ripple.style.top = `${y}px`;
            
            setTimeout(() => {
                ripple.remove();
            }, 600);
        });
    });

    // 3. Contact list icons micro-animations
    const contactAddress = document.getElementById('contact-item-address');
    if (contactAddress) {
        contactAddress.addEventListener('click', () => {
            const icon = contactAddress.querySelector('.pin-icon');
            icon.classList.remove('pin-bounce-active');
            void icon.offsetWidth;
            icon.classList.add('pin-bounce-active');
            setTimeout(() => icon.classList.remove('pin-bounce-active'), 600);
        });
    }
    
    const contactPhone = document.getElementById('contact-item-phone');
    if (contactPhone) {
        contactPhone.addEventListener('click', () => {
            const icon = contactPhone.querySelector('.phone-icon');
            icon.classList.remove('phone-ring-active');
            void icon.offsetWidth;
            icon.classList.add('phone-ring-active');
            setTimeout(() => icon.classList.remove('phone-ring-active'), 500);
        });
    }

    const contactChat = document.getElementById('contact-item-chat');
    if (contactChat) {
        contactChat.addEventListener('click', () => {
            const icon = contactChat.querySelector('.chat-icon');
            icon.classList.remove('chat-pulse-active');
            void icon.offsetWidth;
            icon.classList.add('chat-pulse-active');
            setTimeout(() => icon.classList.remove('chat-pulse-active'), 500);
        });
    }

    const contactEmail = document.getElementById('contact-item-email');
    if (contactEmail) {
        contactEmail.addEventListener('click', () => {
            const icon = contactEmail.querySelector('.email-icon');
            icon.classList.remove('email-flip-active');
            void icon.offsetWidth;
            icon.classList.add('email-flip-active');
            setTimeout(() => icon.classList.remove('email-flip-active'), 600);
        });
    }

    // 4. Nav links click slide-out flash transition
    const navLinks = document.querySelectorAll('footer.footer .footer-section.links a');
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const href = this.getAttribute('href');
            
            this.classList.remove('nav-link-click-active');
            void this.offsetWidth;
            this.classList.add('nav-link-click-active');
            
            setTimeout(() => {
                window.location.href = href;
            }, 350);
        });
    });
});
</script>