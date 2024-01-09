-- Active: 1700670386111@@127.0.0.1@3306@final_project
CREATE TABLE Date(  
    Date_id int NOT NULL PRIMARY KEY,
    Date_day VARCHAR(10)
);

CREATE TABLE Company(  
    Company_id int NOT NULL PRIMARY KEY,
    Company_name VARCHAR(15)
);

CREATE TABLE APPLE_daily_table(  
    Company_id int NOT NULL,
    Date_id int NOT NULL PRIMARY KEY,
    Open FLOAT,
    High FLOAT,
    Low FLOAT,
    Close FLOAT,
    Adj_Close FLOAT,
    Volume BIGINT,
    Foreign Key (Company_id) REFERENCES Company (Company_id)
);

CREATE TABLE AMAZON_daily_table(  
    Company_id int NOT NULL,
    Date_id int NOT NULL PRIMARY KEY,
    Open FLOAT,
    High FLOAT,
    Low FLOAT,
    Close FLOAT,
    Adj_Close FLOAT,
    Volume BIGINT,
    Foreign Key (Company_id) REFERENCES Company (Company_id)
);

CREATE TABLE GOOGLE_daily_table(  
    Company_id int NOT NULL,
    Date_id int NOT NULL PRIMARY KEY,
    Open FLOAT,
    High FLOAT,
    Low FLOAT,
    Close FLOAT,
    Adj_Close FLOAT,
    Volume BIGINT,
    Foreign Key (Company_id) REFERENCES Company (Company_id)
);

CREATE TABLE META_daily_table(  
    Company_id int NOT NULL,
    Date_id int NOT NULL PRIMARY KEY,
    Open FLOAT,
    High FLOAT,
    Low FLOAT,
    Close FLOAT,
    Adj_Close FLOAT,
    Volume BIGINT,
    Foreign Key (Company_id) REFERENCES Company (Company_id)
);

CREATE TABLE NETFLIX_daily_table(  
    Company_id int NOT NULL,
    Date_id int NOT NULL PRIMARY KEY,
    Open FLOAT,
    High FLOAT,
    Low FLOAT,
    Close FLOAT,
    Adj_Close FLOAT,
    Volume BIGINT,
    Foreign Key (Company_id) REFERENCES Company (Company_id)
);

