@extends('layouts.app')

@section('content')
<b-container>
    <b-row align-h="center">
        <b-col cols="8">
            <b-card title="Inicio de sesión">
                @if($errors->any())
                    <b-alert show variant="danger">
                         @foreach($errors->all() as $error)
                            <ul class="mb-0">
                                <li>{{ $error }}</li> 
                            </ul>
                        @endforeach
                    </b-alert>
                @endif
                <b-form method="POST" action="{{ route('register') }}" >
                    @csrf
                        <b-form-group id="name" label="Nombre" label-for="name">
                                <b-form-input type="text"  
                                    name="name" value="{{ old('name') }}" 
                                    required  
                                    autofocus>
                                </b-form-input>
                        </b-form-group>
                        <b-form-group id="email" label="Correo electrónico" label-for="email">
                                <b-form-input type="email"  
                                    name="email" value="{{ old('email') }}" 
                                    required placeholder="example@mail.com">
                                </b-form-input>
                        </b-form-group>
                        <b-form-group id="password" label="Contraseña" label-for="password">
                                <b-form-input type="password" 
                                    name="password"
                                    required>
                                </b-form-input>
                        </b-form-group>
                        <b-form-group id="password-confirm" label="Confirmar Contraseña" label-for="password">
                                <b-form-input type="password" 
                                    name="password_confirmation"
                                    required>
                                </b-form-input>
                        </b-form-group>
                       
                      
                        <b-button type="submit" variant="primary">Confirmar registro</b-button>
                        <b-button href="{{route('register')}}" variant="link">¿Ya tienes cuenta?</b-button>
                       
                </b-form>
            </b-card>
        </b-col>
    </b-row>
</b-container>
@endsection
