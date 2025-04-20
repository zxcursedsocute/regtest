const HideBody = document.querySelector('.Hide-background');
const div = document.querySelector('.report_form');
const div2 = document.querySelector('.chat');


function show_rep(){
    if(div.style.display != 'flex'){
        div.style.display = 'flex'
        HideBody.style.display = 'flex'
      }
      else{
        div.style.display = 'none'
        HideBody.style.display = 'none'
      }
}

document.addEventListener( 'click', (e) => {
	const withinBoundaries = e.composedPath().includes(div);
    const withinBoundaries2 = e.composedPath().includes(div2);

	if ( ! withinBoundaries && ! withinBoundaries2) {
		div.style.display = 'none'
    HideBody.style.display = 'none'
	}
})