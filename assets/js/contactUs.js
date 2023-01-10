//  A REVOIR

// const inputOne =  document.querySelector(".sujet-input");
// const inputTwo = document.querySelector('.message-input');
// const button = document.querySelector('.btn-primary');
 
// const href = window.location.href
// button.addEventListener('click', (event) => {
//     // event.preventDefault();
//     axios.get(href).then((res) => {
//         console.log(res);
//     })
//     .catch((error) =>{
//         console.log(error);
//     })
// })
const form = document.querySelector(".form-contact");
form.addEventListener("submit", async function(event) {
    event.preventDefault();
    try {
        const formData = new FormData(event.target);
        // Send the form data to the server via an XMLHttpRequest
        const response = await fetch("/contact-us", {
            method: "POST",
            body: formData
        });

        // Check the response status
        if (response.status === 200) {
            // email sent successfully
            form.reset();
            Toastify({
                text: "Votre email a bien été envoyé",
                duration: 3000,
                close: true,
                gravity: "top",
                position: 'right',
                backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
            }).showToast();
        } else {
            // handle errors
            console.error("An error occured while sending the email.");
        }
    } catch (error) {
        console.error("An error occured while sending the email: ", error);
        Toastify({
            text: "Une erreur est survenu",
            duration: 3000,
            close: true,
            gravity: "top",
            position: 'right',
            backgroundColor: "linear-gradient(315deg, #3f0d12 0%, #a71d31 74%)",
        }).showToast();
    }
});