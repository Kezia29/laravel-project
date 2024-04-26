<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <meta http-equiv="X-UA-Compatible" content="ie=edge"> <title>{{ $nama }}</title>
</head>
<body>
    ini adalah halaman login di admin
    {{ $nama }}
    {{ $kelas }}
    {!! $kelas !!}
    <?php
    if($lampu==1) {
    ?>
    <h2>LAMPU NYALA</h2>
    <?php
    } else {
    ?>
    <h2>LAMPU MATI</h2>
    <?php 
    }
    ?>
    @if ($lampu == 1)
        <h2>LAMPU NYALA</h2>
    @else
        <h2>LAMPU MATI</h2>
    @endif
    @switch($nilai)
        @case('A')
            <h3>Memuaskan</h3>
        @break
        @case('B')
            <h3>BAIK</h3>
        @break
        @case('C')
            <h3>CUKUP</h3>
        @break
        @default
            <h3>KURANG</h3>
        @break
    @endswitch
    <ul>
        @for ($i = 1; $i <= $limit; $i++)
            <li>{{ $i }}</li>
        @endfor
    </ul>
    <ul>
        @for ($i=0; $i < count($hobbies); $i++)
            <li>{{ $hobbies[$i] }}</li>
        @endfor
    </ul>
    <ul>
        @foreach ($hobbies as $hobi)
            <li>{{ $hobi }}</li>
        @endforeach
    </ul>
    <ul>
        @forelse ($hobbies as $hobi)
        @empty
            <li>{{ $hobi }}</li>
        data kosong
        @endforelse
    </ul>
    {{-- ini adalah teks komentar --}}
</body>
</html>