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
        <li class="breadcrumb-item active">Nouveau docteur</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->

  <section class="section dashboard">

    <div class="row">
      <!-- Left side columns -->
      <div class="col-lg-12">
        <div class="row">

          <!-- Formulaire ajout du President -->

          <div class="col-12">
            <div class="card recent-sales overflow-auto">
              <div class="card-body">
                <h5 class="card-title">ajout d'un docteur </h5>

              <form method="POST" action="{{route('docteur.update', $docteurs->id )}}" class="row g-3">
                @method('PATCH')
                @csrf
              <div class="col-md-6">
                <label for="inputName5" class="form-label">Nom</label>
                <input type="text" class="form-control" name="nom"  value="{{ $docteurs->nom}}">
              </div>
              @csrf
              <div class="col-md-6">
                <label for="inputName5" class="form-label">prenom</label>
                <input type="text" class="form-control" name="prenom"  value="{{ $docteurs->prenom}}">
              </div>

              <div class="col-md-6">
                <label for="inputdate" class="form-label">date de naissance</label>
                <input type="date" class="form-control" name="date_naissance" value="{{ $docteurs->date_naissance}}">
              </div>

              <div class="col-6">
                <label for="inputAddress5" class="form-label">adresse</label>
                <input type="text" class="form-control" name="adresse" value="{{ $docteurs->adresse}}">
              </div>

              <div class="col-6">
                <label for="inputSexe" class="form-label">sexe</label>
                <input type="text" class="form-control" name="sexe" value="{{ $docteurs->sexe}}">
              </div>

              <div class="col-6">
                <label for="inputSpecialite" class="form-label">specialite</label>
                <input type="text" class="form-control" name="specialite" value="{{ $docteurs->specialite}}">
              </div>

              <div class="col-6">
                <label for="inputAddress5" class="form-label">telephone</label>
                <input type="number" class="form-control" name="telephone" value="{{ $docteurs->telephone}}">
              </div>

              <div class="col-6 mt-5">
                <input type="file" name="photo" class="form-control" placeholder="photo">
           </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="reset" class="btn btn-danger">Annuler</button>
              </div>
            </form>

              </div>

            </div>
          </div>
          <!-- End Formulaire d'un nouveau Docteur -->

        </div>
      </div>
      <!-- End Left side columns -->

    </div>
  </section>
  @include('require.footer')

@endsection
