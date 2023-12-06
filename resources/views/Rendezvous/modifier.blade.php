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
        <li class="breadcrumb-item active">Nouveau rendezvous</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->

  <section class="section dashboard">

    <div class="row">
      <!-- Left side columns -->
      <div class="col-lg-12">
        <div class="row">

          <!-- Formulaire ajout du Rendezvous -->

          <div class="col-12">
            <div class="card recent-sales overflow-auto">
              <div class="card-body">
                <h5 class="card-title">ajout d'un nouveau rendezvous</h5>

                <form action="{{route('Rendezvous.update', [$Rendezvous->id] )}}" method="POST" class="row g-3">
                    @method('PATCH')
                @csrf

                <div class="col-md-6">
                    <label for="inputName5" class="form-label">nom</label>
                    <input type="text" class="form-control" name="nom"  value="{{ $rendezvous->nom}}">
                  </div>

                  <div class="col-md-6">
                    <label for="inputName5" class="form-label">prenom</label>
                    <input type="text" class="form-control" name="prenom"  value="{{ $rendezvous->prenom}}">
                  </div>

                  <div class="col-md-6">
                    <label for="inputName5" class="form-label">telephone</label>
                    <input type="number" class="form-control" name="telephone"  value="{{ $rendezvous->telephone}}">
                  </div>

              <div class="col-md-6">
                <label for="inputName5" class="form-label">adresse</label>
                <input type="text" class="form-control" name="adresse"  value="{{ $rendezvous->adresse}}">
              </div>

              <div class="col-md-6">
                <label for="inputName5" class="form-label">date_rdv</label>
                <input type="date" class="form-control" name="date_rdv"  value="{{ $rendezvous->date_rdv}}">
              </div>

              @csrf
              <div class="col-md-6">
                <label for="inputEmail5" class="form-label">heure_rdv</label>
                <input type="time" class="form-control" name="heure_rdv"  value="{{ $rendezvous->heure_rdv}}">
              </div>

              <div class="col-md-6">
                <label for="inputName5" class="form-label">motif_rdv</label>
                <input type="text" class="form-control" name="motif_rdv"  value="{{ $rendezvous->motif_rdv}}">
              </div>


              <div class="col-md-6 mt-2">

                <select class="form-control" name="docteur_id">

                    <option>Selectionner un docteur</option>;
                    @foreach ($docteurs as $doc)
                        <option value="{{ $doc->id }}">{{ $doc->nom }}
                            {{ $doc->prenom }}</option>
                    @endforeach
                </select>

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
          <!-- End Formulaire d'un nouveau Rendezvous -->

        </div>
      </div>
      <!-- End Left side columns -->

    </div>
  </section>
  @include('require.footer')

@endsection

