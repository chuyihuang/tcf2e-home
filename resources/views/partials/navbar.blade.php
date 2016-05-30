<div id="navbar-top">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">台中前端社群</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="{{ (Request::is('/') ? ' active' : '') }}">
                        <a href="/">首頁</a>
                    </li>
                    {{--<li class="{{ (Request::is('meetups*') ? ' active' : '') }}">--}}
                        {{--<a href="{{ route('meetups') }}">聚會</a>--}}
                    {{--</li>--}}
                    {{--<li class="{{ (Request::is('resources*') ? ' active' : '') }}">--}}
                        {{--<a href="{{ route('resources') }}" disable>資源</a>--}}
                    {{--</li>--}}
                    <li class="{{ (Request::is('about') ? ' active' : '') }}">
                        <a href="{{ route('about') }}">關於</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>