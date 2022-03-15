
<b>Name</b>
<p>{{ $details['name'] }}</p>

<br>

<b>Email</b>
<p>{{ $details['email'] }}</p>

<br>

<b>Details</b>
<p>{{ $details['details'] }}</p>

<br>

@if($details['phone'])
    <br>

    <b>Phone Number</b>
    <p>{{ $details['phone'] }}</p>
@endif
