@extends ('layouts.base')
@section('content')

<div>
    <h2>Crear destino</h2>

    @if ($errors->any())
    <div class="alert alert-danger mt-2">
        <strong>Lo lamento algo fue mal...</strong> <br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{route('happy_travel.store')}}" method="POST" class="create-dest">
    @csrf
    <div class="col-mb-3 position-relative">
        <label for="validationTooltip01" class="form-label">Título</label>
        <input type="text" name="name" class="form-control" id="validationTooltip01" placeholder="Indica el nombre del destino">
        <!-- <div class="valid-tooltip">
            Looks good!
        </div> -->
    </div>
    <div class="col-mb-3 position-relative">
        <label for="validationTooltip01" class="form-label">Ubicación</label>
        <input type="text" name="location" class="form-control" id="validationTooltip01" placeholder="Indica el destino">
        <!-- <div class="valid-tooltip">
            Looks good!
        </div> -->
    </div>

    <div class="mb-3">
    <label for="validationTextarea" class="form-label">Imagen</label>
    <input type="file" name="image" class="form-control" aria-label="file example" placeholder="Sube una imagen">
    <div class="invalid-feedback">Example invalid form file feedback</div>
  </div>

  <div class="mb-3">
    <label for="validationTextarea" class="form-label">¿Por qué quieres viajar allí?</label>
    <textarea class="form-control" name="description" id="validationTextarea" placeholder="Cuéntanos por qué te gusta este destino"></textarea>
    <!-- <div class="invalid-feedback">
      Please enter a message in the textarea.
    </div> -->
  </div>

  <div class="mb-3">
    <button class="btn btn-primary" type="submit">Enviar formulario</button>
  </div>
    </form>
    </div>
@endsection