let carouselslide=document.querySelector('.carousel-slide');
let carouselimage=document.querySelectorAll('.carousel-slide img');

let prevbtn=document.getElementById('prevbtn');
let nextbtn=document.getElementById('nextbtn');

let counter=1;
let size=carouselimage[0].clientWidth;
carouselslide.style.transform='translateX(' + (-size*counter) + 'px)';

nextbtn.addEventListener('click',() =>{
	carouselslide.style.transition='transform 0.4s ease-in-out';
	counter++;
	carouselslide.style.transform='translateX(' + (-size*counter) + 'px)';

});

prevbtn.addEventListener('click',() =>{
	carouselslide.style.transition='transform 0.4s ease-in-out';
	counter--;
	carouselslide.style.transform='translateX(' + (-size*counter) + 'px)';
	
});
console.log(carouselimage.length);
carouselslide.addEventListener('transitionend',() =>{
      if (carouselimage[counter].id==='clone1') {
      	console.log("age");
      	carouselslide.style.transition='none';
      	counter=carouselimage.length-2;
      	carouselslide.style.transform='translateX(' + (-size*counter) + 'px)';
      } 
      if (carouselimage[counter].id==='clone2') {
      	console.log("piche");
      	carouselslide.style.transition='none';
      	counter=carouselimage.length-counter;
      	carouselslide.style.transform='translateX(' + (-size*counter) + 'px)';
      }
});