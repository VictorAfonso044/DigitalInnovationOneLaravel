@extends('layout.base')

@section('title','Cadastro de usuario')

@section('conteudo')
<form autocomplete="off" class="mt-4" action="{{ route('salvar') }}" method="post">
    {{ csrf_field() }}
    <div class="wrap-input3 validate-input" data-validate="id do beneficiario é obrigatorio">
        <input  class="input3" type="email" name="email" placeholder="Email@email.com">
        <span class="focus-input3"></span>
    </div>
    @if($errors->has('email'))
        @foreach ($errors->get('email') as $error)
        <strong class="alert alert-danger">{{ $error }}</strong>
        @endforeach
    @endif
    <div class="wrap-input3 validate-input" data-validate="id do beneficiario é obrigatorio">
        <input class="input3" type="text" name="nome" placeholder="Nome">
        <span class="focus-input3"></span>
    </div>
    @if($errors->has('nome'))
        @foreach ($errors->get('nome') as $error)
        <strong class="alert alert-danger">{{ $error }}</strong>
        @endforeach
    @endif
    <div class="wrap-input3 validate-input" data-validate="id do beneficiario é obrigatorio">
        <input class="input3" type="password" name="senha" placeholder="Senha">
        <span class="focus-input3"></span>
    </div>
    @if($errors->has('senha'))
        @foreach ($errors->get('senha') as $error)
        <strong class="alert alert-danger">{{ $error }}</strong>
        @endforeach
    @endif
    <div class="container-contact3-form-btn" >
        <button type="submit" class="contact3-form-btn" style="margin: 0 auto;padding: 5px;">
            Salvar
        </button>
    </div>
</form>
@endsection
