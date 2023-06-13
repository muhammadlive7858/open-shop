@extends('layouts.index')

@section('content')
    <div class="col-12">
        <div class=" top-selling overflow-auto">
            <div class="card-body pb-0">
                <h5 class="card-title">Bo'limlar <span>| sahifasi</span></h5>
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nomi</th>
                            <th scope="col">Malumoti</th>
                            <th scope="col">Asosiy bo'limi</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($bolimlar as $bolim)
                            <tr>
                                <th scope="text-black fw-bold">{{ $bolim->id }}</th>
                                <td><a href="#" class="text-primary fw-bold">{{ $bolim->name }}</a></td>
                                <td>{{ $bolim->description }}</td>
                                <td>{{ $bolim->parent_id }}</td>

                                <td class="fw-bold d-flex justify-content-between">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Action</h6>
                                        </li>

                                        <li><a href="{{ route('bolim.edit', $bolim->id) }}"
                                                class="btn text-success"><i class="bx bx-edit px-1"></i>Tahrirlash</a></li>
                                        <li><a href="{{ route('bolim.show', $bolim->id) }}"
                                                class="btn text-primary"><i class="bx bx-math px-1"></i>Ko'rish</a></li>
                                        <li>
                                            <form action="{{ route('bolim.destroy', $bolim->id) }}" method="POST">
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
                            <h3>Bo'limlar mavjud emas!</h3>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
