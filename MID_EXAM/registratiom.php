
Skip to content
Pull requests
Issues
Marketplace
Explore
@Iqbal231097
dbnnomanbhai /
learning-web-technologies-spring-2020-2021-sec-h

1
0

    0

Code
Issues
Pull requests
Actions
Projects
Wiki
Security

    Insights

learning-web-technologies-spring-2020-2021-sec-h/labexam/registration.php /
@dbnnomanbhai
dbnnomanbhai lab exam
Latest commit 1b60f2d 4 minutes ago
History
1 contributor
120 lines (108 sloc) 3.47 KB
<?php
    session_start();
     
   
?>
 <html>
<head>
 
    <title>Registration Form </title>
</head>
<body style="background-color:pink;">
 
    <fieldset>
        <table width='100%' >
            <tr>
                 
                <td align='right'>
                    <nav>
                        <a href='./home.php'>Home</a> |
                        <a href='./login.php'>Log In</a> |
                        <a href='./registration.php'>Registration</a>
                    </nav>
                </td>
            </tr>
        </table>
    </fieldset>
  
    <fieldset>
        <fieldset>
            <legend>
                <b>REGISTRATION </b>
            </legend>
			 
            <form action='./checkreg.php' method='POST' >
                <table align=""> 
                    <tr>
                        <td>
                            ID :
                        </td>
                        <td>
                            <input type="number" name='id'>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>
                    
                
                    <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Password:
                        </td>
                        <td>
                            <input type="password" name='password'>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Confirm Password:
                        </td>
                        <td>
                            <input type="password" name='confirmpassword'>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>
					     <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Name:
                        </td>
                        <td>
                            <input type="text" name='username'>
                        </td>
                    </tr>
                        <tr>
                        <td colspan="2">
                            <fieldset>
                                <legend>
                                    <b>User Type</b>
                                </legend>
                                <input type='checkbox' name='user'value='user'>User
                                 <input type='checkbox' name='admin'value='admin'>Admin
                            </fieldset>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type='submit' value='submit'>
                            <input type='reset' value='Reset'>
                        </td>
                    </tr>
                </table>
            </form>
			  
			   
        </fieldset>
    </fieldset>
  
</body>
</html>

    © 2021 GitHub, Inc.
    Terms
    Privacy
    Security
    Status
    Docs

    Contact GitHub
    Pricing
    API
    Training
    Blog
    About

