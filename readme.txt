Explicación:

1) ContactComponent: Este componente se encuentra al lado izquierdo, se encarga de crear una columa de 3 con información del contacto, último mensaje, y hora.
2) ContactListComponent: Este componente se encargar de mostrar la lista de contactos. inicialmente carga las conversaciones que le pertecen al usuario autenticado.
                         Cuando se da clic sobre algúna conversación este emite un evento al componente padre llamado MessengerComponent.
3) ActiveConversationComponent: Envia el nuevo mensaje.
4) MessageConversationComponent: muestra los mensajes en el chat.
