<?
session_start();
include 'header.php';
?>

<?if($_SESSION['user']): ?>
	<? echo "HELLO {$_SESSION['user']['user_email']}"; ?>
	<a href="log_out.php">LOG OUT</a>
<? endif; ?>

<?if(!$_SESSION['user']): ?>
	<a href="enter.php">SIGN IN</a>
<? endif; ?>

<?if(!$_SESSION['user']): ?>
	<a href="register_front.php">REGISTER</a>
<? endif; ?>


<!--  -->
<!--  -->


<section class="two-cards-bg" id="profile">
		<div class="app-emp-radio">
			<div class="app-emp-radio__applicant">Applicant</div>
			<div class="app-emp-radio__employer">Employer</div>
		</div>
		<!--  -->
		<!-- ! APPLICANT -->
		<!--  -->
		<div class="two-cards-flex two-cards-flex__applicant">
			<!-- ! card APPLICANT -->
			<div class="card card__post-job">
				<form class="post-job-form" action="#" method="post" enctype="multipart/form-data">
					<!--  -->
					<label for="card__input-logo" class="card__logo card__input-logo-label">
						<span></span>
					</label>
					<input type="file" class="card__logo card__input-logo">
					<textarea class="card__job-title card__post-job-title" placeholder="Your profession..." maxlength="40"
						minlength="4"></textarea>
					<textarea class="card__company-name card__post-job-company-name"
						placeholder="Company/freelancer/self-empoyed..." maxlength="50" minlength="2"></textarea>
					<!--  -->

					<ul class="card__post-job-options">
						<li class="card-option__salary card-option__post-job-salary">
							<select class="post-job-salary-select" title="Salary">
								<option selected disabled value="0">Salary</option>
								<option value="">DOE</option>
								<option value="">100 USD</option>
								<option value="">200 USD</option>
								<option value="">300 USD</option>
								<option value="">400 USD</option>
								<option value="">500 USD</option>
								<option value="">600 USD</option>
								<option value="">700 USD</option>
								<option value="">800 USD</option>
								<option value="">900 USD</option>
								<option value="">1000 USD</option>
								<option value="">1100 USD</option>
								<option value="">1200 USD</option>
								<option value="">1300 USD</option>
								<option value="">1400 USD</option>
								<option value="">1500 USD</option>
								<option value="">1600 USD</option>
								<option value="">1700 USD</option>
								<option value="">1800 USD</option>
								<option value="">1900 USD</option>
								<option value="">2000 USD</option>
								<option value="">2100 USD</option>
								<option value="">2200 USD</option>
								<option value="">2300 USD</option>
								<option value="">2400 USD</option>
								<option value="">2500 USD</option>
								<option value="">2600 USD</option>
								<option value="">2700 USD</option>
								<option value="">2800 USD</option>
								<option value="">2900 USD</option>
								<option value="">3000 USD</option>
								<option value="">3100 USD</option>
								<option value="">3200 USD</option>
								<option value="">3300 USD</option>
								<option value="">3400 USD</option>
								<option value="">3500 USD</option>
								<option value="">3600 USD</option>
								<option value="">3700 USD</option>
								<option value="">3800 USD</option>
								<option value="">3900 USD</option>
								<option value="">4000 USD</option>
								<option value="">4100 USD</option>
								<option value="">4200 USD</option>
								<option value="">4300 USD</option>
								<option value="">4400 USD</option>
								<option value="">4500 USD</option>
								<option value="">4600 USD</option>
								<option value="">4700 USD</option>
								<option value="">4800 USD</option>
								<option value="">4900 USD</option>
								<option value="">5000 USD</option>
								<option value="">5100 USD</option>
								<option value="">5200 USD</option>
								<option value="">5300 USD</option>
								<option value="">5400 USD</option>
								<option value="">5500 USD</option>
								<option value="">5600 USD</option>
								<option value="">5700 USD</option>
								<option value="">5800 USD</option>
								<option value="">5900 USD</option>
								<option value="">6000 USD</option>
								<option value="">6100 USD</option>
								<option value="">6200 USD</option>
								<option value="">6300 USD</option>
								<option value="">6400 USD</option>
								<option value="">6500 USD</option>
								<option value="">6600 USD</option>
								<option value="">6700 USD</option>
								<option value="">6800 USD</option>
								<option value="">6900 USD</option>
								<option value="">7000 USD</option>
								<option value="">7100 USD</option>
								<option value="">7200 USD</option>
								<option value="">7300 USD</option>
								<option value="">7400 USD</option>
								<option value="">7500 USD</option>
								<option value="">7600 USD</option>
								<option value="">7700 USD</option>
								<option value="">7800 USD</option>
								<option value="">7900 USD</option>
								<option value="">8000 USD</option>
								<option value="">8100 USD</option>
								<option value="">8200 USD</option>
								<option value="">8300 USD</option>
								<option value="">8400 USD</option>
								<option value="">8500 USD</option>
								<option value="">8600 USD</option>
								<option value="">8700 USD</option>
								<option value="">8800 USD</option>
								<option value="">8900 USD</option>
								<option value="">9000 USD</option>
								<option value="">9100 USD</option>
								<option value="">9200 USD</option>
								<option value="">9300 USD</option>
								<option value="">9400 USD</option>
								<option value="">9500 USD</option>
								<option value="">9600 USD</option>
								<option value="">9700 USD</option>
								<option value="">9800 USD</option>
								<option value="">9900 USD</option>
							</select>
						</li>
						<li class="card-option__exp card-option__post-job-exp">
							<select class="post-job-exp-select" title="Experience">
								<option selected disabled value="">Experience</option>
								<option value="">No Exp.</option>
								<option value="">1 year</option>
								<option value="">2 years</option>
								<option value="">3 years</option>
								<option value="">4 years</option>
								<option value="">5 years</option>
								<option value="">6 years</option>
								<option value="">7 years</option>
								<option value="">8 years</option>
								<option value="">9 years</option>
								<option value="">10 years</option>
								<option value="">11 years</option>
								<option value="">12 years</option>
								<option value="">13 years</option>
								<option value="">14 years</option>
								<option value="">15 years</option>
								<option value="">16 years</option>
								<option value="">17 years</option>
								<option value="">18 years</option>
								<option value="">19 years</option>
								<option value="">20 years</option>
								<option value="">21 years</option>
								<option value="">22 years</option>
								<option value="">23 years</option>
								<option value="">24 years</option>
								<option value="">25 years</option>
								<option value="">26 years</option>
								<option value="">27 years</option>
								<option value="">28 years</option>
								<option value="">29 years</option>
								<option value="">30 years</option>
								<option value="">31 years</option>
								<option value="">32 years</option>
								<option value="">33 years</option>
								<option value="">34 years</option>
								<option value="">35 years</option>
								<option value="">36 years</option>
								<option value="">37 years</option>
								<option value="">38 years</option>
								<option value="">39 years</option>
								<option value="">40 years</option>
								<option value="">41 years</option>
								<option value="">42 years</option>
								<option value="">43 years</option>
								<option value="">44 years</option>
								<option value="">45 years</option>
								<option value="">46 years</option>
								<option value="">47 years</option>
								<option value="">48 years</option>
								<option value="">49 years</option>
								<option value="">50 years</option>
							</select>
						</li>
						<li class="card-option__location card-option__post-job-location">
							<select class="post-job-country-select" title="Country">
								<option selected disabled value="0">Location</option>
								<option value="Worldwide">Worldwide</option>
								<option value="Afghanistan">Afghanistan</option>
								<option value="Akrotiri">Akrotiri</option>
								<option value="Albania">Albania</option>
								<option value="Algeria">Algeria</option>
								<option value="American Samoa">American Samoa</option>
								<option value="Andorra">Andorra</option>
								<option value="Angola">Angola</option>
								<option value="Anguilla">Anguilla</option>
								<option value="Antarctica">Antarctica</option>
								<option value="Antigua and">Antigua and Barbuda</option>
								<option value="Argentina">Argentina</option>
								<option value="Armenia">Armenia</option>
								<option value="Aruba">Aruba</option>
								<option value="Ashmore and">Ashmore and Cartier Islands</option>
								<option value="Australia">Australia</option>
								<option value="Austria">Austria</option>
								<option value="Azerbaijan">Azerbaijan</option>
								<option value="Bahamas,">Bahamas, The</option>
								<option value="Bahrain">Bahrain</option>
								<option value="Bangladesh">Bangladesh</option>
								<option value="Barbados">Barbados</option>
								<option value="Bassas da">Bassas da India</option>
								<option value="Belarus">Belarus</option>
								<option value="Belgium">Belgium</option>
								<option value="Belize">Belize</option>
								<option value="Benin">Benin</option>
								<option value="Bermuda">Bermuda</option>
								<option value="Bhutan">Bhutan</option>
								<option value="Bolivia">Bolivia</option>
								<option value="Bosnia and">Bosnia and Herzegovina</option>
								<option value="Botswana">Botswana</option>
								<option value="Bouvet Island">Bouvet Island</option>
								<option value="Brazil">Brazil</option>
								<option value="British Indian">British Indian Ocean Territory</option>
								<option value="British Virgin">British Virgin Islands</option>
								<option value="Brunei">Brunei</option>
								<option value="Bulgaria">Bulgaria</option>
								<option value="Burkina Faso">Burkina Faso</option>
								<option value="Burma">Burma</option>
								<option value="Burundi">Burundi</option>
								<option value="Cambodia">Cambodia</option>
								<option value="Cameroon">Cameroon</option>
								<option value="Canada">Canada</option>
								<option value="Cape Verde">Cape Verde</option>
								<option value="Cayman Islands">Cayman Islands</option>
								<option value="Central African">Central African Republic</option>
								<option value="Chad">Chad</option>
								<option value="Chile">Chile</option>
								<option value="China">China</option>
								<option value="Christmas Island">Christmas Island</option>
								<option value="Clipperton Island">Clipperton Island</option>
								<option value="Cocos (Keeling">Cocos (Keeling) Islands</option>
								<option value="Colombia">Colombia</option>
								<option value="Comoros">Comoros</option>
								<option value="Congo,">Congo, Democratic Republic of the</option>
								<option value="Congo,">Congo, Republic of the</option>
								<option value="Cook Islands">Cook Islands</option>
								<option value="Coral Sea">Coral Sea Islands</option>
								<option value="Costa Rica">Costa Rica</option>
								<option value="Cote d">Cote d'Ivoire</option>
								<option value="Croatia">Croatia</option>
								<option value="Cuba">Cuba</option>
								<option value="Cyprus">Cyprus</option>
								<option value="Czech Republic">Czech Republic</option>
								<option value="Denmark">Denmark</option>
								<option value="Dhekelia">Dhekelia</option>
								<option value="Djibouti">Djibouti</option>
								<option value="Dominica">Dominica</option>
								<option value="Dominican Republic">Dominican Republic</option>
								<option value="Ecuador">Ecuador</option>
								<option value="Egypt">Egypt</option>
								<option value="El Salvador">El Salvador</option>
								<option value="Equatorial Guinea">Equatorial Guinea</option>
								<option value="Eritrea">Eritrea</option>
								<option value="Estonia">Estonia</option>
								<option value="Ethiopia">Ethiopia</option>
								<option value="Europa Island">Europa Island</option>
								<option value="Falkland Islands">Falkland Islands (Islas Malvinas)</option>
								<option value="Faroe Islands">Faroe Islands</option>
								<option value="Fiji">Fiji</option>
								<option value="Finland">Finland</option>
								<option value="France">France</option>
								<option value="French Guiana">French Guiana</option>
								<option value="French Polynesia">French Polynesia</option>
								<option value="French Southern">French Southern and Antarctic Lands</option>
								<option value="Gabon">Gabon</option>
								<option value="Gambia,">Gambia, The</option>
								<option value="Gaza Strip">Gaza Strip</option>
								<option value="Georgia">Georgia</option>
								<option value="Germany">Germany</option>
								<option value="Ghana">Ghana</option>
								<option value="Gibraltar">Gibraltar</option>
								<option value="Glorioso Islands">Glorioso Islands</option>
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
								<option value="Heard Island">Heard Island and McDonald Islands</option>
								<option value="Holy See">Holy See (Vatican City)</option>
								<option value="Honduras">Honduras</option>
								<option value="Hong Kong">Hong Kong</option>
								<option value="Hungary">Hungary</option>
								<option value="Iceland">Iceland</option>
								<option value="India">India</option>
								<option value="Indonesia">Indonesia</option>
								<option value="Iran">Iran</option>
								<option value="Iraq">Iraq</option>
								<option value="Ireland">Ireland</option>
								<option value="Isle of">Isle of Man</option>
								<option value="Israel">Israel</option>
								<option value="Italy">Italy</option>
								<option value="Jamaica">Jamaica</option>
								<option value="Jan Mayen">Jan Mayen</option>
								<option value="Japan">Japan</option>
								<option value="Jersey">Jersey</option>
								<option value="Jordan">Jordan</option>
								<option value="Juan de">Juan de Nova Island</option>
								<option value="Kazakhstan">Kazakhstan</option>
								<option value="Kenya">Kenya</option>
								<option value="Kiribati">Kiribati</option>
								<option value="Korea,">Korea, North</option>
								<option value="Korea,">Korea, South</option>
								<option value="Kuwait">Kuwait</option>
								<option value="Kyrgyzstan">Kyrgyzstan</option>
								<option value="Laos">Laos</option>
								<option value="Latvia">Latvia</option>
								<option value="Lebanon">Lebanon</option>
								<option value="Lesotho">Lesotho</option>
								<option value="Liberia">Liberia</option>
								<option value="Libya">Libya</option>
								<option value="Liechtenstein">Liechtenstein</option>
								<option value="Lithuania">Lithuania</option>
								<option value="Luxembourg">Luxembourg</option>
								<option value="Macau">Macau</option>
								<option value="Macedonia">Macedonia</option>
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
								<option value="Micronesia,">Micronesia, Federated States of</option>
								<option value="Moldova">Moldova</option>
								<option value="Monaco">Monaco</option>
								<option value="Mongolia">Mongolia</option>
								<option value="Montserrat">Montserrat</option>
								<option value="Morocco">Morocco</option>
								<option value="Mozambique">Mozambique</option>
								<option value="Namibia">Namibia</option>
								<option value="Nauru">Nauru</option>
								<option value="Navassa Island">Navassa Island</option>
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
								<option value="Northern Mariana">Northern Mariana Islands</option>
								<option value="Norway">Norway</option>
								<option value="Oman">Oman</option>
								<option value="Pakistan">Pakistan</option>
								<option value="Palau">Palau</option>
								<option value="Panama">Panama</option>
								<option value="Papua New">Papua New Guinea</option>
								<option value="Paracel Islands">Paracel Islands</option>
								<option value="Paraguay">Paraguay</option>
								<option value="Peru">Peru</option>
								<option value="Philippines">Philippines</option>
								<option value="Pitcairn Islands">Pitcairn Islands</option>
								<option value="Poland">Poland</option>
								<option value="Portugal">Portugal</option>
								<option value="Puerto Rico">Puerto Rico</option>
								<option value="Qatar">Qatar</option>
								<option value="Reunion">Reunion</option>
								<option value="Romania">Romania</option>
								<option value="Russia">Russia</option>
								<option value="Rwanda">Rwanda</option>
								<option value="Saint Helena">Saint Helena</option>
								<option value="Saint Kitts">Saint Kitts and Nevis</option>
								<option value="Saint Lucia">Saint Lucia</option>
								<option value="Saint Pierre">Saint Pierre and Miquelon</option>
								<option value="Saint Vincent">Saint Vincent and the Grenadines</option>
								<option value="Samoa">Samoa</option>
								<option value="San Marino">San Marino</option>
								<option value="Sao Tome">Sao Tome and Principe</option>
								<option value="Saudi Arabia">Saudi Arabia</option>
								<option value="Senegal">Senegal</option>
								<option value="Serbia and">Serbia and Montenegro</option>
								<option value="Seychelles">Seychelles</option>
								<option value="Sierra Leone">Sierra Leone</option>
								<option value="Singapore">Singapore</option>
								<option value="Slovakia">Slovakia</option>
								<option value="Slovenia">Slovenia</option>
								<option value="Solomon Islands">Solomon Islands</option>
								<option value="Somalia">Somalia</option>
								<option value="South Africa">South Africa</option>
								<option value="South Georgia">South Georgia and the South Sandwich Islands</option>
								<option value="Spain">Spain</option>
								<option value="Spratly Islands">Spratly Islands</option>
								<option value="Sri Lanka">Sri Lanka</option>
								<option value="Sudan">Sudan</option>
								<option value="Suriname">Suriname</option>
								<option value="Svalbard">Svalbard</option>
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
								<option value="Trinidad and">Trinidad and Tobago</option>
								<option value="Tromelin Island">Tromelin Island</option>
								<option value="Tunisia">Tunisia</option>
								<option value="Turkey">Turkey</option>
								<option value="Turkmenistan">Turkmenistan</option>
								<option value="Turks and">Turks and Caicos Islands</option>
								<option value="Tuvalu">Tuvalu</option>
								<option value="Uganda">Uganda</option>
								<option value="Ukraine">Ukraine</option>
								<option value="United Arab">United Arab Emirates</option>
								<option value="United Kingdom">United Kingdom</option>
								<option value="United States">United States</option>
								<option value="Uruguay">Uruguay</option>
								<option value="Uzbekistan">Uzbekistan</option>
								<option value="Vanuatu">Vanuatu</option>
								<option value="Venezuela">Venezuela</option>
								<option value="Vietnam">Vietnam</option>
								<option value="Virgin Islands">Virgin Islands</option>
								<option value="Wake Island">Wake Island</option>
								<option value="Wallis and">Wallis and Futuna</option>
								<option value="West Bank">West Bank</option>
								<option value="Western Sahara">Western Sahara</option>
								<option value="Yemen">Yemen</option>
								<option value="Zambia">Zambia</option>
								<option value="Zimbabwe">Zimbabwe</option>
							</select>
						</li>
						<li class="card-option__duration">
							<select class="post-job-duration-select" title="Duration">
								<option selected disabled value="">Duration</option>
								<option value="">Permanent</option>
								<option value="">Temporary</option>
								<option value="">Time to time</option>
							</select>
						</li>
						<li class="card-option__workload">
							<select class="post-job-workload-select" title="Workload">
								<option selected disabled value="">Workload</option>
								<option value="">1 /mo</option>
								<option value="">2 h/mo</option>
								<option value="">3 h/mo</option>
								<option value="">4 h/mo</option>
								<option value="">5 h/mo</option>
								<option value="">6 h/mo</option>
								<option value="">7 h/mo</option>
								<option value="">8 h/mo</option>
								<option value="">9 h/mo</option>
								<option value="">10 h/mo</option>
								<option value="">11 h/mo</option>
								<option value="">12 h/mo</option>
								<option value="">13 h/mo</option>
								<option value="">14 h/mo</option>
								<option value="">15 h/mo</option>
								<option value="">16 h/mo</option>
								<option value="">17 h/mo</option>
								<option value="">18 h/mo</option>
								<option value="">19 h/mo</option>
								<option value="">20 h/mo</option>
								<option value="">21 h/mo</option>
								<option value="">22 h/mo</option>
								<option value="">23 h/mo</option>
								<option value="">24 h/mo</option>
								<option value="">25 h/mo</option>
								<option value="">26 h/mo</option>
								<option value="">27 h/mo</option>
								<option value="">28 h/mo</option>
								<option value="">29 h/mo</option>
								<option value="">30 h/mo</option>
								<option value="">31 h/mo</option>
								<option value="">32 h/mo</option>
								<option value="">33 h/mo</option>
								<option value="">34 h/mo</option>
								<option value="">35 h/mo</option>
								<option value="">36 h/mo</option>
								<option value="">37 h/mo</option>
								<option value="">38 h/mo</option>
								<option value="">39 h/mo</option>
								<option value="">40 h/mo</option>
								<option value="">41 h/mo</option>
								<option value="">42 h/mo</option>
								<option value="">43 h/mo</option>
								<option value="">44 h/mo</option>
								<option value="">45 h/mo</option>
								<option value="">46 h/mo</option>
								<option value="">47 h/mo</option>
								<option value="">48 h/mo</option>
								<option value="">49 h/mo</option>
								<option value="">50 h/mo</option>
								<option value="">51 h/mo</option>
								<option value="">52 h/mo</option>
								<option value="">53 h/mo</option>
								<option value="">54 h/mo</option>
								<option value="">55 h/mo</option>
								<option value="">56 h/mo</option>
								<option value="">57 h/mo</option>
								<option value="">58 h/mo</option>
								<option value="">59 h/mo</option>
								<option value="">60 h/mo</option>
								<option value="">61 h/mo</option>
								<option value="">62 h/mo</option>
								<option value="">63 h/mo</option>
								<option value="">64 h/mo</option>
								<option value="">65 h/mo</option>
								<option value="">66 h/mo</option>
								<option value="">67 h/mo</option>
								<option value="">68 h/mo</option>
								<option value="">69 h/mo</option>
								<option value="">70 h/mo</option>
								<option value="">71 h/mo</option>
								<option value="">72 h/mo</option>
								<option value="">73 h/mo</option>
								<option value="">74 h/mo</option>
								<option value="">75 h/mo</option>
								<option value="">76 h/mo</option>
								<option value="">77 h/mo</option>
								<option value="">78 h/mo</option>
								<option value="">79 h/mo</option>
								<option value="">80 h/mo</option>
								<option value="">81 h/mo</option>
								<option value="">82 h/mo</option>
								<option value="">83 h/mo</option>
								<option value="">84 h/mo</option>
								<option value="">85 h/mo</option>
								<option value="">86 h/mo</option>
								<option value="">87 h/mo</option>
								<option value="">88 h/mo</option>
								<option value="">89 h/mo</option>
								<option value="">90 h/mo</option>
								<option value="">91 h/mo</option>
								<option value="">92 h/mo</option>
								<option value="">93 h/mo</option>
								<option value="">94 h/mo</option>
								<option value="">95 h/mo</option>
								<option value="">96 h/mo</option>
								<option value="">97 h/mo</option>
								<option value="">98 h/mo</option>
								<option value="">99 h/mo</option>
								<option value="">100 h/mo</option>
								<option value="">101 h/mo</option>
								<option value="">102 h/mo</option>
								<option value="">103 h/mo</option>
								<option value="">104 h/mo</option>
								<option value="">105 h/mo</option>
								<option value="">106 h/mo</option>
								<option value="">107 h/mo</option>
								<option value="">108 h/mo</option>
								<option value="">109 h/mo</option>
								<option value="">110 h/mo</option>
								<option value="">111 h/mo</option>
								<option value="">112 h/mo</option>
								<option value="">113 h/mo</option>
								<option value="">114 h/mo</option>
								<option value="">115 h/mo</option>
								<option value="">116 h/mo</option>
								<option value="">117 h/mo</option>
								<option value="">118 h/mo</option>
								<option value="">119 h/mo</option>
								<option value="">120 h/mo</option>
								<option value="">121 h/mo</option>
								<option value="">122 h/mo</option>
								<option value="">123 h/mo</option>
								<option value="">124 h/mo</option>
								<option value="">125 h/mo</option>
								<option value="">126 h/mo</option>
								<option value="">127 h/mo</option>
								<option value="">128 h/mo</option>
								<option value="">129 h/mo</option>
								<option value="">130 h/mo</option>
								<option value="">131 h/mo</option>
								<option value="">132 h/mo</option>
								<option value="">133 h/mo</option>
								<option value="">134 h/mo</option>
								<option value="">135 h/mo</option>
								<option value="">136 h/mo</option>
								<option value="">137 h/mo</option>
								<option value="">138 h/mo</option>
								<option value="">139 h/mo</option>
								<option value="">140 h/mo</option>
								<option value="">141 h/mo</option>
								<option value="">142 h/mo</option>
								<option value="">143 h/mo</option>
								<option value="">144 h/mo</option>
								<option value="">145 h/mo</option>
								<option value="">146 h/mo</option>
								<option value="">147 h/mo</option>
								<option value="">148 h/mo</option>
								<option value="">149 h/mo</option>
								<option value="">150 h/mo</option>
								<option value="">151 h/mo</option>
								<option value="">152 h/mo</option>
								<option value="">153 h/mo</option>
								<option value="">154 h/mo</option>
								<option value="">155 h/mo</option>
								<option value="">156 h/mo</option>
								<option value="">157 h/mo</option>
								<option value="">158 h/mo</option>
								<option value="">159 h/mo</option>
								<option value="">160 h/mo</option>
								<option value="">161 h/mo</option>
								<option value="">162 h/mo</option>
								<option value="">163 h/mo</option>
								<option value="">164 h/mo</option>
								<option value="">165 h/mo</option>
								<option value="">166 h/mo</option>
								<option value="">167 h/mo</option>
								<option value="">168 h/mo</option>
								<option value="">169 h/mo</option>
								<option value="">170 h/mo</option>
								<option value="">171 h/mo</option>
								<option value="">172 h/mo</option>
								<option value="">173 h/mo</option>
								<option value="">174 h/mo</option>
								<option value="">175 h/mo</option>
								<option value="">176 h/mo</option>
								<option value="">177 h/mo</option>
								<option value="">178 h/mo</option>
								<option value="">179 h/mo</option>
								<option value="">180 h/mo</option>
								<option value="">181 h/mo</option>
								<option value="">182 h/mo</option>
								<option value="">183 h/mo</option>
								<option value="">184 h/mo</option>
								<option value="">185 h/mo</option>
								<option value="">186 h/mo</option>
								<option value="">187 h/mo</option>
								<option value="">188 h/mo</option>
								<option value="">189 h/mo</option>
								<option value="">190 h/mo</option>
								<option value="">191 h/mo</option>
								<option value="">192 h/mo</option>
								<option value="">193 h/mo</option>
								<option value="">194 h/mo</option>
								<option value="">195 h/mo</option>
								<option value="">196 h/mo</option>
								<option value="">197 h/mo</option>
								<option value="">198 h/mo</option>
								<option value="">199 h/mo</option>
								<option value="">200 h/mo</option>
							</select>
						</li>
						<li class="card-option__example card-option__post-job-example">Load Example</li>
					</ul>
					<!--  -->
					<div class="card__tags">
						<!-- <div class="card__tag">animation</div>
						<div class="card__tag">presentation</div>
						<div class="card__tag">illustration</div> -->
						<select class="post-job-tags-select" title="Choose 3 tags" data-placeholder="Choose 3 tags..."
							multiple>
							<optgroup label="DESIGN">
								<option value="all-design">All DESIGN</option>
								<option value="animation">animation</option>
								<option value="anime">anime</option>
								<option value="art">art</option>
								<option value="brand">brand</option>
								<option value="CAD">CAD</option>
								<option value="cartoonist">cartoonist</option>
								<option value="character">character</option>
								<option value="children">children's</option>
								<option value="comic">comic</option>
								<option value="creative">creative</option>
								<option value="design">design</option>
								<option value="direction">direction</option>
								<option value="editorial">editorial</option>
								<option value="fashion">fashion</option>
								<option value="graphic">graphic</option>
								<option value="illustration">illustration</option>
								<option value="img">img edit</option>
								<option value="layout">layout</option>
								<option value="motion">motion</option>
								<option value="photo">photo</option>
								<option value="presentation">presentation</option>
								<option value="realistic">realistic</option>
								<option value="social">social</option>
								<option value="storyboard">storyboard</option>
								<option value="UX">UX / UI</option>
								<option value="video">video</option>
								<option value="VR">VR / AR</option>
							</optgroup>
							<optgroup label="DEV">
								<option value="all-dev">All DEV</option>
								<option value="QA">QA</option>
								<option value="CMS">CMS</option>
								<option value="database">database</option>
								<option value="desktop">desktop</option>
								<option value="ecommerce">ecommerce</option>
								<option value="full">full stack</option>
								<option value="game">game dev</option>
								<option value="mobile">mobile</option>
								<option value="product">product</option>
								<option value="management">management</option>
								<option value="prototype">prototype</option>
								<option value="software">software</option>
								<option value="research">research</option>
								<option value="front">front-end</option>
								<option value="back">back-End</option>
							</optgroup>
						</select>
					</div>
					<!--  -->
					<input class="card__icons card-icons card__post-job-icons post-job-reset" type="reset"
						id="aplicant-reset">
					<label for="aplicant-reset" class="post-job-reset-label icon-scale">
						<img src="img/icons/cross.svg" alt="post-job-reset">
					</label>
					<input class="card__icons card-icons card__post-job-icons post-job-submit" type="submit"
						id="aplicant-submit">
					<label for="aplicant-submit" class="post-job-submit-label icon-scale">
						<img src="img/icons/info-ok-grey.svg" alt="post-job-submit">
					</label>

				</form>
			</div>
			<!-- ? card APPLICANT -->
			<img class="two-cards-flex__arrow" src="img/icons/arrow.svg" alt="arrow">
			<!-- ! card APPLICANT - EXAMPLE -->
			<div class="card card__post-job-example">
				<img class="card__logo" src="img/applicantLogo.png" alt="card__post-job-EXAMPLE-logo">
				<div class="card__job-title card__post-job-example-title">2d Artist, Illustrator</div>
				<div class="card__company-name card__post-job-example-company-name">Freelancer</div>
				<!--  -->
				<ul class="card__post-job-example-options">
					<li class="card-option__salary">$2k/mo</li>
					<li class="card-option__exp">3 years</li>
					<li class="card-option__location card-option__post-job-example-location">Worldwide</li>
					<li class="card-option__duration">Permanent</li>
					<li class="card-option__workload">160 h/mo</li>
					<li class="card-option__example">Example</li>
				</ul>
				<!--  -->
				<div class="card__tags">
					<div class="card__tag">animation</div>
					<div class="card__tag">presentation</div>
					<div class="card__tag">illustration</div>
				</div>
				<!--  -->
				<div class="card__icons card-icons card__post-job-example-icons">
					<img src="img/icons/info-ok.svg" alt="apply">
				</div>
			</div>
			<a href="/"><img class="two-cards-flex__cross" src="img/icons/cross.svg" alt="cross"></a>
			<!-- ? card APPLICANT - EXAMPLE -->
		</div>
		<!--  -->
		<!-- ? APPLICANT -->
		<!--  -->
		<!--  -->
		<!-- ! EMPLOYER -->
		<!--  -->

		<!--  -->
		<!-- ? EMPLOYER -->
		<!--  -->
	</section>
<? 
include 'footer.php';
?>