var monthselected,yearselected,mtype=0,visited=0;

function reassembleDate(){

    monthselected = parseInt(document.getElementById('month').value);
    yearselected = parseInt(document.getElementById('year').value); 

    if(monthselected == "" || yearselected == "0") {
        return;
    }

    if(monthselected==4||monthselected==6||monthselected==9||monthselected==11)
        {mtype=30;}
    else if(monthselected==2&&isleapyear(yearselected))
        {mtype=29;}
    else if(monthselected==2&&!isleapyear(yearselected))
        {mtype=28;}
    else
        {mtype=31;} 

    removeOptions();
    addOptions(mtype);
}

function removeOptions(){
    var x=document.getElementById('dayselect');
    while(x.length>29)
    { 
        x.remove(x.length-1);
    }
}

function addOptions(mtype) {
    //alert('initialising');
    var i;
    for(i=29;i<=mtype;i++)
    {
        var x=document.getElementById("dayselect");
        var option=document.createElement("option");

        option.text=i;
        try
          {//alert('trying');
          // for IE earlier than version 8
          x.add(option,x.options[null]);
          }
        catch (e)
          {//alert('catching');
          x.add(option,null);
          }
    }
}             

function isleapyear(year){
    if((year%4)==0)
    {
        if((year%100)!=0)
        {
            return true;
        }
        else return false;
    }

    if((year%400)==0)
    {
        return true;
    }

    else return false;
} 