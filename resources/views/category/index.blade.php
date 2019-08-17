@extends('layout.internal')

@section('breadcrumb')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Categorias</li>
</ol>
@endsection

@section('content')
<table class="table">
    <thead>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col-md-2" class="text-right">Options</th>
    </thead>
    <tbody>
        @foreach ($categories as $category)
        <tr>
            <td>
                {{ $category->id }}
            </td>
            <td>
            {{ $category->name }}
            </td>
            <td class="text-right">
                <a href="/category/{{ $category->id}}/edit" class="btn btn-primary">
                    <i class="fa fa-edit"></i>
                </a>
                <a href="/category/{{ $category->id}}" class="btn btn-primary">
                    <i class="fa fa-search"></i>
                </a>
                <form action="/category/{{ $category->id}}/" method="POST" style="display:inline;">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-danger">
                        <i class="fa fa-trash"></i>
                    </button>
                </form>
            </td>
            </td>
        </tr>
        @endforeach
    </tbody>


</table>
<br>
<div class="col-md12">
    <a href="/category/create" class="btn btn-primary">Novo</a>
</div>

{!! $categories->render() !!}


@endsection
