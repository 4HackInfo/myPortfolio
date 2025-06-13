<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Achievement</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        /* Only target the achievement section */
        .achievement-section {
            opacity: 0;
            transform: translateY(50px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }
        
        .achievement-section.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Keep original animations for images */
        .animate-achieve-image {
            animation: achieve-image 0.8s ease-out both;
        }
        .delay-50 { animation-delay: 0.5s; }
        .delay-100 { animation-delay: 0.7s; }
        .delay-200 { animation-delay: 0.9s; }
        .delay-300 { animation-delay: 1.0s; }
        
        @keyframes achieve-image {
            0% {
                opacity: 0;
                transform: translateY(-50px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body class="w-full h-screen m-auto bg-fixed bg-cover bg-center bg-blend-color bg-black/40" style="background-image:url('background4.jpg')">
    @include('layout.nav')

    <!-- First section - remains unaffected by scroll trigger -->
    <div class="w-full h-[70vh] flex justify-center">
        <div class="w-[90%] h-[50vh] m-auto grid grid-cols-3 gap-10">
            <img src="about/about1.jpg" alt="" class="w-[100%] h-[80%] rounded-lg border-1 border border-white animate-achieve-image delay-200">
            <img src="about/about2.jpg" alt="" class="w-[100%] h-[80%] rounded-lg border-1 border border-white animate-achieve-image delay-200">
            <img src="about/about3.jpg" alt="" class="w-[100%] h-[80%] rounded-lg border-1 border border-white animate-achieve-image delay-200">
        </div>
    </div>

    <!-- Achievement section - will fade in on scroll down and fade out on scroll up -->
    <div class="w-full h-screen mt-10 flex justify-center items-center">
        <div class="achievement-section w-[90%] h-[70vh] bg-black/20 text-white">
            <h1 class="text-[50px] text-yellow-500 tracking-[10px]">Achievement</h1>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const achievementSection = document.querySelector('.achievement-section');
            let lastScrollTop = window.pageYOffset || document.documentElement.scrollTop;
            
            function isInViewport(element) {
                const rect = element.getBoundingClientRect();
                return (
                    rect.top <= (window.innerHeight * 0.75) && 
                    rect.bottom >= 0
                );
            }
            
            function handleScroll() {
                const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                const scrollDirection = scrollTop > lastScrollTop ? 'down' : 'up';
                
                if (isInViewport(achievementSection)) {
                    if (scrollDirection === 'down') {
                        achievementSection.classList.add('visible');
                    } else {
                        achievementSection.classList.remove('visible');
                    }
                }
                
                lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
            }
            
            let isScrolling;
            window.addEventListener('scroll', function() {
                window.clearTimeout(isScrolling);
                isScrolling = setTimeout(handleScroll, 50);
            }, false);
            
            // Initial check on page load
            handleScroll();
        });
    </script>
</body>
</html>