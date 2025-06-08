<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="w-full h-screen bg-fixed bg-no-repeat bg-cover bg-center" style="background-image:url('background1.jpg')">
    
<div class="w-full h-full flex items-center justify-center bg-black/40">
    <div class="text-center max-w-2xl px-4">
        <h1 class="text-4xl md:text-6xl font-bold mb-4 text-white">Andiason Portfolio </h1>
        <p class="text-xl text-white/80 mb-8">I create beautiful, functional websites and applications</p>
        <button class="px-8 py-3 bg-blue-600 hover:bg-blue-700 rounded-lg text-white font-semibold transition-all" onclick="navigation('home')">
            View My Work
        </button>
    </div>
</div>

<script>
 function navigation(pages) {
    return window.location.href = pages; // Returns the current URL
}
</script>
</body>
</html>