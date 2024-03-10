@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Falta pouco agora! Valide seu e-mail para acessar</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            Reenviamos um e-mail com um link de validação
                        </div>
                    @endif

                    Antes de utilizar os recursos, por favor valide seu e-mail através do link enviado<br>
                    Caso não tenha recebido o e-mail,
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">clique aqui para enviar novamente</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
