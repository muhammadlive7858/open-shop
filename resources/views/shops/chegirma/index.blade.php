@extends('layouts.index')

@section('content')

    <div class="d-flex justify-content-between">
        <h1>Chegirma</h1>
        <a href="{{ route('chegirma.create') }} " class="btn btn-primary">Chegirma yaratish</a>
    </div>
    <div class="col-lg-12">

        <div class="row">

          @forelse($chegirmalar as $chegirma)
            <div class="col-xxl-3 col-md-6">
                <div class="card info-card sales-card">

                <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                        <h6>Amallar</h6>
                    </li>

                    <li><a class="dropdown-item" href="{{ route('chegirma.edit',$chegirma->id) }}">Tahrirlash</a></li>
                </ul>
                </div>

                <div class="card-body">
                    <h5 class="card-title"><span>Tavar |</span> {{ $chegirma->name }}</h5>

                    <div class="d-flex align-items-center pb-2">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        {{-- <i class="bi bi-cart"></i> --}}
                        <img src="{{ asset($chegirma->image) }}" class="rounded-circle ps-4" style="width: 120px;"
                        alt="Avatar">
                    </div>
                    <div class="ps-5">
                        <h6>{{ $chegirma->price }}/{{ $chegirma->shop_price }}</h6>
                        <span class="text-success small pt-1 fw-bold">{{ $chegirma->chegirma }}%</span> <span class="text-muted small pt-2 ps-1">Chegirma/{{ $chegirma->chegirma_date }}</span>
                    </div>
                    </div>
                    <span >{{ $chegirma->desc }}</span>
                </div>

                </div>
            </div><!-- End Sales Card -->
          @empty
                <span>aksiya mavjud emas!</span>
          @endforelse

        </div>
      </div>
@endsection
