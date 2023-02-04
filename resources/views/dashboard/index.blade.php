@extends('dashboard.layouts.main')

@section('container')
<div class="isian-db d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Welcome Back, {{ auth()->user()->name }}</h1>
    {{-- <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
        <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
        <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
      </div>
      <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
        <span data-feather="calendar"></span>
        This week
      </button>
    </div> --}}
    <!-- Program Counter -->
  </div>
  <div class="row isian-db">
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border border-top-0 border-end-0 border-bottom-0 border-info border-5 shadow h-100 py-2 coba">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-xs fw-bold text-info text-uppercase mb-1">
                          ANGGOTA KWT</div>
                      <div class="h5 mb-0 fw-bold text-gray-800">@php echo App\Http\Controllers\DashboardInformationController::count_users() @endphp</div>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-calendar-minus fa-2x text-gray-300"></i>
                  </div>
              </div>
          </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border border-top-0 border-end-0 border-bottom-0 border-warning border-4 shadow h-100 py-2">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-xs fw-bold text-warning text-uppercase mb-1">
                          KEGIATAN KWT</div>
                      <div class="h5 mb-0 fw-bold text-gray-800">@php echo App\Http\Controllers\DashboardInformationController::count_events() @endphp</div>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-calendar-minus fa-2x text-gray-300"></i>
                  </div>
              </div>
          </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border border-top-0 border-end-0 border-bottom-0 border-success border-5 shadow h-100 py-2 coba">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-xs fw-bold text-success text-uppercase mb-1">
                          TOGA</div>
                      <div class="h5 mb-0 fw-bold text-gray-800">@php echo App\Http\Controllers\DashboardInformationController::count_togas() @endphp</div>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-calendar-minus fa-2x text-gray-300"></i>
                  </div>
              </div>
          </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border border-top-0 border-end-0 border-bottom-0 border-danger border-4 shadow h-100 py-2">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-xs fw-bold text-danger text-uppercase mb-1">
                          PRODUKSI TOGA</div>
                      <div class="h5 mb-0 fw-bold text-gray-800">@php echo App\Http\Controllers\DashboardInformationController::count_produksitogas() @endphp</div>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-calendar-minus fa-2x text-gray-300"></i>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>
   
</div>
{{-- <div class="col-xl-3 col-md-6 mb-4">
  
</div> --}}
  <!-- Healthy Foods Counter -->
  {{-- <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-xs fw-bold text-info text-uppercase mb-1">KEGIATAN KWT
                      </div>
                      <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                              <div class="h5 mb-0 mr-3 fw-bold text-gray-800">
                                  @php echo App\Http\Controllers\DashboardInformationController::cont_out() @endphp</div>
                          </div>
                      </div>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-seedling fa-2x text-gray-300"></i>
                  </div>
              </div>
          </div>
      </div>
  </div> --}}

  <!-- Program Counter -->
  {{-- <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs fw-bold text-success text-uppercase mb-1">
                        TOGA</div>
                    <div class="h5 mb-0 fw-bold text-gray-800">@php echo App\Http\Controllers\DashboardInformationController::cont_in() @endphp</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-calendar-minus fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<!-- Healthy Foods Counter -->
{{-- <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs fw-bold text-info text-uppercase mb-1">PRODUKSI TOGA
                    </div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <div class="h5 mb-0 mr-3 fw-bold text-gray-800">
                                @php echo App\Http\Controllers\DashboardInformationController::cont_out() @endphp</div>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-seedling fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div> --}}
  
@endsection
{{-- <h1>Ini adalah halaman Dashboard</h1> --}}