@extends('layouts.index')

@section('content')

    <h1>Chegirma yaratish</h1>

    <form class="form-control" action="{{ route('chegirma.store') }}" method="POST">
        @csrf
        <select class="form-control m-2" name="tavar">
            <option>Tavar tanlang</option>
            @forelse($tavarlar as $tavar)
                <option class="form-control" value="{{ $tavar->id }}">{{ $tavar->name }} tavarda  {{ $tavar->chegirma }} % chegirma bor</option>
            @empty
            @endforelse
        </select>
        <input class="form-control m-2" name="chegirma" type="number"  placeholder="Tavar uchun chegirma: ...% " required/>
        <input class="form-control m-2" name="chegirma_date" type="date"  placeholder="Tavar uchun chegirma davomiyligi:  " required>
        <button class="form-control btn btn-primary m-2">Saqlash</button>
    </form>

@endsection
