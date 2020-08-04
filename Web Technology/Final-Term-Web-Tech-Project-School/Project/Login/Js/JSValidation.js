function AdminRegCheck()                                    
{ 
    var aid   = document.forms["ARegForm"]["Aid"].value; 
    var aname  = document.forms["ARegForm"]["Aname"].value;   
    var afname = document.forms["ARegForm"]["AFname"].value; 
    var amname = document.forms["ARegForm"]["AMname"].value; 
    var apass  = document.forms["ARegForm"]["ASpass"].value; 
    var acpass = document.forms['ARegForm']['ACpass'].value;
    var aemail = document.forms['ARegForm']['Aemail'].value;
    var acontact = document.forms['ARegForm']['AContact'].value;
    var at = document.forms['ARegForm']['Utype'].value;
    var ag = document.forms['ARegForm']['Ugender'].value;
    //var adob = document.forms['ARegForms']['dob'].value;
    //var ajd = document.forms['ARegForm']['jd'].value;
    //var aadd = document.forms['ARegForm']['Aaddress'].value;
//aid
   if(aid == "")
    {
	   alert("Please give a Id.");
	   return false;
    }
//aname
   if (aname == "")                                  
    { 
        alert("Please enter your name."); 
        return false; 
    } 
    else if(aname.length<2)
    { 
        alert("Name must contain atleast two input!"); 
        return false; 
    } 

    else if(!aname.match(/[a-z]/i))
    {
        alert("Must start with alphabet!"); 
        return false; 
    }
 //afname
    if (afname == "")                                  
    { 
        alert("Please enter father name."); 
        return false; 
    } 
    else if(afname.length<2)
    { 
        alert("Name must contain atleast two input!"); 
        return false; 
    } 

    else if(!afname.match(/[a-z]/i))
    {
        alert("Name must start with alphabet!"); 
        return false; 
    }
//amname
if (amname == "")                                  
    { 
        alert("Please enter mother's name."); 
        return false; 
    } 
    else if(amname.length<2)
    { 
        alert("Name must contain atleast two input!"); 
        return false; 
    } 

    else if(!amname.match(/[a-z]/i))
    {
        alert("Name must start with alphabet!"); 
        return false; 
    }
//apass
if(apass == "")
    {
	  alert("Give a password");
	  return false;
    }
    else if(!apass.match(/[A-Z]/g))
    {
	  alert("Password must contain at least one Upper case letter");
	  return false;
    }
    else if(!apass.match(/[a-z]/g))
    {
	   alert("Password must contain at least one lower case letter!");
	   return false;
    }
    else if(!apass.match(/[0-9]/g))
    {
	    alert("Password must contain atleast one number!");
	    return false;
    }
    else if(apass.length<4)
    {
        alert("Password must be atleast 4 character!");
        return false;
    }
//acpass
if(acpass == "")
    {
      alert("Please retype password to confirm");
      return false;
    }
    else if(acpass != apass)
    {
	  alert("Password did not match!");
	  return false;
    }
 //aemail
if(aemail=="")
    {
	  alert("Please enter a valid email!");
	  return false;
    }
    //acontact
if(acontact=="")
    {
	  alert("Please enter a valid contact number!");
	  return false;
    }
//atype
if(at=="")
    {
	  alert("Please select user type");
	  return false;
    }
//agender
if (ag == "")                                   
    { 
        alert("Please confirm gender"); 
        return false; 
    }
}



//TeacherValidation
function TeacherRegCheck()
{
    var aid   = document.forms["TRegForm"]["Fid"].value; 
    var aname  = document.forms["TRegForm"]["Fname"].value;   
    var afname = document.forms["TRegForm"]["FFname"].value; 
    var amname = document.forms["TRegForm"]["FMname"].value; 
    var apass  = document.forms["TRegForm"]["Fpass"].value; 
    var acpass = document.forms['TRegForm']['FCpass'].value;
    var aemail = document.forms['TRegForm']['Femail'].value;
    var acontact = document.forms['TRegForm']['FContact'].value;
    var at = document.forms['TRegForm']['Ftype'].value;
    var ag = document.forms['TRegForm']['Fgender'].value;
//aid
   if(aid == "")
    {
       alert("Please give a Id.");
       return false;
    }
//aname
   if (aname == "")                                  
    { 
        alert("Please enter your name."); 
        return false; 
    } 
    else if(aname.length<2)
    { 
        alert("Name must contain atleast two input!"); 
        return false; 
    } 

    else if(!aname.match(/[a-z]/i))
    {
        alert("Must start with alphabet!"); 
        return false; 
    }
 //afname
    if (afname == "")                                  
    { 
        alert("Please enter father name."); 
        return false; 
    } 
    else if(afname.length<2)
    { 
        alert("Name must contain atleast two input!"); 
        return false; 
    } 

    else if(!afname.match(/[a-z]/i))
    {
        alert("Name must start with alphabet!"); 
        return false; 
    }
//amname
if (amname == "")                                  
    { 
        alert("Please enter mother's name."); 
        return false; 
    } 
    else if(amname.length<2)
    { 
        alert("Name must contain atleast two input!"); 
        return false; 
    } 

    else if(!amname.match(/[a-z]/i))
    {
        alert("Name must start with alphabet!"); 
        return false; 
    }
//apass
if(apass == "")
    {
      alert("Give a password");
      return false;
    }
    else if(!apass.match(/[A-Z]/g))
    {
      alert("Password must contain at least one Upper case letter");
      return false;
    }
    else if(!apass.match(/[a-z]/g))
    {
       alert("Password must contain at least one lower case letter!");
       return false;
    }
    else if(!apass.match(/[0-9]/g))
    {
        alert("Password must contain atleast one number!");
        return false;
    }
    else if(apass.length<4)
    {
        alert("Password must be atleast 4 character!");
        return false;
    }
//acpass
if(acpass == "")
    {
      alert("Please retype password to confirm");
      return false;
    }
    else if(acpass != apass)
    {
      alert("Password did not match!");
      return false;
    }
 //aemail
if(aemail=="")
    {
      alert("Please enter a valid email!");
      return false;
    }
    //acontact
if(acontact=="")
    {
      alert("Please enter a valid contact number!");
      return false;
    }
//atype
if(at=="")
    {
      alert("Please select user type");
      return false;
    }
//agender
if (ag == "")                                   
    { 
        alert("Please confirm gender"); 
        return false; 
    }
}
//StudentRegValidation
function StudentRegCheck()                                  
{ 
    var sid   = document.forms["SRegForm"]["Sid"].value; 
    var sname  = document.forms["SRegForm"]["Sname"].value;   
    var sfname = document.forms["SRegForm"]["SFname"].value; 
    var smname = document.forms["SRegForm"]["SMname"].value; 
    var spass  = document.forms["SRegForm"]["Spass"].value; 
    var scpass = document.forms['SRegForm']['SCpass'].value;
    var semail = document.forms['SRegForm']['Semail'].value;
    var scontact = document.forms['SRegForm']['SContact'].value;
    var st = document.forms['SRegForm']['Stype'].value;
    var sg = document.forms['SRegForm']['Sgender'].value;
    var sroll = document.forms['SRegForm']['Sroll'].value;
//aid
   if(sid == "")
    {
       alert("Please give a Id.");
       return false;
    }
//aname
   if (sname == "")                                  
    { 
        alert("Please enter your name."); 
        return false; 
    } 
    else if(sname.length<2)
    { 
        alert("Name must contain atleast two input!"); 
        return false; 
    } 

    else if(!sname.match(/[a-z]/i))
    {
        alert("Must start with alphabet!"); 
        return false; 
    }
 //afname
    if (sfname == "")                                  
    { 
        alert("Please enter father name."); 
        return false; 
    } 
    else if(sfname.length<2)
    { 
        alert("Name must contain atleast two input!"); 
        return false; 
    } 

    else if(!sfname.match(/[a-z]/i))
    {
        alert("Name must start with alphabet!"); 
        return false; 
    }
//amname
if (smname == "")                                  
    { 
        alert("Please enter mother's name."); 
        return false; 
    } 
    else if(smname.length<2)
    { 
        alert("Name must contain atleast two input!"); 
        return false; 
    } 

    else if(!smname.match(/[a-z]/i))
    {
        alert("Name must start with alphabet!"); 
        return false; 
    }
//apass
if(spass == "")
    {
      alert("Give a password");
      return false;
    }
    else if(!spass.match(/[A-Z]/g))
    {
      alert("Password must contain at least one Upper case letter");
      return false;
    }
    else if(!spass.match(/[a-z]/g))
    {
       alert("Password must contain at least one lower case letter!");
       return false;
    }
    else if(!spass.match(/[0-9]/g))
    {
        alert("Password must contain atleast one number!");
        return false;
    }
    else if(spass.length<4)
    {
        alert("Password must be atleast 4 character!");
        return false;
    }
//acpass
if(scpass == "")
    {
      alert("Please retype password to confirm");
      return false;
    }
    else if(scpass != spass)
    {
      alert("Password did not match!");
      return false;
    }
 //aemail
if(semail=="")
    {
      alert("Please enter a valid email!");
      return false;
    }
    //acontact
if(scontact=="")
    {
      alert("Please enter a valid contact number!");
      return false;
    }
//atype
if(st=="")
    {
      alert("Please select user type");
      return false;
    }
//agender
if (sg == "")                                   
    { 
        alert("Please confirm gender"); 
        return false; 
    }
//Roll
if (sroll == "")                                   
    { 
        alert("Please give roll"); 
        return false; 
    }
}