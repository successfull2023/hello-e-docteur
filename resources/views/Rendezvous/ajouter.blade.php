@extends('layouts.mainlayouts')

@section('contenu')
    <div class="pagetitle">

        <div>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
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
                    <li class="breadcrumb-item active">Nouvelle inscription</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">

            <div class="row">
                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">

                        <!-- Formulaire inscription rendezvous -->

                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">
                                <div class="card-body">
                                    <h5 class="card-title">Ajout d'un rendezvous </h5>

                                    <form action="{{ route('rendezvous.store') }}" method="POST" class="row g-3"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-md-6">
                                            <label for="inputName5" class="form-label">nom</label>
                                            <input type="text" class="form-control" name="nom">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="inputName5" class="form-label">prenom</label>
                                            <input type="text" class="form-control" name="prenom">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="inputName5" class="form-label">telephone</label>
                                            <input type="number" class="form-control" name="telephone">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="inputAdresse" class="form-label">adresse</label>
                                            <input type="text" class="form-control" name="adresse">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="inputDate" class="form-label">date</label>
                                            <input type="date" class="form-control" name="date_rdv">
                                        </div>
                                        @csrf
                                        <div class="col-md-6">
                                            <label for="inputHeure" class="form-label">heure</label>
                                            <input type="time" class="form-control" name="heure_rdv">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="inputPassword5" class="form-label">statut</label>
                                            <input type="text" class="form-control" name="statut_rdv">
                                        </div>

                                        <div class="col-6">
                                            <label for="inputAddress5" class="form-label">motif</label>
                                            <input type="text" class="form-control" name="motif rdv">
                                        </div>

                                        <div class="col-md-12 mt-2">

                                            <select class="form-control" name="docteurs_id">

                                                <option>Selectionner un docteur</option>;
                                                @foreach ($docteur as $doc)
                                                    <option value="{{ $doc->id }}">{{ $doc->nom }}
                                                        {{ $doc->prenom }}</option>
                                                @endforeach
                                            </select>

                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                                            <button type="reset" class="btn btn-danger">Annuler</button>
                                        </div>
                                    </form>

                                </div>

                            </div>
                        </div>
                        <!-- End Formulaire inscription rendezvous -->

                    </div>
                </div>
                <!-- End Left side columns -->

            </div>
        </section>
    @endsection
