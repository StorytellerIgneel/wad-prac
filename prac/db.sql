create database restaurant;
use restaurant;

create table orders(
    order_id int(11) not null auto_increment,
    name VARCHAR(50) not null,
    address VARCHAR(100),
    phone VARCHAR(20),
    email VARCHAR(20),
    food VARCHAR(20),
    addOns VARCHAR(50),
    instruction VARCHAR(250),
    order_time timestamp default current_timestamp,
    primary key (order_id)
);