<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- css -->
        <link rel="stylesheet" href="./assets/css/stylee.css">
        <!-- icon -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Provedor</title>
    </head>
    <body>
        <main class="container">



            <section class='painel'>
                <h1>CADASTRO</h1>
                <div class="logo">
                    <img src="./assets/img/di.jpg" alt="">
                </div>
                <form class='formulario' action="cadastro.php" method='POST'>
                    <div class="login">
                        <img id='icon_perfil' src="./assets/img/perfil.png" alt="">
                        <input type="text" name='login' >
                    </div>
                    <div class="senha">
                        <img id='icon_senha' src="./assets/img/senha.png" alt="icon_senha">
                        <input type="password" name='senha' >
                    </div>

                    <div class="lembrar_item">
                        <div id="lembrar">
                            <input type="checkbox" class='checkbox'><!-- criar uma função pra quando estiver ativado, fazer a "animação" -->
                            <div class="circulo"></div>
                        </div>
                        <label style='font-size: 12px; font-family: sans-serif; padding-bottom: 10px;'>Lembrar dados</label>
                    </div>

                    <div class="humano">
                        <input class='check_humano' type="checkbox" name='humano' >
                        <label>Eu sou humano</label>
                    </div>
                    <button class='button' type='submit'>Entra</button>
                </form>
                
                        <form action="cadastro.php" method='POST'>
                
                            nome<input type="text" name='nome'>
                            senha<input type="text" name='senha'>
                            <button type='submit'>cadastrar</button>
                        </form>
            </section>
        </main>



        <script src='./assets/js/script.js'></script>
    </body>
</html>