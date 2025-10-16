<?php /** @var array $mensaje */ ?>
<section>
  <h2>Editar Registro</h2>
  <?php if (!empty($error)): ?>
    <div class="alert"><?= htmlspecialchars($error) ?></div>
  <?php endif; ?>
  <form method="post" action="<?= (BASE_URL ? rtrim(BASE_URL,'/') : '') ?>/mensajes/update" enctype="multipart/form-data" class="form">
    <input type="hidden" name="id" value="<?= (int)$mensaje['id_cuadrado'] ?>"/>
    <label>Lado
      <input type="text" name="lado" required  value="<?= htmlspecialchars($mensaje['lado'] ?? '') ?>"/>
    </label>
    <label>Área
      <input type="text" name="area" required  value="<?= htmlspecialchars($mensaje['area'] ?? '') ?>"/>
    </label>
    <label>Perímetro
      <input type="text" name="perimetro" required value="<?= htmlspecialchars($mensaje['perimetro'] ?? '') ?>"/>
    </label>
    <label>Detalle
      <input type="date" name="detalle" required value="<?= htmlspecialchars($mensaje['detalle'] ?? '') ?>"/>
    </label>
    <button type="submit" class="btn">Actualizar</button>
    <a class="btn secondary" style="text-align: center;" href="<?= (BASE_URL ? rtrim(BASE_URL,'/') : '') ?>/mensajes?id=<?= (int)$mensaje['id_cuadrado'] ?>">Cancelar</a>
  </form>
</section>