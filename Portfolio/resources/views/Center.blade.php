<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <script src="modernizr-1.5.js"></script>

    <meta name="description" content="Hamilton Conference Center">
    <meta name="keywords" content="Hamilton, Conference Center, Reservations  ">

    <link href="{{ asset('/css/worksample/center.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/worksample/table.css') }}" rel="stylesheet">


</head>
<body>
<img src="{{url('/images/hcclogo.jpg')}}"/>
<nav id="links">
    <ul>
        <li><a href="#">Home Page</a></li>
        <li><a href="#">Reservations</a></li>
        <li><a href="#">Facilities</a></li>
        <li><a href="#">Virtual Tour</a></li>
        <li><a href="#">Staff</a></li>
        <li><a href="#">Calendar of Events</a></li>
        <li><a href="#">Contact Info</a></li>
        <li><a href="#">Directions</a></li>
        <li><a href="#">FAQ</a></li>
    </ul>
</nav>


<table align="center" class="schedule" style="width:80%">
    <caption><h1>Reservations</h1></caption>
    <tr>

        <th>ROOM</th>
        <th>Sunrise Room</th>
        <th>Mountain View Room</th>
        <th>Arbor Hall Room</th>
        <th>Mitchell Theater Room</th>
        <th>Gold Room</th>
        <th>Blue Room</th>
        <th>Green Room</th>

    </tr>

    <tr>
        <th>Maximum Capacity</th>
        <td id ="capacity">80</td>
        <td id ="capacity">150</td>
        <td id ="capacity">190</td>
        <td id ="capacity">120</td>
        <td id ="capacity">40</td>
        <td id ="capacity">30</td>
        <td id ="capacity">55</td>
    </tr>

    <tr>
        <th colspan="8" id="Reservations">Reservations</th>
    </tr>


    <tr>
        <th>8:00</th>
        <td rowspan="4">Marriage Encounter</td>
        <td rowspan = "2">Breakfast Club of Ohio</td>
        <td rowspan ="8">Computer Expo set up</td>
        <td rowspan ="14" id ="empty"></td> <!--empty -->
        <td rowspan = "2" id ="empty"></td> <!--empty -->
        <td rowspan = "2" id ="empty"></td> <!--empty -->
        <td rowspan = "2" id ="empty"></td> <!--empty -->
    </tr>

    <tr>
        <th>8:30</th>
        <!--Marriage Encounter -->
        <!--Breakfast Club of Ohio -->
        <!--Computer Expo set up -->
        <!--empty -->
        <!--empty -->
        <!--empty -->
        <!--empty -->
    </tr>

    <tr>
        <th>9:00</th>
        <!--Marriage Encounter -->
        <td rowspan ="4" id ="empty"></td> <!--empty -->
        <!--Computer Expo set up -->
        <!--empty -->
        <td rowspan = "3">The Tompkins Group</td>
        <td rowspan = "3">Retirement Planning</td>
        <td rowspan = "4">Drivers' Ed</td>
    </tr>

    <tr>
        <th>9:30</th>
        <!--Marriage Encounter -->
        <!--empty -->
        <!--Computer Expo set up -->
        <!--empty -->
        <!--he Tompkins Group -->
        <!--Retirement Planning -->
        <!--Drivers' Ed -->
    </tr>

    <tr>
        <th>10:00</th>
        <td rowspan ="4" id ="empty"></td> <!--empty -->
        <!--empty -->
        <!--Computer Expo set up -->
        <!--empty -->
        <!--he Tompkins Group -->
        <!--Retirement Planning -->
        <!--Drivers' Ed -->
    </tr>

    <tr>
        <th>10:30</th>
        <!--empty -->
        <!--empty -->
        <!--Computer Expo set up -->
        <!--empty -->
        <td rowspan = "3">Pearson Planning</td>
        <td rowspan = "3">The Senior Group</td>
        <!--Drivers' Ed -->
    </tr>

    <tr>
        <th>11:00</th>
        <!--empty -->
        <td rowspan = "4">Ohio Conference of Librarians</td>
        <!--Computer Expo set up -->
        <!--empty -->
        <!--Pearson Planning -->
        <!--The Senior Group -->
        <td rowspan = "5">Movie Club</td>
    </tr>

    <tr>
        <th>11:30</th>
        <!--empty -->
        <!--Ohio Conference of Librarians -->
        <!--Computer Expo set up -->
        <!--empty -->
        <!--Pearson Planning -->
        <!--The Senior Group -->
        <!--Movie Club -->
    </tr>

    <tr>
        <th>12:00</th>
        <td rowspan = "2">Marriage Encounter Luncheon</td>
        <!--Ohio Conference of Librarians -->
        <td rowspan = "2" id ="empty"></td> <!--empty -->
        <!--empty -->
        <td rowspan = "4" id ="empty"></td> <!--empty -->
        <td rowspan = "2">(Senior Luncheon</td>
        <!--Movie Club -->
    </tr>

    <tr>
        <th>12:30</th>
        <!--Marriage Encounter Luncheon -->
        <!--Ohio Conference of Librarians -->
        <!--empty -->
        <!--empty -->
        <!--empty -->
        <!--(Senior Luncheon -->
        <!--Movie Club -->
    </tr>

    <tr>
        <th>1:00</th>
        <td rowspan ="4" id ="empty"></td> <!--empty -->
        <td rowspan ="2" id ="empty"></td> <!--empty -->
        <td rowspan ="8">Computer Expo opening session</td>
        <!--empty -->
        <!--empty -->
        <td rowspan ="5">Senior Classes</td>
        <!--Movie Club -->
    </tr>

    <tr>
        <th>1:30</th>
        <!--empty -->
        <!--empty -->
        <!--Computer Expo opening session -->
        <!--empty -->
        <!--empty -->
        <!--Senior Classes -->
        <td rowspan ="4" id ="empty"></td> <!--empty -->
    </tr>

    <tr>
        <th>2:00</th>
        <!--empty -->
        <td rowspan = "6">Ohio Book Resale Setup</td>
        <!--Computer Expo opening session -->
        <!--empty -->
        <td rowspan = "3">Mothers of Multiples</td>
        <!--Senior Classes -->
        <!--empty -->
    </tr>

    <tr>
        <th>2:30</th>
        <!--empty -->
        <!--Ohio Book Resale Setup -->
        <!--Computer Expo opening session -->
        <!--empty -->
        <!--Mothers of Multiples -->
        <!--Senior Classes -->
        <!--empty -->
    </tr>

    <tr>
        <th>3:00</th>
        <td rowspan = "4">Marriage Encounter Talks</td>
        <!--Ohio Book Resale Setup -->
        <!--Computer Expo opening session -->
        <td rowspan = "4">Youth Theatre</td>
        <!--Mothers of Multiples -->
        <!--Senior Classes -->
        <!--empty -->
    </tr>

    <tr>
        <th>3:30</th>
        <!--Marriage Encounter Talks -->
        <!--Ohio Book Resale Setup -->
        <!--Computer Expo opening session -->
        <!--Youth Theatre -->
        <td rowspan = "3">Teen Connection</td>
        <td rowspan = "3">Tutoring</td>
        <td rowspan = "3">Tutoring</td>
    </tr>

    <tr>
        <th>4:00</th>
        <!--Marriage Encounter Talks -->
        <!--Ohio Book Resale Setup -->
        <!--Computer Expo opening session -->
        <!--Youth Theatre -->
        <!--Teen Connection -->
        <!--Tutoring -->
        <!--Tutoring -->
    </tr>

    <tr>
        <th>4:30</th>
        <!--Marriage Encounter Talks -->
        <!--Ohio Book Resale Setup -->
        <!--Computer Expo opening session -->
        <!--Youth Theatre -->
        <!--Teen Connection -->
        <!--Tutoring -->
        <!--Tutoring -->
    </tr>

    <tr>
        <th>5:00</th>
        <th colspan="7" id = "close">Closing Time</th>
    </tr>


</table>

<article>
    <p>
        To reserve a room, please contact Yancy Inwe at extension 388 or by e-mail at yancyinwe@hconfcenter.org.
        Reservations should be made at least 48 hours in advance. Cancellations require 24 hour notice. Room deposits will
        not be returned for cancellations within 24 hours of the scheduled event.
    </p>
</article>

</body>

</html>