@extends('layouts.main')
@section('title', $judul)
@section('content')
<h2>{{ $judul }}</h2>
@empty($pengumuman)
<p>Tidak ada pengumuman saat ini.</p>
@else
<ul>
    @foreach($pengumuman as $a)
    <li>
        <strong>{{ $a['judul'] }}</strong> - {{ $a['tanggal']
}}
        @if ($a['status'] == 'Aktif')
        <span style="color:green;">(Aktif)</span>
        @else
        <span style="color:red;">(Tidak Aktif)</span>
        @endif
    </li>
    @endforeach
</ul>
@endempty
@endsection