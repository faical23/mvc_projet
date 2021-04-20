<?php

    include "../controllerd/inscription.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../node_modules/intl-tel-input/build/css/intlTelInput.css">
    <link rel="stylesheet" href="../node_modules/tailwindcss/dist/tailwind.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Login</title>
</head>
<body class="bg-gray-100">


<!-- fortms -->



<section class="pl-10 pr-10 pt-40 pb-40  grid xl:grid-cols-3 gap-10  lg:grid-cols-2 sm:grid-cols-2 grid-cols-1">

    <div class="zone_form bg-grey p-10 mb-10  rounded  shadow  border-blue-800 bg-white">
        <h2 class="text-2xl  font-bold mb-10 text-purple-800">CREATE YOUR ACCOUNT</h2>
        <form  action="../controllerd/inscription.php" method="POST">
            <div class="mb-3">
                <label class="block mb-2 font-bold text-gray-800" for="Fname">FIRST NAME</label>
                <input class="w-full  border-2 border-gray-400 pb-2 pt-2 pl-5 rounded outline-none focus:border-blue-400" name="FirstName" id="firsttest" type="text">
            </div>
            <div class="mb-3">
                <label class="block mb-2 font-bold text-gray-800" for="Fname">LAST NAME</label>
                <input class="w-full  border-2 border-gray-400 pb-2 pt-2 pl-5 rounded outline-none focus:border-blue-400"name="LastName" type="text">
            </div> 
           <div class="mb-3">
                <label class="block mb-2 font-bold text-gray-800" for="Fname">PHONE NUMBER</label>
                <div class="flex items-center">
                <select  id="number" class="border-2 border-gray-400 pb-2 pt-2 pl-2 rounded outline-none focus:border-blue-400  w-1/3">
                    <option value="+212"  data-thumbnail="http://icons.iconarchive.com/icons/tinylab/android-lollipop-apps/24/Evernote-icon.png">44</option>
                    <option value="+33">+33</option>
                    <option value="+88">+88</option>
                    <option value="+66">+66</option>
                </select>

                
                <input class="w-full  border-2 border-gray-400 pb-2 pt-2 pl-5 rounded outline-none focus:border-blue-400" name="PhoneNumber" type="text">
                </div>
            </div> 
           <div class="mb-3">
                <label class="block mb-2 font-bold text-gray-800" for="Fname">EMAIL</label>
                <input class="w-full  border-2 border-gray-400 pb-2 pt-2 pl-5 rounded outline-none focus:border-blue-400" name="Email" type="text">
            </div>
            <div class="mb-3">
                <label class="block mb-2 font-bold text-gray-800" for="Fname">PASSWORD</label>
                <input class="w-full  border-2 border-gray-400 pb-2 pt-2 pl-5 rounded outline-none focus:border-blue-400" name="Password" type="text">
            </div>
            <div class=" mb-3 flex items-center">
                <input type="checkbox" id="agree">
                <label for="agree" class="ml-2 text-gray-800 text-sm">I agree with all rules</label>

            </div>
            <button class="btn w-full bg-purple-600 py-4 rounded text-white font-semibold  hover:bg-white hover:text-purple-800  " name="btn_inscri">Sign up</button>
            
        </form>

    </div>

    <div class="zone_form bg-grey p-10 mb-10  rounded  shadow  border-blue-800 bg-white">
        <h2 class="text-2xl  font-bold mb-10 text-purple-800">LOGIN</h2>
        <form  action="../controllerd/inscription.php" method="POST">
           <div class="mb-3">
                <label class="block mb-2 font-bold text-gray-800" for="Fname">EMAIL</label>
                <input class="w-full  border-2 border-gray-400 pb-2 pt-2 pl-5 rounded outline-none focus:border-blue-400" name="Email" type="text">
            </div>
            <div class="mb-3">
                <label class="block mb-2 font-bold text-gray-800" for="Fname">PASSWORD</label>
                <input class="w-full  border-2 border-gray-400 pb-2 pt-2 pl-5 rounded outline-none focus:border-blue-400" name="Password" type="text">
            </div>
            <div class=" mb-3 flex items-center">
                <input type="checkbox" id="agree">
                <label for="agree" class="ml-2 text-gray-800 text-sm" >Remember me</label>

            </div>
            <button class="mb-3 btn w-full bg-purple-600 py-4 rounded text-white font-semibold  hover:bg-white hover:text-purple-800  "  name="btn_login">Login</button>
            <div class=" mb-3 block">
                <label for="agree" class="text-gray-800 text-sm hover:text-purple-800 "><a href="#">Forgot Password?</a></label>
            </div>
            <div class=" mb-3 block ">
                <label for="agree" class="text-gray-800 text-sm text-center rounded text-white font-semibold 	"><h2>OR</h2></label>
            </div>
            <div class="login_with mb-3  flex items-center  w-full   rounded  ">
         
<!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="Layer_1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512; width:60px ; padding:8px" xml:space="preserve">
<path style="fill:#FBBB00;" d="M113.47,309.408L95.648,375.94l-65.139,1.378C11.042,341.211,0,299.9,0,256
	c0-42.451,10.324-82.483,28.624-117.732h0.014l57.992,10.632l25.404,57.644c-5.317,15.501-8.215,32.141-8.215,49.456
	C103.821,274.792,107.225,292.797,113.47,309.408z"/>
<path style="fill:#518EF8;" d="M507.527,208.176C510.467,223.662,512,239.655,512,256c0,18.328-1.927,36.206-5.598,53.451
	c-12.462,58.683-45.025,109.925-90.134,146.187l-0.014-0.014l-73.044-3.727l-10.338-64.535
	c29.932-17.554,53.324-45.025,65.646-77.911h-136.89V208.176h138.887L507.527,208.176L507.527,208.176z"/>
<path style="fill:#28B446;" d="M416.253,455.624l0.014,0.014C372.396,490.901,316.666,512,256,512
	c-97.491,0-182.252-54.491-225.491-134.681l82.961-67.91c21.619,57.698,77.278,98.771,142.53,98.771
	c28.047,0,54.323-7.582,76.87-20.818L416.253,455.624z"/>
<path style="fill:#F14336;" d="M419.404,58.936l-82.933,67.896c-23.335-14.586-50.919-23.012-80.471-23.012
	c-66.729,0-123.429,42.957-143.965,102.724l-83.397-68.276h-0.014C71.23,56.123,157.06,0,256,0
	C318.115,0,375.068,22.126,419.404,58.936z"/>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
<label class="text-purple-800 font-bold  " style="padding-left:25%;"><a href="#">Login with Google</a></label>


            </div>
            <div class="login_with mb-3  flex items-center  rounded  ">
                <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                <svg enable-background="new 0 0 24 24"  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style=" width:60px ; padding:8px"><path d="m15.997 3.985h2.191v-3.816c-.378-.052-1.678-.169-3.192-.169-6.932 0-5.046 7.85-5.322 9h-3.487v4.266h3.486v10.734h4.274v-10.733h3.345l.531-4.266h-3.877c.188-2.824-.761-5.016 2.051-5.016z" fill="#3b5999"/></svg>
                <label class="text-purple-800 font-bold  " style="padding-left:25%;"><a href="#">Login with Facebook</a></label>
        </div>
        </form>

    </div>

    <div class="zone_form bg-grey p-10 mb-10  rounded  shadow  border-blue-800 bg-white">
        <h2 class="text-2xl  font-bold mb-10 text-purple-800">CONTACT US</h2>
        <form action="../controllerd/inscription.php" method="POST">
            <div class="mb-3">
                <label class="block mb-2 font-bold text-gray-800" for="Fname">NAME</label>
                <input class="w-full  border-2 border-gray-400 pb-2 pt-2 pl-5 rounded outline-none focus:border-blue-400" name="Name" type="text">
            </div> 
           <div class="mb-3">
                <label class="block mb-2 font-bold text-gray-800" for="Fname">EMAIL</label>
                <input class="w-full  border-2 border-gray-400 pb-2 pt-2 pl-5 rounded outline-none focus:border-blue-400" name="Email" type="text">
            </div>
            <div class="mb-3">
                <label class="block mb-2 font-bold text-gray-800" for="Fname">SUBJECT</label>
                <input class="w-full  border-2 border-gray-400 pb-2 pt-2 pl-5 rounded outline-none focus:border-blue-400" name="Subject" type="text">
            </div> 
            <div class="mb-3">
                <label class="block mb-2 font-bold text-gray-800" for="Fname">MESSAGE</label>
                <textarea class="w-full  h-50 border-2 border-gray-400 pb-2 pt-2 pl-5 rounded outline-none focus:border-blue-400" name="Messsage" type="text"></textarea>
                <!-- <input class="w-full  border-2 border-gray-400 pb-2 pt-2 pl-5 rounded outline-none focus:border-blue-400" name="Fname" type="text"> -->
            </div> 
            <button class="btn w-full bg-purple-600 py-4 rounded text-white font-semibold  hover:bg-white hover:text-purple-800  " name="btn_contact_us">Sign up</button>
            
        </form>

    </div>

</section>








<section class=" py-20 " style="text-align: -webkit-center">

<h1 class="py-10 text-5xl text-purple-800 font-bold ">DASHBOARD</h1>

<table class="border-collapse ... text-center overflow-hidden">
    <tr class="header-table text-1xl text-white font-regular bg-purple-800 ">
             <th class="w-1/1 ...   ... pt-5 pb-5 pl-10 pr-10">Ar</th>
            <th class="w-1/1 ...   ... pt-5 pb-5 pl-10 pr-10">Last name</th>
            <th class="w-1/1 ...   ... pt-5 pb-5 pl-10 pr-10">First name</th>
            <th class="w-1/1 ...   ... pt-5 pb-5 pl-10 pr-10">Number Phone</th>
            <th class="w-1/1 ...   ... pt-5 pb-5 pl-10 pr-10">Email</th>
            <th class="w-1/1 ...   ... pt-5 pb-5 pl-10 pr-10">Password</th>
            <th class="w-1/1 ...   ... pt-5 pb-5 pl-10 pr-10">Action</th>
    </tr >
    <?php
        $execution = new CRUD("inscription_user");
        $res = $execution->select();
        $i=1;
            foreach($res as $element)
            {
    ?>
    <tr class="body-table text-base text-purple-800 font-regular">
            <td class="w-1/1 ...  ... pt-5 pb-5 pl-10 pr-10 r "> <?php echo $element["id"] ;?></td>
            <td class="w-1/1 ...  ... pt-5 pb-5 pl-10 pr-10 r "><?php echo $element["FirstName"] ;?></td>
            <td class="w-1/1 ...  ... pt-5 pb-5 pl-10 pr-10 r "><?php echo $element["LastName"] ;?></td>
            <td class="w-1/1 ...  ... pt-5 pb-5 pl-10 pr-10 r "> <?php echo $element["PhoneNumber"] ;?></td>
            <td class="w-1/1 ...  ... pt-5 pb-5 pl-10 pr-10 r "><?php echo $element["Email"] ;?></td>
            <td class="w-1/1 ...  ... pt-5 pb-5 pl-10 pr-10 r "><?php echo $element["password"] ;?></td>
            <td class="w-1/1 ...  ... pt-5 pb-5 pl-10 pr-10 r ">
            <div class="flex items-center space-x-20 ">
                <a class="cursor-pointer update_icon" ><svg  xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="40px" viewBox="0 0 24 24" width="40px" fill="#5b21b6"><g><rect fill="none" height="24" width="24"/></g><g><g><g><path d="M3,21l3.75,0L17.81,9.94l-3.75-3.75L3,17.25L3,21z M5,18.08l9.06-9.06l0.92,0.92L5.92,19L5,19L5,18.08z"/></g><g><path d="M18.37,3.29c-0.39-0.39-1.02-0.39-1.41,0l-1.83,1.83l3.75,3.75l1.83-1.83c0.39-0.39,0.39-1.02,0-1.41L18.37,3.29z"/></g></g></g></svg></a>
                <a   class="cursor-pointer	" onclick=" delete_popup(<?php echo $element['id']?>)"><svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 0 24 24" width="40px" fill="#5b21b6"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16 9v10H8V9h8m-1.5-6h-5l-1 1H5v2h14V4h-3.5l-1-1zM18 7H6v12c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7z"/></svg></a>
            </div>
            

    </tr>
    <?php
    $i++;
    }
    ?>

</table>


</section>









<script src="../node_modules//jquery/dist/jquery.min.js"></script>
<script src="../node_modules/intl-tel-input/build/js/intlTelInput.js"></script>
<script src="../node_modules/sweetalert/dist/sweetalert.min.js"></script>








<div class="zone_form update_form bg-white p-10 mb-10  rounded  shadow-2xl	 border-blue-800  w-1/3 fixed top-1 left-1/3 hidden	 ">
        <h2 class="text-2xl  font-bold mb-10 text-purple-800">UPDATE INFORMATIONS</h2>
        <form  action="../controllerd/inscription.php" method="POST">
        <div class="mb-3 hidden">
                <label class="block mb-2 font-bold text-gray-800" for="Fname">ID</label>
                <input class="w-full  border-2 border-gray-400 pb-2 pt-2 pl-5 rounded outline-none focus:border-blue-400" name="id" id="id" type="text">
            </div>
            <div class="mb-3">
                <label class="block mb-2 font-bold text-gray-800" for="Fname">FIRST NAME</label>
                <input class="w-full  border-2 border-gray-400 pb-2 pt-2 pl-5 rounded outline-none focus:border-blue-400" name="FirstName" id="FirstName" type="text">
            </div>
            <div class="mb-3">
                <label class="block mb-2 font-bold text-gray-800" for="Fname">LAST NAME</label>
                <input class="w-full  border-2 border-gray-400 pb-2 pt-2 pl-5 rounded outline-none focus:border-blue-400"name="LastName" id="LastName"  type="text">
            </div> 
           <div class="mb-3">
                <label class="block mb-2 font-bold text-gray-800" for="Fname">PHONE NUMBER</label>
                <div class="flex items-center">
                <select  id="number" class="border-2 border-gray-400 pb-2 pt-2 pl-2 rounded outline-none focus:border-blue-400  w-1/3">
                    <option value="+212"  data-thumbnail="http://icons.iconarchive.com/icons/tinylab/android-lollipop-apps/24/Evernote-icon.png">44</option>
                    <option value="+33">+33</option>
                    <option value="+88">+88</option>
                    <option value="+66">+66</option>
                </select>

                
                <input class="w-full  border-2 border-gray-400 pb-2 pt-2 pl-5 rounded outline-none focus:border-blue-400" name="PhoneNumber" id="PhoneNumber" type="text">
                </div>
            </div> 
           <div class="mb-3">
                <label class="block mb-2 font-bold text-gray-800" for="Fname">EMAIL</label>
                <input class="w-full  border-2 border-gray-400 pb-2 pt-2 pl-5 rounded outline-none focus:border-blue-400" name="Email" id="Email" type="text">
            </div>
            <div class="mb-3">
                <label class="block mb-2 font-bold text-gray-800" for="Fname">PASSWORD</label>
                <input class="w-full  border-2 border-gray-400 pb-2 pt-2 pl-5 rounded outline-none focus:border-blue-400" name="Password"  id ="password" type="text">
            </div>
            <button class="btn w-full bg-purple-600 py-4 mb-10 rounded text-white font-semibold  hover:bg-white hover:text-purple-800  " type="submit" name="btn_update">UPDATE</button>
            <a class="back-btn w-full cursor-pointer bg-black py-4 px-64 mt-10  rounded text-white font-semibold  hover:bg-white hover:text-purple-800  "  >BACK</a>
        </form>

    </div>










<script src="../assets/js/main.js"></script>

<script>
    var tbl = document.querySelector("table");
    for(var i = 1 ; i < tbl.rows.length; i++){

        tbl.rows[i].onclick = function (){
                $(".update_form").show(300);
                document.querySelector("#id").value = this.cells[0].innerHTML
                document.querySelector("#FirstName").value = this.cells[1].innerHTML
                document.querySelector("#LastName").value = this.cells[2].innerHTML
                document.querySelector("#PhoneNumber").value = this.cells[3].innerHTML
                document.querySelector("#Email").value = this.cells[4].innerHTML
                document.querySelector("#password").value = this.cells[5].innerHTML 
         }  


        // tbl.rows[i].cells[6].onclick = function () {
        //     console.log(tbl.rows[i].cells[3].innerHTML);
        // }

    }

</script>

<?php
if(isset($_SESSION["send_message"])){
?>
    <script>
        success("Message has been sent ");
    </script>

<?Php
  unset($_SESSION["send_message"]);
}
?>
<?php
if(isset($_SESSION["login"])){
?>
    <script>  
      success("Welcome in Ur account ");    
    </script>

<?Php
  unset($_SESSION["login"]);
}
?>
<?php
if(isset($_SESSION["inscription"])){
?>
    <script>
        success("Success Inscription");
    </script>

<?Php
  unset($_SESSION["inscription"]);
}
?>
<?php
if(isset($_SESSION['email_exist'])){
?>
    <script>    
        error("Email existing")
    </script>

<?Php
  unset($_SESSION["email_exist"]);
}
?>
<?php
if(isset($_SESSION['email_password_wrong'])){
?>
    <script>
        error("Email or password Wrong")
    </script>

<?Php
  unset($_SESSION["email_password_wrong"]);
}
?>
<?php
if(isset($_SESSION['regix_not_valide'])){
?>
    <script>
            error("error in some field please check")
    </script>

<?Php
  unset($_SESSION['regix_not_valide']);
}
?>
<?php
if(isset($_SESSION["Success update"])){
?>
    <script>
        success("Success Update");
    </script>

<?Php
  unset($_SESSION["Success update"]);
}
?>
</body>
</html>