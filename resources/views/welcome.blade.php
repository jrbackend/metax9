<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabores da Casa | Blog de Culinária</title>
    <style>
        /* Reset e Variáveis */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        :root {
            --primary-color: #e65c00;
            --secondary-color: #f9f9f9;
            --text-color: #333;
            --light-text: #666;
            --border-color: #eee;
        }

        body {
            background-color: #fcfcfc;
            color: var(--text-color);
            line-height: 1.6;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        /* Header */
        header {
            background: #fff;
            border-bottom: 1px solid var(--border-color);
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        .header-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
        }
        .logo {
            font-size: 24px;
            font-weight: bold;
            color: var(--primary-color);
        }
        nav ul {
            display: flex;
            list-style: none;
            gap: 20px;
        }
        nav a:hover {
            color: var(--primary-color);
        }

        /* Container Principal */
        .main-container {
            max-width: 1200px;
            margin: 30px auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: 3fr 1fr;
            gap: 40px;
        }

        /* Destaque (Hero) */
        .featured-post {
            grid-column: 1 / -1;
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            display: grid;
            grid-template-columns: 1.2fr 1fr;
        }
        .featured-img {
            background: #ddd url('https://unsplash.com') center/cover;
            min-height: 350px;
        }
        .featured-content {
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .category {
            text-transform: uppercase;
            font-size: 12px;
            font-weight: bold;
            color: var(--primary-color);
            letter-spacing: 1px;
            margin-bottom: 10px;
        }
        .featured-content h2 {
            font-size: 28px;
            margin-bottom: 15px;
            line-height: 1.2;
        }
        .btn {
            display: inline-block;
            background: var(--primary-color);
            color: #fff;
            padding: 10px 20px;
            border-radius: 4px;
            margin-top: 20px;
            align-self: flex-start;
            font-weight: 500;
            transition: background 0.2s;
        }
        .btn:hover {
            background: #cc5200;
        }

        /* Grade de Receitas */
        .posts-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 30px;
        }
        .post-card {
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
            transition: transform 0.2s;
        }
        .post-card:hover {
            transform: translateY(-5px);
        }
        .post-img {
            height: 200px;
            background-size: cover;
            background-position: center;
        }

        /* Imagens mockadas para os cards secundários */
        .img-1 { background-image: url('https://unsplash.com'); }
        .img-2 { background-image: url('https://unsplash.com'); }
        .img-3 { background-image: url('https://unsplash.com'); }

        .post-content {
            padding: 20px;
        }
        .post-content h3 {
            font-size: 18px;
            margin: 10px 0;
            line-height: 1.3;
        }
        .post-meta {
            font-size: 12px;
            color: var(--light-text);
        }

        /* Barra Lateral (Sidebar) */
        sidebar {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }
        .widget {
            background: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }
        .widget h4 {
            border-bottom: 2px solid var(--primary-color);
            padding-bottom: 8px;
            margin-bottom: 15px;
            text-transform: uppercase;
            font-size: 14px;
            letter-spacing: 0.5px;
        }
        .about-author img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
        }
        .about-author {
            text-align: center;
        }

        /* Rodapé */
        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 30px 20px;
            margin-top: 50px;
            font-size: 14px;
        }

        /* Responsividade */
        @media (max-width: 900px) {
            .main-container {
                grid-template-columns: 1fr;
            }
            .featured-post {
                grid-template-columns: 1fr;
            }
            .featured-img {
                min-height: 250px;
            }
        }
    </style>
</head>
<body>

<!-- Topo / Navegação -->
<header>
    <div class="header-container">
        <div class="logo">🍳 Sabores da Casa</div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Receitas</a></li>
                <li><a href="#">Doces</a></li>
                <li><a href="#">Saudável</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </nav>
    </div>
</header>

<!-- Conteúdo Principal -->
<div class="main-container">

    <!-- Post em Destaque -->
    <article class="featured-post">
        <div class="featured-img"></div>
        <div class="featured-content">
            <span class="category">Prato Principal</span>
            <h2>Salada de Salmão Grelhado com Molho Especial de Ervas</h2>
            <p>Uma opção leve, refrescante e cheia de sabor para o seu almoço de verão. Aprenda o ponto perfeito do salmão.</p>
            <a href="#" class="btn">Ver Receita</a>
        </div>
    </article>

    <!-- Listagem de Posts à Esquerda -->
    <main>
        <h2 style="margin-bottom: 20px; font-size: 22px;">Últimas Receitas</h2>
        <div class="posts-grid">

            <!-- Card 1 -->
            <article class="post-card">
                <div class="post-img img-1"></div>
                <div class="post-content">
                    <span class="category">Massas</span>
                    <h3>Pizza Artesanal de Longa Fermentação</h3>
                    <p class="post-meta">Por Amanda Silva • 2 dias atrás</p>
                </div>
            </article>

            <!-- Card 2 -->
            <article class="post-card">
                <div class="post-img img-2"></div>
                <div class="post-content">
                    <span class="category">Sobremesas</span>
                    <h3>Waffles de Aveia com Frutas Vermelhas</h3>
                    <p class="post-meta">Por Amanda Silva • 4 dias atrás</p>
                </div>
            </article>

            <!-- Card 3 -->
            <article class="post-card">
                <div class="post-img img-3"></div>
                <div class="post-content">
                    <span class="category">Vegetariano</span>
                    <h3>Espaguete de Abobrinha ao Molho Pesto</h3>
                    <p class="post-meta">Por Amanda Silva • 1 semana atrás</p>
                </div>
            </article>

        </div>
    </main>

    <!-- Barra Lateral à Direita -->
    <sidebar>
        <!-- Widget Sobre -->
        <div class="widget about-author">
            <h4>Sobre o Chef</h4>
            <img src="https://unsplash.com" alt="Foto do autor">
            <p>Oi! Sou a Amanda. Engenheira de formação e cozinheira de coração. Compartilho aqui minhas melhores receitas práticas.</p>
        </div>

        <!-- Widget Newsletter -->
        <div class="widget">
            <h4>Novidades por E-mail</h4>
            <p style="font-size: 14px; margin-bottom: 15px;">Receba receitas inéditas diretamente na sua caixa de entrada.</p>
            <input type="email" placeholder="Seu melhor e-mail" style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid var(--border-color); border-radius: 4px;">
            <button class="btn" style="width: 100%; margin-top: 0; cursor: pointer;">Inscrever-se</button>
        </div>
    </sidebar>

</div>

<!-- Rodapé -->
<footer>
    <p>&copy; 2026 Sabores da Casa. Todos os direitos reservados.</p>
</footer>

</body>