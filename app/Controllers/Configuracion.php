<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ConfiguracionModel;

class Configuracion extends BaseController
{
	protected $configuraciones;
	public function __construct()
	{
		$this->configuraciones = new ConfiguracionModel();
	}

	public function index($estado = 1)
	{
		$empresa_nombre = $this->configuraciones->where('nombre', 'empresa_nombre')->first();
        $empresa_direccion = $this->configuraciones->where('nombre', 'empresa_direccion')->first();
        $empresa_telefono = $this->configuraciones->where('nombre', 'empresa_telefono')->first();

        $datos = ['titulo' => 'Configuraciones', "empresa_nombre" => $empresa_nombre,"empresa_direccion"=>$empresa_direccion,"empresa_telefono"=>$empresa_telefono];
		echo view('layout/header');
		echo view('layout/menu');
		echo view('configuracion/index', $datos);
		echo view('layout/footer');
        echo view('configuracion/script/script');
	}

    public function actualizar(){
        if($this->validate('actualizarConfiguracion')){
            $this->configuraciones->whereIn('nombre',['empresa_nombre'])->set(['valor'=>$this->request->getPost('empresa_nombre')])->update();
            $this->configuraciones->whereIn('nombre',['empresa_direccion'])->set(['valor'=>$this->request->getPost('empresa_direccion')])->update();
            $this->configuraciones->whereIn('nombre',['empresa_telefono'])->set(['valor'=>$this->request->getPost('empresa_telefono')])->update();
            return redirect()->to(base_url().'/configuracion');
        }else{
            return redirect()->to(base_url().'/configuracion');
        }
    }
}
