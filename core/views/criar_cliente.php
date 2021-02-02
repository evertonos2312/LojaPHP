<div class="container">
    <div class="row my-5">
        <div class="col-sm-5 offset-sm-3">
            <h3 class="text-center">Cadastro</h3>
            <?php if(isset($_SESSION['erro'])): ?>
                <span class="span-erro">* <?=$_SESSION['erro']?> </span>
                <?php unset($_SESSION['erro'])?>
            <?php endif;?>
            <form action="?a=criar_cliente" method="post">
                <div class="my-3">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Email" class="form-control" required>
                </div>
                <div class="my-3">
                    <label>Senha</label>
                    <input type="password" name="senha_1" placeholder="Senha" class="form-control" required>
                </div>
                <div class="my-3">
                    <label>Confirmar senha</label>
                    <input type="password" name="senha_2" placeholder="Confirmar senha" class="form-control" required>
                </div>
                <div class="my-3">
                    <label>Nome completo</label>
                    <input type="text" name="nome_completo" placeholder="Nome completo" class="form-control" required>
                </div>
                <div class="my-3">
                    <label>Endereço</label>
                    <input type="text" name="endereco" placeholder="Endereço" class="form-control" required>
                </div>
                <div class="my-3">
                    <label>Estado</label>
                    <input type="text" name="estado" placeholder="Estado" class="form-control" required>
                </div>
                <div class="my-3">
                    <label>Cidade</label>
                    <input type="text" name="cidade" placeholder="Cidade" class="form-control" required>
                </div>
                <div class="my-3">
                    <label>Celular</label>
                    <input type="text" name="celular" placeholder="Celular" class="form-control">
                </div>
                <div class="my-4">
                    <input type="submit" value="Criar conta" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>