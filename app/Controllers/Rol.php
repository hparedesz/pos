<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RolModel;

class Rol extends BaseController
{
	protected $roles;

	public function __construct()
	{
		$this->roles = new RolModel();
	}

	public function index($estado = 1)
	{
		$roles = $this->roles->where('estado', $estado)->findAll();
		$datos = ['titulo' => 'Rol', "roles" => $roles];
		echo view('layout/header');
		echo view('layout/menu');
		echo view('rol/index', $datos);
		echo view('layout/footer');
        echo view('rol/script/script');
	}

	public function nuevo()
	{
		$datos = ['titulo' => 'Agregar Rol'];
		echo view('layout/header');
		echo view('layout/menu');
		echo view('rol/nuevo',$datos);
		echo view('layout/footer');
        echo view('rol/script/script');
	}

	public function insertar(){
        if($this->validate('insertarRol')) {
            $this->roles->save(['nombre' => $this->request->getPost('nombre'),
                'estado' => 1]);
            return redirect()->to(base_url() . '/rol');
        }else{
            $datos = ['titulo' => 'Agregar Rol','validation'=>$this->validator];
            echo view('layout/header');
            echo view('layout/menu');
            echo view('rol/nuevo',$datos);
            echo view('layout/footer');
            echo view('rol/script/script');
        }
    }

    public function editar($id,$validation = null)
    {
        $rol = $this->roles->where('id', $id)->first();
        if($validation != null) {
            $datos = ['titulo' => 'Editar Rol', 'rol' => $rol,'validation'=>$validation];
        }else{
            $datos = ['titulo' => 'Editar Rol', 'rol' => $rol];
        }
        echo view('layout/header');
        echo view('layout/menu');
        echo view('rol/editar',$datos);
        echo view('layout/footer');
        echo view('rol/script/script');
    }

    public function actualizar(){
        if($this->validate('actualizarRol')) {
            $this->roles->update($this->request->getPost('id'),
                ['nombre' => $this->request->getPost('nombre')]);
            return redirect()->to(base_url() . '/rol');
        }else{
            return $this->editar($this->request->getPost('id'),$this->validator);
        }
    }

    public function eliminar($id){
        $this->roles->update($id,['estado'=>0]);
        return redirect()->to(base_url().'/rol/eliminados');
    }

    public function eliminados($estado = 0)
    {

        $roles = $this->roles->where('estado', $estado)->findAll();
        $datos = ['titulo' => 'Rol Inactivas', "roles" => $roles];
        echo view('layout/header');
        echo view('layout/menu');
        echo view('rol/eliminados', $datos);
        echo view('layout/footer');
        echo view('rol/script/script');
    }

    public function activar($id){
        $this->roles->update($id,['estado'=>1]);
        return redirect()->to(base_url().'/rol');
    }
}
