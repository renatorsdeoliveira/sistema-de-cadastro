<?php require_once('../conteudo-fixo/header.php') ;?>

    <div class="listagem">
        <div class="container">
            <div class="col">
                <div class="row">
                    <div class="col-sm-8 offset-sm-2">
                        <form role="form">
                            <div class="form-group formuario-pesquisa">
                                <input type="text" name="s"  class="control" placeholder="Pesquisa...">
                                <button type="submit" class="btn btn-white btn-pesquisa"><i class="fa fa-search"></i></button>
                            </div> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="col">
            <div class="row add-cliente">
                <div class="col-md-8">
                   <h3 class="titulo-clientes">Clientes</h3>
                </div>
                <div class="col-md-4">
                    <a href="" class="btn btn-primary btnNovoCliente"  data-toggle="modal" data-target="#exampleModalCenter" >
                        <i class="md md-add"></i> 
                        Novo Cliente
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="table-responsive text-center tabela-clientes">
                        <table class="table table-hover mails m-0 table table-actions-bar">
                            <thead>
                                <tr>
                                    <th class="border-top-0 text-light bg-dark align-middle text-center" scope="col">
                                        <div class="checkbox custom-control custom-checkbox ">
                                            <input type="checkbox" class="custom-control-input" id="action-checkbox">
                                            <label class="custom-control-label" for="action-checkbox"></a></label>
                                        </div>
                                        <button type="button" class="btn btn-outline-secondary bg-drop dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Nome</a>
                                            <a class="dropdown-item" href="#">Email</a>
                                            <a class="dropdown-item" href="#">Telefone</a>
                                            <a class="dropdown-item" href="#">Data</a>
                                        </div>
                                    </th>
                                    <th class="border-top-0 text-light bg-dark align-middle" scope="col">Nome</th>
                                    <th class="border-top-0 text-light bg-dark align-middle" scope="col">Email</th>
                                    <th class="border-top-0 text-light bg-dark align-middle" scope="col">Telefone</th>
                                    <th class="border-top-0 text-light bg-dark align-middle" scope="col">Data da alteração</th>
                                    <th class="border-top-0 text-light bg-dark align-middle" scope="col">Ação</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr class="active">
                                    <td class="align-middle">
                                        <div class="checkbox custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                            <label class="custom-control-label" for="customCheck2"></a></label>
                                        </div>
                                        <!-- <img src="<?= site_url(); ?>/assets/images/users/avatar-2.jpg" alt="contact-img" title="contact-img" class="img-circle thumb-sm"> -->
                                    </td>

                                    <td class="align-middle">Tomaslau</td>
                                    <td class="align-middle"><a href="#">zomaslau@dummy.com</a></td>
                                    <td class="align-middle">Telefone</td>
                                    <td class="align-middle">01/11/2003</td>

                                    <td class="align-middle">
                                        <a href="#" class="table-action-btn"><i class="md md-edit editar"></i></a>
                                        <a href="#" class="table-action-btn"><i class="md md-history historico"></i></a>
                                        <a href="#" class="table-action-btn"><i class="md md-close fechar"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        <div class="checkbox custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1"></a></label>
                                        </div>
                                        <!-- <img src="<?= site_url(); ?>/assets/images/users/avatar-2.jpg" alt="contact-img" title="contact-img" class="img-circle thumb-sm"> -->
                                    </td>
                                    
                                    <td class="align-middle">Tomaslau</td>
                                    <td class="align-middle"><a href="#">zomaslau@dummy.com</a></td>
                                    <td class="align-middle">Telefone</td>
                                    <td class="align-middle">01/11/2003</td>

                                    <td class="align-middle">
                                        <a href="#" class="table-action-btn"><i class="md md-edit editar"></i></a>
                                        <a href="#" class="table-action-btn"><i class="md md-history historico"></i></a>
                                        <a href="#" class="table-action-btn"><i class="md md-close fechar"></i></a>
                                    </td>
                                </tr>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center navColor">
            <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
            </li>
        </ul>
    </nav>

    <!-- Modal -->
    <div class="modal fade modal-clientes" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-dark bd-md">
                    <h5 class="modal-title" id="exampleModalLongTitle">Novo Cliente</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                       
                        <div class="form-group">
                            <label for="nomeCliente"><strong>Nome</strong></label>
                            <input type="text" name="nomeCliente" class="form-control" id="nomeCliente" placeholder="Digite seu nome">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"><strong>Email</strong></label>
                            <input type="email" name="emailCliente" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu melhor e-mail">
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                        <div class="form-group">
                            <label for="exampleInputTelefone1"><strong>Telefone</strong></label>
                            <input type="text" name="telefoneCliente" class="form-control" id="exampleInputTelefone1" aria-describedby="telefoneHelp" placeholder="Digite um telefone">
                            
                            <div class="checkbox custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="novoTelefone">
                                <label class="custom-control-label" for="novoTelefone">Adicionar mais um telefone</label>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger">Fechar</button>
                            <button type="submit" class="btn btn-success">Cadastrar</button>
                            <button type="button" class="btn btn-warning" >Historico</button>
                        </div>
                    </form>   
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->

<?php require_once('../conteudo-fixo/footer.php') ;?>