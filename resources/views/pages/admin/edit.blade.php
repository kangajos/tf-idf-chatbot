@extends("layout.admin")
@section("content")
    <div id="page">
        <div class="page-content header-clear-medium">
            <h3 class="center-text bolder">Edit Data Pertanyaan</h3><br><br>
            <div class="content">
                <form action="{{route("post_update")}}" method="post">
                    {{csrf_field()}}
                    <h5>Tambah Data</h5>
                    <div class="input-style input-style-1 input-required">
                        <span>Isi Peratanyaan</span>
                        <input type="text" name="pertanyaan" placeholder="Isi pertanyaan" value="{{$edit->isi}}" required>
                        <input type="hidden" name="id" value="{{$edit->id_faq}}" required>
                    </div>
                    <div class="input-style input-style-1 input-required">
                        <span>Jawaban</span>
                        <textarea type="text" name="jawaban" placeholder="Isi Jawaban" required>{{$edit->jawab}}</textarea>
                    </div>
                    <button class="button button-m shadow-small button-circle bg-dark1-light" type="submit"> S i m p a
                        n
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection