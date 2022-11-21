@extends('layouts.app')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>@lang('menubar.users') @lang('menubar.of_details')</h4>
                                <div class="card-header-form">
                                    <a href="{{route('users.create')}}" class="btn btn-primary">@lang('menubar.add') <i class="fas fa-plus"></i> </a>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    @include('admin.users.table')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
