function checkpassword() {

	let msg=document.getElementById('msg');
	if(this.value.length<7){
		msg.textContent='Password length must be at least 7';
	}
	else if(this.value.match(/[&]/g) || this.value.match(/[<]/g)
		|| this.value.match(/[>]/g) || this.value.match(/[""]/g)) {
       msg.textContent="Password shouldn't contain &,<,>,\"";
	}
	else{
		msg.textContent='';
	}
}

let pass=document.getElementById('pass');
pass.onblur=checkpassword;

function match_password() {

	let msg=document.getElementById('msg');
	
	if(this.value!=pass.value){
		msg.textContent="Two Password don't match";
		this.className='show_error';
		pass.className='show_error';
	}
	else{
		msg.textContent='';
		pass.className=classname;
		this.className=classname;
	}
}

let con_pass=document.getElementById('con_pass');
con_pass.onblur=match_password;
let classname=con_pass.className;