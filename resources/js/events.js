import { Notyf } from "notyf";
import 'notyf/notyf.min.css';

const notyf = new Notyf({
    duration: 2000,
    position: {
        x: 'right',
        y: 'bottom',
    },
    types: [
        {
            type: 'warning',
            background: 'orange',
            dismissible: true,
            icon: {
                className: 'mdi mdi-adjust',
                tagName: 'i',
                color: '#ffffff'
            }
        },
        {
            type: 'error',
            background: 'indianred',
            dismissible: true
        }
    ]
});

document.addEventListener('livewire:init', () => {
    let toast = {
        error: (msg) => { notyf.error({ message: msg }); },
        success: (msg) => { notyf.success({ dismissible: true, message: msg }); },
        warning: (msg) => { notyf.open({ type: "warning", message: msg }); }
    };
    Livewire.on('toast', (args) => toast[args[0]['type']](args[0]['message']));
    Livewire.on('hideModal', (args) => $(`#${args[0]}`).modal('hide'));
    Livewire.on('showModal', (args) => $(`#${args[0]}`).modal('show'));
    Livewire.on('consoleLog', (args) => (args.length > 1) ? console.log(args[0], args[1]) : console.log(args[0]));
    window.toast = (args) => toast[args['type']](args['message']);
});

window.setDraggable = (id, handler) => {
    $(`${id}`).draggable({
        cursor: 'move',
        handle: `${handler}`
    });
};
