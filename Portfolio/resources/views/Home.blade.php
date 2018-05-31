@extends('layouts.app')

@section('content')


    <section id = "contant">
        <div id = "left">
            <p class="section">Hello My name is Andrew Schnurr. I am A Nova Scotia Community College trained Web Application Developer,
                with some understanding of Web Design</p>
            <p class="section">Welcome to the current version of my portfolio</p>
            <p class="section">I say the current version because I do not believe I will ever stop modifying,
                changing or adding to my portfolio. There are many things and features  I would like to add yet am unable to at this moment
                because I lack the skills or the time accomplish them or they might simply not be needed at this moment.  </p>
            <p class="section">In the mean time please feel free to look around my site. If you wish to arrange a meeting,
                ask me questions or simply leave a comment you can find my Contact information
                <a href="{{ url('/Contact') }}">here</a></p>
        </div>

        <div id="right">

            <p class="section">To learn about me please see my <a href="{{ url('/About') }}">About</a> page</p>

            <p class="section">View my <a href="{{ url('/Resume') }}">Resume</a> Page to see what skills i can offer.</p>

            <p class="section">See <a href="{{ url('/Work') }}">My work</a> page for some examples of my work and a more in depth look at how i make my portfolio</p>
        </div>
    </section>

@endsection