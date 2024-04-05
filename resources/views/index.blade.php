<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Marley de Sousa Santos">
    <meta name="description" content="Site de criação de ordem de serviço de uma loja de assistência técnica de celulares">
    <meta name="keywords" content="Ordem de Serviço, Site, Laravel">
    <link rel="stylesheet" type="text/css" href="{{url('./assets/css/style.css')}}">
    <title>Ordem de Serviço</title>
</head>
<body>
    <header>
        <nav class="">
            <div class="logo-area">
                <img scr="" class="" alt="Logo Site">
            </div>
            <div class="links">
                <ul>
                    <li>
                        <a href="">Link acesso rápido</a>
                    </li>
                    <li>
                        <a href="">Link acesso rápido</a>
                    </li>
                    <li>
                        <a href="">Link acesso rápido</a>
                    </li>
                </ul>
            </div>
            
            <div class="login-area">
                    <a href="#">Login</a>
                </div>
        </nav>
        
        <div class="title-header">
            <h1>Assistência Técnica Mobile</h1>
            <p class="">
                Conserte seu aparelho sem dificuldades.
            </p>
            
            <div class="cta">
                <a href="">Cadastrar ordem</a>
            </div>
        </div>
    </header>
    
    <main>
        <section class="">
        
            <div class="title-form">
                <h2>Cadastrar Ordem de Serviço</h2>
            </div>
            
            <form class="formulario" action="/cadastrar" method="POST">
            @csrf
                <div class="container">
                    <div class="input-container">
                        <label for="nomeCliente">Nome</label>
                        <input type="text" name="nomeCliente" placeholder="Digite o nome do cliente" id="nomeCliente" required>
                    </div>
                    
                    <div class="input-container">
                        <label for="cpfCliente">CPF</label>
                        <input type="text" name="cpfCliente" placeholder="000.000.000-00" id="cpfCliente" required>
                    </div>
                    
                    <div class="input-container">
                        <label for="marcaDispositivo">Marca do dispositivo</label>
                        <select class="selection" name="marcaDispositivo" required>
                            <option value="Samsung">Samsung</option>
                            <option value="Motorola">Motorola</option>
                            <option value="Apple">Apple</option>
                            <option value="Xiaomi">Xiaomi</option>
                        </select>
                    </div>
                    
                    <div class="input-container">
                        <label for="modeloDispositivo">Modelo do dispositivo</label>
                        <input type="text" name="modeloDispositivo" placeholder="Por favor, informe o model do dispositivo" required>
                    </div>
                    
                    <div class="input-container">
                        <label for="defeitoDispositivo">Defeito do dispositivo</label>
                        <select class="selection" name="defeitoDispositivo" required>
                            <option value="Tela">Tela</option>
                            <option value="Conectividade">Conectividade</option>
                            <option value="Sistemas de som">Som e Alto Falante</option>
                            <option value="Outros">Outros</option>
                            <option value="Não sabe informar">Não informado</option> 
                        </select>
                    </div>
                    
                    <div class="input-container button-form">
                        <button type="submit">Enviar</button>
                    </div>
                </div>               
            </form>
        </section>
    </main>
    
    <div class="nada"></div>
    
    <footer class="">
        <section class="copy">
            &copy;2024 | Marley S. Santos. 
        </section>
    </footer>
</body>
</html>
