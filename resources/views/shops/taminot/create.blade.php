@extends('layouts.index')

@section('content')


    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Taminotchi yaratish</h5>

          <!-- General Form Elements -->
          <form action="{{ route('taminot.store') }}" method="POST">
            @csrf
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Nomi</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="name" placeholder="Nomi">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail" class="col-sm-2 col-form-label">Ma'lumot</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="description"  placeholder="Firma">
              </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label"></label>
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary my-3 mx-1">Taminotchi yaratish</button>
              </div>
            </div>

          </form><!-- End General Form Elements -->

        </div>
      </div>

@endsection
