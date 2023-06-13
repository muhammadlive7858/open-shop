@extends('layouts.index')

@section('content')

    <div class="d-flex justify-content-between">
        <h1>Aksiya</h1>
        <a href="{{ route('aksiya.create') }} " class="btn btn-primary">Aksiya yaratish</a>
    </div>
    <div class="col-lg-12">

        <div class="row">

          @forelse($aksiyalar as $aksiya)

                <!-- Sales Card -->
          <div class="col-xxl-3 col-md-6">
            <div class="card info-card sales-card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Amallar</h6>
                  </li>

                  <li><a class="dropdown-item" href="{{ route('aksiya.edit',$aksiya->id) }}">Tahrirlash</a></li>
                  <li><a class="dropdown-item" href="{{ route('aksiya.destroy',$aksiya->id) }}">O'chirish</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">Aksiya <span>| {{ $aksiya->name }}</span></h5>

                <div class="d-flex align-items-center justify-content-around">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    {{-- <i class="bi bi-cart"></i> --}}
                    <img src="{{ asset($aksiya->image) }}" class="rounded-circle ps-4" style="width: 120px;"
                    alt="Avatar">
                  </div>
                  <div class="my-2">
                    {{-- <h6>{{ $aksiya->price }}/{{ $aksiya->shop_price }}</h6> --}}
                    <span class="text-success small pt-3 fw-bold">{{ $aksiya->salary }}So'm</span>
                    <hr>
                     <span class="text-muted small pt-2 ps-1">Aksiya/{{ $aksiya->aksiya_date }}</span>
                  </div>
                </div>
                <span>{{ $aksiya->desc }}</span>
                </div>

            </div>
          </div><!-- End Sales Card -->

          @empty
                <span>aksiya mavjud emas!</span>
          @endforelse

        </div>
      </div>
@endsection
