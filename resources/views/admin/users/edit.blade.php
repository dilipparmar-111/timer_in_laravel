@extends('layouts.app')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3>@lang('menubar.users') @lang('menubar.of_edit')</h3>
                            </div>
{{--                            @dd($sliders)--}}
{{--                            {!! Form::open(['route' => 'sliders.update','enctype'=>'multipart/form-data']) !!}--}}
                            {!! Form::model($users, ['route' => ['users.update', $users->id], 'method' => 'patch','enctype'=>'multipart/form-data']) !!}
                            @csrf
                            <div class="card-body">
                                @include('admin.users.fields')
                            </div>

                            <div class="card-footer">
                                {!! Form::submit(\Illuminate\Support\Facades\Lang::get('menubar.update'), ['class' => 'btn btn-primary shadow-sn']) !!}
                                <a href="{{ route('users.index') }}" class="btn btn-dark shadow-sm">@lang('menubar.cancel')</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
