@extends('layouts.index')

@section('content')
    <div class="col-12">
        <div class=" top-selling overflow-auto">
            <div class="card-body pb-0">
                {{-- @forelse($taminotchi as $taminot) --}}
                    <h5 class="card-title">Taminotchi <span>| {{ $taminotchi['name'] }} ga to'lav amalga oshirish</span></h5>
                    <form action="{{ route('tolav.store') }}" method="post">
                        @csrf
                        <input type="hidden" name="taminotchi_id" value="{{ $taminotchi['id'] }}">
                        <input type="text" name="sum" id="" placeholder="Summani kiriting: 100 000" class="form-control m-2 w-75">
                        <button class="btn btn-primary m-2">To'lash</button>
                    </form>
                {{-- @empty

                @endforelse --}}
            </div>
        </div>
    </div>
@endsection
