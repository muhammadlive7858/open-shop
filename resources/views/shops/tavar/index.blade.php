@extends('layouts.index')

@section('content')

    <h4 class="text-center">Tavarlar</h4>
    <hr>
    <div class="col-lg-12">
        <h5>Search</h5>
    </div>
    <hr>
    <div class="col-lg-12">

        <div class="row">

          @forelse($tavarlar as $tavar)

                <!-- Sales Card -->
          <div class="col-xxl-3 col-md-6">
            <div class="card info-card sales-card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Amallar</h6>
                  </li>

                  <li><a class="dropdown-item" href="{{ route('tavar.edit',$tavar->id) }}">Tahrirlash</a></li>
                  <li>
                    <form action="{{ route('tavar.destroy',$tavar->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="dropdown-item" href="{{ route('tavar.destroy',$tavar->id) }}">O'chirish</button>
                    </form>
                  </li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title d-flex justify-content-between"><span>{{ $tavar->bolim($tavar->bolim) }}</span> <span>| {{ $tavar->name }} |</span>{{ $tavar->count }}ta</h5>

                <div class="d-flex align-items-center pb-2">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    {{-- <i class="bi bi-cart"></i> --}}
                    <img src="{{ asset($tavar->image) }}" class="rounded-circle ps-4" style="width: 120px;"
                    alt="Avatar">
                  </div>
                  <div class="ps-5">
                    <span class="fw-bold">Asl baxosi / Sotuv baxosi</span>
                    <h6>{{ $tavar->price }}/{{ $tavar->shop_price }}</h6>
                    <span class="text-success small pt-1 fw-bold">{{ $tavar->chegirma }}%</span> <span class="text-muted small pt-2 ps-1">Chegirma/{{ $tavar->chegirma_date }}</span>
                  </div>
                </div>
                <span >{{ $tavar->desc }}</span>
              </div>

            </div>
          </div><!-- End Sales Card -->

          @empty
                <span>Tavar mavjud emas!</span>
          @endforelse

        </div>
    </div>


      @endsection
