<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Achievement</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .pic{
            border-radius : 10px;
        }
    </style>
</head>
<body class="w-full h-screen m-auto bg-fixed bg-cover bg-center bg-blend-color bg-black/40" style="background-image:url('background4.jpg')">
    @include('layout.nav')

    <div class="w-full h-screen flex items-center">
    <div class="w-[100%] h-[80vh]  m-auto grid grid-cols-3 grid-rows-2  justify-center pic">
         <img src="about/about1.jpg" alt="" class="w-[90%] h-[70vh] ml-10 pic">
         <img src="about/about2.jpg" alt="" class="w-[90%] h-[70vh] ml-5 pic">
         <img src="about/about3.jpg" alt="" class="w-[90%] h-[70vh] cover pic">
    </div>
   
    </div>
</body>
</html>