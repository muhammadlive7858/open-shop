@extends('layouts.index')

@section('content')

    <h3>Mijoz yaratish</h3>

    <form class="form-control" action="{{ route('mijoz.store') }}" method="POST">
        @csrf
        <input class="form-control m-2" name="name" type="text"  placeholder="Mijozning nomi " required>
        <input class="form-control m-2" name="address" type="text"  placeholder="Mijozning address " required>
        <input class="form-control m-2" name="phone" type="number"  placeholder="Mijozning telefoni" required/>
        <input class="form-control m-2" name="email" type="email"  placeholder="Mijozning email ">
        <button class="form-control btn btn-primary m-2">Saqlash</button>
    </form>

@endsection
