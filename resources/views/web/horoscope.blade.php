@extends('layouts.web')

@section('headerScript')

@endsection
@section('content')


<!--Breadcrumb start-->
<div class="ast_pagetitle">
    <div class="ast_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="page_title">
                        <h2>Know Your Horoscope</h2>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!--Breadcrumb end-->
    <!--About Us Start-->
    <div class="ast_journal_wrapper ast_toppadder70 ast_bottompadder70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="ast_journal_info">
                        <h3>There Shall Be Signs In The Sun, The Moon, And The Stars</h3>
                        
                        
                    </div>
                </div>
                
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="ast_journal_box_wrapper">
                    <?php
                                
                                if(isset($_POST['submit'])) {
                                    
                                    
                                    
    $to = 'reshma@affinityopus.com';
    $subject = 'Contact Form';
    $from =  $_POST['contact-email'];
     
    // To send HTML mail, the Content-type header must be set
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
     
    // Create email headers
    $headers .= 'From: eWorship'. "\r\n".
        'Reply-To: '.$from."\r\n" .
        'X-Mailer: PHP/' . phpversion();
     
    // Compose a simple HTML email message
    $message = '<html><body>';
    $message .= '<h1 style="color:#f40;">Hi Admin!</h1>';
    $message .= '<p style="color:#080;font-size:18px;">Name : '.$_POST['name'].'</p>';
    $message .= '<p style="color:#080;font-size:18px;">Gender : '.$_POST['gender'].'</p>';
    $message .= '<p style="color:#080;font-size:18px;">Email : '.$_POST['email'].'</p>';
    $message .= '<p style="color:#080;font-size:18px;">Phone : '.$_POST['phone'].'</p>';
    $message .= '<p style="color:#080;font-size:18px;">Email : '.$_POST['email'].'</p>';
    $message .= '<p style="color:#080;font-size:18px;">Address : '.$_POST['address'].'</p>';
    $message .= '<p style="color:#080;font-size:18px;">DOB : '.$_POST['dob'].'</p>';
    $message .= '<p style="color:#080;font-size:18px;">Time of Birth : '.$_POST['time_birth'].'</p>';
    $message .= '<p style="color:#080;font-size:18px;">Place of Birth : '.$_POST['birth_place'].'</p>';
    $message .= '<p style="color:#080;font-size:18px;">Birth Star : '.$_POST['birthstar'].'</p>';
    $message .= '<p style="color:#080;font-size:18px;">Aadhar : '.$_POST['aadhar'].'</p>';
    $message .= '<p style="color:#080;font-size:18px;">Message : '.$_POST['message'].'</p>';
    $message .= '</body></html>';
     
    // Sending email
    if(mail($to, $subject, $message, $headers)){
        echo '<p class="success" id="submit" style="color:black;" >  Your mail has been sent successfully.</p>';
    } else{
        echo '<p class="error" id="error" style="color:red;">Unable to send email. Please try again.</p>';
    }
    
                                }
    ?>
                         <form method="post" action="">
                            
                            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                <label>name</label>
                                <input type="text" id="name" type="text" name="name" Placeholder="Name" data-constraints="@Required"  required>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                                <label>gender</label>
                                <select name="gender" id="gender">
                                <option value="">Select Gender </option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>email</label>
                                <input id="email" type="email" name="email" placeholder="Email" data-constraints="@Email @Required"  required>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>mobile nmber</label>
                                <input type="phone" id="phone" name="phone" placeholder="Contact Number" data-constraints="@Number @Required"  required>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <label>Address</label>
                                <textarea placeholder="Full Address" rows="2" id="address" name="address"  data-constraints="@Address @Required"  required></textarea>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <label>Date of Birth</label>
                                <input type="date" placeholder="Date of Birth" id="dob" name="dob"  data-constraints="@dob @Required"  required>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <label>time of Birth</label>
                                <input type="time" placeholder="Time of Birth" id="time_birth" name="time_birth"  data-constraints="@Time @Required"  required>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <label>place of Birth</label>
                                <input type="text" placeholder="Place of Birth" id="birth_place" name="birth_place"  data-constraints="@Place @Required"  required>
                            </div>
                            
                            
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Birth Star</label>
                                <select name="birthstar" id="birthstar">
                                <option value="">Select Birth Star</option>
                                    <option value="Ashwini">Ashwini</option>
                                    <option value="Bharani">Bharani</option>
                                    <option value="Krittika">Krittika</option>
                                    <option value="Rohini">Rohini</option>
                                    <option value="Mrighasira">Mrighasira</option>
                                    <option value="Ardra">Ardra</option>
                                    <option value="Punarvasu">Punarvasu</option>
                                    <option value="Pushya">Pushya</option>
                                    <option value="Ashlesha">Ashlesha</option>
                                    <option value="Magha">Magha</option>
                                    <option value="Purva Phalguni">Purva Phalguni,</option>
                                    <option value="Uttara Phalguni">Uttara Phalguni</option>
                                    <option value="Hasta">Hasta</option>
                                    <option value="Chitra">Chitra</option>
                                    <option value="Swati">Swati</option>
                                    <option value="Vishaka">Vishaka</option>
                                    <option value="Anuradha">Anuradha</option>
                                    <option value="Jyestha">Jyestha</option>
                                    <option value="Moola">Moola</option>
                                    <option value="Purvashada">Purvashada</option>
                                    <option value="Sharavan">Sharavan</option>
                                    <option value="Dhanishta">Dhanishta</option>
                                    <option value="Shatabisha">Shatabisha</option>
                                    <option value="Purvabhadra">Purvabhadra</option>
                                    <option value="Uttarabhadra">Uttarabhadra</option>
                                    <option value="Revati">Revati</option>
                                </select>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <label>Aadhar card / ID</label>
                                <input type="text" placeholder="Aadhar Number" id="aadhar" name="aadhar"  data-constraints="@Aadhar @Required"  required>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <label>Remarks</label>
                                <textarea placeholder="Message" rows="2" id="message" name="message" data-constraints="@Required" required></textarea>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <button type="button" class="ast_btn pull-right" id="submit" type="submit" name="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection