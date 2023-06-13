@extends('layouts.index')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Aksiya yaratish</h5>

            <!-- General Form Elements -->
            @forelse($aksiya as $aksiya)
                <form action="{{ route('aksiya.update',$aksiya->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nomi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" placeholder="Nomi" value="{{ $aksiya->name }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Baxosi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="salary" placeholder="Summa" value="{{ $aksiya->salary }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Rasmi</label>
                        <div class="col-sm-10">
                            <input type="file" accept="image/*" class="form-control" name="image" placeholder="image" value="{{ $aksiya->image }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Davomiyligi</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="aksiya_date" placeholder="Vaqti" value="{{ $aksiya->aksiya_date }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Ma'lumot</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="desc" placeholder="Ma'lumoti" value="{{ $aksiya->desc }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary my-3 mx-1">Aksiya yaratish</button>
                        </div>
                    </div>

                </form>
            @empty

            @endforelse
            <!-- End General Form Elements -->

        </div>
    </div>
@endsection
