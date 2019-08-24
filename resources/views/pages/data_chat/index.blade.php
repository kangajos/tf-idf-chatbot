@extends("layout.admin")
@section("content")
    <div id="page">
        <div class="page-content header-clear-medium">
            <div data-height="260" class="caption caption-margins round-medium shadow-large" style="height: 220px;">
                <div class="caption-center">
                    <h1 class="center-text color-white bolder font-26">Rekap Chat Bot</h1>
                    <h4><span class="text-center text-white bg-mint-dark opacity-80">Jawaban Sering Muncul [{{$trending->total}}]:<br> {!! $trending->hasil_faq !!}</span></h4>
                    <h4><span class="text-center text-white bg-mint-dark opacity-80">Pesan Respon YES : {{$yes}} Pesan.</span></h4>
                    <h4><span class="text-center text-white bg-mint-dark opacity-80">Pesan Respon NO : {{$no}} Pesan</span></h4>
                </div>
                <div class="caption-overlay bg-black opacity-90"></div>
                <div class="caption-bg bg-28"></div>
            </div>
            <h3 class="center-text bolder">Data Chat Bot</h3><br>
            <div class="content">
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
                        <th class="bg-dark2-dark">EMAIL</th>
                        <th class="bg-dark2-dark">PERTANYAAN</th>
                        <th class="bg-dark2-dark">JAWABAN</th>
                        <th class="bg-dark2-dark">WAKTU</th>
                        <th class="bg-dark2-dark">STATUS</th>
                    </tr>
                    @foreach($data as $key => $value)
                        <tr>
                            <td class="bg-dark1-light">{{($key+1)}}</td>
                            <td class="bg-dark1-light">{{$value->email}}</td>
                            <td class="bg-dark1-light">{{$value->pertanyaan}}</td>
                            <td class="bg-dark1-light">{{$value->hasil_faq}}</td>
                            <td class="bg-dark1-light">{{$value->tgl}}</td>
                            <td class="bg-dark1-light">{{strtoupper($value->status)}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>

            <div class="divider divider-margins"></div>
        </div>
    </div>
@endsection