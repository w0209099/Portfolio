@extends('layouts.app')

@section('content')

    <div class="accordionItem" class="clearfix">
        <h3 id="head1" onclick=open1();>Early Work</h3>
        <section id = "ws1" class="clearfix">
            <div id = "ws1left" class="clearfix">
                <p>Click <a href="{{ url('/CupCake') }}">here</a> to see the CupCake web view</p>
                <p>Click <a href="https://github.com/w0209099/Portfolio/blob/master/cupecake/cupecake.html">here</a> to see the HTML code</p>
                <p>Click <a href="https://github.com/w0209099/Portfolio/blob/master/cupecake/cupecake.css">here</a> to see the CSS code</p>
                <p>Click <a href="{{ url('/Center') }}">here</a> to see the conference center web view</p>
                <p>Click <a href="https://github.com/w0209099/Portfolio/blob/master/cupecake/cupecake.html">here</a> to see the HTML code</p>
                <p>Click <a href="https://github.com/w0209099/Portfolio/blob/master/cupecake/cupecake.css">here</a> to see the CSS code</p>
            </div>
            <div id = "ws1right">
                <p>

                </p>
            </div>
        </section>
    </div>
    <br>
    <br>
    <div class="accordionItem" class="clearfix">
        <h3 id="head2" onclick=open2(); >Laravel Database</h3>
        <section id = "ws2" >
            <div id = "ws2left" class="clearfix">
                <p>Click <a href="https://github.com/w0209099/Portfolio/tree/master/Portfolio">here</a> to see My Protfolio's code</p>
            </div>
            <div id = "ws2right">
                <p>

                </p>
            </div>
        </section>
    </div>
    <br>
    <br>
    <div class="accordionItem" class="clearfix">
        <h3 id="head3" onclick=open3(); >My Portfolio</h3>
        <section id ="ws3" class = "clearfix">
            <div id = "ws3left" class="clearfix">
                <p>Click <a href="https://github.com/w0209099/Portfolio/tree/master/project">here</a> to see My Database projects code code</p>
            </div>
            <div id = "ws3right">
                <p>

                </p>
            </div>
        </section>
    </div>
    <br>

@endsection