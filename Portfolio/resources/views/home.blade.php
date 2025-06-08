<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>HOME</title>

    <style>
        body{
            margin: 0;
            width: 100%;
            height: 100vh;
            background-image: url(/background.jpg);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-blend-mode: color;
            background-color:rgba(0, 0, 0, 0.69);
        }
        header{
            background-color:rgba(0, 0, 0, 0.42);
            color: white;
            height: 10%;
            display: flex;
            justify-content: center;
        }
        nav{
            width: 100%;
            display: flex;
            justify-content: space-evenly;
            align-items: center ;
        }

        nav a{
            color: white;
            text-decoration: none;
            font-size: large;
            font-weight:800;  
            padding: 10px;
        }

        nav a:hover{
            border: 1px solid white;
            border-radius: 14px;
            background-color: white;
            color: black;
        }

        .container{
            width: 100%;
            height: 100vh;
            display: grid;
            grid-template-columns: 50% 50%;
        }
        .information{
            grid-column: 1;
            height: 50%;
            color: white;
            align-content: center;
        }

        .profile-handler{
            width: 100%;
            height: 100vh;
            grid-column: 2;
            align-content: center;
        }
        
        img{
            width: 100%;    
            height: 100vh;
        }
    </style>
</head>
<body class="m-0 p-0 w-full h-screen bg-cover bg-center bg-fixed bg-no-repeat bg-blend-overlay bg-black/10" style="background-image: url('/background.jpg')">

    <!-- Header / Navigation -->
    <header class="bg-black/50 text-white py-4">
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
        </div>

        <!-- Profile Image Section -->
        <div class="md:w-1/2 mt-10 md:mt-0 flex justify-center">
            <img src="/profile2.jpg" alt="Profile Photo" class="rounded-xl shadow-lg w-[400px] h-[400px] object-cover">
        </div>
    </main>

    <div class="w-full h-screen m-auto grid grid-cols-3 grid-rows-2 justify-items-center" >
        <img src="fav6.jpg" alt="profile" class="w-[80%] h-[80%] ml-1 rounded-xl border-s-white" >
        <img src="fav1.jpeg" alt="profile1" class="w-[80%] h-[80%] rounded-xl">
        <img src="fav2.jpg" alt="profile2" class="w-[80%] h-[80%] mr-1 rounded-xl">
           <img src="fav3.png" alt="profile" class="w-[80%] h-[80%] ml-1 rounded-xl">
        <img src="fav4.jpg" alt="profile1" class="w-[80%] h-[80%] rounded-xl">
        <img src="fav5.jpg" alt="profile2" class="w-[80%] h-[80%] mr-1 rounded-xl">
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
