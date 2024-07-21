<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
</head>
<body>
    <h1>Declaration of work</h1>
    <p>System Size: {{ $data['solar_pv_system_size'] ?? null}}</p>
    <p>Battery Storage: {{ $data['battery_storage'] ?? null}}</p>
    <p>Annual Estimated Yield: {{ $data['annual_estimated_yield'] ?? null}}</p>
    <p>Yield Calculation: {{ $data['yield_calculation'] ?? null}}</p>
    <p>Water Diverter: {{ $data['water_diverter'] ?? null}}</p>
</body>
</html>
