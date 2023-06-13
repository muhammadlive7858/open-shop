@extends('layouts.index')

@section('content')

    <h3>Mijoz tahrirlash</h3>

    <form class="form-control" action="{{ route('mijoz.update',$mijoz->id) }}" method="POST">
        @method('PUT')
        @csrf
        <input class="form-control m-2" name="name" type="text"  placeholder="Mijozning nomi " required value="{{ $mijoz->name }}">
        <input class="form-control m-2" name="address" type="text"  placeholder="Mijozning address " required value="{{ $mijoz->address }}">
        <input class="form-control m-2" name="phone" type="number"  placeholder="Mijozning telefoni" required value="{{ $mijoz->phone }}">
        <input class="form-control m-2" name="email" type="email"  placeholder="Mijozning email " value="{{ $mijoz->email }}">
        <button class="form-control btn btn-primary m-2">Saqlash</button>
    </form>

@endsection
