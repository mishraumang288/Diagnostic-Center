 
const hamburger = document.querySelector('.header .nav-bar .nav-list .hamburger');
const mobile_menu = document.querySelector('.header .nav-bar .nav-list ul');
const menu_item = document.querySelectorAll('.header .nav-bar .nav-list ul li a');
const header = document.querySelector('.header.container');

hamburger.addEventListener('click', () => {
	hamburger.classList.toggle('active');
	mobile_menu.classList.toggle('active');
});

document.addEventListener('scroll', () => {
	var scroll_position = window.scrollY;
	if (scroll_position > 250) {
		header.style.backgroundColor = '#29323c';
	} else {
		header.style.backgroundColor = 'transparent';
	}
});

menu_item.forEach((item) => {
	item.addEventListener('click', () => {
		hamburger.classList.toggle('active');
		mobile_menu.classList.toggle('active');
	});
});

function display_alert()
{ 
	 var Name= document.getElementById('name');
	 var Phone= document.getElementById('phone');
	 var tests= document.getElementById('tests');
	 var date= document.getElementById('date');
	 const success =document.getElementById('success');
	if(Name.value === '' || Phone.value === '' || tests.value === '' || date.value === ''){


	}
	else{
		setTimeout(() =>{
			Name.value = '';
			Phone.value ='';
			tests.value ='';
			date.value ='';

			
		},4000);
		success.style.display = 'block';

	}
	
}	