<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Image Retrieval</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset("public/css/bootstrap.min.css")}}" />
    <script src="{{asset("public/js/jquery-3.1.1.min.js")}}"></script>
    <script src="{{asset("public/js/caman.full.min.js")}}"></script>
    <script src="{{asset("public/js/popper.min.js")}}"></script>
    <script src="{{asset("public/js/bootstrap.min.js")}}"></script>
    <script src="{{asset("public/js/math.min.js")}}"></script>
</head>
<body>
	<div class="container">
        <div class="jumbotron">
            <h1 class="display-3">Image Retrieval</h1>
        </div>
        <!-- <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pilih File</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"></div>
                </div><br> -->
        <div class="card">
            <div class="card-body text-capitalize">
                <!-- <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div><br> -->
                <div class="card-deck">
                    <div class="card">
                        <img id="img0" src="{{asset("public/img/id.gif")}}" alt="Gambar" class="card-img-top">
                        <!-- <div class="card-body">
                            <label for="file0" class="btn btn-primary btn-disabled">Open File</label>
                            <input type="file" onchange="getImage(0)" id="file0" style="position: fixed; top: -100em">
                        </div> -->
                    </div>
                    <div class="card">
                        <img id="img1" src="{{asset("public/img/au.GIF")}}" alt="Gambar" class="card-img-top">
                        <!-- <div class="card-body">
                            <label for="file1" class="btn btn-primary btn-disabled">Open File</label>
                            <input type="file" onchange="getImage(1)" id="file1" style="position: fixed; top: -100em">
                        </div> -->
                    </div>
                    <div class="card">
                        <img id="img2" src="{{asset("public/img/us.GIF")}}" alt="Gambar" class="card-img-top">
                        <!-- <div class="card-body">
                            <label for="file2" class="btn btn-primary btn-disabled">Open File</label>
                            <input type="file" onchange="getImage(2)" id="file2" style="position: fixed; top: -100em">
                        </div> -->
                    </div>
                    <div class="card">
                        <img id="img3" src="{{asset("public/img/my.GIF")}}" alt="Gambar" class="card-img-top">
                        <!-- <div class="card-body">
                            <label for="file3" class="btn btn-primary btn-disabled">Open File</label>
                            <input type="file" onchange="getImage(3)" id="file3" style="position: fixed; top: -100em">
                        </div> -->
                    </div>
                    <div class="card">
                        <img id="img4" src="{{asset("public/img/tv.GIF")}}" alt="Gambar" class="card-img-top">
                        <!-- <div class="card-body">
                            <label for="file4" class="btn btn-primary btn-disabled">Open File</label>
                            <input type="file" onchange="getImage(4)" id="file4" style="position: fixed; top: -100em">
                        </div> -->
                    </div>
                    <div class="card">
                        <img id="img5" src="{{asset("public/img/ga.GIF")}}" alt="Gambar" class="card-img-top">
                        <!-- <div class="card-body">
                            <label for="file5" class="btn btn-primary btn-disabled">Open File</label>
                            <input type="file" onchange="getImage(5)" id="file5" style="position: fixed; top: -100em">
                        </div> -->
                    </div>
                </div>
                <br>
                <button class="btn btn-primary" id="process" onclick="process(102)">Test</button>
                <!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Result</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							</div>
							<div class="modal-body">
									<div class="card">
										<img id="img0" src="{{asset("public/img/id.gif")}}" alt="Gambar" class="card-img-bottom">
										<div class="card-body">
											<p class="text-center">Indonesia</p>
										</div>
									</div>
									<div class="card">
										<img id="img1" src="{{asset("public/img/au.GIF")}}" alt="Gambar" class="card-img-top">
										<!-- <div class="card-body">
											<label for="file1" class="btn btn-primary btn-disabled">Open File</label>
											<input type="file" onchange="getImage(1)" id="file1" style="position: fixed; top: -100em">
										</div> -->
									</div>
									<div class="card">
										<img id="img2" src="{{asset("public/img/us.GIF")}}" alt="Gambar" class="card-img-top">
										<!-- <div class="card-body">
											<label for="file2" class="btn btn-primary btn-disabled">Open File</label>
											<input type="file" onchange="getImage(2)" id="file2" style="position: fixed; top: -100em">
										</div> -->
									</div>
									<div class="card">
										<img id="img3" src="{{asset("public/img/my.GIF")}}" alt="Gambar" class="card-img-top">
										<!-- <div class="card-body">
											<label for="file3" class="btn btn-primary btn-disabled">Open File</label>
											<input type="file" onchange="getImage(3)" id="file3" style="position: fixed; top: -100em">
										</div> -->
									</div>
									<div class="card">
										<img id="img4" src="{{asset("public/img/tv.GIF")}}" alt="Gambar" class="card-img-top">
										<!-- <div class="card-body">
											<label for="file4" class="btn btn-primary btn-disabled">Open File</label>
											<input type="file" onchange="getImage(4)" id="file4" style="position: fixed; top: -100em">
										</div> -->
									</div>
									<div class="card">
										<img id="img5" src="{{asset("public/img/ga.GIF")}}" alt="Gambar" class="card-img-top">
										<!-- <div class="card-body">
											<label for="file5" class="btn btn-primary btn-disabled">Open File</label>
											<input type="file" onchange="getImage(5)" id="file5" style="position: fixed; top: -100em">
										</div> -->
									</div>
							</div>
							<div class="modal-footer">
							<button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>
</body>
<script>
	function process(id) {
		$.ajax({
        type:'GET',
        url:'api/retrieve',
		data:'id='+id,
		beforeSend: function() {
			$('#exampleModal').modal('toggle');
		},
        error: function(jqXHR, textStatus, errorThrown) {
        	alert(textStatus + ': ' + errorThrown);
        },
        success: function(result) {
			console.log(result);
			$(".modal-body").html("");
			result.data.forEach(element => {
				let countryName = getCountryName(element.name.split(".")[0].toUpperCase());
				console.log(element.name);
				$(".modal-body").append('<div class="card"><img id="img0" src="{{asset("public/img/")}}/'+ element.name +'" alt="Gambar" class="card-img-bottom"><div class="card-body"><p class="text-center">'+ countryName +'</p></div></div>');			
			});
        }
	});	
	}
	var isoCountries = {
    'AF' : 'Afghanistan',
    'AX' : 'Aland Islands',
    'AL' : 'Albania',
    'DZ' : 'Algeria',
    'AS' : 'American Samoa',
    'AD' : 'Andorra',
    'AO' : 'Angola',
    'AI' : 'Anguilla',
    'AQ' : 'Antarctica',
    'AG' : 'Antigua And Barbuda',
    'AR' : 'Argentina',
    'AM' : 'Armenia',
    'AW' : 'Aruba',
    'AU' : 'Australia',
    'AT' : 'Austria',
    'AZ' : 'Azerbaijan',
    'BS' : 'Bahamas',
    'BH' : 'Bahrain',
    'BD' : 'Bangladesh',
    'BB' : 'Barbados',
    'BY' : 'Belarus',
    'BE' : 'Belgium',
    'BZ' : 'Belize',
    'BJ' : 'Benin',
    'BM' : 'Bermuda',
    'BT' : 'Bhutan',
    'BO' : 'Bolivia',
    'BA' : 'Bosnia And Herzegovina',
    'BW' : 'Botswana',
    'BV' : 'Bouvet Island',
    'BR' : 'Brazil',
    'IO' : 'British Indian Ocean Territory',
    'BN' : 'Brunei Darussalam',
    'BG' : 'Bulgaria',
    'BF' : 'Burkina Faso',
    'BI' : 'Burundi',
    'KH' : 'Cambodia',
    'CM' : 'Cameroon',
    'CA' : 'Canada',
    'CV' : 'Cape Verde',
    'KY' : 'Cayman Islands',
    'CF' : 'Central African Republic',
    'TD' : 'Chad',
    'CL' : 'Chile',
    'CN' : 'China',
    'CX' : 'Christmas Island',
    'CC' : 'Cocos (Keeling) Islands',
    'CO' : 'Colombia',
    'KM' : 'Comoros',
    'CG' : 'Congo',
    'CD' : 'Congo, Democratic Republic',
    'CK' : 'Cook Islands',
    'CR' : 'Costa Rica',
    'CI' : 'Cote D\'Ivoire',
    'HR' : 'Croatia',
    'CU' : 'Cuba',
    'CY' : 'Cyprus',
    'CZ' : 'Czech Republic',
    'DK' : 'Denmark',
    'DJ' : 'Djibouti',
    'DM' : 'Dominica',
    'DO' : 'Dominican Republic',
    'EC' : 'Ecuador',
    'EG' : 'Egypt',
    'SV' : 'El Salvador',
    'GQ' : 'Equatorial Guinea',
    'ER' : 'Eritrea',
    'EE' : 'Estonia',
    'ET' : 'Ethiopia',
    'FK' : 'Falkland Islands (Malvinas)',
    'FO' : 'Faroe Islands',
    'FJ' : 'Fiji',
    'FI' : 'Finland',
    'FR' : 'France',
    'GF' : 'French Guiana',
    'PF' : 'French Polynesia',
    'TF' : 'French Southern Territories',
    'GA' : 'Gabon',
    'GM' : 'Gambia',
    'GE' : 'Georgia',
    'DE' : 'Germany',
	'GH' : 'Ghana',
	'GI' : 'Gibraltar',
	'GK' : 'Guernsey',
    'GR' : 'Greece',
    'GL' : 'Greenland',
    'GD' : 'Grenada',
    'GP' : 'Guadeloupe',
    'GU' : 'Guam',
    'GT' : 'Guatemala',
    'GG' : 'Guernsey',
    'GN' : 'Guinea',
    'GW' : 'Guinea-Bissau',
    'GY' : 'Guyana',
    'HT' : 'Haiti',
    'HM' : 'Heard Island & Mcdonald Islands',
    'VA' : 'Holy See (Vatican City State)',
    'HN' : 'Honduras',
    'HK' : 'Hong Kong',
    'HU' : 'Hungary',
    'IS' : 'Iceland',
    'IN' : 'India',
    'ID' : 'Indonesia',
    'IR' : 'Iran, Islamic Republic Of',
    'IQ' : 'Iraq',
    'IE' : 'Ireland',
    'IM' : 'Isle Of Man',
    'IL' : 'Israel',
    'IT' : 'Italy',
    'JM' : 'Jamaica',
    'JP' : 'Japan',
    'JE' : 'Jersey',
    'JO' : 'Jordan',
    'KZ' : 'Kazakhstan',
    'KE' : 'Kenya',
    'KI' : 'Kiribati',
    'KR' : 'Korea',
    'KW' : 'Kuwait',
    'KG' : 'Kyrgyzstan',
    'LA' : 'Lao People\'s Democratic Republic',
    'LV' : 'Latvia',
    'LB' : 'Lebanon',
    'LS' : 'Lesotho',
    'LR' : 'Liberia',
    'LY' : 'Libyan Arab Jamahiriya',
    'LI' : 'Liechtenstein',
    'LT' : 'Lithuania',
    'LU' : 'Luxembourg',
    'MO' : 'Macao',
    'MK' : 'Macedonia',
    'MG' : 'Madagascar',
    'MW' : 'Malawi',
    'MY' : 'Malaysia',
    'MV' : 'Maldives',
    'ML' : 'Mali',
    'MT' : 'Malta',
    'MH' : 'Marshall Islands',
    'MQ' : 'Martinique',
    'MR' : 'Mauritania',
    'MU' : 'Mauritius',
    'YT' : 'Mayotte',
    'MX' : 'Mexico',
    'FM' : 'Micronesia, Federated States Of',
    'MD' : 'Moldova',
    'MC' : 'Monaco',
    'MN' : 'Mongolia',
    'ME' : 'Montenegro',
    'MS' : 'Montserrat',
    'MA' : 'Morocco',
    'MZ' : 'Mozambique',
    'MM' : 'Myanmar',
    'NA' : 'Namibia',
    'NR' : 'Nauru',
    'NP' : 'Nepal',
    'NL' : 'Netherlands',
    'AN' : 'Netherlands Antilles',
    'NC' : 'New Caledonia',
    'NZ' : 'New Zealand',
    'NI' : 'Nicaragua',
    'NE' : 'Niger',
    'NG' : 'Nigeria',
    'NU' : 'Niue',
    'NF' : 'Norfolk Island',
    'MP' : 'Northern Mariana Islands',
    'NO' : 'Norway',
    'OM' : 'Oman',
    'PK' : 'Pakistan',
    'PW' : 'Palau',
    'PS' : 'Palestinian Territory, Occupied',
    'PA' : 'Panama',
    'PG' : 'Papua New Guinea',
    'PY' : 'Paraguay',
    'PE' : 'Peru',
    'PH' : 'Philippines',
    'PN' : 'Pitcairn',
    'PL' : 'Poland',
    'PT' : 'Portugal',
    'PR' : 'Puerto Rico',
    'QA' : 'Qatar',
    'RE' : 'Reunion',
    'RO' : 'Romania',
    'RU' : 'Russian Federation',
    'RW' : 'Rwanda',
    'BL' : 'Saint Barthelemy',
    'SH' : 'Saint Helena',
    'KN' : 'Saint Kitts And Nevis',
    'LC' : 'Saint Lucia',
    'MF' : 'Saint Martin',
    'PM' : 'Saint Pierre And Miquelon',
    'VC' : 'Saint Vincent And Grenadines',
    'WS' : 'Samoa',
    'SM' : 'San Marino',
    'ST' : 'Sao Tome And Principe',
    'SA' : 'Saudi Arabia',
    'SN' : 'Senegal',
    'RS' : 'Serbia',
    'SC' : 'Seychelles',
    'SL' : 'Sierra Leone',
    'SG' : 'Singapore',
    'SK' : 'Slovakia',
    'SI' : 'Slovenia',
    'SB' : 'Solomon Islands',
    'SO' : 'Somalia',
    'ZA' : 'South Africa',
    'GS' : 'South Georgia And Sandwich Isl.',
    'ES' : 'Spain',
    'LK' : 'Sri Lanka',
    'SD' : 'Sudan',
    'SR' : 'Suriname',
    'SJ' : 'Svalbard And Jan Mayen',
    'SZ' : 'Swaziland',
    'SE' : 'Sweden',
    'CH' : 'Switzerland',
    'SY' : 'Syrian Arab Republic',
    'TW' : 'Taiwan',
    'TJ' : 'Tajikistan',
    'TZ' : 'Tanzania',
    'TH' : 'Thailand',
    'TL' : 'Timor-Leste',
    'TG' : 'Togo',
    'TK' : 'Tokelau',
    'TO' : 'Tonga',
    'TT' : 'Trinidad And Tobago',
    'TN' : 'Tunisia',
    'TR' : 'Turkey',
    'TM' : 'Turkmenistan',
    'TC' : 'Turks And Caicos Islands',
    'TV' : 'Tuvalu',
    'UG' : 'Uganda',
    'UA' : 'Ukraine',
    'AE' : 'United Arab Emirates',
    'GB' : 'United Kingdom',
    'US' : 'United States',
    'UM' : 'United States Outlying Islands',
    'UY' : 'Uruguay',
    'UZ' : 'Uzbekistan',
    'VU' : 'Vanuatu',
    'VE' : 'Venezuela',
    'VN' : 'Viet Nam',
    'VG' : 'Virgin Islands, British',
    'VI' : 'Virgin Islands, U.S.',
    'WF' : 'Wallis And Futuna',
    'EH' : 'Western Sahara',
    'YE' : 'Yemen',
    'ZM' : 'Zambia',
    'ZW' : 'Zimbabwe'
};

function getCountryName (countryCode) {
    if (isoCountries.hasOwnProperty(countryCode)) {
        return isoCountries[countryCode];
    } else {
        return countryCode;
    }
}
</script>
</html>