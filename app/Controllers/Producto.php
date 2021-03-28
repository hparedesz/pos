<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductoModel;

class Producto extends BaseController
{
	protected $productos;
	public function __construct()
	{
		$this->productos = new ProductoModel();
	}

	public function index($estado = 1)
	{

		$db = db_connect();
        $builder = $db->table('producto p');
        $builder->select([
            'ps.idproducto',
            'p.codigo_barra',
            'p.nombre as producto',
            'p.precio_compra',
            'p.precio_venta',
            'p.stock_min',
            'ps.stock',
            'c.nombre as categoria',
            'm.nombre as marca',
            'pr.nombre as presentacion',
            'p.estado',
            'p.id']);
        $builder->join('producto_sucursal ps', 'p.id = ps.id');
        $builder->join('categoria c', 'c.id = p.idcategoria');
        $builder->join('marca m', 'm.id = p.idmarca');
        $builder->join('presentacion pr', 'pr.id = p.idpresentacion');
        $query = $builder->get();
		$datos = ['titulo' => 'Productos', "productos" => $query->getResultArray()];
		echo view('layout/header');
		echo view('layout/menu');
		echo view('producto/index', $datos);
		echo view('layout/footer');
        echo view('producto/script/script');
	}

	public function nuevo()
	{
        $datos = ['titulo' => 'Agregar Producto'];
		echo view('layout/header');
		echo view('layout/menu');
		echo view('producto/nuevo',$datos);
		echo view('layout/footer');
        echo view('producto/script/script');
	}

	public function insertar(){
	    if($this->validate('insertarProducto')){
            $this->productos->save(['nombre'=>$this->request->getPost('nombre'),
                                        'abreviatura'=>$this->request->getPost('abreviatura'),
                                    'estado'=>1]);
            return redirect()->to(base_url().'/producto');
	    }else{
            $datos = ['titulo' => 'Agregar Producto','validation'=>$this->validator];
            echo view('layout/header');
            echo view('layout/menu');
            echo view('producto/nuevo',$datos);
            echo view('layout/footer');
            echo view('producto/script/script');
        }
    }

    public function editar($id)
    {
        $productos = $this->productos->where('id', $id)->first();
        $datos = ['titulo' => 'Editar Producto','producto'=>$productos];
        echo view('layout/header');
        echo view('layout/menu');
        echo view('producto/editar',$datos);
        echo view('layout/footer');
        echo view('producto/script/script');
    }

    public function actualizar(){
        if($this->validate('actualizarProducto')){
            $this->productos->update($this->request->getPost('id'),
                ['nombre'=>$this->request->getPost('nombre'),
                'abreviatura'=>$this->request->getPost('abreviatura')]);
            return redirect()->to(base_url().'/producto');
        }
        $this->index();
    }

    public function eliminar($id){
        $this->productos->update($id,['estado'=>0]);
        return redirect()->to(base_url().'/producto/eliminados');
    }

    public function eliminados($estado = 0)
    {

        $productos = $this->productos->where('estado', $estado)->findAll();
        $datos = ['titulo' => 'Productos Inactivas', "productos" => $productos];
        echo view('layout/header');
        echo view('layout/menu');
        echo view('producto/eliminados', $datos);
        echo view('layout/footer');
        echo view('producto/script/script');
    }

    public function activar($id){
        $this->productos->update($id,['estado'=>1]);
        return redirect()->to(base_url().'/producto');
    }
}
