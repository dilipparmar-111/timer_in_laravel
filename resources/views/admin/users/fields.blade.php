<div class="row">
    <!-- Model Id Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('name', \Illuminate\Support\Facades\Lang::get('menubar.name')) !!}

        {!! Form::text('name', null, ['class' => 'form-control '.($errors->has('name') ? 'is-invalid': ''),'Placeholder'=>\Illuminate\Support\Facades\Lang::get('menubar.enter_name')]) !!}

    </div>

    <!-- Model Id Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('address',  \Illuminate\Support\Facades\Lang::get('menubar.address')) !!}

        {!! Form::textarea('address', null, ['class' => 'form-control '.($errors->has('address') ? 'is-invalid': ''),'Placeholder'=>\Illuminate\Support\Facades\Lang::get('menubar.enter_address')]) !!}

    </div>

    <!-- Model Id Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('city',  \Illuminate\Support\Facades\Lang::get('menubar.city')) !!}

        {!! Form::text('city', null, ['class' => 'form-control '.($errors->has('city') ? 'is-invalid': ''),'Placeholder'=>\Illuminate\Support\Facades\Lang::get('menubar.enter_name_of_city')]) !!}

    </div>

    <!-- Model Id Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('state',  \Illuminate\Support\Facades\Lang::get('menubar.state')) !!}

        {!! Form::text('state', null, ['class' => 'form-control '.($errors->has('state') ? 'is-invalid': ''),'Placeholder'=>\Illuminate\Support\Facades\Lang::get('menubar.enter_name_of_state')]) !!}

    </div>

    <!-- Model Id Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('mobile',  \Illuminate\Support\Facades\Lang::get('menubar.mobile')) !!}

        {!! Form::text('mobile', null, ['class' => 'form-control '.($errors->has('mobile') ? 'is-invalid': ''),'Placeholder'=>\Illuminate\Support\Facades\Lang::get('menubar.enter_email')]) !!}

    </div>

    <!-- Model Id Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('email',  \Illuminate\Support\Facades\Lang::get('menubar.email')) !!}

        {!! Form::email('email', null, ['class' => 'form-control '.($errors->has('email') ? 'is-invalid': ''),'Placeholder'=>\Illuminate\Support\Facades\Lang::get('menubar.enter_mobile_no')]) !!}

    </div>

    {{--    <!-- Pancard Field -->--}}
    {{--    <div class="col-lg-6">--}}
    {{--        {!! Form::label('image', 'Image:') !!}--}}
    {{--        <br>--}}
    {{--        <div class="form-group">--}}
    {{--            <div class="custom-file">--}}
    {{--                <input type="file" name="image"--}}
    {{--                       class="custom-file-input" id="image">--}}
    {{--                <label class="custom-file-label" for="customFile">Upload Image</label>--}}
    {{--            </div>--}}
    {{--            @if(isset($sliders))--}}
    {{--                @if($sliders->image == '')--}}
    {{--                    <img src="{{asset('admin/dummy_image/no-image.jpg')}}" alt="user"--}}
    {{--                         style="width: 40px; height: 40px;">--}}
    {{--                @else--}}
    {{--                    <img src="{{asset('storage/admin/sliders/'.$sliders->image)}}"--}}
    {{--                         style="width: 40px; height: 40px;"--}}
    {{--                         alt="user">--}}
    {{--                @endif--}}
    {{--            @endif--}}

    {{--            <span class="text-danger">{{ $errors->first('image') }}</span>--}}
    {{--        </div>--}}
    {{--    </div>--}}


</div>
