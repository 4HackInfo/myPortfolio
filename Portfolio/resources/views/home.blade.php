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
<body>
    <header>
        <nav>
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#achievement">Achievement</a>
            <a href="#skills">Skills</a>
            <a href="#contact">Contact</a>
            <a href="#portfolio">Portfolio</a>
        </nav>
    </header>
    
<main>

    <div class="container">
         <div class="information">
            <h1>Christian Andiason.</h1>
            <h3>Im interested to work into the IT field to join to others make and build a big project. As a role of Web Designer and programmer. I hope to your Company is to Invite me as a team of their successful project.</h3>
         </div>    

         <div class="profile-handler">
            <img src="/profile2.jpg" alt="photo profile">
         </div>
    </div>

</main>
</body>
</html>