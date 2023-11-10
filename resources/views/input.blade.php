@extends('index')
@section('konten')

    <br>
    <form action="/proses" method="post" class="w-full max-w-lg">
    {{ csrf_field() }}
    <div class="flex flex-wrap mb-6">
        <div class="w-full md:w-full px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nama">
                Nama
            </label>
            <input type="text" name="nama" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-blue-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
        </div><br>
        <div class="w-full md:w-full px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="pekerjaan">
                Pekerjaan
            </label>
            <input type="text" name="pekerjaan" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-blue-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
        </div>
        <div class="w-full md:w-full px-3 mb-6">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="usia">
                Usia
            </label>
            <input type="text" name="usia" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-blue-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
        </div>
    </div>

<div>
    <input class="px-4 py-2 rounded text-white bg-green-500 mb-6 hover:bg-green-300" type="submit" value="proses">
</div>
    </form>

    @if (count($errors) > 0)
    <div role="alert">
        <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2 ">
            danger\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
        </div>
        <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
            <ul>
                @foreach ($errors->all() as $error )
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
@endsection
