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
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Login</title>
</head>
<body>
    <section class="form mb-5 mt-5" >
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
    </section>



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












<h1>EXEMPLE TAILERWIND</h1>

<section class="pl-10 pr-10 flex items-start space-x-40">

    <div class="zone_form bg-grey p-10  rounded  shadow w-1/4 border-blue-800">
        <h2 class="text-2xl  font-bold mb-10 text-purple-800">CREATE YOUR ACCOUNT</h2>
        <form action="" method="">
            <div class="mb-3">
                <label class="block mb-2 font-bold text-gray-800" for="Fname">FIRST NAME</label>
                <input class="w-full  border-2 border-gray-400 pb-2 pt-2 pl-5 rounded outline-none focus:border-blue-400" name="Fname" type="text">
            </div>
            <div class="mb-3">
                <label class="block mb-2 font-bold text-gray-800" for="Fname">LAST NAME</label>
                <input class="w-full  border-2 border-gray-400 pb-2 pt-2 pl-5 rounded outline-none focus:border-blue-400" name="Fname" type="text">
            </div> 
           <div class="mb-3">
                <label class="block mb-2 font-bold text-gray-800" for="Fname">PHONE NUMBER</label>
                <div class="flex items-center">
                <select  id="number" class="border-2 border-gray-400 pb-2 pt-2 pl-2 rounded outline-none focus:border-blue-400  w-1/3">
                    <option value="+212">+212</option>
                    <option value="+33">+33</option>
                    <option value="+88">+88</option>
                    <option value="+66">+66</option>
                </select>
                <input class="w-full  border-2 border-gray-400 pb-2 pt-2 pl-5 rounded outline-none focus:border-blue-400" name="Fname" type="text">
                </div>
            </div> 
           <div class="mb-3">
                <label class="block mb-2 font-bold text-gray-800" for="Fname">EMAIL</label>
                <input class="w-full  border-2 border-gray-400 pb-2 pt-2 pl-5 rounded outline-none focus:border-blue-400" name="Fname" type="text">
            </div>
            <div class="mb-3">
                <label class="block mb-2 font-bold text-gray-800" for="Fname">PASSWORD</label>
                <input class="w-full  border-2 border-gray-400 pb-2 pt-2 pl-5 rounded outline-none focus:border-blue-400" name="Fname" type="text">
            </div>
            <div class=" mb-3 flex items-center">
                <input type="checkbox" id="agree">
                <label for="agree" class="ml-2 text-gray-800 text-sm">I agree with all rules</label>

            </div>
            <button class="btn w-full bg-purple-600 py-4 rounded text-white font-semibold  hover:bg-white hover:text-purple-800  ">Sign up</button>
            
        </form>

    </div>

    <div class="zone_form bg-grey p-10  rounded  shadow w-1/4 border-blue-800">
        <h2 class="text-2xl  font-bold mb-10 text-purple-800">LOGIN</h2>
        <form action="" method="">
           <div class="mb-3">
                <label class="block mb-2 font-bold text-gray-800" for="Fname">EMAIL</label>
                <input class="w-full  border-2 border-gray-400 pb-2 pt-2 pl-5 rounded outline-none focus:border-blue-400" name="Fname" type="text">
            </div>
            <div class="mb-3">
                <label class="block mb-2 font-bold text-gray-800" for="Fname">PASSWORD</label>
                <input class="w-full  border-2 border-gray-400 pb-2 pt-2 pl-5 rounded outline-none focus:border-blue-400" name="Fname" type="text">
            </div>
            <button class="btn w-full bg-purple-600 py-4 rounded text-white font-semibold  hover:bg-white hover:text-purple-800  ">Login</button>
            
        </form>

    </div>

    <div class="zone_form bg-grey p-10  rounded  shadow w-1/4 border-blue-800">
        <h2 class="text-2xl  font-bold mb-10 text-purple-800">CONTACT US</h2>
        <form action="" method="">
            <div class="mb-3">
                <label class="block mb-2 font-bold text-gray-800" for="Fname">NAME</label>
                <input class="w-full  border-2 border-gray-400 pb-2 pt-2 pl-5 rounded outline-none focus:border-blue-400" name="Fname" type="text">
            </div> 
           <div class="mb-3">
                <label class="block mb-2 font-bold text-gray-800" for="Fname">EMAIL</label>
                <input class="w-full  border-2 border-gray-400 pb-2 pt-2 pl-5 rounded outline-none focus:border-blue-400" name="Fname" type="text">
            </div>
            <div class="mb-3">
                <label class="block mb-2 font-bold text-gray-800" for="Fname">SUBJECT</label>
                <input class="w-full  border-2 border-gray-400 pb-2 pt-2 pl-5 rounded outline-none focus:border-blue-400" name="Fname" type="text">
            </div> 
            <div class="mb-3">
                <label class="block mb-2 font-bold text-gray-800" for="Fname">MESSAGE</label>
                <textarea class="w-full  h-50 border-2 border-gray-400 pb-2 pt-2 pl-5 rounded outline-none focus:border-blue-400" name="Fname" type="text"></textarea>
                <!-- <input class="w-full  border-2 border-gray-400 pb-2 pt-2 pl-5 rounded outline-none focus:border-blue-400" name="Fname" type="text"> -->
            </div> 
            <button class="btn w-full bg-purple-600 py-4 rounded text-white font-semibold  hover:bg-white hover:text-purple-800  ">Sign up</button>
            
        </form>

    </div>

</section>

<script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>