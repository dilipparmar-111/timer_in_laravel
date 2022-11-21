<table class="table table-striped table-hover text-center">
    <tr>
        <th>@lang('menubar.id')</th>
        <th>@lang('menubar.name')</th>
        <th>@lang('menubar.address')</th>
        <th>@lang('menubar.city')</th>
        <th>@lang('menubar.state')</th>
        <th>@lang('menubar.mobile')</th>
        <th>@lang('menubar.email')</th>
        <th>@lang('menubar.edit')</th>
        <th>@lang('menubar.show')</th>
        <th>@lang('menubar.delete')</th>
    </tr>
    @foreach($users as $user)
    <tr>
        <td class="p-0 text-center">{{$user->id}}</td>
        <td class="p-0 text-center">{{$user->name}}</td>
        <td class="p-0 text-center">{{$user->address}}</td>
        <td class="p-0 text-center">{{$user->city}}</td>
        <td class="p-0 text-center">{{$user->state}}</td>
        <td class="p-0 text-center">{{$user->mobile}}</td>
        <td class="p-0 text-center">{{$user->email}}</td>
{{--        <td class="p-0 text-center">--}}
{{--            <img src="{{asset('storage/admin/sliders/'.$slider->image)}}" style="width: 40px; height: 40px;" alt="user"></td>--}}
{{--        <td class="p-0 text-center">--}}
{{--            @if($slider->status == 'deactive')--}}
{{--            <a href="{{route('status_change',$slider->id)}}" class="btn btn-danger">@lang('menubar.deactivate')</a>--}}
{{--                @else--}}
{{--                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">@lang('menubar.select_time_for_deactivate')</button>--}}
{{--            @endif--}}
{{--        </td>--}}

        <td><a href="{{route('users.edit',$user->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a></td>
        <td><a href="{{route('users.show',$user->id)}}" class="btn btn-warning"><i class="fa fa-eye"></i></a></td>
        <td><form action="{{route('users.destroy',$user->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
            </form></td>
    </tr>
        @endforeach
</table>


