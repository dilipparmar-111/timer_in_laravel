@extends('layouts.app')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>@lang('menubar.sliders') @lang('menubar.of_details')</h4>
                                <div class="card-header-form">
                                    <a href="{{route('sliders.create')}}" class="btn btn-primary">@lang('menubar.add') <i class="fas fa-plus"></i> </a>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    @include('admin.sliders.table')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="formModal"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="formModal">Select Time For Deactivate</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('status_timer',$sliders[0]->id)}}" method="post" class="">
                            @csrf
                            <div class="form-group">
                                <label>Start Time</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-clock"></i>
                                        </div>
                                    </div>
                                    <input type="datetime-local" class="form-control" placeholder="Select Start Time" name="start_time">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>End Time</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-clock"></i>
                                        </div>
                                    </div>
                                    <input type="datetime-local" class="form-control" placeholder="Select End Time" name="end_time">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-danger btn-block m-t-15 waves-effect">Deactive</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
