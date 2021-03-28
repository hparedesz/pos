<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PresentacionModel;

class Presentacion extends BaseController
{
	protected $presentaciones;
	public function __construct()
	{
		$this->presentaciones = new PresentacionModel();
	}

	public function index($estado = 1)
	{

		$presentaciones = $this->presentaciones->where('estado', $estado)->findAll();
		$datos = ['titulo' => 'Presentaciones', "presentaciones" => $presentaciones];
		echo view('layout/header');
		echo view('layout/menu');
		echo view('presentacion/index', $datos);
		echo view('layout/footer');
        echo view('presentacion/script/script');
	}

	public function nuevo()
	{
        $datos = ['titulo' => 'Agregar Presentación'];
		echo view('layout/header');
		echo view('layout/menu');
		echo view('presentacion/nuevo',$datos);
		echo view('layout/footer');
        echo view('presentacion/script/script');
	}

	public function insertar(){
	    if($this->validate('insertarPresentacion')){
            $this->presentaciones->save(['nombre'=>$this->request->getPost('nombre'),
                                        'abreviatura'=>$this->request->getPost('abreviatura'),
                                    'estado'=>1]);
            return redirect()->to(base_url().'/presentacion');
	    }else{
            $datos = ['titulo' => 'Agregar Presentación','validation'=>$this->validator];
            echo view('layout/header');
            echo view('layout/menu');
            echo view('presentacion/nuevo',$datos);
            echo view('layout/footer');
            echo view('presentacion/script/script');
        }
    }

    public function editar($id)
    {
        $presentaciones = $this->presentaciones->where('id', $id)->first();
        $datos = ['titulo' => 'Editar Presentación','presentacion'=>$presentaciones];
        echo view('layout/header');
        echo view('layout/menu');
        echo view('presentacion/editar',$datos);
        echo view('layout/footer');
        echo view('presentacion/script/script');
    }

    public function actualizar(){
        if($this->validate('actualizarPresentacion')){
            $this->presentaciones->update($this->request->getPost('id'),
                ['nombre'=>$this->request->getPost('nombre'),
                'abreviatura'=>$this->request->getPost('abreviatura')]);
            return redirect()->to(base_url().'/presentacion');
        }
        $this->index();
    }

    public function eliminar($id){
        $this->presentaciones->update($id,['estado'=>0]);
        return redirect()->to(base_url().'/presentacion/eliminados');
    }

    public function eliminados($estado = 0)
    {

        $presentaciones = $this->presentaciones->where('estado', $estado)->findAll();
        $datos = ['titulo' => 'Presentacionese Inactivas', "presentaciones" => $presentaciones];
        echo view('layout/header');
        echo view('layout/menu');
        echo view('presentacion/eliminados', $datos);
        echo view('layout/footer');
        echo view('presentacion/script/script');
    }

    public function activar($id){
        $this->presentaciones->update($id,['estado'=>1]);
        return redirect()->to(base_url().'/presentacion');
    }
}
