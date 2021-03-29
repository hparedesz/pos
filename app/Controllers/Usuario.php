<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RolModel;
use App\Models\UsuarioModel;

class Usuario extends BaseController
{
	protected $usuarios;
    protected $roles;

	public function __construct()
	{
		$this->usuarios = new UsuarioModel();
        $this->roles = new RolModel();
	}

	public function index($estado = 1)
	{
        $db = db_connect();
        $builder = $db->table('usuario u');
        $builder->select([
            'u.id',
            'u.nombre',
            'u.username',
            'u.email',
            'r.nombre as rol',
            'u.estado']);
        $builder->join('rol r', 'r.id = u.idrol');
        $builder->where('u.estado',$estado);
        $query = $builder->get();
        $datos = ['titulo' => 'Usuarios', "usuarios" => $query->getResultArray()];
		echo view('layout/header');
		echo view('layout/menu');
		echo view('usuario/index', $datos);
		echo view('layout/footer');
        echo view('usuario/script/script');
	}

	public function nuevo($estado = 1)
	{
        $roles = $this->roles->where('estado', $estado)->findAll();
        $datos = ['titulo' => 'Agregar Usuario', "roles" => $roles];

		echo view('layout/header');
		echo view('layout/menu');
		echo view('usuario/nuevo',$datos);
		echo view('layout/footer');
        echo view('usuario/script/script');
	}

	public function insertar(){
        if($this->validate('insertarUsuario')) {
            $hash = password_hash($this->request->getPost('password'),PASSWORD_DEFAULT);
            $this->usuarios->save([
                'nombre' => $this->request->getPost('nombre'),
                'username' => $this->request->getPost('username'),
                'email' => $this->request->getPost('email'),
                'password' => $hash,
                'idrol' => $this->request->getPost('rol'),
                'estado' => 1]);
            return redirect()->to(base_url() . '/usuario');
        }else{
            $roles = $this->roles->where('estado', 1)->findAll();
            $datos = ['titulo' => 'Agregar Usuario','validation'=>$this->validator,'roles'=>$roles];
            echo view('layout/header');
            echo view('layout/menu');
            echo view('usuario/nuevo',$datos);
            echo view('layout/footer');
            echo view('usuario/script/script');
        }
    }

    public function editar($id,$validation = null)
    {
        $usuario = $this->usuarios->where('id', $id)->first();
        $roles = $this->roles->where('estado', 1)->findAll();
        if($validation != null) {
            $datos = ['titulo' => 'Editar Usuario', 'usuario' => $usuario,'roles'=>$roles,'validation'=>$validation];
        }else{
            $datos = ['titulo' => 'Editar Usuario', "usuario" => $usuario,'roles'=>$roles];
        }
        echo view('layout/header');
        echo view('layout/menu');
        echo view('usuario/editar',$datos);
        echo view('layout/footer');
        echo view('usuario/script/script');
    }

    public function actualizar(){
        if($this->validate('actualizarUsuario')) {
            $this->usuarios->update($this->request->getPost('id'),
                    ['nombre' => $this->request->getPost('nombre'),
                    'username' => $this->request->getPost('username'),
                    'email' => $this->request->getPost('email'),
                    'idrol' => $this->request->getPost('rol')]);
            return redirect()->to(base_url() . '/usuario');
        }else{
            return $this->editar($this->request->getPost('id'),$this->validator);
        }
    }

    public function eliminar($id){
        $this->usuarios->update($id,['estado'=>0]);
        return redirect()->to(base_url().'/usuario/eliminados');
    }

    public function eliminados($estado = 0)
    {
        $db = db_connect();
        $builder = $db->table('usuario u');
        $builder->select([
            'u.id',
            'u.nombre',
            'u.username',
            'u.email',
            'r.nombre as rol',
            'u.estado']);
        $builder->join('rol r', 'r.id = u.idrol');
        $builder->where('u.estado',$estado);
        $query = $builder->get();
        $datos = ['titulo' => 'Usuarios Inactivos', "usuarios" => $query->getResultArray()];
        echo view('layout/header');
        echo view('layout/menu');
        echo view('usuario/eliminados', $datos);
        echo view('layout/footer');
        echo view('usuario/script/script');
    }

    public function activar($id){
        $this->usuarios->update($id,['estado'=>1]);
        return redirect()->to(base_url().'/usuario');
    }
}
