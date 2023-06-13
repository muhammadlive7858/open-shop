@extends('layouts.index')

@section('content')
    <div class="col-12">
        <div class=" top-selling overflow-auto">
            <div class="card-body pb-0">
                <h5 class="card-title">Taminotchi <span>| {{ $taminotchi->name }} </span></h5>
                <div class="d-flex justify-content-between align-center">
                    <h5 class="card-title col-md-3">Kirim <span>| {{ $qarz_summa }}  so'mga teng</span></h5>
                    <h5 class="card-title col-md-3">Qarz summa <span>| {{ $qarz_summa - $tolav_summa }}  so'mga teng</span></h5>
                    <h5 class="card-title col-md-3">To'lav summasi <span>| {{ $tolav_summa }}  so'mga teng</span></h5>
                    <a href="{{ route('tolav.show',$id) }}" class="btn btn-primary mx-2 my-auto d-flex justify-content-center align-center">To'lash</a>
                </div>
                <hr>
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Count</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @forelse($tavarlar as $tavar)
                            <tr>
                                <th scope="text-black fw-bold">{{ $tavar->id }}</th>
                                <td><a href="#" class="text-primary fw-bold">{{ $tavar->name }}</a></td>
                                <td>{{ $tavar->price }}</td>
                                <td>{{ $tavar->count }}</td>
                                <td class="fw-bold d-flex justify-content-between">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Action</h6>
                                        </li>
                                        <li>
                                        <a href="{{ route('kirim', $tavar->id) }}"
                                            class="btn text-primary"><i class="bx bx-plus px-1"></i>Kirim</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        @empty
                            <h3>Tavar mavjud emas!</h3>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
