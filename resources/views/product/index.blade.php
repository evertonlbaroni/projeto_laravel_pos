@extends('layout.internal')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Produtos</li>
    </ol>
@endsection

@section('content')
    <table class="table">
        <thead>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">Categoria</th>
        <th scope="col" class="text-right"><th>
        </thead>
        <tbody>
        @foreach ($products as $product)
            <tr>
                <td>
                    {{ $product->id }}
                </td>
                <td>
                    {{ $product->name }}
                </td>
                <td>
                    {{ $product->category->name }}
                </td>
                <td class="text-right">
                    <a href="/product/{{ $product->id}}/edit" class="btn btn-primary">
                        <i class="fa fa-edit"></i>
                    </a>
                    <a href="/product/{{ $product->id}}" class="btn btn-primary">
                        <i class="fa fa-search"></i>
                    </a>
                    <form action="/product/{{ $product->id}}/" method="POST" style="display:inline;">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>
    <br>
    <div class="col-md12">
        <a href="/product/create" class="btn btn-primary">Novo</a>
    </div>

    {!! $products->render() !!}

@endsection
