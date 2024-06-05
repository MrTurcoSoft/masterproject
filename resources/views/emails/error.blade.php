<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error Report</title>
</head>
<body>
<h1>Error Report</h1>
<p>URL: {{ $url }}</p>
<p>Error Message: {{ $message }}</p>
<p>Stack Trace:</p>
<pre>{{ $trace }}</pre>
</body>
</html>
