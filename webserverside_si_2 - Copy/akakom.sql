create database akakom ; 

create table mhs (
  id int primary key auto_increment ,
  nim varchar(11),
  nama varchar(25)
);

insert into mhs(nim, nama) values ('0999','amir') ;
insert into mhs(nim, nama) values ('1000','mira') ;
insert into mhs(nim, nama) values ('1001','ari') ;

select * from mhs ;

select * from mhs where nim = '1000';

update mhs set nama='ira' where nim = '1000';

delete from mhs where nim = '1000'; 
