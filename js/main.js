// document.addEventListener('DOMContentLoaded', () => {
//     // Intersection Observer untuk scroll animation
//     const observerOptions = {
//         threshold: 0.1,
//         rootMargin: "0px 0px -50px 0px"
//     };

//     const observer = new IntersectionObserver((entries) => {
//         entries.forEach(entry => {
//             if (entry.isIntersecting) {
//                 entry.target.classList.add('show');
//                 observer.unobserve(entry.target);
//             }
//         });
//     }, observerOptions);

//     const animatedElements = document.querySelectorAll('.animate-on-scroll');
//     animatedElements.forEach(el => observer.observe(el));
// });


document.addEventListener("DOMContentLoaded", () => {

    // ANIMASI SCROLL
    const observer = new IntersectionObserver((entries)=>{
        entries.forEach(entry=>{
            if(entry.isIntersecting){
                entry.target.classList.add("show");
            }
        });
    });

    document.querySelectorAll(".animate-on-scroll").forEach(el=>{
        observer.observe(el);
    });

    // SLIDER
    const track = document.querySelector(".hero-track");
    const slides = document.querySelectorAll(".hero-slide");
    const next = document.querySelector(".next");
    const prev = document.querySelector(".prev");

    if(track){

        let index = 0;

        function updateSlide(){
            track.style.transform =
            `translateX(-${index * 100}%)`;
        }

        next.addEventListener("click", ()=>{
            index++;
            if(index >= slides.length){
                index = 0;
            }
            updateSlide();
        });

        prev.addEventListener("click", ()=>{
            index--;
            if(index < 0){
                index = slides.length - 1;
            }
            updateSlide();
        });

        setInterval(()=>{
            index++;
            if(index >= slides.length){
                index = 0;
            }
            updateSlide();
        },4000);

    }

    // INFO SLIDER
    const infoSlides  = document.querySelectorAll('.info-slide');
    const dots        = document.querySelectorAll('.dot');
    const btnPrev     = document.getElementById('sliderPrev');
    const btnNext     = document.getElementById('sliderNext');

    if (infoSlides.length > 0) {
        let current = 0;
        let autoPlay = null;

        function goTo(n) {
            infoSlides[current].classList.remove('active');
            dots[current].classList.remove('active');
            current = (n + infoSlides.length) % infoSlides.length;
            infoSlides[current].classList.add('active');
            dots[current].classList.add('active');
        }

        btnNext.addEventListener('click', () => { resetAuto(); goTo(current + 1); });
        btnPrev.addEventListener('click', () => { resetAuto(); goTo(current - 1); });

        dots.forEach(dot => {
            dot.addEventListener('click', () => {
                resetAuto();
                goTo(parseInt(dot.dataset.index));
            });
        });

        function startAuto() {
            autoPlay = setInterval(() => goTo(current + 1), 5000);
        }
        function resetAuto() {
            clearInterval(autoPlay);
            startAuto();
        }

        startAuto();
    }

});

