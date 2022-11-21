<div class="row">
    <!-- Model Id Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('name', 'Name:') !!}

        {!! Form::text('name', null, ['class' => 'form-control '.($errors->has('name') ? 'is-invalid': ''),'Placeholder'=>'Enter Name']) !!}

    </div>

    <!-- Pancard Field -->
    <div class="col-lg-6">
        {!! Form::label('image', 'Image:') !!}
        <br>
        <div class="form-group">
            <div class="custom-file">
                <input type="file" name="image"
                       class="custom-file-input" id="image">
                <label class="custom-file-label" for="customFile">Upload Image</label>
            </div>
            @if(isset($sliders))
                @if($sliders->image == '')
                    <img src="{{asset('admin/dummy_image/no-image.jpg')}}" alt="user"
                         style="width: 40px; height: 40px;">
                @else
                    <img src="{{asset('storage/admin/sliders/'.$sliders->image)}}"
                         style="width: 40px; height: 40px;"
                         alt="user">
                @endif
            @endif

            <span class="text-danger">{{ $errors->first('image') }}</span>
        </div>
    </div>

    <!-- Model Id Field -->
    <div class="form-group col-sm-12">
        {!! Form::label('desc', 'Description:') !!}

        {!! Form::textarea('desc', null, ['class' => 'form-control '.($errors->has('desc') ? 'is-invalid': ''),'Placeholder'=>'Enter Description']) !!}

    </div>
</div>
