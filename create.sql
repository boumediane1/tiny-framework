use laracasts;

create table users
(
    id    int primary key auto_increment,
    name  varchar(255) not null,
    email varchar(255) not null unique
);

create table notes
(
    id      int primary key auto_increment,
    body    text not null,
    user_id int  not null,
    constraint fk_notes_users foreign key (user_id) references users (id) on delete cascade
);

insert into users (name, email)
values ('Jeffery Way', 'jeffery@example.com');

insert into users (name, email)
values ('Otmane', 'otmane@example.com');

insert into notes (body, user_id)
values ('PHP for Beginners is the best!', 1);

insert into notes (body, user_id)
values ('Machine Learning', 1);

insert into notes (body, user_id)
values ('AI', 2);
