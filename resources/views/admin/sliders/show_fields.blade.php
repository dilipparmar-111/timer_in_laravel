<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $sliders->id }}</p>
</div>

<!-- Name Id Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $sliders->name }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('desc', 'Description:') !!}
    <p>{{ $sliders->desc }}</p>
</div>

<!-- Image Field -->
<div class="col-sm-12">
    {!! Form::label('image', 'Image:') !!}<br>
    <img src="{{asset('storage/admin/sliders/'.$sliders->image)}}" style="width: 40px; height: 40px;" alt="user">
</div><br>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}<br>
    @if($sliders->status == 'active')
        <span class="badge badge-success">Active</span>
        @else
    <span class="badge badge-danger">Deactive</span>
        @endif
</div><br>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $sliders->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $sliders->updated_at }}</p>
</div>
