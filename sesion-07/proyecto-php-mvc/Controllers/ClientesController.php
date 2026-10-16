<?php

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
}
