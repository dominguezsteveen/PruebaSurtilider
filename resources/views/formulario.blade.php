@extends('app')
@section('content')
    <div class="text-center m-5 w-80">
        <h2 class="mb-5">Formulario Terceros</h2>
        <select class="form-select" id="form-select" aria-label="Default select example" onchange="prueba()">
            <option selected>Selecciona el tipo de persona que desea agregar</option>
            <option value="1">Natural</option>
            <option value="2">Jurídica</option>
        </select>
        <div class="mx-auto mt-5 w-75 border border-light p-4 rounded" id="divNatural" hidden>
            <h3 class="border-bottom pb-3 mb-5">Persona Natural</h3>
            <form class="row g-3" action="{{ route('submit.natural') }}" method="POST">
                @csrf
                <div class="form-floating mb-3 col-md-6">
                    <select class="form-select" id="tipoId" name="tipoId" aria-label="Floating label select example">
                        <option value="CC">CC</option>
                        <option value="CE">CE</option>
                        <option value="TI">TI</option>
                    </select>
                    <label class="text-dark ms-2" for="floatingSelect">Tipo de identificación</label>
                </div>
                <div class="form-floating mb-3 col-md-6">
                    <input type="number" class="form-control" id="numId" name="numId" placeholder="123456789"
                        required>
                    <label class="text-secondary ms-2" for="floatingInput">Número de identificación</label>
                </div>
                <div class="form-floating mb-3 col-md-6 h-auto">
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
                    <label class="text-secondary ms-2" for="floatingInput">Nombre</label>
                    @error('nombre')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-floating mb-3 col-md-6">
                    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido"
                        required>
                    <label class="text-secondary ms-2" for="floatingInput">Apellido</label>
                </div>
                <div class="form-floating mb-3 col-md-6 h-auto">
                    <input type="email" class="form-control" id="correo" name="correo" placeholder="correo@correo.com"
                        required>
                    <label class="text-secondary ms-2" for="floatingInput">Correo Electrónico</label>
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
        <div class="mx-auto mt-5 w-75 border border-light p-4 rounded" id="divJuridica" hidden>
            <h3 class="border-bottom pb-3 mb-5">Persona Jurídica</h3>
            <form class="row g-3" action="{{ route('submit.juridica') }}" method="POST">
                @csrf
                <div class="form-floating mb-3 col-md-6">
                    <input type="text" class="form-control" id="nit" name="nit" placeholder="123456789-7"
                        required>
                    <label class="text-secondary ms-2" for="floatingInput">NIT</label>
                </div>
                <div class="form-floating mb-3 col-md-6">
                    <input type="text" class="form-control" id="razon_social" name="razon_social"
                        placeholder="Razón Social" required>
                    <label class="text-secondary ms-2" for="floatingInput">Razón Social</label>
                </div>
                <div class="form-floating mb-3 col-md-6 h-auto">
                    <input type="text" class="form-control" id="correo" name="correo"
                        placeholder="correo@correo.com" required>
                    <label class="text-secondary ms-2" for="floatingInput">Correo Electrónico</label>
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
                    <select class="form-select" id="estado" name="estado"
                        aria-label="Floating label select example">
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
