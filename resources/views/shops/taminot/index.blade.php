@extends('layouts.index')

@section('content')
    <div class="col-12">
        <div class=" top-selling overflow-auto">
            <div class="card-body pb-0">
                <h5 class="card-title">Taminotchilar <span>| sahifasi</span></h5>
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Company</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($taminotchilar as $taminotchi)
                            <tr>
                                <th scope="text-black fw-bold">{{ $taminotchi->id }}</th>
                                <td><a href="{{ route('taminot.show', $taminotchi->id) }}" class="text-primary fw-bold">{{ $taminotchi->name }}</a></td>
                                <td>{{ $taminotchi->description }}</td>
                                <td class="fw-bold d-flex justify-content-between">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Action</h6>
                                        </li>

                                        <li><a href="{{ route('taminot.edit', $taminotchi->id) }}"
                                                class="btn text-success"><i class="bx bx-edit px-1"></i>Tahrirlash</a></li>
                                        <li><a href="{{ route('taminot.show', $taminotchi->id) }}"
                                                class="btn text-primary"><i class="bx bx-math px-1"></i>Ko'rish</a></li>
                                        <li>
                                            <form action="{{ route('taminot.destroy', $taminotchi->id) }}" method="POST">
                                                @method('delete')
                                                @csrf
                                                <button class="btn text-danger"><i
                                                        class="bx bx-trash px-1"></i>O'chirish</button>
                                            </form>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        @empty
                            <h3>Taminotchi mavjud emas!</h3>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
