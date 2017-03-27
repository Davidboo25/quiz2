<?php
function cookie()
{
    if ($_POST['firstname'] != null)
    {   
        // Sets the cookie 
        setcookie('firstNameCookie', $_POST['firstname'],0);
        setcookie('lastNameCookie', $_POST['lastname'],0);
        setcookie('emailCookie', $_POST['email'],0);      
    }
    if(isset($_COOKIE['firstNameCookie']))
    {
        echo ("Hi ");
        echo htmlspecialchars($_COOKIE['firstNameCookie']);
        echo htmlspecialchars($_COOKIE['lastNameCookie']);
        echo ("\n You recently signed up with the email address: ");
        echo htmlspecialchars($_COOKIE['emailCookie']);
    }
}
?>