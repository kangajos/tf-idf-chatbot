@extends("layout.admin")
@section("content")
    <div id="page">
        <div class="page-content header-clear-medium">
            <h3 class="center-text bolder">Data Pertanyaan</h3><br><br>
            <div class="content">
                <form action="{{route("post")}}" method="post">
                    {{csrf_field()}}
                    <h5>Tambah Data</h5>
                    <div class="input-style input-style-1 input-required">
                        <span>Isi Peratanyaan</span>
                        <input type="text" name="pertanyaan" placeholder="Isi pertanyaan" required>
                    </div>
                    <div class="input-style input-style-1 input-required">
                        <span>Jawaban</span>
                        <textarea type="text" name="jawaban" placeholder="Isi Jawaban" required></textarea>
                    </div>
                    <button class="button button-m shadow-small button-circle bg-dark1-light" type="submit"> S i m p a n</button>
                </form>
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
                        <th class="bg-dark2-dark">ISI</th>
                        <th class="bg-dark2-dark">STEMMING</th>
                        <th class="bg-dark2-dark">JAWABAN</th>
                        <th class="bg-dark2-dark">ACTION</th>
                    </tr>
                    @foreach($data as $key => $value)
                        <tr>
                            <td class="bg-dark1-light">{{($key+1)}}</td>
                            <td class="bg-dark1-light">{{$value->isi}}</td>
                            <td class="bg-dark1-light">{{$value->stemming}}</td>
                            <td class="bg-dark1-light">{{$value->jawab}}</td>
                            <td class="bg-dark1-light">
                                <a href="{{route("post_edit", $value->id_faq)}}" class="text-white"> <span class="fa fa-edit fa-2x"></span></a>
                                <a href="{{route("post_delete", $value->id_faq)}}" class="text-white"> <span class="fa fa-trash-alt fa-2x"></span></a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>

            <div class="divider divider-margins"></div>
        </div>
    </div>
@endsection