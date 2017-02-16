function sgpa(num)
{
    if(num==1)
    {    
        var o=frm.obtained1.value;
        var t=frm.total1.value;
        var ans=o/t;
        if(ans>10 || ans<1)
        {
            alert("Invalid Grade Points/Credits. SGPA Should be less than 10");
            frm.obtained1.focus();
        }
        else
        {
            //alert(ans.toFixed(2));
            frm.f1.value=ans.toFixed(2);

        }
    }
    if(num==2)
    {    
        var o=frm.obtained2.value;
        var t=frm.total2.value;
        var ans=o/t;
        if(ans>10 || ans<1)
        {
            alert("Invalid Grade Points/Credits. SGPA Should be less than 10");
            frm.obtained2.focus();
        }
        else
        {
            //alert(ans.toFixed(2));
            frm.f2.value=ans.toFixed(2);

        }
    }
    if(num==3)
    {    
        var o=frm.obtained3.value;
        var t=frm.total3.value;
        var ans=o/t;
        if(ans>10 || ans<1)
        {
            alert("Invalid Grade Points/Credits. SGPA Should be less than 10");
            frm.obtained3.focus();
        }
        else
        {
            //alert(ans.toFixed(2));
            frm.f3.value=ans.toFixed(2);

        }
    }
    if(num==4)
    {    
        var o=frm.obtained4.value;
        var t=frm.total4.value;
        var ans=o/t;
        if(ans>10 || ans<1)
        {
            alert("Invalid Grade Points/Credits. SGPA Should be less than 10");
            frm.obtained4.focus();
        }
        else
        {
            //alert(ans.toFixed(2));
            frm.f4.value=ans.toFixed(2);

        }
    }
    if(num==5)
    {    
        var o=frm.obtained5.value;
        var t=frm.total5.value;
        var ans=o/t;
        if(ans>10 || ans<1)
        {
            alert("Invalid Grade Points/Credits. SGPA Should be less than 10");
            frm.obtained5.focus();
        }
        else
        {
            //alert(ans.toFixed(2));
            frm.f5.value=ans.toFixed(2);

        }
    }
    if(num==6)
    {    
        var o=frm.obtained6.value;
        var t=frm.total6.value;
        var ans=o/t;
        if(ans>10 || ans<1)
        {
            alert("Invalid Grade Points/Credits. SGPA Should be less than 10");
            frm.obtained6.focus();
        }
        else
        {
            //alert(ans.toFixed(2));
            frm.f6.value=ans.toFixed(2);

        }
    }
    if(num==7)
    {    
        var o=frm.obtained7.value;
        var t=frm.total7.value;
        var ans=o/t;
        if(ans>10 || ans<1)
        {
            alert("Invalid Grade Points/Credits. SGPA Should be less than 10");
            frm.obtained7.focus();
        }
        else
        {
            //alert(ans.toFixed(2));
            frm.f7.value=ans.toFixed(2);

        }
    }
    if(num==8)
    {    
        var o=frm.obtained8.value;
        var t=frm.total8.value;
        var ans=o/t;
        if(ans>10 || ans<1)
        {
            alert("Invalid Grade Points/Credits. SGPA Should be less than 10");
            frm.obtained8.focus();
        }
        else
        {
            //alert(ans.toFixed(2));
            frm.f8.value=ans.toFixed(2);

        }
    }

}
function backlog(num)
{   
    
    if(num==1)
    {
        var b=frm.b1.value;
        if(b!=0)
            frm.f1.value="0.00";
        if(b==0)
            sgpa(num);
    }
    if(num==2)
    {
        var b=frm.b2.value;
        if(b!=0)
            frm.f2.value="0.00";
        if(b==0)
            sgpa(num);
    }
    if(num==3)
    {
        var b=frm.b3.value;
        if(b!=0)
            frm.f3.value="0.00";
        if(b==0)
            sgpa(num);
    }
    if(num==4)
    {
        var b=frm.b4.value;
        if(b!=0)
            frm.f4.value="0.00";
        if(b==0)
            sgpa(num);
    }
    if(num==5)
    {
        var b=frm.b5.value;
        if(b!=0)
            frm.f5.value="0.00";
        if(b==0)
            sgpa(num);
    }
    if(num==6)
    {
        var b=frm.b6.value;
        if(b!=0)
            frm.f6.value="0.00";
        if(b==0)
            sgpa(num);
    }
    if(num==7)
    {
        var b=frm.b7.value;
        if(b!=0)
            frm.f7.value="0.00";
        if(b==0)
            sgpa(num);
    }
    if(num==8)
    {
        var b=frm.b8.value;
        if(b!=0)
            frm.f8.value="0.00";
        if(b==0)
            sgpa(num);
    }
}

function test()
{
    
    var tot=parseInt(frm.obtained1.value)+parseInt(frm.obtained2.value)+parseInt(frm.obtained3.value)+parseInt(frm.obtained4.value)+parseInt(frm.obtained5.value)+parseInt(frm.obtained6.value)+parseInt(frm.obtained7.value)+parseInt(frm.obtained8.value);
    var credit=parseInt(frm.total1.value)+parseInt(frm.total2.value)+parseInt(frm.total3.value)+parseInt(frm.total4.value)+parseInt(frm.total5.value)+parseInt(frm.total6.value)+parseInt(frm.total7.value)+parseInt(frm.total8.value);
    ans=tot/credit;
    frm.cgpa.value=ans.toFixed(2);
}