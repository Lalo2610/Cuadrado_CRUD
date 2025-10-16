<?php

class Mensaje
{
 public static function all(): array
 {
  $pdo = Database::getConnection();
  $st = $pdo->query("SELECT * FROM cuadrados order by id_cuadrado desc");
  return $st->fetchAll();
 }

public static function find(int $id): ?array
{
    $pdo = Database::getConnection();
    $sql = "SELECT * FROM cuadrados WHERE id_cuadrado = ?";
    $st = $pdo->prepare($sql);
    $st->execute([$id]);
  
    $r = $st->fetch(PDO::FETCH_ASSOC); 
    
    return $r ?: null;
}

 public static function create(array $d): int{
  $pdo = Database::getConnection();
  $st = $pdo->query("INSERT INTO cuadrados(lado, area, perimetro, detalle) VALUES (?, ?, ?, ?)");
  $st->execute([$d['lado'], $d['area'], $d['perimetro'], $d['detalle']]);
  return (int)$pdo->lastInsertId();
 }

 public static function updateById(int $id, array $d): bool{
  $pdo = Database::getConnection();
  $st = $pdo->query("UPDATE mensajes SET titulo = ?, descripcion = ?, imagen = ?, fecha = ? WHERE id_cuadrado = ?");
  $st->execute([$d['titulo'], $d['descripcion'], $d['imagen'], $d['fecha'], $id]);

  return $st;
 }

 public static function deleteById(int $id): bool{
  $pdo = Database::getConnection();
  $st = $pdo->query("delete from mensaje where id_cuadrado=?");
  $st->execute([$id]);
  return $st;
  }
}