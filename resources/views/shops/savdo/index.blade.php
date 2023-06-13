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
    @isset($tavarlar)
    <div id="datatable">
        <div class="col-12">
            <div class=" top-selling overflow-auto">
                <div class="card-body pb-0">
                    {{-- <h5 class="card-title">Taminotchilar <span>| sahifasi</span></h5> --}}
                    <table class="table table-borderless ">
                        <thead class="">
                            <tr class="row">
                                <td class="col-3">Name</td>
                                <td class="col-2">Soni</td>
                                <td class="col-2">Baxosi</td>
                                <td class="col-5">Action</td>
                            </tr>
                        </thead>
                        <tbody class="">
                            {{-- @forelse($taminotchilar as $taminotchi) --}}
                                @forelse($tavarlar as $tavar)
                                <tr class="row">
                                    <td class="col-3">{{ $tavar->name }}</a></td>
                                    <td class="col-2">{{ $tavar->count }}</td>
                                    <td class="col-2">{{ $tavar->shop_price }}</td>
                                    <td class="col-5" class="fw-bold d-flex justify-content-between">
                                        <form action="{{ route('karzinkaplus') }}" method="POST" class="form-outline d-flex justify-content-between">
                                            @csrf
                                            <input type="hidden"  name="tavar_id" value="{{ $tavar->id }}">
                                            <input type="float" class="form-control" id="datatable-search-input" name="count">
                                            <label class="form-label" for="datatable-search-input">karzinka</label>
                                            <button class="btn btn-warning m-2"><i class="bi bi-plus"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @empty

                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @endisset

    {{-- <script>
        const data2 = {
            columns: ['Name', 'Position', 'Office', 'Age', 'Start date', 'Salary'],
            rows: $tavar,
        };

        const instance = new mdb.Datatable(document.getElementById('datatable'), data2)

        document.getElementById('datatable-search-input').addEventListener('input', (e) => {
            instance.input - group(e.target.value);
        });
    </script> --}}
@endsection
