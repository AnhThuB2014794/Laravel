<div class="table-responsive p-0">

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>
                    <input type="checkbox" value="" id="checkAll" class="input-checkbox">
                </th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                    Họ Tên</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                    Email</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                    Số điện thoại</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                    Địa chỉ</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                    Tình trạng</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                    Thao tác</th>

            </tr>
        </thead>
        <tbody>
            @if(isset($users) && is_object($users))
            @foreach($users as $user)
            <tr>
                <td>
                    <input type="checkbox" value="" id="checkAll" class="input-checkbox checkBoxItem">
                </td>
                <td>
                    {{$user->name}}
                </td>
                <td>

                    {{$user->email}}
                </td>
                <td>{{$user->phone}}</td>
                <td>
                    {{$user->address}}
                </td>
                <td class="">
                    <div class="form-check form-switch ps-0 ms-auto my-auto ">
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="" onclick="(this)">
                    </div>
                </td>
                <td class="text-center">
                    <a href="{{route('user.edit', $user->id)}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                    <a href="{{route('user.delete', $user->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
</div>
{{ $users->links('pagination::bootstrap-4')}}