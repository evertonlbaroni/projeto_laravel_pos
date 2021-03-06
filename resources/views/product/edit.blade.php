@extends('layout.internal')


@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
        <li class="breadcrumb-item"><a href="/products">Produtos</a></li>
        <li class="breadcrumb-item active" aria-current="page">Editar</li>
    </ol>
@endsection

@section('content')
    <form action="/product/{{ $product->id }}" method="POST" class="form-horizontal">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <fieldset>
            <div class="form-group">
                <label class="col-md-12 control-label" for="Nome:">Nome*</label>
                <div class="col-md-12">
                    <input id="name" name="name" type="text" value="{{ $product->name }}" placeholder="Nome" class="form-control input-md">
                    <span class="help-block text-danger">{{ $errors->first('name') }}</span>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-12 control-label" placeholder="Nome" for="Descrição">Categoria</label>
                <div class="col-md-12">
                    <select class="custom-select mr-sm-2" name="category_id" id="inlineFormCustomSelect">
                        <option value="" >Selecione</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}"
                                {{  $product->category_id == $category->id ? 'selected' : ''  }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <span class="help-block text-danger">{{ $errors->first('category_id') }}</span>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-12 control-label" placeholder="Nome" for="Descrição">Descrição</label>
                <div class="col-md-12">
                    <textarea class="form-control" name="description"  value="{{ $product->description }}"  id="Descrição" placeholder="Descrição" name="Descrição"></textarea>
                    <span class="help-block text-danger">{{ $errors->first('description') }}</span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12 text-right">
                    <button id="" name="" type="submit" class="btn btn-success">Salvar</button>
                    <a href="/product" class="btn btn-danger">Cancelar</a>
                </div>
            </div>
        </fieldset>
    </form>
@endsection
