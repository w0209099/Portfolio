<!DOCTYPE html>
<html>
<head>
    <?php
    // FIND OUT WHAT PAGE WE ARE ON
    // obtain/receive the current page ($currentPage)
    // using GET from the nav or if none then default page

    // FIND OUT WHAT STYLE TEMPLATE WE ARE USING
    // obtain/receive the active style/template ($currentTemplate)
        @include ('css')
     ?>


    </head>










<body>

@if(Session::has('message'))
    <div class="alert alert-info">
        <a class="close" data-dismiss="alert">×</a>
        <strong>Heads Up!</strong> {!!Session::get('message')!!}
    </div>
@endif
<hi>hi</hi>
</body>
</html>