
<div class="container">
  <div class="row">
    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
      <div class="container">
      <div class="text-center">
          <img src="/img/mp-01.png" height="200" width="200" class="rounded mx-auto d-block" alt="...">
        </div>
        <h3>Login</h3>
        <hr>
        <?php if (session()->get('success')) : ?>
          <div class="alert alert-success" role="alert">
            <?= session()->get('success') ?>
          </div>
        <?php endif; ?>

      </div>

      <form name="login" action="<?php base_url() ?>Usuario" method="post">
        <div class="form-group">
          <label for="nombre">Usuario</label>
          <select class="form-control form-control-lg" name="nombre" value="<?= set_value('email') ?>">
            <option value="">Seleccione</option>
            <?php foreach ($usuarios as $data) { ?>
              <option value="<?php echo $data['nombre'] ?>" <?php echo set_select('nombre', $data['nombre']) ?>><?php echo $data['nombre'] ?></option>
            <?php } ?>

          </select>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" name="password" id="password" value="">

        </div>
        <?php if (isset($validation)) : ?>
          <div class="col-12">
            <div class="alert alert-danger" role="alert">
              <?= $validation->listErrors() ?>
            </div>
          </div>
        <?php endif; ?>
        <div class="row">
          <div class="col-12 col-sm-4">
            <button type="submit" class="btn btn-primary">Login</button>
          </div>
          </div>
      </form>
    </div>
  </div>
</div>
</div>