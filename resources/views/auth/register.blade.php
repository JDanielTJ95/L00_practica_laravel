@extends('layout.base')

@section('content')
<section class="flex flex-col gap-4 w-full max-w-lg">

  <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4">
    
    <legend class="fieldset-legend">Login</legend>

    <label class="label">Email</label>
    <input type="email" class="input" placeholder="Email" />

    <label class="label">Nombre</label>
    <input type="text" class="input" placeholder="Nombre" />

    <label class="label">Password</label>
    <input type="password" class="input" placeholder="contraseña" />

    <label class="label">Password</label>
    <input type="password" class="input" placeholder="confirmar contraseña" />

    <button class="btn btn-info mt-4">Register</button>

  </fieldset>

</section>
@endsection