@extends('app')
@section('content')
    <div class="text-center m-5 w-80">
        <h2 class="mb-5">Consultar Terceros</h2>
        <select class="form-select" id="form-select" aria-label="Default select example" onchange="buscarTipo()">
            <option selected>Selecciona el tipo de persona que desea buscar</option>
            <option value="1">Natural</option>
            <option value="2">Jurídica</option>
        </select>
        <div class="mx-auto mt-5 w-50 border border-light p-4 rounded" id="divNumId" hidden>
            <form class="row g-3" action="{{ route('buscar.natural') }}" method="POST">
                @csrf
                <div class="form-floating col-md-8">
                    <input type="text" class="form-control" id="numId" name="numId" placeholder="123456789"
                        required>
                    <label class="text-secondary ms-2" for="floatingInput">Número de identificación</label>
                </div>
                <div class="form-floating mb-3 col-md-1 pt-2">
                    <button type="submit" class="btn btn-primary fw-bold">Buscar</button>
                </div>
            </form>
        </div>
        <div class="mx-auto mt-5 w-50 border border-light p-4 rounded" id="divNit" hidden>
            <form class="row g-3" action="{{ route('buscar.juridica') }}" method="POST">
                @csrf
                <div class="form-floating col-md-8">
                    <input type="text" class="form-control" id="nit" name="nit" placeholder="123456789-7"
                        required>
                    <label class="text-secondary ms-2" for="floatingInput">NIT</label>
                </div>
                <div class="form-floating mb-3 col-md-1 pt-2">
                    <button type="submit" class="btn btn-primary fw-bold">Buscar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
