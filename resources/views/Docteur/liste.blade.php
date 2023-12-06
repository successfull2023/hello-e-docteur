@extends('layouts.mainlayouts')

@section('contenu')




<section class="section">
  <div>

    @if (session('status'))
<div class="alert alert-success">
{{session('status')}}
</div>
@endif

    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Liste des docteurs</h5>


            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Date de Naissance</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">Sexe</th>
                    <th scope="col">Specialite </th>
                    <th scope="col">telephone </th>
                    <th scope="col">Photo</th>
                    <th scope="col">Actions </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ( $docteurs as $doc )
                  <tr>
                    <td>{{ $doc->id }}</td>
                    <td>{{ $doc->nom }}</td>
                    <td>{{ $doc->prenom }}</td>
                    <td>{{ $doc->date_naissance }}</td>
                    <td>{{ $doc->adresse }}</td>
                    <td>{{ $doc->sexe }}</td>
                    <td>{{ $doc->specialite }}</td>
                    <td>{{ $doc->telephone }}</td>
                    <td><img class="h-50 w-50" src="{{ asset('storage') . '/' . $doc->photo }}" alt=""></td>


                  <td>
                    <a href="{{ route('docteur.edit', $doc->id) }}" > <i class="bi bi-pencil-square"></i></a>
                    <a href="{{ url('supprimer-docteur/' .$doc->id) }}"> <i class="bi bi-trash"></i></a>
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
