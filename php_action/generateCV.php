<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PDF Generation</title>
</head>
<body>
  

<style>
  
  *{
  
  margin:0px;
  padding:0px;
  box-sizing:border-box;
 
}

.applicant >*{
  
   border:1px solid #111;
  
}
.flex{
  
  display:flex;
  margin:0 2rem;
  
  
}

.details{
   display:flex;
  justify-content:space-between;
  
}

.flex-col{
  
  
  flex-direction:column;
  
}

.applicant{
  
  width:100%;
}
.applicant-header{
  
  text-align:center;
 
  width:50%;
   margin:auto;
}

.applicant-table-content,.applicant-table-head{
  
  display:flex;
  justify-content:space-between;
}

.applicant-table-content-info ,.applicant-table-head-info,.applicant-table-head-info~p{
    padding: 1rem;
}

.passport-pic,.applicant-pic{
  border:1px solid #111;
  
}
.passport-pic{

  width:300px;
  height:500px;
}
.applicant-pic{
  border:1px solid #111;
  width:200px;
  height:200px;
}
</style>


<?php
require '../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$css='*{
  
  margin:0px;
  padding:0px;
  box-sizing:border-box;
 
}

.applicant >*{
  
   border:1px solid #111;
  
}
.flex{
  
  display:flex;
  margin:0 2rem;
  
  
}

.details{
   display:flex;
  justify-content:space-between;
  
}

.flex-col{
  
  
  flex-direction:column;
  
}

.applicant{
  
  width:100%;
}
.applicant-header{
  
  text-align:center;
 
  width:50%;
   margin:auto;
}

.applicant-table-content,.applicant-table-head{
  
  display:flex;
  justify-content:space-between;
}

.applicant-table-content-info ,.applicant-table-head-info,.applicant-table-head-info~p{
    padding: 1rem;
}

.passport-pic,.applicant-pic{
  border:1px solid #111;
  
}
.passport-pic{

  width:300px;
  height:500px;
}
.applicant-pic{
  border:1px solid #111;
  width:200px;
  height:200px;
}';

$style='<style>'.$css.'</style>';


$html=$style;

$html.='<div class="flex flex-col" id="pdf">
  
 <div class="company">
   <img src="../assets/img/girls/carol_enjaz.jpg" alt="" class="company-logo">
   
  </div>
  <div class="applicant">
    
    <h2 class="applicant-header">APPLICANT DETAILS -   الوظيفة صاحب
  </h2>
    
    <div class="applicant-head">
      
      <img  src="../assets/img/girls/carol_enjaz.jpg" alt="" class="applicant-pic">
      <div class="applicant-table">
        
        <div class="applicant-table-head">
          <p class="applicant-table-head-info">REF.NO</p>
          <p></p>
          <p class="applicant-table-head-info">DATE</p>
          <p></p>
          <p class="applicant-table-head-info">FROM</p>
          <p>KENYA</p>
        </div>
        <div class="applicant-table-content"></div>
        <div class="applicant-table-content">
        <div class="applicant-table-content-info">Post Applied For</div>
          <div class="applicant-table-content-info">HOUSE MAID</div>
          <div class="applicant-table-content-info">الوظيفة</div>
        </div>
        <div class="applicant-table-content">
          <div class="applicant-table-content-info">Monthly Salary</div>
          <div class="applicant-table-content-info">900</div>
          <div class="applicant-table-content-info">الراتب الشهري</div>
        </div>
        <div class="applicant-table-content">
          <div class="applicant-table-content-info">Contract Period</div>
          <div class="applicant-table-content-info">2 YEARS</div>
          <div class="applicant-table-content-info">مدة العقد</div>
        </div>
      </div>
    </div>
    
    
       <div class="applicant-table-content">
          <div class="applicant-table-content-info">NAME IN FULL</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">االسم الكامل</div>
        </div>
    
    <div class="details">
      
      <div class="details-application">
        <div class="applicant-table-content">
          <div class="applicant-table-content-info">Nationality</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">الجنسية</div>
        </div>
        
         <div class="applicant-table-content">
          <div class="applicant-table-content-info">Religion</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">الديانة</div>
        </div>
        
         <div class="applicant-table-content">
          <div class="applicant-table-content-info">Date of Birth</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">تاريخ الميالد</div>
        </div>
        
         <div class="applicant-table-content">
          <div class="applicant-table-content-info">AGE</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">العمر</div>
        </div>
          
          <div class="applicant-table-content">
          <div class="applicant-table-content-info">Place of Birth</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">مكان الميالد</div>
        </div>
          
          <div class="applicant-table-content">
          <div class="applicant-table-content-info">Living Town</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">العمر</div>
        </div>
          
          <div class="applicant-table-content">
          <div class="applicant-table-content-info">Marital Status</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">الحالة االجتماعية</div>
        </div>
          
          <div class="applicant-table-content">
          <div class="applicant-table-content-info">No. Of Children</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">عدد األطفال</div>
        </div>
          
          <div class="applicant-table-content">
          <div class="applicant-table-content-info">Weight</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">الوزن</div>
        </div>
        <div class="applicant-table-content">
          <div class="applicant-table-content-info">Height</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">الطول</div>
        </div>
          <div class="applicant-table-content">
          <div class="applicant-table-content-info">Complexion</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">لون البشرة</div>
        </div>
           <div class="applicant-table-content">
          <div class="applicant-table-content-info">Educational Qualification</div>
          <div class="applicant-table-content-info">HIGH SCHOOL</div>
          <div class="applicant-table-content-info">الدرجة العلمية</div>
        </div>
        
        <div class="applicant-table-content">
          <div class="applicant-table-content-info">KNOWLEDGE LANGUAGES</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">إجادة اللغات </div>
        </div>
        
        
        <div class="applicant-table-content">
          <div class="applicant-table-content-info">ENGLISH</div>
          <div class="applicant-table-content-info">إنجليزي</div>
          <div class="applicant-table-content-info">ARABIC</div>
          <div class="applicant-table-content-info">عربي</div>
        </div>
        <div class="applicant-table-content">
          <div class="applicant-table-content-info">POOR</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">ال شيء</div>
        </div>
        <div class="applicant-table-content">
           <div class="applicant-table-content-info">LITTLE</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">قليل</div>
        </div>
          <div class="applicant-table-content">
           <div class="applicant-table-content-info">FAIR</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">وسط</div>
        </div>
          <div class="applicant-table-content">
          <div class="applicant-table-content-info">FLUENT</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">ممتاز</div>
        </div>
          <p>
            
                   
        </p>
        
        <div class="applicant-table-content">
          <div class="applicant-table-content-info"> ABROAD PREVIOUS EMPLOYMENT	</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">   الخبرة خارج البلد </div>
        </div>
        
        
         <div class="applicant-table-content">
          <div class="applicant-table-content-info">COUNTRY</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">البلد</div>
        </div>
        <div class="applicant-table-content">
          <div class="applicant-table-content-info">PERIOD</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">المدة</div>
        </div>
        
        
         <div class="applicant-table-content">
          <div class="applicant-table-content-info">EXPERIENCE WORK	    	</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">  خبرة العمل</div>
        </div>
        
        
         <div class="applicant-table-content">
          <div class="applicant-table-content-info">Decorating</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">الديكور</div>
        </div>
        <div class="applicant-table-content">
          <div class="applicant-table-content-info">Driving</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">القيادة</div>
        </div>
        <div class="applicant-table-content">
          <div class="applicant-table-content-info">Sewing</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">الخياطة</div>
        </div>
        <div class="applicant-table-content">
          <div class="applicant-table-content-info">Baby Sitting</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">أطفال جليسة</div>
        </div>
        <div class="applicant-table-content">
          <div class="applicant-table-content-info">Cleaning</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">التنظيف</div>
        </div>
        <div class="applicant-table-content">
          <div class="applicant-table-content-info">Cooking</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">الطبخ</div>
        </div>
        <div class="applicant-table-content">
          <div class="applicant-table-content-info">Washing</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">الغسيل</div>
        </div>
        
        
      </div>
      <div class="details-passport">
        <div class="flex flex-col">
         <div class="applicant-table-content">
          <div class="applicant-table-content-info">Passport No</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">رقم الجواز</div>
        </div>
        
         <div class="applicant-table-content">
          <div class="applicant-table-content-info">Date of Issue</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">تاريخ االصدار</div>
        </div>
        
         <div class="applicant-table-content">
          <div class="applicant-table-content-info">Place of Issue</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">مكان االصدار</div>
        </div>
        
         <div class="applicant-table-content">
          <div class="applicant-table-content-info">Date of EXP.</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">تاريخ االنتهاء</div>
        </div>
          
          <img src="../assets/img/girls/carol_enjaz.jpg" alt="" class="passport-pic">
        
        </div>
        
      </div>
      
    </div>
    
  </div>
 
</div>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
<script>
  
  
  var doc =new jsPDF()
  
  doc.fromHTML(document.querySelector("#pdf"),15,15)
  doc.save("output.pdf")



</script>

';




//$html2pdf = new \Spipu\Html2Pdf\Html2Pdf('P', 'A4', 'en');

//echo $html;
//$html2pdf->writeHTML($html);
//$html2pdf->output();
//$html2pdf->output('myPdf.pdf);






?>


<div class="flex flex-col" id="pdf">
  
 <div class="company">
   <img src="../assets/img/girls/carol_enjaz.jpg" alt="" class="company-logo">
   
  </div>
  <div class="applicant">
    
    <h2 class="applicant-header">APPLICANT DETAILS -   الوظيفة صاحب
  </h2>
    
    <div class="applicant-head">
      
      <img  src="../assets/img/girls/carol_enjaz.jpg" alt="" class="applicant-pic">
      <div class="applicant-table">
        
        <div class="applicant-table-head">
          <p class="applicant-table-head-info">REF.NO</p>
          <p></p>
          <p class="applicant-table-head-info">DATE</p>
          <p></p>
          <p class="applicant-table-head-info">FROM</p>
          <p>KENYA</p>
        </div>
        <div class="applicant-table-content"></div>
        <div class="applicant-table-content">
        <div class="applicant-table-content-info">Post Applied For</div>
          <div class="applicant-table-content-info">HOUSE MAID</div>
          <div class="applicant-table-content-info">الوظيفة</div>
        </div>
        <div class="applicant-table-content">
          <div class="applicant-table-content-info">Monthly Salary</div>
          <div class="applicant-table-content-info">900</div>
          <div class="applicant-table-content-info">الراتب الشهري</div>
        </div>
        <div class="applicant-table-content">
          <div class="applicant-table-content-info">Contract Period</div>
          <div class="applicant-table-content-info">2 YEARS</div>
          <div class="applicant-table-content-info">مدة العقد</div>
        </div>
      </div>
    </div>
    
    
       <div class="applicant-table-content">
          <div class="applicant-table-content-info">NAME IN FULL</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">االسم الكامل</div>
        </div>
    
    <div class="details">
      
      <div class="details-application">
        <div class="applicant-table-content">
          <div class="applicant-table-content-info">Nationality</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">الجنسية</div>
        </div>
        
         <div class="applicant-table-content">
          <div class="applicant-table-content-info">Religion</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">الديانة</div>
        </div>
        
         <div class="applicant-table-content">
          <div class="applicant-table-content-info">Date of Birth</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">تاريخ الميالد</div>
        </div>
        
         <div class="applicant-table-content">
          <div class="applicant-table-content-info">AGE</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">العمر</div>
        </div>
          
          <div class="applicant-table-content">
          <div class="applicant-table-content-info">Place of Birth</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">مكان الميالد</div>
        </div>
          
          <div class="applicant-table-content">
          <div class="applicant-table-content-info">Living Town</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">العمر</div>
        </div>
          
          <div class="applicant-table-content">
          <div class="applicant-table-content-info">Marital Status</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">الحالة االجتماعية</div>
        </div>
          
          <div class="applicant-table-content">
          <div class="applicant-table-content-info">No. Of Children</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">عدد األطفال</div>
        </div>
          
          <div class="applicant-table-content">
          <div class="applicant-table-content-info">Weight</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">الوزن</div>
        </div>
        <div class="applicant-table-content">
          <div class="applicant-table-content-info">Height</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">الطول</div>
        </div>
          <div class="applicant-table-content">
          <div class="applicant-table-content-info">Complexion</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">لون البشرة</div>
        </div>
           <div class="applicant-table-content">
          <div class="applicant-table-content-info">Educational Qualification</div>
          <div class="applicant-table-content-info">HIGH SCHOOL</div>
          <div class="applicant-table-content-info">الدرجة العلمية</div>
        </div>
        
        <div class="applicant-table-content">
          <div class="applicant-table-content-info">KNOWLEDGE LANGUAGES</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">إجادة اللغات </div>
        </div>
        
        
        <div class="applicant-table-content">
          <div class="applicant-table-content-info">ENGLISH</div>
          <div class="applicant-table-content-info">إنجليزي</div>
          <div class="applicant-table-content-info">ARABIC</div>
          <div class="applicant-table-content-info">عربي</div>
        </div>
        <div class="applicant-table-content">
          <div class="applicant-table-content-info">POOR</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">ال شيء</div>
        </div>
        <div class="applicant-table-content">
           <div class="applicant-table-content-info">LITTLE</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">قليل</div>
        </div>
          <div class="applicant-table-content">
           <div class="applicant-table-content-info">FAIR</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">وسط</div>
        </div>
          <div class="applicant-table-content">
          <div class="applicant-table-content-info">FLUENT</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">ممتاز</div>
        </div>
          <p>
            
                   
        </p>
        
        <div class="applicant-table-content">
          <div class="applicant-table-content-info"> ABROAD PREVIOUS EMPLOYMENT	</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">   الخبرة خارج البلد </div>
        </div>
        
        
         <div class="applicant-table-content">
          <div class="applicant-table-content-info">COUNTRY</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">البلد</div>
        </div>
        <div class="applicant-table-content">
          <div class="applicant-table-content-info">PERIOD</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">المدة</div>
        </div>
        
        
         <div class="applicant-table-content">
          <div class="applicant-table-content-info">EXPERIENCE WORK	    	</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">  خبرة العمل</div>
        </div>
        
        
         <div class="applicant-table-content">
          <div class="applicant-table-content-info">Decorating</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">الديكور</div>
        </div>
        <div class="applicant-table-content">
          <div class="applicant-table-content-info">Driving</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">القيادة</div>
        </div>
        <div class="applicant-table-content">
          <div class="applicant-table-content-info">Sewing</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">الخياطة</div>
        </div>
        <div class="applicant-table-content">
          <div class="applicant-table-content-info">Baby Sitting</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">أطفال جليسة</div>
        </div>
        <div class="applicant-table-content">
          <div class="applicant-table-content-info">Cleaning</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">التنظيف</div>
        </div>
        <div class="applicant-table-content">
          <div class="applicant-table-content-info">Cooking</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">الطبخ</div>
        </div>
        <div class="applicant-table-content">
          <div class="applicant-table-content-info">Washing</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">الغسيل</div>
        </div>
        
        
      </div>
      <div class="details-passport">
        <div class="flex flex-col">
         <div class="applicant-table-content">
          <div class="applicant-table-content-info">Passport No</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">رقم الجواز</div>
        </div>
        
         <div class="applicant-table-content">
          <div class="applicant-table-content-info">Date of Issue</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">تاريخ االصدار</div>
        </div>
        
         <div class="applicant-table-content">
          <div class="applicant-table-content-info">Place of Issue</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">مكان االصدار</div>
        </div>
        
         <div class="applicant-table-content">
          <div class="applicant-table-content-info">Date of EXP.</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">تاريخ االنتهاء</div>
        </div>
          
          <img src="../assets/img/girls/carol_enjaz.jpg" alt="" class="passport-pic">
        
        </div>
        
      </div>
      
    </div>
    
  </div>
 
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.1/html2pdf.bundle.min.js" integrity="sha512-vDKWohFHe2vkVWXHp3tKvIxxXg0pJxeid5eo+UjdjME3DBFBn2F8yWOE0XmiFcFbXxrEOR1JriWEno5Ckpn15A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
  
  var worker =html2pdf().from(document.querySelector("#pdf")).save();
//  var doc =new jsPDF()
//  var elementHandler = {
//  '#ignorePDF': function (element, renderer) {
//    return true;
//  }
//};
//  doc.fromHTML(document.querySelector("#pdf") ,0,
//    0,
//    {
//      'width': 180
//    }
//           
//               , function() {
//      doc.save('sample-file.pdf');
//   }
//              
//              );
//  doc.save("output.pdf")

////html2canvas(document.body).then(canvas => {
////    let pdf = new jsPDF('p', 'mm', 'a4');
////    pdf.addImage(canvas.toDataURL('image/png'), 'PNG', 0, 0, 211, 298);
//    pdf.save("output.pdf")
////});

</script>

</body>
</html>
