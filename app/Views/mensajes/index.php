<?php /** @var array $mensajes */ ?>
<section>
  <h2>Cuadrados</h2>
  <a class="btn" href="<?= BASE_URL ? rtrim(BASE_URL, '/') : '' ?>/mensajes/create">Nuevo</a>
  <?php if (empty($mensajes)): ?>
  <?php else: ?>
    <div class="grid">
      <?php foreach ($mensajes as $m): ?>
        <article class="card">
          <?php if (!empty($m['id'])): ?>
          <?php endif; ?>
          <h3>#<?= htmlspecialchars($m['id_cuadrado']) ?></h3>
          <p>Lado: <?= htmlspecialchars($m['lado']) ?></p>
          <p>Área: <?= nl2br(htmlspecialchars(mb_strimwidth($m['area'], 0, 140, '…'))) ?></p>
          <p>Perímetro: <?= nl2br(htmlspecialchars(mb_strimwidth($m['perimetro'], 0, 140, '…'))) ?></p>
          <p class="muted">Fecha: <?= htmlspecialchars($m['detalle']) ?></p>
          <div class="row">
            <a class="btn" href="<?= (BASE_URL ? rtrim(BASE_URL,'/') : '') ?>/mensajes/show?id=<?= (int)$m['id_cuadrado'] ?>">Ver</a>
            <a class="btn secondary" href="<?= (BASE_URL ? rtrim(BASE_URL,'/') : '') ?>/mensajes/edit?id=<?= (int)$m['id_cuadrado'] ?>">Editar</a>
            <a class="btn secondary" href="<?= (BASE_URL ? rtrim(BASE_URL,'/') : '') ?>/mensajes?id=<?= (int)$m['id_cuadrado'] ?>">Eliminar</a>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>
</section>