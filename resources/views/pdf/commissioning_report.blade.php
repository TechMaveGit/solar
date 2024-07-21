<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
</head>
<body>
    <h1>PV Registered Company</h1>
    <p>Company Name: {{ $data['company_name'] ?? null }}</p>
    <p>Company Number: {{ $data['company_number'] ?? null }}</p>
    <p>Property Year Construction: {{ $data['property_year_construction'] ?? null }}</p>
    <p>Cost Installation: {{ $data['cost_installation'] ?? null }}</p>
</body>
</html>
