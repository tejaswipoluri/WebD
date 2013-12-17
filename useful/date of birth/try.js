function populatedropdown(dayselect, month, year)
{

	var today=new Date();
	var dayselect=document.getElementById(dayselect);
	var month=document.getElementById(month);
	var year=document.getElementById(year);
	var thisyear=today.getFullYear()
	
	for (var y=0; y<150; y++)
		{
		year.options[y]=new Option(thisyear)
		thisyear-=1
		}
	year.options[0]=new Option(today.getFullYear(), today.getFullYear(), true, true) //select today's year

		console.log(year.options[year.selectedIndex].value);
	console.log(month.options[month.selectedIndex].value);
	
	
	for (var i=0; i<31; i++)
	dayselect.options[i]=new Option(i, i+1);
	
	dayselect.options[today.getDate()]=new Option(today.getDate(), today.getDate(), true, true) //select today's day
	
}

window.onload=function()
{
	populatedropdown("dayselect", "month", "year")
}


