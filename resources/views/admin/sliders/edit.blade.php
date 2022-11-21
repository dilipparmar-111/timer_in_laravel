@extends('layouts.app')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3>Edit Slider</h3>
                            </div>
{{--                            @dd($sliders)--}}
{{--                            {!! Form::open(['route' => 'sliders.update','enctype'=>'multipart/form-data']) !!}--}}
                            {!! Form::model($sliders, ['route' => ['sliders.update', $sliders->id], 'method' => 'patch','enctype'=>'multipart/form-data']) !!}
                            @csrf
                            <div class="card-body">
                                @include('admin.sliders.fields')
                            </div>

                            <div class="card-footer">
                                {!! Form::submit('Update', ['class' => 'btn btn-info shadow-sn']) !!}
                                <a href="{{ route('sliders.index') }}" class="btn btn-danger shadow-sm">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
