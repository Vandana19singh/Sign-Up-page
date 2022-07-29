<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>SIGNUP FORM</title>
</head>
<body>
    <div class="container">
        <h3>SIGN UP FORM</h3>
        <div class="form">
            
            
                <form action="register.php" method = "POST">
                    <div id="name">
                        
                    <label  class="name">Full Name: </label>
                    <input type="text" class="Full_name"name="Full_name">                    
                </div>
                    <div id="Email">
                        
                    <label  class="Email">Email Id: </label>
                    <input type="text" class="Email"name="Email_Id">                    
                </div>
                    
                    <div id="Gender">
                        
                    <label  class="Gender">Gender: </label>
                    <label style="Font-size:23px" class="Gender"> Male </label> <input type="radio"class="Gender" name="Gender" value="Male" />
                    <label style="Font-size:23px" class="Gender"> Female </label> <input type="radio" class="Gender" name="Gender" value="Female" />                    
                </div>
                    <div id="Date">
                        
                    <label  class="Dob" >Date of Birth: </label>
                    <select name="Birthday_day" id="Birthday_Day"class="Dob1" >
                        <option value="-1">Day:</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                         
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                         
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                         
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                         
                        <option value="31">31</option>
                        </select>          
                        <select id="Birthday_Month" name="Birthday_Day" class="Dob1">
                            <option value="-1">Month:</option>
                            <option value="January">Jan</option>
                            <option value="February">Feb</option>
                            <option value="March">Mar</option>
                            <option value="April">Apr</option>
                            <option value="May">May</option>
                            <option value="June">Jun</option>
                            <option value="July">Jul</option>
                            <option value="August">Aug</option>
                            <option value="September">Sep</option>
                            <option value="October">Oct</option>
                            <option value="November">Nov</option>
                            <option value="December">Dec</option>
                            </select>
                            <select name="Birthday_Day" id="Birthday_Year" class="Dob1">
 
                                <option value="-1">Year:</option>
                                <option value="2012">2012</option>
                                <option value="2011">2011</option>
                                <option value="2010">2010</option>
                                <option value="2009">2009</option>
                                <option value="2008">2008</option>
                                <option value="2007">2007</option>
                                <option value="2006">2006</option>
                                <option value="2005">2005</option>
                                <option value="2004">2004</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                                <option value="2000">2000</option>
                                 
                                <option value="1999">1999</option>
                                <option value="1998">1998</option>
                                <option value="1997">1997</option>
                                <option value="1996">1996</option>
                                <option value="1995">1995</option>
                                <option value="1994">1994</option>
                                <option value="1993">1993</option>
                                <option value="1992">1992</option>
                                <option value="1991">1991</option>
                                <option value="1990">1990</option>
                                 
                                <option value="1989">1989</option>
                                <option value="1988">1988</option>
                                <option value="1987">1987</option>
                                <option value="1986">1986</option>
                                <option value="1985">1985</option>
                                <option value="1984">1984</option>
                                <option value="1983">1983</option>
                                <option value="1982">1982</option>
                                <option value="1981">1981</option>
                                <option value="1980">1980</option>
                                </select>        
                </div> 
                <div id="Password">
                        
                    <label  class="Password">Password: </label>
                    <input type="text" class="Password"name="Password">                    
                </div>
                <div class="button">
                    <button class="btn" id="btn" >Submit</button>
                </div>
                    
                </form>
            </div>
        </div>
    </div>
</body>
</html>





