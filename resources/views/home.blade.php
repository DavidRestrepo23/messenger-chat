@extends('layouts.app')

@section('content')
<b-container fluid>
    <b-row>
        <b-col cols="4">
            <b-form class="my-3 mx-2">
                <b-form-input id="exampleInput1" class="py-3 px-2"
                      type="text"
                      required
                      placeholder="Buscar contacto...">
                </b-form-input>
            </b-form>
            <b-list-group>
                <b-list-group-item variant="dark">
                    <b-row class="p-2" align-h="center">
                        <b-col cols="12" md="3" class="text-center">
                            <b-img rounded="circle" blank width="80" height="80" blank-color="#777" alt="img" class="m-1 p-0" />
                        </b-col>
                        <b-col cols="6" class="text-left p-0 m-0 d-none d-md-block" align-self="center">
                            <p class="mb-1">David Restrepo</p>
                            <small class="text-muted mb-1">Tu: Hasta luego</small>
                        </b-col>
                        <b-col cols="3" class="p-0 m-0 d-none d-md-block" align-self="center">
                            <small class="text-muted">1:37 PM</small>
                        </b-col>
                    </b-row>
                </b-list-group-item>
                <b-list-group-item>
                    <b-row class="p-2" align-h="center">
                        <b-col cols="12" md="3" class="text-center">
                            <b-img rounded="circle" blank width="80" height="80" blank-color="#777" alt="img" class="m-1 p-0" />
                        </b-col>
                        <b-col cols="6" class="text-left p-0 m-0 d-none d-md-block" align-self="center">
                            <p class="mb-1">David Restrepo</p>
                            <small class="text-muted mb-1">Tu: Hasta luego</small>
                        </b-col>
                        <b-col cols="3" class="p-0 m-0 d-none d-md-block" align-self="center">
                            <small class="text-muted">1:37 PM</small>
                        </b-col>
                    </b-row>
                </b-list-group-item>
                <b-list-group-item variant="secondary">
                    <b-row class="p-2" align-h="center">
                        <b-col cols="12" md="3" class="text-center">
                            <b-img rounded="circle" blank width="80" height="80" blank-color="#777" alt="img" class="m-1 p-0" />
                        </b-col>
                        <b-col cols="6" class="text-left p-0 m-0 d-none d-md-block" align-self="center">
                            <p class="mb-1">David Restrepo</p>
                            <small class="text-muted mb-1">Tu: Hasta luego</small>
                        </b-col>
                        <b-col cols="3" class="p-0 m-0 d-none d-md-block" align-self="center">
                            <small class="text-muted">1:37 PM</small>
                        </b-col>
                    </b-row>
                </b-list-group-item>
            </b-list-group>
        </b-col>
        <b-col cols="8">
            <b-row>
                <b-col cols="8"></b-col>
                <b-col cols="4">
                    <b-img rounded="circle" blank width="80" height="80" blank-color="#777" alt="img" class="m-1 p-0" />
                    <p>Usuario Seleccionado</p>
                    <hr>
                    <b-form-checkbox>
                        Desactivar notificaciones
                    </b-form-checkbox>
                </b-col>
            </b-row>
        </b-col>
    </b-row>
</b-container>
@endsection
