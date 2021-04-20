function checkpassword() {

	let msg=document.getElementById('msg');
	if(this.value.length<7){
		alert('Password length must be at least 7');
	}
	else if(this.value.match(/[&]/g) || this.value.match(/[<]/g)
		|| this.value.match(/[>]/g) || this.value.match(/[""]/g)) {
       alert("Password shouldn't contain &,<,>,\"");
	}
	else{
		// msg.textContent='';
	}
}

let pass=document.getElementById('pass');
pass.onblur=checkpassword;

function match_password() {

	let msg=document.getElementById('msg');
	let con_pass=document.getElementById('con_pass');
	
	if(con_pass.value!=pass.value){
		alert("Two Password don't match");
		// this.className='show_error';
		// pass.className='show_error';
	}
	else{
		// msg.textContent='';
		// pass.className=classname;
		// this.className=classname;
	}
}

let signup=document.getElementById('signup');
signup.addEventListener('click',match_password,false);