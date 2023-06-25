<?php
/* Template Name: Contact Us */
get_header(); ?>
<div class="flex flex-col items-center justify-center w-full h-full" id="primary">

    <h3 class="text-4xl text-center w-full h-full capitalize font-bold mt-4 py-8"><?php the_title() ?></h3>

    <div class="flex flex-col md:flex-row items-start justify-center px-12 md:px-36 w-full md:space-x-24">

        <div class="w-full md:w-9/12 h-full" id="content" role="main">
            <font color="#FF0000">
                <?php
                if (isset($_POST['submit'])) {
                    $flag = 1;
                    if ($_POST['yourname'] == '') {
                        $flag = 0;
                        echo "Please Enter Your Name<br>";
                    } else if (!preg_match('/[a-zA-Z_x7f-xff][a-zA-Z0-9_x7f-xff]*/', $_POST['yourname'])) {
                        $flag = 0;
                        echo "Please Enter Valid Name<br>";
                    }
                    if ($_POST['email'] == '') {
                        $flag = 0;
                        echo "Please Enter E-mail<br>";
                    } else if (!eregi("^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,3})$", $_POST['email'])) {
                        $flag = 0;
                        echo "Please Enter Valid E-Mail<br>";
                    }
                    if ($_POST['subject'] == '') {
                        $flag = 0;
                        echo "Please Enter Subject<br>";
                    }
                    if ($_POST['message'] == '') {
                        $flag = 0;
                        echo "Please Enter Message";
                    }
                    if (empty($_POST)) {
                        print 'Sorry, your nonce did not verify.';
                        exit;
                    } else {
                        if ($flag == 1) {
                            wp_mail(get_option("admin_email"), trim($_POST[yourname]) . " sent you a message from " . get_option("blogname"), stripslashes(trim($_POST[message])), "From: " . trim($_POST[yourname]) . " <" . trim($_POST[email]) . ">rnReply-To:" . trim($_POST[email]));
                            echo "Mail Successfully Sent";
                        }
                    }
                }
                ?>
            </font>
            <form class="flex flex-col items-start justify-center w-full h-full mt-6 space-y-4 border rounded px-6 py-4 border-white bg-slate-900" method="post" id="contactus_form">
                <div class="flex flex-col items-start justify-center space-y-2 w-full">
                    <label class="text-left text-lg text-white" for="name">
                        Your Name:
                    </label>
                    <input class="w-full h-12" type="text" name="name" id="name" rows="1" value="" />
                </div>

                <div class="flex flex-col items-start justify-center space-y-2 w-full">
                    <label class="text-left text-lg text-white" for="email">
                        Your Email:
                    </label>
                    <input class="w-full h-12" type="text" name="email" id="email" rows="1" value="" />
                </div>

                <div class="flex flex-col items-start justify-center space-y-2 w-full">
                    <label class="text-left text-lg text-white" for="subject">
                        Subject:
                    </label>
                    <input class="w-full h-12" type="text" name="subject" id="subject" rows="1" value="" />
                </div>


                <div class="flex flex-col items-start justify-center space-y-2 w-full">
                    <label class="text-left text-lg text-white" for="message">
                        Leave a Message:
                    </label>
                    <textarea class="w-full h-24" name="message" id="message"></textarea>
                </div>

                <button id="submit" for="contactus_form" class="flex flex-row items-center justify-center border border-white rounded px-3 py-2 hover:bg-slate-700 hover:text-black transition-all duration-150 ease-in-out cursor-pointer" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                        <path d="M133.9 232L65.8 95.9 383.4 232H133.9zm0 48H383.4L65.8 416.1l68-136.1zM44.6 34.6C32.3 29.3 17.9 32.3 8.7 42S-2.6 66.3 3.4 78.3L92.2 256 3.4 433.7c-6 12-3.9 26.5 5.3 36.3s23.5 12.7 35.9 7.5l448-192c11.8-5 19.4-16.6 19.4-29.4s-7.6-24.4-19.4-29.4l-448-192z" fill="#fff" />
                    </svg>

                    <p class="text-white text-lg font-bold ml-2">
                        Send
                    </p>
                </button>

            </form>
        </div><!-- #content -->

        <div class="flex flex-col items-start justify-center py-12 space-y-2 w-full">
            <p class="text-white text-2xl font-semibold mb-1">
                Vincent Olivieri
            </p>

            <div class="flex flex-row items-center">
                <i class="fa-solid fa-phone text-white text-[20px] mr-1"></i>
                <p class="text-white">
                    917.569.7905
                </p>
            </div>

            <div class="flex flex-row items-center">
                <i class="fa-sharp fa-solid fa-envelope text-white text-[20px] mr-1"></i>
                <a href="mailto:vrojr.design@gmail.com" target="_blank" class="text-white underline">
                    vrojr.design@gmail.com
                </a>
            </div>

            <div class="flex flex-row items-center space-x-2">
                <a href="https://www.facebook.com/vrojr" target="_blank">
                    <i class="fa-brands fa-square-facebook text-white text-2xl"></i>
                </a>
            </div>
        </div>
    </div>

</div><!-- #primary -->
<?php get_footer(); ?>