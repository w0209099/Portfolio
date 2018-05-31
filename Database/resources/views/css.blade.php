@if(Session::has('message'))
    <style> {{Session::get('message')}}">
    </style>
@endif