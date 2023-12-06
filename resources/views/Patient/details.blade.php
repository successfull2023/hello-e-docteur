@extends('layouts.mainlayouts')
@section('contenu')

<div class="pagetitle">
    <h1>Tableau Bord</h1>
    <nav>
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="dashboard">Accueil</a></li>
        <li class="breadcrumb-item active">Nouvelle inscription</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->

  <section class="section profile">
    <div class="row">


      <div class="col-xl-8">

        <div class="card">
          <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">

              <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Details</button>
              </li>

              <li class="nav-item">
                <a href="{{ patient.liste }}"  class="nav-link">Voir la liste</a>
              </li>

            </ul>
            <div class="tab-content pt-2">

              <div class="tab-pane fade show active profile-overview" id="profile-overview">

                <div class="row">
                  <div class="col-lg-12 col-md-4 label ">Nom</div>
                  <div class="col-lg-9 col-md-8">{{ $rdv->nom }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-12 col-md-4 label">Prénom</div>
                  <div class="col-lg-9 col-md-8">{{ $rdv->prenom }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-12 col-md-4 label">Age</div>
                  <div class="col-lg-9 col-md-8">{{ $rdv->age }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-12 col-md-4 label">Téléphone</div>
                  <div class="col-lg-9 col-md-8">{{ $rdv->telephone }}</div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-4 label">Sexe</div>
                    <div class="col-lg-9 col-md-8">{{ $rdv->sexe }}</div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-4 label">Adresse</div>
                    <div class="col-lg-9 col-md-8">{{ $rdv->adresse}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-12 col-md-4 label">group_sanguin</div>
                    <div class="col-lg-9 col-md-8">{{ $rdv->groupe_sanguin }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-12 col-md-4 label">Antecedant</div>
                    <div class="col-lg-9 col-md-8">{{ $rdv->antecedant }}</div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-4 label">derniere_consultation</div>
                    <div class="col-lg-9 col-md-8">{{ $rdv->derniere_consultation }}</div>
                </div>

          </div>
        </div>

      </div>
    </div>
  </section>

@endsection

