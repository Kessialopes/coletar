<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            .info-coleta{
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                padding: 80px;
                border-radius: 15px;
            }
            ul{
             float: right;
             list-style: none;
             padding: 8px;
             display: flex;
             background: white;
             }
            li{
             margin-right: 80px;
            }
            a{
             color: mediumspringgreen;
             text-decoration: none;
             transition: 1s;
            }
            a:hover{
            color: turquoise;
            size: 5px;
            }
        </style>
        <title>Coleta Lagos</title>
    </head>
    <body>
        <header>
            <div class="topnav">
                <ul>
                    <li><a href="/cadastro">Cadastre-se</a></li>
                    <li><a href="/logColeta">Login Ponto de coleta</a></li>
                    <li><a href="/logDoador">Login Doador</a></li>
                </ul> 
            </div>
        </header>
       <section>
            <div class="info-coleta"> 
                <p><h1 style="color:springgreen;">Bem-vindo ao Coleta Lagos</h1></p>
                <p>o melhor site de mapeamento de
                 pontos de coleta da região dos lagos</p>
                <p>Informações sobre esta iniciativa</p>
            </div>     
       </section>
    </body>  
</html>
                        