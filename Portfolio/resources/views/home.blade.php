<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>HOME</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="m-0 p-0 w-full h-screen bg-cover bg-center bg-fixed bg-no-repeat bg-blend-overlay bg-black/30" style="background-image: url('/background3.jpg')">

    <!-- Header / Navigation -->
    <header class="bg-black/50 text-white py-4 w-[100%]">
        <nav class="flex justify-center gap-6 text-lg font-semibold">
            <a href="#home" class="hover:bg-white hover:text-black px-4 py-2 rounded transition">Home</a>
            <a href="#about" class="hover:bg-white hover:text-black px-4 py-2 rounded transition">About</a>
            <a href="#achievement" class="hover:bg-white hover:text-black px-4 py-2 rounded transition">Achievement</a>
            <a href="#skills" class="hover:bg-white hover:text-black px-4 py-2 rounded transition">Skills</a>
            <a href="#contact" class="hover:bg-white hover:text-black px-4 py-2 rounded transition">Contact</a>
            <a href="#portfolio" class="hover:bg-white hover:text-black px-4 py-2 rounded transition">Portfolio</a>
        </nav>
    </header>

    <!-- Main Section -->
    <main class="flex flex-col md:flex-row items-center justify-center h-[calc(100vh-64px)] px-6 md:px-16">
        
        <!-- Information Section -->
        <div class="text-white md:w-1/2 space-y-4">
            <h1 class="text-4xl font-bold text-yellow-300">Christian Andiason</h1>
            <p class="text-lg leading-relaxed">
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
        <div class="md:w-1/2 mt-10 md:mt-0 flex justify-center">
            <img src="/profile2.jpg" alt="Profile Photo" class="rounded-xl shadow-lg w-[600px] h-[600px] object-cover">
        </div>
    </main>

    <div class="w-[100%] h-screen m-auto grid sm:grid-cols-3 md:grid-rows-2 justify-items-center " >
        <img src="fav6.jpg" alt="profile" class="w-[90%] h-[90%]  border-s-white/500" >
        <img src="fav1.jpeg" alt="profile1" class="w-[90%] h-[90%] ">
        <img src="fav2.jpg" alt="profile2" class="w-[90%] h-[90%] ">
           <img src="fav7.jpg" alt="profile" class="w-[90%] h-[90%] ">
        <img src="fav4.jpg" alt="profile1" class="w-[90%] h-[90%] ">
        <img src="fav5.jpg" alt="profile2" class="w-[90%] h-[90%] ">
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
