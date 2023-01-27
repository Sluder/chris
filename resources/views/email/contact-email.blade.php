
<b>Name</b>
<p>{{ $details['name'] }}</p>

<br>

<b>Email</b>
<p>{{ $details['email'] }}</p>

<br>

<b>Address</b>
<p>{{ $details['address'] }}, {{ $details['city'] }}, {{ $details['zip'] }}</p>

<br>

<b>Category</b>
<p>{{ $details['category'] }}</p>

<br>

<b>Details</b>
<p>{{ $details['details'] }}</p>

<br>

@if($details['phone'])
    <br>

    <b>Phone Number</b>
    <p>{{ $details['phone'] }}</p>
@endif
