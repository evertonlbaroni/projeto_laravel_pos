@extends('layout.internal')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
        <li class="breadcrumb-item"><a href="/products">Produtos</a></li>
        <li class="breadcrumb-item active" aria-current="page">Detalhes</li>
    </ol>
@endsection

@section('content')
    <table class="table">
        <tbody>
        <tr>
            <th>Id:</th>
            <td class="text-right">
            {{ $product->id }}
            </td>
        </tr>
        <th>Nome:</th>
        <td class="text-right">
        {{ $product->name }}
        </td>
        </tr>
        <tr>
            <th>Descrição:</th>
            <td class="text-right">
                {{ $product->description }}
            </td>
        </tr>
        <tr>
            <th>Categoria:</th>
            <td class="text-right">
                {{ $product->category->name }}
            </td>
        </tr>
        <tr>
            <th>Data criação:</th>
            <td class="text-right">
                {{ $product->created_at }}
            </td>
        </tr>
        <tr>
            <th>Data última atualização:</th>
            <td class="text-right">
                {{ $product->updated_at }}
            </td>
        </tr>
        </tbody>
    </table>
    <br>
    <div class="col-md12 text-right">
        <a href="/product" class="btn btn-primary">Ir para listagem</a>
    </div>
@endsection

