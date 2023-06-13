@extends('layouts.index')

@section('content')


    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Taminotchi tahrirlash</h5>

          <!-- General Form Elements -->
            @forelse($taminotchi as $taminot)
                <form action="{{ route('taminot.update',$taminot->id) }}" method="POST">
                    @method('Patch')
                    @csrf
                    <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Nomi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" placeholder="Nomi" value="{{ $taminot->name }}">
                    </div>
                    </div>
                    <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Ma'lumot</label>
                    <div class="col-sm-10">
                        <input type="string" class="form-control" name="description"  placeholder="Firma" value="{{ $taminot->description }}">
                    </div>
                    <div class="row mb-3">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary my-3 mx-1">Taminotchi yangilash</button>
                    </div>
                    </div>

                </form>
            @empty --}}
                <h3>Taminotchi topilmadi!</h3>
            @endforelse
        </div>
      </div>

@endsection
