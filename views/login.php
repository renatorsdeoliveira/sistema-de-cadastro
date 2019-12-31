<?php require_once('../conteudo-fixo/header.php') ;?>

<div class="login">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="formulario">
                    <img src="<?= site_url(); ?>/assets/img/user-form.png" alt="" class="user">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nomeLogin" class="label-icon">
                                <span class="icon-form">
                                    <img src="<?= site_url(); ?>/assets/img/icon-user.png" alt="" >
                                </span>
                            </label>
                            <input  class="control" type="text" placeholder="Digite seu usuário" name="nomeLogin"  id="nomeLogin">
                        </div>
                    
                        <div class="form-group">
                            <label for="senhaLogin" class="label-icon">
                                <span class="icon-form">
                                    <img src="<?= site_url(); ?>/assets/img/icon-senha.png" alt="" >
                                </span>
                            </label>
                            <input class="control" type="password"  placeholder="Digite seu senha" name="senhaLogin"  id="senhaLogin">
                        </div>
                        <div class="custom-control custom-checkbox check-left">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Remember me</label>
                        </div>
                        <input type="submit" class="btn btn-dark btn-submit btn-login " id="submit"  value="LOGIN" >

                    </form>

                    <div class="cadastro">
                        <p>Não possui uma conta? <a href="<?= site_url(); ?>/views/registrar.php">Inscrever-se</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('../conteudo-fixo/footer.php') ;?>