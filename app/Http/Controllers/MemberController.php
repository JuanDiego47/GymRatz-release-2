<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use CAF\Member;
use CAF\User\Http\Requests\MembresForRequest;
use Illuminate\Support\Facades\Redirect;
use DB;
use Barryvdh\DomPDF\Facade\Pdf;

class MemberController extends Controller
{
    public function __construct()
    {

    }

    public function pdf()
    {
        //
        $classrooms=Classroom::all();
        $pdf=PDF::loadView('classroom.pdf',['classrooms'=>$classrooms]);
        return $pdf->stream();

        
        // return view("classroom.pdf",compact('classrooms'));
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(request)
        {
            $query=trum($request->get('SearchText'));
            $miembros=DB::table('categoria')->where('nombre', 'LIKE','%'.$query.'%')
            ->where('condition','=', '1')
            ->orderBy('id_miembro', 'desc')
            ->paginate(7);
            return view('member.index', ["miembros"=>$miembros, "searchText"=>$query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("member.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MembresForRequest $request)
    {
        $miembro=new Member;
        $miembro->nombre_Miembro=$request->get('nombre');
        $miembro->apellido_Miembro=$request->get('apellido');
        $miembro->correo_Miembro=$request->get('correo');
        $miembro->telefono_Miembro=$request->get('telefono');
        $miembro->estadoMembresia_Miembro=$request->get('estadoMembresia');
        $miembro->save();
        return Redirect::to('almacen/categoria');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view("member.show", ["miembro"=>Member::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("member.edit", ["miembro"=>Member::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MembresForRequest $request, $id)
    {
        $miembro=Member::findOrFail($id);
        $miembro->nombre_Miembro=$request->get('nombre');
        $miembro->apellido_Miembro=$request->get('apellido');
        $miembro->correo_Miembro=$request->get('correo');
        $miembro->telefono_Miembro=$request->get('telefono');
        $miembro->estadoMembresia_Miembro=$request->get('estadoMembresia');
        return Redirect::to('member');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $miembro=Member::findOrFail($id);
        $miembro->condition='0';
        $miembro->update();
        return Redirect::to('member');
    }
}
