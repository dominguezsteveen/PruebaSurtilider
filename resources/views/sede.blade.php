@extends('app')
@section('content')
    <div class="text-center m-5 w-80">
        <h2 class="mb-5">Sedes Terceros</h2>
        @if ($tercero->naturales)
            @foreach ($tercero->naturales as $natural)
                <div class="w-75 mx-auto">
                    <div class="input-group mb-3">
                        <span class="input-group-text">{{ $natural->tipo_id }}</span>
                        <input type="text" aria-label="First name" class="form-control" value="{{ $natural->numero_id }}">
                        <span class="input-group-text">Nombre completo</span>
                        <input type="text" aria-label="First name" class="form-control" value="{{ $natural->nombre }}">
                        <input type="text" aria-label="Last name" class="form-control" value=" {{ $natural->apellido }}">
                    </div>
                    <div class="input-group">
                        <span class="input-group-text">Telefono</span>
                        <input type="text" aria-label="telefono" class="form-control" value="{{ $tercero->telefono }}">
                        <span class="input-group-text">Estado</span>
                        <input type="text" aria-label="correo" class="form-control"
                            value="{{ $tercero->estado == 1 ? 'Activo' : 'Inactivo' }}">
                    </div>

                </div>
            @endforeach
        @endif
        @if ($tercero->juridicas)
            @foreach ($tercero->juridicas as $juridica)
                <div class="w-75 mx-auto">
                    <div class="input-group mb-3">
                        <span class="input-group-text">NIT</span>
                        <input type="text" aria-label="First name" class="form-control" value="{{ $juridica->nit }}">
                        <span class="input-group-text">Razón Social</span>
                        <input type="text" aria-label="First name" class="form-control"
                            value="{{ $juridica->razon_social }}">
                    </div>
                    <div class="input-group">
                        <span class="input-group-text">Telefono</span>
                        <input type="text" aria-label="telefono" class="form-control" value="{{ $tercero->telefono }}">
                        <span class="input-group-text">Estado</span>
                        <input type="text" aria-label="correo" class="form-control"
                            value="{{ $tercero->estado == 1 ? 'Activo' : 'Inactivo' }}">
                    </div>

                </div>
            @endforeach
        @else
        @endif
        <div class="mx-auto mt-5 w-75 border border-light p-4 rounded" id="divNatural">
            <h3 class="border-bottom pb-3 mb-5">Añadir Sede</h3>
            <form class="row g-3" action="" method="POST">
                @csrf
                <div class="form-floating mb-3 col-md-6 h-auto">
                    <input type="text" class="form-control" id="nombre_sede" name="nombre_sede" placeholder="Nombre Sede" required>
                    <label class="text-secondary ms-2" for="floatingInput">Nombre Sede</label>
                </div>
                <div class="form-floating mb-3 col-md-6">
                    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="3123456789"
                        required>
                    <label class="text-secondary ms-2" for="floatingInput">Telefono</label>
                </div>
                <div class="form-floating mb-3 col-md-6">
                    <input type="text" class="form-control" id="direccion" name="direccion"
                        placeholder="calle ejemplo #12-34" required>
                    <label class="text-secondary ms-2" for="floatingInput">Dirección</label>
                </div>
                <div class="form-floating mb-3 col-md-6">
                    <select class="form-select" id="estado" name="estado" aria-label="Floating label select example">
                        <option value="1">Activo</option>
                        <option value="0">Inactivo</option>
                    </select>
                    <label class="text-dark ms-2" for="floatingSelect">Estado</label>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary fw-bold">Enviar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
