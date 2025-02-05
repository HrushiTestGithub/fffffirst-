// html files 
<html>
    <head>
        <title>Registartion2</title>
        <style>
            body{
                background-color:lightgray ;
            }
            label{
                width: 200px;
                display: inline-block;
                padding-top: 20px;
                margin-left: 37%;
            }
            h1{
                text-align: center;
                text-transform: uppercase;
                font-weight: 900;
            }
            input{
                border-color: skyblue;
                font-weight: 500;
            }
            select{
                border-color: skyblue;
                width: 170px;
            }
            textarea{
                margin-top: 20px;
                border-color: skyblue;
            }
        </style>
    </head>
    <body>
        <form action="storereg2.php" method="post" name="form1" onsubmit="return validation()">
        <h1>Self-Registration Form</h1>
        <hr>
        <label>First Name(*)</label><input type="text" name="a" id=""><br>
        <label>Last Name(*)</label><input type="text" name="b" id=""><br>
        <label>Email(*)</label><input type="text" name="c" id=""><br>
        <label>Address</label><textarea name="d" id=""></textarea><br>
        <label>City</label><input type="text" name="e" id=""><br>
        <label>Zip</label><input type="text" name="f" id=""><br>
        <label>State</label><input type="text" name="g" id=""><br>
        <label>Country</label><select name="h" id="">
            <option value="0">--Select--</option>
            <option value="India">India</option>
            <option value="USA">USA</option>
            <option value="Russia">Russia</option>
            <option value="Japan">Japan</option>
            <option value="Germany">Germany</option> 
            <option value="London">London</option> 
        </select><br>
        <label>Organistation / Department</label><input type="text" name="i" id=""><br>
        <label>Kind</label><select name="j" id="">
            <option value="0">--Select--</option>
            <option value="Private Company">Private Company</option>
            <option value="Functional">Functional</option>
            <option value="National">National</option>
            <option value="Product Based">Product Based</option>
            <option value="Service Based">Service Based</option> 
        </select><br>
        <label>Profile</label><select name="k" id="">
            <option value="0">--Select--</option>
            <option value="Administrator">Administrator</option>
            <option value="Manager">Manager</option>
            <option value="CEO">CEO</option>
            <option value="Developer">Developer</option>
            <option value="Tester">Tester</option> 
            <option value="HR">HR</option> 
        </select><br><br>
        <hr>
        <br>
        <input type="reset"   value="Reset" style="margin-left: 41%;font-size: 25px;">
        <input type="submit"  Value="Submit" style="margin-left: 20px;font-size: 25px;">
        </form>
        <script>
            function validation(){
                var alpha = /^[a-zA-Z]+$/;
            var numeric = /^[0-9]*$/;
            var pwd = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;
                var fi=document.form1.a.value;
                var la=document.form1.b.value;
                var em=document.form1.c.value;
                var add=document.form1.d.value;
                var city=document.form1.e.value;
                var zi=document.form1.f.value;
                var state=document.form1.g.value;
                var co=document.form1.h.value;
                var or=document.form1.i.value;
                var ki=document.form1.j.value;
                var pr=document.form1.k.value;
                if (fi == null || fi == "") {
                alert("Please enter valid Firstname");
                return false;
            }
            else if (fi.length <= 5 && fi.length>=20) {
                alert("Firstname should between 6 to 20 letters");
                return false;
            }
            else if (!alpha.test(fi)) {
                alert("Firstname should contain only Alphabets");
                return false;
            }
            else    if (la == null || la == "") {
                alert("Please enter valid Lastname");
                return false;
            }
            else if (la.length <= 5&& la.length>=20) {
                alert("Lastname should between 6 to 20 letters");
                return false;
            }
            else if (!alpha.test(la)) {
                alert("Lastname should contain only Alphabets");
                return false;
            }
            else if(fi==la){
                alert("firstname is not same as last name");
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
            else if(add==null||add==""){
                alert("Please enter valid Address");
                return false;
            }
            else if (add.length <= 10 && add.length <= 35) {
                alert("Address length should be in 10 to 35 letters between");
                return false;
            }
            else if (city == null || city == "") {
                alert("Please enter valid City");
                return false;
            }
            else if (!alpha.test(city)) {
                alert("City name should contain only Alphabets");
                return false;
            }
            else if (la.length <= 1 && la.length>=20) {
                alert("Lastname should between 2 to 20 letters");
                return false;
            }
            else if (zi == null || zi == "") {
                alert("Please enter valid Zip code");
                return false;
            }
            else if (!numeric.test(zi)) {
                alert("Zip Code should contain only Numbers");
                return false;
            }
            else if (zi <= 59999 || zi >= 1000000) {
                alert("Please Enter valid Zip value");
                return false;
            }
            else if (state == null || state == "") {
                alert("Please enter valid State");
                return false;
            }
            else if (!alpha.test(state)) {
                alert("State name should contain only Alphabets");
                return false;
            }
            else if (state.length <= 1 && state.length>=20) {
                alert("State name should between 2 to 20 letters");
                return false;
            }
            else if(co==0){
                alert("Please Select Country");
                    return false;
            }
            else  if (or == null || or == "") {
                alert("Please enter valid Organistation");
                return false;
            }
            else if (or.length <= 1 && or.length>=40) {
                alert("State name should between 2 to 40 letters");
                return false;
            }
            else if (or.includes("+") || or.includes("*") || or.includes("-") || or.includes("/") || or.includes("!") || or.includes("~") || or.includes("#") || or.includes("$") || or.includes("%") || or.includes("&") || or.includes("^")) {
                alert("Dont use special symbol in your mail");
                return false;
            }
            else if(ki==0){
                alert("Please Select kind");
                    return false;
            }
            else if(pr==0){
                alert("Please Select profile");
                    return false;
            }
            }
        </script>
    </body>
</html>