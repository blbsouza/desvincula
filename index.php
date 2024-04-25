<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="30; URL=./" />
    <title>Página para desvincular Coletor</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <header>
        <h2>DESVINCULA COLETOR ONLINE</h2>
        <p>Página para desvinculação rápida dos Aparelhos/Colaborador</p>
    </header>

    <div class="main">
        <h1>PARA DESVINCULAR O COLETOR SIGA OS PASSOS A SEGUIR</h1>
        <div>
            <h2>1°<br>CLIQUE NO ÍCONE <img id="icon" src="favicon.ico" alt="" /><br>Efetuar logout<br>Sim</h2>
        </div>
        <div id="img">
            <h2>2°<br>Código de barras para desvincular</h2>
            <img src="arquivo.PNG" alt="" />
        </div>
        <div id="cpd">
            <h2>3°<br>Código do usuário autorizado a desvincular</h2>
            <img src="user.PNG" alt="" />
        </div>
    </div>

    <footer>
        <span id="copy">BlbTech | Copyright ©2022</span><br><span>1.2</span>
    </footer>
    <script>
        var ano = new Date().getFullYear()
        document.getElementById("copy").innerHTML = "blbtech | Copyright &copy; "+ano
    </script>
</body>
</html>
