<?php /* Template Name: Enroll */ ?>

<?php

?>

<?php get_header(); ?>
<!-- Body and Main Content of page -->
<div class="container-fluid" id="enroll-bg">
    <!-- Desktop navigation -->
    <!-- Navbar -->
    <nav class="navbar hidden-sm-down pOff fixed-top">
        <!-- desktop price charts start -->
        <table class="table table-responsive mOff">
            <tbody>
            <tr>
                <td>
                    <form>
                        <div class="form-group">
                            <select class="form-control language">
                                <option>English</option>
                                <option>Yoruba</option>
                                <option>Hausa</option>
                                <option>Igbo</option>
                            </select>
                        </div>
                    </form>

                </td>
                <td>
                    <span><i class="fa fa-phone" aria-hidden="true" style="color: #2068a4"></i> 0800-Pesnure</span>
                </td>
                <td>
                    <span class="head-td"> RSA FUNDS</span><br>
                    <span>&#8358;2.3433 <img src="<?php echo get_bloginfo('template_directory'); ?>/images/pos.png" alt=""></span>
                </td>
                <td>
                    <span class="head-td">RETIREE FUNDS</span><br>
                    <span> &#8358;2.3433 <img src="<?php echo get_bloginfo('template_directory'); ?>/images/neg.png" alt=""></span>
                </td>
                <td>
                    <span class="head-td">RSA ADMIN FEE</span><br>
                    <span> &#8358;100 </span>
                </td>
                <td>
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/images/calc.png"><span>Calculator</span>
                </td>
                <td>
                    <button type="button" class="btn btn-outline-secondary v-trends"><span>&#8594;</span> VIEW TRENDS </button>
                </td>
                <td>
                    <span id="date"></span>
                </td>
            </tr>
            </tbody>
        </table>
    </nav>

    <div class="row p-id" id="test">
        <div id="progressMark" class="col-7">
            <span id="progress-text">  </span>
        </div>
        <div class="col-3 offset-2 col-md-3 offset-md-2">
            <div class="row">
                <div class=col-12> Client: <span id="a-name"> Otaru Daudu </span> </div>
                <div class=col-12> Token no: <span id="a-token"> 3458893i2 </span> </div>
            </div>
        </div>
    </div>


    <form class="demo-form" id="enroll-form" data-parsley-validate>
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
                        <div class="form-group">
                            <label class="field-label"> Gender </label>
                            <select class="form-control language col-sm-7 mx-auto" id=gender  style="border: 1px solid white" data-parsley-group="block1" required="">
                                <option value="" id="default">Select gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class= "col-12 col-sm-6 col-md-4 text-center">

                        <div class="form-group ">
                            <label class="field-label"> Status </label>
                            <select class="form-control language col-sm-7 mx-auto" id=status  style="border: 1px solid white" data-parsley-group="block1" required="">
                                <option value="" id="default">Select status</option>
                                <option value="Married">Married</option>
                                <option value="Single">Single</option>
                            </select>
                        </div>
                    </div>
                    <div class= "col-12 col-sm-6 col-md-4 text-center">

                        <div class="form-group ">
                            <label class="field-label"> Birthday </label>
                            <input type="date" class="form-control language col-sm-7 mx-auto text-center" id=birthday  data-parsley-group="block1" style="border: 1px solid white" required="" >
                        </div>
                    </div>

                    <!--end of line 1 -->

                    <!-- line 2 start -->

                    <div class= "form-group col-12 col-sm-6 col-md-4 text-center">
                        <div class="form-group ">
                            <label class="field-label"> State of origin </label>
                            <select class="form-control language col-sm-7 mx-auto" id=soo  style="border: 1px solid white" data-parsley-group="block1" required="">
                                <option value="">Select State </option>
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
                            <label class="field-label"> LGA </label>
                            <input type="text" class="form-control col-sm-7 language mx-auto text-center" id=lga placeholder="local government area" style="border: 1px solid white" minlength="3" minlength-message="Confirm local government area" data-parsley-group="block1" required="">
                        </div>
                    </div>
                    <div class= "col-12 col-sm-6 col-md-4 text-center">
                        <div class="form-group ">
                            <label class="field-label"> Nationality </label>
                            <select class="form-control language col-sm-7 mx-auto" id=nation  style="border: 1px solid white" data-parsley-group="block1" required="">
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


                    <!-- end of line 2 -->
                    <!-- line 3 start -->

                    <div class= "form-group col-12 col-sm-6 col-md-4 text-center">
                        <div class="form-group ">
                            <label class="field-label"> ID type </label>
                            <select class="form-control language col-sm-7 mx-auto" id=idt style="border: 1px solid white" data-parsley-group="block1" required="">
                                <option value="">Select ID</option>
                                <option value= "Drivers License"> Drivers License </option>
                                <option value= "National ID"> National ID card </option>
                                <option value= "International passport"> International passport </option>
                                <option value= "Voters card"> Voters card </option>
                            </select>
                        </div>
                    </div>
                    <div class= "col-12 col-sm-6 col-md-4 text-center">
                        <div class="form-group ">
                            <label class="field-label"> Email </label>
                            <input type="text" class="form-control col-sm-7 language mx-auto text-center" data-parsley-group="block1" id=p-email placeholder="local government area" style="border: 1px solid white" readonly>
                        </div>
                    </div>
                    <div class= "col-12 col-sm-6 col-md-4 text-center">
                        <div class="form-group ">
                            <label class="field-label"> Mobile No </label>
                            <input type="" class="form-control col-sm-7 language mx-auto text-center" data-parsley-group="block1" id=p-mno placeholder="local government area" style="border: 1px solid white" readonly>
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
            <div class="col-12 field-text f-width">
                <!-- line 1 start -->
                <div class="row">
                    <div class= "form-group col-12 col-sm-6 col-md-4 text-center">
                        <label class="field-label"> Name of organization </label>
                        <input type="text" class="form-control language col-sm-7 mx-auto text-center" id="org" placeholder="Organization" style="border: 1px solid white" required="" data-parsley-group="block2">
                    </div>
                    <div class= "col-12 col-sm-6 col-md-4 text-center">
                        <div class="form-group">
                            <label class="field-label"> Address </label>
                            <input type="text" class="form-control col-sm-7 language mx-auto text-center" id="orgAdd" placeholder="Address" style="border: 1px solid white" required="" data-parsley-group="block2">
                        </div>
                    </div>
                    <div class= "col-12 col-sm-6 col-md-4 text-center">

                        <div class="form-group">
                            <label class="field-label"> LGA </label>
                            <input type="text" class="form-control language col-sm-7 mx-auto text-center" id="orgLga" placeholder="Local Government Area" style="border: 1px solid white" required="" data-parsley-group="block2">
                        </div>
                    </div>

                    <!--end of line 1 -->

                    <!-- line 2 start -->

                    <div class= "form-group col-12 col-sm-6 col-md-4 text-center">
                        <div class="form-group ">
                            <label class="field-label"> State </label>
                            <select class="form-control language col-sm-7 mx-auto" id="orgState" style="border: 1px solid white" required="" data-parsley-group="block2">
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
                            <label class="field-label"> File No/Service No </label>
                            <input type="text" class="form-control col-sm-7 language mx-auto text-center" id="orgNo" placeholder="File or service number" style="border: 1px solid white" data-parsley-group="block2">
                        </div>
                    </div>
                    <div class= "col-12 col-sm-6 col-md-4 text-center">
                        <div class="form-group ">
                            <label class="field-label"> Date of employment </label>
                            <input type="date" class="form-control col-sm-7 language mx-auto text-center" id="doe" placeholder="Address" style="border: 1px solid white" required="" data-parsley-group="block2">
                        </div>
                    </div>


                    <!-- end of line 2 -->
                    <!-- line 3 start -->

                    <div class= "form-group col-12 col-sm-6 col-md-4 text-center">
                        <div class="form-group">
                            <label class="field-label"> State of posting </label>
                            <select class="form-control language col-sm-7 mx-auto" id="sop" style="border: 1px solid white" data-parsley-group="block2">
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
                            <select class="form-control language col-sm-7 mx-auto" id="cpfa" style="border: 1px solid white" required="" data-parsley-group="block2">
                                <option value="" id="default"> Select Provider</option>
                                <option value="Not registered"> Not registered </option>
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
                            <input type="number" class="form-control col-sm-7 language mx-auto text-center" id="pin" placeholder="Mobile number" style="border: 1px solid white" >
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
            <div class="col-12 field-text f-width">
                <!-- line 1 start -->
                <div class="row">
                    <div class= "form-group col-12 col-sm-6 col-md-4 text-center">
                        <label class="field-label"> Title </label>
                        <select class="form-control language col-sm-7 mx-auto" id="k-title" style="border: 1px solid white" data-parsley-group="block3" required="">
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
                            <input type="text" class="form-control col-sm-7 language mx-auto text-center" id="k-lname" placeholder="Address" style="border: 1px solid white" data-parsley-group="block3" required="">
                        </div>
                    </div>
                    <div class= "col-12 col-sm-6 col-md-4 text-center">

                        <div class="form-group">
                            <label class="field-label"> First name </label>
                            <input type="text" class="form-control language col-sm-7 mx-auto text-center" id="k-fname" style="border: 1px solid white" data-parsley-group="block3" required="">
                        </div>
                    </div>

                    <!--end of line 1 -->

                    <!-- line 2 start -->

                    <div class= "form-group col-12 col-sm-6 col-md-4 text-center">
                        <div class="form-group ">
                            <label class="field-label"> Relationship </label>
                            <select class="form-control language col-sm-7 mx-auto" id="relationship" style="border: 1px solid white" data-parsley-group="block3" required="">
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
                            <select class="form-control language col-sm-7 mx-auto" id="k-gender" style="border: 1px solid white" data-parsley-group="block3" required="">
                                <option value="" id="default"> Select Gender </option>
                                <option value="Male"> Male </option>
                                <option value="Male"> Female </option>
                            </select>
                        </div>
                    </div>
                    <div class= "col-12 col-sm-6 col-md-4 text-center">
                        <div class="form-group ">
                            <label class="field-label"> Address </label>
                            <input type="date" class="form-control col-sm-7 language mx-auto text-center" id="k-add" placeholder="Address" style="border: 1px solid white" data-parsley-group="block3" required="">
                        </div>
                    </div>


                    <!-- end of line 2 -->
                    <!-- line 3 start -->

                    <div class= "form-group col-12 col-sm-6 col-md-4 text-center">
                        <div class="form-group">
                            <label class="field-label"> State of origin </label>
                            <select class="form-control language col-sm-7 mx-auto" id="k-soo" style="border: 1px solid white" data-parsley-group="block3" required="">
                                <option value="" id="default">Select State </option>
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
                            <label class="field-label"> LGA </label>
                            <input type="text" class="form-control col-sm-7 language mx-auto text-center" id="k-lga" placeholder="Mobile number" style="border: 1px solid white" data-parsley-group="block3" required="">
                        </div>
                    </div>
                    <div class= "col-12 col-sm-6 col-md-4 text-center">
                        <div class="form-group ">
                            <label class="field-label"> Mobile no </label>
                            <input type="number" class="form-control col-sm-7 language mx-auto text-center" id="k-mno" placeholder="Mobile number" style="border: 1px solid white" type="number" data-parsley-group="block3" required="">
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
            <div class="col-12 field-text f-width">
                <!-- line 1 start -->
                <div class="row">
                    <div class= "col-12 text-center">
                        <div class="dropzone col-5 mx-auto" id="upload">

                        </div>
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
                    <div class= "col-12 col-sm-6 col-md-4 text-center mOff">
                        <div class="form-group">
                            <label class="field-label"> Gender </label>
                            <input type="text" class="form-control col-sm-7 language mx-auto text-center" id=dGender>
                        </div>
                    </div>
                    <div class= "col-12 col-sm-6 col-md-4 text-center mOff">
                        <div class="form-group">
                            <label class="field-label"> Status </label>
                            <input type="text" class="form-control col-sm-7 language mx-auto text-center" id=dStatus readonly>
                        </div>
                    </div>
                    <div class= "col-12 col-sm-6 col-md-4 text-center mOff">

                        <div class="form-group">
                            <label class="field-label"> Birthday </label>
                            <input type="text" class="form-control language col-sm-7 mx-auto text-center" id=dBirthday readonly>
                        </div>
                    </div>

                    <!--end of line 1 -->
                    <hr class="d-color">
                    <!-- line 2 start -->

                    <div class= "form-group col-12 col-sm-6 col-md-4 text-center mOff">
                        <div class="form-group ">
                            <label class="field-label"> State of Origin </label>
                            <input type="text" class="form-control col-sm-7 language mx-auto text-center" id=dSoo readonly>
                        </div>
                    </div>
                    <div class= "col-12 col-sm-6 col-md-4 text-center mOff">
                        <div class="form-group ">
                            <label class="field-label"> Local Government Area </label>
                            <input type="text" class="form-control col-sm-7 language mx-auto text-center" id=dLga readonly>
                        </div>
                    </div>
                    <div class= "col-12 col-sm-6 col-md-4 text-center mOff">
                        <div class="form-group ">
                            <label class="field-label"> Nationality </label>
                            <input type="text" class="form-control col-sm-7 language mx-auto text-center" id=dNation readonly>
                        </div>
                    </div>


                    <!-- end of line 2 -->
                    <hr class="d-color">
                    <!-- line 3 start -->

                    <div class= "form-group col-12 col-sm-6 col-md-4 text-center mOff">
                        <div class="form-group">
                            <label class="field-label"> ID type </label>
                            <input type="text" class="form-control col-sm-7 language mx-auto text-center" id=dIdt readonly>
                        </div>
                    </div>
                    <div class= "col-12 col-sm-6 col-md-4 text-center mOff">
                        <div class="form-group ">
                            <label class="field-label"> Email  </label>
                            <input type="text" class="form-control col-sm-7 language mx-auto text-center" id=dp-email readonly>
                        </div>
                    </div>
                    <div class= "col-12 col-sm-6 col-md-4 text-center mOff">
                        <div class="form-group ">
                            <label class="field-label"> Mobile no

                            </label>
                            <input type="text" class="form-control col-sm-7 language mx-auto text-center" id=dp-mno placeholder="" readonly>
                        </div>
                    </div>
                </div>
                <!-- end of line 3 -->
                <hr class="d-color">

                <!-- employment review start -->
                <h5 class="text-center f-space"> 2. Employment Details </h5>
                <!-- line 1 start -->
                <div class="row">
                    <div class= "form-group col-12 col-sm-6 col-md-4 text-center mOff" readonly>
                        <label class="field-label"> Name of organization </label>
                        <input type="text" class="form-control language col-sm-7 mx-auto text-center" id="dOrg" readonly>
                    </div>
                    <div class= "col-12 col-sm-6 col-md-4 text-center mOff">
                        <div class="form-group">
                            <label class="field-label"> Address </label>
                            <input type="text" class="form-control col-sm-7 language mx-auto text-center" id="dOrgAdd" readonly>
                        </div>
                    </div>
                    <div class= "col-12 col-sm-6 col-md-4 text-center mOff">

                        <div class="form-group">
                            <label class="field-label"> LGA </label>
                            <input type="text" class="form-control language col-sm-7 mx-auto text-center" id="dOrgLga" readonly>
                        </div>
                    </div>

                    <!--end of line 1 -->
                    <hr class="d-color">

                    <!-- line 2 start -->

                    <div class= "form-group col-12 col-sm-6 col-md-4 text-center mOff">
                        <div class="form-group ">
                            <label class="field-label"> State of origin </label>
                            <input type="text" class="form-control col-sm-7 language mx-auto text-center" id="dOrgState" readonly>
                        </div>
                    </div>
                    <div class= "col-12 col-sm-6 col-md-4 text-center mOff">
                        <div class="form-group ">
                            <label class="field-label"> File No/Service No </label>
                            <input type="text" class="form-control col-sm-7 language mx-auto text-center" id="dOrgNo" readonly>
                        </div>
                    </div>
                    <div class= "col-12 col-sm-6 col-md-4 text-center mOff">
                        <div class="form-group ">
                            <label class="field-label"> Date of employment </label>
                            <input type="text" class="form-control col-sm-7 language mx-auto text-center" id="dDoe" readonly>
                        </div>
                    </div>


                    <!-- end of line 2 -->

                    <hr class="d-color">
                    <!-- line 3 start -->

                    <div class= "form-group col-12 col-sm-6 col-md-4 text-center mOff">
                        <div class="form-group">
                            <label class="field-label"> State of posting </label>
                            <input type="text" class="form-control col-sm-7 language mx-auto text-center" id="dSop" readonly>
                        </div>
                    </div>
                    <div class= "col-12 col-sm-6 col-md-4 text-center mOff">
                        <div class="form-group ">
                            <label class="field-label"> Current PFA  </label>
                            <input type="text" class="form-control col-sm-7 language mx-auto text-center" id="dcpfa" readonly>
                        </div>
                    </div>
                    <div class= "col-12 col-sm-6 col-md-4 text-center mOff">
                        <div class="form-group ">
                            <label class="field-label"> Pin number  </label>
                            <input type="text" class="form-control col-sm-7 language mx-auto text-center" id="dpin" readonly>
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
                    <div class= "form-group col-12 col-sm-6 col-md-4 text-center mOff">
                        <label class="field-label"> Title </label>
                        <input type="text" class="form-control col-sm-7 language mx-auto text-center" id="dk-title" readonly>
                    </div>
                    <div class= "col-12 col-sm-6 col-md-4 text-center mOff">
                        <div class="form-group">
                            <label class="field-label"> Last name </label>
                            <input type="text" class="form-control col-sm-7 language mx-auto text-center" id="dk-lname" readonly>
                        </div>
                    </div>
                    <div class= "col-12 col-sm-6 col-md-4 text-center mOff">

                        <div class="form-group">
                            <label class="field-label"> First name </label>
                            <input type="text" class="form-control language col-sm-7 mx-auto text-center" id="dk-fname" readonly>
                        </div>
                    </div>

                    <!--end of line 1 -->

                    <hr class="d-color">

                    <!-- line 2 start -->

                    <div class= "form-group col-12 col-sm-6 col-md-4 text-center mOff">
                        <div class="form-group ">
                            <label class="field-label"> Relationship </label>
                            <input type="text" class="form-control col-sm-7 language mx-auto text-center" id="drelationship" readonly>
                        </div>
                    </div>
                    <div class= "form-group col-12 col-sm-6 col-md-4 text-center mOff">
                        <label class="field-label"> Gender </label>
                        <input type="text" class="form-control col-sm-7 language mx-auto text-center" id="dkgender" readonly>
                    </div>
                    <div class= "col-12 col-sm-6 col-md-4 text-center mOff">
                        <div class="form-group ">
                            <label class="field-label"> Address </label>
                            <input type="text" class="form-control col-sm-7 language mx-auto text-center" id="dkadd" readonly>
                        </div>
                    </div>


                    <!-- end of line 2 -->

                    <hr class="d-color">

                    <!-- line 3 start -->

                    <div class= "form-group col-12 col-sm-6 col-md-4 text-center mOff">
                        <div class="form-group">
                            <label class="field-label"> State of origin </label>
                            <input type="text" class="form-control col-sm-7 language mx-auto text-center" id="dksoo" readonly>
                        </div>
                    </div>
                    <div class= "col-12 col-sm-6 col-md-4 text-center mOff">
                        <div class="form-group ">
                            <label class="field-label"> LGA </label>
                            <input type="text" class="form-control col-sm-7 language mx-auto text-center" id="dklga" readonly>
                        </div>
                    </div>
                    <div class= "col-12 col-sm-6 col-md-4 text-center mOff">
                        <div class="form-group ">
                            <label class="field-label"> Mobile no </label>
                            <input type="text" class="form-control col-sm-7 language mx-auto text-center" id="dkmno" readonly>
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
                <div class="col-4 col-lg-1 btn btn-purple" name="continue" id="5c"> Submit </div>
            </div>
        </div>
        <!-- Confirmation page end -->
    </form>
    <div class=row>
        <div class="col-12">
            <a class="" href="/">
                <figure>
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/images/logo-alt.png" alt="" class="img-fluid back-logo">
                    <figcaption class="back" style="font-size:10px"> <i class="fa fa-arrow-left" aria-hidden="true"></i> back to Leadway-Pensure.com </figcaption>
                </figure>
            </a>
        </div>
    </div>
</div>

<?php get_footer(); ?>
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/progressbar.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/dropzone.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/parsley.min.js"></script>
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
        from: { color: '#2068a4' },
        to: { color: '#233d70' },
        step: function(state, circle, attachment) {
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
    $(document).ready(function(){

        function _(x){
            return document.getElementById(x).value;
        }
        function __(x){
            return document.getElementById(x);
        }

        function parse(a,b,c) {
            for(; a < b.length; a++) {
                $(b[a]).val(c[a]);
            }
        }

        var accessed = 0
        //test block for _(x)
        function show(response){
            alert(response);
        };

        //accessing values of personal information form fields
        var responseA = _('gender');
        var responseB = _('status');
        var responseC = _('birthday');
        var responseD = _('soo');
        var responseE = _('lga');
        var responseF = _('nation');
        var responseG = _('idt');
        var responseH = _('p-email');
        var responseI = _('p-mno');
        var responseJ = _('org');
        var responseK = _('orgAdd');
        var responseL = _('orgLga');
        var responseM = _('orgState');
        var responseN = _('orgNo');
        var responseO = _('doe');
        var responseP = _('sop');
        var responseQ = _('cpfa');
        var responseR = _('pin');
        var responseS = _('k-title');
        var responseT = _('k-lname');
        var responseU = _('k-fname');
        var responseV = _('relationship');
        var responseW = _('k-gender');
        var responseX = _('k-add');
        var responseY = _('k-soo');
        var responseZ = _('k-lga');
        var responseA1 = _('k-mno');


        //accessing all select box ids

        var selectA = __('gender');
        var selectB = __('status');
        var selectC = __('soo');
        var selectD = __('nation');
        var selectE = __('idt');

        //accessing id of input fields

        var inputA = __('lga')

        //accessing innerHTML of Display fields for personal information form responses
        var displayA = __('dGender');
        var displayB = __('dStatus');
        var displayC = __('dBirthday');
        var displayD = __('dSoo');
        var displayE = __('dLga');
        var displayF = __('dNation');
        var displayG = __('dIdt');
        var displayH = __('dp-email');
        var displayI = __('dp-mno');
        var displayJ = __('dOrg');
        var displayK = __('dOrgAdd');
        var displayL = __('dOrgLga');
        var displayM = __('dOrgState');
        var displayN = __('dOrgNo');
        var displayO = __('dDoe');
        var displayP = __('dSop');
        var displayQ = __('dcpfa');
        var displayR = __('dpin');
        var displayS = __('dk-title');
        var displayT = __('dk-fname');
        var displayU = __('dk-lname');
        var displayV = __('drelationship');
        var displayW = __('dkgender');
        var displayX = __('dkadd');
        var displayY = __('dksoo');
        var displayZ = __('dklga');
        var displayA1 = __('dkmno');

        var responseArray1 = [responseA, responseB, responseC, responseD, responseE, responseF, responseG, responseH, responseI ] ;
        var displayArray1 = [displayA, displayB, displayC, displayD, displayE, displayF, displayG, displayH, displayI ] ;


        function validateemail(x)
        {
            var atposition=x.indexOf("@");
            var dotposition=x.lastIndexOf(".");
            if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){
                alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);
                return false;
            }
        }



        //setting initial progress-text content
        $('#progress-text').html("The journey of a thousand miles begins with one step, here it begins with four!")

        var formInstance = $('.demo-form');
        $('.form-navigation .next').click(function() {

        });

        // switch screen function on click
        $("#1c").click(function(){

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

                //grouping response and display areas
                responseArray1 = [responseA, responseB, responseC, responseD, responseE, responseF, responseG, responseH, responseI];
                displayArray1 = [displayA, displayB, displayC, displayD, displayE, displayF, displayG, displayH, displayI];



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

        });


        $("#2c").click(function(){
            if ($('.demo-form').parsley().validate({group: 'block2'})){
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
                responseArray2 = [responseJ, responseK, responseL, responseM, responseN, responseO, responseP, responseQ, responseR] ;
                displayArray2 =  [displayJ, displayK, displayL, displayM, displayN, displayO, displayP, displayQ, displayR] ;

                $("#employer, #employer-head, #employer-form, #employer-button").fadeOut(300, function(){
                    $("#kin, #kin-head, #kin-form, #kin-button").fadeIn(500, progressbar.animate(0.4, {
                        duration: 800,
                        from: { color: '#2068a4' },
                        to: { color: '#233d70' },
                    }, progressbar.setText('40%')));
                    $('#progress-text').html("If you can't give them your atm pin, they don't qualify :p")
                });

                $("#3b").click(function(){
                    $("#kin, #kin-head, #kin-form, #kin-button").fadeOut(300, function(){
                        $("#employer, #employer-head, #employer-form, #employer-button").fadeIn(500, progressbar.animate(0.2, {
                            duration: 800,
                            from: { color: '#2068a4' },
                            to: { color: '#233d70' },
                        }, progressbar.setText('20%')));
                        $('#progress-text').html("We know you should do it for the passion, doing it for the money isn't bad too...")
                    });
                });
            }else{
                return false;
            }
        });
        $("#3c").click(function(){

            if ($('.demo-form').parsley().validate({group: 'block3'})){
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
                displayArray3 =  [displayS, displayT, displayU, displayV, displayW, displayX, displayY, displayZ, displayA1];


                $("#kin, #kin-head, #kin-form, #kin-button").fadeOut(300, function(){
                    $("#biometrics, #biometrics-head, #biometrics-form, #biometrics-button").fadeIn(500, progressbar.animate(0.6, {
                        duration: 800,
                        from: { color: '#2068a4' },
                        to: { color: '#233d70' },
                    }, progressbar.setText('60%')));
                    $('#progress-text').html(" It's about time we saw that pretty face :)")
                });


                $("#4b").click(function(){
                    $("#biometrics, #biometrics-head, #biometrics-form, #biometrics-button").fadeOut(300, function(){
                        $("#kin, #kin-head, #kin-form, #kin-button").fadeIn(500, progressbar.animate(0.4, {
                            duration: 800,
                            from: { color: '#2068a4' },
                            to: { color: '#233d70' },
                        }, progressbar.setText('40%')));
                        $('#progress-text').html("If you can't give them your atm pin, they don't qualify :p")
                    });

                });
            }else{
                return false;
            }
        });


        $("#4c").click(function(){

            if (document.querySelector('.dz-image-preview') !== null){
                $("#biometrics, #biometrics-head, #biometrics-form, #biometrics-button").fadeOut(300, function(){
                    $("#confirm, #confirm-head, #confirm-form, #confirm-button").fadeIn(500, progressbar.animate(0.8, {
                        duration: 800,
                        from: { color: '#2068a4' },
                        to: { color: '#233d70' },
                    }, progressbar.setText('80%')));
                    $('#progress-text').html(" Just checking we crossed our t's and dotted our i's! ")
                });

                $("#5b").click(function(){
                    $("#confirm, #confirm-head, #confirm-form, #confirm-button").fadeOut(300, function(){
                        $("#biometrics, #biometrics-head, #biometrics-form, #biometrics-button").fadeIn(500, progressbar.animate(0.6, {
                            duration: 800,
                            from: { color: '#2068a4' },
                            to: { color: '#233d70' },
                        }, progressbar.setText('60%')));
                        $('#progress-text').html(" It's about time we saw that pretty face :)")
                    });
                });
                parse(accessed,displayArray1,responseArray1);
                parse(accessed,displayArray2,responseArray2);
                parse(accessed,displayArray3,responseArray3);

            } else{
                alert("Upload your image to continue")
                return false
            }
        });

    });
</script>
<script>
    Dropzone.options.upload = false
    $(document).ready(function(){
        $("#upload").dropzone({
            url: "/uploads",
            dictDefaultMessage: ' Click or drag a passport sized photograph',
            addRemoveLinks: true,
            thumbnailHeight: 144,
            thumbnailWidth: 144,
            maxFiles: '1',
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 2, // MB
            accept: function(file, done) {
                console.log("uploaded");
                done();
            },
            init: function() {
                this.on("addedfile", function() {
                    if (this.files[1]!=null){
                        this.removeFile(this.files[0]);
                    }
                });
            }
        })
    });
</script>

</body>
</html>