create database vue_ecommerce;
use vue_ecommerce;
create table users (
    id int primary key auto_increment,
    name varchar(100) not null,
    email varchar(100) not null unique,
    password varchar(255) not null,
    created_at timestamp default current_timestamp,
    updated_at timestamp default current_timestamp on update current_timestamp
);
create table customer_groups (
    id int primary key auto_increment,
    name varchar(100) not null,
    description text
);
create table categories (
    id int primary key auto_increment,
    name varchar(100) not null,
    description text
);
create table products (
    id int primary key auto_increment,
    name varchar(100) not null,
    price decimal(10,2) not null,
    description text,
    category_id int,
    foreign key (category_id) references categories(id)
);
create table orders (
    id int primary key auto_increment,
    user_id int not null,
    total decimal(10,2) not null,
    created_at timestamp default current_timestamp,
    updated_at timestamp default current_timestamp on update current_timestamp,
    foreign key (user_id) references users(id)
);