<?php error_reporting(1);  ?> 
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/payrollform/f941/assets/formviewer.css'); ?>">


<div class="content-wrapper">
  <section class="content-header">
     <style type="text/css">
.btn{border:0 none; height:30px; padding:0; width:30px; background-color:transparent; display:inline-block; margin:7px 5px 0; vertical-align:top; cursor:pointer; color:#fff;}
.btn:hover{background-color:#0e1319; color:#eddbd9; border-radius:5px;}
.page{box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.3);}
#formviewer{bottom:0; left:0; right:0; position:absolute; top:40px; background:#191f2f none repeat scroll 0 0;}
body{padding:0px; margin:0px; background-color:#191f2f;}
#FDFXFA_Menu{text-align:center; width:100%; z-index:9999; color:white;background-color:#707784; position:fixed; font-size:32px; margin:0px; opacity:0.8; top:0px; min-width:300px; min-height: 40px;}
#FDFXFA_Menu a{cursor:pointer; border-radius:5px; padding:5px; font-family: IDRSymbols; margin:5px 10px 5px 10px;}
#FDFXFA_PageLabel{padding-left:5px;font-size:20px}
#FDFXFA_PageCount{padding-right:5px;font-size:20px}
#FDFXFA_Menu a:hover{background-color:#0e1319; color:#eddbd9;}
#FDFXFA_PageLabel{min-width:20px;display:inline-block;}
#FDFXFA_Processing{width:100%; height:100%; z-index:10000; position:fixed; background-color:black; opacity:0.8; color:white; top:0px;text-align: center; font-size:300px; font-family:IDRSymbols;}
#FDFXFA_Processing span{top:50%;left:50%;margin:-50px 0 0 -50px}
#FDFXFA_FormType,#FDFXFA_Form,#FDFXFA_PDFName,#FDFXFA_FormSubmitURL{display:none;}
@font-face {font-family:'IDRSymbols'; src: url(data:application/x-font-woff;charset=utf-8;base64,d09GRk9UVE8AABXAAAsAAAAAHqgAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAABDRkYgAAADNAAAEecAABjLaEwijEZGVE0AABVAAAAAHAAAABx9NjoUR0RFRgAAFRwAAAAiAAAAJgAnAE1PUy8yAAABaAAAAEoAAABgRXjg9mNtYXAAAALoAAAANwAAAUIADfLLaGVhZAAAAQgAAAA1AAAANgwgJhRoaGVhAAABQAAAAB4AAAAkBnAEBWhtdHgAABVcAAAAYgAAAIZxOhexbWF4cAAAAWAAAAAGAAAABgAnUABuYW1lAAABtAAAATIAAAIr0D8cW3Bvc3QAAAMgAAAAEwAAACD/hgAyeJxjYGRgYADi6EaeR/H8Nl8ZuJlfAEUYrlRGcIDpxV1nGNT/P2Hey1QO5HIwMIFEAUvIDCkAAAB4nGNgZGBgimBgYIhifgEkGZj3MjAyoAIZADoTAn4AAAAAUAAAJwAAeJxjYGF+zjiBgZWBgamLaTcDA0MPhGa8z2DIyAQUZWDlZIADAQSTISDNNYWh4QPDB1Vmhf8WDFFMEQwMDUCNcAUKQMgIAJVIDIsAAHichY/NasJAFIXP+FfcSPEJbgsFBRMm2QRcVhHsoosE3BaVNAY0IzFZ2HUfocs+Q5+rj9GTZAjdOYu531zOnHsugBF+oNCcBywtKwzxYbmDO3xZ7uIJv5Z7GKpHy33cq1fLA/YvVKrekK/n+lfFCmO8W+5w7qflLl7wbbmHsRpZ7kPUzPKA/TcsYHDGFTlSJDiggGCCPaasPjQ8BJiR19wjZI2oP6KkLiVluAALc77maXIoZLKfiq+9YCbrZSiROZZFajJKmt8R55ywqx1ARXQ97QwxRMzZJbtb5kAYJ+VxS1jVE4q65lTEdSaXqQTzNtN/16ZfZXZ4O+0GWJmsWJk8icV3tcylnU72Asdzqti3cm6YIOfGzeZC78rdrWuVCZs4v3Bh0dpztdZyw/APH2JUPwAAeJxjYGBgZoBgGQZGBhCwAfIYwXwWBgUgzQKEQP4H1f//gSTD//8CjFCVDIxsDDDmiAUAW8IGyAB4nGNgZgCD/80MRgxYAAAoRAG4AHiczViJX5RV978Pw8MMoMP6oLzigCwuaMmguFTSiEppvfpzxYXQLDVNpNcFUzMHExAHBHHXTMQFCc1McwHBETfMpbTSNjVfdxEmRb0P3oH7fi+PWe/vL3g/w+fcc88992z33HPPg0RcXYkkSR79+w4ZOid5fMpUIrkQiUSqXkTtLalxLmofndrS9auUp4PrPeUg6SevIEK8g1wifIJIm6AWcb6kg+A3EC8SQFqTcNKRRJOexEJeIwPJcJJI3iFTyL/Ih2QBySA5ZAVZTwpJMfmS7CcV5Dg5Q74nv5Br5A5xkCekQXKVPKVOUowUO2va5PioqChtMGtDtDZ00Yau2hCjDd20obs29NCGntrQWxvitKGPNvTVhn7aEN80mDV9Zk2fWdNn1vSZNX1mTZ9Z02fW9Jk1fWZNn1nTZ9b0mTV9Zk2fWdNn1vRFa/qiNX3Rmr5oTV+0pi86pk/KB3OmT5703syQ9u90CImGzk4hOK2QoSlTZ82cnDJtxvOj++sMCZEypcVSlrREsknZUo60VMqV8qRlUr60XFohrZRWSaulNdJaaZ20XvpU2iB9Jm2UCqRNUqG0WdoibZW2SUXSdqlY+lwqkXaQduKIQ8nbpEryl+aC9K1U5xLh0s3lNV17XaNrlWudLLstdO/uGdvsnWaXm+/z8vYa4vXEe5D3bh8Xn0yfAp+dPqU+532e+Mb71vjZ/Lf6n7aVq/3KpfLy+r3luvKApy3V4saWbuXO2Yrar36vs5/eWJAqqWH0c4VV0C02Z7asWulchR5jVpu6RnaOYCcU9pAtrd9nY3/QvFEJsjNcDVfUUHZLDae3ZOMTOliNVSYXpezcWVS0c2dK0eTJKSmTTW/TQKV+mHNpwzC3RLVUyXY66vfYbKpDbkhwDlKyhnOXsd3tnDdOIzZOPsu1cv5KlYWTQy7A+nQHCNVZOC8bTThJvGqVjWU1ddUOh0THPKhRw3VqO9pW6aCG1OidoTRR6aiGVuud4cBs7dTwLJtDdt5zhigdHDX6CBAjHA/07eg4xdbmQZbtsWzcQiNLaeRhGinRVBpxnLbFn66+uXpBCfFg4wJY2wCMDwJYJI2gkXq6jiWJhYegHmej/kT/YmDt6CgFeLsmPOAZJuJaU62rUe8rzvvV6n09dbJKhdayina0wkEr5YZwdkihKjvWjtod1C43HUQCBc8frLIDrawBrSFU8DxhJ9rRSget0Hgy1XtKHbOH4cAegtYQQu2Kg1V0ZHb6Bz3UxFP/VZ0OOpUHzC7ItRCVAC7qwuyMgPAIfGX0hOKsrVNrm0ylh7GuhjO7Tb0vawTsz3HeV0OFbTTqJHU5Qr1PSvTT4wIznNKpRtVbGU67HtEnHFaGs65H3FiPq8rVb07/9NM3b3TvPnBobOyAo1dNgwOYfLMrdTFxErpHnHbI13ZO3I047aB0KydeDzB1mwPMJQK0rqeRFtnVmBrOIA2eOEBr259wvv8+cmHCMYDII0iNg3XABg3BXqkBQH8QLFemCaFnIeCQhNVX52Da/iWIiugDEDgSwHzcAhNephYDlc33mAtzMXdisgkOHqVuzx3c8Xfv2NQZytXT8OoUvPrnoNjYN05qXt34u1dt/le8imryKvqZV+W04rlL9CJV/zqfN/vHxr55VvPk+t89Cf1f8aRzkyddmjwpSKWJNElCzUnUqW3VtgpLYkk0kSVS7ZcEbLQbS8xBribRkRIdrYYqbKRaS0fqjfWz8xXOi9q8z0nfI+9y0mVoMiep27Zx8i9be86/vJsKA6NhIFsBs3SjYb5zDTD9DJhavxBu1sTAh/Y9waI2B/bqZWD2Q1jg94hhcBbzoD7r3pvy3t3wrEEyJGRh+UCJcCcOstS9kPVCV8h6UmA1OLvVuyqcDPTHyqFvQNxHAJaMxZYd1WCMvyi2nAPmOhU0ulWcRgBUqdkIl9t8SPX9BiyXToJFfgjsuzARTBFCdAaGs7ZrL5aU7J7L3Khv5kEZrszG8mvDIOFiuTiJNyH1wmnIch9rNfR1zlHGvKWICP68cgFO4rEFYWnlYd81l/agL9i+vPhVYep4yxQb5+O+fp314MQ44MCU5OSUDfL8ngzxh4Iv9kCYFAIFd5dBQbuLIohlAD3drQbjE068p4L81qyjnN9qPd/B+bbXKkUA0jjpv7mcCsd5BSexxvlw48Fx2ozzNRMnInjRiG/jmkxO0i889OXkj8udwVXqwvnj974tS+RkaBcofumXHzjJCMjkPKPiICfjNoPWc85U6s0Mt1Pq/Fws9KA6AMf/8EMseJxBrB/VAmve5U8gaMTTB6B55jPAH4sFQeMPz9hNTVAjNm0WsoL9DHD49GXMPtRbIN8xAJuN4+DNg53AvBvIMyBoxDgEAr2/FmAvRD0oeEbjDh0xNUGN2LSZO96A/JAQTmJCMUsYYIf8ex7Y7CtMqBW3r8VEiwBWjUZ8/IEpj+0a4DXCJ0Hjd9ZaTQI+IzZtFrKC/awGTtZdF1f1Ryvk35oMMUqFWP0Nxv1jeRN4RiNKOKaBqyA1cDW23OstaGGQd3OqiM/NZKIRsRnLt96zB/tZXDgpDMKO+J+sSkrBrC1bCjYVFaVumm6anjorJdjPWzpNX1L8vF2TC2dsN2G6vXBzMciuxTM3TzNNmzkjObgPNSt+rq5Tij5Ad7Ftx46UbeguPphi8pO8OR9lFHndSsT+12ioMXWE+ms3QAy/an8GBI2YggTtrEUD/NoPTTQw/xpiMTVBjcivXbc2yQo2PkkpKi4pKinmpIdHLy4NmxeGqjH3iETPHKSjdx0o1akH1MFKTlr2oryFeQuXpi/PyFucn5Wbtyx/yfIlK5aszMrPWIHf0k+WGRblLVqdvuiThcutOQsMzIoeBWmz4HVOuokzrxqmctIaacJ/6yiOrFCEsBbg8X1RJjNgdMsPRM7agAVsF1k4DnwtXEUB3gjaP4bYUTBNcaJsBiwWpSNKHFIM1pt/i3W/jcA87FBQvxgLfRpAM14SquJEfLgIjSewzqIid5t9DWJiPhproK49boaH9zAzVxMNcUYpn2xM37x547Lly2cvmzFjdvonpvmXlPepd4memU4CaQ9kCt2KujbcBGGxFgjrK5LznwJrAoLGy9bCtc+vWUwIwqVR8Oa3wzD54jpgd+wAN9aD6dEVccWuQY7rz8DODBPX4nVspOKQalpi+jgNwBEIFtkh6s5AuM/vx+H54rWiLNdPB3BIIki+IvNFLTbsFdVvKbAur2P3wxPigoou8+5CxKTVS+C7NB8skQNFRNvdJqhdQfJE5BebeQO7HCcJ/CsuA8uHL4m7uAB7b16HqGIrsEpR8XwSgN1OBzZiAbb06ges5WtguVwKMKIvVjOP21EzF7pBzPg+uHhkurA1KRkSH50DceckGHJ2H6bxjRDxf6cAevbE1NwGfKWb/4svJwerm/KBeZohe8garHauF5kDzXxXN2AnTgCcfxELcYEWPE5bhmKLT6goKdVmmNd6HOYlbwHMGW8RJluEQ1A1TORixgZxNNfAF7IFYMwEAEs5ZNcWC9fmEXwBqCPUWoW596W9WC+KH/P6geYvzmS2AVSP6jUVYkYsh/ztAGJ6jjZfyvJYjo26fwdCeywVcSyNvCQAscpUjmdZ2Ytp7gXWHNvet2uAJ6yAgUUrLPFMzqZZ0FyvV6fBj429xQH2FKc/vARmff4uTpDfEh8Pb4u7//FTGGxtC+lz3IAt+Bka22zDwrhJmA5fD495vhVbRgRC0PgK6GtdA+LHaQAfVYEn7WPQ0ntgSxJW+e8iqTjCTopFwUzwBAtfQRDdgM2YfybyeZG4bmlboWrebEhdNFoUY9FarBMlqvhbYS0X9bV4CFYK8Hzz26es1J/6yMaVB+iM/XT6fklNPqKjdervSBMvESJ1k6izaBP4dfGmeiniVqAHIEEDIfmPf4M2ao54zsQr8hT28kspVgOLnzB2N7PgMLj46Pp3T4CrInuvqgCb0L0Rj3PEkJMEB2IfYZH9ArN7LxJ154p4UjIwfSVeFA0VCo9+iQ19ZoKmF/ltES+FwZMYsg4gsU98AaUsCWyV0bDLPQ9ACsbWF33Q01lK9r9P42GIU1Spbl9AxrAt4K0WGdY6EjT3D0DzFh2NLNqt+3fFQmcsNHsEzF08PlUdxIEtwGr5HlHrRgC7FSaqS0dxr0VfFHgOQusqISrAD7T0VEydJtGNUNPJIvwktQsN1fn/rsaoHkobDxbO4sQQehNwMP1OEa2lMzxXjmJXlAkTdrvVB59X2jRMfKxHPyMlv4wm8uXGwwi7fBmYKKKteEwTJnFpz6N5nCzVrdJxl7iOFrBL4rJxUQQFK/+XE3aRngKIunxMEtcy5zsEatcpixLqwUlua9CLqrRJr4eENx6zo/jwmEWQcfwjwqU8V3u2zBtbILUa6xeR/28jHX3pv0lqIY1TjowJY67D7PI4mgU8NGx0mUzjdilHE8LCRlTILItWK7QiCxkhWtB1h6ErqoMoHr1JWMSY8g4dcONsu3aXSPXHdujqP/tR2T1hgluD0FAPDU6hYfiYOuZaaZf3QcPwMY/CDpXJDBqGJtSF2StkKjQwaCBJQq7QwL8VuqChLqKsvAYabDTPVzXQPOZ92q9AXYzUZ91O0256Pzsbxm4oNpZH87LBJDtfoQ6lJicHjf8Rm42OLs2inVh7m3NEhC2HVjpDbTZWGWaTjcW7indu3bmS2tmO3XtoUnmZL+1GTfiQiPS7bqV38DFtG0Orlthg6XFnkWKbJCa7ZHbyjGKbLPCdMquqeo77VVtZ1XeKbYKY7padVniaw+yyX52VmsS/HvxuW9XwLDHvQCOpXd+wsEYx0lIaKn11S/cV1DkrbqkV+v0sVQnzMNJDWKCtkIRicgCT+ruqmxKOyZeYPB2MADgrorBhLDaA7NhPT5ZKdFSFml2qo9lqgqJms5PObLeR9IniDFVr1VC9scyuhldIdNkBtf0+Ha2gR/Dpf/MmdaWuN81N37x415mr+Sa++pKWKCyYujCZBuHnQmUaTIMZRhaEH+gs2GS0FUt0TLGSrNYU651Hv1fGjT+zeOUqefou1KUXRMVzTEeKk86HLqCb6OfOSaeR55Dsqf05GRL/Oz78ztcaVqxiL9DIhVbkujH9DueHr1XgFfE6znnFxHC88kHfIxlaXUFTWjsFt/rVIEiUyFwrlzrdFi/mlV+I+MoRNUEUFt9AYCcSQQt+2W5gh9gGfPlF7NJRy2klArfGfEH0PZ6is72/ExaeOY15zAgAryGiUId0ALr3krhVZ6YhGTNE+94RN5OfX4OVueJT4MWfwCm5f27n0o1mkNS4rZuVN5aKz4fU2djziYzbPQoPtNTPB37xe32COOl+ajbnP/+ahEaiDKl9fPIJNGmp/Q1/t86l9ae4w82eoLcggYmiN9kh2rs3raLWioLZC9r9Y9Ch87jzIH4RKyJwW1Rr9TgU39sD56tzARqSxXSk4HwcD+OWpkNm429vgjM9SnQXwb9i/7jhEBplFdjv4G+gED91vQWxvokPAJLeAmCOHr7nZWB5xfsQbEhEVeKrqkQz1fRq+YvLuh9g01yAH8PE7g1tEP/CYhhHwtfWoZPSDcW7EbMJpT3lbc5/8JoK7Ho2Hr6WhSjjv3VH87e0ECeSH4egRB3ifM+FTINxs3pQ/Csu8Bd6T6cOUHG7nAfovWybekB2VgQ4D9JA9aDe+PQj/6deiq2ZB0302J9bV3a4rFkzWuV5hL5yrVnzINLGj7iJ/566E18STeaRY9JIFknb0ki9p20QDc2ynZQ9/6zCjfbnVdj+vAoT2ZPmsvE26g939uO14/e3Iy4XRLfQ711g0fiiaDxYh+ngFkiJCAPCskbkamY8KvQofJnzx7vtBtpS78n+FMRfP2jRBPEX2j4TxM/ii6NJEP/ijkUTRCattGiCpG0L/yYoP2Plkrz8Zfnp+YuXp69Ny81ct3hNzvK81Z/uLly7es+ygsz1aRsNaRsnZS8qSCsp2bxoB043BS42CxRClgHzvGX9GB/HjqfJeJd9niLX5OVInlq3rLkZk+fNWYMjche94z3/STgT0VnK1WvXfmhYPTd3fsbshVNSrfOT02Z9/HHuzNxZ69I2zDd4/ge3HruHAHicY2BkYGDgAWIxBjkGJgZGIFQDYhagCBMQM0IwAAscAHUAAAAAAAEAAAAA1BlXPwAAAADUeVgIAAAAANSjisx4nGN+wWDE/IIhkfkZQwqQPg7ED4A4CYgnAvFRIE5gfsGoDcUcCMxwAoiPAfFJoN4PzM8YLYD0TCA+AcRAfYyRQLoTiuvBGKieYQGDOkM7QzNDCsNRhr9AfgsQPgIALOsuRwAA) format('woff'); font-weight:normal; font-style:normal;}
@media print {
#FDFXFA_Menu,#FDFXFA_Menu a,#FDFXFA_Menu label,#FDFXFA_Menu button{display:none}
#formviewer{overflow: visible}
div.page{box-shadow: none;}
}
</style>
<style>
    @page {
        size: A4;
        margin: 1cm;
    }

    body {
        margin: 0;
        padding: 0;
    }

   
    .page {
width: 21cm;
min-height: 29.7cm;
/* padding: 2cm; */
margin: 1cm auto;
/* border: 1px #D3D3D3 solid; */
border-radius: 5px;
background: white;
box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}


</style>

</head>
<body style="margin: 0;" >

<!-- <div id='FDFXFA_Processing'>&#xF010;</div> -->
<div id='FDFXFA_FormType'>AcroForm</div>
<div id='FDFXFA_PDFName'>f941.pdf</div>

<div id="overlay"></div>
<form>
<div id="contentContainer">
<div id="page1" style="width: 934px; height: 1209px; margin-top:20px;" class="page">
<div class="page-inner" style="width: 934px; height: 1209px;">

<div id="p1" class="pageArea" style="overflow: hidden; position: relative; width: 934px; height: 1209px; margin-top:auto; margin-left:auto; margin-right:auto; background-color: white;">

<!-- Begin shared CSS values -->
<style class="shared-css" type="text/css" >
.t {
   transform-origin: bottom left;
   z-index: 2;
   position: absolute;
   white-space: pre;
   overflow: visible;
   line-height: 1.5;
}
.text-container {
   white-space: pre;
}
@supports (-webkit-touch-callout: none) {
   .text-container {
      white-space: normal;
   }
}
</style>
<!-- End shared CSS values -->


<!-- Begin inline CSS -->
<style type="text/css" >

#t1_1{left:55px;bottom:1129px;letter-spacing:-0.14px;}
#t2_1{left:89px;bottom:1122px;letter-spacing:-0.21px;}
#t3_1{left:55px;bottom:1117px;letter-spacing:-0.15px;}
#t4_1{left:253px;bottom:1126px;letter-spacing:0.19px;}
#t5_1{left:253px;bottom:1118px;letter-spacing:-0.14px;}
#t6_1{left:814px;bottom:1135px;letter-spacing:0.2px;}
#t7_1{left:781px;bottom:1119px;letter-spacing:-0.17px;}
#t8_1{left:66px;bottom:1080px;letter-spacing:-0.15px;}
#t9_1{left:211px;bottom:1080px;letter-spacing:-0.13px;}
#ta_1{left:311px;bottom:1087px;}
#tb_1{left:69px;bottom:1045px;letter-spacing:-0.17px;}
#tc_1{left:102px;bottom:1045px;letter-spacing:-0.14px;}
#td_1{left:69px;bottom:1009px;letter-spacing:-0.16px;}
#te_1{left:133px;bottom:1009px;letter-spacing:-0.11px;}
#tf_1{left:69px;bottom:969px;letter-spacing:-0.17px;}
#tg_1{left:126px;bottom:957px;letter-spacing:0.09px;}
#th_1{left:240px;bottom:957px;letter-spacing:0.06px;}
#ti_1{left:494px;bottom:957px;letter-spacing:0.08px;}
#tj_1{left:126px;bottom:911px;letter-spacing:0.07px;}
#tk_1{left:435px;bottom:911px;letter-spacing:0.08px;}
#tl_1{left:520px;bottom:911px;letter-spacing:0.08px;}
#tm_1{left:126px;bottom:865px;letter-spacing:0.08px;}
#tn_1{left:357px;bottom:865px;letter-spacing:0.08px;}
#to_1{left:500px;bottom:865px;letter-spacing:0.08px;}
#tp_1{left:654px;bottom:1088px;letter-spacing:-0.11px;}
#tq_1{left:654px;bottom:1073px;letter-spacing:-0.15px;}
#tr_1{left:671px;bottom:1042px;letter-spacing:0.09px;}
#ts_1{left:685px;bottom:1042px;letter-spacing:0.11px;}
#tt_1{left:671px;bottom:1018px;letter-spacing:0.09px;}
#tu_1{left:685px;bottom:1018px;letter-spacing:0.1px;}
#tv_1{left:671px;bottom:993px;letter-spacing:0.09px;}
#tw_1{left:685px;bottom:993px;letter-spacing:0.11px;}
#tx_1{left:671px;bottom:969px;letter-spacing:0.09px;}
#ty_1{left:685px;bottom:969px;letter-spacing:0.12px;}
#tz_1{left:649px;bottom:946px;letter-spacing:0.09px;}
#t10_1{left:683px;bottom:946px;letter-spacing:0.11px;}
#t11_1{left:807px;bottom:946px;letter-spacing:0.07px;}
#t12_1{left:649px;bottom:932px;letter-spacing:0.1px;}
#t13_1{left:55px;bottom:834px;letter-spacing:-0.01px;}
#t14_1{left:60px;bottom:813px;letter-spacing:-0.11px;}
#t15_1{left:122px;bottom:814px;letter-spacing:-0.12px;}
#t16_1{left:70px;bottom:791px;}
#t17_1{left:99px;bottom:791px;letter-spacing:-0.01px;word-spacing:1.14px;}
#t18_1{left:99px;bottom:772px;letter-spacing:-0.01px;}
#t19_1{left:160px;bottom:772px;letter-spacing:-0.01px;}
#t1a_1{left:208px;bottom:772px;letter-spacing:-0.01px;}
#t1b_1{left:278px;bottom:772px;letter-spacing:-0.01px;}
#t1c_1{left:328px;bottom:772px;letter-spacing:-0.01px;}
#t1d_1{left:398px;bottom:772px;letter-spacing:-0.01px;}
#t1e_1{left:450px;bottom:772px;letter-spacing:-0.01px;}
#t1f_1{left:536px;bottom:772px;letter-spacing:-0.01px;}
#t1g_1{left:584px;bottom:772px;letter-spacing:-0.01px;}
#t1h_1{left:667px;bottom:771px;}
#t1i_1{left:70px;bottom:735px;}
#t1j_1{left:99px;bottom:735px;letter-spacing:-0.01px;}
#t1k_1{left:348px;bottom:735px;}
#t1l_1{left:367px;bottom:735px;}
#t1m_1{left:385px;bottom:735px;}
#t1n_1{left:403px;bottom:735px;}
#t1o_1{left:422px;bottom:735px;}
#t1p_1{left:440px;bottom:735px;}
#t1q_1{left:458px;bottom:735px;}
#t1r_1{left:477px;bottom:735px;}
#t1s_1{left:495px;bottom:735px;}
#t1t_1{left:513px;bottom:735px;}
#t1u_1{left:532px;bottom:735px;}
#t1v_1{left:550px;bottom:735px;}
#t1w_1{left:568px;bottom:735px;}
#t1x_1{left:587px;bottom:735px;}
#t1y_1{left:605px;bottom:735px;}
#t1z_1{left:623px;bottom:735px;}
#t20_1{left:642px;bottom:735px;}
#t21_1{left:667px;bottom:735px;}
#t22_1{left:839px;bottom:730px;}
#t23_1{left:70px;bottom:698px;}
#t24_1{left:99px;bottom:698px;letter-spacing:-0.01px;}
#t25_1{left:550px;bottom:698px;}
#t26_1{left:568px;bottom:698px;}
#t27_1{left:587px;bottom:698px;}
#t28_1{left:605px;bottom:698px;}
#t29_1{left:623px;bottom:698px;}
#t2a_1{left:642px;bottom:698px;}
#t2b_1{left:667px;bottom:698px;}
#t2c_1{left:839px;bottom:693px;}
#t2d_1{left:70px;bottom:661px;}
#t2e_1{left:99px;bottom:661px;letter-spacing:-0.01px;}
#t2f_1{left:704px;bottom:661px;letter-spacing:-0.01px;}
#t2g_1{left:372px;bottom:640px;letter-spacing:-0.01px;}
#t2h_1{left:581px;bottom:640px;letter-spacing:-0.01px;}
#t2i_1{left:70px;bottom:616px;letter-spacing:-0.01px;}
#t2j_1{left:99px;bottom:616px;letter-spacing:-0.01px;}
#t2k_1{left:293px;bottom:616px;}
#t2l_1{left:312px;bottom:616px;}
#t2m_1{left:432px;bottom:610px;}
#t2n_1{left:478px;bottom:616px;letter-spacing:-0.01px;}
#t2o_1{left:641px;bottom:610px;}
#t2p_1{left:70px;bottom:588px;letter-spacing:-0.01px;}
#t2q_1{left:99px;bottom:588px;}
#t2r_1{left:121px;bottom:588px;letter-spacing:-0.01px;}
#t2s_1{left:312px;bottom:588px;}
#t2t_1{left:432px;bottom:583px;}
#t2u_1{left:478px;bottom:588px;letter-spacing:-0.01px;}
#t2v_1{left:641px;bottom:583px;}
#t2w_1{left:70px;bottom:561px;letter-spacing:-0.01px;}
#t2x_1{left:99px;bottom:561px;}
#t2y_1{left:121px;bottom:561px;letter-spacing:-0.01px;}
#t2z_1{left:312px;bottom:561px;}
#t30_1{left:432px;bottom:556px;}
#t31_1{left:478px;bottom:561px;letter-spacing:-0.01px;}
#t32_1{left:641px;bottom:556px;}
#t33_1{left:704px;bottom:621px;letter-spacing:-0.13px;word-spacing:-0.33px;}
#t34_1{left:704px;bottom:608px;letter-spacing:-0.13px;}
#t35_1{left:704px;bottom:595px;letter-spacing:-0.13px;}
#t36_1{left:704px;bottom:583px;letter-spacing:-0.14px;}
#t37_1{left:704px;bottom:570px;letter-spacing:-0.13px;}
#t38_1{left:704px;bottom:558px;letter-spacing:-0.11px;}
#t39_1{left:796px;bottom:558px;letter-spacing:-0.15px;}
#t3a_1{left:820px;bottom:558px;letter-spacing:-0.12px;}
#t3b_1{left:704px;bottom:545px;letter-spacing:-0.13px;}
#t3c_1{left:704px;bottom:532px;letter-spacing:-0.13px;}
#t3d_1{left:704px;bottom:520px;letter-spacing:-0.13px;}
#t3e_1{left:704px;bottom:507px;letter-spacing:-0.14px;}
#t3f_1{left:70px;bottom:533px;letter-spacing:-0.01px;}
#t3g_1{left:99px;bottom:533px;letter-spacing:-0.01px;}
#t3h_1{left:275px;bottom:533px;}
#t3i_1{left:293px;bottom:533px;}
#t3j_1{left:312px;bottom:533px;}
#t3k_1{left:432px;bottom:528px;}
#t3l_1{left:478px;bottom:533px;letter-spacing:-0.01px;}
#t3m_1{left:641px;bottom:528px;}
#t3n_1{left:70px;bottom:506px;letter-spacing:-0.01px;}
#t3o_1{left:99px;bottom:506px;letter-spacing:-0.01px;}
#t3p_1{left:293px;bottom:506px;}
#t3q_1{left:312px;bottom:506px;}
#t3r_1{left:432px;bottom:500px;}
#t3s_1{left:478px;bottom:506px;letter-spacing:-0.01px;}
#t3t_1{left:641px;bottom:500px;}
#t3u_1{left:70px;bottom:483px;letter-spacing:-0.01px;}
#t3v_1{left:99px;bottom:483px;letter-spacing:-0.01px;}
#t3w_1{left:99px;bottom:467px;letter-spacing:-0.01px;}
#t3x_1{left:432px;bottom:464px;}
#t3y_1{left:478px;bottom:469px;letter-spacing:-0.01px;}
#t3z_1{left:641px;bottom:464px;}
#t40_1{left:70px;bottom:432px;letter-spacing:-0.01px;}
#t41_1{left:99px;bottom:432px;letter-spacing:-0.01px;}
#t42_1{left:340px;bottom:432px;letter-spacing:-0.01px;}
#t43_1{left:664px;bottom:432px;letter-spacing:-0.01px;}
#t44_1{left:839px;bottom:427px;}
#t45_1{left:70px;bottom:396px;letter-spacing:-0.01px;}
#t46_1{left:99px;bottom:396px;letter-spacing:-0.01px;}
#t47_1{left:504px;bottom:396px;letter-spacing:-0.01px;}
#t48_1{left:623px;bottom:396px;}
#t49_1{left:642px;bottom:396px;}
#t4a_1{left:665px;bottom:396px;letter-spacing:-0.01px;}
#t4b_1{left:839px;bottom:390px;}
#t4c_1{left:70px;bottom:359px;}
#t4d_1{left:99px;bottom:359px;letter-spacing:-0.01px;}
#t4e_1{left:299px;bottom:359px;letter-spacing:-0.01px;}
#t4f_1{left:440px;bottom:359px;}
#t4g_1{left:458px;bottom:359px;}
#t4h_1{left:477px;bottom:359px;}
#t4i_1{left:495px;bottom:359px;}
#t4j_1{left:513px;bottom:359px;}
#t4k_1{left:532px;bottom:359px;}
#t4l_1{left:550px;bottom:359px;}
#t4m_1{left:568px;bottom:359px;}
#t4n_1{left:587px;bottom:359px;}
#t4o_1{left:605px;bottom:359px;}
#t4p_1{left:623px;bottom:359px;}
#t4q_1{left:642px;bottom:359px;}
#t4r_1{left:667px;bottom:359px;}
#t4s_1{left:839px;bottom:354px;}
#t4t_1{left:70px;bottom:322px;}
#t4u_1{left:99px;bottom:322px;letter-spacing:-0.01px;}
#t4v_1{left:422px;bottom:322px;}
#t4w_1{left:440px;bottom:322px;}
#t4x_1{left:458px;bottom:322px;}
#t4y_1{left:477px;bottom:322px;}
#t4z_1{left:495px;bottom:322px;}
#t50_1{left:513px;bottom:322px;}
#t51_1{left:532px;bottom:322px;}
#t52_1{left:550px;bottom:322px;}
#t53_1{left:568px;bottom:322px;}
#t54_1{left:587px;bottom:322px;}
#t55_1{left:605px;bottom:322px;}
#t56_1{left:623px;bottom:322px;}
#t57_1{left:642px;bottom:322px;}
#t58_1{left:667px;bottom:322px;}
#t59_1{left:839px;bottom:317px;}
#t5a_1{left:70px;bottom:286px;}
#t5b_1{left:99px;bottom:286px;letter-spacing:-0.01px;}
#t5c_1{left:367px;bottom:286px;}
#t5d_1{left:385px;bottom:286px;}
#t5e_1{left:403px;bottom:286px;}
#t5f_1{left:422px;bottom:286px;}
#t5g_1{left:440px;bottom:286px;}
#t5h_1{left:458px;bottom:286px;}
#t5i_1{left:477px;bottom:286px;}
#t5j_1{left:495px;bottom:286px;}
#t5k_1{left:513px;bottom:286px;}
#t5l_1{left:532px;bottom:286px;}
#t5m_1{left:550px;bottom:286px;}
#t5n_1{left:568px;bottom:286px;}
#t5o_1{left:587px;bottom:286px;}
#t5p_1{left:605px;bottom:286px;}
#t5q_1{left:623px;bottom:286px;}
#t5r_1{left:642px;bottom:286px;}
#t5s_1{left:667px;bottom:286px;}
#t5t_1{left:839px;bottom:280px;}
#t5u_1{left:70px;bottom:249px;}
#t5v_1{left:99px;bottom:249px;letter-spacing:-0.01px;}
#t5w_1{left:532px;bottom:249px;}
#t5x_1{left:550px;bottom:249px;}
#t5y_1{left:568px;bottom:249px;}
#t5z_1{left:587px;bottom:249px;}
#t60_1{left:605px;bottom:249px;}
#t61_1{left:623px;bottom:249px;}
#t62_1{left:642px;bottom:249px;}
#t63_1{left:667px;bottom:249px;}
#t64_1{left:839px;bottom:244px;}
#t65_1{left:63px;bottom:212px;letter-spacing:-0.01px;}
#t66_1{left:99px;bottom:212px;letter-spacing:-0.01px;}
#t67_1{left:287px;bottom:212px;letter-spacing:-0.01px;}
#t68_1{left:458px;bottom:212px;}
#t69_1{left:477px;bottom:212px;}
#t6a_1{left:495px;bottom:212px;}
#t6b_1{left:513px;bottom:212px;}
#t6c_1{left:532px;bottom:212px;}
#t6d_1{left:550px;bottom:212px;}
#t6e_1{left:568px;bottom:212px;}
#t6f_1{left:587px;bottom:212px;}
#t6g_1{left:605px;bottom:212px;}
#t6h_1{left:623px;bottom:212px;}
#t6i_1{left:642px;bottom:212px;}
#t6j_1{left:664px;bottom:212px;letter-spacing:-0.01px;}
#t6k_1{left:839px;bottom:207px;}
#t6l_1{left:63px;bottom:176px;letter-spacing:-0.01px;}
#t6m_1{left:99px;bottom:176px;letter-spacing:-0.01px;}
#t6n_1{left:546px;bottom:176px;letter-spacing:-0.01px;}
#t6o_1{left:660px;bottom:176px;letter-spacing:-0.01px;}
#t6p_1{left:839px;bottom:170px;}
#t6q_1{left:63px;bottom:144px;letter-spacing:-0.01px;}
#t6r_1{left:99px;bottom:144px;letter-spacing:-0.01px;word-spacing:1.78px;}
#t6s_1{left:99px;bottom:128px;letter-spacing:-0.01px;}
#t6t_1{left:238px;bottom:128px;}
#t6u_1{left:257px;bottom:128px;}
#t6v_1{left:275px;bottom:128px;}
#t6w_1{left:293px;bottom:128px;}
#t6x_1{left:312px;bottom:128px;}
#t6y_1{left:330px;bottom:128px;}
#t6z_1{left:348px;bottom:128px;}
#t70_1{left:367px;bottom:128px;}
#t71_1{left:385px;bottom:128px;}
#t72_1{left:403px;bottom:128px;}
#t73_1{left:422px;bottom:128px;}
#t74_1{left:440px;bottom:128px;}
#t75_1{left:458px;bottom:128px;}
#t76_1{left:477px;bottom:128px;}
#t77_1{left:495px;bottom:128px;}
#t78_1{left:513px;bottom:128px;}
#t79_1{left:532px;bottom:128px;}
#t7a_1{left:550px;bottom:128px;}
#t7b_1{left:568px;bottom:128px;}
#t7c_1{left:587px;bottom:128px;}
#t7d_1{left:605px;bottom:128px;}
#t7e_1{left:623px;bottom:128px;}
#t7f_1{left:642px;bottom:128px;}
#t7g_1{left:659px;bottom:127px;letter-spacing:-0.01px;}
#t7h_1{left:839px;bottom:125px;}
#t7i_1{left:63px;bottom:89px;letter-spacing:-0.01px;}
#t7j_1{left:99px;bottom:89px;letter-spacing:-0.01px;}
#t7k_1{left:257px;bottom:89px;}
#t7l_1{left:275px;bottom:89px;}
#t7m_1{left:293px;bottom:89px;}
#t7n_1{left:312px;bottom:89px;}
#t7o_1{left:330px;bottom:89px;}
#t7p_1{left:348px;bottom:89px;}
#t7q_1{left:367px;bottom:89px;}
#t7r_1{left:385px;bottom:89px;}
#t7s_1{left:403px;bottom:89px;}
#t7t_1{left:422px;bottom:89px;}
#t7u_1{left:440px;bottom:89px;}
#t7v_1{left:458px;bottom:89px;}
#t7w_1{left:477px;bottom:89px;}
#t7x_1{left:495px;bottom:89px;}
#t7y_1{left:513px;bottom:89px;}
#t7z_1{left:532px;bottom:89px;}
#t80_1{left:550px;bottom:89px;}
#t81_1{left:568px;bottom:89px;}
#t82_1{left:587px;bottom:89px;}
#t83_1{left:605px;bottom:89px;}
#t84_1{left:623px;bottom:89px;}
#t85_1{left:642px;bottom:89px;}
#t86_1{left:659px;bottom:89px;letter-spacing:-0.01px;}
#t87_1{left:839px;bottom:83px;}
#t88_1{left:77px;bottom:52px;letter-spacing:-0.01px;}
#t89_1{left:55px;bottom:34px;letter-spacing:0.11px;}
#t8a_1{left:632px;bottom:34px;letter-spacing:-0.15px;}
#t8b_1{left:760px;bottom:35px;letter-spacing:-0.14px;}
#t8c_1{left:788px;bottom:33px;letter-spacing:0.15px;}
#t8d_1{left:816px;bottom:35px;letter-spacing:-0.14px;}

.s0_1{font-size:11px;font-family:HelveticaNeueLTStd-Roman_1fp;color:#000;}
.s1_1{font-size:28px;font-family:HelveticaNeueLTStd-BlkCn_1fr;color:#000;}
.s2_1{font-size:21px;font-family:ITCFranklinGothicStd-Demi_1fq;color:#000;}
.s3_1{font-size:15px;font-family:OCRAStd_1fm;color:#000;}
.s4_1{font-size:11px;font-family:HelveticaNeueLTStd-Bd_1fn;color:#000;}
.s5_1{font-size:11px;font-family:HelveticaNeueLTStd-It_1fo;color:#000;}
.s6_1{font-size:9px;font-family:HelveticaNeueLTStd-Roman_1fp;color:#000;}
.s7_1{font-size:14px;font-family:HelveticaNeueLTStd-Bd_1fn;color:#F3F3F3;}
.s8_1{font-size:11px;font-family:HelveticaNeueLTStd-Bd_1fn;color:#F3F3F3;}
.s9_1{font-size:12px;font-family:HelveticaNeueLTStd-Bd_1fn;color:#000;}
.sa_1{font-size:12px;font-family:HelveticaNeueLTStd-Roman_1fp;color:#000;}
.sb_1{font-size:12px;font-family:HelveticaNeueLTStd-It_1fo;color:#000;}
.sc_1{font-size:13px;font-family:HelveticaNeueLTStd-Roman_1fp;color:#000;}
.sd_1{font-size:14px;font-family:HelveticaNeueLTStd-Bd_1fn;color:#FFF;}
.se_1{font-size:14px;font-family:HelveticaNeueLTStd-Bd_1fn;color:#000;}
.sf_1{font-size:13px;font-family:HelveticaNeueLTStd-Bd_1fn;color:#000;}
.sg_1{font-size:13px;font-family:HelveticaNeueLTStd-BdIt_1fs;color:#000;}
.sh_1{font-size:26px;font-family:HelveticaNeueLTStd-Bd_1fn;color:#000;}
.si_1{font-size:11px;font-family:HelveticaNeueLTStd-BdIt_1fs;color:#000;}
.sj_1{font-size:15px;font-family:HelveticaNeueLTStd-Bd_1fn;color:#000;}
.t.v0_1{transform:scaleX(0.89);}
.t.v1_1{transform:scaleX(0.96);}
.t.v2_1{transform:scaleX(0.989);}
.t.v3_1{transform:scaleX(0.94);}
.t.v4_1{transform:scaleX(0.95);}
.t.v5_1{transform:scaleX(0.88);}
.t.v6_1{transform:scaleX(0.969);}
#form1_1{   z-index: 2; padding: 0px;  position: absolute;  left: 234px;   top: 99px;  width: 30px;   height: 28px;  color: rgb(0,0,0);   text-align: left; background: transparent; border: none;    font: normal 15px 'Times New Roman', Times, serif;}
#form1_1:focus {
    background: white; /* Change to white when focused */
}


#form2_1{   z-index: 2; padding: 0px;  position: absolute;  left: 330px;   top: 99px;  width: 261px;  height: 28px;  color: rgb(0,0,0);   text-align: left; background: transparent;   border: none;  font: normal 15px 'Times New Roman', Times, serif;}

#form3_1{   z-index: 2; border-style: none;  padding: 0px;  position: absolute;  left: 644px;   top: 144px; width: 16px;   height: 16px;  color: rgb(0,0,0);   text-align: left; background: #f4f4fc; font: normal 12px Wingdings, 'Zapf Dingbats';}
#form4_1{   z-index: 2; padding: 0px;  position: absolute;  left: 209px;   top: 136px; width: 384px;  height: 28px;  color: rgb(0,0,0);   text-align: left; background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form4_1:focus {
    background: white; /* Change to white when focused */
}

#form4_1:focus,#form5_1:focus,#form6_1:focus,#form10_1:focus,#form11_1:focus,#form12_1:focus,#form13_1:focus,#form14_1:focus,#form15_1:focus,#form16_1:focus
,#form17_1:focus,#form18_1:focus,#form19_1:focus,#form20_1:focus,#form22_1:focus,#form23_1:focus,#form24_1:focus,#form25_1:focus,#form26_1:focus,#form27_1:focus
,#form28_1:focus,#form29_1:focus,#form30_1:focus,#form31_1:focus,#form32_1:focus,#form33_1:focus,#form34_1:focus,#form35_1:focus,#form36_1:focus,#form37_1:focus
,#form38_1:focus,#form39_1:focus,#form40_1:focus,#form41_1:focus,#form42_1:focus,#form43_1:focus,#form44_1:focus,#form45_1:focus,#form46_1:focus,#form47_1:focus
,#form48_1:focus,#form49_1:focus,#form50_1:focus,#form51_1:focus,#form52_1:focus,#form53_1:focus,#form54_1:focus,#form55_1:focus,#form56_1:focus,#form57_1:focus
,#form58_1:focus,#form59_1:focus,#form60_1:focus,#form61_1:focus,#form62_1:focus,#form63_1:focus ,#form9_1:focus {
    background: white; /* Change to white when focused */
}

#form5_1{   z-index: 2; border-style: none;  padding: 0px;  position: absolute;  left: 644px;   top: 168px; width: 16px;   height: 16px;  color: rgb(0,0,0);   text-align: left; background: #f4f4fc; font: normal 12px Wingdings, 'Zapf Dingbats';}
#form6_1{   z-index: 2; padding: 0px;  position: absolute;  left: 176px;   top: 173px; width: 417px;  height: 28px;  color: rgb(0,0,0);   text-align: left; background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form7_1{   z-index: 2; border-style: none;  padding: 0px;  position: absolute;  left: 644px;   top: 193px; width: 16px;   height: 16px;  color: rgb(0,0,0);   text-align: left; background: #f4f4fc; font: normal 12px Wingdings, 'Zapf Dingbats';}
#form8_1{   z-index: 2; border-style: none;  padding: 0px;  position: absolute;  left: 644px;   top: 217px; width: 16px;   height: 16px;  color: rgb(0,0,0);   text-align: left; background: #f4f4fc; font: normal 12px Wingdings, 'Zapf Dingbats';}
#form9_1{   z-index: 2; padding: 0px;  position: absolute;  left: 121px;   top: 209px; width: 472px;  height: 28px;  color: rgb(0,0,0);   text-align: left; background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form10_1{  z-index: 2; padding: 0px;  position: absolute;  left: 121px;   top: 255px; width: 285px;  height: 28px;  color: rgb(0,0,0);   text-align: left; background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form11_1{  z-index: 2; padding: 0px;  position: absolute;  left: 419px;   top: 255px; width: 54px;   height: 28px;  color: rgb(0,0,0);   text-align: center;  background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form12_1{  z-index: 2; padding: 0px;  position: absolute;  left: 484px;   top: 255px; width: 109px;  height: 28px;  color: rgb(0,0,0);   text-align: center;  background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form13_1{  z-index: 2; padding: 0px;  position: absolute;  left: 121px;   top: 301px; width: 219px;  height: 28px;  color: rgb(0,0,0);   text-align: left; background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form14_1{  z-index: 2; padding: 0px;  position: absolute;  left: 352px;   top: 301px; width: 132px;  height: 28px;  color: rgb(0,0,0);   text-align: left; background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form15_1{  z-index: 2; padding: 0px;  position: absolute;  left: 495px;   top: 301px; width: 98px;   height: 28px;  color: rgb(0,0,0);   text-align: center;  background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form16_1{  z-index: 2; padding: 0px;  position: absolute;  left: 682px;   top: 411px; width: 197px;  height: 24px;  color: rgb(0,0,0);   text-align: center;  background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form17_1{  z-index: 2; padding: 0px;  position: absolute;  left: 682px;   top: 448px; width: 153px;  height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form18_1{  z-index: 2; padding: 0px;  position: absolute;  left: 847px;   top: 448px; width: 32px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form19_1{  z-index: 2; padding: 0px;  position: absolute;  left: 682px;   top: 484px; width: 153px;  height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form20_1{  z-index: 2; padding: 0px;  position: absolute;  left: 847px;   top: 484px; width: 32px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form21_1{  z-index: 2; border-style: none;  padding: 0px;  position: absolute;  left: 677px;   top: 523px; width: 16px;   height: 16px;  color: rgb(0,0,0);   text-align: left; background: #f4f4fc; font: normal 12px Wingdings, 'Zapf Dingbats';}
#form22_1{  z-index: 2; padding: 0px;  position: absolute;  left: 330px;   top: 567px; width: 98px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form23_1{  z-index: 2; padding: 0px;  position: absolute;  left: 440px;   top: 567px; width: 32px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form24_1{  z-index: 2; padding: 0px;  position: absolute;  left: 539px;   top: 567px; width: 98px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form25_1{  z-index: 2; padding: 0px;  position: absolute;  left: 649px;   top: 567px; width: 32px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form26_1{  z-index: 2; padding: 0px;  position: absolute;  left: 330px;   top: 594px; width: 98px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form27_1{  z-index: 2; padding: 0px;  position: absolute;  left: 440px;   top: 594px; width: 32px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form28_1{  z-index: 2; padding: 0px;  position: absolute;  left: 539px;   top: 594px; width: 98px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form29_1{  z-index: 2; padding: 0px;  position: absolute;  left: 649px;   top: 594px; width: 32px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form30_1{  z-index: 2; padding: 0px;  position: absolute;  left: 330px;   top: 622px; width: 98px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form31_1{  z-index: 2; padding: 0px;  position: absolute;  left: 440px;   top: 622px; width: 32px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form32_1{  z-index: 2; padding: 0px;  position: absolute;  left: 539px;   top: 622px; width: 98px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form33_1{  z-index: 2; padding: 0px;  position: absolute;  left: 649px;   top: 622px; width: 32px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form34_1{  z-index: 2; padding: 0px;  position: absolute;  left: 330px;   top: 649px; width: 98px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form35_1{  z-index: 2; padding: 0px;  position: absolute;  left: 440px;   top: 649px; width: 32px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form36_1{  z-index: 2; padding: 0px;  position: absolute;  left: 539px;   top: 649px; width: 98px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form37_1{  z-index: 2; padding: 0px;  position: absolute;  left: 649px;   top: 649px; width: 32px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form38_1{  z-index: 2; padding: 0px;  position: absolute;  left: 330px;   top: 677px; width: 98px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form39_1{  z-index: 2; padding: 0px;  position: absolute;  left: 440px;   top: 677px; width: 32px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form40_1{  z-index: 2; padding: 0px;  position: absolute;  left: 539px;   top: 677px; width: 98px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form41_1{  z-index: 2; padding: 0px;  position: absolute;  left: 649px;   top: 677px; width: 32px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form42_1{  z-index: 2; padding: 0px;  position: absolute;  left: 330px;   top: 714px; width: 98px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form43_1{  z-index: 2; padding: 0px;  position: absolute;  left: 440px;   top: 714px; width: 32px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form44_1{  z-index: 2; padding: 0px;  position: absolute;  left: 539px;   top: 714px; width: 98px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form45_1{  z-index: 2; padding: 0px;  position: absolute;  left: 649px;   top: 714px; width: 32px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form46_1{  z-index: 2; padding: 0px;  position: absolute;  left: 682px;   top: 750px; width: 153px;  height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form47_1{  z-index: 2; padding: 0px;  position: absolute;  left: 847px;   top: 750px; width: 32px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form48_1{  z-index: 2; padding: 0px;  position: absolute;  left: 682px;   top: 787px; width: 153px;  height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form49_1{  z-index: 2; padding: 0px;  position: absolute;  left: 847px;   top: 787px; width: 32px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form50_1{  z-index: 2; padding: 0px;  position: absolute;  left: 682px;   top: 824px; width: 153px;  height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form51_1{  z-index: 2; padding: 0px;  position: absolute;  left: 847px;   top: 824px; width: 32px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form52_1{  z-index: 2; padding: 0px;  position: absolute;  left: 682px;   top: 860px; width: 153px;  height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form53_1{  z-index: 2; padding: 0px;  position: absolute;  left: 847px;   top: 860px; width: 32px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form54_1{  z-index: 2; padding: 0px;  position: absolute;  left: 682px;   top: 897px; width: 153px;  height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form55_1{  z-index: 2; padding: 0px;  position: absolute;  left: 847px;   top: 897px; width: 32px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form56_1{  z-index: 2; padding: 0px;  position: absolute;  left: 682px;   top: 934px; width: 153px;  height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form57_1{  z-index: 2; padding: 0px;  position: absolute;  left: 847px;   top: 934px; width: 32px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form58_1{  z-index: 2; padding: 0px;  position: absolute;  left: 682px;   top: 970px; width: 153px;  height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form59_1{  z-index: 2; padding: 0px;  position: absolute;  left: 847px;   top: 970px; width: 32px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form60_1{  z-index: 2; padding: 0px;  position: absolute;  left: 682px;   top: 1007px;   width: 153px;  height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form61_1{  z-index: 2; padding: 0px;  position: absolute;  left: 847px;   top: 1007px;   width: 32px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form62_1{  z-index: 2; padding: 0px;  position: absolute;  left: 682px;   top: 1053px;   width: 153px;  height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form63_1{  z-index: 2; padding: 0px;  position: absolute;  left: 847px;   top: 1053px;   width: 32px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form64_1{  z-index: 2; background-size: 100% 100%;   background-image: url("1/form/461 0 ROff.png"); background-repeat: no-repeat; border-style: none;  padding: 0px;  position: absolute;  left: 682px;   top: 1094px;   width: 154px;  height: 22px;  color: rgb(0,0,0);   text-align: right;   background: transparent;   font: normal 15px 'Times New Roman', Times, serif;}
#form65_1{  z-index: 2; background-size: 100% 100%;   background-image: url("1/form/462 0 ROff.png"); background-repeat: no-repeat; border-style: none;  padding: 0px;  position: absolute;  left: 847px;   top: 1094px;   width: 32px;   height: 22px;  color: rgb(0,0,0);   text-align: right;   background: transparent;   font: normal 15px 'Times New Roman', Times, serif;}
#form3_1 { z-index:5; }
#form5_1 { z-index:4; }
#form7_1 { z-index:3; }
#form8_1 { z-index:2; }
#form21_1 { z-index:2; }

</style>
<!-- End inline CSS -->

<!-- Begin embedded font definitions -->
<style id="fonts1" type="text/css" >

@font-face {
   font-family: HelveticaNeueLTStd-BdIt_1fs;
   src: url("fonts/HelveticaNeueLTStd-BdIt_1fs.woff") format("woff");
}

@font-face {
   font-family: HelveticaNeueLTStd-Bd_1fn;
   src: url("fonts/HelveticaNeueLTStd-Bd_1fn.woff") format("woff");
}

@font-face {
   font-family: HelveticaNeueLTStd-BlkCn_1fr;
   src: url("fonts/HelveticaNeueLTStd-BlkCn_1fr.woff") format("woff");
}

@font-face {
   font-family: HelveticaNeueLTStd-It_1fo;
   src: url("fonts/HelveticaNeueLTStd-It_1fo.woff") format("woff");
}

@font-face {
   font-family: HelveticaNeueLTStd-Roman_1fp;
   src: url("fonts/HelveticaNeueLTStd-Roman_1fp.woff") format("woff");
}

@font-face {
   font-family: ITCFranklinGothicStd-Demi_1fq;
   src: url("fonts/ITCFranklinGothicStd-Demi_1fq.woff") format("woff");
}

@font-face {
   font-family: OCRAStd_1fm;
   src: url("fonts/OCRAStd_1fm.woff") format("woff");
}

</style>
<!-- End embedded font definitions -->

<!-- Begin page background -->
<div id="pg1Overlay" style="width:100%; height:100%; position:absolute; z-index:1; background-color:rgba(0,0,0,0); -webkit-user-select: none;"></div>
<div id="pg1" style="-webkit-user-select: none;"><object width="934" height="1209" data="1/1.svg" type="image/svg+xml" id="pdf1" style="width:934px; height:1209px; -moz-transform:scale(1); z-index: 0;"></object></div>
<!-- End page background -->


<!-- Begin text definitions (Positioned/styled in CSS) -->
<div class="text-container"><span id="t1_1" class="t s0_1">Form </span><span id="t2_1" class="t s1_1">941 for 2023: </span>
<span id="t3_1" class="t s0_1">(Rev. March 2023) </span>
<span id="t4_1" class="t s2_1">Employer’s QUARTERLY Federal Tax Return </span>
<span id="t5_1" class="t s0_1">Department of the Treasury — Internal Revenue Service </span>
<span id="t6_1" class="t s3_1">950122 </span>
<span id="t7_1" class="t s0_1">OMB No. 1545-0029 </span>
<span id="t8_1" class="t v0_1 s4_1">Employer identification number </span><span id="t9_1" class="t v0_1 s0_1">(EIN) </span>
<span id="ta_1" class="t s0_1">— </span>
<span id="tb_1" class="t s4_1">Name </span><span id="tc_1" class="t s5_1">(not your trade name) </span>
<span id="td_1" class="t s4_1">Trade name </span><span id="te_1" class="t s5_1">(if any) </span>
<span id="tf_1" class="t s4_1">Address </span>
<span id="tg_1" class="t s6_1">Number </span><span id="th_1" class="t s6_1">Street </span><span id="ti_1" class="t s6_1">Suite or room number </span>
<span id="tj_1" class="t s6_1">City </span><span id="tk_1" class="t s6_1">State </span><span id="tl_1" class="t s6_1">ZIP code </span>
<span id="tm_1" class="t s6_1">Foreign country name </span><span id="tn_1" class="t s6_1">Foreign province/county </span><span id="to_1" class="t s6_1">Foreign postal code </span>
<span id="tp_1" class="t s7_1" style="color: #000;">Report for this Quarter of 2023 </span>
<span id="tq_1" class="t s8_1" style="color: #000;">(Check one.) </span>
<span id="tr_1" class="t s9_1">1: </span><span id="ts_1" class="t sa_1">January, February, March </span>
<span id="tt_1" class="t s9_1">2: </span><span id="tu_1" class="t sa_1">April, May, June </span>
<span id="tv_1" class="t s9_1">3: </span><span id="tw_1" class="t sa_1">July, August, September </span>
<span id="tx_1" class="t s9_1">4: </span><span id="ty_1" class="t sa_1">October, November, December </span>
<span id="tz_1" class="t sa_1">Go to </span><span id="t10_1" class="t sb_1">www.irs.gov/Form941 </span><span id="t11_1" class="t sa_1">for </span>
<span id="t12_1" class="t sa_1">instructions and the latest information. </span>
<span id="t13_1" class="t sc_1">Read the separate instructions before you complete Form 941. Type or print within the boxes. </span>
<span id="t14_1" class="t sd_1">Part 1: </span>
<span id="t15_1" class="t se_1">Answer these questions for this quarter. </span>
<span id="t16_1" class="t sf_1">1 </span><span id="t17_1" class="t v1_1 sf_1">Number of employees who received wages, tips, or other compensation for the pay period </span>
<span id="t18_1" class="t v1_1 sf_1">including: </span><span id="t19_1" class="t v1_1 sg_1">Mar. 12 </span><span id="t1a_1" class="t v1_1 sf_1">(Quarter 1), </span><span id="t1b_1" class="t v1_1 sg_1">June 12 </span><span id="t1c_1" class="t v1_1 sf_1">(Quarter 2), </span><span id="t1d_1" class="t v1_1 sg_1">Sept. 12 </span><span id="t1e_1" class="t v1_1 sf_1">(Quarter 3), or </span><span id="t1f_1" class="t v1_1 sg_1">Dec. 12 </span><span id="t1g_1" class="t v1_1 sf_1">(Quarter 4) </span><span id="t1h_1" class="t sf_1">1 </span>
<span id="t1i_1" class="t sf_1">2 </span><span id="t1j_1" class="t sf_1">Wages, tips, and other compensation </span><span id="t1k_1" class="t sc_1">. </span><span id="t1l_1" class="t sc_1">. </span><span id="t1m_1" class="t sc_1">. </span><span id="t1n_1" class="t sc_1">. </span><span id="t1o_1" class="t sc_1">. </span><span id="t1p_1" class="t sc_1">. </span><span id="t1q_1" class="t sc_1">. </span><span id="t1r_1" class="t sc_1">. </span><span id="t1s_1" class="t sc_1">. </span><span id="t1t_1" class="t sc_1">. </span><span id="t1u_1" class="t sc_1">. </span><span id="t1v_1" class="t sc_1">. </span><span id="t1w_1" class="t sc_1">. </span><span id="t1x_1" class="t sc_1">. </span><span id="t1y_1" class="t sc_1">. </span><span id="t1z_1" class="t sc_1">. </span><span id="t20_1" class="t sc_1">. </span><span id="t21_1" class="t sf_1">2 </span><span id="t22_1" class="t sh_1">. </span>
<span id="t23_1" class="t sf_1">3 </span><span id="t24_1" class="t sf_1">Federal income tax withheld from wages, tips, and other compensation </span><span id="t25_1" class="t sc_1">. </span><span id="t26_1" class="t sc_1">. </span><span id="t27_1" class="t sc_1">. </span><span id="t28_1" class="t sc_1">. </span><span id="t29_1" class="t sc_1">. </span><span id="t2a_1" class="t sc_1">. </span><span id="t2b_1" class="t sf_1">3 </span><span id="t2c_1" class="t sh_1">. </span>
<span id="t2d_1" class="t sf_1">4 </span><span id="t2e_1" class="t sf_1">If no wages, tips, and other compensation are subject to social security or Medicare tax </span><span id="t2f_1" class="t sf_1">Check and go to line 6. </span>
<span id="t2g_1" class="t sf_1">Column 1 </span><span id="t2h_1" class="t sf_1">Column 2 </span>
<span id="t2i_1" class="t sf_1">5a </span><span id="t2j_1" class="t sf_1">Taxable social security wages* </span><span id="t2k_1" class="t sc_1">. </span><span id="t2l_1" class="t sc_1">. </span><span id="t2m_1" class="t sh_1">. </span><span id="t2n_1" class="t sc_1">× 0.124 = </span><span id="t2o_1" class="t sh_1">. </span>
<span id="t2p_1" class="t sf_1">5a </span><span id="t2q_1" class="t sf_1">(i) </span><span id="t2r_1" class="t sf_1">Qualified sick leave wages* </span><span id="t2s_1" class="t sc_1">. </span><span id="t2t_1" class="t sh_1">. </span><span id="t2u_1" class="t sc_1">× 0.062 = </span><span id="t2v_1" class="t sh_1">. </span>
<span id="t2w_1" class="t sf_1">5a </span><span id="t2x_1" class="t sf_1">(ii) </span><span id="t2y_1" class="t sf_1">Qualified family leave wages* </span><span id="t2z_1" class="t sc_1">. </span><span id="t30_1" class="t sh_1">. </span><span id="t31_1" class="t sc_1">× 0.062 = </span><span id="t32_1" class="t sh_1">. </span>
<span id="t33_1" class="t v2_1 s5_1">* Include taxable qualified sick and </span>
<span id="t34_1" class="t v2_1 s5_1">family leave wages paid in this </span>
<span id="t35_1" class="t v2_1 s5_1">quarter of 2023 for leave taken </span>
<span id="t36_1" class="t v2_1 s5_1">after March 31, 2021, and before </span>
<span id="t37_1" class="t v2_1 s5_1">October 1, 2021, on line 5a. Use </span>
<span id="t38_1" class="t v2_1 s5_1">lines 5a(i) and 5a(ii) </span><span id="t39_1" class="t v2_1 si_1">only </span><span id="t3a_1" class="t v2_1 s5_1">for taxable </span>
<span id="t3b_1" class="t v2_1 s5_1">qualified sick and family leave </span>
<span id="t3c_1" class="t v2_1 s5_1">wages paid in this quarter of 2023 </span>
<span id="t3d_1" class="t v2_1 s5_1">for leave taken after March 31, </span>
<span id="t3e_1" class="t v2_1 s5_1">2020, and before April 1, 2021. </span>
<span id="t3f_1" class="t sf_1">5b </span><span id="t3g_1" class="t sf_1">Taxable social security tips </span><span id="t3h_1" class="t sc_1">. </span><span id="t3i_1" class="t sc_1">. </span><span id="t3j_1" class="t sc_1">. </span><span id="t3k_1" class="t sh_1">. </span><span id="t3l_1" class="t sc_1">× 0.124 = </span><span id="t3m_1" class="t sh_1">. </span>
<span id="t3n_1" class="t sf_1">5c </span><span id="t3o_1" class="t sf_1">Taxable Medicare wages &amp; tips </span><span id="t3p_1" class="t sc_1">. </span><span id="t3q_1" class="t sc_1">. </span><span id="t3r_1" class="t sh_1">. </span><span id="t3s_1" class="t sc_1">× 0.029 = </span><span id="t3t_1" class="t sh_1">. </span>
<span id="t3u_1" class="t sf_1">5d </span><span id="t3v_1" class="t sf_1">Taxable wages &amp; tips subject to </span>
<span id="t3w_1" class="t sf_1">Additional Medicare Tax withholding </span>
<span id="t3x_1" class="t sh_1">. </span><span id="t3y_1" class="t sc_1">× 0.009 = </span><span id="t3z_1" class="t sh_1">. </span>
<span id="t40_1" class="t sf_1">5e </span><span id="t41_1" class="t v3_1 sf_1">Total social security and Medicare taxes. </span><span id="t42_1" class="t v3_1 sc_1">Add Column 2 from lines 5a, 5a(i), 5a(ii), 5b, 5c, and 5d </span><span id="t43_1" class="t sf_1">5e </span><span id="t44_1" class="t sh_1">. </span>
<span id="t45_1" class="t sf_1">5f </span><span id="t46_1" class="t sf_1">Section 3121(q) Notice and Demand—Tax due on unreported tips </span><span id="t47_1" class="t sc_1">(see instructions) </span><span id="t48_1" class="t sc_1">. </span><span id="t49_1" class="t sc_1">. </span><span id="t4a_1" class="t sf_1">5f </span><span id="t4b_1" class="t sh_1">. </span>
<span id="t4c_1" class="t sf_1">6 </span><span id="t4d_1" class="t sf_1">Total taxes before adjustments. </span><span id="t4e_1" class="t sc_1">Add lines 3, 5e, and 5f </span><span id="t4f_1" class="t sc_1">. </span><span id="t4g_1" class="t sc_1">. </span><span id="t4h_1" class="t sc_1">. </span><span id="t4i_1" class="t sc_1">. </span><span id="t4j_1" class="t sc_1">. </span><span id="t4k_1" class="t sc_1">. </span><span id="t4l_1" class="t sc_1">. </span><span id="t4m_1" class="t sc_1">. </span><span id="t4n_1" class="t sc_1">. </span><span id="t4o_1" class="t sc_1">. </span><span id="t4p_1" class="t sc_1">. </span><span id="t4q_1" class="t sc_1">. </span><span id="t4r_1" class="t sf_1">6 </span><span id="t4s_1" class="t sh_1">. </span>
<span id="t4t_1" class="t sf_1">7 </span><span id="t4u_1" class="t sf_1">Current quarter’s adjustment for fractions of cents </span><span id="t4v_1" class="t sc_1">. </span><span id="t4w_1" class="t sc_1">. </span><span id="t4x_1" class="t sc_1">. </span><span id="t4y_1" class="t sc_1">. </span><span id="t4z_1" class="t sc_1">. </span><span id="t50_1" class="t sc_1">. </span><span id="t51_1" class="t sc_1">. </span><span id="t52_1" class="t sc_1">. </span><span id="t53_1" class="t sc_1">. </span><span id="t54_1" class="t sc_1">. </span><span id="t55_1" class="t sc_1">. </span><span id="t56_1" class="t sc_1">. </span><span id="t57_1" class="t sc_1">. </span><span id="t58_1" class="t sf_1">7 </span><span id="t59_1" class="t sh_1">. </span>
<span id="t5a_1" class="t sf_1">8 </span><span id="t5b_1" class="t sf_1">Current quarter’s adjustment for sick pay </span><span id="t5c_1" class="t sc_1">. </span><span id="t5d_1" class="t sc_1">. </span><span id="t5e_1" class="t sc_1">. </span><span id="t5f_1" class="t sc_1">. </span><span id="t5g_1" class="t sc_1">. </span><span id="t5h_1" class="t sc_1">. </span><span id="t5i_1" class="t sc_1">. </span><span id="t5j_1" class="t sc_1">. </span><span id="t5k_1" class="t sc_1">. </span><span id="t5l_1" class="t sc_1">. </span><span id="t5m_1" class="t sc_1">. </span><span id="t5n_1" class="t sc_1">. </span><span id="t5o_1" class="t sc_1">. </span><span id="t5p_1" class="t sc_1">. </span><span id="t5q_1" class="t sc_1">. </span><span id="t5r_1" class="t sc_1">. </span><span id="t5s_1" class="t sf_1">8 </span><span id="t5t_1" class="t sh_1">. </span>
<span id="t5u_1" class="t sf_1">9 </span><span id="t5v_1" class="t sf_1">Current quarter’s adjustments for tips and group-term life insurance </span><span id="t5w_1" class="t sc_1">. </span><span id="t5x_1" class="t sc_1">. </span><span id="t5y_1" class="t sc_1">. </span><span id="t5z_1" class="t sc_1">. </span><span id="t60_1" class="t sc_1">. </span><span id="t61_1" class="t sc_1">. </span><span id="t62_1" class="t sc_1">. </span><span id="t63_1" class="t sf_1">9 </span><span id="t64_1" class="t sh_1">. </span>
<span id="t65_1" class="t sf_1">10 </span><span id="t66_1" class="t sf_1">Total taxes after adjustments. </span><span id="t67_1" class="t sc_1">Combine lines 6 through 9 </span><span id="t68_1" class="t sc_1">. </span><span id="t69_1" class="t sc_1">. </span><span id="t6a_1" class="t sc_1">. </span><span id="t6b_1" class="t sc_1">. </span><span id="t6c_1" class="t sc_1">. </span><span id="t6d_1" class="t sc_1">. </span><span id="t6e_1" class="t sc_1">. </span><span id="t6f_1" class="t sc_1">. </span><span id="t6g_1" class="t sc_1">. </span><span id="t6h_1" class="t sc_1">. </span><span id="t6i_1" class="t sc_1">. </span><span id="t6j_1" class="t sf_1">10 </span><span id="t6k_1" class="t sh_1">. </span>
<span id="t6l_1" class="t sf_1">11a </span><span id="t6m_1" class="t v4_1 sf_1">Qualified small business payroll tax credit for increasing research activities. </span><span id="t6n_1" class="t v4_1 sc_1">Attach Form 8974 </span><span id="t6o_1" class="t v5_1 sf_1">11a </span><span id="t6p_1" class="t sh_1">. </span>
<span id="t6q_1" class="t sf_1">11b </span><span id="t6r_1" class="t v6_1 sf_1">Nonrefundable portion of credit for qualified sick and family leave wages for leave taken </span>
<span id="t6s_1" class="t v6_1 sf_1">before April 1, 2021 </span><span id="t6t_1" class="t sc_1">. </span><span id="t6u_1" class="t sc_1">. </span><span id="t6v_1" class="t sc_1">. </span><span id="t6w_1" class="t sc_1">. </span><span id="t6x_1" class="t sc_1">. </span><span id="t6y_1" class="t sc_1">. </span><span id="t6z_1" class="t sc_1">. </span><span id="t70_1" class="t sc_1">. </span><span id="t71_1" class="t sc_1">. </span><span id="t72_1" class="t sc_1">. </span><span id="t73_1" class="t sc_1">. </span><span id="t74_1" class="t sc_1">. </span><span id="t75_1" class="t sc_1">. </span><span id="t76_1" class="t sc_1">. </span><span id="t77_1" class="t sc_1">. </span><span id="t78_1" class="t sc_1">. </span><span id="t79_1" class="t sc_1">. </span><span id="t7a_1" class="t sc_1">. </span><span id="t7b_1" class="t sc_1">. </span><span id="t7c_1" class="t sc_1">. </span><span id="t7d_1" class="t sc_1">. </span><span id="t7e_1" class="t sc_1">. </span><span id="t7f_1" class="t sc_1">. </span><span id="t7g_1" class="t v0_1 sf_1">11b </span>
<span id="t7h_1" class="t sh_1">. </span>
<span id="t7i_1" class="t sf_1">11c </span><span id="t7j_1" class="t sf_1">Reserved for future use </span><span id="t7k_1" class="t sc_1">. </span><span id="t7l_1" class="t sc_1">. </span><span id="t7m_1" class="t sc_1">. </span><span id="t7n_1" class="t sc_1">. </span><span id="t7o_1" class="t sc_1">. </span><span id="t7p_1" class="t sc_1">. </span><span id="t7q_1" class="t sc_1">. </span><span id="t7r_1" class="t sc_1">. </span><span id="t7s_1" class="t sc_1">. </span><span id="t7t_1" class="t sc_1">. </span><span id="t7u_1" class="t sc_1">. </span><span id="t7v_1" class="t sc_1">. </span><span id="t7w_1" class="t sc_1">. </span><span id="t7x_1" class="t sc_1">. </span><span id="t7y_1" class="t sc_1">. </span><span id="t7z_1" class="t sc_1">. </span><span id="t80_1" class="t sc_1">. </span><span id="t81_1" class="t sc_1">. </span><span id="t82_1" class="t sc_1">. </span><span id="t83_1" class="t sc_1">. </span><span id="t84_1" class="t sc_1">. </span><span id="t85_1" class="t sc_1">. </span><span id="t86_1" class="t v0_1 sf_1">11c </span><span id="t87_1" class="t sh_1">. </span>
<span id="t88_1" class="t sf_1">You MUST complete all three pages of Form 941 and SIGN it. </span>
<span id="t89_1" class="t s9_1">For Privacy Act and Paperwork Reduction Act Notice, see the back of the Payment Voucher. </span><span id="t8a_1" class="t s0_1">Cat. No. 17001Z </span><span id="t8b_1" class="t s0_1">Form </span><span id="t8c_1" class="t sj_1">941 </span><span id="t8d_1" class="t s0_1">(Rev. 3-2023) </span></div>
<!-- End text definitions -->


<!-- Begin Form Data -->
<input id="form1_1" type="text" tabindex="1" maxlength="2" value="" data-objref="469 0 R" data-field-name="topmostSubform[0].Page1[0].Header[0].EntityArea[0].f1_1[0]" style="border: 1px solid #000;"/>


<input id="form2_1" type="text" tabindex="2" maxlength="7" value="" data-objref="470 0 R" data-field-name="topmostSubform[0].Page1[0].Header[0].EntityArea[0].f1_2[0]" style="border: 1px solid #000;"/>

<input id="form3_1" type="checkbox" tabindex="12" value="1" data-objref="465 0 R" data-field-name="topmostSubform[0].Page1[0].Header[0].ReportForQuarter[0].c1_1[0]" imageName="1/form/465 0 R" images="110100"/>
<input id="form4_1" type="text" tabindex="3" value="" data-objref="471 0 R" data-field-name="topmostSubform[0].Page1[0].Header[0].EntityArea[0].f1_3[0]"/>
<input id="form5_1" type="checkbox" tabindex="13" value="2" data-objref="466 0 R" data-field-name="topmostSubform[0].Page1[0].Header[0].ReportForQuarter[0].c1_1[1]" imageName="1/form/466 0 R" images="110100"/>
<input id="form6_1" type="text" tabindex="4" value="" data-objref="472 0 R" data-field-name="topmostSubform[0].Page1[0].Header[0].EntityArea[0].f1_4[0]"/>
<input id="form7_1" type="checkbox" tabindex="14" value="3" data-objref="467 0 R" data-field-name="topmostSubform[0].Page1[0].Header[0].ReportForQuarter[0].c1_1[2]" imageName="1/form/467 0 R" images="110100"/>
<input id="form8_1" type="checkbox" tabindex="15" value="4" data-objref="468 0 R" data-field-name="topmostSubform[0].Page1[0].Header[0].ReportForQuarter[0].c1_1[3]" imageName="1/form/468 0 R" images="110100"/>
<input id="form9_1" type="text" tabindex="5" value="" data-objref="473 0 R" data-field-name="topmostSubform[0].Page1[0].Header[0].EntityArea[0].f1_5[0]"/>
<input id="form10_1" type="text" tabindex="6" value="" data-objref="474 0 R" data-field-name="topmostSubform[0].Page1[0].Header[0].EntityArea[0].f1_6[0]"/>
<input id="form11_1" type="text" tabindex="7" maxlength="2" value="" data-objref="475 0 R" data-field-name="topmostSubform[0].Page1[0].Header[0].EntityArea[0].f1_7[0]"/>
<input id="form12_1" type="text" tabindex="8" maxlength="10" value="" data-objref="476 0 R" data-field-name="topmostSubform[0].Page1[0].Header[0].EntityArea[0].f1_8[0]"/>
<input id="form13_1" type="text" tabindex="9" value="" data-objref="477 0 R" data-field-name="topmostSubform[0].Page1[0].Header[0].EntityArea[0].f1_9[0]"/>
<input id="form14_1" type="text" tabindex="10" value="" data-objref="478 0 R" data-field-name="topmostSubform[0].Page1[0].Header[0].EntityArea[0].f1_10[0]"/>
<input id="form15_1" type="text" tabindex="11" value="" data-objref="479 0 R" data-field-name="topmostSubform[0].Page1[0].Header[0].EntityArea[0].f1_11[0]"/>
<input id="form16_1" type="text" tabindex="16" value="" data-objref="413 0 R" data-field-name="topmostSubform[0].Page1[0].f1_12[0]"/>
<input id="form17_1" type="text" tabindex="17" value="" data-objref="414 0 R" data-field-name="topmostSubform[0].Page1[0].f1_13[0]"/>
<input id="form18_1" type="text" tabindex="18" maxlength="3" value="" data-objref="415 0 R" data-field-name="topmostSubform[0].Page1[0].f1_14[0]"/>
<input id="form19_1" type="text" tabindex="19" value="" data-objref="416 0 R" data-field-name="topmostSubform[0].Page1[0].f1_15[0]"/>
<input id="form20_1" type="text" tabindex="20" maxlength="3" value="" data-objref="417 0 R" data-field-name="topmostSubform[0].Page1[0].f1_16[0]"/>
<input id="form21_1" type="checkbox" tabindex="21" value="1" data-objref="418 0 R" data-field-name="topmostSubform[0].Page1[0].c1_3[0]" imageName="1/form/418 0 R" images="110100"/>
<input id="form22_1" type="text" tabindex="22" value="" data-objref="419 0 R" data-field-name="topmostSubform[0].Page1[0].f1_17[0]"/>
<input id="form23_1" type="text" tabindex="23" maxlength="3" value="" data-objref="420 0 R" data-field-name="topmostSubform[0].Page1[0].f1_18[0]"/>
<input id="form24_1" type="text" tabindex="24" value="" data-objref="421 0 R" data-field-name="topmostSubform[0].Page1[0].f1_19[0]"/>
<input id="form25_1" type="text" tabindex="25" maxlength="3" value="" data-objref="422 0 R" data-field-name="topmostSubform[0].Page1[0].f1_20[0]"/>
<input id="form26_1" type="text" tabindex="26" value="" data-objref="423 0 R" data-field-name="topmostSubform[0].Page1[0].f1_21[0]"/>
<input id="form27_1" type="text" tabindex="27" maxlength="3" value="" data-objref="424 0 R" data-field-name="topmostSubform[0].Page1[0].f1_22[0]"/>
<input id="form28_1" type="text" tabindex="28" value="" data-objref="425 0 R" data-field-name="topmostSubform[0].Page1[0].f1_23[0]"/>
<input id="form29_1" type="text" tabindex="29" maxlength="3" value="" data-objref="426 0 R" data-field-name="topmostSubform[0].Page1[0].f1_24[0]"/>
<input id="form30_1" type="text" tabindex="30" value="" data-objref="427 0 R" data-field-name="topmostSubform[0].Page1[0].f1_25[0]"/>
<input id="form31_1" type="text" tabindex="31" maxlength="3" value="" data-objref="428 0 R" data-field-name="topmostSubform[0].Page1[0].f1_26[0]"/>
<input id="form32_1" type="text" tabindex="32" value="" data-objref="429 0 R" data-field-name="topmostSubform[0].Page1[0].f1_27[0]"/>
<input id="form33_1" type="text" tabindex="33" maxlength="3" value="" data-objref="430 0 R" data-field-name="topmostSubform[0].Page1[0].f1_28[0]"/>
<input id="form34_1" type="text" tabindex="34" value="" data-objref="431 0 R" data-field-name="topmostSubform[0].Page1[0].f1_29[0]"/>
<input id="form35_1" type="text" tabindex="35" maxlength="3" value="" data-objref="432 0 R" data-field-name="topmostSubform[0].Page1[0].f1_30[0]"/>
<input id="form36_1" type="text" tabindex="36" value="" data-objref="433 0 R" data-field-name="topmostSubform[0].Page1[0].f1_31[0]"/>
<input id="form37_1" type="text" tabindex="37" maxlength="3" value="" data-objref="434 0 R" data-field-name="topmostSubform[0].Page1[0].f1_32[0]"/>
<input id="form38_1" type="text" tabindex="38" value="" data-objref="435 0 R" data-field-name="topmostSubform[0].Page1[0].f1_33[0]"/>
<input id="form39_1" type="text" tabindex="39" maxlength="3" value="" data-objref="436 0 R" data-field-name="topmostSubform[0].Page1[0].f1_34[0]"/>
<input id="form40_1" type="text" tabindex="40" value="" data-objref="437 0 R" data-field-name="topmostSubform[0].Page1[0].f1_35[0]"/>
<input id="form41_1" type="text" tabindex="41" maxlength="3" value="" data-objref="438 0 R" data-field-name="topmostSubform[0].Page1[0].f1_36[0]"/>
<input id="form42_1" type="text" tabindex="42" value="" data-objref="439 0 R" data-field-name="topmostSubform[0].Page1[0].f1_37[0]"/>
<input id="form43_1" type="text" tabindex="43" maxlength="3" value="" data-objref="440 0 R" data-field-name="topmostSubform[0].Page1[0].f1_38[0]"/>
<input id="form44_1" type="text" tabindex="44" value="" data-objref="441 0 R" data-field-name="topmostSubform[0].Page1[0].f1_39[0]"/>
<input id="form45_1" type="text" tabindex="45" maxlength="3" value="" data-objref="442 0 R" data-field-name="topmostSubform[0].Page1[0].f1_40[0]"/>
<input id="form46_1" type="text" tabindex="46" value="" data-objref="443 0 R" data-field-name="topmostSubform[0].Page1[0].f1_41[0]"/>
<input id="form47_1" type="text" tabindex="47" maxlength="3" value="" data-objref="444 0 R" data-field-name="topmostSubform[0].Page1[0].f1_42[0]"/>
<input id="form48_1" type="text" tabindex="48" value="" data-objref="445 0 R" data-field-name="topmostSubform[0].Page1[0].f1_43[0]"/>
<input id="form49_1" type="text" tabindex="49" maxlength="3" value="" data-objref="446 0 R" data-field-name="topmostSubform[0].Page1[0].f1_44[0]"/>
<input id="form50_1" type="text" tabindex="50" value="" data-objref="447 0 R" data-field-name="topmostSubform[0].Page1[0].f1_45[0]"/>
<input id="form51_1" type="text" tabindex="51" maxlength="3" value="" data-objref="448 0 R" data-field-name="topmostSubform[0].Page1[0].f1_46[0]"/>
<input id="form52_1" type="text" tabindex="52" value="" data-objref="449 0 R" data-field-name="topmostSubform[0].Page1[0].f1_47[0]"/>
<input id="form53_1" type="text" tabindex="53" maxlength="3" value="" data-objref="450 0 R" data-field-name="topmostSubform[0].Page1[0].f1_48[0]"/>
<input id="form54_1" type="text" tabindex="54" value="" data-objref="451 0 R" data-field-name="topmostSubform[0].Page1[0].f1_49[0]"/>
<input id="form55_1" type="text" tabindex="55" maxlength="3" value="" data-objref="452 0 R" data-field-name="topmostSubform[0].Page1[0].f1_50[0]"/>
<input id="form56_1" type="text" tabindex="56" value="" data-objref="453 0 R" data-field-name="topmostSubform[0].Page1[0].f1_51[0]"/>
<input id="form57_1" type="text" tabindex="57" maxlength="3" value="" data-objref="454 0 R" data-field-name="topmostSubform[0].Page1[0].f1_52[0]"/>
<input id="form58_1" type="text" tabindex="58" value="" data-objref="455 0 R" data-field-name="topmostSubform[0].Page1[0].f1_53[0]"/>
<input id="form59_1" type="text" tabindex="59" maxlength="3" value="" data-objref="456 0 R" data-field-name="topmostSubform[0].Page1[0].f1_54[0]"/>
<input id="form60_1" type="text" tabindex="60" value="" data-objref="457 0 R" data-field-name="topmostSubform[0].Page1[0].f1_55[0]"/>
<input id="form61_1" type="text" tabindex="61" maxlength="3" value="" data-objref="458 0 R" data-field-name="topmostSubform[0].Page1[0].f1_56[0]"/>
<input id="form62_1" type="text" tabindex="62" value="" data-objref="459 0 R" data-field-name="topmostSubform[0].Page1[0].f1_57[0]"/>
<input id="form63_1" type="text" tabindex="63" maxlength="3" value="" data-objref="460 0 R" data-field-name="topmostSubform[0].Page1[0].f1_58[0]"/>
<input id="form64_1" type="button" tabindex="64" disabled="disabled" data-objref="461 0 R" data-field-name="topmostSubform[0].Page1[0].f1_59[0]"/>
<input id="form65_1" type="button" tabindex="65" maxlength="3" disabled="disabled" data-objref="462 0 R" data-field-name="topmostSubform[0].Page1[0].f1_60[0]"/>

<!-- End Form Data -->

</div>

</div>
</div>
<div id="page2" style="width: 934px; height: 1209px; margin-top:20px;" class="page">
<div class="page-inner" style="width: 934px; height: 1209px;">

<div id="p2" class="pageArea" style="overflow: hidden; position: relative; width: 934px; height: 1209px; margin-top:auto; margin-left:auto; margin-right:auto; background-color: white;">

<!-- Begin shared CSS values -->
<style class="shared-css" type="text/css" >
.t {
   transform-origin: bottom left;
   z-index: 2;
   position: absolute;
   white-space: pre;
   overflow: visible;
   line-height: 1.5;
}
.text-container {
   white-space: pre;
}
@supports (-webkit-touch-callout: none) {
   .text-container {
      white-space: normal;
   }
}
</style>
<!-- End shared CSS values -->


<!-- Begin inline CSS -->
<style type="text/css" >

#t1_2{left:814px;bottom:1134px;letter-spacing:0.2px;}
#t2_2{left:55px;bottom:1120px;letter-spacing:-0.17px;}
#t3_2{left:88px;bottom:1120px;letter-spacing:-0.14px;}
#t4_2{left:611px;bottom:1120px;letter-spacing:-0.15px;}
#t5_2{left:661px;bottom:1096px;}
#t6_2{left:60px;bottom:1078px;letter-spacing:-0.11px;}
#t7_2{left:122px;bottom:1080px;letter-spacing:-0.12px;}
#t8_2{left:389px;bottom:1080px;letter-spacing:-0.11px;}
#t9_2{left:63px;bottom:1051px;letter-spacing:-0.01px;}
#ta_2{left:99px;bottom:1051px;letter-spacing:-0.01px;word-spacing:0.48px;}
#tb_2{left:99px;bottom:1035px;letter-spacing:-0.01px;}
#tc_2{left:422px;bottom:1035px;}
#td_2{left:440px;bottom:1035px;}
#te_2{left:458px;bottom:1035px;}
#tf_2{left:477px;bottom:1035px;}
#tg_2{left:495px;bottom:1035px;}
#th_2{left:513px;bottom:1035px;}
#ti_2{left:532px;bottom:1035px;}
#tj_2{left:550px;bottom:1035px;}
#tk_2{left:568px;bottom:1035px;}
#tl_2{left:587px;bottom:1035px;}
#tm_2{left:605px;bottom:1035px;}
#tn_2{left:623px;bottom:1035px;}
#to_2{left:642px;bottom:1035px;}
#tp_2{left:659px;bottom:1034px;letter-spacing:-0.01px;}
#tq_2{left:839px;bottom:1032px;}
#tr_2{left:63px;bottom:991px;letter-spacing:-0.01px;}
#ts_2{left:99px;bottom:991px;letter-spacing:-0.01px;}
#tt_2{left:257px;bottom:991px;}
#tu_2{left:275px;bottom:991px;}
#tv_2{left:293px;bottom:991px;}
#tw_2{left:312px;bottom:991px;}
#tx_2{left:330px;bottom:991px;}
#ty_2{left:348px;bottom:991px;}
#tz_2{left:367px;bottom:991px;}
#t10_2{left:385px;bottom:991px;}
#t11_2{left:403px;bottom:991px;}
#t12_2{left:422px;bottom:991px;}
#t13_2{left:440px;bottom:991px;}
#t14_2{left:458px;bottom:991px;}
#t15_2{left:477px;bottom:991px;}
#t16_2{left:495px;bottom:991px;}
#t17_2{left:513px;bottom:991px;}
#t18_2{left:532px;bottom:991px;}
#t19_2{left:550px;bottom:991px;}
#t1a_2{left:568px;bottom:991px;}
#t1b_2{left:587px;bottom:991px;}
#t1c_2{left:605px;bottom:991px;}
#t1d_2{left:623px;bottom:991px;}
#t1e_2{left:642px;bottom:991px;}
#t1f_2{left:659px;bottom:991px;letter-spacing:-0.01px;}
#t1g_2{left:839px;bottom:986px;}
#t1h_2{left:63px;bottom:955px;letter-spacing:-0.01px;}
#t1i_2{left:99px;bottom:955px;letter-spacing:-0.01px;}
#t1j_2{left:257px;bottom:955px;}
#t1k_2{left:275px;bottom:955px;}
#t1l_2{left:293px;bottom:955px;}
#t1m_2{left:312px;bottom:955px;}
#t1n_2{left:330px;bottom:955px;}
#t1o_2{left:348px;bottom:955px;}
#t1p_2{left:367px;bottom:955px;}
#t1q_2{left:385px;bottom:955px;}
#t1r_2{left:403px;bottom:955px;}
#t1s_2{left:422px;bottom:955px;}
#t1t_2{left:440px;bottom:955px;}
#t1u_2{left:458px;bottom:955px;}
#t1v_2{left:477px;bottom:955px;}
#t1w_2{left:63px;bottom:918px;letter-spacing:-0.01px;}
#t1x_2{left:99px;bottom:918px;letter-spacing:-0.01px;}
#t1y_2{left:277px;bottom:918px;letter-spacing:-0.01px;}
#t1z_2{left:458px;bottom:918px;}
#t20_2{left:477px;bottom:918px;}
#t21_2{left:495px;bottom:918px;}
#t22_2{left:513px;bottom:918px;}
#t23_2{left:532px;bottom:918px;}
#t24_2{left:550px;bottom:918px;}
#t25_2{left:568px;bottom:918px;}
#t26_2{left:587px;bottom:918px;}
#t27_2{left:605px;bottom:918px;}
#t28_2{left:623px;bottom:918px;}
#t29_2{left:642px;bottom:918px;}
#t2a_2{left:659px;bottom:918px;letter-spacing:-0.01px;}
#t2b_2{left:839px;bottom:913px;}
#t2c_2{left:63px;bottom:881px;letter-spacing:-0.01px;}
#t2d_2{left:99px;bottom:881px;letter-spacing:-0.01px;}
#t2e_2{left:454px;bottom:881px;letter-spacing:-0.01px;}
#t2f_2{left:642px;bottom:881px;}
#t2g_2{left:664px;bottom:881px;letter-spacing:-0.01px;}
#t2h_2{left:839px;bottom:876px;}
#t2i_2{left:63px;bottom:849px;letter-spacing:-0.01px;}
#t2j_2{left:99px;bottom:850px;letter-spacing:-0.01px;word-spacing:7.06px;}
#t2k_2{left:99px;bottom:834px;letter-spacing:-0.01px;}
#t2l_2{left:659px;bottom:833px;letter-spacing:-0.01px;}
#t2m_2{left:839px;bottom:830px;}
#t2n_2{left:63px;bottom:799px;letter-spacing:-0.01px;}
#t2o_2{left:99px;bottom:799px;letter-spacing:-0.01px;}
#t2p_2{left:257px;bottom:799px;}
#t2q_2{left:275px;bottom:799px;}
#t2r_2{left:293px;bottom:799px;}
#t2s_2{left:312px;bottom:799px;}
#t2t_2{left:330px;bottom:799px;}
#t2u_2{left:348px;bottom:799px;}
#t2v_2{left:367px;bottom:799px;}
#t2w_2{left:385px;bottom:799px;}
#t2x_2{left:403px;bottom:799px;}
#t2y_2{left:422px;bottom:799px;}
#t2z_2{left:440px;bottom:799px;}
#t30_2{left:458px;bottom:799px;}
#t31_2{left:477px;bottom:799px;}
#t32_2{left:495px;bottom:799px;}
#t33_2{left:513px;bottom:799px;}
#t34_2{left:532px;bottom:799px;}
#t35_2{left:550px;bottom:799px;}
#t36_2{left:568px;bottom:799px;}
#t37_2{left:587px;bottom:799px;}
#t38_2{left:605px;bottom:799px;}
#t39_2{left:623px;bottom:799px;}
#t3a_2{left:642px;bottom:799px;}
#t3b_2{left:659px;bottom:799px;letter-spacing:-0.01px;}
#t3c_2{left:839px;bottom:794px;}
#t3d_2{left:63px;bottom:767px;letter-spacing:-0.01px;}
#t3e_2{left:99px;bottom:767px;letter-spacing:-0.01px;word-spacing:2.09px;}
#t3f_2{left:99px;bottom:751px;letter-spacing:-0.01px;}
#t3g_2{left:238px;bottom:751px;}
#t3h_2{left:257px;bottom:751px;}
#t3i_2{left:275px;bottom:751px;}
#t3j_2{left:293px;bottom:751px;}
#t3k_2{left:312px;bottom:751px;}
#t3l_2{left:330px;bottom:751px;}
#t3m_2{left:348px;bottom:751px;}
#t3n_2{left:367px;bottom:751px;}
#t3o_2{left:385px;bottom:751px;}
#t3p_2{left:403px;bottom:751px;}
#t3q_2{left:422px;bottom:751px;}
#t3r_2{left:440px;bottom:751px;}
#t3s_2{left:458px;bottom:751px;}
#t3t_2{left:477px;bottom:751px;}
#t3u_2{left:495px;bottom:751px;}
#t3v_2{left:513px;bottom:751px;}
#t3w_2{left:532px;bottom:751px;}
#t3x_2{left:550px;bottom:751px;}
#t3y_2{left:568px;bottom:751px;}
#t3z_2{left:587px;bottom:751px;}
#t40_2{left:605px;bottom:751px;}
#t41_2{left:623px;bottom:751px;}
#t42_2{left:642px;bottom:751px;}
#t43_2{left:659px;bottom:750px;letter-spacing:-0.01px;}
#t44_2{left:839px;bottom:748px;}
#t45_2{left:63px;bottom:716px;letter-spacing:-0.01px;}
#t46_2{left:99px;bottom:716px;letter-spacing:-0.01px;}
#t47_2{left:257px;bottom:716px;}
#t48_2{left:275px;bottom:716px;}
#t49_2{left:293px;bottom:716px;}
#t4a_2{left:312px;bottom:716px;}
#t4b_2{left:330px;bottom:716px;}
#t4c_2{left:348px;bottom:716px;}
#t4d_2{left:367px;bottom:716px;}
#t4e_2{left:385px;bottom:716px;}
#t4f_2{left:403px;bottom:716px;}
#t4g_2{left:422px;bottom:716px;}
#t4h_2{left:440px;bottom:716px;}
#t4i_2{left:458px;bottom:716px;}
#t4j_2{left:477px;bottom:716px;}
#t4k_2{left:495px;bottom:716px;}
#t4l_2{left:513px;bottom:716px;}
#t4m_2{left:532px;bottom:716px;}
#t4n_2{left:550px;bottom:716px;}
#t4o_2{left:568px;bottom:716px;}
#t4p_2{left:587px;bottom:716px;}
#t4q_2{left:605px;bottom:716px;}
#t4r_2{left:623px;bottom:716px;}
#t4s_2{left:642px;bottom:716px;}
#t4t_2{left:659px;bottom:716px;letter-spacing:-0.01px;}
#t4u_2{left:839px;bottom:711px;}
#t4v_2{left:63px;bottom:684px;letter-spacing:-0.01px;}
#t4w_2{left:99px;bottom:685px;letter-spacing:-0.01px;word-spacing:2.09px;}
#t4x_2{left:99px;bottom:669px;letter-spacing:-0.01px;}
#t4y_2{left:403px;bottom:669px;}
#t4z_2{left:422px;bottom:669px;}
#t50_2{left:440px;bottom:669px;}
#t51_2{left:458px;bottom:669px;}
#t52_2{left:477px;bottom:669px;}
#t53_2{left:495px;bottom:669px;}
#t54_2{left:513px;bottom:669px;}
#t55_2{left:532px;bottom:669px;}
#t56_2{left:550px;bottom:669px;}
#t57_2{left:568px;bottom:669px;}
#t58_2{left:587px;bottom:669px;}
#t59_2{left:605px;bottom:669px;}
#t5a_2{left:623px;bottom:669px;}
#t5b_2{left:642px;bottom:669px;}
#t5c_2{left:659px;bottom:668px;letter-spacing:-0.01px;}
#t5d_2{left:839px;bottom:665px;}
#t5e_2{left:63px;bottom:625px;letter-spacing:-0.01px;}
#t5f_2{left:99px;bottom:625px;letter-spacing:-0.01px;}
#t5g_2{left:257px;bottom:625px;}
#t5h_2{left:275px;bottom:625px;}
#t5i_2{left:293px;bottom:625px;}
#t5j_2{left:312px;bottom:625px;}
#t5k_2{left:330px;bottom:625px;}
#t5l_2{left:348px;bottom:625px;}
#t5m_2{left:367px;bottom:625px;}
#t5n_2{left:385px;bottom:625px;}
#t5o_2{left:403px;bottom:625px;}
#t5p_2{left:422px;bottom:625px;}
#t5q_2{left:440px;bottom:625px;}
#t5r_2{left:458px;bottom:625px;}
#t5s_2{left:477px;bottom:625px;}
#t5t_2{left:495px;bottom:625px;}
#t5u_2{left:513px;bottom:625px;}
#t5v_2{left:532px;bottom:625px;}
#t5w_2{left:550px;bottom:625px;}
#t5x_2{left:568px;bottom:625px;}
#t5y_2{left:587px;bottom:625px;}
#t5z_2{left:605px;bottom:625px;}
#t60_2{left:623px;bottom:625px;}
#t61_2{left:642px;bottom:625px;}
#t62_2{left:662px;bottom:626px;letter-spacing:-0.01px;}
#t63_2{left:839px;bottom:620px;}
#t64_2{left:63px;bottom:588px;letter-spacing:-0.01px;}
#t65_2{left:99px;bottom:588px;letter-spacing:-0.01px;}
#t66_2{left:337px;bottom:588px;letter-spacing:-0.01px;}
#t67_2{left:513px;bottom:588px;}
#t68_2{left:532px;bottom:588px;}
#t69_2{left:550px;bottom:588px;}
#t6a_2{left:568px;bottom:588px;}
#t6b_2{left:587px;bottom:588px;}
#t6c_2{left:605px;bottom:588px;}
#t6d_2{left:623px;bottom:588px;}
#t6e_2{left:642px;bottom:588px;}
#t6f_2{left:659px;bottom:588px;letter-spacing:-0.01px;}
#t6g_2{left:839px;bottom:583px;}
#t6h_2{left:63px;bottom:551px;letter-spacing:-0.01px;}
#t6i_2{left:99px;bottom:551px;letter-spacing:-0.01px;}
#t6j_2{left:257px;bottom:551px;}
#t6k_2{left:275px;bottom:551px;}
#t6l_2{left:293px;bottom:551px;}
#t6m_2{left:312px;bottom:551px;}
#t6n_2{left:330px;bottom:551px;}
#t6o_2{left:348px;bottom:551px;}
#t6p_2{left:367px;bottom:551px;}
#t6q_2{left:385px;bottom:551px;}
#t6r_2{left:403px;bottom:551px;}
#t6s_2{left:422px;bottom:551px;}
#t6t_2{left:440px;bottom:551px;}
#t6u_2{left:458px;bottom:551px;}
#t6v_2{left:477px;bottom:551px;}
#t6w_2{left:495px;bottom:551px;}
#t6x_2{left:513px;bottom:551px;}
#t6y_2{left:532px;bottom:551px;}
#t6z_2{left:550px;bottom:551px;}
#t70_2{left:568px;bottom:551px;}
#t71_2{left:587px;bottom:551px;}
#t72_2{left:605px;bottom:551px;}
#t73_2{left:623px;bottom:551px;}
#t74_2{left:642px;bottom:551px;}
#t75_2{left:659px;bottom:551px;letter-spacing:-0.01px;}
#t76_2{left:839px;bottom:546px;}
#t77_2{left:63px;bottom:515px;letter-spacing:-0.01px;}
#t78_2{left:99px;bottom:515px;letter-spacing:-0.01px;}
#t79_2{left:257px;bottom:515px;}
#t7a_2{left:275px;bottom:515px;}
#t7b_2{left:293px;bottom:515px;}
#t7c_2{left:312px;bottom:515px;}
#t7d_2{left:330px;bottom:515px;}
#t7e_2{left:348px;bottom:515px;}
#t7f_2{left:367px;bottom:515px;}
#t7g_2{left:385px;bottom:515px;}
#t7h_2{left:403px;bottom:515px;}
#t7i_2{left:422px;bottom:515px;}
#t7j_2{left:440px;bottom:515px;}
#t7k_2{left:458px;bottom:515px;}
#t7l_2{left:477px;bottom:515px;}
#t7m_2{left:495px;bottom:515px;}
#t7n_2{left:513px;bottom:515px;}
#t7o_2{left:532px;bottom:515px;}
#t7p_2{left:550px;bottom:515px;}
#t7q_2{left:568px;bottom:515px;}
#t7r_2{left:587px;bottom:515px;}
#t7s_2{left:605px;bottom:515px;}
#t7t_2{left:623px;bottom:515px;}
#t7u_2{left:642px;bottom:515px;}
#t7v_2{left:663px;bottom:515px;letter-spacing:-0.01px;}
#t7w_2{left:839px;bottom:510px;}
#t7x_2{left:63px;bottom:478px;letter-spacing:-0.01px;}
#t7y_2{left:99px;bottom:478px;letter-spacing:-0.01px;}
#t7z_2{left:183px;bottom:478px;letter-spacing:-0.01px;}
#t80_2{left:605px;bottom:478px;}
#t81_2{left:623px;bottom:478px;}
#t82_2{left:642px;bottom:478px;}
#t83_2{left:664px;bottom:478px;letter-spacing:-0.01px;}
#t84_2{left:839px;bottom:473px;}
#t85_2{left:63px;bottom:441px;letter-spacing:-0.01px;}
#t86_2{left:99px;bottom:441px;letter-spacing:-0.01px;}
#t87_2{left:182px;bottom:441px;letter-spacing:-0.01px;}
#t88_2{left:564px;bottom:436px;}
#t89_2{left:608px;bottom:441px;letter-spacing:-0.01px;}
#t8a_2{left:704px;bottom:442px;letter-spacing:-0.03px;}
#t8b_2{left:814px;bottom:442px;letter-spacing:-0.03px;}
#t8c_2{left:60px;bottom:409px;letter-spacing:-0.11px;}
#t8d_2{left:122px;bottom:409px;letter-spacing:-0.11px;}
#t8e_2{left:55px;bottom:386px;letter-spacing:-0.01px;}
#t8f_2{left:63px;bottom:354px;letter-spacing:-0.01px;}
#t8g_2{left:88px;bottom:354px;letter-spacing:-0.01px;}
#t8h_2{left:198px;bottom:359px;letter-spacing:-0.01px;word-spacing:0.85px;}
#t8i_2{left:198px;bottom:345px;letter-spacing:-0.01px;word-spacing:0.86px;}
#t8j_2{left:744px;bottom:345px;letter-spacing:-0.01px;word-spacing:0.86px;}
#t8k_2{left:198px;bottom:332px;letter-spacing:-0.01px;word-spacing:1.69px;}
#t8l_2{left:198px;bottom:319px;letter-spacing:-0.01px;word-spacing:3.01px;}
#t8m_2{left:198px;bottom:305px;letter-spacing:-0.01px;}
#t8n_2{left:198px;bottom:282px;letter-spacing:-0.01px;word-spacing:0.87px;}
#t8o_2{left:591px;bottom:282px;letter-spacing:-0.01px;word-spacing:0.87px;}
#t8p_2{left:198px;bottom:265px;letter-spacing:-0.01px;}
#t8q_2{left:198px;bottom:231px;letter-spacing:-0.01px;}
#t8r_2{left:286px;bottom:231px;letter-spacing:-0.01px;}
#t8s_2{left:506px;bottom:225px;}
#t8t_2{left:286px;bottom:198px;letter-spacing:-0.01px;}
#t8u_2{left:506px;bottom:193px;}
#t8v_2{left:286px;bottom:165px;letter-spacing:-0.01px;}
#t8w_2{left:506px;bottom:160px;}
#t8x_2{left:187px;bottom:132px;letter-spacing:-0.01px;}
#t8y_2{left:506px;bottom:127px;}
#t8z_2{left:561px;bottom:132px;letter-spacing:-0.01px;}
#t90_2{left:198px;bottom:108px;letter-spacing:-0.01px;word-spacing:0.7px;}
#t91_2{left:648px;bottom:108px;letter-spacing:-0.01px;}
#t92_2{left:708px;bottom:108px;letter-spacing:-0.01px;word-spacing:0.7px;}
#t93_2{left:198px;bottom:91px;letter-spacing:-0.01px;}
#t94_2{left:77px;bottom:61px;letter-spacing:-0.01px;}
#t95_2{left:55px;bottom:44px;letter-spacing:-0.14px;}
#t96_2{left:83px;bottom:42px;}
#t97_2{left:760px;bottom:44px;letter-spacing:-0.14px;}
#t98_2{left:788px;bottom:42px;letter-spacing:0.15px;}
#t99_2{left:816px;bottom:44px;letter-spacing:-0.14px;}

.s0_2{font-size:15px;font-family:OCRAStd_1fm;color:#000;}
.s1_2{font-size:11px;font-family:HelveticaNeueLTStd-Bd_1fn;color:#000;}
.s2_2{font-size:11px;font-family:HelveticaNeueLTStd-It_1fo;color:#000;}
.s3_2{font-size:15px;font-family:HelveticaNeueLTStd-Roman_1fp;color:#000;}
.s4_2{font-size:14px;font-family:HelveticaNeueLTStd-Bd_1fn;color:#FFF;}
.s5_2{font-size:14px;font-family:HelveticaNeueLTStd-Bd_1fn;color:#000;}
.s6_2{font-size:14px;font-family:HelveticaNeueLTStd-It_1fo;color:#000;}
.s7_2{font-size:13px;font-family:HelveticaNeueLTStd-Bd_1fn;color:#000;}
.s8_2{font-size:13px;font-family:HelveticaNeueLTStd-Roman_1fp;color:#000;}
.s9_2{font-size:26px;font-family:HelveticaNeueLTStd-Bd_1fn;color:#000;}
.sa_2{font-size:10px;font-family:HelveticaNeueLTStd-Roman_1fp;color:#000;}
.sb_2{font-size:11px;font-family:HelveticaNeueLTStd-Roman_1fp;color:#000;}
.sc_2{font-size:15px;font-family:HelveticaNeueLTStd-Bd_1fn;color:#000;}
.t.v0_2{transform:scaleX(0.89);}
.t.v1_2{transform:scaleX(0.92);}
.t.v2_2{transform:scaleX(0.88);}

#form1_2:focus,#form2_2:focus,#form3_2:focus,#form4_2:focus,#form5_2:focus,#form9_2:focus,#form10_2:focus,#form11_2:focus,#form12_2:focus,#form14_2:focus
,#form17_2:focus,#form18_2:focus,#form21_2:focus,#form22_2:focus,#form25_2:focus,#form26_2:focus,#form31_2:focus,#form32_2:focus,#form35_2:focus,#form36_2:focus

,#form39_2:focus,#form40_2:focus,#form41_2:focus,#form42_2:focus,#form43_2:focus,#form44_2:focus,#form45_2:focus,#form46_2:focus,#form13_2:focus {
    background: white; /* Change to white when focused */
}

#form1_2{   z-index: 2; padding: 0px;  position: absolute;  left: 55px; top: 87px;  width: 381px;  height: 20px;  color: rgb(0,0,0);   text-align: left; background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form2_2{   z-index: 2; padding: 0px;  position: absolute;  left: 627px;   top: 87px;  width: 32px;   height: 20px;  color: rgb(0,0,0);   text-align: center;  background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form3_2{   z-index: 2; padding: 0px;  position: absolute;  left: 669px;   top: 87px;  width: 75px;   height: 20px;  color: rgb(0,0,0);   text-align: center;  background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form4_2{   z-index: 2; padding: 0px;  position: absolute;  left: 682px;   top: 145px; width: 153px;  height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form5_2{   z-index: 2; padding: 0px;  position: absolute;  left: 847px;   top: 145px; width: 32px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form6_2{   z-index: 2; background-size: 100% 100%;   background-image: url("2/form/367 0 ROff.png"); background-repeat: no-repeat; border-style: none;  padding: 0px;  position: absolute;  left: 682px;   top: 191px; width: 154px;  height: 22px;  color: rgb(0,0,0);   text-align: right;   background:transparent; font: normal 15px 'Times New Roman', Times, serif;}
#form7_2{   z-index: 2; background-size: 100% 100%;   background-image: url("2/form/368 0 ROff.png"); background-repeat: no-repeat; border-style: none;  padding: 0px;  position: absolute;  left: 847px;   top: 191px; width: 32px;   height: 22px;  color: rgb(0,0,0);   text-align: right;   background:transparent; font: normal 15px 'Times New Roman', Times, serif;}
#form8_2{   z-index: 2; background-size: 100% 100%;   background-image: url("2/form/369 0 ROff.png"); background-repeat: no-repeat; border-style: none;  padding: 0px;  position: absolute;  left: 495px;   top: 228px; width: 132px;  height: 22px;  color: rgb(0,0,0);   text-align: center;background:transparent;   font: normal 15px 'Times New Roman', Times, serif;}
#form9_2{   z-index: 2; padding: 0px;  position: absolute;  left: 682px;   top: 264px; width: 153px;  height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form10_2{  z-index: 2; padding: 0px;  position: absolute;  left: 847px;   top: 264px; width: 32px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form11_2{  z-index: 2; padding: 0px;  position: absolute;  left: 682px;   top: 301px; width: 153px;  height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form12_2{  z-index: 2; padding: 0px;  position: absolute;  left: 847px;   top: 301px; width: 32px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}

#form13_2{  z-index: 2; padding: 0px;  position: absolute;  left: 682px;   top: 301px; width: 153px;  height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}

#form14_2{  z-index: 2; padding: 0px;  position: absolute;  left: 847px;   top: 347px; width: 32px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form15_2{  z-index: 2; background-size: 100% 100%;   background-image: url("2/form/376 0 ROff.png"); background-repeat: no-repeat; border-style: none;  padding: 0px;  position: absolute;  left: 682px;   top: 384px; width: 154px;  height: 22px;  color: rgb(0,0,0);   text-align: right;   background:transparent; font: normal 15px 'Times New Roman', Times, serif;}
#form16_2{  z-index: 2; background-size: 100% 100%;   background-image: url("2/form/377 0 ROff.png"); background-repeat: no-repeat; border-style: none;  padding: 0px;  position: absolute;  left: 847px;   top: 384px; width: 32px;   height: 22px;  color: rgb(0,0,0);   text-align: right;   background:transparent; font: normal 15px 'Times New Roman', Times, serif;}
#form17_2{  z-index: 2; padding: 0px;  position: absolute;  left: 682px;   top: 429px; width: 153px;  height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form18_2{  z-index: 2; padding: 0px;  position: absolute;  left: 847px;   top: 429px; width: 32px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form19_2{  z-index: 2; background-size: 100% 100%;   background-image: url("2/form/380 0 ROff.png"); background-repeat: no-repeat; border-style: none;  padding: 0px;  position: absolute;  left: 682px;   top: 466px; width: 154px;  height: 22px;  color: rgb(0,0,0);   text-align: right;   background:transparent; font: normal 15px 'Times New Roman', Times, serif;}
#form20_2{  z-index: 2; background-size: 100% 100%;   background-image: url("2/form/381 0 ROff.png"); background-repeat: no-repeat; border-style: none;  padding: 0px;  position: absolute;  left: 847px;   top: 466px; width: 32px;   height: 22px;  color: rgb(0,0,0);   text-align: right;   background:transparent; font: normal 15px 'Times New Roman', Times, serif;}
#form21_2{  z-index: 2; padding: 0px;  position: absolute;  left: 682px;   top: 512px; width: 153px;  height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form22_2{  z-index: 2; padding: 0px;  position: absolute;  left: 847px;   top: 512px; width: 32px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form23_2{  z-index: 2; background-size: 100% 100%;   background-image: url("2/form/384 0 ROff.png"); background-repeat: no-repeat; border-style: none;  padding: 0px;  position: absolute;  left: 682px;   top: 558px; width: 154px;  height: 22px;  color: rgb(0,0,0);   text-align: right;   background:transparent; font: normal 15px 'Times New Roman', Times, serif;}
#form24_2{  z-index: 2; background-size: 100% 100%;   background-image: url("2/form/385 0 ROff.png"); background-repeat: no-repeat; border-style: none;  padding: 0px;  position: absolute;  left: 847px;   top: 558px; width: 32px;   height: 22px;  color: rgb(0,0,0);   text-align: right;   background:transparent; font: normal 15px 'Times New Roman', Times, serif;}
#form25_2{  z-index: 2; padding: 0px;  position: absolute;  left: 682px;   top: 594px; width: 153px;  height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form26_2{  z-index: 2; padding: 0px;  position: absolute;  left: 847px;   top: 594px; width: 32px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form27_2{  z-index: 2; background-size: 100% 100%;   background-image: url("2/form/388 0 ROff.png"); background-repeat: no-repeat; border-style: none;  padding: 0px;  position: absolute;  left: 682px;   top: 631px; width: 154px;  height: 22px;  color: rgb(0,0,0);   text-align: right;   background:transparent; font: normal 15px 'Times New Roman', Times, serif;}
#form28_2{  z-index: 2; background-size: 100% 100%;   background-image: url("2/form/389 0 ROff.png"); background-repeat: no-repeat; border-style: none;  padding: 0px;  position: absolute;  left: 847px;   top: 631px; width: 32px;   height: 22px;  color: rgb(0,0,0);   text-align: right;   background:transparent; font: normal 15px 'Times New Roman', Times, serif;}
#form29_2{  z-index: 2; background-size: 100% 100%;   background-image: url("2/form/390 0 ROff.png"); background-repeat: no-repeat; border-style: none;  padding: 0px;  position: absolute;  left: 682px;   top: 668px; width: 154px;  height: 22px;  color: rgb(0,0,0);   text-align: right;   background:transparent; font: normal 15px 'Times New Roman', Times, serif;}
#form30_2{  z-index: 2; background-size: 100% 100%;   background-image: url("2/form/391 0 ROff.png"); background-repeat: no-repeat; border-style: none;  padding: 0px;  position: absolute;  left: 847px;   top: 668px; width: 32px;   height: 22px;  color: rgb(0,0,0);   text-align: right;   background:transparent; font: normal 15px 'Times New Roman', Times, serif;}
#form31_2{  z-index: 2; padding: 0px;  position: absolute;  left: 682px;   top: 704px; width: 153px;  height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form32_2{  z-index: 2; padding: 0px;  position: absolute;  left: 847px;   top: 704px; width: 32px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form33_2{  z-index: 2; border-style: none;  padding: 0px;  position: absolute;  left: 677px;   top: 744px; width: 16px;   height: 16px;  color: rgb(0,0,0);   text-align: left; background: #f4f4fc; font: normal 12px Wingdings, 'Zapf Dingbats';}
#form34_2{  z-index: 2; border-style: none;  padding: 0px;  position: absolute;  left: 787px;   top: 744px; width: 16px;   height: 16px;  color: rgb(0,0,0);   text-align: left; background: #f4f4fc; font: normal 12px Wingdings, 'Zapf Dingbats';}
#form35_2{  z-index: 2; padding: 0px;  position: absolute;  left: 462px;   top: 741px; width: 98px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form36_2{  z-index: 2; padding: 0px;  position: absolute;  left: 572px;   top: 741px; width: 32px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form37_2{  z-index: 2; border-style: none;  padding: 0px;  position: absolute;  left: 162px;   top: 831px; width: 16px;   height: 16px;  color: rgb(0,0,0);   text-align: left; background: #f4f4fc; font: normal 12px Wingdings, 'Zapf Dingbats';}
#form38_2{  z-index: 2; border-style: none;  padding: 0px;  position: absolute;  left: 162px;   top: 905px; width: 16px;   height: 16px;  color: rgb(0,0,0);   text-align: left; background: #f4f4fc; font: normal 12px Wingdings, 'Zapf Dingbats';}
#form39_2{  z-index: 2; padding: 0px;  position: absolute;  left: 352px;   top: 952px; width: 153px;  height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form40_2{  z-index: 2; padding: 0px;  position: absolute;  left: 517px;   top: 952px; width: 32px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form41_2{  z-index: 2; padding: 0px;  position: absolute;  left: 352px;   top: 986px; width: 153px;  height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form42_2{  z-index: 2; padding: 0px;  position: absolute;  left: 517px;   top: 986px; width: 32px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form43_2{  z-index: 2; padding: 0px;  position: absolute;  left: 352px;   top: 1018px;   width: 153px;  height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form44_2{  z-index: 2; padding: 0px;  position: absolute;  left: 517px;   top: 1018px;   width: 32px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form45_2{  z-index: 2; padding: 0px;  position: absolute;  left: 352px;   top: 1051px;   width: 153px;  height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form46_2{  z-index: 2; padding: 0px;  position: absolute;  left: 517px;   top: 1051px;   width: 32px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form47_2{  z-index: 2; border-style: none;  padding: 0px;  position: absolute;  left: 162px;   top: 1079px;   width: 16px;   height: 16px;  color: rgb(0,0,0);   text-align: left; background: #f4f4fc; font: normal 12px Wingdings, 'Zapf Dingbats';}
#form33_2 { z-index:6; }
#form34_2 { z-index:5; }
#form37_2 { z-index:4; }
#form38_2 { z-index:3; }
#form47_2 { z-index:2; }

</style>
<!-- End inline CSS -->

<!-- Begin embedded font definitions -->
<style id="fonts2" type="text/css" >

@font-face {
   font-family: HelveticaNeueLTStd-Bd_1fn;
   src: url("fonts/HelveticaNeueLTStd-Bd_1fn.woff") format("woff");
}

@font-face {
   font-family: HelveticaNeueLTStd-It_1fo;
   src: url("fonts/HelveticaNeueLTStd-It_1fo.woff") format("woff");
}

@font-face {
   font-family: HelveticaNeueLTStd-Roman_1fp;
   src: url("fonts/HelveticaNeueLTStd-Roman_1fp.woff") format("woff");
}

@font-face {
   font-family: OCRAStd_1fm;
   src: url("fonts/OCRAStd_1fm.woff") format("woff");
}

</style>
<!-- End embedded font definitions -->

<!-- Begin page background -->
<div id="pg2Overlay" style="width:100%; height:100%; position:absolute; z-index:1; background-color:rgba(0,0,0,0); -webkit-user-select: none;"></div>
<div id="pg2" style="-webkit-user-select: none;"><object width="934" height="1209" data="2/2.svg" type="image/svg+xml" id="pdf2" style="width:934px; height:1209px; -moz-transform:scale(1); z-index: 0;"></object></div>
<!-- End page background -->


<!-- Begin text definitions (Positioned/styled in CSS) -->
<div class="text-container"><span id="t1_2" class="t s0_2">951222 </span>
<span id="t2_2" class="t s1_2">Name </span><span id="t3_2" class="t s2_2">(not your trade name) </span><span id="t4_2" class="t s1_2">Employer identification number (EIN) </span>
<span id="t5_2" class="t s3_2">– </span>
<span id="t6_2" class="t s4_2">Part 1: </span>
<span id="t7_2" class="t s5_2">Answer these questions for this quarter. </span><span id="t8_2" class="t s6_2">(continued) </span>
<span id="t9_2" class="t s7_2">11d </span><span id="ta_2" class="t s7_2">Nonrefundable portion of credit for qualified sick and family leave wages for leave taken </span>
<span id="tb_2" class="t s7_2">after March 31, 2021, and before October 1, 2021 </span><span id="tc_2" class="t s8_2">. </span><span id="td_2" class="t s8_2">. </span><span id="te_2" class="t s8_2">. </span><span id="tf_2" class="t s8_2">. </span><span id="tg_2" class="t s8_2">. </span><span id="th_2" class="t s8_2">. </span><span id="ti_2" class="t s8_2">. </span><span id="tj_2" class="t s8_2">. </span><span id="tk_2" class="t s8_2">. </span><span id="tl_2" class="t s8_2">. </span><span id="tm_2" class="t s8_2">. </span><span id="tn_2" class="t s8_2">. </span><span id="to_2" class="t s8_2">. </span><span id="tp_2" class="t v0_2 s7_2">11d </span>
<span id="tq_2" class="t s9_2">. </span>
<span id="tr_2" class="t s7_2">11e </span><span id="ts_2" class="t s7_2">Reserved for future use </span><span id="tt_2" class="t s8_2">. </span><span id="tu_2" class="t s8_2">. </span><span id="tv_2" class="t s8_2">. </span><span id="tw_2" class="t s8_2">. </span><span id="tx_2" class="t s8_2">. </span><span id="ty_2" class="t s8_2">. </span><span id="tz_2" class="t s8_2">. </span><span id="t10_2" class="t s8_2">. </span><span id="t11_2" class="t s8_2">. </span><span id="t12_2" class="t s8_2">. </span><span id="t13_2" class="t s8_2">. </span><span id="t14_2" class="t s8_2">. </span><span id="t15_2" class="t s8_2">. </span><span id="t16_2" class="t s8_2">. </span><span id="t17_2" class="t s8_2">. </span><span id="t18_2" class="t s8_2">. </span><span id="t19_2" class="t s8_2">. </span><span id="t1a_2" class="t s8_2">. </span><span id="t1b_2" class="t s8_2">. </span><span id="t1c_2" class="t s8_2">. </span><span id="t1d_2" class="t s8_2">. </span><span id="t1e_2" class="t s8_2">. </span><span id="t1f_2" class="t v0_2 s7_2">11e </span><span id="t1g_2" class="t s9_2">. </span>
<span id="t1h_2" class="t s7_2">11f </span><span id="t1i_2" class="t s7_2">Reserved for future use </span><span id="t1j_2" class="t s8_2">. </span><span id="t1k_2" class="t s8_2">. </span><span id="t1l_2" class="t s8_2">. </span><span id="t1m_2" class="t s8_2">. </span><span id="t1n_2" class="t s8_2">. </span><span id="t1o_2" class="t s8_2">. </span><span id="t1p_2" class="t s8_2">. </span><span id="t1q_2" class="t s8_2">. </span><span id="t1r_2" class="t s8_2">. </span><span id="t1s_2" class="t s8_2">. </span><span id="t1t_2" class="t s8_2">. </span><span id="t1u_2" class="t s8_2">. </span><span id="t1v_2" class="t s8_2">. </span>
<span id="t1w_2" class="t s7_2">11g </span><span id="t1x_2" class="t s7_2">Total nonrefundable credits. </span><span id="t1y_2" class="t s8_2">Add lines 11a, 11b, and 11d </span><span id="t1z_2" class="t s8_2">. </span><span id="t20_2" class="t s8_2">. </span><span id="t21_2" class="t s8_2">. </span><span id="t22_2" class="t s8_2">. </span><span id="t23_2" class="t s8_2">. </span><span id="t24_2" class="t s8_2">. </span><span id="t25_2" class="t s8_2">. </span><span id="t26_2" class="t s8_2">. </span><span id="t27_2" class="t s8_2">. </span><span id="t28_2" class="t s8_2">. </span><span id="t29_2" class="t s8_2">. </span><span id="t2a_2" class="t v0_2 s7_2">11g </span><span id="t2b_2" class="t s9_2">. </span>
<span id="t2c_2" class="t s7_2">12 </span><span id="t2d_2" class="t s7_2">Total taxes after adjustments and nonrefundable credits. </span><span id="t2e_2" class="t s8_2">Subtract line 11g from line 10 </span><span id="t2f_2" class="t s8_2">. </span><span id="t2g_2" class="t s7_2">12 </span><span id="t2h_2" class="t s9_2">. </span>
<span id="t2i_2" class="t s7_2">13a </span><span id="t2j_2" class="t v0_2 s7_2">Total deposits for this quarter, including overpayment applied from a prior quarter and </span>
<span id="t2k_2" class="t v0_2 s7_2">overpayments applied from Form 941-X, 941-X (PR), 944-X, or 944-X (SP) filed in the current quarter </span><span id="t2l_2" class="t v0_2 s7_2">13a </span>
<span id="t2m_2" class="t s9_2">. </span>
<span id="t2n_2" class="t s7_2">13b </span><span id="t2o_2" class="t s7_2">Reserved for future use </span><span id="t2p_2" class="t s8_2">. </span><span id="t2q_2" class="t s8_2">. </span><span id="t2r_2" class="t s8_2">. </span><span id="t2s_2" class="t s8_2">. </span><span id="t2t_2" class="t s8_2">. </span><span id="t2u_2" class="t s8_2">. </span><span id="t2v_2" class="t s8_2">. </span><span id="t2w_2" class="t s8_2">. </span><span id="t2x_2" class="t s8_2">. </span><span id="t2y_2" class="t s8_2">. </span><span id="t2z_2" class="t s8_2">. </span><span id="t30_2" class="t s8_2">. </span><span id="t31_2" class="t s8_2">. </span><span id="t32_2" class="t s8_2">. </span><span id="t33_2" class="t s8_2">. </span><span id="t34_2" class="t s8_2">. </span><span id="t35_2" class="t s8_2">. </span><span id="t36_2" class="t s8_2">. </span><span id="t37_2" class="t s8_2">. </span><span id="t38_2" class="t s8_2">. </span><span id="t39_2" class="t s8_2">. </span><span id="t3a_2" class="t s8_2">. </span><span id="t3b_2" class="t v0_2 s7_2">13b </span><span id="t3c_2" class="t s9_2">. </span>
<span id="t3d_2" class="t s7_2">13c </span><span id="t3e_2" class="t s7_2">Refundable portion of credit for qualified sick and family leave wages for leave taken </span>
<span id="t3f_2" class="t s7_2">before April 1, 2021 </span><span id="t3g_2" class="t s8_2">. </span><span id="t3h_2" class="t s8_2">. </span><span id="t3i_2" class="t s8_2">. </span><span id="t3j_2" class="t s8_2">. </span><span id="t3k_2" class="t s8_2">. </span><span id="t3l_2" class="t s8_2">. </span><span id="t3m_2" class="t s8_2">. </span><span id="t3n_2" class="t s8_2">. </span><span id="t3o_2" class="t s8_2">. </span><span id="t3p_2" class="t s8_2">. </span><span id="t3q_2" class="t s8_2">. </span><span id="t3r_2" class="t s8_2">. </span><span id="t3s_2" class="t s8_2">. </span><span id="t3t_2" class="t s8_2">. </span><span id="t3u_2" class="t s8_2">. </span><span id="t3v_2" class="t s8_2">. </span><span id="t3w_2" class="t s8_2">. </span><span id="t3x_2" class="t s8_2">. </span><span id="t3y_2" class="t s8_2">. </span><span id="t3z_2" class="t s8_2">. </span><span id="t40_2" class="t s8_2">. </span><span id="t41_2" class="t s8_2">. </span><span id="t42_2" class="t s8_2">. </span><span id="t43_2" class="t v0_2 s7_2">13c </span>
<span id="t44_2" class="t s9_2">. </span>
<span id="t45_2" class="t s7_2">13d </span><span id="t46_2" class="t s7_2">Reserved for future use </span><span id="t47_2" class="t s8_2">. </span><span id="t48_2" class="t s8_2">. </span><span id="t49_2" class="t s8_2">. </span><span id="t4a_2" class="t s8_2">. </span><span id="t4b_2" class="t s8_2">. </span><span id="t4c_2" class="t s8_2">. </span><span id="t4d_2" class="t s8_2">. </span><span id="t4e_2" class="t s8_2">. </span><span id="t4f_2" class="t s8_2">. </span><span id="t4g_2" class="t s8_2">. </span><span id="t4h_2" class="t s8_2">. </span><span id="t4i_2" class="t s8_2">. </span><span id="t4j_2" class="t s8_2">. </span><span id="t4k_2" class="t s8_2">. </span><span id="t4l_2" class="t s8_2">. </span><span id="t4m_2" class="t s8_2">. </span><span id="t4n_2" class="t s8_2">. </span><span id="t4o_2" class="t s8_2">. </span><span id="t4p_2" class="t s8_2">. </span><span id="t4q_2" class="t s8_2">. </span><span id="t4r_2" class="t s8_2">. </span><span id="t4s_2" class="t s8_2">. </span><span id="t4t_2" class="t v0_2 s7_2">13d </span><span id="t4u_2" class="t s9_2">. </span>
<span id="t4v_2" class="t s7_2">13e </span><span id="t4w_2" class="t s7_2">Refundable portion of credit for qualified sick and family leave wages for leave taken </span>
<span id="t4x_2" class="t s7_2">after March 31, 2021, and before October 1, 2021 </span><span id="t4y_2" class="t s8_2">. </span><span id="t4z_2" class="t s8_2">. </span><span id="t50_2" class="t s8_2">. </span><span id="t51_2" class="t s8_2">. </span><span id="t52_2" class="t s8_2">. </span><span id="t53_2" class="t s8_2">. </span><span id="t54_2" class="t s8_2">. </span><span id="t55_2" class="t s8_2">. </span><span id="t56_2" class="t s8_2">. </span><span id="t57_2" class="t s8_2">. </span><span id="t58_2" class="t s8_2">. </span><span id="t59_2" class="t s8_2">. </span><span id="t5a_2" class="t s8_2">. </span><span id="t5b_2" class="t s8_2">. </span><span id="t5c_2" class="t v0_2 s7_2">13e </span>
<span id="t5d_2" class="t s9_2">. </span>
<span id="t5e_2" class="t s7_2">13f </span><span id="t5f_2" class="t s7_2">Reserved for future use </span><span id="t5g_2" class="t s8_2">. </span><span id="t5h_2" class="t s8_2">. </span><span id="t5i_2" class="t s8_2">. </span><span id="t5j_2" class="t s8_2">. </span><span id="t5k_2" class="t s8_2">. </span><span id="t5l_2" class="t s8_2">. </span><span id="t5m_2" class="t s8_2">. </span><span id="t5n_2" class="t s8_2">. </span><span id="t5o_2" class="t s8_2">. </span><span id="t5p_2" class="t s8_2">. </span><span id="t5q_2" class="t s8_2">. </span><span id="t5r_2" class="t s8_2">. </span><span id="t5s_2" class="t s8_2">. </span><span id="t5t_2" class="t s8_2">. </span><span id="t5u_2" class="t s8_2">. </span><span id="t5v_2" class="t s8_2">. </span><span id="t5w_2" class="t s8_2">. </span><span id="t5x_2" class="t s8_2">. </span><span id="t5y_2" class="t s8_2">. </span><span id="t5z_2" class="t s8_2">. </span><span id="t60_2" class="t s8_2">. </span><span id="t61_2" class="t s8_2">. </span>
<span id="t62_2" class="t v0_2 s7_2">13f </span><span id="t63_2" class="t s9_2">. </span>
<span id="t64_2" class="t s7_2">13g </span><span id="t65_2" class="t s7_2">Total deposits and refundable credits. </span><span id="t66_2" class="t s8_2">Add lines 13a, 13c, and 13e </span><span id="t67_2" class="t s8_2">. </span><span id="t68_2" class="t s8_2">. </span><span id="t69_2" class="t s8_2">. </span><span id="t6a_2" class="t s8_2">. </span><span id="t6b_2" class="t s8_2">. </span><span id="t6c_2" class="t s8_2">. </span><span id="t6d_2" class="t s8_2">. </span><span id="t6e_2" class="t s8_2">. </span><span id="t6f_2" class="t v0_2 s7_2">13g </span><span id="t6g_2" class="t s9_2">. </span>
<span id="t6h_2" class="t s7_2">13h </span><span id="t6i_2" class="t s7_2">Reserved for future use </span><span id="t6j_2" class="t s8_2">. </span><span id="t6k_2" class="t s8_2">. </span><span id="t6l_2" class="t s8_2">. </span><span id="t6m_2" class="t s8_2">. </span><span id="t6n_2" class="t s8_2">. </span><span id="t6o_2" class="t s8_2">. </span><span id="t6p_2" class="t s8_2">. </span><span id="t6q_2" class="t s8_2">. </span><span id="t6r_2" class="t s8_2">. </span><span id="t6s_2" class="t s8_2">. </span><span id="t6t_2" class="t s8_2">. </span><span id="t6u_2" class="t s8_2">. </span><span id="t6v_2" class="t s8_2">. </span><span id="t6w_2" class="t s8_2">. </span><span id="t6x_2" class="t s8_2">. </span><span id="t6y_2" class="t s8_2">. </span><span id="t6z_2" class="t s8_2">. </span><span id="t70_2" class="t s8_2">. </span><span id="t71_2" class="t s8_2">. </span><span id="t72_2" class="t s8_2">. </span><span id="t73_2" class="t s8_2">. </span><span id="t74_2" class="t s8_2">. </span><span id="t75_2" class="t v0_2 s7_2">13h </span><span id="t76_2" class="t s9_2">. </span>
<span id="t77_2" class="t s7_2">13i </span><span id="t78_2" class="t s7_2">Reserved for future use </span><span id="t79_2" class="t s8_2">. </span><span id="t7a_2" class="t s8_2">. </span><span id="t7b_2" class="t s8_2">. </span><span id="t7c_2" class="t s8_2">. </span><span id="t7d_2" class="t s8_2">. </span><span id="t7e_2" class="t s8_2">. </span><span id="t7f_2" class="t s8_2">. </span><span id="t7g_2" class="t s8_2">. </span><span id="t7h_2" class="t s8_2">. </span><span id="t7i_2" class="t s8_2">. </span><span id="t7j_2" class="t s8_2">. </span><span id="t7k_2" class="t s8_2">. </span><span id="t7l_2" class="t s8_2">. </span><span id="t7m_2" class="t s8_2">. </span><span id="t7n_2" class="t s8_2">. </span><span id="t7o_2" class="t s8_2">. </span><span id="t7p_2" class="t s8_2">. </span><span id="t7q_2" class="t s8_2">. </span><span id="t7r_2" class="t s8_2">. </span><span id="t7s_2" class="t s8_2">. </span><span id="t7t_2" class="t s8_2">. </span><span id="t7u_2" class="t s8_2">. </span><span id="t7v_2" class="t v0_2 s7_2">13i </span><span id="t7w_2" class="t s9_2">. </span>
<span id="t7x_2" class="t s7_2">14 </span><span id="t7y_2" class="t s7_2">Balance due. </span><span id="t7z_2" class="t s8_2">If line 12 is more than line 13g, enter the difference and see instructions </span><span id="t80_2" class="t s8_2">. </span><span id="t81_2" class="t s8_2">. </span><span id="t82_2" class="t s8_2">. </span><span id="t83_2" class="t s7_2">14 </span><span id="t84_2" class="t s9_2">. </span>
<span id="t85_2" class="t s7_2">15 </span><span id="t86_2" class="t v1_2 s7_2">Overpayment. </span><span id="t87_2" class="t v1_2 s8_2">If line 13g is more than line 12, enter the difference </span><span id="t88_2" class="t s9_2">. </span><span id="t89_2" class="t s8_2">Check one: </span><span id="t8a_2" class="t v2_2 sa_2">Apply to next return. </span><span id="t8b_2" class="t sa_2">Send a refund. </span>
<span id="t8c_2" class="t s4_2">Part 2: </span><span id="t8d_2" class="t s5_2">Tell us about your deposit schedule and tax liability for this quarter. </span>
<span id="t8e_2" class="t s7_2">If you’re unsure about whether you’re a monthly schedule depositor or a semiweekly schedule depositor, see section 11 of Pub. 15. </span>
<span id="t8f_2" class="t s7_2">16 </span><span id="t8g_2" class="t s7_2">Check one: </span>
<span id="t8h_2" class="t s7_2">Line 12 on this return is less than $2,500 or line 12 on the return for the prior quarter was less than $2,500, </span>
<span id="t8i_2" class="t s7_2">and you didn’t incur a $100,000 next-day deposit obligation during the current quarter. </span><span id="t8j_2" class="t s8_2">If line 12 for the prior </span>
<span id="t8k_2" class="t s8_2">quarter was less than $2,500 but line 12 on this return is $100,000 or more, you must provide a record of your </span>
<span id="t8l_2" class="t s8_2">federal tax liability. If you’re a monthly schedule depositor, complete the deposit schedule below; if you’re a </span>
<span id="t8m_2" class="t s8_2">semiweekly schedule depositor, attach Schedule B (Form 941). Go to Part 3. </span>
<span id="t8n_2" class="t s7_2">You were a monthly schedule depositor for the entire quarter. </span><span id="t8o_2" class="t s8_2">Enter your tax liability for each month and total </span>
<span id="t8p_2" class="t s8_2">liability for the quarter, then go to Part 3. </span>
<span id="t8q_2" class="t s7_2">Tax liability: </span><span id="t8r_2" class="t s7_2">Month 1 </span><span id="t8s_2" class="t s9_2">. </span>
<span id="t8t_2" class="t s7_2">Month 2 </span><span id="t8u_2" class="t s9_2">. </span>
<span id="t8v_2" class="t s7_2">Month 3 </span><span id="t8w_2" class="t s9_2">. </span>
<span id="t8x_2" class="t s7_2">Total liability for quarter </span><span id="t8y_2" class="t s9_2">. </span><span id="t8z_2" class="t s7_2">Total must equal line 12. </span>
<span id="t90_2" class="t s7_2">You were a semiweekly schedule depositor for any part of this quarter. </span><span id="t91_2" class="t s8_2">Complete </span><span id="t92_2" class="t s8_2">Schedule B (Form 941), </span>
<span id="t93_2" class="t s8_2">Report of Tax Liability for Semiweekly Schedule Depositors, and attach it to Form 941. Go to Part 3. </span>
<span id="t94_2" class="t s7_2">You MUST complete all three pages of Form 941 and SIGN it. </span>
<span id="t95_2" class="t sb_2">Page </span><span id="t96_2" class="t sc_2">2 </span><span id="t97_2" class="t sb_2">Form </span><span id="t98_2" class="t sc_2">941 </span><span id="t99_2" class="t sb_2">(Rev. 3-2023) </span></div>
<!-- End text definitions -->


<!-- Begin Form Data -->
<input id="form1_2" type="text" tabindex="66" value="" data-objref="411 0 R" data-field-name="topmostSubform[0].Page2[0].Name_ReadOrder[0].f1_3[0]"/>
<input id="form2_2" type="text" tabindex="67" maxlength="2" value="" data-objref="409 0 R" data-field-name="topmostSubform[0].Page2[0].EIN_Number[0].f1_1[0]"/>
<input id="form3_2" type="text" tabindex="68" maxlength="7" value="" data-objref="410 0 R" data-field-name="topmostSubform[0].Page2[0].EIN_Number[0].f1_2[0]"/>
<input id="form4_2" type="text" tabindex="69" value="" data-objref="365 0 R" data-field-name="topmostSubform[0].Page2[0].f2_3[0]"/>
<input id="form5_2" type="text" tabindex="70" maxlength="3" value="" data-objref="366 0 R" data-field-name="topmostSubform[0].Page2[0].f2_4[0]"/>
<input id="form6_2" type="button" tabindex="71" disabled="disabled" data-objref="367 0 R" data-field-name="topmostSubform[0].Page2[0].f2_5[0]"/>
<input id="form7_2" type="button" tabindex="72" maxlength="3" disabled="disabled" data-objref="368 0 R" data-field-name="topmostSubform[0].Page2[0].f2_6[0]"/>
<input id="form8_2" type="button" tabindex="73" disabled="disabled" data-objref="369 0 R" data-field-name="topmostSubform[0].Page2[0].f2_7[0]"/>
<input id="form9_2" type="text" tabindex="74" value="" data-objref="370 0 R" data-field-name="topmostSubform[0].Page2[0].f2_8[0]"/>
<input id="form10_2" type="text" tabindex="75" maxlength="3" value="" data-objref="371 0 R" data-field-name="topmostSubform[0].Page2[0].f2_9[0]"/>
<input id="form11_2" type="text" tabindex="76" value="" data-objref="372 0 R" data-field-name="topmostSubform[0].Page2[0].f2_10[0]"/>
<input id="form12_2" type="text" tabindex="77" maxlength="3" value="" data-objref="373 0 R" data-field-name="topmostSubform[0].Page2[0].f2_11[0]"/>
<input id="form13_2" type="text" tabindex="78" value="" data-objref="374 0 R" data-field-name="topmostSubform[0].Page2[0].f2_12[0]"/>
<input id="form14_2" type="text" tabindex="79" maxlength="3" value="" data-objref="375 0 R" data-field-name="topmostSubform[0].Page2[0].f2_13[0]"/>
<input id="form15_2" type="button" tabindex="80" disabled="disabled" data-objref="376 0 R" data-field-name="topmostSubform[0].Page2[0].f2_14[0]"/>
<input id="form16_2" type="button" tabindex="81" maxlength="3" disabled="disabled" data-objref="377 0 R" data-field-name="topmostSubform[0].Page2[0].f2_15[0]"/>
<input id="form17_2" type="text" tabindex="82" value="" data-objref="378 0 R" data-field-name="topmostSubform[0].Page2[0].f2_16[0]"/>
<input id="form18_2" type="text" tabindex="83" maxlength="3" value="" data-objref="379 0 R" data-field-name="topmostSubform[0].Page2[0].f2_17[0]"/>
<input id="form19_2" type="button" tabindex="84" disabled="disabled" data-objref="380 0 R" data-field-name="topmostSubform[0].Page2[0].f2_18[0]"/>
<input id="form20_2" type="button" tabindex="85" maxlength="3" disabled="disabled" data-objref="381 0 R" data-field-name="topmostSubform[0].Page2[0].f2_19[0]"/>
<input id="form21_2" type="text" tabindex="86" value="" data-objref="382 0 R" data-field-name="topmostSubform[0].Page2[0].f2_20[0]"/>
<input id="form22_2" type="text" tabindex="87" maxlength="3" value="" data-objref="383 0 R" data-field-name="topmostSubform[0].Page2[0].f2_21[0]"/>
<input id="form23_2" type="button" tabindex="88" disabled="disabled" data-objref="384 0 R" data-field-name="topmostSubform[0].Page2[0].f2_22[0]"/>
<input id="form24_2" type="button" tabindex="89" maxlength="3" disabled="disabled" data-objref="385 0 R" data-field-name="topmostSubform[0].Page2[0].f2_23[0]"/>
<input id="form25_2" type="text" tabindex="90" value="" data-objref="386 0 R" data-field-name="topmostSubform[0].Page2[0].f2_24[0]"/>
<input id="form26_2" type="text" tabindex="91" maxlength="3" value="" data-objref="387 0 R" data-field-name="topmostSubform[0].Page2[0].f2_25[0]"/>
<input id="form27_2" type="button" tabindex="92" disabled="disabled" data-objref="388 0 R" data-field-name="topmostSubform[0].Page2[0].f2_26[0]"/>
<input id="form28_2" type="button" tabindex="93" maxlength="3" disabled="disabled" data-objref="389 0 R" data-field-name="topmostSubform[0].Page2[0].f2_27[0]"/>
<input id="form29_2" type="button" tabindex="94" disabled="disabled" data-objref="390 0 R" data-field-name="topmostSubform[0].Page2[0].f2_28[0]"/>
<input id="form30_2" type="button" tabindex="95" maxlength="3" disabled="disabled" data-objref="391 0 R" data-field-name="topmostSubform[0].Page2[0].f2_29[0]"/>
<input id="form31_2" type="text" tabindex="96" value="" data-objref="392 0 R" data-field-name="topmostSubform[0].Page2[0].f2_30[0]"/>
<input id="form32_2" type="text" tabindex="97" maxlength="3" value="" data-objref="393 0 R" data-field-name="topmostSubform[0].Page2[0].f2_31[0]"/>
<input id="form33_2" type="checkbox" tabindex="100" value="1" data-objref="396 0 R" data-field-name="topmostSubform[0].Page2[0].c2_1[0]" imageName="2/form/396 0 R" images="110100"/>
<input id="form34_2" type="checkbox" tabindex="101" value="2" data-objref="397 0 R" data-field-name="topmostSubform[0].Page2[0].c2_1[1]" imageName="2/form/397 0 R" images="110100"/>
<input id="form35_2" type="text" tabindex="98" value="" data-objref="394 0 R" data-field-name="topmostSubform[0].Page2[0].f2_32[0]"/>
<input id="form36_2" type="text" tabindex="99" maxlength="3" value="" data-objref="395 0 R" data-field-name="topmostSubform[0].Page2[0].f2_33[0]"/>
<input id="form37_2" type="checkbox" tabindex="102" value="1" data-objref="398 0 R" data-field-name="topmostSubform[0].Page2[0].c2_2[0]" imageName="2/form/398 0 R" images="110100"/>
<input id="form38_2" type="checkbox" tabindex="103" value="2" data-objref="399 0 R" data-field-name="topmostSubform[0].Page2[0].c2_2[1]" imageName="2/form/399 0 R" images="110100"/>
<input id="form39_2" type="text" tabindex="104" value="" data-objref="400 0 R" data-field-name="topmostSubform[0].Page2[0].f2_34[0]"/>
<input id="form40_2" type="text" tabindex="105" maxlength="3" value="" data-objref="401 0 R" data-field-name="topmostSubform[0].Page2[0].f2_35[0]"/>
<input id="form41_2" type="text" tabindex="106" value="" data-objref="402 0 R" data-field-name="topmostSubform[0].Page2[0].f2_36[0]"/>
<input id="form42_2" type="text" tabindex="107" maxlength="3" value="" data-objref="403 0 R" data-field-name="topmostSubform[0].Page2[0].f2_37[0]"/>
<input id="form43_2" type="text" tabindex="108" value="" data-objref="404 0 R" data-field-name="topmostSubform[0].Page2[0].f2_38[0]"/>
<input id="form44_2" type="text" tabindex="109" maxlength="3" value="" data-objref="405 0 R" data-field-name="topmostSubform[0].Page2[0].f2_39[0]"/>
<input id="form45_2" type="text" tabindex="110" value="" data-objref="406 0 R" data-field-name="topmostSubform[0].Page2[0].f2_40[0]"/>
<input id="form46_2" type="text" tabindex="111" maxlength="3" value="" data-objref="407 0 R" data-field-name="topmostSubform[0].Page2[0].f2_41[0]"/>
<input id="form47_2" type="checkbox" tabindex="112" value="3" data-objref="408 0 R" data-field-name="topmostSubform[0].Page2[0].c2_2[2]" imageName="2/form/408 0 R" images="110100"/>

<!-- End Form Data -->

</div>

</div>
</div>
<div id="page3" style="width: 934px; height: 1209px; margin-top:20px;" class="page">
<div class="page-inner" style="width: 934px; height: 1209px;">

<div id="p3" class="pageArea" style="overflow: hidden; position: relative; width: 934px; height: 1209px; margin-top:auto; margin-left:auto; margin-right:auto; background-color: white;">

<!-- Begin shared CSS values -->
<style class="shared-css" type="text/css" >
.t {
   transform-origin: bottom left;
   z-index: 2;
   position: absolute;
   white-space: pre;
   overflow: visible;
   line-height: 1.5;
}
.text-container {
   white-space: pre;
}
@supports (-webkit-touch-callout: none) {
   .text-container {
      white-space: normal;
   }
}
</style>
<!-- End shared CSS values -->


<!-- Begin inline CSS -->
<style type="text/css" >

#t1_3{left:814px;bottom:1134px;letter-spacing:0.2px;}
#t2_3{left:55px;bottom:1120px;letter-spacing:-0.17px;}
#t3_3{left:88px;bottom:1120px;letter-spacing:-0.14px;}
#t4_3{left:611px;bottom:1120px;letter-spacing:-0.15px;}
#t5_3{left:662px;bottom:1096px;}
#t6_3{left:60px;bottom:1078px;letter-spacing:-0.1px;}
#t7_3{left:122px;bottom:1078px;letter-spacing:-0.12px;}
#t8_3{left:63px;bottom:1051px;letter-spacing:-0.01px;}
#t9_3{left:99px;bottom:1051px;letter-spacing:-0.01px;}
#ta_3{left:458px;bottom:1051px;}
#tb_3{left:477px;bottom:1051px;}
#tc_3{left:495px;bottom:1051px;}
#td_3{left:513px;bottom:1051px;}
#te_3{left:532px;bottom:1051px;}
#tf_3{left:550px;bottom:1051px;}
#tg_3{left:568px;bottom:1051px;}
#th_3{left:587px;bottom:1051px;}
#ti_3{left:605px;bottom:1051px;}
#tj_3{left:623px;bottom:1051px;}
#tk_3{left:642px;bottom:1051px;}
#tl_3{left:660px;bottom:1051px;}
#tm_3{left:678px;bottom:1051px;}
#tn_3{left:697px;bottom:1051px;}
#to_3{left:715px;bottom:1051px;}
#tp_3{left:759px;bottom:1051px;letter-spacing:-0.01px;}
#tq_3{left:99px;bottom:1019px;letter-spacing:-0.01px;}
#tr_3{left:348px;bottom:1019px;}
#ts_3{left:377px;bottom:1019px;}
#tt_3{left:443px;bottom:1019px;letter-spacing:-0.01px;}
#tu_3{left:63px;bottom:988px;letter-spacing:-0.01px;}
#tv_3{left:99px;bottom:988px;letter-spacing:-0.01px;}
#tw_3{left:678px;bottom:988px;}
#tx_3{left:697px;bottom:988px;}
#ty_3{left:715px;bottom:988px;}
#tz_3{left:759px;bottom:987px;letter-spacing:-0.01px;}
#t10_3{left:63px;bottom:955px;letter-spacing:-0.01px;}
#t11_3{left:99px;bottom:955px;letter-spacing:-0.01px;}
#t12_3{left:664px;bottom:955px;letter-spacing:-0.01px;}
#t13_3{left:839px;bottom:950px;}
#t14_3{left:63px;bottom:927px;letter-spacing:-0.01px;}
#t15_3{left:99px;bottom:927px;letter-spacing:-0.01px;}
#t16_3{left:664px;bottom:927px;letter-spacing:-0.01px;}
#t17_3{left:839px;bottom:922px;}
#t18_3{left:63px;bottom:900px;letter-spacing:-0.01px;}
#t19_3{left:99px;bottom:900px;letter-spacing:-0.01px;}
#t1a_3{left:257px;bottom:900px;}
#t1b_3{left:275px;bottom:900px;}
#t1c_3{left:293px;bottom:900px;}
#t1d_3{left:312px;bottom:900px;}
#t1e_3{left:330px;bottom:900px;}
#t1f_3{left:348px;bottom:900px;}
#t1g_3{left:367px;bottom:900px;}
#t1h_3{left:385px;bottom:900px;}
#t1i_3{left:403px;bottom:900px;}
#t1j_3{left:422px;bottom:900px;}
#t1k_3{left:440px;bottom:900px;}
#t1l_3{left:458px;bottom:900px;}
#t1m_3{left:477px;bottom:900px;}
#t1n_3{left:495px;bottom:900px;}
#t1o_3{left:513px;bottom:900px;}
#t1p_3{left:532px;bottom:900px;}
#t1q_3{left:550px;bottom:900px;}
#t1r_3{left:568px;bottom:900px;}
#t1s_3{left:587px;bottom:900px;}
#t1t_3{left:605px;bottom:900px;}
#t1u_3{left:623px;bottom:900px;}
#t1v_3{left:642px;bottom:900px;}
#t1w_3{left:664px;bottom:900px;letter-spacing:-0.01px;}
#t1x_3{left:839px;bottom:895px;}
#t1y_3{left:63px;bottom:872px;letter-spacing:-0.01px;}
#t1z_3{left:99px;bottom:872px;letter-spacing:-0.01px;}
#t20_3{left:257px;bottom:872px;}
#t21_3{left:275px;bottom:872px;}
#t22_3{left:293px;bottom:872px;}
#t23_3{left:312px;bottom:872px;}
#t24_3{left:330px;bottom:872px;}
#t25_3{left:348px;bottom:872px;}
#t26_3{left:367px;bottom:872px;}
#t27_3{left:385px;bottom:872px;}
#t28_3{left:403px;bottom:872px;}
#t29_3{left:422px;bottom:872px;}
#t2a_3{left:440px;bottom:872px;}
#t2b_3{left:458px;bottom:872px;}
#t2c_3{left:477px;bottom:872px;}
#t2d_3{left:495px;bottom:872px;}
#t2e_3{left:513px;bottom:872px;}
#t2f_3{left:532px;bottom:872px;}
#t2g_3{left:550px;bottom:872px;}
#t2h_3{left:568px;bottom:872px;}
#t2i_3{left:587px;bottom:872px;}
#t2j_3{left:605px;bottom:872px;}
#t2k_3{left:623px;bottom:872px;}
#t2l_3{left:642px;bottom:872px;}
#t2m_3{left:664px;bottom:872px;letter-spacing:-0.01px;}
#t2n_3{left:839px;bottom:867px;}
#t2o_3{left:63px;bottom:845px;letter-spacing:-0.01px;}
#t2p_3{left:99px;bottom:845px;letter-spacing:-0.01px;}
#t2q_3{left:664px;bottom:845px;letter-spacing:-0.01px;}
#t2r_3{left:839px;bottom:840px;}
#t2s_3{left:63px;bottom:817px;letter-spacing:-0.01px;}
#t2t_3{left:99px;bottom:817px;letter-spacing:-0.01px;}
#t2u_3{left:664px;bottom:817px;letter-spacing:-0.01px;}
#t2v_3{left:839px;bottom:812px;}
#t2w_3{left:63px;bottom:794px;letter-spacing:-0.01px;}
#t2x_3{left:99px;bottom:795px;letter-spacing:-0.01px;word-spacing:3.49px;}
#t2y_3{left:99px;bottom:779px;letter-spacing:-0.01px;}
#t2z_3{left:312px;bottom:779px;}
#t30_3{left:330px;bottom:779px;}
#t31_3{left:348px;bottom:779px;}
#t32_3{left:367px;bottom:779px;}
#t33_3{left:385px;bottom:779px;}
#t34_3{left:403px;bottom:779px;}
#t35_3{left:422px;bottom:779px;}
#t36_3{left:440px;bottom:779px;}
#t37_3{left:458px;bottom:779px;}
#t38_3{left:477px;bottom:779px;}
#t39_3{left:495px;bottom:779px;}
#t3a_3{left:513px;bottom:779px;}
#t3b_3{left:532px;bottom:779px;}
#t3c_3{left:550px;bottom:779px;}
#t3d_3{left:568px;bottom:779px;}
#t3e_3{left:587px;bottom:779px;}
#t3f_3{left:605px;bottom:779px;}
#t3g_3{left:623px;bottom:779px;}
#t3h_3{left:642px;bottom:779px;}
#t3i_3{left:664px;bottom:778px;letter-spacing:-0.01px;}
#t3j_3{left:839px;bottom:775px;}
#t3k_3{left:63px;bottom:744px;letter-spacing:-0.01px;}
#t3l_3{left:99px;bottom:744px;letter-spacing:-0.01px;}
#t3m_3{left:664px;bottom:744px;letter-spacing:-0.01px;}
#t3n_3{left:839px;bottom:739px;}
#t3o_3{left:63px;bottom:716px;letter-spacing:-0.01px;}
#t3p_3{left:99px;bottom:716px;letter-spacing:-0.01px;}
#t3q_3{left:664px;bottom:716px;letter-spacing:-0.01px;}
#t3r_3{left:839px;bottom:711px;}
#t3s_3{left:63px;bottom:694px;letter-spacing:-0.01px;}
#t3t_3{left:99px;bottom:694px;letter-spacing:-0.01px;word-spacing:2.19px;}
#t3u_3{left:99px;bottom:678px;letter-spacing:-0.01px;}
#t3v_3{left:312px;bottom:678px;}
#t3w_3{left:330px;bottom:678px;}
#t3x_3{left:348px;bottom:678px;}
#t3y_3{left:367px;bottom:678px;}
#t3z_3{left:385px;bottom:678px;}
#t40_3{left:403px;bottom:678px;}
#t41_3{left:422px;bottom:678px;}
#t42_3{left:440px;bottom:678px;}
#t43_3{left:458px;bottom:678px;}
#t44_3{left:477px;bottom:678px;}
#t45_3{left:495px;bottom:678px;}
#t46_3{left:513px;bottom:678px;}
#t47_3{left:532px;bottom:678px;}
#t48_3{left:550px;bottom:678px;}
#t49_3{left:568px;bottom:678px;}
#t4a_3{left:587px;bottom:678px;}
#t4b_3{left:605px;bottom:678px;}
#t4c_3{left:623px;bottom:678px;}
#t4d_3{left:642px;bottom:678px;}
#t4e_3{left:664px;bottom:677px;letter-spacing:-0.01px;}
#t4f_3{left:839px;bottom:675px;}
#t4g_3{left:60px;bottom:648px;letter-spacing:-0.1px;}
#t4h_3{left:122px;bottom:648px;letter-spacing:-0.12px;}
#t4i_3{left:99px;bottom:631px;letter-spacing:0.11px;}
#t4j_3{left:738px;bottom:631px;letter-spacing:0.1px;}
#t4k_3{left:99px;bottom:615px;letter-spacing:0.09px;}
#t4l_3{left:121px;bottom:588px;letter-spacing:-0.01px;}
#t4m_3{left:154px;bottom:588px;letter-spacing:-0.01px;}
#t4n_3{left:154px;bottom:553px;letter-spacing:-0.01px;}
#t4o_3{left:121px;bottom:524px;letter-spacing:-0.01px;}
#t4p_3{left:60px;bottom:501px;letter-spacing:-0.11px;}
#t4q_3{left:122px;bottom:501px;letter-spacing:-0.12px;}
#t4r_3{left:66px;bottom:484px;letter-spacing:0.21px;}
#t4s_3{left:66px;bottom:470px;letter-spacing:0.2px;}
#t4t_3{left:66px;bottom:429px;letter-spacing:-0.09px;}
#t4u_3{left:66px;bottom:408px;letter-spacing:-0.11px;}
#t4v_3{left:121px;bottom:350px;letter-spacing:-0.01px;}
#t4w_3{left:201px;bottom:350px;}
#t4x_3{left:231px;bottom:350px;}
#t4y_3{left:517px;bottom:446px;letter-spacing:-0.01px;}
#t4z_3{left:517px;bottom:431px;letter-spacing:-0.01px;}
#t50_3{left:517px;bottom:410px;letter-spacing:-0.01px;}
#t51_3{left:517px;bottom:394px;letter-spacing:-0.01px;}
#t52_3{left:517px;bottom:350px;letter-spacing:-0.01px;}
#t53_3{left:77px;bottom:308px;letter-spacing:0.14px;}
#t54_3{left:594px;bottom:309px;letter-spacing:-0.01px;}
#t55_3{left:788px;bottom:309px;}
#t56_3{left:807px;bottom:309px;}
#t57_3{left:825px;bottom:309px;}
#t58_3{left:66px;bottom:277px;letter-spacing:0.11px;}
#t59_3{left:616px;bottom:277px;letter-spacing:0.25px;}
#t5a_3{left:66px;bottom:240px;letter-spacing:-0.14px;}
#t5b_3{left:616px;bottom:240px;letter-spacing:-0.01px;}
#t5c_3{left:723px;bottom:240px;}
#t5d_3{left:756px;bottom:240px;}
#t5e_3{left:66px;bottom:215px;letter-spacing:0.1px;}
#t5f_3{left:66px;bottom:202px;letter-spacing:0.1px;}
#t5g_3{left:616px;bottom:203px;letter-spacing:-0.01px;}
#t5h_3{left:66px;bottom:166px;letter-spacing:-0.01px;}
#t5i_3{left:616px;bottom:166px;letter-spacing:-0.01px;}
#t5j_3{left:66px;bottom:130px;letter-spacing:-0.01px;}
#t5k_3{left:484px;bottom:130px;letter-spacing:-0.01px;}
#t5l_3{left:616px;bottom:130px;letter-spacing:0.11px;}
#t5m_3{left:55px;bottom:99px;letter-spacing:-0.14px;}
#t5n_3{left:83px;bottom:97px;}
#t5o_3{left:760px;bottom:99px;letter-spacing:-0.14px;}
#t5p_3{left:788px;bottom:97px;letter-spacing:0.15px;}
#t5q_3{left:816px;bottom:99px;letter-spacing:-0.14px;}

.s0_3{font-size:15px;font-family:OCRAStd_1fm;color:#000;}
.s1_3{font-size:11px;font-family:HelveticaNeueLTStd-Bd_1fn;color:#000;}
.s2_3{font-size:11px;font-family:HelveticaNeueLTStd-It_1fo;color:#000;}
.s3_3{font-size:15px;font-family:HelveticaNeueLTStd-Roman_1fp;color:#000;}
.s4_3{font-size:14px;font-family:HelveticaNeueLTStd-Bd_1fn;color:#FFF;}
.s5_3{font-size:14px;font-family:HelveticaNeueLTStd-Bd_1fn;color:#000;}
.s6_3{font-size:13px;font-family:HelveticaNeueLTStd-Bd_1fn;color:#000;}
.s7_3{font-size:13px;font-family:HelveticaNeueLTStd-Roman_1fp;color:#000;}
.s8_3{font-size:26px;font-family:HelveticaNeueLTStd-Bd_1fn;color:#000;}
.s9_3{font-size:12px;font-family:HelveticaNeueLTStd-Bd_1fn;color:#000;}
.sa_3{font-size:12px;font-family:HelveticaNeueLTStd-Roman_1fp;color:#000;}
.sb_3{font-size:11px;font-family:HelveticaNeueLTStd-Roman_1fp;color:#000;}
.sc_3{font-size:17px;font-family:HelveticaNeueLTStd-Bd_1fn;color:#000;}
.sd_3{font-size:15px;font-family:HelveticaNeueLTStd-Bd_1fn;color:#000;}
.t.v0_3{transform:scaleX(0.84);}
.t.v1_3{transform:scaleX(0.83);}
.t.v2_3{transform:scaleX(0.96);}
.t.v3_3{transform:scaleX(0.99);}
.t.v4_3{transform:scaleX(0.95);}
.t.v5_3{transform:scaleX(0.969);}
.t.v6_3{transform:scaleX(0.98);}


#form1_3:focus,#form2_3:focus,#form3_3:focus,#form5_3:focus,#form7_3:focus,#form8_3:focus,#form9_3:focus,#form10_3:focus,#form15_3:focus,#form16_3:focus
,#form17_3:focus,#form18_3:focus,#form19_3:focus,#form20_3:focus,#form21_3:focus,#form22_3:focus,#form23_3:focus,#form24_3:focus,#form25_3:focus,#form26_3:focus

,#form28_3:focus,#form29_3:focus,#form30_3:focus,#form32_3:focus,#form33_3:focus,#form34_3:focus,#form36_3:focus,#form37_3:focus 
,#form38_3:focus,#form39_3:focus,#form40_3:focus,#form41_3:focus,#form42_3:focus,#form43_3:focus,#form44_3:focus{
    background: white; /* Change to white when focused */
}
#form1_3{   z-index: 2; padding: 0px;  position: absolute;  left: 55px; top: 87px;  width: 381px;  height: 20px;  color: rgb(0,0,0);   text-align: left; background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form2_3{   z-index: 2; padding: 0px;  position: absolute;  left: 627px;   top: 87px;  width: 32px;   height: 20px;  color: rgb(0,0,0);   text-align: center;  background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form3_3{   z-index: 2; padding: 0px;  position: absolute;  left: 671px;   top: 87px;  width: 74px;   height: 20px;  color: rgb(0,0,0);   text-align: center;  background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form4_3{   z-index: 2; border-style: none;  padding: 0px;  position: absolute;  left: 732px;   top: 135px; width: 16px;   height: 16px;  color: rgb(0,0,0);   text-align: left; background: #f4f4fc; font: normal 12px Wingdings, 'Zapf Dingbats';}
#form5_3{   z-index: 2; padding: 0px;  position: absolute;  left: 319px;   top: 164px; width: 120px;  height: 24px;  color: rgb(0,0,0);   text-align: left; background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form6_3{   z-index: 2; border-style: none;  padding: 0px;  position: absolute;  left: 732px;   top: 199px; width: 16px;   height: 16px;  color: rgb(0,0,0);   text-align: left; background: #f4f4fc; font: normal 12px Wingdings, 'Zapf Dingbats';}
#form7_3{   z-index: 2; padding: 0px;  position: absolute;  left: 682px;   top: 228px; width: 153px;  height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form8_3{   z-index: 2; padding: 0px;  position: absolute;  left: 847px;   top: 228px; width: 32px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form9_3{   z-index: 2; padding: 0px;  position: absolute;  left: 682px;   top: 255px; width: 153px;  height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form10_3{  z-index: 2; padding: 0px;  position: absolute;  left: 847px;   top: 255px; width: 32px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form11_3{  z-index: 2; background-size: 100% 100%;   background-image: url("3/form/326 0 ROff.png"); background-repeat: no-repeat; border-style: none;  padding: 0px;  position: absolute;  left: 682px;   top: 283px; width: 154px;  height: 22px;  color: rgb(0,0,0);   text-align: right;   background: transparent;   font: normal 15px 'Times New Roman', Times, serif;}
#form12_3{  z-index: 2; background-size: 100% 100%;   background-image: url("3/form/327 0 ROff.png"); background-repeat: no-repeat; border-style: none;  padding: 0px;  position: absolute;  left: 847px;   top: 283px; width: 32px;   height: 22px;  color: rgb(0,0,0);   text-align: right;   background: transparent;   font: normal 15px 'Times New Roman', Times, serif;}
#form13_3{  z-index: 2; background-size: 100% 100%;   background-image: url("3/form/328 0 ROff.png"); background-repeat: no-repeat; border-style: none;  padding: 0px;  position: absolute;  left: 682px;   top: 310px; width: 154px;  height: 22px;  color: rgb(0,0,0);   text-align: right;   background: transparent;   font: normal 15px 'Times New Roman', Times, serif;}
#form14_3{  z-index: 2; background-size: 100% 100%;   background-image: url("3/form/329 0 ROff.png"); background-repeat: no-repeat; border-style: none;  padding: 0px;  position: absolute;  left: 847px;   top: 310px; width: 32px;   height: 22px;  color: rgb(0,0,0);   text-align: right;   background: transparent;   font: normal 15px 'Times New Roman', Times, serif;}
#form15_3{  z-index: 2; padding: 0px;  position: absolute;  left: 682px;   top: 338px; width: 153px;  height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form16_3{  z-index: 2; padding: 0px;  position: absolute;  left: 847px;   top: 338px; width: 32px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form17_3{  z-index: 2; padding: 0px;  position: absolute;  left: 682px;   top: 365px; width: 153px;  height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form18_3{  z-index: 2; padding: 0px;  position: absolute;  left: 847px;   top: 365px; width: 32px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form19_3{  z-index: 2; padding: 0px;  position: absolute;  left: 682px;   top: 402px; width: 153px;  height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form20_3{  z-index: 2; padding: 0px;  position: absolute;  left: 847px;   top: 402px; width: 32px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form21_3{  z-index: 2; padding: 0px;  position: absolute;  left: 682px;   top: 439px; width: 153px;  height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form22_3{  z-index: 2; padding: 0px;  position: absolute;  left: 847px;   top: 439px; width: 32px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form23_3{  z-index: 2; padding: 0px;  position: absolute;  left: 682px;   top: 466px; width: 153px;  height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form24_3{  z-index: 2; padding: 0px;  position: absolute;  left: 847px;   top: 466px; width: 32px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form25_3{  z-index: 2; padding: 0px;  position: absolute;  left: 682px;   top: 503px; width: 153px;  height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form26_3{  z-index: 2; padding: 0px;  position: absolute;  left: 847px;   top: 503px; width: 32px;   height: 24px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form27_3{  z-index: 2; border-style: none;  padding: 0px;  position: absolute;  left: 94px; top: 596px; width: 16px;   height: 16px;  color: rgb(0,0,0);   text-align: left; background: #f4f4fc; font: normal 12px Wingdings, 'Zapf Dingbats';}
#form28_3{  z-index: 2; padding: 0px;  position: absolute;  left: 397px;   top: 594px; width: 262px;  height: 24px;  color: rgb(0,0,0);   text-align: left; background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form29_3{  z-index: 2; padding: 0px;  position: absolute;  left: 704px;   top: 594px; width: 164px;  height: 24px;  color: rgb(0,0,0);   text-align: center;  background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form30_3{  z-index: 2; padding: 0px;  position: absolute;  left: 660px;   top: 631px; width: 162px;  height: 24px;  color: rgb(0,0,0);   text-align: left; background: transparent;   border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form31_3{  z-index: 2; border-style: none;  padding: 0px;  position: absolute;  left: 94px; top: 660px; width: 16px;   height: 16px;  color: rgb(0,0,0);   text-align: left; background: #f4f4fc; font: normal 12px Wingdings, 'Zapf Dingbats';}
#form32_3{  z-index: 2; padding: 0px;  position: absolute;  left: 596px;   top: 750px; width: 272px;  height: 24px;  color: rgb(0,0,0);   text-align: left; background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form33_3{  z-index: 2; padding: 0px;  position: absolute;  left: 596px;   top: 787px; width: 272px;  height: 24px;  color: rgb(0,0,0);   text-align: left; background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form34_3{  z-index: 2; padding: 0px;  position: absolute;  left: 649px;   top: 833px; width: 219px;  height: 24px;  color: rgb(0,0,0);   text-align: center;  background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form35_3{  z-index: 2; border-style: none;  padding: 0px;  position: absolute;  left: 837px;   top: 877px; width: 16px;   height: 16px;  color: rgb(0,0,0);   text-align: left; background: #f4f4fc; font: normal 12px Wingdings, 'Zapf Dingbats';}
#form36_3{  z-index: 2; padding: 0px;  position: absolute;  left: 188px;   top: 906px; width: 394px;  height: 24px;  color: rgb(0,0,0);   text-align: left; background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form37_3{  z-index: 2; padding: 0px;  position: absolute;  left: 682px;   top: 906px; width: 187px;  height: 24px;  color: rgb(0,0,0);   text-align: center;  background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form38_3{  z-index: 2; padding: 0px;  position: absolute;  left: 188px;   top: 979px; width: 394px;  height: 24px;  color: rgb(0,0,0);   text-align: left; background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form39_3{  z-index: 2; padding: 0px;  position: absolute;  left: 682px;   top: 979px; width: 187px;  height: 24px;  color: rgb(0,0,0);   text-align: center;  background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form40_3{  z-index: 2; padding: 0px;  position: absolute;  left: 188px;   top: 1016px;   width: 394px;  height: 24px;  color: rgb(0,0,0);   text-align: left; background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form41_3{  z-index: 2; padding: 0px;  position: absolute;  left: 682px;   top: 1016px;   width: 187px;  height: 24px;  color: rgb(0,0,0);   text-align: center;  background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form42_3{  z-index: 2; padding: 0px;  position: absolute;  left: 188px;   top: 1053px;   width: 273px;  height: 24px;  color: rgb(0,0,0);   text-align: left; background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form43_3{  z-index: 2; padding: 0px;  position: absolute;  left: 529px;   top: 1053px;   width: 54px;   height: 24px;  color: rgb(0,0,0);   text-align: center;  background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form44_3{  z-index: 2; padding: 0px;  position: absolute;  left: 682px;   top: 1053px;   width: 187px;  height: 24px;  color: rgb(0,0,0);   text-align: center;  background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form4_3 { z-index:6; }
#form6_3 { z-index:5; }
#form27_3 { z-index:4; }
#form31_3 { z-index:3; }
#form35_3 { z-index:2; }

</style>
<!-- End inline CSS -->

<!-- Begin embedded font definitions -->
<style id="fonts3" type="text/css" >

@font-face {
   font-family: HelveticaNeueLTStd-Bd_1fn;
   src: url("fonts/HelveticaNeueLTStd-Bd_1fn.woff") format("woff");
}

@font-face {
   font-family: HelveticaNeueLTStd-It_1fo;
   src: url("fonts/HelveticaNeueLTStd-It_1fo.woff") format("woff");
}

@font-face {
   font-family: HelveticaNeueLTStd-Roman_1fp;
   src: url("fonts/HelveticaNeueLTStd-Roman_1fp.woff") format("woff");
}

@font-face {
   font-family: OCRAStd_1fm;
   src: url("fonts/OCRAStd_1fm.woff") format("woff");
}

</style>
<!-- End embedded font definitions -->

<!-- Begin page background -->
<div id="pg3Overlay" style="width:100%; height:100%; position:absolute; z-index:1; background-color:rgba(0,0,0,0); -webkit-user-select: none;"></div>
<div id="pg3" style="-webkit-user-select: none;"><object width="934" height="1209" data="3/3.svg" type="image/svg+xml" id="pdf3" style="width:934px; height:1209px; -moz-transform:scale(1); z-index: 0;"></object></div>
<!-- End page background -->


<!-- Begin text definitions (Positioned/styled in CSS) -->
<div class="text-container"><span id="t1_3" class="t s0_3">950922 </span>
<span id="t2_3" class="t s1_3">Name </span><span id="t3_3" class="t s2_3">(not your trade name) </span><span id="t4_3" class="t s1_3">Employer identification number (EIN) </span>
<span id="t5_3" class="t s3_3">– </span>
<span id="t6_3" class="t s4_3">Part 3: </span><span id="t7_3" class="t s5_3">Tell us about your business. If a question does NOT apply to your business, leave it blank. </span>
<span id="t8_3" class="t s6_3">17 </span><span id="t9_3" class="t s6_3">If your business has closed or you stopped paying wages </span><span id="ta_3" class="t s7_3">. </span><span id="tb_3" class="t s7_3">. </span><span id="tc_3" class="t s7_3">. </span><span id="td_3" class="t s7_3">. </span><span id="te_3" class="t s7_3">. </span><span id="tf_3" class="t s7_3">. </span><span id="tg_3" class="t s7_3">. </span><span id="th_3" class="t s7_3">. </span><span id="ti_3" class="t s7_3">. </span><span id="tj_3" class="t s7_3">. </span><span id="tk_3" class="t s7_3">. </span><span id="tl_3" class="t s7_3">. </span><span id="tm_3" class="t s7_3">. </span><span id="tn_3" class="t s7_3">. </span><span id="to_3" class="t s7_3">. </span><span id="tp_3" class="t s7_3">Check here, and </span>
<span id="tq_3" class="t s7_3">enter the final date you paid wages </span><span id="tr_3" class="t s7_3">/ </span><span id="ts_3" class="t s7_3">/ </span><span id="tt_3" class="t s7_3">; also attach a statement to your return. See instructions. </span>
<span id="tu_3" class="t s6_3">18 </span><span id="tv_3" class="t s6_3">If you’re a seasonal employer and you don’t have to file a return for every quarter of the year </span><span id="tw_3" class="t s7_3">. </span><span id="tx_3" class="t s7_3">. </span><span id="ty_3" class="t s7_3">. </span><span id="tz_3" class="t s7_3">Check here. </span>
<span id="t10_3" class="t s6_3">19 </span><span id="t11_3" class="t v0_3 s6_3">Qualified health plan expenses allocable to qualified sick leave wages for leave taken before April 1, 2021 </span><span id="t12_3" class="t s6_3">19 </span><span id="t13_3" class="t s8_3">. </span>
<span id="t14_3" class="t s6_3">20 </span><span id="t15_3" class="t v1_3 s6_3">Qualified health plan expenses allocable to qualified family leave wages for leave taken before April 1, 2021 </span><span id="t16_3" class="t s6_3">20 </span><span id="t17_3" class="t s8_3">. </span>
<span id="t18_3" class="t s6_3">21 </span><span id="t19_3" class="t s6_3">Reserved for future use </span><span id="t1a_3" class="t s7_3">. </span><span id="t1b_3" class="t s7_3">. </span><span id="t1c_3" class="t s7_3">. </span><span id="t1d_3" class="t s7_3">. </span><span id="t1e_3" class="t s7_3">. </span><span id="t1f_3" class="t s7_3">. </span><span id="t1g_3" class="t s7_3">. </span><span id="t1h_3" class="t s7_3">. </span><span id="t1i_3" class="t s7_3">. </span><span id="t1j_3" class="t s7_3">. </span><span id="t1k_3" class="t s7_3">. </span><span id="t1l_3" class="t s7_3">. </span><span id="t1m_3" class="t s7_3">. </span><span id="t1n_3" class="t s7_3">. </span><span id="t1o_3" class="t s7_3">. </span><span id="t1p_3" class="t s7_3">. </span><span id="t1q_3" class="t s7_3">. </span><span id="t1r_3" class="t s7_3">. </span><span id="t1s_3" class="t s7_3">. </span><span id="t1t_3" class="t s7_3">. </span><span id="t1u_3" class="t s7_3">. </span><span id="t1v_3" class="t s7_3">. </span><span id="t1w_3" class="t s6_3">21 </span><span id="t1x_3" class="t s8_3">. </span>
<span id="t1y_3" class="t s6_3">22 </span><span id="t1z_3" class="t s6_3">Reserved for future use </span><span id="t20_3" class="t s7_3">. </span><span id="t21_3" class="t s7_3">. </span><span id="t22_3" class="t s7_3">. </span><span id="t23_3" class="t s7_3">. </span><span id="t24_3" class="t s7_3">. </span><span id="t25_3" class="t s7_3">. </span><span id="t26_3" class="t s7_3">. </span><span id="t27_3" class="t s7_3">. </span><span id="t28_3" class="t s7_3">. </span><span id="t29_3" class="t s7_3">. </span><span id="t2a_3" class="t s7_3">. </span><span id="t2b_3" class="t s7_3">. </span><span id="t2c_3" class="t s7_3">. </span><span id="t2d_3" class="t s7_3">. </span><span id="t2e_3" class="t s7_3">. </span><span id="t2f_3" class="t s7_3">. </span><span id="t2g_3" class="t s7_3">. </span><span id="t2h_3" class="t s7_3">. </span><span id="t2i_3" class="t s7_3">. </span><span id="t2j_3" class="t s7_3">. </span><span id="t2k_3" class="t s7_3">. </span><span id="t2l_3" class="t s7_3">. </span><span id="t2m_3" class="t s6_3">22 </span><span id="t2n_3" class="t s8_3">. </span>
<span id="t2o_3" class="t s6_3">23 </span><span id="t2p_3" class="t v2_3 s6_3">Qualified sick leave wages for leave taken after March 31, 2021, and before October 1, 2021 </span><span id="t2q_3" class="t s6_3">23 </span><span id="t2r_3" class="t s8_3">. </span>
<span id="t2s_3" class="t s6_3">24 </span><span id="t2t_3" class="t v3_3 s6_3">Qualified health plan expenses allocable to qualified sick leave wages reported on line 23 </span><span id="t2u_3" class="t s6_3">24 </span><span id="t2v_3" class="t s8_3">. </span>
<span id="t2w_3" class="t s6_3">25 </span><span id="t2x_3" class="t s6_3">Amounts under certain collectively bargained agreements allocable to qualified sick </span>
<span id="t2y_3" class="t s6_3">leave wages reported on line 23 </span><span id="t2z_3" class="t s7_3">. </span><span id="t30_3" class="t s7_3">. </span><span id="t31_3" class="t s7_3">. </span><span id="t32_3" class="t s7_3">. </span><span id="t33_3" class="t s7_3">. </span><span id="t34_3" class="t s7_3">. </span><span id="t35_3" class="t s7_3">. </span><span id="t36_3" class="t s7_3">. </span><span id="t37_3" class="t s7_3">. </span><span id="t38_3" class="t s7_3">. </span><span id="t39_3" class="t s7_3">. </span><span id="t3a_3" class="t s7_3">. </span><span id="t3b_3" class="t s7_3">. </span><span id="t3c_3" class="t s7_3">. </span><span id="t3d_3" class="t s7_3">. </span><span id="t3e_3" class="t s7_3">. </span><span id="t3f_3" class="t s7_3">. </span><span id="t3g_3" class="t s7_3">. </span><span id="t3h_3" class="t s7_3">. </span><span id="t3i_3" class="t s6_3">25 </span>
<span id="t3j_3" class="t s8_3">. </span>
<span id="t3k_3" class="t s6_3">26 </span><span id="t3l_3" class="t v4_3 s6_3">Qualified family leave wages for leave taken after March 31, 2021, and before October 1, 2021 </span><span id="t3m_3" class="t s6_3">26 </span><span id="t3n_3" class="t s8_3">. </span>
<span id="t3o_3" class="t s6_3">27 </span><span id="t3p_3" class="t v5_3 s6_3">Qualified health plan expenses allocable to qualified family leave wages reported on line 26 </span><span id="t3q_3" class="t s6_3">27 </span><span id="t3r_3" class="t s8_3">. </span>
<span id="t3s_3" class="t s6_3">28 </span><span id="t3t_3" class="t s6_3">Amounts under certain collectively bargained agreements allocable to qualified family </span>
<span id="t3u_3" class="t s6_3">leave wages reported on line 26 </span><span id="t3v_3" class="t s7_3">. </span><span id="t3w_3" class="t s7_3">. </span><span id="t3x_3" class="t s7_3">. </span><span id="t3y_3" class="t s7_3">. </span><span id="t3z_3" class="t s7_3">. </span><span id="t40_3" class="t s7_3">. </span><span id="t41_3" class="t s7_3">. </span><span id="t42_3" class="t s7_3">. </span><span id="t43_3" class="t s7_3">. </span><span id="t44_3" class="t s7_3">. </span><span id="t45_3" class="t s7_3">. </span><span id="t46_3" class="t s7_3">. </span><span id="t47_3" class="t s7_3">. </span><span id="t48_3" class="t s7_3">. </span><span id="t49_3" class="t s7_3">. </span><span id="t4a_3" class="t s7_3">. </span><span id="t4b_3" class="t s7_3">. </span><span id="t4c_3" class="t s7_3">. </span><span id="t4d_3" class="t s7_3">. </span><span id="t4e_3" class="t s6_3">28 </span>
<span id="t4f_3" class="t s8_3">. </span>
<span id="t4g_3" class="t s4_3">Part 4: </span><span id="t4h_3" class="t s5_3">May we speak with your third-party designee? </span>
<span id="t4i_3" class="t s9_3">Do you want to allow an employee, a paid tax preparer, or another person to discuss this return with the IRS? </span><span id="t4j_3" class="t sa_3">See the instructions </span>
<span id="t4k_3" class="t sa_3">for details. </span>
<span id="t4l_3" class="t s7_3">Yes. </span><span id="t4m_3" class="t s7_3">Designee’s name and phone number </span>
<span id="t4n_3" class="t s7_3">Select a 5-digit personal identification number (PIN) to use when talking to the IRS. </span>
<span id="t4o_3" class="t s7_3">No. </span>
<span id="t4p_3" class="t s4_3">Part 5: </span><span id="t4q_3" class="t s5_3">Sign here. You MUST complete all three pages of Form 941 and SIGN it. </span>
<span id="t4r_3" class="t sb_3">Under penalties of perjury, I declare that I have examined this return, including accompanying schedules and statements, and to the best of my knowledge </span>
<span id="t4s_3" class="t sb_3">and belief, it is true, correct, and complete. Declaration of preparer (other than taxpayer) is based on all information of which preparer has any knowledge. </span>
<span id="t4t_3" class="t sc_3">Sign your </span>
<span id="t4u_3" class="t sc_3">name here </span>
<span id="t4v_3" class="t s7_3">Date </span><span id="t4w_3" class="t s7_3">/ </span><span id="t4x_3" class="t s7_3">/ </span>
<span id="t4y_3" class="t s7_3">Print your </span>
<span id="t4z_3" class="t s7_3">name here </span>
<span id="t50_3" class="t s7_3">Print your </span>
<span id="t51_3" class="t s7_3">title here </span>
<span id="t52_3" class="t s7_3">Best daytime phone </span>
<span id="t53_3" class="t sd_3">Paid Preparer Use Only </span><span id="t54_3" class="t s7_3">Check if you’re self-employed </span><span id="t55_3" class="t s7_3">. </span><span id="t56_3" class="t s7_3">. </span><span id="t57_3" class="t s7_3">. </span>
<span id="t58_3" class="t sa_3">Preparer’s name </span><span id="t59_3" class="t sb_3">PTIN </span>
<span id="t5a_3" class="t s7_3">Preparer’s signature </span><span id="t5b_3" class="t s7_3">Date </span><span id="t5c_3" class="t s7_3">/ </span><span id="t5d_3" class="t s7_3">/ </span>
<span id="t5e_3" class="t v6_3 sa_3">Firm’s name (or yours </span>
<span id="t5f_3" class="t v6_3 sa_3">if self-employed) </span><span id="t5g_3" class="t s7_3">EIN </span>
<span id="t5h_3" class="t s7_3">Address </span><span id="t5i_3" class="t s7_3">Phone </span>
<span id="t5j_3" class="t s7_3">City </span><span id="t5k_3" class="t s7_3">State </span><span id="t5l_3" class="t sa_3">ZIP code </span>
<span id="t5m_3" class="t sb_3">Page </span><span id="t5n_3" class="t sd_3">3 </span><span id="t5o_3" class="t sb_3">Form </span><span id="t5p_3" class="t sd_3">941 </span><span id="t5q_3" class="t sb_3">(Rev. 3-2023) </span></div>
<!-- End text definitions -->


<!-- Begin Form Data -->
<input id="form1_3" type="text" tabindex="113" value="" data-objref="362 0 R" data-field-name="topmostSubform[0].Page3[0].Name_ReadOrder[0].f1_3[0]"/>
<input id="form2_3" type="text" tabindex="114" maxlength="2" value="" data-objref="360 0 R" data-field-name="topmostSubform[0].Page3[0].EIN_Number[0].f1_1[0]"/>
<input id="form3_3" type="text" tabindex="115" maxlength="7" value="" data-objref="361 0 R" data-field-name="topmostSubform[0].Page3[0].EIN_Number[0].f1_2[0]"/>
<input id="form4_3" type="checkbox" tabindex="116" value="1" data-objref="319 0 R" data-field-name="topmostSubform[0].Page3[0].c3_1[0]" imageName="3/form/319 0 R" images="110100"/>
<input id="form5_3" type="text" tabindex="117" maxlength="8" value="" data-objref="320 0 R" data-field-name="topmostSubform[0].Page3[0].f3_3[0]"/>
<input id="form6_3" type="checkbox" tabindex="118" value="1" data-objref="321 0 R" data-field-name="topmostSubform[0].Page3[0].c3_2[0]" imageName="3/form/321 0 R" images="110100"/>
<input id="form7_3" type="text" tabindex="119" value="" data-objref="322 0 R" data-field-name="topmostSubform[0].Page3[0].f3_4[0]"/>
<input id="form8_3" type="text" tabindex="120" maxlength="3" value="" data-objref="323 0 R" data-field-name="topmostSubform[0].Page3[0].f3_5[0]"/>
<input id="form9_3" type="text" tabindex="121" value="" data-objref="324 0 R" data-field-name="topmostSubform[0].Page3[0].f3_6[0]"/>
<input id="form10_3" type="text" tabindex="122" maxlength="3" value="" data-objref="325 0 R" data-field-name="topmostSubform[0].Page3[0].f3_7[0]"/>
<input id="form11_3" type="button" tabindex="123" disabled="disabled" data-objref="326 0 R" data-field-name="topmostSubform[0].Page3[0].f3_8[0]"/>
<input id="form12_3" type="button" tabindex="124" maxlength="3" disabled="disabled" data-objref="327 0 R" data-field-name="topmostSubform[0].Page3[0].f3_9[0]"/>
<input id="form13_3" type="button" tabindex="125" disabled="disabled" data-objref="328 0 R" data-field-name="topmostSubform[0].Page3[0].f3_10[0]"/>
<input id="form14_3" type="button" tabindex="126" maxlength="3" disabled="disabled" data-objref="329 0 R" data-field-name="topmostSubform[0].Page3[0].f3_11[0]"/>
<input id="form15_3" type="text" tabindex="127" value="" data-objref="330 0 R" data-field-name="topmostSubform[0].Page3[0].f3_12[0]"/>
<input id="form16_3" type="text" tabindex="128" maxlength="3" value="" data-objref="331 0 R" data-field-name="topmostSubform[0].Page3[0].f3_13[0]"/>
<input id="form17_3" type="text" tabindex="129" value="" data-objref="332 0 R" data-field-name="topmostSubform[0].Page3[0].f3_14[0]"/>
<input id="form18_3" type="text" tabindex="130" maxlength="3" value="" data-objref="333 0 R" data-field-name="topmostSubform[0].Page3[0].f3_15[0]"/>
<input id="form19_3" type="text" tabindex="131" value="" data-objref="334 0 R" data-field-name="topmostSubform[0].Page3[0].f3_16[0]"/>
<input id="form20_3" type="text" tabindex="132" maxlength="3" value="" data-objref="335 0 R" data-field-name="topmostSubform[0].Page3[0].f3_17[0]"/>
<input id="form21_3" type="text" tabindex="133" value="" data-objref="336 0 R" data-field-name="topmostSubform[0].Page3[0].f3_18[0]"/>
<input id="form22_3" type="text" tabindex="134" maxlength="3" value="" data-objref="337 0 R" data-field-name="topmostSubform[0].Page3[0].f3_19[0]"/>
<input id="form23_3" type="text" tabindex="135" value="" data-objref="338 0 R" data-field-name="topmostSubform[0].Page3[0].f3_20[0]"/>
<input id="form24_3" type="text" tabindex="136" maxlength="3" value="" data-objref="339 0 R" data-field-name="topmostSubform[0].Page3[0].f3_21[0]"/>
<input id="form25_3" type="text" tabindex="137" value="" data-objref="340 0 R" data-field-name="topmostSubform[0].Page3[0].f3_22[0]"/>
<input id="form26_3" type="text" tabindex="138" maxlength="3" value="" data-objref="341 0 R" data-field-name="topmostSubform[0].Page3[0].f3_23[0]"/>
<input id="form27_3" type="checkbox" tabindex="139" value="1" data-objref="342 0 R" data-field-name="topmostSubform[0].Page3[0].c3_4[0]" imageName="3/form/342 0 R" images="110100"/>
<input id="form28_3" type="text" tabindex="140" value="" data-objref="343 0 R" data-field-name="topmostSubform[0].Page3[0].f3_24[0]"/>
<input id="form29_3" type="text" tabindex="141" value="" data-objref="344 0 R" data-field-name="topmostSubform[0].Page3[0].f3_25[0]"/>
<input id="form30_3" type="text" tabindex="142" maxlength="5" value="" data-objref="345 0 R" data-field-name="topmostSubform[0].Page3[0].f3_26[0]"/>
<input id="form31_3" type="checkbox" tabindex="143" value="2" data-objref="346 0 R" data-field-name="topmostSubform[0].Page3[0].c3_4[1]" imageName="3/form/346 0 R" images="110100"/>
<input id="form32_3" type="text" tabindex="144" value="" data-objref="347 0 R" data-field-name="topmostSubform[0].Page3[0].f3_27[0]"/>
<input id="form33_3" type="text" tabindex="145" value="" data-objref="348 0 R" data-field-name="topmostSubform[0].Page3[0].f3_28[0]"/>
<input id="form34_3" type="text" tabindex="146" value="" data-objref="349 0 R" data-field-name="topmostSubform[0].Page3[0].f3_29[0]"/>
<input id="form35_3" type="checkbox" tabindex="147" value="1" data-objref="350 0 R" data-field-name="topmostSubform[0].Page3[0].c3_5[0]" imageName="3/form/350 0 R" images="110100"/>
<input id="form36_3" type="text" tabindex="148" value="" data-objref="351 0 R" data-field-name="topmostSubform[0].Page3[0].f3_30[0]"/>
<input id="form37_3" type="text" tabindex="149" maxlength="11" value="" data-objref="352 0 R" data-field-name="topmostSubform[0].Page3[0].f3_31[0]"/>
<input id="form38_3" type="text" tabindex="150" value="" data-objref="353 0 R" data-field-name="topmostSubform[0].Page3[0].f3_32[0]"/>
<input id="form39_3" type="text" tabindex="151" maxlength="10" value="" data-objref="354 0 R" data-field-name="topmostSubform[0].Page3[0].f3_33[0]"/>
<input id="form40_3" type="text" tabindex="152" value="" data-objref="355 0 R" data-field-name="topmostSubform[0].Page3[0].f3_34[0]"/>
<input id="form41_3" type="text" tabindex="153" value="" data-objref="356 0 R" data-field-name="topmostSubform[0].Page3[0].f3_35[0]"/>
<input id="form42_3" type="text" tabindex="154" value="" data-objref="357 0 R" data-field-name="topmostSubform[0].Page3[0].f3_36[0]"/>
<input id="form43_3" type="text" tabindex="155" maxlength="2" value="" data-objref="358 0 R" data-field-name="topmostSubform[0].Page3[0].f3_37[0]"/>
<input id="form44_3" type="text" tabindex="156" maxlength="10" value="" data-objref="359 0 R" data-field-name="topmostSubform[0].Page3[0].f3_38[0]"/>

<!-- End Form Data -->

</div>

</div>
</div>
<div id="page4" style="width: 934px; height: 1209px; margin-top:20px;" class="page">
<div class="page-inner" style="width: 934px; height: 1209px;">

<div id="p4" class="pageArea" style="overflow: hidden; position: relative; width: 934px; height: 1209px; margin-top:auto; margin-left:auto; margin-right:auto; background-color: white;">

<!-- Begin shared CSS values -->
<style class="shared-css" type="text/css" >
.t {
   transform-origin: bottom left;
   z-index: 2;
   position: absolute;
   white-space: pre;
   overflow: visible;
   line-height: 1.5;
}
.text-container {
   white-space: pre;
}
@supports (-webkit-touch-callout: none) {
   .text-container {
      white-space: normal;
   }
}
</style>
<!-- End shared CSS values -->


<!-- Begin inline CSS -->
<style type="text/css" >

#t1_4{left:814px;bottom:1134px;letter-spacing:0.2px;}
#t2_4{left:138px;bottom:585px;letter-spacing:-0.1px;}

.s0_4{font-size:15px;font-family:OCRAStd_1fm;color:#000;}
.s1_4{font-size:43px;font-family:HelveticaNeueLTStd-Bd_1fn;color:#000;}
</style>
<!-- End inline CSS -->

<!-- Begin embedded font definitions -->
<style id="fonts4" type="text/css" >

@font-face {
   font-family: HelveticaNeueLTStd-Bd_1fn;
   src: url("fonts/HelveticaNeueLTStd-Bd_1fn.woff") format("woff");
}

@font-face {
   font-family: OCRAStd_1fm;
   src: url("fonts/OCRAStd_1fm.woff") format("woff");
}

</style>
<!-- End embedded font definitions -->

<!-- Begin page background -->
<div id="pg4Overlay" style="width:100%; height:100%; position:absolute; z-index:1; background-color:rgba(0,0,0,0); -webkit-user-select: none;"></div>
<div id="pg4" style="-webkit-user-select: none;"><object width="934" height="1209" data="4/4.svg" type="image/svg+xml" id="pdf4" style="width:934px; height:1209px; -moz-transform:scale(1); z-index: 0;"></object></div>
<!-- End page background -->


<!-- Begin text definitions (Positioned/styled in CSS) -->
<div class="text-container"><span id="t1_4" class="t s0_4">951020 </span>
<span id="t2_4" class="t s1_4">This page intentionally left blank </span></div>
<!-- End text definitions -->


</div>

</div>
</div>
<div id="page5" style="width: 934px; height: 1209px; margin-top:20px;" class="page">
<div class="page-inner" style="width: 934px; height: 1209px;">

<div id="p5" class="pageArea" style="overflow: hidden; position: relative; width: 934px; height: 1209px; margin-top:auto; margin-left:auto; margin-right:auto; background-color: white;">

<!-- Begin shared CSS values -->
<style class="shared-css" type="text/css" >
.t {
   transform-origin: bottom left;
   z-index: 2;
   position: absolute;
   white-space: pre;
   overflow: visible;
   line-height: 1.5;
}
.text-container {
   white-space: pre;
}
@supports (-webkit-touch-callout: none) {
   .text-container {
      white-space: normal;
   }
}
</style>
<!-- End shared CSS values -->


<!-- Begin inline CSS -->
<style type="text/css" >

#t1_5{left:55px;bottom:1118px;letter-spacing:0.18px;}
#t2_5{left:55px;bottom:1095px;letter-spacing:0.2px;}
#t3_5{left:55px;bottom:1053px;letter-spacing:0.18px;}
#t4_5{left:55px;bottom:1031px;letter-spacing:0.13px;}
#t5_5{left:55px;bottom:1014px;letter-spacing:0.13px;}
#t6_5{left:55px;bottom:998px;letter-spacing:0.13px;}
#t7_5{left:55px;bottom:982px;letter-spacing:0.12px;}
#t8_5{left:55px;bottom:952px;letter-spacing:0.18px;}
#t9_5{left:55px;bottom:930px;letter-spacing:0.13px;}
#ta_5{left:55px;bottom:914px;letter-spacing:0.11px;}
#tb_5{left:99px;bottom:914px;}
#tc_5{left:55px;bottom:891px;letter-spacing:0.12px;}
#td_5{left:55px;bottom:875px;letter-spacing:0.11px;}
#te_5{left:55px;bottom:858px;letter-spacing:0.12px;}
#tf_5{left:55px;bottom:842px;letter-spacing:0.12px;}
#tg_5{left:55px;bottom:825px;letter-spacing:0.11px;}
#th_5{left:55px;bottom:809px;letter-spacing:0.11px;}
#ti_5{left:55px;bottom:786px;letter-spacing:0.13px;}
#tj_5{left:55px;bottom:770px;letter-spacing:0.13px;}
#tk_5{left:55px;bottom:754px;letter-spacing:0.12px;}
#tl_5{left:55px;bottom:737px;letter-spacing:0.13px;}
#tm_5{left:70px;bottom:715px;letter-spacing:0.13px;}
#tn_5{left:55px;bottom:698px;letter-spacing:0.12px;}
#to_5{left:55px;bottom:682px;letter-spacing:0.12px;}
#tp_5{left:55px;bottom:665px;letter-spacing:0.13px;}
#tq_5{left:56px;bottom:620px;}
#tr_5{left:70px;bottom:628px;}
#ts_5{left:57px;bottom:623px;letter-spacing:-0.09px;}
#tt_5{left:98px;bottom:643px;letter-spacing:0.14px;}
#tu_5{left:399px;bottom:643px;letter-spacing:0.1px;}
#tv_5{left:98px;bottom:626px;letter-spacing:0.13px;}
#tw_5{left:98px;bottom:610px;letter-spacing:0.13px;}
#tx_5{left:55px;bottom:593px;letter-spacing:0.17px;}
#ty_5{left:88px;bottom:593px;letter-spacing:0.12px;}
#tz_5{left:281px;bottom:593px;letter-spacing:0.12px;}
#t10_5{left:404px;bottom:593px;letter-spacing:0.11px;}
#t11_5{left:55px;bottom:577px;letter-spacing:0.12px;}
#t12_5{left:484px;bottom:1053px;letter-spacing:0.16px;}
#t13_5{left:484px;bottom:1031px;letter-spacing:0.14px;}
#t14_5{left:816px;bottom:1031px;letter-spacing:0.1px;}
#t15_5{left:484px;bottom:1014px;letter-spacing:0.12px;}
#t16_5{left:484px;bottom:998px;letter-spacing:0.11px;}
#t17_5{left:665px;bottom:998px;letter-spacing:0.14px;}
#t18_5{left:778px;bottom:998px;letter-spacing:0.12px;}
#t19_5{left:484px;bottom:982px;letter-spacing:0.12px;}
#t1a_5{left:484px;bottom:965px;letter-spacing:0.12px;}
#t1b_5{left:484px;bottom:949px;letter-spacing:0.12px;}
#t1c_5{left:484px;bottom:932px;letter-spacing:0.12px;}
#t1d_5{left:484px;bottom:910px;letter-spacing:0.15px;}
#t1e_5{left:642px;bottom:910px;letter-spacing:0.13px;}
#t1f_5{left:484px;bottom:893px;letter-spacing:0.14px;}
#t1g_5{left:484px;bottom:871px;letter-spacing:0.14px;}
#t1h_5{left:626px;bottom:871px;letter-spacing:0.12px;}
#t1i_5{left:484px;bottom:854px;letter-spacing:0.13px;}
#t1j_5{left:484px;bottom:838px;letter-spacing:0.12px;}
#t1k_5{left:484px;bottom:815px;letter-spacing:0.15px;}
#t1l_5{left:686px;bottom:815px;letter-spacing:0.14px;}
#t1m_5{left:484px;bottom:799px;letter-spacing:0.14px;}
#t1n_5{left:484px;bottom:776px;letter-spacing:0.13px;}
#t1o_5{left:484px;bottom:760px;letter-spacing:0.12px;}
#t1p_5{left:484px;bottom:744px;letter-spacing:0.12px;}
#t1q_5{left:484px;bottom:727px;letter-spacing:0.12px;}
#t1r_5{left:484px;bottom:711px;letter-spacing:0.13px;}
#t1s_5{left:484px;bottom:694px;letter-spacing:0.13px;}
#t1t_5{left:484px;bottom:678px;letter-spacing:0.12px;}
#t1u_5{left:484px;bottom:655px;letter-spacing:0.13px;}
#t1v_5{left:484px;bottom:639px;letter-spacing:0.12px;}
#t1w_5{left:484px;bottom:622px;letter-spacing:0.14px;}
#t1x_5{left:484px;bottom:600px;letter-spacing:0.12px;}
#t1y_5{left:527px;bottom:600px;letter-spacing:0.12px;}
#t1z_5{left:484px;bottom:584px;letter-spacing:0.13px;}
#t20_5{left:222px;bottom:372px;letter-spacing:0.17px;}
#t21_5{left:67.4px;bottom:330.5px;letter-spacing:-0.18px;}
#t22_5{left:69px;bottom:314px;letter-spacing:-0.16px;}
#t23_5{left:55px;bottom:312px;letter-spacing:0.08px;}
#t24_5{left:55px;bottom:302px;letter-spacing:0.07px;}
#t25_5{left:389px;bottom:329px;letter-spacing:0.2px;}
#t26_5{left:313px;bottom:307px;letter-spacing:0.11px;}
#t27_5{left:770px;bottom:340px;letter-spacing:-0.17px;}
#t28_5{left:780px;bottom:298px;letter-spacing:-0.28px;}
#t29_5{left:818px;bottom:298px;letter-spacing:-0.3px;}
#t2a_5{left:60px;bottom:286px;}
#t2b_5{left:77px;bottom:285px;letter-spacing:-0.13px;}
#t2c_5{left:77px;bottom:273px;letter-spacing:-0.14px;}
#t2d_5{left:123px;bottom:244px;}
#t2e_5{left:337px;bottom:286px;}
#t2f_5{left:354px;bottom:264px;letter-spacing:0.14px;}
#t2g_5{left:354px;bottom:249px;letter-spacing:-0.15px;}
#t2h_5{left:545px;bottom:249px;letter-spacing:-0.15px;}
#t2i_5{left:646px;bottom:249px;letter-spacing:-0.11px;}
#t2j_5{left:726px;bottom:286px;letter-spacing:-0.13px;}
#t2k_5{left:838px;bottom:286px;letter-spacing:-0.16px;}
#t2l_5{left:60px;bottom:229px;}
#t2m_5{left:75px;bottom:229px;letter-spacing:-0.15px;}
#t2n_5{left:129px;bottom:204px;letter-spacing:0.08px;}
#t2o_5{left:117px;bottom:190px;letter-spacing:0.11px;}
#t2p_5{left:127px;bottom:156px;letter-spacing:0.09px;}
#t2q_5{left:117px;bottom:141px;letter-spacing:0.11px;}
#t2r_5{left:272px;bottom:201px;letter-spacing:0.08px;}
#t2s_5{left:260px;bottom:187px;letter-spacing:0.11px;}
#t2t_5{left:272px;bottom:156px;letter-spacing:0.08px;}
#t2u_5{left:260px;bottom:141px;letter-spacing:0.11px;}
#t2v_5{left:337px;bottom:228px;}
#t2w_5{left:352px;bottom:228px;letter-spacing:-0.13px;}
#t2x_5{left:352px;bottom:191px;letter-spacing:-0.14px;}
#t2y_5{left:352px;bottom:155px;letter-spacing:-0.1px;}

.s0_5{font-size:21px;font-family:ITCFranklinGothicStd-Demi_1fq;color:#000;}
.s1_5{font-size:18px;font-family:HelveticaNeueLTStd-Bd_1fn;color:#000;}
.s2_5{font-size:15px;font-family:HelveticaNeueLTStd-Roman_1fp;color:#000;}
.s3_5{font-size:15px;font-family:HelveticaNeueLTStd-Bd_1fn;color:#000;}
.s4_5{font-size:33px;font-family:AdobePiStd_c;color:#FFF;}
.s5_5{font-size:22px;font-family:ITCFranklinGothicStd-Demi_1fq;color:#000;}
.s6_5{font-size:7px;font-family:HelveticaNeueLTStd-Blk_e;color:#FFF;}
.s7_5{font-size:15px;font-family:HelveticaNeueLTStd-It_1fo;color:#000;}
.s8_5{font-size:11px;font-family:HelveticaNeueLTStd-Roman_1fp;color:#000;}
.s9_5{font-size:37px;font-family:HelveticaNeueLTStd-BlkCn_1fr;color:#000;}
.sa_5{font-size:9px;font-family:HelveticaNeueLTStd-Roman_1fp;color:#000;}
.sb_5{font-size:12px;font-family:HelveticaNeueLTStd-Bd_1fn;color:#000;}
.sc_5{font-size:31px;font-family:HelveticaNeueLTStd-BdOu_f;color:#000;}
.sd_5{font-size:31px;font-family:HelveticaNeueLTStd-Blk_e;color:#000;}
.se_5{font-size:11px;font-family:HelveticaNeueLTStd-Bd_1fn;color:#000;}
.sf_5{font-size:12px;font-family:HelveticaNeueLTStd-Roman_1fp;color:#000;}
.sg_5{font-size:10px;font-family:HelveticaNeueLTStd-Roman_1fp;color:#000;}
.t.v0_5{transform:scaleX(1.166);}
.t.v1_5{transform:scaleX(0.87);}
.t.m0_5{transform:matrix(0,-0.86,1,0,0,0);}

#form1_5:focus,#form2_5:focus,#form3_5:focus,#form4_5:focus,#form5_5:focus,#form8_5:focus,#form11_5:focus{
    background: white; /* Change to white when focused */
}

#form1_5{   z-index: 2; padding: 0px;  position: absolute;  left: 660px;   top: 921px; width: 162px;  height: 37px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form2_5{   z-index: 2; padding: 0px;  position: absolute;  left: 825px;   top: 921px; width: 51px;   height: 37px;  color: rgb(0,0,0);   text-align: right;   background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form3_5{   z-index: 2; padding: 0px;  position: absolute;  left: 89px; top: 937px; width: 31px;   height: 23px;  color: rgb(0,0,0);   text-align: center;  background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form4_5{   z-index: 2; padding: 0px;  position: absolute;  left: 132px;   top: 937px; width: 74px;   height: 23px;  color: rgb(0,0,0);   text-align: center;  background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form5_5{   z-index: 2; padding: 0px;  position: absolute;  left: 352px;   top: 979px; width: 381px;  height: 17px;  color: rgb(0,0,0);   text-align: left; background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form6_5{   z-index: 2; border-style: none;  padding: 0px;  position: absolute;  left: 72px; top: 990px; width: 20px;   height: 20px;  color: rgb(0,0,0);   text-align: left; background: #f4f4fc; font: normal 13px Wingdings, 'Zapf Dingbats';}
#form7_5{   z-index: 2; border-style: none;  padding: 0px;  position: absolute;  left: 204px;   top: 993px; width: 20px;   height: 20px;  color: rgb(0,0,0);   text-align: left; background: #f4f4fc; font: normal 13px Wingdings, 'Zapf Dingbats';}
#form8_5{   z-index: 2; padding: 0px;  position: absolute;  left: 347px;   top: 1013px;   width: 528px;  height: 18px;  color: rgb(0,0,0);   text-align: left; background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form9_5{   z-index: 2; border-style: none;  padding: 0px;  position: absolute;  left: 72px; top: 1039px;   width: 20px;   height: 20px;  color: rgb(0,0,0);   text-align: left; background: #f4f4fc; font: normal 13px Wingdings, 'Zapf Dingbats';}
#form10_5{  z-index: 2; border-style: none;  padding: 0px;  position: absolute;  left: 204px;   top: 1039px;   width: 20px;   height: 20px;  color: rgb(0,0,0);   text-align: left; background: #f4f4fc; font: normal 13px Wingdings, 'Zapf Dingbats';}
#form11_5{  z-index: 2; padding: 0px;  position: absolute;  left: 352px;   top: 1053px;   width: 527px;  height: 17px;  color: rgb(0,0,0);   text-align: left; background: #f4f4fc; border: none;  font: normal 15px 'Times New Roman', Times, serif;}
#form7_5 { z-index:3; }
#form10_5 { z-index:2; }
#form6_5 { z-index:3; }
#form9_5 { z-index:2; }

</style>
<!-- End inline CSS -->

<!-- Begin embedded font definitions -->
<style id="fonts5" type="text/css" >

@font-face {
   font-family: AdobePiStd_c;
   src: url("fonts/AdobePiStd_c.woff") format("woff");
}

@font-face {
   font-family: HelveticaNeueLTStd-BdOu_f;
   src: url("fonts/HelveticaNeueLTStd-BdOu_f.woff") format("woff");
}

@font-face {
   font-family: HelveticaNeueLTStd-Bd_1fn;
   src: url("fonts/HelveticaNeueLTStd-Bd_1fn.woff") format("woff");
}

@font-face {
   font-family: HelveticaNeueLTStd-BlkCn_1fr;
   src: url("fonts/HelveticaNeueLTStd-BlkCn_1fr.woff") format("woff");
}

@font-face {
   font-family: HelveticaNeueLTStd-Blk_e;
   src: url("fonts/HelveticaNeueLTStd-Blk_e.woff") format("woff");
}

@font-face {
   font-family: HelveticaNeueLTStd-It_1fo;
   src: url("fonts/HelveticaNeueLTStd-It_1fo.woff") format("woff");
}

@font-face {
   font-family: HelveticaNeueLTStd-Roman_1fp;
   src: url("fonts/HelveticaNeueLTStd-Roman_1fp.woff") format("woff");
}

@font-face {
   font-family: ITCFranklinGothicStd-Demi_1fq;
   src: url("fonts/ITCFranklinGothicStd-Demi_1fq.woff") format("woff");
}

</style>
<!-- End embedded font definitions -->

<!-- Begin page background -->
<div id="pg5Overlay" style="width:100%; height:100%; position:absolute; z-index:1; background-color:rgba(0,0,0,0); -webkit-user-select: none;"></div>
<div id="pg5" style="-webkit-user-select: none;"><object width="934" height="1209" data="5/5.svg" type="image/svg+xml" id="pdf5" style="width:934px; height:1209px; -moz-transform:scale(1); z-index: 0;"></object></div>
<!-- End page background -->


<!-- Begin text definitions (Positioned/styled in CSS) -->
<div class="text-container"><span id="t1_5" class="t s0_5">Form 941-V, </span>
<span id="t2_5" class="t s0_5">Payment Voucher </span>
<span id="t3_5" class="t s1_5">Purpose of Form </span>
<span id="t4_5" class="t s2_5">Complete Form 941-V if you’re making a payment with </span>
<span id="t5_5" class="t s2_5">Form 941. We will use the completed voucher to credit </span>
<span id="t6_5" class="t s2_5">your payment more promptly and accurately, and to </span>
<span id="t7_5" class="t s2_5">improve our service to you. </span>
<span id="t8_5" class="t s1_5">Making Payments With Form 941 </span>
<span id="t9_5" class="t s2_5">To avoid a penalty, make your payment with Form 941 </span>
<span id="ta_5" class="t s3_5">only if</span><span id="tb_5" class="t s2_5">: </span>
<span id="tc_5" class="t s2_5">• Your total taxes after adjustments and nonrefundable </span>
<span id="td_5" class="t s2_5">credits (Form 941, line 12) for either the current quarter or </span>
<span id="te_5" class="t s2_5">the preceding quarter are less than $2,500, you didn’t </span>
<span id="tf_5" class="t s2_5">incur a $100,000 next-day deposit obligation during the </span>
<span id="tg_5" class="t s2_5">current quarter, and you’re paying in full with a timely filed </span>
<span id="th_5" class="t s2_5">return; or </span>
<span id="ti_5" class="t s2_5">• You’re a monthly schedule depositor making a </span>
<span id="tj_5" class="t s2_5">payment in accordance with the Accuracy of Deposits </span>
<span id="tk_5" class="t s2_5">Rule. See section 11 of Pub. 15 for details. In this case, </span>
<span id="tl_5" class="t s2_5">the amount of your payment may be $2,500 or more. </span>
<span id="tm_5" class="t s2_5">Otherwise, you must make deposits by electronic funds </span>
<span id="tn_5" class="t s2_5">transfer. See section 11 of Pub. 15 for deposit </span>
<span id="to_5" class="t s2_5">instructions. Don’t use Form 941-V to make federal tax </span>
<span id="tp_5" class="t s2_5">deposits. </span>
<span id="tq_5" class="t v0_5 s4_5">▲ </span>
<span id="tr_5" class="t s5_5">! </span>
<span id="ts_5" class="t s6_5">CAUTION </span>
<span id="tt_5" class="t s7_5">Use Form 941-V when making any payment </span><span id="tu_5" class="t s7_5">with </span>
<span id="tv_5" class="t s7_5">Form 941. However, if you pay an amount with </span>
<span id="tw_5" class="t s7_5">Form 941 that should’ve been deposited, you </span>
<span id="tx_5" class="t s7_5">may </span><span id="ty_5" class="t s7_5">be subject to a penalty. See </span><span id="tz_5" class="t s2_5">Deposit Penalties </span><span id="t10_5" class="t s7_5">in </span>
<span id="t11_5" class="t s7_5">section 11 of Pub. 15. </span>
<span id="t12_5" class="t s1_5">Specific Instructions </span>
<span id="t13_5" class="t s3_5">Box 1—Employer identification number (EIN). </span><span id="t14_5" class="t s2_5">If you </span>
<span id="t15_5" class="t s2_5">don’t have an EIN, you may apply for one online by </span>
<span id="t16_5" class="t s2_5">visiting the IRS website at </span><span id="t17_5" class="t s7_5">www.irs.gov/EIN</span><span id="t18_5" class="t s2_5">. You may also </span>
<span id="t19_5" class="t s2_5">apply for an EIN by faxing or mailing Form SS-4 to the </span>
<span id="t1a_5" class="t s2_5">IRS. If you haven’t received your EIN by the due date of </span>
<span id="t1b_5" class="t s2_5">Form 941, write “Applied For” and the date you applied in </span>
<span id="t1c_5" class="t s2_5">this entry space. </span>
<span id="t1d_5" class="t s3_5">Box 2—Amount paid. </span><span id="t1e_5" class="t s2_5">Enter the amount paid with </span>
<span id="t1f_5" class="t s2_5">Form 941. </span>
<span id="t1g_5" class="t s3_5">Box 3—Tax period. </span><span id="t1h_5" class="t s2_5">Darken the circle identifying the </span>
<span id="t1i_5" class="t s2_5">quarter for which the payment is made. Darken only </span>
<span id="t1j_5" class="t s2_5">one circle. </span>
<span id="t1k_5" class="t s3_5">Box 4—Name and address. </span><span id="t1l_5" class="t s2_5">Enter your name and </span>
<span id="t1m_5" class="t s2_5">address as shown on Form 941. </span>
<span id="t1n_5" class="t s2_5">• Enclose your check or money order made payable to </span>
<span id="t1o_5" class="t s2_5">“United States Treasury.” Be sure to enter your </span>
<span id="t1p_5" class="t s2_5">EIN, “Form 941,” and the tax period (“1st Quarter 2023,” </span>
<span id="t1q_5" class="t s2_5">“2nd Quarter 2023,” “3rd Quarter 2023,” or “4th Quarter </span>
<span id="t1r_5" class="t s2_5">2023”) on your check or money order. Don’t send cash. </span>
<span id="t1s_5" class="t s2_5">Don’t staple Form 941-V or your payment to Form 941 (or </span>
<span id="t1t_5" class="t s2_5">to each other). </span>
<span id="t1u_5" class="t s2_5">• Detach Form 941-V and send it with your payment </span>
<span id="t1v_5" class="t s2_5">and Form 941 to the address in the Instructions for </span>
<span id="t1w_5" class="t s2_5">Form 941. </span>
<span id="t1x_5" class="t s3_5">Note: </span><span id="t1y_5" class="t s2_5">You must also complete the entity information </span>
<span id="t1z_5" class="t s2_5">above Part 1 on Form 941. </span>
<span id="t20_5" class="t s1_5">Detach Here and Mail With Your Payment and Form 941. </span>
<span id="t21_5" class="t m0_5 s8_5">Form </span>
<span id="t22_5" class="t s9_5">941-V </span>
<span id="t23_5" class="t sa_5">Department of the Treasury </span>
<span id="t24_5" class="t sa_5">Internal Revenue Service </span>
<span id="t25_5" class="t s0_5">Payment Voucher </span>
<span id="t26_5" class="t sb_5">Don’t staple this voucher or your payment to Form 941. </span>
<span id="t27_5" class="t s8_5">OMB No. 1545-0029 </span>
<span id="t28_5" class="t sc_5">20</span><span id="t29_5" class="t sd_5">23 </span>
<span id="t2a_5" class="t se_5">1 </span><span id="t2b_5" class="t s8_5">Enter your employer identification </span>
<span id="t2c_5" class="t s8_5">number (EIN). </span>
<span id="t2d_5" class="t s2_5">– </span>
<span id="t2e_5" class="t se_5">2 </span>
<span id="t2f_5" class="t s3_5">Enter the amount of your payment. </span>
<span id="t2g_5" class="t v1_5 s8_5">Make your check or money order payable to “</span><span id="t2h_5" class="t v1_5 se_5">United States Treasury</span><span id="t2i_5" class="t v1_5 s8_5">.” </span>
<span id="t2j_5" class="t s8_5">Dollars </span><span id="t2k_5" class="t s8_5">Cents </span>
<span id="t2l_5" class="t se_5">3 </span><span id="t2m_5" class="t s8_5">Tax Period </span>
<span id="t2n_5" class="t sf_5">1st </span>
<span id="t2o_5" class="t sf_5">Quarter </span>
<span id="t2p_5" class="t sf_5">2nd </span>
<span id="t2q_5" class="t sf_5">Quarter </span>
<span id="t2r_5" class="t sf_5">3rd </span>
<span id="t2s_5" class="t sf_5">Quarter </span>
<span id="t2t_5" class="t sf_5">4th </span>
<span id="t2u_5" class="t sf_5">Quarter </span>
<span id="t2v_5" class="t se_5">4 </span><span id="t2w_5" class="t s8_5">Enter your business name (individual name if sole proprietor). </span>
<span id="t2x_5" class="t s8_5">Enter your address. </span>
<span id="t2y_5" class="t sg_5">Enter your city, state, and ZIP code; or your city, foreign country name, foreign province/county, and foreign postal code. </span></div>
<!-- End text definitions -->


<!-- Begin Form Data -->
<input id="form1_5" type="text" tabindex="159" value="" data-objref="481 0 R" data-field-name="topmostSubform[0].Page5[0].f5_2[0]"/>
<input id="form2_5" type="text" tabindex="160" maxlength="3" value="" data-objref="482 0 R" data-field-name="topmostSubform[0].Page5[0].f5_3[0]"/>
<input id="form3_5" type="text" tabindex="157" maxlength="2" value="" data-objref="491 0 R" data-field-name="topmostSubform[0].Page5[0].EIN_Number[0].f1_1[0]"/>
<input id="form4_5" type="text" tabindex="158" maxlength="7" value="" data-objref="492 0 R" data-field-name="topmostSubform[0].Page5[0].EIN_Number[0].f1_2[0]"/>
<input id="form5_5" type="text" tabindex="165" value="" data-objref="484 0 R" data-field-name="topmostSubform[0].Page5[0].f1_3[0]"/>
<input id="form6_5" type="radio" tabindex="161" value="1" data-objref="489 0 R" data-field-name="topmostSubform[0].Page5[0].Line3_ReadOrder[0].Quarter1stAnd2nd[0].c5_1[0]" imageName="5/form/489 0 R" images="110100"/>
<input id="form7_5" type="radio" tabindex="163" value="3" data-objref="487 0 R" data-field-name="topmostSubform[0].Page5[0].Line3_ReadOrder[0].c5_1[0]" imageName="5/form/487 0 R" images="110100"/>
<input id="form8_5" type="text" tabindex="166" value="" data-objref="485 0 R" data-field-name="topmostSubform[0].Page5[0].f5_5[0]"/>
<input id="form9_5" type="radio" tabindex="162" value="2" data-objref="490 0 R" data-field-name="topmostSubform[0].Page5[0].Line3_ReadOrder[0].Quarter1stAnd2nd[0].c5_1[1]" imageName="5/form/490 0 R" images="110100"/>
<input id="form10_5" type="radio" tabindex="164" value="4" data-objref="488 0 R" data-field-name="topmostSubform[0].Page5[0].Line3_ReadOrder[0].c5_1[1]" imageName="5/form/488 0 R" images="110100"/>
<input id="form11_5" type="text" tabindex="167" value="" data-objref="311 0 R" data-field-name="topmostSubform[0].Page5[0].f5_6[0]"/>

<!-- End Form Data -->

</div>

</div>
</div>
<div id="page6" style="width: 934px; height: 1209px; margin-top:20px;" class="page">
<div class="page-inner" style="width: 934px; height: 1209px;">

<div id="p6" class="pageArea" style="overflow: hidden; position: relative; width: 934px; height: 1209px; margin-top:auto; margin-left:auto; margin-right:auto; background-color: white;">


<!-- Begin shared CSS values -->
<style class="shared-css" type="text/css" >
.t {
   transform-origin: bottom left;
   z-index: 2;
   position: absolute;
   white-space: pre;
   overflow: visible;
   line-height: 1.5;
}
.text-container {
   white-space: pre;
}
@supports (-webkit-touch-callout: none) {
   .text-container {
      white-space: normal;
   }
}
</style>
<!-- End shared CSS values -->


<!-- Begin inline CSS -->
<style type="text/css" >

#t1_6{left:55px;bottom:1138px;letter-spacing:-0.15px;}
#t2_6{left:55px;bottom:1103px;letter-spacing:0.14px;}
#t3_6{left:55px;bottom:1086px;letter-spacing:0.13px;}
#t4_6{left:413px;bottom:1086px;letter-spacing:0.1px;}
#t5_6{left:55px;bottom:1070px;letter-spacing:0.13px;}
#t6_6{left:380px;bottom:1070px;letter-spacing:0.11px;}
#t7_6{left:55px;bottom:1053px;letter-spacing:0.12px;}
#t8_6{left:341px;bottom:1053px;letter-spacing:0.11px;}
#t9_6{left:55px;bottom:1037px;letter-spacing:0.13px;}
#ta_6{left:356px;bottom:1037px;letter-spacing:0.13px;}
#tb_6{left:55px;bottom:1020px;letter-spacing:0.14px;}
#tc_6{left:55px;bottom:1004px;letter-spacing:0.13px;}
#td_6{left:55px;bottom:988px;letter-spacing:0.13px;}
#te_6{left:386px;bottom:988px;letter-spacing:0.11px;}
#tf_6{left:55px;bottom:971px;letter-spacing:0.12px;}
#tg_6{left:375px;bottom:971px;letter-spacing:0.09px;}
#th_6{left:55px;bottom:955px;letter-spacing:0.12px;}
#ti_6{left:55px;bottom:938px;letter-spacing:0.11px;}
#tj_6{left:55px;bottom:922px;letter-spacing:0.12px;}
#tk_6{left:165px;bottom:922px;letter-spacing:0.12px;}
#tl_6{left:55px;bottom:906px;letter-spacing:0.12px;}
#tm_6{left:70px;bottom:883px;letter-spacing:0.12px;}
#tn_6{left:55px;bottom:867px;letter-spacing:0.12px;}
#to_6{left:55px;bottom:850px;letter-spacing:0.13px;}
#tp_6{left:55px;bottom:834px;letter-spacing:0.12px;}
#tq_6{left:55px;bottom:817px;letter-spacing:0.12px;}
#tr_6{left:55px;bottom:801px;letter-spacing:0.12px;}
#ts_6{left:55px;bottom:784px;letter-spacing:0.14px;}
#tt_6{left:70px;bottom:762px;letter-spacing:0.12px;}
#tu_6{left:55px;bottom:745px;letter-spacing:0.12px;}
#tv_6{left:55px;bottom:729px;letter-spacing:0.12px;}
#tw_6{left:55px;bottom:713px;letter-spacing:0.12px;}
#tx_6{left:55px;bottom:696px;letter-spacing:0.13px;}
#ty_6{left:55px;bottom:680px;letter-spacing:0.12px;}
#tz_6{left:484px;bottom:1103px;letter-spacing:0.11px;}
#t10_6{left:484px;bottom:1086px;letter-spacing:0.13px;}
#t11_6{left:484px;bottom:1070px;letter-spacing:0.12px;}
#t12_6{left:484px;bottom:1053px;letter-spacing:0.12px;}
#t13_6{left:484px;bottom:1037px;letter-spacing:0.12px;}
#t14_6{left:484px;bottom:1020px;letter-spacing:0.12px;}
#t15_6{left:484px;bottom:1004px;letter-spacing:0.13px;}
#t16_6{left:484px;bottom:988px;letter-spacing:0.12px;}
#t17_6{left:499px;bottom:965px;letter-spacing:0.12px;}
#t18_6{left:484px;bottom:949px;letter-spacing:0.13px;}
#t19_6{left:484px;bottom:932px;letter-spacing:0.13px;}
#t1a_6{left:484px;bottom:910px;letter-spacing:0.16px;}
#t1b_6{left:605px;bottom:910px;}
#t1c_6{left:623px;bottom:910px;}
#t1d_6{left:642px;bottom:910px;}
#t1e_6{left:660px;bottom:910px;}
#t1f_6{left:678px;bottom:910px;}
#t1g_6{left:697px;bottom:910px;}
#t1h_6{left:715px;bottom:910px;}
#t1i_6{left:733px;bottom:910px;}
#t1j_6{left:752px;bottom:910px;}
#t1k_6{left:770px;bottom:910px;}
#t1l_6{left:782px;bottom:910px;letter-spacing:0.12px;}
#t1m_6{left:484px;bottom:887px;letter-spacing:0.13px;}
#t1n_6{left:752px;bottom:887px;}
#t1o_6{left:770px;bottom:887px;}
#t1p_6{left:788px;bottom:887px;}
#t1q_6{left:807px;bottom:887px;}
#t1r_6{left:829px;bottom:887px;letter-spacing:0.13px;}
#t1s_6{left:484px;bottom:865px;letter-spacing:0.13px;}
#t1t_6{left:484px;bottom:848px;letter-spacing:0.13px;}
#t1u_6{left:697px;bottom:848px;}
#t1v_6{left:715px;bottom:848px;}
#t1w_6{left:733px;bottom:848px;}
#t1x_6{left:752px;bottom:848px;}
#t1y_6{left:770px;bottom:848px;}
#t1z_6{left:790px;bottom:848px;letter-spacing:0.12px;}
#t20_6{left:499px;bottom:826px;letter-spacing:0.13px;}
#t21_6{left:484px;bottom:809px;letter-spacing:0.13px;}
#t22_6{left:484px;bottom:793px;letter-spacing:0.13px;}
#t23_6{left:484px;bottom:776px;letter-spacing:0.14px;}
#t24_6{left:654px;bottom:776px;letter-spacing:0.21px;}
#t25_6{left:689px;bottom:776px;}
#t26_6{left:693px;bottom:776px;letter-spacing:0.15px;}
#t27_6{left:854px;bottom:776px;}
#t28_6{left:862px;bottom:776px;letter-spacing:0.1px;}
#t29_6{left:484px;bottom:760px;letter-spacing:0.13px;}
#t2a_6{left:484px;bottom:744px;letter-spacing:0.12px;}
#t2b_6{left:484px;bottom:727px;letter-spacing:0.13px;}
#t2c_6{left:484px;bottom:711px;letter-spacing:0.13px;}
#t2d_6{left:525px;bottom:711px;letter-spacing:0.12px;}
#t2e_6{left:830px;bottom:711px;letter-spacing:0.13px;}
#t2f_6{left:484px;bottom:694px;letter-spacing:0.13px;}
#t2g_6{left:604px;bottom:694px;letter-spacing:0.12px;}

.s0_6{font-size:11px;font-family:HelveticaNeueLTStd-Roman_1fp;color:#000;}
.s1_6{font-size:15px;font-family:HelveticaNeueLTStd-Bd_1fn;color:#000;}
.s2_6{font-size:15px;font-family:HelveticaNeueLTStd-Roman_1fp;color:#000;}
.s3_6{font-size:15px;font-family:HelveticaNeueLTStd-It_1fo;color:#000;}
</style>
<!-- End inline CSS -->

<!-- Begin embedded font definitions -->
<style id="fonts6" type="text/css" >

@font-face {
   font-family: HelveticaNeueLTStd-Bd_1fn;
   src: url("fonts/HelveticaNeueLTStd-Bd_1fn.woff") format("woff");
}

@font-face {
   font-family: HelveticaNeueLTStd-It_1fo;
   src: url("fonts/HelveticaNeueLTStd-It_1fo.woff") format("woff");
}

@font-face {
   font-family: HelveticaNeueLTStd-Roman_1fp;
   src: url("fonts/HelveticaNeueLTStd-Roman_1fp.woff") format("woff");
}

</style>
<!-- End embedded font definitions -->

<!-- Begin page background -->
<div id="pg6Overlay" style="width:100%; height:100%; position:absolute; z-index:1; background-color:rgba(0,0,0,0); -webkit-user-select: none;"></div>
<div id="pg6" style="-webkit-user-select: none;"><object width="934" height="1209" data="6/6.svg" type="image/svg+xml" id="pdf6" style="width:934px; height:1209px; -moz-transform:scale(1); z-index: 0;"></object></div>
<!-- End page background -->


<!-- Begin text definitions (Positioned/styled in CSS) -->
<div class="text-container"><span id="t1_6" class="t s0_6">Form 941 (Rev. 3-2023) </span>
<span id="t2_6" class="t s1_6">Privacy Act and Paperwork Reduction Act Notice. </span>
<span id="t3_6" class="t s2_6">We ask for the information on Form 941 to carry out </span><span id="t4_6" class="t s2_6">the </span>
<span id="t5_6" class="t s2_6">Internal Revenue laws of the United States. We </span><span id="t6_6" class="t s2_6">need it to </span>
<span id="t7_6" class="t s2_6">figure and collect the right amount of tax. </span><span id="t8_6" class="t s2_6">Subtitle C, </span>
<span id="t9_6" class="t s2_6">Employment Taxes, of the Internal Revenue </span><span id="ta_6" class="t s2_6">Code </span>
<span id="tb_6" class="t s2_6">imposes employment taxes on wages and provides for </span>
<span id="tc_6" class="t s2_6">income tax withholding. Form 941 is used to determine </span>
<span id="td_6" class="t s2_6">the amount of taxes that you owe. Section 6011 </span><span id="te_6" class="t s2_6">requires </span>
<span id="tf_6" class="t s2_6">you to provide the requested information if the </span><span id="tg_6" class="t s2_6">tax is </span>
<span id="th_6" class="t s2_6">applicable to you. Section 6109 requires you to provide </span>
<span id="ti_6" class="t s2_6">your identification number. If you fail to provide this </span>
<span id="tj_6" class="t s2_6">information in a </span><span id="tk_6" class="t s2_6">timely manner, or provide false or </span>
<span id="tl_6" class="t s2_6">fraudulent information, you may be subject to penalties. </span>
<span id="tm_6" class="t s2_6">You’re not required to provide the information </span>
<span id="tn_6" class="t s2_6">requested on a form that is subject to the Paperwork </span>
<span id="to_6" class="t s2_6">Reduction Act unless the form displays a valid OMB </span>
<span id="tp_6" class="t s2_6">control number. Books and records relating to a form or </span>
<span id="tq_6" class="t s2_6">its instructions must be retained as long as their contents </span>
<span id="tr_6" class="t s2_6">may become material in the administration of any Internal </span>
<span id="ts_6" class="t s2_6">Revenue law. </span>
<span id="tt_6" class="t s2_6">Generally, tax returns and return information are </span>
<span id="tu_6" class="t s2_6">confidential, as required by section 6103. However, </span>
<span id="tv_6" class="t s2_6">section 6103 allows or requires the IRS to disclose or </span>
<span id="tw_6" class="t s2_6">give the information shown on your tax return to others </span>
<span id="tx_6" class="t s2_6">as described in the Code. For example, we may </span>
<span id="ty_6" class="t s2_6">disclose your tax information to the Department of </span>
<span id="tz_6" class="t s2_6">Justice for civil and criminal litigation, and to cities, </span>
<span id="t10_6" class="t s2_6">states, the District of Columbia, and U.S. commonwealths </span>
<span id="t11_6" class="t s2_6">and possessions for use in administering their tax laws. </span>
<span id="t12_6" class="t s2_6">We may also disclose this information to other countries </span>
<span id="t13_6" class="t s2_6">under a tax treaty, to federal and state agencies to </span>
<span id="t14_6" class="t s2_6">enforce federal nontax criminal laws, or to federal law </span>
<span id="t15_6" class="t s2_6">enforcement and intelligence agencies to combat </span>
<span id="t16_6" class="t s2_6">terrorism. </span>
<span id="t17_6" class="t s2_6">The time needed to complete and file Form 941 will </span>
<span id="t18_6" class="t s2_6">vary depending on individual circumstances. The </span>
<span id="t19_6" class="t s2_6">estimated average time is: </span>
<span id="t1a_6" class="t s1_6">Recordkeeping </span><span id="t1b_6" class="t s2_6">. </span><span id="t1c_6" class="t s2_6">. </span><span id="t1d_6" class="t s2_6">. </span><span id="t1e_6" class="t s2_6">. </span><span id="t1f_6" class="t s2_6">. </span><span id="t1g_6" class="t s2_6">. </span><span id="t1h_6" class="t s2_6">. </span><span id="t1i_6" class="t s2_6">. </span><span id="t1j_6" class="t s2_6">. </span><span id="t1k_6" class="t s2_6">. </span><span id="t1l_6" class="t s2_6">22 hr., 28 min. </span>
<span id="t1m_6" class="t s1_6">Learning about the law or the form </span><span id="t1n_6" class="t s2_6">. </span><span id="t1o_6" class="t s2_6">. </span><span id="t1p_6" class="t s2_6">. </span><span id="t1q_6" class="t s2_6">. </span><span id="t1r_6" class="t s2_6">53 min. </span>
<span id="t1s_6" class="t s1_6">Preparing, copying, assembling, and </span>
<span id="t1t_6" class="t s1_6">sending the form to the IRS </span><span id="t1u_6" class="t s2_6">. </span><span id="t1v_6" class="t s2_6">. </span><span id="t1w_6" class="t s2_6">. </span><span id="t1x_6" class="t s2_6">. </span><span id="t1y_6" class="t s2_6">. </span><span id="t1z_6" class="t s2_6">1 hr., 18 min. </span>
<span id="t20_6" class="t s2_6">If you have comments concerning the accuracy of </span>
<span id="t21_6" class="t s2_6">these time estimates or suggestions for making Form 941 </span>
<span id="t22_6" class="t s2_6">simpler, we would be happy to hear from you. You can </span>
<span id="t23_6" class="t s2_6">send us comments from </span><span id="t24_6" class="t s3_6">www</span><span id="t25_6" class="t s2_6">.</span><span id="t26_6" class="t s3_6">irs.gov/FormComments</span><span id="t27_6" class="t s2_6">. </span><span id="t28_6" class="t s2_6">Or </span>
<span id="t29_6" class="t s2_6">you can send your comments to Internal Revenue </span>
<span id="t2a_6" class="t s2_6">Service, Tax Forms and Publications Division, 1111 </span>
<span id="t2b_6" class="t s2_6">Constitution Ave. NW, IR-6526, Washington, DC 20224. </span>
<span id="t2c_6" class="t s2_6">Don’t </span><span id="t2d_6" class="t s2_6">send Form 941 to this address. Instead, see </span><span id="t2e_6" class="t s3_6">Where </span>
<span id="t2f_6" class="t s3_6">Should You File? </span><span id="t2g_6" class="t s2_6">in the Instructions for Form 941. </span></div>
<!-- End text definitions -->


<!-- call to setup Radio and Checkboxes as images, without this call images dont work for them -->


</div>

</div>
</div>
</div>
</form>
</div>
  </section>
</div>
<style>
  .pagecontroller {
    margin: 5px;
  }

  .ads {
    max-width: 0px !important;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }

  @media (max-width:1024px) {
    #insert_sale {
      display: flex !important;
      justify-content: flex-end !important;
    }

    .mob_topview {
      position: relative;
      right: 33px;
    }

    #removeButton {
      position: absolute;
      left: 145px;
    }

    .fa.fa-gear::before {
      position: absolute;
      left: 111px;
    }

    .mobile_daterangepicker {
      position: relative;
      right: 36px;
    }

    .mob_search {
      position: absolute;
      left: 108px;
      font-size: 11px;
    }

    .mobile_para {
      font-size: 11px !important;
    }
  }
</style>
