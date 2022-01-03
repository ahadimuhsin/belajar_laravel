<div>
    <!-- Be present above all else. - Naval Ravikant -->
    @foreach ($latestPosts as $item)
        <p>{{ $toUpper($item->pegawai_nama) }}</p>
    @endforeach
</div>
