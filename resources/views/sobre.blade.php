<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sobre Nós - Padaria RJ</title>
    <style>
        body {
            font-family: "Segoe UI", Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f3f0;
        }

        /* ================= HEADER ================= */
        header {
            background-color: #8b0000;
            padding: 10px 30px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo img {
            height: 50px;
            border-radius: 50%;
        }

        .logo span {
            font-size: 20px;
            font-weight: bold;
            color: white;
        }

        .search-bar {
            display: flex;
            align-items: center;
            background: white;
            padding: 5px 10px;
            border-radius: 20px;
        }

        .search-bar input {
            border: none;
            outline: none;
            padding: 5px;
            width: 200px;
            font-size: 14px;
        }

        .search-bar button {
            border: none;
            background: none;
            cursor: pointer;
            font-size: 16px;
            color: #8b0000;
        }

        /* ================= CONTEÚDO ================= */
        .container {
            display: flex;
            padding: 40px;
            gap: 20px;
            align-items: flex-start;
        }

        .imagens {
            flex: 1;
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-gap: 15px;
        }

        .imagens img {
            width: 100%;
            border-radius: 8px;
            box-shadow: 2px 2px 6px rgba(0,0,0,0.2);
        }

        .texto {
            flex: 1;
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 2px 2px 6px rgba(0,0,0,0.2);
        }

        .texto h2 {
            color: #3e1f12;
            font-size: 26px;
            margin-bottom: 15px;
            border-bottom: 3px solid #8b0000;
            display: inline-block;
            padding-bottom: 5px;
        }

        .texto p, .texto li {
            font-size: 16px;
            color: #333;
            line-height: 1.6;
        }

        .texto ul {
            margin: 15px 0 15px 20px;
        }

        /* ================= FOOTER ================= */
        footer {
            text-align: center;
            background-color: #8b0000;
            color: #fff;
            padding: 15px;
            margin-top: 30px;
        }
    </style>
</head>
<body>

    <!-- Header com Logo + Barra de Pesquisa -->
    <header>
        <div class="logo">
            <img src="img2/logo.png" alt="Logo Padaria">
            <span>Padaria RJ</span>
        </div>

        <form class="search-bar">
            <input type="text" placeholder="Pesquisar produtos...">
            <button type="submit">🔍</button>
        </form>
    </header>

    <!-- Conteúdo principal -->
    <div class="container">
        <!-- Coluna de imagens -->
        <div class="imagens">
            <img src="/img2/padaria (1).png" alt="Fachada da Padaria">
            <img src="img2/atendimento.jpg" alt="Atendimento Padaria">
        </div>

        <!-- Coluna de texto -->
        <div class="texto">
            <h2>Padaria RJ - Romeu & Julieta</h2>
            <p>A PADARIA RJ NASCEU COM O PROPÓSITO DE TRAZER SABOR E ACONCHEGO PARA O DIA A DIA DOS NOSSOS CLIENTES.</p>
            <p>LOCALIZADA NO CORAÇÃO DO RIO DE JANEIRO, UNIMOS TRADIÇÃO E MODERNIDADE EM CADA DETALHE:</p>
            <ul>
                <li>PÃES SEMPRE FRESQUINHOS, SAINDO DO FORNO AO LONGO DO DIA.</li>
                <li>DOCES E BOLOS PREPARADOS COM RECEITAS DE FAMÍLIA E MUITO CARINHO.</li>
                <li>ATENDIMENTO PRÓXIMO, COM AQUELE JEITINHO ACOLHEDOR QUE FAZ TODO MUNDO SE SENTIR EM CASA.</li>
            </ul>
            <p>MAIS DO QUE UMA PADARIA, SOMOS UM ESPAÇO DE ENCONTRO, ONDE CADA CAFÉ DA MANHÃ E CADA LANCHE DA TARDE SE TRANSFORMAM EM MOMENTOS ESPECIAIS.</p>
            <p><b>VENHA NOS VISITAR E DESCUBRA POR QUE A PADARIA RJ É FEITA PARA VOCÊ! 🥐☕</b></p>
        </div>
    </div>

    <!-- Rodapé -->
    <footer>
        &copy; 2025 Padaria RJ - Todos os direitos reservados.
    </footer>

</body>
</html>

Você, 10 min
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sobre Nós - Padaria RJ</title>
    <style>
        body {
            font-family: "Segoe UI", Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f3f0;
        }

        /* ================= HEADER ================= */
        header {
            background-color: #8b0000;
            padding: 10px 30px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo img {
            height: 50px;
            border-radius: 50%;
        }

        .logo span {
            font-size: 20px;
            font-weight: bold;
            color: white;
        }

        .search-bar {
            display: flex;
            align-items: center;
            background: white;
            padding: 5px 10px;
            border-radius: 20px;
        }

        .search-bar input {
            border: none;
            outline: none;
            padding: 5px;
            width: 200px;
            font-size: 14px;
        }

        .search-bar button {
            border: none;
            background: none;
            cursor: pointer;
            font-size: 16px;
            color: #8b0000;
        }

        /* ================= CONTEÚDO ================= */
        .container {
            display: flex;
            padding: 40px;
            gap: 20px;
            align-items: flex-start;
        }

        .imagens {
            flex: 1;
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-gap: 15px;
        }

        .imagens img {
            width: 100%;
            border-radius: 8px;
            box-shadow: 2px 2px 6px rgba(0,0,0,0.2);
        }

        .texto {
            flex: 1;
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 2px 2px 6px rgba(0,0,0,0.2);
        }

        .texto h2 {
            color: #3e1f12;
            font-size: 26px;
            margin-bottom: 15px;
            border-bottom: 3px solid #8b0000;
            display: inline-block;
            padding-bottom: 5px;
        }

        .texto p, .texto li {
            font-size: 16px;
            color: #333;
            line-height: 1.6;
        }

        .texto ul {
            margin: 15px 0 15px 20px;
        }

        /* ================= FOOTER ================= */
        footer {
            text-align: center;
            background-color: #8b0000;
            color: #fff;
            padding: 15px;
            margin-top: 30px;
        }
    </style>
</head>
<body>

    <!-- Header com Logo + Barra de Pesquisa -->
    <header>
        <div class="logo">
            <img src="img2/logo.png" alt="Logo Padaria">
            <span>Padaria RJ</span>
        </div>

        <form class="search-bar">
            <input type="text" placeholder="Pesquisar produtos...">
            <button type="submit">🔍</button>
        </form>
    </header>

    <!-- Conteúdo principal -->
    <div class="container">
        <!-- Coluna de imagens -->
        <div class="imagens">
            <img src="img2/padaria(1).png" alt="Fachada da Padaria">
            <img src="img2/atendimento.jpg" alt="Atendimento Padaria">
        </div>

        <!-- Coluna de texto -->
        <div class="texto">
            <h2>Padaria RJ - Romeu & Julieta</h2>
            <p>A PADARIA RJ NASCEU COM O PROPÓSITO DE TRAZER SABOR E ACONCHEGO PARA O DIA A DIA DOS NOSSOS CLIENTES.</p>
            <p>LOCALIZADA NO CORAÇÃO DO RIO DE JANEIRO, UNIMOS TRADIÇÃO E MODERNIDADE EM CADA DETALHE:</p>
            <ul>
                <li>PÃES SEMPRE FRESQUINHOS, SAINDO DO FORNO AO LONGO DO DIA.</li>
                <li>DOCES E BOLOS PREPARADOS COM RECEITAS DE FAMÍLIA E MUITO CARINHO.</li>
                <li>ATENDIMENTO PRÓXIMO, COM AQUELE JEITINHO ACOLHEDOR QUE FAZ TODO MUNDO SE SENTIR EM CASA.</li>
            </ul>
            <p>MAIS DO QUE UMA PADARIA, SOMOS UM ESPAÇO DE ENCONTRO, ONDE CADA CAFÉ DA MANHÃ E CADA LANCHE DA TARDE SE TRANSFORMAM EM MOMENTOS ESPECIAIS.</p>
            <p><b>VENHA NOS VISITAR E DESCUBRA POR QUE A PADARIA RJ É FEITA PARA VOCÊ! 🥐☕</b></p>
        </div>
    </div>

    <!-- Rodapé -->
    <footer>
        &copy; 2025 Padaria RJ - Todos os direitos reservados.
    </footer>

</body>
</html>
