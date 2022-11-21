<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', \Illuminate\Support\Facades\Lang::get('menubar.id')) !!}
    <p>{{ $users->id }}</p>
</div>

<!-- Name Id Field -->
<div class="col-sm-12">
    {!! Form::label('name', \Illuminate\Support\Facades\Lang::get('menubar.name')) !!}
    <p>{{ $users->name }}</p>
</div>

<!-- Address Field -->
<div class="col-sm-12">
    {!! Form::label('address', \Illuminate\Support\Facades\Lang::get('menubar.address')) !!}
    <p>{{ $users->address }}</p>
</div>

<!-- City Field -->
<div class="col-sm-12">
    {!! Form::label('city', \Illuminate\Support\Facades\Lang::get('menubar.city')) !!}
    <p>{{ $users->city }}</p>
</div>

<!-- State Field -->
<div class="col-sm-12">
    {!! Form::label('state', \Illuminate\Support\Facades\Lang::get('menubar.state')) !!}
    <p>{{ $users->state }}</p>
</div>

<!-- Mobile Field -->
<div class="col-sm-12">
    {!! Form::label('mobile', \Illuminate\Support\Facades\Lang::get('menubar.mobile')) !!}
    <p>{{ $users->mobile }}</p>
</div>

<!-- Email Id Field -->
<div class="col-sm-12">
    {!! Form::label('email', \Illuminate\Support\Facades\Lang::get('menubar.email')) !!}
    <p>{{ $users->email }}</p>
</div>


{{--<!-- Image Field -->--}}
{{--<div class="col-sm-12">--}}
{{--    {!! Form::label('image', 'Image:') !!}<br>--}}
{{--    <img src="{{asset('storage/admin/sliders/'.$sliders->image)}}" style="width: 40px; height: 40px;" alt="user">--}}
{{--</div><br>--}}

{{--<!-- Status Field -->--}}
{{--<div class="col-sm-12">--}}
{{--    {!! Form::label('status', 'Status:') !!}<br>--}}
{{--    @if($sliders->status == 'active')--}}
{{--        <span class="badge badge-success">Active</span>--}}
{{--        @else--}}
{{--    <span class="badge badge-danger">Deactive</span>--}}
{{--        @endif--}}
{{--</div><br>--}}

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $users->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $users->updated_at }}</p>
</div>
