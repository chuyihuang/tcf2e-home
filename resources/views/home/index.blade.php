@extends('layouts.master')

@section('title', '首頁')

@section('content')

    <section id="home" class="page">
        <div class="container">
            <div class="content cover text-center">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="animated hiding" data-animation="fadeInDown" data-delay="300">我們是台中前端社群</h2>
                        <br>
                        <h3 class="animated hiding" data-animation="fadeIn" data-delay="600">歡迎加入我們，分享更多資訊</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="page">
        <div class="container">
            <div class="content text-center">
                <div class="heading">
                    <h2>關於社群</h2>
                    <div class="border"></div>
                    <p>台中前端社群目標是提供台中或中部地區的前端工程師，網站設計師或後端工程師等網站 / App相關人員一個交流與學習的平台。<br>
                    透過這個平台讓中部地區的網站 / App的開發人員能夠向上提升與認識更多相同領域的夥伴的機會。</p>
                    <br>
                    <a class="btn btn-blue animated hiding" data-animation="fadeIn" href="{{ route('about') }}">瞭解更多</a>
                </div>
            </div>
        </div>
    </section>

    <section id="work" class="page">
        <div class="container">
            <div class="content text-center">
                <div class="heading">
                    <h2>近期活動及資源分享</h2>
                    <div class="border"></div>
                    <p>2015年第二季將採每兩週一次的聚會形式（每季進行調整並在社群也及網站公告）</p>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="page">
        <div class="container">
            <div class="content text-center">
                <div class="heading">
                    <h2>更多服務</h2>
                    <div class="border"></div>
                    <p>社群目前正在建置更多服務,請務必隨時回來造訪網站</p>
                    <br>
                    <a class="btn btn-blue animated hiding" data-animation="fadeIn" href="https://www.facebook.com/groups/taichung.f2e/" target="_blank">到Facebook社群 瞭解更多</a>
                </div>
            </div>
        </div>
    </section>

@stop