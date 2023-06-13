@extends('layouts.index')

@section('content')

    <h1>Chegirma yaratish</h1>

    <form class="form-control" action="{{ route('chegirma.store') }}">
        @csrf
        <select>
            @forelse($tavar as $tavar)
                <option value="{{ $tavar->id }}">{{ $tavar->nama }}</option>
            @empty

            @endforelse
        </select>
        <input class="form-control" name="chegirma" type="number"  placeholder="Tavar uchun chegirma: ...% " required/>
        <input class="form-control" name="chegirma_date" type="date"  placeholder="Tavar uchun chegirma davomiyligi:  " required>

    </form>

@endsection
