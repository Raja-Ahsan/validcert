<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Service Booking</title>
</head>
<body>
    <h2>New Service Booking Received</h2>
    
    <p><strong>Service:</strong> {{ $service->title }}</p>
    <p><strong>Name:</strong> {{ $booking->name }}</p>
    <p><strong>Email:</strong> {{ $booking->email }}</p>
    <p><strong>Phone:</strong> {{ $booking->phone }}</p>
    
    @if($booking->message)
    <p><strong>Message:</strong></p>
    <p>{{ $booking->message }}</p>
    @endif

    @if($booking->form_data && count($booking->form_data) > 0)
    <h3>Additional Information:</h3>
    <ul>
        @foreach($booking->form_data as $key => $value)
        <li><strong>{{ $key }}:</strong> {{ $value }}</li>
        @endforeach
    </ul>
    @endif

    <p><strong>Submitted:</strong> {{ $booking->created_at->format('F j, Y, g:i a') }}</p>
</body>
</html>

