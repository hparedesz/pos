<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CategoriaModel;

class Categoria extends BaseController
{
	protected $categorias;

	public function __construct()
	{
		$this->categorias = new CategoriaModel();
	}

	public function index($estado = 1)
	{

		$categorias = $this->categorias->where('estado', $estado)->findAll();
		$datos = ['titulo' => 'Categorias', "categorias" => $categorias];
		echo view('layout/header');
		echo view('layout/menu');
		echo view('categoria/index', $datos);
		echo view('layout/footer');
        echo view('categoria/script/script');
	}

	public function nuevo()
	{
		$datos = ['titulo' => 'Agregar Categoria'];
		echo view('layout/header');
		echo view('layout/menu');
		echo view('categoria/nuevo',$datos);
		echo view('layout/footer');
        echo view('categoria/script/script');
	}

	public function insertar(){
        if($this->validate('insertarCategoria')) {
            $this->categorias->save(['nombre' => $this->request->getPost('nombre'),
                'estado' => 1]);
            return redirect()->to(base_url() . '/categoria');
        }else{
            $datos = ['titulo' => 'Agregar Categoria','validation'=>$this->validator];
            echo view('layout/header');
            echo view('layout/menu');
            echo view('categoria/nuevo',$datos);
            echo view('layout/footer');
            echo view('categoria/script/script');
        }
    }

    public function editar($id)
    {
        $categoria = $this->categorias->where('id', $id)->first();
        $datos = ['titulo' => 'Editar Categoria','categoria'=>$categoria];
        echo view('layout/header');
        echo view('layout/menu');
        echo view('categoria/editar',$datos);
        echo view('layout/footer');
        echo view('categoria/script/script');
    }

    public function actualizar(){
        if($this->validate('insertarCategoria')) {
            $this->categorias->update($this->request->getPost('id'),
                ['nombre' => $this->request->getPost('nombre')]);
            return redirect()->to(base_url() . '/categoria');
        }
        $this->index();
    }

    public function eliminar($id){
        $this->categorias->update($id,['estado'=>0]);
        return redirect()->to(base_url().'/categoria/eliminados');
    }

    public function eliminados($estado = 0)
    {

        $categorias = $this->categorias->where('estado', $estado)->findAll();
        $datos = ['titulo' => 'Categorias Inactivas', "categorias" => $categorias];
        echo view('layout/header');
        echo view('layout/menu');
        echo view('categoria/eliminados', $datos);
        echo view('layout/footer');
        echo view('categoria/script/script');
    }

    public function activar($id){
        $this->categorias->update($id,['estado'=>1]);
        return redirect()->to(base_url().'/categoria');
    }
}
