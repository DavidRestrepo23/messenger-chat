<template>
    <b-row class="h-100">
        <b-col cols="8" class="h-100">
            <b-card 
                    footer-bg-variant="default"
                    footer-border-variant="dark"
                    title="Conversación Activa"
                    class="h-100">
                <b-media vertical-align="center" class="mb-2">
                    <b-img slot="aside" rounded="circle" blank blank-color="#ccc" width="60" alt="placeholder" />
                    <b-card>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                    sollicitudin. Cras purus odio
                    </b-card>
                </b-media>
                <b-media right-align vertical-align="center" class="mb-2">
                    <b-img slot="aside" rounded="circle" blank blank-color="#ccc" width="60" alt="placeholder" />
                    <b-card>
                        Cras sit amet nibh libero jajajaja!
                    </b-card>
                </b-media>
                <div slot="footer">
                    <b-form class="mb-0" inline>
                        <b-input-group style="width:100%">
                            <b-form-input class="text-center" type="text" placeholder="Escribe un mensaje..."></b-form-input>
                            <b-input-group-append>
                                <b-button variant="primary">Enviar</b-button>
                            </b-input-group-append>
                        </b-input-group>
                    </b-form>
                </div>
            </b-card>
        </b-col>
        <b-col cols="4">
            <b-img rounded="circle" blank width="80" height="80" blank-color="#777" alt="img" class="m-1 p-0" />
            <p>Usuario Seleccionado</p>
            <hr>
            <b-form-checkbox>
                Desactivar notificaciones
            </b-form-checkbox>
        </b-col>
    </b-row>
</template>

<script>
    export default {
        data(){
            return {
              
            };
        },

    }
</script>

