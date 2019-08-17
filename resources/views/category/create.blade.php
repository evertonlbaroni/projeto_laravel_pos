@extends('layout.internal')

@section('breadcrumb')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
    <li class="breadcrumb-item"><a href="/category">Categorias</a></li>
    <li class="breadcrumb-item active" aria-current="page">Novo</li>
</ol>
@endsection

@section('content')
<form action="/category" method="POST" class="form-horizontal">
    <input type="hidden" name="_method" value="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <fieldset>
    <div class="form-group">
    <label class="col-md-12 control-label" for="Nome:">Nome*</label>
    <div class="col-md-12">
    <input id="name" name="name" type="text" placeholder="Nome" class="form-control input-md">
    <span class="help-block text-danger">{{ $errors->first('name') }}</span>
    </div>
    </div>
    <div class="form-group">
    <label class="col-md-12 control-label" placeholder="Nome" for="Descrição">Descrição</label>
    <div class="col-md-12">
    <textarea class="form-control" name="description" id="Descrição" placeholder="Descrição" name="Descrição"></textarea>
    <span class="help-block text-danger">{{ $errors->first('description') }}</span>
    </div>
    </div>
    <div class="form-group">
        <div class="col-md-12 text-right">
            <button id="" name="" type="submit" class="btn btn-success">Salvar</button>
            <a href="/category" class="btn btn-danger">Cancelar</a>
        </div>
    </div>
    </fieldset>
</form>
@endsection

