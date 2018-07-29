@extends('layouts.app')

@section('content')
<b-container>
    <b-row align-h="center">
        <b-col cols="8">
            <b-card title="Inicio de sesión">
                <b-alert show>Default Alert</b-alert>
                <b-form>
                        <b-form-group id="email" label="Correo electrónico" label-for="email">
                                <b-form-input type="email"  
                                    name="email" value="{{ old('email') }}" 
                                    required placeholder="example@mail.com" 
                                    autofocus>
                                </b-form-input>
                        </b-form-group>
                        <b-form-group id="password" label="Contraseña" label-for="password">
                                <b-form-input type="password" 
                                    name="password" value="{{ old('password') }}" 
                                    required autofocus>
                                </b-form-input>
                        </b-form-group>
                        <b-form-group id="exampleGroup4">
                            <b-form-checkbox id="checkbox1" {{ old('remember') ? 'checked="true"' : '' }}>
                                Recordarme
                            </b-form-checkbox>
                        </b-form-group>
                      
                        <b-button type="submit" variant="primary">Ingresar</b-button>
                        <b-button href="#" variant="link">¿Olvidaste tu contraseña?</b-button>
                       
                </b-form>
            </b-card>
        </b-col>
    </b-row>
</b-container>
@endsection
