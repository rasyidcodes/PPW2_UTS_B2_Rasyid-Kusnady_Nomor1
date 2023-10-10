
@extends('layouts.master')

@section('title', 'Pemain')

@section('content')
    <h1 class="px-16 mt-8 mb-8 text-bold font-weight-bold text-[30px]">Pemain</h1>

    
<div class="relative overflow-x-auto px-16">
    <table class="w-full text-sm text-left text-white p-8">
        <thead class="text-xs text-gray-700 uppercase bg-red-200">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama Pemain
                </th>
                <th scope="col" class="px-6 py-3">
                    No Punggung
                </th>
                <th scope="col" class="px-6 py-3">
                    Posisi
                </th>
            </tr>
        </thead>

        <tbody>
            @foreach ($pemain as $item)
            <tr class="bg-red-500 border-b ">
                <td class="px-6 py-4">{{ $item->id }}</td>
                <td class="px-6 py-4">{{ $item->nama_pemain }}</td>
                <td class="px-6 py-4">{{ $item->no_punggung }}</td>
                <td class="px-6 py-4">{{ $item->posisi }}</td>
            </tr>
            @endforeach
        </tbody>

        
    </table>
</div>
@endsection
