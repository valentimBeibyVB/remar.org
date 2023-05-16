<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ATENÇÃO!</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Clik em  "Terminar Sessão"para sair caso não queira click em "Cancelar".</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="sair.php">Terminar Sessão</a>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="Doar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Entrar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" role="form">
                    <div class="col-sm-2">
                        <select class="form-control " id="doador" name="doador" class="form-select">
                        <option value="1">Vestuario</option>
                        <option value="2">Alimentação</option>
                        </select>
                     </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="senha" id="exampleInputPassword3" placeholder="Password">
                        </div>
                        <div class="checkbox">
                            <label>
                  <input type="checkbox"> Lembra-me
              </label>
                        </div>
                        <div class="modal-footer">
                    <input type="submit" value="Logar" class="btn btn-primary">
                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>