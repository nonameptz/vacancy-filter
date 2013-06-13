
function newImage(arg) {
	if (document.images) {
		rslt = new Image();
		rslt.src = arg;
		return rslt;
	}
}

function changeImages() {
	if (document.images && (preloadFlag == true)) {
		for (var i=0; i<changeImages.arguments.length; i+=2) {
			document[changeImages.arguments[i]].src = changeImages.arguments[i+1];
		}
	}
}

var preloadFlag = false;
function preloadImages() {
	if (document.images) {
		home_over = newImage("images/home-over.jpg");
		company_over = newImage("images/company-over.jpg");
		solutions_over = newImage("images/solutions-over.jpg");
		partners_over = newImage("images/partners-over.jpg");
		contact_over = newImage("images/contact-over.jpg");
		preloadFlag = true;
	}
}

function changeLang() 
{
	var id = parseInt($('#idVacancy').val());
	window.location ='/filter/vacancy/'+$('#lang').val()+'/'+id;
}
