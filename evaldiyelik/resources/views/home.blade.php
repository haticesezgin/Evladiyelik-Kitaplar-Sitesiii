<!DOCTYPE html>
<html>
<head>
    @include("layout.head")
</head>
<body class="bg-light">
@include("layout.navbar")
<div class="container ps-5 pe-5">
    <div class="row">
        <div class="col-12 p-2 text-center mt-4 mb-4 border-bottom-black" >
            <h1 class="fw-bolder fs-1">Bir Tutam Kitap Kokusu</h1>
            <p>İyiyi arayan ruhun muhtaç olduğu asil dost, hakikati seslenen kitaptır.
                (İmam-ı Rabbani)</p>
        </div>
    </div>
</div>
    <div class="row">
        @include("home.kitap")
        <div class="col-lg-1 col-0"></div>
        <div class="col-lg-3 col-12 mt-5 ps-lg-4">
            <div class="row">
                @include("home.trendler")
                @include("home.son")
                @include("home.etiketler")

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 g-0 mt-2">
            <nav>
                <ul class="pagination justify-content-center">
                    <li class="page-item @if($sayfa_numara===1) disabled @endif">
                        <a class="page-link"href="/?page={{$sayfa_numara-1}}">
                            önceki
                        </a>
                    </li>
                    @for($i=0;$i<ceil($total_kitaplar/$sayfa_numara);$i++)
                        <li class="page-item @if($sayfa_numara===$i+1)active @endif">
                            <a class="page-link" href="/?page={{$i+1}}">{{$i+1}}</a>
                        </li>
                        @endfor
                    <li class="page-item @if($sayfa_numara>= ceil($total_kitaplar/$sayfa_sayısı)) disabled @endif">
                        <a class="page-link"href="/?page={{$sayfa_numara+1}}">
                            sonraki
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>

