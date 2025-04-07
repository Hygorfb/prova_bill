<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evento ETech 2026</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>   
        <h1>Evento ETech 2026</h1>
    </header>
    <nav id="navbar">
        <a class="link" href="#titulo-1">Nome</a> 
        <a class="link" href="#titulo-2">Data</a>
        <a class="link" href="#titulo-3">Local</a>
        <a class="link" href="#titulo-4">Descrição</a>
        <a class="link" href="#titulo-5">Participantes</a>
    </nav>

    <main id="container">
        <article>
            <h2 id="titulo-1">Nome do Evento</h2>
            <p id="nome">Evento ETech 2026</p>
        </article>   
        <article>
            <h2 id="titulo-2">Data do Evento</h2>
            <p>13/04/2026 à 10/10/2026</p>
        </article>    
        <article>
            <h2 id="titulo-3">Local do Evento</h2>
            <p>O evento sera realizado no Teatro Capitólio em Varginha-MG</p>
        </article>   
        <article>
            <h2 id="titulo-4">Descrição do Evento</h2>
            <p>O Evento ETech 2026 é um encontro inovador que reúne tecnologia, inovação e conhecimento em um só lugar. Voltado para estudantes, profissionais e entusiastas da área, o evento oferece palestras, workshops e exposições sobre as tendências que estão moldando o futuro da tecnologia.</p>
        </article> 

        <section>
            <h2 id="titulo-5">Palestrantes do Evento</h2>
            <ul class="lista">
                <?php
                    $palestrantes = [
                        ["nome" => "Letícia Rabelo", "confirmado" => true],
                        ["nome" => "Iris Ohana", "confirmado" => false],
                        ["nome" => "Pedro Bernardes", "confirmado" => false],
                        ["nome" => "Mateus Machado", "confirmado" => true]       
                    ];

                    foreach ($palestrantes as $palestrante){
                    if ($palestrante["confirmado"]) {
                        echo "<li class='lista'>{$palestrante["nome"]}</li>";
                    } else {
                        echo "<li class='lista'>{$palestrante["nome"]} <span id='false'>Em Breve!</span></li>";
                        }
                    }
                ?>
        </section>    
    </main>
    <br>
    <br>
    <footer>
        <h3>Nossos Contatos:</h3>
        (35) 4002-8922
        <p>Copyright © 2026 – Todos os Direitos Reservados</p>
    </footer>
</body>
</html>