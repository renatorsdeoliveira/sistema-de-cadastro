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
                        </div> <!-- form-group -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="container">
        <div class="col">
            <div class="row">
                <div class="col">
                        <div class="table-responsive">
                            <table class="table table-hover mails m-0 table table-actions-bar">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="checkbox custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="action-checkbox">
                                                <label class="custom-control-label" for="action-checkbox"></a></label>
                                            </div>
                                            <div class="btn-group dropdown">
                                                <button type="button" class="btn btn-white btn-xs dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false"><i class="caret"></i></button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#">Action</a></li>
                                                    <li><a href="#">Another action</a></li>
                                                    <li><a href="#">Something else here</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Separated link</a></li>
                                                </ul>
                                            </div>
                                        </th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Start Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr class="active">
                                        <td>
                                            
                                            <div class="checkbox custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1"></a></label>
                                            </div>

                                            <img src="<?= site_url(); ?>/assets/images/users/avatar-2.jpg" alt="contact-img" title="contact-img" class="img-circle thumb-sm">
                                        </td>

                                        <td>
                                            Tomaslau
                                        </td>

                                        <td>
                                            <a href="#">tomaslau@dummy.com</a>
                                        </td>

                                        <td>
                                            01/11/2003
                                        </td>
                                        <td>
                                            <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                            <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                        <div class="checkbox custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1"></a></label>
                                            </div>


                                            <img src="<?= site_url(); ?>/assets/images/users/avatar-1.jpg" alt="contact-img" title="contact-img" class="img-circle thumb-sm">
                                        </td>

                                        <td>
                                            Chadengle
                                        </td>

                                        <td>
                                            <a href="#">chadengle@dummy.com</a>
                                        </td>

                                        <td>
                                            01/11/2003
                                        </td>
                                        <td>
                                            <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                            <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                        </td>
                                    </tr>

                                    

                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>
<?php require_once('../conteudo-fixo/footer.php') ;?>