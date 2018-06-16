<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" language="javascript" src="jquery.num2words.js"></script>
<script type="text/javascript">
$(document).ready(function() {
   $('#num').focus();
   $('#demo').num2words();
}); 
</script>
<style>
.full-width{width:99%; height:99%}
.center{ text-align:center
}
</style>
<table width="700px" border="1px" style="border-collapse:collapse" cellpadding="4" align="center">
  <tr>
    <td valign="middle" colspan="8"><img style="float:left" width="50px" height="50px" src="logo.jpg" /><b style="padding-top:8px;font-size:29px;padding-left:50px;float: left;">OSS Certification Services Private Limited</b></td>
  </tr>
  <tr>
    <td style=" padding-bottom:20px" colspan="8"><b>Registered Office: </b><br />
      Plot No 4, 3rd Floor, Block 1 A, Sector - 23, State Bank of India Building Dwarka, New Delhi - 110075
      Phone # + 91-11-28054243, Toll Free No.  # 1800-123-0579, Website-  www.osscertification.com </td>
  </tr>
  <tr style="background-color:#dbe5f1;">
    <td align="center" colspan="8"><b style="font-size:25px">Invoice</b></td>
  </tr>
  <tr>
    <td colspan="3">GSTIN</td>
    <td colspan="5">07AABCO1437B1Z0</td>
  </tr>
  <tr>
    <td colspan="3">PAN No.</td>
    <td colspan="5">AABCO1437B </td>
  </tr>
  <tr>
    <td colspan="3">Invoice No:</td>
    <td style="text-align:center"  colspan="5">OSS/INV/1868 </td>
  </tr>
  <tr>
    <td colspan="3">Invoice Date: </td>
    <td style="text-align:center"  colspan="5">16-02-2018 </td>
  </tr>
  <tr>
    <td colspan="3">Reverse Charge (Y/N): </td>
    <td style="text-align:center"  colspan="5"> No </td>
  </tr>
  <tr>
    <td colspan="2">State </td>
    <td colspan="4">Delhi</td>
    <td style="background-color:#dbe5f1;">Code </td>
    <td style="text-align:center" >07 </td>
  </tr>
  <tr>
    <td colspan="8">&nbsp;</td>
  </tr>
  <tr>
    <td style="background-color:#dbe5f1;" align="center" colspan="8"><b style="font-size:17px;">Detail of Recipient (Billed to)</b></td>
  </tr>
  <tr>
    <td colspan="1">Name: </td>
    <td colspan="7"><input class="full-width" type="text" placeholder="" /></td>
  </tr>
  <tr>
  
    <td height="100" valign="top" colspan="1"><b>Address:</b> </td>
    <td height="100" valign="top" colspan="7"><textarea class="full-width"></textarea></td>
     
  </tr>
  <tr>
    <td>GSTIN: </td>
    <td colspan="7"><input type="text" class="full-width" list="gst" name=""> </td>
  </tr>
  <tr>
    <td>State: </td>
    <td colspan="5">
    <select name="State">
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana </option>
<option value="Himachal Pradesh">Himachal Pradesh </option>
<option value="Jammu & Kashmir">Jammu & Kashmir </option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala </option>
<option value="Madhya Pradesh">Madhya Pradesh </option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur </option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram </option>
<option value="Nagaland">Nagaland </option>
<option value="Odisha">Odisha </option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu </option>
<option value="Telangana">Telangana </option>
<option value="Tripura">Tripura </option>
<option value="Uttarakhand">Uttarakhand </option>
<option value="Uttar Pradesh">Uttar Pradesh </option>
<option value="West Bengal">West Bengal</option>
  </select>
    </td>
    <td colspan="">Code </td>
    <td><input class="full-width" type="text" placeholder="" /></td>
  </tr>
  <tr>
    <td style="background-color:#dbe5f1;" align="center" colspan="6"><b style="font-size:17px;">Description</b></td>
    <td style="background-color:#dbe5f1;"><b>SAC</b></td>
    <td style="background-color:#dbe5f1;"><b>Amount(In Rs.)</b></td>
  </tr>
  <tr>
    <td height="100" colspan="6"><textarea class="full-width"></textarea></td>
    <td height="100" style="text-align:center" >998399 </td>
    <td height="100" style="text-align:center" >
        <div id="demo">
            <input id="num" type="text"  placeholder="Rs" onkeyup="calculatePerc()"><br>
           
        </div>
    </td>
  </tr>
  <tr>
    <td colspan="6">&nbsp;</td>
    <td><b>Total</b></td>
    <td style="text-align:center" ><b>0</b></td>
  </tr>
  <tr>
    <td style="text-align:right"  colspan="7"><b>Other Charges</b></td>
    <td style="text-align:center" >0 </td>
  </tr>
  <tr>
    <td style="text-align:right"  colspan="7">Add: CGST (9%) </td>
    <td style="text-align:center" ><div id="cgst"></div> </td>
  </tr>
  <tr>
    <td style="text-align:right"  colspan="7">Add: SGST/UTGST (9%) </td>
    <td style="text-align:center" ><div id="SGST"></div></td>
  </tr>
  <tr>
    <td style="text-align:right"  colspan="7">Add: IGST (18%) </td>
    <td style="text-align:center" ><div id="IGST"></div> </td>
  </tr>
  <tr>
    <td align="right" style="padding-right:15px;" colspan="7"><b>Total Amount Inclusive of all tax</b> </td>
    <td style="text-align:center" ><b><div id="total_amount"></div></b></td>
  </tr>
  <tr>
    <td colspan="1"><b>Amount (in words):</b></td>
    <td colspan="7"><div id="test"></div></td>
  </tr>
  <tr>
    <td style="background-color:#dbe5f1;text-align:center" colspan="3"><b>Bank Details</b> </td>
    <td  style="text-align:center" colspan="5" rowspan="2"><b>For OSS Certification Services Private Limited</b></td>
  </tr>
  <tr>
    <td style="text-align:center" colspan="3">Bank A/C: 025005003152 </td>
  </tr>
  <tr>
    <td style="text-align:center" colspan="3"><b>Name of the Banker and Branch:</b> <br />
      ICICI Bank Ltd.<br />
      Dwarka, Sector-5, New Delhi - 110075 </td>
    <td colspan="5"><div class="center"><img src="sign.png" /><img height="70px" src="stamp.png" /></div></td>
  </tr>
  <tr>
    <td align="center" style="background-color:#dbe5f1;" colspan="3"><b>Bank IFSC/ RTGS/NEFT-</b> </td>
    <td colspan="7"></td>
  </tr>
  <tr>
    <td style="text-align:center" rowspan="3" colspan="3">ICIC0000250 </td>
    <td style="text-align:center" colspan="5">Manju Singh </td>
  </tr>
  <tr>
    <td style="text-align:center" colspan="5">Authorized Signatory </td>
  </tr>
  <tr>
    <td colspan="5">&nbsp;</td>
  </tr>
</table>

<script>
    function calculatePerc() {
        var amount = $("#num").val();
        var cgst_discount = 9;
        var SGST_discount = 9;
        var IGST_discount = 18;
        var cgst_calcPerc = amount * cgst_discount /100;
        var SGST_calcPerc =  amount * SGST_discount / 100;
        var IGST_calcPerc = amount * IGST_discount / 100;
        $("#cgst").text(cgst_calcPerc);
        $("#SGST").text(SGST_calcPerc);
        $("#IGST").text(IGST_calcPerc);
    }
</script>