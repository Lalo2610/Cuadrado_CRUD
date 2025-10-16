<?php
// app/Controllers/MensajeController.php

class MensajeController extends Controller
{
    public function index()
    {
        $mensajes = Mensaje::all();
        $this->view('mensajes/index', compact('mensajes'));
    }

    public function create()
    {
        $this->view('mensajes/create');
    }

    public function store()
    {
        try {
            $lado = trim($_POST['lado'] ?? '');
            $area = trim($_POST['area'] ?? '');
            $perimetro = trim($_POST['perimetro'] ?? '');
            $detalle = trim($_POST['detalle'] ?? ''); 

            if ($lado === '' || $area === '' || $perimetro === '' || $detalle === '') {
                throw new RuntimeException('Todos los campos son obligatorios.');
            }

            $id = Mensaje::create([
                'lado' => $lado, 
                'area' => $area, 
                'perimetro' => $perimetro, 
                'detalle' => $detalle === '' ? null : $detalle 
            ]);

            $this->redirect('/mensajes');

        } catch (Throwable $e) {
            $error = $e->getMessage();
            $this->view('mensajes/create', compact('error'));
        }
    }


    public function show()
    {
        $id = (int) ($_GET['id_cuadrado'] ?? 0);
        $mensaje = $id ? Mensaje::find($id) : null;
        if (!$mensaje) {
            http_response_code(404);
            echo 'Mensaje no encontrado';
            return;
        }
        $this->view('mensajes/show', compact('mensaje'));
    }

    public function edit()
    {
        $id = (int) ($_GET['id'] ?? 0);
        $mensaje = $id ? Mensaje::find($id) : null;
        if (!$mensaje) {
            http_response_code(404);
            echo 'Mensaje no encontrado';
            return;
        }
        $this->view('mensajes/edit', compact('mensaje'));
    }

    public function update()
    {
        try {
            $id = (int) ($_POST['id'] ?? 0);
            $orig = Mensaje::find($id);

            if (!$orig)
                throw new RuntimeException('Mensaje no existe.');
            $lado = trim($_POST['lado'] ?? '');
            $area = trim($_POST['area'] ?? '');
            $perimetro = trim($_POST['perimetro'] ?? '');
            $detalle = trim($_POST['detalle'] ?? '');

            if ($lado === '' || $area === '' || $perimetro === '')
                throw new RuntimeException('Los campos Lado, Área y Perímetro son obligatorios.');
            $detalle_val = $detalle === '' ? null : $detalle;
            
            Mensaje::updateById($id, ['lado' => $lado, 'area' => $area, 'perimetro' => $perimetro, 'detalle' => $detalle_val]);
            
            $this->redirect('/mensajes');

        } catch (Throwable $e) {
            $error = $e->getMessage();
            $mensaje = [
                'id_cuadrado' => $_POST['id'] ?? 0, 
                'lado' => $_POST['lado'] ?? '', 'area' => $_POST['area'] ?? '', 
                'perimetro' => $_POST['perimetro'] ?? '', 'detalle' => $_POST['detalle'] ?? ''
            ];

            $this->view('mensajes/edit', compact('mensaje', 'error'));
        }
    }
    public function destroy()
    {
        $id_cuadrado = (int) ($_POST['id_cuadrado'] ?? 0);
        if ($id_cuadrado) {
            Mensaje::deleteById($id_cuadrado); 
        }
        
        $this->redirect('/mensajes');
    }
}