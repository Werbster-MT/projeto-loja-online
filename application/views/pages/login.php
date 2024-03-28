<main role="main" class="col-md-9 ml-sm-auto col-lg-12 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"></h1>
      </div>
            <br>
            <h3>Login</h3>
			<div class="col-md-12">
            <form action="<?= base_url()?>/usuarioController/logar" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Senha</label>
                    <input type="password" class="form-control" name="senha" placeholder="Senha">
                </div>
                <button type="submit" class="btn btn" id="botao">Entrar</button>
            </form>
            <?php if ($this->session->flashdata('category_error')) { ?>
                <div class="alert alert-danger"> 
                  <p>Usuario ou senha invalido
                  
                  </p>
               </div>
            <?php } ?>
		</div>
    </main>
  </div>
</div>
