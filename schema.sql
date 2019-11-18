create DATABASE yeti_cave;
USE yeti_cave;

create TABLE category (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category_id INT,
    category_name text NOT NULL
);

create TABLE lot (
    id INT AUTO_INCREMENT PRIMARY KEY,
    time_start DATETIME,
    lot_name text NOT NULL,
    lot-about varchar(300) NOT NULL,
    lot-img Binary,
    price_start FLOAT NOT NULL,
    time_end DATETIME NOT NULL,
    step DECIMAL(10, 2)
);

create TABLE bet (
    id INT AUTO_INCREMENT PRIMARY KEY,
    bet_time DATETIME,
    bet_buy DECIMAL(10, 2) NOT NULL    
);

create TABLE client (
    check_in DATA,
    email varchar(300) NOT NULL UNIQUE,
    client_name varchar(128) NOT NULL,
    pass varchar(300) NOT NULL UNIQUE,
    contact varchar(300) NOT NULL UNIQUE
    );


