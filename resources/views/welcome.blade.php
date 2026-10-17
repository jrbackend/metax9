<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golaço FC | O Seu Blog de Futebol</title>
    <style>
        /* RESET E DEFINIÇÕES GERAIS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f4f6f4;
            color: #333;
            line-height: 1.6;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        /* CABEÇALHO (HEADER) */
        header {
            background-color: #1b4332; /* Verde Escuro */
            color: #fff;
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .header-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }

        .logo h1 {
            font-size: 1.8rem;
            font-weight: 800;
        }

        .logo span {
            color: #52b788; /* Verde Claro */
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li {
            margin-left: 20px;
        }

        nav ul li a {
            font-weight: 600;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: #52b788;
        }

        /* CONTEÚDO PRINCIPAL (LAYOUT) */
        .main-container {
            max-width: 1200px;
            margin: 30px auto;
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 30px;
            padding: 0 20px;
        }

        /* SEÇÃO DE POSTS */
        .posts-section {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .post-card {
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            transition: transform 0.3s;
        }

        .post-card:hover {
            transform: translateY(-5px);
        }

        .post-thumb {
            width: 100%;
            height: 350px;
            background-color: #2d6a4f;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
            font-weight: bold;
        }

        /* Cores simuladas para as imagens de demonstração */
        .thumb1 { background: linear-gradient(135deg, #1b4332, #40916c); }
        .thumb2 { background: linear-gradient(135deg, #2d6a4f, #52b788); }

        .post-content {
            padding: 25px;
        }

        .post-category {
            font-size: 0.8rem;
            text-transform: uppercase;
            color: #52b788;
            font-weight: 700;
            letter-spacing: 1px;
        }

        .post-title {
            font-size: 1.6rem;
            margin: 10px 0;
            color: #1b4332;
        }

        .post-meta {
            font-size: 0.85rem;
            color: #777;
            margin-bottom: 15px;
        }

        .post-excerpt {
            color: #555;
            margin-bottom: 20px;
        }

        .read-more-btn {
            display: inline-block;
            background-color: #1b4332;
            color: #fff;
            padding: 10px 20px;
            border-radius: 4px;
            font-weight: 600;
            transition: background 0.3s;
        }

        .read-more-btn:hover {
            background-color: #2d6a4f;
        }

        /* BARRA LATERAL (SIDEBAR) */
        aside {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .sidebar-widget {
            background-color: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        }

        .widget-title {
            font-size: 1.2rem;
            color: #1b4332;
            border-bottom: 3px solid #52b788;
            padding-bottom: 8px;
            margin-bottom: 15px;
        }

        .about-box p {
            font-size: 0.95rem;
            color: #555;
        }

        .ranking-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.95rem;
        }

        .ranking-table th, .ranking-table td {
            padding: 10px;
            text-align: left;
        }

        .ranking-table th {
            background-color: #f4f6f4;
            color: #1b4332;
        }

        .ranking-table tr:not(:last-child) {
            border-bottom: 1px solid #eee;
        }

        /* RODAPÉ (FOOTER) */
        footer {
            background-color: #112a1f;
            color: #aaa;
            text-align: center;
            padding: 20px 0;
            margin-top: 50px;
            font-size: 0.9rem;
        }

        /* RESPONSIVIDADE */
        @media (max-width: 768px) {
            .main-container {
                grid-template-columns: 1fr;
            }

            .header-container {
                flex-direction: column;
                gap: 15px;
            }

            nav ul li {
                margin: 0 10px;
            }

            .post-thumb {
                height: 200px;
            }
        }
    </style>
</head>
<body>

<!-- CABEÇALHO -->
<header>
    <div class="header-container">
        <div class="logo">
            <a href="#"><h1>Golaço<span>FC</span></h1></a>
        </div>
        <nav>
            <ul>
                <li><a href="#">Início</a></li>
                <li><a href="#">Notícias</a></li>
                <li><a href="#">Análises</a></li>
                <li><a href="#">Tabelas</a></li>
            </ul>
        </nav>
    </div>
</header>

<!-- CONTAINER PRINCIPAL -->
<div class="main-container">

    <!-- SEÇÃO DOS POSTS -->
    <main class="posts-section">

        <!-- POST 1 -->
        <article class="post-card">
            <div class="post-thumb thumb1">
                [ Imagem: Grande Final da Temporada ]
            </div>
            <div class="post-content">
                <span class="post-category">Análise Tática</span>
                <h2 class="post-title"><a href="#">Como o esquema 4-3-3 dominou o campeonato este ano</a></h2>
                <div class="post-meta">Por Carlos Silva | Postado em 17 de Outubro, 2026</div>
                <p class="post-excerpt">Dissecamos a movimentação tática dos finalistas e como a rápida transição ofensiva pelas pontas quebrou as defesas mais sólidas da temporada.</p>
                <a href="#" class="read-more-btn">Ler mais</a>
            </div>
        </article>

        <!-- POST 2 -->
        <article class="post-card">
            <div class="post-thumb thumb2">
                [ Imagem: Mercado da Bola ]
            </div>
            <div class="post-content">
                <span class="post-category">Mercado da Bola</span>
                <h2 class="post-title"><a href="#">Janela de Transferências: As 5 maiores promessas para ficar de olho</a></h2>
                <div class="post-meta">Por Amanda Costa | Postado em 16 de Outubro, 2026</div>
                <p class="post-excerpt">Os clubes europeus e sul-americanos já se movimentam nos bastidores. Separamos os jovens talentos que devem agitar o mercado global em breve.</p>
                <a href="#" class="read-more-btn">Ler mais</a>
            </div>
        </article>

    </main>

    <!-- BARRA LATERAL -->
    <aside>

        <!-- SOBRE O BLOG -->
        <div class="sidebar-widget about-box">
            <h3 class="widget-title">Sobre o Golaço FC</h3>
            <p>Sua dose diária de futebol! Trazemos análises táticas aprofundadas, as últimas notícias do mercado de transferências, resumos de rodadas e tudo sobre o esporte mais amado do mundo.</p>
        </div>

        <!-- TABELA SIMULADA -->
        <div class="sidebar-widget">
            <h3 class="widget-title">Classificação Geral</h3>
            <table class="ranking-table">
                <thead>
                <tr>
                    <th>Pos</th>
                    <th>Clube</th>
                    <th>Pts</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1º</td>
                    <td><strong>Verde FC</strong></td>
                    <td>68</td>
                </tr>
                <tr>
                    <td>2º</td>
                    <td>Atlético Real</td>
                    <td>64</td>
                </tr>
                <tr>
                    <td>3º</td>
                    <td>União Esporte</td>
                    <td>61</td>
                </tr>
                <tr>
                    <td>4º</td>
                    <td>Esporte F.C.</td>
                    <td>58</td>
                </tr>
                </tbody>
            </table>
        </div>

    </aside>

</div>

<!-- RODAPÉ -->
<footer>
    <p>&copy; 2026 Golaço FC Blog de Futebol. Todos os direitos reservados.</p>
</footer>

</body>
</html>
