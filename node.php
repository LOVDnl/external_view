<?php
/*******************************************************************************
 *
 * LEIDEN OPEN VARIATION DATABASE (LOVD)
 *
 * Created     : 2017-05-11
 * Modified    : 2017-05-17
 * For LOVD    : 3.0-19
 *
 * Copyright   : 2004-2017 Leiden University Medical Center; http://www.LUMC.nl/
 * Programmer  : Ivo F.A.C. Fokkema <I.F.A.C.Fokkema@LUMC.nl>
 *
 *
 * This file is part of LOVD.
 *
 * LOVD is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * LOVD is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with LOVD.  If not, see <http://www.gnu.org/licenses/>.
 *
 *************/

// Countries downloaded 2017-05-10 from https://www.iso.org/obp/ui/#iso:pub:PUB500001:en
$aCountries = array(
    'AF' => 'Afghanistan',
    'AX' => 'Åland Islands',
    'AL' => 'Albania',
    'DZ' => 'Algeria',
    'AS' => 'American Samoa',
    'AD' => 'Andorra',
    'AO' => 'Angola',
    'AI' => 'Anguilla',
    'AQ' => 'Antarctica',
    'AG' => 'Antigua and Barbuda',
    'AR' => 'Argentina',
    'AM' => 'Armenia',
    'AW' => 'Aruba',
    'AU' => 'Australia',
    'AT' => 'Austria',
    'AZ' => 'Azerbaijan',
    'BS' => 'Bahamas',
    'BH' => 'Bahrain',
    'BD' => 'Bangladesh',
    'BB' => 'Barbados',
    'BY' => 'Belarus',
    'BE' => 'Belgium',
    'BZ' => 'Belize',
    'BJ' => 'Benin',
    'BM' => 'Bermuda',
    'BT' => 'Bhutan',
    'BO' => 'Bolivia',
    'BQ' => 'Bonaire, Sint Eustatius and Saba',
    'BA' => 'Bosnia and Herzegovina',
    'BW' => 'Botswana',
    'BV' => 'Bouvet Island',
    'BR' => 'Brazil',
    'IO' => 'British Indian Ocean Territory',
    'BN' => 'Brunei Darussalam',
    'BG' => 'Bulgaria',
    'BF' => 'Burkina Faso',
    'BI' => 'Burundi',
    'CV' => 'Cabo Verde',
    'KH' => 'Cambodia',
    'CM' => 'Cameroon',
    'CA' => 'Canada',
    'KY' => 'Cayman Islands',
    'CF' => 'Central African Republic',
    'TD' => 'Chad',
    'CL' => 'Chile',
    'CN' => 'China',
    'CX' => 'Christmas Island',
    'CC' => 'Cocos (Keeling) Islands',
    'CO' => 'Colombia',
    'KM' => 'Comoros',
    'CD' => 'Congo-Kinshasa',
    'CG' => 'Congo-Brazzaville',
    'CK' => 'Cook Islands',
    'CR' => 'Costa Rica',
    'CI' => 'Côte d\'Ivoire',
    'HR' => 'Croatia',
    'CU' => 'Cuba',
    'CW' => 'Curaçao',
    'CY' => 'Cyprus',
    'CZ' => 'Czechia',
    'DK' => 'Denmark',
    'DJ' => 'Djibouti',
    'DM' => 'Dominica',
    'DO' => 'Dominican Republic',
    'EC' => 'Ecuador',
    'EG' => 'Egypt',
    'SV' => 'El Salvador',
    'GQ' => 'Equatorial Guinea',
    'ER' => 'Eritrea',
    'EE' => 'Estonia',
    'ET' => 'Ethiopia',
    'FK' => 'Falkland Islands',
    'FO' => 'Faroe Islands',
    'FJ' => 'Fiji',
    'FI' => 'Finland',
    'FR' => 'France',
    'GF' => 'French Guiana',
    'PF' => 'French Polynesia',
    'TF' => 'French Southern Territories',
    'GA' => 'Gabon',
    'GM' => 'Gambia',
    'GE' => 'Georgia',
    'DE' => 'Germany',
    'GH' => 'Ghana',
    'GI' => 'Gibraltar',
    'GR' => 'Greece',
    'GL' => 'Greenland',
    'GD' => 'Grenada',
    'GP' => 'Guadeloupe',
    'GU' => 'Guam',
    'GT' => 'Guatemala',
    'GG' => 'Guernsey',
    'GN' => 'Guinea',
    'GW' => 'Guinea-Bissau',
    'GY' => 'Guyana',
    'HT' => 'Haiti',
    'HM' => 'Heard Island and McDonald Islands',
    'VA' => 'Holy See',
    'HN' => 'Honduras',
    'HK' => 'Hong Kong',
    'HU' => 'Hungary',
    'IS' => 'Iceland',
    'IN' => 'India',
    'ID' => 'Indonesia',
    'IR' => 'Iran',
    'IQ' => 'Iraq',
    'IE' => 'Ireland',
    'IM' => 'Isle of Man',
    'IL' => 'Israel',
    'IT' => 'Italy',
    'JM' => 'Jamaica',
    'JP' => 'Japan',
    'JE' => 'Jersey',
    'JO' => 'Jordan',
    'KZ' => 'Kazakhstan',
    'KE' => 'Kenya',
    'KI' => 'Kiribati',
    'KP' => 'Korea (North)',
    'KR' => 'Korea (South)',
    'KW' => 'Kuwait',
    'KG' => 'Kyrgyzstan',
    'LA' => 'Lao People\'s Democratic Republic',
    'LV' => 'Latvia',
    'LB' => 'Lebanon',
    'LS' => 'Lesotho',
    'LR' => 'Liberia',
    'LY' => 'Libya',
    'LI' => 'Liechtenstein',
    'LT' => 'Lithuania',
    'LU' => 'Luxembourg',
    'MO' => 'Macao',
    'MK' => 'Macedonia',
    'MG' => 'Madagascar',
    'MW' => 'Malawi',
    'MY' => 'Malaysia',
    'MV' => 'Maldives',
    'ML' => 'Mali',
    'MT' => 'Malta',
    'MH' => 'Marshall Islands',
    'MQ' => 'Martinique',
    'MR' => 'Mauritania',
    'MU' => 'Mauritius',
    'YT' => 'Mayotte',
    'MX' => 'Mexico',
    'FM' => 'Micronesia',
    'MD' => 'Moldova',
    'MC' => 'Monaco',
    'MN' => 'Mongolia',
    'ME' => 'Montenegro',
    'MS' => 'Montserrat',
    'MA' => 'Morocco',
    'MZ' => 'Mozambique',
    'MM' => 'Myanmar',
    'NA' => 'Namibia',
    'NR' => 'Nauru',
    'NP' => 'Nepal',
    'NL' => 'Netherlands',
    'NC' => 'New Caledonia',
    'NZ' => 'New Zealand',
    'NI' => 'Nicaragua',
    'NE' => 'Niger',
    'NG' => 'Nigeria',
    'NU' => 'Niue',
    'NF' => 'Norfolk Island',
    'MP' => 'Northern Mariana Islands',
    'NO' => 'Norway',
    'OM' => 'Oman',
    'PK' => 'Pakistan',
    'PW' => 'Palau',
    'PS' => 'Palestine',
    'PA' => 'Panama',
    'PG' => 'Papua New Guinea',
    'PY' => 'Paraguay',
    'PE' => 'Peru',
    'PH' => 'Philippines',
    'PN' => 'Pitcairn',
    'PL' => 'Poland',
    'PT' => 'Portugal',
    'PR' => 'Puerto Rico',
    'QA' => 'Qatar',
    'RE' => 'Réunion',
    'RO' => 'Romania',
    'RU' => 'Russian Federation',
    'RW' => 'Rwanda',
    'BL' => 'Saint Barthélemy',
    'SH' => 'Saint Helena, Ascension and Tristan da Cunha',
    'KN' => 'Saint Kitts and Nevis',
    'LC' => 'Saint Lucia',
    'MF' => 'Saint Martin (French part)',
    'PM' => 'Saint Pierre and Miquelon',
    'VC' => 'Saint Vincent and the Grenadines',
    'WS' => 'Samoa',
    'SM' => 'San Marino',
    'ST' => 'Sao Tome and Principe',
    'SA' => 'Saudi Arabia',
    'SN' => 'Senegal',
    'RS' => 'Serbia',
    'SC' => 'Seychelles',
    'SL' => 'Sierra Leone',
    'SG' => 'Singapore',
    'SX' => 'Sint Maarten (Dutch part)',
    'SK' => 'Slovakia',
    'SI' => 'Slovenia',
    'SB' => 'Solomon Islands',
    'SO' => 'Somalia',
    'ZA' => 'South Africa',
    'GS' => 'South Georgia and the South Sandwich Islands',
    'SS' => 'South Sudan',
    'ES' => 'Spain',
    'LK' => 'Sri Lanka',
    'SD' => 'Sudan',
    'SR' => 'Suriname',
    'SJ' => 'Svalbard and Jan Mayen',
    'SZ' => 'Swaziland',
    'SE' => 'Sweden',
    'CH' => 'Switzerland',
    'SY' => 'Syrian Arab Republic',
    'TW' => 'Taiwan',
    'TJ' => 'Tajikistan',
    'TZ' => 'Tanzania',
    'TH' => 'Thailand',
    'TL' => 'Timor-Leste',
    'TG' => 'Togo',
    'TK' => 'Tokelau',
    'TO' => 'Tonga',
    'TT' => 'Trinidad and Tobago',
    'TN' => 'Tunisia',
    'TR' => 'Turkey',
    'TM' => 'Turkmenistan',
    'TC' => 'Turks and Caicos Islands',
    'TV' => 'Tuvalu',
    'UG' => 'Uganda',
    'UA' => 'Ukraine',
    'AE' => 'United Arab Emirates',
    'GB' => 'United Kingdom (Great Britain)',
    'UM' => 'United States Minor Outlying Islands',
    'US' => 'United States of America',
    'UY' => 'Uruguay',
    'UZ' => 'Uzbekistan',
    'VU' => 'Vanuatu',
    'VE' => 'Venezuela',
    'VN' => 'Viet Nam',
    'VG' => 'Virgin Islands (British)',
    'VI' => 'Virgin Islands (U.S.)',
    'WF' => 'Wallis and Futuna',
    'EH' => 'Western Sahara',
    'YE' => 'Yemen',
    'ZM' => 'Zambia',
    'ZW' => 'Zimbabwe',
);

// First, verify the host name to check which country we're trying to view.
$aHostNameParts = explode('.', $_SERVER['HTTP_HOST']);
$sCountryCode = false;
if (count($aHostNameParts) == 3 && strpos($_SERVER['HTTP_HOST'], '.lovd.org')) {
    // country.lovd.org (preferably XX.lovd.org, using the 2-letter country code).
    $sCountryCode = strtoupper($aHostNameParts[0]);
    if (strlen($sCountryCode) != 2) {
        // Not a country code passed, we support this as long as Apache doesn't claim it and as long as we can find it.
        // This obviously doesn't work for countries with spaces and such.
        $sCountryCode = array_search(strtolower($sCountryCode), array_map('strtolower', $aCountries));
    } elseif (!isset($aCountries[$sCountryCode])) {
        // Two letter code given, but was invalid.
        $sCountryCode = false;
    }
}
if (!$sCountryCode) {
    // Never received one, or couldn't map country to code.
    exit;
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<HTML lang="en_US">
<HEAD>
    <TITLE>Variants in LOVD from <?php echo $aCountries[$sCountryCode]; ?></TITLE>
    <META http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <META name="author" content="LOVD development team, LUMC, Netherlands">
    <META name="generator" content="PhpStorm @ GNU/Linux (Ubuntu)">
    <SCRIPT src="//code.jquery.com/jquery-1.10.2.js"></SCRIPT>
    <SCRIPT src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></SCRIPT>
    <LINK rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
</HEAD>

<BODY style="margin : 10px;">

<TABLE border="0" cellpadding="0" cellspacing="0" width="100%" class="logo">
    <TR>
        <TD valign="top" align="center" style="padding-top : 6px;">
            <H1 style="margin-bottom : 3px;"><?php echo $aCountries[$sCountryCode]; ?> DNA Variant Database</H1>
        </TD>
    </TR>
    <TR>
        <TD valign="top" align="center">
            <h5 style="margin-bottom : 1px;">Based on:</h5>
            <IMG src="http://databases.lovd.nl/shared/gfx/LOVD_logo130x50.jpg" alt="LOVD3">
        </TD>
    </TR>
</TABLE>

<?php
// Load the external view app.
require 'inc-init.php';
?>

<DIV id="tabs">
    <UL>
        <LI><A href="#tabs-1">Home</A></LI>
        <LI><A href="#tabs-2">Variants in individuals from <?php echo $aCountries[$sCountryCode]; ?></A></LI>
        <LI><A href="#tabs-3">Variants by submitters from <?php echo $aCountries[$sCountryCode]; ?></A></LI>
    </UL>
    <DIV id="tabs-1">
        <P style="text-align: center;">
            This resource automatically retrieves information from our <A href="https://databases.lovd.nl/shared/" target="_blank">LOVD3 shared installation</A>.
            The information retrieved is based on the geographic information per country (here for <B><?php echo $aCountries[$sCountryCode]; ?></B>).<BR>
            <BR>
            Variants shown are either linked to the country of origin of an <I>individual</I> (patient), or to the country of origin of the <I>submitter</I> of the data.
            Note the difference: data from an <I>individual</I> in Germany can be submitted by a <I>submitter</I> from Belgium.<BR>
            <BR>
            Queries can be submitted by using the search boxes in the column's header.
        </P>
    </DIV>

    <DIV id="tabs-2" style="overflow: auto;">

<?php
$_LOVD->viewFullData(array(
    'viewlistid' => 'CustomVL_VIEW_By_Origin',
    'page_size' => 25,
    'search' => array(
        'Individual/Origin/Geographic' => $aCountries[$sCountryCode],
    ),
    'cols_to_skip' => array(
        'name' => 1,
        'id_protein_ncbi' => 1,
        'VariantOnTranscript/Codon_change' => 1,
        'VariantOnTranscript/Domain' => 1,
        'VariantOnTranscript/IDbase_Accession' => 1,
        'VariantOnTranscript/VariO/DNA' => 1,
        'VariantOnTranscript/VariO/RNA' => 1,
        'VariantOnTranscript/VariO/Protein' => 1,
        'VariantOnTranscript/Exon' => 1,
        'VariantOnTranscript/Haplotype' => 1,
        'VariantOnTranscript/Classification' => 1,
        'VariantOnTranscript/Published_as' => 1,
        'VariantOnTranscript/Protein/Domain' => 1,
        'VariantOnTranscript/Exon_old' => 1,
        'VariantOnTranscript/DNA/Legacy' => 1,
        'VariantOnTranscript/Effect/In_Vitro' => 1,
        'VariantOnTranscript/Protein/Legacy' => 1,
        'VariantOnTranscript/Protein/CodonNr' => 1,
        'VariantOnTranscript/Screen/Method' => 1,
        'VariantOnTranscript/Predict/AGVGD' => 1,
        'VariantOnTranscript/Grantham' => 1,
        'VariantOnTranscript/Predict/MutationTaster' => 1,
        'VariantOnTranscript/PolyPhen' => 1,
        'VariantOnTranscript/PolyPhen/Score' => 1,
        'VariantOnTranscript/SIFT' => 1,
        'VariantOnTranscript/Consequence/Predicted' => 1,
        'VariantOnTranscript/FunctionalAnalysis' => 1,
        'VariantOnTranscript/FunctionalAnalysis/Technique' => 1,
        'VariantOnTranscript/Variant/Type' => 1,
        'VariantOnTranscript/Conservation' => 1,
        'VariantOnTranscript/CpG' => 1,
        'VariantOnTranscript/Db_CrossRef' => 1,
        'VariantOnTranscript/Enzyme/Kinase_activity' => 1,
        'VariantOnTranscript/FunctionalPrediction' => 1,
        'VariantOnTranscript/mRNA_level' => 1,
        'VariantOnTranscript/Predict/Splice' => 1,
        'VariantOnTranscript/Protein/Stain' => 1,
        'VariantOnTranscript/Protein_level' => 1,
        'VariantOnGenome/Published_as' => 1,
        'VariantOnGenome/ISCN' => 1,
        'VariantOnGenome/Segregation' => 1,
        'VariantOnGenome/Restriction_site' => 1,
        'VariantOnGenome/Methylation' => 1,
        'Individual/Data_av' => 1,
        'Individual/Treatment' => 1,
        'Individual/' => 1,
    ),
));
?>

    </DIV>

    <DIV id="tabs-3" style="overflow: auto;">

<?php
$_LOVD->viewFullData(array(
    'viewlistid' => 'CustomVL_VIEW_By_Owner',
    'page_size' => 25,
    'search' => array(
        'owner_countryid' => '="' . $sCountryCode . '"',
    ),
    'cols_to_skip' => array(
        'name' => 1,
        'id_protein_ncbi' => 1,
        'VariantOnTranscript/Codon_change' => 1,
        'VariantOnTranscript/Domain' => 1,
        'VariantOnTranscript/IDbase_Accession' => 1,
        'VariantOnTranscript/VariO/DNA' => 1,
        'VariantOnTranscript/VariO/RNA' => 1,
        'VariantOnTranscript/VariO/Protein' => 1,
        'VariantOnTranscript/Exon' => 1,
        'VariantOnTranscript/Haplotype' => 1,
        'VariantOnTranscript/Classification' => 1,
        'VariantOnTranscript/Published_as' => 1,
        'VariantOnTranscript/Protein/Domain' => 1,
        'VariantOnTranscript/Exon_old' => 1,
        'VariantOnTranscript/DNA/Legacy' => 1,
        'VariantOnTranscript/Effect/In_Vitro' => 1,
        'VariantOnTranscript/Protein/Legacy' => 1,
        'VariantOnTranscript/Protein/CodonNr' => 1,
        'VariantOnTranscript/Screen/Method' => 1,
        'VariantOnTranscript/Predict/AGVGD' => 1,
        'VariantOnTranscript/Grantham' => 1,
        'VariantOnTranscript/Predict/MutationTaster' => 1,
        'VariantOnTranscript/PolyPhen' => 1,
        'VariantOnTranscript/PolyPhen/Score' => 1,
        'VariantOnTranscript/SIFT' => 1,
        'VariantOnTranscript/Consequence/Predicted' => 1,
        'VariantOnTranscript/FunctionalAnalysis' => 1,
        'VariantOnTranscript/FunctionalAnalysis/Technique' => 1,
        'VariantOnTranscript/Variant/Type' => 1,
        'VariantOnTranscript/Conservation' => 1,
        'VariantOnTranscript/CpG' => 1,
        'VariantOnTranscript/Db_CrossRef' => 1,
        'VariantOnTranscript/Enzyme/Kinase_activity' => 1,
        'VariantOnTranscript/FunctionalPrediction' => 1,
        'VariantOnTranscript/mRNA_level' => 1,
        'VariantOnTranscript/Predict/Splice' => 1,
        'VariantOnTranscript/Protein/Stain' => 1,
        'VariantOnTranscript/Protein_level' => 1,
        'VariantOnGenome/Published_as' => 1,
        'VariantOnGenome/ISCN' => 1,
        'VariantOnGenome/Segregation' => 1,
        'VariantOnGenome/Restriction_site' => 1,
        'VariantOnGenome/Methylation' => 1,
        'Individual/Data_av' => 1,
        'Individual/Treatment' => 1,
        'Individual/' => 1,
    ),
));
?>

    </DIV>
</DIV>

<SCRIPT type="text/javascript">
    $(function() {
        $('#tabs').tabs();
    });
</SCRIPT>

</BODY>
</HTML>
