<h1>Prévisions météorologiques</h1>

<ul>
   
    @foreach ($data['forecasts'] as $forecast)
        <li>{{ $forecast['date'] }} : {{ $forecast['temperature'] }} degrés Celsius</li>
    @endforeach
</ul>
