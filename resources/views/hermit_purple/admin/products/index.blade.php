@extends('hermit_purple.layouts.admin')

@section('title', 'Produtos')

@section('content')
<div class="flex items-center justify-between">
    <h2 class="text-2xl font-semibold text-[#8865A9] mb-6">Lista de produtos</h2>
    <a class="text-lg font-semibold p-2 rounded-xl bg-[#8865A9] mb-6" href="{{ route('admin.products.create') }}">+ Adicionar Produto</a>
</div>
    <table class="w-full bg-[#1A1A1A] border border-[#2A2A2A] rounded-xl overflow-hidden text-left">
        <tr class="bg-[#111111] text-[#8865A9]">
            <th class="px-6 py-4">ID</th>
            <th class="px-6 py-4">Nome</th>
            <th class="px-6 py-4">Categoria</th>
            <th class="px-6 py-4">Descrição</th>
            <th class="px-6 py-4">Preço</th>
            <th class="px-6 py-4">Quant. em Estoque</th>
            <th class="px-6 py-4">Status</th>
            <th class="px-6 py-4">Ações</th>
        </tr>
        @foreach ($products as $product)
            <tr class="border-t border-[#2A2A2A] hover:bg-[#181818] transition">
                <td class="px-6 py-4">{{ $product->id }}</td>
                <td class="px-6 py-4">{{ $product->name }}</td>
                <td class="px-6 py-4">{{ $product->category }}</td>
                <td class="px-6 py-4 text-gray-400">{{ $product->description }}</td>
                <td class="px-6 py-4">R${{ $product->price }}</td>
                <td class="px-6 py-4">{{ $product->stock_quantity }}</td>
                <td class="px-6 py-4">@if ($product->status) Disponível @else Esgotado @endif</td>
                <td class="px-6 py-4"><a href="{{ route('admin.products.edit', $product->id) }}">Editar</a>
                <form class="cursor-pointer" action="{{ route('admin.products.destroy', $product->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Deletar">
                </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
