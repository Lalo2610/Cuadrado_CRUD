<?php /** @var string|null $error */ ?>
<section>
  <h2>Nuevo Registro</h2>
  <?php if (!empty($error)): ?>
    <div class="alert"><?= htmlspecialchars($error) ?></div>
  <?php endif; ?>
  <form method="post"
      action="<?= (BASE_URL ? rtrim(BASE_URL,'/') : '') ?>/mensajes/store"
      enctype="multipart/form-data"
      class="form">

    <label>Lado
      <input type="text" name="lado" required />
    </label>
    <label>Área
      <input type="text" name="area" required />
    </label>
    <label>Perímetro
      <input type="text" name="perimetro" required />
    </label>
    <label>Detalle
      <input type="date" name="detalle" />
    </label>
    <button type="submit" class="btn">Guardar</button>
    
    <a class="btn secondary" href="<?= (BASE_URL ? rtrim(BASE_URL,'/') : '') ?>/mensajes">Cancelar</a>
  </form>
</section>