function f1()
{
    var x=document.getElementById("t1");
    var y=x.value;
    var z=y.toUpperCase();
    x.value=z;
}

function required()
{   
    var name=document.getElementById("t1").value;
    var text=document.getElementById("text1");
    if(name=="")
    {
        text.innerHTML="* please enter username";
    }  
    else
    {
        text.innerHTML="";
    }
    
    var dob=document.getElementById("t2").value;
    var text=document.getElementById("text2");
    if(dob=="")
    {
        text.innerHTML="* please enter date of birth";
    }  
    else
    {
        text.innerHTML="";
    }

    var male=document.getElementById("m").checked;
    var female=document.getElementById("f").checked;
    var text=document.getElementById("text3");
    if((male==true && female== false) || (male==false && female==true ))
    {
        text.innerHTML="";   
    }  
    else
    {
        text.innerHTML="* please select gender";
    }
 
    var address=document.getElementById("t4").value;
    var text=document.getElementById("text4");
    if(address=="")
    {
        text.innerHTML="* please enter address";
    }  
    else
    {
        text.innerHTML="";
    }
    
    var subject=document.getElementById("t5").value;
    var text=document.getElementById("text5");
    if(subject==false)
    {
        text.innerHTML="* choose favourite sunject";
    }  
    else
    {
        text.innerHTML="";
    }
   
    var course1=document.getElementById("t61").checked;
    var course2=document.getElementById("t62").checked;
    var course3=document.getElementById("t63").checked;
    var text=document.getElementById("text6");
    if(course1==" " && course2=="" && course3=="") 
    {
        text.innerHTML="* choose certificate course";
    }  
    else
    {
        text.innerHTML="";
    }

    var email=document.getElementById("t7").value;
    var text=document.getElementById("text7");
    if(email=="")
    {
        text.innerHTML="* please enter email ";
    }  
    else
    {
        text.innerHTML="";
    }

    var mno=document.getElementById("t8").value;
    var text=document.getElementById("text8");
    if(mno=="")
    {
        text.innerHTML="* enter mobile number";
    }  
    else
    {
        text.innerHTML="";
    }

    var password=document.getElementById("t9").value;
    var text=document.getElementById("text9");
    if(password=="")
    {
        text.innerHTML="* enter password(for login use)";
    }  
    else
    {
        text.innerHTML="";
    }
  
    var upload=document.getElementById("t10").value;
    var text=document.getElementById("text10");
    if(upload=="")
    {
        text.innerHTML="* choose file to upload";
    }  
    else
    {
        text.innerHTML="";
    }

    if(name!="" && dob!="" && (male!="" || female!= "") && address!=""
     && subject!=false && (course1!="" || course2!="" ||course3!="") && email!="" && mno!="" && password!="" && upload!="")
    {
        var form=document.getElementById("form");
        form.onsubmit="return true";
    }
}