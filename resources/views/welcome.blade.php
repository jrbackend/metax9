<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title>Forma Untada — Receitas de bolo caseiro</title>
    <meta name="description" content="Receitas de bolo caseiro testadas, com ingredientes simples, tempo de forno e dicas para dar certo.">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Forma Untada — Receitas de bolo caseiro">
    <meta property="og:description" content="Receitas de bolo caseiro testadas, com ingredientes simples, tempo de forno e dicas para dar certo.">
    <meta property="og:locale" content="pt_BR">
    <meta name="referrer" content="no-referrer">
    <link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Ctext y='.9em' font-size='90'%3E%F0%9F%8E%82%3C/text%3E%3C/svg%3E">
    <style>
        :root{
            --bg:#fde9ef; --cocoa:#3a1d19; --berry:#c2185b; --pistachio:#cfe4bd; --butter:#ffe08a;
            --card:#fffafc; --muted:#6e4a4a; --line:#f0c5d3;
            --display:"Arial Rounded MT Bold","Nunito","Varela Round",ui-rounded,system-ui,sans-serif;
            --body:Georgia,"Iowan Old Style","Palatino Linotype",serif;
            --ui:system-ui,-apple-system,"Segoe UI",Roboto,sans-serif;
            box-sizing:border-box;
            padding-top:env(safe-area-inset-top,0px); padding-bottom:env(safe-area-inset-bottom,0px);
        }
        @media (prefers-color-scheme:dark){
            :root:not([data-theme="light"]){
                --bg:#2a1620; --cocoa:#fbe9ee; --berry:#ff7aa8; --pistachio:#35503a; --butter:#6b5516;
                --card:#391f2b; --muted:#d8b3bf; --line:#5a3345;
            }
        }
        html{scroll-padding-top:env(safe-area-inset-top,0px);scroll-behavior:smooth}
        *,*::before,*::after{box-sizing:inherit}
        body{margin:0;background:var(--bg);color:var(--cocoa);font-family:var(--body);font-size:1.1rem;line-height:1.7}
        a{color:inherit}
        :focus-visible{outline:3px solid var(--berry);outline-offset:3px}
        .wrap{max-width:1060px;margin:0 auto;padding:0 1.25rem}

        header.site{display:flex;justify-content:space-between;align-items:center;gap:1rem;flex-wrap:wrap;padding:1.1rem 0}
        .brand{font-family:var(--display);font-size:1.6rem;text-decoration:none;color:var(--berry)}
        nav{display:flex;gap:1.1rem;font-family:var(--ui);font-size:.95rem;flex-wrap:wrap}
        nav a{text-decoration:none;padding:.2rem 0;border-bottom:2px solid transparent}
        nav a:hover{border-bottom-color:var(--berry)}

        /* Hero com bolo desenhado */
        .hero{display:grid;gap:1.5rem;align-items:center;grid-template-columns:1fr;padding:1.5rem 0 3rem}
        @media(min-width:820px){.hero{grid-template-columns:1.15fr .85fr}}
        .hero h1{font-family:var(--display);font-size:clamp(2.2rem,6vw,3.9rem);line-height:1.05;margin:0 0 1rem;font-weight:400;letter-spacing:-.01em}
        .hero p{margin:0 0 1.4rem;max-width:52ch;color:var(--muted);font-size:1.2rem}
        .btn{display:inline-block;background:var(--berry);color:#fff;font-family:var(--ui);font-weight:700;padding:.8rem 1.3rem;border-radius:999px;text-decoration:none}
        .btn:hover{filter:brightness(1.08)}
        .btn.alt{background:transparent;color:var(--cocoa);border:2px solid var(--cocoa);margin-left:.5rem}
        .cake{width:100%;max-width:380px;justify-self:center;height:auto}

        /* Categorias */
        .chips{display:flex;flex-wrap:wrap;gap:.6rem;margin:0 0 3rem;padding:0;list-style:none;font-family:var(--ui)}
        .chips a{display:block;padding:.45rem 1rem;border-radius:999px;background:var(--card);border:1px solid var(--line);text-decoration:none;font-size:.95rem}
        .chips a:hover{background:var(--butter)}

        h2.sec{font-family:var(--display);font-weight:400;font-size:2rem;margin:0 0 1.25rem}

        /* Cards de receita */
        .recipes{display:grid;gap:1.5rem;grid-template-columns:repeat(auto-fit,minmax(min(100%,240px),1fr));margin-bottom:3.5rem}
        .rcard{background:var(--card);border:1px solid var(--line);border-radius:18px;overflow:hidden;display:flex;flex-direction:column}
        .thumb{height:130px;display:grid;place-items:center;font-size:3.4rem}
        .rcard:nth-child(1) .thumb{background:var(--butter)}
        .rcard:nth-child(2) .thumb{background:var(--pistachio)}
        .rcard:nth-child(3) .thumb{background:#ffc9d8}
        .rcard:nth-child(4) .thumb{background:#e6d3c1}
        @media (prefers-color-scheme:dark){.rcard:nth-child(3) .thumb{background:#6a2d45}.rcard:nth-child(4) .thumb{background:#4d3a2d}}
        .rbody{padding:1.1rem 1.2rem 1.3rem}
        .rbody h3{font-family:var(--display);font-weight:400;font-size:1.3rem;line-height:1.2;margin:0 0 .4rem}
        .rbody p{margin:0 0 .7rem;font-size:1rem;color:var(--muted);line-height:1.55}
        .facts{font-family:var(--ui);font-size:.85rem;display:flex;gap:.9rem;margin:0;padding:0;list-style:none;color:var(--cocoa)}
        .facts li::before{content:"";}

        /* Receita em destaque */
        .feature{background:var(--card);border:2px dashed var(--berry);border-radius:20px;padding:clamp(1.25rem,4vw,2.5rem);margin-bottom:3.5rem}
        .feature h2{font-family:var(--display);font-weight:400;font-size:clamp(1.7rem,4vw,2.4rem);margin:0 0 .4rem}
        .feature .sub{font-family:var(--ui);color:var(--muted);margin:0 0 1.5rem}
        .cols{display:grid;gap:2rem;grid-template-columns:1fr}
        @media(min-width:760px){.cols{grid-template-columns:1fr 1.3fr}}
        .cols h3{font-family:var(--display);font-weight:400;font-size:1.25rem;margin:0 0 .6rem}
        .ing{list-style:none;margin:0 0 1.5rem;padding:0;font-family:var(--ui);font-size:1rem}
        .ing li{padding:.2rem 0}
        .ing label{display:flex;gap:.6rem;align-items:flex-start;cursor:pointer}
        .ing input{margin-top:.35rem;accent-color:var(--berry)}
        .ing input:checked+span{text-decoration:line-through;opacity:.55}
        .steps{margin:0;padding-left:1.3rem}
        .steps li{margin-bottom:.7rem}
        .tip{background:var(--butter);color:#3a1d19;border-radius:12px;padding:.9rem 1.1rem;font-family:var(--ui);font-size:.95rem;margin-top:1rem}

        /* Dicas */
        .tips{display:grid;gap:1rem;grid-template-columns:repeat(auto-fit,minmax(min(100%,230px),1fr));margin-bottom:3.5rem}
        .tips div{padding:1.1rem 1.2rem;border-radius:14px;background:var(--pistachio);font-size:1rem;line-height:1.55}
        .tips b{display:block;font-family:var(--display);font-weight:400;font-size:1.15rem;margin-bottom:.25rem}
        .tips div:nth-child(even){background:var(--butter)}
        .tips div{color:var(--cocoa)}
        @media (prefers-color-scheme:dark){.tips div{color:#fbe9ee}}

        footer{border-top:2px solid var(--line);padding:1.75rem 0 2.5rem;font-family:var(--ui);font-size:.9rem;color:var(--muted)}
        footer h4{font-family:var(--display);font-weight:400;font-size:1.15rem;color:var(--cocoa);margin:0 0 .4rem}
        @media (prefers-reduced-motion:no-preference){
            .cake .candle{animation:flick 1.6s ease-in-out infinite;transform-origin:50% 100%;transform-box:fill-box}
            @keyframes flick{50%{transform:scale(1.15,.9)}}
        }
    </style>
</head>
<body>
<div class="wrap">

    <header class="site">
        <a class="brand" href="#topo">🎂 Forma Untada</a>
        <nav aria-label="Principal">
            <a href="#receitas">Receitas</a>
            <a href="#destaque">Receita do dia</a>
            <a href="#dicas">Dicas</a>
            <a href="#privacidade">Privacidade</a>
        </nav>
    </header>

    <main id="topo">
        <section class="hero" aria-labelledby="titulo">
            <div>
                <h1 id="titulo">Bolo caseiro que cresce, desmancha e dá certo.</h1>
                <p>Receitas com ingredientes de despensa, medidas em xícaras e colheres, e o tempo de forno anotado. Sem enrolação antes de chegar na massa.</p>
                <a class="btn" href="#destaque">Ver a receita do dia</a>
                <a class="btn alt" href="#receitas">Todas as receitas</a>
            </div>
            <svg class="cake" viewBox="0 0 300 300" role="img" aria-label="Desenho de um bolo de três camadas com vela acesa">
                <ellipse cx="150" cy="266" rx="130" ry="16" fill="#c2185b" opacity=".25"/>
                <rect x="40" y="190" width="220" height="70" rx="14" fill="#7a3b2a"/>
                <rect x="62" y="130" width="176" height="62" rx="14" fill="#f7a8c4"/>
                <rect x="86" y="78" width="128" height="54" rx="14" fill="#ffe08a"/>
                <path d="M62 150c14 0 14 14 28 14s14-14 28-14 14 14 28 14 14-14 28-14 14 14 28 14 14-14 28-14v-20H62z" fill="#fffafc"/>
                <path d="M40 206c18 0 18 16 36 16s18-16 36-16 18 16 36 16 18-16 36-16 18 16 36 16 18-16 40-16v-16H40z" fill="#fffafc"/>
                <rect x="143" y="44" width="14" height="36" rx="4" fill="#cfe4bd"/>
                <path class="candle" d="M150 18c10 12 10 20 0 26-10-6-10-14 0-26z" fill="#ff8a3d"/>
                <g fill="#c2185b"><circle cx="110" cy="105" r="4"/><circle cx="150" cy="100" r="4"/><circle cx="190" cy="108" r="4"/><circle cx="100" cy="165" r="4"/><circle cx="200" cy="168" r="4"/></g>
                <g fill="#cfe4bd"><circle cx="128" cy="96" r="3.5"/><circle cx="172" cy="94" r="3.5"/><circle cx="125" cy="160" r="3.5"/><circle cx="176" cy="158" r="3.5"/></g>
            </svg>
        </section>

        <ul class="chips" aria-label="Categorias">
            <li><a href="#receitas">Bolos simples</a></li>
            <li><a href="#receitas">Com cobertura</a></li>
            <li><a href="#receitas">De liquidificador</a></li>
            <li><a href="#receitas">Para o café da tarde</a></li>
            <li><a href="#receitas">Sem glúten</a></li>
        </ul>

        <section id="receitas" aria-labelledby="h-rec">
            <h2 class="sec" id="h-rec">Receitas para fazer hoje</h2>
            <div class="recipes">
                <article class="rcard">
                    <div class="thumb" aria-hidden="true">🥕</div>
                    <div class="rbody">
                        <h3>Bolo de cenoura com cobertura de chocolate</h3>
                        <p>Massa fofinha batida no liquidificador e cobertura que fica brilhante.</p>
                        <ul class="facts"><li>⏱ 1h</li><li>🍰 12 fatias</li><li>Fácil</li></ul>
                    </div>
                </article>
                <article class="rcard">
                    <div class="thumb" aria-hidden="true">🌽</div>
                    <div class="rbody">
                        <h3>Bolo de fubá cremoso</h3>
                        <p>Úmido, com cheiro de café coado e sabor de casa de avó.</p>
                        <ul class="facts"><li>⏱ 50min</li><li>🍰 10 fatias</li><li>Fácil</li></ul>
                    </div>
                </article>
                <article class="rcard">
                    <div class="thumb" aria-hidden="true">🍊</div>
                    <div class="rbody">
                        <h3>Bolo de laranja com casca</h3>
                        <p>Usa a laranja inteira e rende uma massa perfumada e macia.</p>
                        <ul class="facts"><li>⏱ 55min</li><li>🍰 12 fatias</li><li>Fácil</li></ul>
                    </div>
                </article>
                <article class="rcard">
                    <div class="thumb" aria-hidden="true">🍫</div>
                    <div class="rbody">
                        <h3>Bolo de chocolate para festa</h3>
                        <p>Massa firme, boa para rechear e cobrir com brigadeiro.</p>
                        <ul class="facts"><li>⏱ 1h30</li><li>🍰 16 fatias</li><li>Médio</li></ul>
                    </div>
                </article>
            </div>
        </section>

        <section id="destaque" class="feature" aria-labelledby="h-dest">
            <h2 id="h-dest">Receita do dia: bolo de cenoura</h2>
            <p class="sub">Preparo 20 min · Forno 40 min · Rende 12 fatias</p>
            <div class="cols">
                <div>
                    <h3>Massa</h3>
                    <ul class="ing">
                        <li><label><input type="checkbox"><span>3 cenouras médias, descascadas e picadas</span></label></li>
                        <li><label><input type="checkbox"><span>4 ovos</span></label></li>
                        <li><label><input type="checkbox"><span>1/2 xícara (chá) de óleo</span></label></li>
                        <li><label><input type="checkbox"><span>2 xícaras (chá) de açúcar</span></label></li>
                        <li><label><input type="checkbox"><span>2 1/2 xícaras (chá) de farinha de trigo</span></label></li>
                        <li><label><input type="checkbox"><span>1 colher (sopa) de fermento em pó</span></label></li>
                    </ul>
                    <h3>Cobertura</h3>
                    <ul class="ing">
                        <li><label><input type="checkbox"><span>1 colher (sopa) de manteiga</span></label></li>
                        <li><label><input type="checkbox"><span>3 colheres (sopa) de chocolate em pó</span></label></li>
                        <li><label><input type="checkbox"><span>1 xícara (chá) de açúcar</span></label></li>
                        <li><label><input type="checkbox"><span>1/2 xícara (chá) de leite</span></label></li>
                    </ul>
                </div>
                <div>
                    <h3>Modo de preparo</h3>
                    <ol class="steps">
                        <li>Preaqueça o forno a 180 °C e unte uma forma de furo central com manteiga e farinha.</li>
                        <li>No liquidificador, bata as cenouras, os ovos e o óleo até ficar uma mistura lisa.</li>
                        <li>Em uma tigela, misture o açúcar e a farinha. Despeje o líquido e mexa até incorporar.</li>
                        <li>Acrescente o fermento por último e misture com delicadeza.</li>
                        <li>Leve ao forno por cerca de 40 minutos, até o palito sair limpo.</li>
                        <li>Na cobertura, leve todos os ingredientes ao fogo baixo, mexendo, até ferver. Cozinhe por cerca de 3 minutos e despeje sobre o bolo ainda morno.</li>
                    </ol>
                    <div class="tip">Dica: não abra o forno nos primeiros 25 minutos, para o bolo não murchar.</div>
                </div>
            </div>
        </section>

        <section id="dicas" aria-labelledby="h-dicas">
            <h2 class="sec" id="h-dicas">Antes de começar</h2>
            <div class="tips">
                <div><b>Ingredientes em temperatura ambiente</b>Ovos e manteiga frios dificultam a mistura e deixam a massa menos uniforme.</div>
                <div><b>Fermento por último</b>Quanto mais cedo ele entra na massa e é mexido, mais perde força antes de ir ao forno.</div>
                <div><b>Teste do palito</b>Espete o centro do bolo. Se sair com massa crua, devolva ao forno por mais alguns minutos.</div>
                <div><b>Deixe esfriar um pouco</b>Desenformar o bolo muito quente pode quebrá-lo. Espere uns 10 minutos.</div>
            </div>
        </section>
    </main>

    <footer id="privacidade">
        <h4>Privacidade</h4>
        <p>Esta página não usa cookies, não carrega scripts nem fontes de terceiros e não coleta dados de quem a visita. Os textos e o desenho do bolo são originais, sem fotos ou marcas de terceiros.</p>
        <p>© Forma Untada. Os tempos de forno variam de acordo com o aparelho: use sempre o teste do palito.</p>
    </footer>
</div>
</body>
</html>