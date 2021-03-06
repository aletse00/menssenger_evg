@extends('layouts.app')

@section('content')
<b-container>
    <b-row>
        <b-col></b-col>
        <b-col cols="8">
            <b-card title="Inicio de sesión">
                <b-alert show>
                    Por favor capture sus datos:
                </b-alert>
                    <b-form  method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <b-form-group label="Correo electrónico" label-for="email" description="Tu correo esta seguro">
                            <b-form-input type="email" id="email" name="email" value="{{ old('email') }}"  required autofocus placeholder="example@gmail.com">
                            </b-form-input>
                        </b-form-group>

                        <b-form-group label="Contrseña:" label-for="password">
                            <b-form-input type="password" id="password"  name="password" value="{{ old('password') }}" required></b-form-input>
                        </b-form-group>
                        <b-form-group>
                            <b-form-checkbox  type="checkbox" name="remember" {{ old('remember') ? 'checked="true"' : '' }}>
                                Recordar sesión
                            </b-form-checkbox>
                        </b-form-group>
                        <b-button type="submit" variant="primary">Ingresar</b-button>
                        <b-button href="{{ route('password.request') }}" variant="link">¿Olvidaste tu contraseña?</b-button>
                    </b-form>
            </b-card>
        </b-col>
        <b-col></b-col>
    </b-row>
</b-container>
@endsection
