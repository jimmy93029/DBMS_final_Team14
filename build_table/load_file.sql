set global local_infile=1;
load data local infile 'C://Users//cheng//Desktop//vscode//database//build_table//Date.csv'
into table Date
fields terminated by ','
enclosed by '"'
lines terminated by '\n'
ignore 1 lines;

load data local infile 'C://Users//cheng//Desktop//vscode//database//build_table//Company.csv'
into table Company
fields terminated by ','
enclosed by '"'
lines terminated by '\n'
ignore 1 lines;

load data local infile 'C://Users//cheng//Desktop//vscode//database//build_table//APPLE_daily_table.csv'
into table APPLE_daily_table
fields terminated by ','
enclosed by '"'
lines terminated by '\n'
ignore 1 lines;

load data local infile 'C://Users//cheng//Desktop//vscode//database//build_table//AMAZON_daily_table.csv'
into table AMAZON_daily_table
fields terminated by ','
enclosed by '"'
lines terminated by '\n'
ignore 1 lines;

load data local infile 'C://Users//cheng//Desktop//vscode//database//build_table//GOOGLE_daily_table.csv'
into table GOOGLE_daily_table
fields terminated by ','
enclosed by '"'
lines terminated by '\n'
ignore 1 lines;

load data local infile 'C://Users//cheng//Desktop//vscode//database//build_table//META_daily_table.csv'
into table META_daily_table
fields terminated by ','
enclosed by '"'
lines terminated by '\n'
ignore 1 lines;

load data local infile 'C://Users//cheng//Desktop//vscode//database//build_table//NETFLIX_daily_table.csv'
into table NETFLIX_daily_table
fields terminated by ','
enclosed by '"'
lines terminated by '\n'
ignore 1 lines;
