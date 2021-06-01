<?php
$check1 = false;
$check2 = true;
$check3 = false;
$check4 = true;
$agreement1 = "";
$agreement2 = "";
$agreement3 = "";
$agreement4 = "";

$td_agree = '<td class="left-space"></td>
              <td class="check-box"><img src="img/tick1.jpg" width="30" height="30"></td>
              <td class="td-space20"></td>
              <td>Agree</td>
              <td class="td-space50"></td>
              <td class="check-box"></td>
              <td class="td-space20"></td>
              <td>Do not agree</td>';
$td_disagree = '<td class="left-space"></td>
              <td class="check-box"></td>
              <td class="td-space20"></td>
              <td>Agree</td>
              <td class="td-space50"></td>
              <td class="check-box"><img src="img/tick1.jpg" width="30" height="30"></td>
              <td class="td-space20"></td>
              <td>Do not agree</td>';

$agreement1 = $check1 ? $td_agree : $td_disagree;
$agreement2 = $check2 ? $td_agree : $td_disagree;
$agreement3 = $check3 ? $td_agree : $td_disagree;
$agreement4 = $check4 ? $td_agree : $td_disagree;

// $signatureFileName = "60b5ce130a194.jpg";
$html =
  '
<style>
    body{
        font-size:10px;
    }
    .d-flex {
    text-align:right;
    
    }
    h2{
        font-size:14px;
  
    }
    
    span.h4{
        font-size:12px;
        font-weight:bold;
    }

    p{
        font-size:10px;
        text-align: justify;
    }

    .declare{
        font-size:12px;
        font-weight:bold;
        
        height:10px;
    }
    
    .copyright{
      font-size:9px;
    }
    .disc-table {
        border-collapse: collapse;
        border: 1px solid grey;
        table-layout: auto;
        width: 100%;
        text-align: center;
        font-size:10px;
    }

    .disc-table td {
        border: 1px solid grey;
    }

    h6 {
        border-bottom: 1px solid grey;
        line-height:1px;
    }

    ul {
        font-size:11px;
        
      
    }
    ul li{
        list-style-type: square;
        
    }

    .ta{
        text-align:right;
    }

    .agree{
      font-size:12px;
    }
    td.check-box{
        border: 1px solid grey;
        width:15px;
       
        
        
    }
    td.td-space50{
        width: 30px;
    }
    td.td-space20{
        width: 6px;
    }
    td.left-space{
        width: 60%;
    }
    

</style>

<h2>Privacy Agreement</h2>

    Park Hyatt Seoul takes full accountability for guest information security
    and manages guest privacy information according to the corporation’s
    global policy (www.privacy.hyatt.com) and domestic privacy policy.
    <br />
    <br />
    <span class="h4">1. General Personal Information</span><br/>
    
        To deliver appropriate accommodation services and any other guest
        services, Park Hyatt Seoul requires prior consent from guests for the
        collection of any personal information that may be collected and used as
        detailed below;
    
      <ul>
        <li>
          Use of collected data: identification of guest, provision of return
          visit services, emergency contacts, membership enrolment, membership
          administration.
        </li>
        <li>
          List of collected data: Mandatory: name, passport number or
          registration number, email, nationality / Optional: company name, job
          title, date of birth, membership number.
        </li>
        <li>
          You may be required to present a membership card to receive a discount
          for a particular membership promotion or confirm affiliation with an
          organization entitled to special benefits.
        </li>
        <li>
          Information retention / Information use period; registration card
          information will be deleted ten year after check-out, however, Park
          Hyatt Seoul may keep the information a maximum of ten years in
          accordance with commercial law and company rules and regulations.
        </li>
        <li>
          Rights of Refusal and Disadvantages of Non-Participation: guests who
          want to stay at Park Hyatt Seoul have the right to refuse to agree to
          the collection and use of personal information, however, should you
          not agree to provide such information, certain services provided by
          Park Hyatt Seoul may not be available to you.
        </li>
      </ul>
    
    <span class="declare">
    I fully understand and agree to the above rules and regulations
    regarding the collection and use of personal information
    </span><br /><br />
    <table class="agree">
          <tr>' .
  $agreement1 .
  '</tr>
    </table> 
    <span class="h4">2. Personal Identification Number</span>
   
    <ul>
        <li>Use of collected data: identification, membership enrolment,
        membership administration.</li>
        <li>List of collected data: registration number
        / passport number.</li>
        <li>Information retention / Information use period:
        registration card information will be deleted ten year after check-out,
        however, Park Hyatt Seoul may keep the information a maximum of ten
        years in accordance with commercial law and company rules and
        regulations.</li>
        <li>Rights of Refusal and Disadvantage of Non-Participation:
        guests who want to stay at Park Hyatt Seoul have the right to refuse to
        agree to the collection and use of personal information, however, should
        you not agree to provide such information, certain services provided by
        Park Hyatt Seoul may not be available to you.</li>
        
    </ul>
    <span class="declare">
    I fully understand and agree to the above rules and regulations
    regarding the collection and use of personal identification information
    </span><br />
    <table class="agree">
          <tr>' .
  $agreement2 .
  '</tr>
    </table> 
    <span class="h4">3. Disclosure of personal information to overseas third parties</span>
    <br />       
    To deliver appropriate and seamless services to guests, Park Hyatt Seoul
    may disclose certain personal information to overseas third parties as
    detailed below;
    <br />
    <br />
    <span class="declare">
    I fully understand and agree to the above rules and regulations
    regarding the collection and use of personal information to overseas thrid parties
    </span><br/>
    <table class="agree">
          <tr>' .
  $agreement3 .
  '</tr>
    </table> 
    <br/><br/>
    
       <table class="disc-table">
        <tr>
          <td width="10%">Third party</td>
          <td width="15%">Purpose of use</td>
          <td width="50%">List of provided information</td>
          <td width="25%">Personal information retention period</td>
        </tr>
        <tr>
          <td>Medallia</td>
          <td>Customer satisfaction measurement</td>
          <td>
            Name, contact, email, postal address, nationality, date of stay,
            stay charges, all personal information collected (e.g. membership
            number)
          </td>
          <td>Until the end of contract</td>
        </tr>
      </table>
      
    <h6></h6>
    
    <span class="h4">Notice of Copyright Law Application on the Premises</span>
    <br />
    <span class="copyright">Please be informed that guestrooms should be used only for accommodation purposes. If the room is used for commercial purposes by an individual or a group without the hotel’s prior consent, such conduct may be considered as an infringement of the architectural copyright. All photo shootings and video recordings for commercial purposes require prior consent, and are subject to a fee as determined by the hotel. Please note that all spaces including guest rooms in the Park Hyatt Seoul building are architectural property and are protected by Article 4 Clause 1 (5) under the copyright law. According to the copyright law Article 123 Clause 1, the hotel has the right to request a suspension of such conduct, claim damages for copyright infringement under Article 125 of the same law, and/or file a criminal complaint.</span>
    <br />
    <br />

    <span class="declare">
    I fully understand and agree to the above rules and regulations
    regarding copyright law application on the premises
    </span><br/><br/>
    <table class="agree">
          <tr>' .
  $agreement4 .
  '</tr>
    </table> 
  <table >
   <tr>
      <td style="text-align:right;vertical-align:bottom; width:60%;"><br><br><br><br>Signature</td><td style="text-align:left;"><img src="signatures/' .
  $signatureFileName .
  '" width="190" height="68"></td>    
   </tr>
  </table>        
    

';

?>
