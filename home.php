<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Streaming - Principal</title>
    <link rel="icon" type="image/png" href="img/icon-estacio.png">
    <link rel="stylesheet" href="css/stylePrincipal.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
<?php
$isLogged = true; // Exemplo de variável para verificar se o usuário está logado
?>

<header>
    <div class="container-menu">
        <div class="logo">
            <a href="home.php"><img src="img/estacio-logo.png" alt="Estácio Streaming"></a>
        </div>

        <nav class="menu">
            <ul>
                <li><a href="perfil.php">Meu Perfil</a></li>
                <li><a href="logout.php">Sair</a></li>
            </ul>
        </nav>

        <div class="btn-linguagem">
            <img src="img/icon-traduzir.png" width="25" alt="Português">
            <div class="dropdown">
                <button class="dropbtn">
                    <span id="selectedLanguage">Português</span>
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                </button>
                <div class="dropdown-content">
                <a href="#" onclick="updateLanguage('Português')">Português</a>
                    <a href="#" onclick="updateLanguage('English')">English</a>
                </div>
            </div>
        </div>

        <!-- Botão para alternar entre os modos escuro e claro -->
        <div class="toggle-theme">
            <i class="fas fa-moon"></i>
            <i class="fas fa-sun"></i>
        </div>
    </div>
</header>



    <main>
        <section class="hero">
            <div class="hero-content">
                <h1>Bem-vindo ao Estácio Streaming</h1>
                <p>Explore uma vasta coleção de filmes e séries.</p>
            </div>
        </section>

        <section class="categorias">
    <nav>
        <ul class="nav">
            <li>
                <ul>
                    <li><a href="?genre=Ação" class="<?php echo ($_GET['genre'] == 'Ação') ? 'active' : ''; ?>">Ação</a></li>
                    <li><a href="?genre=Comédia" class="<?php echo ($_GET['genre'] == 'Comédia') ? 'active' : ''; ?>">Comédia</a></li>
                    <li><a href="?genre=Drama" class="<?php echo ($_GET['genre'] == 'Drama') ? 'active' : ''; ?>">Drama</a></li>
                    <li><a href="?genre=Ficção Científica" class="<?php echo ($_GET['genre'] == 'Ficção Científica') ? 'active' : ''; ?>">Ficção Científica</a></li>
                    <li><a href="?genre=Terror" class="<?php echo ($_GET['genre'] == 'Terror') ? 'active' : ''; ?>">Terror</a></li>
                    <li><a href="?genre=Romance" class="<?php echo ($_GET['genre'] == 'Romance') ? 'active' : ''; ?>">Romance</a></li>
                    <!-- Adicione mais gêneros aqui -->
                    <li><a href="?genre=Aventura" class="<?php echo ($_GET['genre'] == 'Aventura') ? 'active' : ''; ?>">Aventura</a></li>
                    <li><a href="?genre=Fantasia" class="<?php echo ($_GET['genre'] == 'Fantasia') ? 'active' : ''; ?>">Fantasia</a></li>
                    <li><a href="?genre=Animação" class="<?php echo ($_GET['genre'] == 'Animação') ? 'active' : ''; ?>">Animação</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</section>
<BR>

        <div class="container">
<div class="carousel">
    <h1 class="carousel-title">Em Destaque</h1>
    <div class="carousel-movies">
        <!-- Adicione mais filmes em destaque aqui -->
        <div class="carousel-movie">
            <img src="img/cartaz.jpg" alt="Filme de Ação 1">
            <h3>Filme de Ação 1</h3>
        </div>
        <div class="carousel-movie">
            <img src="img/cartaz.jpg" alt="Filme de Comédia 1">
            <h3>Filme de Comédia 1</h3>
        </div>
        <div class="carousel-movie">
            <img src="img/cartaz.jpg" alt="Filme de Ficção Científica 1">
            <h3>Filme de Ficção Científica 1</h3>
        </div>
        <div class="carousel-movie">
            <img src="img/cartaz.jpg" alt="Filme de Terror 1">
            <h3>Filme de Terror 1</h3>
        </div>
        <!-- Adicione mais filmes em destaque aqui -->
        <div class="carousel-movie">
            <img src="img/cartaz.jpg" alt="Filme de Ação 2">
            <h3>Filme de Ação 2</h3>
        </div>
        <div class="carousel-movie">
            <img src="img/cartaz.jpg" alt="Filme de Comédia 2">
            <h3>Filme de Comédia 2</h3>
        </div>
        <div class="carousel-movie">
            <img src="img/cartaz.jpg" alt="Filme de Ficção Científica 2">
            <h3>Filme de Ficção Científica 2</h3>
        </div>
        <div class="carousel-movie">
            <img src="img/cartaz.jpg" alt="Filme de Terror 2">
            <h3>Filme de Terror 2</h3>
        </div>
        <!-- Adicione mais filmes em destaque aqui -->
        <div class="carousel-movie">
            <img src="img/cartaz.jpg" alt="Filme de Ação 3">
            <h3>Filme de Ação 3</h3>
        </div>
        <div class="carousel-movie">
            <img src="img/cartaz.jpg" alt="Filme de Comédia 3">
            <h3>Filme de Comédia 3</h3>
        </div>
        <div class="carousel-movie">
            <img src="img/cartaz.jpg" alt="Filme de Ficção Científica 3">
            <h3>Filme de Ficção Científica 3</h3>
        </div>
        <div class="carousel-movie">
            <img src="img/cartaz.jpg" alt="Filme de Terror 3">
            <h3>Filme de Terror 3</h3>
        </div>
        <!-- Adicione mais filmes em destaque aqui -->
    </div>
</div>


    <?php
    $moviesByGenre = [
        'Ação' => [
            [
                'title' => 'Missão Impossível: Efeito Fallout',
                'description' => 'Ethan Hunt e sua equipe precisam recuperar ogivas nucleares roubadas antes que elas caiam nas mãos erradas.',
                'video_url' => 'https://exemplo.com/acao1.mp4',
            ],
            [
                'title' => 'John Wick 3: Parabellum',
                'description' => 'John Wick está sendo caçado após matar um membro da Alta Cúpula, e agora precisa lutar por sua sobrevivência.',
                'video_url' => 'https://exemplo.com/acao2.mp4',
            ],
            [
                'title' => 'Velozes e Furiosos 9',
                'description' => 'Dominic Toretto e sua equipe enfrentam um novo inimigo que possui habilidades de piloto excepcionais.',
                'video_url' => 'https://exemplo.com/acao3.mp4',
            ],
            [
                'title' => 'Duro de Matar',
                'description' => 'O policial John McClane enfrenta terroristas em um prédio de escritórios durante o Natal.',
                'video_url' => 'https://exemplo.com/acao4.mp4',
            ],
            [
                'title' => 'Mad Max: Estrada da Fúria',
                'description' => 'Em um mundo pós-apocalíptico, Max se une a Furiosa para escapar de um tirano e seu exército.',
                'video_url' => 'https://exemplo.com/acao5.mp4',
            ],
            [
                'title' => 'Gladiador',
                'description' => 'Um ex-general romano busca vingança contra o imperador corrupto que assassinou sua família e o banhou de escravidão.',
                'video_url' => 'https://exemplo.com/acao6.mp4',
            ],
            [
                'title' => 'Matrix',
                'description' => 'Um hacker descobre que a realidade em que vive é uma simulação controlada por máquinas inteligentes.',
                'video_url' => 'https://exemplo.com/acao7.mp4',
            ],
            [
                'title' => 'Homem de Ferro',
                'description' => 'O bilionário Tony Stark constrói uma armadura para se tornar o super-herói Homem de Ferro.',
                'video_url' => 'https://exemplo.com/acao8.mp4',
            ],
            [
                'title' => 'Vingadores: Ultimato',
                'description' => 'Os Vingadores se unem para derrotar o vilão Thanos e restaurar metade da população do universo.',
                'video_url' => 'https://exemplo.com/acao9.mp4',
            ],
            [
                'title' => 'Pantera Negra',
                'description' => 'Challa retorna a Wakanda para assumir o trono, mas enfrenta desafios de inimigos e traições internas.',
                'video_url' => 'https://exemplo.com/acao10.mp4',
            ],
            // Adicione mais filmes de Ação aqui
        ],
        'Comédia' => [
            [
                'title' => 'Deadpool',
                'description' => 'Um ex-militar é transformado em um anti-herói com poderes de cura acelerada e um senso de humor sarcástico.',
                'video_url' => 'https://exemplo.com/comedia1.mp4',
            ],
            [
                'title' => 'Meu Malvado Favorito',
                'description' => 'Um vilão em busca de um novo plano maligno adota três irmãs órfãs e acaba se apegando a elas.',
                'video_url' => 'https://exemplo.com/comedia2.mp4',
            ],
            [
                'title' => 'Superbad',
                'description' => 'Dois amigos inseparáveis embarcam em uma aventura épica para comprar bebidas alcóolicas para uma festa.',
                'video_url' => 'https://exemplo.com/comedia3.mp4',
            ],
            [
                'title' => 'Se Beber, Não Case!',
                'description' => 'Um grupo de amigos acorda em Las Vegas com uma ressaca terrível e sem memória do que aconteceu na noite anterior.',
                'video_url' => 'https://exemplo.com/comedia4.mp4',
            ],
            [
                'title' => 'Escola de Rock',
                'description' => 'Um músico desempregado se passa por professor substituto em uma escola e forma uma banda com os alunos.',
                'video_url' => 'https://exemplo.com/comedia5.mp4',
            ],
            [
                'title' => 'O Pai da Noiva',
                'description' => 'Um pai lida com o estresse de planejar o casamento de sua filha e a relação com o genro.',
                'video_url' => 'https://exemplo.com/comedia6.mp4',
            ],
            [
                'title' => 'Meninas Malvadas',
                'description' => 'Uma adolescente se infiltra em um grupo popular na escola para derrubar a líder das meninas malvadas.',
                'video_url' => 'https://exemplo.com/comedia7.mp4',
            ],
            [
                'title' => 'Superbad',
                'description' => 'Dois amigos inseparáveis embarcam em uma aventura épica para comprar bebidas alcóolicas para uma festa.',
                'video_url' => 'https://exemplo.com/comedia8.mp4',
            ],
            [
                'title' => 'Noiva em Fuga',
                'description' => 'Uma jovem escapa repetidamente de casamentos até que um jornalista a descobre.',
                'video_url' => 'https://exemplo.com/comedia9.mp4',
            ],
            [
                'title' => 'Corra!',
                'description' => 'Um homem negro visita a família de sua namorada branca e descobre segredos perturbadores.',
                'video_url' => 'https://exemplo.com/comedia10.mp4',
            ],
        ],
        'Drama' => [
            [
                'title' => 'Clube da Luta',
                'description' => 'Um homem entediado e desiludido com a vida cria um clube de luta clandestino que se torna um movimento destrutivo.',
                'video_url' => 'https://exemplo.com/drama1.mp4',
            ],
            [
                'title' => 'O Lobo de Wall Street',
                'description' => 'A história real de Jordan Belfort, um corretor de ações que se envolve em fraudes financeiras e excessos no mercado.',
                'video_url' => 'https://exemplo.com/drama2.mp4',
            ],
            [
                'title' => 'A Lista de Schindler',
                'description' => 'A história de Oskar Schindler, um homem que salvou a vida de mais de mil refugiados judeus durante o Holocausto.',
                'video_url' => 'https://exemplo.com/drama3.mp4',
            ],
            [
                'title' => 'Forrest Gump',
                'description' => 'A vida de Forrest Gump é uma série de eventos extraordinários que o levam a cruzar caminhos com figuras históricas.',
                'video_url' => 'https://exemplo.com/drama4.mp4',
            ],
            [
                'title' => 'O Pianista',
                'description' => 'A história real de um pianista judeu polonês que sobrevive ao Holocausto em Varsóvia.',
                'video_url' => 'https://exemplo.com/drama5.mp4',
            ],
            [
                'title' => 'La La Land: Cantando Estações',
                'description' => 'Um pianista de jazz e uma atriz se apaixonam enquanto tentam seguir seus sonhos em Los Angeles.',
                'video_url' => 'https://exemplo.com/drama6.mp4',
            ],
            [
                'title' => 'À Espera de um Milagre',
                'description' => 'Um guarda da prisão descobre que um prisioneiro condenado à morte possui poderes sobrenaturais.',
                'video_url' => 'https://exemplo.com/drama7.mp4',
            ],
            [
                'title' => 'O Discurso do Rei',
                'description' => 'A história do rei George VI, que supera sua gagueira com a ajuda de um terapeuta da fala.',
                'video_url' => 'https://exemplo.com/drama8.mp4',
            ],
            [
                'title' => 'Nasce uma Estrela',
                'description' => 'Um músico alcoólatra ajuda uma jovem cantora a alcançar a fama, mas sua relação é testada pelo sucesso.',
                'video_url' => 'https://exemplo.com/drama9.mp4',
            ],
            [
                'title' => 'Cidade de Deus',
                'description' => 'A vida de dois amigos em uma favela do Rio de Janeiro se desenrola em meio à violência e ao tráfico de drogas.',
                'video_url' => 'https://exemplo.com/drama10.mp4',
            ],
        ],
        'Ficção Científica' => [
            [
                'title' => 'Interestelar',
                'description' => 'Um grupo de exploradores viaja pelo espaço em busca de um novo planeta habitável para a sobrevivência da humanidade.',
                'video_url' => 'https://exemplo.com/ficcao1.mp4',
            ],
            [
                'title' => 'Blade Runner 2049',
                'description' => 'Um policial descobre um segredo que ameaça a ordem estabelecida e embarca em uma jornada para desvendar a verdade.',
                'video_url' => 'https://exemplo.com/ficcao2.mp4',
            ],
            [
                'title' => 'Matrix',
                'description' => 'Um hacker descobre que a realidade em que vive é uma simulação controlada por máquinas inteligentes.',
                'video_url' => 'https://exemplo.com/ficcao3.mp4',
            ],
            [
                'title' => 'O Quinto Elemento',
                'description' => 'Em um futuro distante, um taxista se envolve em uma missão para salvar o mundo com a ajuda de um ser misterioso.',
                'video_url' => 'https://exemplo.com/ficcao4.mp4',
            ],
            [
                'title' => 'Elysium',
                'description' => 'No futuro, um homem luta para chegar a uma estação espacial de luxo que oferece cura médica exclusiva para os ricos.',
                'video_url' => 'https://exemplo.com/ficcao5.mp4',
            ],
            [
                'title' => 'A Origem',
                'description' => 'Um ladrão habilidoso entra nos sonhos das pessoas para roubar informações valiosas.',
                'video_url' => 'https://exemplo.com/ficcao6.mp4',
            ],
            [
                'title' => 'Encontro Marcado',
                'description' => 'Dois estranhos se encontram em um evento sobrenatural que determina o destino deles.',
                'video_url' => 'https://exemplo.com/ficcao7.mp4',
            ],
            [
                'title' => 'O Décimo Terceiro Andar',
                'description' => 'Um homem descobre que sua realidade não é o que parece quando investiga um crime no décimo terceiro andar de um prédio.',
                'video_url' => 'https://exemplo.com/ficcao8.mp4',
            ],
            [
                'title' => 'A Chegada',
                'description' => 'Uma linguista é chamada para decifrar a linguagem de extraterrestres que chegaram à Terra.',
                'video_url' => 'https://exemplo.com/ficcao9.mp4',
            ],
            [
                'title' => 'Guerra Mundial Z',
                'description' => 'Um ex-investigador da ONU é chamado para ajudar a enfrentar uma pandemia global de zumbis.',
                'video_url' => 'https://exemplo.com/ficcao10.mp4',
            ],
        ],
        'Terror' => [
            [
                'title' => 'O Exorcista',
                'description' => 'Uma mãe busca ajuda de padres para salvar sua filha possuída por uma entidade demoníaca.',
                'video_url' => 'https://exemplo.com/terror1.mp4',
            ],
            [
                'title' => 'Invocação do Mal',
                'description' => 'Um casal de investigadores paranormais é chamado para ajudar uma família aterrorizada por uma presença maligna em sua casa.',
                'video_url' => 'https://exemplo.com/terror2.mp4',
            ],
            [
                'title' => 'Hereditário',
                'description' => 'Uma família começa a descobrir segredos sombrios e aterradores sobre sua linhagem após a morte da avó.',
                'video_url' => 'https://exemplo.com/terror3.mp4',
            ],
            [
                'title' => 'O Iluminado',
                'description' => 'Um escritor aceita um emprego como zelador em um hotel isolado durante o inverno e enlouquece lentamente.',
                'video_url' => 'https://exemplo.com/terror4.mp4',
            ],
            [
                'title' => 'Atividade Paranormal',
                'description' => 'Um casal começa a documentar atividades paranormais em sua casa, o que leva a eventos cada vez mais perturbadores.',
                'video_url' => 'https://exemplo.com/terror5.mp4',
            ],
            [
                'title' => 'Corra!',
                'description' => 'Um homem negro visita a família de sua namorada branca e descobre segredos perturbadores.',
                'video_url' => 'https://exemplo.com/terror6.mp4',
            ],
            [
                'title' => 'Invocação do Mal 2',
                'description' => 'Os investigadores paranormais Ed e Lorraine Warren enfrentam uma nova ameaça sobrenatural na Inglaterra.',
                'video_url' => 'https://exemplo.com/terror7.mp4',
            ],
            [
                'title' => 'Hereditário',
                'description' => 'Uma família começa a descobrir segredos sombrios e aterradores sobre sua linhagem após a morte da avó.',
                'video_url' => 'https://exemplo.com/terror8.mp4',
            ],
            [
                'title' => 'O Chamado',
                'description' => 'Uma jornalista investiga uma fita de vídeo amaldiçoada que supostamente causa a morte de quem a assiste em sete dias.',
                'video_url' => 'https://exemplo.com/terror9.mp4',
            ],
            [
                'title' => 'O Sexto Sentido',
                'description' => 'Um psicólogo infantil trata um menino que afirma ver pessoas mortas, levando a descobertas surpreendentes.',
                'video_url' => 'https://exemplo.com/terror10.mp4',
            ],
        ],
        'Romance' => [
            [
                'title' => 'Titanic',
                'description' => 'Um romance épico entre um jovem aventureiro e uma bela aristocrata a bordo do navio Titanic.',
                'video_url' => 'https://exemplo.com/romance1.mp4',
            ],
            [
                'title' => 'Orgulho e Preconceito',
                'description' => 'As vidas de cinco irmãs são viradas de cabeça para baixo quando um jovem rico e solteiro se muda para o bairro.',
                'video_url' => 'https://exemplo.com/romance2.mp4',
            ],
            [
                'title' => 'Amor à Segunda Vista',
                'description' => 'Um casal se separa e, anos depois, tem a chance de se apaixonar novamente graças a um encontro mágico.',
                'video_url' => 'https://exemplo.com/romance3.mp4',
            ],
            [
                'title' => 'Diário de Uma Paixão',
                'description' => 'Um homem idoso lê para uma mulher com Alzheimer a história de amor deles, que ela esqueceu.',
                'video_url' => 'https://exemplo.com/romance4.mp4',
            ],
            [
                'title' => '500 Dias com Ela',
                'description' => 'A história de um relacionamento contada em ordem não linear, mostrando altos e baixos do amor.',
                'video_url' => 'https://exemplo.com/romance5.mp4',
            ],
            [
                'title' => 'Um Amor para Recordar',
                'description' => 'Um adolescente rebelde se apaixona por uma garota religiosa com um segredo comovente.',
                'video_url' => 'https://exemplo.com/romance6.mp4',
            ],
            [
                'title' => 'La La Land: Cantando Estações',
                'description' => 'Um pianista de jazz e uma atriz se apaixonam enquanto tentam seguir seus sonhos em Los Angeles.',
                'video_url' => 'https://exemplo.com/romance7.mp4',
            ],
            [
                'title' => 'Amor à Primeira Vista',
                'description' => 'Um casal tem um encontro mágico e passa uma noite inesquecível juntos, mas depois se perde de vista.',
                'video_url' => 'https://exemplo.com/romance8.mp4',
            ],
            [
                'title' => 'Para Sempre',
                'description' => 'Um casal enfrenta desafios extraordinários quando o marido sofre um acidente e perde a memória recente.',
                'video_url' => 'https://exemplo.com/romance9.mp4',
            ],
            [
                'title' => 'Simplesmente Acontece',
                'description' => 'A vida de dois amigos de infância se desenrola enquanto eles seguem caminhos diferentes, mas o destino continua os unindo.',
                'video_url' => 'https://exemplo.com/romance10.mp4',
            ],
        ],
    ];
    

    $selectedGenre = isset($_GET['genre']) ? $_GET['genre'] : '';

    echo '<h2>Gênero selecionado: ' . ($selectedGenre ? $selectedGenre : 'Nenhum') . '</h2>';

    if ($selectedGenre && isset($moviesByGenre[$selectedGenre])) {
        echo '<h1>Filmes de ' . $selectedGenre . '</h1>';

        foreach ($moviesByGenre[$selectedGenre] as $movie) {
            echo '<div class="streaming-card">';
            echo '<h3>' . $movie['title'] . '</h3>';
            echo '<p>' . $movie['description'] . '</p>';
            echo '<video controls><source src="' . $movie['video_url'] . '" type="video/mp4"></video>';
            echo '</div>';
        }
    } else {
        echo '<h1>Todos os Filmes</h1>';

        foreach ($moviesByGenre as $genre => $movies) {
            echo '<h2>Filmes de ' . $genre . '</h2>';

            foreach ($movies as $movie) {
                echo '<div class="streaming-card">';
                echo '<h3>' . $movie['title'] . '</h3>';
                echo '<p>' . $movie['description'] . '</p>';
                echo '<video controls><source src="' . $movie['video_url'] . '" type="video/mp4"></video>';
                echo '</div>';
            }
        }
    }
    ?>

</div>

    </main>

    <footer>
        <div class="footer-content">
            <div class="footer-links">
                <a href="Sobre.php">Sobre</a>
                <a href="Privacidade.php">Privacidade</a>
                <a href="Termos.php">Termos de Serviço</a>
            </div>
            <div class="footer-social">
                <a href="https://facebook.com/estacio"><img src="img/facebook.png" alt="Facebook"></a>
                <a href="https://twitter.com/estacio"><img src="img/x-logo.png" alt="Twitter"></a>
                <a href="https://instagram.com/estacio"><img src="img/instagram.png" alt="Instagram"></a>
            </div>
        </div>
    </footer>

    <script>
        // JavaScript para controle do carrossel
        let currentSlide = 0;
        const slides = document.querySelectorAll('.carousel-item');
        const totalSlides = slides.length;

        document.addEventListener('DOMContentLoaded', () => {
            showSlide(currentSlide);
            setInterval(() => {
                currentSlide = (currentSlide + 1) % totalSlides;
                showSlide(currentSlide);
            }, 3000);
        });

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.style.display = i === index ? 'block' : 'none';
            });
        }
// MODO CLARO/ESCURO
        document.addEventListener("DOMContentLoaded", function() {
    const toggleThemeButton = document.querySelector(".toggle-theme");
    const body = document.body;

    // Verificar o tema salvo no localStorage
    const savedTheme = localStorage.getItem("theme");
    if (savedTheme) {
        body.classList.add(savedTheme);
    }

    toggleThemeButton.addEventListener("click", function() {
        body.classList.toggle("light-mode");
        
        // Adicionar classe de rotação ao ícone
        toggleThemeButton.classList.add("rotate");
        
        // Remover a classe de rotação após a animação
        setTimeout(() => {
            toggleThemeButton.classList.remove("rotate");
        }, 500);
        
        // Salvar o tema atual no localStorage
        if (body.classList.contains("light-mode")) {
            localStorage.setItem("theme", "light-mode");
        } else {
            localStorage.removeItem("theme");
        }
    });
});
function updateLanguage(language) {
        window.location.href = window.location.pathname + '?lang=' + language;
    }

    // Executar a atualização do idioma ao carregar a página
    document.addEventListener('DOMContentLoaded', function() {
        var selectedLanguage = '<?php echo isset($_GET['lang']) ? $_GET['lang'] : 'Português'; ?>';
        document.getElementById('selectedLanguage').innerText = selectedLanguage;
    });

    </script>
</body>
</html>
