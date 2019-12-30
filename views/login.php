<?php require_once('../conteudo-fixo/header.php') ;?>

<div class="login">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="formulario">
                    <img src="<?= site_url(); ?>/assets/img/user-form.png" alt="" class="user">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nome"><img src="<?= site_url(); ?>/assets/img/icon-user.png" alt="" ></label>
                            <input  class="control" type="text" placeholder="Digite seu nome" name="nome" value="<?php echo (isset($auterar)) ?  $auterar['nome'] : '' ?>" id="nome">
                        </div>
                    
                        <div class="form-group">
                            <label for="email"><img src="<?= site_url(); ?>/assets/img/icon-senha.png" alt="" ></label>
                            <input class="control" type="email"  placeholder="Digite seu e-mail" name="email"  value="<?php echo (isset($auterar)) ?  $auterar['email'] : '' ?>"id="email">
                        </div>
                        <input type="submit" class="btn btn-dark btn-submit " id="submit"  value="<?php echo (isset($auterar)) ?  "Atualizar"  : "Cadastrar" ?>" >

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('../conteudo-fixo/footer.php') ;?>