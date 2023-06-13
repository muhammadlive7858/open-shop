@extends('layouts.index')

@section('content')
    <h4>Tavar qidiruvi:</h4>
    <form action="{{ route('searchShop') }}" method="POST" class="form-outline mb-4 bordered d-flex justify-content-between">
        @csrf
        <input type="search" class="form-control bordered m-2" id="datatable-search-input" name="search">
        <label class="form-label" for="datatable-search-input">Search</label>
        <button class="btn btn-warning m-2">Search</button>
        <a class="btn btn-primary m-2" href="{{ route('karzinka') }}">Karzinka</a>
    </form>
    <?php $i = 0;
    $summa = 0;
    ?>

    <hr>
    @isset($karzinka)
        {{-- <div id="datatable">
        <div class="col-12">
            <div class=" top-selling overflow-auto"> --}}
        <div class="card-body pb-0">
            {{-- <h5 class="card-title">Taminotchilar <span>| sahifasi</span></h5> --}}
            <table class="table table-borderless ">
                <thead class="">
                    <tr class="row">
                        <td class="col-3">Name</td>
                        <td class="col-2">Soni</td>
                        <td class="col-3">Baxosi</td>
                        <td class="col-3">Action</td>
                        <td class="col-1">O'chirish</td>

                    </tr>
                </thead>
                <tbody class="">
                    @forelse($karzinka as $tavar)
                        <tr class="row">
                            <td class="col-3">{{ $tavar->name }}</a></td>
                            <td class="col-2">{{ $tavar->qty }}</td>
                            <?php $i++; ?>
                            <td class="col-3">{{ $tavar->price }}</td>
                            <?php $summa = $summa + $tavar->price * $tavar->qty; ?>

                            <td class="col-md-3" class="fw-bold d-flex justify-content-between w-25">
                                <form action="{{ route('karzinkaplus') }}" method="POST"
                                    class="form-outline d-flex justify-content-between">
                                    @csrf
                                    <input type="hidden" name="tavar_id" value="{{ $tavar->id }}">
                                    <input type="float" class="form-control" id="datatable-search-input" name="count"
                                        value="{{ $tavar->qty }}">
                                    <label class="form-label mb-2" for="datatable-search-input">karzinka</label>
                                    <button class="btn btn-warning m-1"><i class="bi bi-plus"></i></button>
                                </form>
                            </td>
                            <td class="col-md-1">
                                <a href="{{ route('cart.remove',$tavar->rowId) }}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                    @empty
                    @endforelse
                </tbody>
            </table>
        </div>
        {{-- </div>
            </div>
        </div> --}}
    @endisset

    <hr>

    {{-- @isset($account) --}}
    {{-- <div id="datatable"> --}}
    {{-- <div class="col-12">
            <div class=" top-selling overflow-auto"> --}}
    <form class="card-body pb-0" action="{{ route('sell') }}" method="post">
        @csrf
        {{-- <h5 class="card-title">Taminotchilar <span>| sahifasi</span></h5> --}}
        <table class="table table-borderless ">
            <thead class="">
                <tr class="row bg-warning bordered">
                    <td class="col-2 "><span class=" fw-bold">Tavarlar turi</span></td>
                    <td class="col-2 "><span class=" fw-bold">Jami Summa</span></td>
                    <td class="col-2 "><span class=" fw-bold">Mijozlar</span></td>
                    <td class="col-3 "><span class=" fw-bold">Savdo qarzga amalga oshirilsinmi?</span></td>
                    <td class="col-2 "><span class=" fw-bold">Qarz to'lanish vaqti</span></td>
                    <td class="col-2"></td>
                </tr>
            </thead>
            <tbody class="">
                {{-- @forelse($account as $account) --}}
                <tr class="row">
                    <td class="col-2">{{ $i }}</td>
                    <td class="col-2">{{ $summa }}</td>
                    <td class="col-2">
                        <select name="mijoz_id" class="form-control">
                            <option value="null" >Mijoz tanlang</option>
                            @forelse($mijozlar as $mijoz)
                                <option value="{{ $mijoz->id }}">{{ $mijoz->name }}</option>
                            @empty
                            @endforelse
                        </select>
                    </td>
                    <td class="col-3 m-2">
                        <input name="qarz" type="checkbox" id="checkbox">
                    </td>

                    <input type="hidden" name="summa" value="{{ $summa }}">
                    <input type="hidden" name="tavar_turi" value="{{ $i }}">

                    <td class="col-md-2" class="fw-bold d-flex justify-content-between">
                        <input type="date" name="date" class="form-control" id="date">
                        <label class="form-label" for="date">Qarz to'lanish vaqti</label>
                    </td>

                    <td class="col-md-4" class="fw-bold d-flex justify-content-between">
                        <button class="btn btn-primary">Sotish</button>
                    </td>
                    <td class="col-md-4" class="fw-bold d-flex justify-content-between">
                        <a href="{{ route('cart.destroy') }}" class="btn btn-danger">Tozalash</a>
                    </td>
                </tr>
                {{-- @empty --}}

                {{-- @endforelse --}}
            </tbody>
        </table>
    </form>
    {{-- </div>
            </div> --}}
    {{-- </div> --}}
    {{-- @endisset --}}
    <hr>
@endsection
