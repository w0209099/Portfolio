@extends('layouts.app')

@section('content')

    <div class="accordionItem" >
        <h3 id="head1" onclick=open1();>Early Work</h3>
        <section id = "ws1" class="clearfix">
            <div id = "ws1left" >
                <p>conference center</p>
                <p>Click <a href="{{ url('/Center') }}">here</a> to see the conference center web view</p>
                <p>Click <a href="https://github.com/w0209099/Portfolio/blob/master/conference%20center/center.htm">here</a> to see the conference center HTML code</p>
                <p>Click <a href="https://github.com/w0209099/Portfolio/blob/master/conference%20center/center.css">here</a> to see the conference center 1st CSS code</p>
                <p>Click <a href="https://github.com/w0209099/Portfolio/blob/master/conference%20center/table.css">here</a> to see the conference center 2nd CSS code</p>
                <p>CupCake</p>
                <p>Click <a href="{{ url('/CupCake') }}">here</a> to see the CupCake web view</p>
                <p>Click <a href="https://github.com/w0209099/Portfolio/blob/master/cupecake/cupecake.html">here</a> to see the CupCake HTML code</p>
                <p>Click <a href="https://github.com/w0209099/Portfolio/blob/master/cupecake/cupecake.css">here</a> to see the CupCake CSS code</p>
            </div>
            <div id = "ws1right" >
                <p>Some of my earliest work the conference center and cupcake pages are simple designs ability to use and understand the fundamental basics of web development.</p>
                <p>The conference center schedule is a basic web page the shows the schedule of a conference center in a simple row/column setup using only HTML5 and limited CSS3.</p>
                <p>The Cupcake site is a simple bakery page with pictures and placeholder text. It also has basic Responsive design thought media queries.</p>
            </div>
        </section>
    </div>
    <br>
    <br>
    <div class="accordionItem" class="clearfix">
        <h3 id="head2" onclick=open2(); >Laravel Database</h3>
        <section id = "ws2" class="clearfix">
            <div id = "ws2left">
                <p>Click <a href="https://github.com/w0209099/Portfolio/tree/master/project">here</a> to see My Database projects github</p>
                <p>Click <a href="https://github.com/w0209099/Portfolio/tree/master/project/database/migrations">here</a> to see My Database projects migrations</p>
                <p>Click <a href="https://github.com/w0209099/Portfolio/tree/master/project/app">here</a> to see My Database projects models</p>
                <p>Click <a href="https://github.com/w0209099/Portfolio/tree/master/project/resources/views">here</a> to see My Database projects views</p>
                <p>Click <a href="https://github.com/w0209099/Portfolio/tree/master/project/app/Http/Controllers">here</a> to see My Database projects Controllers</p>
            </div>
            <div id = "ws2right">
                <p>My Laravel Database project is a functional MySQL database built with the Laravel framework as administrative back-end of a potential Content Management System. </p>
                <p>The system has Full Create Read Update Delete functionality on multiply database tables and datatypes as well as has a fully functional Signup and login system that restricts functionality based of the user’s permissions.</p>
            </div>
        </section>
    </div>
    <br>
    <br>
    <div class="accordionItem" class="clearfix">
        <h3 id="head3" onclick=open3(); >My Portfolio</h3>
        <section id ="ws3" class = "clearfix">
            <div id = "ws3left" class="clearfix">
                <p>Click <a href="https://github.com/w0209099/Portfolio/tree/master/Portfolio">here</a> to see My Protfolio's github</p>
                <p>Click <a href="https://github.com/w0209099/Portfolio/tree/master/Portfolio/resources/views">here</a> to see My Protfolio's views</p>
                <p>Click <a href="https://github.com/w0209099/Portfolio/tree/master/Portfolio/public/css">here</a> to see My Protfolio's CSS</p>
            </div>
            <div id = "ws3right">
                <p>My portfolio is intended to show off all my skills in the field of web development</p>
                <p>It currently only use’s HTML5, CSS3 and some bootstrap,
                    because I felt that at this point adding on other features such as jQueryUI elements would not be effective do to my lack of current artistic design skill,
                    though I hope to add these  features and others at a later date.</p>

            </div>
        </section>
    </div>
    <br>

@endsection