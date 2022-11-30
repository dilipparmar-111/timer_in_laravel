@extends('layouts.app')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3>Product Show</h3>
                            </div>
                            <div class="card-body">
                                @include('admin.products.show_fields')
                            </div>

                            <div class="card-footer">
{{--                                {!! Form::submit(\Illuminate\Support\Facades\Lang::get('menubar.save'), ['class' => 'btn btn-primary shadow-sn']) !!}--}}
{{--                                <a href="{{ route('products.index') }}"--}}
{{--                                   class="btn btn-dark shadow-sm">@lang('menubar.cancel')</a>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

