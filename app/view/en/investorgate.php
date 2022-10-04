<body>
    <live>
        <a href="#">Get In Touch</a>
    </live>

    <header class="portal dark-thm">
        <?php echo $this->view('templates/en/bootstraping/dark_navbar') ?>

        <div class="jumbotron">
            <span class="dark">Investor Portal Area</span>
            <h1 class="dark">Start Investing With Davidstars</h1>
        </div>
    </header>

    <portal>
        <form method="post">
            <strong>Your Information</strong>

            <input type="text" name="firstname" placeholder="First name">

            <input type="text" name="lastname" placeholder="Last name">

            <input type="email" name="email" placeholder="Email">

            <select name="referrer">
                <option>How did you know about us ?</option>
                <option value="Online-Ads">Advertising - Online</option>
                <option value="News">News or Press</option>
                <option value="Webinar">Webinar</option>
                <option value="Social Media">Social Media</option>
                <option value="Referral">Referral</option>
                <option value="Sales">Sales Outreach</option>
            </select>

            <select id="country" name="country">
                <option>Select your country !</option>
                <option value="AF">Afghanistan</option>
                <option value="AX">Aland Islands</option>
                <option value="AL">Albania</option>
                <option value="DZ">Algeria</option>
                <option value="AS">American Samoa</option>
                <option value="AD">Andorra</option>
                <option value="AO">Angola</option>
                <option value="AI">Anguilla</option>
                <option value="AQ">Antarctica</option>
                <option value="AG">Antigua and Barbuda</option>
                <option value="AR">Argentina</option>
                <option value="AM">Armenia</option>
                <option value="AW">Aruba</option>
                <option value="AU">Australia</option>
                <option value="AT">Austria</option>
                <option value="AZ">Azerbaijan</option>
                <option value="BS">Bahamas</option>
                <option value="BH">Bahrain</option>
                <option value="BD">Bangladesh</option>
                <option value="BB">Barbados</option>
                <option value="BY">Belarus</option>
                <option value="BE">Belgium</option>
                <option value="BZ">Belize</option>
                <option value="BJ">Benin</option>
                <option value="BM">Bermuda</option>
                <option value="BT">Bhutan</option>
                <option value="BO">Bolivia</option>
                <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                <option value="BA">Bosnia and Herzegovina</option>
                <option value="BW">Botswana</option>
                <option value="BV">Bouvet Island</option>
                <option value="BR">Brazil</option>
                <option value="IO">British Indian Ocean Territory</option>
                <option value="BN">Brunei Darussalam</option>
                <option value="BG">Bulgaria</option>
                <option value="BF">Burkina Faso</option>
                <option value="BI">Burundi</option>
                <option value="KH">Cambodia</option>
                <option value="CM">Cameroon</option>
                <option value="CA">Canada</option>
                <option value="CV">Cape Verde</option>
                <option value="KY">Cayman Islands</option>
                <option value="CF">Central African Republic</option>
                <option value="TD">Chad</option>
                <option value="CL">Chile</option>
                <option value="CN">China</option>
                <option value="CX">Christmas Island</option>
                <option value="CC">Cocos (Keeling) Islands</option>
                <option value="CO">Colombia</option>
                <option value="KM">Comoros</option>
                <option value="CG">Congo</option>
                <option value="CD">Congo, Democratic Republic of the Congo</option>
                <option value="CK">Cook Islands</option>
                <option value="CR">Costa Rica</option>
                <option value="CI">Cote D'Ivoire</option>
                <option value="HR">Croatia</option>
                <option value="CU">Cuba</option>
                <option value="CW">Curacao</option>
                <option value="CY">Cyprus</option>
                <option value="CZ">Czech Republic</option>
                <option value="DK">Denmark</option>
                <option value="DJ">Djibouti</option>
                <option value="DM">Dominica</option>
                <option value="DO">Dominican Republic</option>
                <option value="EC">Ecuador</option>
                <option value="EG">Egypt</option>
                <option value="SV">El Salvador</option>
                <option value="GQ">Equatorial Guinea</option>
                <option value="ER">Eritrea</option>
                <option value="EE">Estonia</option>
                <option value="ET">Ethiopia</option>
                <option value="FK">Falkland Islands (Malvinas)</option>
                <option value="FO">Faroe Islands</option>
                <option value="FJ">Fiji</option>
                <option value="FI">Finland</option>
                <option value="FR">France</option>
                <option value="GF">French Guiana</option>
                <option value="PF">French Polynesia</option>
                <option value="TF">French Southern Territories</option>
                <option value="GA">Gabon</option>
                <option value="GM">Gambia</option>
                <option value="GE">Georgia</option>
                <option value="DE">Germany</option>
                <option value="GH">Ghana</option>
                <option value="GI">Gibraltar</option>
                <option value="GR">Greece</option>
                <option value="GL">Greenland</option>
                <option value="GD">Grenada</option>
                <option value="GP">Guadeloupe</option>
                <option value="GU">Guam</option>
                <option value="GT">Guatemala</option>
                <option value="GG">Guernsey</option>
                <option value="GN">Guinea</option>
                <option value="GW">Guinea-Bissau</option>
                <option value="GY">Guyana</option>
                <option value="HT">Haiti</option>
                <option value="HM">Heard Island and Mcdonald Islands</option>
                <option value="VA">Holy See (Vatican City State)</option>
                <option value="HN">Honduras</option>
                <option value="HK">Hong Kong</option>
                <option value="HU">Hungary</option>
                <option value="IS">Iceland</option>
                <option value="IN">India</option>
                <option value="ID">Indonesia</option>
                <option value="IR">Iran, Islamic Republic of</option>
                <option value="IQ">Iraq</option>
                <option value="IE">Ireland</option>
                <option value="IM">Isle of Man</option>
                <option value="IL">Israel</option>
                <option value="IT">Italy</option>
                <option value="JM">Jamaica</option>
                <option value="JP">Japan</option>
                <option value="JE">Jersey</option>
                <option value="JO">Jordan</option>
                <option value="KZ">Kazakhstan</option>
                <option value="KE">Kenya</option>
                <option value="KI">Kiribati</option>
                <option value="KP">Korea, Democratic People's Republic of</option>
                <option value="KR">Korea, Republic of</option>
                <option value="XK">Kosovo</option>
                <option value="KW">Kuwait</option>
                <option value="KG">Kyrgyzstan</option>
                <option value="LA">Lao People's Democratic Republic</option>
                <option value="LV">Latvia</option>
                <option value="LB">Lebanon</option>
                <option value="LS">Lesotho</option>
                <option value="LR">Liberia</option>
                <option value="LY">Libyan Arab Jamahiriya</option>
                <option value="LI">Liechtenstein</option>
                <option value="LT">Lithuania</option>
                <option value="LU">Luxembourg</option>
                <option value="MO">Macao</option>
                <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
                <option value="MG">Madagascar</option>
                <option value="MW">Malawi</option>
                <option value="MY">Malaysia</option>
                <option value="MV">Maldives</option>
                <option value="ML">Mali</option>
                <option value="MT">Malta</option>
                <option value="MH">Marshall Islands</option>
                <option value="MQ">Martinique</option>
                <option value="MR">Mauritania</option>
                <option value="MU">Mauritius</option>
                <option value="YT">Mayotte</option>
                <option value="MX">Mexico</option>
                <option value="FM">Micronesia, Federated States of</option>
                <option value="MD">Moldova, Republic of</option>
                <option value="MC">Monaco</option>
                <option value="MN">Mongolia</option>
                <option value="ME">Montenegro</option>
                <option value="MS">Montserrat</option>
                <option value="MA">Morocco</option>
                <option value="MZ">Mozambique</option>
                <option value="MM">Myanmar</option>
                <option value="NA">Namibia</option>
                <option value="NR">Nauru</option>
                <option value="NP">Nepal</option>
                <option value="NL">Netherlands</option>
                <option value="AN">Netherlands Antilles</option>
                <option value="NC">New Caledonia</option>
                <option value="NZ">New Zealand</option>
                <option value="NI">Nicaragua</option>
                <option value="NE">Niger</option>
                <option value="NG">Nigeria</option>
                <option value="NU">Niue</option>
                <option value="NF">Norfolk Island</option>
                <option value="MP">Northern Mariana Islands</option>
                <option value="NO">Norway</option>
                <option value="OM">Oman</option>
                <option value="PK">Pakistan</option>
                <option value="PW">Palau</option>
                <option value="PS">Palestinian Territory, Occupied</option>
                <option value="PA">Panama</option>
                <option value="PG">Papua New Guinea</option>
                <option value="PY">Paraguay</option>
                <option value="PE">Peru</option>
                <option value="PH">Philippines</option>
                <option value="PN">Pitcairn</option>
                <option value="PL">Poland</option>
                <option value="PT">Portugal</option>
                <option value="PR">Puerto Rico</option>
                <option value="QA">Qatar</option>
                <option value="RE">Reunion</option>
                <option value="RO">Romania</option>
                <option value="RU">Russian Federation</option>
                <option value="RW">Rwanda</option>
                <option value="BL">Saint Barthelemy</option>
                <option value="SH">Saint Helena</option>
                <option value="KN">Saint Kitts and Nevis</option>
                <option value="LC">Saint Lucia</option>
                <option value="MF">Saint Martin</option>
                <option value="PM">Saint Pierre and Miquelon</option>
                <option value="VC">Saint Vincent and the Grenadines</option>
                <option value="WS">Samoa</option>
                <option value="SM">San Marino</option>
                <option value="ST">Sao Tome and Principe</option>
                <option value="SA">Saudi Arabia</option>
                <option value="SN">Senegal</option>
                <option value="RS">Serbia</option>
                <option value="CS">Serbia and Montenegro</option>
                <option value="SC">Seychelles</option>
                <option value="SL">Sierra Leone</option>
                <option value="SG">Singapore</option>
                <option value="SX">Sint Maarten</option>
                <option value="SK">Slovakia</option>
                <option value="SI">Slovenia</option>
                <option value="SB">Solomon Islands</option>
                <option value="SO">Somalia</option>
                <option value="ZA">South Africa</option>
                <option value="GS">South Georgia and the South Sandwich Islands</option>
                <option value="SS">South Sudan</option>
                <option value="ES">Spain</option>
                <option value="LK">Sri Lanka</option>
                <option value="SD">Sudan</option>
                <option value="SR">Suriname</option>
                <option value="SJ">Svalbard and Jan Mayen</option>
                <option value="SZ">Swaziland</option>
                <option value="SE">Sweden</option>
                <option value="CH">Switzerland</option>
                <option value="SY">Syrian Arab Republic</option>
                <option value="TW">Taiwan, Province of China</option>
                <option value="TJ">Tajikistan</option>
                <option value="TZ">Tanzania, United Republic of</option>
                <option value="TH">Thailand</option>
                <option value="TL">Timor-Leste</option>
                <option value="TG">Togo</option>
                <option value="TK">Tokelau</option>
                <option value="TO">Tonga</option>
                <option value="TT">Trinidad and Tobago</option>
                <option value="TN">Tunisia</option>
                <option value="TR">Turkey</option>
                <option value="TM">Turkmenistan</option>
                <option value="TC">Turks and Caicos Islands</option>
                <option value="TV">Tuvalu</option>
                <option value="UG">Uganda</option>
                <option value="UA">Ukraine</option>
                <option value="AE">United Arab Emirates</option>
                <option value="GB">United Kingdom</option>
                <option value="US">United States</option>
                <option value="UM">United States Minor Outlying Islands</option>
                <option value="UY">Uruguay</option>
                <option value="UZ">Uzbekistan</option>
                <option value="VU">Vanuatu</option>
                <option value="VE">Venezuela</option>
                <option value="VN">Viet Nam</option>
                <option value="VG">Virgin Islands, British</option>
                <option value="VI">Virgin Islands, U.s.</option>
                <option value="WF">Wallis and Futuna</option>
                <option value="EH">Western Sahara</option>
                <option value="YE">Yemen</option>
                <option value="ZM">Zambia</option>
                <option value="ZW">Zimbabwe</option>
            </select>

            <doc>
                <h1>Am I eligible to invest in Davidstar private placement offerings?</h1>
                <h2>Are you an Accredited Investor?</h2>
                <p>Davidstar private placements are only available to Accredited Investors as defined in Rule 501(a) of Regulation D under the Securities Act of 1933, as amended. Most individuals are not Accredited Investors. An individual must earn more than $200,000 a year (or $300,000 per year with a spouse or spousal equivalent), have a net worth over $1 million either alone or together with a spouse or spousal equivalent, excluding their primary residence, or hold in good standing their Series 7, Series 65, or Series 82 professional certifications. Entities must have $5 million in liquid assets or all beneficial owners must be Accredited Investors.</p>
            </doc>

            <select name="role">
                <option>Please select</option>
                <option value="Individual">Individual - I am NOT an Accredited Investor</option>
                <option value="vipIndividual">Individual – I am an Accredited Investor</option>
                <option value="Institutional">Institutional – I am an Accredited Institutional</option>
                <option value="Financial_Advisor">Financial Advisor</option>
            </select>

            <doc>
                <h2>What is the size of the investment that you are currently considering?</h2>
                <p>Investments can be made through cash and in-kind (contributing digital assets you already own) subscriptions. Please estimate in USD your investment size (and note that you will finalize the amount later in the process).</p>
            </doc>

            <select name="investment">
                <option>Please select</option>
                <option value="pkg-a">Under $25,000</option>
                <option value="pkg-b">$25,001 - $100,000</option>
                <option value="pkg-c">$100,000 - $1 million</option>
                <option value="pkg-d">$1 million - $5 million</option>
                <option value="pkg-e">$1 million - $5 million</option>
                <option value="pkg-f">$5 million - $15 million</option>
                <option value="pkg-g">$15 million+</option>
            </select>

            <span>
                <input type="checkbox" name="agreement">
                <label for="agreement">I would like to sign up to recieve news and updates about new and current products from Davidstars Investments</label>
            </span>

            <button type="submit" name="submit">Submit</button>
        </form>
    </portal>

    <footer>
        <div class="in-footer">
            <h2>Important Information</h2>

            <p>
                Carefully consider each Product’s investment objectives, risk factors, fees and expenses before investing. This and other information can be found in each Product’s private placement memorandum, which may be obtained from davidstar and, for each Product registered with the SEC and/or listed on the OTC Markets, such Product’s annual report or information statement, which may be obtained by visiting the website for Davidstar Bitcoin Trust Fund (Symbol: BTF) and Davidstar Ethereum Private Trust Fund  (Symbol: EPTF) ) and Davidstar Bitcoin Cash Private Trust Fund  (Symbol: BCPTF) Reports on OTC Markets are not prepared in accordance with SEC requirements and may not contain all information that is useful for an informed investment decision. Read these documents carefully before investing.
            </p>
    
            <p>
                Investments in the Products are speculative investments that involve high degrees of risk, including a partial or total loss of invested funds. Davidstar Products are not suitable for any investor that cannot afford loss of the entire investment. The shares of each Product are intended to reflect the price of the digital asset(s) held by such Product (based on digital asset(s) per share), less such Product’s expenses and other liabilities. Because each Product does not currently operate a redemption program, there can be no assurance that the value of such Product’s shares will reflect the value of the assets held by such Product, less such Product’s expenses and other liabilities, and the shares of such Product, if traded on any secondary market, may trade at a substantial premium over, or a substantial discount to, the value of the assets held by such Product, less such Product’s expenses and other liabilities, and such Product may be unable to meet its investment objective. This information should not be relied upon as research, investment advice, or a recommendation regarding any products, strategies, or any security in particular. This material is strictly for illustrative, educational, or informational purposes and is subject to change.
            </p>
    
            <p>
                The shares of each Product are not registered under the Securities Act of 1933 (the “Securities Act”), the Securities Exchange Act of, the Investment Company Act of 1940, or any state securities laws. The Products are offered in private placements pursuant to the exemption from registration provided by Rule 506(c) under Regulation D of the Securities Act and are only available to accredited investors. As a result, the shares of each Product are restricted and subject to significant limitations on resales and transfers. Potential investors in any Product should carefully consider the long-term nature of an investment in that Product prior to making an investment decision. The shares of certain Products are also publicly quoted on OTC Markets and shares that have become unrestricted in accordance with the rules and regulations of the SEC may be bought and sold throughout the day through any brokerage account.
            </p>

            <p>            
                © 2021 Davidstar holding. All rights reserved. 
            </p>
        </div>
    </footer>
</body>
</html>