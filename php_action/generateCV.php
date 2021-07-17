<?php
require_once "core.php";


$girl=mysqli_real_escape_string($connect,$_GET["girl"]);

$marital=$_GET["marital"];
$kids=$_GET["kids"];
$birth=$_GET["birth"];
$town=$_GET["town"];
$height=$_GET["height"];
$weight=$_GET["weight"];
$education=$_GET["education"];
$complexion=$_GET["complexion"];
$english=$_GET["english"];
$arabic=$_GET["arabic"];
$employment=$_GET["employment"];
$country=$_GET["country"];
$period=$_GET["period"];
$babySitting=$_GET["skill"][0];
$cleaning=$_GET["skill"][1];
$cooking=$_GET["skill"][2];
$washing=$_GET["skill"][3];
$driving=$_GET["skill"][4];
$decorating=$_GET["skill"][5];
//$sewing=$_GET["skill"][6];
$sewing="sewing";


$sql= "select * from girls LEFT JOIN uploads on  girls.girl_id=uploads.girl_id where girls.girl_id=$girl";


$result=$connect->query($sql);
$row=$result->fetch_array();
//print_r($row);
$girlname=$row["girl_fullname"];
$passport=$row["girl_passport"];
$passport_issue_date=$row["passport_date_issue"];
$passport_expiry_date=$row["passport_date_expiry"];
$girl_passport_place=$row["girl_passport_place"];
$girl_religion=$row["girl_religion"];
$dateCreated=$row["dateCreated"];
$girl_dob=$row["girl_dob"];
$upload_pic=$row["upload_pic"];
$upload_passport_copy=$row["upload_passport_copy"];

$diff = abs(strtotime($girl_dob) - strtotime(date("Y-m-d")));

$years = floor($diff / (365*60*60*24));




?>

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
  
  img{
    
    box-shadow: 0 0 3rem rgb(136 152 170 / 18%);
    width: 50px;
    height: 100px;
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
  
  .applicant-table-content {
    border: 1px solid;
    border-radius: 0px 3px 3px 0px;
}

.passport-pic,.applicant-pic{
 border: 1px solid #f7f5f5;
    
    border-radius: 10px;
  
}
.passport-pic{
  margin-top:20rem;
  width:300px;
  height:500px;
 
}
.applicant-pic{
  
  width: 180px;
    height: 180px;
}
  
}
</style>




<div class="flex flex-col" id="pdf">
  
 <div class="company">
   <img src="../<?php echo $upload_passport_copy;?>" alt="" class="company-logo">
   
  </div>
  <div class="applicant">
    
    <h2 class="applicant-header">APPLICANT DETAILS -   الوظيفة صاحب
  </h2>
    
    <div class="applicant-head">
      
      <img  src="../<?php echo $upload_pic;?>" alt="" class="applicant-pic">
      <div class="applicant-table">
        
        <div class="applicant-table-head">
          <p class="applicant-table-head-info">REF.NO</p>
          <p><?php echo $girl;?></p>
          <p class="applicant-table-head-info">DATE</p>
          <p><?php echo $dateCreated;?></p>
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
          <div class="applicant-table-content-info"><?php echo $girlname;?></div>
          <div class="applicant-table-content-info">االسم الكامل</div>
        </div>
    
    <div class="details">
      
      <div class="details-application">
        <div class="applicant-table-content">
          <div class="applicant-table-content-info">Nationality</div>
          <div class="applicant-table-content-info"><?php echo "Kenyan";?></div>
          <div class="applicant-table-content-info">الجنسية</div>
        </div>
        
         <div class="applicant-table-content">
          <div class="applicant-table-content-info">Religion</div>
          <div class="applicant-table-content-info"><?php echo $girl_religion;?></div>
          <div class="applicant-table-content-info">الديانة</div>
        </div>
        
         <div class="applicant-table-content">
          <div class="applicant-table-content-info">Date of Birth</div>
          <div class="applicant-table-content-info"><?php echo $girl_dob;?></div>
          <div class="applicant-table-content-info">تاريخ الميالد</div>
        </div>
        
         <div class="applicant-table-content">
          <div class="applicant-table-content-info">AGE</div>
          <div class="applicant-table-content-info"><?php echo $years;?></div>
          <div class="applicant-table-content-info">العمر</div>
        </div>
          
          <div class="applicant-table-content">
          <div class="applicant-table-content-info">Place of Birth</div>
          <div class="applicant-table-content-info"><?php echo $birth;?></div>
          <div class="applicant-table-content-info">مكان الميالد</div>
        </div>
          
          <div class="applicant-table-content">
          <div class="applicant-table-content-info">Living Town</div>
          <div class="applicant-table-content-info"><?php echo $town;?></div>
          <div class="applicant-table-content-info">العمر</div>
        </div>
          
          <div class="applicant-table-content">
          <div class="applicant-table-content-info">Marital Status</div>
          <div class="applicant-table-content-info"><?php echo $marital;?></div>
          <div class="applicant-table-content-info">الحالة االجتماعية</div>
        </div>
          
          <div class="applicant-table-content">
          <div class="applicant-table-content-info">No. Of Children</div>
          <div class="applicant-table-content-info"><?php echo $kids;?></div>
          <div class="applicant-table-content-info">عدد األطفال</div>
        </div>
          
          <div class="applicant-table-content">
          <div class="applicant-table-content-info">Weight</div>
          <div class="applicant-table-content-info"><?php echo $weight;?></div>
          <div class="applicant-table-content-info">الوزن</div>
        </div>
        <div class="applicant-table-content">
          <div class="applicant-table-content-info">Height</div>
          <div class="applicant-table-content-info"><?php echo $height;?></div>
          <div class="applicant-table-content-info">الطول</div>
        </div>
          <div class="applicant-table-content">
          <div class="applicant-table-content-info">Complexion</div>
          <div class="applicant-table-content-info"><?php echo $complexion;?></div>
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
          <div class="applicant-table-content-info"><?php echo $english=="POOR"? "POOR": null;?></div>
          <div class="applicant-table-content-info"><?php echo $arabic=="POOR"? "POOR": null;?></div>
          <div class="applicant-table-content-info">ال شيء</div>
        </div>
        <div class="applicant-table-content">
           <div class="applicant-table-content-info">LITTLE</div>
          <div class="applicant-table-content-info"><?php echo $english=="LITTLE"?"LITTLE" : null;?></div>
          <div class="applicant-table-content-info"><?php echo $arabic=="LITTLE"? "LITTLE": null;?></div>
          <div class="applicant-table-content-info">قليل</div>
        </div>
          <div class="applicant-table-content">
           <div class="applicant-table-content-info">FAIR</div>
          <div class="applicant-table-content-info"><?php echo $english=="FAIR"?"FAIR" : null;?></div>
          <div class="applicant-table-content-info"><?php echo $arabic=="FAIR"? "FAIR": null;?></div>
          <div class="applicant-table-content-info">وسط</div>
        </div>
          <div class="applicant-table-content">
          <div class="applicant-table-content-info">FLUENT</div>
          <div class="applicant-table-content-info"><?php echo $english=="FLUENT"? "FLUENT": null;?></div>
          <div class="applicant-table-content-info"><?php echo $arabic=="FLUENT"?"FLUENT" : null;?></div>
          <div class="applicant-table-content-info">ممتاز</div>
        </div>
          <p>
            
                   
        </p>
        
        <div class="applicant-table-content">
          <div class="applicant-table-content-info"> ABROAD PREVIOUS EMPLOYMENT	</div>
          <div class="applicant-table-content-info"><?php echo $employment;?></div>
          <div class="applicant-table-content-info">   الخبرة خارج البلد </div>
        </div>
        
        
         <div class="applicant-table-content">
          <div class="applicant-table-content-info">COUNTRY</div>
          <div class="applicant-table-content-info"><?php echo $country;?></div>
          <div class="applicant-table-content-info">البلد</div>
        </div>
        <div class="applicant-table-content">
          <div class="applicant-table-content-info">PERIOD</div>
          <div class="applicant-table-content-info"><?php echo $period;?></div>
          <div class="applicant-table-content-info">المدة</div>
        </div>
        
        
         <div class="applicant-table-content">
          <div class="applicant-table-content-info">EXPERIENCE WORK	    	</div>
          <div class="applicant-table-content-info"></div>
          <div class="applicant-table-content-info">  خبرة العمل</div>
        </div>
        
        
         <div class="applicant-table-content">
          <div class="applicant-table-content-info">Decorating</div>
          <div class="applicant-table-content-info"><?php echo $decorating?"YES":"NO";?></div>
          <div class="applicant-table-content-info">الديكور</div>
        </div>
        <div class="applicant-table-content">
          <div class="applicant-table-content-info">Driving</div>
          <div class="applicant-table-content-info"><?php echo $driving?"YES":"NO";?></div>
          <div class="applicant-table-content-info">القيادة</div>
        </div>
        <div class="applicant-table-content">
          <div class="applicant-table-content-info">Sewing</div>
          <div class="applicant-table-content-info"><?php echo $sewing?"YES":"NO";?></div>
          <div class="applicant-table-content-info">الخياطة</div>
        </div>
        <div class="applicant-table-content">
          <div class="applicant-table-content-info">Baby Sitting</div>
          <div class="applicant-table-content-info"><?php echo $babySitting?"YES":"NO"; ?></div>
          <div class="applicant-table-content-info">أطفال جليسة</div>
        </div>
        <div class="applicant-table-content">
          <div class="applicant-table-content-info">Cleaning</div>
          <div class="applicant-table-content-info"><?php echo $cleaning?"YES":"NO"; ?></div>
          <div class="applicant-table-content-info">التنظيف</div>
        </div>
        <div class="applicant-table-content">
          <div class="applicant-table-content-info">Cooking</div>
          <div class="applicant-table-content-info"><?php echo $cleaning?"YES":"NO";?></div>
          <div class="applicant-table-content-info">الطبخ</div>
        </div>
        <div class="applicant-table-content">
          <div class="applicant-table-content-info">Washing</div>
          <div class="applicant-table-content-info"><?php echo $washing?"YES":"NO";?></div>
          <div class="applicant-table-content-info">الغسيل</div>
        </div>
        
        
      </div>
      <div class="details-passport">
        <div class="flex flex-col">
         <div class="applicant-table-content">
          <div class="applicant-table-content-info">Passport No</div>
          <div class="applicant-table-content-info"><?php echo  $passport;?></div>
          <div class="applicant-table-content-info">رقم الجواز</div>
        </div>
        
         <div class="applicant-table-content">
          <div class="applicant-table-content-info">Date of Issue</div>
          <div class="applicant-table-content-info"><?php echo $passport_issue_date;?></div>
          <div class="applicant-table-content-info">تاريخ االصدار</div>
        </div>
        
         <div class="applicant-table-content">
          <div class="applicant-table-content-info">Place of Issue</div>
          <div class="applicant-table-content-info"><?php echo $girl_passport_place;?></div>
          <div class="applicant-table-content-info">مكان االصدار</div>
        </div>
        
         <div class="applicant-table-content">
          <div class="applicant-table-content-info">Date of EXP.</div>
          <div class="applicant-table-content-info"><?php echo $passport_expiry_date ;?></div>
          <div class="applicant-table-content-info">تاريخ االنتهاء</div>
        </div>
          
          <img src="../<?php echo $upload_passport_copy;?>" alt="" class="passport-pic">
        
        </div>
        
      </div>
      
    </div>
    
  </div>
 
</div>

<script src="../bower_components/html2pdf.js/dist/html2pdf.bundle.min.js"></script>
<script>
  
  var worker =html2pdf().from(document.querySelector("#pdf")).save();

</script>

</body>
</html>
