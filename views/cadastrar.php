<?php require_once('../conteudo-fixo/header.php') ;?>

<div class="cadastrar fundo-degrade">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="formulario">
                    <img src="<?= site_url(); ?>/assets/images/user-form.png" alt="" class="user">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="emailCadastro" class="label-icon">
                                <span class="icon-form">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                </span>
                            </label>
                            <input  class="control" type="email" placeholder="Email" name="emailCadastro"  id="emailCadastro">
                        </div>
                    
                        <div class="form-group">
                            <label for="usuarioCadastro" class="label-icon">
                                <span class="icon-form">
                                    <img src="<?= site_url(); ?>/assets/images/icon-user.png" alt="" >
                                </span>
                            </label>
                            <input class="control" type="text"  placeholder="Usuário" name="usuarioCadastro"  id="usuarioCadastro">
                        </div>
                        <div class="form-group">
                            <label for="senhaCadastro" class="label-icon">
                                <span class="icon-form">
                                    <img src="<?= site_url(); ?>/assets/images/icon-senha.png" alt="" >
                                </span>
                            </label>
                            <input class="control" type="password"  placeholder="Senha" name="senhaCadastro"  id="senhaCadastro">
                        </div>

                        <div class="custom-control custom-checkbox check-left">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Eu aceito os <a href="#">termos e condições</a></label>
                        </div>
                        <input type="submit" class="btn btn-dark btn-submit btn-login " id="submit"  value="REGISTRAR" >

                    </form>

                    <div class="cadastro">
                        <p>Já tem uma conta? <a href="<?= site_url(); ?>/views/login.php">Assinar em</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('../conteudo-fixo/footer.php') ;?>