const btn = document.querySelector("#btnSend");
const form = document.querySelector("#form");
btn.addEventListener("click", (e) =>{
	e.preventDefault();
	const dataForm = new FormData(form);
	fetch('save',{
		method: 'post',
		body:dataForm
	})
	.then(response => response.json())
	.then(result => {
		console.log(result)
		if (result.alert == "danger") {
			
			let name = document.querySelector(".errors-name");
			name.textContent = result.name[0];
			let surname = document.querySelector(".errors-surname");
			surname.textContent = result.surname[0];
			let email = document.querySelector(".errors-email");
			email.textContent = result.email[0];
			let img = document.querySelector(".errors-img");
			img.textContent = result.img[0];
		}

		if (result.alert == "success") {
			const success = document.querySelector(".alert");
			success.textContent = "El formulario Atenea se completó correctamente";
			success.style.display = "block";
		}
		
	})
});