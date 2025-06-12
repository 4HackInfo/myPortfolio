<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>HOME</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('build/assets/app.css') }}" rel="stylesheet">

    <style>
        @keyframes fade-down {
            0% {
                opacity: 0;
                transform: translateY(-50px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .animate-fade-down {
            animation: fade-down 0.8s ease-out both;
        }
        .delay-50{ animation-delay:0.5s}
        .delay-100 { animation-delay: 0.7s; }
        .delay-200 { animation-delay: 0.9s; }
        .delay-300 { animation-delay: 1.0s; }

        
    </style>
</head>
<body class="m-0 p-0 w-full h-screen bg-cover bg-center bg-fixed bg-no-repeat bg-blend-overlay bg-black/30" style="background-image: url('/background3.jpg')">
@include('layout.nav')

    <!-- Main Section -->
    <main class="flex flex-col md:flex-row items-center justify-center h-[calc(100vh-60px)] px-6 md:px-16">
        
        <!-- Information Section -->
        <div class="text-white md:w-1/2 space-y-4 animate-fade-down">
            <h1 class="text-4xl font-bold text-yellow-300">Christian Andiason</h1>
            <p class="text-lg leading-relaxed text-justify">
                I'm interested in working in the IT field, collaborating on impactful projects as a web designer and programmer.
                I hope your company will consider me for a role in a successful team. I'm passionate about contributing to growth
                and technical excellence. Let’s build something great together. <br><br>
                <span class="font-bold">Contact me if you're interested!</span>
            </p>
            <div class="w-[50%] h-[30%] grid grid-cols-4 gap-4 py-10">
                <img src="icon1.png" alt="">
                <img src="icon2.png" alt="" class=" bg-white/100 rounded-lg">
                <img src="icon3.png" alt="" class=" rounded-lg">
                <img src="icon4.png" alt="" class="rounded-lg">
            </div>
        </div>

        <!-- Profile Image Section -->
        <div class="md:w-1/2 mt-10 md:mt-0 grid grid-cols-2 grid-rows-2 justify-center gap-5 ml-10">
        <img src="fav2.jpg" alt="" class="rounded-lg animate-fade-down delay-50">
        <img src="fav4.jpg" alt="" class="rounded-lg h-[100%] animate-fade-down delay-100">
        <img src="fav6.jpg" alt="" class="rounded-lg animate-fade-down delay-200">
        <img src="fav7.jpg" alt="" class="rounded-lg animate-fade-down delay-300">

       </div>
    </main>

   <div class="w-full h-[80vh] grid grid-cols-2 items-start">
    <div class="w-[100%] h-[60vh] text-[20px] leading-[30px] flex items-center ml-10 text-justify text-white">
        <div>
            <h1 class="text-yellow-300 text-[50px] font-bold mb-4">Who I Am</h1>
            <p>
                I am a passionate IT professional specializing in website and system development. 
                I focus on creating strong, unique designs that are both functional and visually stunning. 
                Throughout my academic journey, I've gained extensive knowledge in various IT domains including:
            </p>
            <ul class="list-disc pl-5 mt-4">
                <li>Web Development & Design</li>
                <li>Quality Assurance & Testing</li>
                <li>Penetration Testing & Ethical Hacking (White/Black Hat)</li>
                <li>System Analysis</li>
                <li>Project Leadership</li>
                <li>Network & Computer Engineering</li>
                <li>Cybersecurity Engineering</li>
            </ul>
            <p class="mt-4">
                My diverse skill set allows me to approach projects from multiple perspectives, 
                ensuring comprehensive solutions that address both technical and design requirements.
            </p>
        </div>
    </div>
    <div class="w-[80%] h-[100vh] m-auto grid items-start">
        <img src="web.png" alt="Web Development Illustration">
    </div>
</div>

<footer class="w-[100%] h-[20%] bg-[#151B54] text-white grid items-center justify-center">
    <div >
        <h2>Andiasonchristian1@gmail.com</h2>
    </div>
</footer>
</body>
</html>
