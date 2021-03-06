<?php /* Template Name: Enroll */

if(isset($_POST['token'])) {
    if(!isset($_SESSION['user'])) {
        $_SESSION['user'] = [];
    }
    /*
    $response = getResponse(wp_remote_post("https://mapps.leadway-pensure.com/LeadwayMobileApplicationWebAPI/WebData/ValidateOTP", [
        'headers' => array('Content-Type' => 'application/json; charset=utf-8'),
        'body' => json_encode([
            'email' => array_get($_POST, 'email'),
            'otp' => array_get($_POST, 'token')
        ]),
        'method' => 'POST'
    ]));*/
} else {
    header("Location: /token");
}

?>

<?php get_header(); ?>
<!-- Body and Main Content of page -->
<div class="container-fluid" id="enroll-bg">
    
    <!-- chart header -->
    <?php include_once('partials/chart-header.php') ?>

    <div class="row p-id" id="test">
        <div id="progressMark" class="col-7">
            <span id="progress-text">  </span>
        </div>
        <div class="col-3 offset-2 col-md-3 offset-md-2">
            <div class="row">
                <div class=col-12> Client Name: <span id="a-name"> <?= array_get($_SESSION, 'user_full_name') ?></span></div>
                <div class=col-12> Client Email: <span id="a-name"> <?= array_get($_POST, 'email') ?></span></div>
                <div class=col-12> Token no: <span id="a-token"> <?= array_get($_POST, 'token') ?> </span></div>
            </div>
        </div>
    </div>


   <form class="demo-form" id="enroll-form" data-parsley-validate>
       <input type="hidden" name="formName" value="enroll-form"/>
            <!-- personal information view start -->
            <div class="row p-details" id="pid">
                <div class="col-3 col-sm-1">
                    <div class="col-12 text-center form-no">
                        1
                    </div>

                </div>
                <div class="col-9 col-sm-6 p-det-head" id="pid-head">
                    <h2 class="mOff form-head-main"> Personal Information </h2>
                    <h6 class="form-head-sub" style="font-weight:300"> Provide the information required below </h6>
                </div>

            </div>

            <div class="row p-form" id="pid-form">
                <div class="col-12 field-text">
                    <!-- line 1 start -->
                    <div class="row">
                        <div class= "col-12 col-sm-6 col-md-4 text-center">
 <div class="form-group ">
 <input type=hidden name="firstname" value="<?= array_get($_SESSION['user'], 'firstname') ?>" id='fn'> 
 <input type=hidden name="middlename" value="<?= array_get($_SESSION['user'], 'middlename') ?>" id='mn'> 
 <input type=hidden name="lastname"  value="<?= array_get($_SESSION['user'], 'surname') ?>" id='ln'>
 <input type=hidden name="Email" value="<?= array_get($_POST, 'email') ?>" id='email'> 
                                <label class="field-label"> Title </label>
                                <select name=title type="text" class="form-control col-sm-7 language mx-auto text-center" data-parsley-group="block1" id=p-email placeholder="local government area" style="border: 1px solid white">
<option> Select a title </option> 
<option value="Mr."> Mr </option> 
<option value="Miss."> Miss </option> 
<option value="Mrs."> Mrs </option> 
<option value="Dr."> Dr </option> 
<option value="Engr."> Engr </option>
<option value="Mallam"> Mallam </option> 
<option value="Archbishop"> Archbishop </option> 
</select> 
                            </div>

                        </div>
                        <div class= "col-12 col-sm-6 col-md-4 text-center">

           <div class="form-group">
                                <label class="field-label"> Gender </label>
                                <select name=pidgender class="form-control language col-sm-7 mx-auto" id=gender  style="border: 1px solid white" data-parsley-group="block1" required="">
                                    <option value="" id="default">Select gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
           
                        </div>
                        <div class= "col-12 col-sm-6 col-md-4 text-center">

  <!-- space for middle name --> 
          <div class="form-group ">
                                <label class="field-label"> Mobile No  </label>
                                <input name=pidmobileno type="text" class="form-control col-sm-7 language mx-auto text-center" data-parsley-group="block1" data-parsley-minlength="11" data-parsley-maxlength="15" id='p-mno' placeholder="Mobile No" style="border: 1px solid white">
           </div>

                           
                        </div>

                        <!--end of line 1 -->

                        <!-- line 2 start -->

                        <div class= "form-group col-12 col-sm-6 col-md-4 text-center">
<div class="form-group ">
                                <label class="field-label"> Status </label>
                                <select name=pidrelationshipstatus  class="form-control language col-sm-7 mx-auto" id=status  style="border: 1px solid white" data-parsley-group="block1" required="">
                                    <option value="" id="default">Select status</option>
                                    <option value="Married">Married</option>
                                    <option value="Single">Single</option>
                                </select>
                            </div>

               
                        </div>
                        <div class= "col-12 col-sm-6 col-md-4 text-center">

<div class="form-group ">
                                <label class="field-label"> Birthday </label>
                                <input name=pidbirthday type="date" class="form-control language col-sm-7 mx-auto text-center" id=birthday data-parsley-group="block1" style="border: 1px solid white" required="" >
                            </div>



                        </div>
                        <div class= "col-12 col-sm-6 col-md-4 text-center">

<div class="form-group ">
                                <label class="field-label"> State of origin </label>
                                <select name=pidstateoforigin class="form-control language col-sm-7 mx-auto" id=soo  style="border: 1px solid white" data-parsley-group="block1" required="">
                                    <option value="">Select State </option>
                                    <option value="abia">Abia</option>
                                    <option value="abuja">Abuja</option>
                                    <option value="adamawa">Adamawa</option>
                                    <option value="akwaibom">Akwa Ibom</option>
                                    <option value="anambra">Anambra</option>
                                    <option value="bauchi">Bauchi</option>
                                    <option value="bayelsa">Bayelsa</option>
                                    <option value="benue">Benue</option>
                                    <option value="borno">Borno</option>
                                    <option value="crossriver">Cross River</option>
                                    <option value="delta">Delta</option>
                                    <option value="ebonyi">Ebonyi</option>
                                    <option value="edo">Edo</option>
                                    <option value="ekiti">Ekiti</option>
                                    <option value="enugu">Enugu</option>
                                    <option value="gombe">Gombe</option>
                                    <option value="imo">Imo</option>
                                    <option value="jigawa">Jigawa</option>
                                    <option value="kaduna">Kaduna</option>
                                    <option value="kano">Kano</option>
                                    <option value="katsina">Katsina</option>
                                    <option value="kebbi">Kebbi</option>
                                    <option value="kogi">Kogi</option>
                                    <option value="kwara">Kwara</option>
                                    <option value="lagos">Lagos</option>
                                    <option value="nasarawa">Nasarawa</option>
                                    <option value="niger">Niger</option>
                                    <option value="ogun">Ogun</option>
                                    <option value="ondo">Ondo</option>
                                    <option value="osun">Osun</option>
                                    <option value="oyo">Oyo</option>
                                    <option value="plateau">Plateau</option>
                                    <option value="rivers">Rivers</option>
                                    <option value="sokoto">Sokoto</option>
                                    <option value="taraba">Taraba</option>
                                    <option value="yobe">Yobe</option>
                                    <option value="zamfara">Zamfara</option>
                                </select>
                            </div>

                           
                        </div>


                        <!-- end of line 2 -->
                        <!-- line 3 start -->

                        <div class= "form-group col-12 col-sm-6 col-md-4 text-center">

<div class="form-group" id=lgaholder>
                                <label class="field-label" id="lga-label"> LGA </label>
                                <select name=pidlga  class="form-control language col-sm-7 mx-auto" id=lga  style="border: 1px solid white" data-parsley-group="block1" required="">
                                    <option value=""> select your local government </option>    
                                </select>

                            </div>

                        </div>
                        <div class= "col-12 col-sm-6 col-md-4 text-center">
<div class="form-group ">
                                <label class="field-label"> Nationality </label>
                                <select name=pidnationality  class="form-control language col-sm-7 mx-auto" id=nation  style="border: 1px solid white" data-parsley-group="block1" required="">
                                    <option value=""> select your nationality </option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Aland Islands">Aland Islands</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antarctica">Antarctica</option>
                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Bouvet Island">Bouvet Island</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Cayman Islands">Cayman Islands</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cote d Ivoire (Ivory Coast)">Cote d Ivoire (Ivory Coast)</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">Czech Republic</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="East Timor">East Timor</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El salvador">El salvador</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Falkland Islands">Falkland Islands</option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="France Metropolitan">France Metropolitan
                                    <option value="French Guiana">French Guiana
                                    <option value="French Polynesia">French Polynesia
                                    <option value="French Southern Territories">French Southern Territories
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guernsey">Guernsey</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
                                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran">Iran</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Isle of Man">Isle of Man</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jersey">Jersey</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakstan">Kazakstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgystan">Kyrgystan</option>
                                    <option value="Lao">Lao</option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libya">Libya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macau">Macau</option>
                                    <option value="Macedonia (FYR)">Macedonia (FYR)</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Micronesia">Micronesia</option>
                                    <option value="Moldova">Moldova</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">Norfolk Island</option>
                                    <option value="North Korea">North Korea</option>
                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Palestinian Territory Occupied">Palestinian Territory Occupied</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Pitcairn">Pitcairn</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russia">Russia</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saint Helena">Saint Helena</option>
                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                    <option value="Saint Lucia">Saint Lucia</option>
                                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                    <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Serbia">Serbia</option>
                                    <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="South Georgia">South Georgia</option>
                                    <option value="South Korea">South Korea</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syria">Syria</option>
                                    <option value="Taiwan">Taiwan</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania">Tanzania</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Timor-Leste">Timor-Leste</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States of America">United States of America</option>
                                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Vietnam">Vietnam</option>
                                    <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                    <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                                    <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                                    <option value="Western Sahara">Western Sahara</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Yugoslavia">Yugoslavia</option>
                                    <option value="Zaire">Zaire</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                            </div>
                        </div>
                        <div class= "col-12 col-sm-6 col-md-4 text-center">
<div class="form-group ">
                                <label class="field-label"> ID type </label>
                                <select name=pididentificationmode class="form-control language col-sm-7 mx-auto" id=idt style="border: 1px solid white" data-parsley-group="block1" required="">
                                    <option value="">Select ID</option>
                                    <option value= "Drivers License"> Drivers License </option>
                                    <option value= "National ID"> National ID card </option>
                                    <option value= "International passport"> International passport </option>
                                    <option value= "Voters card"> Voters card </option>
                                </select>
                            </div>
                            
                        </div>
                    </div>
                    <!-- end of line 3 -->

                </div>


            </div>
            <!-- end of pid divs -->
            <div class="row" id="pid-button">
                <div class="col-12 continue text-center" id="1c">
                    <input type=button class="col-4 col-lg-1 btn btn-purple validate" value="continue" id="1b">
                </div>
            </div>
            <!-- personal information -->

            <!-- Employment details view start -->
            <div class="row p-details" style="display:none" id="employer">
                <div class="col-3 col-sm-1 float">
                    <div class="col-12 text-center form-no">
                        2
                    </div>

                </div>
                <div class="col-10 col-sm-6 p-det-head" style="display:none" id="employer-head">
                    <h2 class="mOff form-head-main"> Employment details </h2>
                    <h6 class="form-head-sub" style="font-weight:300"> Provide the information required below </h6>
                </div>

            </div>
            <div class="row p-form"  id="employer-form">
                <div class="col-12 field-text">
                    <!-- line 1 start -->
                    <div class="row">
                        <div class= "form-group col-12 col-sm-6 col-md-4 text-center">
                            <label class="field-label"> Name of organization </label>
                            <input name=organization type="text" class="form-control language col-sm-7 mx-auto text-center" id="org" placeholder="Organization" style="border: 1px solid white" required="" data-parsley-group="block2">
                        </div>
                        <div class= "col-12 col-sm-6 col-md-4 text-center">
                            <div class="form-group">
                                <label class="field-label"> Address </label>
                                <input name=organisationaddress type="text" class="form-control col-sm-7 language mx-auto text-center" id="orgAdd" placeholder="Address" style="border: 1px solid white" required="" data-parsley-group="block2">
                            </div>
                        </div>
                        <div class= "col-12 col-sm-6 col-md-4 text-center">
 <div class="form-group ">
                                <label class="field-label"> State </label>
                                <select name=organisationstate class="form-control language col-sm-7 mx-auto" id="orgState" style="border: 1px solid white" required="" data-parsley-group="block2">
                                    <option value="Select State of Origin" id="default">Select State </option>
                                    <option value="abia">Abia</option>
                                    <option value="abuja">Abuja</option>
                                    <option value="adamawa">Adamawa</option>
                                    <option value="akwaibom">Akwa Ibom</option>
                                    <option value="anambra">Anambra</option>
                                    <option value="bauchi">Bauchi</option>
                                    <option value="bayelsa">Bayelsa</option>
                                    <option value="benue">Benue</option>
                                    <option value="borno">Borno</option>
                                    <option value="crossriver">Cross River</option>
                                    <option value="delta">Delta</option>
                                    <option value="ebonyi">Ebonyi</option>
                                    <option value="edo">Edo</option>
                                    <option value="ekiti">Ekiti</option>
                                    <option value="enugu">Enugu</option>
                                    <option value="gombe">Gombe</option>
                                    <option value="imo">Imo</option>
                                    <option value="jigawa">Jigawa</option>
                                    <option value="kaduna">Kaduna</option>
                                    <option value="kano">Kano</option>
                                    <option value="katsina">Katsina</option>
                                    <option value="kebbi">Kebbi</option>
                                    <option value="kogi">Kogi</option>
                                    <option value="kwara">Kwara</option>
                                    <option value="lagos">Lagos</option>
                                    <option value="nasarawa">Nasarawa</option>
                                    <option value="niger">Niger</option>
                                    <option value="ogun">Ogun</option>
                                    <option value="ondo">Ondo</option>
                                    <option value="osun">Osun</option>
                                    <option value="oyo">Oyo</option>
                                    <option value="plateau">Plateau</option>
                                    <option value="rivers">Rivers</option>
                                    <option value="sokoto">Sokoto</option>
                                    <option value="taraba">Taraba</option>
                                    <option value="yobe">Yobe</option>
                                    <option value="zamfara">Zamfara</option>
                                </select>
                            </div>               
                        </div>

                        <!--end of line 1 -->

                        <!-- line 2 start -->

                        <div class= "form-group col-12 col-sm-6 col-md-4 text-center">
                            <div class="form-group" id="orgLgaHolder">
                                <label class="field-label" id="orgLgaLabel"> LGA </label>
                                <select name=organisationlga type="text" class="form-control language col-sm-7 mx-auto text-center" id="orgLga" placeholder="Local Government Area" style="border: 1px solid white" required="" data-parsley-group="block2">
                                <option> Select local government area </option>s
                                </select>
                            </div>
                        </div>
                        <div class= "col-12 col-sm-6 col-md-4 text-center">
                            <div class="form-group ">
                                <label class="field-label"> File No/Service No </label>
                                <input name=organisationfile type="text" class="form-control col-sm-7 language mx-auto text-center" id="orgNo" placeholder="File or service number" style="border: 1px solid white" data-parsley-group="block2">
                            </div>
                        </div>
                        <div class= "col-12 col-sm-6 col-md-4 text-center">
                            <div class="form-group">
                                <label class="field-label"> Date of employment </label>
                                <input name=dateofemployment type="date" class="form-control col-sm-7 language mx-auto text-center" id="doe" placeholder="Address" style="border: 1px solid white" required="" data-parsley-group="block2">
                            </div>
                        </div>


                        <!-- end of line 2 -->
                        <!-- line 3 start -->

                        <div class= "form-group col-12 col-sm-6 col-md-4 text-center">
                            <div class="form-group">
                                <label class="field-label"> State of posting </label>
                                <select name=stateofposting class="form-control language col-sm-7 mx-auto" id="sop" style="border: 1px solid white" data-parsley-group="block2">
                                    <option value="Select State of Origin" id="default">Select State </option>
                                    <option value="Abia">Abia</option>
                                    <option value="Abuja">Abuja</option>
                                    <option value="Adamawa">Adamawa</option>
                                    <option value="Akwa Ibom">Akwa Ibom</option>
                                    <option value="Anambra">Anambra</option>
                                    <option value="Bauchi">Bauchi</option>
                                    <option value="Bayelsa">Bayelsa</option>
                                    <option value="Benue">Benue</option>
                                    <option value="Borno">Borno</option>
                                    <option value="Cross River">Cross River</option>
                                    <option value="Delta">Delta</option>
                                    <option value="Ebonyi">Ebonyi</option>
                                    <option value="Edo">Edo</option>
                                    <option value="Ekiti">Ekiti</option>
                                    <option value="Enugu">Enugu</option>
                                    <option value="Gombe">Gombe</option>
                                    <option value="Imo">Imo</option>
                                    <option value="Jigawa">Jigawa</option>
                                    <option value="Kaduna">Kaduna</option>
                                    <option value="Kano">Kano</option>
                                    <option value="Katsina">Katsina</option>
                                    <option value="Kebbi">Kebbi</option>
                                    <option value="Kogi">Kogi</option>
                                    <option value="Kwara">Kwara</option>
                                    <option value="Lagos">Lagos</option>
                                    <option value="Nasarawa">Nasarawa</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Ogun">Ogun</option>
                                    <option value="Ondo">Ondo</option>
                                    <option value="Osun">Osun</option>
                                    <option value="Oyo">Oyo</option>
                                    <option value="Plateau">Plateau</option>
                                    <option value="Rivers">Rivers</option>
                                    <option value="Sokoto">Sokoto</option>
                                    <option value="Taraba">Taraba</option>
                                    <option value="Yobe">Yobe</option>
                                    <option value="Zamfara">Zamfara</option>
                                </select>
                            </div>
                        </div>
                        <div class= "col-12 col-sm-6 col-md-4 text-center">
                            <div class="form-group ">
                                <label class="field-label"> Current PFA </label>
                                <select name=currentpfa class="form-control language col-sm-7 mx-auto" id="cpfa" style="border: 1px solid white" required="" data-parsley-group="block2">
                                    <option value="" id="default"> Select Provider</option>
                                    <option value="not registered"> Not registered </option>
                                    <option value="AIICO pension Managers"> AIICO pension Managers </option>
                                    <option value="APT Pension Managers Limited"> APT Pension Managers Limited </option>
                                    <option value="ARM Pension Fund Managers Limited"> ARM Pension Fund Managers Limited </option>
                                    <option value="AXA MANSARD pension"> AXA MANSARD pension </option>
                                    <option value="Crusader sterling pensions Limited"> Crusader sterling pensions Limited </option>
                                    <option value="Fidelity Pension Managers"> Fidelity Pension Managers </option>
                                    <option value="First Guarantee Pension Limited"> First Guarantee Pension Limited </option>
                                    <option value="Future Unity Glanvils Pensions Limited"> Future Unity Glanvils Pensions Limited </option>
                                    <option value="Investment one pension manahers Limited"> Investment one pension manahers Limited </option>
                                    <option value="IEI-Anchor pension managers Limited"> IEI-Anchor pension managers Limited </option>
                                    <option value="IGI Pension fund managers Limited"> IGI Pension fund managers Limited </option>
                                    <option value="Legacy pension managers Limited"> Legacy pension managers Limited </option>
                                    <option value="NLPC pension fund administrators Limited"> NLPC pension fund administrators Limited </option>
                                    <option value="NPF pensions Limited"> NPF pensions Limited </option>
                                    <option value="OAK Pensions Limited"> OAK Pensions Limited </option>
                                    <option value="Pensions Alliance Limited"> Pensions Alliance Limited</option>
                                    <option value="Premium pension Limited"> Premium pension Limited </option>
                                    <option value="Sigma Pensions Limited"> Sigma Pensions Limited </option>
                                    <option value="Stanbic IBTC Pension Managers"> Stanbic IBTC Pension Managers </option>
                                    <option value="Trustfund Pensions PLC"> Trustfund Pensions PLC </option>
                                </select>
                            </div>
                        </div>
                        <div class= "col-12 col-sm-6 col-md-4 text-center">
                            <div class="form-group ">
                                <label class="field-label"> Pin number </label>
                                <input name=employmentdetailspin type="text" class="form-control col-sm-7 language mx-auto text-center" id="pin"  data-parsley-minlength="15"  data-parsley-maxlength="15" placeholder="Pin number" style="border: 1px solid white" >
                            </div>
                        </div>
                    </div>
                    <!-- end of line 3 -->
                    <div class="row" id="employer-button">
                        <div class="col-12 continue text-center">
                            <div class="col-4 col-lg-1 btn btn-purple" name="continue" id="2b"> back </div>
                            <div class="col-4 col-lg-1 btn btn-purple" name="continue" id="2c"> continue </div>
                        </div>
                    </div>

                </div>


            </div>

            <!-- Employment details end -->

            <!-- next of kin view start -->
            <div class="row p-details" id="kin">
                <div class="col-3 col-sm-1 float">
                    <div class="col-12 text-center form-no">
                        3
                    </div>

                </div>
                <div class="col-9 col-sm-6 p-det-head" id="kin-head">
                    <h2 class="mOff form-head-main"> Next of kin </h2>
                    <h6 class="form-head-sub" style="font-weight:300"> Provide the information required below </h6>
                </div>

            </div>
            <div class="row p-form"  id="kin-form">
                <div class="col-12 field-text">
                    <!-- line 1 start -->
                    <div class="row">
                        <div class= "form-group col-12 col-sm-6 col-md-4 text-center">
                            <label class="field-label"> Title </label>
                            <select name="kintitle" class="form-control language col-sm-7 mx-auto" id="k-title" style="border: 1px solid white" data-parsley-group="block3" required="">
                                <option value="" id="default"> Select title </option>
                                <option value="Mr"> Mr. </option>
                                <option value="Miss"> Miss. </option>
                                <option value="Mrs"> Mrs. </option>
                                <option value="Dr"> Dr. </option>
                                <option value="Eng"> Eng. </option>
                                <option value="Rev"> Rev. </option>
                            </select>
                        </div>
                        <div class= "col-12 col-sm-6 col-md-4 text-center">
                            <div class="form-group">
                                <label class="field-label"> Last name </label>
                                <input name=kinlastname type="text" class="form-control col-sm-7 language mx-auto text-center" id="k-lname" placeholder="Address" style="border: 1px solid white" data-parsley-group="block3" required="">
                            </div>
                        </div>
                        <div class= "col-12 col-sm-6 col-md-4 text-center">

                            <div class="form-group">
                                <label class="field-label"> First name </label>
                                <input name=kinfirstname type="text" class="form-control language col-sm-7 mx-auto text-center" id="k-fname" style="border: 1px solid white" data-parsley-group="block3" required="">
                            </div>
                        </div>

                        <!--end of line 1 -->

                        <!-- line 2 start -->

                        <div class= "form-group col-12 col-sm-6 col-md-4 text-center">
                            <div class="form-group ">
                                <label class="field-label"> Relationship </label>
                                <select name= kinrelationship class="form-control language col-sm-7 mx-auto" id="relationship" style="border: 1px solid white" data-parsley-group="block3" required="">
                                    <option value="" id="default"> Choose type </option>
                                    <option value="spouse"> Spouse </option>
                                    <option value="relative"> Relative </option>
                                    <option value="parent"> Parent </option>
                                    <option value="acquaintance"> Acquaintance </option>
                                    <option value="child"> Child </option>
                                </select>
                            </div>
                        </div>
                        <div class= "form-group col-12 col-sm-6 col-md-4 text-center">
                            <div class="form-group">
                                <label class="field-label"> Gender </label>
                                <select name=kingender class="form-control language col-sm-7 mx-auto" id="k-gender" style="border: 1px solid white" data-parsley-group="block3" required="">
                                    <option value="" id="default"> Select Gender </option>
                                    <option value="Male"> Male </option>
                                    <option value="Male"> Female </option>
                                </select>
                            </div>
                        </div>
                        <div class= "col-12 col-sm-6 col-md-4 text-center">
                            <div class="form-group ">
                                <label class="field-label"> Address </label>
                                <input name=kinaddress  type="text" class="form-control col-sm-7 language mx-auto text-center" id="k-add" placeholder="Address" style="border: 1px solid white" data-parsley-group="block3" required="">
                            </div>
                        </div>


                        <!-- end of line 2 -->
                        <!-- line 3 start -->

                        <div class= "form-group col-12 col-sm-6 col-md-4 text-center">
                            <div class="form-group">
                                <label class="field-label"> State of origin </label>
                                <select name="kinstate" class="form-control language col-sm-7 mx-auto" id="k-soo" style="border: 1px solid white" data-parsley-group="block3" required="">
                                    <option value="" id="default">Select State </option>
                                    <option value="abia">Abia</option>
                                    <option value="abuja">Abuja</option>
                                    <option value="adamawa">Adamawa</option>
                                    <option value="akwaibom">Akwa Ibom</option>
                                    <option value="anambra">Anambra</option>
                                    <option value="bauchi">Bauchi</option>
                                    <option value="bayelsa">Bayelsa</option>
                                    <option value="benue">Benue</option>
                                    <option value="borno">Borno</option>
                                    <option value="crossriver">Cross River</option>
                                    <option value="delta">Delta</option>
                                    <option value="ebonyi">Ebonyi</option>
                                    <option value="edo">Edo</option>
                                    <option value="ekiti">Ekiti</option>
                                    <option value="enugu">Enugu</option>
                                    <option value="gombe">Gombe</option>
                                    <option value="imo">Imo</option>
                                    <option value="jigawa">Jigawa</option>
                                    <option value="kaduna">Kaduna</option>
                                    <option value="kano">Kano</option>
                                    <option value="katsina">Katsina</option>
                                    <option value="kebbi">Kebbi</option>
                                    <option value="kogi">Kogi</option>
                                    <option value="kwara">Kwara</option>
                                    <option value="lagos">Lagos</option>
                                    <option value="nasarawa">Nasarawa</option>
                                    <option value="niger">Niger</option>
                                    <option value="ogun">Ogun</option>
                                    <option value="ondo">Ondo</option>
                                    <option value="osun">Osun</option>
                                    <option value="oyo">Oyo</option>
                                    <option value="plateau">Plateau</option>
                                    <option value="rivers">Rivers</option>
                                    <option value="sokoto">Sokoto</option>
                                    <option value="taraba">Taraba</option>
                                    <option value="yobe">Yobe</option>
                                    <option value="zamfara">Zamfara</option>
                                </select>
                            </div>
                        </div>
                        <div class= "col-12 col-sm-6 col-md-4 text-center">
                            <div class="form-group " id="k-lga-holder">
                                <label class="field-label" id="k-lga-label"> LGA </label>
                                <select name=kinlga type="text" class="form-control col-sm-7 language mx-auto text-center" id="k-lga" placeholder="Mobile number" style="border: 1px solid white" data-parsley-group="block3" required="">
                                <option> Select local government area </option>
                                </select>
                            </div>
                        </div>
                        <div class= "col-12 col-sm-6 col-md-4 text-center">
                            <div class="form-group ">
                                <label class="field-label"> Mobile no </label>
                                <input name=kinmobileno  type="number" class="form-control col-sm-7 language mx-auto text-center" id="k-mno" placeholder="Mobile number" data-parsley-minlength="11" data-parsley-maxlength="15" style="border: 1px solid white" type="number" data-parsley-group="block3" required="">
                            </div>
                        </div>
                    </div>
                    <!-- end of line 3 -->
                    <div class="row" id="kin-button">
                        <div class="col-12 continue text-center">
                            <div class="col-4 col-lg-1 btn btn-purple" name="continue" id="3b"> back </div>
                            <div class="col-4 col-lg-1 btn btn-purple" name="continue" id="3c"> continue </div>
                        </div>
                    </div>

                </div>


            </div>

            <!-- next of kin end -->

            <!-- Biometrics start -->

            <div class="row p-details" id="biometrics">
                <div class="col-3 col-sm-1 float">
                    <div class="col-12 text-center form-no">
                        4
                    </div>

                </div>
                <div class="col-9 col-sm-6 p-det-head" id="biometrics-head">
                    <h2 class="mOff form-head-main"> Biometrics </h2>
                    <h6 class="form-head-sub" style="font-weight:300"> Provide the information required below </h6>
                </div>

            </div>
            <div class="row p-form" style="height:324px" id="biometrics-form">
                <div class="col-12 field-text">
                    <!-- line 1 start -->
                <div class="row">
                    <div class="col-12 text-center">
                        <input type="file" id="user-image" class="form-control"/>
                    </div>
                    <div class="col-12 text-center" style="padding-bottom:2%">
                        Upload your avatar
                    </div>
                </div>
                <!--end of line 1 -->

                    <div class="row" id="biometrics-button">
                        <div class="col-12 continue text-center">
                            <div class="col-4 col-lg-1 btn btn-purple" name="continue" id="4b"> back </div>
                            <div class="col-4 col-lg-1 btn btn-purple" name="continue" id="4c"> continue </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Biometrics end -->

            <!-- Confirmation page start -->

            <div class="row p-details" id="confirm">
                <div class="col-3 col-sm-1 float">
                    <div class="text-center form-no">
                        5
                    </div>

                </div>
                <div class="col-9 col-sm-6 p-det-head" id="confirm-head">
                    <h2 class="mOff form-head-main"> Confirmation </h2>
                    <h6 class="form-head-sub" style="font-weight:300"> Scroll through and confirm your information below </h6>
                </div>

            </div>
            <div class="row p-form"  id="confirm-form">
                <div class="col-12 field-text confirm-view-height" id="confirm-view-height">

                    <h5 class="text-center f-space"> 1. Personal Information </h5>
                    <!-- line 1 start -->
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-4 text-center mOff">
                             <label class="field-label"> Title </label>
                                <input type="text" class="form-control col-sm-7 language mx-auto text-center" id="dp-email" readonly="">
                            
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 text-center mOff">

                            <div class="form-group">
                                <label class="field-label"> First name </label>
                                <input type="text" class="form-control col-sm-7 language mx-auto text-center" id="d-fn" readonly="">
                            </div>

                        </div>
                         <div class="col-12 col-sm-6 col-md-4 text-center mOff">

 <div class="form-group ">
 <label class="field-label"> Middle Name  </label>
 <input type="text" class="form-control col-sm-7 language mx-auto text-center" id="d-mn" placeholder="" readonly="">
 </div>
 
 </div>
   <hr class="d-color">
   <div class="form-group col-12 col-sm-6 col-md-4 text-center mOff">
      <div class="form-group">
         <label class="field-label"> Last Name </label>
             <input type="text" class="form-control col-sm-7 language mx-auto text-center" id="d-ln" readonly="">
                            </div>
                        </div>
      
                        <div class="col-12 col-sm-6 col-md-4 text-center mOff">

                            <div class="form-group">
                                <label class="field-label"> Gender </label>
                                <input type="text" class="form-control col-sm-7 language mx-auto text-center" id="dGender" readonly="">
                            </div>

                        </div>
                        <div class="col-12 col-sm-6 col-md-4 text-center mOff">

                                <div class="form-group ">
                                 <label class="field-label"> Mobile </label>
                                <input type="text" class="form-control col-sm-7 language mx-auto text-center" id="dp-mno" placeholder="" readonly="">
                            </div>
                        </div>

                    <!-- end of line 3 -->
                       <hr class="d-color">
                        <div class="col-12 col-sm-6 col-md-4 text-center mOff">
 <div class="form-group">
                                <label class="field-label"> Birthday </label>
                                <input type="text" class="form-control language col-sm-7 mx-auto text-center" id="dBirthday" readonly="">
                            </div>
                           
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 text-center mOff">
<div class="form-group ">
                                <label class="field-label"> State of Origin </label>
                                <input type="text" class="form-control col-sm-7 language mx-auto text-center" id="dSoo" readonly="">
                            </div>
                        </div>

<div class="form-group col-12 col-sm-6 col-md-4 text-center mOff">
      <div class="form-group">
         <label class="field-label"> Status </label>
             <input type="text" class="form-control col-sm-7 language mx-auto text-center" id="dStatus" readonly="">
                            </div>
                        </div>


<hr class="d-color">

 <div class="form-group col-12 col-sm-6 col-md-4 text-center mOff">
                            <div class="form-group">
                                <label class="field-label"> Local Government Area </label>
                                <input type="text" class="form-control col-sm-7 language mx-auto text-center" id="dLga" readonly="">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 text-center mOff">
                           <div class="form-group">
                                <label class="field-label"> Nationality </label>
                                <input type="text" class="form-control col-sm-7 language mx-auto text-center" id="dNation" readonly="">
                            </div>
           
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 text-center mOff">    
                               <div class="form-group">
                                <label class="field-label"> ID type </label>
                                <input type="text" class="form-control col-sm-7 language mx-auto text-center" id="dIdt" readonly="">
                            </div>
                        </div><hr class="d-color">

                    <!-- employment review start -->
                    <h5 class="text-center f-space"> 2. Employment Details </h5>
                    <!-- line 1 start -->
                    <div class="row">
                        <div class="form-group col-12 col-sm-6 col-md-4 text-center mOff" readonly="">
                            <label class="field-label"> Name of organization </label>
                            <input type="text" class="form-control language col-sm-7 mx-auto text-center" id="dOrg" readonly="">
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 text-center mOff">
                            <div class="form-group">
                                <label class="field-label"> Address </label>
                                <input type="text" class="form-control col-sm-7 language mx-auto text-center" id="dOrgAdd" readonly="">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 text-center mOff">

                            <div class="form-group">
                                <label class="field-label"> LGA </label>
                                <input type="text" class="form-control language col-sm-7 mx-auto text-center" id="dOrgLga" readonly="">
                            </div>
                        </div>

                        <!--end of line 1 -->
                        <hr class="d-color">

                        <!-- line 2 start -->

                        <div class="form-group col-12 col-sm-6 col-md-4 text-center mOff">
                            <div class="form-group ">
                                <label class="field-label"> State of origin </label>
                                <input type="text" class="form-control col-sm-7 language mx-auto text-center" id="dOrgState" readonly="">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 text-center mOff">
                            <div class="form-group ">
                                <label class="field-label"> File No/Service No </label>
                                <input type="text" class="form-control col-sm-7 language mx-auto text-center" id="dOrgNo" readonly="">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 text-center mOff">
                            <div class="form-group ">
                                <label class="field-label"> Date of employment </label>
                                <input type="text" class="form-control col-sm-7 language mx-auto text-center" id="dDoe" readonly="">
                            </div>
                        </div>


                        <!-- end of line 2 -->

                        <hr class="d-color">
                        <!-- line 3 start -->

                        <div class="form-group col-12 col-sm-6 col-md-4 text-center mOff">
                            <div class="form-group">
                                <label class="field-label"> State of posting </label>
                                <input type="text" class="form-control col-sm-7 language mx-auto text-center" id="dSop" readonly="">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 text-center mOff">
                            <div class="form-group ">
                                <label class="field-label"> Current PFA  </label>
                                <input type="text" class="form-control col-sm-7 language mx-auto text-center" id="dcpfa" readonly="">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 text-center mOff">
                            <div class="form-group ">
                                <label class="field-label"> Pin number  </label>
                                <input type="text" class="form-control col-sm-7 language mx-auto text-center" id="dpin" readonly="">
                            </div>
                        </div>
                    </div>
                    <!-- end of line 3 -->
                    <!-- employment review end -->

                    <hr class="d-color">

                    <!-- next of kin review start -->

                    <h5 class="text-center f-space"> 3. Next of Kin </h5>
                    <!-- line 1 start -->
                    <div class="row">
                        <div class="form-group col-12 col-sm-6 col-md-4 text-center mOff">
                            <label class="field-label"> Title </label>
                            <input type="text" class="form-control col-sm-7 language mx-auto text-center" id="dk-title" readonly="">
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 text-center mOff">
                            <div class="form-group">
                                <label class="field-label"> Last name </label>
                                <input type="text" class="form-control col-sm-7 language mx-auto text-center" id="dk-lname" readonly="">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 text-center mOff">

                            <div class="form-group">
                                <label class="field-label"> First name </label>
                                <input type="text" class="form-control language col-sm-7 mx-auto text-center" id="dk-fname" readonly="">
                            </div>
                        </div>

                        <!--end of line 1 -->

                        <hr class="d-color">

                        <!-- line 2 start -->

                        <div class="form-group col-12 col-sm-6 col-md-4 text-center mOff">
                            <div class="form-group ">
                                <label class="field-label"> Relationship </label>
                                <input type="text" class="form-control col-sm-7 language mx-auto text-center" id="drelationship" readonly="">
                            </div>
                        </div>
                        <div class="form-group col-12 col-sm-6 col-md-4 text-center mOff">
                            <label class="field-label"> Gender </label>
                            <input type="text" class="form-control col-sm-7 language mx-auto text-center" id="dkgender" readonly="">
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 text-center mOff">
                            <div class="form-group ">
                                <label class="field-label"> Address </label>
                                <input type="text" class="form-control col-sm-7 language mx-auto text-center" id="dkadd" readonly="">
                            </div>
                        </div>


                        <!-- end of line 2 -->

                        <hr class="d-color">

                        <!-- line 3 start -->

                        <div class="form-group col-12 col-sm-6 col-md-4 text-center mOff">
                            <div class="form-group">
                                <label class="field-label"> State of origin </label>
                                <input type="text" class="form-control col-sm-7 language mx-auto text-center" id="dksoo" readonly="">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 text-center mOff">
                            <div class="form-group ">
                                <label class="field-label"> LGA </label>
                                <input type="text" class="form-control col-sm-7 language mx-auto text-center" id="dklga" readonly="">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 text-center mOff">
                            <div class="form-group ">
                                <label class="field-label"> Mobile no </label>
                                <input type="text" class="form-control col-sm-7 language mx-auto text-center" id="dkmno" readonly="">
                            </div>
                        </div>
                    </div>
                    <!-- end of line 3 -->

                    <!-- next of kin review end -->
                </div>



            </div>
            <div class="row" id="confirm-button">
                <div class="col-12 continue text-center">
                    <div class="col-4 col-lg-1 btn btn-purple" name="back" id="5b"> Back </div>
                    <button class="col-4 col-lg-1 btn btn-purple" type="submit" name="continue" id="5c"> Submit </button>
                </div>
            </div>
            <!-- Confirmation page end -->
            </div>
    </form>
    


    <div class=row id='thankyou' style='display:none;margin-top:5%'>
        <div class='col-12'>
            <p class=text-center>
              Welcome onboard the leading team. To complete your registration, a sales representative 
              will visit you and request the following information 
            </p>
            <div class=row> 
             <div class='col-12 col-md-4 text-center'>
              <figure>
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/images/print.png" alt="" class="img-fluid back-logo">
                    <figcaption class="back" style="font-size:20px">
                    Biometrics i.e Fingerprint
                    </figcaption>
                </figure> 
         </div>
              <div class='col-12 col-md-4 text-center'>
              <figure>
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/images/sign.png" alt="" class="img-fluid back-logo">
                    <figcaption class="back" style="font-size:20px">
                    Signature
                    </figcaption>
                </figure> 
         </div>
         
         <div class='col-12 col-md-4 text-center'>
              <figure>
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/images/id.png" alt="" class="img-fluid back-logo">
                    <figcaption class="back" style="font-size:20px">
                    Means of identification
                    </figcaption>
                </figure> 
         </div>
         </div>
                
        
        </div>
    </div>

<div class=row style="margin-top:3%">
        <div class="col-12">
            <a class="/">
                <figure>
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/images/logo-alt.png" alt="" class="img-fluid back-logo">
                    <figcaption class="back" style="font-size:10px"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                        back to Leadway-Pensure.com
                    </figcaption>
                </figure>
            </a>
        </div>
    </div>

<div class="modal fade enroll-error" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
           <div class=row> 
             <div class='col-12 text-center'>
              <figure>
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/images/network.png" alt="" class="img-fluid back-logo">
                    <figcaption class="back" style="font-size:20px">
                    OOPS! Network time out... </br>
                    Try again please
                    </figcaption>
                </figure> 
         </div>
         </div>
        </div>
    </div>
</div>
</div>


<?php get_footer(); ?>
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/progressbar.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/dropzone.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/parsley.min.js"></script>
 <script href="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/locale/af.js" > </script>
     <script>
    moment().format();
</script>
<script>

    $('.enroll-error').modal({
        show: false
    });

</script>
<script>
    var progressbar = new ProgressBar.Line('#progressMark', {
        // Stroke color.
        // Default: '#555'
        color: '#3a3a3a',

        // Width of the stroke.
        // Unit is percentage of SVG canvas' size.
        // Default: 1.0
        // NOTE: In Line shape, you should control
        // the stroke width by setting container's height.
        // WARNING: IE doesn't support values over 6, see this bug:
        //          https://github.com/kimmobrunfeldt/progressbar.js/issues/79
        strokeWidth: 3.1,

        // If trail options are not defined, trail won't be drawn

        // Color for lighter trail stroke
        // underneath the actual progress path.
        // Default: '#eee'
        trailColor: '#f4f4f4',

        // Width of the trail stroke. Trail is always centered relative to
        // actual progress path.
        // Default: same as strokeWidth
        trailWidth: 1.5,

        // Inline CSS styles for the created SVG element
        // Set null to disable all default styles.
        // You can disable individual defaults by setting them to `null`
        // If you specify anything in this object, none of the default styles
        // apply
        svgStyle: {
            display: 'block',

            // Important: make sure that your container has same
            // aspect ratio as the SVG canvas. See SVG canvas sizes above.
            width: '100%',
            height: '33px'
        },

        // Text options. Text element is a <p> element appended to container
        // You can add CSS rules for the text element with the className
        // NOTE: When text is set, 'position: relative' will be set to the
        // container for centering. You can also prevent all default inline
        // styles with 'text.style: null'
        // Default: null
        text: {
            // Initial value for text.
            // Default: null
            value: '0%',

            // Class name for text element.
            // Default: 'progressbar-text'
            className: 'progressbar__label',

            // Inline CSS styles for the text element.
            // If you want to modify all CSS your self, set null to disable
            // all default styles.
            // If the style option contains values, container is automatically
            // set to position: relative. You can disable behavior this with
            // autoStyleContainer: false
            // If you specify anything in this object, none of the default styles
            // apply
            // Default: object speficied below
            style: {
                // Text color.
                // Default: same as stroke color (options.color)
                color: '#a890ba',
                position: 'absolute',
                fontSize: '10px',
                left: '50%',
                top: '50%',
                padding: '50px',
                marginTop: '8px',
                // You can specify styles which will be browser prefixed
                transform: {
                    prefix: true,
                    value: 'translate(-50%, -50%)'
                }
            },

            // Only effective if the text.style is not null
            // By default position: relative is applied to container if text
            // is set. Setting this to false disables that feature.
            autoStyleContainer: true,

            // Only effective if the shape is SemiCircle.
            // If true, baseline for text is aligned with bottom of
            // the SVG canvas. If false, bottom line of SVG canvas
            // is in the center of text.
            // Default: true
            alignToBottom: true
        },

        // Fill color for the shape. If null, no fill.
        // Default: null
        fill: 'rgba(0, 0, 0, 0.5)',

        // Duration for animation in milliseconds
        // Default: 800
        duration: 1200,

        // Easing for animation. See #easing section.
        // Default: 'linear'
        easing: 'easeOut',

        // See #custom-animations section
        // Built-in shape passes reference to itself and a custom attachment
        // object to step function
        from: {color: '#2068a4'},
        to: {color: '#233d70'},
        step: function (state, circle, attachment) {
            circle.path.setAttribute('stroke', state.color);
        },

        // If true, some useful console.warn calls will be done if it seems
        // that progressbar is used incorrectly
        // Default: false
        warnings: false

    });
    //progressbar.animate(0.5, {
    //duration: 800,
    //from: { color: '#000' },
    //to: { color: '#eee' },
    //}, function() {
    //  console.log('Animation has finished');
    //});

</script>

<script>

    function convertFormToJSON(form) {

        var array = jQuery(form).serializeArray();
        var json = {};
         
        json['clientID'] = '9dy8earw04r09wjefsdp90zsjs';
        jQuery.each(array, function () {
            json[this.name] = this.value || '';
        });
        return json

    }

    function base64ToBlob(base64, mime)
    {
        mime = mime || '';
        var sliceSize = 1024;
        var byteChars = window.atob(base64);
        var byteArrays = [];

        for (var offset = 0, len = byteChars.length; offset < len; offset += sliceSize) {
            var slice = byteChars.slice(offset, offset + sliceSize);

            var byteNumbers = new Array(slice.length);
            for (var i = 0; i < slice.length; i++) {
                byteNumbers[i] = slice.charCodeAt(i);
            }

            var byteArray = new Uint8Array(byteNumbers);

            byteArrays.push(byteArray);
        }

        return new Blob(byteArrays, {type: mime});
    }

</script>

<script>
    $(document).ready(function () {

        function _(x) {
            return document.getElementById(x).value;
        }

        function __(x) {
            return document.getElementById(x);
        }

        function parse(a, b, c) {
            for (; a < b.length; a++) {
                $(b[a]).val(c[a]);
            }
        }

        var accessed = 0
        //test block for _(x)
        function show(response) {
            alert(response);
        };

        //accessing values of personal information form fields
        var responseA  = _('gender');
        var responseB  = _('status');
        var responseC  = _('birthday');
        var responseD  = _('soo');
        var responseE  = _('lga');
        var responseF  = _('nation');
        var responseG  = _('idt');
        var responseH  = _('p-email');
        var responseI  = _('p-mno');
        var responseJ  = _('org');
        var responseK  = _('orgAdd');
        var responseL  = _('orgLga');
        var responseM  = _('orgState');
        var responseN  = _('orgNo');
        var responseO  = _('doe');
        var responseP  = _('sop');
        var responseQ  = _('cpfa');
        var responseR  = _('pin');
        var responseS  = _('k-title');
        var responseT  = _('k-lname');
        var responseU  = _('k-fname');
        var responseV  = _('relationship');
        var responseW  = _('k-gender');
        var responseX  = _('k-add');
        var responseY  = _('k-soo');
        var responseZ  = _('k-lga');
        var responseA1 = _('k-mno');
        var responseA2 = _('fn');
        var responseA3 = _('mn');
        var responseA4 = _('ln');


        //accessing all select box ids

        var selectA = __('gender');
        var selectB = __('status');
        var selectC = __('soo');
        var selectD = __('nation');
        var selectE = __('idt');

        //accessing id of input fields

        var inputA = __('lga')

        //accessing innerHTML of Display fields for personal information form responses
        var displayA  = __('dGender');
        var displayB  = __('dStatus');
        var displayC  = __('dBirthday');
        var displayD  = __('dSoo');
        var displayE  = __('dLga');
        var displayF  = __('dNation');
        var displayG  = __('dIdt');
        var displayH  = __('dp-email');
        var displayI  = __('dp-mno');
        var displayJ  = __('dOrg');
        var displayK  = __('dOrgAdd');
        var displayL  = __('dOrgLga');
        var displayM  = __('dOrgState');
        var displayN  = __('dOrgNo');
        var displayO  = __('dDoe');
        var displayP  = __('dSop');
        var displayQ  = __('dcpfa');
        var displayR  = __('dpin');
        var displayS  = __('dk-title');
        var displayT  = __('dk-fname');
        var displayU  = __('dk-lname');
        var displayV  = __('drelationship');
        var displayW  = __('dkgender');
        var displayX  = __('dkadd');
        var displayY  = __('dksoo');
        var displayZ  = __('dklga');
        var displayA1 = __('dkmno');
        var displayA2 = __('d-fn');
        var displayA3 = __('d-mn');
        var displayA4 = __('d-ln');

        var responseArray1 = [responseA, responseB, responseC, responseD, responseE, responseF, responseG, responseH, responseI];
        var displayArray1 = [displayA, displayB, displayC, displayD, displayE, displayF, displayG, displayH, displayI];


        function validateemail(x) {
            var atposition = x.indexOf("@");
            var dotposition = x.lastIndexOf(".");
            if (atposition < 1 || dotposition < atposition + 2 || dotposition + 2 >= x.length) {
                alert("Please enter a valid e-mail address \n atpostion:" + atposition + "\n dotposition:" + dotposition);
                return false;
            }
        }
 

 // parsing local goverment html|values based on selected state for pid section

              $('#soo').change(function(){


                var state = document.getElementById('soo').value; 
                console.log(state);
                var lga = document.getElementById('lga');
                var lgalabel = document.getElementById('lga-label');
                lga.parentNode.removeChild(lga);
                lgalabel.parentNode.removeChild(lgalabel);
                var newSelectBox = document.createElement('select');
                newSelectBox.id = 'lga';
                newSelectBox.setAttribute( 'class', 'form-control language col-sm-7 mx-auto' ); 
                newSelectBox.style = 'border: 1px solid white';
                newSelectBox.name = 'pidlga';
                var newLabel = document.createElement('label');
                newLabel.class ='field-label';
                newLabel.id = "lga-label";                 
                var newLabelText = document.createTextNode('LGA');
                var selectHolder = document.getElementById('lgaholder');
                selectHolder.appendChild(newLabel); 
                newLabel.appendChild(newLabelText);
                selectHolder.appendChild(newSelectBox);
                var lga = document.getElementById('lga');

                
                
                if (state === "abia"){

                    lgaArray = [ "Aba North| aba north", "Aba South| aba south", "Arochukwu| Arochukwu", "Bende|bende", "Ikwuano| ikwuano", "Isiala-Ngwa North | isiala-ngwa north", "Isiala-Ngwa South | isiala-ngwa south", "Isuikwato| isuikwato", "Obi Nwa| obi nwa", "Ohafia| ohafia", "Osisioma | osisioma","Ngwa| ngwa", "Ugwunagbo| ugwunagbo", "Ukwa East| ukwa", "Ukwa West| ukwa west","Umuahia North| umuahia north","Umuahia South| umuahia south", "Umu-Neochi| umu-neochi" ];
                   


                }else if (state === "abuja"){
                    lgaArray =  [ "Gwagwalada|gwagwalada", "Kuje| kuje", "Abaji| abaji", "Abuja Municipal| Abuja municipal", "Bwari| bwari", "Kwali|kwali" ];

                }else if (state === "adamawa"){
                    lgaArray  = ["Demsa|demsa", "Fufore|fufore", "Ganaye|ganaye", "Gireri|gireri", "Gombi|gombi", "Guyuk|guyuk", "Hong|hong", "Jada|jada", "Lamurde|lamurde", "Madagali|madagali", "Maiha|maiha", "Mayo-Belwa|mayo-belwa", "Michika|michika", "Mubi North|mubi north", "Mubi South| mubi south", "Numan|numan", "Shelleng|shelleng", "Song|song", "Toungo|toungo", "Yola North| yola north", "Yola South|yola south"];

                }else if (state === "akwaibom"){
                    lgaArray = ["Abak|abak", "Eastern Obolo|eastern obolo", "Eket|eket","Esit Eket|esit eket","Essien Udim|essien udim", "Etim Ekpo|etim ekpo", "Etinan|etinan", "Ibeno|ibeno", "Ibeskipo Asutan|ibeskipo asutan","Ibiono Ibom|ibiono ibom","ika|ika","ikono|ikono", "Ikot Abasi|ikot abasi","Ikot Ekpene|ikot ekpene", "Ini|ini","Itu|itu","Mbo|mbo","Mkpat Enin|mkpat enin","Nsit Atai|nsit atai","Nsit Ibom|nsit ibom", "Nsit Ubium|nsit ubium","Obot Akara|obot akara","Okobo|okobo","Onna | onna","Oron|oron","Oruk Anam| oruk anam", "Udung Uko | udung uko", "ukanafun|ukanafun", "Uruan|uruan", "Urue-Offong/Oruko| urue-offong/oruko"];
                }else if (state === "anambra"){
                    lgaArray = ["Aguata|aguata", "Anambra East | anambra east", "Anambra West|anambra west", "Anaocha|anaocha", "Awka North|awka north", "Ayamelum|ayamelum", "Dunukofia|dunukofia", "Ekwusigo|ekwusigo", "Idemili North | idemili north", "Ihiala|ihiala", "Njikoka|njikoka", "Nnewi north| nnewi north", "nnewi south| nnewi south", "Ogbaru|ogbaru", "Onitsha north|onitsha north", "Onitsha south | onitsha south", "Orumba North|orumba north", "Oyi|oyi"];
                }else if (state === "bauchi"){
                    lgaArray = ["Alkaleri|alkaleri", "Bauchi|bauchi", "Bogoro|bogoro", "Damban|damban", "Darazo|darazo", "Dass|dass", "Ganjuwa|ganjuwa","Giade|giade", "Itas/Gadau|itas/gadau","Jama'are|jama'are","Katagum|katagum", "Kirfi|kirfi", "Misau|misau", "Ningi|ningi", "Shira|shira", "Tafawa-Balewa|tafawa-balewa","Toro|toro","Warji|warji","Zaki|zaki"]; 
                }else if(state === "bayelsa"){
                    lgaArray = ["Brass|brass", "Ekeremor|ekeremor","Kolokuma/Opokuma|Kolokuma/Opokuma","Nembe|nembe","Ogbia|ogbia","Sagbama|sagbama","Southern Jaw|southern jaw", "yenegoa"] 
                }else if(state === "benue"){
                    lgaArray = ["Ado|ado", "Agatu|agatu", "Apa|apa", "Buruku|buruku", "Gboko|gboko", "Guma|guma", "Gwer East|gwer east", "Gwer West|gwer west","Kastina-Ala|kastina-ala","Kwande|kwande","Logo|logo","Makurdi|makurdi", "Obi|obi","Ogbadibo|ogbadibo","Oju|oju","Okpokwu|okpokwu","Ohimini|ohimini","Oturkpo|oturkpo","Tarka|tarka","Ukum|ukum","Ushongo|ushongo","Vandeikya|vandeikya"];
                }else if(state === "bornu"){
                    lgaArray = ["Abadam|abadam", "Askira|askira", "Bama|bama", "Bayo|bayo", "Biu| biu", "Chibok|chibok", "Damboa|damboa", "Dikwa|dikwa", "Gubio|gubio", "Guzamala|guzamala", "Gwoza|gwoza", "Hawul|hawul", "Jere|jere", "Kaga|kaga","Kala/Balge|kala/balge","Kondua|kondua","Kukuwa|kukuwa","Kwaya Kusar|Kwaya kusar", "Mafa|mafa","Magumeri|magumeri","Maiduguri|maiduguri","Marte|marte","Mobbar|mobbar","Monguno|monguno","Ngala|ngala","Nganzai|nganzai","Shani|shani"];
                }else if(state === "crossriver"){
                    lgaArray = ["Akpabuyo|akpabuyo", "Odukpani|Odukpani","Akamkpa|Akamkpa","Biase|Biase","Abi|Abi","Ikom|Ikom", "Yarkur|Yakur", "Odubra|Odubra", "Boki|boki", "Ogoja|Ogoja", "Boki|Boki", "Ogoja|Ogoja", "Yala|yala", "Obanliku|Obanliku", "Obudu|Obudu","Calabar South |Calabar South", "Etung|Etung", "Bekwara|Bekwara", "Bakassi|Bakassi", "Calabar Municipality| Calabar Municipality"];
                }else if(state === "delta"){
                    lgaArray = [ "Asaba Oshimili| Asaba Oshimili", "Aniocha|Aniocha", "Aniocha south| Aniocha south", "Ika South|Ika South", "Ika North-East| Ika North-East", "Ndokwa West| Ndokwa West", "Ndokwa East|Ndokwa East", "Isoko south| Isoko South","Isoko North| Isoko North", "Bomadi|Bomadi", "Burutu|Burutu", "Ughelli South| Ughelli South", "Ughelli North| Ughelli North", "Ethiope West | Ethiope West", "Ethiope East| Ethiope East", "Sapele| Sapele", "Okpe|Okpe", "Warri North|Warri North", "Warri South|Warri South", "Uvwie|Uvwie", "Udu|Udu", "Warri Central|Warri Central", "Ukwani|Ukwani","Oshimili North|Oshimili North", "Patani|Patani"];
                }else if (state === "ebonyi"){
                    lgaArray = ["Afikpo South| Afikpo South", "Afikpo North|Afikpo North", "Onicha|Onicha","Ohaozara|Ohaozara","Abakaliki|Abakaliki","Ishielu|Ishielu","lkwo|lkwo","Ezza|Ezza","Ezza South| Ezza South","Ohaukwu|Ohaukwu","Ebonyi|Ebonyi","Ivo|Ivo"];
                }else if (state === "edo"){
                    lgaArray = ["Esan North-East|Esan North-East","Esan Central|Esan Central","Esan West|Esan West","Egor|Egor","Ukpoba|Ukpoba","Central|Central","Etsako Central|Etsako Central","Igueben|Igueben","Oredo|Oredo","Ovia South-West|Ovia South-West","Ovia South-East|Ovia South-East","Orhionwon|Orhionwon","Uhunmwonde|Uhunmwonde","Etsako East|Etsako East","Esan South-East|Esan South-East"];
                }else if (state === "ekiti"){
                    lgaArray = ["Ado|Ado","Ekiti East|Ekiti East", "Ekiti West|Ekiti West","Emure/Ise/Orun|Emure/Ise/Orun","Ekiti South-West|Ekiti South-West","Ikare|Ikare","Irepodun|Irepodun","Ijero|Ijero","Ido/Osi|Ido/Osi","Oye|Oye","Ikole|Ikole","Moba|Moba","Gboyin|Gboyin","Efon|Efon","Ise/Orun|Ise/Orun","Ilejemeje|Ilejemeje"];
                }else if (state === "enugu"){
                    lgaArray = ["Enugu South|Enugu South","Igbo-Eze South|Igbo-Eze South","Enugu North|Enugu North","Nkanu|Nkanu","Udi Agwu|Udi Agwu","Oji-River|Oji-River","Ezeagu|Ezeagu","Igbo-Eze North|Igbo-Eze North","Isi-Uzo|Isi-Uzo","Nsukka|Nsukka","Igbo-Ekiti|Igbo-Ekiti","Uzo-Uwani|Uzo-Uwani","Enugu East|Enugu East","Aninri|Aninri","Nkanu East|Nkanu East","Udenu|Udenu"];
                }else if (state === "gombe"){
                    lgaArray = ["Akko|Akko","Balanga|Balanga","Billiri|Billiri","Dukku|Dukku","Kaltungo|Kaltungo","Kwami|Kwami","Shomgom|Shomgom","Funakaye|Funakaye","Gombe|Gombe","Nafada/Bajoga|Nafada/Bajoga","Yamaltu/Delta|Yamaltu/Delta"];
                }else if (state === "imo"){
                    lgaArray = ["Aboh-Mbaise|Aboh-Mbaise","Ahiazu-Mbaise|Ahiazu-Mbaise","Ehime-Mbano|Ehime-Mbano","Ezinihitte|Ezinihitte","Ideato North|Ideato North","Ideato South|Ideato South","Ihitte/Uboma|Ihitte/Uboma","Ikeduru|Ikeduru","Isiala Mbano|Isiala Mbano","Isu|Isu","Mbaitoli|Mbaitoli","Ngor-Okpala|Ngor-Okpala","Njaba|Njaba","Nwangele|Nwangele","Nkwerre|Nkwerre","Obowo|Obowo","Oguta|Oguta","Ohaji/Egbema|Ohaji/Egbema","Okigwe|Okigwe","Orlu|Orlu","Orsu|Orsu","Oru East|Oru East","Oru West|Oru West","Owerri-Manucipal|Owerri-Manucipal","Owerri North|Owerri North","Owerri West|Owerri West"];
                }else if (state === "jigawa"){
                    lgaArray = ["Auyo|Auyo","Babura|Babura","Birni Kudu|Birni Kudu","Biriniwa|Biriniwa","Buji|Buji","Dutse|Dutse","Gagarawa|Gagarawa","Garki|Garki","Gumel|Gumel","Guri|Guri","Gwaram|Gwaram","Gwiwa|Gwiwa","Hadejia|Hadejia","Jahun|Jahun","kafin Hausa|Kafin Hausa","Kaugama Kazaure|Kaugama Kazaure","Kiri Kasamma","Kiyawa|Kiyawa","Maigatari|Maigatari","Malam Madori|Malam Madori","Miga|Miga","Ringim|Ringim","Roni|Roni","Sule-Tankarkar|Sule-Tankarkar","Taura|Taura","Yankwasi|Yankwashi"];
                }else if (state === "kaduna"){
                    lgaArray = ["Birni-Gwari|Birni-Gwari","Chikun|Chikun","Giwa|Giwa","Igabi|Igabi","Ikara|Ikara","Jaba|Jaba","Jema'a|Jema'a","Kachia|Kachia","Kaduna North|Kaduna North","Kaduna South|Kaduna South","Kagarko|Kargako","Kajuru|kajuru","Kaura|Kaura","Kauru|Kauru","Kabau|Kabau","Kudan|Kudan","Lere|Lere","Makarfi|Makarfi","Sabon-Gari|Sabon-Gari","Sanga|Sanga","Soba|Soba","Zango-Kataf|Zango-Kataf","Zaria|Zaria"];
                }else if (state === "kano"){
                    lgaArray = ["Ajingi|Ajingi","Albasu|Albasu","Bagwai|Bagwai","Bebeji|Bebeji","Bichi|Bichi","Bunkure|Bunkure","Dala|Dala","Dambatta|Dambatta","Dawakin Kudu|Dawakin Kudu","Dawakin Tofa|Dawakin Tofa","Doguwa|Doguwa","Fagge|Fagge","Gabasawa|Gabasawa","Garko|Garko","Garum|Garum","Mallam|Mallam","Gaya|Gaya","Gezawa|Gezawa","Gwale|Gwale","Gwarzo|Gwarzo","Kabo|Kabo","Kano Manucipal|Kanno Manucipal","Karaye|Karaye","Kibiya|Kibiya","Kiru|Kiru","Kumbotso|Kombotso","Kunchi|Kunchi","Kura|Kura","Madobi|Madobi","Makoda|Makoda","Minjibir|Minjibir","Nasarawa|Nasarawa","Rano|Rano","Rimin Gado|Rimin Gado","Rogo|Rogo","Shanono|Shanono","Sumaila|Sumaila","Takali|Takali","Tarauni|Tarauni","Tofa|Tofa","Tsanyawa|Tsanyawa","Tudun Wada|Tudun Wada","Ungogo|Ungogo","Warawa|Warawa","Wudil|Wudil"];
                }else if (state === "kastina"){
                    lgaArray = ["Bakori|Bakori","Batagarawa|Batagarawa","Batsari|Batsari","Baure|Baure","Bindawa|Bindawa","Charanchi|Charanchi","Dandume|Dandume","Danja|Danja","Dutsi|Dutsi","Dutsin-Ma|Dutsin-Ma","Faskari|Faskari","Funtua|Funtua","Ingawa|Ingawa","Jibia|Jibia","Kafur|Kafur","Kaita|Kaita","Kankara|Kankara","Kankia|Kankia","Katsina|Katsina","Kurfi|Kurfi","Kusada|Kusada","Mai'Adua|Mai'Adua","Malumfashi|Malumfashi","Mani|Mani","Matazuu|Matazuu","Musawa|Musawa","Rimi|Rimi","Sabuwa|Sabuwa","Safana|Safana","Sandamu|Sandamu","Zango|Zango"];
                }else if (state === "kebbi"){
                    lgaArray = ["Aleiro|Aleiro","Arewa-Dandi|Arewa-Dandi","Argungu|Argungu","Augie|Augie","Bagudo|Bagudo","Birnin Kebbi|Birnin Kebbi","Bunza|Bunza","Dandi|Dandi","Fakai|Fakai","Gwandu|Gwandu","Jega|Jega","Kalgo|Kalgo","Koko/Besse|Koko/Besse","Maiyama|Maiyama","Ngaski|Ngaski","Sakaba|Sakaba","Shanga|Shanga","Suru|Suru","Wasagu/Danko|Wasagu/Danko","Yauri|Yauri","Zuru|Zuru"];
                }else if (state === "kogi"){
                     lgaArray = ["Adavi|Adavi","Ajaokuta|Ajaokuta","Ankpa|Ankpa","Bassa|Bassa","Dekina|Dekina","Ibaji|Ibaji","Idah|Idah","Igalamela-Odolu|Igalamela-Odolu","Ijumu|Ijumu","Kabba/Bunu|Kabba/Bunu","Kogi|Kogi","Lokoja|Lokoja","Mopa-Muro|Mopa-Muro","Ofu|Ofu","Ogori/Mangongo|Ogori/Mangongo","Okehi|Okehi","Okene|Okene","Olamabolo|Olamabolo","Omala|Omala","Yagba East|Yagba East","Yagba West|Yagba West"];
                }else if (state === "kwara"){
                    lgaArray = ["Asa|Asa","Baruten|Baruten","Edu|Edu","Ekiti|Ekiti","Ifelodun|Ifelodun","Ilorin East|Ilorin East","Ilorin West|Ilorin West","Irepodun|Irepodun","Isin|Isin","Kaiama|Kaiama","Moro|Moro","Offa|Offa","Oke-Ero|Oke-Ero","Oyun|Oyun","Pategi|Pategi"];
                }else if (state === "lagos"){
                    lgaArray = ["Agege|Agege","Ajeromi-Ifelodun|Ajeromi-Ifelodun","Alimosho|Alimosho","Amuwo-Odofin|Amuwo-Odofin","Apapa|Apapa","Badagry|Badagry","Epe|Epe","Eti-Osa|Eti-Osa","Ibeju/Lekki|Ibeju/Lekki","Ifako-Ijaye|Ifako-Ijaiye","Ikeja|Ikaja","Ikorodu|Ikorodu","Kosofe|Kosofe","Lagos Island|Lagos Island","Lagos Mainland|Lagos Mainland","Mushin|Mushin","Ojo|Ojo","Oshodi/Isolo|Oshodi/Isolo","Shomolu|Shomolu","Surulere|Surulere"];
                }else if (state === "nasarawa"){
                   lgaArray = ["Akwanga|Akwanga","Awe|Awe","Doma|Doma","Karu|Karu","Keana|Keana","Keffi|Keffi","Kokona|Kokona","Lafia|Lafia","Nasarawa|Nasarawa","Nasarawa-Eggon|Nasarawa-Eggon","Obi|Obi","Toto|Toto","Wamba|Wamba"];
                }else if ( state === "niger"){
                   lgaArray = ["Agaie|Agaie","Agwara|Agwara","Bida|Bida","Borgu|Borgu","Bosso|Bosso","Chanchaga|Chanchaga","Edati|Edati","Gbako|Gbako","Gurara|Gurara","Katcha|Katcha","Kontagora|Kontagora","Lapai|Lapai","Lavun|Lavun","Magama|Magama","Mariga|Mariga","Mashegu|Mashegu","Mokwa|Mokwa","Muya|Muya","Pailoro|Pailoro","Rafi|Rafi","Rijau|Rijau","Shiroro|Shiroro","Tafa|Tafa","Wushishi|Wushishi"];
                }else if ( state === "ogun"){
                    lgaArray = ["Abeokuta North|Abeokuta North","Abeokuta South|Abeokuta South","Ado-Odo/Ota|Ado-Odo/Ota","Egbado North|Egbado North","Egbado South|Egbado South","Ewekoro|Ewekoro","Ifo|Ifo","Ijebu East|Ijebu East","Ijebu North|Ijebu North","Ijebu North-East|Ijebu North-East","Ijebu Ode|Ijebu Ode","Ikenne|Ikenne","Imeko-Afon|Imeko-Afon","Ipokia|Ipokia","Obafemi-Owode|Obafemi-Owode","Ogun Waterside|Ogun Waterside","Odeda|Odeda","Odogbolu|Odogbolu","Remo North|Remo North","Shagamu|Shagamu"];
                }else if (state === "ondo"){
                    lgaArray = ["Akoko North-East|Akoko North-East","Akoko North-West|Akoko North-West","Akoko South-East|Akoko South-East","Akoko South-West|Akoko South-West","Akure North|Akure North","Akure South|Akure South","Ese-Odo|Ese-Odo","Idanre|Idanre","Ifedore|Ifedore","Ilaje|Ilaje","Ile-Oluji|Ile-Oluji","Okeigbo|Okeigbo","Irele|Irele","Odigbo|Odigbo","Okitipupa|Okitipupa","Ondo East|Ondo East","Ondo West|Ondo West","Ose|Ose","Owo|Owo"];
                }else if (state === "osun"){
                    lgaArray = ["Aiyedade|Aiyedade","Aiyedire|Aiyedire","Atakumosa East|Atakumosa East","Atakumosa West|Atakumosa West","Boluwaduro|Boluwaduro","Boripe|Boripe","Ede North|Ede North","Ede South|Ede South","Egbedore|Egbedore","Ejigbo|Ejigbo","Ife Central|Ife Central","Ife East|Ife East","Ife North|Ife North","Ife South| Ife South","Ifedayo|Ifedayo","Ifelodun|Ifelodun","Ila|Ila", "Ilesha East|Ilesha East","Ilesha West|Ilessha West","Irepodun|Irepodun","Irewole|Irewole","Isokan|Isokan","Iwo|Iwo","Obokun|Obokun","Odo-Otin|Odo-Otin","Ola-Oluwa|Ola-Oluwa","Olorunda|Olorunda","Oriade|Oriade","Orolo|Orolu","Osogbo|Osogbo"];
                }else if (state === "oyo"){
                    lgaArray = ["Afijio|Afijio","Akinyele|Akinyele","Atiba|Atiba","Atigbo|Atigbo","Egbeda|Egbeda","Ibadan Central|Ibadan Central","Ibadan North|Ibadan North","Ibadan North-West|Ibadan North-West","Ibadan South East|Ibadan South-East","Ibadan South-West|Ibadan South-West","Ibarapa Central|Ibarapa Central","Ibarapa East|Ibarapa East","Ibarapa North|Ibarapa North","Ido|Ido","Irepo|Irepo","Iseyin|Iseyin","Itesiwaju|Itesiwaju","Iwajowa|Iwajowa","Kajola|Kajola","Lagelu Ogbomosho North|Lagelu Ogbomosho North","Ogbomosho South|Ogbomosho South","Ogo Oluwa|Ogo Oluwa","Olorunsogs|Olorunsogo","Oluyole|Oluyole","Ona-Ara|Ona-Ara","Orelope|Orelope","Ori ire|Ori Ire","Oyo East|Oyo East","Oyo West|Oyo West","Saki East|Saki East","Saki West|Saki West","Surulere|Surulere"];
                }else if (state === "plateau"){
                    lgaArray = ["Barikin Ladi|Barikin Ladi","Bassa|Bassa","Bokkos|Bokkos","Jos East|Jos East","Jos North|Jos North","Jos South|Jos South","Kanam|Kanam","Kanke|Kanke","Langtang North|Langtang North","Langtang South|Langtang South","Mangu|Mangu","Mikang|Mikang","Pankshin|Pankshin","Qua;an Pan|Qua'an Pan","Riyom|Riyom","Shendam|Shendam","Wase|Wase"];
                }else if (state === "rivers"){
                    lgaArray = ["Abua/Odual|Abua/Odual","Ahoada East|Ahaoda East","Ahoada West|Ahaoda West","Akuku Toru|Akuku Toru","Andoni|Andoni","Asari-Toru|Asari-Toru","Bonny|Bonny","Degema|Degema","Emohua|Emohua","Eleme|Eleme","Etche|Etche","Gokana|Gokana","Ikwerre|Ikwerre","Khana|Khana","Obia/Akpor|Obia/Akpor","Ogba/Egbema/Ndoni|Ogba/Egbema/Ndoni","Ogu/Bolo|Ogu/Bolo","Okrika|Okrika","Omumma|Omumma","Opobo/Nkoro|Opobo/Nkoro","Oyigbo/Oyigbo","Port-Harcourt|Port-Harcourt","Tai|Tai"];
                }else if (state === "sokoto"){
                     lgaArray = ["Binji|Binji","Bodinga|Bodinga","Dange-Shnsi|Dange-Shinsi","Gada|Gada","Goronyo|Goronyo","Gudu|Gudu","Gawabawa|Gawabawa","Illela|Illela","Isa|Isa","Kware|Kware","Kebbe|Kebbe","Rabah|Rabah","Sabon Birni|Sabon Birni","Shagari|Shagari","Silame|Silame","Sokoto North|Sokoto North","Sokoto South|Sokoto South","Tanbuwal|Tanbuwal","Tqngaza|Tqngaza","Tureta|Tureta","Wamako|Wamako","Wurno|Wurno","Yabo|Yabo"];
                }else if (state === "taraba"){
                    lgaArray = ["Ardo-Kola|Ardo-Kola","Bali|bali","Donga|Donga","Gashaka|Gashaka","Cassol|Cassol","Ibi|Ibi","Jalingo|Jalingo","Karin-Lamido|Karin-Lamido","Kurmi|Kurmi","Lau|Lau","Sardauna|Sadauna","Takum|Takum","Ussa|Ussa","Wukari|Wukari","Yorro|Yorro","Zing|Zing"];
                }else if (state === "yobe"){
                    lgaArray = ["Bade|Bade","Bursari|Bursari","Damaturu|Damaturu","Fika|Fika","Fune|Fune","Geidam|Geidam","Gujba|Gujba","Jakusko|Jakusko","Karasuwa|Karasuwa","Karawa|Karawa","Machina|Machina","Nangere|Nangere","Nguru Potiskum|Nguru Potiskum","Tarmua|Tarmua","Yunusari|Yunusari","Yusufari|Yusufari"];
                }else if (state === "zamfara"){
                    lgaArray = ["AnkavAnka","Bakura|Bakura","Birnin Magaji|Birnin Magaji","Bukkuyum|Bukkuyum","Bungudu|Bungudu","Gummi|Gummi","Guasu|Gusau","Kaura|kaura","Namoda|Namoda","Maradun|Maradun","Maru|Maru","Shinkafi|Shinkafi","Talata Mafara|Talata Mafara","Tsafe|Tsafe","Zurmi|Zurmi"];
                }else{

                 return false 
                };

                 for (var lgaOption in lgaArray){
                  var selectedLga = lgaArray[lgaOption].split("|");
                  var optionsFeed =  document.createElement("option"); 
                  optionsFeed.value = selectedLga[1]; 
                  optionsFeed.innerHTML = selectedLga[0];
                 console.log(selectedLga)
                 lga.appendChild(optionsFeed)
                //$(div.lga).find(select).appendChild()

                 }

            }); 



               // parsing local goverment html|values based on selected state for employment section

              $('#orgState').change(function(){


                var state = document.getElementById('orgState').value; 
                console.log(state);
                var lga = document.getElementById('orgLga');
                var lgalabel = document.getElementById('orgLgaLabel');
                lga.parentNode.removeChild(lga);
                lgalabel.parentNode.removeChild(lgalabel);
                var newSelectBox = document.createElement('select');
                newSelectBox.id = 'orgLga';
                newSelectBox.setAttribute( 'class', 'form-control language col-sm-7 mx-auto' ); 
                newSelectBox.style = 'border: 1px solid white';
                newSelectBox.name = 'organisationlga';
                var newLabel = document.createElement('label');
                newLabel.setAttribute('class', 'field-label');
                newLabel.id = "orgLgaLabel";                 
                var newLabelText = document.createTextNode('LGA');
                var selectHolder = document.getElementById('orgLgaHolder');
                selectHolder.appendChild(newLabel); 
                newLabel.appendChild(newLabelText);
                selectHolder.appendChild(newSelectBox);
                var lga = document.getElementById('orgLga');

                
                
               if (state === "abia"){

                    lgaArray = [ "Aba North| aba north", "Aba South| aba south", "Arochukwu| Arochukwu", "Bende|bende", "Ikwuano| ikwuano", "Isiala-Ngwa North | isiala-ngwa north", "Isiala-Ngwa South | isiala-ngwa south", "Isuikwato| isuikwato", "Obi Nwa| obi nwa", "Ohafia| ohafia", "Osisioma | osisioma","Ngwa| ngwa", "Ugwunagbo| ugwunagbo", "Ukwa East| ukwa", "Ukwa West| ukwa west","Umuahia North| umuahia north","Umuahia South| umuahia south", "Umu-Neochi| umu-neochi" ];
                   


                }else if (state === "abuja"){
                    lgaArray =  [ "Gwagwalada|gwagwalada", "Kuje| kuje", "Abaji| abaji", "Abuja Municipal| Abuja municipal", "Bwari| bwari", "Kwali|kwali" ];

                }else if (state === "adamawa"){
                    lgaArray  = ["Demsa|demsa", "Fufore|fufore", "Ganaye|ganaye", "Gireri|gireri", "Gombi|gombi", "Guyuk|guyuk", "Hong|hong", "Jada|jada", "Lamurde|lamurde", "Madagali|madagali", "Maiha|maiha", "Mayo-Belwa|mayo-belwa", "Michika|michika", "Mubi North|mubi north", "Mubi South| mubi south", "Numan|numan", "Shelleng|shelleng", "Song|song", "Toungo|toungo", "Yola North| yola north", "Yola South|yola south"];

                }else if (state === "akwaibom"){
                    lgaArray = ["Abak|abak", "Eastern Obolo|eastern obolo", "Eket|eket","Esit Eket|esit eket","Essien Udim|essien udim", "Etim Ekpo|etim ekpo", "Etinan|etinan", "Ibeno|ibeno", "Ibeskipo Asutan|ibeskipo asutan","Ibiono Ibom|ibiono ibom","ika|ika","ikono|ikono", "Ikot Abasi|ikot abasi","Ikot Ekpene|ikot ekpene", "Ini|ini","Itu|itu","Mbo|mbo","Mkpat Enin|mkpat enin","Nsit Atai|nsit atai","Nsit Ibom|nsit ibom", "Nsit Ubium|nsit ubium","Obot Akara|obot akara","Okobo|okobo","Onna | onna","Oron|oron","Oruk Anam| oruk anam", "Udung Uko | udung uko", "ukanafun|ukanafun", "Uruan|uruan", "Urue-Offong/Oruko| urue-offong/oruko"];
                }else if (state === "anambra"){
                    lgaArray = ["Aguata|aguata", "Anambra East | anambra east", "Anambra West|anambra west", "Anaocha|anaocha", "Awka North|awka north", "Ayamelum|ayamelum", "Dunukofia|dunukofia", "Ekwusigo|ekwusigo", "Idemili North | idemili north", "Ihiala|ihiala", "Njikoka|njikoka", "Nnewi north| nnewi north", "nnewi south| nnewi south", "Ogbaru|ogbaru", "Onitsha north|onitsha north", "Onitsha south | onitsha south", "Orumba North|orumba north", "Oyi|oyi"];
                }else if (state === "bauchi"){
                    lgaArray = ["Alkaleri|alkaleri", "Bauchi|bauchi", "Bogoro|bogoro", "Damban|damban", "Darazo|darazo", "Dass|dass", "Ganjuwa|ganjuwa","Giade|giade", "Itas/Gadau|itas/gadau","Jama'are|jama'are","Katagum|katagum", "Kirfi|kirfi", "Misau|misau", "Ningi|ningi", "Shira|shira", "Tafawa-Balewa|tafawa-balewa","Toro|toro","Warji|warji","Zaki|zaki"]; 
                }else if(state === "bayelsa"){
                    lgaArray = ["Brass|brass", "Ekeremor|ekeremor","Kolokuma/Opokuma|Kolokuma/Opokuma","Nembe|nembe","Ogbia|ogbia","Sagbama|sagbama","Southern Jaw|southern jaw", "yenegoa"] 
                }else if(state === "benue"){
                    lgaArray = ["Ado|ado", "Agatu|agatu", "Apa|apa", "Buruku|buruku", "Gboko|gboko", "Guma|guma", "Gwer East|gwer east", "Gwer West|gwer west","Kastina-Ala|kastina-ala","Kwande|kwande","Logo|logo","Makurdi|makurdi", "Obi|obi","Ogbadibo|ogbadibo","Oju|oju","Okpokwu|okpokwu","Ohimini|ohimini","Oturkpo|oturkpo","Tarka|tarka","Ukum|ukum","Ushongo|ushongo","Vandeikya|vandeikya"];
                }else if(state === "bornu"){
                    lgaArray = ["Abadam|abadam", "Askira|askira", "Bama|bama", "Bayo|bayo", "Biu| biu", "Chibok|chibok", "Damboa|damboa", "Dikwa|dikwa", "Gubio|gubio", "Guzamala|guzamala", "Gwoza|gwoza", "Hawul|hawul", "Jere|jere", "Kaga|kaga","Kala/Balge|kala/balge","Kondua|kondua","Kukuwa|kukuwa","Kwaya Kusar|Kwaya kusar", "Mafa|mafa","Magumeri|magumeri","Maiduguri|maiduguri","Marte|marte","Mobbar|mobbar","Monguno|monguno","Ngala|ngala","Nganzai|nganzai","Shani|shani"];
                }else if(state === "crossriver"){
                    lgaArray = ["Akpabuyo|akpabuyo", "Odukpani|Odukpani","Akamkpa|Akamkpa","Biase|Biase","Abi|Abi","Ikom|Ikom", "Yarkur|Yakur", "Odubra|Odubra", "Boki|boki", "Ogoja|Ogoja", "Boki|Boki", "Ogoja|Ogoja", "Yala|yala", "Obanliku|Obanliku", "Obudu|Obudu","Calabar South |Calabar South", "Etung|Etung", "Bekwara|Bekwara", "Bakassi|Bakassi", "Calabar Municipality| Calabar Municipality"];
                }else if(state === "delta"){
                    lgaArray = [ "Asaba Oshimili| Asaba Oshimili", "Aniocha|Aniocha", "Aniocha south| Aniocha south", "Ika South|Ika South", "Ika North-East| Ika North-East", "Ndokwa West| Ndokwa West", "Ndokwa East|Ndokwa East", "Isoko south| Isoko South","Isoko North| Isoko North", "Bomadi|Bomadi", "Burutu|Burutu", "Ughelli South| Ughelli South", "Ughelli North| Ughelli North", "Ethiope West | Ethiope West", "Ethiope East| Ethiope East", "Sapele| Sapele", "Okpe|Okpe", "Warri North|Warri North", "Warri South|Warri South", "Uvwie|Uvwie", "Udu|Udu", "Warri Central|Warri Central", "Ukwani|Ukwani","Oshimili North|Oshimili North", "Patani|Patani"];
                }else if (state === "ebonyi"){
                    lgaArray = ["Afikpo South| Afikpo South", "Afikpo North|Afikpo North", "Onicha|Onicha","Ohaozara|Ohaozara","Abakaliki|Abakaliki","Ishielu|Ishielu","lkwo|lkwo","Ezza|Ezza","Ezza South| Ezza South","Ohaukwu|Ohaukwu","Ebonyi|Ebonyi","Ivo|Ivo"];
                }else if (state === "edo"){
                    lgaArray = ["Esan North-East|Esan North-East","Esan Central|Esan Central","Esan West|Esan West","Egor|Egor","Ukpoba|Ukpoba","Central|Central","Etsako Central|Etsako Central","Igueben|Igueben","Oredo|Oredo","Ovia South-West|Ovia South-West","Ovia South-East|Ovia South-East","Orhionwon|Orhionwon","Uhunmwonde|Uhunmwonde","Etsako East|Etsako East","Esan South-East|Esan South-East"];
                }else if (state === "ekiti"){
                    lgaArray = ["Ado|Ado","Ekiti East|Ekiti East", "Ekiti West|Ekiti West","Emure/Ise/Orun|Emure/Ise/Orun","Ekiti South-West|Ekiti South-West","Ikare|Ikare","Irepodun|Irepodun","Ijero|Ijero","Ido/Osi|Ido/Osi","Oye|Oye","Ikole|Ikole","Moba|Moba","Gboyin|Gboyin","Efon|Efon","Ise/Orun|Ise/Orun","Ilejemeje|Ilejemeje"];
                }else if (state === "enugu"){
                    lgaArray = ["Enugu South|Enugu South","Igbo-Eze South|Igbo-Eze South","Enugu North|Enugu North","Nkanu|Nkanu","Udi Agwu|Udi Agwu","Oji-River|Oji-River","Ezeagu|Ezeagu","Igbo-Eze North|Igbo-Eze North","Isi-Uzo|Isi-Uzo","Nsukka|Nsukka","Igbo-Ekiti|Igbo-Ekiti","Uzo-Uwani|Uzo-Uwani","Enugu East|Enugu East","Aninri|Aninri","Nkanu East|Nkanu East","Udenu|Udenu"];
                }else if (state === "gombe"){
                    lgaArray = ["Akko|Akko","Balanga|Balanga","Billiri|Billiri","Dukku|Dukku","Kaltungo|Kaltungo","Kwami|Kwami","Shomgom|Shomgom","Funakaye|Funakaye","Gombe|Gombe","Nafada/Bajoga|Nafada/Bajoga","Yamaltu/Delta|Yamaltu/Delta"];
                }else if (state === "imo"){
                    lgaArray = ["Aboh-Mbaise|Aboh-Mbaise","Ahiazu-Mbaise|Ahiazu-Mbaise","Ehime-Mbano|Ehime-Mbano","Ezinihitte|Ezinihitte","Ideato North|Ideato North","Ideato South|Ideato South","Ihitte/Uboma|Ihitte/Uboma","Ikeduru|Ikeduru","Isiala Mbano|Isiala Mbano","Isu|Isu","Mbaitoli|Mbaitoli","Ngor-Okpala|Ngor-Okpala","Njaba|Njaba","Nwangele|Nwangele","Nkwerre|Nkwerre","Obowo|Obowo","Oguta|Oguta","Ohaji/Egbema|Ohaji/Egbema","Okigwe|Okigwe","Orlu|Orlu","Orsu|Orsu","Oru East|Oru East","Oru West|Oru West","Owerri-Manucipal|Owerri-Manucipal","Owerri North|Owerri North","Owerri West|Owerri West"];
                }else if (state === "jigawa"){
                    lgaArray = ["Auyo|Auyo","Babura|Babura","Birni Kudu|Birni Kudu","Biriniwa|Biriniwa","Buji|Buji","Dutse|Dutse","Gagarawa|Gagarawa","Garki|Garki","Gumel|Gumel","Guri|Guri","Gwaram|Gwaram","Gwiwa|Gwiwa","Hadejia|Hadejia","Jahun|Jahun","kafin Hausa|Kafin Hausa","Kaugama Kazaure|Kaugama Kazaure","Kiri Kasamma","Kiyawa|Kiyawa","Maigatari|Maigatari","Malam Madori|Malam Madori","Miga|Miga","Ringim|Ringim","Roni|Roni","Sule-Tankarkar|Sule-Tankarkar","Taura|Taura","Yankwasi|Yankwashi"];
                }else if (state === "kaduna"){
                    lgaArray = ["Birni-Gwari|Birni-Gwari","Chikun|Chikun","Giwa|Giwa","Igabi|Igabi","Ikara|Ikara","Jaba|Jaba","Jema'a|Jema'a","Kachia|Kachia","Kaduna North|Kaduna North","Kaduna South|Kaduna South","Kagarko|Kargako","Kajuru|kajuru","Kaura|Kaura","Kauru|Kauru","Kabau|Kabau","Kudan|Kudan","Lere|Lere","Makarfi|Makarfi","Sabon-Gari|Sabon-Gari","Sanga|Sanga","Soba|Soba","Zango-Kataf|Zango-Kataf","Zaria|Zaria"];
                }else if (state === "kano"){
                    lgaArray = ["Ajingi|Ajingi","Albasu|Albasu","Bagwai|Bagwai","Bebeji|Bebeji","Bichi|Bichi","Bunkure|Bunkure","Dala|Dala","Dambatta|Dambatta","Dawakin Kudu|Dawakin Kudu","Dawakin Tofa|Dawakin Tofa","Doguwa|Doguwa","Fagge|Fagge","Gabasawa|Gabasawa","Garko|Garko","Garum|Garum","Mallam|Mallam","Gaya|Gaya","Gezawa|Gezawa","Gwale|Gwale","Gwarzo|Gwarzo","Kabo|Kabo","Kano Manucipal|Kanno Manucipal","Karaye|Karaye","Kibiya|Kibiya","Kiru|Kiru","Kumbotso|Kombotso","Kunchi|Kunchi","Kura|Kura","Madobi|Madobi","Makoda|Makoda","Minjibir|Minjibir","Nasarawa|Nasarawa","Rano|Rano","Rimin Gado|Rimin Gado","Rogo|Rogo","Shanono|Shanono","Sumaila|Sumaila","Takali|Takali","Tarauni|Tarauni","Tofa|Tofa","Tsanyawa|Tsanyawa","Tudun Wada|Tudun Wada","Ungogo|Ungogo","Warawa|Warawa","Wudil|Wudil"];
                }else if (state === "kastina"){
                    lgaArray = ["Bakori|Bakori","Batagarawa|Batagarawa","Batsari|Batsari","Baure|Baure","Bindawa|Bindawa","Charanchi|Charanchi","Dandume|Dandume","Danja|Danja","Dutsi|Dutsi","Dutsin-Ma|Dutsin-Ma","Faskari|Faskari","Funtua|Funtua","Ingawa|Ingawa","Jibia|Jibia","Kafur|Kafur","Kaita|Kaita","Kankara|Kankara","Kankia|Kankia","Katsina|Katsina","Kurfi|Kurfi","Kusada|Kusada","Mai'Adua|Mai'Adua","Malumfashi|Malumfashi","Mani|Mani","Matazuu|Matazuu","Musawa|Musawa","Rimi|Rimi","Sabuwa|Sabuwa","Safana|Safana","Sandamu|Sandamu","Zango|Zango"];
                }else if (state === "kebbi"){
                    lgaArray = ["Aleiro|Aleiro","Arewa-Dandi|Arewa-Dandi","Argungu|Argungu","Augie|Augie","Bagudo|Bagudo","Birnin Kebbi|Birnin Kebbi","Bunza|Bunza","Dandi|Dandi","Fakai|Fakai","Gwandu|Gwandu","Jega|Jega","Kalgo|Kalgo","Koko/Besse|Koko/Besse","Maiyama|Maiyama","Ngaski|Ngaski","Sakaba|Sakaba","Shanga|Shanga","Suru|Suru","Wasagu/Danko|Wasagu/Danko","Yauri|Yauri","Zuru|Zuru"];
                }else if (state === "kogi"){
                     lgaArray = ["Adavi|Adavi","Ajaokuta|Ajaokuta","Ankpa|Ankpa","Bassa|Bassa","Dekina|Dekina","Ibaji|Ibaji","Idah|Idah","Igalamela-Odolu|Igalamela-Odolu","Ijumu|Ijumu","Kabba/Bunu|Kabba/Bunu","Kogi|Kogi","Lokoja|Lokoja","Mopa-Muro|Mopa-Muro","Ofu|Ofu","Ogori/Mangongo|Ogori/Mangongo","Okehi|Okehi","Okene|Okene","Olamabolo|Olamabolo","Omala|Omala","Yagba East|Yagba East","Yagba West|Yagba West"];
                }else if (state === "kwara"){
                    lgaArray = ["Asa|Asa","Baruten|Baruten","Edu|Edu","Ekiti|Ekiti","Ifelodun|Ifelodun","Ilorin East|Ilorin East","Ilorin West|Ilorin West","Irepodun|Irepodun","Isin|Isin","Kaiama|Kaiama","Moro|Moro","Offa|Offa","Oke-Ero|Oke-Ero","Oyun|Oyun","Pategi|Pategi"];
                }else if (state === "lagos"){
                    lgaArray = ["Agege|Agege","Ajeromi-Ifelodun|Ajeromi-Ifelodun","Alimosho|Alimosho","Amuwo-Odofin|Amuwo-Odofin","Apapa|Apapa","Badagry|Badagry","Epe|Epe","Eti-Osa|Eti-Osa","Ibeju/Lekki|Ibeju/Lekki","Ifako-Ijaye|Ifako-Ijaiye","Ikeja|Ikaja","Ikorodu|Ikorodu","Kosofe|Kosofe","Lagos Island|Lagos Island","Lagos Mainland|Lagos Mainland","Mushin|Mushin","Ojo|Ojo","Oshodi/Isolo|Oshodi/Isolo","Shomolu|Shomolu","Surulere|Surulere"];
                }else if (state === "nasarawa"){
                   lgaArray = ["Akwanga|Akwanga","Awe|Awe","Doma|Doma","Karu|Karu","Keana|Keana","Keffi|Keffi","Kokona|Kokona","Lafia|Lafia","Nasarawa|Nasarawa","Nasarawa-Eggon|Nasarawa-Eggon","Obi|Obi","Toto|Toto","Wamba|Wamba"];
                }else if ( state === "niger"){
                   lgaArray = ["Agaie|Agaie","Agwara|Agwara","Bida|Bida","Borgu|Borgu","Bosso|Bosso","Chanchaga|Chanchaga","Edati|Edati","Gbako|Gbako","Gurara|Gurara","Katcha|Katcha","Kontagora|Kontagora","Lapai|Lapai","Lavun|Lavun","Magama|Magama","Mariga|Mariga","Mashegu|Mashegu","Mokwa|Mokwa","Muya|Muya","Pailoro|Pailoro","Rafi|Rafi","Rijau|Rijau","Shiroro|Shiroro","Tafa|Tafa","Wushishi|Wushishi"];
                }else if ( state === "ogun"){
                    lgaArray = ["Abeokuta North|Abeokuta North","Abeokuta South|Abeokuta South","Ado-Odo/Ota|Ado-Odo/Ota","Egbado North|Egbado North","Egbado South|Egbado South","Ewekoro|Ewekoro","Ifo|Ifo","Ijebu East|Ijebu East","Ijebu North|Ijebu North","Ijebu North-East|Ijebu North-East","Ijebu Ode|Ijebu Ode","Ikenne|Ikenne","Imeko-Afon|Imeko-Afon","Ipokia|Ipokia","Obafemi-Owode|Obafemi-Owode","Ogun Waterside|Ogun Waterside","Odeda|Odeda","Odogbolu|Odogbolu","Remo North|Remo North","Shagamu|Shagamu"];
                }else if (state === "ondo"){
                    lgaArray = ["Akoko North-East|Akoko North-East","Akoko North-West|Akoko North-West","Akoko South-East|Akoko South-East","Akoko South-West|Akoko South-West","Akure North|Akure North","Akure South|Akure South","Ese-Odo|Ese-Odo","Idanre|Idanre","Ifedore|Ifedore","Ilaje|Ilaje","Ile-Oluji|Ile-Oluji","Okeigbo|Okeigbo","Irele|Irele","Odigbo|Odigbo","Okitipupa|Okitipupa","Ondo East|Ondo East","Ondo West|Ondo West","Ose|Ose","Owo|Owo"];
                }else if (state === "osun"){
                    lgaArray = ["Aiyedade|Aiyedade","Aiyedire|Aiyedire","Atakumosa East|Atakumosa East","Atakumosa West|Atakumosa West","Boluwaduro|Boluwaduro","Boripe|Boripe","Ede North|Ede North","Ede South|Ede South","Egbedore|Egbedore","Ejigbo|Ejigbo","Ife Central|Ife Central","Ife East|Ife East","Ife North|Ife North","Ife South| Ife South","Ifedayo|Ifedayo","Ifelodun|Ifelodun","Ila|Ila", "Ilesha East|Ilesha East","Ilesha West|Ilessha West","Irepodun|Irepodun","Irewole|Irewole","Isokan|Isokan","Iwo|Iwo","Obokun|Obokun","Odo-Otin|Odo-Otin","Ola-Oluwa|Ola-Oluwa","Olorunda|Olorunda","Oriade|Oriade","Orolo|Orolu","Osogbo|Osogbo"];
                }else if (state === "oyo"){
                    lgaArray = ["Afijio|Afijio","Akinyele|Akinyele","Atiba|Atiba","Atigbo|Atigbo","Egbeda|Egbeda","Ibadan Central|Ibadan Central","Ibadan North|Ibadan North","Ibadan North-West|Ibadan North-West","Ibadan South East|Ibadan South-East","Ibadan South-West|Ibadan South-West","Ibarapa Central|Ibarapa Central","Ibarapa East|Ibarapa East","Ibarapa North|Ibarapa North","Ido|Ido","Irepo|Irepo","Iseyin|Iseyin","Itesiwaju|Itesiwaju","Iwajowa|Iwajowa","Kajola|Kajola","Lagelu Ogbomosho North|Lagelu Ogbomosho North","Ogbomosho South|Ogbomosho South","Ogo Oluwa|Ogo Oluwa","Olorunsogs|Olorunsogo","Oluyole|Oluyole","Ona-Ara|Ona-Ara","Orelope|Orelope","Ori ire|Ori Ire","Oyo East|Oyo East","Oyo West|Oyo West","Saki East|Saki East","Saki West|Saki West","Surulere|Surulere"];
                }else if (state === "plateau"){
                    lgaArray = ["Barikin Ladi|Barikin Ladi","Bassa|Bassa","Bokkos|Bokkos","Jos East|Jos East","Jos North|Jos North","Jos South|Jos South","Kanam|Kanam","Kanke|Kanke","Langtang North|Langtang North","Langtang South|Langtang South","Mangu|Mangu","Mikang|Mikang","Pankshin|Pankshin","Qua;an Pan|Qua'an Pan","Riyom|Riyom","Shendam|Shendam","Wase|Wase"];
                }else if (state === "rivers"){
                    lgaArray = ["Abua/Odual|Abua/Odual","Ahoada East|Ahaoda East","Ahoada West|Ahaoda West","Akuku Toru|Akuku Toru","Andoni|Andoni","Asari-Toru|Asari-Toru","Bonny|Bonny","Degema|Degema","Emohua|Emohua","Eleme|Eleme","Etche|Etche","Gokana|Gokana","Ikwerre|Ikwerre","Khana|Khana","Obia/Akpor|Obia/Akpor","Ogba/Egbema/Ndoni|Ogba/Egbema/Ndoni","Ogu/Bolo|Ogu/Bolo","Okrika|Okrika","Omumma|Omumma","Opobo/Nkoro|Opobo/Nkoro","Oyigbo/Oyigbo","Port-Harcourt|Port-Harcourt","Tai|Tai"];
                }else if (state === "sokoto"){
                     lgaArray = ["Binji|Binji","Bodinga|Bodinga","Dange-Shnsi|Dange-Shinsi","Gada|Gada","Goronyo|Goronyo","Gudu|Gudu","Gawabawa|Gawabawa","Illela|Illela","Isa|Isa","Kware|Kware","Kebbe|Kebbe","Rabah|Rabah","Sabon Birni|Sabon Birni","Shagari|Shagari","Silame|Silame","Sokoto North|Sokoto North","Sokoto South|Sokoto South","Tanbuwal|Tanbuwal","Tqngaza|Tqngaza","Tureta|Tureta","Wamako|Wamako","Wurno|Wurno","Yabo|Yabo"];
                }else if (state === "taraba"){
                    lgaArray = ["Ardo-Kola|Ardo-Kola","Bali|bali","Donga|Donga","Gashaka|Gashaka","Cassol|Cassol","Ibi|Ibi","Jalingo|Jalingo","Karin-Lamido|Karin-Lamido","Kurmi|Kurmi","Lau|Lau","Sardauna|Sadauna","Takum|Takum","Ussa|Ussa","Wukari|Wukari","Yorro|Yorro","Zing|Zing"];
                }else if (state === "yobe"){
                    lgaArray = ["Bade|Bade","Bursari|Bursari","Damaturu|Damaturu","Fika|Fika","Fune|Fune","Geidam|Geidam","Gujba|Gujba","Jakusko|Jakusko","Karasuwa|Karasuwa","Karawa|Karawa","Machina|Machina","Nangere|Nangere","Nguru Potiskum|Nguru Potiskum","Tarmua|Tarmua","Yunusari|Yunusari","Yusufari|Yusufari"];
                }else if (state === "zamfara"){
                    lgaArray = ["AnkavAnka","Bakura|Bakura","Birnin Magaji|Birnin Magaji","Bukkuyum|Bukkuyum","Bungudu|Bungudu","Gummi|Gummi","Guasu|Gusau","Kaura|kaura","Namoda|Namoda","Maradun|Maradun","Maru|Maru","Shinkafi|Shinkafi","Talata Mafara|Talata Mafara","Tsafe|Tsafe","Zurmi|Zurmi"];
                }else{

                 return false 
                };

                 for (var lgaOption in lgaArray){
                  var selectedLga = lgaArray[lgaOption].split("|");
                  var optionsFeed =  document.createElement("option"); 
                  optionsFeed.value = selectedLga[1]; 
                  optionsFeed.innerHTML = selectedLga[0];
                 console.log(selectedLga)
                 lga.appendChild(optionsFeed)

                 }

            }); 


               // parsing local goverment html|values based on selected state for next of kin section

              $('#k-soo').change(function(){


                var state = document.getElementById('k-soo').value; 
                console.log(state);
                var lga = document.getElementById('k-lga');
                var lgalabel = document.getElementById('k-lga-label');
                lga.parentNode.removeChild(lga);
                lgalabel.parentNode.removeChild(lgalabel);
                var newSelectBox = document.createElement('select');
                newSelectBox.id = 'k-lga';
                newSelectBox.setAttribute( 'class', 'form-control language col-sm-7 mx-auto' ); 
                newSelectBox.style = 'border: 1px solid white';
                newSelectBox.name = 'kinlga';
                var newLabel = document.createElement('label');
                newLabel.setAttribute('class','field-label');
                newLabel.id = "k-lga-label";                 
                var newLabelText = document.createTextNode('LGA');
                var selectHolder = document.getElementById('k-lga-holder');
                selectHolder.appendChild(newLabel); 
                newLabel.appendChild(newLabelText);
                selectHolder.appendChild(newSelectBox);
                var lga = document.getElementById('k-lga');

                
                
                   if (state === "abia"){

                    lgaArray = [ "Aba North| aba north", "Aba South| aba south", "Arochukwu| Arochukwu", "Bende|bende", "Ikwuano| ikwuano", "Isiala-Ngwa North | isiala-ngwa north", "Isiala-Ngwa South | isiala-ngwa south", "Isuikwato| isuikwato", "Obi Nwa| obi nwa", "Ohafia| ohafia", "Osisioma | osisioma","Ngwa| ngwa", "Ugwunagbo| ugwunagbo", "Ukwa East| ukwa", "Ukwa West| ukwa west","Umuahia North| umuahia north","Umuahia South| umuahia south", "Umu-Neochi| umu-neochi" ];
                   


                }else if (state === "abuja"){
                    lgaArray =  [ "Gwagwalada|gwagwalada", "Kuje| kuje", "Abaji| abaji", "Abuja Municipal| Abuja municipal", "Bwari| bwari", "Kwali|kwali" ];

                }else if (state === "adamawa"){
                    lgaArray  = ["Demsa|demsa", "Fufore|fufore", "Ganaye|ganaye", "Gireri|gireri", "Gombi|gombi", "Guyuk|guyuk", "Hong|hong", "Jada|jada", "Lamurde|lamurde", "Madagali|madagali", "Maiha|maiha", "Mayo-Belwa|mayo-belwa", "Michika|michika", "Mubi North|mubi north", "Mubi South| mubi south", "Numan|numan", "Shelleng|shelleng", "Song|song", "Toungo|toungo", "Yola North| yola north", "Yola South|yola south"];

                }else if (state === "akwaibom"){
                    lgaArray = ["Abak|abak", "Eastern Obolo|eastern obolo", "Eket|eket","Esit Eket|esit eket","Essien Udim|essien udim", "Etim Ekpo|etim ekpo", "Etinan|etinan", "Ibeno|ibeno", "Ibeskipo Asutan|ibeskipo asutan","Ibiono Ibom|ibiono ibom","ika|ika","ikono|ikono", "Ikot Abasi|ikot abasi","Ikot Ekpene|ikot ekpene", "Ini|ini","Itu|itu","Mbo|mbo","Mkpat Enin|mkpat enin","Nsit Atai|nsit atai","Nsit Ibom|nsit ibom", "Nsit Ubium|nsit ubium","Obot Akara|obot akara","Okobo|okobo","Onna | onna","Oron|oron","Oruk Anam| oruk anam", "Udung Uko | udung uko", "ukanafun|ukanafun", "Uruan|uruan", "Urue-Offong/Oruko| urue-offong/oruko"];
                }else if (state === "anambra"){
                    lgaArray = ["Aguata|aguata", "Anambra East | anambra east", "Anambra West|anambra west", "Anaocha|anaocha", "Awka North|awka north", "Ayamelum|ayamelum", "Dunukofia|dunukofia", "Ekwusigo|ekwusigo", "Idemili North | idemili north", "Ihiala|ihiala", "Njikoka|njikoka", "Nnewi north| nnewi north", "nnewi south| nnewi south", "Ogbaru|ogbaru", "Onitsha north|onitsha north", "Onitsha south | onitsha south", "Orumba North|orumba north", "Oyi|oyi"];
                }else if (state === "bauchi"){
                    lgaArray = ["Alkaleri|alkaleri", "Bauchi|bauchi", "Bogoro|bogoro", "Damban|damban", "Darazo|darazo", "Dass|dass", "Ganjuwa|ganjuwa","Giade|giade", "Itas/Gadau|itas/gadau","Jama'are|jama'are","Katagum|katagum", "Kirfi|kirfi", "Misau|misau", "Ningi|ningi", "Shira|shira", "Tafawa-Balewa|tafawa-balewa","Toro|toro","Warji|warji","Zaki|zaki"]; 
                }else if(state === "bayelsa"){
                    lgaArray = ["Brass|brass", "Ekeremor|ekeremor","Kolokuma/Opokuma|Kolokuma/Opokuma","Nembe|nembe","Ogbia|ogbia","Sagbama|sagbama","Southern Jaw|southern jaw", "yenegoa"] 
                }else if(state === "benue"){
                    lgaArray = ["Ado|ado", "Agatu|agatu", "Apa|apa", "Buruku|buruku", "Gboko|gboko", "Guma|guma", "Gwer East|gwer east", "Gwer West|gwer west","Kastina-Ala|kastina-ala","Kwande|kwande","Logo|logo","Makurdi|makurdi", "Obi|obi","Ogbadibo|ogbadibo","Oju|oju","Okpokwu|okpokwu","Ohimini|ohimini","Oturkpo|oturkpo","Tarka|tarka","Ukum|ukum","Ushongo|ushongo","Vandeikya|vandeikya"];
                }else if(state === "bornu"){
                    lgaArray = ["Abadam|abadam", "Askira|askira", "Bama|bama", "Bayo|bayo", "Biu| biu", "Chibok|chibok", "Damboa|damboa", "Dikwa|dikwa", "Gubio|gubio", "Guzamala|guzamala", "Gwoza|gwoza", "Hawul|hawul", "Jere|jere", "Kaga|kaga","Kala/Balge|kala/balge","Kondua|kondua","Kukuwa|kukuwa","Kwaya Kusar|Kwaya kusar", "Mafa|mafa","Magumeri|magumeri","Maiduguri|maiduguri","Marte|marte","Mobbar|mobbar","Monguno|monguno","Ngala|ngala","Nganzai|nganzai","Shani|shani"];
                }else if(state === "crossriver"){
                    lgaArray = ["Akpabuyo|akpabuyo", "Odukpani|Odukpani","Akamkpa|Akamkpa","Biase|Biase","Abi|Abi","Ikom|Ikom", "Yarkur|Yakur", "Odubra|Odubra", "Boki|boki", "Ogoja|Ogoja", "Boki|Boki", "Ogoja|Ogoja", "Yala|yala", "Obanliku|Obanliku", "Obudu|Obudu","Calabar South |Calabar South", "Etung|Etung", "Bekwara|Bekwara", "Bakassi|Bakassi", "Calabar Municipality| Calabar Municipality"];
                }else if(state === "delta"){
                    lgaArray = [ "Asaba Oshimili| Asaba Oshimili", "Aniocha|Aniocha", "Aniocha south| Aniocha south", "Ika South|Ika South", "Ika North-East| Ika North-East", "Ndokwa West| Ndokwa West", "Ndokwa East|Ndokwa East", "Isoko south| Isoko South","Isoko North| Isoko North", "Bomadi|Bomadi", "Burutu|Burutu", "Ughelli South| Ughelli South", "Ughelli North| Ughelli North", "Ethiope West | Ethiope West", "Ethiope East| Ethiope East", "Sapele| Sapele", "Okpe|Okpe", "Warri North|Warri North", "Warri South|Warri South", "Uvwie|Uvwie", "Udu|Udu", "Warri Central|Warri Central", "Ukwani|Ukwani","Oshimili North|Oshimili North", "Patani|Patani"];
                }else if (state === "ebonyi"){
                    lgaArray = ["Afikpo South| Afikpo South", "Afikpo North|Afikpo North", "Onicha|Onicha","Ohaozara|Ohaozara","Abakaliki|Abakaliki","Ishielu|Ishielu","lkwo|lkwo","Ezza|Ezza","Ezza South| Ezza South","Ohaukwu|Ohaukwu","Ebonyi|Ebonyi","Ivo|Ivo"];
                }else if (state === "edo"){
                    lgaArray = ["Esan North-East|Esan North-East","Esan Central|Esan Central","Esan West|Esan West","Egor|Egor","Ukpoba|Ukpoba","Central|Central","Etsako Central|Etsako Central","Igueben|Igueben","Oredo|Oredo","Ovia South-West|Ovia South-West","Ovia South-East|Ovia South-East","Orhionwon|Orhionwon","Uhunmwonde|Uhunmwonde","Etsako East|Etsako East","Esan South-East|Esan South-East"];
                }else if (state === "ekiti"){
                    lgaArray = ["Ado|Ado","Ekiti East|Ekiti East", "Ekiti West|Ekiti West","Emure/Ise/Orun|Emure/Ise/Orun","Ekiti South-West|Ekiti South-West","Ikare|Ikare","Irepodun|Irepodun","Ijero|Ijero","Ido/Osi|Ido/Osi","Oye|Oye","Ikole|Ikole","Moba|Moba","Gboyin|Gboyin","Efon|Efon","Ise/Orun|Ise/Orun","Ilejemeje|Ilejemeje"];
                }else if (state === "enugu"){
                    lgaArray = ["Enugu South|Enugu South","Igbo-Eze South|Igbo-Eze South","Enugu North|Enugu North","Nkanu|Nkanu","Udi Agwu|Udi Agwu","Oji-River|Oji-River","Ezeagu|Ezeagu","Igbo-Eze North|Igbo-Eze North","Isi-Uzo|Isi-Uzo","Nsukka|Nsukka","Igbo-Ekiti|Igbo-Ekiti","Uzo-Uwani|Uzo-Uwani","Enugu East|Enugu East","Aninri|Aninri","Nkanu East|Nkanu East","Udenu|Udenu"];
                }else if (state === "gombe"){
                    lgaArray = ["Akko|Akko","Balanga|Balanga","Billiri|Billiri","Dukku|Dukku","Kaltungo|Kaltungo","Kwami|Kwami","Shomgom|Shomgom","Funakaye|Funakaye","Gombe|Gombe","Nafada/Bajoga|Nafada/Bajoga","Yamaltu/Delta|Yamaltu/Delta"];
                }else if (state === "imo"){
                    lgaArray = ["Aboh-Mbaise|Aboh-Mbaise","Ahiazu-Mbaise|Ahiazu-Mbaise","Ehime-Mbano|Ehime-Mbano","Ezinihitte|Ezinihitte","Ideato North|Ideato North","Ideato South|Ideato South","Ihitte/Uboma|Ihitte/Uboma","Ikeduru|Ikeduru","Isiala Mbano|Isiala Mbano","Isu|Isu","Mbaitoli|Mbaitoli","Ngor-Okpala|Ngor-Okpala","Njaba|Njaba","Nwangele|Nwangele","Nkwerre|Nkwerre","Obowo|Obowo","Oguta|Oguta","Ohaji/Egbema|Ohaji/Egbema","Okigwe|Okigwe","Orlu|Orlu","Orsu|Orsu","Oru East|Oru East","Oru West|Oru West","Owerri-Manucipal|Owerri-Manucipal","Owerri North|Owerri North","Owerri West|Owerri West"];
                }else if (state === "jigawa"){
                    lgaArray = ["Auyo|Auyo","Babura|Babura","Birni Kudu|Birni Kudu","Biriniwa|Biriniwa","Buji|Buji","Dutse|Dutse","Gagarawa|Gagarawa","Garki|Garki","Gumel|Gumel","Guri|Guri","Gwaram|Gwaram","Gwiwa|Gwiwa","Hadejia|Hadejia","Jahun|Jahun","kafin Hausa|Kafin Hausa","Kaugama Kazaure|Kaugama Kazaure","Kiri Kasamma","Kiyawa|Kiyawa","Maigatari|Maigatari","Malam Madori|Malam Madori","Miga|Miga","Ringim|Ringim","Roni|Roni","Sule-Tankarkar|Sule-Tankarkar","Taura|Taura","Yankwasi|Yankwashi"];
                }else if (state === "kaduna"){
                    lgaArray = ["Birni-Gwari|Birni-Gwari","Chikun|Chikun","Giwa|Giwa","Igabi|Igabi","Ikara|Ikara","Jaba|Jaba","Jema'a|Jema'a","Kachia|Kachia","Kaduna North|Kaduna North","Kaduna South|Kaduna South","Kagarko|Kargako","Kajuru|kajuru","Kaura|Kaura","Kauru|Kauru","Kabau|Kabau","Kudan|Kudan","Lere|Lere","Makarfi|Makarfi","Sabon-Gari|Sabon-Gari","Sanga|Sanga","Soba|Soba","Zango-Kataf|Zango-Kataf","Zaria|Zaria"];
                }else if (state === "kano"){
                    lgaArray = ["Ajingi|Ajingi","Albasu|Albasu","Bagwai|Bagwai","Bebeji|Bebeji","Bichi|Bichi","Bunkure|Bunkure","Dala|Dala","Dambatta|Dambatta","Dawakin Kudu|Dawakin Kudu","Dawakin Tofa|Dawakin Tofa","Doguwa|Doguwa","Fagge|Fagge","Gabasawa|Gabasawa","Garko|Garko","Garum|Garum","Mallam|Mallam","Gaya|Gaya","Gezawa|Gezawa","Gwale|Gwale","Gwarzo|Gwarzo","Kabo|Kabo","Kano Manucipal|Kanno Manucipal","Karaye|Karaye","Kibiya|Kibiya","Kiru|Kiru","Kumbotso|Kombotso","Kunchi|Kunchi","Kura|Kura","Madobi|Madobi","Makoda|Makoda","Minjibir|Minjibir","Nasarawa|Nasarawa","Rano|Rano","Rimin Gado|Rimin Gado","Rogo|Rogo","Shanono|Shanono","Sumaila|Sumaila","Takali|Takali","Tarauni|Tarauni","Tofa|Tofa","Tsanyawa|Tsanyawa","Tudun Wada|Tudun Wada","Ungogo|Ungogo","Warawa|Warawa","Wudil|Wudil"];
                }else if (state === "kastina"){
                    lgaArray = ["Bakori|Bakori","Batagarawa|Batagarawa","Batsari|Batsari","Baure|Baure","Bindawa|Bindawa","Charanchi|Charanchi","Dandume|Dandume","Danja|Danja","Dutsi|Dutsi","Dutsin-Ma|Dutsin-Ma","Faskari|Faskari","Funtua|Funtua","Ingawa|Ingawa","Jibia|Jibia","Kafur|Kafur","Kaita|Kaita","Kankara|Kankara","Kankia|Kankia","Katsina|Katsina","Kurfi|Kurfi","Kusada|Kusada","Mai'Adua|Mai'Adua","Malumfashi|Malumfashi","Mani|Mani","Matazuu|Matazuu","Musawa|Musawa","Rimi|Rimi","Sabuwa|Sabuwa","Safana|Safana","Sandamu|Sandamu","Zango|Zango"];
                }else if (state === "kebbi"){
                    lgaArray = ["Aleiro|Aleiro","Arewa-Dandi|Arewa-Dandi","Argungu|Argungu","Augie|Augie","Bagudo|Bagudo","Birnin Kebbi|Birnin Kebbi","Bunza|Bunza","Dandi|Dandi","Fakai|Fakai","Gwandu|Gwandu","Jega|Jega","Kalgo|Kalgo","Koko/Besse|Koko/Besse","Maiyama|Maiyama","Ngaski|Ngaski","Sakaba|Sakaba","Shanga|Shanga","Suru|Suru","Wasagu/Danko|Wasagu/Danko","Yauri|Yauri","Zuru|Zuru"];
                }else if (state === "kogi"){
                     lgaArray = ["Adavi|Adavi","Ajaokuta|Ajaokuta","Ankpa|Ankpa","Bassa|Bassa","Dekina|Dekina","Ibaji|Ibaji","Idah|Idah","Igalamela-Odolu|Igalamela-Odolu","Ijumu|Ijumu","Kabba/Bunu|Kabba/Bunu","Kogi|Kogi","Lokoja|Lokoja","Mopa-Muro|Mopa-Muro","Ofu|Ofu","Ogori/Mangongo|Ogori/Mangongo","Okehi|Okehi","Okene|Okene","Olamabolo|Olamabolo","Omala|Omala","Yagba East|Yagba East","Yagba West|Yagba West"];
                }else if (state === "kwara"){
                    lgaArray = ["Asa|Asa","Baruten|Baruten","Edu|Edu","Ekiti|Ekiti","Ifelodun|Ifelodun","Ilorin East|Ilorin East","Ilorin West|Ilorin West","Irepodun|Irepodun","Isin|Isin","Kaiama|Kaiama","Moro|Moro","Offa|Offa","Oke-Ero|Oke-Ero","Oyun|Oyun","Pategi|Pategi"];
                }else if (state === "lagos"){
                    lgaArray = ["Agege|Agege","Ajeromi-Ifelodun|Ajeromi-Ifelodun","Alimosho|Alimosho","Amuwo-Odofin|Amuwo-Odofin","Apapa|Apapa","Badagry|Badagry","Epe|Epe","Eti-Osa|Eti-Osa","Ibeju/Lekki|Ibeju/Lekki","Ifako-Ijaye|Ifako-Ijaiye","Ikeja|Ikaja","Ikorodu|Ikorodu","Kosofe|Kosofe","Lagos Island|Lagos Island","Lagos Mainland|Lagos Mainland","Mushin|Mushin","Ojo|Ojo","Oshodi/Isolo|Oshodi/Isolo","Shomolu|Shomolu","Surulere|Surulere"];
                }else if (state === "nasarawa"){
                   lgaArray = ["Akwanga|Akwanga","Awe|Awe","Doma|Doma","Karu|Karu","Keana|Keana","Keffi|Keffi","Kokona|Kokona","Lafia|Lafia","Nasarawa|Nasarawa","Nasarawa-Eggon|Nasarawa-Eggon","Obi|Obi","Toto|Toto","Wamba|Wamba"];
                }else if ( state === "niger"){
                   lgaArray = ["Agaie|Agaie","Agwara|Agwara","Bida|Bida","Borgu|Borgu","Bosso|Bosso","Chanchaga|Chanchaga","Edati|Edati","Gbako|Gbako","Gurara|Gurara","Katcha|Katcha","Kontagora|Kontagora","Lapai|Lapai","Lavun|Lavun","Magama|Magama","Mariga|Mariga","Mashegu|Mashegu","Mokwa|Mokwa","Muya|Muya","Pailoro|Pailoro","Rafi|Rafi","Rijau|Rijau","Shiroro|Shiroro","Tafa|Tafa","Wushishi|Wushishi"];
                }else if ( state === "ogun"){
                    lgaArray = ["Abeokuta North|Abeokuta North","Abeokuta South|Abeokuta South","Ado-Odo/Ota|Ado-Odo/Ota","Egbado North|Egbado North","Egbado South|Egbado South","Ewekoro|Ewekoro","Ifo|Ifo","Ijebu East|Ijebu East","Ijebu North|Ijebu North","Ijebu North-East|Ijebu North-East","Ijebu Ode|Ijebu Ode","Ikenne|Ikenne","Imeko-Afon|Imeko-Afon","Ipokia|Ipokia","Obafemi-Owode|Obafemi-Owode","Ogun Waterside|Ogun Waterside","Odeda|Odeda","Odogbolu|Odogbolu","Remo North|Remo North","Shagamu|Shagamu"];
                }else if (state === "ondo"){
                    lgaArray = ["Akoko North-East|Akoko North-East","Akoko North-West|Akoko North-West","Akoko South-East|Akoko South-East","Akoko South-West|Akoko South-West","Akure North|Akure North","Akure South|Akure South","Ese-Odo|Ese-Odo","Idanre|Idanre","Ifedore|Ifedore","Ilaje|Ilaje","Ile-Oluji|Ile-Oluji","Okeigbo|Okeigbo","Irele|Irele","Odigbo|Odigbo","Okitipupa|Okitipupa","Ondo East|Ondo East","Ondo West|Ondo West","Ose|Ose","Owo|Owo"];
                }else if (state === "osun"){
                    lgaArray = ["Aiyedade|Aiyedade","Aiyedire|Aiyedire","Atakumosa East|Atakumosa East","Atakumosa West|Atakumosa West","Boluwaduro|Boluwaduro","Boripe|Boripe","Ede North|Ede North","Ede South|Ede South","Egbedore|Egbedore","Ejigbo|Ejigbo","Ife Central|Ife Central","Ife East|Ife East","Ife North|Ife North","Ife South| Ife South","Ifedayo|Ifedayo","Ifelodun|Ifelodun","Ila|Ila", "Ilesha East|Ilesha East","Ilesha West|Ilessha West","Irepodun|Irepodun","Irewole|Irewole","Isokan|Isokan","Iwo|Iwo","Obokun|Obokun","Odo-Otin|Odo-Otin","Ola-Oluwa|Ola-Oluwa","Olorunda|Olorunda","Oriade|Oriade","Orolo|Orolu","Osogbo|Osogbo"];
                }else if (state === "oyo"){
                    lgaArray = ["Afijio|Afijio","Akinyele|Akinyele","Atiba|Atiba","Atigbo|Atigbo","Egbeda|Egbeda","Ibadan Central|Ibadan Central","Ibadan North|Ibadan North","Ibadan North-West|Ibadan North-West","Ibadan South East|Ibadan South-East","Ibadan South-West|Ibadan South-West","Ibarapa Central|Ibarapa Central","Ibarapa East|Ibarapa East","Ibarapa North|Ibarapa North","Ido|Ido","Irepo|Irepo","Iseyin|Iseyin","Itesiwaju|Itesiwaju","Iwajowa|Iwajowa","Kajola|Kajola","Lagelu Ogbomosho North|Lagelu Ogbomosho North","Ogbomosho South|Ogbomosho South","Ogo Oluwa|Ogo Oluwa","Olorunsogs|Olorunsogo","Oluyole|Oluyole","Ona-Ara|Ona-Ara","Orelope|Orelope","Ori ire|Ori Ire","Oyo East|Oyo East","Oyo West|Oyo West","Saki East|Saki East","Saki West|Saki West","Surulere|Surulere"];
                }else if (state === "plateau"){
                    lgaArray = ["Barikin Ladi|Barikin Ladi","Bassa|Bassa","Bokkos|Bokkos","Jos East|Jos East","Jos North|Jos North","Jos South|Jos South","Kanam|Kanam","Kanke|Kanke","Langtang North|Langtang North","Langtang South|Langtang South","Mangu|Mangu","Mikang|Mikang","Pankshin|Pankshin","Qua;an Pan|Qua'an Pan","Riyom|Riyom","Shendam|Shendam","Wase|Wase"];
                }else if (state === "rivers"){
                    lgaArray = ["Abua/Odual|Abua/Odual","Ahoada East|Ahaoda East","Ahoada West|Ahaoda West","Akuku Toru|Akuku Toru","Andoni|Andoni","Asari-Toru|Asari-Toru","Bonny|Bonny","Degema|Degema","Emohua|Emohua","Eleme|Eleme","Etche|Etche","Gokana|Gokana","Ikwerre|Ikwerre","Khana|Khana","Obia/Akpor|Obia/Akpor","Ogba/Egbema/Ndoni|Ogba/Egbema/Ndoni","Ogu/Bolo|Ogu/Bolo","Okrika|Okrika","Omumma|Omumma","Opobo/Nkoro|Opobo/Nkoro","Oyigbo/Oyigbo","Port-Harcourt|Port-Harcourt","Tai|Tai"];
                }else if (state === "sokoto"){
                     lgaArray = ["Binji|Binji","Bodinga|Bodinga","Dange-Shnsi|Dange-Shinsi","Gada|Gada","Goronyo|Goronyo","Gudu|Gudu","Gawabawa|Gawabawa","Illela|Illela","Isa|Isa","Kware|Kware","Kebbe|Kebbe","Rabah|Rabah","Sabon Birni|Sabon Birni","Shagari|Shagari","Silame|Silame","Sokoto North|Sokoto North","Sokoto South|Sokoto South","Tanbuwal|Tanbuwal","Tqngaza|Tqngaza","Tureta|Tureta","Wamako|Wamako","Wurno|Wurno","Yabo|Yabo"];
                }else if (state === "taraba"){
                    lgaArray = ["Ardo-Kola|Ardo-Kola","Bali|bali","Donga|Donga","Gashaka|Gashaka","Cassol|Cassol","Ibi|Ibi","Jalingo|Jalingo","Karin-Lamido|Karin-Lamido","Kurmi|Kurmi","Lau|Lau","Sardauna|Sadauna","Takum|Takum","Ussa|Ussa","Wukari|Wukari","Yorro|Yorro","Zing|Zing"];
                }else if (state === "yobe"){
                    lgaArray = ["Bade|Bade","Bursari|Bursari","Damaturu|Damaturu","Fika|Fika","Fune|Fune","Geidam|Geidam","Gujba|Gujba","Jakusko|Jakusko","Karasuwa|Karasuwa","Karawa|Karawa","Machina|Machina","Nangere|Nangere","Nguru Potiskum|Nguru Potiskum","Tarmua|Tarmua","Yunusari|Yunusari","Yusufari|Yusufari"];
                }else if (state === "zamfara"){
                    lgaArray = ["AnkavAnka","Bakura|Bakura","Birnin Magaji|Birnin Magaji","Bukkuyum|Bukkuyum","Bungudu|Bungudu","Gummi|Gummi","Guasu|Gusau","Kaura|kaura","Namoda|Namoda","Maradun|Maradun","Maru|Maru","Shinkafi|Shinkafi","Talata Mafara|Talata Mafara","Tsafe|Tsafe","Zurmi|Zurmi"];
                }else{

                 return false 
                };
                 for (var lgaOption in lgaArray){
                  var selectedLga = lgaArray[lgaOption].split("|");
                  var optionsFeed =  document.createElement("option"); 
                  optionsFeed.value = selectedLga[1]; 
                  optionsFeed.innerHTML = selectedLga[0];
                 console.log(selectedLga)
                 lga.appendChild(optionsFeed)
                //$(div.lga).find(select).appendChild()

                 }

            }); 

        //setting initial progress-text content
        $('#progress-text').html("The journey of a thousand miles begins with one step, here it begins with four!")

        var formInstance = $('.demo-form');
        $('.form-navigation .next').click(function () {

        });

        // switch screen function on click

        $("#1c").click(function () {

            console.log(responseA2);
            console.log(responseA3);
            console.log(responseA4);
            
            var title = document.getElementById('p-email').value; 
            var gender = document.getElementById('gender').value;
            var birthday = document.getElementById('birthday').value;
      
             console.log(birthday)
              var leadwayMinAgeBracket = '2002-01-01';
              var userBirthday = moment(birthday);
              var minAge = moment(leadwayMinAgeBracket);
              console.log(userBirthday);
              console.log(minAge);

          if (moment(minAge).isBefore(userBirthday)){

               alert('Enrollment is only open to individuals 15years and above');
               console.log(userBirthday);
               console.log(minAge);

          }else if(title == "Mr." && gender == "Female" || title == "Miss." && gender == "Male" || title == "Mrs." && gender == "Male" ){  alert ("Please reconfirm your title or gender");
           
}else{

             alert ('dob validation test successful')

            if ($('.demo-form').parsley().validate({group: 'block1', force: true })){
                    alert("validated")
                    //updating values of personal information form fields
                    responseA = _('gender');
                    responseB = _('status');
                    responseC = _('birthday');
                    responseD = _('soo');
                    responseE = _('lga');
                    responseF = _('nation');
                    responseG = _('idt');
                    responseH = _('p-email');
                    responseI = _('p-mno');
                    responseA2 = _('fn');
                    responseA3 = _('mn');
                    responseA4 = _('ln');

                    //grouping response and display areas
                    responseArray1 = [responseA, responseB, responseC, responseD, responseE, responseF, responseG, responseH, responseI, responseA2, responseA3, responseA4];
                    displayArray1 = [displayA, displayB, displayC, displayD, displayE, displayF, displayG, displayH, displayI, displayA2, displayA3, displayA4];



                    $("#pid, #pid-head, #pid-form, #pid-button").fadeOut(300, function(){
                        $("#employer, #employer-head, #employer-form, #employer-button").fadeIn(500, progressbar.animate(0.2, {
                            duration: 800,
                            from: { color: '#2068a4' },
                            to: { color: '#233d70' },
                        }, progressbar.setText('20%')));

                        //setting progress-text
                        $('#progress-text').html("We know you should do it for the passion, doing it for the money isn't bad too...")
                    });


                    $("#2b").click(function(){
                        $("#employer, #employer-head, #employer-form, #employer-button").fadeOut(300, function(){
                            $("#pid, #pid-head, #pid-form, #pid-button").fadeIn(500, progressbar.animate(0, {
                                duration: 800,
                                from: { color: '#2068a4' },
                                to: { color: '#233d70' },
                            }, progressbar.setText('0%')));
                            $('#progress-text').html("The journey of a thousand miles begins with one step, here it begins with four!")
                        });
                    });

                }else {
                    return false;
                }

            }


        });


      //function handling the customer segement validation 

           $('#cpfa').change(function(){
  
            var currentPfa =  document.getElementById('cpfa').value; 
            console.log(currentPfa); 
            var pinNumber  = document.getElementById('pin');

            if ( currentPfa ===  "not registered" ){

                alert('testing pin disabling function')

                pinNumber.readOnly = true;

            }else{

               pinNumber.readOnly = false;

              return false;

            }

           });
           
           



        $("#2c").click(function () {
        
            var currentPfa =  document.getElementById('cpfa').value;   
            var penstring = _('pin')
            var pen = penstring.substring(0, 3);
            var penNumber = penstring.substring(3, 15)
            var penLength = penNumber.length
            console.log(pen)   
            console.log(penNumber)
            console.log(penLength)
        // function validating dob is not before or equals to doe 
            
       var employmentDate = document.getElementById('doe').value; 
       var birthday = document.getElementById('birthday').value;
           momentEmploymentDate =  moment(employmentDate);
           momentbirthday = moment(birthday);
           
           if(moment(momentEmploymentDate).isSameOrBefore(momentbirthday)){           
           alert('Please confirm your Employment date')
           }else{
           
           
             if (penLength === 12 && (pen == "PEN" || pen == "pen")){
                
                 if ($('.demo-form').parsley().validate({group: 'block2'})) {
                alert("block2 validated")
                // updating values for employment responses
                responseJ = _('org');
                responseK = _('orgAdd');
                responseL = _('orgLga');
                responseM = _('orgState');
                responseN = _('orgNo');
                responseO = _('doe');
                responseP = _('sop');
                responseQ = _('cpfa');
                responseR = _('pin');


                // grouping response and display areas
                responseArray2 = [responseJ, responseK, responseL, responseM, responseN, responseO, responseP, responseQ, responseR];
                displayArray2 = [displayJ, displayK, displayL, displayM, displayN, displayO, displayP, displayQ, displayR];

                $("#employer, #employer-head, #employer-form, #employer-button").fadeOut(300, function () {
                    $("#kin, #kin-head, #kin-form, #kin-button").fadeIn(500, progressbar.animate(0.4, {
                        duration: 800,
                        from: {color: '#2068a4'},
                        to: {color: '#233d70'},
                    }, progressbar.setText('40%')));
                    $('#progress-text').html("If you can't give them your atm pin, they don't qualify :p")
                });

                $("#3b").click(function () {
                    $("#kin, #kin-head, #kin-form, #kin-button").fadeOut(300, function () {
                        $("#employer, #employer-head, #employer-form, #employer-button").fadeIn(500, progressbar.animate(0.2, {
                            duration: 800,
                            from: {color: '#2068a4'},
                            to: {color: '#233d70'},
                        }, progressbar.setText('20%')));
                        $('#progress-text').html("We know you should do it for the passion, doing it for the money isn't bad too...")
                    });
                });
            } else {
                return false;
            } 
               
                }else if (currentPfa === "not registered" ){  
                
                            if ($('.demo-form').parsley().validate({group: 'block2'})) {
                alert("block2 validated")
                // updating values for employment responses
                responseJ = _('org');
                responseK = _('orgAdd');
                responseL = _('orgLga');
                responseM = _('orgState');
                responseN = _('orgNo');
                responseO = _('doe');
                responseP = _('sop');
                responseQ = _('cpfa');
                responseR = _('pin');


                // grouping response and display areas
                responseArray2 = [responseJ, responseK, responseL, responseM, responseN, responseO, responseP, responseQ, responseR];
                displayArray2 = [displayJ, displayK, displayL, displayM, displayN, displayO, displayP, displayQ, displayR];

                $("#employer, #employer-head, #employer-form, #employer-button").fadeOut(300, function () {
                    $("#kin, #kin-head, #kin-form, #kin-button").fadeIn(500, progressbar.animate(0.4, {
                        duration: 800,
                        from: {color: '#2068a4'},
                        to: {color: '#233d70'},
                    }, progressbar.setText('40%')));
                    $('#progress-text').html("If you can't give them your atm pin, they don't qualify :p")
                });

                $("#3b").click(function () {
                    $("#kin, #kin-head, #kin-form, #kin-button").fadeOut(300, function () {
                        $("#employer, #employer-head, #employer-form, #employer-button").fadeIn(500, progressbar.animate(0.2, {
                            duration: 800,
                            from: {color: '#2068a4'},
                            to: {color: '#233d70'},
                        }, progressbar.setText('20%')));
                        $('#progress-text').html("We know you should do it for the passion, doing it for the money isn't bad too...")
                    });
                });
            } else {
                return false;
            };
                }else {
                alert("please confirm your pin number")
                }         
           }

                                   
        });
        $("#3c").click(function () {

            if ($('.demo-form').parsley().validate({group: 'block3'})) {
                alert("block3 validated")

                // updating values for employment responses
                responseS = _('k-title');
                responseT = _('k-lname');
                responseU = _('k-fname');
                responseV = _('relationship');
                responseW = _('k-gender');
                responseX = _('k-add');
                responseY = _('k-soo');
                responseZ = _('k-lga');
                responseA1 = _('k-mno');


                // grouping response and display areas
                responseArray3 = [responseS, responseT, responseU, responseV, responseW, responseX, responseY, responseZ, responseA1];
                displayArray3 = [displayS, displayT, displayU, displayV, displayW, displayX, displayY, displayZ, displayA1];


                $("#kin, #kin-head, #kin-form, #kin-button").fadeOut(300, function () {
                    $("#biometrics, #biometrics-head, #biometrics-form, #biometrics-button").fadeIn(500, progressbar.animate(0.6, {
                        duration: 800,
                        from: {color: '#2068a4'},
                        to: {color: '#233d70'},
                    }, progressbar.setText('60%')));
                    $('#progress-text').html(" It's about time we saw that pretty face :)")
                });


                $("#4b").click(function () {
                    $("#biometrics, #biometrics-head, #biometrics-form, #biometrics-button").fadeOut(300, function () {
                        $("#kin, #kin-head, #kin-form, #kin-button").fadeIn(500, progressbar.animate(0.4, {
                            duration: 800,
                            from: {color: '#2068a4'},
                            to: {color: '#233d70'},
                        }, progressbar.setText('40%')));
                        $('#progress-text').html("If you can't give them your atm pin, they don't qualify :p")
                    });

                });
            } else {
                return false;
            }
        });


        $("#4c").click(function () {

                var form = document.getElementById('enroll-form');
                var json = convertFormToJSON(form)
                var image = $('#user-image').prop('files')[0];

                var reader = new FileReader();
                reader.readAsBinaryString(image);

                var blob;
                reader.onload = function() {
                    blob = btoa(reader.result);
                    json['image'] = blob;
                console.log(JSON.stringify(json));
               }
               
          

            if (document.querySelector('.dz-image-preview') !== null || $("#user-image").val() !== null) {
                $("#biometrics, #biometrics-head, #biometrics-form, #biometrics-button").fadeOut(300, function () {
                    $("#confirm, #confirm-head, #confirm-form, #confirm-button").fadeIn(500, progressbar.animate(0.8, {
                        duration: 800,
                        from: {color: '#2068a4'},
                        to: {color: '#233d70'},
                    }, progressbar.setText('80%')));
                    $('#progress-text').html(" Just checking we crossed our t's and dotted our i's! ")
                });


                $("#5b").click(function () {
                    $("#confirm, #confirm-head, #confirm-form, #confirm-button").fadeOut(300, function () {
                        $("#biometrics, #biometrics-head, #biometrics-form, #biometrics-button").fadeIn(500, progressbar.animate(0.6, {
                            duration: 800,
                            from: {color: '#2068a4'},
                            to: {color: '#233d70'},
                        }, progressbar.setText('60%')));
                        $('#progress-text').html(" It's about time we saw that pretty face :)")
                    });
                });
                
                parse(accessed, displayArray1, responseArray1);
                parse(accessed, displayArray2, responseArray2);
                parse(accessed, displayArray3, responseArray3);

            } else {
                alert("Upload your image to continue")
                return false
            }
        });

        function uint8ToString(buf) {
            var i, length, out = '';
            for (i = 0, length = buf.length; i < length; i += 1) {
                out += String.fromCharCode(buf[i]);
            }
            return out;
        }

        $('#5c').click(function () {

            //getting my form id
            var form = document.getElementById('enroll-form')

            // binding the submit action to ajax push
            jQuery(form).bind('submit', function (event) {
                event.preventDefault();
                var form = this;
                var json = convertFormToJSON(form);
                


                if($('#user-image').val() == null) {
                    alert ("please enter an image")
                    return;
                }

                var image = $('#user-image').prop('files')[0];

                var reader = new FileReader();
                reader.readAsBinaryString(image);

                var blob;
                reader.onload = function() {
                    blob = btoa(reader.result);
                    json['image'] = blob;
                    json['client id'] = '********';
                    console.log(JSON.stringify(json));

                    //Converting JSON object to string format
                    var myJSON = JSON.stringify(json);

                  

                    $.ajax({
                        type: "POST",
                        url: "<?php echo get_bloginfo('template_directory'); ?>/submit.php",
                        data: json,
                        dataType: "json"
                    }).done(function (response) {
                        console.log(response);
                        $("#confirm, #confirm-head, #confirm-form, #confirm-button").fadeOut(300, function () {
                            //pass in thank you view
                            $('#thankyou').fadeIn(500, progressbar.animate(1, {
                                duration: 800,
                                from: {color: '#2068a4'},
                                to: {color: '#233d70'},
                            }, progressbar.setText('100%')));
                            $('#progress-text').html(" Welcome onboard the leading team ")
                        });


                    }).fail(function () {

                        //codeblock for activating modal programmatically
                        $('.enroll-error').modal('show')
                    })
                };

            })
        });

    });


</script>
<script>
    Dropzone.options.upload = false
    $(document).ready(function () {
        $("#upload").dropzone({
            url: "/uploads",
            dictDefaultMessage: ' Click or drag a passport sized photograph',
            addRemoveLinks: true,
            thumbnailHeight: 144,
            thumbnailWidth: 144,
            maxFiles: '1',
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 2, // MB
            accept: function (file, done) {
                reader = new FileReader();
                reader.onload = handleReaderLoad;
                reader.readAsDataURL(file);
                function handleReaderLoad(evt) {
                    document.getElementById("9")
                        .setAttribute('value', evt.target.result);
                    form = $('#upload');
                    $.ajax({
                        type: "POST",
                        url: "/upload",
                        data: form.serialize(),
                    });
                }
            },
            init: function () {
                this.on("addedfile", function () {
                    if (this.files[1] != null) {
                        this.removeFile(this.files[0]);
                    }
                });
            }
        })
    });
</script>

<script src="<?php echo get_bloginfo('template_directory'); ?>/vendors/sweetalert/sweetalert.min.js"></script>

<?php if(!empty($response)): $type = ((string) $response->StatusCode === "00" ? 'success': 'error')?>
    <script>
        var button, type = "<?= $type ?>";
        if(type == 'error') {
            button = "Back to Token page";
        } else {
            button = "Continue";
            function before_this_page_reloads_huh(){
                return function(){
                    return "You have not completed the enrollment process."
                }
            }

            $(window).bind('beforeunload', before_this_page_reloads_huh() );
        }
        swal({
            title: "<?= ucfirst($type); ?>!",
            text: "<?= $response->Message ?>",
            type: "<?= $type ?>",
            button: {
                text: button
            }
        }, function(){
            if(type == 'error') {
                window.location.href = '/token';
            }
        });
        $(".sa-confirm-button-container button").text(button);
    </script>
<?php endif ?>

</body>
</html>