@extends('hermit_purple.layouts.admin')

@section('title', 'Produtos')

@section('content')

    <h2 class="text-2xl font-semibold text-[#8865A9] mb-6">Add Produto</h2>

    <form method="POST" autocomplete="off" action="{{ route('admin.products.store') }}" class="bg-[#1A1A1A] border border-[#2A2A2A] rounded-xl p-6 max-w-xl space-y-4">
        @csrf

        <label for="name" class="block text-sm text-gray-300">Nome</label>
        <input type="text" name="name" id="name" class="w-full bg-[#111111] border border-[#2A2A2A] rounded-lg px-4 py-2 text-white">

        <label for="category" class="block text-sm text-gray-300">Categoria</label>
        <input type="text" name="category" id="category" class="w-full bg-[#111111] border border-[#2A2A2A] rounded-lg px-4 py-2 text-white">

        <label for="description" class="block text-sm text-gray-300">Descrição</label>
        <textarea name="description" id="description" rows="3" class="w-full bg-[#111111] border border-[#2A2A2A] rounded-lg px-4 py-2 text-white"></textarea>

        <label for="price" class="block text-sm text-gray-300">Preço</label>
        <input type="number" name="price" id="price" step="0.01" class="w-full bg-[#111111] border border-[#2A2A2A] rounded-lg px-4 py-2 text-white">

        <label for="stock_quantity" class="block text-sm text-gray-300">Quant. em Estoque</label>
        <input type="number" name="stock_quantity" id="stock_quantity" class="w-full bg-[#111111] border border-[#2A2A2A] rounded-lg px-4 py-2 text-white">

        <input type="submit" value="Enviar" class="bg-[#4F438B] hover:bg-[#8865A9] px-6 py-2 rounded-lg text-white cursor-pointer transition">
    </form>

@endsection
