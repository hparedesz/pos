<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var string[]
	 */
	public $ruleSets = [
		Rules::class,
		FormatRules::class,
		FileRules::class,
		CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array<string, string>
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
    public $insertarCategoria =[
        'nombre' => 'required|min_length[1]|max_length[25]'
    ];
    public $actualizarCategoria =[
        'id'=>'required',
        'nombre' => 'required|min_length[1]|max_length[25]'
    ];

    public $insertarMarca =[
        'nombre' => 'required|min_length[1]|max_length[25]'
    ];
    public $actualizarMarca =[
        'id'=>'required',
        'nombre' => 'required|min_length[1]|max_length[25]'
    ];
    public $insertarRol =[
        'nombre' => 'required|min_length[1]|max_length[25]'
    ];
    public $actualizarRol =[
        'id'=>'required',
        'nombre' => 'required|min_length[1]|max_length[25]'
    ];

    public $insertarPresentacion =[
        'nombre' => 'required|min_length[1]|max_length[25]',
        'abreviatura' => 'min_length[1]|max_length[10]'
    ];

    public $actualizarPresentacion =[
        'id'=>'required',
        'nombre' => 'required|min_length[1]|max_length[25]',
        'abreviatura' => 'min_length[1]|max_length[10]'
    ];
    public $insertarCliente =[
        'nombre' => 'required|min_length[1]|max_length[50]',
        'direccion' => 'min_length[1]|max_length[100]',
        'nit' => 'required',
        'telefono' => 'required',
    ];

    public $actualizarCliente =[
        'id'=>'required',
        'nombre' => 'required|min_length[1]|max_length[50]',
        'direccion' => 'min_length[1]|max_length[100]',
        'nit' => 'required',
        'telefono' => 'required'
    ];

    public $insertarUsuario =[
        'nombre' => 'required|min_length[1]|max_length[50]',
        'username' => 'min_length[1]|max_length[100]',
        'password' => 'required',
        'repassword' => 'required|matches[password]',
        'email' => 'required|valid_email',
        'rol' => 'required'
    ];

    public $actualizarUsuario =[
        'id'=>'required',
        'nombre' => 'required|min_length[1]|max_length[50]',
        'username' => 'min_length[1]|max_length[100]',
        'email' => 'required|valid_email',
        'rol' => 'required'
    ];

    public $actualizarConfiguracion =[
        'empresa_nombre' => 'required|min_length[1]|max_length[50]',
        'empresa_direccion' => 'min_length[1]|max_length[100]',
        'empresa_telefono' => 'required|min_length[1]|max_length[10]'
    ];
	//--------------------------------------------------------------------
}
