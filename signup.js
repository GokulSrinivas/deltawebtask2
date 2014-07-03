function fverify()
{
    var fname = document.getElementById("fname").value;
    var sname = document.getElementById("sname").value;
    var user  = document.getElementById("user").value;
    var bday  = document.getElementById("bday").value;
    var pass1 = document.getElementById("pass1").value;
    var pass2 = document.getElementById("pass2").value;
    var sex   = document.getElementById("sex").value;
    var dept  = document.getElementById("dept").value;

    fname = ucase(fname);
    sname = ucase(sname);
    fname = fname.trim();
    sname = sname.trim();
    document.getElementById("fname").value = fname;
    document.getElementById("sname").value = sname;

    if((pass1.length<6)||(pass2.length<6))
    {
        alert("Enter a password with 6 characters or greater");
        return;
    }
    if(pass1.localeCompare(pass2)!==0)
    {
        alert("Enter same password");
        return;
    }
    if((!/^[a-zA-Z]*$/.test(fname))||(!/^[a-zA-Z]*$/.test(sname)))
    {
        alert("Enter a valid Name");
        return;
    }
    if(!/^[a-zA-Z0-9_]*$/.test(user))
    {
        alert("Enter a valid Username");
        return;
    }

    if(dept.localeCompare("Department")===0)
    {
        alert("Enter your department");
        return;
    }
    if(sex.localeCompare("Gender")===0)
    {
        alert("Enter your Gender");
        return;
    }
    hasher();
    document.getElementById("checker").click();

}

function hasher()
{

    var pass1 = document.getElementById("pass1").value;
    var pass2 = document.getElementById("pass2").value;

    var p1 = CryptoJS.SHA1(pass1);
    var p2 = CryptoJS.SHA1(pass2);

    document.getElementById("pass1").value = p1;
    document.getElementById("pass2").value = p2;


}
function ucase(str)
{
    var p = str.split(" ");

    for ( var i = 0; i < p.length; i++ )
    {
        var j = p[i].charAt(0).toUpperCase();
        p[i] = j + p[i].substr(1);
    }
    return p.join(" ");
}

