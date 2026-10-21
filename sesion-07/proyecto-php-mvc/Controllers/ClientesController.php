<?php

require_once "./Models/UsuariosModel.php";

class ClientesController extends Controller
{
    public function index()
    {
        $this->listar();
    }

    public function listar()
    {

        $data = $this->model->select("cliente.*, U.email")
            // ->join("usuario U", "U.id = cliente.id_usuario")
            ->where(["cliente.estado = 1"])
            ->get();
        $this->views->render($this, "listar", $data);
    }

    public function ver($id)
    {
        $cliente = $this->model->select("cliente.*, U.email, U.usuario")
            ->where(["cliente.id = $id"])
            ->first();
        $this->views->render($this, "ver", $cliente);
    }

    public function registrar()
    {
        $this->views->render($this, "formulario");
    }

    public function guardar()
    {
        try {
            if (!$_POST || empty($_POST)) throw new Exception("No hay datos a procesar");
            if (!$this->esFormValido($_POST)) return;

            $usuarioModel = new UsuariosModel();

            $idUsu = $usuarioModel->insert([
                "email" => $_POST["correo"],
                "usuario" => $_POST["usuario"],
                "clave" => $_POST["clave"]
            ]);

            $idCli = $this->model->insert([
                "apellidos" => $_POST["apellidos"],
                "nombres" => $_POST["nombres"],
                "direccion" => $_POST["direccion"],
                "telefono" => $_POST["telefono"],
                "dni" => $_POST["dni"],
                "id_usuario" => $idUsu,
            ]);

            if (!$idCli) throw new Exception("No se pudo registrar Cliente");

            header("Location: " . BASE_URL . "/clientes/listar?e=success");
        } catch (\Exception $e) {
            header("Location: " . BASE_URL . "/clientes/listar?e=" . $e->getMessage());
        }
    }

    private function esFormValido($formData)
    {
        return true;
    }
}
