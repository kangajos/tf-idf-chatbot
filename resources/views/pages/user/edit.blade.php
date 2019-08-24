@extends("layout.admin")
@section("content")
    <div id="page">
        <div class="page-content header-clear-medium">
            <h3 class="center-text bolder">Data User</h3><br><br>
            <div class="content">
                <form action="{{route("user_update")}}" method="post">
                    {{csrf_field()}}
                    <h5>EDIT DATA USER</h5>
                    <div class="input-style input-style-1 input-required">
                        <label>Username</label>
                        <input type="text" name="username" value="{{$edit->username}}" placeholder="Username" required>
                        <input type="hidden" name="id" value="{{$edit->id}}" required>
                    </div>
                    <div class="input-style input-style-1 input-required">
                        <label>Email</label>
                        <input type="text" name="email"  value="{{$edit->email}}" placeholder="Email" required>
                    </div>
                    <div class="input-style input-style-2 input-required">
                        <label>Level</label>
                        <select name="level" id="" required>
                            <option value="">--Plilih--</option>
                            <option value="ADMINISTRATOR" {{$edit->level == "ADMINISTRATOR" ? "selected" : ""}}>ADMINISTRATOR</option>
                            <option value="USER" {{$edit->level == "USER" ? "selected" : ""}}>USER</option>
                        </select>
                    </div>
                    <div class="input-style input-style-1 input-required">
{{--                        <label>Password</label>--}}
{{--                        <input type="password" name="password" placeholder="Password" required>--}}
{{--                    </div>--}}
                    <button class="button button-m shadow-small button-circle bg-dark1-light" type="submit"> S i m p a
                        n
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection