<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Enviar</title>
</head>

<body>

    <section class="row">
        <div class="col-lg-4 offset-lg-4 bg-light rounded" id="caixaLogin">
            <h2 class="text-center mt-2">
                Entrar no sistema
            </h2>
            <form action="#" method="post" class="p-2" id="formLogin">
                <div class="form-group">
                    <input type="text" name="nomeUsuario" id="nomeUsuario" placeholder="Nome de Usuário" class="form-control" required minlength="5">
                </div>

                <div class="form-group">
                    <input type="password" name="senhaUsuario" id="senhaUsuario" placeholder="Senha" class="form-control" required minlength="6">
                </div>

                <div class="form-group">
                    <input type="email" name="emailUsuario" id="emailUsuario" placeholder="E-mail" class="form-control" required>
                </div>

                <div class="form-group">
                    <input type="date" name="datalNascimentoUsuario" id="dataNascimentolUsuario" placeholder="Data de Nascimento" class="form-control" required>
                </div>

                <div class="form-group mt-5">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="lembrar" id="lembrar" class="custom-control-input">
                        <label for="lembrar" class="custom-control-label">
                            Lembrar de mim.
                        </label>

                        <a href="#" class="float-right" id="btnEsqueci">
                            Esqueci a senha.
                        </a>
                    </div>
                </div>

                <div class="form-group">
                    <input type="submit" value=": : Enviar : :" name="btnEntrar" id="btnEntrar" class="btn btn-primary btn-block">
                </div>

                <div class="form-group">
                    <p>
                        Novo usuário? <a href="#" id="btnRegistrarNovo">
                            Registre-se aqui!
                        </a>
                    </p>
                </div>
            </form>
        </div>
    </section>


    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>