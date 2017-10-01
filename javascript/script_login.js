function check(form)
{
    if(form.userid.value == "greg" && form.pswrd.value == "123")
        {
           window.location.assign("page2.html")
        }
    else
      {
            alert ("username or password incorrect")
      }
}