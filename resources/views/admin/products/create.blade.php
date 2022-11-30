@extends('layouts.app')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3>Product Create</h3>
                            </div>
                            {!! Form::open(['route' => 'products.store','enctype'=>'multipart/form-data']) !!}
                            @csrf
                            <div class="card-body">
                                @include('admin.products.fields')
                            </div>

                            <div class="card-footer">
                                {!! Form::submit(\Illuminate\Support\Facades\Lang::get('menubar.save'), ['class' => 'btn btn-primary shadow-sn']) !!}
                                <a href="{{ route('products.index') }}"
                                   class="btn btn-dark shadow-sm">@lang('menubar.cancel')</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

