@extends('layouts.app')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3>@lang('menubar.users') @lang('menubar.of_details') @lang('menubar.show')</h3>
                            </div>
                            <div class="card-body">
                                @include('admin.users.show_fields')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
