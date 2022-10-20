console.log("LOADED");

document.addEventListener("readystatechange", function(event) {
    if(event.target.readyState == "interactive") {
		
		document.querySelector("body").classList.add("js");

		
		let Buttons = document.querySelectorAll("#Information article .Car-details a");
		for(let button of Buttons) {
			button.addEventListener("click", function(event) {
				this.parentElement.parentElement.classList.add("expanded");
				event.preventDefault();
			});
		}
		
		const formButton = document.querySelector("#contact-form form button");

		document.querySelector("#contact-form form").addEventListener("submit", function(event) {

			let email = document.querySelector("#form-email").value;
			let phone = document.querySelector("#form-phone").value;
			let complete = false;

			console.log(email);
			console.log(phone);

			if(email != "" && phone != "") {
				complete = true;
			}

			if(email == "") {

				let emailAdd = document.querySelector("#form-email");
				emailAdd.classList.add("error");

				let emailLabel = emailAdd.closest(".form-item").querySelector("label");
				emailLabel.classList.add("error");

			}

			if(phone == "" || phone.length() != 9) {

				let phoneVal = document.querySelector("#form-phone");
				phoneVal.classList.add("error");

				let phoneLabel = phoneVal.closest(".form-item").querySelector("label");
				phoneLabel.classList.add("error");

			}

			if(complete) {
				alert("Form completed! Have fun!")
				console.log("COMPLETE");

			}
			else {
				alert("Incomplete! Please try again!");
				console.log("INCOMPLETE");
				formButton.innerHTML = "Try Again";
			}
			event.preventDefault();

		});

    }
});
function func() {
	alert("We have found some dealers for you!");
	window.location.href="Dealers found.html";
}

function closeit() {
	var t = document.getElementById('secondary-menu');
	t.style.display = 'none';
}