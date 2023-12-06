@extends('layouts.mainlayouts')

@section('contenu')
<section class="section">
    <div>

    @if (session('status'))
    <div class="alert alert-success">
    {{session('status')}}
    </div>
    @endif

    <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Liste des rendezvous</h5>

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">nom</th>
                  <th scope="col">prenom</th>
                  <th scope="col">telephone</th>
                  <th scope="col">adresse</th>
                  <th scope="col">date</th>
                  <th scope="col">heure</th>
                  <th scope="col">statut</th>
                  <th scope="col">motif</th>
                  <th scope="col">docteur</th>
                  <th scope="col">Actions </th>
                </tr>
              </thead>
              <tbody>
                @foreach ( $rendezvous as $rdv )

                <tr>
                  <td>{{ $rdv->id }}</td>
                  <td>{{ $rdv->nom }}</td>
                  <td>{{ $rdv->prenom }}</td>
                  <td>{{ $rdv->telephone }}</td>
                  <td>{{ $rdv->adresse }}</td>
                  <td>{{ $rdv->date_rdv }}</td>
                  <td>{{ $rdv->heure_rdv }}</td>
                  <td>{{ $rdv->statut_rdv }}</td>
                  <td>{{ $rdv->motif_rdv}}</td>
                  <td>{{ $rdv->docteur->nom }} {{ $rdv->docteur->prenom }}</td>
                  <td>
                  <a href="{{ route('rendezvous.edit', $rdv->id ) }}" class="btn btn-info"><i class="bi bi-pencil-square" title="modifier"></i></a>
                    <a href="{{ route('rendezvous.show', $rdv->id ) }}" class="btn btn-success"><i class="bi bi-eye" title="détails"></i></a>
                    <a href="{{ url('supprimer-Rendezvous/' .$rdv->id ) }}" class="btn btn-danger"> <i class="bi bi-trash" title="supprimer"></i></a>
                </td>
                </tr>
                @endforeach

              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>
@endsection


