<?php
    include "../controllerd/inscription.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="../node_modules/tailwindcss/dist/tailwind.min.css">
    <link rel="stylesheet" href="../node_modules/intl-tel-input/build/css/intlTelInput.css">
    <link rel="stylesheet" href="../node_modules/intl-tel-input/build/css/demo.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Login</title>
</head>
<body>
    <!-- <section class="form mb-5 mt-5" >
        <h1>INSCRIPTION</h1>
        <form action="../controllerd/inscription.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">First Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="FirstName">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="LastName">
            </div>
            <select  id="cars">
                <option value="+212">maroc (+212)</option>
                <option value="+33">france (+33)</option>
                <option value="+88">spain(+88)</option>
                <option value="+66">italy (+66)</option>
            </select>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Number Phone</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="PhoneNumber">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email </label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Email">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="Password">
            </div>
            

                <button type="submit" class="btn btn-primary" name="btn_inscri">Submit</button>
        </form>
    </section>
    <section class="form mb-5 mt-5">
        <h1>CONTACT US</h1>
        <form action="../controllerd/inscription.php" method="POST">
        <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Name">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email </label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Email">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Subject</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="Subject">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Message</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="Messsage">
            </div>
            

                <button type="submit" class="btn btn-primary" name="btn_contact_us">Submit</button>
        </form>
    </section>
    <section class="form mb-5 mt-5">
        <h1>LOGIN</h1>
        <form action="../controllerd/inscription.php" method="POST">

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email </label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Email">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Password">
            </div>
                <button type="submit" class="btn btn-primary" name="btn_login">Submit</button>
        </form>
    </section> -->


<!-- fortms -->



<section class="pl-10 pr-10 pt-40 pb-40  grid xl:grid-cols-3 gap-10  lg:grid-cols-2 sm:grid-cols-2 grid-cols-1">

    <div class="zone_form bg-grey p-10 mb-10  rounded  shadow  border-blue-800">
        <h2 class="text-2xl  font-bold mb-10 text-purple-800">CREATE YOUR ACCOUNT</h2>
        <form  action="../controllerd/inscription.php" method="POST">
            <div class="mb-3">
                <label class="block mb-2 font-bold text-gray-800" for="Fname">FIRST NAME</label>
                <input class="w-full  border-2 border-gray-400 pb-2 pt-2 pl-5 rounded outline-none focus:border-blue-400" name="FirstName" type="text">
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

    <div class="zone_form bg-grey p-10 mb-10  rounded  shadow  border-blue-800">
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

    <div class="zone_form bg-grey p-10 mb-10  rounded  shadow  border-blue-800">
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










<!-- dashboard -->

<section class="dashboard">
        <h1>Dashboard</h1>
        <table style="width:100%">
        <tr>
            <th>ar</th>
            <th>Last name</th>
            <th>First name</th>
            <th>Number Phone</th>
            <th>Email</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
    <?php
        $execution = new CRUD("inscription_user");
        $res = $execution->select();
        $i=1;
            foreach($res as $element)
            {
    ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $element["FirstName"] ;?></td>
            <td><?php echo $element["LastName"] ;?></td>
            <td><?php echo $element["PhoneNumber"] ;?></td>
            <td><?php echo $element["Email"] ;?></td>
            <td><?php echo $element["password"] ;?></td>
            <td><a href="#">Update</a> -- <a href="../controllerd/delete.php?id=<?php echo $element["id"]?>">Delete</a></td>
            
        </tr>
    <?php
    $i++;
    }
    ?>
        </table>

    
    </section>



    <h1>International Telephone Input</h1>
    <form>
        <input id="phone" name="phone" type="tel">
        <button type="submit">Submit</button>
    </form>






<!-- <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script> -->
<script src="../node_modules/jquery/dist/jquery.min.js "></script>
<script src="../node_modules/intl-tel-input/build/js/intlTelInput.js"></script>
    <script>
        var input = document.querySelector("#phone");
        window.intlTelInput(input, {
            utilsScript: "build/js/utils.js",
        });
    </script>
<script>
</script>
</body>
</html>