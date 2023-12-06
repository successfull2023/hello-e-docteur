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
            <h5 class="card-title">Liste des specialites</h5>

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Specialite</th>
                  <th scope="col">image</th>

                </tr>
              </thead>
              <tbody>
                @foreach ( $specialite as $spec )

                <tr>
                  <td>{{ $spec->id }}</td>
                  <td>{{ $spec->specialite}}</td>
                  <td><img class="h-25 w-25" src="{{ asset('storage') . '/' . $spec->image }}" alt=""></td>

                  <td>
                    <a href="{{ route('specialite.edit', $spec->id ) }}" class="btn btn-info"><i class="bi bi-pencil-square" title="modifier"></i></a>
                      <a href="{{ route('specialite.show', $spec->id ) }}" class="btn btn-success"><i class="bi bi-eye" title="détails"></i></a>
                      <a href="{{ url('supprimer-specialite/' .$spec->id ) }}" class="btn btn-danger"> <i class="bi bi-trash" title="supprimer"></i></a>
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
