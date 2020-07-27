<main class="content">
  <?php
    renderTitle(
      'Cadastro de usuário',
      'Crie ou atualize um usuário',
      'icofont-user'
    );

    include(TEMPLATE_PATH . "/messages.php");
  ?>

  <form action="#" method="post">
    <?php if(isset($id)): ?>
    <input type="hidden" name="id" value="<?= $id ?>">
    <?php endif ?>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="name">Nome</label>
        <input type="text" id="name" name="name" placeholder="Informe o nome"
        class="form-control <?= $errors['name'] ? 'is-invalid' : '' ?>"
        value="<?= isset($name) ? $name : null ?>">
        <div class="invalid-feedback">
          <?= $errors['name'] ?>
        </div>
      </div>

      <div class="form-group col-md-6">
        <label for="">Email</label>
        <input type="email" id="email" name="email" placeholder="Informe o email"
        class="form-control <?= $errors['email'] ? 'is-invalid' : '' ?>"
        value="<?= isset($email) ? $email : null ?>">
        <div class="invalid-feedback">
          <?= $errors['email'] ?>
        </div>
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="password">Senha</label>
        <input type="password" id="password" name="password" placeholder="Informe a senha"
        class="form-control <?= $errors['password'] ? 'is-invalid' : '' ?>">
        <div class="invalid-feedback">
          <?= $errors['password'] ?>
        </div>
      </div>

      <div class="form-group col-md-6">
        <label for="confirm_password">Confirmar senha</label>
        <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirme a senha"
        class="form-control <?= $errors['confirm_password'] ? 'is-invalid' : '' ?>">
        <div class="invalid-feedback">
          <?= $errors['confirm_password'] ?>
        </div>
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="start_date">Data de Admissão</label>
        <input type="date" id="start_date" name="start_date"
        class="form-control <?= $errors['start_date'] ? 'is-invalid' : '' ?>"
        value="<?= isset($start_date) ? $start_date : null ?>">
        <div class="invalid-feedback">
          <?= $errors['start_date'] ?>
        </div>
      </div>

      <div class="form-group col-md-6">
        <label for="end_date">Data de desligamento</label>
        <input type="date" id="end_date" name="end_date"
        class="form-control <?= $errors['end_date'] ? 'is-invalid' : '' ?>"
        value="<?= isset($end_date) ? $end_date : null ?>">
        <div class="invalid-feedback">
          <?= $errors['end_date'] ?>
        </div>
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <div class="d-flex align-items-center">
          <label for="is_admin" class="mr-3">Administrador?</label>
          <input type="checkbox" id="is_admin" name="is_admin" style="width: 20px; height: 20px; cursor: pointer"
          class="form-control <?= $errors['is_admin'] ? 'is-invalid' : '' ?>"
          <?= isset($is_admin) ? 'checked' : '' ?>>
        </div>
        <div class="invalid-feedback">
          <?= $errors['is_admin'] ?>
        </div>
      </div>
    </div>
    <div>
      <button class="btn btn-primary btn-lg">Salvar</button>
      <a href="users.php" class="btn btn-secondary btn-lg">Cancelar</a>
    </div>

  </form>
</main>