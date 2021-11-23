<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SocialProfile;
use Illuminate\Support\Facades\Hash;

use Spatie\Permission\Models\Role;

class UserController extends Controller
{

    public function __construct()
    {
        // depronto falta el show
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('can:user.index')->only('index');
        $this->middleware('can:user.create')->only('create', 'store');
        $this->middleware('can:user.destroy')->only('destroy');
        $this->middleware('can:user.role')->only('role', 'saverole');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('name', 'ASC')->paginate();

        return view('users.index',[
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validar campos
        $validate = $this->validate($request,[
            'document_type' => ['required', 'string', 'max:45'],
            'document' => ['required', 'integer', 'min:8', 'unique:users'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:5', 'confirmed'],
            'terms' => ['required', 'accepted'],
        ]);

        // crear variables
        $document_type = $request->input('document_type');
        $document = $request->input('document');
        $name = $request->input('name');
        $email = $request->input('email');
        $password = Hash::make($request->input('password'));
        $terms = $request->input('terms');

        // instanciar usuario
        $user = new User();
        $user->document_type = $document_type;
        $user->document = $document;
        $user->name = $name;
        $user->email = $email;
        $user->email_verified_at = time();
        $user->password = $password;
        $user->terms = $terms;

        $user->save();

        return redirect()->route('user.index')->with(['message' => 'Usuario Creado Satisfactoriamente']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dump(\Helper::Usercan($id));
        die();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!\Helper::Usercan($id, 'user.index')){
            return redirect()->route('dashboard');
        }

        $user = User::find($id);
        return view('users.edit',[
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(!\Helper::Usercan($id, 'user.index')){
            return redirect()->route('dashboard');
        }
        
        // dump($request);
        // dump($id);
        // die();

        //conseguir usuario a editar
    	$user = User::find($id);
        // usuario que esta editando (no nesesariamente son los mismos)
        $userAuth = \Auth::user();

    	//validar los datos del formulario
    	$validate = $this->validate($request,[
            'document_type' => ['required', 'string', 'max:45'],
            'document' => ['required', 'integer', 'min:8', 'unique:users,document,{$id}'],
            'name' => ['string', 'max:255'],
    		'email' => ['string', 'email', 'max:255', "unique:users,email,{$id}"],
    		'password' => ['confirmed']
    	]);

    	//recojer datos del formulario
        $document = $request->input('document');
        $document_type = $request->input('document_type');
    	$name =	$request->input('name');
    	$email =	$request->input('email');

        if($request->input('password')){
            $password =	Hash::make($request->input('password'));
        }

        //asignar nuevos valores al objeto de usuarios
        $user->document = $document;
        $user->document_type = $document_type;
    	$user->name = $name;
    	$user->email =  $email;
        if(isset($password)){
            $user->password = $password;
        }

    	//actualizar en la base de datos

    	$user->update();

    	return redirect()->route('user.edit', $user->id)
    					 ->with(['message' => 'Usuario Actualizado Correctamente']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if($user->socialProfiles){
            foreach($user->socialProfiles as $socialProfile){
                $socialProfile->delete();
            }
        }
        $user->delete();

        return redirect()->route('user.index')->with(['message' => "Usuario eliminado exitosamente"]);
    }

    // para los roles - ruta protegida
    public function role(Request $request, $id){
        $user = User::find($id);
        $roles = Role::all();

        return view('users.role',[
            'user' => $user,
            'roles' => $roles
        ]);
    }

    // para roles - ruta protegida
    public function saveRole(Request $request){

        $id = $request->input('user');
        $roles = $request->roles;

        $user = User::find($id);

        $user->roles()->sync($roles);

        return redirect()->route('user.index')->with('message', 'roles asignados');
    }
}
