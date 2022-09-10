<?php

namespace App\Http\Controllers;

use App\Models\Juridica;
use App\Models\Natural;
use App\Models\Sede;
use App\Models\Tercero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TerceroController extends Controller
{

    public function index()
    {
        return view('formulario');
    }

    public function addTerceroNatural()
    {
        $tercero = new Tercero();
        $tercero->telefono = request('telefono');
        $tercero->correo = request('correo');
        $tercero->direccion = request('direccion');
        $tercero->estado = request('estado');
        $tercero->save();

        $natural = new Natural();
        $natural->numero_id = request('numId');
        $natural->tipo_id = request('tipoId');
        $natural->nombre = request('nombre');
        $natural->apellido = request('apellido');
        $natural->id_tercero = $tercero->id_tercero;
        $natural->save();

        return redirect()->to('/sedes/' . $tercero->id_tercero);
    }

    public function addTerceroJuridica()
    {
        $tercero = new Tercero();
        $tercero->telefono = request('telefono');
        $tercero->correo = request('correo');
        $tercero->direccion = request('direccion');
        $tercero->estado = request('estado');
        $tercero->save();

        $juridica = new Juridica();
        $juridica->nit = request('nit');
        $juridica->razon_social = request('razon_social');
        $juridica->id_tercero = $tercero->id_tercero;
        $juridica->save();

        return redirect()->to('/sedes/' . $tercero->id_tercero);
    }

    public function indexSede($idTercero)
    {
        $tercero = Tercero::where('id_tercero', $idTercero)->first();
        return view('sede', compact('tercero'));
    }

    public function addSede($idTercero)
    {
        $sede = new Sede();
        $sede->nombre_sede = request('nombre_sede');
        $sede->telefono = request('telefono');
        $sede->direccion = request('direccion');
        $sede->estado = request('estado');
        $sede->id_tercero = $idTercero;
        $sede->save();

        return back();
    }

    public function indexConsultar()
    {
        return view('consultar');
    }

    public function buscarTerceroNatural()
    {
        $natural = Natural::where('numero_id', request('numId'))->first();
        return redirect()->to('/consultar-tercero/natural/' . $natural->numero_id . '');
    }

    public function verTerceroNatural($numId)
    {
        $natural = Natural::where('numero_id', $numId)->first();
        return view('consultar_natural', compact('natural'));
    }
    public function buscarTerceroJuridica()
    {
        $juridica = Juridica::where('nit', request('nit'))->first();
        return redirect()->to('/consultar-tercero/juridica/' . $juridica->nit . '');
    }

    public function verTerceroJuridica($nit)
    {
        $juridica = Juridica::where('nit', request('nit'))->first();
        return view('consultar_juridica', compact('juridica'));
    }

    public function cambiarEstadoTercero()
    {
        $tercero = Tercero::where('id_tercero', request('id_tercero'))->first();
        if ($tercero) {
            if ($tercero->estado == 1) {
                $tercero->estado = 0;
            } else {
                $tercero->estado = 1;
            }
            $tercero->save();
        }
        return back();
    }
}
