@extends('index')
@section('konten')

<form class="my-6 p-4" action="/pegawai/cari" method="get">
<p>Cari data Pegawai</p>
<input class="p-1 shadow-md border-solid border-2" type="text" name="cari" placeholder="Masukan nama....">
<button class="px-5 uppercase shadow-md bg-blue-700 rounded-md text-white" type="submit">Cari</button>
</form>
<div class="relative overflow-x-auto p-1">
<table class="w-full text-sm text-left text-gray-500">
    <thead class=" text-xs text-gray-700 uppercase bg-gray-200">
    <tr>
        <th class="px-6 py-3">Nama</th>
        <th class="px-6 py-3">Jabatan</th>
        <th class="px-6 py-3">Alamat</th>
        <th class="px-6 py-3 ">Opsi</th>
    </tr>
</thead>
<tbody>
    @foreach ($pegawai as $p)
        <tr class="bg-white border-b">
            <th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">{{$p->nama}}</th>
            <td class="px-6 py-4">{{$p->jabatan}}</td>
            <td class="px-6 py-4">{{$p->alamat}}</td>
            <td>
                <a href="/pegawai/edit/{{ $p->id }}" class="p-0.5 drop-shadow-md bg-yellow-500 rounded-md text-white ">Edit</a>
                <a href="/pegawai/{{ $p->id }}" class="p-0.5 drop-shadow-md bg-red-500 rounded-md text-white">Hapus</a>
            </td>
        </tr>
    @endforeach
</tbody>
</table>
</div>
<div class="p-5">
<br>
{{$pegawai -> links('pagination::tailwind')}}
</div>
@endsection
