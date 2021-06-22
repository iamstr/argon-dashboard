CREATE VIEW girls AS

SELECT girls.girl_id,school_names.school_name,schools.school_start,schools.school_end,schools.school_cert,next_of_kin.next_of_kin_fullname,next_of_kin.next_of_kin_IDnumber,next_of_kin.next_of_kin_relationship,next_of_kin.next_of_kin_phone,next_of_kin.next_of_kin_fullname2,next_of_kin.next_of_kin_IDnumber2,next_of_kin.next_of_kin_phone2,next_of_kin. next_of_kin_relationship2 from girls ,
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