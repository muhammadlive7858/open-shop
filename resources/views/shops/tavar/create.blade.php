@extends('layouts.index')

@section('content')

    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Tavar yaratish</h5>

          <!-- General Form Elements -->
          <form action="{{ route('tavar.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Nomi</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="name" placeholder="Nomi">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail" class="col-sm-2 col-form-label">Soni</label>
              <div class="col-sm-10">
                <input type="string" class="form-control" name="count"  placeholder="Soni:100">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputPassword" class="col-sm-2 col-form-label">Tannarxi</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" name="price" placeholder="10000 so'm">
              </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">Sotuv Narxi</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" name="shop_price" placeholder="12000 so'm" step="500">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">Taminotchini tanlang</label>
                <div class="col-sm-10">
                  <select class="form-control" name="taminotchi">
                        @forelse($taminotchilar as $taminotchi)
                            <option value="{{ $taminotchi->id }}">{{ $taminotchi->name }}</option>
                        @empty
                            <option value="">Mavjud emas</option>
                        @endforelse
                  </select>
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">Bo'lim tanlang</label>
                <div class="col-sm-10">
                    <select class="form-control" name="bolim">
                        @forelse($bolimlar as $bolim)
                            <option value="{{ $bolim->id }}">{{ $bolim->name }}</option>
                        @empty
                            <option value="">Mavjud emas</option>
                        @endforelse
                    </select>
                </div>
              </div>
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">Tavar rasmi</label>
              <div class="col-sm-10">
                <input class="form-control" type="file" id="formFile" name="image" placeholder="Tavar rasmi">
              </div>
            </div>
            <div class="row mb-3">
                <label for="inputNumber" class="col-sm-2 col-form-label">Chegirmasi</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" name="chegirma" placeholder="Foizlarda:10%">
                </div>
              </div>
            <div class="row mb-3">
              <label for="inputDate" class="col-sm-2 col-form-label">Chegirma tugaydi</label>
              <div class="col-sm-10">
                <input type="date" class="form-control" name="chegirma_date">
              </div>
            </div>
            <div class="row mb-3">
                <label for="inputDate" class="col-sm-2 col-form-label">Tavar malumoti</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="desc" placeholder="Tavar haqida malumot:">
                </div>
              </div>

            <div class="row mb-3">
              <label class="col-sm-2 col-form-label"></label>
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Tavar yaratish</button>
              </div>
            </div>

          </form><!-- End General Form Elements -->

        </div>
    </div>

@endsection
