@extends('layouts.index')

@section('content')

    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Tavar tahrirlash</h5>

          <!-- General Form Elements -->
          {{-- @forelse($tavarEdit as $tavar) --}}
            <form action="{{ route('tavar.update',$tavar->id) }}" method="POST" enctype="multipart/form-data">
                @method('Put')
                @csrf
                <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Nomi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" placeholder="Nomi" value="{{ $tavar->name }}">
                </div>
                </div>
                <div class="row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label">Hozirda mavjud</label>
                <div class="col-sm-10">
                    <input type="string" class="form-control" name="count"  placeholder="Soni:100" value="{{ $tavar->count }}">
                </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Kirimdagi soni</label>
                    <div class="col-sm-10">
                        <input type="string" class="form-control" name="taminot_count"  placeholder="Soni:100" value="{{ $tavar->taminot_count }}">
                    </div>
                    </div>
                <div class="row mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">Baxosi</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="price" placeholder="10000 so'm" value="{{ $tavar->price }}">
                </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Sotuv baxosi</label>
                    <div class="col-sm-10">
                    <input type="number" class="form-control" name="shop_price" placeholder="12000 so'm" value="{{ $tavar->shop_price }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Taminotchini tanlang</label>
                    <div class="col-sm-10">
                    <select class="form-control" name="taminotchi">
                             <option value="{{ $tavar->taminotchi }}">O'zgartirish shart emas</option>
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
                            <option value="{{ $tavar->bolim }}">O'zgartirish shart emas</option>
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
                    <input class="form-control" type="file" id="formFile" name="image" placeholder="Tavar rasmi" value="{{ $tavar->image }}">
                </div>
                </div>
                <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Chegirmasi</label>
                    <div class="col-sm-10">
                    <input type="number" class="form-control" name="chegirma" placeholder="Foizlarda:10%" value="{{ $tavar->chegirma }}">
                    </div>
                </div>
                <div class="row mb-3">
                <label for="inputDate" class="col-sm-2 col-form-label">Chegirma tugaydi</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="chegirma_date" value="{{ $tavar->chegirma_date }}">
                </div>
                </div>
                <div class="row mb-3">
                    <label for="inputDate" class="col-sm-2 col-form-label">Tavar malumoti</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="desc" placeholder="Tavar haqida malumot:" value="{{ $tavar->desc }}">
                    </div>
                </div>

                <div class="row mb-3">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Tavar yaratish</button>
                </div>
                </div>

            </form>
          {{-- @empty

          @endforelse --}}
          <!-- End General Form Elements -->

        </div>
      </div>

@endsection
