<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Contact Form Submission</title>
</head>
<body>
    <h2>New Contact Form Submission</h2>
    
    <p><strong>Name:</strong> {{ $contact->name }}</p>
    <p><strong>Email:</strong> {{ $contact->email }}</p>
    <p><strong>Phone:</strong> {{ $contact->phone }}</p>
    <p><strong>Subject:</strong> {{ $contact->subject }}</p>
    
    <p><strong>Message:</strong></p>
    <p>{{ $contact->message }}</p>

    <p><strong>Submitted:</strong> {{ $contact->created_at->format('F j, Y, g:i a') }}</p>
</body>
</html>

