@extends('layouts.index')

@section('content')
    <div class="col-12">
        <div class="card recent-sales overflow-auto">

            <div class="card-body">
                <h5 class="card-title">Umumiy Sotuvlar <span>| Hammasi</span></h5>
                <div>
                    <table class="table table-borderless datatable dataTable-table">
                        <thead>
                            <tr>
                                <th scope="col" data-sortable="" style="width: 10.9184%;"><a href="#">Qarz savdolar</a></th>
                                <th scope="col" data-sortable="" style="width: 24.4898%;"><a href="#">Umumiy Qarz Summa</a></th>
                                <th scope="col" data-sortable="" style="width: 24.4898%;"><a href="#">Umumiy Summa</a></th>
                            </tr>
                        </thead>
                        <tbody>
                                <td>{{ $report['qarz'] }}</td>
                                <td>{{ $report['qarz_summa'] }}</td>
                                <td>{{ $report['summa'] }}</td>

                        </tbody>
                    </table>
                </div>
                <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                    <div class="dataTable-top">
                        {{-- <div class="dataTable-dropdown"><label><select class="dataTable-selector">
                                    <option value="5">5</option>
                                    <option value="10" selected="">10</option>
                                    <option value="15">15</option>
                                    <option value="20">20</option>
                                    <option value="25">25</option>
                                </select> entries per page</label></div> --}}

                                <hr>
                        <div class="dataTable-search"><input class="dataTable-input" placeholder="Search..." type="text">
                        </div>
                    </div>
                    <div class="dataTable-container">
                        <table class="table table-borderless datatable dataTable-table">
                            <thead>
                                <tr>
                                    <th scope="col" data-sortable="" style="width: 10.9184%;"><a href="#">#</a></th>
                                    <th scope="col" data-sortable="" style="width: 24.4898%;"><a href="#">Mijoz</a></th>
                                    <th scope="col" data-sortable="" style="width: 39.1837%;"><a href="#">Tavarlar</a></th>
                                    <th scope="col" data-sortable="" style="width: 10.102%;"><a href="#">Summasi</a></th>
                                    <th scope="col" data-sortable="" style="width: 15.3061%;"><a href="#">Qarz</a></th>
                                    <th scope="col" data-sortable="" style="width: 15.3061%;"><a href="#">Amallar</a></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($sotuvlar as $sotuv)
                                    <tr>
                                        <th scope="row"><a href="#">#{{ $sotuv->id }}</a></th>
                                        <td><a href="{{ route('sotuv_client.show',$sotuv->client_id) }}">{{ $sotuv->client($sotuv->client_id) }}</a></td>
                                        {{-- <td><a href="{{ route('sotuv.show',$sotuv->id) }}" class="text-primary">Tavarlar</a></td> --}}
                                        <td>
                                            <div class="accordion" id="accordionExample">
                                                <div class="accordion-item">
                                                  <h4 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne{{ $sotuv->id }}" aria-expanded="false" aria-controls="collapseOne{{ $sotuv->id }}">
                                                      Malumotlarni ko'rish
                                                    </button>
                                                  </h4>
                                                  <div id="collapseOne{{ $sotuv->id }}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                                                    @foreach(json_decode($sotuv->name) as $product)
                                                        <span class="m-2">{{$product->name}} tavardan {{$product->count}}</span>
                                                        <hr>
                                                    @endforeach
                                                  </div>
                                              </div>
                                        </td>
                                        <td>{{ $sotuv->summa }}</td>
                                        <td>
                                            @if($sotuv->debt == 1)
                                                <span class="badge bg-danger px-4 py-1"><i class='bx bx-x'></i></span>
                                            @else
                                            <span class="badge bg-success px-4 py-1"><i class='bx bx-check-double'></i></span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('sotuv.show',$sotuv->id) }}" class="btn btn-primary"><i class="bx bx-show"></i></a>
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

            </div>

        </div>
    </div>
@endsection
