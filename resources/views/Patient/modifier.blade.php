@extends('layouts.mainlayouts')

@section('contenu')




<div class="pagetitle">

  <div>

    @if (session('status'))
  <div class="alert alert-success">
  {{session('status')}}
  </div>

  @endif
<ul>
@foreach ($errors->all() as $error)
  <li class="alert alert-danger"> {{ $error }}</li>
@endforeach
</ul>
    <h1>Tableau Bord</h1>
    <nav>
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="dashboard">Accueil</a></li>
        <li class="breadcrumb-item active">Nouveau patient</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->

  <section class="section dashboard">

    <div class="row">
      <!-- Left side columns -->
      <div class="col-lg-12">
        <div class="row">

          <!-- Formulaire ajout du Patient -->

          <div class="col-12">
            <div class="card recent-sales overflow-auto">
              <div class="card-body">
                <h5 class="card-title">ajout d'un nouveau patient</h5>

              <form action="{{route('patient.update', [$patients->id] )}}" method="POST" class="row g-3">
                @method('PATCH')
                @csrf
              <div class="col-md-6">
                <label for="inputNom" class="form-label">nom</label>
                <input type="text" class="form-control" name="nom"  value="{{ $patients->nom}}">
              </div>

              <div class="col-md-6">
                <label for="inputPrenom" class="form-label">prenom</label>
                <input type="text" class="form-control" name="prenom"  value="{{ $patients->prenom}}">
              </div>

              <div class="col-md-6">
                <label for="inputAge" class="form-label">age</label>
                <input type="number" class="form-control" name="age"  value="{{ $patients->age}}">
              </div>

              <div class="col-md-6">
                <label for="inputTelephone" class="form-label">telephone</label>
                <input type="number" class="form-control" name="telephone"  value="{{ $patients->telephone}}">
              </div>

              <div class="col-md-6">
                <label for="inputSexe" class="form-label">sexe</label>
                <input type="text" class="form-control" name="sexe"  value="{{ $patients->sexe}}">
              </div>

              <div class="col-md-6">
                <label for="inputAdresse" class="form-label">adresse</label>
                <input type="text" class="form-control" name="adresse"  value="{{ $patients->adresse}}">
              </div>

              <div class="col-md-6">
                <label for="inputGroupe" class="form-label">group_sanguin</label>
                <input type="text" class="form-control" name="group_sanguin"  value="{{ $patients->groupe_sanguin}}">
              </div>

              <div class="col-md-6">
                <label for="inputName5" class="form-label">antecedant</label>
                <input type="text" class="form-control" name="antecedant"  value="{{ $patients->antecedant}}">
              </div>

              <div class="col-md-6">
                <label for="inputDernière" class="form-label">derniere_consultation</label>
                <input type="text" class="form-control" name="derniere_consultation"  value="{{ $patients->derniere_consultation}}">
              </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="reset" class="btn btn-danger">Annuler</button>
              </div>
            </form>

              </div>

            </div>
          </div>
          <!-- End Formulaire d'un nouveau Patient -->

        </div>
      </div>
      <!-- End Left side columns -->

    </div>
  </section>
  @include('require.footer')

@endsection


