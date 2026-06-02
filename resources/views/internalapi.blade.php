<!DOCTYPE html>
<html>
<head>
    <title>API Data</title>
    <style>
        .card {
            border: 1px solid #ccc;
            padding: 12px;
            margin: 10px;
            border-radius: 6px;
        }
    </style>
</head>
<body>

<h2>API Data</h2>

@if(!empty($data))

    @foreach($data as $item)
        <div class="card">
            <p><b>ID:</b> {{ $item['id'] ?? '' }}</p>
            <p><b>Name:</b> {{ $item['name'] ?? '' }}</p>
            <p><b>Price:</b> {{ $item['price'] ?? '' }}</p>
        </div>
    @endforeach

@else
    <p>No data found</p>
@endif

</body>
</html>