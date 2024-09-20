@include('layouts.admin.head')

<body>
    <!-- Add Modal Start -->
    <div class="modal fade" id="addCarModal" tabindex="-1" aria-labelledby="addCarModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form method="post" action="#" id="addcar" class="needs-validation" novalidate>
                    <div class="modal-header px-4">
                        <h5 class="modal-title fs-5">Add Car</h5>
                        <button type="button" class="outline-none border-0 p0 bg-transparent" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i data-feather="x" stroke-width="1.5" class="text-body"></i>
                        </button>
                    </div>
                    <div class="modal-body p6 px-3">
                        <div class="container-fluid">
                            <div class="row mb5">
                                <div class="col-12">
                                    <label for="add-car-form-1" class="form-label">
                                        <span>Select Photo</span>
                                        <span class="text-danger">*</span>
                                        <i data-feather="info" stroke-width="2" height="12" class="text-body"
                                            data-bs-toggle="tooltip" data-bs-placement="right"
                                            data-bs-custom-class="qd-tooltip"
                                            data-bs-title="Supports: *.png or *.jpg"></i>
                                    </label>
                                    <div id="drop-area" class="d-flex bg-light">
                                        <div
                                            class="width-120 height-120 border-dashed rounded bg-body-secondary position-relative overflow-hidden d-flex align-items-center justify-content-center">
                                            <i data-feather="image" stroke-width="1.5" class="text-body"></i>
                                            <div class="img-fix width-120 height-120 position-absolute top-0 start-0">
                                                <img id="preview-img" class="">
                                            </div>
                                        </div>
                                        <div class="d-flex flex-grow-1 align-items-center justify-content-center">
                                            <div class="d-flex flex-column justify-content-start align-items-center">
                                                <strong class="d-block mb2">Drag & Drop</strong>
                                                <span class="d-block mb2">OR</span>
                                                <label for="fileElem" id="fileSelect"
                                                    class="d-block mb3 text-primary">Browse Photo</label>
                                                <small>Supports: *.png, *.jpg and *.jpeg</small>
                                            </div>
                                        </div>
                                        <input type="file" id="fileElem" accept="image/*" class="d-none">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 mb5">
                                    <label for="add-car-form-2" class="form-label">
                                        <span>Brand</span>
                                        <span class="text-danger">*</span>
                                        <i data-feather="info" stroke-width="2" height="12" class="text-body"
                                            data-bs-toggle="tooltip" data-bs-placement="right"
                                            data-bs-custom-class="qd-tooltip"
                                            data-bs-title="Choose a car brand from the list."></i>
                                    </label>
                                    <select id="add-car-form-2" class="form-select js-choice" required>
                                        <option value="">Select Brand</option>
                                        <option value="1">Volkswagen</option>
                                        <option value="2">Mercedes</option>
                                        <option value="3">Toyota</option>
                                        <option value="4">Nissan</option>
                                        <option value="5">Subaru</option>
                                    </select>
                                    <div class="invalid-feedback">Please select a brand.</div>
                                </div>
                                <div class="col-sm-6 mb5">
                                    <label for="add-car-form-3" class="form-label">
                                        <span>Model</span>
                                        <span class="text-danger">*</span>
                                        <i data-feather="info" stroke-width="2" height="12" class="text-body"
                                            data-bs-toggle="tooltip" data-bs-placement="right"
                                            data-bs-custom-class="qd-tooltip"
                                            data-bs-title="After choosing a brand, choose a model."></i>
                                    </label>
                                    <select id="add-car-form-3" class="form-select js-choice" required>
                                        <option value="">Select Model</option>
                                        <option value="1">Golf TSI 2017</option>
                                        <option value="2">AMG GT 2019</option>
                                        <option value="3">4Runner 2018</option>
                                        <option value="4">Altima 2020</option>
                                        <option value="5">Outback 2019</option>
                                    </select>
                                    <div class="invalid-feedback">Please select a model.</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 mb5">
                                    <label for="add-car-form-4" class="form-label">
                                        <span>Year</span>
                                        <span class="text-danger">*</span>
                                        <i data-feather="info" stroke-width="2" height="12" class="text-body"
                                            data-bs-toggle="tooltip" data-bs-placement="right"
                                            data-bs-custom-class="qd-tooltip"
                                            data-bs-title="Select the traffic license date of the car."></i>
                                    </label>
                                    <select id="add-car-form-4" class="form-select js-choice" required>
                                        <option value="">Select Year</option>
                                        <option value="1">2023</option>
                                        <option value="2">2022</option>
                                        <option value="3">2021</option>
                                        <option value="4">2020</option>
                                        <option value="5">2019</option>
                                    </select>
                                    <div class="invalid-feedback">Please select a year.</div>
                                </div>
                                <div class="col-sm-6 mb5">
                                    <label for="add-car-form-5" class="form-label">
                                        <span>Status</span>
                                        <span class="text-danger">*</span>
                                        <i data-feather="info" stroke-width="2" height="12" class="text-body"
                                            data-bs-toggle="tooltip" data-bs-placement="right"
                                            data-bs-custom-class="qd-tooltip"
                                            data-bs-title="Select the status of the car being published on the site."></i>
                                    </label>
                                    <select id="add-car-form-5" class="form-select js-choice" required>
                                        <option value="">Select Status</option>
                                        <option value="1">Published</option>
                                        <option value="2">Inactive</option>
                                        <option value="3">Scheduled</option>
                                    </select>
                                    <div class="invalid-feedback">Please select a status.</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 mb5">
                                    <label for="add-car-form-6" class="form-label">
                                        <span>Country</span>
                                        <i data-feather="info" stroke-width="2" height="12" class="text-body"
                                            data-bs-toggle="tooltip" data-bs-placement="right"
                                            data-bs-custom-class="qd-tooltip"
                                            data-bs-title="Choose a country from the list."></i>
                                    </label>
                                    <select id="add-car-form-6" class="form-select js-choice">
                                        <option selected>Select Country</option>
                                        <option value="['Nigeria','NG']">Nigeria</option>
                                        <option value="['Afghanistan','AF']">Afghanistan</option>
                                        <option value="['Åland Islands','AX']">Åland Islands</option>
                                        <option value="['Albania','AL']">Albania</option>
                                        <option value="['Algeria','DZ']">Algeria</option>
                                        <option value="['American Samoa','AS']">American Samoa</option>
                                        <option value="['Andorra','AD']">Andorra</option>
                                        <option value="['Angola','AO']">Angola</option>
                                        <option value="['Anguilla','AI']">Anguilla</option>
                                        <option value="['Antarctica','AQ']">Antarctica</option>
                                        <option value="['Antigua and Barbuda','AG']">Antigua and Barbuda</option>
                                        <option value="['Argentina','AR']">Argentina</option>
                                        <option value="['Armenia','AM']">Armenia</option>
                                        <option value="['Aruba','AW']">Aruba</option>
                                        <option value="['Australia','AU']">Australia</option>
                                        <option value="['Austria','AT']">Austria</option>
                                        <option value="['Azerbaijan','AZ']">Azerbaijan</option>
                                        <option value="['Bahamas','BS']">Bahamas</option>
                                        <option value="['Bahrain','BH']">Bahrain</option>
                                        <option value="['Bangladesh','BD']">Bangladesh</option>
                                        <option value="['Barbados','BB']">Barbados</option>
                                        <option value="['Belarus','BY']">Belarus</option>
                                        <option value="['Belgium','BE']">Belgium</option>
                                        <option value="['Belize','BZ']">Belize</option>
                                        <option value="['Benin','BJ']">Benin</option>
                                        <option value="['Bermuda','BM']">Bermuda</option>
                                        <option value="['Bhutan','BT']">Bhutan</option>
                                        <option value="['Bolivia, Plurinational State of','BO']">"Bolivia,
                                            Plurinational State of"</option>
                                        <option value="['Bonaire, Sint Eustatius and Saba','BQ']">"Bonaire, Sint
                                            Eustatius and Saba"</option>
                                        <option value="['Bosnia and Herzegovina','BA']">Bosnia and Herzegovina</option>
                                        <option value="['Botswana','BW']">Botswana</option>
                                        <option value="['Bouvet Island','BV']">Bouvet Island</option>
                                        <option value="['Brazil','BR']">Brazil</option>
                                        <option value="['British Indian Ocean Territory','IO']">British Indian Ocean
                                            Territory</option>
                                        <option value="['Brunei Darussalam','BN']">Brunei Darussalam</option>
                                        <option value="['Bulgaria','BG']">Bulgaria</option>
                                        <option value="['Burkina Faso','BF']">Burkina Faso</option>
                                        <option value="['Burundi','BI']">Burundi</option>
                                        <option value="['Cambodia','KH']">Cambodia</option>
                                        <option value="['Cameroon','CM']">Cameroon</option>
                                        <option value="['Canada','CA']">Canada</option>
                                        <option value="['Cape Verde','CV']">Cape Verde</option>
                                        <option value="['Cayman Islands','KY']">Cayman Islands</option>
                                        <option value="['Central African Republic','CF']">Central African Republic
                                        </option>
                                        <option value="['Chad','TD']">Chad</option>
                                        <option value="['Chile','CL']">Chile</option>
                                        <option value="['China','CN']">China</option>
                                        <option value="['Christmas Island','CX']">Christmas Island</option>
                                        <option value="['Cocos (Keeling) Islands','CC']">Cocos (Keeling) Islands
                                        </option>
                                        <option value="['Colombia','CO']">Colombia</option>
                                        <option value="['Comoros','KM']">Comoros</option>
                                        <option value="['Congo','CG']">Congo</option>
                                        <option value="['Congo, the Democratic Republic of the','CD']">"Congo, the
                                            Democratic Republic of the"</option>
                                        <option value="['Cook Islands','CK']">Cook Islands</option>
                                        <option value="['Costa Rica','CR']">Costa Rica</option>
                                        <option value="['CÃƒÂ´te d'Ivoire','CI']">CÃƒÂ´te d'Ivoire</option>
                                        <option value="['Croatia','HR']">Croatia</option>
                                        <option value="['Cuba','CU']">Cuba</option>
                                        <option value="['CuraÃƒÂ§ao','CW']">CuraÃƒÂ§ao</option>
                                        <option value="['Cyprus','CY']">Cyprus</option>
                                        <option value="['Czech Republic','CZ']">Czech Republic</option>
                                        <option value="['Denmark','DK']">Denmark</option>
                                        <option value="['Djibouti','DJ']">Djibouti</option>
                                        <option value="['Dominica','DM']">Dominica</option>
                                        <option value="['Dominican Republic','DO']">Dominican Republic</option>
                                        <option value="['Ecuador','EC']">Ecuador</option>
                                        <option value="['Egypt','EG']">Egypt</option>
                                        <option value="['El Salvador','SV']">El Salvador</option>
                                        <option value="['Equatorial Guinea','GQ']">Equatorial Guinea</option>
                                        <option value="['Eritrea','ER']">Eritrea</option>
                                        <option value="['Estonia','EE']">Estonia</option>
                                        <option value="['Ethiopia','ET']">Ethiopia</option>
                                        <option value="['Falkland Islands (Malvinas)','FK']">Falkland Islands
                                            (Malvinas)</option>
                                        <option value="['Faroe Islands','FO']">Faroe Islands</option>
                                        <option value="['Fiji','FJ']">Fiji</option>
                                        <option value="['Finland','FI']">Finland</option>
                                        <option value="['France','FR']">France</option>
                                        <option value="['French Guiana','GF']">French Guiana</option>
                                        <option value="['French Polynesia','PF']">French Polynesia</option>
                                        <option value="['French Southern Territories','TF']">French Southern
                                            Territories</option>
                                        <option value="['Gabon','GA']">Gabon</option>
                                        <option value="['Gambia','GM']">Gambia</option>
                                        <option value="['Georgia','GE']">Georgia</option>
                                        <option value="['Germany','DE']">Germany</option>
                                        <option value="['Ghana','GH']">Ghana</option>
                                        <option value="['Gibraltar','GI']">Gibraltar</option>
                                        <option value="['Greece','GR']">Greece</option>
                                        <option value="['Greenland','GL']">Greenland</option>
                                        <option value="['Grenada','GD']">Grenada</option>
                                        <option value="['Guadeloupe','GP']">Guadeloupe</option>
                                        <option value="['Guam','GU']">Guam</option>
                                        <option value="['Guatemala','GT']">Guatemala</option>
                                        <option value="['Guernsey','GG']">Guernsey</option>
                                        <option value="['Guinea','GN']">Guinea</option>
                                        <option value="['Guinea-Bissau','GW']">Guinea-Bissau</option>
                                        <option value="['Guyana','GY']">Guyana</option>
                                        <option value="['Haiti','HT']">Haiti</option>
                                        <option value="['Heard Island and McDonald Islands','HM']">Heard Island and
                                            McDonald Islands</option>
                                        <option value="['Holy See (Vatican City State)','VA']">Holy See (Vatican City
                                            State)</option>
                                        <option value="['Honduras','HN']">Honduras</option>
                                        <option value="['Hong Kong','HK']">Hong Kong</option>
                                        <option value="['Hungary','HU']">Hungary</option>
                                        <option value="['Iceland','IS']">Iceland</option>
                                        <option value="['India','IN']">India</option>
                                        <option value="['Indonesia','ID']">Indonesia</option>
                                        <option value="['Iran, Islamic Republic of','IR']">"Iran, Islamic Republic of"
                                        </option>
                                        <option value="['Iraq','IQ']">Iraq</option>
                                        <option value="['Ireland','IE']">Ireland</option>
                                        <option value="['Isle of Man','IM']">Isle of Man</option>
                                        <option value="['Israel','IL']">Israel</option>
                                        <option value="['Italy','IT']">Italy</option>
                                        <option value="['Jamaica','JM']">Jamaica</option>
                                        <option value="['Japan','JP']">Japan</option>
                                        <option value="['Jersey','JE']">Jersey</option>
                                        <option value="['Jordan','JO']">Jordan</option>
                                        <option value="['Kazakhstan','KZ']">Kazakhstan</option>
                                        <option value="['Kenya','KE']">Kenya</option>
                                        <option value="['Kiribati','KI']">Kiribati</option>
                                        <option value="['Korea, Democratic People's Republic of','KP']">"Korea,
                                            Democratic People's Republic of"</option>
                                        <option value="['Korea, Republic of','KR']">"Korea, Republic of"</option>
                                        <option value="['Kuwait','KW']">Kuwait</option>
                                        <option value="[Kyrgyzstan','KG']">yrgyzstan</option>
                                        <option value="['Lao People`s Democratic Republic','LA']">Lao People's
                                            Democratic Republic</option>
                                        <option value="['Latvia','LV']">Latvia</option>
                                        <option value="['Lebanon','LB']">Lebanon</option>
                                        <option value="['Lesotho','LS']">Lesotho</option>
                                        <option value="['Liberia','LR']">Liberia</option>
                                        <option value="['Libya','LY']">Libya</option>
                                        <option value="['Liechtenstein','LI']">Liechtenstein</option>
                                        <option value="['Lithuania','LT']">Lithuania</option>
                                        <option value="['Luxembourg','LU']">Luxembourg</option>
                                        <option value="['Macao','MO']">Macao</option>
                                        <option value="['Macedonia, the Former Yugoslav Republic of','MK']">"Macedonia,
                                            the Former Yugoslav Republic of"</option>
                                        <option value="['Madagascar','MG']">Madagascar</option>
                                        <option value="['Malawi','MW']">Malawi</option>
                                        <option value="['Malaysia','MY']">Malaysia</option>
                                        <option value="['Maldives','MV']">Maldives</option>
                                        <option value="['Mali','ML']">Mali</option>
                                        <option value="['Malta','MT']">Malta</option>
                                        <option value="['Marshall Islands','MH']">Marshall Islands</option>
                                        <option value="['Martinique','MQ']">Martinique</option>
                                        <option value="['Mauritania','MR']">Mauritania</option>
                                        <option value="['Mauritius','MU']">Mauritius</option>
                                        <option value="['Mayotte','YT']">Mayotte</option>
                                        <option value="['Mexico','MX']">Mexico</option>
                                        <option value="['Micronesia, Federated States of','FM']">"Micronesia, Federated
                                            States of</option>
                                        <option value="['Moldova, Republic of','MD']">"Moldova, Republic of"</option>
                                        <option value="['Monaco','MC']">Monaco</option>
                                        <option value="['Mongolia','MN']">Mongolia</option>
                                        <option value="['Montenegro','ME']">Montenegro</option>
                                        <option value="['Montserrat','MS']">Montserrat</option>
                                        <option value="['Morocco','MA']">Morocco</option>
                                        <option value="['Mozambique','MZ']">Mozambique</option>
                                        <option value="['Myanmar','MM']">Myanmar</option>
                                        <option value="['Namibia','NA']">Namibia</option>
                                        <option value="['Nauru','NR']">Nauru</option>
                                        <option value="['Nepal','NP']">Nepal</option>
                                        <option value="['Netherlands','NL']">Netherlands</option>
                                        <option value="['New Caledonia','NC']">New Caledonia</option>
                                        <option value="['New Zealand','NZ']">New Zealand</option>
                                        <option value="['Nicaragua','NI']">Nicaragua</option>
                                        <option value="['Niger','NE']">Niger</option>
                                        <option value="['Niue','NU']">Niue</option>
                                        <option value="['Norfolk Island','NF']">Norfolk Island</option>
                                        <option value="['Northern Mariana Islands','MP']">Northern Mariana Islands
                                        </option>
                                        <option value="['Norway','NO']">Norway</option>
                                        <option value="['Oman','OM']">Oman</option>
                                        <option value="['Pakistan','PK']">Pakistan</option>
                                        <option value="['Palau','PW']">Palau</option>
                                        <option value="['Palestine, State of','PS']">"Palestine, State of"</option>
                                        <option value="['Panama','PA']">Panama</option>
                                        <option value="['Papua New Guinea','PG']">Papua New Guinea</option>
                                        <option value="['Paraguay','PY']">Paraguay</option>
                                        <option value="['Peru','PE']">Peru</option>
                                        <option value="['Philippines','PH']">Philippines</option>
                                        <option value="['Pitcairn','PN']">Pitcairn</option>
                                        <option value="['Poland','PL']">Poland</option>
                                        <option value="['Portugal','PT']">Portugal</option>
                                        <option value="['Puerto Rico','PR']">Puerto Rico</option>
                                        <option value="['Qatar','QA']">Qatar</option>
                                        <option value="['RÃƒÂ©union','RE']">RÃƒÂ©union</option>
                                        <option value="['Romania','RO']">Romania</option>
                                        <option value="['Russian Federation','RU']">Russian Federation</option>
                                        <option value="['Rwanda','RW']">Rwanda</option>
                                        <option value="['Saint BarthÃƒÂ©lemy','BL']">Saint BarthÃƒÂ©lemy</option>
                                        <option value="['Saint Helena','Ascension and Tristan da Cunha','SH']">"Saint
                                            Helena, Ascension and Tristan da Cunha"</option>
                                        <option value="['Saint Kitts and Nevis','KN']">Saint Kitts and Nevis</option>
                                        <option value="['Saint Lucia','LC']">Saint Lucia</option>
                                        <option value="['Saint Martin (French part)','MF']">Saint Martin (French part)
                                        </option>
                                        <option value="['Saint Pierre and Miquelon','PM']">Saint Pierre and Miquelon
                                        </option>
                                        <option value="['Saint Vincent and the Grenadines','VC']">Saint Vincent and the
                                            Grenadines</option>
                                        <option value="['Samoa','WS']">Samoa</option>
                                        <option value="['San Marino','SM']">San Marino</option>
                                        <option value="['Sao Tome and Principe','ST']">Sao Tome and Principe</option>
                                        <option value="['Saudi Arabia','SA']">Saudi Arabia</option>
                                        <option value="['Senegal','SN']">Senegal</option>
                                        <option value="['Serbia','RS']">Serbia</option>
                                        <option value="['Seychelles','SC']">Seychelles</option>
                                        <option value="['Sierra Leone','SL']">Sierra Leone</option>
                                        <option value="['Singapore','SG']">Singapore</option>
                                        <option value="['Sint Maarten (Dutch part)','SX']">Sint Maarten (Dutch part)
                                        </option>
                                        <option value="['Slovakia','SK']">Slovakia</option>
                                        <option value="['Slovenia','SI']">Slovenia</option>
                                        <option value="['Solomon Islands','SB']">Solomon Islands</option>
                                        <option value="['Somalia','SO']">Somalia</option>
                                        <option value="['South Africa','ZA']">South Africa</option>
                                        <option value="['South Georgia and the South Sandwich Islands','GS']">South
                                            Georgia and the South Sandwich Islands</option>
                                        <option value="['South Sudan','SS']">South Sudan</option>
                                        <option value="['Spain','ES']">Spain</option>
                                        <option value="['Sri Lanka','LK']">Sri Lanka</option>
                                        <option value="['Sudan','SD']">Sudan</option>
                                        <option value="['Suriname','SR']">Suriname</option>
                                        <option value="['Svalbard and Jan Mayen','SJ']">Svalbard and Jan Mayen</option>
                                        <option value="['Swaziland','SZ']">Swaziland</option>
                                        <option value="['Sweden','SE']">Sweden</option>
                                        <option value="['Switzerland','CH']">Switzerland</option>
                                        <option value="['Syrian Arab Republic','SY']">Syrian Arab Republic</option>
                                        <option value="['Taiwan, Province of China','TW']">"Taiwan, Province of China"
                                        </option>
                                        <option value="['Tajikistan','TJ']">Tajikistan</option>
                                        <option value="['Tanzania, United Republic of','TZ']">"Tanzania, United
                                            Republic of"</option>
                                        <option value="['Thailand','TH']">Thailand</option>
                                        <option value="['Timor-Leste','TL']">Timor-Leste</option>
                                        <option value="['Togo','TG']">Togo</option>
                                        <option value="['Tokelau','TK']">Tokelau</option>
                                        <option value="['Tonga','TO']">Tonga</option>
                                        <option value="['Trinidad and Tobago','TT']">Trinidad and Tobago</option>
                                        <option value="['Tunisia','TN']">Tunisia</option>
                                        <option value="['Turkey','TR']">Turkey</option>
                                        <option value="['Turkmenistan','TM']">Turkmenistan</option>
                                        <option value="['Turks and Caicos Islands','TC']">Turks and Caicos Islands
                                        </option>
                                        <option value="['Tuvalu','TV']">Tuvalu</option>
                                        <option value="['Uganda','UG']">Uganda</option>
                                        <option value="['Ukraine','UA']">Ukraine</option>
                                        <option value="['United Arab Emirates','AE']">United Arab Emirates</option>
                                        <option value="['United Kingdom','GB']">United Kingdom</option>
                                        <option value="['United States','US']">United States</option>
                                        <option value="['United States Minor Outlying Islands','UM']">United States
                                            Minor Outlying Islands</option>
                                        <option value="['Uruguay','UY']">Uruguay</option>
                                        <option value="['Uzbekistan','UZ']">Uzbekistan</option>
                                        <option value="['Vanuatu','VU']">Vanuatu</option>
                                        <option value="['Venezuela, Bolivarian Republic of','VE']">"Venezuela,
                                            Bolivarian Republic of"</option>
                                        <option value="['Viet Nam','VN']">Viet Nam</option>
                                        <option value="['Virgin Islands, British','VG']">"Virgin Islands, British"
                                        </option>
                                        <option value="['Virgin Islands, U.S.','VI']">"Virgin Islands, U.S."</option>
                                        <option value="['Wallis and Futuna','WF']">Wallis and Futuna</option>
                                        <option value="['Western Sahara','EH']">Western Sahara</option>
                                        <option value="['Yemen','YE']">Yemen</option>
                                        <option value="['Zambia','ZM']">Zambia</option>
                                        <option value="['Zimbabwe','ZW']">Zimbabwe</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 mb5">
                                    <label for="add-car-form-7" class="form-label">
                                        <span>License Plate</span>
                                        <span class="text-danger">*</span>
                                        <i data-feather="info" stroke-width="2" height="12" class="text-body"
                                            data-bs-toggle="tooltip" data-bs-placement="right"
                                            data-bs-custom-class="qd-tooltip"
                                            data-bs-title="Write down the license plate of the vehicle."></i>
                                    </label>
                                    <input id="add-car-form-7" class="form-control" type="text" required>
                                    <div class="invalid-feedback">Please fill out all fields.</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 mb5">
                                    <div class="checkbox checkbox-primary me4">
                                        <input type="checkbox" name="check1" id="add-car-form-8" checked>
                                        <label for="add-car-form-8">Is there a child car seat?</label>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb5">
                                    <div class="checkbox checkbox-primary me4">
                                        <input type="checkbox" name="check1" id="add-car-form-9">
                                        <label for="add-car-form-9">Can it be rented monthly?</label>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb5">
                                    <div class="checkbox checkbox-primary me4">
                                        <input type="checkbox" name="check1" id="add-car-form-10">
                                        <label for="add-car-form-10">It's a different location?</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <h6>Prices</h6>
                                </div>
                                <div class="col-12 mb2">
                                    <div class="border border-dashed rounded p5 pb4">
                                        <strong class="text-body mb4 d-block">Season 1</strong>
                                        <div class="row">
                                            <div class="col-lg-6 mb3">
                                                <label for="add-car-form-11" class="form-label">
                                                    <span>Date Range</span>
                                                    <span class="text-danger">*</span>
                                                    <i data-feather="info" stroke-width="2" height="12"
                                                        class="text-body" data-bs-toggle="tooltip"
                                                        data-bs-placement="right" data-bs-custom-class="qd-tooltip"
                                                        data-bs-title="Select a date range for the rental season."></i>
                                                </label>
                                                <input id="add-car-form-11" class="form-control qd-datepicker"
                                                    type="text" autocomplete="off" required>
                                                <div class="invalid-feedback">Choose a date range.</div>
                                            </div>
                                            <div class="col-lg-6 mb3">
                                                <label for="add-car-form-12" class="form-label">
                                                    <span>Price</span>
                                                    <span class="text-danger">*</span>
                                                    <i data-feather="info" stroke-width="2" height="12"
                                                        class="text-body" data-bs-toggle="tooltip"
                                                        data-bs-placement="right" data-bs-custom-class="qd-tooltip"
                                                        data-bs-title="Daily price between the respective season dates."></i>
                                                </label>
                                                <div class="input-group">
                                                    <input id="add-car-form-12" class="form-control" type="text"
                                                        placeholder="10,00" required>
                                                    <span class="input-group-text">USD</span>
                                                    <div class="invalid-feedback">Enter a valid price.</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="border border-dashed rounded p5 pb4">
                                        <strong class="text-body mb4 d-block">Season 2</strong>
                                        <div class="row">
                                            <div class="col-lg-6 mb3">
                                                <label for="add-car-form-13" class="form-label">
                                                    <span>Date Range</span>
                                                    <span class="text-danger">*</span>
                                                    <i data-feather="info" stroke-width="2" height="12"
                                                        class="text-body" data-bs-toggle="tooltip"
                                                        data-bs-placement="right" data-bs-custom-class="qd-tooltip"
                                                        data-bs-title="Select a date range for the rental season."></i>
                                                </label>
                                                <input id="add-car-form-13" class="form-control qd-datepicker"
                                                    type="text" autocomplete="off" required>
                                                <div class="invalid-feedback">Choose a date range.</div>
                                            </div>
                                            <div class="col-lg-6 mb3">
                                                <label for="add-car-form-14" class="form-label">
                                                    <span>Price</span>
                                                    <span class="text-danger">*</span>
                                                    <i data-feather="info" stroke-width="2" height="12"
                                                        class="text-body" data-bs-toggle="tooltip"
                                                        data-bs-placement="right" data-bs-custom-class="qd-tooltip"
                                                        data-bs-title="Daily price between the respective season dates."></i>
                                                </label>
                                                <div class="input-group">
                                                    <input id="add-car-form-14" class="form-control" type="text"
                                                        placeholder="10,00" required>
                                                    <span class="input-group-text">USD</span>
                                                    <div class="invalid-feedback">Enter a valid price.</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Add Modal End -->

    <div class="app-root d-flex flex-column">
        <!-- ***** Sidebar Start ***** -->

        @include('layouts.admin.sidebar')
        <!-- ***** Sidebar End ***** -->

        <!-- ***** Responsive Menu Backdrop Start ***** -->
        <div class="menu-backdrop"></div>
        <!-- ***** Responsive Menu Backdrop End ***** -->

        <!-- ***** Main Start ***** -->
        <main class="app-main">
            <!-- ***** Header Start ***** -->
            <header class="main-header d-flex justify-content-between">
                <!-- ***** Sidebar Menu Open Button Start ***** -->
                <a href="javascript:;" class="sidebar-menu-trigger"><span>Menu</span></a>
                <!-- ***** Sidebar Menu Open Button End ***** -->

                <!-- ***** Navbar Start ***** -->
                @include('layouts.admin.navbar')
                <!-- ***** Navbar End ***** -->


            </header>
            <!-- ***** Header End ***** -->

            <!-- ***** Content Start ***** -->
            <div class="app-content p6 pb2 smp1">
                <div class="container p0">
                    <!-- Page Top Start -->
                    <div class="row mb6 align-items-center">
                        <div class="col-md-6 mobile-bottom-fix">
                            <h1 class="page-title mb2">Car List</h1>
                            <nav class="breadcrumb-nav" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Car List</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-6 text-start text-md-end">
                            <!-- Filter Dropdown Start-->
                            <div class="dropdown d-inline me4">
                                <button class="btn bg-white d-inline-flex align-items-center dropdown-toggle"
                                    data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i data-feather="filter" stroke-width="1.5" height="16"
                                        class="me2 text-body"></i>
                                    <span class="text-body">Filter</span>
                                </button>
                                <div class="dropdown-menu width-300 p0">
                                    <div class="border-bottom-dashed">
                                        <h6 class="mb0 p4 px-4">Filter Options</h6>
                                    </div>
                                    <div class="p5 px-4">
                                        <div class="row mb5">
                                            <div class="col-12 mb4">
                                                <label for="form-element-1" class="form-label">Status:</label>
                                                <select id="form-element-1" class="form-select js-choice">
                                                    <option value="">Select option</option>
                                                    <option value="1">Published</option>
                                                    <option value="2">Inactive</option>
                                                    <option value="3">Scheduled</option>
                                                </select>
                                            </div>
                                            <div class="col-12 mb4">
                                                <label for="form-element-2" class="form-label">Year:</label>
                                                <input type="text" class="form-control" id="form-element-2"
                                                    placeholder="2023">
                                            </div>
                                            <div class="col-12">
                                                <label for="form-element-3" class="form-label d-block">Using
                                                    Status:</label>
                                                <div class="checkbox checkbox-primary me4">
                                                    <input type="checkbox" name="check1" id="check1" checked>
                                                    <label for="check1">In Use</label>
                                                </div>
                                                <div class="checkbox checkbox-primary me4">
                                                    <input type="checkbox" name="check2" id="check2">
                                                    <label for="check2">In the Garage</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <button class="btn btn-sm d-block w-100 btn-secondary btn-soft"
                                                    role="button">Reset</button>
                                            </div>
                                            <div class="col-6">
                                                <button class="btn btn-sm d-block w-100 btn-primary"
                                                    role="button">Apply</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Filter Dropdown End-->

                            <!-- Add Button Start-->
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCarModal">Add
                                Car</button>
                            <!-- Add Button End-->
                        </div>
                    </div>
                    <!-- Page Top End -->

                    <!-- Mini Widgets Start -->
                    <div class="row mb2">
                        <!-- Widget 1 Start -->
                        <div class="col-xxl-4 mb5">
                            <div class="bg-primary rounded-3 pt2 pb5 text-center">
                                <h6 class="text-white mb0">Total Car</h6>
                            </div>
                            <div class="card shadow-card p5 text-center mtn4">
                                <h1 class="mb1">48</h1>
                                <span>Vehicles available for rental</span>
                            </div>
                        </div>
                        <!-- Widget 1 End -->

                        <!-- Widget 2 Start -->
                        <div class="col-xxl-4 mb5">
                            <div class="bg-info rounded-3 pt2 pb5 text-center">
                                <h6 class="text-white mb0">Reservation</h6>
                            </div>
                            <div class="card shadow-card p5 text-center mtn4">
                                <h1 class="mb1">16</h1>
                                <span>New incoming reservations</span>
                            </div>
                        </div>
                        <!-- Widget 2 End -->

                        <!-- Widget 3 Start -->
                        <div class="col-xxl-4 mb5">
                            <div class="bg-success rounded-3 pt2 pb5 text-center">
                                <h6 class="text-white mb0">Faulty Vehicle</h6>
                            </div>
                            <div class="card shadow-card p5 text-center mtn4">
                                <h1 class="mb1">7</h1>
                                <span>Vehicles in maintenance</span>
                            </div>
                        </div>
                        <!-- Widget 3 End -->
                    </div>
                    <!-- Mini Widgets End -->

                    <!-- Content Start -->
                    <div class="row mb5">
                        <div class="col-12">
                            <div class="card shadow-card p6 pt3">
                                <div class="table-responsive text-nowrap">
                                    <table class="table qd-table mb6 align-middle">
                                        <thead>
                                            <tr>
                                                <th scope="col">BRAND</th>
                                                <th scope="col">MODEL</th>
                                                <th scope="col">YEAR</th>
                                                <th scope="col">LICENSE PLATE</th>
                                                <th scope="col">STATUS</th>
                                                <th scope="col" class="text-end">ACTIONS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-inline-flex flex-row align-items-center">
                                                        <div class="width-120 height-80 img-fix rounded me4">
                                                            <img src="assets/media/cars/1.jpg" alt="">
                                                        </div>
                                                        <strong>Volkswagen</strong>
                                                    </div>
                                                </td>
                                                <td>
                                                    <strong class="text-heading">Golf TSI 2017</strong>
                                                </td>
                                                <td>
                                                    <strong class="text-heading">2017</strong>
                                                </td>
                                                <td>
                                                    <div class="border border-dark width-160 rounded overflow-hidden d-flex"
                                                        dir="ltr">
                                                        <div
                                                            class="bg-primary width-40 height-30 d-flex align-items-center justify-content-center text-white">
                                                            D</div>
                                                        <div
                                                            class="w-100 d-flex align-items-center justify-content-center bg-white">
                                                            <h6 class="mb0 text-dark">KA PA 777</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge rounded-pill badge-soft text-bg-success">Published</span>
                                                </td>
                                                <td>
                                                    <div class="dropdown text-end">
                                                        <button type="button"
                                                            class="outline-none dropdown-toggle arrow-none border-0 height-40 rounded ps3 bg-body-secondary opacity-75"
                                                            data-bs-auto-close="outside" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <span class="text-heading">Actions</span>
                                                            <i data-feather="chevron-down" stroke-width="2"
                                                                height="16" class="text-heading"></i>
                                                        </button>
                                                        <ul class="dropdown-menu text-start">
                                                            <li><a class="dropdown-item" href="#">Edit</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Details</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                                    href="#">
                                                                    Delete <i data-feather="info" stroke-width="2"
                                                                        height="12" class="text-body me1"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-placement="left"
                                                                        data-bs-custom-class="qd-tooltip"
                                                                        data-bs-title="If you delete it, this action cannot be undone."></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-inline-flex flex-row align-items-center">
                                                        <div class="width-120 height-80 img-fix rounded me4">
                                                            <img src="assets/media/cars/2.jpg" alt="">
                                                        </div>
                                                        <strong>Mercedes</strong>
                                                    </div>
                                                </td>
                                                <td>
                                                    <strong class="text-heading">AMG GT 2019</strong>
                                                </td>
                                                <td>
                                                    <strong class="text-heading">2019</strong>
                                                </td>
                                                <td>
                                                    <div class="border border-dark width-160 rounded overflow-hidden d-flex"
                                                        dir="ltr">
                                                        <div
                                                            class="bg-primary width-40 height-30 d-flex align-items-center justify-content-center text-white">
                                                            F</div>
                                                        <div
                                                            class="w-100 d-flex align-items-center justify-content-center bg-warning">
                                                            <h6 class="mb0 text-dark">936 ANX 35</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge rounded-pill badge-soft text-bg-danger">Inactive</span>
                                                </td>
                                                <td>
                                                    <div class="dropdown text-end">
                                                        <button type="button"
                                                            class="outline-none dropdown-toggle arrow-none border-0 height-40 rounded ps3 bg-body-secondary opacity-75"
                                                            data-bs-auto-close="outside" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <span class="text-heading">Actions</span>
                                                            <i data-feather="chevron-down" stroke-width="2"
                                                                height="16" class="text-heading"></i>
                                                        </button>
                                                        <ul class="dropdown-menu text-start">
                                                            <li><a class="dropdown-item" href="#">Edit</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Details</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                                    href="#">
                                                                    Delete <i data-feather="info" stroke-width="2"
                                                                        height="12" class="text-body me1"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-placement="left"
                                                                        data-bs-custom-class="qd-tooltip"
                                                                        data-bs-title="If you delete it, this action cannot be undone."></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-inline-flex flex-row align-items-center">
                                                        <div class="width-120 height-80 img-fix rounded me4">
                                                            <img src="assets/media/cars/3.jpg" alt="">
                                                        </div>
                                                        <strong>Toyota</strong>
                                                    </div>
                                                </td>
                                                <td>
                                                    <strong class="text-heading">4Runner 2018</strong>
                                                </td>
                                                <td>
                                                    <strong class="text-heading">2018</strong>
                                                </td>
                                                <td>
                                                    <div class="border border-dark width-160 rounded overflow-hidden d-flex"
                                                        dir="ltr">
                                                        <div
                                                            class="bg-primary width-40 height-30 d-flex align-items-center justify-content-center text-white">
                                                            B</div>
                                                        <div
                                                            class="w-100 d-flex align-items-center justify-content-center bg-white">
                                                            <h6 class="mb0 text-danger">1-ABC-003</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge rounded-pill badge-soft text-bg-success">Published</span>
                                                </td>
                                                <td>
                                                    <div class="dropdown text-end">
                                                        <button type="button"
                                                            class="outline-none dropdown-toggle arrow-none border-0 height-40 rounded ps3 bg-body-secondary opacity-75"
                                                            data-bs-auto-close="outside" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <span class="text-heading">Actions</span>
                                                            <i data-feather="chevron-down" stroke-width="2"
                                                                height="16" class="text-heading"></i>
                                                        </button>
                                                        <ul class="dropdown-menu text-start">
                                                            <li><a class="dropdown-item" href="#">Edit</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Details</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                                    href="#">
                                                                    Delete <i data-feather="info" stroke-width="2"
                                                                        height="12" class="text-body me1"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-placement="left"
                                                                        data-bs-custom-class="qd-tooltip"
                                                                        data-bs-title="If you delete it, this action cannot be undone."></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-inline-flex flex-row align-items-center">
                                                        <div class="width-120 height-80 img-fix rounded me4">
                                                            <img src="assets/media/cars/4.jpg" alt="">
                                                        </div>
                                                        <strong>Nissan</strong>
                                                    </div>
                                                </td>
                                                <td>
                                                    <strong class="text-heading">Altima 2020</strong>
                                                </td>
                                                <td>
                                                    <strong class="text-heading">2020</strong>
                                                </td>
                                                <td>
                                                    <div class="border border-dark width-160 rounded overflow-hidden d-flex"
                                                        dir="ltr">
                                                        <div
                                                            class="bg-primary width-40 height-30 d-flex align-items-center justify-content-center text-white">
                                                            TR</div>
                                                        <div
                                                            class="w-100 d-flex align-items-center justify-content-center bg-white">
                                                            <h6 class="mb0 text-dark">48 ACV 103</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge rounded-pill badge-soft text-bg-success">Published</span>
                                                </td>
                                                <td>
                                                    <div class="dropdown text-end">
                                                        <button type="button"
                                                            class="outline-none dropdown-toggle arrow-none border-0 height-40 rounded ps3 bg-body-secondary opacity-75"
                                                            data-bs-auto-close="outside" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <span class="text-heading">Actions</span>
                                                            <i data-feather="chevron-down" stroke-width="2"
                                                                height="16" class="text-heading"></i>
                                                        </button>
                                                        <ul class="dropdown-menu text-start">
                                                            <li><a class="dropdown-item" href="#">Edit</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Details</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                                    href="#">
                                                                    Delete <i data-feather="info" stroke-width="2"
                                                                        height="12" class="text-body me1"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-placement="left"
                                                                        data-bs-custom-class="qd-tooltip"
                                                                        data-bs-title="If you delete it, this action cannot be undone."></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-inline-flex flex-row align-items-center">
                                                        <div class="width-120 height-80 img-fix rounded me4">
                                                            <img src="assets/media/cars/1.jpg" alt="">
                                                        </div>
                                                        <strong>Subaru</strong>
                                                    </div>
                                                </td>
                                                <td>
                                                    <strong class="text-heading">Outback 2019</strong>
                                                </td>
                                                <td>
                                                    <strong class="text-heading">2019</strong>
                                                </td>
                                                <td>
                                                    <div class="border border-dark width-160 rounded overflow-hidden d-flex bg-white"
                                                        dir="ltr">
                                                        <div
                                                            class="width-40 height-30 d-flex flex-column align-items-center justify-content-center text-white pt1">
                                                            <div class="width-10 height-10 bg-primary-subtle"></div>
                                                            <small class="text-primary">IND</small>
                                                        </div>
                                                        <div
                                                            class="w-100 d-flex align-items-center justify-content-center">
                                                            <h6 class="mb0 text-dark">TN 06 0 0000</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge rounded-pill badge-soft text-bg-success">Published</span>
                                                </td>
                                                <td>
                                                    <div class="dropdown text-end">
                                                        <button type="button"
                                                            class="outline-none dropdown-toggle arrow-none border-0 height-40 rounded ps3 bg-body-secondary opacity-75"
                                                            data-bs-auto-close="outside" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <span class="text-heading">Actions</span>
                                                            <i data-feather="chevron-down" stroke-width="2"
                                                                height="16" class="text-heading"></i>
                                                        </button>
                                                        <ul class="dropdown-menu text-start">
                                                            <li><a class="dropdown-item" href="#">Edit</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Details</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                                    href="#">
                                                                    Delete <i data-feather="info" stroke-width="2"
                                                                        height="12" class="text-body me1"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-placement="left"
                                                                        data-bs-custom-class="qd-tooltip"
                                                                        data-bs-title="If you delete it, this action cannot be undone."></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-inline-flex flex-row align-items-center">
                                                        <div class="width-120 height-80 img-fix rounded me4">
                                                            <img src="assets/media/cars/2.jpg" alt="">
                                                        </div>
                                                        <strong>Volkswagen</strong>
                                                    </div>
                                                </td>
                                                <td>
                                                    <strong class="text-heading">Golf TSI 2017</strong>
                                                </td>
                                                <td>
                                                    <strong class="text-heading">2017</strong>
                                                </td>
                                                <td>
                                                    <div class="border border-dark width-160 rounded overflow-hidden d-flex flex-column"
                                                        dir="ltr">
                                                        <div class="bg-primary text-white text-center">
                                                            <small>BRASIL</small>
                                                        </div>
                                                        <div
                                                            class="w-100 d-flex align-items-center justify-content-center bg-white">
                                                            <h6 class="mb0 text-dark">BCA9G35</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge rounded-pill badge-soft text-bg-info">Scheduled</span>
                                                </td>
                                                <td>
                                                    <div class="dropdown text-end">
                                                        <button type="button"
                                                            class="outline-none dropdown-toggle arrow-none border-0 height-40 rounded ps3 bg-body-secondary opacity-75"
                                                            data-bs-auto-close="outside" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <span class="text-heading">Actions</span>
                                                            <i data-feather="chevron-down" stroke-width="2"
                                                                height="16" class="text-heading"></i>
                                                        </button>
                                                        <ul class="dropdown-menu text-start">
                                                            <li><a class="dropdown-item" href="#">Edit</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Details</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                                    href="#">
                                                                    Delete <i data-feather="info" stroke-width="2"
                                                                        height="12" class="text-body me1"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-placement="left"
                                                                        data-bs-custom-class="qd-tooltip"
                                                                        data-bs-title="If you delete it, this action cannot be undone."></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-inline-flex flex-row align-items-center">
                                                        <div class="width-120 height-80 img-fix rounded me4">
                                                            <img src="assets/media/cars/3.jpg" alt="">
                                                        </div>
                                                        <strong>Mercedes</strong>
                                                    </div>
                                                </td>
                                                <td>
                                                    <strong class="text-heading">AMG GT 2019</strong>
                                                </td>
                                                <td>
                                                    <strong class="text-heading">2019</strong>
                                                </td>
                                                <td>
                                                    <div class="border border-dark width-160 rounded overflow-hidden d-flex bg-warning"
                                                        dir="ltr">
                                                        <div
                                                            class="width-40 height-30 d-flex align-items-center justify-content-center">
                                                            <small class="text-dark">UK</small>
                                                        </div>
                                                        <div
                                                            class="border border-dark rounded w-100 d-flex align-items-center justify-content-center m1">
                                                            <h6 class="mb0 text-dark">BD51 SMR</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge rounded-pill badge-soft text-bg-danger">Inactive</span>
                                                </td>
                                                <td>
                                                    <div class="dropdown text-end">
                                                        <button type="button"
                                                            class="outline-none dropdown-toggle arrow-none border-0 height-40 rounded ps3 bg-body-secondary opacity-75"
                                                            data-bs-auto-close="outside" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <span class="text-heading">Actions</span>
                                                            <i data-feather="chevron-down" stroke-width="2"
                                                                height="16" class="text-heading"></i>
                                                        </button>
                                                        <ul class="dropdown-menu text-start">
                                                            <li><a class="dropdown-item" href="#">Edit</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Details</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                                    href="#">
                                                                    Delete <i data-feather="info" stroke-width="2"
                                                                        height="12" class="text-body me1"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-placement="left"
                                                                        data-bs-custom-class="qd-tooltip"
                                                                        data-bs-title="If you delete it, this action cannot be undone."></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-inline-flex flex-row align-items-center">
                                                        <div class="width-120 height-80 img-fix rounded me4">
                                                            <img src="assets/media/cars/4.jpg" alt="">
                                                        </div>
                                                        <strong>Toyota</strong>
                                                    </div>
                                                </td>
                                                <td>
                                                    <strong class="text-heading">4Runner 2018</strong>
                                                </td>
                                                <td>
                                                    <strong class="text-heading">2018</strong>
                                                </td>
                                                <td>
                                                    <div class="border border-dark width-160 rounded overflow-hidden d-flex flex-column bg-white"
                                                        dir="ltr">
                                                        <div class="text-heading text-center">
                                                            <small class="text-dark">COUNTRY</small>
                                                        </div>
                                                        <div
                                                            class="w-100 d-flex align-items-center justify-content-center">
                                                            <h6 class="mb0 text-dark">346 MKK</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge rounded-pill badge-soft text-bg-info">Scheduled</span>
                                                </td>
                                                <td>
                                                    <div class="dropdown text-end">
                                                        <button type="button"
                                                            class="outline-none dropdown-toggle arrow-none border-0 height-40 rounded ps3 bg-body-secondary opacity-75"
                                                            data-bs-auto-close="outside" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <span class="text-heading">Actions</span>
                                                            <i data-feather="chevron-down" stroke-width="2"
                                                                height="16" class="text-heading"></i>
                                                        </button>
                                                        <ul class="dropdown-menu text-start">
                                                            <li><a class="dropdown-item" href="#">Edit</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Details</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                                    href="#">
                                                                    Delete <i data-feather="info" stroke-width="2"
                                                                        height="12" class="text-body me1"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-placement="left"
                                                                        data-bs-custom-class="qd-tooltip"
                                                                        data-bs-title="If you delete it, this action cannot be undone."></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-inline-flex flex-row align-items-center">
                                                        <div class="width-120 height-80 img-fix rounded me4">
                                                            <img src="assets/media/cars/1.jpg" alt="">
                                                        </div>
                                                        <strong>Nissan</strong>
                                                    </div>
                                                </td>
                                                <td>
                                                    <strong class="text-heading">Altima 2020</strong>
                                                </td>
                                                <td>
                                                    <strong class="text-heading">2020</strong>
                                                </td>
                                                <td>
                                                    <div class="border border-dark width-160 rounded overflow-hidden d-flex bg-white"
                                                        dir="ltr">
                                                        <div
                                                            class="w-100 d-flex align-items-center justify-content-center border-end border-dark">
                                                            <strong class="text-dark me1">A</strong>
                                                            <h5 class="mb0 me1 text-dark">0000</h5>
                                                            <strong class="text-dark">AA</strong>
                                                        </div>
                                                        <div
                                                            class="width-40 height-40 d-flex flex-column align-items-center justify-content-center text-white pt1">
                                                            <h6 class="mb0 text-dark">78</h6>
                                                            <small class="text-dark">RUS</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge rounded-pill badge-soft text-bg-success">Published</span>
                                                </td>
                                                <td>
                                                    <div class="dropdown text-end">
                                                        <button type="button"
                                                            class="outline-none dropdown-toggle arrow-none border-0 height-40 rounded ps3 bg-body-secondary opacity-75"
                                                            data-bs-auto-close="outside" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <span class="text-heading">Actions</span>
                                                            <i data-feather="chevron-down" stroke-width="2"
                                                                height="16" class="text-heading"></i>
                                                        </button>
                                                        <ul class="dropdown-menu text-start">
                                                            <li><a class="dropdown-item" href="#">Edit</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Details</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                                    href="#">
                                                                    Delete <i data-feather="info" stroke-width="2"
                                                                        height="12" class="text-body me1"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-placement="left"
                                                                        data-bs-custom-class="qd-tooltip"
                                                                        data-bs-title="If you delete it, this action cannot be undone."></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-inline-flex flex-row align-items-center">
                                                        <div class="width-120 height-80 img-fix rounded me4">
                                                            <img src="assets/media/cars/2.jpg" alt="">
                                                        </div>
                                                        <strong>Subaru</strong>
                                                    </div>
                                                </td>
                                                <td>
                                                    <strong class="text-heading">Outback 2019</strong>
                                                </td>
                                                <td>
                                                    <strong class="text-heading">2019</strong>
                                                </td>
                                                <td>
                                                    <div class="border border-dark width-160 rounded overflow-hidden d-flex"
                                                        dir="ltr">
                                                        <div
                                                            class="w-100 height-30 d-flex align-items-center justify-content-center bg-primary">
                                                            <h6 class="mb0 text-white">K P8922</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge rounded-pill badge-soft text-bg-success">Published</span>
                                                </td>
                                                <td>
                                                    <div class="dropdown text-end">
                                                        <button type="button"
                                                            class="outline-none dropdown-toggle arrow-none border-0 height-40 rounded ps3 bg-body-secondary opacity-75"
                                                            data-bs-auto-close="outside" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <span class="text-heading">Actions</span>
                                                            <i data-feather="chevron-down" stroke-width="2"
                                                                height="16" class="text-heading"></i>
                                                        </button>
                                                        <ul class="dropdown-menu text-start">
                                                            <li><a class="dropdown-item" href="#">Edit</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Details</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                                    href="#">
                                                                    Delete <i data-feather="info" stroke-width="2"
                                                                        height="12" class="text-body me1"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-placement="left"
                                                                        data-bs-custom-class="qd-tooltip"
                                                                        data-bs-title="If you delete it, this action cannot be undone."></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-inline-flex flex-row align-items-center">
                                                        <div class="width-120 height-80 img-fix rounded me4">
                                                            <img src="assets/media/cars/3.jpg" alt="">
                                                        </div>
                                                        <strong>Mercedes</strong>
                                                    </div>
                                                </td>
                                                <td>
                                                    <strong class="text-heading">AMG GT 2019</strong>
                                                </td>
                                                <td>
                                                    <strong class="text-heading">2019</strong>
                                                </td>
                                                <td>
                                                    <div class="border border-dark width-160 rounded overflow-hidden d-flex"
                                                        dir="ltr">
                                                        <div
                                                            class="bg-danger width-40 height-30 d-flex align-items-center justify-content-center text-white">
                                                            15</div>
                                                        <div
                                                            class="w-100 d-flex align-items-center justify-content-center bg-white">
                                                            <h6 class="mb0 text-dark">90126</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge rounded-pill badge-soft text-bg-success">Published</span>
                                                </td>
                                                <td>
                                                    <div class="dropdown text-end">
                                                        <button type="button"
                                                            class="outline-none dropdown-toggle arrow-none border-0 height-40 rounded ps3 bg-body-secondary opacity-75"
                                                            data-bs-auto-close="outside" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <span class="text-heading">Actions</span>
                                                            <i data-feather="chevron-down" stroke-width="2"
                                                                height="16" class="text-heading"></i>
                                                        </button>
                                                        <ul class="dropdown-menu text-start">
                                                            <li><a class="dropdown-item" href="#">Edit</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Details</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                                    href="#">
                                                                    Delete <i data-feather="info" stroke-width="2"
                                                                        height="12" class="text-body me1"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-placement="left"
                                                                        data-bs-custom-class="qd-tooltip"
                                                                        data-bs-title="If you delete it, this action cannot be undone."></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center align-items-center">
                                        <li class="page-item">
                                            <a class="page-link">
                                                <i class="arrow" data-feather="chevron-left" width="14"></i>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active"><a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">
                                                <i class="arrow" data-feather="chevron-right" width="14"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- Content End -->
                </div>
            </div>
            <!-- ***** Content End ***** -->

            <!-- ***** Footer Start ***** -->
            <footer class="p6 pt5 pb5">
                <div class="container-fluid p0">
                    <div class="row">
                        <div class="col-sm-6 text-center text-lg-start mb-sm-1">
                            <span>2023©</span>
                            <span class="text-heading">Qoduby</span>
                        </div>
                        <div class="col-sm-6">
                            <ul class="list-inline m0 text-center text-lg-end">
                                <li class="list-inline-item"><a href="#"
                                        class="text-body text-decoration-none hover-primary">Support</a></li>
                                <li class="list-inline-item"><a href="#"
                                        class="text-body text-decoration-none hover-primary">License</a></li>
                                <li class="list-inline-item"><a href="#"
                                        class="text-body text-decoration-none hover-primary">Documentation</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- ***** End Start ***** -->
        </main>
        <!-- ***** Main End ***** -->
    </div>

    <!-- Plugin Bundle -->
    <script src="{{ asset('adminAssets/js/plugins.bundle.js') }}" crossorigin="anonymous"></script>
    <!-- Common Javascript -->
    <script src="{{ asset('adminAssets/js/app.js') }}" crossorigin=" anonymous"></script>
</body>


</html>
