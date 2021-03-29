<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ClienteModel;

class Cliente extends BaseController
{
	protected $clientes;

	public function __construct()
	{
		$this->clientes = new ClienteModel();
	}

	public function index($estado = 1)
	{

		$clientes = $this->clientes->where('estado', $estado)->findAll();
		$datos = ['titulo' => 'Clientes', "clientes" => $clientes];
		echo view('layout/header');
		echo view('layout/menu');
		echo view('cliente/index', $datos);
		echo view('layout/footer');
        echo view('cliente/script/script');
	}

	public function nuevo()
	{
		$datos = ['titulo' => 'Agregar Cliente'];
		echo view('layout/header');
		echo view('layout/menu');
		echo view('cliente/nuevo',$datos);
		echo view('layout/footer');
        echo view('cliente/script/script');
	}

	public function insertar(){
        if($this->validate('insertarCliente')) {
            $this->clientes->save([
                'nombre' => $this->request->getPost('nombre'),
                'direccion' => $this->request->getPost('direccion'),
                'nit' => $this->request->getPost('nit'),
                'telefono' => $this->request->getPost('telefono'),
                'estado' => 1]);
            return redirect()->to(base_url() . '/cliente');
        }else{
            $datos = ['titulo' => 'Agregar Cliente','validation'=>$this->validator];
            echo view('layout/header');
            echo view('layout/menu');
            echo view('cliente/nuevo',$datos);
            echo view('layout/footer');
            echo view('cliente/script/script');
        }
    }

    public function editar($id,$validation = null)
    {
        $cliente = $this->clientes->where('id', $id)->first();
        if($validation != null) {
            $datos = ['titulo' => 'Editar Cliente', 'cliente' => $cliente,'validation'=>$validation];
        }else{
            $datos = ['titulo' => 'Editar Cliente', 'cliente' => $cliente];
        }
        echo view('layout/header');
        echo view('layout/menu');
        echo view('cliente/editar',$datos);
        echo view('layout/footer');
        echo view('cliente/script/script');
    }

    public function actualizar(){
        if($this->validate('actualizarCliente')) {
            $this->clientes->update($this->request->getPost('id'),
                ['nombre' => $this->request->getPost('nombre'),
                'direccion' => $this->request->getPost('direccion'),
                'nit' => $this->request->getPost('nit'),
                'telefono' => $this->request->getPost('telefono')]);
            return redirect()->to(base_url() . '/cliente');
        }else{
            return $this->editar($this->request->getPost('id'),$this->validator);
        }
    }

    public function eliminar($id){
        $this->clientes->update($id,['estado'=>0]);
        return redirect()->to(base_url().'/cliente/eliminados');
    }

    public function eliminados($estado = 0)
    {
        $clientes = $this->clientes->where('estado', $estado)->findAll();
        $datos = ['titulo' => 'Clientes Inactivas', "clientes" => $clientes];
        echo view('layout/header');
        echo view('layout/menu');
        echo view('cliente/eliminados', $datos);
        echo view('layout/footer');
        echo view('cliente/script/script');
    }

    public function activar($id){
        $this->clientes->update($id,['estado'=>1]);
        return redirect()->to(base_url().'/cliente');
    }
}