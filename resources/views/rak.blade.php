
@foreach ($bukus as $buku)
  <a href="{{route('buku', $buku->judul)}}">{{ $buku->judul }}</a>
@endforeach
