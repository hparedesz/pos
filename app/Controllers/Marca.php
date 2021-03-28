<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MarcaModel;

class Marca extends BaseController
{
	protected $marcas;

	public function __construct()
	{
		$this->marcas = new MarcaModel();
	}

	public function index($estado = 1)
	{

		$marcas = $this->marcas->where('estado', $estado)->findAll();
		$datos = ['titulo' => 'Marcas', "marcas" => $marcas];
		echo view('layout/header');
		echo view('layout/menu');
		echo view('marca/index', $datos);
		echo view('layout/footer');
        echo view('marca/script/script');
	}

	public function nuevo()
	{
		$datos = ['titulo' => 'Agregar Marca'];
		echo view('layout/header');
		echo view('layout/menu');
		echo view('marca/nuevo',$datos);
		echo view('layout/footer');
        echo view('marca/script/script');
	}

	public function insertar(){
        if($this->validate('insertarMarca')) {
            $this->marcas->save(['nombre' => $this->request->getPost('nombre'),
                'estado' => 1]);
            return redirect()->to(base_url() . '/marca');
        }else{
            $datos = ['titulo' => 'Agregar Marca','validation'=>$this->validator];
            echo view('layout/header');
            echo view('layout/menu');
            echo view('marca/nuevo',$datos);
            echo view('layout/footer');
            echo view('marca/script/script');
        }
    }

    public function editar($id)
    {
        $marca = $this->marcas->where('id', $id)->first();
        $datos = ['titulo' => 'Editar Marca','marca'=>$marca];
        echo view('layout/header');
        echo view('layout/menu');
        echo view('marca/editar',$datos);
        echo view('layout/footer');
        echo view('marca/script/script');
    }

    public function actualizar(){
        if($this->validate('insertarMarca')) {
            $this->marcas->update($this->request->getPost('id'),
                ['nombre' => $this->request->getPost('nombre')]);
            return redirect()->to(base_url() . '/marca');
        }
        $this->index();
    }

    public function eliminar($id){
        $this->marcas->update($id,['estado'=>0]);
        return redirect()->to(base_url().'/marca/eliminados');
    }

    public function eliminados($estado = 0)
    {

        $marcas = $this->marcas->where('estado', $estado)->findAll();
        $datos = ['titulo' => 'Marcas Inactivas', "marcas" => $marcas];
        echo view('layout/header');
        echo view('layout/menu');
        echo view('marca/eliminados', $datos);
        echo view('layout/footer');
        echo view('marca/script/script');
    }

    public function activar($id){
        $this->marcas->update($id,['estado'=>1]);
        return redirect()->to(base_url().'/marca');
    }
}
