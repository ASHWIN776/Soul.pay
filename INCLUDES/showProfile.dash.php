<?php
    session_start();
    $userid= $_SESSION["user_id"];
    require_once('dbconfig.inc.php');

    $sql = "select * from users where user_id = \"$userid\";";
    $result=mysqli_query($conn,$sql);
    $resultnum = mysqli_num_rows($result);

    if($resultnum){
        $row=mysqli_fetch_assoc($result);
        $s = $row["user_creation"];
        $dt = new DateTime($s);
        $date = $dt->format('d/m/Y');
        echo "<div class=\"profile\">
                    <div class=\"profile personal\">
                    <div class=\"section-title\">
                        <div class=\"title-text\">Personal</div>
                    </div>
                    <div class=\"gradient-border\">
                        <div class=\"avatar-wrapper\">
                        <span>".$row["user_firstname"][0]." ".$row["user_lastname"][0]."</span>
                        </div>
                    </div>
                    <div class=\"text-fields personal-text\">
                        <div class=\"field\">
                            <span class=\"field-title\">Name:
                            <span class=\"field-value\">".$row["user_firstname"]." ".$row["user_lastname"]."</span>
                        </div>
                        <div class=\"field\">
                            <span class=\"field-title\">DOB:</span>
                            <span class=\"field-value\">".$row["user_dob"]."</span>
                        </div>
                        <div class=\"field\">
                            <span class=\"field-title\">Aadhar:</span>
                            <span class=\"field-value\">".$row["user_aadharno"]."</span>
                        </div>
                        <div class=\"field\">
                            <span class=\"field-title\">Customer Since:</span>
                            <span class=\"field-value\">".$date."</span>
                        </div>
                        <div class=\"field last-field\">
                            <span class=\"field-title\">Account Number:</span>
                            <span class=\"field-value\">".$row["user_accountno"]."</span>
                        </div>
                    </div>
                </div>
                <div class=\"profile non-personal\">
                    <section class=\"profile contact\">
                        <div class=\"section-title\">
                            <div class=\"title-text\">Contact</div>
                        </div>
                        <i class=\"fas fa-phone-square-alt\"></i>
                        <div class=\"text-fields contact-text\">
                            <div class=\"position-middle\">
                                <div class=\"field\">
                                    <span class=\"field-title\">Phone</span> <br>
                                    <span class=\"field-value\">".$row["user_phone"]."</span>
                                </div>
                                <div class=\"field last-field\">
                                    <span class=\"field-title\">Email</span> <br>
                                    <span class=\"field-value\">".$row["user_email"]."</span>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class=\"profile location\">
                        <div class=\"section-title\">
                            <div class=\"title-text\">Location</div>
                        </div>
                        <i class=\"fas fa-map-marked-alt\"></i>
                        <div class=\"text-fields location-text\">
                            <div class=\"position-middle\">
                                <div class=\"field\">
                                    <span class=\"field-title\">House No:</span>
                                    <span class=\"field-value\">45</span>
                                </div>
                                <div class=\"field\">
                                    <span class=\"field-title\">Street:</span>
                                    <span class=\"field-value\">".$row["use_street"]."</span>
                                </div>
                                <div class=\"field\">
                                    <span class=\"field-title\">District:</span>
                                    <span class=\"field-value\">".$row["user_district"]."</span>
                                </div>
                                <div class=\"field\">
                                    <span class=\"field-title\">State:</span>
                                    <span class=\"field-value\">".$row["user_state"]."</span>
                                </div>
                                <div class=\"field\">
                                    <span class=\"field-title\">Country:</span>
                                    <span class=\"field-value\">".$row["user_nationality"]."</span>
                                </div>
                                <div class=\"field last-field\">
                                    <span class=\"field-title\">Pin Code:</span>
                                    <span class=\"field-value\">".$row["user_pincode"]."</span>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>";

    }