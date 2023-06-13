@extends('layouts.index')

@section('content')
    <div class="d-flex justify-content-between align-center py-auto">
        <h3>Mijoz</h3>
        <a href="{{ route('mijoz.create') }} " class="btn btn-primary fs-10">Mijoz yaratish</a>
    </div>
    <hr>
    <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
        <div class="dataTable-top">
            {{-- <div class="dataTable-dropdown"><label><select class="dataTable-selector">
                        <option value="5">5</option>
                        <option value="10" selected="">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                        <option value="25">25</option>
                    </select></label></div> --}}
            <div class="dataTable-search"><input class="dataTable-input" placeholder="Search..." type="text"></div>
        </div>
        <div class="dataTable-container">
            <table class="table table-borderless datatable dataTable-table">
                <thead>
                    <tr>
                        <th scope="col" data-sortable="" style="width: 10.9184%;"><a href="#">#</a></th>
                        <th scope="col" data-sortable="" style="width: 23.9796%;"><a href="#">Nomi</a></th>
                        <th scope="col" data-sortable="" style="width: 35.2041%;"><a href="#">Telefon</a></th>
                        <th scope="col" data-sortable="" style="width: 9.79592%;"><a href="#">Address</a></th>
                        <th scope="col" data-sortable="" style="width: 20.102%;"><a href="#">Action</a></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($mijozlar as $mijoz)
                        <tr>
                            <th scope="row"><a href="#">#</a></th>
                            <td>{{ $mijoz->name }}</td>
                            <td>{{ $mijoz->phone }}</td>
                            <td>{{ $mijoz->address }}</td>
                            <td class="d-flex justify-content-between">
                                <a href="{{ route('mijoz.show',$mijoz->id) }}" class="badge bg-success m-1 fs-6"><i class="bi bi-eye"></i></a>
                                <a href="{{ route('mijoz.edit',$mijoz->id) }}" class="badge bg-primary m-1 fs-6"><i class="bi bi-pen"></i></a>
                                <form action="{{ route('mijoz.destroy',$mijoz->id) }}" method="post" class="">
                                    @csrf
                                    <button class="badge bg-danger m-1 fs-6"><i class="bi bi-trash"></i></button>
                                </form>
                            </td>


                        </tr>
                    @empty

                    @endforelse
                </tbody>
            </table>
        </div>
        {{-- <div class="dataTable-bottom">
            <div class="dataTable-info">Showing 1 to 5 of 5 entries</div>
            <nav class="dataTable-pagination">
                <ul class="dataTable-pagination-list"></ul>
            </nav>
        </div> --}}
    </div>
@endsection
