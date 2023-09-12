const offset = 500;
const scrollUp = document.querySelector('.scroll-up');
const scrolUpSvgPath = document.querySelector('.scroll-up__svg-path');
const pathLength = scrolUpSvgPath.getTotalLength();

scrolUpSvgPath.style.strokeDasharray = `${pathLength} ${pathLength}`;
scrolUpSvgPath.style.transition = 'stroke-dashoffset 20ms';

const getTop = () => window.pageYOffset || document.documentElement.scrollTop;
		
// updateDashoffset
const updateDashoffset = () => {
	const height = document.documentElement.scrollHeight - window.innerHeight;
	const dashoffset = pathLength - (getTop() * pathLength / height);

	scrolUpSvgPath.style.strokeDashoffset = dashoffset;
};

//onScroll
window.addEventListener('scroll', () => {
	updateDashoffset();

	if (getTop() > offset) {
	scrollUp.classList.add('scroll-up--active')
	} else {
	scrollUp.classList.remove('scroll-up--active')
	}
});

//click
scrollUp.addEventListener('click', () => {
	window.scrollTo({
	top: 0,
	behavior: 'smooth'
	});
});