 var now = new Date();
function getTodaysDate() {
 var days = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
 var months = new Array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
 var date = ((now.getDate() < 10) ? "0" : "") + now.getDate();

 var today = days[now.getDay()] + ", " +  months[now.getMonth()] + " " +  date + ", " +  now.getFullYear();

 return (today);
}
function getYear() {
	var year = now.getFullYear();
	return (year);
}
function getTanggal() {
	var tgl = now.getDate();
	return (tgl);
}
function getBulan() {
	var bln = now.getMonth();
	return (bln);
}
$('span.tahun')[0].innerText = getYear();