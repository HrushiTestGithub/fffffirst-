// html files 
<html>
    <head>
        <title>Registartion1</title>
        <style>
            table{
                border-collapse: collapse;
                width: 50%;
                margin-left: 25%;
                margin-top: 150px;
                border: white;
            }
            th{
                height: 40px; 
                background-color: lightskyblue;
            }
            td{
                height: 40px;
                padding-left: 20px;
                text-align: right;
                padding-right: 20px;
                background-color: lightblue;
            }
            select{
                margin-right: 80%;  
            }
            textarea{
                margin-right: 80%;
            }
        </style>
    </head>
    <body>
        <form action="storereg1.php" method="post" name="form1" onsubmit="return validation()">
        <table border="1px">
            <tr>
                <th colspan="2">Registration Form</th>
            </tr>
            <tr>
                <td style="width: 40%;">Username</td>
                <td style="padding-right: 80%;"><input type="text" name="a"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td style="padding-right: 80%;"><input type="password" name="b"></td>
            </tr>
            <tr>
                <td>User Type</td>
                <td><Select name="c">
                    <option value="0">--Select--</option>
                    <option value="Teacher">Teacher</option>
                    <option value="Student">Student</option>
                </Select></td>
            </tr>
            <tr>
                <td>Display Name</td>
                <td style="padding-right: 80%;"><input type="text" name="d"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><textarea name="e" id=""></textarea></td>
            </tr>
            <tr>
                <td>Email</td>
                <td style="padding-right: 80%;"><input type="text" name="f"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><input type="radio" name="g" id="r1" value="Male"><label >Male</label>
                <input type="radio" name="g"  id="r2" value="Female"><label style="margin-right: 69%;">Female</label>
            </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="checkbox" name="h" value="check" ><label  style="margin-right: 50%;">accept Terms and Conditions</label> </td>
            </tr>
            <tr>
                <th colspan="2" style="padding-left :55%;"><input type="submit" value="Submit" style="margin-right: 500px;margin-left:-60px"></th>
            </tr>
        </table>
        </form>
        <script>
            function validation(){
                var alpha = /^[a-zA-Z]+$/;
            var numeric = /^[0-9]*$/;
            var pwd = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;
                var fi=document.form1.a.value;
                var pw=document.form1.b.value;
                var type=document.form1.c.value;
                var dname=document.form1.d.value;
                var add=document.form1.e.value;
                var em=document.form1.f.value;
                var ge=document.getElementById("r1").checked;
                var ge1=document.getElementById("r2").checked;
                var ch=document.form1.h.checked;
                
                if (fi == null || fi == "") {
                alert("Please enter valid Username");
                return false;
            }
            else if (fi.length <= 5 || fi.length>=20) {
                alert("Username should between 6 to 20 letters");
                return false;
            }
            else if (!alpha.test(fi)) {
                alert("Username should contain only Alphabets");
                return false;
            }
            else if(pw==fi){
                alert("password should not be match with user name");
                return false; 
            }
            else if (!pwd.test(pw)) {
                alert("Invalid Paswword");
                return false;
            }
            else if(type==0){
                alert("Please Select User type");
                    return false;
            }
            else    if (dname == null || dname == "") {
                alert("Please enter valid Display name");
                return false;
            }
            else if (dname.length <= 5) {
                alert("Display name should contain atleast 6 letters");
                return false;
            }
            else if (!alpha.test(dname)) {
                alert("Display name should contain only Alphabets");
                return false;
            }
            else if(add==null||add==""){
                alert("Please enter valid Address");
                return false;
            }
            else if (add.length <= 10 && add.length <= 35) {
                alert("Address length should be in 10 to 35 letters between");
                return false;
            }
            else if (em <= 2 || !em.endsWith("@gmail.com")) {
                alert("Please enter valid mail");
                return false;
            }
            else if (em.includes("+") || em.includes("*") || em.includes("-") || em.includes("/") || em.includes("!") || em.includes("~") || em.includes("#") || em.includes("$") || em.includes("%") || em.includes("&") || em.includes("^")) {
                alert("Dont use special symbol in your mail");
                return false;
            }
            else if(!ge && !ge1){
                alert("Please Select radio button");
                return false; 
            }
            else if(!ch==true){
                alert("Please accept terms and conditions");
                    return false;
            }
            }
        </script>
    </body>
</html>