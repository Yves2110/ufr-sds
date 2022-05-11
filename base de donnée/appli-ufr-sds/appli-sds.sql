/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  06/05/2022 01:00:30                      */
/*==============================================================*/


drop table if exists Admin;

drop table if exists Etudiants;

drop table if exists tuteur_legal;

/*==============================================================*/
/* Table : Admin                                                */
/*==============================================================*/
create table Admin
(
   mot_de_passe         varchar(254) not null,
   nom                  varchar(254),
   prenom               varchar(254),
   telephone            int,
   email                varchar(254),
   primary key (mot_de_passe)
);

/*==============================================================*/
/* Table : Etudiants                                            */
/*==============================================================*/
create table Etudiants
(
   email                varchar(254) not null,
   tut_telephone        int,
   mot_de_passe         varchar(254) not null,
   nom                  varchar(254),
   prenom               varchar(254),
   date_de_naissance    int,
   telephone            int,
   primary key (email)
);

/*==============================================================*/
/* Table : tuteur_legal                                         */
/*==============================================================*/
create table tuteur_legal
(
   telephone            int not null,
   nom_et_prenom        varchar(254),
   primary key (telephone),
   key AK_Identifiant_2 (telephone)
);

alter table Etudiants add constraint FK_Association_1 foreign key (tut_telephone)
      references tuteur_legal (telephone) on delete restrict on update restrict;

alter table Etudiants add constraint FK_Association_2 foreign key (mot_de_passe)
      references Admin (mot_de_passe) on delete restrict on update restrict;

