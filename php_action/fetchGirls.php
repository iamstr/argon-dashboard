<?php 



$sql="CREATE VIEW girls AS

SELECT girl_fullname, girl_IDnumber, girl_phone, girl_dob, girl_religion, girl_county, girl_passport, passport_date_issue, passport_date_expiry, girl_passport_place, girl_goodConduct, girl_birth, girl_firstMedical, user_id ,dateCreated,next_of_kin.next_of_kin_fullname,next_of_kin.next_of_kin_IDnumber,next_of_kin.next_of_kin_relationship,next_of_kin.next_of_kin_phone,next_of_kin.next_of_kin_fullname2,next_of_kin.next_of_kin_IDnumber2,next_of_kin.next_of_kin_phone2,next_of_kin. next_of_kin_relationship2,school_names.school_name,schools.school_start,schools.school_end,schools.school_cert,



upload_name,
girl_id,
user_id,
updatedBy,
updatedDate,



musaned_status,
musaned_sponsporName,
musaned_sponsporNumber,
musaned_sponsporID,
musaned_sponsporAddress,
musaned_contractNumber,
musaned_visaNumber,
agency_id,
girl_id,
user_id
updatedBy,
updatedDate,

nea_date,
nea_status,
girl_id,
user_id,
updatedBy,
updatedDate,




enjaz_status,
enjaz_date,
enjaz_medical,
medical_id,
enjaz_medicalDate,
enjaz_wakala,
girl_id,
user_id,
updatedBy,
updatedDate,




embassy_status,
embassy_date,
embassy_visaForm,
embassy_medical,
girl_id,
user_id,
updatedBy,
updatedDate,
enjaz_number,






clearance_attestationList,
clearance_CertificateOfIncorporation,
clearance_status,
clearance_FullMedical,
clearance_GoodConduct,
clearance_PassportCopy,
clearance_GirlContract,
clearance_NextOfKinIDCopy,
clearance_VisaForm,
girl_id,
user_id,
updatedBy,
updatedDate,



travel_date,
travel_arrival,
travel_pregnancy,
travel_pcrStatus,
travel_pcrCode,
travel_pcrDate,
travel_tshirt,
travel_stampedClearanceForm,
travel_ticket,
travel_yellowFever,
girl_id,
user_id,
updatedBy,
updatedDate,




from girls ,
next_of_kin,
uploads, schools,school_names, musaned,nea, enjaz, embassy, clearance, travel 
WHERE 
girls.girl_id=schools.girl_id
and
girls.girl_id=next_of_kin.girl_id
and
girls.girl_id=uploads.girl_id
and
girls.girl_id=musaned.girl_id
and
girls.girl_id=nea.girl_id
and
girls.girl_id=musaned.girl_id
and
girls.girl_id=enjaz.girl_id
and
girls.girl_id=embassy.girl_id
and
girls.girl_id=clearance.girl_id
and
girls.girl_id=travel.girl_id
AND
branches.branch_id=users.branch_id
AND
users.user_id=girls.user_id
  ";