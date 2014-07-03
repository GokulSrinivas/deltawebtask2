function checkSize(max_img_size)
{
    var input = document.getElementById("pic");

    if(input.files && input.files.length == 1)
    {
        if (input.files[0].size > max_img_size)
        {
            alert("The Image file must be less than " + (max_img_size/1024) + "MB");
            return false;
        }
    }
    return true;
}
