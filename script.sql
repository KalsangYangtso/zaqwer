
drop database  if exists bookazon;
create database bookazon;

use  bookazon ;


CREATE TABLE CUSTOMER
(
  CID INT NOT NULL,
  CFName varchar(25) NOT NULL,
  CLName varchar(25) NOT NULL,
  CUserName varchar(25) NOT NULL,
  CPassword varchar(25) NOT NULL,
  CBBuildingNo char(25) NOT NULL,
CBAptNo char(15) NOT NULL,
CBStreet/Avenue varchar(25) NOT NULL,
CBCity varchar(25) NOT NULL,
CBState varchar(25) NOT NULL,
CBZipcode numeric (15) NOT NULL,
CSBuildingNo char(25) NOT NULL,
CSAptNo char(15) NOT NULL,
CSStreet/Avenue varchar(25) NOT NULL,
CSCity varchar(25) NOT NULL,
CSState varchar(25) NOT NULL,
CSZipcode numeric (15) NOT NULL,
  
  PRIMARY KEY (CID),
  UNIQUE (CUserName)
);

CREATE TABLE PRODUCT
(
  PID INT NOT NULL,
  PName  varchar(25) NOT NULL,
  PPrice INT NOT NULL,
  Quantity INT NOT NULL,
  PRIMARY KEY (PID)
);

CREATE TABLE TRANSACTIONS
(
  TID  varchar(10) NOT NULL,
  TDATE date NOT NULL,
  TTotal INT NOT NULL,
  PRIMARY KEY (TID)
);

CREATE TABLE CART
(
  CID INT NOT NULL,
  PRIMARY KEY (CID),
  FOREIGN KEY (CID) REFERENCES CUSTOMER(CID)
);

CREATE TABLE INCLUDES
(
  NoOfitems INT ,
  SoldPrice INT ,
  PID INT NOT NULL,
  TID varchar(10) NOT NULL,
  PRIMARY KEY (PID, TID),
  FOREIGN KEY (PID) REFERENCES PRODUCT(PID),
  FOREIGN KEY (TID) REFERENCES TRANSACTIONS(TID)
);

CREATE TABLE PLACES
(
  TID varchar(10) ,
  CID INT,
  PRIMARY KEY (TID, CID),
  FOREIGN KEY (TID) REFERENCES TRANSACTIONS(TID),
  FOREIGN KEY (CID) REFERENCES CUSTOMER(CID)
);

CREATE TABLE CUSTOMER_CCreditcards
(
  CCreditcards  varchar(25) NOT NULL,
  CID INT NOT NULL,
  PRIMARY KEY (CCreditcards, CID),
  FOREIGN KEY (CID) REFERENCES CUSTOMER(CID)
);

CREATE TABLE isAdded
(
  PID INT NOT NULL,
  CID INT NOT NULL,
  FOREIGN KEY (PID) REFERENCES PRODUCT(PID),
  FOREIGN KEY (CID) REFERENCES CART(CID)
);

