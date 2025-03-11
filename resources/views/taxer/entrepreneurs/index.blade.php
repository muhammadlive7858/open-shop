@extends('taxer.dashboard')

@section('content')

<table class="table table-responsive">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nom</th>
        <th scope="col">Telefon</th>
        <th scope="col">Amallar</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($users as  $user)

        <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->phone }}</td>
            <td>
                <a href="{{ route('entrepreneurs.show',$user->id)}}"><i class="bi bi-cart"></i></a>
            </td>
        </tr>

      @empty

      @endforelse
    </tbody>
  </table>

@endsection
