@extends('layouts.app')

@section('content')


    <section id = "contant">
        <div id = "left">
            <div class ="welcome"><p>Hello My name is Andrew Schnurr. Welcome to my online portfolio </p></div>
            <div class ="welcome"><p>I am A Nova Scotia Community College trained Web Application Developer, with some understanding of Web Design.</p></div>
            <div class ="welcome">
                <p>To learn about me please see my <a href="{{ url('/About') }}">About</a> page</p>
            </div>
            <div class ="welcome">
                <p>View my <a href="{{ url('/Resume') }}">Resume</a> Page to see what skills i can offer.</p>
            </div>
            <div class ="welcome">
                <p>See <a href="{{ url('/Work') }}">My work</a> page for some examples of my work and a more in depth look at how i make my portfolio</p>
            </div>
            <div class ="welcome">
                <p>To contact me to arrange a meeting, ask me questions or simply leave a comment about my site, plaease see
                    my <a href="{{ url('/Contact') }}">Contact Information</a> here/p>
            </div>
        </div>
    </section>

@endsection