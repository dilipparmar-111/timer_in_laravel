@extends('layouts.app')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3>Create Slider</h3>
                            </div>
                            {!! Form::open(['route' => 'sliders.store','enctype'=>'multipart/form-data']) !!}
                            @csrf
                            <div class="card-body">
                                @include('admin.sliders.fields')
                            </div>

                            <div class="card-footer">
                                {!! Form::submit('Save', ['class' => 'btn btn-primary shadow-sn']) !!}
                                <a href="{{ route('sliders.index') }}" class="btn btn-dark shadow-sm">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
