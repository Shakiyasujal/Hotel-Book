<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHK HOTEL - CONTACT</title>
    <?php require('inc/links.php'); ?>
    <style>
         .custom-bg {
            background-color: green;
        }
        
        .custom-bg:hover {
            background-color: #279e8c;
        }
    </style>
</head>

<body class="bg-light">
    <?php require('inc/header.php');?>

    <div class="my-5 px-4">
        <h2 class ="fw-bold h-font text-center">CONTACT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
             Eius accusamus corporis commodi!<br> Reprehenderit, 
             impedit vitae nemo libero dignissimos ea sapiente?
        </p>
    </div>
    

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px4">

                <div class="bg-white rounded shadoow p-4">
                    <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.522068075706!2d85.320814!3d27.670254850000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19ce1dace9ed%3A0xfb9c8b305818fb7d!2sKumaripati%2C%20Lalitpur!5e0!3m2!1sen!2snp!4v1707825267312!5m2!1sen!2snp"loading="lazy"></iframe>
                    
                        <h5>Address</h5>
                    <a href="https://maps.app.goo.gl/67HabtYtRpxGNihz5" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
                        <i class="bi bi-geo-alt-fill"></i> XYZ, Kumaripati, Lalitpur
                    </a>
                    
                    <h5 class="mt-4">Call us</h5>
                    <a href="tel: 9843807380" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> 9843807380
                    </a>
                    <br>
                    <a href="tel: 9843807380" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> 9843807380
                    </a>

                    <h5 class="mt-4">Email</h5>
                    <a href="mailto: sujalshakya02@gmail.com"class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-envelope-fill"></i> sujalshakya02@gmail.com
                    </a><br>
                    <a href="mailto: sujalshakya7@gmail.com"class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-envelope-fill"></i> sujalshakya7@gmail.com
                    </a>
                    
                    <h5 class="mt-4">Follow us</h5>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-twitter-x me-1"></i>
                    </a>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-facebook me-1"></i>
                    </a>
                    <a href="#" class="d-inline-block text-dark fs-5">
                        <i class="bi bi-instagram me-1"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 px4">
                <div class="bg-white rounded shadoow p-4">
                  <form>
                    <h5>Send a message</h5>
                    <div class="mt-3">
                        <label class="form-label" style="font-weight: 500;">Name</label>
                        <input type="text" class="form-control shadow-none">
                    </div>
                    <div class="mt-3">
                        <label class="form-label" style="font-weight: 500;">Email</label>
                        <input type="email" class="form-control shadow-none">
                    </div>
                    <div class="mt-3">
                        <label class="form-label" style="font-weight: 500;">Subject</label>
                        <input type="text" class="form-control shadow-none">
                    </div>
                    <div class="mt-3">
                        <label class="form-label" style="font-weight: 500;">Message</label>
                        <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
                    </div><br>
                    <button type="submit" class="btn text-white shadow-none custom-bg">SEND</button>
                  </form>
                </div>
            </div>
        </div>
    </div>

 
    <?php require('inc/footer.php');?>

   


</body>

</html>