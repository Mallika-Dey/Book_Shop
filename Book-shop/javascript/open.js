function open() {
	let nav=document.querySelector('.nav-links');
	nav.classList.toggle("open");
	
}

let line=document.querySelector('.hamburger');
let link=document.querySelectorAll('.nav-links li');

line.addEventListener('click',open,false);