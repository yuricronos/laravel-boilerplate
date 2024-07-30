import Swal from 'sweetalert2'
import 'animate.css'

let swalFireConfirmed = (args) => {
    Swal.fire({
        title: args.title ?? "Done",
        text: args.text,
        icon: args.icon ?? "success",
        showClass: {
            popup: `animate__animated animate__bounceIn animate__fast`
        },
        hideClass: {
            popup: `animate__animated animate__bounceOut animate__fast`
        }
    });
};

$(document).ready(() => {

    let initConfig = () => {
        window.SwalConfig = {
            title: "Are you sure?",
            icon: "warning",
            buttonText: "Confirm"
        };
    };

    initConfig();

    window.SwalConfirmation = (fn = undefined, params = undefined) => {
        Swal.fire({
            title: SwalConfig.title,
            text: SwalConfig.text,
            icon: SwalConfig.icon ?? "info",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: SwalConfig.buttonText ?? "Yes",
            showClass: {
                popup: `animate__animated animate__flipInY animate__fast`
            },
            hideClass: {
                popup: `animate__animated animate__flipOutY animate__fast`
            }
        }).then((result) => {
            initConfig();
            if (result.isConfirmed) {
                if (fn !== undefined) {
                    if (params !== undefined) {
                        fn(params);
                        return;
                    }
                    fn();
                }
            }
        });
    };

    window.SwalConfirmed = (args) => swalFireConfirmed(args);

});


document.addEventListener('livewire:init', () => {
    Livewire.on('SwalConfirmed', (args) => swalFireConfirmed(args[0]));
});