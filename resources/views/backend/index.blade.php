@extends('backend.layouts.app')
@section('title', 'Dashboard ')
@section('content')


        @role('superadministrator|admin')
            <!-- Icon Cards-->
            <div class="row">
              <div class="col-xl-2 col-sm-6 mb-3">
                <div class="card text-white bg-primary o-hidden h-100">
                  <div class="card-body">
                    <div class="card-body-icon">
                      <i class="fas fa-fw fa-comments"></i>
                    </div>
                    <div class="mr-4">{{ DB::table('albums')->count() }} Albums!</div>
                  </div>
                <a class="card-footer text-white clearfix small z-1" href="{{ route('album.index') }}">
                    <span class="float-left">View Details</span>
                    <span class="float-right">
                      <i class="fas fa-angle-right"></i>
                    </span>
                  </a>
                </div>
              </div>
              <div class="col-xl-2 col-sm-6 mb-3">
                <div class="card text-white bg-warning o-hidden h-100">
                  <div class="card-body">
                    <div class="card-body-icon">
                      <i class="fas fa-fw fa-camera"></i>
                    </div>
                    <div class="mr-4">{{ DB::table('photos')->count() }} Photos</div>
                  </div>
                <a class="card-footer text-white clearfix small z-1" href="{{ route('photo.index') }}">
                    <span class="float-left">View Details</span>
                    <span class="float-right">
                      <i class="fas fa-angle-right"></i>
                    </span>
                  </a>
                </div>
              </div>
              <div class="col-xl-2 col-sm-6 mb-3">
                <div class="card text-white bg-success o-hidden h-100">
                  <div class="card-body">
                    <div class="card-body-icon">
                      <i class="fas fa-fw fa-user"></i>
                    </div>
                    <div class="mr-4">{{ DB::table('teams')->count() }} Members!</div>
                  </div>
                <a class="card-footer text-white clearfix small z-1" href="{{ route('team.index') }}">
                    <span class="float-left">View Details</span>
                    <span class="float-right">
                      <i class="fas fa-angle-right"></i>
                    </span>
                  </a>
                </div>
              </div>
              <div class="col-xl-2 col-sm-6 mb-3">
                <div class="card text-white bg-danger o-hidden h-100">
                  <div class="card-body">
                    <div class="card-body-icon">
                      <i class="fas fa-fw fa-life-ring"></i>
                    </div>
                    <div class="mr-4">{{ DB::table('services')->count() }} Services !</div>
                  </div>
                <a class="card-footer text-white clearfix small z-1" href="{{ route('service.index') }}">
                    <span class="float-left">View Details</span>
                    <span class="float-right">
                      <i class="fas fa-angle-right"></i>
                    </span>
                  </a>
                </div>
              </div>
                <div class="col-xl-2 col-sm-6 mb-3">
                    <div class="card text-white bg-secondary o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fas fa-fw fa-envelope"></i>
                            </div>
                            <div class="mr-4">{{ DB::table('messages')->count() }} Messages! </div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="{{ route('message.index') }}">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                      <i class="fas fa-angle-right"></i>
                    </span>
                        </a>
                    </div>
                </div>
            </div>

            @endrole


@endsection
