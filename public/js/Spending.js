window.onload = function ()
{
var today = new Date();

var mm = today.getMonth()+1; //January is 0!

var yyyy = today.getFullYear();
 if(mm<10) {
 	mm='0'+mm
}
	var output = yyyy + '-' +  mm;

$('#theDate').attr('value', output);


}