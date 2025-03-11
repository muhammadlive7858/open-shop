@extends('taxer.dashboard')

@section('content')

<h4>Soliqlar</h4>
<table class="table table-responsive">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nom</th>
        <th scope="col">Amallar</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($taxs as  $tax)

        <tr>
            <th scope="row">{{ $tax->id }}</th>
            <td>{{ $tax->name }}</td>
            <td>
                <a href="{{ route('tax.show',$tax->id)}}"><i class="bi bi-cart"></i></a>
            </td>
        </tr>

      @empty

      @endforelse
    </tbody>
  </table>

@endsection
