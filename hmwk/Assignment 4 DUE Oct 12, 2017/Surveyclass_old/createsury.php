<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>New Creating Survey</title>
        <link rel="stylesheet" type="text/css" href="newCascadeStyleSheet.css" />
    </head>
    <body>
        <div class="wrapper">
            <div id="outer">
                <table width="900" cellspacing="0" cellpadding="0" border="0">
                    <tr id="header">
                        <td><img src="images/568310_3758_3.jpg" alt="" id="logo" style="height: 200px; width: 900px;"/></td>
                    </tr>

                    <!-- creatsury.php -->
                    <!--table width="100%" cellspacing="0" cellpadding="0" border="1"-->
                    <tr>
                        <td class="currentPage">&nbsp;New Ballot</td>
                    </tr>
                    <tr>
                        <td><!--img src="./spacer.gif" width="10" height="20"--></td>
                    </tr>

                    <!--table width="900" align="center" border=1"-->
                    <tr><td><!--img src="spacer.gif" /--></td></tr>
                    <tr><td class="error"></td></tr><!--/table-->
                    <tr><td><hr></td></tr>
                    <tr>
                        <td>
                            <p class="intro_heading">Back to Admin</p>
                        </td>
                    </tr>

                    <tr><td><hr></td></tr>

                    <!--                    <form action="" method="POST">-->
                    <tr>
                        <td>
                            <form action="" method="POST">
                                Survey Title: <input type="text" name="surveytitle"><br>

                                Survey Descripton:<input type="text" name="surveydescription"><br>

                                QuestionLabel:<input type="text" name="questionlabel"><br>

                                Start Date:<input type="text" name="startdate"><br />

                                End Date: <input type="text" name="enddate">

                                <input type="submit" value="Create Survey" class="button" name="submit" />
                            </form>
                        </td>
                    </tr>
                    <tr>  
                        <td colspan="2" align="center">

                        <?php
                        // put your code here
                        echo '<pre>';
                        print_r($_POST);
                        echo '</pre>';
                        if (isset($_POST['submit'])) {
                            echo "Yes, submitted";
                        } else {
                            echo "No, submitted";
                        }

                        $Survey_Title = '';
                        $Survey_Descripton = '';
                        $Question_Label = '';
                        $Start_Date = '';
                        $End_Date = '';

                        $Question_Type = '';
                        $Question = '';
                        $Answers = '';
                        $Write_In = '';
                        ?>
                        </td>
                    </tr>
                    <!--</form>-->   

                </table>

                <table width="900" align="center" border="0">
                    <tr><td class="error"></td></tr>
                    <tr>
                        <td>
                            <p class="intro_heading">Add Question</p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="left">
                            <form>
                                Question Type: <input type="checkbox" name="surveytitle"><br>

                                Question:<input type="text" name="question"><br>

                                Answers:<input type="text" name="answers"><br>

                                Write In:<input type="checkbox" name="writein">
                                <input type="submit" value="Add Question" class="button" name="submit" />
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
            <div id="footer">
                <table width="100%" cellspacing="0" cellpadding="0" border="0">
                    <tr>
                        <td align="center">&copy; 2017 &reg; All Rights Reserved | Designed and Developed by Cheryllynn Walsh</td>
                    </tr>
                </table>
            </div>
        </div></body>
</html>


</body>
</html>
