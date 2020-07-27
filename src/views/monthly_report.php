<main class="content">
  <?php
    renderTitle(
      'Relatório Mensal', 
      'Acompanhe seu saldo de horas',
      'icofont-ui-calendar'
      )
  ?>

  <div>
    <div class="d-flex">
      <div class="card bg-primary mb-3 mr-3">
        <div class="card-body text-white text-center">
          <h5 class="card-title">Horas trabalhadas no mês</h5>
          <p class="card-text" style="font-size: 1.8rem;"><?= $sumOfWorkedTime ?></p>
        </div>
      </div>
      <div class="card bg-primary mb-3">
        <div class="card-body text-white text-center">
          <h5 class="card-title">Saldo mensal</h5>
          <p class="card-text" style="font-size: 1.8rem;"><?= $balance ?></p>
        </div>
      </div>
    </div>

    <form action="#" method="post" class="mb-4">
      <div class="input-group">
        <?php if($user->is_admin): ?>
          <select name="user" class="form-control mr-2" placeholder="Selecione o usuário">
            <?php
              foreach($users as $user) {
                $selected = $user->id === $selectedUserId ? 'selected' : '';
                echo "<option value='{$user->id}' {$selected}>{$user->name}</option>";
              }
            ?>
          </select>
        <?php endif ?>
        <select name="period" class="form-control" placeholder="Selecione o período">
          <?php
            foreach($periods as $key => $value) {
              $selected = $key === $selectedPeriod ? 'selected' : '';
              echo "<option value='{$key}' {$selected}>{$value}</option>";
            }
          ?>
        </select>
        <button class="btn btn-primary ml-2">
            <i class="icofont-search"></i>
        </button>
      </div>
    </form>

    <table class="table table-bordered table-striped table-hover">
      <thead>
        <th>Dia</th>
        <th>Entrada 1</th>
        <th>Entrada 2</th>
        <th>Saída 1</th>
        <th>Saída 2</th>
        <th>Saldo</th>
      </thead>
      <tbody> 
        <?php foreach($report as $registry): ?>
          <tr>
            <td><?= formatDateWithLocale($registry->work_date, '%A, %d de %B de %Y') ?></td>
            <td><?= $registry->time1 ?></td>
            <td><?= $registry->time2 ?></td>
            <td><?= $registry->time3 ?></td>
            <td><?= $registry->time4 ?></td>
            <td><?= $registry->getBalance(); ?></td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
</main>