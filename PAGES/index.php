<!DOCTYPE html>
<html lang="pt-br" data-theme=light>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.amber.min.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.colors.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../CSS/index.css">
    <title>CNEABI</title>
</head>
<body>

    <!------------------------------------------- HEADER ------------------------------------------->
    <header >
    <div class="container">
            <div class="title">
                <div><img id="logo" width=50rem src="../ASSETS/NEABI_LOGO_DARK.png" alt="NEABI_logo"></div>
                <hgroup>
                    <h3>CNEABI</h3>
                    <p>Central do Nucleo de Estudos Afro-Brasileiros e Indigenas</p>
                </hgroup>
            </div>

            <nav>
                <button class="outline contrast theme-togle" onclick="darkMode()"><i id="theme-icon" class="fa-regular fa-moon"></i></button>
                <button class="outline contrast" onclick="">Entrar</button>
                <button class="primary" onclick="">Cadastrar-se</button>
            </nav>
        </div>
    </header>

    
    
    <!------------------------------------------- MAIN ------------------------------------------->
    <main>
        <hgroup class="info-pannel">
            <h1>CNEABI</h1>
            <h3>Central do Nucleo de Estudos <br> Afro-Brasileiros e Indigenas</h3>
            <p>artigos, eventos, livros, estudos e muito mais...</p>
        </hgroup>
        <img id="logo-mp" width=300rem src="../ASSETS/NEABI_LOGO_DARK.png" alt="NEABI_logo">
        
    </main>

    <!------------------------------------------- FOOTER ------------------------------------------->
    <footer>
        <div class="container">
            <hgroup>
                <h6>Criado e dirigido por alunos do IFSULDEMINAS-MUZAMBINHO</h6>
                <p>site desenvolvido por: <a href="https://github.com/DamascoFerraz">DamascoFerraz <i class="fa-brands fa-github"></i></a></p> 
            </hgroup>
        </div>
    </footer>


    <!-- JS FOR THEME CHANGE -->
    <script>
        var isOn = false;
        icon = document.getElementById("theme-icon");
        logo = document.getElementById("logo");
        logo_mp = document.getElementById("logo-mp");
        function darkMode () {
            if(!isOn) {
                document.documentElement.setAttribute('data-theme', 'dark');
                icon.setAttribute('class','fa-regular fa-sun');
                logo.setAttribute('src','../ASSETS/NEABI_LOGO_WHITE.png')
                logo_mp.setAttribute('src','../ASSETS/NEABI_LOGO_WHITE.png')
                isOn = true;
            }
            else {
                document.documentElement.setAttribute('data-theme', 'light');
                icon.setAttribute('class','fa-regular fa-moon');
                logo.setAttribute('src','../ASSETS/NEABI_LOGO_DARK.png')
                logo_mp.setAttribute('src','../ASSETS/NEABI_LOGO_DARK.png')
                isOn = false;
            }
        }
    </script>
</body>
</html>