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
            <h5 class="card-title">Liste des patients</h5>

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">nom</th>
                  <th scope="col">prenom</th>
                  <th scope="col">age</th>
                  <th scope="col">telephone</th>
                  <th scope="col">sexe</th>
                  <th scope="col">adresse</th>
                  <th scope="col">group_sanguin</th>
                  <th scope="col">antecedant</th>
                  <th scope="col">derniere_consultation</th>
                  <th scope="col">Actions </th>
                </tr>
              </thead>
              <tbody>
                @foreach ( $patients as $pat )

                <tr>
                  <td>{{ $pat->id }}</td>
                  <td>{{ $pat->nom }}</td>
                  <td>{{ $pat->prenom }}</td>
                  <td>{{ $pat->age }}</td>
                  <td>{{ $pat->telephone }}</td>
                  <td>{{ $pat->sexe }}</td>
                  <td>{{ $pat->adresse }}</td>
                  <td>{{ $pat->group_sanguin }}</td>
                  <td>{{ $pat->antecedant }}</td>
                  <td>{{ $pat->derniere_consultation }}</td>
                  <td>
                    <a href="{{ route('patient.edit', $pat->id) }}" > <i class="bi bi-pencil-square"></i></a>
                    <a href="{{ url('supprimer-patient/' .$pat->id) }}"> <i class="bi bi-trash"></i></a>
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




