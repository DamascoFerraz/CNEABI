<!DOCTYPE html>
<html lang="pt-br" data-theme=light>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.amber.min.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.colors.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../CSS/mainpage.css">
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
                <button class="outline contrast" onclick="">Sair <i class="fa-solid fa-arrow-right-from-bracket"></i></button>
            </nav>
        </div>
    </header>
    
    <!------------------------------------------- MAIN ------------------------------------------->
    <main>
        <!-- ASIDE -->
        <aside id="aside">
            <ul>
                <a href="#"><li><i class="fa-solid fa-house"></i> Home</li></a>
                <a href="#"><li><i class="fa-solid fa-book"></i> Clube do livro</li></a>
                <a href="#"><li><i class="fa-solid fa-calendar"></i> Eventos</li></a>
                <a href="#"><li><i class="fa-solid fa-handshake"></i> Seja NEABI</li></a>
            </ul>
        </aside>
        <!-- CONTENT -->
        <section class="content">
        </section>
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
        function darkMode () {
            if(!isOn) {
                document.documentElement.setAttribute('data-theme', 'dark');
                icon.setAttribute('class','fa-regular fa-sun');
                logo.setAttribute('src','../ASSETS/NEABI_LOGO_WHITE.png')
                isOn = true;
            }
            else {
                document.documentElement.setAttribute('data-theme', 'light');
                icon.setAttribute('class','fa-regular fa-moon');
                logo.setAttribute('src','../ASSETS/NEABI_LOGO_DARK.png')
                isOn = false;
            }
        }
    </script>
</body>
</html>