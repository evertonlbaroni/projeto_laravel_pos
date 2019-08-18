@extends('layout.external')



@section('content')

    <div class="row">

        <div class="col-md-4 offset-4">
            @section('content')
                <br>
                <br>
                <form action="/login" method="POST" class="form-horizontal">
                    <input type="hidden" name="_method" value="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                        <label class="col-md-12 control-label" for="email">E-mail*</label>
                        <div class="col-md-12">
                            <input id="email" name="email" type="text" placeholder="Nome*" class="form-control input-md">
                            <span class="help-block text-danger">{{ $errors->first('email') }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12 control-label" for="password">Senha*</label>
                        <div class="col-md-12">
                            <input id="password" name="password" type="password" placeholder="Senha*" class="form-control input-md">
                            <span class="help-block text-danger">{{ $errors->first('password') }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 text-right">
                            <button id="" name="" type="submit" class="btn btn-success">Entrar</button>
                        </div>
                    </div>
                </form>
        </div>
    </div>
@endsection
