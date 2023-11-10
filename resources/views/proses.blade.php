@extends('index')
@section('konten')
    <p class="font-bold text-lg">Data yang di input:</p>

    <div class="relative overflow-x-auto p-1">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class=" text-xs text-gray-700 uppercase bg-gray-200">
            <tr>
                <th class="px-6 py-3">Nama</th>
                <th class="px-6 py-3">Pekerjaan</th>
                <th class="px-6 py-3">Umur</th>
            </tr>
        </thead>
        <tbody>
                <tr class="bg-white border-b">
                    <th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">{{$data->nama}}</th>
                    <td class="px-6 py-4">{{$data->pekerjaan}}</td>
                    <td class="px-6 py-4">{{$data->usia}}</td>
                </tr>
        </tbody>
        </table>
    </div>
        <div class="my-6">
        <a href="/input" class="py-2 px-4 rounded bg-green-700 shadow-md text-white hover:bg-green-900 focus:outline-none">Kembali</a>
        </div>
@endsection
