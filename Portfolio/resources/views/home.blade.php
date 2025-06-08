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
        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.2s; }
        .delay-300 { animation-delay: 0.3s; }
    </style>
</head>
<body class="m-0 p-0 w-full h-screen bg-cover bg-center bg-fixed bg-no-repeat bg-blend-overlay bg-black/30" style="background-image: url('/background3.jpg')">
@include('layout.nav')

    <!-- Main Section -->
    <main class="flex flex-col md:flex-row items-center justify-center h-[calc(100vh-64px)] px-6 md:px-16">
        
        <!-- Information Section -->
        <div class="text-white md:w-1/2 space-y-4 animate-fade-down">
            <h1 class="text-4xl font-bold text-yellow-300">Christian Andiason</h1>
            <p class="text-lg leading-relaxed text-justify">
                I'm interested in working in the IT field, collaborating on impactful projects as a web designer and programmer.
                I hope your company will consider me for a role in a successful team. I'm passionate about contributing to growth
                and technical excellence. Let’s builds something great together. <br><br>
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
        <img src="fav2.jpg" alt="" class="rounded-lg animate-fade-down">
        <img src="fav4.jpg" alt="" class="rounded-lg h-[100%] animate-fade-down delay-100">
        <img src="fav6.jpg" alt="" class="rounded-lg animate-fade-down delay-200">
        <img src="fav7.jpg" alt="" class="rounded-lg animate-fade-down delay-300">

       </div>
    </main>

    <div class="w-[100%] h-screen m-auto grid sm:grid-cols-3 md:grid-rows-2 justify-items-center " >
        <img src="fav6.jpg" alt="profile" class="w-[90%] h-[90%]  border-s-white/500 rounded-lg" >
        <img src="fav1.jpeg" alt="profile1" class="w-[90%] h-[90%] rounded-lg">
        <img src="fav2.jpg" alt="profile2" class="w-[90%] h-[90%] rounded-lg">
           <img src="fav7.jpg" alt="profile" class="w-[90%] h-[90%] rounded-lg">
        <img src="fav4.jpg" alt="profile1" class="w-[90%] h-[90%] rounded-lg">
        <img src="fav5.jpg" alt="profile2" class="w-[90%] h-[90%] rounded-lg">
    </div>

    <div class="w-[900px] h-[200px] m-auto text-white font-mono font-normal leading-tight tracking-wide">
        <h3><span class="text-[20px] text-yellow-300">Operating system</span> is the one who calculate the data then processing
             the output and accepting the input value, allowing BIOS process
            and interaction with the components 
            <span class="text-yellow-50 "> (monitor, cpu, ram, ssd, Gpu card, External ports and Internal ports)</span></h3>
            <button class="bg-yellow-500 py-3 px-3 rounded-xl hover:bg-yellow-300 hover: font-bold hover:text-lg mt-6">Explore now</button>
    </div>

</body>
</html>
