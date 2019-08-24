@extends("layout.admin")
@section("content")
    <div id="page">
        <div class="page-content header-clear-medium">
            <h3 class="center-text bolder">Data User</h3><br><br>
            <div class="content">
{{--                <form action="{{route("user_post")}}" method="post">--}}
{{--                    {{csrf_field()}}--}}
{{--                    <h5>TAMBAH DATA USER</h5>--}}
{{--                    <div class="input-style input-style-1 input-required">--}}
{{--                        <label>Username</label>--}}
{{--                        <input type="text" name="pertanyaan" placeholder="Username" required>--}}
{{--                    </div>--}}
{{--                    <div class="input-style input-style-1 input-required">--}}
{{--                        <label>Email</label>--}}
{{--                        <input type="text" name="pertanyaan" placeholder="Email" required>--}}
{{--                    </div>--}}
{{--                    <div class="input-style input-style-2 input-required">--}}
{{--                        <label>Level</label>--}}
{{--                        <select name="level" id="" required>--}}
{{--                            <option value="">--Plilih--</option>--}}
{{--                            <option value="ADMINISTRATOR">ADMINISTRATOR</option>--}}
{{--                            <option value="USER">USER</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                    <div class="input-style input-style-1 input-required">--}}
{{--                        <label>Password</label>--}}
{{--                        <input type="password" name="password" placeholder="Password" required>--}}
{{--                    </div>--}}
{{--                    <button class="button button-m shadow-small button-circle bg-dark1-light" type="submit"> S i m p a n</button>--}}
{{--                </form>--}}
                <style>
                    td{
                        text-align: left!important;
                        padding: 3px!important;
                        font-size: 14px;
                        border-bottom: 1px solid silver;
                        border-right: 1px solid silver;
                    }
                    .text-white{
                        color: white;
                        padding: 5px;
                        font-size: 15px;
                    }
                </style>
                <table class="table-borders table-responsive" cellpadding="0" cellspacing="0">
                    <tr>
                        <th class="bg-dark2-dark">#</th>
                        <th class="bg-dark2-dark">USERNAME</th>
                        <th class="bg-dark2-dark">EMAIL</th>
                        <th class="bg-dark2-dark">LEVEL</th>
{{--                        <th class="bg-dark2-dark">ACTION</th>--}}
                    </tr>
                    @foreach($data as $key => $value)
                        <tr>
                            <td class="bg-dark1-light">{{($key+1)}}</td>
                            <td class="bg-dark1-light">{{$value->username}}</td>
                            <td class="bg-dark1-light">{{$value->email}}</td>
                            <td class="bg-dark1-light">User</td>
{{--                            <td class="bg-dark1-light">--}}
{{--                                <a href="{{route("user_edit", $value->id)}}" class="text-white"> <span class="fa fa-edit fa-2x"></span></a>--}}
{{--                                <a href="{{route("user_delete", $value->id)}}" class="text-white"> <span class="fa fa-trash-alt fa-2x"></span></a>--}}
{{--                            </td>--}}
                        </tr>
                    @endforeach
                </table>
            </div>

            <div class="divider divider-margins"></div>
        </div>
    </div>
@endsection