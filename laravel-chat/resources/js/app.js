const { default: axios } = require("axios");
const { default: Echo } = require("laravel-echo");

require("./bootstrap");

const message_el = document.getElementById("messages");
const username = document.getElementById("username").innerHTML;
const send_to_input = document.getElementById("send_to").innerHTML;
const message_input = document.getElementById("message_input");
const message_form = document.getElementById("message_form");

message_form.addEventListener("submit", function (e) {
    e.preventDefault();

    let has_errors = false;

    if (message_input.value == "") {
        alert("Please enter a nessage");
        has_errors = true;
    }

    if (has_errors) {
        return;
    }

    const options = {
        method: "post",
        url: "/send-message",
        data: {
            message: message_input.value,
            send_to: send_to_input,
        },
    };

    axios(options);
});

window.Echo.channel("chat").listen(".message", (e) => {

    if (e.send_to == username || e.username == username) {
        message_el.innerHTML +=
            '<div class = "message"><strong>' +
            e.username +
            ":</strong>" +
            e.message +
            "</div>";
    }

});
